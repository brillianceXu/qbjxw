<?php
namespace Mobile\Controller;
class AboutController extends BaseController {
	public function index() {
		$model = M("news");
		$where['id'] = 1;
		$where['status'] = 1;
		$news = $model->where($where)->find();
		$news['published'] = date("Y-m-d", $news['published']);

		$keywords = $news['title'];
		$description = $news['summary'];
		$this->assign("keywords", $keywords);
		$this->assign("description", $description);
		$this->assign("news", $news);
		$this->display();
	}
	public function leaders() {
		$model = M("news");
		$where['cid'] = 56;
		$where['status'] = 1;
		$news = $model->where($where)->find();
		$news['published'] = date("Y-m-d", $news['published']);

		$keywords = $news['title'];
		$description = $news['summary'];
		$this->assign("keywords", $keywords);
		$this->assign("description", $description);
		$this->assign("news", $news);
		$this->display();
	}
	public function organization() {
		$model = M("news");
		$where['cid'] = 57;
		$where['status'] = 1;
		$news = $model->where($where)->find();
		$news['published'] = date("Y-m-d", $news['published']);

		$keywords = $news['title'];
		$description = $news['summary'];
		$this->assign("keywords", $keywords);
		$this->assign("description", $description);
		$this->assign("news", $news);
		$this->display();
	}
	public function honor() {
		$model = M("image");
		$where['cid'] = 48;
		$where['status'] = 1;
		$mess = $model->where($where)->order("id DESC")->select();
		$this->assign("mess", $mess);
		$this->display();
	}
	public function culture() {
		$model=M("news");
    	$where['cid']=60;
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
	public function contact() {
		$model = M("news");
		$where['id'] = 76;
		$where['status'] = 1;
		$news = $model->where($where)->find();

		$this->assign("news", $news);
		$this->display();
	}
	public function history() {
		$model = M("history");
		$where['status'] = 1;
		$years = $model->distinct(true)->where($where)->order('tyear DESC')->field('tyear')->select();
		foreach ($years as $k => $v) {
			$where['tyear'] = $v['tyear'];
			$mess[$v['tyear']] = $model->where($where)->order("tyear DESC,tmonth DESC,tday DESC")->select();
		}
		$this->assign("mess", $mess);
		$this->display();
	}
	public function download() {
		$model = M("news");
		$Cmodel = M("category");

		$exp['status'] = 1;
		$exp['pid'] = 0;

		$cid = I('cid');
		$cid = empty($cid) ? 32 : $cid;
		$mes = $Cmodel->where("id=" . $cid)->find();

		// print_r($cate_mes);exit;
		$str = "cid/" . $cid;

		$where['cid'] = $cid;
		$where['status'] = 1;

		$page = I('page');
		$page = empty($page) ? "1" : $page;
		$pageSize = 20;
		$count = $model->where($where)->count();
		$total = ceil($count / $pageSize);
		$start = ($page - 1) * $pageSize;
		$news = $model->where($where)->limit($start . ',' . $pageSize)->order("news_time DESC,id DESC")->select();
		$system = M("system")->where("id = 1")->find();
		for ($i = 0; $i < count($news); $i++) {
			if ($news[$i]['news_time']) {
				$news[$i]['news_time'] = "[" . $news[$i]['news_time'] . "]";
			}
			// if($news[$i]['titlepic'] == ""){
			$news[$i]['titlepic'] = "/Public/app/images/logo04.png";
			// }
		}

		$banner = $this->get_banner();
		$this->assign("banner", $banner);

		$this->assign("str", $str);
		$this->assign("page", $page);
		$this->assign("total", $total);
		$this->assign("count", $count);
		$this->assign("news", $news);
		$this->assign("keywords", $keywords);
		// $this->assign("ccname",$ccname);
		$this->assign("cid", $cid);
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