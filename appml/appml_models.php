<?php include '../include/head.php'; ?>

  <title>AppML Модели. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML Модели. Что такое модель AppML? Модель AppML - это объект JavaScript (JSON), описывающий приложение. Что может делать модель AppML? Примеры. Учебник по AppML. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_models.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

  <article>
    <h1><span class='color_h1'>AppML </span>Модели</h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_messages.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_methods.php'>Next &#10095;</a>
    </div>
    <hr>

    <p class='intro'><strong>Модель AppML</strong> описывает приложение.</p>
    <hr>

    <h2>Что такое модель AppML?</h2>
    <p><strong>Модель AppML</strong> - это объект JavaScript (JSON), описывающий приложение.</p>
    <p>Эта небольшая модель описывает полное приложение для извлечения данных из <strong>базы данных</strong>:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate jsHigh'>
        {<br>"database" : {<br>
        &nbsp;&nbsp;&nbsp; "connection" : "localmysql",<br>
        &nbsp;&nbsp;&nbsp;  "sql" : "SELECT * FROM Customers"}<br>}</div>
    </div>
    <hr>

    <h2>Что может делать модель AppML?</h2>
    <p>С помощью модели AppML вы можете:</p>
    <ul style="list-style-type:square;">
      <li>Определить подключения к таким базам данных, как MySQL, SQL Server, Access и Oracle;</li>
      <li>Определить подключения к файлам данных, таким как JSON, XML и другим текстовым файлам;</li>
      <li>Определить операторы SQL для получения данных;</li>
      <li>Определить ограничения фильтрации и сортировки;</li>
      <li>Определить типы данных, форматы данных и ограничения на обновление;</li>
      <li>Определить безопасность приложений, пользователей и группы пользователей.</li>
    </ul>
    <hr>

    <h2>Примеры</h2>
    <p>Чтобы пользователи могли фильтровать данные (искать, сортировать), вы можете добавить информацию о фильтре в модель:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        "filteritems" : [<br>
        &nbsp;&nbsp;&nbsp; {"item" : "CustomerName", "label" : "Customer"},<br>
        &nbsp;&nbsp;&nbsp; {"item" : "City"},<br>
        &nbsp;&nbsp;&nbsp; {"item" : "Country"}<br>]
      </div>
    </div>

    <p>Чтобы пользователи могли обновлять данные, вы можете добавить информацию об обновлении в модель:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>"updateItems" : [<br>
        &nbsp;&nbsp;&nbsp; {"item" : "CustomerName"},<br>&nbsp;&nbsp;&nbsp;
        {"item" : "Address"},<br>&nbsp;&nbsp;&nbsp; {"item" : "PostalCode"},<br>&nbsp;&nbsp;&nbsp;
        {"item" : "City"},<br>&nbsp;&nbsp;&nbsp; {"item" : "Country"}<br>]
      </div>
    </div>
    <hr>

    <h2>Без модели</h2>
    <p>Приложения, которые вы видели ранее в этом <strong>учебнике по AppML</strong>, не использовали никаких моделей.</p>

    <div class='w3-panel w3-note'>
      <p>В следующих главах данного учебника на нашем сайте <?php include '../include/w3schools.php'; ?> мы будем подключаться к базам данных, читать, фильтровать и обновлять данные, как указано в модели.</p>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_messages.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_methods.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>