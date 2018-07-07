<?php
namespace Home\Controller;
class BusinessController extends BaseController {
    public function index(){
        $Cmodel=M("category");
        $model=M("news");
        $cate=$Cmodel->where("pid=5 and status=2")->select();
    	$id=I("id");
    	$id=empty($id)?1:$id;

    	// $cname=$Cmodel->where("id=".$cid)->getField("cname");
        // $con['id']=$id;
    	$where['cid']=40;
        $where['status']=1;
        $gonggao=$model->where($where)->limit("0,10")->select();
        $where['cid']=41;
    	$caiwu=$model->where($where)->limit("0,10")->select();

        $article=$model->where($con)->find();

        $this->assign("gonggao",$gonggao);
        $this->assign("caiwu",$caiwu);
        $this->assign("cate",$cate);
    	$this->assign("article",$article);
        $this->display();
    }
    public function show(){
        $Cmodel=M("category");
        $model=M("news");
        $cate=$Cmodel->where("pid=5 and status=2")->select();
        $cid=I("cid");
        

        // $cname=$Cmodel->where("id=".$cid)->getField("cname");
        // $con['id']=$id;
        $where['cid']=$cid;
        $page=$_GET['page'];
        $page=($page==null)?"1":$page;
        $pageSize=20;
        $article_count=$model->where($where)->count();
        $totalPage=ceil($article_count/$pageSize);
        $start=($page-1)*$pageSize;

        $mess=$model->where($where)->limit($start,$pageSize)->select();

        $article=$model->where($con)->find();

        $this->assign("mess",$mess);
        $this->assign("cate",$cate);
        $this->assign("article",$article);
        $this->display();
    }
    public function detail(){
    	$Cmodel=M("category");
    	$model=M("news");
    	$cate=$Cmodel->where("pid=5 and status=2")->select();
    	$id=I("id");
    	$where['id']=$id;
    		

    	$mess=$model->where($where)->find();
    	$cid=$mess['cid'];
    	// $cname=$Cmodel->where("id=".$cid)->getField("cname");

    	// print_r($mess);exit;
    	$this->assign("cid",$cid);
    	// $this->assign("cname",$cname);
    	$this->assign("cate",$cate);
    	$this->assign("mess",$mess);
        $this->display();
    }
    public function relate(){
        $model=M("news");
        $cmodel=M("category");
        $cid=I("cid");
        $cid=empty($cid)?17:$cid;

        $cate=$cmodel->where("pid =5  and status = 2")->select();
        // $cname=$Cmodel->where("id=".$cid)->getField("cname");
        
        $where['cid']=$cid;
        $mess=$model->where($where)->find();

        $article=$model->where($con)->find();

        $this->assign("cate",$cate);
        $this->assign("mess",$mess);
        $this->assign("article",$article);
        $this->display();
    }
}