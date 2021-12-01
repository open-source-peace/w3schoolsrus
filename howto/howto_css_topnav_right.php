<?php include '../include/head_howto.php'; ?>
<title>Как сделать выровненные справа кнопки меню? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать выровненные справа кнопки меню на сайте с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_css_topnav_right.html' rel='canonical'>
    <style>
        .extopnav {overflow: hidden;background-color: #333;}
        .extopnav-right {float: right;}
        .extopnav a {float: left;color: #f2f2f2;text-align: center;padding: 14px 16px;text-decoration: none;font-size: 17px;}
        .extopnav a:hover {background-color: #ddd;color: black;}
        .extopnav a.active {background-color: #04AA6D;color: white;}
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Выровненные справа кнопки меню</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_css_navbar_border.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_topnav_centered.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как создать панель навигации со ссылками, выровненными по левому и правому краю</strong>.</p>
    <hr>
    <h2>Ссылки меню с выравниванием по правому краю</h2>

    <div class="extopnav">
        <a class="active" href="javascript:void(0)">Главная</a>
        <a class="w3-hide-small" href="javascript:void(0)">Новости</a>
        <a href="javascript:void(0)">Контакты</a>
        <div class="extopnav-right">
            <a class="w3-hide-small" href="javascript:void(0)">Поиск</a>
            <a href="javascript:void(0)">Про нас</a>
        </div>
    </div>

    <p><a target="_blank" href="../howtotryit/tryhow_css_topnav_right.html" class="ws-btn">Попробуйте сами &raquo;</a></p>

    <hr style="clear:both;">
    <h2>Создать верхнюю панель навигации</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class="topnav&quot;&gt;<br>&nbsp; &lt;a class=&quot;active&quot; href=&quot;#home&quot;&gt;Главная&lt;/a&gt;<br>&nbsp;
            &lt;a href=&quot;#news&quot;&gt;Новости&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#contact&quot;&gt;Контакты&lt;/a&gt;<br>
            &nbsp; &lt;div class=&quot;topnav-right&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;a href=&quot;#search&quot;&gt;Поиск&lt;/a&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;a href=&quot;#about&quot;&gt;Про нас&lt;/a&gt;<br>&nbsp; &lt;/div&gt;<br>&lt;/div&gt;</div>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h5>Шаг 2) Добавить CSS:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Добавьте черный цвет фона в верхнюю навигацию */<br>.topnav {<br>&nbsp;&nbsp;&nbsp;
            background-color: #333;<br>&nbsp;&nbsp;&nbsp; overflow: hidden;<br>}<br>
            <br>/* Стиль ссылок внутри панели навигации */<br>.topnav a {<br>&nbsp; float: left;<br>&nbsp; color: #f2f2f2;<br>
            &nbsp; text-align: center;<br>&nbsp; padding: 14px 16px;<br>&nbsp; text-decoration: none;<br>&nbsp; font-size: 17px;<br>}<br><br>
            /* Изменить цвет ссылок при наведении */<br>
            .topnav a:hover {<br>&nbsp; background-color: #ddd;<br>&nbsp; color: black;<br>
            }<br><br>/* Добавьте цвет к активной / текущей ссылке */<br>.topnav a.active {<br>&nbsp;
            background-color: #04AA6D;<br>&nbsp; color: white;<br>}<br><br>/* Раздел с выравниванием по правому краю внутри верхней панели навигации */<br>.topnav-right {<br>&nbsp;
            float: right;<br>}<br></div>
        <a target="_blank" href="../howtotryit/tryhow_css_topnav_right.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><b>Совет:</b> Чтобы создать удобные для мобильных устройств, адаптивные панели навигации, прочитайте главу <a href="howto_js_topnav_responsive.php">Как сделать - Адаптивная верхняя навигация</a>.</p>
    <p><b>Совет:</b> Перейдите к учебнику <a href="../css/css_navbar.php">CSS Навбар</a> на нашем сайте <?php include '../include/w3schools.php'; ?>, чтобы узнать больше о панелях навигации.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_css_navbar_border.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_topnav_centered.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>