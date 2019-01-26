<?php
class Father{
	public $car = 'BMW';
	//私有属性只有类的内部使用，子类和外部都不可以
	private $money = '1000W';
	//子类可以使用，内部也可以使用，外部不可以使用
	protected $house = '观唐别墅';


	public function house(){
		echo $this->house;
	}

}
//$f = new Father();
//$f->house();
//$f->house;
//exit;



//son这个类继承了father这个类，son就是子类
class Son extends Father{
	public function getCar(){
		echo $this->car;
	}

	public function getMoney(){
		echo $this->money;
	}

	public function getHouse(){
		echo $this->house;
	}
}

$s = new Son();
//$s->getCar();
//$s->getMoney();
$s->getHouse();



//总结：
//public 在类的内部、外部、子类都可以使用
//private 只能在类的内部使用
//protected 子类和类的内部可以使用，外部不能使用











