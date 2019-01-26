<?php
/*
$num = 1.9;
//向上取整
//echo ceil($num);
//向下取整
//echo floor($num);
*/

//获取最大值
/*
$arr = [1,100,500];
//echo max($arr);
*/
/*
echo max(1,200,300);
*/


/*
//获取最小值
//echo min(100,5,3);
$arr = [1,100,500];
echo min($arr);
*/

/*
$num = 1.5;
//四舍五入
echo round($num);
*/


/*
$num = 1.5533;
//四舍五入，并且小数点后面保留两位小数
echo round($num,2);
*/

//生成0-3的随机数，包括0和3
//echo mt_rand(0,3);

$color = ['green','pink','purple','blue','white','black','yellow'];
?>
<style>
	body{
		background: <?php echo $color[mt_rand(0,6)]; ?>
	}
</style>
<body>

</body>
