<?php
namespace controller\lib;
class Base{
	public static function get(){
		echo 'controller base<br>';
	}
}

namespace model\lib;
class Base{
	public static function get(){
		echo 'model base<br>';
	}
}
//相对文件的形式
Base::get();
//相对目录，这样会找model\lib\a\Base，但是这个类根本就不存在于那个命名空间，所以是错误的
//a\Base::get();
//绝对目录形式
\controller\lib\Base::get();