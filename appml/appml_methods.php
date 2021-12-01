<?php include '../include/head.php'; ?>

  <title>AppML API. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML API определяет методы и свойства AppML. Что могут делать методы и свойства? Учебник по AppML. Примеры. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_methods.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

  <article>
    <h1><span class='color_h1'>AppML API</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_models.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_cases.php'>Next &#10095;</a>
    </div>
    <hr>

    <p class='intro'><strong>AppML API</strong> определяет методы и свойства AppML.</p>
    <p><strong>API</strong> - расшифровывается как Application Programming Interface (интерфейс программирования приложений).</p>
    <hr>

    <h2>Что могут делать методы и свойства?</h2>
    <p>С помощью методов и свойств вы можете:</p>
    <ul style='list-style-type:square;'>
      <li>Создать приложение AppML</li>
      <li>Обеспечивать приложения данными</li>
      <li>Получать данные приложения для использования на вашей веб-странице</li>
    </ul>
    <hr>

    <h2>Пример</h2>
    <p>
      <strong>new AppML()</strong> создает новый AppML объект.<br>
      <strong>dataSource</strong> устанавливает источник данных AppML объекта.<br>
      <strong>getData()</strong> получает данные.<br>
      <strong>data.records</strong> содержит записи данных.
    </p>
    <p>Вы можете зацикливать записи и отображать содержимое в HTML элементе:</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        // Создайте объект AppML и получите данные<br>
        myObj = new AppML();<br>
        myObj.dataSource = "https://www.w3schools.com/appml/customers.php";<br>
        myObj.getData();<br><br>
        // Найдите записи данных<br>
        myArr = myObj.data.records;<br>len = myArr.length;<br><br>
        // Показать записи<br>
        for (i = 0; i &lt; len; i++) {<br>
        &nbsp;&nbsp;&nbsp; txt += myArr[i].CustomerName + "&lt;br&gt;";<br>}<br>
        document.getElementById("demo").innerHTML = txt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='tryappml_methods_php.html' target='_blank'>Попробуйте сами &raquo;</a>
    </div>


    <div class='w3-example'>
      <h3>Результат</h3>
      <div class='w3-code notranslate jsHigh'>
        Alfreds Futterkiste<br>Berglunds snabbköp<br>Centro comercial Moctezuma<br>
        Ernst Handel<br>FISSA Fabrica Inter. Salchichas S.A.<br>Galería del
        gastrónomo<br>Island Trading<br>Königlich Essen<br>Laughing Bacchus Wine
        Cellars<br>Magazzini Alimentari Riuniti<br>North/South<br>Paris spécialités<br>
        Rattlesnake Canyon Grocery<br>Simons bistro<br>The Big Cheese<br>
        Vaffeljernet<br>Wolski Zajazd</div>
    </div>
    <hr>

    <h2>Некоторые методы AppML</h2>
    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:30%'>Метод</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td>new AppML()</td>
        <td>Создает новый объект AppML</td>
      </tr>
      <tr>
        <td>run()</td>
        <td>Запускает объект приложения</td>
      </tr>
      <tr>
        <td>appml("name")</td>
        <td>Возвращает объект appml с указанным именем</td>
      </tr>
      <tr>
        <td>displayMessage(text)</td>
        <td>Отображает указанное сообщение</td>
      </tr>
      <tr>
        <td>setError(no, description)</td>
        <td>Устанавливает указанную ошибку и описание ошибки</td>
      </tr>
    </table>
    <hr>

    <h2>Некоторые свойства AppML</h2>
    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:30%'>Свойство</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td>appName</td>
        <td>Название приложения (id контейнера)</td>
      </tr>
      <tr>
        <td>container</td>
        <td>Элемент контейнера приложения</td>
      </tr>
      <tr>
        <td>controller</td>
        <td>Контроллер приложения</td>
      </tr>
      <tr>
        <td>data</td>
        <td>Объект данных приложения</td>
      </tr>
      <tr>
        <td>dataSource</td>
        <td>Источник данных приложения</td>
      </tr>
      <tr>
        <td>message</td>
        <td>Сообщение приложения</td>
      </tr>
    </table>
    <hr>

    <h2>Некоторые свойства объекта данных</h2>
    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:30%'>Свойство</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td>data.model</td>
        <td>Модель данных приложения</td>
      </tr>
      <tr>
        <td>data.records</td>
        <td>Записи данных приложения</td>
      </tr>
    </table>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_models.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_cases.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar_appml.php'; ?>
<?php include '../include/footer.php'; ?>