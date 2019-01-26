<?php
include './tool/Model.php';
include './tool/Memcache.php';
//从数据库删除
$model = new \tool\Model();
$cid = $_GET['cid'];
$model->e("DELETE FROM category WHERE cid={$cid}");

//清空缓存
$mem = new \tool\Memcache();
$mem->flush();



//跳转
$str = <<<str
<script>
alert('delete yes!');
location.href='index.php';
</script>
str;
echo $str;


