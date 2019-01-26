<?php
session_save_path('.');
//更改保存session_id的本地cookie的名称
session_name('hdphp');
session_start();
$arr = $_SESSION['user'];
print_r($arr);


