<?php
//作业：
//苏启海、许冰峰、何根平、张东辉
// 1.创建学生表，包含字段id,学生姓名,性别,年龄
create table stu(
	uid int  primary key auto_increment,
	name char(10) not null default '',
	sex enum('男','女') not null default '男',
	age int default 0
);
//删除user表
drop table stu;


// 2.创建学生日记表，包含标题，内容，查看次数
create table diary(
	did int primary key auto_increment,
	title char(20) not null default '',
	content text,
	click int not null default 0
);
// 3.上讲台打sql