<?php include '../include/head.php'; ?>

  <title>AppML кейс - Сотрудники. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML кейс - Сотрудники. HTML-ресурс. Модели, используемые в приложении: модель списка и формы. Учебник по AppML. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_case_employees.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

  <article>
    <h1><span class='color_h1'>AppML кейс - Сотрудники</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_case_categories.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_client.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>HTML страница</h2>
    <p>Это HTML ресурс:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;!DOCTYPE html&gt;<br>&lt;html lang="ru"&gt;<br>&lt;head&gt;<br>&lt;meta charset="utf-8"&gt;<br>
        &lt;title&gt;Сотрудники&lt;/title&gt;<br>&lt;link rel="stylesheet"
        href="../w3css/4/w3.css"&gt;<br>
        &lt;script src="2.0.3/appml.js"&gt;&lt;/script&gt;<br>
        &lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;div class="w3-container w3-content"&gt;<br>
        &lt;h1&gt;Сотрудники&lt;/h1&gt;<br>&lt;div id="Form01" class="w3-container w3-light-grey
        w3-padding-large w3-margin-bottom" appml-data="https://www.w3schools.com/appml/appml.php?model=model_employeesform"
        appml-controller="myFormController" style="display:none;"&gt;<br>&nbsp; &lt;div
        appml-include-html="inc_formcommands.html"&gt;&lt;/div&gt;<br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;label&gt;Last
        Name:&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp; &lt;input id="LastName" class="w3-input w3-border"&gt;<br>&nbsp;
        &lt;/p&gt;<br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;label&gt;First Name:&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp; &lt;input id="FirstName"
        class="w3-input w3-border"&gt;<br>&nbsp; &lt;/p&gt;<br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;label&gt;Date of
        Birth:&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp; &lt;input id="BirthDate" class="w3-input w3-border"&gt;<br>&nbsp;
        &lt;/p&gt;<br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;label&gt;Photo:&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp; &lt;input id="Photo" class="w3-input w3-border"&gt;<br>&nbsp; &lt;/p&gt;<br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;label&gt;Notes:&lt;/label&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;input id="Notes" class="w3-input w3-border"&gt;<br>&nbsp; &lt;/p&gt;<br>&lt;/div&gt;<br><br>
        &lt;div appml-data="https://www.w3schools.com/appml/appml.php?model=model_employeeslist"&gt;<br>
        &lt;div appml-include-html="inc_listcommands.html"&gt;&lt;/div&gt;<br>&lt;div appml-include-html="inc_filter.html"&gt;&lt;/div&gt;<br>
        &lt;table class="w3-table-all"&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Last Name&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;First Name&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Date of Birth&lt;/th&gt;<br>&nbsp;
        &lt;/tr&gt;<br>&nbsp; &lt;tr appml-repeat="records"&gt;<br>&nbsp;&nbsp; &lt;td style="cursor:pointer"
        onclick="appml('Form01').run({{EmployeeID}})"&gt;&amp;#9998;&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;td&gt;{{LastName}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{FirstName}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;td&gt;{{BirthDate}}&lt;/td&gt;<br>&nbsp; &lt;/tr&gt;<br>&lt;/table&gt;<br>&lt;/div&gt;<br>&lt;/div&gt;<br>
        <br>&lt;script&gt;<br>function myFormController($appml) {<br>&nbsp; if ($appml.message
        == "ready") {return -1;}<br>&nbsp; if ($appml.message == "loaded") {<br>&nbsp;&nbsp;&nbsp;
        document.getElementById("Form01").style.display = "";<br>&nbsp; }<br>}<br>
        &lt;/script&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='php_employees.html' target='_blank'>PHP »</a>&nbsp;&nbsp;
      <a class='w3-btn w3-margin-bottom' href='aspx_employees.html' target='_blank'>.NET »</a>
    </div>
    <hr>

    <h2>Модели</h2>
    <p>Это модели, используемые в приложении:</p>
    <div class='w3-example'>
      <h3>Модель списка</h3>
      <div class='w3-code notranslate jsHigh'>
        {<br>"database" : {<br>"connection" : "localmysql",<br>"sql" : "SELECT *
        FROM Employees",<br>"orderby" : "LastName"<br>},<br>"filteritems" : [<br>
        {"item" : "LastName"},<br>{"item" : "FirstName"}<br>],<br>"sortitems" :
        [<br>{"item" : "LastName"},<br>{"item" : "FirstName"}<br>]<br>}</div>
    </div>

    <div class='w3-example'>
      <h3>Модель формы</h3>
      <div class='w3-code notranslate jsHigh'>
        {<br>"database" : {<br>"connection" : "localmysql",<br>"sql" : "SELECT *
        FROM Employees",<br>"maintable" : "Employees",<br>"keyfield" : "EmployeeID"<br>
        },<br>"updateItems" : [<br>{"item" : "LastName"},<br>{"item" : "FirstName"},<br>
        {"item" : "BirthDate"},<br>{"item" : "Photo"},<br>{"item" : "Notes"}<br>]<br>
        }</div>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_case_categories.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_client.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>