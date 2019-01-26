<?php
print_r($_GET);
echo '<hr/>';
print_r($_POST);
echo '<hr/>';


//可以同时接收get和post请求过来的数据
//当我们不确定请求方式，有可能是get有可能是post，那么这时候用request,request用的情况比较少
//print_r($_REQUEST);



?>
<meta charset="utf-8">
<form action="?username=admin" method="post">
	姓名:<input type="text" name="username" id="">
	<br>
	<input type="submit" value="注册">
</form>
