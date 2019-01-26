<?php
class Model{
	public static function __callStatic( $name, $arguments ) {
		call_user_func_array([new Base(),$name],$arguments);
	}
}