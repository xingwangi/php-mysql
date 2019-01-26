<?php
class Father{
	//public 公开的，在任何地方都可以使用
	public $car = '奇瑞';
	//private 私有的，只能在类的内部使用
	private $money = '100W';

	public function getMoney(){
		//在类的内部调用私有属性是可以的
		//echo $this->money;
		//car这个是属性是public最公开的，在类的内部依然可以使用
		//echo $this->car;
	}

}
$f = new Father();
//echo $f->car;
//echo $f->money;
$f->getMoney();



//总结：
//public 在类的内部、外部、子类都可以使用
//private 只能在类的内部使用








