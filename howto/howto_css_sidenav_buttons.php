<?php include '../include/head_howto.php'; ?>
<title>Как сделать кнопки боковой навигации? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать всплывающие кнопки боковой навигации на сайте с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_css_sidenav_buttons.html' rel='canonical'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Кнопки боковой навигации</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_off-canvas.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_sidebar_icons.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как создать плавающие боковые кнопки навигации</strong> на сайте с помощью CSS.</p>
    <hr>
    <iframe src="../howtotryit/tryhow_css_sidenav_buttons_ifr.html" style="width:100%;height:280px" class="w3-border"></iframe>
    <p><a target="_blank" href="../howtotryit/tryhow_css_sidenav_buttons.html" class="ws-btn">Попробуйте сами &raquo;</a></p>
    <hr>

    <h2>Как создать плавающую боковую панель</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div id=&quot;mySidenav&quot; class=&quot;sidenav&quot;&gt;<br>&nbsp; &lt;a href=&quot;#&quot;
            id=&quot;about&quot;&gt;Обо мне&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#&quot; id=&quot;blog&quot;&gt;Блог&lt;/a&gt;<br>&nbsp; &lt;a
            href=&quot;#&quot; id=&quot;projects&quot;&gt;Проекты&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#&quot;
            id=&quot;contact&quot;&gt;Контакты&lt;/a&gt;<br>&lt;/div&gt;</div>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h5>Шаг 2) Добавить CSS:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Стиль ссылок внутри боковой панели */<br>#mySidenav a {<br>&nbsp;&nbsp;position: absolute;
            /* Расположите их относительно окна браузера */<br>&nbsp; left: -80px;
            /* Разместите их за пределами экрана */<br>&nbsp;&nbsp;transition: 0.3s;
            /* Добавить переход при наведении */<br>&nbsp;&nbsp;padding: 15px;
            /* 15px внутренний отступ */<br>&nbsp; width: 100px;
            /* Установите определенную ширину */<br>&nbsp;&nbsp;text-decoration: none;
            /* Удалить подчеркивание */<br>&nbsp;font-size: 20px;
            /* Увеличить размер шрифта */<br>&nbsp; color: white;
            /* Белый цвет текста */<br>&nbsp;&nbsp;border-radius: 0 5px 5px 0;
            /* Закругленные углы вверху справа и внизу справа */<br>}<br><br>#mySidenav a:hover {<br>&nbsp; left: 0;
            /* При наведении указателя мыши сделайте так, чтобы элементы выглядели так, как должны */<br>}<br><br>
            /* Ссылка about: 20 пикселей сверху на зеленом фоне */<br>#about {<br>&nbsp;&nbsp;top: 20px;<br>
            &nbsp;&nbsp;background-color: #04AA6D;<br>}<br><br>#blog {<br>&nbsp;&nbsp;top: 80px;<br>
            &nbsp;&nbsp;background-color: #2196F3; /* Синий цвет */<br>}<br><br>#projects {<br>&nbsp; top: 140px;<br>
            &nbsp;background-color: #f44336; /* Красный цвет */<br>}<br><br>#contact {<br>&nbsp;&nbsp;top: 200px;<br>
            &nbsp;&nbsp;background-color: #555 /* Светло-черный */<br>}<br></div>
        <a target="_blank" href="../howtotryit/tryhow_css_sidenav_buttons.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><b>Совет:</b> Перейдите к учебнику <a href="../css/css_navbar.php">CSS Навбар</a> на нашем сайте <?php include '../include/w3schools.php'; ?>, чтобы узнать больше о панелях навигации.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_js_off-canvas.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_sidebar_icons.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>