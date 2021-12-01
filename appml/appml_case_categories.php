<?php include '../include/head.php'; ?>

  <title>AppML кейс - Категории. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML кейс - Категории. Html-страница. Модели, используемые в приложении: модель списка и формы. Учебник по AppML. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_case_categories.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

<article>
  <h1><span class='color_h1'>AppML кейс - Категории</span></h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-button w3-green' href='appml_case_shippers.php'>&#10094; Prev</a>
    <a class='w3-right w3-button w3-green' href='appml_case_employees.php'>Next &#10095;</a>
  </div>
  <hr>

  <h2>HTML страница</h2>
  <p>Это HTML ресурс:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate htmlHigh'>
      &lt;!DOCTYPE html&gt;<br>&lt;html lang="ru"&gt;<br>&lt;head&gt;<br>&lt;meta charset="utf-8"&gt;<br>
      &lt;title&gt;Категории&lt;/title&gt;<br>&lt;link rel="stylesheet"
      href="../w3css/4/w3.css"&gt;<br>
      &lt;script src="2.0.3/appml.js"&gt;&lt;/script&gt;<br>
      &lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;div class="w3-container w3-content"&gt;<br>
      &lt;h1&gt;Категории&lt;/h1&gt;<br>&lt;div id="Form01" class="w3-container w3-light-grey
      w3-padding-large w3-margin-bottom" appml-data="https://www.w3schools.com/appml/appml.php?model=model_categoriesform"
      appml-controller="myFormController" style="display:none;"&gt;<br>&nbsp; &lt;div
      appml-include-html="inc_formcommands.html"&gt;&lt;/div&gt;<br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp;
      &lt;label&gt;CategoryName:&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp; &lt;input id="CategoryName" class="w3-input
      w3-border"&gt;<br>&nbsp; &lt;/p&gt;<br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;label&gt;Description:&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp;
      &lt;input id="Description" class="w3-input w3-border"&gt;<br>&nbsp; &lt;/p&gt;<br>&lt;/div&gt;<br><br>
      &lt;div https://www.w3schools.com/appml/appml-data="appml.php?model=model_categorieslist"&gt;<br>
      &lt;div appml-include-html="inc_listcommands_nofilter.html"&gt;&lt;/div&gt;<br>&lt;table
      class="w3-table-all"&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Category&lt;/th&gt;<br>
      &nbsp;&nbsp;&nbsp; &lt;th&gt;Description&lt;/th&gt;<br>&nbsp; &lt;/tr&gt;<br>&nbsp; &lt;tr appml-repeat="records"&gt;<br>&nbsp;&nbsp;&nbsp;
      &lt;td style="cursor:pointer" onclick="appml('Form01').run({{CategoryID}})"&gt;&amp;#9998;&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;
      &lt;td&gt;{{CategoryName}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{Description}}&lt;/td&gt;<br>&nbsp; &lt;/tr&gt;<br>
      &lt;/table&gt;<br>&lt;/div&gt;<br>&lt;/div&gt;<br><br>&lt;script&gt;<br>function
      myFormController($appml) {<br>&nbsp; if ($appml.message == "ready") {return -1;}<br>
      &nbsp; if ($appml.message == "loaded") {<br>&nbsp;&nbsp;&nbsp;
      document.getElementById("Form01").style.display = "";<br>&nbsp; }<br>}<br>
      &lt;/script&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;</div>
    <a class='w3-btn w3-margin-bottom' href='php_categories.html' target='_blank'>PHP »</a>&nbsp;&nbsp;
    <a class='w3-btn w3-margin-bottom' href='aspx_categories.html' target='_blank'>.NET »</a>
  </div>
  <hr>

  <h2>Модели</h2>
  <p>Это модели, используемые в приложении:</p>
  <div class='w3-example'>
    <h3>Модель списка</h3>
    <div class='w3-code notranslate jsHigh'>
      {<br>"database" : {<br>"connection" : "localmysql",<br>"sql" : "SELECT *
      FROM Categories"<br>}<br>}</div>
  </div>

  <div class='w3-example'>
    <h3>Модель формы</h3>
    <div class='w3-code notranslate jsHigh'>
      {<br>"database" : {<br>"connection" : "localmysql",<br>"sql" : "SELECT *
      FROM Categories",<br>"maintable" : "Categories",<br>"keyfield" :
      "CategoryID"<br>
      },<br>"updateItems" : [<br>{"item" : "CategoryName"},<br>{"item" :
      "Description"}<br>]<br>}</div>
  </div>

  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-button w3-green' href='appml_case_shippers.php'>&#10094; Prev</a>
    <a class='w3-right w3-button w3-green' href='appml_case_employees.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>