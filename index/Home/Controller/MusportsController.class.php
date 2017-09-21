<?php
namespace Home\Controller;
use Think\Controller;
class MusportsController extends Controller {
  public function signin() {
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

  public function signup() {
    $phone = $_GET['phone'];
    $pwd=$_GET['pwd'];
    $user = M('musportusr');
    $data['phone'] = $phone;
    $data['pwd'] = $pwd;
    $res = $user->add($data);
    if ($res) {
      $arr["status"]=100;
      $arr["message"]="Congratulations!";
    } else {
      $arr["status"]=303;
      $arr["message"]="Sorry, You are not registerd";
    }

    //输出json
    echo json_encode($arr);
  }

  public function updateUser() {
    $phone = $_POST('phone');
    $param1 = $_POST('param1');
    $data['param1'] = $param1;
    $cond = 'phone='.$phone;
    $User = M('musportusr');
    $res = $User->where($cond)->save($data);
    if ($res) {
      $arr["status"]=100;
      $arr["message"]="Congratulations!";
    } else {
      $arr["status"]=303;
      $arr["message"]="Sorry, You are not registerd";
    }

    //输出json
    echo json_encode($arr);
  }

  public function deleteSong() {

  }
}
