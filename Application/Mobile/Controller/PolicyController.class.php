<?php
namespace Mobile\Controller;
class PolicyController extends BaseController {
    public function index(){
    	$model=M("news");
    	$Cmodel=M("category");

    	$exp['status']=1;
    	$exp['pid']=0;

    	$cid=46;
        $mes=$Cmodel->where("id=".$cid)->find();
        // $cname=$mes["cname"];
        // $ccname=$Cmodel->where("id = ".$mes['pid'])->getField("cname");
        $cate_mes=$Cmodel->where("pid=".$mes['pid'])->select();

        $str="";
        $typename="全部政策";
    	$where['cid']=$cid;
    	$where['status']=1;
        $type=I('type');
        if($type){
            $where['type']=$type;
            $str.="/type/".$type;
            if($type == '1'){
                $typename='国家部委政策';
            }elseif($type == "2"){
                $typename='贵州省政策';
            }elseif($type == "3"){
                $typename='遵义市政策';
            }elseif($type == "4"){
                $typename='遵义软件园政策';
            }else{
                $typename="全部政策";
            }
        }
        $keywords=I('keywords');
        if($keywords){
            $where["title|content"]=array("like","%".$keywords."%");
            $str.="/keywords/".$keywords."/";
            $typename="<b style='color:#0C87E7;'>".$keywords."</b>相关政策";
        }

        $pageSize=20;
        $count=$model->where($where)->count();
        $total=ceil($count/$pageSize);
        $page=intval(I('page'));
        $page=empty($page)?"1":$page;
        // $page=($page=$total)?$total:$page;
        
        $start=($page-1)*$pageSize;

    	$news=$model->where($where)->limit($start.','.$pageSize)->order("id DESC,news_time DESC")->select();

        $banner=$this->get_banner();
        $this->assign("banner",$banner);

        $this->assign("str",$str);
        $this->assign("page",$page);
        $this->assign("total",$total);
        $this->assign("count",$count);
    	$this->assign("news",$news);
        $this->assign("cate_mes",$cate_mes);
        $this->assign("typename",$typename);
    	$this->assign("keywords",$keywords);
        $this->assign("cid",$cid);
    	$this->assign("ccid",$ccid);
    	$this->display();
    }
    public function double(){
        $model=M("news");
        $Cmodel=M("category");

        $exp['status']=1;
        $exp['pid']=0;

        $cid=45;
        $mes=$Cmodel->where("id=".$cid)->find();
        // $cname=$mes["cname"];
        // $ccname=$Cmodel->where("id = ".$mes['pid'])->getField("cname");
        $cate_mes=$Cmodel->where("pid=".$mes['pid'])->select();

        $str="";
        $typename="全部政策";
        $where['cid']=$cid;
        $where['status']=1;
        $type=I('type');
        if($type){
            $where['type']=$type;
            $str.="/type/".$type;
            if($type == '1'){
                $typename='<b style="color:#0C87E7;">国家</b>相关政策';
            }elseif($type == "2"){
                $typename='<b style="color:#0C87E7;">贵州省</b>相关政策';
            }elseif($type == "3"){
                $typename='<b style="color:#0C87E7;">遵义市</b>相关政策';
            }elseif($type == "4"){
                $typename='<b style="color:#0C87E7;">园区</b>政策';
            }else{
                $typename="全部政策";
            }
        }
        $keywords=I('keywords');
        if($keywords){
            $where["title|content"]=array("like","%".$keywords."%");
            $str.="/keywords/".$keywords."/";
            $typename="<b style='color:#0C87E7;'>".$keywords."</b>相关政策";
        }

        $pageSize=20;
        $count=$model->where($where)->count();
        $total=ceil($count/$pageSize);
        $page=intval(I('page'));
        $page=empty($page)?"1":$page;
        // $page=($page=$total)?$total:$page;
        
        $start=($page-1)*$pageSize;

        $news=$model->where($where)->limit($start.','.$pageSize)->order("id DESC,news_time DESC")->select();

        $banner=$this->get_banner();
        $this->assign("banner",$banner);

        $this->assign("str",$str);
        $this->assign("page",$page);
        $this->assign("total",$total);
        $this->assign("count",$count);
        $this->assign("news",$news);
        $this->assign("cate_mes",$cate_mes);
        $this->assign("typename",$typename);
        $this->assign("keywords",$keywords);
        $this->assign("cid",$cid);
        $this->assign("ccid",$ccid);
        $this->display();
    }
    public function industry(){
		$model=M("article");
        $where['cid']=44;
        $where['status']=2;
        $mess=$model->where($where)->select();
        $this->assign("mess",$mess);

        $where['cid']=5;
        $main=$model->where($where)->select();
        $this->assign("main",$main);

        $where['cid']=6;
        $vital=$model->where($where)->select();
        $this->assign("vital",$vital);
    	$this->display();
    }
    public function detail(){
		$model=M("news");
    	$Cmodel=M("category");

        $id=intval(I('id'));

        $mess=$model->find($id);
        $data['click']=$mess['click']+1;
        $model->where("id = ".$id)->save($data);

        $mess['published']=date("Y-m-d",$mess['published']);

        $cname=$Cmodel->where("id = ".$mess['cid'])->getField("cname");
    	
        $cate_mes=$model->where("cid = ".$mess['cid'])->order("sort ASC,id DESC")->limit("10")->select();

        $banner=$this->get_banner();
        $this->assign("banner",$banner);
        
        $title=$mess['title'];
        if ($mess['keywords']) {
            $keywords=$mess['keywords'];
        }else{
            $keywords=$mess['title'];
        }
        if($mess['description']){
            $mess['description'];
        }else{
            $description=$mess['title'];
        }
        
        $this->assign("title",$title);
        $this->assign("keywords",$keywords);
        $this->assign("description",$description);
        
    	$this->assign("mess",$mess);
        $this->assign("cate_mes",$cate_mes);
        $this->assign("cname",$cname);
    	$this->display();
    }
}