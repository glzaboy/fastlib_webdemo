<?php die("HTTP 403");?>
[main]
type=mysql
master=server03
slave=server03
init=init
prefix=pa_
charset=utf8

[init]
0="set names utf8;"
1="SET time_zone='+8:00' ;"

[server01]
dsn="host=yiiiot.com;dbname=cp;port=3306"
user=cp
passwd=cp

[server02]
dsn="host=yiiiot.com;dbname=cp;port=3306;"
user=cpread
passwd=cpread
[server03]
dsn="host=127.0.0.1;dbname=test;port=3306;"
user=root
passwd=