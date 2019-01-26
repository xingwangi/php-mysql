<?php 
//把etc下面的passwd复制到/tmp目录
cp /etc/passwd /tmp
//复制到当前目录的上一级目录
cp /etc/passwd ..

//使用VI编辑器
1. cd /tmp
2. cp /etc/passwd .
3. vi passwd
4. 试着移动光标
5. 插入内容，按下 i ,左下角显示“INSERT”
6. 随意的输入内容,比如：123456
7. 先按下“Esc”键
8. 按下“：”，输入“wq”，然后回车
9. 查看内容，cat -n passwd



//让自己的虚拟机能上网
1.更改桥接网卡

2.备份配置文件
cd /etc/sysconfig/network-scripts
cp ifcfg-eth0 ifcfg-eth0.bak

3.修改配置文件
vi ifcfg-eth0
把onboot后面的no改成yes

4.重启网络服务
service network restart







 ?>