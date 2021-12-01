<?php include '../include/head_howto.php'; ?>
<title>Как сделать боковую навигацию на сайте? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать боковую панель навигации на сайте с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_js_sidenav.html' rel='canonical'>
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
    <h1>Как сделать - Сайдбар навигации</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="howto_css_fixed_sidebar.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="howto_css_sidebar_responsive.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как создать анимированное закрываемое боковое навигационное меню</strong> на сайте.</p>
    <hr>
    <div id="myCanvasNav" class="overlay3" onclick="closeOffcanvas()"></div>

    <div id="myOffcanvas" class="offcanvas">
        <a href="javascript:void(0)" class="closeOffcanvas" onclick="closeOffcanvas()">&times;</a>
        <a href="javascript:void(0)">About</a>
        <a href="javascript:void(0)">Services</a>
        <a href="javascript:void(0)">Clients</a>
        <a href="javascript:void(0)">Contact</a>
    </div>
    <div id="myOffcanvas2" class="offcanvas2">
        <a href="javascript:void(0)" class="closeOffcanvas" onclick="closeOffcanvas2()">&times;</a>
        <a href="javascript:void(0)">About</a>
        <a href="javascript:void(0)">Services</a>
        <a href="javascript:void(0)">Clients</a>
        <a href="javascript:void(0)">Contact</a>
    </div>

    <div id="mySidenav" class="sidenav5">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav4()">&times;</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>

    <button class="ws-btn w3-dark-grey w3-padding w3-margin-bottom" onclick="openOffcanvas1()">Sidenav overlay</button><br>
    <button class="ws-btn w3-dark-grey w3-padding w3-margin-bottom" onclick="openOffcanvas2()">Sidenav overlay without animation</button><br>
    <button class="ws-btn w3-dark-grey w3-padding w3-margin-bottom" onclick="openOffcanvas()">Sidenav push (off-canvas)</button><br>
    <button class="ws-btn w3-dark-grey w3-padding w3-margin-bottom" onclick="openNav3();openOffcanvas()">Sidenav push w/opacity</button><br>
    <button class="ws-btn w3-dark-grey w3-padding" onclick="openNav4()">Sidenav full-width</button><br>

    <script>
        function openOffcanvas1() {
            document.getElementById("myOffcanvas").style.width = "250px";
        }
        function openOffcanvas2() {
            document.getElementById("myOffcanvas2").style.display = "block";
        }

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
        function openNav4() {
            document.getElementById("mySidenav").style.width = "100%";
        }
        function closeNav4() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

    <a target="_blank" href="../howtotryit/tryhow_js_sidenav.html" class="ws-btn w3-margin-top">Попробуйте сами &raquo;</a>
    <hr>
    <h2>Создать анимированную боковую навигацию</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div id=&quot;mySidenav&quot; class=&quot;sidenav&quot;&gt;<br>&nbsp; &lt;a href=&quot;javascript:void(0)&quot;
            class=&quot;closebtn&quot; onclick=&quot;closeNav()&quot;&gt;&amp;times;&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#&quot;&gt;About&lt;/a&gt;<br>&nbsp;
            &lt;a href=&quot;#&quot;&gt;Services&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#&quot;&gt;Clients&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#&quot;&gt;Contact&lt;/a&gt;<br>
            &lt;/div&gt;<br><br>&lt;!-- Используйте любой элемент, чтобы открыть sidenav --&gt;<br>&lt;span onclick=&quot;openNav()&quot;&gt;open&lt;/span&gt;<br>
            <br>&lt;!-- Добавьте весь контент страницы внутри этого div, если вы хотите, чтобы боковая навигация выдвигала контент страницы вправо (не используется, если вы хотите, чтобы sidenav находился сверху страницы --&gt;<br>&lt;div id=&quot;main&quot;&gt;<br>&nbsp; ...<br>&lt;/div&gt;</div>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h5>Шаг 2) Добавить CSS:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Боковое навигационное меню */<br>.sidenav {<br>&nbsp;&nbsp;height: 100%; /*
            100% Full-height */<br>&nbsp;&nbsp;width: 0; /* 0 ширина - изменить это с помощью JavaScript */<br>&nbsp;&nbsp;position: fixed; /* Оставайтесь на месте
            */<br>&nbsp;&nbsp;z-index: 1; /* Оставайтесь сверху */<br>&nbsp;&nbsp;top: 0; /* Оставайтесь наверху */<br>&nbsp;&nbsp;left: 0;<br>&nbsp;&nbsp;background-color: #111; /* Фон черный*/<br>&nbsp;&nbsp;overflow-x: hidden; /* Отключить горизонтальную прокрутку */<br>
            &nbsp;
            padding-top: 60px; /* Поместите контент в 60px сверху */<br>&nbsp;&nbsp;transition: 0.5s; /* 0.5 второй эффект перехода слайда в боковой навигации */<br>
            }<br><br>/* Ссылки меню навигации */<br>.sidenav a {<br>&nbsp; padding: 8px 8px 8px 32px;<br>
            &nbsp;
            text-decoration: none;<br>&nbsp; font-size: 25px;<br>&nbsp;
            color: #818181;<br>&nbsp; display: block;<br>&nbsp;
            transition: 0.3s;<br>}<br><br>/* Когда вы наводите курсор мыши на навигационные ссылки, изменяется их цвет */<br>.sidenav a:hover {<br>&nbsp;&nbsp;color: #f1f1f1;<br>}<br><br>/* Положение и стиль кнопки закрытия (верхний правый угол) */<br>.sidenav .closebtn {<br>&nbsp; position:
            absolute;<br>&nbsp; top: 0;<br>&nbsp; right: 25px;<br>&nbsp;
            font-size: 36px;<br>&nbsp; margin-left: 50px;<br>}<br>
            <br>/* Стиль содержимого страницы - используйте это, если вы хотите сдвинуть содержимое страницы вправо при открытии боковой навигации */<br>#main {<br>&nbsp; transition: margin-left .5s;<br>
            &nbsp;
            padding: 20px;<br>}<br><br>/* На экранах меньшего размера, где высота меньше 450px, измените стиль sidenav (меньше отступов и меньший размер шрифта) */<br>@media screen and (max-height: 450px) {<br>&nbsp; .sidenav
            {padding-top: 15px;}<br>&nbsp; .sidenav a {font-size: 18px;}<br>
            }</div>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h5>Шаг 3) Добавить JavaScript:</h5>
    <p>Пример ниже выскальзывает в боковой навигации и делает его шириной 250 пикселей:</p>
    <div class="w3-example">
        <h3>Оверлей боковой навигаци. Пример</h3>
        <div class="w3-code notranslate jsHigh">
            /* Установите ширину боковой навигации до 250 пикселей */<br>function
            openNav() {<br>&nbsp; document.getElementById(&quot;mySidenav&quot;).style.width
            = &quot;250px&quot;;<br>}<br><br>/*
            Установите ширину боковой навигации на 0 */<br>function closeNav() {<br>&nbsp;&nbsp;document.getElementById(&quot;mySidenav&quot;).style.width = &quot;0&quot;;<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_js_sidenav.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Приведенный ниже пример перемещает боковую навигацию и сдвигает содержимое страницы вправо (значение, используемое для установки ширины sidenav, также используется для установки левого поля &quot;страницы из содержимым&quot;):</p>
    <div class="w3-example">
        <h3>Боковая навигация выталкивает контент</h3>
        <div class="w3-code notranslate jsHigh">
            /* Установите ширину боковой навигации 250 пикселей, и левый край содержимого страницы - 250 пикселей. */<br>function openNav() {<br>&nbsp; document.getElementById(&quot;mySidenav&quot;).style.width
            = &quot;250px&quot;;<br>&nbsp; document.getElementById(&quot;main&quot;).style.marginLeft
            = &quot;250px&quot;;<br>}<br><br>/* Установите ширину боковой навигации равной 0, и левое поле содержимого страницы - 0. */<br>function closeNav() {<br>&nbsp;
            document.getElementById(&quot;mySidenav&quot;).style.width = &quot;0&quot;;<br>&nbsp;
            document.getElementById(&quot;main&quot;).style.marginLeft = &quot;0&quot;;<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_js_sidenav_push.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>Приведенный ниже пример также перемещает боковую навигацию и перемещает содержимое страницы вправо, только на этот раз мы добавляем черный цвет фона с непрозрачностью 40% к элементу body, чтобы &quot;выделить&quot; боковую навигацию:</p>
    <div class="w3-example">
        <h3>Боковая навигация выталкивает контент с непрозрачностью</h3>
        <div class="w3-code notranslate jsHigh">
            /* Установите ширину боковой навигации 250 пикселей, и левое поле содержимого страницы - 250 пикселей и добавьте черный цвет фона к телу. */<br>function
            openNav() {<br>&nbsp;&nbsp;document.getElementById(&quot;mySidenav&quot;).style.width
            = &quot;250px&quot;;<br>&nbsp;&nbsp;document.getElementById(&quot;main&quot;).style.marginLeft
            = &quot;250px&quot;;<br>&nbsp;&nbsp;document.body.style.backgroundColor = &quot;rgba(0,0,0,0.4)&quot;;<br>}<br><br>/* Установите ширину боковой навигации равной 0, и левое поле содержимого страницы - 0, и цвет фона тела - белым. */<br>function closeNav() {<br>&nbsp;
            document.getElementById(&quot;mySidenav&quot;).style.width = &quot;0&quot;;<br>&nbsp;
            document.getElementById(&quot;main&quot;).style.marginLeft = &quot;0&quot;;<br>&nbsp;&nbsp;document.body.style.backgroundColor = &quot;white&quot;;<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_js_sidenav_push_opacity.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <p>Пример ниже скользит в боковой навигации слева и охватывает всю страницу (ширина 100%):</p>
    <div class="w3-example">
        <h3>Боковая навигация на всю ширину:</h3>
        <div class="w3-code notranslate jsHigh">
            /* Открыть боковую навигацию */<br>function
            openNav() {<br>&nbsp;&nbsp;document.getElementById(&quot;mySidenav&quot;).style.width
            = &quot;100%&quot;;<br>}<br><br>/* закрыть/скрыть боковую навигацию */<br>function closeNav() {<br>
            &nbsp;
            document.getElementById(&quot;mySidenav&quot;).style.width = &quot;0&quot;;<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_js_sidenav_full.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>Пример ниже открывает и закрывает боковое меню навигации без анимации:</p>
    <div class="w3-example">
        <h3>Боковая навигация без анимации</h3>
        <div class="w3-code notranslate jsHigh">
            /* Открыть боковую навигацию */<br>function
            openNav() {<br>&nbsp; document.getElementById(&quot;mySidenav&quot;).style.display
            = &quot;block&quot;;<br>}<br><br>/* Закрыть/скрыть боковую навигацию */<br>function closeNav() {<br>
            &nbsp;
            document.getElementById(&quot;mySidenav&quot;).style.display = &quot;none&quot;;<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_js_sidenav_none.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <p>В приведенном ниже примере показано, как создать правое навигационное меню:</p>
    <div class="w3-example">
        <h3>Правосторонняя навигация:</h3>
        <div class="w3-code notranslate cssHigh">
            .sidenav {<br>&nbsp; right: 0;<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_js_sidenav_right.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>В приведенном ниже примере показано, как создать боковое навигационное меню, которое всегда отображается (зафиксировано):</p>
    <div class="w3-example">
        <h3>Всегда отображать боковую навигацию:</h3>
        <div class="w3-code notranslate cssHigh">
            /* Боковая навигация */<br>.sidenav {<br>&nbsp; height: 100%;<br>&nbsp; width:
            200px;<br>&nbsp; position: fixed;<br>&nbsp; z-index: 1;<br>&nbsp; top: 0;<br>&nbsp;
            left: 0;<br>&nbsp; background-color: #111;<br>&nbsp; overflow-x: hidden;<br>&nbsp;
            padding-top: 20px;<br>}<br><br>/* Страница из содержимым */<br>.main {<br>&nbsp;
            margin-left: 200px; /* То же, что ширина sidenav */<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_css_sidenav.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><b>Совет:</b> Посетите <a href="../css/css_navbar.php">CSS Навбар учебник</a> чтобы узнать больше о панелях навигации на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="howto_css_fixed_sidebar.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="howto_css_sidebar_responsive.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>