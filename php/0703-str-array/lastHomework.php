<?php 
header('Content-type:text/html;charset=utf-8');
//检测是否是图片的函数

$file1 = '1.jpg';
$file2 = '2.2.png';
$file3 = 'hdw.zip';
$file4 = 'hdw.JPG';

/**
 * [checkPic 检测是否为图片]
 * @param  [string] $f [文件名]
 * @return [bool]    [真或假]
 */
function checkPic($f){
	//1.获取类型
	$type =  strtolower(ltrim(strrchr($f, '.'),'.'));
	//2.根据类型判断(in_array判断单元是否在数组中，如果在返回true,反之false)
	$bool = in_array($type, ['jpg','png','gif','jpeg']);
	//返回布尔值，真或者假
	return $bool;
}

// var_dump(checkPic($file3));
if(checkPic($file3)){
	echo '<script>alert("是图片")</script>';
}else{
	echo '<h2 style="color:red">不是图片</h2>';
}


























 ?>