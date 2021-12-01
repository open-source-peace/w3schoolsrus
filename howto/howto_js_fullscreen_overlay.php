<?php include '../include/head_howto.php'; ?>
<title>Как сделать полноэкранный навбар? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать навигационную панель на весь экран с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_js_fullscreen_overlay.html' rel='canonical'>
    <style>
        .overlay {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 99;
            top: 0;
            left:0;
            background-color: rgba(0,0,0, 0.9);
            overflow-y: auto;
            overflow-x: hidden;
            text-align: center;
            transition: .5s;
        }
        .overlay a, .overlay2 a {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            color: #818181;
            display: block;
            transition: .3s;
        }
        .overlay a:hover, .overlay a:focus, .overlay2 a:hover{
            color: #f1f1f1;
        }
        .overlay-content {
            position: relative;
            top: 25%;
            width: 100%;
            text-align: center;
            margin-top: 30px;
        }
        .closebtnOverlay {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px !important;
        }
        .overlay2 {
            height: 0;
            width: 100%;
            position: fixed;
            z-index: 99;
            top: 0;
            left:0;
            background-color: rgba(0,0,0, 0.9);
            overflow-x: auto;
            text-align: center;
            transition: .5s;
        }
        @media screen and (max-height: 450px) {
            .overlay a {font-size: 20px}
            .closebtnOverlay {
                font-size: 40px !important;
                top: 15px;
                right: 35px;
            }
        }
        .hhoverlay {
            height: 100%;
            width: 100%;
            display: none;
            position: fixed;
            z-index: 99999999999999999;
            top: 0;
            left: 0;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0, 0.9);
        }
        .hhoverlay-content {
            position: relative;
            top: 25%;
            width: 100%;
            text-align: center;
            margin-top: 30px;
        }
        .hhoverlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }
        .hhoverlay a:hover, .hhoverlay a:focus {
            color: #f1f1f1;
        }
        .hhoverlay .hhclosebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
        }
        @media screen and (max-height: 450px) {
            .hhoverlay a {font-size: 20px}
            .hhoverlay .hhclosebtn {
                font-size: 40px;
                top: 15px;
                right: 35px;
            }
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Полноэкранная панель навигации</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_css_sidebar_responsive.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_off-canvas.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как создать полноэкранное оверлейное меню навигации</strong> на сайте.</p>
    <hr>
    <p>Нажмите на кнопки ниже, чтобы увидеть, как это работает:</p>
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtnOverlay" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a href="javascript:void(0)">Про нас</a>
            <a href="javascript:void(0)">Сервисы</a>
            <a href="javascript:void(0)">Клиенты</a>
            <a href="javascript:void(0)">Контакты</a>
        </div>
    </div>
    <div id="myNav2" class="overlay2">
        <a href="javascript:void(0)" class="closebtnOverlay" onclick="closeNav2()">&times;</a>
        <div class="overlay-content">
            <a href="javascript:void(0)">Про нас</a>
            <a href="javascript:void(0)">Сервисы</a>
            <a href="javascript:void(0)">Клиенты</a>
            <a href="javascript:void(0)">Контакты</a>
        </div>
    </div>


    <div id="myNav3" class="hhoverlay">
        <a href="javascript:void(0)" class="hhclosebtn" onclick="closeNav3()">&times;</a>
        <div class="hhoverlay-content">
            <a href="javascript:void(0)">Про нас</a>
            <a href="javascript:void(0)">Сервисы</a>
            <a href="javascript:void(0)">Клиентыы</a>
            <a href="javascript:void(0)">Контакты</a>
        </div>
    </div>
    <button class="ws-btn w3-padding-large w3-dark-grey w3-mobile" onclick="openNav()">Сдвинуть вправо</button><p class="w3-hide-large w3-hide-medium"></p>
    <button class="ws-btn w3-padding-large w3-dark-grey w3-mobile" onclick="openNav2()">Сдвинуть вниз</button><p class="w3-hide-large w3-hide-medium"></p>
    <button class="ws-btn w3-padding-large w3-dark-grey w3-mobile" onclick="openNav3()">Показать (без анимации)</button>
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }
        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
        function openNav2() {
            document.getElementById("myNav2").style.height = "100%";
        }
        function closeNav2() {
            document.getElementById("myNav2").style.height = "0%";
        }
        function openNav3() {
            document.getElementById("myNav3").style.display = "block";
        }
        function closeNav3() {
            document.getElementById("myNav3").style.display = "none";
        }
    </script>
    <div class="w3-clearfix"></div>
    <a target="_blank" href="../howtotryit/tryhow_js_overlay.html" class="ws-btn w3-margin-top">Попробуйте сами &raquo;</a>
    <hr>

    <h2>Создайте полноэкранную навигацию с наложением (оверлеем)</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!-- Оверлей --&gt;<br>&lt;div id=&quot;myNav&quot; class=&quot;overlay&quot;&gt;<br>
            <br>&nbsp; &lt;!-- Кнопка закрытия оверлейной навигации --&gt;<br>&nbsp; &lt;a href=&quot;javascript:void(0)&quot;
            class=&quot;closebtn&quot; onclick=&quot;closeNav()&quot;&gt;&amp;times;&lt;/a&gt;<br>
            <br>&nbsp; &lt;!-- Наложение содержимого --&gt;<br>&nbsp; &lt;div
            class=&quot;overlay-content&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;a href=&quot;#&quot;&gt;Про нас&lt;/a&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;a href=&quot;#&quot;&gt;Сервисы&lt;/a&gt;<br>&nbsp;&nbsp;&nbsp; &lt;a href=&quot;#&quot;&gt;Клиенты&lt;/a&gt;<br>&nbsp;&nbsp;&nbsp; &lt;a href=&quot;#&quot;&gt;Контакты&lt;/a&gt;<br>&nbsp; &lt;/div&gt;<br><br>&lt;/div&gt;<br>
            <br>&lt;!-- Используйте любой элемент, чтобы открыть / показать оверлейное меню навигации --&gt;<br>
            &lt;span onclick=&quot;openNav()&quot;&gt;open&lt;/span&gt;</div>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h5>Шаг 2) Добавить CSS:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Оверлей (фон) */<br>.overlay {<br>&nbsp;&nbsp;/* Высота &amp; ширина зависит от того, как вы хотите раскрыть оверлей (см. JS ниже) */&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;height: 100%;<br>&nbsp;&nbsp;width: 0;<br>&nbsp;
            position: fixed; /* Оставаться на месте */<br>&nbsp; z-index: 1; /*
            Расположиться сверху */<br>&nbsp; left: 0;<br>&nbsp; top: 0;<br>&nbsp;
            background-color: rgb(0,0,0); /* Черный резервный цвет */<br>&nbsp;
            background-color: rgba(0,0,0, 0.9); /* Черный с/непрозрачностью */<br>&nbsp;
            overflow-x: hidden; /* Отключить горизонтальную прокрутку */<br>&nbsp;
            transition: 0.5s; /* 0.5 секундный эффект перехода, чтобы сдвинуть внутрь или сдвинуть вниз (высота или ширина, в зависимости от раскрытия) */<br>}<br>
            <br>/* Разместите контент внутри оверлея */<br>.overlay-content {<br>&nbsp;
            position: relative;<br>&nbsp; top: 25%; /* 25% сверху */<br>&nbsp;
            width: 100%; /* 100% в ширину */<br>&nbsp; text-align: center; /*
            Центрирование текста/ссылок */<br>&nbsp; margin-top: 30px; /* Верхнее поле 30px, чтобы избежать конфликта с кнопкой закрытия на небольших экранах */<br>}<br>
            <br>/* Ссылки навигации внутри оверлея */<br>.overlay a {<br>&nbsp; padding: 8px;<br>
            &nbsp; text-decoration: none;<br>&nbsp; font-size: 36px;<br>&nbsp;
            color: #818181;<br>&nbsp; display: block; /* Отображать блок вместо встроенного */<br>&nbsp;&nbsp;transition: 0.3s; /* Эффекты перехода при наведении (цвет) */<br>}<br><br>/* Когда вы наводите указатель мыши на ссылки навигации, меняется их цвет */<br>.overlay
            a:hover, .overlay a:focus {<br>&nbsp; color: #f1f1f1;<br>}<br><br>/* Поместите кнопку закрытия (верхний правый угол) */<br>
            .overlay .closebtn {<br>&nbsp; position: absolute;<br>&nbsp; top: 20px;<br>&nbsp; right: 45px;<br>&nbsp; font-size: 60px;<br>}<br><br>
            /* Когда высота экрана меньше 450 пикселей, измените размер шрифта ссылок и снова поместите кнопку закрытия, чтобы они не перекрывались */<br>@media screen and (max-height: 450px) {<br>&nbsp;
            .overlay a {font-size: 20px}<br>&nbsp; .overlay .closebtn {<br>&nbsp;&nbsp;&nbsp;
            font-size: 40px;<br>&nbsp;&nbsp;&nbsp;
            top: 15px;<br>&nbsp;&nbsp;&nbsp; right: 35px;<br>&nbsp;&nbsp;}<br>}</div>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h5>Шаг 3) Добавить JavaScript:</h5>

    <p>Пример ниже скользит в меню навигации наложения слева направо (ширина от 0 до 100%), когда оно срабатывает:</p>
    <div class="w3-example">
        <h3>Выскальзывание со стороны</h3>
        <div class="w3-code notranslate jsHigh">
            /* Открывается при нажатии на элемент span */<br>function openNav() {<br>&nbsp; document.getElementById(&quot;myNav&quot;).style.width
            = &quot;100%&quot;;<br>}<br><br>/* Закрывается при нажатии на символ &quot;x&quot; внутри оверлея */<br>function closeNav() {<br>&nbsp;&nbsp;document.getElementById(&quot;myNav&quot;).style.width = &quot;0%&quot;;<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_js_overlay.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Пример ниже скользит в меню навигации оверлея сверху вниз (высота от 0 до 100%).</p>
    <p><b>Примечание:</b> Обратите внимание, что в этом примере CSS немного отличается от приведенного выше (высота по умолчанию теперь равна 0, ширина равна 100%, а overflow-y скрыт (отключите вертикальную прокрутку, за исключением маленьких экранов)):</p>
    <div class="w3-example">
        <h3>Скольжение сверху вниз</h3>
        <div class="w3-code notranslate jsHigh">
            /* Открыть */<br>function openNav() {<br>&nbsp; document.getElementById(&quot;myNav&quot;).style.height = &quot;100%&quot;;<br>}<br><br>/* Закрыть */<br>function closeNav() {<br>&nbsp;&nbsp;document.getElementById(&quot;myNav&quot;).style.height = &quot;0%&quot;;<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_js_overlay2.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <p>В этом примере открывается меню навигации без анимации:</p>
    <div class="w3-example">
        <h3>Открыть меню без анимации</h3>
        <div class="w3-code notranslate jsHigh">
            /* Открыть */<br>function openNav() {<br>&nbsp;&nbsp;document.getElementById(&quot;myNav&quot;).style.display = &quot;block&quot;;<br>}<br><br>/* Закрыть */<br>function closeNav() {<br>&nbsp;&nbsp;document.getElementById(&quot;myNav&quot;).style.display = &quot;none&quot;;<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_js_overlay_no-anim.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><b>Совет:</b> Перейдите в учебник <a href="../css/css_navbar.php">CSS Навбар</a> на нашем сайте <?php include '../include/w3schools.php'; ?>, чтобы узнать больше о панелях навигации.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_css_sidebar_responsive.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_off-canvas.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>