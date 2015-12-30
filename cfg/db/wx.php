<?php die("HTTP 403");?>
[main]
type=mysql
master=server04
slave=server04
init=init
prefix=wp_
charset=utf8

[init]
0="set names utf8;"
1="SET time_zone='+8:00' ;"

[server03]
dsn="host=127.0.0.1;dbname=web;port=3306;"
user=root
passwd=
[server04]
dsn="host=127.0.0.1;dbname=web;port=3306;"
user=adminlyrVcmF
passwd=aYBKzcYQHuzC