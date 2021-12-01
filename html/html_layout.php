<?php include '../include/head.php'; ?>

<title>HTML Макеты веб-страниц. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML. Макеты веб-страниц. Какие бывают макеты web сайтов? Как создать макет? <?php include '../include/description.php'; ?>'>
<style>
  /* Стиль header */
  .header {background-color: #666;padding: 30px;text-align: center;font-size: 35px;color: white;}
  .header h2{font-size: 50px;font-family: Arial, Helvetica, sans-serif;font-weight:bold;}
  /* Создайте две колонки / блока, которые плавают рядом друг с другом */
  .nav {float: left;width: 25%;height: 300px; /* высота только для демонстрации, следует удалить */
      background: #ccc;padding: 20px;}
  /* Стиль списка внутри меню */
  .nav ul {list-style-type: none;padding: 0;}
  .nav ul a{text-decoration:underline!important;box-shadow:none!important;color:blue;}
  .article {float: left;padding: 20px;width: 75%;background-color: #f1f1f1;height: 300px; /* высота только для демонстрации, следует удалить */ }
  /* Очистить флоаты после столбцов */
  .section:after {content: "";display: table;clear: both;}
  /* Стиль footer */
  .footer {background-color: #777;padding: 10px;text-align: center;color: white;}
  /* Адаптивный макет - на небольших экранах два столбца / поля располагаются друг над другом, а не рядом друг с другом. */
  @media (max-width: 600px) {.nav, .article
  { width: 100%;height: auto;}
      .header {font-size:25px}
  }
  /* Стиль header */
  .header2 {background-color: #666;padding: 30px;text-align: center;font-size: 35px;color: white;}
  .header2 h2{font-size: 50px;font-family: Arial, Helvetica, sans-serif;font-weight:bold;}
  /* Контейнер для флексбоксов */
  .section2 {display: -webkit-flex;display: flex;}
  /* Создайте три равных столбца, расположенных рядом друг с другом */
  .nav2{-webkit-flex: 1;-ms-flex: 1;flex: 1;background: #ccc;padding: 20px;}
  /* Стиль списка внутри меню */
  .nav2 ul {list-style-type: none;padding: 0;}
  .nav2 ul a {text-decoration:underline!important;box-shadow:none!important;color:blue;}
  .article2 {-webkit-flex: 3;-ms-flex: 3;flex: 3;background-color: #f1f1f1;padding: 10px;}
  /* Стиль footer */
  .footer2 {background-color: #777;padding: 10px;text-align: center;color: white;}
  /* Адаптивный макет: три столбца располагаются друг над другом, а не рядом друг с другом. */
  @media (max-width: 600px) {.section2 {-webkit-flex-direction: column;flex-direction: column;}}
</style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
<h1>HTML <span class="color_h1">Макеты</span></h1>
<div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='html_head.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='html_responsive.php'>Next &#10095;</a>
</div>
<hr>
<div class='w3-example'>
  <h3>HTML Макет. Пример</h3>
  <div class="w3-white w3-padding notranslate" style="font-family: Arial, Helvetica, sans-serif;">
    <header class='header'>
      <h2>Города</h2>
    </header>

    <section class='section'>
      <nav class='nav'>
        <ul>
          <li><a href='javascript:void(0)' >Лондон</a></li>
          <li><a href='javascript:void(0)'>Париж</a></li>
          <li><a href='javascript:void(0)'>Токио</a></li>
        </ul>
      </nav>

      <article class='article'>
        <h2>Лондон</h2>
          <p>Лондон - столица Англии. Это самый густонаселенный город Соединенного Королевства, в котором проживает более 13 миллионов жителей.</p>
          <p>Лондон, расположенный на берегу Темзы, был крупным поселением на протяжении двух тысячелетий, его история восходит к моменту основания римлянами, которые назвали его Лондиниум.</p>
      </article>
    </section>

    <footer class='footer'>
      <p>Footer</p>
    </footer>
  </div>
  <a class="w3-btn w3-margin-top w3-margin-bottom" href="../htmltryit/tryitee99.html?filename=tryhtml_layout_float" target="_blank">Попробуйте сами &raquo;</a>
</div>
<hr>

<h2>HTML Элементы макета</h2>
<p>Веб-сайты часто отображают контент в нескольких столбцах (например, журнал или газета).</p>
<p>HTML предлагает несколько семантических элементов, которые определяют различные части веб-страницы:</p>

<div class="w3-hide-large w3-hide-medium">
  <div class="w3-dark-grey">
    <img alt="HTML5 Семантические элементы" src="../images/img_sem_elements.gif" style="width:100%;max-width:350px;text-align:center;display:block;margin:auto">
  </div>
  <div style="margin:16px 0">
    &lt;header&gt; - Определяет заголовок для документа или раздела<br>
    &lt;nav&gt; - Определяет контейнер для ссылок навигации<br>
    &lt;section&gt; - Определяет раздел в документе<br>
    &lt;article&gt; - Определяет независимую автономную статью<br>
    &lt;aside&gt; - Определяет контент помимо основного контента (например, боковую панель)<br>
    &lt;footer&gt; - Определяет нижний колонтитул (footer) для документа или раздела<br>
    &lt;details&gt; - Определяет дополнительные детали<br>
    &lt;summary&gt; - Определяет заголовок для элемента &lt;details&gt;<br>
  </div>
</div>

<table style="width:100%" class="w3-hide-small">
  <tr>
    <td style="width:225px;vertical-align:top">
      <img alt="HTML5 Семантические элементы" src="../images/img_sem_elements.gif" width="219" height="258">
    </td>
    <td style="vertical-align:top">
      <ul>
        <li>&lt;header&gt; - Определяет заголовок для документа или раздела</li>
        <li>&lt;nav&gt; - Определяет контейнер для ссылок навигации</li>
        <li>&lt;section&gt; - Определяет раздел в документе</li>
        <li>&lt;article&gt; - Определяет независимую автономную статью</li>
        <li>&lt;aside&gt; - Определяет контент помимо основного контента (например, боковую панель)</li>
        <li>&lt;footer&gt; - Определяет нижний колонтитул (footer) для документа или раздела</li>
        <li>&lt;details&gt; - Определяет дополнительные детали</li>
        <li>&lt;summary&gt; - Определяет заголовок для элемента &lt;details&gt;</li>
      </ul>
        <p>Подробнее о семантических элементах вы можете прочитать в главе <a href="html5_semantic_elements.php">HTML Семантика</a> на нашем сайте W3Schools.</p>
    </td>
  </tr>
</table>
<hr>

<h2>HTML Методы размещения</h2>
<p>Существует пять различных способов создания многоколоночных макетов. У каждого способа есть свои плюсы и минусы:</p>
<ul>
  <li>HTML таблицы (не рекомендуется)</li>
  <li>CSS свойство float (поплавок)</li>
  <li>CSS flexbox (флексбокс)</li>
  <li>CSS framework (фреймворк)</li>
  <li>CSS grid (сетка)</li>
</ul>
<hr>

<h2>Какой выбрать?</h2>
<h3>HTML Таблицы</h3>
<p>Элемент &lt;table&gt; не был разработан, чтобы быть инструментом макета! Назначение элемента &lt;table&gt; - отображение табличных данных. Поэтому не используйте таблицы для макета своей страницы! Они внесут беспорядок в ваш код. И представьте, как тяжело будет изменить дизайн вашего сайта через пару месяцев.</p>
<div class="w3-panel w3-note">
  <p><strong>Совет:</strong> НЕ ИСПОЛЬЗУЙТЕ таблицы для вашего макета страницы!</p>
</div>
<hr>

<h3>CSS фреймворки</h3>
<p>Если вы хотите быстро создать макет, вы можете использовать фреймворк, например
  <a href="../w3css/index.php" title="W3.CSS - фреймворк от W3Schools">W3.CSS</a> или <a href="../bootstrap4/index.php" title="Самый популярный фреймворк">Bootstrap</a>.</p>
<hr>

<h3>CSS Float (поплавки)</h3>
<p>Распространено делать целые веб-макеты, используя свойство CSS float. Float прост в освоении - вам просто нужно помнить, как работают свойства float и clear. <strong>Недостатки:</strong> Плавающие элементы привязаны к потоку документов, что может нанести ущерб гибкости. Подробнее о float читайте в разделе <a href="../css/css_float.php">CSS Float и Clear</a>.</p>
<div class='w3-example'>
  <h3>Float Пример</h3>
  <div class="w3-white w3-padding notranslate" style="font-family: Arial, Helvetica, sans-serif;">
    <header class='header'>
      <h2>Города</h2>
    </header>

    <section class='section'>
      <nav class='nav'>
        <ul>
          <li><a href='javascript:void(0)' >Лондон</a></li>
          <li><a href='javascript:void(0)'>Париж</a></li>
          <li><a href='javascript:void(0)'>Токио</a></li>
        </ul>
      </nav>

      <article class='article'>
        <h2>Лондон</h2>
        <p>Лондон - столица Англии. Это самый густонаселенный город Соединенного Королевства, в котором проживает более 13 миллионов жителей.</p>
        <p>Лондон, расположенный на берегу Темзы, был крупным поселением на протяжении двух тысячелетий, его история восходит к моменту основания римлянами, которые назвали его Лондиниум.</p>
      </article>
    </section>

    <footer class='footer'>
      <p>Footer</p>
    </footer>
  </div>
  <a class="w3-btn w3-margin-top w3-margin-bottom" href="../htmltryit/tryitee99.html?filename=tryhtml_layout_float" target="_blank">Попробуйте сами &raquo;</a>
</div>
<hr>

<h3>CSS Flexbox (флексбокс)</h3>
<p><strong>Flexbox</strong> - новый режим макета в CSS3.</p>
<p>Использование flexbox обеспечивает предсказуемое поведение элементов, когда макет страницы должен соответствовать разным размерам экрана и разным устройствам отображения. <strong>Недостатки:</strong>. Не работает в IE10 и более ранних версиях.</p>
<p>Узнайте больше о flexbox в разделе <a href="../css/css3_flexbox.php">CSS Flexbox</a>.</p>
<div class='w3-example'>
  <h3>Flexbox Пример</h3>
  <div class="w3-white w3-padding notranslate" style="font-family: Arial, Helvetica, sans-serif;">
    <header class="header2">
      <h2>Города</h2>
    </header>

    <section class="section2">
      <nav class="nav2">
        <ul>
          <li><a href="#">Лондон</a></li>
          <li><a href="#">Париж</a></li>
          <li><a href="#">Токио</a></li>
        </ul>
      </nav>

      <article class="article2">
        <h2>Лондон</h2>
          <p>Лондон - столица Англии. Это самый густонаселенный город Соединенного Королевства, в котором проживает более 13 миллионов жителей.</p>
          <p>Лондон, расположенный на берегу Темзы, был крупным поселением на протяжении двух тысячелетий, его история восходит к моменту основания римлянами, которые назвали его Лондиниум.</p>
      </article>
    </section>

    <footer class="footer2">
      <p>Footer</p>
    </footer>
  </div>
  <a class="w3-btn w3-margin-top w3-margin-bottom" href="../htmltryit/tryit11ad.html?filename=tryhtml_layout_flexbox" target="_blank">Попробуйте сами &raquo;</a>
</div>
<hr>

<h3>CSS Grid. Вид сетки</h3>
<p>Модуль CSS Grid Layout предлагает систему макетов на основе сетки со строками и столбцами, что упрощает разработку веб-страниц без использования поплавков и позиционирования.</p>
<p><strong>Недостатки:</strong> Не работает ни в IE, ни в Edge 15 и ранее.</p>
<p>Узнайте больше о CSS-сетках в разделе <a href="../css/css_rwd_grid.php">CSS Grid. Вид сетки</a>.</p>

<hr>
<div class='w3-clear nextprev'>
  <a class='w3-left w3-btn' href='html_head.php'>&#10094; Prev</a>
  <a class='w3-right w3-btn' href='html_responsive.php'>Next &#10095;</a>
</div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>