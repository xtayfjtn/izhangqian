<?php
namespace Home\Controller;
use Think\Controller;
class TechArticleController extends Controller {
    public function index(){
      $techarticles = M('article')->where(array('article_type'=>0))->order('article_info desc')->select();
      // var_dump($techarticles);
      $this->assign('techarticles', $techarticles);
      $this->display();
    }
}
