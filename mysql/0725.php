<?php
//一次录入多条数据
insert into goods (gid,gname,price) values (4,'ip7s',400.78),(5,'ip7s plus',600.01);
//前提条件表里必须有主键
//通过主键判断，如果没有就添加，有就替换
replace into category (cid,cname) values (3,'旅游123');
//修改，要有where条件，如果不加就会修改全部
update category set cname='娱乐' where cid=3;
//删除，要有where条件，如果不加就会删除全部
delete from category where cid>3;
//请空表，截断表，让主键归位，从1开始
truncate category;

//把category表名改为cate
alter table category rename cate;

//更名同时修改类型 change
//把cid改为id，同时修改类型为int
alter table cate change cid id int unsigned not null default 0;
//修改类型 modify
alter table cate modify id tinyint(10) unsigned not null default 0;
//after 在什么后面
alter table cate modify cname char(35) not null default '' after id;
//追加字段
alter table cate add is_system tinyint unsigned not null default 0;
//删除字段
alter table cate drop is_system;

//增加主键有两步：
//1.增加主键，一定要确保gid不能有重复的数据
alter table goods add primary key(gid);
//2.增加自增
alter table goods modify gid int auto_increment;


//删除主键有两步：
//1.删除自增
alter table goods modify gid int;
//2.删除主键
alter table goods drop primary key;



//date 类型的使用
create table userinfo(
	uid smallint primary key auto_increment,
	uname char(20) not null default '',
	birthday date
);
//录入date类型的数据
insert into userinfo (uname,birthday) values ('鹿晗','1990-3-2'),('刘壮实','1991-1-1');

//获得当前的时间
select now();
//获得年份
select year('2018-1-1');
select year(now());
+-------------+
| year(now()) |
+-------------+
|        2017 |
+-------------+

//统计
select count(*) as c from cate;
//获得最大的生日
select max(birthday) from userinfo;
+---------------+
| max(birthday) |
+---------------+
| 1991-01-01    |
+---------------+
//获得最小的生日
select min(birthday) from userinfo;
+---------------+
| min(birthday) |
+---------------+
| 1990-03-02    |
+---------------+
//获得总和
select sum(click) from arc;
+------------+
| sum(click) |
+------------+
|       1200 |
+------------+
//获得平均值
select avg(click) from arc;

//分组
select * from stu group by sex;                    
+-----+-----------+-----+------------+
| sid | sname     | sex | birthday   |
+-----+-----------+-----+------------+
|   2 | 谢霆锋    | 男  | 1980-10-03 |
|   1 | 章子怡    | 女  | 1978-01-02 |
+-----+-----------+-----+------------+
//分组加统计
select sex,count(*) from stu group by sex;
+-----+----------+
| sex | count(*) |
+-----+----------+
| 男  |        2 |
| 女  |        3 |
+-----+----------+
//对分组之后的结果进行筛选，having和group by是配合使用的
select * from stu group by sex having sex='男';
+-----+-----------+-----+------------+
| sid | sname     | sex | birthday   |
+-----+-----------+-----+------------+
|   2 | 谢霆锋    | 男  | 1980-10-03 |
+-----+-----------+-----+------------+



//多表查询
//============1:1===============
//城市表 city
cid     cname      
 1       北京        
 2       上海        

//区号表 code
 coid   number    cid
  1      020       2
  2      010       1

//============1:N===============
//班级表 grade
gid    gname     
 1      81       
 2      83
 3      86

create table grade(
	gid smallint primary key auto_increment,
	gname char(10) not null default ''
);

//学生表 student
sid      sname       gid
 1       周润发        1
 2       成龙          2
 3       洪金宝        2
 4       刘德华        1
 5       周星驰        3
create table student(
	sid int primary key auto_increment,
	sname char(15) not null default '',
	gid smallint unsigned not null default 0
);

//两张表数据关联，需要加上限制条件，否则笛卡尔积很多数据没有意义
//关联条件注意，如果两张表都叫gid,那么需要加上修饰，否则会有歧义错误
select * from student,grade where student.gid=grade.gid;
+-----+-----------+-----+-----+-------+
| sid | sname     | gid | gid | gname |
+-----+-----------+-----+-----+-------+
|   1 | 周润发    |   1 |   1 | 81    |
|   2 | 成龙      |   2 |   2 | 83    |
|   3 | 洪金宝    |   3 |   3 | 86    |
|   4 | 刘德华    |   1 |   1 | 81    |
|   5 | 周星驰    |   3 |   3 | 86    |
+-----+-----------+-----+-----+-------+

//内关联(推荐写法)
//on 是写关联条件
select * from student as s join grade as g on s.gid=g.gid;
//where 是关联之后，如果再有条件的话再使用
select * from student as s join grade as g on s.gid=g.gid where gname=81;
+-----+-----------+-----+-----+-------+
| sid | sname     | gid | gid | gname |
+-----+-----------+-----+-----+-------+
|   1 | 周润发    |   1 |   1 | 81    |
|   4 | 刘德华    |   1 |   1 | 81    |
+-----+-----------+-----+-----+-------+

//外关联
//左关联，无论关联条件是否成功，左边的表数据都会显示出来
select * from student as s left join grade as g on s.gid=g.gid;
+-----+-----------+-----+------+-------+
| sid | sname     | gid | gid  | gname |
+-----+-----------+-----+------+-------+
|   1 | 周润发    |   1 |    1 | 81    |
|   4 | 刘德华    |   1 |    1 | 81    |
|   2 | 成龙      |   2 |    2 | 83    |
|   3 | 洪金宝    |   3 |    3 | 86    |
|   5 | 周星驰    |   3 |    3 | 86    |
|   6 | 董浩      |   4 | NULL | NULL  |
+-----+-----------+-----+------+-------+
//查询没有班级的同学
select * from student as s left join grade as g on s.gid=g.gid where g.gid is null;
+-----+--------+-----+------+-------+
| sid | sname  | gid | gid  | gname |
+-----+--------+-----+------+-------+
|   6 | 董浩   |   4 | NULL | NULL  |
+-----+--------+-----+------+-------+

//右关联
select * from student as s right join grade as g on s.gid=g.gid; 
+------+-----------+------+-----+-------+
| sid  | sname     | gid  | gid | gname |
+------+-----------+------+-----+-------+
|    1 | 周润发    |    1 |   1 | 81    |
|    2 | 成龙      |    2 |   2 | 83    |
|    3 | 洪金宝    |    3 |   3 | 86    |
|    4 | 刘德华    |    1 |   1 | 81    |
|    5 | 周星驰    |    3 |   3 | 86    |
| NULL | NULL      | NULL |   5 | 89    |
+------+-----------+------+-----+-------+
//查询没有学生的班级
select * from student as s right join grade as g on s.gid=g.gid where sid is null;
+------+-------+------+-----+-------+
| sid  | sname | gid  | gid | gname |
+------+-------+------+-----+-------+
| NULL | NULL  | NULL |   5 | 89    |
+------+-------+------+-----+-------+



//查询和“周星驰”同一个班级的同学
//方法1：两步查询
select gid from student where sname='周星驰';
+-----+
| gid |
+-----+
|   3 |
+-----+
select * from student where gid=3 and sname!='周星驰';
+-----+-----------+-----+
| sid | sname     | gid |
+-----+-----------+-----+
|   3 | 洪金宝    |   3 |
+-----+-----------+-----+
//方法2：子查询
select * from student where gid=(select gid from student where sname='周星驰') and sname!='周星驰';
+-----+-----------+-----+
| sid | sname     | gid |
+-----+-----------+-----+
|   3 | 洪金宝    |   3 |
+-----+-----------+-----+

//方法3：自关联
select * from student as s1 join student as s2 on s1.gid=s2.gid where s1.sname='周星驰' and s2.sname!='周星驰';

//1.自关联所有数据
select * from student as s1 join student as s2 on s1.gid=s2.gid; 
+-----+-----------+-----+-----+-----------+-----+
| sid | sname     | gid | sid | sname     | gid |
+-----+-----------+-----+-----+-----------+-----+
|   1 | 周润发    |   1 |   1 | 周润发    |   1 |
|   4 | 刘德华    |   1 |   1 | 周润发    |   1 |
|   2 | 成龙      |   2 |   2 | 成龙      |   2 |
|   3 | 洪金宝    |   3 |   3 | 洪金宝    |   3 |
|   5 | 周星驰    |   3 |   3 | 洪金宝    |   3 |
|   1 | 周润发    |   1 |   4 | 刘德华    |   1 |
|   4 | 刘德华    |   1 |   4 | 刘德华    |   1 |
|   3 | 洪金宝    |   3 |   5 | 周星驰    |   3 |
|   5 | 周星驰    |   3 |   5 | 周星驰    |   3 |
|   6 | 董浩      |   4 |   6 | 董浩      |   4 |
+-----+-----------+-----+-----+-----------+-----+
//2.限制是周星驰的同学
select * from student as s1 join student as s2 on s1.gid=s2.gid where s1.sname='周星驰';
+-----+-----------+-----+-----+-----------+-----+
| sid | sname     | gid | sid | sname     | gid |
+-----+-----------+-----+-----+-----------+-----+
|   5 | 周星驰    |   3 |   3 | 洪金宝    |   3 |
|   5 | 周星驰    |   3 |   5 | 周星驰    |   3 |
+-----+-----------+-----+-----+-----------+-----+
//3.排除自己，最后得到结果
select * from student as s1 join student as s2 on s1.gid=s2.gid where s1.sname='周星驰' and s2.sname!='周星驰';
+-----+-----------+-----+-----+-----------+-----+
| sid | sname     | gid | sid | sname     | gid |
+-----+-----------+-----+-----+-----------+-----+
|   5 | 周星驰    |   3 |   3 | 洪金宝    |   3 |
+-----+-----------+-----+-----+-----------+-----+



//============N:N===============
//课程 lesson
lid   lname     
 1    PHP       
 2    JS
 3    Linux

//中间表(可以没有主键)
lid     sid
 1       1
 1       5
 2       2
 2       1
 3       4


//同学 student
sid     sname      
 1       周润发        
 2       成龙          
 3       洪金宝        
 4       刘德华        
 5       周星驰        













