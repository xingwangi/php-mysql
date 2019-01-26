<?php
$data = ['今天天气好晴朗','处处好风光','你是风儿我是沙儿'];
//如果存在get参数也就是 index.php?i=1
if(isset($_GET['i'])){
	$i = $_GET['i'];
}else{//如果不存在get参数 index.php
	$i = 0;
}
//把$i可以作为数组的下标调出不同的文章
echo $data[$i];

?>
<ul>
	<li>
		<a href="?i=0">今天天气？</a>
	</li>
	<li>
		<a href="?i=1">风光好吗？</a>
	</li>
	<li>
		<a href="?i=2">你是疯子？</a>
	</li>
</ul>
