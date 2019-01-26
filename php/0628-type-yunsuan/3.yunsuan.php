<?php
header('Content-type:text/html;charset=utf-8'); 
/*
$a = 1;
$b = '1';
//=== 全等于 不但要求值要相等，还要要求类型必须相同
if($a === $b){
	echo 'yes';
}else{
	echo 'no';
}
*/


/*
//三元表达式
// $a = 10;
// $result = isset($a) ? $a : 0;
// echo $result;


$a = 10;
if(isset($a)){
	$result = $a;
}else{
	$result = 0;
}
echo $result;
*/


/*
$a = true;
$b = false;
//&& 或者 and 要求左右两侧必须同时成立
if($a && $b){
	echo 'yes';
}else{
	echo 'no';
}
*/


/*
$a = true;
$b = false;
//$a 和 $b 只要有一个成立，就算成立
if($a || $b){
	echo 'yes';
}else{
	echo 'no';
}
*/


/*
$a = '123';
if(!$a){
	echo 'yes';
}else{
	echo 'no';
}
*/



/*
$a = 'houdun';
$b = 'wang';
//字符串连接符
echo $a . $b;
*/


/*
$a = 'houdun';
//连等于
//相当于：$a = $a . 'wang';
$a .= 'wang';
echo $a;
*/





/*
//结果是012
for ($i=0; $i < 5; $i++) { 
	if($i == 3){
		break;
	}
	echo $i . '<hr/>';
}
*/

/*
//0124
for ($i=0; $i < 5; $i++) { 
	if($i == 3){
		continue;
	}
	echo $i . '<hr/>';
}
*/


/*
//结果是123
$a = 1;
while ($a <= 3) {
	echo $a;
	$a++;
}
*/


//这个例子十分重要，打3遍以上
$action = isset($_GET['a']) ? $_GET['a'] : 'index';
switch ($action) {
	case 'index':
		echo '这是首页';
		break;
	case 'add':
		echo '这是添加页';
		break;
	
	default:
		echo '404未找到';
		break;
}



?>
<ul>
	<li><a href="3.yunsuan.php">首页</a></li>
	<li><a href="3.yunsuan.php?a=add">添加</a></li>
	<li><a href="3.yunsuan.php?a=luanqibazao">不存在的页面</a></li>
</ul>
























