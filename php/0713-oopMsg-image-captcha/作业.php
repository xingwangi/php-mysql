<?php
//作业1：

class Captcha{
	public function show(){
		//1.发送头部
		//header()
		//2.创建并且填充画布
		$this->createBg();
		//3.写字
		$this->write();
		//4.干扰
		$this->makeTrouble();
		//5.输出再销毁
		//imagepng()
		//imagedestroy()
	}

	private function makeTrouble(){

	}

	private function write(){

	}

	private function createBg(){

	}

}

$c = new Captcha();
$c->show();


//作业2：完成面向对象的留言板（增删改查）







