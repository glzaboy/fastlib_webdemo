<?php die("HTTP 403");?>
[main]
type=mysql
master=server03
slave=server03
init=init
prefix=wx_
charset=utf8

[init]
0="set names utf8;"
1="SET time_zone='+8:00' ;"

[server03]
dsn="host=127.0.0.1;dbname=wx;port=3306;"
user=root
passwd=
[server04]
dsn="host=localhost;dbname=wx;port=3306;"
user=adminlyrVcmF
passwd=aYBKzcYQHuzC