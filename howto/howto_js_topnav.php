<?php include '../include/head_howto.php'; ?>
<title>Как сделать верхний навбар? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать верхний навбар (верхнюю панель навигации) с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_js_topnav.html' rel='canonical'>
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
        ul.topnav2 li a.active {
            background-color: #04AA6D;color:white;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Верхняя панель навигации</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_hover_tabs.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_topnav_responsive.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, как создать <strong>верхнюю панель навигации</strong> с помощью CSS.</p>
    <hr>
    <h2>Верхняя панель навигации (верхний навбар)</h2>

    <ul id="myUl" class="topnav2">
        <li><a href="javascript:void(0);" class="active">Главная</a></li>
        <li><a href="javascript:void(0);">Новости</a></li>
        <li><a href="javascript:void(0);">Контакты</a></li>
        <li class="w3-hide-small"><a href="javascript:void(0);">Про нас</a></li>
    </ul>
    <p><a target="_blank" href="../howtotryit/tryhow_css_topnav.html" class="ws-btn">Попробуйте сами &raquo;</a></p>

    <hr style="clear:both;">
    <h2>Создать верхнюю панель навигации</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class="topnav&quot;&gt;<br>&nbsp; &lt;a class=&quot;active&quot; href=&quot;#home&quot;&gt;Главная&lt;/a&gt;<br>&nbsp;
            &lt;a href=&quot;#news&quot;&gt;Новости&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#contact&quot;&gt;Контакты&lt;/a&gt;<br>&nbsp;
            &lt;a href=&quot;#about&quot;&gt;Про нас&lt;/a&gt;<br>&lt;/div&gt;</div>
    </div>
    <hr>
    <h5>Шаг 2) Добавить CSS:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Добавьте черный цвет фона в верхнюю навигацию */<br>.topnav {<br>&nbsp;&nbsp;background-color: #333;<br>
            &nbsp; overflow: hidden;<br>}<br><br>/* Стиль ссылок внутри панели навигации */<br>.topnav a {<br>&nbsp;
            float: left;<br>&nbsp;&nbsp;color: #f2f2f2;<br>&nbsp;&nbsp;text-align: center;<br>&nbsp;&nbsp;padding: 14px 16px;<br>&nbsp;&nbsp;text-decoration: none;<br>
            &nbsp; font-size: 17px;<br>}<br><br>/* Изменить цвет ссылок при наведении */<br>.topnav a:hover {<br>
            &nbsp; background-color: #ddd;<br>&nbsp; color: black;<br>}<br><br>/* Добавьте цвет к активной / текущей ссылке */<br>.topnav
            a.active {<br>&nbsp;&nbsp;background-color: #04AA6D;<br>&nbsp;&nbsp;color: white;<br>}<br></div>
        <a target="_blank" href="../howtotryit/tryhow_css_topnav.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p><b>Совет:</b> Чтобы создать удобные для мобильных устройств адаптивные панели навигации, прочитайте главу <a href="howto_js_topnav_responsive.php">Как сделать - Адаптивная верхняя панель навигации</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <p><b>Совет:</b> Перейдите в главу <a href="../css/css_navbar.php">CSS Панель навигации</a>, чтобы узнать больше о панелях навигации.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_hover_tabs.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_topnav_responsive.php">Next &#10095;</a>
    </div>    
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>