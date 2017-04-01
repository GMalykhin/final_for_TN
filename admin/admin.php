

<?php
include('config/config.php');

$result = mysql_query("SELECT * FROM `users`");
// $row = mysql_fetch_array($result, MYSQL_ASSOC);

// var_dump($row);
include('incl/header.php');

include('incl/table_base.php');
   
include('incl/footer.php');
?>