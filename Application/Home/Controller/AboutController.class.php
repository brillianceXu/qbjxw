<?php
namespace Home\Controller;
class AboutController extends BaseController {
    public function get_banner(){
        $imodel=M("image");
        $banner=$imodel->where("cid = 11 and status = 1")->getField("route");
        return $banner;
    }
    public function about(){
    	$model=M("news");
        $cmodel=M("category");
        
    	$cid=I("cid");
    	$cid=empty($cid)?17:$cid;

        $banner=$this->get_banner();
        $this->assign("banner",$banner);

        $cate=$cmodel->where("pid = 1 and status = 2")->select();
    	$cname=$cmodel->where("id=".$cid)->getField("cname");
        
        $where['cid']=$cid;
        $where['status'] = 1;
    	$mess=$model->where($where)->find();
        // print_r($mess);exit;
        // $article=$model->where($con)->find();

        $this->assign("cate",$cate);
        $this->assign("cname",$cname);
        
        $this->assign("mess",$mess);
    	// $this->assign("article",$article);
        $this->display();
    }
    public function index(){
        $model=M("news");
        $cmodel=M("category");
        $cid=I("cid");
        $cate=$cmodel->where("pid = 1 and status = 2")->select();
        $cname=$cmodel->where("id=".$cid)->getField("cname");

        $con['id']=$id;
        $where['cid']=$cid;
        $where['status'] = 1;
        $page=$_GET['page'];
        $page=($page==null)?"1":$page;
        $pageSize=20;
        $article_count=$model->where($where)->count();
        $totalPage=ceil($article_count/$pageSize);
        $start=($page-1)*$pageSize;

        $mess=$model->where($where)->limit($start,$pageSize)->select();
        $this->assign("cid", $cid);
        $this->assign("page", $page);
        $this->assign("totalPage", $totalPage);
        $this->assign("article_count", $article_count);

        $banner=$this->get_banner();
        $this->assign("banner",$banner);

        $this->assign("cate",$cate);
        $this->assign("cname",$cname);
        $this->assign("mess",$mess);
        $this->assign("article",$article);
        $this->display();
    }
    public function detail(){
    	$Cmodel=M("category");
    	$model=M("news");
    	$cate=$Cmodel->where("pid=1 and status=2")->select();
    	$id=I("id");
    	$where['id']=$id;
        $where['status'] = 1;
    		

    	$mess=$model->where($where)->find();
    	$cid=$mess['cid'];
    	// $cname=$Cmodel->where("id=".$cid)->getField("cname");

    	// print_r($mess);exit;
        $banner=$this->get_banner();
        $this->assign("banner",$banner);
    	$this->assign("cid",$cid);
    	// $this->assign("cname",$cname);
    	$this->assign("cate",$cate);
    	$this->assign("mess",$mess);
        $this->display();
    }
}