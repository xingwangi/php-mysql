<?php
//更改保存目录(一定要在session_start的上面)
session_save_path('.');
//更改保存session_id的本地cookie的名称，获取的时候也需要更改（一定要在session_start的上面）
session_name('hdphp');
//session_id(123);
session_start();
$_SESSION['user'] = [
	'username' => 'user',
	'uid'      => 2
];





//1.session存一些敏感的信息（用户信息[用户名,用户id,用户头像]，购物车）
//2.session可以直接存储数组和对象