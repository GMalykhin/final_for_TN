<?php

function render($path, $pathone, $pathtwo) // не используется, написано так, на всякий....
{
    include_once("incl/header.php");
    include("{$path}");
    include("{$pathone}");
    include("{$pathtwo}");
    include_once("incl/bottom.php");
}

function clean($value = "") 
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);  
    return $value;
}

function check_length($value = "", $min, $max) {
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}

?>