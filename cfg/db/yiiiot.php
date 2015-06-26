<?php die("HTTP 403");?>
[main]
type=mysql
master=server01
slave=server02
init=init
prefix=yi_
charset=utf8

[init]
0="set names utf8;"
1="SET time_zone='+8:00' ;"

[server01]
dsn="host=yiiiot.com;dbname=yiiiot;port=3306"
user=write
passwd=""

[server02]
dsn="host=yiiiot.com;dbname=yiiiot;port=3306;"
user=read
passwd=""