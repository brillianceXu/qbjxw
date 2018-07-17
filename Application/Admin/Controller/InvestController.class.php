<?php
namespace Admin\Controller;
class InvestController extends BaseController {
    public function index(){
      $model=M("news");
      $Cmodel=M("category");
      $where['status']=1;

      $cid=61;
      $keywords=$_GET['keywords'];
      $where['cid']=$cid;
      if($keywords || $keywords !=''){
        $where['title|content']=array("like","%".$keywords."%");
        $str.="/keywords/".$keywords;
      }

      $page=$_GET['page'];
      $page=($page==null)?"1":$page;
      $pageSize=$_GET['pageSize'];
      $pageSize=($pageSize==null)?"10":$pageSize;
      $article_count=$model->where($where)->count();
      $totalPage=ceil($article_count/$pageSize);
      $start=($page-1)*$pageSize;
      
      $article=$model->where($where)->order("news_time DESC,id DESC")->limit($start,$pageSize)->select();
      for ($i=0; $i < count($article); $i++) { 
        $article[$i]['cname']=$Cmodel->where("id = ".$article[$i]['cid'])->getField("cname");
      }
      $pageArr=array("10","20","30","40","50");

      $this->assign("cate",$cate);
      $this->assign("pageArr",$pageArr);
      $this->assign("page",$page);
      $this->assign("str",$str);
      $this->assign("keywords",$keywords);
      $this->assign("totalPage",$totalPage);
      $this->assign("pageSize",$pageSize);
      $this->assign("article_count",$article_count);
      $this->assign("article",$article);
      $this->assign("controller_name","Content");
      $this->assign("action_name","invest");
      $this->display();
    }
    public function invest_add()
    {
      $model=M("news");
      $id=$_GET['id'];
      if($_POST){
        // print_r($_POST);exit;
        // exit();
        $data['title']=$_POST['title'];
        $data['cid']=61;
        $data['aid']=$_SESSION['usermsg']['id'];
        $data['keywords']=$_POST['keywords'];
        $data['author']=$_POST['author'];
        $data['source']=$_POST['source'];
        $data['description']=$_POST['description'];
        $data['summary']=$_POST['summary'];
        $data['news_time']=$_POST['news_time'];
        $data['content']=$_POST['content'];
        $data['status']=1;
        $data['published']=time();
        
        // print_r($data);exit;
        if($id){
          $data['update_time']=time();
          $result=$model->where("id = ".$id)->save($data);
          $log_mes="编辑企业文化";
        }
        else{
          $data['published']=time();
          $result=$model->add($data);
          $log_mes="添加企业文化";
        }
        
        if($result){
          $this->add_log($log_mes,1,$log_mes."：".$data['title']);
          $this->redirect("Invest/index");
        }else{
          $this->error($log_mes."失败");
        }
      }else{
        if($id){
          $mes=$model->where("id =".$id)->find();
          $this->assign("mes",$mes);
        }
        $this->assign("article",$article);
        $this->assign("controller_name","Content");
        $this->assign("action_name","invest");
        $this->display();
      }
    }
}