<?php

/**
 * Created by PhpStorm.
 * User: mazhenyu
 * Date: 18/07/2017
 * Time: 15:42
 */
class HomeController extends Controller {
	private $data;
	public function __construct() {
		$this->data = include './data.php';
	}

	/**
	 * 首页
	 */
	public function index(){
		//获取第一页的两篇文章
		$data = $this->data;
		//截取前两篇文章
		$article = array_slice($data,0,2);
		//载入模板
		$this->display(['arc'=>$article]);
	}


	/**
	 * 异步请求获得文章
	 */
	public function getArc(){
		//知道前端点了第几页
		$page = ($_GET['page'] - 1) * 2;
		//截取文章
		$data = array_slice($this->data,$page,2);
		//把数组转为json(因为js可以识别json)
		//JSON_UNESCAPED_UNICODE 汉字不编码
		echo json_encode($data,JSON_UNESCAPED_UNICODE);
	}

}