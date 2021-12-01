<?php include '../include/head.php'; ?>

  <title>AppML .NET. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML .NET. Как создать серверное приложение AppML? Создайте тестовую страницу и сохраните на своем PHP-сервере. Подключение к базе данных. Учебник по AppML. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_dotnet.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

  <article>
    <h1><span class='color_h1'>AppML .NET</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_php.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_google_cloud_sql.php'>Next &#10095;</a>
    </div>
    <hr>

    <p>Если у вас есть доступ к серверу .NET, следуйте приведенным ниже инструкциям, чтобы <strong>создать серверное приложение AppML</strong>.</p>
    <hr>

    <h2>Создайте тестовую страницу</h2>
    <p>Создайте тестовую страницу и сохраните на своем PHP-сервере как customers.html (или как угодно):</p>
    <div class='w3-example'>
      <h3>customers.html</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;!DOCTYPE html&gt;<br>
        &lt;html lang="ru"&gt;<br>&lt;title&gt;Клиенты&lt;/title&gt;<br>&lt;link rel="stylesheet" href="https://w3schoolsrus.github.io/w3css/4/w3.css"&gt;<br>
        &lt;script src="https://w3schoolsrus.github.io/appml/2.0.3/appml.js"&gt;&lt;/script&gt;<br>
        &lt;body&gt;<br><br>&lt;div class="w3-container" appml-data="customers"&gt;<br>
        &lt;h1&gt;Клиенты&lt;/h1&gt;<br>&lt;table class="w3-table-all"&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;th&gt;Клиент&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Город&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;th&gt;Страна&lt;/th&gt;<br>&nbsp; &lt;/tr&gt;<br>&nbsp; &lt;tr appml-repeat="records"&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{City}} &lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;td&gt;{{Country}} &lt;/td&gt;<br>&nbsp; &lt;/tr&gt;<br>&lt;/table&gt;<br>&lt;/div&gt;<br><br>&lt;script&gt;<br>
        var customers = {<br>"records":[<br>{"CustomerName":"Alfreds Futterkiste","City":"Berlin","Country":"Germany"},<br>
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
        comercial Moctezuma","City":"México D.F.","Country":"Mexico"},<br>{"CustomerName":"Chop-suey
        Chinese","City":"Bern","Country":"Switzerland"},<br>{"CustomerName":"Comércio
        Mineiro","City":"São Paulo","Country":"Brazil"}<br>]};<br>&lt;/script&gt;<br><br>
        &lt;/body&gt;<br>&lt;/html&gt;
      </div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_net_1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Протестируйте веб-страницу в своем браузере.</p>
    <hr>

    <h2>Создание подключения к базе данных</h2>
    <p>Если у вас есть доступ к базе данных SQL Server или любым другим базам данных OLEDB (например, MS Acess), определите соединения с базой данных и сохраните их на сервере как <strong>appml_config.aspx</strong>:</p>
    <div class="w3-example">
      <h3>appml_config.aspx (Пример SQL Server)</h3>
      <div class="w3-code notranslate">
        &lt;%<br>Response.write("Access Forbidden")<br>Response.end<br>%&gt;<br>{<br>"dateformat"
        : "yyyy-mm-dd",<br>"databases" : [{<br>"connection" : "mydatabase",<br>"provider"&nbsp;&nbsp; : "SQLOLEDB",<br>
        "host"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : "myserver",<br>"dbname"&nbsp;&nbsp;&nbsp;&nbsp;
        : "DemoDB",<br>"username"&nbsp;&nbsp; : "DemoDBUkbn5",<br>"password"&nbsp;&nbsp;
        : "<span style="color: rgb(0, 0, 0); font-family: Consolas, 'courier new'; font-size: 15px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 17.25px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: rgb(255, 255, 255);">l6|U6=V(*T+P</span>"<br>
        }]<br>}</div>
    </div>

    <div class="w3-example">
      <h3>appml_config.aspx (Пример MS Access)</h3>
      <div class="w3-code notranslate">
        &lt;%<br>Response.write("Access Forbidden")<br>Response.end<br>%&gt;<br>{<br>"dateformat"
        : "yyyy-mm-dd",<br>"databases" : [{<br>"connection" : "mydatabase",<br>"connectionstring"
        :<br>"Provider=Microsoft.Jet.OLEDB.4.0;data source=C:\\database\\Northwind.mdb"<br>
        }]<br>}</div>
    </div>
    <div class="w3-panel w3-note">
      <p>Приведенная выше связь вымышлена. Имена и пароли являются примерами.</p>
    </div>
    <hr>

    <h2>Объяснение файла конфигурации:</h2>
    <table class="w3-table-all">
      <tr>
        <th>Свойство</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td>dateformat</td>
        <td>Формат даты, который вы будете использовать в своих моделях</td>
      </tr>
      <tr>
        <td>connection</td>
        <td>Имя подключения, которое вы будете использовать в своих моделях.</td>
      </tr>
      <tr>
        <td>connectionstring</td>
        <td>Обычно используется для драйверов OLEDB, таких как MS Access</td>
      </tr>
      <tr>
        <td>provider</td>
        <td>Управляющая программа/поставщик программного обеспечения db</td>
      </tr>
      <tr>
        <td>host</td>
        <td>IP или имя хоста для базы данных</td>
      </tr>
      <tr>
        <td>dbname</td>
        <td>Имя базы данных</td>
      </tr>
      <tr>
        <td>username</td>
        <td>Имя пользователя базы данных</td>
      </tr>
      <tr>
        <td>password</td>
        <td>Пароль базы данных</td>
      </tr>
    </table>
    <hr>

    <h2>Копировать AppML</h2>
    <p>Скачать файл: <a href="2.0.3/appml.aspx.txt" target="_blank">https://w3schoolsrus.github.io/appml/2.0.3/appml.aspx.txt</a>.</p>
    <p>Скопируйте файл на свой веб-сайт. Переименуйте его в <strong>appml.aspx</strong> (т.е. должно быть расширение <em>.aspx</em>).</p>
    <hr>

    <h2>Создать таблицу базы данных</h2>
    <p>Создайте <strong>модель</strong> для создания таблицы клиентов в базе данных.</p>
    <div class="w3-example">
      <h3>create_customers.js</h3>
      <div class="w3-code notranslate">
        {<br>"database" : {<br>"connection" : "mydatabase",<br>"execute" : [<br>"DROP
        TABLE IF EXISTS Customers",<br>"CREATE TABLE IF NOT EXISTS Customers (CustomerID
        INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,(CustomerID),CustomerName NVARCHAR(255),ContactName NVARCHAR(255),Address NVARCHAR(255),City
        NVARCHAR(255),PostalCode NVARCHAR(255),Country NVARCHAR(255))",<br>
        "INSERT INTO Customers(CustomerName,ContactName,Address,City,PostalCode,Country)VALUES (\"Alfreds Futterkiste\",\"Maria Anders\",\"Obere Str.
        57\",\"Berlin\",\"12209\",\"Germany\")",<br>"INSERT INTO Customers(CustomerName,ContactName,Address,City,PostalCode,Country)VALUES (\"Around the Horn\",\"Thomas Hardy\",\"120 Hanover
        Sq.\",\"London\",\"WA1 1DP\",\"UK\")",<br>"INSERT INTO Customers(CustomerName,ContactName,Address,City,PostalCode,Country)VALUES (\"Blauer See Delikatessen\",\"Hanna Moos\",\"Forsterstr.
        57\",\"Mannheim\",\"68306\",\"Germany\")"<br>]<br>}}</div>
    </div>
    <p>Создайте <strong>HTML страницу</strong> для запуска модели <b>create_customers.js</b>:</p>
    <div class="w3-example">
      <h3>create_customers.html</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;script src="https://w3schoolsrus.github.io/appml/2.0.3/appml.js"&gt;&lt;/script&gt;<br>&lt;body&gt;<br><br>&lt;div appml-data="appml.aspx?model=create_customers"&gt;&lt;/div&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;</div>
    </div>
    <p>Запустите HTML-страницу в своем браузере.</p>
    <hr>

    <h2>Создать приложение</h2>
    <p>Создайте <strong>модель</strong> для приложения клиентов. Сохраните его как <strong>customers.js</strong>:</p>
    <div class="w3-example">
      <h3>customers.js</h3>
      <div class="w3-code notranslate">
        {<br>"rowsperpage" : 10,<br>"database" : {<br>&nbsp;&nbsp;&nbsp; "connection" : "mydatabase",<br>&nbsp;&nbsp;&nbsp;
        "sql" : "SELECT * FROM Customers",<br>&nbsp;&nbsp;&nbsp; "orderby" : "CustomerName"<br>
        }<br>}</div>
    </div>
    <p>Создайте <strong>HTML страницу</strong> для запуска приложения клиентов:</p>
    <div class="w3-example">
      <h3>customers.html</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;!DOCTYPE html&gt;<br>
        &lt;html lang="ru"&gt;<br>&lt;title&gt;Клиенты&lt;/title&gt;<br>&lt;link rel="stylesheet" href="https://w3schoolsrus.github.io/w3css/4/w3.css"&gt;<br>
        &lt;script src="https://w3schoolsrus.github.io/appml/2.0.3/appml.js"&gt;&lt;/script&gt;<br>
        &lt;body&gt;<br><br>&lt;div class="w3-container" appml-data="appml.aspx?model=model_customers"&gt;<br>
        &lt;h1&gt;Клиенты&lt;/h1&gt;<br>&lt;table class="w3-table-all"&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;th&gt;Клиент&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Город&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;th&gt;Страна&lt;/th&gt;<br>&nbsp; &lt;/tr&gt;<br>&nbsp; &lt;tr appml-repeat="records"&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{City}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;td&gt;{{Country}}&lt;/td&gt;<br>&nbsp; &lt;/tr&gt;<br>&lt;/table&gt;<br>&lt;/div&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
      </div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_net_2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Запустите HTML в своем браузере.</p>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_php.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_google_cloud_sql.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>