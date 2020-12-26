<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css" type="text/css"/>
  <head>
    <meta charset="utf-8">
    <title>Support</title>
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Пекарня</h5>
  <form autocomplete="off" action="../action_page.php">
    <div class="autocomplete" style="width:300px;">
      <input id="myInput" type="text" name="words" placeholder="Введите текст">
    </div>
  </form>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="about.html">Про нас</a>
    <a class="p-2 text-dark" href="mainpage.php">Основна сторінка</a>
    <a class="p-2 text-dark" href="catalog.php">Каталог</a>
    <a class="p-2 text-dark" href="#">Служба підтримки</a>
    <a class="p-2 text-dark" href="login.php">Особистий кабінет</a>
  </nav>
</div>
<form name="feedback" method="POST" action="form.php">
  <label>Ваше ім'я: <input type="text" name="name"></label>
  <label>Ваш email: <input type="text" name="email"></label>
  <label>Текст звернення: <textarea name="message"></textarea></label>

  <input type="submit" name="send" value="Отправить">
</form>

</body>
</html>
