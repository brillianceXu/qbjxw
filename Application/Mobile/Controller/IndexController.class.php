<?php
namespace Mobile\Controller;
class IndexController extends BaseController {
    public function index(){
        $arr['ip']=$_SERVER['REMOTE_ADDR'];
        $res=M("views")->add($arr);

    	$model=M("news");
        $cate=M("category")->where("pid = 2 and status = 2")->select();
        for ($i=0; $i < count($cate); $i++) { 
            $str.=$cate[$i]['id'].",";
        }
        $str=trim($str);
        $where['status']=1;
        $where['cid']=array("in",$str);
        $where['is_recommend'] = 1;
        // 推荐新闻
        $new_news=$model->where($where)->limit("0,7")->order("sort DESC,news_time DESC,id DESC")->select();
        $this->assign("new_news",$new_news);
        // 推荐新闻
        // $where['is_recommend'] = 1;
        // $recommend=$model->where($where)->order("sort DESC,news_time DESC,id DESC")->find();

        // 园区动态
        $con['status']=1;
        $con['cid']=55;
        $dongtai=$model->where($con)->limit("0,10")->order("id DESC")->select();
        $this->assign("dongtai",$dongtai);

        // 专题
        $con['cid']=58;
        $zhuanti=$model->where($con)->limit("0,10")->order("id DESC")->select();
        $this->assign("zhuanti",$zhuanti);

        // 媒体报道
        $con['cid']=32;
        $baodao=$model->where($con)->limit("0,10")->order("id DESC")->select();
        $this->assign("baodao",$baodao);

        // 行业信息
        $con['cid']=33;
        $hangye=$model->where($con)->limit("0,10")->order("id DESC")->select();
        $this->assign("hangye",$hangye);

        // 园区宣传片
        $exp['cid']=59;
        $exp['status']=1;
        $exp['type']=1;
        $exp['is_recommend']=1;
        $xuanchuanpian=$model->where($exp)->find();
        $this->assign("xuanchuanpian",$xuanchuanpian);

        // 视频新闻
        $exp['type']=2;
        $shipingxinwen=$model->where($exp)->find();
        $this->assign("shipingxinwen",$shipingxinwen);

        $system=M("system")->where("id = 1")->find();
        // $recommend['titlepic']="/Public/app/images/logo04.png";
        $this->assign("recommend",$recommend);
        // 友情链接
        $link=M("link")->where("status = 1")->order("id DESC")->select();
        $this->assign("link",$link);
        
        // 小轮播图
        $pics=M("image")->where("cid = 54 and status = 1")->limit("10,3")->order("id ASC")->select();
        for ($i=0; $i < count($pics); $i++) { 
            $key=strpos($pics[$i]['link'],'Home');
            if($key){
                $pics[$i]['link']=substr($pics[$i]['link'], $key+4);
            }
        }
        $this->assign("pics",$pics);
        // print_r($pics);exit;
        // 意见反馈下轮播图
        $smallpics=M("image")->where("cid = 54 and status = 1")->limit("14,3")->order("id ASC")->select();
        $this->assign("smallpics",$smallpics);
        // print_r($smallpics);exit;
        //悬浮广告
        $guanggao=M("image")->find("57");
        $this->assign("guanggao",$guanggao);
        // print_r($guanggao);exit;
        // 合作企业
        $ope_mess=M("image")->where("cid = 47 and status = 1")->order("id DESC")->select();
        
        $this->assign("ope_mess",$ope_mess);

    	$this->display();
    }
    public function message(){
    	$model = M("news");
        $where['id'] = 76;
        $where['status'] = 1;
        $news = $model->where($where)->find();

        $this->assign("news", $news);
        $this->display();
    }
    public function save_suggest(){
        $model=M("suggest");
        $name=I("name");
        $mobile=I("mobile");
        if(!$name || !$mobile){
            $this->ajaxReturn("100");
        }
        $company=I("company");
        $content=I("content");
        $data['name']=$name;
        $data['mobile']=$mobile;
        $data['company']=$company;
        $data['content']=$content;
        $data['create_date']=time();
        $data['status']=1;
        $res=$model->add($data);
        if(!$res){
            $this->ajaxReturn("100");
        }else{
            $this->ajaxReturn("200");
        }
    }
}