<?php include '../include/head_howto.php'; ?>
<title>Как сделать ссылки меню равной ширины? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать ссылки навигационной панели равной ширины на сайте с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_css_topnav_equal_width.html' rel='canonical'>
    <style>
        .navbarx {width: 100%;background-color: #555;overflow: auto;}
        .navbarx a {float: left;padding: 12px;color: white;text-decoration: none;font-size: 17px;width: 25%;text-align: center;}
        .navbarx a:hover {background-color: #000;}
        .navbarx a.activexx {background-color: #04AA6D;}
        @media screen and (max-width: 500px) {.navbarx a {float: none;display: block;width: 100%;text-align: left;}}
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Ссылки меню равной ширины</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_css_topnav_centered.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_fixed_menu.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как создать панель навигации с навигационными ссылками одинаковой ширины</strong> на сайте.</p>
    <hr>
    <h2>Ссылки меню равной ширины</h2>
    <div class="navbarx">
        <a class="activexx" href="javascript:void(0)">Главная</a>
        <a href="javascript:void(0)">Поиск</a>
        <a href="javascript:void(0)">Контакты</a>
        <a href="javascript:void(0)">Авторизация</a>
    </div>
    <p><a target="_blank" href="../howtotryit/tryhow_css_topnav_equal_width.html" class="ws-btn">Попробуйте сами &raquo;</a></p>
    <hr style="clear:both;">
    <h2>Создайте адаптивную панель навигации</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!-- Меню навигации --&gt;<br>&lt;div class=&quot;navbar&quot;&gt;<br>&nbsp; &lt;a class=&quot;active&quot; href=&quot;#&quot;&gt;Главная&lt;/a&gt; <br>&nbsp; &lt;a href=&quot;#&quot;&gt;Поиск&lt;/a&gt; <br>&nbsp; &lt;a href=&quot;#&quot;&gt;Контакты&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#&quot;&gt;Авторизация&lt;/a&gt;<br>&lt;/div&gt;</div>
    </div>
    <hr>
    <h5>Шаг 2) Добавить CSS:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Стиль меню навигации */<br>.navbar {<br>&nbsp; width: 100%;<br>&nbsp; background-color: #555;<br>&nbsp;
            overflow: auto;<br>}<br><br>/* Навигационные ссылки */<br>.navbar a {<br>&nbsp; float: left;<br>&nbsp; padding: 12px;<br>&nbsp;
            color: white;<br>&nbsp; text-decoration: none;<br>&nbsp; font-size: 17px;<br>&nbsp;
            width: 25%; /* Четыре звена одинаковой ширины. Если у вас две ссылки, используйте 50% и 33,33% для трех ссылок и т.д. */<br>&nbsp; text-align: center;
            /* Если вы хотите, чтобы текст был по центру */<br>}<br><br>/* Добавить цвет фона при наведении указателя мыши */<br>.navbar a:hover {<br>&nbsp; background-color: #000;<br>}<br>
            <br>/* Стиль текущей / активной ссылки */<br>.navbar a.active {<br>&nbsp; background-color: #04AA6D;<br>}<br><br>/* Добавьте адаптивности - на экранах менее 500 пикселей сделайте так, чтобы ссылки навигации отображались друг над другом, а не рядом друг с другом */<br>@media screen and
            (max-width: 500px) {<br>&nbsp; .navbar a {<br>&nbsp;&nbsp;&nbsp; float: none;<br>&nbsp;&nbsp;&nbsp;display: block;<br>&nbsp;&nbsp;&nbsp; width: 100%;<br>&nbsp;&nbsp;&nbsp;
            text-align: left; /* Если вы хотите, чтобы текст был выровнен по левому краю на маленьких экранах */<br>&nbsp; }<br>}<br><br></div>
        <a target="_blank" href="../howtotryit/tryhow_css_topnav_equal_width.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h2>Навигационные ссылки одинаковой ширины с иконками</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-white w3-padding w3-padding-16">
            <div class="navbarx">
                <a class="activexx" href="javascript:void(0)"><i class="fa fa-fw fa-home"></i> Главная</a>
                <a href="javascript:void(0)"><i class="fa fa-fw fa-search"></i> Поиск</a>
                <a href="javascript:void(0)"><i class="fa fa-fw fa-envelope"></i> Контакты</a>
                <a href="javascript:void(0)"><i class="fa fa-fw fa-user"></i> Авторизация</a>
            </div>
        </div>
        <a target="_blank" href="../howtotryit/tryhow_css_topnav_equal_width_icons.html" class="ws-btn w3-margin-top w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <p><b>Совет:</b> Перейдите к учебнику <a href="../css/css_navbar.php">CSS Навбар</a> на нашем сайте <?php include '../include/w3schools.php'; ?>, чтобы узнать больше о панелях навигации.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_css_topnav_centered.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_fixed_menu.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>