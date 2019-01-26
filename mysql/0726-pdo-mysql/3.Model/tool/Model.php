<?php

/**
 * Created by PhpStorm.
 * User: mazhenyu
 * Date: 26/07/2017
 * Time: 17:51
 */
class Model {
	public static function __callStatic( $name, $arguments ) {
		return call_user_func_array([new Base(),$name],$arguments);
	}
}