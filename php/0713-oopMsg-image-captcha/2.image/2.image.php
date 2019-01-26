<?php
//1.发送头，告诉浏览器我是一张图片
header('Content-type:image/png');

//2.创建画布(返回一个资源)
$img = imageCreateTrueColor(600,600);
//var_dump($img);

//3.配色
$color = imagecolorallocate($img,197,205,255);

//4.作画
//画布填充
imagefill($img,0,0,$color);
//矩形
$red = imagecolorallocate($img,255,0,0);
imageRectangle($img,100,100,500,500,$red);
imageFilledRectangle($img,200,200,400,400,$red);
//圆形
//把16进制的颜色转为10进制
$blue = hexdec('#0017ff');
imageellipse($img,300,300,150,150,$blue);
imageellipse($img,300,300,150,80,$blue);
$green = hexdec('#00f740');
imageFilledellipse($img,300,300,130,90,$green);
//点
for ($i = 0; $i < 100000; $i++){
	$black = hexdec('#000000');
	$color = imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
	imagesetpixel($img,mt_rand(0,600),mt_rand(0,600),$color);
}
//线
$black = hexdec('#000000');
imageline($img,0,300,600,300,$black);



//5.输出
imagepng($img);
//另存为./1.jpg
//imagepng($img,'./1.png');

//6.释放资源
imagedestroy($img);












