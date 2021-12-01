<?php include '../include/head.php'; ?>

  <title>AppML Справочник. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Справочник по AppML. Атрибуты. Сообщения. Модели. Свойства модели. Безопасность приложений. Частные модели. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_reference.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

  <article>
    <h1>App<span class='color_h1'>ML</span> Справочник</h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_amazon_rds.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_ref_files.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>AppML HTML Атрибуты</h2>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;div appml-include-html="inc_header.html"&gt;&lt;/div&gt;<br><br>&lt;h1&gt;Клиенты&lt;/h1&gt;<br>&lt;table
        appml-data="customers.js" appml-controller="myController"&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;th&gt;Клиент&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Город&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;th&gt;Страна&lt;/th&gt;<br>&nbsp; &lt;/tr&gt;<br>&nbsp; &lt;tr appml-repeat="records"&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{City}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;td&gt;{{Country}}&lt;/td&gt;<br>&nbsp; &lt;/tr&gt;<br>&lt;/table&gt;<br><br>
        &lt;div appml-include-html="inc_footer.html"&gt;&lt;/div&gt;
      </div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_ref_attributes.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <table class="w3-table-all notranslate">
      <tr>
        <th style="width:25%">Атрибут</th>
        <th>Описание</th>
        <th style="width:25%">Объяснение</th>
      </tr>
      <tr>
        <td>appml-controller</td>
        <td>Определяет контроллер AppML</td>
        <td><a href="appml_controllers.php">AppML Контроллеры</a></td>
      </tr>
      <tr>
        <td>appml-data</td>
        <td>Определяет источник данных для приложения</td>
        <td><a href="appml_data.php">AppML Данные</a></td>
      </tr>
      <tr>
        <td>appml-include-html</td>
        <td>Определяет HTML для включения</td>
        <td><a href="appml_includes.php">AppML Включения</a></td>
      </tr>
      <tr>
        <td>appml-repeat</td>
        <td>Определяет повторяющийся элемент HTML</td>
        <td><a href="appml_howto.php">AppML Как работает</a></td>
      </tr>
    </table>
    <hr>

    <h2>AppML Сообщения</h2>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate jsHigh">
        function myController($appml) {<br>
        &nbsp;&nbsp;&nbsp; if ($appml.message == "display") {<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if ($appml.display.name == "CustomerName") {<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $appml.display.value = $appml.display.value.toUpperCase();<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }<br>&nbsp;&nbsp;&nbsp; }<br>
        }<br>
      </div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_ref_messages.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>


    <table class="w3-table-all notranslate">
      <tr>
        <th style="width:25%">Сообщение</th>
        <th>Отправляет</th>
      </tr>
      <tr>
        <td>ready</td>
        <td>После запуска AppML и готовности к загрузке данных</td>
      </tr>
      <tr>
        <td>loaded</td>
        <td>После полной загрузки AppML готов к отображению данных</td>
      </tr>
      <tr>
        <td>display</td>
        <td>Перед тем, как AppML отобразит элемент данных</td>
      </tr>
      <tr>
        <td>done</td>
        <td>После того, как AppML завершен (отображение завершено)</td>
      </tr>
      <tr>
        <td>submit</td>
        <td>Прежде чем AppML отправит данные</td>
      </tr>
      <tr>
        <td>error</td>
        <td>После того, как AppML обнаружил ошибку</td>
      </tr>
    </table>

    <p>Сообщения AppML описаны в разделе <a href="appml_messages.php">AppML сообщения</a>.</p>
    <hr>

    <h2>AppML Модели</h2>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate jsHigh">
        {<br>"security": "admin",<br>
        "rowsperpage" : 10,<br>
        <br>"database": {<br>&nbsp;&nbsp;&nbsp; "connection": "mysql",<br>&nbsp;&nbsp;&nbsp;
        "sql"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : "SELECT * FROM Customers",<br>&nbsp;&nbsp;&nbsp;
        "orderby"&nbsp;&nbsp; : "CustomerName"}},<br><br>"filteritems" : [<br>
        &nbsp;&nbsp;&nbsp; {"item" : "CustomerName", "label" : "Customer"},<br>
        &nbsp;&nbsp;&nbsp; {"item" : "City"},<br>
        &nbsp;&nbsp;&nbsp; {"item" : "Country"}], <br><br>"sortitems" : [<br>
        &nbsp;&nbsp;&nbsp; {"item" : "CustomerName", "label" : "Customer"},<br>
        &nbsp;&nbsp;&nbsp; {"item" : "City"},<br>
        &nbsp;&nbsp;&nbsp; {"item" : "Country"}]<br>}
      </div>
    </div>
    <hr>

    <h2>AppML Свойства модели</h2>
    <table class="w3-table-all notranslate">
      <tr>
        <th style="width:30%">Элемент</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td>"data"</td>
        <td>Определяет источник flat файла для модели</td>
      </tr>
      <tr>
        <td>"database"</td>
        <td>Определяет источник базы данных для модели</td>
      </tr>
      <tr>
        <td>"filteritems"</td>
        <td>Определяет ограничения фильтра</td>
      </tr>
      <tr>
        <td>"rowsperpage"</td>
        <td>Определяет количество строк, которые нужно выбрать на странице</td>
      </tr>
      <tr>
        <td>"security"</td>
        <td>Определяет безопасность для модели</td>
      </tr>
      <tr>
        <td>"sortitems"</td>
        <td>Определяет ограничения сортировки</td>
      </tr>
    </table>
    <hr>

    <h2>Безопасность приложений</h2>
    <p>Вы должны войти в систему как член группы "admin", чтобы получить доступ к этому приложению:</p>

    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate jsHigh">
        {<br>"security": "admin",<br>
        "database": {<br>&nbsp;&nbsp;&nbsp; "connection": "mysql",<br>&nbsp;&nbsp;&nbsp;
        "sql"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : "SELECT * FROM Customers",<br>&nbsp;&nbsp;&nbsp;
        "orderby"&nbsp;&nbsp; : "CustomerName"}<br>}
      </div>
    </div>
    <hr>

    <h2>Частные модели</h2>
    <p>Вы можете добавить в модель свои личные данные.</p>
    <p>В этом примере предлагаются ограничения на данные:</p>

    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate jsHigh">
        "restrictions" : {<br>&nbsp;&nbsp;&nbsp;
        "fname" : {"maxlength": 40},<br>&nbsp;&nbsp;&nbsp;
        "price" : {"max": 999,"min": 100}<br>&nbsp;&nbsp;&nbsp; }
      </div>
    </div>
    <p>Данные модели могут использоваться серверными приложениями и вашим контроллером AppML.</p>
    <p>В этом примере используются данные модели для проверки ввода:</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        function myController($appml) {<br>&nbsp;&nbsp;&nbsp;
        if ($appml.message == "submit") {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; var price = document.getElementById("price").value;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if (price &lt; $appml.model.restrictions.price.min) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $appml.displayError(15, "Цена слишком низкая!");<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; return;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }<br>
        }<br>
      </div>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_amazon_rds.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_ref_files.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>