<?php
header('Content-type:text/html;charset=utf-8');
define('IS_POST',$_SERVER['REQUEST_METHOD']=='POST'?TRUE:FALSE);
//        是否是AJAX 请求
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
    define("IS_AJAX", true);
} else {
    define("IS_AJAX", false);

}
//判断 p 函数是否存在  如果不存在
if (!function_exists('p')) {
//    定义p函数
    function p($con)
    {
        echo "<pre style='padding: 15px;background: whitesmoke;border-radius: 46px;color: black;font-size: 18px;font-weight: 700'>";
        if (is_null($con)) {
            var_dump($con);
        } elseif (is_bool($con)) {
            var_dump($con);
        } else {
            print_r($con);
        }
        echo '</pre>';
    }
}




