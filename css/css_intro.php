<?php include '../include/head.php'; ?>
<title>CSS Введение. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Введение. Что такое CSS? Стилизация веб-страниц. Примеры кода. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
  <h1>CSS <span class="color_h1">Введение</span></h1>
  <div class="w3-clear nextprev">
    <a class="w3-left w3-btn" href="index.php">&#10094; Prev</a>
    <a class="w3-right w3-btn" href="css_syntax.php">Next &#10095;</a>
  </div>
  <hr>

  <h2>Что такое CSS?</h2>
  <ul>
    <li><strong>CSS</strong> расшифровывается как <b>C</b>ascading <b>S</b>tyle <b>S</b>heets (<strong>каскадные таблицы стилей</strong>)</li>
    <li><strong>CSS</strong> описывает <strong>как HTML элементы должны отображаться на экране, бумаге или других носителях</strong></li>
    <li><strong>CSS</strong> <strong>экономит много времени</strong>. Он может контролировать макет нескольких веб-страниц одновременно</li>
    <li>Внешние таблицы стилей хранятся в отдельных <strong>CSS файлах</strong></li>
  </ul>
  <hr>

  <h2>CSS демо - Одна HTML страница - несколько стилей!</h2>
  <p>Здесь мы покажем одну HTML-страницу с четырьмя различными таблицами стилей. Нажмите на ссылку &quot;Таблица стилей 1&quot;, &quot;Таблица стилей 2&quot;, &quot;Таблица стилей 3&quot;, &quot;Таблица стилей 4 ниже, чтобы увидеть различные стили:</p>

  <div class="w3-example" style="text-align:center;padding:30px;">
    <iframe style="width:90%;height:800px;background:#ffffff;border:none;" src="demo_default.html"></iframe>
  </div>
  <hr>

  <h2>Зачем использовать CSS?</h2>
  <p><strong>CSS используется</strong> для определения стилей ваших веб-страниц, включая дизайн, макет и варианты отображения для разных устройств и размеров экрана.</p>
  <hr>

  <h2>CSS решил большую проблему</h2>
  <p><strong>HTML</strong> НИКОГДА не должен содержать теги для форматирования веб-страницы!</p>
  <p><strong>HTML</strong> был создан для <strong>описания содержания</strong> веб-страницы, например:</p>
  <p>&lt;h1&gt;Это заголовок&lt;/h1&gt;</p>
  <p>&lt;p&gt;Это параграф.&lt;/p&gt;</p>
  <p>Когда такие теги, как <code class="w3-codespan">&lt;font&gt;</code> и атрибуты цвета были добавлены в спецификацию <strong>HTML 3.2</strong>, это стало кошмаром для веб-разработчиков. Разработка крупных веб-сайтов, на которых шрифты и информация о цвете добавлялись на каждую страницу, стала длительным и дорогостоящим процессом.</p>
  <p>Чтобы решить эту проблему, Консорциум World Wide Web (W3C) создал <strong>CSS</strong>.</p>
  <p><strong>CSS</strong> удалил форматирование стилей со страниц <strong>HTML</strong>!</p>

  <div class="w3-note w3-panel">
    <p>Если вы ещё не знаете, что такое <strong>HTML</strong>, рекомендуем вам прочитать <a href="../html/index.php">HTML Учебник</a> на нашем сайте <strong>W3Schools на русском</strong>.</p>
  </div>
  <hr>

  <h2>CSS экономит много работы!</h2>
  <p>Описания стиля обычно сохраняются во внешних файлах с расширением <em>.css</em>.</p>
  <p>С помощью внешнего файла таблицы стилей вы можете изменить внешний вид всего сайта, изменив только один файл <strong>css</strong>!</p>

  <hr>
  <div class="w3-clear nextprev">
    <a class="w3-left w3-btn" href="index.php">&#10094; Prev</a>
    <a class="w3-right w3-btn" href="css_syntax.php">Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>