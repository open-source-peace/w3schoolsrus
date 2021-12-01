<?php include '../include/head_howto.php'; ?>
<title>Как сделать нижнюю границу навигационных ссылок? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать нижнюю границу навигационных ссылок на сайте с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_css_navbar_border.html' rel='canonical'>
    <style>
        .topnav5 {
            overflow: hidden;
            background-color: #f1f1f1;
        }
        .topnav5 a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            border-bottom: 3px solid transparent;
        }
        .topnav5 a:hover {
            border-bottom: 3px solid red;
        }
        .topnav5 a.active {
            border-bottom: 3px solid red;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Нижняя граница навигационных ссылок</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_bottom_nav_responsive.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_topnav_right.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как создать нижнюю границу (подчеркивание) навигационных ссылок</strong> с помощью CSS.</p>
    <hr>
    <h2>Нижняя граница навигационных ссылок</h2>

    <div class="topnav5">
        <a class="active" href="javascript:void(0)">Главная</a>
        <a href="javascript:void(0)">Новости</a>
        <a href="javascript:void(0)">Контакты</a>
    </div>
    <p><a target="_blank" href="../howtotryit/tryhow_css_navbar_border.html" class="ws-btn">Попробуйте сами &raquo;</a></p>

    <hr style="clear:both;">
    <h2>Создать навигационное меню</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class="topnav&quot;&gt;<br>&nbsp; &lt;a href=&quot;#home&quot;
            class=&quot;active&quot;&gt;Главная&lt;/a&gt;<br>&nbsp;
            &lt;a href=&quot;#news&quot;&gt;Новости&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#contact&quot;&gt;Контакты&lt;/a&gt;<br>&lt;/div&gt;</div>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h5>Шаг 2) Добавить CSS:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Добавьте черный цвет фона в верхнюю навигацию */<br>.topnav {<br>&nbsp;&nbsp;background-color: #333;<br>
            &nbsp;&nbsp;overflow: hidden;<br>}<br><br>/* Стиль ссылок внутри панели навигации */<br>.topnav a {<br>
            &nbsp;float: left;<br>&nbsp; display: block;<br>
            &nbsp;color: #f2f2f2;<br>&nbsp; text-align: center;<br>&nbsp;&nbsp;padding: 14px 16px;<br>
            &nbsp;text-decoration: none;<br>
            &nbsp;font-size: 17px;<br>&nbsp; border-bottom: 3px solid transparent;<br>
            }<br><br>
            .topnav a:hover {<br>&nbsp; border-bottom: 3px solid red;<br>}<br><br>
            .topnav a.active {<br>&nbsp; border-bottom: 3px solid red;<br>}<br></div>
        <a target="_blank" href="../howtotryit/tryhow_css_navbar_border.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p><b>Совет:</b> Чтобы научиться создавать удобные для мобильных устройств и гибкие панели навигации, прочтите главу <a href="howto_js_topnav_responsive.php">Как сделать - Адаптивная верхняя навигация</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <p><b>Совет:</b> Перейдите к учебнику <a href="../css/css_navbar.php">CSS Навбар</a>, чтобы узнать больше о панелях навигации на сайте.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_bottom_nav_responsive.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_topnav_right.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>