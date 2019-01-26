<?php
class Base{
	public function get(){
		echo 'base get';
	}

}

call_user_func_array([new Base(),'get'],[]);
//call_user_func_array([对象,方法],[参数]);