<?php include '../include/head.php'; ?>

  <title>AppML Как работает? <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML Учебник. Как работает? Уроки для начинающих онлайн бесплатно. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_howto.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

<article>
  <h1><span class='color_h1'>AppML</span> Как работает</h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-button w3-green' href='index.php'>&#10094; Prev</a>
    <a class='w3-right w3-button w3-green' href='appml_data.php'>Next &#10095;</a>
  </div>
  <hr>

  <p class='intro'>Как создать приложение AppML за <strong>2 простых шага</strong>.</p>
  <hr>

  <h2>1. Создать страницу, используя HTML и CSS</h2>
  <div class='w3-example'>
    <h3>HTML</h3>
    <div class="w3-code notranslate htmlHigh">
      &lt;!DOCTYPE html&gt;<br>
      &lt;html lang="ru"&gt;<br>&lt;link rel="stylesheet" href="style.css"&gt;<br>&lt;title&gt;Клиенты&lt;/title&gt;<br>
      &lt;body&gt;<br>
      <br>&lt;h1&gt;Клиенты&lt;/h1&gt;<br><br>
      &lt;table&gt;<br>
      &lt;tr&gt;<br>
      &nbsp; &lt;th&gt;Клиент&lt;/th&gt;<br>
      &nbsp; &lt;th&gt;Город&lt;/th&gt;<br>
      &nbsp; &lt;th&gt;Страна&lt;/th&gt;<br>&lt;/tr&gt;<br>
      &lt;tr&gt;<br>
      &nbsp; &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>
      &nbsp; &lt;td&gt;{{City}}&lt;/td&gt;<br>
      &nbsp; &lt;td&gt;{{Country}}&lt;/td&gt;<br>
      &lt;/tr&gt;<br>
      &lt;/table&gt;<br>
      <br>&lt;/body&gt;<br>&lt;/html&gt;<br>
    </div>
    <a class='w3-btn w3-margin-bottom' href='tryappml_howto_1.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>

  <div class='w3-panel w3-note'>
    <p><strong>Скобки {{ }}</strong> являются заполнителями для данных AppML.</p>
  </div>

  <div class='w3-example'>
    <h3>CSS</h3>
    <div class='w3-code notranslate cssHigh'>
      body {<br>&nbsp;&nbsp;&nbsp; font: 14px Verdana, sans-serif;<br>}<br>h1 {<br>&nbsp;&nbsp;&nbsp; color: #996600;<br>}<br>
      table {<br>&nbsp;&nbsp;&nbsp; width: 100%;<br>&nbsp;&nbsp;&nbsp; border-collapse: collapse;<br>}<br>th, td {<br>
      &nbsp;&nbsp;&nbsp;
      border: 1px solid grey;<br>&nbsp;&nbsp;&nbsp; padding: 5px;<br>&nbsp;&nbsp;&nbsp; text-align: left;<br>}<br>table
      tr:nth-child(odd) {<br>&nbsp;&nbsp;&nbsp; background-color: #f1f1f1;<br>}
    </div>
  </div>

  <div class='w3-panel w3-note'>
    <p>Не стесняйтесь заменять CSS своей любимой таблицей стилей.</p>
  </div>
  <hr>

  <h2>2. Добавить AppML</h2>
  <p>Используйте AppML для добавления данных на свою страницу:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate htmlHigh'>
      &lt;!DOCTYPE html&gt;<br>&lt;html lang="ru"&gt;<br>&lt;title&gt;Клиенты&lt;/title&gt;<br>
      &lt;link rel="stylesheet" href="style.css"&gt;<br>
      <strong>&lt;script src="https://w3schoolsrus.github.io/appml/2.0.3/appml.js"&gt;&lt;/script&gt;</strong><br>
      &lt;body&gt;<br><br>&lt;h1&gt;Клиенты&lt;/h1&gt;<br><br>&lt;table <strong>appml-data="https://www.w3schools.com/appml/customers.js"</strong>&gt;<br>
      &lt;tr&gt;<br>
      &nbsp; &lt;th&gt;Клиент&lt;/th&gt;<br>
      &nbsp; &lt;th&gt;Город&lt;/th&gt;<br>
      &nbsp; &lt;th&gt;Страна&lt;/th&gt;<br>&lt;/tr&gt;<br>
      &lt;tr <strong>appml-repeat="records"</strong>&gt;<br>
      &nbsp; &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>
      &nbsp; &lt;td&gt;{{City}}&lt;/td&gt;<br>
      &nbsp; &lt;td&gt;{{Country}}&lt;/td&gt;<br>
      &lt;/tr&gt;<br>
      &lt;/table&gt;<br>
      <br>&lt;/body&gt;<br>&lt;/html&gt;</div>
    <a class='w3-btn w3-margin-bottom' href='tryappml_howto_2.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>AppML Объяснение:</h2>
  <p><strong>&lt;script src="https://www.w3schools.com/appml/2.0.3/appml.js"&gt;</strong>
    добавьте AppML на вашу страницу.</p>

  <p><strong>appml-data</strong>=<strong>"customers.js"</strong> связывает данные AppML (customers.js) с HTML элементом  (&lt;table&gt;).<p>В данном случае мы использовали файл JSON:
    <a href='show_customers.html' target='_blank'>customers.js</a>
  <p><strong>appml-repeat="records"</strong> повторяет HTML элемент (&lt;tr&gt;) для каждого элемента (записи) в объекте данных.</p>
  <p><strong>Скобки {{ }}</strong> являются заполнителями для данных AppML.</p>

  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-button w3-green' href='index.php'>&#10094; Prev</a>
    <a class='w3-right w3-button w3-green' href='appml_data.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>