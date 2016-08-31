<?php
namespace Home\Controller;
use Think\Controller;
class LifeController extends Controller {
    public function index(){
      $lifearticles = M('article')->where(array('article_type'=>1))->order('article_info desc')->select();
      // var_dump($lifearticles);
      $this->assign('lifearticles', $lifearticles);
      $this->display();
    }
}
