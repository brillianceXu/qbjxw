<?php
namespace Mobile\Controller;
class ServiceController extends BaseController {
    public function index(){
    	$model=M("service");
    	$Cmodel=M("category");

    	$cid=I('id');
    	$cid=empty($cid)?38:$cid;

    	$where['cid']=$cid;
    	$where['status']=1;

    	$mess=$model->where($where)->find();

        $banner=$this->get_banner();
        $this->assign("banner",$banner);

        $this->assign("mess",$mess);
    	$this->assign("cid",$cid);
    	$this->display();
    }
    public function cloud(){
        $model=M("service");
        $Cmodel=M("category");

        $cid=I('id');
        $cid=empty($cid)?38:$cid;

        $where['cid']=$cid;
        $where['status']=1;

        $mess=$model->where($where)->find();

        $banner=$this->get_banner();
        $this->assign("banner",$banner);

        $this->assign("mess",$mess);
        $this->display();
    }
    public function ajaxdone(){
        $typename=I('typename');
        $volume=I('volume');
        $truename=I('truename');
        $telphone=I('telphone');
        $email=I('email');
        $company=I('company');
        $money=I('money');
        $this->checkCode();

        $title="hi，我是惠诚机器小超人，有客户下订单购买云主机了，快去处理吧！";
        $content="客户姓名：".$truename."<br/>";
        $content.="客户电话：".$telphone."<br/>";
        $content.="客户邮箱：".$email."<br/>";
        $content.="公司名称：".$company."<br/>";
        $content.="产品类型：".$typename."<br/>";
        $content.="购买量：".$volume."年<br/><br/>";
        $content.="<b style='font-size:18px;color:red;'>订单金额：".$money."元</b><br/>";

        $getEmail=C("MAIL_USERNAME");
        $result=SendMail($getEmail,$title,$content);
        if(!$result){
            $this->ajaxReturn("300");
        }else{
            $ctitle="hi，我是惠诚机器小超人，欢迎购买惠诚云主机，工作人员将会在1-2个工作日内与您联系，完成购买！";
            $ccontent="购买信息如下：<br/>";
            $ccontent.="姓名：".$truename."<br/>";
            $ccontent.="电话：".$telphone."<br/>";
            $ccontent.="邮箱：".$email."<br/>";
            $ccontent.="公司名称：".$company."<br/>";
            $ccontent.="产品类型：".$typename."<br/>";
            $ccontent.="购买量：".$volume."年<br/><br/>";
            $ccontent.="<b style='font-size:18px;color:red;'>订单金额：".$money."元</b><br/>";
            $res=SendMail($email,$ctitle,$ccontent);
            if(!$res){
                $this->ajaxReturn("400");
            }else{
                $this->ajaxReturn("200");
            }
            
        }
    }
    public function verify()
    {
        $config =    array(
            'fontSize'    =>    160,    // 验证码字体大小
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
            $this->ajaxReturn("500");
        }
    }
}