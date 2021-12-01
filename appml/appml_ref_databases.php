<?php include '../include/head.php'; ?>

  <title>AppML Справочник - Базы данных. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML Справочник - Базы данных. Свойство database определяет базу данных как источник данных. Данные из базы данных. Ограничения фильтра. Ограничения сортировки. Подключения к базе данных. Учебник по AppML. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_ref_databases.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

<article>
  <h1>App<span class='color_h1'>ML</span> Справочник - Базы данных</h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-button w3-green' href='appml_ref_files.php'>&#10094; Prev</a>
    <a class='w3-right w3-button w3-green' href='appml_ref_api.php'>Next &#10095;</a>
  </div>
  <hr>

  <h2>Свойство "database"</h2>
  <p>Свойство "database" определяет базу данных как источник данных. Он имеет следующие вспомогательные свойства:</p>
  <table class="w3-table-all notranslate">
    <tr>
      <th style="width:30%">Элемент</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td>"connection"</td>
      <td>Имя подключения к базе данных</td>
    </tr>
    <tr>
      <td>"execute"</td>
      <td>Массив операторов SQL, выполняемых перед извлечением данных (необязательно)</td>
    </tr>
    <tr>
      <td>"keyfield"</td>
      <td>Ключевое поле для основной таблицы (необязательно)</td>
    </tr>
    <tr>
      <td>"maintable"</td>
      <td>Основная таблица для этого приложения (необязательно)</td>
    </tr>
    <tr>
      <td>"orderby"</td>
      <td>Фиксированный SQL-запрос для приложения (необязательно)</td>
    </tr>
    <tr>
      <td>"sql"</td>
      <td>Оператор SQL для получения данных</td>
    </tr>
  </table>
  <hr>

  <h2>Данные из базы данных</h2>
  <p>Эта модель извлекает записи, содержащие Customer, City и Country, из таблицы Customer в базе данных SQL:</p>
  <div class="w3-example">
    <h3>Пример</h3>
    <div class="w3-code notranslate jsHigh">
      {<br>"database": {<br>&nbsp;&nbsp;&nbsp; "connection": "mysql",<br>
      &nbsp;&nbsp;&nbsp;
      "sql"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
      "SELECT CustomerName, City, Country FROM Customers",<br>
      &nbsp;&nbsp;&nbsp;
      "orderby"&nbsp;&nbsp;&nbsp;: "CustomerName"<br>
      }<br>}
    </div>
  </div>
  <hr>

  <h2>Ограничения фильтра</h2>
  <p>Чтобы пользователи могли фильтровать данные, вы можете добавить информацию о фильтре в модель:</p>
  <div class="w3-example">
    <div class="w3-code notranslate jsHigh">
      "filteritems" : [<br>
      &nbsp;&nbsp;&nbsp; {"item" : "CustomerName", "label" : "Customer"},<br>
      &nbsp;&nbsp;&nbsp; {"item" : "City"},<br>
      &nbsp;&nbsp;&nbsp; {"item" : "Country"}]
    </div>
  </div>
  <hr>

  <h2>Ограничения сортировки</h2>
  <p>Чтобы пользователи могли сортировать данные, вы можете добавить в модель информацию о сортировке:</p>
  <div class="w3-example">
    <div class="w3-code notranslate jsHigh">
      "sortitems" : [<br>
      &nbsp;&nbsp;&nbsp; {"item" : "CustomerName", "label" : "Customer"},<br>
      &nbsp;&nbsp;&nbsp; {"item" : "City"},<br>
      &nbsp;&nbsp;&nbsp; {"item" : "Country"}]
    </div>
  </div>
  <hr>

  <h2>Обновить ограничения</h2>
  <p>Чтобы пользователи могли обновлять данные, вы можете включить информацию об обновлении в модель:</p>
  <div class="w3-example">
    <h3>Пример</h3>
    <div class="w3-code notranslate jsHigh">"updateItems" : [<br>
      &nbsp;&nbsp;&nbsp; {"item" : "CustomerName"},<br>&nbsp;&nbsp;&nbsp;
      {"item" : "Address"},<br>&nbsp;&nbsp;&nbsp; {"item" : "PostalCode"},<br>&nbsp;&nbsp;&nbsp;
      {"item" : "City"},<br>&nbsp;&nbsp;&nbsp; {"item" : "Country"}]
    </div>
  </div>

  <div class="w3-panel w3-note">
    <p>По умолчанию AppML позволяет фильтровать, сортировать или обновлять данные, только они указаны в модели.</p>
  </div>
  <hr>

  <h2>Подключения к базе данных</h2>
  <p>Подключения к базе данных определены в <strong>appml_config.php</strong>:</p>
  <div class="w3-example">
    <h3>appml_config.php</h3>
    <div class="w3-code notranslate">
      &lt;?php echo("Access Forbidden");exit();?&gt;<br>{<br>"dateformat" : "yyyy-mm-dd",<br>"databases": [<br>&nbsp;&nbsp;&nbsp;
      {<br>&nbsp;&nbsp;&nbsp; "connection"&nbsp;: "mysql",<br>&nbsp;&nbsp;&nbsp; "host"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      : "127.0.0.1:3306",<br>&nbsp;&nbsp;&nbsp; "dbname"&nbsp;&nbsp; &nbsp; : "Northwind",<br>
      &nbsp;&nbsp;&nbsp; "username"&nbsp;&nbsp;
      : "myUserId",<br>&nbsp;&nbsp;&nbsp; "password"&nbsp;&nbsp; : "myPassword"<br>&nbsp;&nbsp;&nbsp; },<br>
      &nbsp;&nbsp;&nbsp; {<br>&nbsp;&nbsp;&nbsp; "connection"&nbsp;: "googleDB",<br>&nbsp;&nbsp;&nbsp; "host"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
      "192.168.1.1:3306",<br>&nbsp;&nbsp;&nbsp; "dbname"&nbsp;&nbsp; &nbsp; : "Northwind",<br>&nbsp;&nbsp;&nbsp; "username"&nbsp;&nbsp;
      : "myUserId",<br>&nbsp;&nbsp;&nbsp; "password"&nbsp;&nbsp; : "myPassword"<br>&nbsp;&nbsp;&nbsp; },<br>
      &nbsp;&nbsp;&nbsp; {<br>
      &nbsp;&nbsp;&nbsp; "connection"&nbsp;: "amazonDB",<br>
      &nbsp;&nbsp;&nbsp; "host"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
      "mydbinstance.amazon.com:3306",<br>&nbsp;&nbsp;&nbsp; "dbname"&nbsp;&nbsp; &nbsp; : "Northwind",<br>
      &nbsp;&nbsp;&nbsp;
      "username"&nbsp;&nbsp; : "myUserId",<br>&nbsp;&nbsp;&nbsp; "password"&nbsp;&nbsp; : "myPassword"<br>
      &nbsp;&nbsp;&nbsp; },<br>&nbsp;&nbsp;&nbsp; {<br>
      &nbsp;&nbsp;&nbsp; "connection"&nbsp;: "azureDB",<br
      >&nbsp;&nbsp;&nbsp; "host"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
      "azure.cloudapp.net",<br>&nbsp;&nbsp;&nbsp; "dbname"&nbsp;&nbsp; &nbsp; : "Northwind",<br>
      &nbsp;&nbsp;&nbsp; "username"&nbsp;&nbsp; :
      "myUserId",<br>&nbsp;&nbsp;&nbsp; "password"&nbsp;&nbsp; : "myPassword"<br>
      &nbsp;&nbsp;&nbsp; }<br>
      ]<br>}
    </div>
  </div>
  <div class="w3-panel w3-note">
    <p>Файл конфигурации может содержать множество подключений к базе данных.</p>
  </div>
  <hr>

  <h2>Создание баз данных</h2>
  <p>Поскольку AppML позволяет выполнять операторы SQL перед запуском приложения, вы можете использовать его для создания базы данных при необходимости:</p>
  <div class="w3-example">
    <h3>Модель</h3>
    <div class="w3-code notranslate jsHigh">
      {<br>"database" : {<br>"connection" : "myCDs",<br>"execute" : [<br>"DROP
      TABLE IF EXISTS CD_Catalog",<br>"CREATE TABLE IF NOT EXISTS CD_Catalog (CDID
      INT NOT NULL AUTO_INCREMENT,PRIMARY KEY (CDID),Title NVARCHAR(255),Artist NVARCHAR(255),Country NVARCHAR(255),Price
      NUMBER)"<br>]<br>}}</div>
  </div>
  <p>Идеально подходит для быстрого прототипирования!</p>
  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-button w3-green' href='appml_ref_files.php'>&#10094; Prev</a>
    <a class='w3-right w3-button w3-green' href='appml_ref_api.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>