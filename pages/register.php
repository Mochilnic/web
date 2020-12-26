<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Пекарня</h5>
  <nav class="my-2 my-md-0 mr-md-3">
   <a class="p-2 text-dark" href="about.html">Про нас</a>
    <a class="p-2 text-dark" href="mainpage.php">Основна сторінка</a>
    <a class="p-2 text-dark" href="catalog.php">Каталог</a>
    <a class="p-2 text-dark" href="support.php">Служба підтримки</a>
    <a class="p-2 text-dark" href="login.php">Особистий кабінет</a>
  </nav>
</div>
    <div class="container">
    	<?php

$link=mysqli_connect("localhost", "root", "", "testtable");

if(isset($_POST['submit']))
{
    $err = [];

    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))
    {
        $err[] = "Логин может состоять только из букв английского алфавита и цифр";
    }

    if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
    {
        $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
    }


    $query = mysqli_query($link, "SELECT user_id FROM users WHERE user_login='".mysqli_real_escape_string($link, $_POST['login'])."'");
    if(mysqli_num_rows($query) > 0)
    {
        $err[] = "Пользователь с таким логином уже существует в базе данных";
    }


    if(count($err) == 0)
    {

        $login = $_POST['login'];

        $password = md5(md5(trim($_POST['password'])));
        $pass=$_POST['password'];

        mysqli_query($link,"INSERT INTO users SET user_login='".$login."', user_password='".$password."', password='".$pass."'");
        header("Location: login.php"); exit();
    }
    else
    {
        print "<b>При регистрации произошли следующие ошибки:</b><br>";
        foreach($err AS $error)
        {
            print $error."<br>";
        }
    }
}
?>
<form method="POST">
Логин <input name="login" type="text" required><br>
Пароль <input name="password" type="password" required><br>
<input name="submit" type="submit" value="Зарегистрироваться">
</form>

    <div class="container signin">
      <p>Already have an account? <a href="login.php">Sign in</a>.</p>
    </div>
  </body>
</html>
