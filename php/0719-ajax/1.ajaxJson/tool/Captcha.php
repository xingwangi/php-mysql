<?php

/**
 * Created by PhpStorm.
 * User: mazhenyu
 * Date: 14/07/2017
 * Time: 14:09
 */
class Captcha {
	//验证码的宽
	public $with;
	//验证码的高
	public $height;
	//验证码的背景色
	public $bgColor;
	//验证码字体大小
	public $size;
	//验证码长度
	public $length;
	//字体文件
	public $fontFile;
	//验证码种子
	public $seed = '1234567890qwertyuiopasdfghjklzxcvbnm';
	//保存图像资源
	private $img;


	public function __construct($with=190,$height=60,$bgColor="#ffffff",$size=30,$length=4,$fontFile='./tool/font.ttf') {
		$this->with = $with;
		$this->height = $height;
		$this->bgColor = $bgColor;
		$this->size = $size;
		$this->length = $length;
		$this->fontFile = $fontFile;
	}
	public function show(){
		//1.发送头部
		header('Content-type:image/png');
		//2.创建画布并且填充
		$this->createBg();
		//3.写字
		$this->write();
		//4.干扰
		$this->makeTrouble();
		//5.输出并销毁
		imagepng($this->img);
		imagedestroy($this->img);
	}

	/**
	 * 制造干扰
	 */
	private function makeTrouble(){
		//线
		for ($i = 0; $i < 10; $i++){
			$color = imagecolorallocate($this->img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
			imageline($this->img,mt_rand(0,$this->with),mt_rand(0,$this->height),mt_rand(0,$this->with),mt_rand(0,$this->height),$color);
		}
		//点
		//圆

	}

	/**
	 * 写字
	 */
	private function write(){
		$captcha = '';
		for ($i = 0; $i < $this->length; $i++){
			//xy坐标
			$x = $this->with / $this->length * $i + 10;
			$y = ($this->height + $this->size) / 2;
			//字体颜色
			$color = imagecolorallocate($this->img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
			//随机的文字
			$text = $this->seed[mt_rand(0,strlen($this->seed)-1)];
			$captcha .= $text;
			//$image, $size, $angle, $x, $y, $color, $fontfile, $text
			imagettftext($this->img,$this->size,mt_rand(-45,45),$x,$y,$color,$this->fontFile,$text);
		}
		$_SESSION['captcha'] = strtolower($captcha);
	}

	private function createBg(){
		//创建画布
		$img = imagecreatetruecolor($this->with,$this->height);
		//填充画布
		imagefill($img,0,0,hexdec($this->bgColor));
		//放入到属性中
		$this->img = $img;

	}

















}









