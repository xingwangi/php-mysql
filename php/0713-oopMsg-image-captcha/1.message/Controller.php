<?php

/**
 * Created by PhpStorm.
 * User: mazhenyu
 * Date: 13/07/2017
 * Time: 15:25
 */
class Controller {
	/**
	 * 成功提示方法（因为这个方法将来要被很多子类共用，所以写到父类里面）
	 * @param $msg [提示的消息]
	 * @param $url [跳转的地址]
	 */
	protected function success($msg,$url){
		$str = <<<str
<script>
alert('$msg');
location.href="{$url}";
</script>
str;
		echo $str;exit;

	}














}