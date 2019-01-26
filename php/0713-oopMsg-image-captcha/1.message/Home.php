<?php
class Home extends Controller {
	//保存数据库数组的信息
	private $data;
	public function __construct() {
		$this->data = include './data.php';
	}

	/**
	 * 首页显示
	 */
	public function index(){
		include './tpl/index.php';
	}

	/**
	 * 添加
	 */
	public function store(){
		if(IS_POST){
			//追加
			$this->data[] = $_POST;
			//写入到数据库
			$this->dataToFile();
			//成功提示
			$this->success('添加成功','index.php');
		}
		include './tpl/store.php';
	}

	/**
	 * 删除
	 */
	public function remove(){
		unset($this->data[$_GET['id']]);
		$this->dataToFile();
		$this->success('删除成功','index.php');

	}

	/**
	 * 修改
	 */
	public function update(){
		if(IS_POST){
			$this->data[$_GET['id']] = $_POST;
			$this->dataToFile();
			$this->success('修改成功','index.php');
		}
		include './tpl/update.php';
	}

	/**
	 * 写入数据库
	 */
	private function dataToFile(){
		file_put_contents("./data.php","<?php return " . var_export($this->data,true) . ";");
	}




}