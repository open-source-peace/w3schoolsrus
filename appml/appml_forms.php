<?php include '../include/head.php'; ?>

  <title>AppML Формы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML Формы ввода для базы данных. Как создать? Используется локальная база данных SQL. Включить команды формы. Учебник по AppML. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_forms.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

  <article>
    <h1><span class='color_h1'>AppML Формы</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_lists.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_database.php'>Next &#10095;</a>
    </div>
    <hr>
    <p class='intro'>В этом разделе показано, <strong>как создать форму ввода для базы данных</strong>.</p>
    <hr>

    <div class='w3-panel w3-note'>
      <p>В примерах на этой странице используется локальная база данных SQL.<br>
        Локальные базы данных SQL не работают в IE или Firefox. Используйте Chrome или Safari.</p>
    </div>

    <h2>Создать модель формы</h2>
    <div class='w3-example'>
      <h3>model_customersform.js</h3>
      <div class='w3-code notranslate jsHigh'>
        {<br>"database" : {<br>&nbsp;&nbsp;&nbsp; "connection" : "localmysql",<br>
        &nbsp;&nbsp;&nbsp; "maintable" : "Customers",<br>&nbsp;&nbsp;&nbsp; "keyfield" : "CustomerID",<br>
        &nbsp;&nbsp;&nbsp; "sql" : "SELECT * FROM Customers"},<br>"updateItems" : [<br>&nbsp;&nbsp;&nbsp; {"item" :
        "CustomerName"},<br>&nbsp;&nbsp;&nbsp; {"item" : "Address"},<br>
        &nbsp;&nbsp;&nbsp; {"item" : "PostalCode"},<br>&nbsp;&nbsp;&nbsp; {"item" : "City"},<br>
        &nbsp;&nbsp;&nbsp; {"item" : "Country"}]<br>}</div>
    </div>
    <hr>

    <h2>Создать HTML форму</h2>
    <p>В предыдущем разделе вы создали приложение для вывода списка записей из базы данных.</p>
    <p>Теперь добавьте форму заявки на страницу:</p>
    <div class="w3-example">
      <h3>HTML форма</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;div id="Form01" class="w3-container w3-light-grey w3-padding-large
        w3-margin-bottom" appml-data="local?model=model_customersform"&gt;<br><br>&lt;p&gt;<br>
        &lt;label for="customername"&gt;Customer:&lt;/label&gt;<br>&lt;input id="customername"
        class="w3-input w3-border"&gt;<br>&lt;/p&gt;<br><br>&lt;p&gt;<br>&lt;label
        for="address"&gt;Address:&lt;/label&gt;<br>&lt;input id="address" class="w3-input
        w3-border"&gt;<br>&lt;/p&gt;<br><br>&lt;p&gt;<br>&lt;label for="city"&gt;City:&lt;/label&gt;<br>&lt;input
        id="city" class="w3-input w3-border"&gt;<br>&lt;/p&gt;<br><br>&lt;p&gt;<br>&lt;label
        for="postalcode"&gt;Postal Code:&lt;/label&gt;<br>&lt;input id="postalcode"
        class="w3-input w3-border"&gt;<br>&lt;/p&gt;<br>
        <br>&lt;p&gt;<br>&lt;label for="country"&gt;Country:&lt;/label&gt;<br>&lt;input id="country"
        class="w3-input w3-border"&gt;<br>&lt;/p&gt;<br><br>&lt;/div&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_form_1.html" target="_blank">Попробуйте сами »</a>
    </div>

    <h2>HTML форма. Объяснение</h2>
    <p><strong>appml-data="local?model=model_customersform"</strong> определяет приложение AppML для формы.</p>
    <hr>

    <h2>Создание команд HTML-форм</h2>
    <p>Используйте свою любимую таблицу стилей (мы используем bootstrap) и создайте нужные команды формы:</p>

    <div class="w3-example">
      <h3>inc_formcommands.html</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;span onclick="document.getElementById('Form01').style.display='none'"
        class="w3-button w3-xlarge w3-right"&gt;&amp;times;&lt;/span&gt;<br><br>&lt;div
        class="w3-bar w3-border w3-white"&gt;<br>&lt;button onclick="appml('Form01').newRecord();" class="w3-btn"&gt;New&lt;/button&gt;<br>
        &lt;button onclick="appml('Form01').saveRecord();" class="w3-btn w3-green"&gt;Save&lt;/button&gt;<br>&lt;button onclick="appml('Form01').deleteRecord();" class="w3-btn"&gt;Delete&lt;/button&gt; <br>&lt;/div&gt;<br><br>&lt;div id="appmlmessage" class="w3-container w3-pale-yellow w3-padding" style="display:none;"&gt;<br>
        &lt;span onclick="this.parentNode.style.display='none';" class="w3-button
        w3-xlarge w3-right"&gt;&amp;times;&lt;/span&gt;<br>&lt;div id="message"&gt;&lt;/div&gt;<br>&lt;/div&gt;
      </div>
    </div>
    <hr>

    <h2>Включите команды формы</h2>
    <p>Включите команды формы в вашу форму:</p>
    <div class="w3-example">
      <h3>HTML Форма</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;div id="Form01" class="w3-container w3-light-grey w3-padding-large
        w3-margin-bottom" appml-data="local?model=model_customersform"&gt;<br><br>
        <strong>&lt;div appml-include-html="inc_formcommands.html"&gt;&lt;/div&gt;<br></strong>
        <br>&lt;p&gt;<br>&lt;label for="customername"&gt;Customer:&lt;/label&gt;<br>&lt;input
        id="customername" class="w3-input w3-border"&gt;<br>&lt;/p&gt;<br><br>&lt;p&gt;<br>&lt;label
        for="address"&gt;Address:&lt;/label&gt;<br>&lt;input id="address" class="w3-input
        w3-border"&gt;<br>&lt;/p&gt;<br><br>&lt;p&gt;<br>&lt;label for="city"&gt;City:&lt;/label&gt;<br>&lt;input
        id="city" class="w3-input w3-border"&gt;<br>&lt;/p&gt;<br><br>&lt;p&gt;<br>&lt;label
        for="postalcode"&gt;Postal Code:&lt;/label&gt;<br>&lt;input id="postalcode"
        class="w3-input w3-border"&gt;<br>&lt;/p&gt;<br>
        <br>&lt;p&gt;<br>&lt;label for="country"&gt;Country:&lt;/label&gt;<br>&lt;input id="country"
        class="w3-input w3-border"&gt;<br>&lt;/p&gt;<br><br>&lt;/div&gt;<br>
      </div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_form_2.html" target="_blank">
        Попробуйте сами »</a>
    </div>
    <hr>

    <h2>Добавить интерактивный столбец в таблицу</h2>
    <p>В предыдущем разделе вы создали приложение для вывода списка записей из базы данных.</p>
    <p>Теперь добавьте в таблицу новый столбец:</p>
    <div class="w3-example">
      <h3>HTML ресурс</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;div appml-data="local?model=model_customerslist"&gt;<br><br>
        &lt;h1&gt;Customers&lt;/h1&gt;<br>&lt;div appml-include-html="inc_listcommands.html"&gt;&lt;/div&gt;<br>
        &lt;div appml-include-html="inc_filter.html"&gt;&lt;/div&gt;<br>&lt;table class="w3-table-all"&gt;<br>&nbsp; &lt;tr&gt;<br><strong>&nbsp;&nbsp;&nbsp; &lt;th&gt;&lt;/th&gt;<br>&nbsp;&nbsp;
        </strong>&lt;th&gt;Customer&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;City&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Country&lt;/th&gt;<br>&nbsp;
        &lt;/tr&gt;<br>&nbsp; &lt;tr appml-repeat="records"&gt;<br>
        <strong>&nbsp;&nbsp;&nbsp; &lt;td style="cursor:pointer;width:34px;"
          onclick="appml('Form01').run({{CustomerID}})"&gt;&amp;#9998;&lt;/td&gt;<br>
        </strong>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{City}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{Country}}&lt;/td&gt;<br>&nbsp; &lt;/tr&gt;<br>
        &lt;/table&gt;<br><br>&lt;/div&gt;
      </div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_form_3.html" target="_blank">Попробуйте сами »</a>
    </div>
    <p>Событие onclick (в новом столбце) запускает вызов для запуска приложения AppML, расположенного в элементе HTML с id="Form01":</p>
    <ul>
      <li><strong>appml('Form01')</strong> возвращает AppML приложение</li>
      <li><strong>run({{CustomerID}})</strong> запускает приложения с параметром CustomerID</li>
    </ul>
    <hr>

    <h2>Наконец, скрыть форму</h2>
    <p>Добавьте стиль к форме, чтобы сделать её невидимой:</p>
    <div class="w3-example">
      <h3>HTML</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;div id="Form01" appml-data="local?model=model_customersform"<br>
        appml-controller="myFormController"<br>class="jumbotron" <strong>style="display:none"</strong>&gt;
      </div>
    </div>
    <p>Добавьте в форму контроллер, чтобы форма отображалась только тогда, когда она загружена и готова к отображению данных:</p>
    <div class="w3-example">
      <h3>Контроллер</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;script&gt;<br>function myFormController($appml) {<br>&nbsp;&nbsp;&nbsp; if ($appml.message ==
        "ready") {return -1;}<br>&nbsp;&nbsp;&nbsp; if ($appml.message == "loaded") {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        document.getElementById("Form01").style.display="";<br>&nbsp;&nbsp;&nbsp; }<br>
        }<br>&lt;/script&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_form_4.html" target="_blank">Попробуйте сами »</a>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_lists.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_database.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>