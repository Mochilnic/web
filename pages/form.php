<?php
if (isset($_POST)) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mess=$_POST['message'];
    if (!empty($name) and !empty($email) and !empty($mess)) {
    echo ("Дякуємо за звернення, ".$name.", ваше звернення передане до служби підтримки<br>");
    echo date("Y-m-d H:i:s");
}
	else{
		echo "Не всі поля заповнені";
	}
}

?>