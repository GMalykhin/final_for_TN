<?php
include('config/function.php');
// var_dump($_POST);

// проверка на нежелательные символы
$name = clean($_POST["first_name"]);
$surname = clean($_POST["second_name"]);
$spec = clean($_POST["spec"]);
$work = clean($_POST["work"]);
$city = clean($_POST["city"]);
$mail = clean($_POST["mail"]);
$tel = clean($_POST["tel"]);

// соединение с базой данных
include('config/config.php');

// проверка на пустоту полей
if(!empty($name) && !empty($surname) && !empty($spec) && !empty($work) && !empty($city) && !empty($mail) && !empty($tel)) 
    {
    $email_validate = filter_var($mail, FILTER_VALIDATE_EMAIL); // проверка соответствия имейла формату, проверка совпадения с базой 
    $unique_data = mysql_query("SELECT COUNT(id) FROM users WHERE mail='".$email_validate."' OR tel='".$tel."'");
    $validate = mysql_result($unique_data, 0);
    
    // проверкана длины
    if(check_length($name, 2, 25) && check_length($surname, 2, 50) && check_length($spec, 2, 50) && $email_validate && check_length($work, 2, 50) && check_length($city, 2, 50) && check_length($tel, 10, 13)) 
        {        
        if($validate == 0)
            {
            mysql_query("INSERT INTO `users`(`name`, `sname`, `day`, `month`, `year`, `leveleng`, `levelpc`, `spec`, `work`, `city`, `mail`, `tel`, `status`) 
                VALUES ('".$name."', '".$surname."', '".$_POST["day"]."', '".$_POST["month"]."', '".$_POST["year"]."', '".$_POST["eng"]."', '".$_POST["comp"]."', '".$spec."', '".$work."', '".$city."', '".$_POST["mail"]."', '".$tel."', '".$_POST["stat"]."')");
            header('Refresh: 3; URL=/index.php');
            include('incl/header.php');
            include('incl/cong.php');            
            include('incl/footer.php');
            }
        else
            {
            include('incl/header.php');
            include ('incl/duble.php');      //данные есть в базе    
            include('incl/footer.php');
            }           
        } 
    else 
        { 
        include('incl/header.php');
        include ('incl/error.php');       // данные не соответвуют критериям
        include('incl/footer.php');
        }
    } 
else 
    { 
    include('incl/header.php');
    include ('incl/error.php');    // данные не введены
    include('incl/footer.php');
    }
?>