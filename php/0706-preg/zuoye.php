<?php
//1验证邮箱与网址是否正确
$email = '410004417@qq.com';
$email = '410004417@163.com';
$email = '410004417@sina.com.cn';
$email = 'mazhenyu@houdunwang.com';
$email = 'mazhenyu2017@189.com';
$email = 'mazhenyu-2017@126.com';
$email = 'mazhenyu_2017@gmail.com';




$url = 'http://www.baidu.com';
$url = 'https://www.baidu.com';
$url = 'www.baidu.com';
$url = 'mp3.baidu.com';
$url = 'baidu.com';
$url = 'baidu.cn';
$url = 'baidu.com.cn';
$url = 'baidu.net';
$url = 'www.12306.com';
$url = 'www.baidu-wang.com';
$url = 'www.baiduwang.com';







//2将html文档中的所有a链接替换为http://www.houdunwang.com
$str = <<<str
<div class="topbar">
			<ul class="site-nav topmenu">
				<li id="menu-item-6360" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6360"><a href="http://www.daqianduan.com/contact">联系大前端</a></li>
<li id="menu-item-6361" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6361"><a href="http://www.daqianduan.com/ads">广告合作</a></li>
<li id="menu-item-6362" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6362"><a href="http://www.houdunwang.com">免费发布招聘</a></li>
<li id="menu-item-6363" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6363"><a href="http://www.daqianduan.com/about">关于大前端</a></li>
<li id="menu-item-6364" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6364"><a href="http://www.daqianduan.com/links">友情链接</a></li>
				<li class="menusns">
					<a href="javascript:;">关注本站 <i class="fa fa-angle-down"></i></a>
					<ul class="sub-menu">
																																				<li><a target="_blank" href="http://www.daqianduan.com/feed"><i class="fa fa-rss"></i> RSS订阅</a></li>					</ul>

str;
echo $str;











