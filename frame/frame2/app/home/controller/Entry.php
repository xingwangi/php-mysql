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
use system\model\Arc;
use system\model\Tag;
use houdunwang\model\Model;
use Gregwar\Captcha\CaptchaBuilder;


class Entry extends Controller {
	/**
	 * 默认首页
	 * @return mixed
	 */
	public function index(){
		//标签表数据
//		$tagData = Tag::get();
		//文章表数据
		$arcData = Arc::get();
//		p($arcData);
		//获得单条数据，并且是一维数组
//		$oneData = Arc::find(3);
//		p($oneData);

		//删除aid为3的数据
//		Arc::where("aid=3")->destory();

		//增加
		if(IS_POST){
			if(strtolower($_POST['captcha']) != strtolower($_SESSION['phrase'])){
				return $this->error('验证码错误');
			}
			Arc::save($_POST);
			return $this->success('添加成功')->setRedirect('index.php');
		}

		return View::make()->with(compact('arcData'));
	}

	/**
	 * 删除
	 * @return $this
	 */
	public function remove(){
		Arc::where("aid={$_GET['aid']}")->destory();
		return $this->success('删除成功')->setRedirect('index.php');
	}

	/**
	 * 修改
	 * @return $this
	 */
	public function update(){
		$aid = $_GET['aid'];
		if(IS_POST){
			Arc::where("aid={$aid}")->update($_POST);
			return $this->success('修改成功')->setRedirect('index.php');
		}
		$oldData = Arc::find($aid);
		return View::make()->with(compact('oldData'));
	}

	public function captcha(){
		header('Content-type: image/jpeg');
		$builder = new CaptchaBuilder();
		$builder->build();
		$builder->output();
		//把值存入到session
		$_SESSION['phrase'] = $builder->getPhrase();
	}

}