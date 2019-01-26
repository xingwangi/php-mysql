<?php
namespace tool;
use PDO;
use PDOException;
/**
 * Created by PhpStorm.
 * User: mazhenyu
 * Date: 30/08/2017
 * Time: 14:52
 */

class Model {
	private static $pdo;

	public function __construct() {
		$this->connect();
	}

	/**
	 * 链接数据库
	 */
	private function connect(){
		if(!is_null(self::$pdo)) return;
		try{
			$dsn = 'mysql:host=127.0.0.1;dbname=shop';
			$pdo = new PDO($dsn,'root','');
			//设置错误类型为异常错误，为了下面的catch可以捕获
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$pdo->exec("SET NAMES UTF8");
			//存入到静态属性中
			self::$pdo = $pdo;
		}catch (PDOException $e){
			exit($e->getMessage());
		}
	}

	/**
	 * 执行有结果集操作
	 * @param $sql
	 */
	public function q($sql){
		$result = self::$pdo->query($sql);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	/**
	 * 执行无结果集的操作
	 * @param $sql
	 */
	public function e($sql){
		self::$pdo->exec($sql);
	}
}