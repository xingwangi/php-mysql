<?php
//echo $_COOKIE['hd'];
$user = $_COOKIE['user'];
//反序列化为数组
print_r(unserialize($user));