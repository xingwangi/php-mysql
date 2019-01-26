<?php
/**
 * Created by PhpStorm.
 * User: mazhenyu
 * Date: 14/07/2017
 * Time: 15:24
 */
class Controller {
	/**
	 * 载入模板
	 */
	protected function display(){
		//include "./tpl/home/index.php";
		include "./tpl/".strtolower(CONTROLLER)."/".ACTION.".php";
	}

	/**
	 * 写入到数据库
	 * @param $filename
	 * @param $data
	 */
	protected function dataToFile($filename,$data){
		$data = var_export($data,true);
		$str = <<<str
<?php
return {$data};
?>
str;
		file_put_contents($filename,$str);

	}

	/**
	 * 消息提示
	 * @param $msg
	 * @param $url
	 */
	protected function message($msg,$url=''){
		if(empty($url)){
			$script = "window.history.back()";
		}else{
			$script = "location.href='{$url}'";
		}
		$str = <<<str
<script>
alert('{$msg}');
$script;
</script>
str;
		echo $str;exit;

	}



}