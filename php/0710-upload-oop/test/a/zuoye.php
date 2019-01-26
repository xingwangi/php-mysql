<?php
//作业1：自己重新开发目录移动函数（不要用rename）
function move($src,$dst){
	//复制到目标目录
	cp($src,$dst);
	//删除源目录
	del($src);
}

//递归复制函数
function cp($src,$dst){
	//文件用copy复制
	//目录用mkdir创建
}
move('./a','./test/a');



//作业2.编写PHP文件下载处理功能

//作业3：复习所讲内容（目录处理，上传，下载）