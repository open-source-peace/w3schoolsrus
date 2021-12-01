<?php include '../include/head.php'; ?>

  <title>AppML Кейс - Поставщики. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML Кейс - Поставщики. HTML-код. Модели, используемые в приложении: модель списка и формы. Учебник по AppML. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_case_suppliers.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

<article>
  <h1><span class='"color_h1'>AppML кейс - Поставщики</span></h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-button w3-green' href='appml_case_products.php'>&#10094; Prev</a>
    <a class='w3-right w3-button w3-green' href='appml_case_shippers.php'>Next &#10095;</a>
  </div>
  <hr>

  <h2>HTML страница</h2>
  <p>Это HTML ресурс:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate htmlHigh'>
      &lt;!DOCTYPE html&gt;<br>&lt;html lang="ru"&gt;<br>&lt;head&gt;<br>&lt;meta charset="utf-8"&gt;<br>
      &lt;title&gt;Поставщики&lt;/title&gt;<br>&lt;link rel="stylesheet"
      href="../w3css/4/w3.css"&gt;<br>
      &lt;script src="2.0.3/appml.js"&gt;&lt;/script&gt;<br>
      &lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;div class="w3-container w3-content"&gt;<br>
      &lt;h1&gt;Поставщики&lt;/h1&gt;<br><br>&lt;div id="Form01" class="w3-container w3-light-grey
      w3-padding-large w3-margin-bottom" appml-data="https://www.w3schools.com/appml/appml.php?model=model_suppliersform"
      appml-controller="myFormController" style="display:none;"&gt;<br>&nbsp; &lt;div
      appml-include-html="inc_formcommands.html"&gt;&lt;/div&gt;<br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp;
      &lt;label&gt;SupplierID:&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp; &lt;input id="SupplierID" class="w3-input
      w3-border"&gt;<br>&nbsp; &lt;/p&gt;<br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;label&gt;SupplierName:&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp;
      &lt;input id="SupplierName" class="w3-input w3-border"&gt;<br>&nbsp; &lt;/p&gt;<br>&nbsp; &lt;p&gt;<br>
      &nbsp;&nbsp;&nbsp; &lt;label&gt;ContactName:&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp; &lt;input id="ContactName"
      class="w3-input w3-border"&gt;<br>&nbsp; &lt;/p&gt;<br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp;
      &lt;label&gt;Address:&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp; &lt;input id="Address" class="w3-input
      w3-border"&gt;<br>&nbsp; &lt;/p&gt;<br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;label&gt;PostalCode:&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp;
      &lt;input id="PostalCode" class="w3-input w3-border"&gt;<br>&nbsp; &lt;/p&gt;<br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp;
      &lt;label&gt;City:&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp; &lt;input id="City" class="w3-input w3-border"&gt;<br>
      &nbsp; &lt;/p&gt;<br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;label&gt;Country:&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp; &lt;input id="Country" class="w3-input w3-border"&gt;<br>&nbsp; &lt;/p&gt;<br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;label&gt;Phone:&lt;/label&gt;<br>
      &nbsp;&nbsp;&nbsp; &lt;input id="Phone" class="w3-input w3-border"&gt;<br>&nbsp; &lt;/p&gt;<br>&lt;/div&gt;<br><br>
      &lt;div appml-data="https://www.w3schools.com/appml/appml.php?model=model_supplierslist"&gt;<br>
      &lt;div appml-include-html="inc_listcommands.htm"&gt;&lt;/div&gt;<br>&lt;div appml-include-html="inc_filter.html"&gt;&lt;/div&gt;<br>
      &lt;div class="w3-responsive"&gt;<br>&lt;table class="w3-table-all"&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp;
      &lt;th&gt;&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Supplier&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;City&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp;
      &lt;th&gt;Country&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;&lt;/th&gt;<br>&nbsp; &lt;/tr&gt;<br>&nbsp; &lt;tr
      appml-repeat="records"&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td style="cursor:pointer"
      onclick="appml('Form01').run({{SupplierID}})"&gt;&amp;#9998;&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;
      &lt;td&gt;{{SupplierName}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{City}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;
      &lt;td&gt;{{Country}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;&lt;a href=''
      onclick="openProducts({{SupplierID}});return false;"&gt;Products&lt;/a&gt;&lt;/td&gt;<br>&nbsp;
      &lt;/tr&gt;<br>&lt;/table&gt;<br>&lt;/div&gt;<br>&lt;/div&gt;<br>
      <br>&lt;div id="ProductsSection" class="w3-container w3-light-grey"
      appml-data="https://www.w3schools.com/appml/appml.php?model=model_productslist"
      appml-controller="myProductsController" style="display:none;padding:50px;margin-top:30px;"&gt;<br>&lt;span
      onclick="document.getElementById('ProductsSection').style.display='none';"
      class="w3-button w3-xxlarge w3-right"&gt;&amp;times;&lt;/span&gt;<br>
      &lt;h2&gt;{{records[0]['SupplierName']}}&lt;/h2&gt;<br>
      &lt;div class="w3-responsive"&gt;<br>&lt;table class="w3-table-all"&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp;
      &lt;th&gt;Product&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Category&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Supplier&lt;/th&gt;<br>&nbsp;
      &lt;/tr&gt;<br>&nbsp; &lt;tr appml-repeat="records"&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{ProductName}}&lt;/td&gt;<br>
      &nbsp;&nbsp;&nbsp; &lt;td&gt;{{CategoryName}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{SupplierName}}&lt;/td&gt;<br>&nbsp; &lt;/tr&gt;<br>
      &lt;/table&gt;<br>&lt;/div&gt;<br>&lt;/div&gt;<br>
      &lt;/div&gt;<br><br>&lt;script&gt;<br>function openProducts(id) {<br>&nbsp;
      appml("ProductsSection").clearQuery();<br>&nbsp;
      appml("ProductsSection").setQuery("Products.SupplierID", id); <br>&nbsp;
      appml("ProductsSection").run();<br>&nbsp;
      document.getElementById("ProductsSection").style.display = ""; <br>}<br>
      function myFormController($appml) {<br>&nbsp; if ($appml.message == "ready")
      {return -1;}<br>&nbsp; if ($appml.message == "loaded") {<br>&nbsp;&nbsp;&nbsp;
      document.getElementById("Form01").style.display = "";<br>&nbsp; }<br>}<br>
      function myProductsController($appml) {<br>&nbsp; if ($appml.message == "ready")
      {return -1;}<br>}<br>&lt;/script&gt;<br>&lt;/body&gt;<br>&lt;/html&gt;
    </div>
    <a class='w3-btn w3-margin-bottom' href='php_suppliers.html' target='_blank'>PHP »</a>&nbsp;&nbsp;
    <a class='w3-btn w3-margin-bottom' href='aspx_suppliers.html' target='_blank'>.NET »</a>
  </div>
  <hr>

  <h2>Модели</h2>
  <p>Это модели, используемые в приложении:</p>
  <div class='w3-example'>
    <h3>Модель списка</h3>
    <div class='w3-code notranslate jsHigh'>
      {<br>"database" : {<br>"connection" : "localmysql",<br>"sql" : "SELECT *
      FROM Suppliers",<br>"orderby" : "SupplierName"<br>},<br>"filteritems" :
      [<br>{"item" : "SupplierName"},<br>{"item" : "City"},<br>{"item" :
      "Country"}<br>],<br>"sortitems" : [<br>{"item" : "SupplierName"},<br>
      {"item" : "City"},<br>{"item" : "Country"}<br>],<br>"rowsperpage" : 10<br>
      }</div>
  </div>

  <div class='w3-example'>
    <h3>Модель формы</h3>
    <div class='w3-code notranslate jsHigh'>
      {<br>"database" : {<br>"connection" : "localmysql",<br>"sql" : "SELECT *
      FROM Suppliers",<br>"maintable" : "Suppliers",<br>"keyfield" : "SupplierID"<br>
      },<br>"updateItems" : [<br>{"item" : "SupplierID"},<br>{"item" :
      "SupplierName"},<br>
      {"item" : "ContactName"},<br>{"item" : "Address"},<br>{"item" :
      "PostalCode"},<br>
      {"item" : "City"},<br>{"item" : "Country"},<br>{"item" : "Phone"}<br>]<br>}</div>
  </div>

  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-button w3-green' href='appml_case_products.php'>&#10094; Prev</a>
    <a class='w3-right w3-button w3-green' href='appml_case_shippers.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>