<?php
namespace Home\Controller;

class GoodsController extends BaseController
{
    public function index()
    {
        $Cmodel = M("category");
        $model  = M("goods");
        // $cate=$Cmodel->where("pid=2 and status=1")->select();
        $cond['status'] = 1;
        $cond['pid']    = 2;
        $cate           = $Cmodel->where($cond)->select();
        foreach ($cate as $k => $v) {
            $child             = $Cmodel->where("pid=" . $v['id'])->select();
            $cate[$k]['child'] = $child;
        }
        $cid = I("cid");
        $str='';
        //
        $where['status'] = 1;
        if ($cid) {
            $str.="/cid/".$cid;
            $where['cid'] = $cid;
            $pmess        = $Cmodel->where("id=" . $cid)->find();
            $cname        = $pmess['cname'];
            $ccname       = $Cmodel->where("id=" . $pmess['pid'])->getField("cname");
            $cname .= "--" . $ccname;
        }
        $page          = $_GET['page'];
        $page          = ($page == null) ? "1" : $page;

        $pageSize      = 20;
        $article_count = $model->where($where)->count();
        $totalPage     = ceil($article_count / $pageSize);
        $start         = ($page - 1) * $pageSize;

        $mess = $model->where($where)->limit($start, $pageSize)->select();
        $banner=$this->get_banner();
        $this->assign("banner",$banner);
        $this->assign("cname", $cname);
        $this->assign("cid", $cid);
        $this->assign("str", $str);
        $this->assign("page", $page);
        $this->assign("totalPage", $totalPage);
        $this->assign("article_count", $article_count);
        $this->assign("cate", $cate);
        $this->assign("mess", $mess);
        $this->display();
    }
    public function detail()
    {
        $Cmodel         = M("category");
        $model          = M("goods");
        $cond['status'] = 1;
        $cond['pid']    = 2;
        $category       = $Cmodel->where($cond)->select();
        foreach ($category as $k => $v) {
            $arr[] = $v['id'];
        }
        $arr  = implode(",", $arr);
        $arr  = trim($arr, ",");
        $cate = $Cmodel->where("pid in (" . $arr . ")")->select();
        // $cate=$Cmodel->where("pid=4 and status=1")->select();
        $id          = I("id");
        $where['id'] = $id;

        $mess           = $model->where($where)->find();
        $cid            = $mess['cid'];
        $cond['cid']    = $id;
        $cond['status'] = 2;
        $images         = M("image")->where($cond)->select();

        $pmess        = $Cmodel->where("id=" . $cid)->find();
        $cname        = $pmess['cname'];
        $ccname       = $Cmodel->where("id=" . $pmess['pid'])->getField("cname");
        $cname .= "--" . $ccname;
        // $cname=$Cmodel->where("id=".$cid)->getField("cname");
        $banner=$this->get_banner();
        $this->assign("banner",$banner);
        // print_r($images);exit;
        $this->assign("images", $images);
        $this->assign("cid", $cid);
        $this->assign("cname",$cname);
        $this->assign("cate", $cate);
        $this->assign("mess", $mess);
        $this->display();
    }
    public function get_banner(){
        $imodel=M("image");
        $banner=$imodel->where("cid = 12 and status = 1")->getField("route");
        return $banner;
    }
}
