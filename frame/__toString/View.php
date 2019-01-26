<?php

/**
 * Created by PhpStorm.
 * User: mazhenyu
 * Date: 28/07/2017
 * Time: 15:26
 */
class View {

	//当对象被echo 输出的时候，会自动触发此方法
	//此方法必须返回字符串！！！
	public function __toString() {
		echo '--toString--';
		return '';
	}

	public function index(){
		//返回当前对象
		return $this;
	}
}
//现在相当于echo 当前对象的index方法，index方法返回了当前对象，所以说现在就是echo 对象
echo call_user_func_array([new View(),'index'],[]);








