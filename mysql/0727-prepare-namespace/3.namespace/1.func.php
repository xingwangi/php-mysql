<?php
namespace vue;
function p(){
	echo 'vue<br/>';
}
//p();
namespace wechat;
function p(){
	echo 'wechat<br/>';
}
//p();
//如何在wechat空间下面调取vue空间的p函数
\vue\p();