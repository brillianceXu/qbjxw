<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller{
	public function _initialize(){
        $this->get_system();
        $this->get_link();
        // $this->get_cate();
        // 轮播图
        $banner=$this->get_banner();
        $this->assign("banner",$banner);
    }
    public function get_link(){
        $model=M("link");
        $where['status']=1;
        $links=$model->where($where)->limit("18")->select();
        // print_r($links);exit;
        $this->assign("links",$links);
    }
    public function get_services(){
      $model=M("article");
      $cate=$this->get_cate("2");
      $cate=$cate[0];
      
      $type=$cate['id'];
      $where['type']=$type;
      $article=$model->where($where)->order("id ASC")->select();
      for ($i=0; $i < count($article); $i++) { 
        $article[$i]['cname']=$cate['cname'];
      }
      return $article;
    }
    /*
    *   获取轮播图
    */
    public function get_banner(){
        $model=M("image");
        $where['status']=1;
        $where['cid']=7;
        $cate=$model->where($where)->order("id ASC")->select();
        return $cate;
    }
    /*
    *   获取分类
    */
    public function get_cate($status='1'){
        $model=M("category");
        // $where['status']=$status;
        // $where['pid']=0;
        $cate=$model->where($where)->order("sort ASC,id ASC")->select();
        $cate=$this->unlimitedForLayer($cate);
        // print_r($cate);
        $this->assign("cate",$cate);
    }

    public function get_recommond($key){
    	$model=M("news");

    	$where[$key]=1;
    	$where['status']=1;
    	$list=$model->where($where)->limit("4")->order("sort ASC,id DESC")->select();
    	return $list;
    	
    }
    public function get_logo(){
        $Amodel=M("article");
        $Swhere['type']=13;
        $Swhere['status']=1;
        $sys=$Amodel->where($Swhere)->select();
      /*  for ($l=0; $l < count($sys); $l++) { 
            $sys[$l]['image']=$this->replace_image($sys[$l]['image']);
        }*/
        $this->assign("sys",$sys);
    }
    public function get_system()
    {
        $system=M("system")->where("id = 1")->find();
        // $system['weipic']=$this->replace_image($system['weipic']);
        // $system['keywords']=
        $title=$system['title'];
        $keywords=$system['keywords'];
        $description=$system['description'];
        $this->assign("title",$title);
        $this->assign("keywords",$keywords);
        $this->assign("description",$description);
        $this->assign("system",$system);
    }
    public function get_ad(){
        $model=M("article");
        // $where['id']=73;
        $mess=$model->where("id = 73")->find();
        // $mess['image']=$this->replace_image($mess['image']);
        return $mess;
    }
    //新闻详情图片处理
    public function replace_content_image($content){
        $pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
        preg_match_all($pattern,$content,$match);
     // print_r($match);exit;
        if(!$match || !isset($match[0]) || !isset($match[1]) || !is_array($match[0])) return $content;
    
        foreach($match[0] as $k=>$v){
            if(!isset($match[1][$k])) continue;
                
            $image_text = $v;
            $url = $match[1][$k];
            if(!strstr($url,'www.zysqqy.com')){
                $url=$this->replace_image($url);
            }
            
            $new_url = 'src="'.$url.'"';
                
            $new_image_text = preg_replace("/src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"]/", $new_url, $image_text);
    
            $content = str_replace($image_text, $new_image_text, $content);
        }
        return $content;
    }
    //格式化图片
    public function replace_image($image){
        if(strstr($image,'/Uploads/')){
            $image=IMG_STR.$image;
        }elseif(strstr($image,'/Files/')){
            $image=IMG_LOCAL.$image;
        }else{
            $image=IMG_URL.$image;
        }
        return $image;
    }
     //组合多维数组
    public function unlimitedForLayer ($cate, $name = 'child', $pid = 0) {
        $arr = array();
        // print_r($cate);
        foreach ($cate as $v) {
            if ($v['pid'] == $pid) {
                $v[$name] = self::unlimitedForLayer($cate, $name, $v['id']);
                $arr[] = $v;
            }
        }
        return $arr;
    }
}