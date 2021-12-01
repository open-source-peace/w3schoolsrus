<?php include '../include/head_howto.php'; ?>
<title>Как сделать панель поиска? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать панель поиска с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_css_searchbar.html' rel='canonical'>
    <style>
        .topnav2 {
            overflow: hidden;
            background-color: #e9e9e9;
        }
        .topnav2 a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        .topnav2 a:hover {
            background-color: #ddd;
            color: black;
        }
        .topnav2 a.active {
            background-color: #2196F3;
            color: white;
        }
        .topnav2 .search-container { float: right;}
        .topnav2 input[type=text]{
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
        }
        .topnav2 .search-container button {
            float: right;
            padding: 6px 10px;
            margin-top: 8px;
            margin-right: 16px;
            background: #d7d7d7;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }
        .topnav2 .search-container button:hover {
            background: #ccc;
        }
        @media screen and (max-width: 600px) {
            .topnav2 .search-container {
                float: none;
            }
            .topnav2 a, .topnav2 input[type=text], .topnav2 .search-container button {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }
            .topnav2 input[type=text] {
                border: 1px solid #ccc;
            }
        }
        .topnav3 {
            overflow: hidden;
            background-color: #e9e9e9;
        }
        .topnav3 a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        .topnav3 a:hover {
            background-color: #ddd;
            color: black;
        }
        .topnav3 a.active {
            background-color: #2196F3;
            color: white;
        }
        .topnav3 .search-container {
            float: right;
        }
        .topnav3 input[type=text]{
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
        }
        .topnav3 .search-container button {
            float: right;
            padding: 6px;
            margin-top: 8px;
            margin-right: 16px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }
        .topnav3 .search-container button:hover {
            background: #ccc;
        }
        @media screen and (max-width: 600px) {
            .topnav3 .search-container {
                float: none;
            }
            .topnav3 a, .topnav3 input[type=text], .topnav3 .search-container button {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }
            .topnav3 input[type=text] {
                border: 1px solid #ccc;
            }
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Панель поиска</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_search_menu.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_fixed_sidebar.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как добавить поле поиска в адаптивное меню навигации</strong> на сайте.</p>
    <hr>
    <h2>Панель поиска</h2>

    <div class="topnav2">
        <a class="active" href="javascript:void(0)">Главная</a>
        <a href="javascript:void(0)">Про нас</a>
        <a href="javascript:void(0)">Контакты</a>
        <div class="search-container">
            <input type="text" placeholder="Поиск..">
            <button type="button"><i class="fa fa-search"></i></button>
        </div>
    </div>
    <p><a target="_blank" href="../howtotryit/tryhow_css_searchbar3.html" class="ws-btn">Попробуйте сами &raquo;</a></p>

    <hr style="clear:both;">
    <h2>Создать панель поиска</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;topnav&quot;&gt;<br>&nbsp; &lt;a class=&quot;active&quot; href=&quot;#home&quot;&gt;Главная&lt;/a&gt;<br>&nbsp;
            &lt;a href=&quot;#about&quot;&gt;Про нас&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#contact&quot;&gt;Контакты&lt;/a&gt;<br>&nbsp;
            &lt;input type=&quot;text&quot; placeholder=&quot;Поиск..&quot;&gt;<br>&lt;/div&gt;</div>
    </div>
    <hr>
    <h5>Шаг 2) Добавить CSS:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Добавьте черный цвет фона к верхней панели навигации */<br>.topnav {<br>&nbsp;&nbsp;overflow: hidden;<br>&nbsp;&nbsp;background-color: #e9e9e9;<br>}<br><br>/* Стиль ссылок внутри панели навигации */<br>.topnav
            a {<br>&nbsp; float: left;<br>&nbsp; display: block;<br>&nbsp; color: black;<br>&nbsp; text-align: center;<br>&nbsp;
            padding: 14px 16px;<br>&nbsp; text-decoration: none;<br>&nbsp;
            font-size: 17px;<br>}<br><br>/* Изменить цвет ссылок при наведении */<br>.topnav a:hover {<br>
            &nbsp; background-color: #ddd;<br>&nbsp;
            color: black;<br>}<br>
            <br>/* Стиль элемента &quot;active&quot; для выделения текущей страницы */<br>.topnav a.active {<br>
            &nbsp; background-color: #2196F3;<br>&nbsp;&nbsp;color: white;<br>}<br>
            <br>/* Стиль окна поиска внутри панели навигации */<br>.topnav input[type=text] {<br>&nbsp;&nbsp;float: right;<br>&nbsp;&nbsp;padding: 6px;<br>&nbsp;&nbsp;border: none;<br>&nbsp;&nbsp;margin-top: 8px;<br>&nbsp;&nbsp;margin-right: 16px;<br>
            &nbsp; font-size: 17px;<br>}<br><br>/* Если ширина экрана меньше 600 пикселей, расположите ссылки и поле поиска вертикально, а не горизонтально */<br>@media screen and (max-width: 600px) {<br>&nbsp;
            .topnav a, .topnav input[type=text] {<br>&nbsp;&nbsp;&nbsp;
            float: none;<br>&nbsp;&nbsp;&nbsp; display: block;<br>&nbsp;&nbsp;&nbsp;
            text-align: left;<br>&nbsp;&nbsp;&nbsp; width: 100%;<br>&nbsp;&nbsp;&nbsp;
            margin: 0;<br>&nbsp;&nbsp;&nbsp; padding: 14px;<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;.topnav input[type=text] {<br>&nbsp;&nbsp;&nbsp; border: 1px solid #ccc;<br>&nbsp;&nbsp;}<br>}<br></div>
        <a target="_blank" href="../howtotryit/tryhow_css_searchbar.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h2>Пример с кнопкой отправки</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-white w3-padding w3-padding-16">
            <div class="topnav3">
                <a class="active" href="javascript:void(0)">Главная</a>
                <a href="javascript:void(0)">Про нас</a>
                <div class="search-container">
                    <input type="text" placeholder="Поиск..">
                    <button type="button">Отправить</button>
                </div>
            </div>
        </div>
        <a target="_blank" href="../howtotryit/tryhow_css_searchbar2.html" class="ws-btn w3-margin-top w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <h2>Пример с иконкой отправки</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-white w3-padding w3-padding-16">
            <div class="topnav2">
                <a class="active" href="javascript:void(0)">Главная</a>
                <a href="javascript:void(0)">Про нас</a>
                <div class="search-container">
                    <input type="text" placeholder="Поиск..">
                    <button type="button"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
        <a target="_blank" href="../howtotryit/tryhow_css_searchbar3.html" class="ws-btn w3-margin-top w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p><b>Совет:</b> Чтобы создать удобные для мобильных устройств, адаптивные панели навигации, прочитайте главу <a href="howto_js_topnav_responsive.php">Как сделать - Адаптивная верхняя навигация</a>.</p>
    <p><b>Совет:</b> Перейдите в учебник <a href="../css/css_navbar.php">CSS Навбар</a>, чтобы узнать больше о панелях навигации на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_search_menu.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_fixed_sidebar.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>