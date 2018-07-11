<?php
namespace Home\Controller;
class NewsController extends BaseController {
    public function index(){
    	$Cmodel=M("category");
    	$model=M("news");
    	$cate=$Cmodel->where("pid=3 and status=2")->select();
    	$cid=I("cid");
    	$cid=empty($cid)?$cate[0]['id']:$cid;

    	// $cname=$Cmodel->where("id=".$cid)->getField("cname");
    	$where['cid']=$cid;
    	$page=$_GET['page'];
      	$page=($page==null)?"1":$page;
      	$pageSize=20;
      	$article_count=$model->where($where)->count();
      	$totalPage=ceil($article_count/$pageSize);
      	$start=($page-1)*$pageSize;

    	$mess=$model->where($where)->limit($start,$pageSize)->select();

        $con['cid']=25;
        $con['status']=1;
        $gongshi=$model->where($con)->limit("0,6")->select();
        $this->assign("gongshi",$gongshi);
        $con['cid']=26;
        $zhaopin=$model->where($con)->limit("0,6")->select();
        $this->assign("zhaopin",$zhaopin);
        $con['cid']=27;
        $xinwen=$model->where($con)->limit("0,6")->select();
        $this->assign("xinwen",$xinwen);
        $con['cid']=28;
        $shichang=$model->where($con)->limit("0,6")->select();
        $this->assign("meiti",$meiti);
        $con['cid']=29;
        $meiti=$model->where($con)->limit("0,6")->select();
        $this->assign("meiti",$meiti);
        $con['cid']=30;
        $hangye=$model->where($con)->limit("0,6")->select();
        $this->assign("hangye",$hangye);

        $cond['status']=1;
        $cond['cid']=46;
        $image=M("image")->where()->select();
        $banner=$this->get_banner();
        $this->assign("banner",$banner);
        $this->assign("image",$image);
    	$this->assign("cname",$cname);
    	$this->assign("cid",$cid);
    	$this->assign("page",$page);
    	$this->assign("totalPage",$totalPage);
    	$this->assign("article_count",$article_count);
    	$this->assign("cate",$cate);
    	$this->assign("mess",$mess);
        $this->display();
    }
    public function news(){
        $Cmodel=M("category");
        $model=M("news");
        $cate=$Cmodel->where("pid=3 and status=2")->select();
        $cid=I("cid");
        $cid=empty($cid)?$cate[0]['id']:$cid;

        $cname=$Cmodel->where("id=".$cid)->getField("cname");
        $where['cid']=$cid;
        $where['status']=1;
        $page=$_GET['page'];
        $page=($page==null)?"1":$page;
        $pageSize=20;
        $article_count=$model->where($where)->count();
        $totalPage=ceil($article_count/$pageSize);
        $start=($page-1)*$pageSize;

        $mess=$model->where($where)->limit($start,$pageSize)->select();
        $banner=$this->get_banner();
        $this->assign("banner",$banner);
        $this->assign("cname",$cname);
        $this->assign("cid",$cid);
        $this->assign("page",$page);
        $this->assign("totalPage",$totalPage);
        $this->assign("article_count",$article_count);
        $this->assign("cate",$cate);
        $this->assign("mess",$mess);
        $this->display();
    }
    public function detail(){
    	$Cmodel=M("category");
    	$model=M("news");
    	$cate=$Cmodel->where("pid=3 and status=2")->select();
    	$id=I("id");
    	$where['id']=$id;
    		

    	$mess=$model->where($where)->find();
    	$cid=$mess['cid'];
    	$cname=$Cmodel->where("id=".$cid)->getField("cname");
        $banner=$this->get_banner();
        $this->assign("banner",$banner);
    	// print_r($mess);exit;
    	$this->assign("cid",$cid);
    	$this->assign("cname",$cname);
    	$this->assign("cate",$cate);
    	$this->assign("mess",$mess);
        $this->display();
    }
    public function get_banner(){
        $imodel=M("image");
        $banner=$imodel->where("cid = 13 and status = 1")->getField("route");
        return $banner;
    }
}