<?php
class Code{
	//如果construct和同名方法同时存在，那么只执行construct
	public function __construct() {
		echo 'construct';
	}


	//当方法名和类型一致的时候，它就是构造方法，也会自动执行(不推荐)
	public function code(){
		echo 'code';
	}

}
$o = new Code();