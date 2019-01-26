<?php 
$id = $_POST['id'];
$data = include "./data.php";
unset($data[$id]);
$arr = array();
foreach ($data as $v) {
	$arr[] = $v;
}
$code = "<?php return " . var_export($arr,true) . "?>";
file_put_contents('./data.php', $code);

 ?>