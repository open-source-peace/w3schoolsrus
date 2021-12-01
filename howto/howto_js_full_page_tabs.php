<?php include '../include/head_howto.php'; ?>
<title>Как сделать вкладки полной страницы? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать вкладки полной страницы с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_js_full_page_tabs.html' rel='canonical'>
    <style>
        /* Стиль кнопок внутри вкладки */
        .tablink {
            background-color: #eee;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            font-size: 17px;
            width: 25%;
        }
        /* Изменить цвет фона кнопок при наведении курсора */
        .tablink:hover {background-color: #ddd;}
        /* Стиль содержимого вкладки */
        .tabcontent {color: white;display: none;padding: 100px 50px;}
        #London {background-color:#f44336;}
        #Paris {background-color:#04AA6D;}
        #Tokyo {background-color:#2196F3;}
        #Oslo {background-color:#ff5722;}
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Вкладки полной страницы</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_tab_header.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_hover_tabs.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как создавать вкладки на всю страницу</strong>, которые покрывают все окно браузера, с помощью CSS и JavaScript.</p>
    <hr>
    <h2>Вкладки на всю страницу</h2>
    <p>Кликните ссылки, чтобы отобразить &quot;текущую&quot; страницу:</p>

    <button class="tablink" onclick="openCity('London', this, '#f44336')">Home</button>
    <button class="tablink" onclick="openCity('Paris', this, '#04AA6D')" id="defaultOpen">News</button>
    <button class="tablink" onclick="openCity('Tokyo', this, '#2196F3')">Contact</button>
    <button class="tablink" onclick="openCity('Oslo', this, '#ff5722')">About</button>

    <div id="London" class="tabcontent">
        <h1>Домашняя страница</h1>
        <p>Дом там, где сердце...</p>
    </div>

    <div id="Paris" class="tabcontent">
        <h1>Новости</h1>
        <p>Некоторые новости в этот прекрасный день!</p>
    </div>

    <div id="Tokyo" class="tabcontent">
        <h1>Контакты</h1>
        <p>Свяжитесь с нами или зайдите на чашку кофе.</p>
    </div>

    <div id="Oslo" class="tabcontent">
        <h1>О нас</h1>
        <p>Кто мы и что мы делаем.</p>
    </div>
    <script>
        function openCity(cityName,elmnt,color) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
                tablinks[i].style.color = "";
            }
            document.getElementById(cityName).style.display = "block";
            elmnt.style.backgroundColor = color;
            elmnt.style.color = "white";

        }
        // Получите элемент с id="defaultOpen" и кликните по нему
        document.getElementById("defaultOpen").click();
    </script><br>
    <p style="margin-top:2px">
        <a target="_blank" href="../howtotryit/tryhow_js_full_page_tabs.html" class="ws-btn">Попробуйте сами &raquo;</a></p>
    <hr>

    <h2>Создание вкладок на одной странице</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;button class=&quot;tablink&quot; onclick=&quot;openPage('Home', this, 'red')&quot;&gt;Home&lt;/button&gt;<br>
            &lt;button class=&quot;tablink&quot; onclick=&quot;openPage('News', this, 'green')&quot;
            id=&quot;defaultOpen&quot;&gt;News&lt;/button&gt;<br>&lt;button class=&quot;tablink&quot; onclick=&quot;openPage('Contact',
            this, 'blue')&quot;&gt;Contact&lt;/button&gt;<br>&lt;button class=&quot;tablink&quot; onclick=&quot;openPage('About',
            this, 'orange')&quot;&gt;About&lt;/button&gt;<br><br>&lt;div id=&quot;Home&quot; class=&quot;tabcontent&quot;&gt;<br>&nbsp; &lt;h3&gt;Home&lt;/h3&gt;<br>&nbsp; &lt;p&gt;Home
            is where the heart is..&lt;/p&gt;<br>&lt;/div&gt;<br><br>&lt;div id=&quot;News&quot; class=&quot;tabcontent&quot;&gt;<br>&nbsp;
            &lt;h3&gt;News&lt;/h3&gt;<br>&nbsp; &lt;p&gt;Some news this fine day!&lt;/p&gt; <br>&lt;/div&gt;<br><br>&lt;div
            id=&quot;Contact&quot; class=&quot;tabcontent&quot;&gt;<br>&nbsp; &lt;h3&gt;Contact&lt;/h3&gt;<br>&nbsp; &lt;p&gt;Get
            in touch, or swing by for a cup of coffee.&lt;/p&gt;<br>&lt;/div&gt;<br><br>&lt;div id=&quot;About&quot; class=&quot;tabcontent&quot;&gt;<br>&nbsp;
            &lt;h3&gt;About&lt;/h3&gt;<br>&nbsp; &lt;p&gt;Who we are and what we do.&lt;/p&gt;<br>&lt;/div&gt;</div>
    </div>
    <p>Создайте кнопки для открытия определенного содержимого вкладки. Все &lt;div&gt; элементы с <code class="w3-codespan">class=&quot;tabcontent&quot;</code> скрыты по умолчанию
        (с помощью CSS &amp; JS). Когда пользователь нажимает кнопку, он открывает содержимое вкладки, которое &quot;соответствует&quot; этой кнопке.</p>
    <?php include '../include/addown_content.php'; ?>
    <h5>Шаг 2) Добавить CSS:</h5>
    <p>Стиль ссылок и содержимого вкладки (полная страница):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Установите высоту тела и документа на 100%, чтобы активировать &quot;вкладки на всю страницу&quot; */<br>
            body, html {<br>&nbsp;
            height: 100%;<br>&nbsp; margin: 0;<br>&nbsp; font-family: Arial;<br>}<br><br>/* Style tab links */<br>
            .tablink {<br>&nbsp; background-color: #555;<br>&nbsp; color: white;<br>&nbsp;
            float: left;<br>&nbsp; border: none;<br>&nbsp; outline: none;<br>&nbsp;
            cursor: pointer;<br>&nbsp; padding: 14px 16px;<br>&nbsp; font-size: 17px;<br>&nbsp;
            width: 25%;<br>}<br><br>.tablink:hover {<br>&nbsp;
            background-color: #777;<br>}<br><br>/* Style the tab content (and add
            height:100% for full page content) */<br>.tabcontent {<br>&nbsp; color: white;<br>&nbsp;
            display: none;<br>&nbsp; padding: 100px 20px;<br>&nbsp; height: 100%;<br>}<br><br>#Home
            {background-color: red;}<br>#News {background-color: green;}<br>#Contact
            {background-color: blue;}<br>#About {background-color: orange;}<br></div>
    </div>
    <hr>
    <div id="midcontentadcontainer" style="overflow:auto;text-align:center">
      <?php include '../include/adup_content.php'; ?>
    </div>
    <hr>

    <h5>Шаг 3) Добавить JavaScript:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            function
            openPage(pageName, elmnt, color) {<br>&nbsp;&nbsp;// Hide all
            elements with class=&quot;tabcontent&quot; by default */<br>&nbsp;&nbsp;var i,
            tabcontent, tablinks;<br>&nbsp; tabcontent =
            document.getElementsByClassName(&quot;tabcontent&quot;);<br>&nbsp; for (i =
            0; i &lt; tabcontent.length; i++) {<br>&nbsp;&nbsp;&nbsp;
            tabcontent[i].style.display = &quot;none&quot;;<br>&nbsp; }<br>
            <br>&nbsp; // Remove the background color of all tablinks/buttons<br>&nbsp;
            tablinks = document.getElementsByClassName(&quot;tablink&quot;);<br>&nbsp;
            for (i = 0; i &lt; tablinks.length; i++) {<br>&nbsp;&nbsp;&nbsp;
            tablinks[i].style.backgroundColor = &quot;&quot;;<br>&nbsp;&nbsp;}<br>
            <br>&nbsp; // Show the specific tab content<br>&nbsp;&nbsp;document.getElementById(pageName).style.display = &quot;block&quot;;<br><br>
            &nbsp;
            // Добавить the specific color to the button used to open the tab content<br>&nbsp;&nbsp;elmnt.style.backgroundColor = color;<br>}<br><br>// Get the element with id=&quot;defaultOpen&quot;
            and click on it<br>document.getElementById(&quot;defaultOpen&quot;).click();</div>
        <a target="_blank" href="../howtotryit/tryhow_js_full_page_tabs.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><b>Совет:</b> Также посмотрите главу <a href="howto_js_tabs.php">Как сделать - Вкладки</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_tab_header.php">&#10094; Previous</a>
        <a class="w3-right ws-btn" href="howto_js_hover_tabs.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>