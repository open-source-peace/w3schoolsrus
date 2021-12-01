<?php include '../include/head_howto.php'; ?>
<title>Как сделать, чтобы навбар скрывался при прокрутке? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать скрывающуюся панель навигации при прокрутке на сайте с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_js_navbar_hide_scroll.html' rel='canonical'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Скрыть меню при прокрутке</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_navbar_slide.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_navbar_shrink_scroll.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как скрыть меню навигации при прокрутке вниз</strong> с помощью CSS и JavaScript.</p>
    <hr>
    <iframe src="../howtotryit/tryhow_js_navbar_hide_scroll.html" style="width:100%;border:3px solid #e9e9e9;height:300px;padding:0"></iframe>
    <p><a target="_blank" href="../howtotryit/tryhow_js_navbar_hide_scroll.html" class="ws-btn">Попробуйте сами &raquo;</a></p>
    <hr>
    <h2>Как скрыть панель навигации при прокрутке вниз</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <p>Создать панель навигации:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div id=&quot;navbar&quot;&gt;<br>&nbsp; &lt;a href=&quot;#home&quot;&gt;Главная&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#news&quot;&gt;Новости&lt;/a&gt;<br>&nbsp;
            &lt;a href=&quot;#contact&quot;&gt;Контакты&lt;/a&gt;<br>&lt;/div&gt;</div>
    </div>
    <hr>
    <h5>Шаг 2) Добавить CSS:</h5>
    <p>Стиль панели навигации:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #navbar {<br>&nbsp;&nbsp;background-color: #333; /* Черный цвет фона */<br>&nbsp;&nbsp;position: fixed; /* Сделать панель приклеенной / фиксированной
            */<br>&nbsp; top: 0; /* Остаться вверху */<br>&nbsp;&nbsp;width: 100%; /* На всю ширину */<br>&nbsp;&nbsp;transition: top 0.3s; /* Эффект перехода при скольжении вниз (и вверх) */<br>}<br>
            <br>/* Стиль ссылок навбара */<br>#navbar a {<br>&nbsp; float: left;<br>&nbsp;
            display: block;<br>&nbsp; color: white;<br>&nbsp;
            text-align: center;<br>&nbsp; padding: 15px;<br>&nbsp;
            text-decoration: none;<br>}<br><br>#navbar
            a:hover {<br>&nbsp;&nbsp;background-color: #ddd;<br>&nbsp;
            color: black;<br>}</div>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h5>Шаг 3) Добавить JavaScript:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            /* Когда пользователь прокручивает вниз, панель навигации скрывается. Когда пользователь прокручивает вверх, панель навигации отображается */<br>var prevScrollpos = window.pageYOffset;<br>window.onscroll =
            function() {<br>&nbsp; var currentScrollPos = window.pageYOffset;<br>&nbsp; if (prevScrollpos &gt; currentScrollPos) {<br>&nbsp;&nbsp;&nbsp;
            document.getElementById(&quot;navbar&quot;).style.top = &quot;0&quot;;<br>&nbsp; } else {<br>&nbsp;&nbsp;&nbsp;
            document.getElementById(&quot;navbar&quot;).style.top = &quot;-50px&quot;;<br>&nbsp; }<br>&nbsp;
            prevScrollpos = currentScrollPos;<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_js_navbar_hide_scroll.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_navbar_slide.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_navbar_shrink_scroll.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>