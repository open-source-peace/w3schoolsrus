<?php include '../include/head.php'; ?>

  <title>Sass Учебник. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Учебник по Sass. Что такое Sass? <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/sass/index.html' />
  <link rel='stylesheet' href='../styles/bigbtn.css'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_sass.php'; ?>
<?php include '../include/before_content_sass.php'; ?>

  <article>
    <h1>Sass <span class='color_h1'>Учебник</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
      <a class='w3-right w3-btn' href='sass_intro.php'>Next &#10095;</a>
    </div>

    <div class='w3-panel w3-info intro'>
      <p><strong>Sass</strong> - это CSS пре-процессор.</p>
      <p><strong>Sass</strong> уменьшает повторение CSS и, следовательно, экономит время.</p>
      <a class='w3-btn w3-margin-bottom shadow-black-1'  href='sass_intro.php'>Начать изучение Sass немедленно &raquo;</a>
    </div>
    <hr>
    <h2>Примеры в каждой главе</h2>
    <p>Наш инструмент <b>'Показать Sass'</b> упрощает изучение Sass, он показывает и код, и результат.</p>
    <div class='w3-example'>
      <h3>Sass Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        /* Определите стандартные переменные и значения для веб-сайта */<br>$bgcolor: lightblue;<br>
        $textcolor: darkblue;<br>$fontsize: 18px;<br><br>/* Используйте переменные */<br>body
        {<br>&nbsp;&nbsp;background-color: $bgcolor;<br>&nbsp; color:
        $textcolor;<br>&nbsp; font-size: $fontsize;<br>}</div>
      <p>
        <a target='_blank' class='w3-btn' href='../sasstryit/demo_sass_first.html'>Выполнить пример &raquo;</a>
      </p>
    </div>
    <hr>

    <h2>Sass Справочник функций</h2>
    <p>На W3Schools вы найдете полный справочник на все функции Sass с синтаксисом и примерами.</p>
    <div style='width: 100%'>
      <a class='bigbtn' href='sass_functions_string.php'>Sass Строковые функции</a>
      <a class='bigbtn' href='sass_functions_numeric.php'>Sass Числовые функции</a>
      <a class='bigbtn' href='sass_functions_list.php'>Sass Функции списка</a>
      <a class='bigbtn' href='sass_functions_map.php'>Sass Функции карты</a>
      <a class='bigbtn' href='sass_functions_selector.php'>Sass Функции селектора</a>
      <a class='bigbtn' href='sass_functions_introspection.php'>Sass Функции самоанализа</a>
      <a class='bigbtn' href='sass_functions_color.php'>Sass Функции цвета</a>
    </div>
    <hr>

    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
      <a class='w3-right w3-btn' href='sass_intro.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>