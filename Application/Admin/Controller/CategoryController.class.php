<?php
namespace Admin\Controller;
class CategoryController extends BaseController {
    public function category_list(){
      $model=M("category");
      
      $where['status']=2;
      $where['pid'] = array("neq","0");
      $category=$model->where($where)->order("pid ASC,sort ASC,id ASC")->select();
      for ($i=0; $i < count($category); $i++) { 
        $category[$i]['pname']=$model->where("id = ".$category[$i]['pid'])->getField("cname");
      }
      $cat_count=count($category);
      
      
      $this->assign("category",$category);
      $this->assign("cat_count",$cat_count);
      $this->assign("controller_name","Content");
      $this->assign("type",$type);
      $this->display();
    }
    public function category_add(){
      $model=M("category");
      $id=$_GET['id'];
      

      if($_POST){
        // print_r($type);exit;
          $data['cname']=$_POST['cname'];

          $data['status']=2;
          $data['level']=2;
          $data['note']=$_POST['note'];
          $data['pid']=$_POST['pid'];
          $data['type']=$_POST['type'];
          
          if($id){
            $result=$model->where("id = ".$id)->save($data);
            $log_mes="修改分类";
          }else{
            $check=$model->where("status = ".$data['status']." and cname = '".$data['cname']."'")->find();
            if($check){
              $this->error("分类已存在");
            }
            $data['addtime']=time();
            $result=$model->add($data);
            $log_mes="添加分类";
          }
          if(!$result){
            $this->error($log_mes."失败");
          }else{
            $this->add_log($log_mes,1,$log_mes." [".$data['cname']."] 成功");
            $this->success($log_mes."成功");
          }

      }else{
          if($id){
            $mes=$model->where("id = ".$id)->find();
            $this->assign("mes",$mes);
          }
          $where['pid'] = 0;
          $where['status'] = 2;
          $category=$model->where($where)->select();
          $this->assign("cate",$category);
          $this->assign("type",$type);
          $this->assign("controller_name","Content");
          $this->assign("action_name","category_list");
          $this->display();
      }
    }
    public function del_cate(){
      $model=M("category");
      $id=$_GET['id'];
      // print_r($id);exit;
      $cate=$model->where("id = ".$id)->find();
      $result=$model->where("id = ".$id)->delete();
      // print_r($model->getLastSql());exit;
      if($result){
        $this->add_log("删除分类",1,"成功删除分类：".$cate['cname']);
        $this->ajaxReturn("200");
      }else{
        $this->ajaxReturn("400");
      }
    }
    public function done_sort(){
      $model=M("category");
      $id=$_GET['id'];
      $data['sort']=$_GET['sort'];
      $res=$model->where("id = ".$id)->save($data);
      if($res){
        $this->ajaxReturn("200");
      }else{
        $this->ajaxReturn("400");
      }
    }
}