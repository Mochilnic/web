<?php
session_start ();

$link=mysqli_connect("localhost", "root", "", "testtable");

if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{
    $query = mysqli_query($link, "SELECT *,INET_NTOA(user_ip) AS user_ip FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
    $userdata = mysqli_fetch_assoc($query);

    
    print "Привет, ".$userdata['user_login'].". Всё работает!";

    
   $_SESSION [ 'login'] = $userdata['user_login'];

   $_SESSION [ 'password'] = $userdata['password'];

}
else
{
    print "Включите куки";
}

?>
<a href="logout.php"><button>Выйти</button></a>