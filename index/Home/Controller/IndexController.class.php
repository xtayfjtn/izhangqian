<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
      $articles = M('article')->order('article_info desc')->limit(4)->select();
      // var_dump($articles);
      $this->assign('articles', $articles);
      $sentence = M('dailysentence')->order('date desc')->limit(1)->select();
      $this->assign('sentence', $sentence[0]);
      // echo $sentence[0];
      // var_dump($sentence[0]);
      $this->display();
    }
}
