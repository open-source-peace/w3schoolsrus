<?php include '../include/head_howto.php'; ?>
<title>Как сделать фиксированное меню? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как создать фиксированное меню на сайте с помощью HTML, CSS? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_css_fixed_menu.html' rel='canonical'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Фиксированное меню</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_css_topnav_equal_width.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_navbar_slide.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как сделать &quot;фиксированное&quot; меню на сайте</strong> с помощью CSS.</p>
    <hr>
    <iframe src="../howtotryit/tryhow_css_fixed_menu.html" style="width:100%;height:300px;border:1px solid #ddd"></iframe>
    <p><a target="_blank" href="../howtotryit/tryhow_css_fixed_menu.html" class="ws-btn">Попробуйте сами &raquo;</a></p>
    <hr>
    <h2>Как создать фиксированное верхнее меню</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;navbar&quot;&gt;<br>&nbsp; &lt;a href=&quot;#home&quot;&gt;Главная&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#news&quot;&gt;Новости&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#contact&quot;&gt;Контакты&lt;/a&gt;<br>&lt;/div&gt;<br><br>&lt;div class=&quot;main&quot;&gt;<br>&nbsp;&lt;p&gt;Какой-то бессмысленный текст..&lt;/p&gt;<br>&lt;/div&gt;</div>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h5>Шаг 2) Добавить CSS:</h5>
    <p>Чтобы создать фиксированное верхнее меню, используйте <code class="w3-codespan">position:fixed</code> и <code class="w3-codespan">top:0</code>. Обратите внимание, что фиксированное меню будет перекрывать другой ваш контент. Чтобы исправить это, добавьте <code class="w3-codespan">margin-top</code> (к содержимому), который равен или больше высоты вашего меню.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Панель навигации */<br>.navbar {<br>&nbsp;&nbsp;overflow: hidden;<br>&nbsp;
            background-color: #333;<br>&nbsp; <strong>position: fixed;</strong> /* Установите панель навигации в фиксированное положение */<br>&nbsp; <strong>top: 0;</strong> /* Расположите панель навигации вверху страницы */<br>&nbsp; <strong>width: 100%;</strong> /* На всю ширину */<br>}<br><br>/* Ссылки внутри навбара */<br>.navbar a {<br>&nbsp;&nbsp;float: left;<br>&nbsp; display: block;<br>&nbsp; color: #f2f2f2;<br>&nbsp; text-align: center;<br>&nbsp; padding: 14px 16px;<br>&nbsp; text-decoration: none;<br>}<br><br>/* Изменить фон при наведении указателя мыши */<br>.navbar a:hover {<br>&nbsp;&nbsp;background: #ddd;<br>&nbsp;&nbsp;color: black;<br>}<br><br>/* Основное содержимое */<br>.main {<br>&nbsp;&nbsp;margin-top: 30px; /* Добавьте верхнее поле, чтобы избежать наложения контента */<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_css_fixed_menu.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h2>Как создать фиксированное нижнее меню</h2>
    <p>Чтобы создать фиксированное нижнее меню, используйте <code class="w3-codespan">position:fixed</code> и <code class="w3-codespan">bottom:0</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Панель навигации */<br>.navbar {<br>&nbsp;&nbsp;position: fixed; /* Установите панель навигации в фиксированное положение */<br>&nbsp;&nbsp;bottom: 0; /* Расположите панель навигации внизу страницы */<br>&nbsp;&nbsp;width: 100%; /* На всю ширину */<br>}<br><br>/* Основное содержимое */<br>.main {<br>&nbsp; margin-bottom: 30px; /* Добавьте нижнее поле, чтобы избежать наложения контента */<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_css_fixed_menu_bottom.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><b>Совет:</b> Перейдите к учебнику <a href="../css/css_navbar.php">CSS Навбар</a> на нашем сайте <?php include '../include/w3schools.php'; ?>, чтобы узнать больше о панелях навигации.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_css_topnav_equal_width.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_navbar_slide.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>