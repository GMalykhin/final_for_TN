<?php
//проверка логин, пароль при входе
if($_POST["login"] == "admin" &&  $_POST["password"] == "338899")
    {
        include('config/config.php');

        $result = mysql_query("SELECT * FROM `users`");
        // $row = mysql_fetch_array($result, MYSQL_ASSOC);

        // var_dump($row);
        include('incl/header.php');
        include('incl/table_base.php');     // отрисовка базы  
        include('incl/footer.php');
            }
else
    {
        include('incl/header.php');
        include ('incl/erroradm.php');     // ошибка авторизации        
        include('incl/footer.php');
    }        

?>