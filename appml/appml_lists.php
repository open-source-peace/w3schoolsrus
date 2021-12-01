<?php include '../include/head.php'; ?>

  <title>AppML Списки. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML Списки. Как создать новую модель, включая определения фильтров и сортировки? Создание шаблона HTML-фильтра. Учебник по AppML. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_lists.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

  <article>
    <h1><span class='color_h1'>AppML Списки</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_prototype.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_forms.php'>Next &#10095;</a>
    </div>
    <hr>

    <p class='intro'>В этом разделе мы перечислим записи из базы данных.</p>
    <hr>

    <div class='w3-panel w3-note'>
      <p>В примерах на этой странице используется локальная база данных SQL.<br>
        Локальные базы данных SQL не работают в IE или Firefox. Используйте Chrome или Safari.</p>
    </div>

    <h2>Создать новую модель<br></h2>
    <p>В предыдущем разделе вы использовали модель для создания базы данных.</p>
    <p>Теперь создайте новую модель, включая определения фильтров и сортировки:</p>

    <div class='w3-example'>
      <h3>model_customerslist.js</h3>
      <div class='w3-code notranslate jsHigh'>
        {<br>
        "rowsperpage" : 10,<br>
        "database" : {<br>
        &nbsp;&nbsp;&nbsp; "connection" : "localmysql",<br>
        &nbsp;&nbsp;&nbsp; "sql" : "SELECT * FROM Customers",<br>
        &nbsp;&nbsp;&nbsp; "orderby" : "CustomerName"<br>
        },<br>
        "filteritems" : [<br>
        &nbsp;&nbsp;&nbsp; {"item" : "CustomerName", "label" : "Customer"},<br>
        &nbsp;&nbsp;&nbsp; {"item" : "City"},<br>
        &nbsp;&nbsp;&nbsp; {"item" : "Country"}<br>
        ],<br>
        "sortitems" : [<br>
        &nbsp;&nbsp;&nbsp; {"item" : "CustomerName", "label" : "Customer"},<br>
        &nbsp;&nbsp;&nbsp; {"item" : "City"},<br>
        &nbsp;&nbsp;&nbsp; {"item" : "Country"}<br>
        ]<br>
        }
      </div>
    </div>

    <p>Используйте модель в своем приложении:</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;div appml-data="<strong>local?model=model_customerslist</strong>"&gt;<br>
        &lt;h1&gt;Клиенты&lt;/h1&gt;<br>
        &lt;div appml-include-html="inc_listcommands.html"&gt;&lt;/div&gt;<br>
        &lt;table class="w3-table-all"&gt;<br>
        &nbsp; &lt;tr&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;th&gt;Клиент&lt;/th&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;th&gt;Город&lt;/th&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;th&gt;Страна&lt;/th&gt;<br>
        &nbsp; &lt;/tr&gt;<br>
        &nbsp; &lt;tr appml-repeat="records"&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;td&gt;{{City}}&lt;/td&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;td&gt;{{Country}}&lt;/td&gt;<br>
        &nbsp; &lt;/tr&gt;<br>
        &lt;/table&gt;<br>
        &lt;/div&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_lists_1.html" target="_blank">Попробуйте сами »</a>
    </div>
    <hr>

    <h2>Создать шаблон HTML-фильтра</h2>
    <p>Создайте HTML для ваших фильтров:</p>
    <div class="w3-example">
      <h3>inc_filter.html</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;div id="appml_filtercontainer" class="w3-container w3-light-grey w3-section
        w3-padding-large" style="display:none;"&gt;<br>
        &nbsp; &lt;span id="appmlbtn_queryClose" onclick="this.parentNode.style.display='none';" class="w3-button w3-large
        w3-right"&gt;&amp;times;&lt;/span&gt;<br>
        &nbsp; &lt;h2&gt;Filter&lt;/h2&gt;<br>
        &nbsp; &lt;div id="appml_filter"&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;div appml-repeat="filteritems"&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class="w3-row"&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class="w3-col m4"&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;label&gt;{{label||item}}:&lt;/label&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class="w3-col m2"&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;input id="appml_datatype_{{item}}" type='hidden'&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;select id="appml_operator_{{item}}" class="w3-select w3-border"&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;option value="0"&gt;=&lt;/option&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;option value="1"&gt;&amp;lt;&amp;gt;&lt;/option&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;option value="2"&gt;&amp;lt;&lt;/option&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;option value="3"&gt;&amp;gt;&lt;/option&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;option value="4"&gt;&amp;lt;=&lt;/option&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;option value="5"&gt;&amp;gt;=&lt;/option&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;option value="6"&gt;%&lt;/option&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/select&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class="w3-col m6"&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;input id="appml_query_{{item}}" class="w3-input w3-border"&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>
        &nbsp; &lt;/div&gt;<br>
        &nbsp; &lt;div id="appml_orderby"&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;h2&gt;Order By&lt;/h2&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;div class="w3-row"&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class="w3-col m5"&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;select id='appml_orderselect' class="w3-select w3-border"&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;option value=''&gt;&lt;/option&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;option appml-repeat="sortitems" value="{{item}}"&gt;{{label ||
        item}}&lt;/option&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/select&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class="w3-col m7"&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ASC &lt;input type='radio' id="appml_orderdirection_asc"
        name='appml_orderdirection' value='asc' class="w3-radio"&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DESC &lt;input type='radio' id="appml_orderdirection_desc"
        name='appml_orderdirection' value='desc' class="w3-radio"&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>
        &nbsp; &lt;/div&gt;<br>
        &nbsp; &lt;br&gt;<br>
        &nbsp; &lt;button id="appmlbtn_queryOK" type="button" class="w3-btn w3-green"&gt;OK&lt;/button&gt;<br>
        &lt;/div&gt;
      </div>
    </div>
    <p>Сохраните HTML-код фильтра в файле с собственным именем, например "inc_filter.html".</p>
    <p>Включите HTML-фильтр в свой прототип с помощью <strong>appml-include-html</strong>:</p>

    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;div appml-data="local?model=model_customerslist"&gt;<br>
        &lt;h1&gt;Клиенты&lt;/h1&gt;<br>
        &lt;div appml-include-html="inc_listcommands.html"&gt;&lt;/div&gt;<br>
        &lt;div <strong>appml-include-html="inc_filter.html"</strong>&gt;&lt;/div&gt;<br>
        &lt;table class="w3-table-all"&gt;<br>
        &nbsp; &lt;tr&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;th&gt;Клиент&lt;/th&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;th&gt;Город&lt;/th&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;th&gt;Страна&lt;/th&gt;<br>
        &nbsp; &lt;/tr&gt;<br>
        &nbsp; &lt;tr appml-repeat="records"&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;td&gt;{{City}}&lt;/td&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;td&gt;{{Country}}&lt;/td&gt;<br>
        &nbsp; &lt;/tr&gt;<br>
        &lt;/table&gt;<br>
        &lt;/div&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='tryappml_lists_2.html' target='_blank'>Попробуйте сами »</a>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_prototype.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_forms.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>