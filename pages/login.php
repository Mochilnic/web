<!DOCTYPE html>
<?php
session_start ();
?>
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

function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}

$link=mysqli_connect("localhost", "root", "", "testtable");


// if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
// {

//     header('Location: check.php');
// }
if(isset($_POST['submit']))
{

    $query = mysqli_query($link,"SELECT user_id, user_password FROM users WHERE user_login='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);


    if($data['user_password'] === md5(md5($_POST['password'])))
    {

        $hash = md5(generateCode(10));

        if(!empty($_POST['not_attach_ip']))
        {

            $insip = ", user_ip=INET_ATON('".$_SERVER['REMOTE_ADDR']."')";
        }


        mysqli_query($link, "UPDATE users SET user_hash='".$hash."' ".$insip." WHERE user_id='".$data['user_id']."'");

        setcookie("id", $data['user_id'], time()+60*60*24*30, "/");
        setcookie("hash", $hash, time()+60*60*24*30, "/", null, null, true);

        header("Location: check.php"); exit();
    }
    else
    {
        print "Вы ввели неправильный логин/пароль";
    }
}

function getlogin(){
      if (isset($_SESSION['login']))
{
    return $_SESSION['login'];

}
else{
  return;
}
}

function getpass(){
      if (isset($_SESSION['password']))
{
    return $_SESSION['password'];

}
else{
  return;
}
}

?>
<form method="POST">
Логин <input name="login" type="text" value="<?php echo getlogin(); ?>" required><br>
Пароль <input name="password" type="password" value="<?php echo getpass(); ?>" required><br>

<input name="submit" type="submit" value="Войти">
</form>



    <div class="container signin">
      <p>Don't have an account? <a href="register.php">Sign up</a>.</p>
    </div>

  </body>
</html>
