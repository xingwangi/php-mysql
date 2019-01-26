<?php
//接口，里面不能有普通方法
interface Model{
	public function get();
	public function find($id);
	public function all($id,$var);

}
interface Db{
	public function connect();
}

//可以实现多个接口
class M implements Model,Db{
	public function connect() {
		// TODO: Implement connect() method.
	}

	public function get(){
		echo 'M 里面的 get';
	}
	public function find($id){}

	public function all($id,$var){

	}
}

$m = new M;
$m->get();