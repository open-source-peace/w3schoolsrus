<?php include '../include/head.php'; ?>

  <title>AppML Справочник - <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML Справочник - Файлы данных. Свойство data определяет файл данных как источник данных. Данные из текстового, XML, JSON файла. Учебник по AppML. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_ref_files.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

  <article>
    <h1>App<span class='color_h1'>ML</span> Справочник - Файлы данных</h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_reference.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_ref_databases.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>Свойство "data"</h2>
    <p>Свойство "data" определяет файл данных как источник данных. Он имеет следующие <strong>субсвойства</strong>:</p>
    <table class="w3-table-all notranslate">
      <tr>
        <th style="width:30%">Элемент</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td>"type"</td>
        <td>Тип файла данных ("csvfile", "xmlfile", or "jsonfile") </td>
      </tr>
      <tr>
        <td>"filename"</td>
        <td>Имя файла</td>
      </tr>
      <tr>
        <td>"record"</td>
        <td>Имя узла данных XML (если xmlfile)</td>
      </tr>
      <tr>
        <td>"items"</td>
        <td>Элементы данных</td>
      </tr>
    </table>
    <hr>

    <h2>Данные из текстового файла</h2>
    <p>Эта модель извлекает записи, содержащие Title, Artist и Price (как элементы 1, 2 и 5) из текстового файла, разделенного запятыми:</p>
    <div class="w3-example">
      <h3>Модель</h3>
      <div class="w3-code notranslate jsHigh">
        {<br>"data": {<br>&nbsp;&nbsp;&nbsp; "type"&nbsp;&nbsp;&nbsp; : "csvfile",<br>&nbsp;&nbsp;&nbsp;
        "filename": "cd_catalog.txt",<br>&nbsp;&nbsp;&nbsp; "items"&nbsp;&nbsp; : [<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {"name": "Title", "index": 1},<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {"name": "Artist","index": 2},<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {"name": "Price", "index": 5}<br>&nbsp;&nbsp;&nbsp; ]<br>}<br>}
      </div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_from_txt_php.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Объяснение примера: <a href="appml_case_txt.php">Кейс Текстовые файлы</a>.</p>
    <hr>

    <h2>Данные из XML файла</h2>
    <p>Эта модель извлекает записи, содержащие Title, Artist и Price из узлов CD в файле XML:</p>
    <div class="w3-example">
      <h3>Модель</h3>
      <div class="w3-code notranslate jsHigh">
        {<br>"data": {<br>&nbsp;&nbsp;&nbsp; "type"&nbsp;&nbsp;&nbsp; : "xmlfile",<br>&nbsp;&nbsp;&nbsp;
        "filename": "cd_catalog.xml",<br>&nbsp;&nbsp;&nbsp; "record"&nbsp; : "CD",<br>&nbsp;&nbsp;&nbsp;
        "items"&nbsp;&nbsp; : [<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {"name": "Artist",
        "nodename": "ARTIST"},<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {"name": "Title",&nbsp; "nodename": "TITLE"},<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {"name": "Country","nodename": "COUNTRY"}<br>&nbsp;&nbsp;&nbsp; ]<br>}<br>}</div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_from_xml_php.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Объяснение примера: <a href="appml_case_xml.php">Кейс XML файлы</a>.</p>
    <hr>

    <h2>Данные из JSON файла</h2>
    <p>Эта модель извлекает записи, содержащие Title, Artist и Price из массива CD объектов в файле JSON:</p>
    <div class="w3-example">
      <h3>Модель</h3>
      <div class="w3-code notranslate jsHigh">
        {<br>"data" : {<br>&nbsp;&nbsp;&nbsp; "type" : "jsonfile",<br>&nbsp;&nbsp;&nbsp;
        "filename" : "cd_catalog.js",<br>&nbsp;&nbsp;&nbsp; "record" : "cd",<br>&nbsp;&nbsp;&nbsp;
        "items" : [<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {"name" : "Title",
        "nodename" : "title"},<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {"name"
        : "Artist", "nodename" : "artist"},<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {"name" : "Price", "nodename" : "price"}<br>&nbsp;&nbsp;&nbsp; ]<br>}<br>}
      </div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_from_json_php.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Объяснение примера: <a href="appml_case_json.php">Кейс JSON файлы</a>.</p>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_reference.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_ref_databases.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>