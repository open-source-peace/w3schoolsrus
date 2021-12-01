<?php include '../include/head.php'; ?>

  <title>AppML Контроллеры. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML Контроллеры. Назначение AppML контроллера - позволить вам управлять своим приложением. Что может делать контроллер? Примеры с контроллером и без контроллера. Учебник по AppML. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_controllers.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

<article>
  <h1><span class='color_h1'>AppML </span>Контроллеры</h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-button w3-green' href='appml_includes.php'>&#10094; Prev</a>
    <a class='w3-right w3-button w3-green' href='appml_messages.php'>Next &#10095;</a>
  </div>
  <hr>

  <p class='intro'>Назначение <strong>AppML контроллера</strong> - позволить вам <strong>управлять</strong> своим приложением.</p>
  <hr>

  <h2>Что может делать контроллер?</h2>
  <ul>
    <li>Установить исходные данные</li>
    <li>Изменить данные приложения</li>
    <li>Обработка ввода и вывода</li>
    <li>Проверить данные</li>
    <li>Обобщить данные</li>
    <li>Обработка ошибок</li>
    <li>Запускать и останавливать приложения</li>
    <li>И многое другое</li>
  </ul>
  <hr>

  <h2>Без контроллера</h2>
  <p>По умолчанию приложения AppML работают без контроллера:</p>
  <div class="w3-example">
    <h3>Пример</h3>
    <div class="w3-code notranslate htmlHigh">
      &lt;table appml-data="customers.js<strong>"</strong>&gt;<br>
      &lt;tr&gt;<br>
      &nbsp; &lt;th&gt;Клиент&lt;/th&gt;<br>
      &nbsp; &lt;th&gt;Город&lt;/th&gt;<br>
      &nbsp; &lt;th&gt;Страна&lt;/th&gt;<br>&lt;/tr&gt;<br>
      &lt;tr appml-repeat="records"&gt;<br>
      &nbsp; &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>
      &nbsp; &lt;td&gt;{{City}}&lt;/td&gt;<br>
      &nbsp; &lt;td&gt;{{Country}}&lt;/td&gt;<br>
      &lt;/tr&gt;<br>
      &lt;/table&gt;</div>
    <a class="w3-btn w3-margin-bottom" href="tryappml_controller_1.html" target="_blank">Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>С контроллером</h2>
  <p>С помощью контроллера AppML вы можете <strong>управлять</strong> своим приложением в помощью <strong>JavaScript</strong>.</p>
  <p>Контроллер - это JavaScript функция, <strong>предосталенная вами</strong>.</p>
  <p>Атрибут <strong>appml-controller</strong> используется для ссылки на функцию контроллера.</p>
  <div class="w3-example">
    <h3>Пример</h3>
    <div class="w3-code notranslate htmlHigh">
      &lt;h1&gt;Клиенты&lt;/h1&gt;<br>&lt;table appml-data="customers.js" <strong>appml-controller="myController</strong>"&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp;
      &lt;th&gt;Клиент&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Город&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp;
      &lt;th&gt;Страна&lt;/th&gt;<br>&nbsp; &lt;/tr&gt;<br>&nbsp; &lt;tr appml-repeat="records"&gt;<br>&nbsp;&nbsp;&nbsp;
      &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{City}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;
      &lt;td&gt;{{Country}}&lt;/td&gt;<br>&nbsp; &lt;/tr&gt;<br>&lt;/table&gt;<br>
      <br>&lt;script&gt;<br>function myController($appml) {<br>&nbsp;&nbsp;&nbsp;
      if ($appml.message == "display") {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if ($appml.display.name == "CustomerName")
      {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $appml.display.value = $appml.display.value.toUpperCase();<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }<br>&nbsp;&nbsp;&nbsp; }<br>}<br>&lt;/script&gt;</div>
    <a class="w3-btn w3-margin-bottom" href="tryappml_controller_2.html" target="_blank">Попробуйте сами &raquo;</a>
  </div>
  <p>Контроллер (myController) в приведенном выше примере изменяет значение "CustomerName" на верхний регистр перед его отображением.</p>
  <p>Если у вас есть контроллер, AppML будет отправлять <strong>объект приложения</strong> ($appml) в контроллер для каждого важного действия.</p>
  <p>Одно из свойств приложения - это сообщение ($appml.message), описывающее состояние приложения.</p>
  <table class="w3-table-all notranslate">
    <tr>
      <th style="width:25%">Сообщение</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td>ready</td>
      <td>Отправляется после запуска AppML и готов (ready) к загрузке данных</td>
    </tr>
    <tr>
      <td>loaded</td>
      <td>Отправляется после полной загрузки (loaded) AppML, готов к отображению данных</td>
    </tr>
    <tr>
      <td>display</td>
      <td>Отправляется до того, как AppML отобразит (display) элемент данных</td>
    </tr>
    <tr>
      <td>done</td>
      <td>Отправляется после того, как AppML завершен (done) (отображение завершено)</td>
    </tr>
    <tr>
      <td>submit</td>
      <td>Отправляется до того, как AppML отправит (submit) данные</td>
    </tr>
    <tr>
      <td>error</td>
      <td>Отправляется после того, как AppML обнаружил ошибку (error)</td>
    </tr>
  </table>

  <div class='w3-panel w3-note'>
    <p>Сообщения объясняются в следующей главе на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
  </div>

  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-button w3-green' href='appml_includes.php'>&#10094; Prev</a>
    <a class='w3-right w3-button w3-green' href='appml_messages.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>