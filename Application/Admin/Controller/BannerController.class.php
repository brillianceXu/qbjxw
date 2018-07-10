<?php
namespace Admin\Controller;
class BannerController extends BaseController {
    public function index(){
      $model=M("image");

      $exp['status']=1;

      $photos=$model->where($exp)->order("cid asc")->select();
      for ($i=0; $i < count($photos); $i++) { 
        $photos[$i]['cname']=$this->get_cate_name($photos[$i]['cid']);
      }
      // print_r($photos);exit;
      
      // $this->assign("type",$type);
      $this->assign("photos",$photos);
      $this->display();
    }
  
   	public function picture_add(){
      $id=$_GET['id'];
      $pid=6;
      $Cmodel=M("category");
      // $type=$_GET['type'];
      $model=M("image");

      if($id){
        $info=$model->where("id=".$id)->find();
      }
      if($_POST)
      {
        $pictures=$_FILES['route'];
        if($pictures['name']['0'] != '')
        {
          $oldroute=$info['route'];
          if($oldroute){
            unlink($_SERVER['DOCUMENT_ROOT'].$oldroute);
          }
          $image=$this->upload_one($pictures);
          $data['route']=$image;
        }
        $data['name']=$_POST['pname'];
        $data['link']=$_POST['link'];
        $data['cid']=$_POST['cid'];
        $data['addtime']=time();

        $res=$model->where("id = ".$id)->save($data);
        if($res){
          $this->add_log("修改图片",1,"成功修改图片");
         $this->redirect("Banner/index");
        }else{
          $this->error("修改图片失败");
        }
      }else
      {
        $cate=$Cmodel->where("pid=".$pid." and status=3")->select();
        $this->assign("cate",$cate);
        $this->assign("info",$info);
        $this->assign("action_name","index");
        $this->display();
      }
   	}
}