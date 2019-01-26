<?php
include '../functions.php';
class Upload{
	//只要实例化就自动执行，构造方法
	public function __construct() {
		echo '走了构造方法<br/>';
	}

	public function think(){
		echo 'think';
	}
}

$obj = new Upload();