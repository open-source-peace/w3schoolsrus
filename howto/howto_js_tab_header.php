<?php include '../include/head_howto.php'; ?>
<title>Как сделать заголовки вкладок? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать заголовки вкладок с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_js_tab_header.html' rel='canonical'>
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
        .tablink:hover {
            background-color: #ddd;
        }
        /* Стиль содержимого вкладки */
        .tabcontent {
            color: white;
            display: none;
            padding: 70px 50px;
            text-align: center;
        }
        #London {background-color:#f44336;}
        #Paris {background-color:#04AA6D;}
        #Tokyo {background-color:#2196F3;}
        #Oslo {background-color:#ff5722;}
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Заголовки вкладок</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_vertical_tabs.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_full_page_tabs.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как создавать заголовки вкладок</strong> с помощью CSS и JavaScript.</p>
    <hr>
    <h2>Заголовки вкладок</h2>
    <p>Нажмите на кнопки &quot;города&quot;, чтобы отобразить соответствующий заголовок:</p>

    <div id="London" class="tabcontent">
        <h1>London</h1>
        <p>London - это столица Англии.</p>
    </div>

    <div id="Paris" class="tabcontent">
        <h1>Paris</h1>
        <p>Paris - это столица Франции.</p>
    </div>

    <div id="Tokyo" class="tabcontent">
        <h1>Tokyo</h1>
        <p>Tokyo - это столица Японии.</p>
    </div>

    <div id="Oslo" class="tabcontent">
        <h1>Oslo</h1>
        <p>Oslo - это столица Норвегии.</p>
    </div>

    <button class="tablink" onclick="openCity('London', this, '#f44336')">London</button>
    <button class="tablink" onclick="openCity('Paris', this, '#04AA6D')">Paris</button>
    <button class="tablink" onclick="openCity('Tokyo', this, '#2196F3')" id="defaultOpen">Tokyo</button>
    <button class="tablink" onclick="openCity('Oslo', this, '#ff5722')">Oslo</button>

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
    </script><br><br><br>
    <p style="margin-top:2px"><a target="_blank" href="../howtotryit/tryhow_js_tab_header.html" class="ws-btn">Попробуйте сами &raquo;</a></p>
    <?php include '../include/addown_content.php'; ?>

    <h2>Создание переключаемых заголовков вкладок</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div id=&quot;London&quot; class=&quot;tabcontent&quot;&gt;<br>&nbsp; &lt;h1&gt;London&lt;/h1&gt;<br>&nbsp; &lt;p&gt;London is the
            capital city of England.&lt;/p&gt;<br>&lt;/div&gt;<br><br>&lt;div id=&quot;Paris&quot; class=&quot;tabcontent&quot;&gt;<br>
            &nbsp;
            &lt;h1&gt;Paris&lt;/h1&gt;<br>&nbsp; &lt;p&gt;Paris is the capital of France.&lt;/p&gt; <br>&lt;/div&gt;<br><br>
            &lt;div id=&quot;Tokyo&quot; class=&quot;tabcontent&quot;&gt;<br>&nbsp; &lt;h1&gt;Tokyo&lt;/h1&gt;<br>&nbsp; &lt;p&gt;Tokyo is the
            capital of Japan.&lt;/p&gt;<br>&lt;/div&gt;<br><br>&lt;div id=&quot;Oslo&quot; class=&quot;tabcontent&quot;&gt;<br>
            &nbsp;
            &lt;h1&gt;Oslo&lt;/h1&gt;<br>&nbsp; &lt;p&gt;Oslo is the capital of Norway.&lt;/p&gt;<br>&lt;/div&gt;<br><br>
            &lt;button class=&quot;tablink&quot; onclick=&quot;openCity('London', this, 'red')&quot; id=&quot;defaultOpen&quot;&gt;London&lt;/button&gt;<br>
            &lt;button class=&quot;tablink&quot; onclick=&quot;openCity('Paris', this,
            'green')&quot;&gt;Paris&lt;/button&gt;<br>&lt;button class=&quot;tablink&quot; onclick=&quot;openCity('Tokyo',
            this, 'blue')&quot;&gt;Tokyo&lt;/button&gt;<br>&lt;button class=&quot;tablink&quot; onclick=&quot;openCity('Oslo',
            this, 'orange')&quot;&gt;Oslo&lt;/button&gt;</div>
    </div>
    <p>Создавайте кнопки для открытия определенного содержимого вкладки. Все &lt;div&gt; элементы с <code class="w3-codespan">class=&quot;tabcontent&quot;</code> скрыты по умолчанию
        (с помощью CSS &amp; JS). Когда пользователь нажимает кнопку, он открывает содержимое вкладки, которое &quot;соответствует&quot; этой кнопке.</p>
    <hr>
    <h5>Шаг 2) Добавить CSS:</h5>
    <p>Стиль кнопок и содержимого вкладки:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Стиль кнопок вкладок */<br>.tablink {<br>&nbsp;&nbsp;background-color: #555;<br>
            &nbsp; color: white;<br>&nbsp; float: left;<br>&nbsp; border: none;<br>&nbsp;&nbsp;outline: none;<br>&nbsp; cursor: pointer;<br>
            &nbsp; padding: 14px 16px;<br>&nbsp; font-size: 17px;<br>&nbsp;&nbsp;width: 25%;<br>}<br>
            <br>/* Изменить цвет фона кнопок при наведении курсора */<br>.tablink:hover {<br>&nbsp;&nbsp;background-color: #777;<br>}<br><br>/* Set default styles for tab content */<br>.tabcontent
            {<br>&nbsp;&nbsp;color: white;<br>&nbsp;&nbsp;display: none;<br>&nbsp;
            padding: 50px;<br>&nbsp; text-align: center;<br>}<br><br>/* Стилизуйте содержимое каждой вкладки индивидуально */ <br>#London {background-color:red;}<br>#Paris {background-color:green;}<br>
            #Tokyo {background-color:blue;}<br>#Oslo {background-color:orange;}<br></div>
    </div>
    <hr>

    <h5>Шаг 3) Добавить JavaScript:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            function openCity(cityName, elmnt, color) {<br>&nbsp; // Скрыть все элементы с class=&quot;tabcontent&quot; по умолчанию */<br>&nbsp; var i,
            tabcontent, tablinks;<br>&nbsp; tabcontent = document.getElementsByClassName(&quot;tabcontent&quot;);<br>&nbsp; for (i = 0; i &lt; tabcontent.length; i++) {<br>&nbsp;&nbsp;&nbsp;
            tabcontent[i].style.display = &quot;none&quot;;<br>&nbsp;&nbsp;}<br><br>&nbsp; // Удалите цвет фона всех ссылок / кнопок вкладок<br>&nbsp;&nbsp;tablinks = document.getElementsByClassName(&quot;tablink&quot;);<br>&nbsp;&nbsp;for (i = 0; i &lt; tablinks.length; i++) {<br>&nbsp;&nbsp;&nbsp;&nbsp;tablinks[i].style.backgroundColor = &quot;&quot;;<br>
            &nbsp;&nbsp;}<br><br>&nbsp;&nbsp;// Показать конкретное содержимое вкладки<br>&nbsp;&nbsp;document.getElementById(cityName).style.display = &quot;block&quot;;<br><br>&nbsp;&nbsp;// Добавить the specific color to the button used to open the tab content<br>&nbsp;&nbsp;elmnt.style.backgroundColor = color;<br>}<br><br>// Получить элемент с id=&quot;defaultOpen&quot; и кликнуть на нём<br>document.getElementById(&quot;defaultOpen&quot;).click();</div>
        <a target="_blank" href="../howtotryit/tryhow_js_tab_header.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><b>Совет:</b> Также посмотрите главу <a href="howto_js_tabs.php">Как сделать - Вкладки</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_vertical_tabs.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_full_page_tabs.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>