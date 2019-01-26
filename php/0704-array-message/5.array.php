<?php
include "../functions.php";
/*
$arr = ['白富美','高富帅'];
//在数组末尾添加一个或者多个单元
array_push($arr,'矮穷矬');
//将数组末尾的单元弹出
array_pop($arr);
//将数组的开头单元弹出
array_shift($arr);
//在数组开头加入一个或者多个单元
array_unshift($arr,'矮穷矬');
p($arr);
*/


/*
$arr = ['a'=>'A','b'=>'B'];
//获得数组中所有的键名，返回值是数组形式
$keys = array_keys($arr);
p($keys);
*/


/*
$arr = ['a'=>'A','b'=>'B'];
//获得数组中所有的键值，返回值是数组形式
$values = array_values($arr);
p($values);
*/

/*
//索引数组合并(不会产生覆盖现象，会直接追加到后面)
$a1 = ['a','c'];
$a2 = ['b'];
$newArr = array_merge($a1,$a2);
p($newArr);
*/


/*
//关联数组的合并(会产生覆盖现象，会后面的数组覆盖前面的数组)
$a1 = ['a'=>'A','c'=>'C'];
$a2 = ['c'=>'CC'];
$a3 = ['d'=>'D'];
$newArr = array_merge($a1,$a2,$a3);
p($newArr);
*/

/*
$arr = ['title'=>'后盾网','url'=>'www.houdunwang.com'];
print_r($arr);
echo '<hr/>';
var_dump($arr);
echo '<hr/>';
//打印出合法的PHP代码
var_export($arr);
*/



/*
$arr = ['title'=>'后盾网','url'=>'www.houdunwang.com'];
//传递第二个参数true，那么合法的PHP代码会以返回值的形式返给变量
$a = var_export($arr,true);
p($a);
*/






