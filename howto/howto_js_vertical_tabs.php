<?php include '../include/head_howto.php'; ?>
<title>Как сделать вертикальные вкладки? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать вертикальные вкладки с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_js_vertical_tabs.html' rel='canonical'>
    <style>
        ul.tab {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }
        /* Расположите элементы списка рядом */
        ul.tab li {float: left;}
        /* Стиль ссылок внутри элементов списка */
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
        /* Изменить цвет фона ссылок при наведении */
        ul.tab li a:hover {
            background-color: #ddd;
        }
        /* Создайте активный / текущий класс tablink */
        ul.tab li a:focus, .active {
            background-color: #ccc;
        }
        /* Стиль содержимого вкладки */
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
    <h1>Как сделать - Вертикальные вкладки</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_tabs.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_tab_header.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как создать вертикальное меню вкладок</strong> с помощью CSS и JavaScript.</p>
    <hr>
    <h2>Вертикальные вкладки</h2>
    <p style="font-family: 'Lato', sans-serif;font-size:16px">Вкладки идеально подходят для одностраничных веб-приложений или для веб-страниц, способных отображать различные темы.</p>

    <iframe src="../howtotryit/tryhow_js_vertical_tabs_ifr.html" style="width:100%;height:425px;border:1px solid #f1f1f1;margin:0 -8px"></iframe>
    <p style="margin-top:7px"><a target="_blank" href="../howtotryit/tryhow_js_vertical_tabs.html" class="ws-btn">Попробуйте сами &raquo;</a></p>
    <hr>

    <h2>Создание переключаемых вертикальных вкладок</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;tab&quot;&gt;<br>&nbsp; &lt;button class=&quot;tablinks&quot; onclick=&quot;openCity(event,
            'London')&quot;&gt;London&lt;/button&gt;<br>&nbsp; &lt;button class=&quot;tablinks&quot; onclick=&quot;openCity(event,
            'Paris')&quot;&gt;Paris&lt;/button&gt;<br>&nbsp; &lt;button class=&quot;tablinks&quot; onclick=&quot;openCity(event,
            'Tokyo')&quot;&gt;Tokyo&lt;/button&gt;<br>&lt;/div&gt;<br><br>&lt;div id=&quot;London&quot; class=&quot;tabcontent&quot;&gt;<br>&nbsp; &lt;h3&gt;London&lt;/h3&gt;<br>&nbsp; &lt;p&gt;London is the capital city of England.&lt;/p&gt;<br>&lt;/div&gt;<br><br>&lt;div id=&quot;Paris&quot; class=&quot;tabcontent&quot;&gt;<br>&nbsp; &lt;h3&gt;Paris&lt;/h3&gt;<br>&nbsp; &lt;p&gt;Paris is the capital of France.&lt;/p&gt; <br>&lt;/div&gt;<br><br>&lt;div id=&quot;Tokyo&quot; class=&quot;tabcontent&quot;&gt;<br>&nbsp; &lt;h3&gt;Tokyo&lt;/h3&gt;<br>&nbsp; &lt;p&gt;Tokyo is the capital of Japan.&lt;/p&gt;<br>&lt;/div&gt;</div>
    </div>
    <p>Создавайте кнопки для открытия определенного содержимого вкладки. Все элементы &lt;div&gt; с <code class="w3-codespan">class=&quot;tabcontent&quot;</code> скрыты по умолчанию (с помощью CSS &amp; JS) - когда пользователь нажимает кнопку - он открывает содержимое вкладки, которому &quot;соответствует&quot; эта кнопка.</p>
    <hr>
    <h5>Шаг 2) Добавить CSS:</h5>
    <p>Стиль кнопок и содержимого вкладки:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            * {box-sizing: border-box}<br><br>/* Стиль вкладок */<br>.tab {<br>&nbsp;&nbsp;float: left;<br>&nbsp;&nbsp;border: 1px solid #ccc;<br>&nbsp; background-color: #f1f1f1;<br>&nbsp; width: 30%;<br>&nbsp; height: 300px;<br>}<br>
            <br>/* Стиль кнопок, которые используются для открытия содержимого вкладки */<br>.tab button {<br>&nbsp;
            display: block;<br>&nbsp; background-color: inherit;<br>&nbsp;color: black;<br>&nbsp; padding: 22px 16px;<br>&nbsp;
            width: 100%;<br>&nbsp; border: none;<br>&nbsp; outline: none;<br>&nbsp; text-align: left;<br>&nbsp;&nbsp;cursor: pointer;<br>&nbsp;&nbsp;transition: 0.3s;<br>}<br><br>/* Изменить цвет фона кнопок при наведении */<br>.tab button:hover {<br>&nbsp;&nbsp;background-color: #ddd;<br>}<br><br>/* Создать активный/текущий &quot;tab button&quot;
            class */<br>.tab button.active {<br>&nbsp;&nbsp;background-color:
            #ccc;<br>}<br><br>/* Стиль содержимого вкладки */<br>.tabcontent {<br>&nbsp;
            float: left;<br>&nbsp; padding: 0px 12px;<br>&nbsp;
            border: 1px solid #ccc;<br>&nbsp; width: 70%;<br>&nbsp;&nbsp;border-left: none;<br>
            &nbsp; height: 300px;<br>}</div>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h5>Шаг 3) Добавить JavaScript:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            function openCity(evt, cityName) {<br>&nbsp; // Объявить все переменные<br>&nbsp; var i, tabcontent, tablinks;<br><br>&nbsp;
            // Получите все элементы с class=&quot;tabcontent&quot; and hide them<br>&nbsp; tabcontent
            = document.getElementsByClassName(&quot;tabcontent&quot;);<br>&nbsp; for (i = 0; i &lt; tabcontent.length; i++) {<br>
            &nbsp;&nbsp;&nbsp; tabcontent[i].style.display = &quot;none&quot;;<br>&nbsp; }<br>
            <br>&nbsp;&nbsp;// Получить все элементы с помощью class=&quot;tablinks&quot; и удалить класс &quot;active&quot;<br>
            &nbsp;
            tablinks = document.getElementsByClassName(&quot;tablinks&quot;);<br>&nbsp; for (i = 0; i &lt;
            tablinks.length; i++) {<br>&nbsp;&nbsp;&nbsp;
            tablinks[i].className = tablinks[i].className.replace(&quot; active&quot;, &quot;&quot;);<br>
            &nbsp; }<br>
            <br>&nbsp; // Показать текущую вкладку и добавить класс &quot;active&quot; на ссылку, открывшую вкладку<br>
            &nbsp;&nbsp;document.getElementById(cityName).style.display = &quot;block&quot;;<br>
            &nbsp;&nbsp;evt.currentTarget.className += &quot; active&quot;;<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_js_vertical_tabs.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><b>Совет:</b> Также вы можете посмотреть главу <a href="howto_js_tabs.php">Как сделать - Горизонтальные вкладки</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_tabs.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_tab_header.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>