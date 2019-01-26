<?php
include '../../functions.php';
if(IS_POST){
	include './Upload.class.php';
	$upload = new Upload();
	if($upload->up()){//上传成功
		echo '上传成功了';
	}else{//上传失败
		$str = <<<str
<script>
alert('{$upload->error}');
</script>
str;
		echo $str;

	}

}
include "./tpl.php";