<?php
//1.通过手动改地址栏
//2.form表单提交
//3.通过a连接跳转

echo '<pre>';
print_r($_GET);
echo '</pre>';
//echo $_GET['test'];
//echo $_GET['b'];



?>

<hr>
<a href="./1.php?test=测试&b=hdphp">a连接传递get参数</a>
<hr>
<form action="" method="get">
	姓名：<input type="text" name="uname" id="">
	<br>
	密码：<input type="password" name="password" id="">
	<br>
	<input type="submit" value="提交">
</form>
