<?php
namespace Mobile\Controller;
class ParkController extends BaseController {
    public function index(){
    	$model=M("news");
    	$Cmodel=M("category");
    	$cid=intval(I('cid'));
        if($cid != 34 && $cid != 35 && $cid != 36){
            $cid=34;
        }
    	// $cid=$cid?34:$cid;
       
        $model=M("park");

        $where['cid']=$cid;
        $where['status']=1;
        $mess=$model->where($where)->find();

        $title=$mess['name'];
        $keywords=$mess['name'];
        $description=$mess['name'];
        $this->assign("title",$title);
        $this->assign("keywords",$keywords);
        $this->assign("description",$description);
        
        $this->assign("cid",$cid);
        $this->assign("mess",$mess);
    	$this->display();
    }
    public function photo(){
        $model=M("image");

        
        $cid=intval(I('cid'));
        if($cid != 34 && $cid != 35 && $cid != 36){
            $cid=34;
        }
        $cname=M("category")->where("id = ".$cid)->getField("cname");
        $mess=$model->where("status = 1 and cid = ".$cid)->select();     

        $this->assign("mess",$mess);
        $this->assign("cname",$cname);
        $this->assign("cid",$cid);
        $this->display();
    }
  
    public function verify()
    {
        $config =    array(
            'fontSize'    =>    100,    // 验证码字体大小
            'length'      =>    4,     // 验证码位数
            'useNoise'    =>    false, // 关闭验证码杂点
            'useImgBg'    =>    true,
            'fontSize'    =>    30,
            'bg'          =>    array(100,100,100),
        );
        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }
    public function checkCode()
    {
        $Verify = new \Think\Verify;
        if(!$Verify->check($_POST['code']))
        {
            $this->error("验证码错误！");
            return false;
        }
    }
    public function message(){
        $model=M("message");
        $this->checkCode();
        $data['username']=I('username');
        if(!$data['username']){
            $this->error("请输入您的姓名！");
        }
        $data['compname']=I('compname');
        if(!$data['compname']){
            $this->error("请输入公司名称！");
        }
        $data['comptype']=I('comptype');
        $data['needspace']=I('needspace');
        $data['email']=I('email');
        $data['mobile']=I('mobile');
        if(!$data['mobile']){
            $this->error("请输入手机号码！");
        }
        $data['needpark']=I('needpark');
        $data['note']=I('note');
        $data['applytime']=time();

        $res=$model->add($data);
        if($res){
            $this->success("申请提交成功，请等待客服人员与您联系","apply");
        }else{
            $this->error("申请提交失败，请重新提交");
        }
    }
    public function build_message(){
        $model=M("build_message");
        $this->checkCode();
        $data['username']=I('username');
        if(!$data['username']){
            $this->error("请输入您的姓名！");
        }
        $data['direction']=I('direction');
        $data['scale']=I('scale');
        $data['needspace']=I('needspace');
        $data['email']=I('email');
        $data['mobile']=I('mobile');
        if(!$data['mobile']){
            $this->error("请输入手机号码！");
        }
        $data['note']=I('note');
        $data['applytime']=time();

        $res=$model->add($data);
        if($res){
            $this->success("创业需求提交成功，请等待客服人员与您联系","build");
        }else{
            $this->error("创业需求提交失败，请重新提交");
        }
    }
}