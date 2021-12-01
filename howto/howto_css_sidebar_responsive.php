<?php include '../include/head_howto.php'; ?>
<title>Как сделать адаптивный сайдбар? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать адаптивную боковую панель навигации с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_css_sidebar_responsive.html' rel='canonical'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Адаптивный сайдбар</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="howto_js_sidenav.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="howto_js_fullscreen_overlay.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, как создать <strong>адаптивное боковое навигационное меню</strong> с помощью CSS.</p>
    <hr>
    <iframe src="../howtotryit/tryhow_css_sidebar_responsive_ifr.html" style="width:100%;border:4px solid #e9e9e9;height:300px;padding:0;"></iframe>
    <a target="_blank" href="../howtotryit/tryhow_css_sidebar_responsive.html" class="ws-btn w3-margin-top">Попробуйте сами &raquo;</a>
    <hr>

    <h2>Создать адаптивный сайдбар</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!-- Сайдбар --&gt;<br>&lt;div class=&quot;sidebar&quot;&gt;<br>&nbsp; &lt;a class=&quot;active&quot; href=&quot;#home&quot;&gt;Home&lt;/a&gt;<br>&nbsp;
            &lt;a href=&quot;#news&quot;&gt;News&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#contact&quot;&gt;Contact&lt;/a&gt;<br>&nbsp; &lt;a
            href=&quot;#about&quot;&gt;About&lt;/a&gt;<br>&lt;/div&gt;<br><br>&lt;!-- Содержимое страницы --&gt;<br>&lt;div
            class=&quot;content&quot;&gt;<br>&nbsp; ..<br>
            &lt;/div&gt;</div>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h5>Шаг 2) Добавить CSS:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Боковое навигационное меню */<br>.sidebar {<br>&nbsp; margin: 0;<br>&nbsp;
            padding: 0;<br>&nbsp; width: 200px;<br>&nbsp; background-color: #f1f1f1;<br>&nbsp;
            position: fixed;<br>&nbsp; height: 100%;<br>&nbsp; overflow: auto;<br>}<br><br>/* Сайдбар ссылки */<br>.sidebar a {<br>&nbsp; display:
            block;<br>&nbsp; color: black;<br>&nbsp; padding: 16px;<br>&nbsp;
            text-decoration: none;<br>}<br><br>/* Активная/текущая ссылка */<br>.sidebar a.active {<br>&nbsp;
            background-color: #4CAF50;<br>&nbsp; color: white;<br>}<br><br>/* Ссылки при наведении мыши */<br>.sidebar a:hover:not(.active) {<br>&nbsp; background-color: #555;<br>&nbsp;
            color: white;<br>}<br><br>/* Содержание страницы. Значение свойства margin-left должно соответствовать значению свойства width боковой панели */<br>
            div.content {<br>&nbsp; margin-left: 200px;<br>&nbsp; padding: 1px 16px;<br>&nbsp;
            height: 1000px;<br>}<br><br>/* На экранах шириной менее 700 пикселей превратить боковую панель в верхнюю панель */<br>@media screen and (max-width: 700px) {<br>&nbsp; .sidebar
            {<br>&nbsp;&nbsp;&nbsp; width: 100%;<br>&nbsp;&nbsp;&nbsp; height: auto;<br>&nbsp;&nbsp;&nbsp;
            position: relative;<br>&nbsp; }<br>&nbsp; .sidebar a {float: left;}<br>&nbsp;
            div.content {margin-left: 0;}<br>}<br><br>/* На экранах размером менее 400 пикселей панель отображать вертикально, а не горизонтально */<br>@media screen
            and (max-width: 400px) {<br>&nbsp; .sidebar a {<br>&nbsp;&nbsp;&nbsp; text-align:
            center;<br>&nbsp;&nbsp;&nbsp; float: none;<br>&nbsp; }<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_css_sidebar_responsive.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <p><b>Совет:</b> Посетите <a href="../css/css_navbar.php">CSS Навбар учебник</a>, чтобы узнать больше о панелях навигации на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="howto_js_sidenav.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="howto_js_fullscreen_overlay.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>