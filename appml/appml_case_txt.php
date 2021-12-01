<?php include '../include/head.php'; ?>

  <title>AppML Текстовые файлы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML кейс - Текстовые файлы. Как применять текстовые файлы для создания приложений AppML? Учебник по AppML. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_cases_txt.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

  <article>
    <h1><span class='color_h1'>AppML кейс - Текстовые файлы</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_cases.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_case_xml.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>HTML страница</h2>
    <p>Это HTML ресурс:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;!DOCTYPE html&gt;<br>&lt;html lang="en-US"&gt;<br>
        &lt;link rel="stylesheet" href="../w3css/4/w3.css"&gt;<br>
        &lt;script src="2.0.3/appml.js"&gt;&lt;/script&gt;<br>
        &lt;body&gt;<br><br>
        &lt;div class="w3-container" appml-data="https://www.w3schools.com/appml/appml.php?model=model_cd_from_txt"&gt;<br>
        &lt;h1&gt;CD Коллекция&lt;/h1&gt;<br>&lt;h3&gt;Извлечено из текстового файла, разделенного запятыми&lt;/h3&gt;<br><br>&lt;div
        appml-include-html="inc_listcommands_nofilter.html"&gt;&lt;/div&gt;<br>
        &lt;table class="w3-table-all"&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Title&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;th&gt;Artist&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Price&lt;/th&gt;<br>&nbsp; &lt;/tr&gt;<br>&nbsp; &lt;tr
        appml-repeat="records"&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{Title}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{Artist}}&lt;/td&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;td&gt;{{Price}}&lt;/td&gt;<br>&nbsp; &lt;/tr&gt;<br>
        &lt;/table&gt;<br>&lt;/div&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_from_txt_php.html" target="_blank">
        PHP »</a>&nbsp;&nbsp;
      <a class="w3-btn w3-margin-bottom" href="tryappml_from_txt_aspx.html" target="_blank">
        .NET »</a>&nbsp;&nbsp;
    </div>
    <hr>

    <h2>Модель</h2>
    <p>Это модель, используемая в приложении:</p>
    <div class='w3-example'>
      <h3>Модель</h3>
      <div class='w3-code notranslate jsHigh'>
        {<br>&nbsp; "rowsperpage" : 7,<br>&nbsp; "data" : {<br>&nbsp;&nbsp;&nbsp; "type" : "csvfile",<br>
        &nbsp;&nbsp;&nbsp; "filename" : "cd_catalog.txt",<br>&nbsp;&nbsp;&nbsp; "items" : [<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {"name" :
        "Title", "index" : 1},<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {"name" : "Artist", "index" : 2},<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {"name" : "Price", "index" : 5}<br>&nbsp;&nbsp;&nbsp; ]<br>&nbsp; }<br>}
      </div>
    </div>
    <hr>

    <h2>Файл</h2>
    <p>Это текстовый файл, разделенный запятыми:</p>
    <div class='w3-example'>
      <h3>cd_catalog.txt</h3>
      <div class='w3-code notranslate'>
        Empire Burlesque,Bob Dylan,USA,Columbia,10.90,1985<br>Hide your heart,Bonnie
        Tyler,UK,CBS Records,9.90,1988<br>Greatest Hits,Dolly
        Parton,USA,RCA,9.90,1982<br>Still got the blues,Gary Moore,UK,Virgin
        records,10.20,1990<br>Eros,Eros Ramazzotti,EU,BMG,9.90,1997<br>One night
        only,Bee Gees,UK,Polydor,10.90,1998<br>Sylvias
        Mother,Dr.Hook,UK,CBS,8.10,1973<br>Maggie May,Rod
        Stewart,UK,Pickwick,8.50,1990<br>Empire Burlesque,Bob
        Dylan,USA,Columbia,10.90,1985<br>Hide your heart,Bonnie Tyler,UK,CBS
        Records,9.90,1988<br>Greatest Hits,Dolly Parton,USA,RCA,9.90,1982<br>Still
        got the blues,Gary Moore,UK,Virgin records,10.20,1990<br>Eros,Eros
        Ramazzotti,EU,BMG,9.90,1997<br>One night only,Bee Gees,UK,Polydor,10.90,1998<br>
        Sylvias Mother,Dr.Hook,UK,CBS,8.10,1973<br>Maggie May,Rod
        Stewart,UK,Pickwick,8.50,1990<br>Empire Burlesque,Bob
        Dylan,USA,Columbia,10.90,1985<br>Hide your heart,Bonnie Tyler,UK,CBS
        Records,9.90,1988<br>Greatest Hits,Dolly Parton,USA,RCA,9.90,1982<br>Still
        got the blues,Gary Moore,UK,Virgin records,10.20,1990<br>Eros,Eros
        Ramazzotti,EU,BMG,9.90,1997<br>One night only,Bee Gees,UK,Polydor,10.90,1998<br>
        Sylvias Mother,Dr.Hook,UK,CBS,8.10,1973<br>Maggie May,Rod
        Stewart,UK,Pickwick,8.50,1990<br>Empire Burlesque,Bob
        Dylan,USA,Columbia,10.90,1985<br>Hide your heart,Bonnie Tyler,UK,CBS
        Records,9.90,1988<br>Greatest Hits,Dolly Parton,USA,RCA,9.90,1982<br>Still
        got the blues,Gary Moore,UK,Virgin records,10.20,1990<br>Eros,Eros
        Ramazzotti,EU,BMG,9.90,1997<br>One night only,Bee Gees,UK,Polydor,10.90,1998<br>
        Sylvias Mother,Dr.Hook,UK,CBS,8.10,1973<br>Maggie May,Rod
        Stewart,UK,Pickwick,8.50,1990
      </div>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_cases.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_case_xml.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>