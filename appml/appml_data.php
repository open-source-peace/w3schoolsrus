<?php include '../include/head.php'; ?>

  <title>AppML Данные. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML Данные. Уроки для начинающих онлайн бесплатно. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_data.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

  <article>
    <h1><span class='color_h1'>AppML</span> Данные</h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_howto.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_includes.php'>Next &#10095;</a>
    </div>
    <hr>

    <p class='intro'>
      <strong>Главная цель AppML</strong> - предоставлять <strong>данные</strong> HTML-страницам.</p>
    <hr>

    <h2>Подключение AppML к данным</h2>
    <ul>
      <li>AppML может отображать данные из переменных</li>
      <li>AppML может отображать данные из файлов</li>
      <li>AppML может отображать данные из баз данных</li>
    </ul>
    <hr>

    <h2>AppML с использованием объекта JavaScript</h2>
    <p>Распространенный способ разделения HTML и данных - хранить данные в объекте JavaScript.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;table appml-data="<strong>dataObj</strong>"&gt;<br>
        &lt;tr&gt;<br>
        &nbsp; &lt;th&gt;Customer&lt;/th&gt;<br>
        &nbsp; &lt;th&gt;City&lt;/th&gt;<br>
        &nbsp; &lt;th&gt;Country&lt;/th&gt;<br>&lt;/tr&gt;<br>
        &lt;tr appml-repeat="records"&gt;<br>
        &nbsp; &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>
        &nbsp; &lt;td&gt;{{City}}&lt;/td&gt;<br>
        &nbsp; &lt;td&gt;{{Country}}&lt;/td&gt;<br>
        &lt;/tr&gt;<br>
        &lt;/table&gt;<br>
        <br>&lt;script&gt;<br>var dataObj = {<br>"records":[<br>
        {"CustomerName":"Alfreds Futterkiste","City":"Berlin","Country":"Germany"},<br>
        {"CustomerName":"Ana Trujillo Emparedados y helados","City":"México D.F.","Country":"Mexico"},<br>
        {"CustomerName":"Antonio Moreno Taquería","City":"México D.F.","Country":"Mexico"},<br>
        {"CustomerName":"Around the Horn","City":"London","Country":"UK"},<br>{"CustomerName":"B's
        Beverages","City":"London","Country":"UK"},<br>{"CustomerName":"Berglunds
        snabbköp","City":"Luleå","Country":"Sweden"},<br>{"CustomerName":"Blauer See
        Delikatessen","City":"Mannheim","Country":"Germany"},<br>{"CustomerName":"Blondel
        père et fils","City":"Strasbourg","Country":"France"},<br>{"CustomerName":"Bólido
        Comidas preparadas","City":"Madrid","Country":"Spain"},<br>{"CustomerName":"Bon
        app'","City":"Marseille","Country":"France"},<br>{"CustomerName":"Bottom-Dollar
        Marketse","City":"Tsawassen","Country":"Canada"},<br>{"CustomerName":"Cactus
        Comidas para llevar","City":"Buenos Aires","Country":"Argentina"},<br>{"CustomerName":"Centro
        comercial Moctezuma","City":"México D.F.","Country":"Mexico"},<br>
        {"CustomerName":"Chop-suey Chinese","City":"Bern","Country":"Switzerland"},<br>
        {"CustomerName":"Comércio Mineiro","City":"São Paulo","Country":"Brazil"}<br>]};<br>&lt;/script&gt;<br>
      </div>
      <a class='w3-btn w3-margin-bottom' href='tryappml_data_variable.html' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>AppML с использованием файла JSON</h2>
    <p>Ещё один распространенный способ разделения HTML и данных - хранить данные в файле JSON:</p>
    <div class='w3-example'>
      <h3>customers.js</h3>
      <div class='w3-code notranslate'>
        {<br>
        "records":[<br>
        {"CustomerName":"Alfreds Futterkiste","City":"Berlin","Country":"Germany"},<br>
        {"CustomerName":"Ana Trujillo Emparedados y helados","City":"México D.F.","Country":"Mexico"},<br>
        {"CustomerName":"Antonio Moreno Taquería","City":"México D.F.","Country":"Mexico"},<br>
        {"CustomerName":"Around the Horn","City":"London","Country":"UK"},<br>
        {"CustomerName":"B's Beverages","City":"London","Country":"UK"},<br>
        {"CustomerName":"Berglunds
        snabbköp","City":"Luleå","Country":"Sweden"},<br>
        {"CustomerName":"Blauer See
        Delikatessen","City":"Mannheim","Country":"Germany"},<br>{"CustomerName":"Blondel
        père et fils","City":"Strasbourg","Country":"France"},<br>{"CustomerName":"Bólido
        Comidas preparadas","City":"Madrid","Country":"Spain"},<br>{"CustomerName":"Bon
        app'","City":"Marseille","Country":"France"},<br>{"CustomerName":"Bottom-Dollar
        Marketse","City":"Tsawassen","Country":"Canada"},<br>{"CustomerName":"Cactus
        Comidas para llevar","City":"Buenos Aires","Country":"Argentina"},<br>{"CustomerName":"Centro
        comercial Moctezuma","City":"México D.F.","Country":"Mexico"},<br>
        {"CustomerName":"Chop-suey Chinese","City":"Bern","Country":"Switzerland"},<br>
        {"CustomerName":"Comércio Mineiro","City":"São Paulo","Country":"Brazil"}<br>]<br>}</div>
    </div>

    <p>С помощью AppML вы можете указать файл JSON ("customers.js") в качестве источника данных в атрибуте appml-data:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;table <strong>appml-data="customers.js"</strong>&gt;<br>
        &lt;tr&gt;<br>
        &nbsp; &lt;th&gt;Клиент&lt;/th&gt;<br>
        &nbsp; &lt;th&gt;Город&lt;/th&gt;<br>
        &nbsp; &lt;th&gt;Страна&lt;/th&gt;<br>&lt;/tr&gt;<br>
        &lt;tr appml-repeat="records"&gt;<br>
        &nbsp; &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>
        &nbsp; &lt;td&gt;{{City}}&lt;/td&gt;<br>
        &nbsp; &lt;td&gt;{{Country}}&lt;/td&gt;<br>
        &lt;/tr&gt;<br>
        &lt;/table&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='tryappml_data_json.html' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>Путь к файлу <i>customers.js</i> указывайте свой!</p>
    <hr>

    <h2>AppML с использованием базы данных</h2>
    <p>С небольшой помощью веб-сервера вы можете наполнить свое приложение данными SQL.</p>
    <p>В этом примере PHP используется для чтения данных из базы данных MySQL:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;table appml-data="<strong>https://www.w3schools.com/appml/customers.php"</strong>&gt;<br>
        &lt;tr&gt;<br>
        &nbsp; &lt;th&gt;Customer&lt;/th&gt;<br>
        &nbsp; &lt;th&gt;City&lt;/th&gt;<br>
        &nbsp; &lt;th&gt;Country&lt;/th&gt;<br>&lt;/tr&gt;<br>
        &lt;tr appml-repeat="records"&gt;<br>
        &nbsp; &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>
        &nbsp; &lt;td&gt;{{City}}&lt;/td&gt;<br>
        &nbsp; &lt;td&gt;{{Country}}&lt;/td&gt;<br>
        &lt;/tr&gt;<br>
        &lt;/table&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='tryappml_data_php.html' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <p>В этом примере .NET используется для чтения данных из базы данных SQL сервера:</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;table appml-data="<strong>https://www.w3schools.com/appml/customers.aspx"</strong>&gt;<br>
        &lt;tr&gt;<br>
        &nbsp; &lt;th&gt;Customer&lt;/th&gt;<br>
        &nbsp; &lt;th&gt;City&lt;/th&gt;<br>
        &nbsp; &lt;th&gt;Country&lt;/th&gt;<br>&lt;/tr&gt;<br>
        &lt;tr appml-repeat="records"&gt;<br>
        &nbsp; &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>
        &nbsp; &lt;td&gt;{{City}}&lt;/td&gt;<br>
        &nbsp; &lt;td&gt;{{Country}}&lt;/td&gt;<br>
        &lt;/tr&gt;<br>
        &lt;/table&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='tryappml_data_aspx.html' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Сила AppML</h2>

    <p>Вы собираетесь открыть для себя возможности AppML.</p>
    <p>AppML может предоставить вам данные, контроллеры и модели для:</p>
    <ul>
      <li>Супер-простая разработка HTML-приложений</li>
      <li>Супер-простое моделирование, прототипирование и тестирование</li>
    </ul>
    <p>Вы можете поместить на HTML-страницу столько приложений AppML, сколько захотите.</p>
    <p>AppML не мешает работе других частей страницы.</p>
    <p>У вас есть полная свобода HTML, CSS и JavaScript.</p>
    <p>AppML можно использовать для разработки полномасштабных веб-приложений CRUD.</p>

    <div class='w3-panel w3-note'>
      <p>CRUD: <strong>C</strong>reate, <strong>R</strong>ead, <strong>U</strong>pdate, <strong>D</strong>elete (создание, чтение, обновление, удаление).</p>
    </div>

    <p>Чтобы открыть для себя возможности AppML:
      <a href='https://www.w3schools.com/appml/aspx_customers.htm' target='_blank' rel='nofollow'>Посмотрите AppML демо</a>.</p>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_howto.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_includes.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>