<?php include '../include/head.php'; ?>

  <title>AppML Прототип. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML Прототип. Создание прототипа веб-приложения с помощью AppML. Создание локальной базы данных с несколькими записями. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_prototype.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

  <article>
    <h1><span class='color_h1'>AppML Прототип</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_client.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_lists.php'>Next &#10095;</a>
    </div>
    <hr>

    <p class='intro'>В этом разделе мы создадим <strong>прототип веб-приложения</strong>.</p>
    <hr>

    <h2>Создать HTML прототип</h2>
    <p>Сначала создайте достойный <strong>HTML прототип</strong>, используя свой любимый CSS.</p>
    <p>В этом примере мы использовали фреймворк W3.CSS:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;!DOCTYPE html&gt;<br>&lt;html lang="ru"&gt;<br><br>&lt;title&gt;Клиенты&lt;/title&gt;<br>
        &lt;link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"&gt; <br><br>
        &lt;body&gt;<br>
        <br>&lt;div class="w3-container"&gt;<br>&lt;h1&gt;Клиенты&lt;/h1&gt;<br>
        &lt;table class="w3-table-all"&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Клиент&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Город&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Страна&lt;/th&gt;<br>&nbsp; &lt;/tr&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;td&gt;{{City}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{Country}}&lt;/td&gt;<br>&nbsp; &lt;/tr&gt;<br>
        &lt;/table&gt;<br>
        &lt;/div&gt;<br>
        <br>&lt;/body&gt;<br>&lt;/html&gt;
      </div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_proto_list.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
      <p>{{ ... }} Заполнители для будущих данных.</p>
    </div>
    <hr>

    <h2>Добавить AppML</h2>
    <p>После того, как вы создали HTML прототип, вы можете добавить AppML:</p>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;!DOCTYPE html&gt;<br>&lt;html lang="ru"&gt;<br>
        &lt;title&gt;Клиенты&lt;/title&gt;<br>&lt;link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"&gt;<br>
        <strong>&lt;script src="https://www.w3schools.com/appml/2.0.3/appml.js"&gt;&lt;/script&gt;<br>
          &lt;script src="https://www.w3schools.com/appml/2.0.3/appml_sql.js"&gt;&lt;/script&gt;<br>
        </strong>&lt;body&gt;<br><br>&lt;div class="w3-container" <strong>appml-data="customers.js"</strong>&gt;<br>
        &lt;h1&gt;Клиенты&lt;/h1&gt;<br>&lt;table class="w3-table-all"&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;th&gt;Клиент&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Город&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;th&gt;Страна&lt;/th&gt;<br>&nbsp; &lt;/tr&gt;<br>&nbsp; &lt;tr<strong> appml-repeat="records"</strong>&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{City}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;td&gt;{{Country}}&lt;/td&gt;<br>&nbsp; &lt;/tr&gt;<br>&lt;/table&gt;<br>&lt;/div&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
      </div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_proto_list_1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Добавить AppML:</p>
    <p><strong>&lt;script src="https://www.w3schools.com/appml/2.0.3/appml.js"&gt;</strong></p>
    <p>Добавить локальную базу данных WebSQL:</p>
    <p><strong>&lt;script src="https://www.w3schools.com/appml/2.0.3/appml_sql.js"&gt;</strong></p>
    <p>Определите источник данных:</p>
    <p><strong>appml-data="customers.js"</strong></p>
    <p>Определите элемент HTML, который будет повторяться для каждой записи в записях:</p>
    <p><strong>appml_repeat="records"</strong></p>

    <div class="w3-panel w3-note">
      <p>Чтобы упростить задачу, начните с локальных данных, например <strong> <a href="show_customers.html" target="_blank">customers.js</a></strong> перед подключением к базе данных.</p>
    </div>
    <hr>

    <h2>Создать AppML модель</h2>
    <p>Чтобы иметь возможность использовать базу данных, вам понадобится модель базы данных AppML:</p>

    <div class="w3-example">
      <h3>proto_customers.js</h3>
      <div class="w3-code notranslate jsHigh">
        {<br>"rowsperpage" : 10,<br>"database" : {<br>"connection"
        : "localmysql",<br>"sql" : "Select * from Customers",<br>"orderby"
        : "CustomerName",<br>}</div>
    </div>

    <p>Если у вас нет локальной базы данных, вы можете использовать модель AppML для создания базы данных Web SQL.</p>
    <p>Чтобы создать таблицу с одной записью, используйте такую модель:<strong>
        <a href="proto_customers_single.html" target="_blank">proto_customers_single.js</a></strong>.</p>

    <div class="w3-panel w3-note">
      <p>Создание локальной базы данных не работает в IE или Firefox. Используйте Chrome или Safari.</p>
    </div>

    <p>Используйте модель в своем приложении. Измените источник данных на <strong>local?model=proto_customers_single</strong>:</p>

    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;div class="w3-container" appml-data="<strong>local?model=proto_customers_single</strong>"&gt;<br>
        &lt;h1&gt;Клиенты&lt;/h1&gt;<br>&lt;table class="w3-table-all"&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;th&gt;Клиент&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Город&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;th&gt;Страна&lt;/th&gt;<br>&nbsp; &lt;/tr&gt;<br>&nbsp; &lt;tr appml-repeat="records"&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{City}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;td&gt;{{Country}}&lt;/td&gt;<br>&nbsp; &lt;/tr&gt;<br>&lt;/table&gt;<br>&lt;/div&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_proto_list_3.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Создание локальной базы данных с несколькими записями</h2>
    <p>Чтобы создать таблицу с несколькими записями, используйте такую модель:<strong>
        <a href="proto_customers_all.html" target="_blank">proto_customers_all.js</a></strong>.</p>
    <p>Измените источник данных на <strong>local?model=proto_customers_all</strong></p>

    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;div class="w3-container" appml-data="<strong>local?model=proto_customers_all</strong>"&gt;<br>
        &lt;h1&gt;Клиенты&lt;/h1&gt;<br>&lt;table class="w3-table-all"&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;th&gt;Клиент&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Город&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;th&gt;Страна&lt;/th&gt;<br>&nbsp; &lt;/tr&gt;<br>&nbsp; &lt;tr appml-repeat="records"&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{City}}&lt;/td&gt;<br>&nbsp;
        &lt;td&gt;{{Country}}&lt;/td&gt;<br>&nbsp; &lt;/tr&gt;<br>&lt;/table&gt;<br>&lt;/div&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_proto_list_4.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Добавить шаблон навигации</h2>
    <p>Предположим, вы хотите, чтобы все ваши приложения имели общую панель навигации:</p>

    <div class="w3-bar w3-border">
      <button class="w3-button" id='appmlbtn_first'>&#10094;&#10094;</button>
      <button class="w3-button" id='appmlbtn_previous'>&#10094;</button>
      <button class="w3-button w3-hover-none" id='appmlbtn_text'></button>
      <button class="w3-button" id='appmlbtn_next'>&#10095;</button>
      <button class="w3-button" id='appmlbtn_last'>&#10095;&#10095;</button>
      <button class="w3-button w3-green" id='appmlbtn_query'>Filter</button>
    </div>

    <p>Создайте для него HTML-шаблон:</p>
    <div class="w3-example">
      <h3>inc_listcommands.html</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;div class="w3-bar w3-border w3-section"&gt;<br>
        &lt;button class="w3-button" id='appmlbtn_first'&gt;&amp;#10094;&amp;#10094;&lt;/button&gt;<br>
        &lt;button class="w3-button" id='appmlbtn_previous'&gt;&amp;#10094;&lt;/button&gt;<br>
        &lt;button class="w3-button w3-hover-none" id='appmlbtn_text'&gt;&lt;/button&gt;<br>
        &lt;button class="w3-button" id='appmlbtn_next'&gt;&amp;#10095;&lt;/button&gt;<br>
        &lt;button class="w3-button" id='appmlbtn_last'&gt;&amp;#10095;&amp;#10095;&lt;/button&gt;<br>
        &lt;button class="w3-button w3-green" id='appmlbtn_query'&gt;Filter&lt;/button&gt;<br>
        &lt;/div&gt;<br><br>
        &lt;div id="appmlmessage"&gt;&lt;/div&gt;
      </div>
    </div>
    <p>Сохраните шаблон в файле с собственным именем, например "inc_listcommands.html".</p>
    <p>Включите шаблон в свой прототип с атрибутом <strong>appml-include-html</strong>:</p>

    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;div class="w3-container" appml-data="local?model=proto_customers_all"&gt;<br>
        &lt;h1&gt;Клиенты&lt;/h1&gt;<br>&lt;div <strong>appml-include-html="inc_listcommands.html"</strong>&gt;&lt;/div&gt;<br>
        <br>&lt;table class="w3-table-all"&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Клиент&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Город&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;th&gt;Страна&lt;/th&gt;<br>&nbsp; &lt;/tr&gt;<br>&nbsp; &lt;tr appml-repeat="records"&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{City}}&lt;/td&gt;
        <br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{Country}}&lt;/td&gt;<br>&nbsp; &lt;/tr&gt;<br> &lt;/table&gt;<br>&lt;/div&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_proto_list_2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_client.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_lists.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>