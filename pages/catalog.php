<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css" type="text/css"/>
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; }
  #sortable li span { position: absolute; margin-left: -1.3em; }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  } );
  </script>
    <title>Каталог</title>
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
    <a class="p-2 text-dark" href="support.php">Служба підтримки</a>
    <a class="p-2 text-dark" href="login.php">Особистий кабінет</a>
  </nav>
</div>
<script>
function autocomplete(inp, arr) {
  var currentFocus;
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      this.parentNode.appendChild(a);
      for (i = 0; i < arr.length; i++) {
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          b = document.createElement("DIV");
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          b.addEventListener("click", function(e) {
              inp.value = this.getElementsByTagName("input")[0].value;
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  function closeAllLists(elmnt) {
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
var words = ["Здібні булки","Круасани","Слойки","Тістечка","Торти","Печиво","Хліб"];

autocomplete(document.getElementById("myInput"), words);
</script>
<h1 class="head">Список продукції</h1>
<ul id="sortable">
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Здобні булки</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Круасани</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Слойки</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Тістечка</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Торти</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Печиво</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><b>Хліб</b><i>(звичайний та бездріжжджовий)</i></li>
</ul>
<form id="my_form">
  <label>Назва товару: <input type="text" name="itname"></label>
  <input type="submit" name="select" value="Обрати">
</form>
<div id="shower">Результати пошуку</div>
<script type="text/javascript">
  $('#my_form').submit(function(){
    $.post(
        '1.php', // адрес обработчика
         $("#my_form").serialize(), // отправляемые данные          
        
        function(msg) { // получен ответ сервера  
            $('#my_form').hide('slow');
            $('#shower').html(msg);
        }
    );
    return false;
});
</script>
<br>
<br>
<div class="imager">
<img src="https://бизнесидея.рф/wp-content/uploads/2018/01/biznes-plan-dlya-mini-pekarni.jpg" id="breadpic">
<img src="https://moybiznes.org/wp-content/uploads/bulochnaya-678x381.jpg" id="pikcha2">
  </div>
</body>
</html>
