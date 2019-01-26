<?php

/**
 * Created by PhpStorm.
 * User: mazhenyu
 * Date: 18/07/2017
 * Time: 15:51
 */
class MemberController extends Controller {
	private $data;
	public function __construct() {
		//判断数据库文件是否存在
		if(is_file('./data.php')){
			$this->data = include "./data.php";
		}else{//如果不存在，默认为空数组
			$this->data = [];
		}
	}

	/**
	 * 注册
	 */
	public function reg(){
		if(IS_POST){
			//判断用户名是否存在(有了js的判断，为什么还需要php的判断？？？)



			$this->data[] = $_POST;
			file_put_contents('./data.php',"<?php return " . var_export($this->data,true) . "; ?>");
			$str = <<<str
<script>
alert('注册成功');
location.href = 'index.php';
</script>
str;
			exit($str);

		}

		$this->display();
	}



	/**
	 * 验证码
	 */
	public function captcha(){
		$captcha = new Captcha();
		$captcha->length = 1;
		$captcha->show();
	}


	/**
	 * 异步检测用户名是否存在
	 */
	public function checkUser(){
		//接收异步请求发送过来的用户名
		$user = $_POST['u'];
		foreach ( $this->data as $u ) {
			if($u['user'] == $user){
				echo 1;
				exit;
			}
		}
		//把0和1返回给js
		echo 0;
	}


	/**
	 * 异步检测验证码
	 */
	public function checkCaptcha(){
		if(strtolower($_POST['c']) != $_SESSION['captcha']){
			echo 0;
		}else{
			echo 1;
		}
	}







}