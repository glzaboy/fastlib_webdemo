<?php die("HTTP 403");?>
[main]
type=mysql
master=server03
slave=server03
init=init
prefix=yi_
charset=utf8

[init]
0="set names utf8;"
1="SET time_zone='+8:00' ;"

[server01]
dsn="host=yiiiot.com;dbname=yiiiot;port=3306"
user=glzaboy
passwd="1984cxtG"

[server03]
dsn="host=localhost;dbname=yiiiot;port=3306;"
user=root
passwd=""



[server02]
dsn="host=yiiiot.com;dbname=yiiiot;port=3306;"
user=read
passwd=""