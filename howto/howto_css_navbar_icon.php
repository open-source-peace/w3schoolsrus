<?php include '../include/head_howto.php'; ?>
<title>Как сделать адаптивный навбар с иконками? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать адаптивную навигационную панель с иконками с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_css_navbar_icon.html' rel='canonical'>
    <style>
        .navbar {
            width: 100%;
            background-color: #555;
            overflow: auto;
        }
        .navbar a {
            float: left;
            text-align: center;
            padding: 12px;
            color: white;
            text-decoration: none;
            font-size: 17px;
        }
        .navbar a:hover {
            background-color: #000;
        }
        .activenavbara {
            background-color: #04AA6D;
        }
        @media screen and (max-width: 500px) {
            .navbar a {
                float: none;
                display: block;
                text-align: left;
            }
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Навбар с иконками</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_topnav_responsive.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_search_menu.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как создать адаптивное меню навигации с иконками</strong> с помощью CSS.</p>
    <hr>
    <h2>Навигационная панель с иконками</h2>

    <div class="navbar">
        <a class="activenavbara" href="javascript:void(0)"><i class="fa fa-fw fa-home"></i> Главная</a>
        <a href="javascript:void(0)"><i class="fa fa-fw fa-search"></i> Поиск</a>
        <a href="javascript:void(0)"><i class="fa fa-fw fa-envelope"></i> Контакты</a>
        <a href="javascript:void(0)"><i class="fa fa-fw fa-user"></i> Войти</a>
    </div>

    <p><a target="_blank" href="../howtotryit/tryhow_css_navbar_icon.html" class="ws-btn">Попробуйте сами &raquo;</a></p>
    <hr style="clear:both;">
    <h2>Создайте адаптивную навигационную панель с иконками</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!-- Загрузите библиотеку иконок --&gt;<br>
            &lt;link rel=&quot;stylesheet&quot; href=&quot;https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css&quot;&gt;<br>
            <br>&lt;div class=&quot;navbar&quot;&gt;<br>&nbsp; &lt;a class=&quot;active&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;fa
            fa-fw fa-home&quot;&gt;&lt;/i&gt;
            Главная&lt;/a&gt; <br>&nbsp; &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-fw fa-search&quot;&gt;&lt;/i&gt; Поиск&lt;/a&gt; <br>&nbsp;
            &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-fw fa-envelope&quot;&gt;&lt;/i&gt; Контакты&lt;/a&gt; <br>&nbsp; &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-fw fa-user&quot;&gt;&lt;/i&gt; Войти&lt;/a&gt;<br>&lt;/div&gt;</div>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h5>Шаг 2) Добавить CSS:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Стиль панели навигации */<br>.navbar {<br>&nbsp; width: 100%;<br>&nbsp;
            background-color: #555;<br>&nbsp; overflow: auto;<br>}<br>
            <br>/* Ссылки на панели навигации */<br>.navbar a {<br>&nbsp; float: left;<br>&nbsp;
            text-align: center;<br>&nbsp; padding: 12px;<br>&nbsp; color: white;<br>&nbsp;
            text-decoration: none;<br>&nbsp; font-size: 17px;<br>}<br><br>/* Ссылки на панели навигации при наведении курсора */<br>.navbar a:hover {<br>&nbsp; background-color: #000;<br>}<br><br>/* Текущая/активная ссылка на панели навигации */<br>
            .active {<br>&nbsp; background-color: #04AA6D;<br>}<br><br>/* Добавить адаптивность - панель навигации будет автоматически отображаться вертикально, а не горизонтально на экранах менее 500 пикселей */<br>
            @media screen and (max-width: 500px) {<br>&nbsp; .navbar a {<br>&nbsp;&nbsp;&nbsp;
            float: none;<br>&nbsp;&nbsp;&nbsp; display: block;<br>&nbsp; }<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_css_navbar_icon.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <p><b>Совет:</b> Перейдите к учебнику <a href="../css/css_navbar.php">CSS Навбар</a> чтобы узнать больше о панелях навигации.</p>
    <p><b>Совет:</b> Если вы хотите создать панель навигации, содержащую только иконки, прочтите раздел <a href="howto_css_icon_bar.php">Как сделать - Панель с иконками</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_topnav_responsive.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_search_menu.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>