<?php
/*
$file = '22.2.jpg';
//从左边开始，获取 . 最先出现的位置，
//echo strpos($file,'.');
//从右边开始，获取 . 最先出现的位置
echo strrpos($file,'.');
*/

/*
$str = 'aAbcAdef';
//搜索小写a，替换为*
//echo str_replace('a','*',$str);
//echo str_replace(['a','A'],'*',$str);
//echo str_replace(['a','A'],['*','+'],$str);

//搜索不区分大小写，进行替换
//echo str_ireplace('a','*',$str);
*/


/*
$url = 'http://www.baidu.com/index.php?wd=后盾网';
echo $url;
echo '<hr/>';
//编码(因为汉字一些字符在utf-8或者gbk转码的时候有问题，那么我们先编码)
$url = urlencode($url);
echo $url;
echo '<hr/>';
//解码（使用的时候再解码，这样就可以避免转码问题了）
echo urldecode($url);
*/


/*
$str = <<<str
<script>
alert('给你留言了');
</script>
str;
//echo $str;
//实体化字符串
echo htmlspecialchars($str);
*/


$str = '你的网站"不错"哦';
//$str = ''
//自动转义(把一些特殊字符串加上 \ )
$str = addslashes($str);
//反转义(转换成原来的样子)
echo stripslashes($str);








?>











