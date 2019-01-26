<?php
include '../functions.php';
//p($_SERVER);
define('IS_POST',$_SERVER['REQUEST_METHOD'] == 'POST' ? true : false);
if(IS_POST){
	echo '用户提交了';
}

?>
<form action="" method="post">
	<input type="submit" value="提交">
</form>
