<?php include '../include/head.php'; ?>

  <title>AppML кейс - Продукты. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML кейс - Продукты. HTML-ресурс, модели, используемые в приложении - списка и формы. Учебник по AppML. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_case_products.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

  <article>
    <h1><span class='color_h1'>AppML кейс - Продукты</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_case_customers.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_case_suppliers.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>HTML страница</h2>
    <p>Это HTML ресурс:</p>
    <div class='w3-example'>
      <div class="w3-code notranslate htmlHigh">
        &lt;!DOCTYPE html&gt;<br>&lt;html lang="ru"&gt;<br>&lt;head&gt;<br>&lt;meta charset="utf-8"&gt;<br>
        &lt;title&gt;Продукты&lt;/title&gt;<br>&lt;link rel="stylesheet"
        href="../w3css/4/w3.css"&gt;<br>
        &lt;script src="2.0.3/appml.js"&gt;&lt;/script&gt;<br>
        &lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;div class="w3-container w3-content"&gt;<br>
        &lt;h1&gt;Продукты&lt;/h1&gt;<br><br>&lt;div id="Form01" class="w3-container w3-light-grey
        w3-padding-large w3-margin-bottom" style="display:none;"
        appml-controller="myFormController"&gt;<br>&nbsp; &lt;div
        appml-include-html="inc_formcommands.html"&gt;&lt;/div&gt;<br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;label&gt;ProductName:&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp; &lt;input id="ProductName" class="w3-input
        w3-border"&gt;<br>&nbsp; &lt;/p&gt;<br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;label&gt;Supplier:&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp; &lt;div
        appml-data="https://www.w3schools.com/appml/appml.php?model=model_dropdown_suppliers"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;select
        id="SupplierID" class="w3-select w3-border"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;option
        appml-repeat="records" value="{{SupplierID}}"&gt;{{SupplierName}}&lt;/option&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/select&gt;<br>&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>&nbsp; &lt;/p&gt;<br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;label&gt;Category:&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp; &lt;div
        appml-data="https://www.w3schools.com/appml/appml.php?model=model_dropdown_categories"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;select
        id="CategoryID" class="w3-select w3-border"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;option
        appml-repeat="records" value="{{CategoryID}}"&gt;{{CategoryName}}&lt;/option&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/select&gt;<br>&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>&nbsp; &lt;/p&gt;<br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp; &lt;label&gt;Unit:&lt;/label&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;input id="Unit" class="w3-input w3-border"&gt;<br>&nbsp; &lt;/p&gt;<br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;label&gt;Price:&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp; &lt;input id="Price" onchange="myValidator(this)"
        class="w3-input w3-border"&gt;<br>&nbsp; &lt;/p&gt;<br>&lt;/div&gt;<br><br>&lt;div
        appml-data="https://www.w3schools.com/appml/appml.php?model=model_productslist"
        appml-controller="myListController"&gt;<br>&lt;div
        appml-include-html="inc_listcommands.html"&gt;&lt;/div&gt;<br>
        &lt;div appml-include-html="inc_productsquery.html"&gt;&lt;/div&gt;<br>&lt;table
        class="w3-table-all"&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Product
        Name&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Category&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Supplier&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;th&gt;Price&lt;/th&gt; <br>&nbsp; &lt;/tr&gt;<br>&nbsp; &lt;tr appml-repeat="records"&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td style="cursor:pointer"
        onclick="appml('Form01').run({{ProductID}})"&gt;&amp;#9998;&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;td&gt;{{ProductName}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{CategoryName}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;td&gt;{{SupplierName}}&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;{{Price}}&lt;/td&gt; <br>&nbsp; &lt;/tr&gt;<br>&lt;/table&gt;<br>
        &lt;/div&gt;<br>&lt;h3 id="sumprice"&gt;&lt;/h3&gt;<br>&lt;/div&gt;<br><br>
        &lt;script&gt;<br>function myValidator(item) {<br>&nbsp; var obj = appml("Form01");<br>
        &nbsp; obj.message = "validate";<br>&nbsp; obj.validate = {};<br>&nbsp; obj.validate.item =
        item.id;<br>&nbsp; obj.validate.value = item.value;<br>&nbsp; myFormController(obj);<br>
        }<br><br>function myListController($appml) {<br>&nbsp; if ($appml.message ==
        "done") {<br>&nbsp;&nbsp;&nbsp; var i, x, tot = 0;<br>&nbsp;&nbsp;&nbsp; x = $appml.data.records;<br>&nbsp;&nbsp;&nbsp;
        for (i = 0; i &lt; x.length; i++) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; tot += Number(x[i].Price);<br>&nbsp;&nbsp;&nbsp;
        }<br>&nbsp;&nbsp;&nbsp; document.getElementById("sumprice").innerHTML = x.length + "
        products. Total price: $" + tot.toFixed(2);<br>&nbsp; }<br>&nbsp; if ($appml.message
        == "display") {<br>&nbsp;&nbsp;&nbsp; if ($appml.display.name == "ProductName") {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        $appml.display.value = $appml.display.value.toUpperCase();<br>&nbsp;&nbsp;&nbsp; }<br>&nbsp; }<br>
        }<br>
        <br>function myFormController($appml) {<br>&nbsp; if ($appml.message == "ready")
        {<br>&nbsp;&nbsp;&nbsp; $appml.appName = "Form01";<br>&nbsp;&nbsp;&nbsp; $appml.dataSource =
        "https://www.w3schools.com/appml/appml.php?model=model_productsform";<br>&nbsp;&nbsp;&nbsp; return -1;<br>&nbsp; }<br>&nbsp; if
        ($appml.message == "loaded") {<br>&nbsp;&nbsp;&nbsp;
        document.getElementById("Form01").style.display = "";<br>&nbsp; }<br>&nbsp; if
        ($appml.message == "submit") {<br>&nbsp;&nbsp;&nbsp; if
        (isNaN(document.getElementById("Price").value)) { <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        $appml.setError(15, "Цена должна быть числом");<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; return -1; <br>&nbsp;&nbsp;&nbsp; }<br> &nbsp; }<br>&nbsp; if ($appml.message == "validate") {<br>&nbsp;&nbsp;&nbsp; if ($appml.validate.item
        == "Price") { <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if (isNaN($appml.validate.value)) { <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        $appml.setError(15, "Цена должна быть числом");<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; return; <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        }<br>&nbsp;&nbsp;&nbsp; }<br>&nbsp; }<br>}<br>&lt;/script&gt;<br>&lt;/body&gt;<br>&lt;/html&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='php_products.html' target='_blank'>PHP »</a>&nbsp;&nbsp;
      <a class='w3-btn w3-margin-bottom' href='aspx_products.html' target='_blank'>.NET »</a>
    </div>
    <hr>

    <h2>Модели</h2>
    <p>Это модели, используемые в приложении:</p>
    <div class='w3-example'>
      <h3>Модель списка</h3>
      <div class='w3-code notranslate jsHigh'>
        {<br>"database" : {<br>"connection" : "localmysql",<br>"sql" : "SELECT
        ProductID,ProductName,CategoryName,SupplierName,Price FROM ((Products LEFT
        JOIN Suppliers ON Products.SupplierID=Suppliers.SupplierID) LEFT JOIN
        Categories ON Products.CategoryID=Categories.CategoryID)",<br>"orderby" :
        "ProductName"<br>},<br>"filteritems" : [<br>{"item" : "ProductName", "label"
        : "Name"},<br>{"item" : "Products.SupplierID", "type" : "number", "hidden" :
        "true"},<br>{"item" : "Suppliers.SupplierID", "label" : "Supplier"}, <br>
        {"item" : "Categories.CategoryID", "label" : "Category"}<br>],<br>
        "sortitems" : [<br>{"item" : "ProductName"}<br>]</div>
    </div>

    <div class='w3-example'>
      <h3>Модель формы</h3>
      <div class='w3-code notranslate jsHigh'>
        {<br>"database" : {<br>"connection" : "localmysql",<br>"sql" : "SELECT *
        FROM Products",<br>"maintable" : "Products",<br>"keyfield" : "ProductID"<br>
        },<br>"updateItems" : [<br>{"item" : "ProductName"},<br>{"item" :
        "SupplierID"},<br>{"item" : "CategoryID"},<br>{"item" : "Unit"},<br>{"item"
        : "Price"}<br>]<br>}</div>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_case_customers.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_case_suppliers.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>