<?php
//接口，接口中定义的所有方法都必须是公有（public)，不能是 （protected）和 （private）这是接口的特性
interface Model{
	public function get();
	public function find($id);
	public function all($id,$var);

//    protected function error();  // 错误的
}
interface Db{
	public function connect();
}

//可以实现多个接口
class M implements Model,Db{
	public function connect() {
		// TODO: Implement connect() method.
	}
    protected  $name;
	private $fa;


	public function get(){
		echo 'M 里面的 get';
	}
	public function find($id){}

	public function all($id,$var){

	}
}

$m = new M;
$m->get();