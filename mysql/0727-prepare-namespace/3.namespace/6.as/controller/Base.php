<?php
namespace controller;
//起别名
use model\Base as BaseModel;
class Base {
	public static function get(){
		include "./model/Base.php";
		BaseModel::get();
	}
}