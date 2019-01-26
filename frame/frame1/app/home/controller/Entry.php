<?php
/**
 * Created by PhpStorm.
 * User: mazhenyu
 * Date: 28/07/2017
 * Time: 14:51
 */
namespace app\home\controller;
use houdunwang\core\Controller;
use houdunwang\view\View;
use houdunwang\model\Model;

class Entry extends Controller {
	/**
	 * 默认首页
	 * @return mixed
	 */
	public function index(){
		$data = Model::q("SELECT * FROM arc");
		//p($data);
		$tag = Model::q("SELECT * FROM tag");
		return View::with(compact('data','tag'))->make();
	}

	/**
	 * 添加
	 * @return $this
	 */
	public function add(){
		if(IS_POST){
			$sql = "INSERT INTO arc (title) VALUES ('{$_POST['title']}')";
			Model::e($sql);
			return $this->success('添加成功')->setRedirect('index.php');
		}
		return View::make();
	}

	public function remove(){
		$sql = "DELETE FROM arc WHERE aid=" . $_GET['aid'];
		Model::e($sql);
		return $this->success('删除成功');
	}
}