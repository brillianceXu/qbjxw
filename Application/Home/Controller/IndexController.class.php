<?php
namespace Home\Controller;
class IndexController extends BaseController {
    public function index(){
        // $arr['ip']=$_SERVER['REMOTE_ADDR'];
        // $res=M("views")->add($arr);

        $model=M("news");
        $cmodel=M("category");
    	$gmodel=M("goods");
        
        $where['status']=1;
        $where['cid']=25;
        // $where['is_recommend'] = 1;
        // 推荐新闻
        $gonggao=$model->where($where)->limit("0,5")->order("sort DESC,news_time DESC,id DESC")->select();
        $this->assign("gonggao",$gonggao);

        
        $where['cid']=array("in","17,20,21,22,23");
        $gaikuang=$model->where($where)->limit("0,4")->order("sort DESC,news_time DESC,id DESC")->select();
        $this->assign("gaikuang",$gaikuang);
        $where['cid']=array("in","27,28,29,30");
        $xinwen=$model->where($where)->limit("0,4")->order("sort DESC,news_time DESC,id DESC")->select();
        $this->assign("xinwen",$xinwen);

        $cate=M("category")->where("pid = 4 and status = 2")->select();
        for ($i=0; $i < count($cate); $i++) { 
            $str.=$cate[$i]['id'].",";
        }
        $str=trim($str);
        $where['cid']=array("in",$str);
        $fuwu=$model->where($where)->order("sort DESC,news_time DESC,id DESC")->select();
        $this->assign("fuwu",$fuwu);
        // 首页轮播小图
        $pics=M("image")->where("cid = 8 and status = 1")->order("id ASC")->select();
        $this->assign("pics",$pics);
        // 新闻资讯上广告图
        $newspics=M("image")->where("cid = 9 and status = 1")->find();
        // 服务中心上广告图
        $servicepics=M("image")->where("cid = 10 and status = 1")->find();
        $this->assign("newspics",$newspics);
        $this->assign("servicepics",$servicepics);
        // print_r($smallpics);exit;
        // // 合作企业
        // $ope_mess=M("image")->where("cid = 47 and status = 1")->order("id DESC")->select();
        
        // $this->assign("ope_mess",$ope_mess);
        $goods_cate=$cmodel->where("pid = 2 and status = 1")->select();
        for($i=0;$i<count($goods_cate);$i++){
            $arr[]=$cmodel->where("status = 1 and pid=".$goods_cate[$i]['id'])->getField("id");
            $cond=implode(",", $arr);
            $arr=array();
            $cond=trim($cond);
            $exp['cid']=array("in",$cond);
            $exp['status']=1;
            $goods[]=$gmodel->where($exp)->select();
        }

        // print_r($goods);exit;
        $this->assign("goods_cate",$goods_cate);

        $model=M("link");

        $links=$model->where("status = 1")->order("id DESC")->select();
        
        $this->assign("links",$links);

        $this->assign("goods",$goods);
    	$this->display();
    }
}