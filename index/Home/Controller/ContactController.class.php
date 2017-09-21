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
    public function login() {
        $phone=$_GET['phone'];
        $pwd=$_GET['pwd'];
        $user=M("musportusr");//访问数据库中的t_user表(t_ 以在config.php中设置为表前缀了)
        $where="phone='".$phone."' and pwd='".$pwd."'";//查询的条件语句
        $res=$user->where($where)->select();//执行SQL语句

/*上面三名话可以用这两句代替
        $sql="select * from t_user where uname='".$uname."' and upass='".$upass."'";
        $res=M()->query($sql);
*/
        if($res)
        {
           $arr["status"]=100;
           $arr["message"]="Congratulations!";
           //$arr["data"]=$res;
        }else{
            $arr["status"]=303;
            $arr["message"]="Sorry, You have the wrong password;";
        }

        //输出json
        echo json_encode($arr);
    }
}
