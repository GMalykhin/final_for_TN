<?php
// connetction to mysql
    $dblocation = "mysql.zzz.com.ua"; 
    $dbuser = "mgsaint";
    $dbpasswd ="MILLenium1234";
    $dbname = "mgsaint";

    $connect = mysql_connect($dblocation, $dbuser, $dbpasswd);
    mysql_select_db($dbname, $connect);     // выбор базы
?>