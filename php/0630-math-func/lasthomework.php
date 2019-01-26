<?php

gt('start');
for ($i = 0; $i < 1000000; $i++){
	$a = 1;
}
echo gt('end');

function gt($p){
	//what(是什么) why（为什么要这么做）
	//1.声明$time为静态变量
	//2.因为函数要调用两次，变量要共享，到end的时候需要start的时候存起来的时间
	static $time;
	if($p == 'start'){
		//1.记录开始时间点
		//2.因为这个函数是要算时间差的，需要结束的时间点减去开始的时间点，所以要提前记录
		$time = microtime(true);
	}elseif($p == 'end'){
		return microtime(true) - $time;
	}
}






