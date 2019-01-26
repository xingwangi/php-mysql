<?php
function __autoload($name){
	include "./{$name}.php";
}
//Model::get();
Model::find(1);