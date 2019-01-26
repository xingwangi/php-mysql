<?php
/**
 * Created by PhpStorm.
 * User: mazhenyu
 * Date: 14/07/2017
 * Time: 15:16
 */

/**
 * 会员管理控制器（注册，登陆，退出，个人中心）
 * Class MemberController
 */
class MemberController extends Controller {
	private $user;
	public function __construct() {
		$this->user = include './data.php';
	}

	/**
	 * 注册
	 */
	public function reg(){
		if(IS_POST){
			//判断验证码是否正确
			if(strtolower($_POST['captcha']) != $_SESSION['captcha']){
				$this->message('验证码错误');
			}

			//判断用户名是否存在
			foreach ($this->user as $u){
				if($u['username'] == $_POST['username']){
					$this->message('该用户已存在');
				}
			}

			//密码加密
			$_POST['password'] = md5($_POST['password']);
			//追加一个用户
			$this->user[] = $_POST;
			//写入数据库
			$this->dataToFile('./data.php',$this->user);
			//成功提示
			$this->message('注册成功','?c=member&a=login');

		}
		$this->display();

	}
	/**
	 * 登陆
	 */
	public function login(){
		if(IS_POST){
			foreach ($this->user as $u){
				//如果用户名对了，密码也对了，那么就是登陆成功了！
				if($u['username'] == $_POST['username'] && $u['password'] == md5($_POST['password'])){
					//存入登陆的凭证，有了$_SESSION['username']就算登陆
					$_SESSION['username'] = $_POST['username'];
					//如果用户有勾选7天免登陆
					if(isset($_POST['autologin'])){
						//延长钥匙的有效期（7天）
						//setcookie('名称','值','过期时间','作用域')
						setcookie(session_name(),session_id(),time() + 3600 * 24 * 7,'/');
					}else{//不勾选7天免登陆
						setcookie(session_name(),session_id(),0,'/');

					}

					$this->message('登陆成功','index.php');
				}
			}
			$this->message('登陆失败');
		}
		$this->display();

	}
	/**
	 * 个人中心
	 */
	public function index(){
		$this->display();

	}

	/**
	 * 退出
	 */
	public function logout(){
		session_unset();
		session_destroy();
		$this->message('退出成功','?c=member&a=login');
	}

	/**
	 * 显示验证码
	 */
	public function captcha(){
		$captcha = new Captcha();
		$captcha->with = 120;
		$captcha->height = 60;
		$captcha->length = 2;
		$captcha->show();
	}
}










