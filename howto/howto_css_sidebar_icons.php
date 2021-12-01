<?php include '../include/head_howto.php'; ?>
<title>Как сделать сайдбар с иконками? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать боковую навигацию с иконками на сайте с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_css_sidebar_icons.html' rel='canonical'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Сайдбар с иконками</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_css_sidenav_buttons.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_menu_horizontal_scroll.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как создать боковое меню навигации с иконками</strong>, используя CSS.</p>
    <hr>
    <iframe src="../howtotryit/tryhow_css_sidebar_icons_ifr.html" style="width:100%;height:280px" class="w3-border"></iframe>
    <p><a target="_blank" href="../howtotryit/tryhow_css_sidebar_icons.html" class="ws-btn">Попробуйте сами &raquo;</a></p>
    <hr>
    <h2>Как создать сайдбар с иконками</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!-- Загрузить библиотеку иконок --&gt;<br>&lt;link rel=&quot;stylesheet&quot; href=&quot;https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css&quot;&gt;<br>
            <br>&lt;!-- Сайдбар --&gt;<br>&lt;div class=&quot;sidebar&quot;&gt;<br>&nbsp; &lt;a href=&quot;#home&quot;&gt;&lt;i
            class=&quot;fa fa-fw fa-home&quot;&gt;&lt;/i&gt; Главная&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#services&quot;&gt;&lt;i
            class=&quot;fa fa-fw fa-wrench&quot;&gt;&lt;/i&gt; Сервисы&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#clients&quot;&gt;&lt;i
            class=&quot;fa fa-fw fa-user&quot;&gt;&lt;/i&gt; Клиенты&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#contact&quot;&gt;&lt;i
            class=&quot;fa fa-fw fa-envelope&quot;&gt;&lt;/i&gt; Контакты&lt;/a&gt;<br>&lt;/div&gt;</div>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h5>Шаг 2) Добавить CSS:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Стиль боковой панели - фиксированная полная высота */<br>.sidebar {<br>&nbsp; height:
            100%;<br>&nbsp; width: 160px;<br>&nbsp; position: fixed;<br>&nbsp; z-index: 1;<br>&nbsp;
            top: 0;<br>&nbsp; left: 0;<br>&nbsp; background-color: #111;<br>&nbsp;
            overflow-x: hidden;<br>&nbsp; padding-top: 16px;<br>}<br><br>/* Стиль ссылок сайдбара */<br>
            .sidebar a {<br>&nbsp; padding: 6px 8px 6px 16px;<br>&nbsp; text-decoration: none;<br>&nbsp; font-size: 20px;<br>&nbsp;
            color: #818181;<br>&nbsp; display: block;<br>}<br><br>/* Стиль ссылок при наведении указателя мыши */<br>
            .sidebar a:hover {<br>&nbsp; color: #f1f1f1;<br>}<br>
            <br>/* Стиль главного содержимого */<br>.main {<br>&nbsp; margin-left: 160px; /* То же, что и ширина боковой панели */<br>&nbsp;
            padding: 0px 10px;<br>}<br><br>/* Добавьте медиа-запросы для маленьких экранов (когда высота экрана меньше 450 пикселей, добавьте меньшие отступы и размер шрифта) */<br>@media screen and (max-height: 450px) {<br>&nbsp;
            .sidebar {padding-top: 15px;}<br>&nbsp; .sidebar a {font-size: 18px;}<br>}<br></div>
        <a target="_blank" href="../howtotryit/tryhow_css_sidebar_icons.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <p><b>Совет:</b> Перейдите в учебник <a href="../css/css_navbar.php">CSS Навбар</a> на нашем сайте <?php include '../include/w3schools.php'; ?>, чтобы узнать больше о навигационной панели.</p>
    <p><b>Совет:</b> Если вы хотите создать панель навигации, содержащую только иконки, прочтите главу <a href="howto_css_icon_bar.php">Как сделать - Панель с иконками</a>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_css_sidenav_buttons.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_menu_horizontal_scroll.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>