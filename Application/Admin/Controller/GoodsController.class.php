<?php
namespace Admin\Controller;
class GoodsController extends BaseController {
    public function index(){
      $model=M("goods");
      $Cmodel=M("category");
      // $where['status']=1;

      $cond['status']=1;
      $cond['pid']=2;
      $cate=$Cmodel->where($cond)->select();
      foreach ($cate as $k => $v) {
          $child=$Cmodel->where("pid=".$v['id'])->select();
          $cate[$k]['child']=$child;
      }
      $cid=I("cid");
      if($cid){
        $where['cid']=$cid;
      }

      $page=$_GET['page'];
      $page=($page==null)?"1":$page;
      $pageSize=8;
      $article_count=$model->where($where)->count();
      $totalPage=ceil($article_count/$pageSize);
      $start=($page-1)*$pageSize;
      
      $article=$model->where($where)->order("id DESC")->limit($start,$pageSize)->select();

      // print_r($article);exit;
      $this->assign("cate",$cate);
      $this->assign("page",$page);
      $this->assign("cid",$cid);
      $this->assign("str",$str);
      $this->assign("keywords",$keywords);
      $this->assign("totalPage",$totalPage);
      $this->assign("pageSize",$pageSize);
      $this->assign("article_count",$article_count);
      $this->assign("article",$article);
      $this->display();
    }
    public function goods_add()
    {
      $model=M("goods");
      $Cmodel=M("category");
      // $where['status'] = 1;
      // $where['pid'] = array("neq","0");
      // $category=$Cmodel->where($where)->select();
      // $cate=$this->unlimitedForLayer($category);
      $cond['status']=1;
      $cond['pid']=2;
      $cate=$Cmodel->where($cond)->select();
      foreach ($cate as $k => $v) {
          $child=$Cmodel->where("pid=".$v['id'])->select();
          $cate[$k]['child']=$child;
      }
      $id=$_GET['id'];
      if($_POST){
        // print_r($_POST);exit;
        // exit();
        $data=I();
        // $data['title']=$_POST['title'];
        // $data['cid']=61;
        // $data['aid']=$_SESSION['usermsg']['id'];
        // $data['keywords']=$_POST['keywords'];
        // $data['author']=$_POST['author'];
        // $data['source']=$_POST['source'];
        // $data['description']=$_POST['description'];
        // $data['summary']=$_POST['summary'];
        // $data['news_time']=$_POST['news_time'];
        // $data['content']=$_POST['content'];
        $image=$_FILES['picture'];
        if($image['name'] != '')
        {
          $oldroute=$info['picture'];
          if($oldroute){
            unlink($_SERVER['DOCUMENT_ROOT'].$oldroute);
          }
            $image=$this->upload_one($image);
            $data['picture']=$image;
        }
        $data['status']=1;
        $data['published']=time();
        
        // print_r($data);exit;
        if($id){
          // $data['update_time']=time();
          $result=$model->where("id = ".$id)->save($data);
          $log_mes="编辑产品信息";
        }
        else{
          $data['published']=time();
          $result=$model->add($data);
          $log_mes="添加产品";
        }
        
        if($result){
          $this->add_log($log_mes,1,$log_mes."：".$data['title']);
          $this->redirect("Goods/index");
        }else{
          $this->error($log_mes."失败");
        }
      }else{
        if($id){
          $mes=$model->where("id =".$id)->find();
          $this->assign("mes",$mes);
        }
        
        $this->assign("cate",$cate);
        $this->assign("article",$article);
        $this->assign("controller_name","Goods");
        $this->assign("action_name","index");
        $this->display();
      }
    }
    public function category_list(){
      $model=M("category");
      
      $where['status']=1;
      $where['pid'] = array("neq","0");
      $category=$model->where($where)->order("pid ASC,sort ASC,id ASC")->select();
      for ($i=0; $i < count($category); $i++) { 
        $category[$i]['pname']=$model->where("id = ".$category[$i]['pid'])->getField("cname");
      }
      $cat_count=count($category);
      
      
      $this->assign("category",$category);
      $this->assign("cat_count",$cat_count);
      $this->assign("controller_name","Goods");
      $this->assign("type",$type);
      $this->display();
    }
    public function category_add(){
      $model=M("category");
      $id=$_GET['id'];
     

      if($_POST){
        // print_r($type);exit;
          $data['cname']=$_POST['cname'];

          $data['status']=1;
          $data['note']=$_POST['note'];
          $data['pid']=$_POST['pid'];
          $level=$model->where("id=".I("pid"))->getField("level");
          $level=$level+1;
          if($level > 3){
            $this->error("最多只能添加三级分类");
          }
          $data['level']=$level;
          $data['type']=1;
          
          if($id){
            $result=$model->where("id = ".$id)->save($data);
            $log_mes="修改分类";
          }else{
            $check=$model->where("status = ".$data['status']." and cname = '".$data['cname']."'")->find();
            if($check){
              $this->error("分类已存在");
            }
            $data['addtime']=time();
            $result=$model->add($data);
            $log_mes="添加分类";
          }
          if(!$result){
            $this->error($log_mes."失败");
          }else{
            $this->add_log($log_mes,1,$log_mes." [".$data['cname']."] 成功");
            $this->success($log_mes."成功");
          }

      }else{
          if($id){
            $mes=$model->where("id = ".$id)->find();
            $this->assign("mes",$mes);
          }
          // $where['pid'] = 0;
          $where['status'] = 1;
          $category=$model->where($where)->select();
          $category=$this->unlimitedForLayer($category);
          $this->assign("cate",$category);
          $this->assign("type",$type);
          $this->assign("controller_name","Goods");
          $this->assign("action_name","category_list");
          $this->display();
      }
    }
    public function photos(){
      $cid=I("cid");
      $model=M("image");
      $where['cid']=$cid;
      $where['status']=2;
      $mess=$model->where($where)->select();
      $this->assign("mess",$mess);
      $this->assign("cid",$cid);
      $this->assign("controller_name","Goods");
      $this->assign("action_name","index");
      $this->display();
    }
    public function photos_add()
    {
      $model=M("image");
      $cid=$_GET['cid'];
      if($_POST){
        // print_r($_POST);exit;
        // exit();
        $data['name']=I('name');
        $data['cid']=I('cid');
        $image=$_FILES['route'];
        if($image['name'] != '')
        {
          $oldroute=$info['route'];
          if($oldroute){
            unlink($_SERVER['DOCUMENT_ROOT'].$oldroute);
          }
            $image=$this->upload_one($image);
            $data['route']=$image;
        }
        $data['status']=2;
        $data['addtime']=time();
        
          $result=$model->add($data);
          $log_mes="添加产品图片";
        
        if($result){
          $this->add_log($log_mes,1,$log_mes."：".$data['title']);
          $this->success($log_mes."成功");
        }else{
          $this->error($log_mes."失败");
        }
      }else{
        $this->assign("cid",$cid);
        $this->assign("controller_name","Goods");
        $this->assign("action_name","index");
        $this->display();
      }
    }
     public function img_del(){
      $id=$_GET['id'];
      $model=M("image");
      $art_mes=$model->find($id);
      // $data['status']=0;
      $res=$model->delete($id);
      if($res){
        $this->add_log("图片删除",1,"删除图片:".$art_mes['name']);
        $this->ajaxReturn("200");
      }else{
        $this->ajaxReturn("400");
      }
    }
    public function del_cate(){
      $model=M("category");
      $id=$_GET['id'];
      // print_r($id);exit;
      $cate=$model->where("id = ".$id)->find();
      $result=$model->where("id = ".$id)->delete();
      // print_r($model->getLastSql());exit;
      if($result){
        $this->add_log("删除分类",1,"成功删除分类：".$cate['cname']);
        $this->ajaxReturn("200");
      }else{
        $this->ajaxReturn("400");
      }
    }
    public function done_sort(){
      $model=M("category");
      $id=$_GET['id'];
      $data['sort']=$_GET['sort'];
      $res=$model->where("id = ".$id)->save($data);
      if($res){
        $this->ajaxReturn("200");
      }else{
        $this->ajaxReturn("400");
      }
    }
    public function goods_up(){
      $model=M("goods");
      $where['id']=I("id");
      $data['status']=1;
      $result=$model->where($where)->save($data);
      if(!$result){
        $this->ajaxReturn("400");
      }else{
        $this->ajaxReturn("200");
      }
    }
    public function goods_down(){
      $model=M("goods");
      $where['id']=I("id");
      $data['status']=0;
      $result=$model->where($where)->save($data);
      if(!$result){
        $this->ajaxReturn("400");
      }else{
        $this->ajaxReturn("200");
      }
    }
}