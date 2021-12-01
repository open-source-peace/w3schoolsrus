<?php include '../include/head_howto.php'; ?>
<title>Как сделать off-canvas меню? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать off-canvas меню с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_js_off-canvas.html' rel='canonical'>
    <style>
        .overlay3 {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 3;
            top: 0;
            left:0;
            background-color: rgba(0,0,0, 0.9);
            overflow-y: auto;
            overflow-x: hidden;
            text-align: center;
            opacity:0;
            transition: opacity 1s;
        }
        body {
            transition: background-color .5s;
        }
        .offcanvas2 {
            display: none;
            height: 100%;
            width: 250px;
            background-color: #111;
            top: 0;
            left: 0;
            position: fixed;
            z-index: 3;
            overflow-x: hidden;
            transition: .5s;
            padding-top: 60px;
        }
        .offcanvas {
            height: 100%;
            width: 0;
            top: 0;
            left: 0;
            background-color: #111;
            position: fixed;
            z-index: 3;
            overflow-x: hidden;
            transition: .5s;
            padding-top: 60px;
        }
        .offcanvas a,.offcanvas2 a {
            padding: 8px 8px 8px 32px;
            text-decoration: none !important;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: .3s
        }
        .offcanvas a:hover, .offcanvas a:focus,.offcanvas2 a:hover{
            color: #f1f1f1;
        }
        .closeOffcanvas {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px !important;
            margin-left: 50px;
        }
        #mainContent {
            transition: margin-left .5s;
        }
        @media screen and (max-height: 500px) {
            .offcanvas {padding-top:15px;}
            .offcanvas a {font-size: 18px;}
        }
        .sidenav5 {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 3;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            text-align:center;
        }
        .sidenav5 a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s

        }
        .sidenav5 a:hover{
            color: #f1f1f1;
        }
        .sidenav5 .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px !important;
            margin-left: 50px;
        }
        @media screen and (max-height: 450px) {
            .sidenav5 {padding-top: 15px;}
            .sidenav5 a {font-size: 18px;}
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Off-Canvas меню</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_fullscreen_overlay.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_sidenav_buttons.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как сделать off-canvas меню</strong> на сайте.</p>
    <hr>
    <div id="myCanvasNav" class="overlay3" onclick="closeOffcanvas()"></div>
    <div id="myOffcanvas" class="offcanvas">
        <a href="javascript:void(0)" class="closeOffcanvas" onclick="closeOffcanvas()">&times;</a>
        <a href="javascript:void(0)">Про нас</a>
        <a href="javascript:void(0)">Сервисы</a>
        <a href="javascript:void(0)">Клиенты</a>
        <a href="javascript:void(0)">Контакты</a>
    </div>
    <div id="myOffcanvas2" class="offcanvas2">
        <a href="javascript:void(0)" class="closeOffcanvas" onclick="closeOffcanvas2()">&times;</a>
        <a href="javascript:void(0)">Про нас</a>
        <a href="javascript:void(0)">Сервисы</a>
        <a href="javascript:void(0)">Клиенты</a>
        <a href="javascript:void(0)">Контакты</a>
    </div>

    <div id="mySidenav" class="sidenav5">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav4()">&times;</a>
        <a href="#">Про нас</a>
        <a href="#">Сервисы</a>
        <a href="#">Клиенты</a>
        <a href="#">Контакты</a>
    </div>

    <button class="ws-btn w3-dark-grey w3-padding w3-margin-bottom" onclick="openOffcanvas()">Открыть Off-Canvas меню</button><br>
    <button class="ws-btn w3-dark-grey w3-padding w3-margin-bottom" onclick="openNav3();openOffcanvas()">Off-Canvas меню с/непрозрачностью</button><br>
    <script>
        function openOffcanvas() {
            document.getElementById("myOffcanvas").style.width = "250px";
            document.getElementById("mainContent").style.marginLeft = "250px";
        }
        function openNav3() {
            document.getElementById("myCanvasNav").style.width = "100%";
            document.getElementById("myCanvasNav").style.opacity = "0.8";
        }
        function closeOffcanvas() {
            document.getElementById("myOffcanvas").style.width = "0%";
            document.getElementById("mainContent").style.marginLeft= "0%";
            document.body.style.backgroundColor = "white";
            document.getElementById("myCanvasNav").style.width = "0%";
            document.getElementById("myCanvasNav").style.opacity = "0";
        }
        function closeOffcanvas2() {
            document.getElementById("myOffcanvas2").style.display = "none";
        }
    </script>

    <a target="_blank" href="../howtotryit/tryhow_js_sidenav_push.html" class="ws-btn">Попробуйте сами &raquo;</a>
    <hr>

    <h2>Создать Off-Canvas меню</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div id=&quot;mySidenav&quot; class=&quot;sidenav&quot;&gt;<br>&nbsp; &lt;a href=&quot;javascript:void(0)&quot;
            class=&quot;closebtn&quot; onclick=&quot;closeNav()&quot;&gt;&amp;times;&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#&quot;&gt;Про нас&lt;/a&gt;<br>&nbsp;&lt;a href=&quot;#&quot;&gt;Сервисы&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#&quot;&gt;Клиенты&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#&quot;&gt;Контакты&lt;/a&gt;<br>&lt;/div&gt;<br><br>&lt;!-- Используйте любой элемент, чтобы открыть боковую навигацию --&gt;<br>&lt;span onclick=&quot;openNav()&quot;&gt;open&lt;/span&gt;<br>
            <br>&lt;!-- Добавьте все содержимое страницы в этот div, если вы хотите, чтобы боковая навигационная панель перемещала содержимое страницы вправо (не используется, если вы хотите, чтобы боковая навигация располагалась сверху страницы --&gt;<br>&lt;div id=&quot;main&quot;&gt;<br>&nbsp; ...<br>&lt;/div&gt;</div>
    </div>
    <hr>
    <h5>Шаг 2) Добавить CSS:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Боковое меню навигации */<br>.sidenav {<br>&nbsp;&nbsp;height: 100%; /*
            100% всей ширины */<br>&nbsp;&nbsp;width: 0; /* 0 width - измените с помощью JavaScript */<br>&nbsp;&nbsp;position: fixed; /* Оставаться на месте */<br>&nbsp; z-index: 1; /* Оставаться вверху */<br>&nbsp; top: 0;<br>&nbsp; left: 0;<br>&nbsp;&nbsp;background-color: #111; /* Черный*/<br>&nbsp;&nbsp;overflow-x: hidden; /* Отключить горизонтальную прокрутку */<br>&nbsp;&nbsp;padding-top: 60px; /* Поместите контент на 60px сверху */<br>&nbsp;&nbsp;transition: 0.5s; /* 0,5-секундный эффект перехода для скольжения в боковой навигации */<br>
            }<br><br>/* Ссылки в меню навигации */<br>.sidenav a {<br>&nbsp; padding: 8px 8px 8px 32px;<br>
            &nbsp; text-decoration: none;<br>&nbsp; font-size: 25px;<br>&nbsp; color: #818181;<br>&nbsp;&nbsp;display: block;<br>&nbsp;&nbsp;transition: 0.3s;<br>}<br><br>/* Когда вы наводите указатель мыши на ссылки навигации, меняется их цвет */<br>.sidenav a:hover {<br>&nbsp;&nbsp;color: #f1f1f1;<br>}<br><br>/* Расположите и стилизуйте кнопку закрытия (правый верхний угол) */<br>.sidenav .closebtn {<br>&nbsp; position:
            absolute;<br>&nbsp; top: 0;<br>&nbsp; right: 25px;<br>&nbsp; font-size: 36px;<br>&nbsp; margin-left: 50px;<br>}<br>
            <br>/* Стиль содержимого страницы - используйте это, если вы хотите сдвинуть содержимое страницы вправо при открытии боковой панели навигации */<br>#main {<br>&nbsp; transition: margin-left .5s;<br>
            &nbsp; padding: 20px;<br>}<br><br>/* На небольших экранах, где высота меньше 450 пикселей, измените стиль боковой навигации (меньше отступов и меньший размер шрифта) */<br>@media screen and (max-height: 450px) {<br>&nbsp; .sidenav {padding-top: 15px;}<br>&nbsp; .sidenav a {font-size: 18px;}<br>}</div>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h5>Шаг 3) Добавить JavaScript:</h5>
    <div class="w3-example">
        <h3>Off-Canvas меню</h3>
        <div class="w3-code notranslate jsHigh">
            /* Установите ширину боковой навигации на 250 пикселей и левое поле содержимого страницы на 250 пикселей */<br>function
            openNav() {<br>&nbsp;&nbsp;document.getElementById(&quot;mySidenav&quot;).style.width = &quot;250px&quot;;<br>&nbsp;&nbsp;document.getElementById(&quot;main&quot;).style.marginLeft = &quot;250px&quot;;<br>}<br><br>/* Установите ширину боковой навигации на 0 и левое поле содержимого страницы на 0 */<br>function closeNav() {<br>&nbsp;
            document.getElementById(&quot;mySidenav&quot;).style.width = &quot;0&quot;;<br>&nbsp;
            document.getElementById(&quot;main&quot;).style.marginLeft = &quot;0&quot;;<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_js_sidenav_push.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>Пример ниже также скользит по боковой панели навигации и сдвигает содержимое страницы вправо, только на этот раз мы добавляем черный цвет фона с непрозрачностью 40% (opacity) к основному элементу, чтобы &quot;выделить&quot; боковую навигацию:</p>
    <div class="w3-example">
        <h3>Off-Canvas Меню с/ непрозрачностью</h3>
        <div class="w3-code notranslate jsHigh">
            /* Установите ширину боковой навигации на 250 пикселей и левое поле содержимого страницы на 250 пикселей и добавьте черный цвет фона к body */<br>function openNav() {<br>&nbsp;&nbsp;document.getElementById(&quot;mySidenav&quot;).style.width
            = &quot;250px&quot;;<br>&nbsp;&nbsp;document.getElementById(&quot;main&quot;).style.marginLeft
            = &quot;250px&quot;;<br>&nbsp;&nbsp;document.body.style.backgroundColor = &quot;rgba(0,0,0,0.4)&quot;;<br>}<br><br>/* Установите ширину боковой навигации на 0, левое поле содержимого страницы на 0 и цвет фона основного текста на белый */<br>function closeNav() {<br>&nbsp;
            document.getElementById(&quot;mySidenav&quot;).style.width = &quot;0&quot;;<br>&nbsp;&nbsp;document.getElementById(&quot;main&quot;).style.marginLeft = &quot;0&quot;;<br>&nbsp;&nbsp;document.body.style.backgroundColor = &quot;white&quot;;<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_js_sidenav_push_opacity.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><b>Совет:</b> Перейдите к учебнику <a href="../css/css_navbar.php">CSS Навбар</a> на нашем сайте <?php include '../include/w3schools.php'; ?>, чтобы узнать больше о панелях навигации.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_fullscreen_overlay.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_sidenav_buttons.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>