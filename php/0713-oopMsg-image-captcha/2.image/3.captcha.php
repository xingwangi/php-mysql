<?php
//1.发送头部
header('Content-type:image/png');
//2.创建画布
$img = imagecreatetruecolor(200,80);
//3.填充
$white = hexdec('#ffffff');
imagefill($img,0,0,$white);
//4.写字
$seed = '1234567890qwertyiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
for ($i = 0; $i < 4; $i++){
	//文字颜色
	$color = imagecolorallocate($img,mt_rand(0,200),mt_rand(0,200),mt_rand(0,200));
	//文字的x,y坐标
	$y = (80 + 40) / 2;
	$x = 200 / 4 * $i+5;
	//随机文字
	$text = $seed[mt_rand(0,strlen($seed)-1)];
	//$image, $size, $angle, $x, $y, $color, $fontfile, $text
	imagettftext($img,40,mt_rand(-45,45),$x,$y,$color,'./font.ttf',$text);
}

//制作干扰
for ($i = 0; $i < 80; $i++){
	$color = imagecolorallocate($img,mt_rand(0,200),mt_rand(0,200),mt_rand(0,200));
	$wh = mt_rand(0,20);
	imageellipse($img,mt_rand(0,200),mt_rand(0,80),$wh,$wh,$color);
}


//输出图像
imagepng($img);
