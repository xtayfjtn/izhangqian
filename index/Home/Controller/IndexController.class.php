<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
      $articles = M('article')->order('article_info desc')->limit(4)->select();
      // var_dump($articles);
      $this->assign('articles', $articles);
      $this->display();
    }
}
