<?php include '../include/head.php'; ?>

  <title>AppML Кейсы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Как создавать Интернет-приложения с помощью AppML? Доступ к файлам в Интернете. Доступ к базам данных в Интернете. AppML работает как в браузере (appml.js), так и на сервере (appml.php). <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_cases.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

  <article>
    <h1><span class='color_h1'>AppML Кейсы</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_methods.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_case_txt.php'>Next &#10095;</a>
    </div>
    <hr>
    <p class='intro'>В этом тематическом исследовании показано, <strong>как создавать Интернет-приложения с помощью AppML</strong>.</p>
    <hr>
    <h2>Часть I. Доступ к файлам в Интернете</h2>
    <ul>
      <li>Доступ к TEXT файлу</li>
      <li>Доступ к XML файлу</li>
      <li>Доступ к JSON файлу</li>
    </ul>
    <hr>
    <h2>Часть II: Доступ к базам данных в Интернете</h2>
    <ul>
      <li>Вывод данных из базы данных</li>
      <li>Фильтрация данных базы данных</li>
      <li>Редактирование данных базы данных</li>
    </ul>
    <hr>

    <h2>Браузер AppML и сервер AppML</h2>
    <p>В данном примере AppML работает как в браузере (appml.js), так и на сервере (appml.php).</p>
    <p>Мы будем использовать веб-сервер, расположенный по адресу
      <a href="https://www.w3schools.com/">https://www.w3schools.com</a>. </p>
    <p>Все файлы и базы данных находятся на сервере.</p>
    <div class="w3-panel w3-note">
      <p>Позже в этом учебнике вы узнаете, как смоделировать веб-сервер в браузере.</p>
    </div>
    <hr>

    <h2>Текстовые файлы</h2>
    <p>Чтобы продемонстрировать, как получить доступ к текстовым файлам, мы использовали такие файлы:</p>
    <div class="w3-example">
      <h3>cd_catalog.txt</h3>
      <div class="w3-code notranslate">
        Empire Burlesque,Bob Dylan,USA,Columbia,10.90,1985<br>
        Hide your heart,Bonnie Tyler,UK,CBS Records,9.90,1988<br>
        Greatest Hits,Dolly Parton,USA,RCA,9.90,1982<br>
        Still got the blues,Gary Moore,UK,Virgin records,10.20,1990<br>.<br>.
      </div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_from_txt.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>XML файлы</h2>
    <p>Чтобы продемонстрировать, как получить доступ к файлам XML, мы использовали такие файлы:</p>
    <div class="w3-example">
      <h3>cd_catalog.xml</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;?xml version=&quot;1.0&quot; encoding=&quot;ISO-8859-1&quot;?&gt;<br>&lt;CATALOG&gt;<br>&lt;CD&gt;<br>
        &nbsp;
        &lt;TITLE&gt;Empire Burlesque&lt;/TITLE&gt;<br>&nbsp; &lt;ARTIST&gt;Bob Dylan&lt;/ARTIST&gt;<br>
        &nbsp;
        &lt;COUNTRY&gt;USA&lt;/COUNTRY&gt;<br>&nbsp; &lt;COMPANY&gt;Columbia&lt;/COMPANY&gt;<br>
        &nbsp;
        &lt;PRICE&gt;10.90&lt;/PRICE&gt;<br>&nbsp; &lt;PUBLISHED&gt;1985&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>&lt;CD&gt;<br>
        &nbsp;
        &lt;TITLE&gt;Hide your heart&lt;/TITLE&gt;<br>&nbsp; &lt;ARTIST&gt;Bonnie Tyler&lt;/ARTIST&gt;<br>
        &nbsp;
        &lt;COUNTRY&gt;UK&lt;/COUNTRY&gt;<br>&nbsp; &lt;COMPANY&gt;CBS Records&lt;/COMPANY&gt;<br>
        &nbsp;
        &lt;PRICE&gt;9.90&lt;/PRICE&gt;<br>&nbsp; &lt;PUBLISHED&gt;1988&lt;/PUBLISHED&gt;<br>&lt;/CD&gt;<br>
        .<br>.
      </div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_from_xml.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>JSON файлы</h2>
    <p>Чтобы продемонстрировать, как получить доступ к файлам JSON, мы использовали такие файлы:</p>
    <div class="w3-example">
      <h3>cd_catalog.js</h3>
      <div class="w3-code notranslate jsHigh">
        {<br>&quot;cd&quot; : [<br>{ &quot;title&quot; : &quot;Empire Burlesque&quot;, &quot;artist&quot; : &quot;Bob Dylan&quot;,
        &quot;price&quot; : &quot;10.90&quot; },<br>{ &quot;title&quot; : &quot;Hide your heart&quot;, &quot;artist&quot; :
        &quot;Bonnie Tyler&quot;, &quot;price&quot; : &quot;9.90&quot; },<br>{ &quot;title&quot; : &quot;Greatest Hits&quot;,
        &quot;artist&quot; : &quot;Dolly Parton&quot;, &quot;price&quot; : &quot;9.90&quot; },<br>{ &quot;title&quot; : &quot;Still got
        the blues&quot;, &quot;artist&quot; : &quot;Gary Moore&quot;, &quot;price&quot; : &quot;10.20&quot; },<br>
        .<br>.
      </div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_from_json.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Базы данных</h2>
    <p>Наша тестовая база данных содержит несколько таких таблиц:</p>
    <h2>Клиенты</h2>
    <table class="w3-table-all notranslate">
      <tr>
        <th>Клиент</th>
        <th>Адрес</th>
        <th>Город</th>
        <th>Страна</th>
      </tr>
      <tr>
        <td>Around the Horn</td>
        <td>120 Hanover Sq.</td>
        <td>London</td>
        <td>UK</td>
      </tr>
      <tr>
        <td>Berglunds snabbkjøp</td>
        <td>Berguvsvägen 8</td>
        <td>Luleå </td>
        <td>Sweden</td>
      </tr>
      <tr>
        <td>Blauer See Delikatessen</td>
        <td>Forsterstr. 57</td>
        <td>Mannheim</td>
        <td>Germany</td>
      </tr>
      <tr>
        <td>Blondel père et fils</td>
        <td>24, place Kléber</td>
        <td>Strasbourg</td>
        <td>France</td>
      </tr>
      <tr>
        <td>Bólido Comidas preparadas</td>
        <td>C/ Araquil, 67</td>
        <td>Madrid</td>
        <td>Spain</td>
      </tr>
      <tr>
        <td>Bottom-Dollar Markets</td>
        <td>23 Tsawassen Blvd.</td>
        <td>Tsawassen</td>
        <td>Canada</td>
      </tr>
    </table>

    <h2>Поставщики</h2>

    <table class="w3-table-all notranslate">
      <tr>
        <th class="db">Поставщик</th>
        <th class="db">Адрес</th>
        <th class="db">Город</th>
        <th class="db">Страна</th>
      </tr>
      <tr>
        <td>Exotic Liquid</td>
        <td>49 Gilbert St.</td>
        <td>London</td>
        <td>UK</td>
      </tr>
      <tr>
        <td>New Orleans Cajun Delights</td>
        <td>P.O. Box 78934</td>
        <td>New Orleans</td>
        <td>USA</td>
      </tr>
      <tr>
        <td>Grandma Kelly's Homestead</td>
        <td>707 Oxford Rd.</td>
        <td>Ann Arbor</td>
        <td>USA</td>
      </tr>
      <tr>
        <td>Tokyo Traders</td>
        <td>9-8 SekimaiMusashino-shi</td>
        <td>Tokyo</td>
        <td>Japan</td>
      </tr>
      <tr>
        <td>Cooperativa de Quesos 'Las Cabras'</td>
        <td>Calle del Rosal 4</td>
        <td>Oviedo</td>
        <td>Spain</td>
      </tr>
      <tr>
        <td>Mayumi's</td>
        <td>92 Setsuko Chuo-ku</td>
        <td>Osaka</td>
        <td>Japan</td>
      </tr>
      <tr>
        <td>Pavlova, Ltd.</td>
        <td>74 Rose St. Moonie Ponds</td>
        <td>Melbourne</td>
        <td>Australia</td>
      </tr>
      <tr>
        <td>Specialty Biscuits, Ltd.</td>
        <td>29 King's Way</td>
        <td>Manchester</td>
        <td>UK</td>
      </tr>
      <tr>
        <td>PB Kn ckebr d AB</td>
        <td>Kaloadagatan 13</td>
        <td>G teborg</td>
        <td>Sweden</td>
      </tr>
      <tr>
        <td>Refrescos Americanas LTDA</td>
        <td>Av. das Americanas 12.890</td>
        <td>S o Paulo</td>
        <td>Brazil</td>
      </tr>
    </table>

    <h2>Продукты</h2>

    <table class="w3-table-all notranslate">
      <tr>
        <th class="db">Продукт</th>
        <th class="db">Количество на единицу</th>
        <th class="db">Цена за единицу</th>
        <th class="db">Единицы на складе</th>
      </tr>
      <tr>
        <td>Chai</td>
        <td>10 boxes x 20 bags</td>
        <td>18</td>
        <td>39</td>
      </tr>
      <tr>
        <td>Chang</td>
        <td>24 - 12 oz bottles</td>
        <td>19</td>
        <td>17</td>
      </tr>
      <tr>
        <td>Aniseed Syrup</td>
        <td>12 - 550 ml bottles</td>
        <td>10</td>
        <td>13</td>
      </tr>
      <tr>
        <td>Chai</td>
        <td>10 boxes x 20 bags</td>
        <td>18</td>
        <td>39</td>
      </tr>
      <tr>
        <td>Chef Anton's Gumbo Mix</td>
        <td>36 boxes</td>
        <td>21</td>
        <td>0</td>
      </tr>
      <tr>
        <td>Grandma's Boysenberry Spread</td>
        <td>12 - 8 oz jars</td>
        <td>25</td>
        <td>120</td>
      </tr>
      <tr>
        <td>Uncle Bob's Organic Dried Pears</td>
        <td>12 - 1 lb pkgs.</td>
        <td>30</td>
        <td>15</td>
      </tr>
      <tr>
        <td>Northwoods Cranberry Sauce</td>
        <td>12 - 12 oz jars</td>
        <td>40</td>
        <td>6</td>
      </tr>
      <tr>
        <td>Mishi Kobe Niku</td>
        <td>18 - 500 g pkgs.</td>
        <td>97</td>
        <td>29</td>
      </tr>
      <tr>
        <td>Ikura</td>
        <td>12 - 200 ml jars</td>
        <td>31</td>
        <td>31</td>
      </tr>
    </table>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_methods.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_case_txt.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>