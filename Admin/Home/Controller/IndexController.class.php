<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
      // $article = M('content')->where(array('id' => 1))->select();
      // $this->assign("content", $article);
      $this->display();
    }
}
