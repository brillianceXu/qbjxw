<?php
namespace Home\Controller;
class ServiceController extends BaseController {
    public function consult(){
    	$Cmodel=M("category");
    	$model=M("news");
    	$cate=$Cmodel->where("pid=4 and status=2")->select();
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

    	$this->assign("cname",$cname);
    	$this->assign("cid",$cid);
    	$this->assign("page",$page);
    	$this->assign("totalPage",$totalPage);
    	$this->assign("article_count",$article_count);
    	$this->assign("cate",$cate);
    	$this->assign("mess",$mess);
        $this->display();
    }
    public function index(){
    	$Cmodel=M("category");
    	$model=M("news");
    	$cate=$Cmodel->where("pid=4 and status=2")->select();
    	$cid=I("cid");
    	$where['cid']=$cid;
    		

    	$mess=$model->where($where)->find();
    	// $cname=$Cmodel->where("id=".$cid)->getField("cname");

    	// print_r($mess);exit;
    	$this->assign("cid",$cid);
    	// $this->assign("cname",$cname);
    	$this->assign("cate",$cate);
    	$this->assign("mess",$mess);
        $this->display();
    }
}