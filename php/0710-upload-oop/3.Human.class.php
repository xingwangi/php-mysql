<?php
include '../functions.php';
//形成类
//属性（类的变量）和 方法（类的函数），属性和方法不是必须的
class Human{
	//类的属性
	public $name;
	public $sex;
	public $age;

	//类的方法
	public function think(){
		//在类中调用属性，用$this代表当前对象
		echo "我的名字叫：" . $this->name;
		echo "<br>";
		echo "我的性别是：" . $this->sex;
		echo "<br>";
		echo "我的年龄是：" . $this->age;
		echo "<br>";
		echo '我有想象能力<hr/>';
	}

}
//new 实例化关键字
//实例化出一个对象
$obj1 = new Human();
$obj1->name = '王大锤';
$obj1->sex = '男';
$obj1->age = '30';
$obj1->think();


$obj2 = new Human();
$obj2->name = '卢正雨';
$obj2->sex = '男';
$obj2->age = '33';
$obj2->think();












