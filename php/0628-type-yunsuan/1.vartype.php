<?php 
/*
//有空格的字符串为真 true
$a = " ";
if($a){
	echo 'yes';
}else{
	echo 'no';
}
*/



/*
//整型
$var = 1;
//浮点型
$var = 1.1;
//字符串
$var = '123';
var_dump($var);
*/




/*
//NULL类型的三种情况

//1.直接被赋值为NULL
// $a = NULL;

//2.变量未被赋予任何值
// var_dump($a);

//3.变量被删除
// $a = 123;
// unset($a);
// var_dump($a);
*/

/*
//$var是一个布尔型
$var = true;
//检测一个变量是否为布尔类型
$bool = is_bool($var);
var_dump($bool);
*/


/*
$var = '123';
//判断变量是否为字符串，如果是的话输出true,反之false
var_dump(is_string($var));
*/



/*
$var = 1;
//获取变量类型
$type = gettype($var);
echo $type;
*/



//自动转换
// $result = 1 + '3abc';
// echo $result;


/*
//强制转换
//方法1(建议)：
// $var = '333abc';
// echo intval($var);

//方法2：
$var = '333abc';
settype($var, 'integer');
echo $var;
*/






















































 ?>