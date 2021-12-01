<?php include '../include/head.php'; ?>

  <title>AppML Клиент. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML клиент - это JavaScript, который работает в любом веб-браузере. Его можно легко добавить на любую HTML-страницу с помощью одной строки кода. AppML клиент позволяет добавлять внешние данные в любой элемент HTML, используя атрибуты HTML. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_client.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

<article>
  <h1><span class='color_h1'>AppML Клиент</span></h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-button w3-green' href='appml_case_employees.php'>&#10094; Prev</a>
    <a class='w3-right w3-button w3-green' href='appml_prototype.php'>Next &#10095;</a>
  </div>
  <hr>
  <p class='intro'>В следующих разделах мы создадим веб-приложение в веб-браузере.</p>
  <hr>

  <h2>AppML Клиент</h2>
  <p>AppML клиент - это JavaScript, который работает в любом веб-браузере.</p>
  <p>Его можно легко добавить на любую HTML-страницу с помощью одной строки кода:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate htmlHigh'>
      &lt;script src="https://w3schoolsrus.github.io/appml/2.0.3/appml.js"&gt;&lt;/script&gt;
    </div>
  </div>

  <p>AppML клиент позволяет добавлять внешние данные в любой элемент HTML, используя атрибуты HTML:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate htmlHigh'>
      &lt;table appml-data="customers.js"&gt;
    </div>
  </div>

  <p>Он имеет встроенную функцию для отображения данных в любом месте HTML:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate htmlHigh'>
      &lt;td&gt;{{CustomerName}}&lt;/td&gt;</div>
  </div>

  <div class='w3-panel w3-note'>
    <p>{{ ... }} Заполнители для данных AppML.</p>
  </div>

  <p>Он также имеет встроенные функции для повторения элементов HTML с использованием любого массива, найденного в данных:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate htmlHigh'>
      &lt;tr<strong> </strong>appml-repeat="records"&gt;<br>..<br>.<br>&lt;/tr&gt;</div>
  </div>

  <p>AppML клиент не будет мешать существующему HTML или CSS.</p>
  <p>Он хорошо работает с любым существующим CSS. В наших примерах мы использовали W3.CSS.</p>
  <hr>

  <h2>AppML веб-приложения</h2>
  <p>AppML чрезвычайно эффективен для создания веб-приложений.</p>
  <p>Одна из самых мощных функций - это возможность разрабатывать прототипы приложений в веб-браузере, включая приложения CRUD для баз данных, без необходимости использования какого-либо веб-сервера.</p>
  <div class='w3-panel w3-note'>
    <p>CRUD: Create, Read, Update, Delete (Создать, Прочитать, Обновить, Удалить).</p>
  </div>
  <hr>

  <h2>AppML сервер</h2>
  <p>AppML поставляется с двумя серверными скриптами (PHP и .NET), предназначенными для предоставления данных сервера.</p>
  <p>С помощью серверных скриптов AppML вы можете легко получить доступ к базам данных SQL, таким как mySQL и SQL server.</p>
  <p>Скрипты сервера очень мощные и могут быть легко установлены на любом сервере PHP или .NET.</p>
  <hr>

  <h2>AppML Web SQL</h2>
  <p>Кроме того, для быстрой разработки приложений и создания прототипов AppML также может моделировать веб-сервер в браузере с помощью Web SQL.</p>
  <p>Web SQL - это API веб-страницы для хранения данных в браузере с использованием SQL. API поддерживается Google Chrome, Opera, Safari и браузером Android.</p>
  <p>Просто добавьте следующий скрипт на свою веб-страницу:</p>

  <div class='w3-example'>
    <div class='w3-code notranslate htmlHigh'>
      &lt;script src="https://w3schoolsrus.github.io/appml/2.0.3/appml_sql.js"&gt;&lt;/script&gt;
    </div>
  </div>

  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-button w3-green' href='appml_case_employees.php'>&#10094; Prev</a>
    <a class='w3-right w3-button w3-green' href='appml_prototype.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>