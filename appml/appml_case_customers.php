<?php include '../include/head.php'; ?>

  <title>AppML кейс - Клиенты. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML кейс - Клиенты. HTML-страницы, модели списка и формы. Как сделать? Учебник по AppML. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_case_customers.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

  <article>
    <h1><span class='color_h1'>AppML кейс - Клиенты</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_case_json.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_case_products.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>HTML страница</h2>
    <p>Это HTML ресурс:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>&lt;link rel="stylesheet"
        href="../w3css/4/w3.css"&gt;<br>
        &lt;script src="2.0.3/appml.js"&gt;&lt;/script&gt;<br>
        &lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;div class="w3-container w3-content"&gt;<br>
        &lt;h1&gt;Клиенты&lt;/h1&gt;<br><br>&lt;div class="w3-container w3-light-grey
        w3-padding-large w3-margin-bottom"
        appml-data="https://www.w3schools.com/appml/appml.php?model=model_customersform"
        appml-controller="myFormController" id="Form01" style="display:none;"&gt;<br>&nbsp;
        &lt;div appml-include-html="inc_formcommands.html"&gt;&lt;/div&gt;<br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;label&gt;CustomerName:&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp; &lt;input id="customername" class="w3-input
        w3-border"&gt;<br>&nbsp; &lt;/p&gt;<br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;label&gt;ContactName:&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;input id="contactname" class="w3-input w3-border"&gt;<br>&nbsp; &lt;/p&gt;<br>&nbsp; &lt;p&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;label&gt;Address:&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp; &lt;input id="address" class="w3-input
        w3-border"&gt;<br>&nbsp; &lt;/p&gt;<br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;label&gt;City:&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp; &lt;input
        id="city" class="w3-input w3-border"&gt;<br>&nbsp; &lt;/p&gt;<br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;label&gt;PostalCode:&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp; &lt;input id="postalcode" class="w3-input
        w3-border"&gt;<br>&nbsp; &lt;/p&gt;<br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;label&gt;Country:&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp; &lt;input
        id="country" class="w3-input w3-border"&gt;<br>&nbsp; &lt;/p&gt;<br>&lt;/div&gt;<br>
        <br>&lt;div appml-data="https://www.w3schools.com/appml/appml.php?model=model_customerslist"&gt;<br>&nbsp; &lt;div
        appml-include-html="inc_listcommands.html"&gt;&lt;/div&gt;<br>&nbsp; &lt;div
        appml-include-html="inc_filter.html"&gt;&lt;/div&gt;<br>&nbsp; &lt;table class="w3-table-all"&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;th&gt;&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;th&gt;Клиент&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &lt;th&gt;Город&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;th&gt;Страна&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;/tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;tr
        appml-repeat="records"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;td style="cursor:pointer;width:40px;"
        onclick="appml('Form01').run({{CustomerID}});"&gt;&amp;#9998;&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;td&gt;{{City}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &lt;td&gt;{{Country}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;/tr&gt;<br>&nbsp; &lt;/table&gt;<br>&lt;/div&gt;<br><br>&lt;/div&gt;<br><br>
        &lt;script&gt;<br>function myFormController($appml) {<br>&nbsp; if ($appml.message ==
        "ready") {return -1; }<br>&nbsp; if ($appml.message == "loaded") {<br>&nbsp;&nbsp;&nbsp;
        document.getElementById("Form01").style.display = "";<br>&nbsp; }<br>}<br>
        &lt;/script&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='php_customers.html' target='_blank'>PHP »</a>&nbsp;&nbsp;
      <a class='w3-btn w3-margin-bottom' href='aspx_customers.html' target='_blank'>.NET »</a>
    </div>
    <hr>

    <h2>Модели</h2>
    <p>Это модели, используемые в приложении:</p>
    <div class='w3-example'>
      <h3>Модель списка</h3>
      <div class='w3-code notranslate jsHigh'>
        {<br>"rowsperpage" : 10,<br>"database" : {<br>"connection" : "localmysql",<br>
        "sql" : "SELECT * FROM Customers",<br>"orderby" : "CustomerName"<br>},<br>
        "filteritems" : [<br>{"item" : "CustomerName", "label" : "Customer"},<br>
        {"item" : "City"},<br>{"item" : "Country"}<br>],<br>"sortitems" : [<br>
        {"item" : "CustomerName", "label" : "Customer"},<br>{"item" : "City"},<br>
        {"item" : "Country"}<br>]<br>}</div>
    </div>

    <div class='w3-example'>
      <h3>Модель формы</h3>
      <div class='w3-code notranslate jsHigh'>
        {<br>"database" : {<br>"connection" : "localmysql",<br>"maintable" :
        "Customers",<br>"keyfield" : "CustomerID",<br>"sql" : "SELECT * FROM
        Customers"<br>},<br>"updateItems" : [<br>{"item" : "CustomerName"},<br>
        {"item" : "Address"},<br>{"item" : "PostalCode"},<br>{"item" : "City"},<br>
        {"item" : "Country"}<br>]<br>}</div>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_case_json.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_case_products.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>