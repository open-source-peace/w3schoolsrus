<?php include '../include/head_howto.php'; ?>
<title>Как сделать адаптивный верхний навбар? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать адаптивный верхний навбар (адаптивную верхнюю панель навигации) с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_js_topnav_responsive.html' rel='canonical'>
    <style>
        ul.topnav2 {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }
        ul.topnav2 li {float: left;}

        ul.topnav2 li a {
            display: inline-block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        ul.topnav2 li a:hover {background-color: #ddd;color:black;}
        ul.topnav2 li.icon {display: none;}
        @media screen and (max-width:680px) {
            ul.topnav2 li:not(:first-child) {display: none;}
            ul.topnav2 li.icon {
                float: right;
                display: inline-block;
            }
        }
        @media screen and (max-width:680px) {
            ul.topnav2.responsive {position: relative;}
            ul.topnav2.responsive li.icon {
                position: absolute;
                right: 0;
                top: 0;
            }
            ul.topnav2.responsive li {
                float: none;
                display: inline;
            }
            ul.topnav2.responsive li a {
                display: block;
                text-align: left;
            }
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Адаптивный верхний навбар</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_topnav.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_navbar_icon.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как создать адаптивное верхнее навигационное меню</strong> с помощью CSS и JavaScript.</p>
    <hr>
    <h2>Адаптивный верхний навбар</h2>
    <p>Измените размер окна браузера, чтобы увидеть, <strong>как работает адаптивное меню навигации</strong>:</p>

    <ul id="myUl" class="topnav2">
        <li><a href="javascript:void(0);" class="ws-green">Главная</a></li>
        <li><a href="javascript:void(0);">Новости</a></li>
        <li><a href="javascript:void(0);">Контакты</a></li>
        <li><a href="javascript:void(0);">Про нас</a></li>
        <li class="icon">
            <a href="javascript:void(0);" onclick="myFunction()"><i class="fa fa-bars"></i></a>
        </li>
    </ul>

    <script>
        function myFunction() {
            var x = document.getElementById("myUl");
            if (x.className === "topnav2") {
                x.className += " responsive";
            } else {
                x.className = "topnav2";
            }
        }
    </script>
    <p><a target="_blank" href="../howtotryit/tryhow_js_topnav.html" class="ws-btn">Попробуйте сами &raquo;</a></p>

    <hr style="clear:both;">
    <h2>Создать адаптивное верхнее меню навигации</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!-- Загрузите библиотеку иконок, чтобы отображать гамбургер-меню (полоски) на маленьких экранах --&gt;<br>
            &lt;link rel=&quot;stylesheet&quot; href=&quot;https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css&quot;&gt;<br>
            <br>&lt;div class="topnav"
            id="myTopnav"&gt;<br>&nbsp; &lt;a href=&quot;#home&quot; class=&quot;active&quot;&gt;Главная&lt;/a&gt;<br>&nbsp;
            &lt;a href=&quot;#news&quot;&gt;Новости&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#contact&quot;&gt;Контакты&lt;/a&gt;<br>&nbsp;
            &lt;a href=&quot;#about&quot;&gt;Про нас&lt;/a&gt;<br>&nbsp;&nbsp;&lt;a href="javascript:void(0);"
            class=&quot;icon&quot; onclick="myFunction()"&gt;<br>&nbsp;&nbsp;&nbsp; &lt;i
            class=&quot;fa fa-bars&quot;&gt;&lt;/i&gt;<br>&nbsp; &lt;/a&gt;<br>&lt;/div&gt;</div>
    </div>

    <p>Ссылка с class="icon" используется для открытия и закрытия верхней навигации на маленьких экранах.</p>
    <hr>
    <h5>Шаг 2) Добавить CSS:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /*
            Добавьте черный цвет фона в верхнюю навигацию */<br>.topnav {<br>&nbsp;&nbsp;background-color: #333;<br>
            &nbsp; overflow: hidden;<br>}<br><br>/*
            Стиль ссылок внутри панели навигации */<br>.topnav a {<br>&nbsp;
            float: left;<br>&nbsp; display: block;<br>&nbsp;
            color: #f2f2f2;<br>&nbsp; text-align: center;<br>&nbsp;
            padding: 14px 16px;<br>&nbsp; text-decoration: none;<br>&nbsp;&nbsp;font-size: 17px;<br>}<br><br>/* Изменить цвет ссылок при наведении */<br>
            .topnav a:hover {<br>&nbsp;&nbsp;background-color: #ddd;<br>&nbsp;
            color: black;<br>}<br><br>/* Добавить активный класс, чтобы выделить текущую страницу */<br>.topnav a.active {<br>&nbsp; background-color: #04AA6D;<br>&nbsp;
            color: white;<br>}<br><br>/* Скрыть ссылку, которая должна открывать и закрывать topnav на маленьких экранах */<br>
            .topnav .icon {<br>&nbsp; display: none;<br>}</div>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <p>Добавить медиа-запросы:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Если ширина экрана меньше 600 пикселей, скрыть все ссылки, кроме первой ("Главная"). Показать ссылку, которая содержит, должна открывать и закрывать topnav (.icon) */<br>
            @media screen and (max-width: 600px) {<br>&nbsp; .topnav a:not(:first-child)
            {display: none;}<br>&nbsp; .topnav a.icon {<br>&nbsp;&nbsp;&nbsp; float:
            right;<br>&nbsp;&nbsp;&nbsp; display: block;<br>&nbsp; }<br>}<br><br>
            /* Класс "responsive" добавляется в верхнюю навигацию с помощью JavaScript, когда пользователь кликает значок. Этот класс заставляет topnav хорошо выглядеть на маленьких экранах (отображать ссылки вертикально, а не горизонтально) */<br>
            @media screen and (max-width: 600px) {<br>&nbsp;
            .topnav.responsive {position: relative;}<br>&nbsp; .topnav.responsive a.icon {<br>&nbsp;&nbsp;&nbsp; position: absolute;<br>&nbsp;&nbsp;&nbsp;
            right: 0;<br>&nbsp;&nbsp;&nbsp; top: 0;<br>&nbsp; }<br>&nbsp;
            .topnav.responsive a {<br>&nbsp;&nbsp;&nbsp; float: none;<br>&nbsp;&nbsp;&nbsp;
            display: block;<br>&nbsp;&nbsp;&nbsp; text-align: left;<br>&nbsp; }<br>}</div>
    </div>
    <hr>
    <h5>Шаг 3) Добавить JavaScript:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            /* Переключайтесь между добавлением и удалением "responsive" класса в topnav, когда пользователь кликает иконку */<br>
            function myFunction() {<br>
            &nbsp; var x = document.getElementById("myTopnav");<br>&nbsp; if (x.className === "topnav") {<br>
            &nbsp;&nbsp;&nbsp; x.className += "responsive";<br>
            &nbsp;&nbsp;} else {<br>
            &nbsp;&nbsp;&nbsp; x.className = "topnav";<br>
            &nbsp; }<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_js_topnav.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><b>Совет:</b> Перейдите к учебнику <a href="../css/css_navbar.php">CSS Навигационные панели</a>, чтобы узнать больше о навигационных панелях на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_topnav.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_navbar_icon.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>