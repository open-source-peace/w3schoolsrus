<?php include '../include/head.php'; ?>
<title>HTTP Методы GET и POST. Справочник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Http методы на веб-странице. Справочник. Какие http методы в веб-документах. Курс по основам HTML5. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_tags.php'; ?>
<?php include '../include/before_content_tags.php'; ?>

<article>
  <h1>HTTP <span class='color_h1'>Методы запроса</span></h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='ref_httpmessages.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='ref_pxtoemconversion.php'>Next &#10095;</a>
  </div>
  <hr>

  <p class='intro'>Два наиболее распространенных метода HTTP: GET и POST.</p>
  <hr>

  <h2>Что такое HTTP?</h2>
  <p><strong>Hypertext Transfer Protocol</strong> - Протокол передачи гипертекста (HTTP) предназначен для обеспечения связи между клиентами и серверами.</p>
  <p>HTTP работает как протокол запроса-ответа между клиентом и сервером.</p>
  <p>Веб-браузер может быть клиентом, а приложение на компьютере, на котором размещен веб-сайт, может быть сервером.</p>
  <p>Пример: клиент (браузер) отправляет HTTP-запрос на сервер; затем сервер возвращает ответ клиенту. Ответ содержит информацию о состоянии запроса и может также содержать запрошенный контент.</p>
  <hr>

  <h2>HTTP Методы</h2>
  <ul>
    <li><b>GET</b></li>
    <li><b>POST</b></li>
    <li><strong>PUT</strong></li>
    <li><strong>HEAD</strong></li>
    <li><strong>DELETE</strong></li>
    <li><strong>PATCH</strong></li>
    <li><strong>OPTIONS</strong></li>
  </ul>
  <hr>

  <h2>Метод GET</h2>
  <p><strong>GET используется для запроса данных от указанного ресурса.</strong></p>
  <p><strong>GET - один из самых распространенных методов HTTP.</strong></p>
  <p>Обратите внимание, что строка запроса (пары имя/значение) отправляется в URL-адресе запроса GET:</p>
  <div class='w3-code w3-border notranslate'>
    <div>
      /test/demo_form.php?name1=value1&amp;name2=value2
    </div>
  </div>

  <p><b>Некоторые другие заметки о запросах GET:</b></p>
  <ul>
    <li>GET-запросы могут быть кэшированы</li>
    <li>GET запросы остаются в истории браузера</li>
    <li>GET запросы могут быть добавлены в закладки</li>
    <li>Запросы GET никогда не должны использоваться при работе с конфиденциальными данными.</li>
    <li>GET-запросы имеют ограничения по длине</li>
    <li>GET-запросы используются только для запроса данных (не изменяются)</li>
  </ul>
  <hr>

  <h2>Метод POST</h2>
  <p class='intro'><strong>POST используется для отправки данных на сервер для создания/обновления ресурса.</strong></p>
  <p>Данные, отправленные на сервер с помощью POST, хранятся в теле запроса HTTP.:</p>
  <div class='w3-code w3-border notranslate'>
    <div>
      POST /test/demo_form.php HTTP/1.1<br>
      Host: w3schools.com<br>
      name1=value1&amp;name2=value2
    </div>
  </div>
  <p><strong>POST является одним из самых распространенных методов HTTP. </strong></p>
  <p><b>Некоторые другие заметки о запросах POST:</b></p>
  <ul>
    <li>POST-запросы никогда не кэшируются</li>
    <li>POST-запросы не сохраняются в истории браузера</li>
    <li>POST-запросы не могут быть добавлены в закладки</li>
    <li>POST-запросы не имеют ограничений по длине данных</li>
  </ul>
  <hr>
  <h2>Метод PUT</h2>
  <p><strong>PUT используется для отправки данных на сервер для создания / обновления ресурса.</strong></p>
  <p>Разница между POST и PUT заключается в том, что PUT-запросы являются идентичными. То есть, вызов одного и того же запроса PUT несколько раз всегда будет приводить к одному и тому же результату. Напротив, вызов POST-запроса неоднократно имеет побочные эффекты от создания одного и того же ресурса несколько раз.</p>
  <hr>

  <h2>Метод HEAD</h2>
  <p><strong>HEAD почти идентичен GET, но без тела ответа.</strong></p>
  <p>Другими словами, если GET/users возвращает список пользователей, то HEAD/users сделает такой же запрос, но не вернет список пользователей.</p>
  <p>Запросы HEAD полезны для проверки того, что будет возвращен запрос GET, перед тем, как фактически выполнить запрос GET, например, перед загрузкой большого файла или тела ответа.</p>
  <hr>

  <h2>Метод DELETE</h2>
  <p><strong>Метод DELETE удаляет указанный ресурс.</strong></p>
  <hr>

  <h2>Метод OPTIONS</h2>
  <p><strong>Метод OPTIONS описывает параметры связи для целевого ресурса.</strong></p>
  <hr>

  <h2>Сравнение GET и POST</h2>
  <p>В следующей таблице сравниваются два метода HTTP: GET и POST.</p>
  <div class='w3-responsive'>
    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:30%'>&nbsp;</th>
        <th style='width:35%'>GET</th>
        <th>POST</th>
      </tr>
      <tr>
        <td>Кнопка НАЗАД/Перезагрузить</td>
        <td>Безвредный</td>
        <td>Данные будут повторно отправлены (браузер должен предупредить пользователя о том, что данные должны быть повторно отправлены)</td>
      </tr>
      <tr>
        <td>Закладки</td>
        <td>Может быть в закладках</td>
        <td>Не может быть в закладках</td>
      </tr>
      <tr>
        <td>Кэширование (сохранённая копия)</td>
        <td>Может быть кэширование</td>
        <td>Не может быть кэширования</td>
      </tr>
      <tr>
        <td>Тип кодирования</td>
        <td>application/x-www-form-urlencoded</td>
        <td>application/x-www-form-urlencoded или multipart/form-data. Используйте многочастное кодирование для двоичных данных</td>
      </tr>
      <tr>
        <td>История</td>
        <td>Параметры остаются в истории браузера</td>
        <td>Параметры не сохраняются в истории браузера</td>
      </tr>
      <tr>
        <td>Ограничения на длину данных</td>
        <td>Да, при отправке данных метод GET добавляет данные в URL; и длина URL-адреса ограничена (максимальная длина URL-адреса составляет 2048 символов)</td>
        <td>Нет ограничений</td>
      </tr>
      <tr>
        <td>Ограничения на тип данных</td>
        <td>Разрешены только символы ASCII</td>
        <td>Нет ограничений. Двоичные данные также разрешены</td>
      </tr>
      <tr>
        <td>Безопасность</td>
        <td>GET менее безопасен по сравнению с POST, потому что отправленные данные являются частью URL<br>
          <br>Никогда не используйте GET при отправке паролей или другой конфиденциальной информации!</td>
        <td>POST немного безопаснее, чем GET, поскольку параметры не сохраняются в истории браузера или в журналах веб-сервера (в логах).</td>
      </tr>
      <tr>
        <td>Видимость</td>
        <td>Данные видны всем в URL</td>
        <td>Данные не отображаются в URL</td>
      </tr>
    </table>
  </div>
  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='ref_httpmessages.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='ref_pxtoemconversion.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>