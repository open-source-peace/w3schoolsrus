<?php include '../include/head.php'; ?>

  <title>AppML Включения. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML Включения. Уроки для начинающих онлайн бесплатно. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_includes.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

<article>
  <h1><span class='color_h1'>AppML</span> HTML Включения</h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-button w3-green' href='appml_data.php'>&#10094; Prev</a>
    <a class='w3-right w3-button w3-green' href='appml_controllers.php'>Next &#10095;</a>
  </div>
  <hr>

  <p class='intro'>С помощью <strong>AppML</strong> вы можете включать HTML в HTML.</p>
  <hr>

  <h2>Включение HTML в HTML</h2>
  <p>Хорошим примером этого является включение стандартного нижнего колонтитула HTML на все ваши HTML-страницы.</p>
  <p>Это пример файла, содержащего стандартный нижний колонтитул:</p>
  <div class='w3-example'>
    <h3>inc_footer.html</h3>
    <div class='w3-code notranslate htmlHigh'>
      &lt;hr style="margin-top:10px;"&gt;<br>
      &lt;p style="font-size:11px"&gt;2020&amp;copy; W3Schools. All rights reserved.&lt;/p&gt;<br>
      &lt;hr&gt;</div>
  </div>

  <p>В этом примере атрибут appml-include-html используется для включения файла "inc_footer.html": </p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate htmlHigh'>
      &lt;!DOCTYPE html&gt;<br>
      &lt;html lang="ru"&gt;<br>
      <br>
      &lt;title&gt;Клиенты&lt;/title&gt;<br>
      &lt;link rel="stylesheet" href="style.css"&gt;<br>
      &lt;script src="2.0.3/appml.js"&gt;&lt;/script&gt;<br>
      <br>
      &lt;body&gt;<br>
      <br>
      &lt;h1&gt;Клиенты&lt;/h1&gt;<br>
      &lt;table appml-data="customers.js"&gt;<br>
      &lt;tr&gt;<br>
      &nbsp; &lt;th&gt;Клиент&lt;/th&gt;<br>
      &nbsp; &lt;th&gt;Город&lt;/th&gt;<br>
      &nbsp; &lt;th&gt;Страна&lt;/th&gt;<br>
      &lt;/tr&gt;<br>
      &lt;tr appml-repeat="records"&gt;<br>
      &nbsp; &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>
      &nbsp; &lt;td&gt;{{City}}&lt;/td&gt;<br>
      &nbsp; &lt;td&gt;{{Country}}&lt;/td&gt;<br>
      &lt;/tr&gt;<br>
      &lt;/table&gt;<br>
      <br>
      &lt;div <strong>appml-include-html="inc_footer.html"</strong>&gt;&lt;/div&gt;<br>
      <br>
      &lt;/body&gt;<br>
      &lt;/html&gt;
    </div>
    <a class='w3-btn w3-margin-bottom' href='tryappml_include.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>

  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-button w3-green' href='appml_data.php'>&#10094; Prev</a>
    <a class='w3-right w3-button w3-green' href='appml_controllers.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>