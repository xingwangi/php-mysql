<?php
$data = '后盾网';
//变量名变为键名，变量值变为键值
$arr = compact('data');
//print_r($arr);
//键名变为变量名，键值变为变量值
extract($arr);
print_r($data);