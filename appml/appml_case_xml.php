<?php include '../include/head.php'; ?>

  <title>AppML XML файлы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Как использовать XML файлы при создании AppML приложения? Учебник по AppML. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_cases_xml.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

  <article>
    <h1><span class='color_h1'>AppML кейс - XML файлы</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_case_txt.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_case_json.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>HTML страница</h2>
    <p>Это HTML ресурс:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;!DOCTYPE html&gt;<br>&lt;html lang="ru"&gt;<br>&lt;head&gt;<br>&lt;meta charset="utf-8"&gt;<br>
        &lt;link rel="stylesheet" href="../w3css/4/w3.css"&gt;<br>
        &lt;script src="2.0.3/appml.js"&gt;&lt;/script&gt;<br>
        &lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;div class="w3-container"
        appml-data="https://www.w3schools.com/appml/appml.php?model=model_cd_from_xml"&gt;<br>
        &lt;h1&gt;CD Коллекция&lt;/h1&gt;<br>&lt;h3&gt;Извлечено из файла XML&lt;/h3&gt;<br><br>&lt;div
        appml-include-html="inc_listcommands_nofilter.html"&gt;&lt;/div&gt;<br>&lt;table
        class="w3-table-all"&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Title&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Artist&lt;/th&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;th&gt;Country&lt;/th&gt;<br>&nbsp; &lt;/tr&gt;<br>&nbsp; &lt;tr appml-repeat="records"&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;td&gt;{{Title}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{Artist}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{Country}}&lt;/td&gt;<br>
        &nbsp; &lt;/tr&gt;<br>
        &lt;/table&gt;<br>&lt;/div&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='tryappml_from_xml_php.html' target='_blank'>
        PHP »</a>&nbsp;&nbsp;
      <a class='w3-btn w3-margin-bottom' href='tryappml_from_xml_aspx.html' target='_blank'>
        .NET »</a>&nbsp;&nbsp;
    </div>
    <hr>

    <h2>Модель</h2>
    <p>Это модель, используемая в приложении:</p>
    <div class='w3-example'>
      <h3>Модель</h3>
      <div class='w3-code notranslate jsHigh'>
        {<br>&nbsp; "rowsperpage" : 7,<br>&nbsp; "data" : {<br>&nbsp;&nbsp;&nbsp; "type" : "xmlfile",<br>
        &nbsp;&nbsp;&nbsp; "filename" : "cd_catalog.xml",<br>&nbsp;&nbsp;&nbsp; "record" : "CD",<br>&nbsp;&nbsp;&nbsp;
        "items" : [<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {"name" : "Artist", "nodename" : "ARTIST"},<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {"name" : "Title", "nodename" : "TITLE"},<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {"name" :
        "Country", "nodename" : "COUNTRY"}<br>&nbsp;&nbsp;&nbsp; ]<br>&nbsp; }<br>}
      </div>
    </div>
    <hr>

    <h2>Файл</h2>
    <p>Это XML файл: </p>
    <div class='w3-example'>
      <h3>cd_catalog.xml</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;?xml version="1.0" encoding="ISO-8859-1"?&gt;<br>&lt;CATALOG&gt;<br>&lt;CD&gt;<br>
        &lt;TITLE&gt;Empire Burlesque&lt;/TITLE&gt;<br>&lt;ARTIST&gt;Bob Dylan&lt;/ARTIST&gt;<br>
        &lt;COUNTRY&gt;USA&lt;/COUNTRY&gt;<br>&lt;COMPANY&gt;Columbia&lt;/COMPANY&gt;<br>
        &lt;PRICE&gt;10.90&lt;/PRICE&gt;<br>&lt;PUBLISHED&gt;1985&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>&lt;CD&gt;<br>
        &lt;TITLE&gt;Hide your heart&lt;/TITLE&gt;<br>&lt;ARTIST&gt;Bonnie Tyler&lt;/ARTIST&gt;<br>
        &lt;COUNTRY&gt;UK&lt;/COUNTRY&gt;<br>&lt;COMPANY&gt;CBS Records&lt;/COMPANY&gt;<br>
        &lt;PRICE&gt;9.90&lt;/PRICE&gt;<br>&lt;PUBLISHED&gt;1988&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>&lt;CD&gt;<br>
        &lt;TITLE&gt;Greatest Hits&lt;/TITLE&gt;<br>&lt;ARTIST&gt;Dolly Parton&lt;/ARTIST&gt;<br>
        &lt;COUNTRY&gt;USA&lt;/COUNTRY&gt;<br>&lt;COMPANY&gt;RCA&lt;/COMPANY&gt;<br>&lt;PRICE&gt;9.90&lt;/PRICE&gt;<br>
        &lt;PUBLISHED&gt;1982&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>&lt;CD&gt;<br>&lt;TITLE&gt;Still got the
        blues&lt;/TITLE&gt;<br>&lt;ARTIST&gt;Gary Moore&lt;/ARTIST&gt;<br>&lt;COUNTRY&gt;UK&lt;/COUNTRY&gt;<br>
        &lt;COMPANY&gt;Virgin records&lt;/COMPANY&gt;<br>&lt;PRICE&gt;10.20&lt;/PRICE&gt;<br>
        &lt;PUBLISHED&gt;1990&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>&lt;CD&gt;<br>&lt;TITLE&gt;Eros&lt;/TITLE&gt;<br>
        &lt;ARTIST&gt;Eros Ramazzotti&lt;/ARTIST&gt;<br>&lt;COUNTRY&gt;EU&lt;/COUNTRY&gt;<br>
        &lt;COMPANY&gt;BMG&lt;/COMPANY&gt;<br>&lt;PRICE&gt;9.90&lt;/PRICE&gt;<br>&lt;PUBLISHED&gt;1997&lt;/PUBLISHED&gt;<br>
        &lt;/CD&gt;<br>&lt;CD&gt;<br>&lt;TITLE&gt;One night only&lt;/TITLE&gt;<br>&lt;ARTIST&gt;Bee Gees&lt;/ARTIST&gt;<br>
        &lt;COUNTRY&gt;UK&lt;/COUNTRY&gt;<br>&lt;COMPANY&gt;Polydor&lt;/COMPANY&gt;<br>&lt;PRICE&gt;10.90&lt;/PRICE&gt;<br>
        &lt;PUBLISHED&gt;1998&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>&lt;CD&gt;<br>&lt;TITLE&gt;Sylvias
        Mother&lt;/TITLE&gt;<br>&lt;ARTIST&gt;Dr.Hook&lt;/ARTIST&gt;<br>&lt;COUNTRY&gt;UK&lt;/COUNTRY&gt;<br>
        &lt;COMPANY&gt;CBS&lt;/COMPANY&gt;<br>&lt;PRICE&gt;8.10&lt;/PRICE&gt;<br>&lt;PUBLISHED&gt;1973&lt;/PUBLISHED&gt;<br>
        &lt;/CD&gt;<br>&lt;CD&gt;<br>&lt;TITLE&gt;Maggie May&lt;/TITLE&gt;<br>&lt;ARTIST&gt;Rod Stewart&lt;/ARTIST&gt;<br>
        &lt;COUNTRY&gt;UK&lt;/COUNTRY&gt;<br>&lt;COMPANY&gt;Pickwick&lt;/COMPANY&gt;<br>&lt;PRICE&gt;8.50&lt;/PRICE&gt;<br>
        &lt;PUBLISHED&gt;1990&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>&lt;CD&gt;<br>&lt;TITLE&gt;Romanza&lt;/TITLE&gt;<br>
        &lt;ARTIST&gt;Andrea Bocelli&lt;/ARTIST&gt;<br>&lt;COUNTRY&gt;EU&lt;/COUNTRY&gt;<br>
        &lt;COMPANY&gt;Polydor&lt;/COMPANY&gt;<br>
        &lt;PRICE&gt;10.80&lt;/PRICE&gt;<br>&lt;PUBLISHED&gt;1996&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>&lt;CD&gt;<br>
        &lt;TITLE&gt;When a man loves a woman&lt;/TITLE&gt;<br>&lt;ARTIST&gt;Percy Sledge&lt;/ARTIST&gt;<br>
        &lt;COUNTRY&gt;USA&lt;/COUNTRY&gt;<br>&lt;COMPANY&gt;Atlantic&lt;/COMPANY&gt;<br>&lt;PRICE&gt;8.70&lt;/PRICE&gt;<br>
        &lt;PUBLISHED&gt;1987&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>&lt;CD&gt;<br>&lt;TITLE&gt;Black angel&lt;/TITLE&gt;<br>
        &lt;ARTIST&gt;Savage Rose&lt;/ARTIST&gt;<br>&lt;COUNTRY&gt;EU&lt;/COUNTRY&gt;<br>
        &lt;COMPANY&gt;Mega&lt;/COMPANY&gt;<br>&lt;PRICE&gt;10.90&lt;/PRICE&gt;<br>
        &lt;PUBLISHED&gt;1995&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>&lt;CD&gt;<br>&lt;TITLE&gt;1999 Grammy
        Nominees&lt;/TITLE&gt;<br>&lt;ARTIST&gt;Many&lt;/ARTIST&gt;<br>&lt;COUNTRY&gt;USA&lt;/COUNTRY&gt;<br>
        &lt;COMPANY&gt;Grammy&lt;/COMPANY&gt;<br>&lt;PRICE&gt;10.20&lt;/PRICE&gt;<br>
        &lt;PUBLISHED&gt;1999&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>&lt;CD&gt;<br>&lt;TITLE&gt;For the good
        times&lt;/TITLE&gt;<br>&lt;ARTIST&gt;Kenny Rogers&lt;/ARTIST&gt;<br>&lt;COUNTRY&gt;UK&lt;/COUNTRY&gt;<br>
        &lt;COMPANY&gt;Mucik Master&lt;/COMPANY&gt;<br>&lt;PRICE&gt;8.70&lt;/PRICE&gt;<br>
        &lt;PUBLISHED&gt;1995&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>&lt;CD&gt;<br>&lt;TITLE&gt;Big Willie
        style&lt;/TITLE&gt;<br>&lt;ARTIST&gt;Will Smith&lt;/ARTIST&gt;<br>&lt;COUNTRY&gt;USA&lt;/COUNTRY&gt;<br>
        &lt;COMPANY&gt;Columbia&lt;/COMPANY&gt;<br>&lt;PRICE&gt;9.90&lt;/PRICE&gt;<br>
        &lt;PUBLISHED&gt;1997&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>&lt;CD&gt;<br>&lt;TITLE&gt;Tupelo Honey&lt;/TITLE&gt;<br>
        &lt;ARTIST&gt;Van Morrison&lt;/ARTIST&gt;<br>&lt;COUNTRY&gt;UK&lt;/COUNTRY&gt;<br>
        &lt;COMPANY&gt;Polydor&lt;/COMPANY&gt;<br>
        &lt;PRICE&gt;8.20&lt;/PRICE&gt;<br>&lt;PUBLISHED&gt;1971&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>&lt;CD&gt;<br>
        &lt;TITLE&gt;Soulsville&lt;/TITLE&gt;<br>&lt;ARTIST&gt;Jorn Hoel&lt;/ARTIST&gt;<br>
        &lt;COUNTRY&gt;Norway&lt;/COUNTRY&gt;<br>&lt;COMPANY&gt;WEA&lt;/COMPANY&gt;<br>&lt;PRICE&gt;7.90&lt;/PRICE&gt;<br>
        &lt;PUBLISHED&gt;1996&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>&lt;CD&gt;<br>&lt;TITLE&gt;The very best
        of&lt;/TITLE&gt;<br>&lt;ARTIST&gt;Cat Stevens&lt;/ARTIST&gt;<br>&lt;COUNTRY&gt;UK&lt;/COUNTRY&gt;<br>
        &lt;COMPANY&gt;Island&lt;/COMPANY&gt;<br>&lt;PRICE&gt;8.90&lt;/PRICE&gt;<br>
        &lt;PUBLISHED&gt;1990&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>&lt;CD&gt;<br>&lt;TITLE&gt;Stop&lt;/TITLE&gt;<br>
        &lt;ARTIST&gt;Sam Brown&lt;/ARTIST&gt;<br>&lt;COUNTRY&gt;UK&lt;/COUNTRY&gt;<br>&lt;COMPANY&gt;A and
        M&lt;/COMPANY&gt;<br>&lt;PRICE&gt;8.90&lt;/PRICE&gt;<br>&lt;PUBLISHED&gt;1988&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>
        &lt;CD&gt;<br>&lt;TITLE&gt;Bridge of Spies&lt;/TITLE&gt;<br>&lt;ARTIST&gt;T'Pau&lt;/ARTIST&gt;<br>
        &lt;COUNTRY&gt;UK&lt;/COUNTRY&gt;<br>&lt;COMPANY&gt;Siren&lt;/COMPANY&gt;<br>&lt;PRICE&gt;7.90&lt;/PRICE&gt;<br>
        &lt;PUBLISHED&gt;1987&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>&lt;CD&gt;<br>&lt;TITLE&gt;Private
        Dancer&lt;/TITLE&gt;<br>&lt;ARTIST&gt;Tina Turner&lt;/ARTIST&gt;<br>&lt;COUNTRY&gt;UK&lt;/COUNTRY&gt;<br>
        &lt;COMPANY&gt;Capitol&lt;/COMPANY&gt;<br>&lt;PRICE&gt;8.90&lt;/PRICE&gt;<br>
        &lt;PUBLISHED&gt;1983&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>&lt;CD&gt;<br>&lt;TITLE&gt;Midt om
        natten&lt;/TITLE&gt;<br>
        &lt;ARTIST&gt;Kim Larsen&lt;/ARTIST&gt;<br>&lt;COUNTRY&gt;EU&lt;/COUNTRY&gt;<br>
        &lt;COMPANY&gt;Medley&lt;/COMPANY&gt;<br>&lt;PRICE&gt;7.80&lt;/PRICE&gt;<br>
        &lt;PUBLISHED&gt;1983&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>&lt;CD&gt;<br>&lt;TITLE&gt;Pavarotti Gala
        Concert&lt;/TITLE&gt;<br>&lt;ARTIST&gt;Luciano Pavarotti&lt;/ARTIST&gt;<br>
        &lt;COUNTRY&gt;UK&lt;/COUNTRY&gt;<br>&lt;COMPANY&gt;DECCA&lt;/COMPANY&gt;<br>&lt;PRICE&gt;9.90&lt;/PRICE&gt;<br>
        &lt;PUBLISHED&gt;1991&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>&lt;CD&gt;<br>&lt;TITLE&gt;The dock of the
        bay&lt;/TITLE&gt;<br>&lt;ARTIST&gt;Otis Redding&lt;/ARTIST&gt;<br>&lt;COUNTRY&gt;USA&lt;/COUNTRY&gt;<br>
        &lt;COMPANY&gt;Atlantic&lt;/COMPANY&gt;<br>&lt;PRICE&gt;7.90&lt;/PRICE&gt;<br>
        &lt;PUBLISHED&gt;1987&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>&lt;CD&gt;<br>&lt;TITLE&gt;Picture book&lt;/TITLE&gt;<br>
        &lt;ARTIST&gt;Simply Red&lt;/ARTIST&gt;<br>&lt;COUNTRY&gt;EU&lt;/COUNTRY&gt;<br>
        &lt;COMPANY&gt;Elektra&lt;/COMPANY&gt;<br>&lt;PRICE&gt;7.20&lt;/PRICE&gt;<br>
        &lt;PUBLISHED&gt;1985&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>&lt;CD&gt;<br>&lt;TITLE&gt;Red&lt;/TITLE&gt;<br>
        &lt;ARTIST&gt;The Communards&lt;/ARTIST&gt;<br>&lt;COUNTRY&gt;UK&lt;/COUNTRY&gt;<br>
        &lt;COMPANY&gt;London&lt;/COMPANY&gt;<br>&lt;PRICE&gt;7.80&lt;/PRICE&gt;<br>
        &lt;PUBLISHED&gt;1987&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>&lt;CD&gt;<br>&lt;TITLE&gt;Unchain my
        heart&lt;/TITLE&gt;<br>&lt;ARTIST&gt;Joe Cocker&lt;/ARTIST&gt;<br>&lt;COUNTRY&gt;USA&lt;/COUNTRY&gt;<br>
        &lt;COMPANY&gt;EMI&lt;/COMPANY&gt;<br>&lt;PRICE&gt;8.20&lt;/PRICE&gt;<br>&lt;PUBLISHED&gt;1987&lt;/PUBLISHED&gt;<br>
        &lt;/CD&gt;<br>&lt;/CATALOG&gt;
      </div>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_case_txt.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_case_json.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>