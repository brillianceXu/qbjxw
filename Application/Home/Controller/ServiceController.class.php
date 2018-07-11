<?php
namespace Home\Controller;
class ServiceController extends BaseController {
    public function consult(){
    	$Cmodel=M("category");
    	$model=M("message");
    	$cate=$Cmodel->where("pid=4 and status=2")->select();
    	

    	// $cname=$Cmodel->where("id=".$cid)->getField("cname");
    	$where['status']=2;
    	$page=$_GET['page'];
      	$page=($page==null)?"1":$page;
      	$pageSize=20;
      	$article_count=$model->where($where)->count();
      	$totalPage=ceil($article_count/$pageSize);
      	$start=($page-1)*$pageSize;

    	$mess=$model->where($where)->limit($start,$pageSize)->order("id desc")->select();

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
    public function save_msg(){
        $data=I();
        $data['addtime']=time();
        $model=M("message");
        $res=$model->add($data);
        if(!$res){
            $this->ajaxReturn("400");
        }else{
            $this->ajaxReturn("200");
        }
    }
    public function verify()
    {
        $config =    array(
            'fontSize'    =>    100,    // 验证码字体大小
            'length'      =>    4,     // 验证码位数
            'useNoise'    =>    false, // 关闭验证码杂点
            // 'useImgBg'    =>    true,
            'fontSize'    =>    30
        );
        $Verify = new \Think\Verify($config);
        // $Verify->codeSet = '0123456789afdsawqerqrqwerqrwqrqrqrsdffgdfghszdvvxzcvzxvcw'; 
        $Verify->entry();
    }
    public function checkCode()
    {
        $Verify = new \Think\Verify;
        if(!$Verify->check(I('code')))
        {
            $this->ajaxReturn("400");
        }else{
            $this->ajaxReturn("200");
        }
    }
}