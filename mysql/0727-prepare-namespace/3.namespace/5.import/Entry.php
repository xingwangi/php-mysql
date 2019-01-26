<?php namespace controller;
//类名导入
use Tool\Model;

class Entry{
	public function index(){
		include "./Model.php";
		$model = new Model();
		$model->connect();
	}
}