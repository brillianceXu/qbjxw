<?php
namespace Mobile\Controller;
class InvestController extends BaseController {
	public function index() {
		$model=M("news");
    	$where['cid']=61;
    	$where['status']=1;

        $page=I('page');
        $page=empty($page)?"1":$page;
        $pageSize=20;
        $count=$model->where($where)->count();
        $total=ceil($count/$pageSize);
        $start=($page-1)*$pageSize;
    	$news=$model->where($where)->limit($start.','.$pageSize)->order("news_time DESC,id DESC")->select();
        $system=M("system")->where("id = 1")->find();
        for ($i=0; $i < count($news); $i++) { 
            if($news[$i]['news_time']){
                $news[$i]['news_time'] ="[".$news[$i]['news_time']."]";
            }
        }

        $banner=$this->get_banner();
        $this->assign("banner",$banner);

        $this->assign("str",$str);
        $this->assign("page",$page);
        $this->assign("total",$total);
        $this->assign("count",$count);
    	$this->assign("news",$news);
        $this->assign("keywords",$keywords);
    	$this->assign("ccname",$ccname);
        $this->assign("cid",$cid);
    	// $this->assign("ccid",$ccid);
    	$this->display();
	}
	public function detail() {
		$id = I('id');
		$model = M("news");
		$Cmodel = M("category");

		$where['id'] = $id;
		$where['status'] = 1;
		$news = $model->where($where)->find();

		$data['click'] = $news['click'] + 1;
		$model->where("id = " . $id)->save($data);

		$news['click'] = $data['click'];

		$title = $news['title'];
		if ($news['keywords']) {
			$keywords = $news['keywords'];
		} else {
			$keywords = $news['title'];
		}
		if ($news['description']) {
			$description = $news['description'];
		} else {
			$description = $news['title'];
		}

		$this->assign("title", $title);
		$this->assign("keywords", $keywords);
		$this->assign("description", $description);
		$this->assign("news", $news);
		$this->display();
	}
}