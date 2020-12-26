<?php
$con=mysqli_connect("localhost", "root", "","webbd") or die("Couldn't Connect") ;
mysqli_set_charset($con, "utf8");

$name=$_POST['itname'];

$query="SELECT
CATEGORIES.CATEGORY_TYPE AS 'Категорія',PRODUCTS.NAME as 'Назва', PRODUCTS.PRICE AS 'Ціна', PRODUCTS.WEIGHT AS 'Вага', PRODUCTS.COMPONENTS AS 'Компоненти' FROM CATEGORIES,PRODUCTS WHERE PRODUCTS.ID_CATEGORY_TYPE=CATEGORIES.ID AND PRODUCTS.NAME = '$name';
";
$result= mysqli_query($con,$query) or die("Couldn't Select");
if (mysqli_num_rows($result) > 0) {
	$counter=1;
    while($row = mysqli_fetch_assoc($result)) {
        echo $counter.") Назва: " . $row["Назва"]. "<br>Категорія: " . $row["Категорія"]. "<br>Ціна: " . $row["Ціна"]."<br>Вага: ". $row["Вага"]."<br>Компоненти: ". $row["Компоненти"]. "<br><br>";
				$fd = fopen("logs.txt", 'a') or die("не удалось создать файл");
				$str = "\nНазва: " . $row["Назва"]. "\nКатегорія: " . $row["Категорія"]. "\nЦіна: " . $row["Ціна"]."\nВага: ". $row["Вага"]."\nКомпоненти: ". $row["Компоненти"]. "";
				fwrite($fd, $str);
    }
}
else{
	echo "За вашим запитом товарів не знайдено";
}
?>