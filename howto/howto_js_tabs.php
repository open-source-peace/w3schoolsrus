<?php include '../include/head_howto.php'; ?>
<title>Как сделать меню-вкладки? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать меню-вкладки с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_js_tabs.html' rel='canonical'>
    <style>
        ul.tab {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }
        /* Float the list items side by side */
        ul.tab li {float: left;}
        /* Style the links inside the list items */
        ul.tab li a {
            font-family: "Lato", sans-serif;
            display: inline-block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            transition: 0.3s;
            font-size: 17px;
        }
        /* Change background color of links on hover */
        ul.tab li a:hover {
            background-color: #ddd;
        }
        /* Create an active/current tablink class */
        ul.tab li a:focus, .active {
            background-color: #ccc;
        }
        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            -webkit-animation: fadeEffect 1s;
            animation: fadeEffect 1s;
        }
        @-webkit-keyframes fadeEffect {
            from {opacity: 0;}
            to {opacity: 1;}
        }
        @keyframes fadeEffect {
            from {opacity: 0;}
            to {opacity: 1;}
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - меню-вкладки</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_accordion.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_vertical_tabs.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как создавать вкладки</strong> с помощью CSS и JavaScript.</p>
    <hr>
    <h2>Вкладки</h2>
    <p>Вкладки идеально подходят для одностраничных веб-приложений или для веб-страниц, способных отображать различные темы:</p>

    <ul class="tab">
        <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'London')">London</a></li>
        <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Paris')">Paris</a></li>
        <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></li>
    </ul>

    <div style="border:1px solid #ccc;border-top:none;">
        <div id="London" class="tabcontent">
            <h3>London</h3>
            <p>London - это столица Англии.</p>
        </div>

        <div id="Paris" class="tabcontent">
            <h3>Paris</h3>
            <p>Paris - это столица Франции.</p>
        </div>

        <div id="Tokyo" class="tabcontent">
            <h3>Tokyo</h3>
            <p>Tokyo - это столица Японии.</p>
        </div>
    </div>
    <p><a target="_blank" href="../howtotryit/tryhow_js_tabs.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a></p>

    <script>
        openCity(event, "London")
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tabcontent.length; i++) {
                tablinks[i].classList.remove("active");
            }
            document.getElementById(cityName).style.display = "block";
            if (evt) {evt.currentTarget.classList.add("active");}
        }
    </script>
    <script>
        var mybtn = document.getElementsByClassName("tablinks")[0];
        mybtn.click();
    </script>
    <?php include '../include/addown_content.php'; ?>

    <h2>Создать переключаемые вкладки</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!-- Ссылки на вкладки --&gt;<br>&lt;div class=&quot;tab&quot;&gt;<br>&nbsp; &lt;button class=&quot;tablinks&quot; onclick=&quot;openCity(event, 'London')&quot;&gt;London&lt;/button&gt;<br>&nbsp; &lt;button class=&quot;tablinks&quot; onclick=&quot;openCity(event,
            'Paris')&quot;&gt;Paris&lt;/button&gt;<br>&nbsp; &lt;button class=&quot;tablinks&quot; onclick=&quot;openCity(event,
            'Tokyo')&quot;&gt;Tokyo&lt;/button&gt;<br>
            &lt;/div&gt;<br><br>&lt;!-- Содержимое вкладок --&gt;<br>&lt;div id=&quot;London&quot; class=&quot;tabcontent&quot;&gt;<br>&nbsp; &lt;h3&gt;London&lt;/h3&gt;<br>&nbsp;
            &lt;p&gt;London - это столица Англии.&lt;/p&gt;<br>&lt;/div&gt;<br><br>&lt;div
            id=&quot;Paris&quot; class=&quot;tabcontent&quot;&gt;<br>&nbsp; &lt;h3&gt;Paris&lt;/h3&gt;<br>&nbsp; &lt;p&gt;Paris
            - это столица Франции.&lt;/p&gt; <br>&lt;/div&gt;<br><br>&lt;div id=&quot;Tokyo&quot; class=&quot;tabcontent&quot;&gt;<br>&nbsp;
            &lt;h3&gt;Tokyo&lt;/h3&gt;<br>&nbsp; &lt;p&gt;Tokyo - это столица Японии.&lt;/p&gt;<br>&lt;/div&gt;</div>
    </div>
    <p>Создайте кнопки для открытия определенного содержимого вкладки. Все &lt;div&gt; элементы с <code class="w3-codespan">class=&quot;tabcontent&quot;</code> скрыты по умолчанию (с помощью CSS &amp; JS). Когда пользователь нажимает кнопку, он открывает содержимое вкладки, которое &quot;соответствует&quot; этой кнопке.</p>
    <hr>
    <h5>Шаг 2) Добавить CSS:</h5>
    <p>Стиль кнопок и содержимого вкладки:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Стиль вкладки */<br>.tab {<br>&nbsp; overflow: hidden;<br>&nbsp;
            border: 1px solid #ccc;<br>&nbsp; background-color: #f1f1f1;<br>}<br>
            <br>/* Стиль кнопок, которые используются для открытия содержимого вкладки */<br>.tab button {<br>
            &nbsp; background-color: inherit;<br>&nbsp; float: left;<br>&nbsp;
            border: none;<br>&nbsp;&nbsp;outline: none;<br>&nbsp;&nbsp;cursor: pointer;<br>&nbsp;&nbsp;padding: 14px 16px;<br>&nbsp;&nbsp;transition: 0.3s;<br>}<br><br>/* Изменить цвет фона кнопок при наведении */<br>.tab button:hover {<br>&nbsp; background-color: #ddd;<br>
            }<br><br>/* Создайте активный / текущий класс tablink */<br>.tab button.active
            {<br>&nbsp;&nbsp;background-color: #ccc;<br>}<br><br>/* Стиль содержимого вкладки */<br>.tabcontent {<br>
            &nbsp; display: none;<br>&nbsp; padding: 6px 12px;<br>&nbsp;&nbsp;border: 1px solid #ccc;<br>&nbsp;&nbsp;border-top: none;<br>}</div>
    </div>
    <hr>

    <h5>Шаг 3) Добавить JavaScript:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            function openCity(evt, cityName) {<br>&nbsp;&nbsp;// Declare all
            variables<br>&nbsp; var i, tabcontent, tablinks;<br><br>&nbsp;
            // Получите все элементы с class=&quot;tabcontent&quot; и спрячьте их<br>&nbsp; tabcontent
            = document.getElementsByClassName(&quot;tabcontent&quot;);<br>&nbsp; for (i = 0; i &lt; tabcontent.length; i++) {<br>
            &nbsp;&nbsp;&nbsp; tabcontent[i].style.display = &quot;none&quot;;<br>&nbsp;&nbsp;}<br>
            <br>&nbsp; // Получите все элементы с class=&quot;tablinks&quot; и удалите класс &quot;active&quot;<br>
            &nbsp;&nbsp;tablinks = document.getElementsByClassName(&quot;tablinks&quot;);<br>&nbsp;&nbsp;for (i = 0; i &lt;
            tablinks.length; i++) {<br>&nbsp;&nbsp;&nbsp; tablinks[i].className = tablinks[i].className.replace(&quot; active&quot;, &quot;&quot;);<br>&nbsp; }<br>
            <br>&nbsp;&nbsp;// Показать текущую вкладку и добавить класс &quot;active&quot; к кнопке, открывшей вкладку<br>
            &nbsp;&nbsp;document.getElementById(cityName).style.display = &quot;block&quot;;<br>
            &nbsp;&nbsp;evt.currentTarget.className += &quot; active&quot;;<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_js_tabs.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Затухание (исчезание) вкладок:</h2>
    <p>Если вы хотите, чтобы содержимое вкладки исчезло, добавьте следующий CSS:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .tabcontent {<br>&nbsp;&nbsp;animation: fadeEffect 1s; /* Эффект затухания длится 1 секунду */<br>}<br><br>/* От нуля до полной непрозрачности */<br>@keyframes fadeEffect {<br>&nbsp;&nbsp;from {opacity: 0;}<br>&nbsp; to {opacity: 1;}<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_js_tabs_fade.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Показывать вкладку по умолчанию</h2>
    <p>Чтобы открыть определенную вкладку при загрузке страницы, используйте JavaScript, чтобы кликать по указанной кнопке вкладки:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;button class=&quot;tablinks&quot; onclick=&quot;openCity(event, 'London')&quot; id=&quot;defaultOpen&quot;&gt;London&lt;/button&gt;<br><br>&lt;script&gt;<br>
            // Получите элемент с id=&quot;defaultOpen&quot; и кликните на нём<br>
            document.getElementById(&quot;defaultOpen&quot;).click();<br>&lt;/script&gt;</div>
        <a target="_blank" href="../howtotryit/tryhow_js_tabs_open.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Закрыть вкладку</h2>
    <p>Если вы хотите закрыть определенную вкладку, используйте JavaScript, чтобы скрыть вкладку одним нажатием кнопки:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!-- Кликните на элементе &lt;span&gt;, чтобы закрыть вкладку --&gt;<br><br>&lt;div id=&quot;London&quot; class=&quot;tabcontent&quot;&gt;<br>&nbsp; &lt;h3&gt;London&lt;/h3&gt;<br>&nbsp; &lt;p&gt;London - это столица Англии.&lt;/p&gt;<br>&nbsp; &lt;span onclick=&quot;this.parentElement.style.display='none'&quot;&gt;x&lt;/span&gt;
            <br>&lt;/div&gt;</div>
        <a target="_blank" href="../howtotryit/tryhow_js_tabs_close.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p><b>Совет:</b> Также вы можете посетить главу <a href="howto_js_vertical_tabs.php">Как сделать - Вертикальные вкладки</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_accordion.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_vertical_tabs.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>