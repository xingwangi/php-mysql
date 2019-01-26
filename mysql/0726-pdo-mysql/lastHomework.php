<?php
//作业*************
create table stu(
	sid int primary key auto_increment,
	sname char(20) not null default '',
	sex enum('男','女') not null default '男',
	birthday date
);


//1.查找所有90后的女同学
select * from stu where sex='女' and year(birthday) >=1990 and year(birthday)<2000;
//2.查找班级年龄最小同学
select * from stu order by birthday desc limit 1;

//以下的作业，需要先分析关联几张表
//三张表关联：select * from arc as a join arc_tag as at on a.aid=at.aid join tag as t on at.tid=t.tid;
//arc（aid title） 文章表
//arc_tag(aid tid) 中间表
//tag (tid tname) 标签表

//3.检索出文章的标签id(两张表)
select * from arc a join arc_tag at on a.aid=at.aid;
//4.检索出“后盾”都对应的标签名(三张表)
select * from arc a join arc_tag at on a.aid=at.aid join tag t on at.tid=t.tid where title='后盾';
//5.检索出和“后盾”拥有一样标签的文章(不要求完全一样) ，（分两步做）
select * from arc a join arc_tag at on a.aid=at.aid where title='后盾';
+-----+--------+------+------+
| aid | title  | aid  | tid  |
+-----+--------+------+------+
|   1 | 后盾   |    1 |    1 |
|   1 | 后盾   |    1 |    2 |
+-----+--------+------+------+
//2.查询标签id是1或者2的文章，然后再排除自己
select * from arc a join arc_tag at on a.aid=at.aid where tid in(1,2) and title!='后盾';
+-----+--------------------+------+------+
| aid | title              | aid  | tid  |
+-----+--------------------+------+------+
|   2 | 鸡蛋与工程师         |    2 |    1 |
|   3 | 大西瓜              |    3 |    2 |
+-----+--------------------+------+------+
//6.检索出每篇文章所对应的标签名(三张表)
select * from arc a join arc_tag at on a.aid=at.aid join tag t on at.tid=t.tid;
//7.检索出每个标签所对应文章的数量(两张表)
select tname,count(*) from arc_tag at join tag t on at.tid=t.tid group by t.tid;