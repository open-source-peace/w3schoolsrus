<?php include '../include/head_howto.php'; ?>
<title>Как сделать скользящий навбар при прокрутке? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать скользящую панель навигации при прокрутке на сайте с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_js_navbar_slide.html' rel='canonical'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Скользящий вниз навбар при прокрутке</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_css_fixed_menu.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_navbar_hide_scroll.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как сдвинуть панель навигации вниз при прокрутке</strong> с помощью CSS и JavaScript.</p>
    <hr>
    <iframe src="../howtotryit/tryhow_js_navbar_slide.html" class="w3-border w3-border-light-grey" style="width:100%;border:none;height:200px;padding:0"></iframe>
    <p><a target="_blank" href="../howtotryit/tryhow_js_navbar_slide.html" class="ws-btn">Попробуйте сами &raquo;</a></p>
    <hr>
    <h2>Как сделать скользящий вниз навбар</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <p>Создать панель навигации:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div id=&quot;navbar&quot;&gt;<br>&nbsp; &lt;a href=&quot;#home&quot;&gt;Главная&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#news&quot;&gt;Новости&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#contact&quot;&gt;Контакты&lt;/a&gt;<br>&lt;/div&gt;</div>
    </div>
    <hr>
    <h5>Шаг 2) Добавить CSS:</h5>
    <p>Стиль навигационной панели:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #navbar {<br>&nbsp;&nbsp;background-color: #333; /* Черный цвет фона */<br>&nbsp;&nbsp;position: fixed; /* Сделайте его прикреплённым/фиксированным */<br>&nbsp;&nbsp;top: -50px; /* Скрыть панель навигации на 50 пикселей за пределами вида сверху */<br>&nbsp;&nbsp;width: 100%; /* На всю ширину */<br>&nbsp;&nbsp;transition: top 0.3s; /* Эффект перехода при скольжении вниз (и вверх) */<br>}<br>
            <br>/* Стиль ссылок навбара */<br>#navbar a {<br>&nbsp;&nbsp;float: left;<br>&nbsp;&nbsp;display: block;<br>&nbsp;&nbsp;color: white;<br>&nbsp;&nbsp;text-align: center;<br>&nbsp;&nbsp;padding: 15px;<br>&nbsp;text-decoration: none;<br>}<br><br>#navbar a:hover {<br>&nbsp;&nbsp;background-color: #ddd;<br>&nbsp;&nbsp;color: black;<br>}</div>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h5>Шаг 3) Добавить JavaScript:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Когда пользователь прокручивает вниз 20 пикселей от верха документа, сдвиньте панель навигации вниз<br>// Когда пользователь прокручивает страницу вверх, сдвиньте панель навигации вверх (50 пикселей из вида сверху)<br>window.onscroll = function() {scrollFunction()};<br>
            <br>function scrollFunction() {<br>&nbsp; if (document.body.scrollTop &gt; 20 || document.documentElement.scrollTop &gt; 20) {<br>&nbsp;&nbsp;&nbsp; document.getElementById(&quot;navbar&quot;).style.top = &quot;0&quot;;<br>&nbsp; } else {<br>&nbsp;&nbsp;&nbsp;
            document.getElementById(&quot;navbar&quot;).style.top = &quot;-50px&quot;;<br>&nbsp; }<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_js_navbar_slide.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_css_fixed_menu.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_navbar_hide_scroll.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>