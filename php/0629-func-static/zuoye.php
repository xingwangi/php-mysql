<?php
gt('start');//开始位置记录开始时间
for ($i = 0; $i < 1000000;$i++){
	$a = 1;
}
echo gt('end');//结束的时候算出代码运行了多久

//计算代码执行了多久的函数
function gt($p){
	if($p == 'start'){

	}elseif($p == 'end'){

	}
}