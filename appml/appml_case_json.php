<?php include '../include/head.php'; ?>

  <title>AppML JSON файлы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML кейс - JSON файлы. Как использовать JSON файлы при создании AppML приложения? Учебник по AppML. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_case_json.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

  <article>
    <h1><span class='color_h1'>AppML кейс - JSON файлы</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_case_xml.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_case_customers.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>HTML страница</h2>
    <p>Это HTML ресурс:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;&lt;!DOCTYPE html&gt;<br>&lt;html lang="ru"&gt;<br>
        &lt;link rel="stylesheet" href="../w3css/4/w3.css"&gt;<br>
        &lt;script src="2.0.3/appml.js"&gt;&lt;/script&gt;<br>
        &lt;body&gt;<br><br>
        &lt;div class="w3-container" appml-data="https://www.w3schools.com/appml/appml.php?model=model_cd_from_json"&gt;<br>
        &lt;h1&gt;CD Коллекция&lt;/h1&gt;<br>&lt;h3&gt;Извлечено из текстового файла JSON&lt;/h3&gt;<br><br>
        &lt;div appml-include-html="inc_listcommands_nofilter.html"&gt;&lt;/div&gt;<br>&lt;table
        class="w3-table-all"&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Title&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Artist&lt;/th&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;th&gt;Price&lt;/th&gt;<br>&nbsp; &lt;/tr&gt;<br>&nbsp; &lt;tr appml-repeat="records"&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;td&gt;{{Title}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{Artist}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{Price}}&lt;/td&gt;<br>&nbsp;
        &lt;/tr&gt;<br>
        &lt;/table&gt;<br>&lt;/div&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_from_json_php.html" target='_blank'>
        PHP »</a>&nbsp;&nbsp;
      <a class="w3-btn w3-margin-bottom" href="tryappml_from_json_aspx.html" target='_blank'>
        .NET »</a>&nbsp;&nbsp;
    </div>
    <hr>

    <h2>Модель</h2>
    <p>Это модель, используемая в приложении:</p>
    <div class="w3-example">
      <h3>Модель</h3>
      <div class="w3-code notranslate jsHigh">
        {<br>&nbsp; "rowsperpage" : 7,<br>&nbsp; "data" : {<br>&nbsp;&nbsp;&nbsp; "type" : "jsonfile",<br>
        &nbsp;&nbsp;&nbsp; "filename" : "cd_catalog.js",<br>&nbsp;&nbsp;&nbsp; "record" : "cd",<br>&nbsp;&nbsp;&nbsp; "items"
        : [<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {"name" : "Title", "nodename" : "title"},<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {"name"
        : "Artist", "nodename" : "artist"},<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {"name" : "Price",
        "nodename" : "price"}<br>&nbsp;&nbsp;&nbsp; ]<br>&nbsp; }<br>}</div>
    </div>
    <hr>

    <h2>Файл</h2>
    <p>Это JSON файл:</p>
    <div class="w3-example">
      <h3>cd_catalog.js</h3>
      <div class="w3-code notranslate jsHigh">
        {<br>"cd" : [<br>{ "title" : "Empire Burlesque", "artist" : "Bob Dylan",
        "price" : "10.90" },<br>{ "title" : "Hide your heart", "artist" :
        "Bonnie Tyler", "price" : "9.90" },<br>{ "title" : "Greatest Hits",
        "artist" : "Dolly Parton", "price" : "9.90" },<br>{ "title" : "Still got
        the blues", "artist" : "Bob Dylan", "price" : "10.20" },<br>{ "title" :
        "Eros", "artist" : "Eros Ramazzotti", "price" : "9.90" },<br>{ "title" :
        "One night only", "artist" : "Bee Gees", "price" : "10.90" },<br>{
        "title" : "Sylvias Mother", "artist" : "Dr.Hook", "price" : "8.10" },<br>
        { "title" : "Maggie May", "artist" : "Rod Stewart", "price" : "8.50" },<br>
        { "title" : "Empire Burlesque", "artist" : "Bob Dylan", "price" :
        "10.90" },<br>{ "title" : "Hide your heart", "artist" : "Bonnie Tyler",
        "price" : "9.90" },<br>{ "title" : "Greatest Hits", "artist" : "Dolly
        Parton", "price" : "9.90" },<br>{ "title" : "Still got the blues",
        "artist" : "Bob Dylan", "price" : "10.20" },<br>{ "title" : "Eros",
        "artist" : "Eros Ramazzotti", "price" : "9.90" },<br>{ "title" : "One
        night only", "artist" : "Bee Gees", "price" : "10.90" },<br>{ "title" :
        "Sylvias Mother", "artist" : "Dr.Hook", "price" : "8.10" },<br>{ "title"
        : "Maggie May", "artist" : "Rod Stewart", "price" : "8.50" },<br>{
        "title" : "Empire Burlesque", "artist" : "Bob Dylan", "price" : "10.90"
        },<br>{ "title" : "Hide your heart", "artist" : "Bonnie Tyler", "price"
        : "9.90" },<br>{ "title" : "Greatest Hits", "artist" : "Dolly Parton",
        "price" : "9.90" },<br>{ "title" : "Still got the blues", "artist" :
        "Bob Dylan", "price" : "10.20" },<br>{ "title" : "Eros", "artist" :
        "Eros Ramazzotti", "price" : "9.90" },<br>{ "title" : "One night only",
        "artist" : "Bee Gees", "price" : "10.90" },<br>{ "title" : "Sylvias
        Mother", "artist" : "Dr.Hook", "price" : "8.10" },<br>{ "title" :
        "Maggie May", "artist" : "Rod Stewart", "price" : "8.50" },<br>{ "title"
        : "Empire Burlesque", "artist" : "Bob Dylan", "price" : "10.90" },<br>{
        "title" : "Hide your heart", "artist" : "Bonnie Tyler", "price" : "9.90"
        },<br>{ "title" : "Greatest Hits", "artist" : "Dolly Parton", "price" :
        "9.90" },<br>{ "title" : "Still got the blues", "artist" : "Bob Dylan",
        "price" : "10.20" },<br>{ "title" : "Eros", "artist" : "Eros
        Ramazzotti", "price" : "9.90" },<br>{ "title" : "One night only",
        "artist" : "Bee Gees", "price" : "10.90" },<br>{ "title" : "Sylvias
        Mother", "artist" : "Dr.Hook", "price" : "8.10" },<br>{ "title" :
        "Maggie May", "artist" : "Rod Stewart", "price" : "8.50" },<br>{ "title"
        : "Empire Burlesque", "artist" : "Bob Dylan", "price" : "10.90" },<br>{
        "title" : "Hide your heart", "artist" : "Bonnie Tyler", "price" : "9.90"
        },<br>{ "title" : "Greatest Hits", "artist" : "Dolly Parton", "price" :
        "9.90" },<br>{ "title" : "Still got the blues", "artist" : "Bob Dylan",
        "price" : "10.20" },<br>{ "title" : "Eros", "artist" : "Eros
        Ramazzotti", "price" : "9.90" },<br>{ "title" : "One night only",
        "artist" : "Bee Gees", "price" : "10.90" },<br>{ "title" : "Sylvias
        Mother", "artist" : "Dr.Hook", "price" : "8.10" },<br>{ "title" :
        "Maggie May", "artist" : "Rod Stewart", "price" : "8.50" }<br>]<br>}</div>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_case_xml.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_case_customers.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>