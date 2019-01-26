<?php
namespace tool;
/**
 * Created by PhpStorm.
 * User: mazhenyu
 * Date: 30/08/2017
 * Time: 14:52
 */

class Memcache {
	private static $mem;
	public function __construct() {
		$this->connect();
	}

	private function connect(){
		if(!is_null(self::$mem)) return;
		$mem = new \Memcache();
		$mem->connect('127.0.0.1',11211);
		self::$mem = $mem;
	}

	public function get($name){
		return self::$mem->get($name);
	}

	public function set($name,$value,$time=0){
		self::$mem->set($name,$value,0,$time);
	}

	public function flush(){
		self::$mem->flush();
	}
}