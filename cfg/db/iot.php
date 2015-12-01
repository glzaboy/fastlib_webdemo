<?php die("HTTP 403");?>
[main]
type=mysql
master=server01
slave=server02
init=init
prefix=cp
charset=utf8

[init]
0="set names utf8;"
1="SET time_zone='+8:00' ;"

[server01]
dsn="host=yiiiot.com;dbname=cp;port=3306"
user=cp
passwd="xxx"

[server02]
dsn="host=yiiiot.com;dbname=cp;port=3306;"
user=cpread
passwd="xxx"

[server03]
dsn="host=192.168.1.63;dbname=xxx_xxx;port=3306;"
user=root
passwd=xxx