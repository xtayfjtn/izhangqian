<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function index(){
      $id = I('id');
      $article = M('article')->where(array('article_id'=>$id))->find();
      // var_dump ($article);
      $article['article_content'] = htmlspecialchars_decode($article['article_content']);
      // $arr[$i]['article_content'] = htmlspecialchars_decode($arr[$i]['article_content']);
			// if($sub != 0)
			// 	$arr[$i]['article_content'] = substr($arr[$i]['article_content'], 0, 220)."...";
      // var_dump($article);
      $this->assign("article1", $article);
      $this->display();
    }
}
