<?php include '../include/head.php'; ?>

  <title>AppML Сообщения. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML Сообщения и действия. Когда AppML собирается выполнить действие, он отправляет объект приложения ($appml) в контроллер. Одним из свойств объекта приложения является сообщение ($appml.message), описывающее состояние приложения. Учебник по AppML. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_messages.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

  <article>
    <h1><span class='color_h1'>AppML </span>Сообщения</h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_controllers.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_models.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>AppML Сообщения и действия</h2>
    <p>Когда <strong>AppML</strong> собирается выполнить действие, он отправляет объект приложения ($appml) в контроллер.</p>
    <p>Одним из свойств объекта приложения является сообщение ($appml.message), описывающее состояние приложения.</p>
    <p>Тестирование этого сообщения позволяет вам добавить собственный код JavaScript в зависимости от действия.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        function myController($appml) {<br>&nbsp;&nbsp;&nbsp; if ($appml.message == "ready") {alert ("Hello
        Application");}<br>
        }</div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_messages_object.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>AppML Сообщения</h2>
    <p>Это список сообщений AppML, которые можно получить:
    </p>
    <table class="w3-table-all notranslate">
      <tr>
        <th style="width:30%">Сообщение</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td>"ready"</td>
        <td>Отправляется после запуска AppML и готов к загрузке данных</td>
      </tr>
      <tr>
        <td>"loaded"</td>
        <td>Отправляется после полной загрузки AppML, готов к отображению данных</td>
      </tr>
      <tr>
        <td>"display"</td>
        <td>Отправляется до того, как AppML отобразит элемент данных</td>
      </tr>
      <tr>
        <td>"done"</td>
        <td>Отправляется после того, как AppML завершен (отображение завершено)</td>
      </tr>
      <tr>
        <td>"submit"</td>
        <td>Отправляется до того, как AppML отправит данные</td>
      </tr>
      <tr>
        <td>"error"</td>
        <td>Отправляется после того, как AppML обнаружил ошибку</td>
      </tr>
    </table>
    <hr>

    <h2>Сообщение "ready" (готово)</h2>
    <p>Когда приложение AppML готово к загрузке данных, оно отправит сообщение <strong>"ready"</strong> ("готово").</p>
    <p>Это идеальное место для предоставления приложению исходных данных (начальных значений):</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;div appml-controller="myController" appml-data="customers.js"&gt;<br>&lt;h1&gt;Клиенты&lt;/h1&gt;<br>&lt;p&gt;{{today}}&lt;/p&gt;<br>&lt;table&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;th&gt;Клиент&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Город&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;th&gt;Страна&lt;/th&gt;<br>&nbsp; &lt;/tr&gt;<br>&nbsp; &lt;tr appml-repeat="records"&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{City}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;td&gt;{{Country}}&lt;/td&gt;<br>&nbsp; &lt;/tr&gt;<br>&lt;/table&gt;<br>
        &lt;p&gt;Copyright {{copyright}}&lt;/p&gt;<br>&lt;/div&gt;<br>
        <br>&lt;script&gt;<br>function myController($appml) {<br><strong>&nbsp;&nbsp;&nbsp; if ($appml.message == "ready") {<br>
        </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        $appml.today = new Date();<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        $appml.copyright = "W3Schools"<br>&nbsp;&nbsp;&nbsp; }<br>}<br>&lt;/script&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_messages_open.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>В приведенном выше примере, когда <strong>$appml.message</strong> является "ready", контроллер добавляет к приложению два новых свойства (<strong>today</strong> и <strong>copyright</strong>).</p>
    <p>Когда приложение запускается, ему становятся доступны новые свойства.</p>
    <hr>

    <h2>Сообщение "loaded" (загружено)</h2>
    <p>Когда приложение AppML загружается с данными (готовыми к отображению), оно отправляет сообщение "<strong>loaded</strong>" ("загружено").</p>
    <p>Это идеальное место для внесения изменений (при необходимости) в загруженные данные.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class="w3-code notranslate jsHigh">
        function myController($appml) {<br><strong>&nbsp;&nbsp;&nbsp; if ($appml.message == "loaded") {<br>
        </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        // вычислите свои значения здесь перед отображением<br>&nbsp;&nbsp;&nbsp; }<br>}</div>
    </div>
    <hr>

    <h2>Сообщение "display" (отобразить)</h2>
    <p>Каждый раз, когда AppML отображает элемент данных, он отправляет сообщение "<strong>display</strong>" ("отобразить").</p>
    <p>Это идеальное место для изменения вывода:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;div appml_app="myController" appml-data="customers.js"&gt;<br>
        &lt;h1&gt;Клиенты&lt;/h1&gt;<br>&lt;table&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;th&gt;Клиент&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Город&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;th&gt;Страна&lt;/th&gt;<br>&nbsp; &lt;/tr&gt;<br>&nbsp; &lt;tr appml-repeat="records"&gt;<br>
        &nbsp;&nbsp;&nbsp;
        &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{City}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;td&gt;{{Country}}&lt;/td&gt;<br>&nbsp; &lt;/tr&gt;<br>&lt;/table&gt;<br>&lt;/div&gt;<br>
        <br>&lt;script&gt;<br>function myController($appml) {<br>&nbsp;&nbsp;&nbsp; if
        ($appml.message == "display") {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if ($appml.display.name ==
        "CustomerName") {<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $appml.display.value = $appml.display.value.substr(0,15);
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if ($appml.display.name == "Country") {<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        $appml.display.value = $appml.display.value.toUpperCase();<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }<br>&nbsp;&nbsp;&nbsp; }<br>
        }<br>&lt;/script&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_messages_display.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>В приведенном выше примере "CustomerName" сокращается до 15 символов, а "Country" преобразуется в верхний регистр.</p>
    <hr>

    <h2>Сообщение "done" (завершено)</h2>
    <p>Когда приложение AppML завершит отображение данных, оно отправит сообщение  "<strong>done</strong>" ("завершено").</p>
    <p>Это идеальное место для очистки или расчета данных приложения (после отображения).</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;script&gt;<br>function myController($appml) {<br><strong>&nbsp;&nbsp;&nbsp; if ($appml.message == "done") {<br>
        </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <em>рассчет данных здесь</em><br>&nbsp;&nbsp;&nbsp; }<br>}<br>&lt;/script&gt;</div>
    </div>
    <hr>

    <h2>Сообщение "submit" (отправить)</h2>
    <p>Когда приложение AppML готово к отправке данных, оно отправит сообщение "<strong>submit</strong>" ("отправить").</p>
    <p>Это идеальное место для проверки ввода приложения.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;script&gt;<br>function myController($appml) {<br><strong>&nbsp;&nbsp;&nbsp; if ($appml.message == "submit") {<br>
        </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <em>проверка данных здесь</em><br>&nbsp;&nbsp;&nbsp; }<br>}<br>&lt;/script&gt;</div>
    </div>
    <hr>

    <h2>Сообщение "error" (ошибка)</h2>
    <p>В случае возникновения ошибки AppML отправит сообщение "<strong>error</strong>" ("ошибка").</p>
    <p>Это идеальное место для обработки ошибок.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;script&gt;<br>function myController($appml) {<br><strong>&nbsp;&nbsp;&nbsp; if ($appml.message ==
          "error") {<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          alert ($appml.error.number + " " + $appml.error.description)<br>&nbsp;&nbsp;&nbsp; }<br>
        </strong>}<br>&lt;/script&gt;</div>
    </div>
    <hr>

    <h2>AppML Свойства</h2>
    <p>Это список некоторых часто используемых свойств AppML:
    </p>
    <table class="w3-table-all notranslate">
      <tr>
        <th style="width:30%">Свойство</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td>$appml.message</td>
        <td>Текущее состояние приложения</td>
      </tr>
      <tr>
        <td>$appml.display.name</td>
        <td>Имя поля данных, которое будет отображаться</td>
      </tr>
      <tr>
        <td>$appml.display.value</td>
        <td>Значение поля данных, которое будет отображаться</td>
      </tr>
      <tr>
        <td>$appml.error.number</td>
        <td>Номер ошибки</td>
      </tr>
      <tr>
        <td>$appml.error.description</td>
        <td>Описание ошибки</td>
      </tr>
    </table>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_controllers.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_models.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>