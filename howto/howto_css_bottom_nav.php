<?php include '../include/head_howto.php'; ?>
<title>Как сделать нижнюю панель навигации? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать нижнюю панель навигации на сайте с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_css_bottom_nav.html' rel='canonical'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Нижняя навигация</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_css_vertical_menu.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_bottom_nav_responsive.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как создать нижнее меню навигации</strong> с помощью CSS.</p>
    <hr>
    <h2>Нижнее навигационное меню</h2>
    <iframe src="../howtotryit/tryhow_css_bottom_nav.html" style="height:300px;width:100%;border:3px solid #f1f1f1"></iframe>
    <p><a target="_blank" href="../howtotryit/tryhow_css_bottom_nav.html" class="ws-btn">Попробуйте сами &raquo;</a></p>

    <hr style="clear:both;">
    <h2>Как создать нижнее навигационное меню</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class="navbar"&gt;<br>&nbsp; &lt;a href=&quot;#home&quot;
            class=&quot;active&quot;&gt;Главная&lt;/a&gt;<br>&nbsp;
            &lt;a href=&quot;#news&quot;&gt;Новости&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#contact&quot;&gt;Контакты&lt;/a&gt;<br>&lt;/div&gt;</div>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h5>Шаг 2) Добавить CSS:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Поместите панель навигации внизу страницы и сделайте так, чтобы она прилипала */<br>.navbar {<br>
            &nbsp; background-color: #333;<br>&nbsp; overflow: hidden;<br>&nbsp;
            position: fixed;<br>&nbsp; bottom: 0;<br>&nbsp; width: 100%;<br>}<br><br>/*
            Стиль ссылок внутри панели навигации */<br>.navbar a {<br>&nbsp;&nbsp;float: left;<br>
            &nbsp; display: block;<br>&nbsp;
            color: #f2f2f2;<br>&nbsp; text-align: center;<br>&nbsp;
            padding: 14px 16px;<br>&nbsp; text-decoration: none;<br>&nbsp;
            font-size: 17px;<br>}<br><br>/* Изменить цвет ссылок при наведении */<br>.navbar a:hover {<br>
            &nbsp; background-color: #ddd;<br>&nbsp;&nbsp;color: black;<br>}<br><br>/* Добавьте цвет к активной / текущей ссылке */<br>.navbar
            a.active {<br>&nbsp;&nbsp;background-color: #04AA6D;<br>&nbsp;
            color: white;<br>}<br></div>
        <a target="_blank" href="../howtotryit/tryhow_css_bottom_nav.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><b>Совет:</b> Чтобы создать удобную для мобильных устройств, гибкую нижнюю панель навигации, прочитайте главу <a href="howto_js_bottom_nav_responsive.php">Как сделать - Адаптивная нижняя навигация</a>.</p>
    <p><b>Совет:</b> Перейдите к учебнику <a href="../css/css_navbar.php">CSS Навбар</a> на нашем сайте <?php include '../include/w3schools.php'; ?>, чтобы узнать больше о панелях навигации на сайте.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_tab_header.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_bottom_nav_responsive.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>