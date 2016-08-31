<?php
namespace Home\Controller;
use Think\Controller;
class ContactController extends Controller {
    public function index(){
      $this->display();
    }

    public function support()
    {
      $data = array(
        'name' => I(clientname),
        'email' => I(clientemail),
        'subject' => I(clientsubject),
        'content' => I(clientcontent),
        'time' => time()
      );
      if(($result = M('visitormes')->add($data))>0){
        $this->success("留言成功!", U('Home/Index/index'));
      }else{
        $this->error("留言失败!");
      }
    }
}
