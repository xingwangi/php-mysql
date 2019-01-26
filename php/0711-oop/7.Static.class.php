<?php
//静态变量的使用方法

class Hdmysql{
	public function __construct() {
		echo '连接了数据库';
	}
}

class Model{
	//静态属性默认值为NULL，只会初始化一次
	private static $mysql;
	//构造方法，实例化Model就会自动执行
	public function __construct() {
		//第一次new Model self::$mysql为NULL,条件成立
		//第二次new Model self::$mysql不是NULL，条件不成立
		if(is_null(self::$mysql)){
			//把实例化后的对象存入静态属性
			self::$mysql = new Hdmysql();
		}
	}
}

new Model();
new Model();
new Model();
new Model();
new Model();





