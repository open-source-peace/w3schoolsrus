<?php include '../include/head_howto.php'; ?>
<title>Как сделать вкладки при наведении? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать вкладки при наведении с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_js_hover_tabs.html' rel='canonical'>
    <style>
        /* Стиль кнопок внутри вкладки */
        /* Стиль вкладки */
        .tab {
            float: left;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
            width: 30%;
            height: 300px;
        }
        /* Стиль кнопок внутри вкладки */
        .tab button {
            display: block;
            background-color: inherit;
            color: black;
            padding: 22px 16px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            font-size: 17px;
        }
        /* Изменить цвет фона кнопок при наведении */
        .tab button:hover {
            background-color: #ddd;
        }
        /* Создать активный/текущий класс "tab button" */
        .tab button.active {
            background-color: #ccc;
        }
        /* Стиль содержимого вкладки */
        .tabcontent {
            float: left;
            padding: 0 12px;
            border: 1px solid #ccc;
            width: 70%;
            border-left: none;
            height: 300px;
            display: none;
        }
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }</style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Вкладки при наведении</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_full_page_tabs.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_topnav.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как менять вкладки при наведении курсора</strong> с помощью CSS и JavaScript.</p>
    <hr>
    <h2>Вкладки при наведении</h2>
    <p>Наведите указатель мыши на одну из кнопок меню, чтобы отобразить содержимое вкладки:</p>

    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'London');" onmouseover="openCity(event, 'London')" id="defaultOpen">Лондон</button>
        <button class="tablinks" onmouseover="openCity(event, 'Paris')">Париж</button>
        <button class="tablinks" onmouseover="openCity(event, 'Tokyo')">Токио</button>
    </div>

    <div id="London" class="tabcontent">
        <h3>London</h3>
        <p>London - столица Англии.</p>
    </div>

    <div id="Paris" class="tabcontent">
        <h3>Paris</h3>
        <p>Paris - столица Франции.</p>
    </div>

    <div id="Tokyo" class="tabcontent">
        <h3>Tokyo</h3>
        <p>Tokyo - столица Японии.</p>
    </div>

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";

        }
        document.getElementById("defaultOpen").click();
    </script>
    <div class="clearfix"></div>

    <a target="_blank" href="../howtotryit/tryhow_js_hover_tabs.html" class="ws-btn w3-margin-top">Попробуйте сами &raquo;</a>

    <?php include '../include/addown_content.php'; ?>

    <h2>Создание перемещаемых вертикальных вкладок</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;tab&quot;&gt;<br>&nbsp; &lt;button class=&quot;tablinks&quot;
            onmouseover=&quot;openCity(event,
            'London')&quot;&gt;London&lt;/button&gt;<br>&nbsp; &lt;button class=&quot;tablinks&quot;
            onmouseover=&quot;openCity(event,
            'Paris')&quot;&gt;Paris&lt;/button&gt;<br>&nbsp; &lt;button class=&quot;tablinks&quot;
            onmouseover=&quot;openCity(event,
            'Tokyo')&quot;&gt;Tokyo&lt;/button&gt;<br>
            &lt;/div&gt;<br><br>&lt;div id=&quot;London&quot; class=&quot;tabcontent&quot;&gt;<br>&nbsp; &lt;h3&gt;London&lt;/h3&gt;<br>&nbsp;
            &lt;p&gt;London is the capital city of England.&lt;/p&gt;<br>&lt;/div&gt;<br><br>&lt;div
            id=&quot;Paris&quot; class=&quot;tabcontent&quot;&gt;<br>&nbsp; &lt;h3&gt;Paris&lt;/h3&gt;<br>&nbsp; &lt;p&gt;Paris
            is the capital of France.&lt;/p&gt; <br>&lt;/div&gt;<br><br>&lt;div id=&quot;Tokyo&quot; class=&quot;tabcontent&quot;&gt;<br>&nbsp;
            &lt;h3&gt;Tokyo&lt;/h3&gt;<br>&nbsp; &lt;p&gt;Tokyo is the capital of Japan.&lt;/p&gt;<br>&lt;/div&gt;</div>
    </div>
    <p>Создайте кнопки, чтобы открывать конкретное содержимое вкладки. Все &lt;div&gt; элементы с <code class="w3-codespan">class=&quot;tabcontent&quot;</code> по умолчанию скрыты (с помощью CSS и JS) - когда пользователь наводит указатель мыши на кнопку - открывается содержимое вкладки что &quot;соответствует&quot; этой кнопке.</p>
    <hr>
    <h5>Шаг 2) Добавить CSS:</h5>
    <p>Стиль кнопок и содержимого вкладки:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Style the tab */<br>.tab {<br>&nbsp; float: left;<br>&nbsp;
            border: 1px solid #ccc;<br>&nbsp; background-color: #f1f1f1;<br>&nbsp;
            width: 30%;<br>&nbsp; height: 300px;<br>}<br>
            <br>/* Стиль кнопок, которые используются для открытия содержимого вкладки */<br>.tab button {<br>
            &nbsp;
            display: block;<br>&nbsp; background-color: inherit;<br>&nbsp;
            color: black;<br>&nbsp;&nbsp;padding: 22px 16px;<br>&nbsp;&nbsp;width: 100%;<br>&nbsp;&nbsp;border: none;<br>
            &nbsp;
            outline: none;<br>&nbsp; text-align: left;<br>&nbsp;
            cursor: pointer;<br>}<br><br>/* Изменить цвет фона кнопок при наведении */<br>.tab button:hover {<br>&nbsp;&nbsp;background-color: #ddd;<br>}<br><br>/* Создать класс активная/текущая &quot;tab button&quot; */<br>.tab button.active {<br>&nbsp; background-color:
            #ccc;<br>}<br><br>/* Стиль содержимого вкладки */<br>.tabcontent {<br>&nbsp;&nbsp;float: left;<br>&nbsp;&nbsp;padding: 0px 12px;<br>
            &nbsp;
            border: 1px solid #ccc;<br>&nbsp; width: 70%;<br>&nbsp;
            border-left: none;<br>&nbsp; height: 300px;<br>&nbsp;
            display: none;<br>}</div>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h5>Шаг 3) Добавить JavaScript:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            function openCity(evt, cityName) {<br>&nbsp;&nbsp;// Объявить все переменные<br>&nbsp; var i, tabcontent, tablinks;<br><br>&nbsp;
            // Получить все элементы с помощью class=&quot;tabcontent&quot; и скрыть их<br>&nbsp; tabcontent = document.getElementsByClassName(&quot;tabcontent&quot;);<br>&nbsp; for (i = 0; i &lt; tabcontent.length; i++) {<br>
            &nbsp;&nbsp;&nbsp; tabcontent[i].style.display = &quot;none&quot;;<br>&nbsp; }<br>
            <br>&nbsp; // Получить все элементы с помощью class=&quot;tablinks&quot; и удалить класс &quot;active&quot;<br>
            &nbsp;
            tablinks = document.getElementsByClassName(&quot;tablinks&quot;);<br>&nbsp; for (i = 0; i &lt;
            tablinks.length; i++) {<br>&nbsp;&nbsp;&nbsp;
            tablinks[i].className = tablinks[i].className.replace(&quot; active&quot;, &quot;&quot;);<br>
            &nbsp; }<br>
            <br>&nbsp;&nbsp;// Показать текущую вкладку и добавить класс &quot;active&quot; на ссылку, открывшую вкладку<br>
            &nbsp;&nbsp;document.getElementById(cityName).style.display = &quot;block&quot;;<br>
            &nbsp;
            evt.currentTarget.className += &quot; active&quot;;<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_js_hover_tabs.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <p><b>Совет:</b> Также посмотрите главу <a href="howto_js_tabs.php">Как сделать - Вкладки</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_full_page_tabs.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_topnav.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>