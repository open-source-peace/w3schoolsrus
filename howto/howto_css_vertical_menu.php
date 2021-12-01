<?php include '../include/head_howto.php'; ?>
<title>Как сделать вертикальное меню? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать вертикальное меню на сайте с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_css_vertical_menu.html' rel='canonical'>
    <style>
        .test a {color:black;padding-top:8px;padding-bottom:8px;}
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Вертикальное меню</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_css_menu_horizontal_scroll.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_bottom_nav.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как сделать вертикальное меню на сайте</strong> с помощью CSS.</p>
    <hr>

    <h2>Вертикальное меню</h2>
    <div class="w3-bar-block w3-light-grey test" style="width:40%">
        <a href="javascript:void(0)" class="w3-bar-item w3-button ws-green ws-hover-green">Главная</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button">Ссылка 1</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button">Ссылка 2</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button">Ссылка 3</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button">Ссылка 4</a>
    </div>
    <p><a target="_blank" href="../howtotryit/tryhow_css_vertical_menu.html" class="ws-btn">Попробуйте сами &raquo;</a></p>
    <?php include '../include/addown_content.php'; ?>

    <h2>Как создать вертикальную группу кнопок</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;vertical-menu&quot;&gt;<br>&nbsp; &lt;a href=&quot;#&quot; class=&quot;active&quot;&gt;Главная&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#&quot;&gt;Ссылка 1&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#&quot;&gt;Ссылка 2&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#&quot;&gt;Ссылка 3&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#&quot;&gt;Ссылка 4&lt;/a&gt;<br>&lt;/div&gt;
        </div>
    </div>
    <hr>
    <h5>Шаг 2) Добавить CSS:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .vertical-menu {<br>&nbsp;&nbsp;width: 200px; /* Установите ширину, если хотите */<br>
            }<br><br>.vertical-menu a {<br>&nbsp;&nbsp;background-color: #eee;
            /* Серый цвет фона */<br>&nbsp;&nbsp;color: black; /* Черный цвет текста */<br>&nbsp;&nbsp;display: block; /* Сделайте так, чтобы ссылки отображались друг под другом */<br>&nbsp;&nbsp;padding: 12px; /* Добавьте отступ */<br>&nbsp;&nbsp;text-decoration: none; /* Удалить подчеркивание из ссылок */<br>}<br><br>.vertical-menu a:hover {<br>&nbsp; background-color: #ccc; /* Темно-серый фон при наведении курсора мыши */<br>}<br><br>.vertical-menu a.active {<br>&nbsp;&nbsp;background-color: #04AA6D; /* Добавить зеленый цвет к &quot;активной/текущей&quot; ссылке */<br>&nbsp;&nbsp;color: white;<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_css_vertical_menu.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Вертикальное прокручиваемое меню</h2>
    <div class="w3-bar-block w3-light-grey test" style="width:40%;height:180px;overflow-y:auto">
        <a href="javascript:void(0)" class="w3-bar-item w3-button ws-green ws-hover-green">Главная</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button">Ссылка 1</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button">Ссылка 2</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button">Ссылка 3</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button">Ссылка 4</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button">Ссылка 5</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button">Ссылка 6</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button">Ссылка 7</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button">Ссылка 8</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button">Ссылка 9</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button">Ссылка 10</a>
    </div>

    <p>Установите определенную высоту с помощью <code class="w3-codespan">height</code> и добавьте свойство <code class="w3-codespan">overflow</code>, если вам нужно меню с вертикальной прокруткой (скроллингом):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .vertical-menu {<br>&nbsp;&nbsp;width: 200px;<br>&nbsp; height: 150px;<br>&nbsp;
            overflow-y: auto;<br>
            }</div>
        <a target="_blank" href="../howtotryit/tryhow_css_vertical_menu_scroll.html" class="ws-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><b>Совет:</b> Ознакомтесь с главой <a href="howto_js_sidenav.php">Как сделать - Боковая навигация</a> на нашем сайте <?php include '../include/w3schools.php'; ?>, чтобы узнать, как создать фиксированную боковую навигацию во всю высоту страницы.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_css_menu_horizontal_scroll.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_css_bottom_nav.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>