<?php
include "../functions.php";
//作业1：自己重新开发目录移动函数（不要用rename）
function move($src,$dst){
	//复制到目标目录
	cp($src,$dst);
	//删除源目录
//	del($src);
}

//递归复制函数
function cp($src,$dst){
	if(!is_dir($src)){
		return false;
	}
	is_dir($dst) || mkdir($dst,0777,true);
	//文件用copy复制
	//目录用mkdir创建
	foreach (glob($src . '/*') as $v ) {
		$dest = $dst . '/' . basename($v);
		//是目录则cp递归，是文件则copy复制
		is_dir($v) ? cp($v,$dest) : copy($v,$dest);
	}
}
cp('./a','./test/a');



//$src = './a'
//$dst = './test/a'
//$v 就是a目录下面所有的文件和目录，例如：./a/3.upload.php
//组合新的路径 ./test/a/3.upload.php










