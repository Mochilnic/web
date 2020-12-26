<?php
session_start();

if (isset($_SESSION['login'])){
    $output= "Здравствуйте, ".$_SESSION['login'];
}
else{
$output = 'Здравствуйте, пользователь! ';
}

echo $output;

?>