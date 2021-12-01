<?php include '../include/head_howto.php'; ?>
<title>Как сделать адаптивную нижнюю панель навигации? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать адаптивную нижнюю панель навигации на сайте с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_js_bottom_nav_responsive.html' rel='canonical'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Адаптивная нижняя навигация</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_css_bottom_nav.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_navbar_border.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как создать адаптивное нижнее меню навигации</strong> с помощью CSS и JavaScript.</p>
    <hr>
    <h2>Адаптивное нижнее меню навигации</h2>
    <p>Измените размер окна браузера, чтобы увидеть, как работает адаптивное нижнее меню навигации:</p>
    <iframe src="../howtotryit/tryhow_js_bottom_nav_tutorial_ifr.html" style="height:300px;width:100%;border:3px solid #f1f1f1"></iframe>
    <p><a target="_blank" href="../howtotryit/tryhow_js_bottom_nav.html" class="ws-btn">Попробуйте сами &raquo;</a></p>

    <hr style="clear:both;">
    <h2>Создать адаптивный нижний навбар</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class="navbar"
            id="myNavbar"&gt;<br>&nbsp; &lt;a href=&quot;#home&quot;&gt;Главная&lt;/a&gt;<br>&nbsp;
            &lt;a href=&quot;#news&quot;&gt;Новости&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#contact&quot;&gt;Контакты&lt;/a&gt;<br>&nbsp;
            &lt;a href=&quot;#about&quot;&gt;Про нас&lt;/a&gt;<br>&nbsp;&nbsp;&lt;a href="javascript:void(0);"
            class=&quot;icon&quot; onclick="myFunction()"&gt;&amp;#9776;&lt;/a&gt;<br>&lt;/div&gt;</div>
    </div>
    <p>Ссылка с class="icon" используется для открытия и закрытия панели навигации на маленьких экранах.</p>
    <hr>
    <h5>Шаг 2) Добавить CSS:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Поместите панель навигации внизу страницы и сделайте так, чтобы она прилипала */<br>.navbar {<br>&nbsp;&nbsp;background-color: #333;<br>&nbsp;&nbsp;overflow: hidden;<br>&nbsp;&nbsp;position: fixed;<br>&nbsp;&nbsp;bottom: 0;<br>&nbsp;&nbsp;width:
            100%;<br>}<br><br>/* Стиль ссылок внутри панели навигации */<br>.navbar a {<br>&nbsp;&nbsp;float: left;<br>&nbsp;&nbsp;display: block;<br>&nbsp;&nbsp;color: #f2f2f2;<br>&nbsp;&nbsp;text-align: center;<br>
            &nbsp; padding: 14px 16px;<br>&nbsp; text-decoration: none;<br>&nbsp;&nbsp;font-size: 17px;<br>}<br><br>/* Изменить цвет ссылок при наведении */<br>
            .navbar a:hover {<br>&nbsp; background-color: #ddd;<br>&nbsp;
            color: black;<br>}<br><br>/* Добавьте зеленый цвет фона к активной ссылке */<br>.navbar
            a.active {<br>&nbsp; background-color: #04AA6D;<br>&nbsp;
            color: white;<br>}<br><br>/* Скрыть ссылку, которая должна открывать и закрывать навигационную панель на маленьких экранах */<br>
            .navbar .icon {<br>&nbsp;&nbsp;display: none;<br>}</div>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <p>Добавить медиа-запросы:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Если ширина экрана меньше 600 пикселей, скрыть все ссылки, кроме первой (Главная). Показать ссылку, которая содержит, должна открывать и закрывать панель навигации (.icon) */<br>@media screen and (max-width: 600px) {<br>&nbsp; .navbar a:not(:first-child)
            {display: none;}<br>&nbsp; .navbar a.icon {<br>&nbsp;&nbsp;&nbsp; float: right;<br>&nbsp;&nbsp;&nbsp; display: block;<br>&nbsp; }<br>}<br><br>
            /* Класс "responsive" добавляется на панель навигации с помощью JavaScript, когда пользователь кликает иконку. Этот класс заставляет навигационную панель хорошо выглядеть на маленьких экранах (отображать ссылки вертикально, а не горизонтально) */<br>@media screen and (max-width: 600px) {<br>&nbsp; .navbar.responsive a.icon {<br>&nbsp;&nbsp;&nbsp; position: absolute;<br>&nbsp;&nbsp;&nbsp;
            right: 0;<br>&nbsp;&nbsp;&nbsp; bottom: 0;<br>&nbsp; }<br>&nbsp;
            .navbar.responsive a {<br>&nbsp;&nbsp;&nbsp; float: none;<br>&nbsp;&nbsp;&nbsp;
            display: block;<br>&nbsp;&nbsp;&nbsp; text-align: left;<br>&nbsp; }<br>}</div>
    </div>
    <hr>
    <h5>Шаг 3) Добавить JavaScript:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            /* Переключайтесь между добавлением и удалением "responsive" класса на панели навигации, когда пользователь нажимает иконку */<br>function myFunction() {<br>&nbsp;&nbsp;var x = document.getElementById("myNavbar");<br>
            &nbsp; if (x.className === "navbar") {<br>&nbsp;&nbsp;&nbsp; x.className += "responsive";<br>&nbsp;&nbsp;} else {<br>&nbsp;&nbsp;&nbsp; x.className = "navbar";<br>&nbsp;&nbsp;}<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_js_bottom_nav.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><b>Совет:</b> Перейдите к учебнику <a href="../css/css_navbar.php">CSS Навбар</a> на нашем сайте <?php include '../include/w3schools.php'; ?>, чтобы узнать больше о панелях навигации.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_css_bottom_nav.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_navbar_border.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>