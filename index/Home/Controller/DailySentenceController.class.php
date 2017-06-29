<?php
namespace Home\Controller;
use Think\Controller;
class DailySentenceController extends Controller {
    public function index(){
      $sentences = M('dailysentence') ->select();
      $this->assign("sentences", $sentences);
      $this->display();
    }
}
