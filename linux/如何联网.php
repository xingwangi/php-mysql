1.网卡设置为“桥接模式”

2.备份网卡配置 
cd /etc/sysconfig/network-scripts
cp ifcfg-eth0 ifcfg-eth0.bak

3.修改网卡配置，并且保存退出
ONBOOT=yes

4.关闭selinux
vi /etc/selinux/config
SELINUX=disabled

5.重启服务
service network restart

6.ping 百度 测试
ping baidu.com


7.查看虚拟主机的ip
ifconfig

8.关掉防火墙
service iptables stop

9.使用Xshell链接服务器
ssh root@自己的ip









