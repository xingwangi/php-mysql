<?php 
//链接数据库
mysql -uroot -proot
//连接远程服务器的mysql(远程服务器提供远程连接的权限)
mysql -u用户名 -p密码 -h主机名

//退出 exit 或者 quit
//结束  ; 或者 \g
//清除  \c

//显示mysql中所有的数据库
show databases;

//创建blog数据库
create database blog charset utf8;

//选择数据库（相当于打开目录）
use blog;

//创建表
create table user(
	uid int,
	username char(20),
	password char(32)
);

//录入内容
insert into user set uid=1,username='admin',password='admin888';
insert into user set uid=2,username='user',password='admin888';

//查看user表的内容
select * from user;
+------+----------+----------+
| uid  | username | password |
+------+----------+----------+
|    1 | admin    | admin888 |
|    2 | user     | admin888 |
+------+----------+----------+
select username from user;

//删除uid为2的数据
delete from user where uid=2;

//删除整张user表
drop table user;

//查看当前库有什么表
show tables;
+----------------+
| Tables_in_blog |
+----------------+
| cate           |
+----------------+

//删除库
drop database blog;



定长：char(32) 
//优点：速度相对快一些
//缺点：空间不会自动伸缩，比较占空间

变长：varchar(32)
//优点：空间会自动伸缩，比较省空间
//缺点：速度相对慢一些


常用的字符串类型：
varchar、char、text(长文本数据)



//创建文章表
//unsigned 让类型变成非负范围
create table article(
	aid smallint unsigned,
	title char(80),
	des varchar(255),
	content text
);


select * from article\G
// *************************** 1. row ***************************
//     aid: 1
//   title: 今天是阴天
//     des: 阴天不错呀
// content: 我是内容，我比较长
// 1 row in set (0.00 sec)



//decimal(涉及到金钱，一定要用decimal)
//decimal(5,2) 整数和小数总共有5位，2小数位数
create table goods(
	gid int,
	gname char(80),
	price decimal(5,2)
);


//zerofill 零填充(前导零)
//int(3) 并不是只能存3位数字，而是和前导零zerofill配合使用，它的范围就是(0，4294967 295)
create table lists(
	lid int(3) unsigned zerofill,
	lname char(10)
);
select * from lists;
+------+-------+
| lid  | lname |
+------+-------+
|  001 | NULL  |
|  100 | NULL  |
|  099 | NULL  |
----------------

00001       秋裤
00002       秋衣



//enum 单选
//set 多选
create table user(
	uid smallint,
	name char(10),
	sex enum('男','女'),
	hobby set('足球','篮球','乒乓球')
);

//录入单选和多选数据
insert into user set uid=1,sex='男',hobby='篮球,乒乓球';

//查看user表的表结构
desc user;


//查询喜欢“足球”的同学
select * from user;
+------+-----------+------+------------------+
| uid  | name      | sex  | hobby            |
+------+-----------+------+------------------+
|    1 | 张伟      | 男   | 足球,篮球        |
|    1 | 大张伟    | 男   | 足球,乒乓球      |
|    1 | 吴秀波    | 男   | 乒乓球           |
+------+-----------+------+------------------+
//方法1：
select * from user where find_in_set('足球',hobby);
+------+-----------+------+------------------+
| uid  | name      | sex  | hobby            |
+------+-----------+------+------------------+
|    1 | 张伟      | 男   | 足球,篮球        |
|    1 | 大张伟    | 男   | 足球,乒乓球      |
+------+-----------+------+------------------+
//方法2：
select * from user where hobby like '%足球%';
+------+-----------+------+------------------+
| uid  | name      | sex  | hobby            |
+------+-----------+------+------------------+
|    1 | 张伟      | 男   | 足球,篮球        |
|    1 | 大张伟    | 男   | 足球,乒乓球      |
+------+-----------+------+------------------+


//default 默认值
create table user(
	uid smallint default 0,
	name char(10) default '',
	sex enum('男','女') default '男',
	hobby set('足球','篮球','乒乓球') default '足球'
);

//unique 唯一
//下面的例子：限制了username必须唯一
//primary key 主键
//auto_increment 自增
create table user(
	uid smallint primary key auto_increment,
	username char(10) unique default '',
	password char(32) default ''
);

//作业：
// 1.创建学生表，包含字段id,学生姓名,性别,年龄 
// 2.创建学生日记表，包含标题，内容，查看次数
// 3.上讲台打sql













 ?>