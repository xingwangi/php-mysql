<?php
function __autoload($c){
	include "./{$c}.php";
}
$h = new HomeController();
$a = isset($_GET['a']) ? $_GET['a'] : 'index';
$h->$a();