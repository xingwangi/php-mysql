<?php

/**
 * Created by PhpStorm.
 * User: mazhenyu
 * Date: 26/07/2017
 * Time: 17:48
 */
class Controller {
	protected function display($data = []){
		include "./view/" . CONTROLLER . '/' . ACTION . '.php';
	}
}