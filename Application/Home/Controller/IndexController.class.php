<?php
namespace Home\Controller;
class IndexController extends BaseController {
    public function index(){
        // $arr['ip']=$_SERVER['REMOTE_ADDR'];
        // $res=M("views")->add($arr);

    	$model=M("news");
        $cate=M("category")->where("pid = 2 and status = 2")->select();
        for ($i=0; $i < count($cate); $i++) { 
            $str.=$cate[$i]['id'].",";
        }
        $str=trim($str);
        $where['status']=1;
        $where['cid']=array("in",$str);
        // $where['is_recommend'] = 1;
        // 推荐新闻
        $new_news=$model->where($where)->limit("0,5")->order("sort DESC,news_time DESC,id DESC")->select();
        $this->assign("new_news",$new_news);
        
        // 首页左侧轮播小图
        $pics=M("image")->where("cid = 8 and status = 1")->order("id ASC")->select();
        $this->assign("pics",$pics);
        // 首页右侧轮播小图
        $newspics=M("image")->where("cid = 9 and status = 1")->find();
        $servicepics=M("image")->where("cid = 10 and status = 1")->find();
        $this->assign("newspics",$newspics);
        $this->assign("servicepics",$servicepics);
        // print_r($smallpics);exit;
        // // 合作企业
        // $ope_mess=M("image")->where("cid = 47 and status = 1")->order("id DESC")->select();
        
        // $this->assign("ope_mess",$ope_mess);
        $goods_cate=M("category")->where("pid = 2 and status = 1")->select();

        $gmodel=M("goods");
        $goods=$gmodel->where("cid = 5")->select(); 
        $this->assign("goods_cate",$goods_cate);

        $model=M("link");

        $links=$model->where("status = 1")->order("id DESC")->select();
        
        $this->assign("links",$links);

        $this->assign("goods",$goods);
    	$this->display();
    }
}