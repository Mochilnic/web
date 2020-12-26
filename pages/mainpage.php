<?php
session_start();
$cookie_name = "language";
$cookie_value = "lang";
setcookie($cookie_name, $cookie_value, time() + 15778463);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Пекарня</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="icons.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
  </head>
  <body>
    <?php
    if (isset($_GET['lang'])) {
      if($lang = $_GET['lang']){
      echo "Обрана мова: " . $_GET['lang'];
    }
    }
     ?><div id="welcome"></div>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Пекарня</h5>
  <form method="GET">
  <div class="location">
  <button class="ukr" name="lang" type="submit" value="Ukraine">UA</button><?php setcookie("ukr") ?>
  <button class="ru" name="lang" type="submit" value="Russia">RU</button><?php setcookie("ru") ?>
  <button class="polland" name="lang" type="submit" value="Poland">PL</button><?php setcookie("pl") ?>
  </div>
 </form>
  <?php
  if (isset($_GET['lang'])) {
    if($_GET['lang']=="Russia"){
      print("<nav class='my-2 my-md-0 mr-md-3'>
    <a class='p-2 text-dark' href='about.html'>Про нас</a>
    <a class='p-2 text-dark' href='mainpage.php'>Основная страница</a>
    <a class='p-2 text-dark' href='catalog.php'>Каталог</a>
    <a class='p-2 text-dark' href='support.php'>Служба поддержки</a>
    <a class='p-2 text-dark' href='login.php'>Личный кабинет</a>
  </nav>
</div>
<center>
<div class='mt-3'>
  <img src='unnamed.jpg' alt=''>
</div>
</center>
<div class='card-deck mb-3 text-center'>
    <div class='card mb-4 shadow-sm'>
      <div class='card-header'>
        <h4 class='my-0 font-weight-normal'>Печенье</h4>
      </div>
      <div class='card-body'>
        <h1 class='card-title pricing-card-title'>50 грн <small class='text-muted'></small></h1>
        <ul class='list-unstyled mt-3 mb-4'>
          <li>Печенье</li>
          <li>Цена за 1 кг</li>
        </ul>
        <button type='button' class='btn btn-lg btn-block btn-primary'>Купить</button>
      </div>
    </div>
    <div class='card mb-4 shadow-sm'>
      <div class='card-header'>
        <h4 class='my-0 font-weight-normal'>Карамель</h4>
      </div>
      <div class='card-body'>
        <h1 class='card-title pricing-card-title'>80 грн <small class='text-muted'></small></h1>
        <ul class='list-unstyled mt-3 mb-4'>
          <li>Карамель</li>
          <li>Цена за 1 кг</li>
        </ul>
        <button type='button' class='btn btn-lg btn-block btn-primary'>Купить</button>
      </div>
    </div>
    <div class='card mb-4 shadow-sm'>
      <div class='card-header'>
        <h4 class='my-0 font-weight-normal'>Торт</h4>
      </div>
      <div class='card-body'>
        <h1 class='card-title pricing-card-title'>200 грн <small class='text-muted'></small></h1>
        <ul class='list-unstyled mt-3 mb-4'>
          <li>Торт</li>
          <li>Цена за 1 кг</li>
        </ul>
        <button type='button' class='btn btn-lg btn-block btn-primary'>Купить</button>
      </div>
    </div>
  </div>


<div id='tabs'>
  <ul>
    <li><a href='#tabs-1'>Печенье</a></li>
    <li><a href='#tabs-2'>Карамель</a></li>
    <li><a href='#tabs-3'>Торт</a></li>
  </ul>
  <div id='tabs-1'>
    <p>Печенье - преимущественно небольшой кондитерское изделие, выпеченный из теста, обычно сладкий.

В тесто печенья часто добавляют различные специи и орехи, сухофрукты или сахарные изделия. Часто печенье покрывают шоколадом, или изготавливают начинку и размещают ее между двумя печеньями.

В Украине печенье изготовляли еще давно. Есть много старых рецептов приготовления печенья. Одним из самых распространенных видов печенья были пряники, которые готовились из меда и пшеничной или ржаной теста.

Многие рецепты попали к нам от соседей, например, скажем, мазурки.</p>
  </div>
  <div id='tabs-2'>
    <p>Карамель - это десертный ингредиент, представляет собой коллоидный раствор вареного сахара. Бывает коричневого цвета различных оттенков. Используется для ароматизации конфет и напитков, например Кока-колы.

Обычно применяется как пищевой краситель и имеет классификационный номер E150.

По одной из версий название «карамель» происходит от арабского выражения «Курата-аль-миль» - «шарик сладкой соли». По другой - от латинского «калламелус» - так в средневековой Европе называли сахарный тростник [1].

Изготавливается в процессе медленного нагрева сахара до температуры, близкой к 170 ° C.</p>
  </div>
  <div id='tabs-3'>
    <p>Торт (итал. Torta) - кондитерское изделие, обычно из сдобного теста, с кремом, фруктами и тому подобное. Торт обычно состоит из нескольких коржей (из бисквитного, слоеного или иного теста) с прослойками из крема. Сверху торт украшается узорами из крема и фруктов.

Торт может выступать как отдельным кулинарным изделием со своей уникальной рецептуре [1], так и иметь одновременно праздничное назначения и оформления по поводу торжественных событий.

Обычно, торт является традиционной праздничным блюдом на свадьбах и днях рождения. На свадьбу торт украшают фигурками молодоженов, располагая их на верхушке торта. На день рождения именинный торт украшают свечами в количестве, равном возраста именинника, или специальными свечами с цифровым изображением возраста, есть также множество вариантов оформления тортов иллюстрирующие профессиональной деятельности лица которую приветствуют - торты в оформлении которых логотипы организаций, надписи кремом и т .д.

Торты часто используют как альтернативную оружие во время проведения яичных атак для демонстрации общественной недоверия к известных людей. Традицию бросать в известных лиц тортами основал бельгиец Ноэль Годен - лидер движения «Международные пирожные бригады», от активистов которого пострадали такие лица, как Билл Гейтс, Мишель Камдессю, Жан-Люк Годар и другие.</p>
  </div>
</div>");
    }
    else if ($_GET['lang']=="Poland"){
    	print("<nav class='my-2 my-md-0 mr-md-3'>
    <a class='p-2 text-dark' href='about.html'>O nas</a>
    <a class='p-2 text-dark' href='mainpage.php'>Strona główna</a>
    <a class='p-2 text-dark' href='catalog.php'>Katalog</a>
    <a class='p-2 text-dark' href='support.php'>Usługa wsparcia</a>
    <a class='p-2 text-dark' href='login.php'>Obszar osobisty</a>
  </nav>
</div>
<center>
<div class='mt-3'>
  <img src='unnamed.jpg' alt=''>
</div>
</center>
<div class='card-deck mb-3 text-center'>
    <div class='card mb-4 shadow-sm'>
      <div class='card-header'>
        <h4 class='my-0 font-weight-normal'>Biszkopty</h4>
      </div>
      <div class='card-body'>
        <h1 class='card-title pricing-card-title'>50 UAH <small class='text-muted'></small></h1>
        <ul class='list-unstyled mt-3 mb-4'>
          <li>Biszkopty</li>
          <li>Cena za 1 kg</li>
        </ul>
        <button type='button' class='btn btn-lg btn-block btn-primary'>Kup</button>
      </div>
    </div>
    <div class='card mb-4 shadow-sm'>
      <div class='card-header'>
        <h4 class='my-0 font-weight-normal'>Karmel</h4>
      </div>
      <div class='card-body'>
        <h1 class='card-title pricing-card-title'>80 UAH <small class='text-muted'></small></h1>
        <ul class='list-unstyled mt-3 mb-4'>
          <li>Karmel</li>
          <li>Cena za 1 kg</li>
        </ul>
        <button type='button' class='btn btn-lg btn-block btn-primary'>Kup</button>
      </div>
    </div>
    <div class='card mb-4 shadow-sm'>
      <div class='card-header'>
        <h4 class='my-0 font-weight-normal'>Ciasto</h4>
      </div>
      <div class='card-body'>
        <h1 class='card-title pricing-card-title'>200 UAH <small class='text-muted'></small></h1>
        <ul class='list-unstyled mt-3 mb-4'>
          <li>Ciasto</li>
          <li>Cena za 1 kg</li>
        </ul>
        <button type='button' class='btn btn-lg btn-block btn-primary'>Kup</button>
      </div>
    </div>
  </div>


<div id='tabs'>
  <ul>
    <li><a href='#tabs-1'>Biszkopty</a></li>
    <li><a href='#tabs-2'>Karmel</a></li>
    <li><a href='#tabs-3'>Ciasto</a></li>
  </ul>
  <div id='tabs-1'>
    <p>Ciasteczka to przeważnie małe wypieki wypiekane z ciasta, zazwyczaj słodkie.

Do ciasta na ciasteczka często dodaje się różne przyprawy i orzechy, suszone owoce lub produkty cukrowe. Często ciasteczka są oblane czekoladą lub nadzienie jest robione i umieszczane między dwoma ciasteczkami.

Na Ukrainie ciasteczka były robione przez długi czas. Istnieje wiele starych przepisów na ciasteczka. Jednym z najpopularniejszych rodzajów ciastek był piernik, który był robiony z miodu i ciasta pszennego lub żytniego.

Wiele przepisów przyszło do nas od sąsiadów, na przykład mazurki.</p>
  </div>
  <div id='tabs-2'>
    <p>Karmel to składnik deseru, koloidalny roztwór gotowanego cukru. Występuje w różnych odcieniach brązu. Służy do aromatyzowania cukierków i napojów, takich jak Coca-Cola.

Jest powszechnie stosowany jako barwnik spożywczy i ma numer klasyfikacyjny E150.

Według jednej wersji nazwa „karmel” pochodzi od arabskiego wyrażenia „Kurata-al-mi” - „kulka słodkiej soli”. Według drugiego - od łacińskiego „callamelus” - tak nazywano trzcinę cukrową w średniowiecznej Europie [1].

Powstaje poprzez powolne podgrzewanie cukru do temperatury zbliżonej do 170 ° C.</p>
  </div>
  <div id='tabs-3'>
    <p>Ciasto (w języku włoskim. Torta) - wirib cukierniczy, przywołaj smaczne ciasto, ze śmietaną, też owocami. Ciasto jest dogodnie składowane z ciastek z kalkomanią (z płaskich, liściastych lub nawet ciastek) oraz z ciast i śmietanki. Na wierzch ciasta udekoruj winogronami ze śmietany i owocami.

Ciasto można ozdobić kulinarnym virobem według naszego własnego, unikalnego przepisu [1], więc tak szybko, jak otrzyma Svyatkove, jest ono przeznaczone do napędzania marnotrawstwa podium.

Zvychay, ciasto jest tradycyjną tradycją svyatkova na zabawę tamtych dni ludzi. Na torcie udekoruj ciasto figurkami imion, rostashovuyuchi na wierzchu ciasta. W Dzień Ludu udekoruj tort urodzinowy świeczkami na przyjęciu urodzinowym, tortem urodzinowym na przyjęcie urodzinowe lub specjalnymi świeczkami z cyfrowymi obrazami przyjęcia urodzinowego, a także prostymi opcjami dekoracji tortu na przyjęcie urodzinowe. .re.

Ciasta są często zwycięską alternatywą dla godzinnych ataków na jachty, aby pokazać ogromną nieufność doświadczonych ludzi. Belg Noel Gaudin, przywódca Międzynarodowej Brygady Tistechkowa, jest liderem Międzynarodowej Brygady Tistechkowa, ponieważ działacze, którzy ucierpieli z takich osób jak Bill Gates, Michel Camdessus i Jean-Luc</p>
  </div>
</div>");
    }
    else{
    	print ("<nav class='my-2 my-md-0 mr-md-3'>
    <a class='p-2 text-dark' href='about.html'>Про нас</a>
    <a class='p-2 text-dark' href='mainpage.php'>Основна сторінка</a>
    <a class='p-2 text-dark' href='catalog.php'>Каталог</a>
    <a class='p-2 text-dark' href='support.php'>Служба підтримки</a>
    <a class='p-2 text-dark' href='login.php'>Особистий кабінет</a>
  </nav>
</div>
<center>
<div class='mt-3'>
  <img src='unnamed.jpg' alt=''>
</div>
</center>
<div class='card-deck mb-3 text-center'>
    <div class='card mb-4 shadow-sm'>
      <div class='card-header'>
        <h4 class='my-0 font-weight-normal'>Печиво</h4>
      </div>
      <div class='card-body'>
        <h1 class='card-title pricing-card-title'>50 грн <small class='text-muted'></small></h1>
        <ul class='list-unstyled mt-3 mb-4'>
          <li>Печиво</li>
          <li>Ціна за 1 кг</li>
        </ul>
        <button type='button' class='btn btn-lg btn-block btn-primary'>Придбати</button>
      </div>
    </div>
    <div class='card mb-4 shadow-sm'>
      <div class='card-header'>
        <h4 class='my-0 font-weight-normal'>Карамель</h4>
      </div>
      <div class='card-body'>
        <h1 class='card-title pricing-card-title'>80 грн <small class='text-muted'></small></h1>
        <ul class='list-unstyled mt-3 mb-4'>
          <li>Карамель</li>
          <li>Ціна за 1 кг</li>
        </ul>
        <button type='button' class='btn btn-lg btn-block btn-primary'>Придбати</button>
      </div>
    </div>
    <div class='card mb-4 shadow-sm'>
      <div class='card-header'>
        <h4 class='my-0 font-weight-normal'>Торт</h4>
      </div>
      <div class='card-body'>
        <h1 class='card-title pricing-card-title'>200 грн <small class='text-muted'></small></h1>
        <ul class='list-unstyled mt-3 mb-4'>
          <li>Торт</li>
          <li>Ціна за 1 кг</li>
        </ul>
        <button type='button' class='btn btn-lg btn-block btn-primary'>Придбати</button>
      </div>
    </div>
  </div>


<div id='tabs'>
  <ul>
    <li><a href='#tabs-1'>Печиво</a></li>
    <li><a href='#tabs-2'>Карамель</a></li>
    <li><a href='#tabs-3'>Торт</a></li>
  </ul>
  <div id='tabs-1'>
    <p>Пе́чиво — переважно невеликий кондитерський виріб, випечений із тіста, зазвичай солодкий.

До тіста печива часто додають різні спеції та горіхи, сухофрукти чи цукрові вироби. Часто печиво покривають шоколадом, або виготовляють начинку та розміщують її між двома печивами.

В Україні печиво виготовляли ще здавна. Є багато старих рецептів приготування печива. Одним із найпоширеніших видів печива були медяники, що готувалися з меду та пшеничного чи житнього тіста.

Багато рецептів потрапили до нас від сусідів, як-от, скажімо, мазурки.</p>
  </div>
  <div id='tabs-2'>
    <p>Караме́ль — це десертний інгредієнт, що являє собою колоїдний розчин вареного цукру. Буває коричневого кольору різних відтінків. Використовується для ароматизації цукерок і напоїв, наприклад Кока-коли.

Зазвичай застосовується як харчовий барвник і має класифікаційний номер E150.

За однією з версій назва «карамель» походить від арабського вислову «курат-аль-миль» — «кулька солодкої солі». За іншою — від латинського «калламелус» — так у середньовічній Європі називали цукрову тростину[1].

Виготовляється в процесі повільного нагрівання цукру до температури, близької до 170 °C.</p>
  </div>
  <div id='tabs-3'>
    <p>Торт (італ. torta) — кондитерський виріб, зазвичай зі здобного тіста, з кремом, фруктами тощо. Торт звичайно складається з декількох коржів (з бісквітного, листкового або іншого тіста) із прошарками із крему. Зверху торт прикрашається візерунками із крему та фруктів.

Торт може виступати як окремим кулінарним виробом зі своєю унікальною рецептурою[1], так і мати одночасне святкове призначення та оформлення з приводу урочистих подій.

Зазвичай, торт є традиційною святковою стравою на весіллях та днях народження. На весілля торт прикрашають фігурками наречених, розташовуючи їх на верхівці торта. На день народження іменинний торт прикрашають свічками у кількості, що дорівнює віку іменинника, або спеціальними свічками з цифровим зображенням його віку, є також безліч варіантів оформлення тортів які ілюструють професійну діяльність особи яку вітають — торти в оформленні яких є логотипи організацій, написи кремом і т.д.

Торти часто використовують як альтернативну зброю під час проведення яєчних атак для демонстрації громадської недовіри до знаних людей. Традицію кидати в відомих осіб тортами заснував бельгієць Ноель Годен — лідер руху «Міжнародні тістечкові бригади», від активістів якого постраждали такі особи, як Білл Гейтс, Мішель Камдессю, Жан-Люк Годар та інші.</p>
  </div>
</div>");
    }
    }
    else{
    	header('Location: mainpage.php?lang=Ukraine');
    }

  ?>
  <div id="cook"></div>
  <script type="text/javascript">
    var request = new XMLHttpRequest();
request.open('GET','processing.php',true);
request.addEventListener('readystatechange', function() {
  if ((request.readyState==4) && (request.status==200)) {
    console.log(request);
    console.log(request.responseText);
    var welcome = document.getElementById('welcome');
    welcome.innerHTML = request.responseText;
  }
}); 
request.send();

var request2 = new XMLHttpRequest();
request2.open('GET','maincont.php',true);
request2.addEventListener('readystatechange', function() {
  if ((request2.readyState==4) && (request2.status==200)) {
    console.log(request2);
    console.log(request2.responseText);
    var cook = document.getElementById('cook');
    cook.innerHTML = request2.responseText;
  }
}); 
request2.send();
  </script>
  </body>
</html>
