<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form name="bd" method="POST" action="bd.php">
	<input type="submit" name="create" value="Створити таблиці"><br><br>
	<h5>Додати клієнта</h5><br>
  <label>Вік: <input type="text" name="age"></label>
  <label>Стать: <input type="text" name="gender"></label>
  <label>Країна: <input type="text" name="country"></label>
  <label>Місто: <input type="text" name="city"></label>
  <label>Вулиця: <input type="text" name="street"></label>

  <br><br>
	<h5>Додати співробітника</h5><br>
  <label>Посада: <input type="text" name="position"></label>
  <label>Персональна інформація: <textarea name="info"></textarea></label>
  <label>Стаж роботи: <input type="text" name="experience"></label>

  <br><br>
	<h5>Додати продукт</h5><br>
  <label>Назва: <input type="text" name="prodname"></label>
  <label>Ціна: <input type="text" name="price"></label>
  <label>Вага: <input type="text" name="weight"></label>
  <label>Категорія: <input type="text" name="category"></label>
  <label>Компоненти: <textarea name="components"></textarea></label>

  <br><br>
	<h5>Додати постачальника</h5><br>
  <label>Ціна: <input type="text" name="mattype"></label>
  <label>Вага: <input type="text" name="kgprice"></label><br>
  <input type="submit" name="send" value="Отправить"><br><br>
  <label>Назва товару: <input type="text" name="itname"></label>
  <input type="submit" name="select" value="Обрати">
</form>
</body>
</html>