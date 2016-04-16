<?php

@mysql_connect("localhost", "wanko", "9rh3artnushtia") or die ("Нет соединения с сервером");
mysql_select_db("orange") or die ("Нет соединения с БД");
mysql_query("SET NAMES utf8") or die("Неправельное соединение кодирования");

?>