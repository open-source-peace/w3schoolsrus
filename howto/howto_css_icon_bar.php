<?php include '../include/head_howto.php'; ?>
<title>Как сделать навбар с иконками? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать навбар (навигационную панель) с иконками Font Awesome с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_css_icon_bar.html' rel='canonical'>
    <style>
        .icon-barv {
            height: 100%;
            width: 90px;
            text-align: center;
            background-color: #555;
            z-index: 1;
            overflow: auto;
        }
        .icon-barv a {
            padding: 16px;
            display: block;
            transition: all 0.3s ease;
            color: white;
            font-size: 36px;
        }
        .icon-barv a:hover {
            background-color: #000;
        }
        .icon-barh {
            width: 100%;
            text-align: center;
            background-color: #555;
            z-index: 1;
            overflow: auto;
        }
        .icon-barh a {
            width: 20%;
            padding: 12px 0;
            float: left;
            transition: all 0.3s ease;
            color: white;
            font-size: 36px;
        }
        .icon-barh a:hover {
            background-color: #000;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Навбар с иконками</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="index.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="howto_css_menu_icon.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как сделать панель с иконками</strong> на сайте, применяя CSS.</p>
    <hr>

    <div class="w3-row">
        <div class="w3-col m3">
            <p>Вертикальная:</p>
            <div class="icon-barv">
                <a class="active" href="#"><i class="fa fa-home"></i></a>
                <a href="#"><i class="fa fa-search"></i></a>
                <a href="#"><i class="fa fa-envelope"></i></a>
                <a href="#"><i class="fa fa-globe"></i></a>
                <a href="#"><i class="fa fa-trash"></i></a>
            </div>
            <p><a target="_blank" href="../howtotryit/tryhow_css_icon_bar_v.html" class="w3-btn">Попробуйте сами &raquo;</a></p>
        </div>

        <div class="w3-col m9">
            <p>Горизонтальная:</p>
            <div class="icon-barh">
                <a class="active" href="#"><i class="fa fa-home"></i></a>
                <a href="#"><i class="fa fa-search"></i></a>
                <a href="#"><i class="fa fa-envelope"></i></a>
                <a href="#"><i class="fa fa-globe"></i></a>
                <a href="#"><i class="fa fa-trash"></i></a>
            </div>
        </div>
        <p class="w3-clearfix" style="margin-bottom:-16px">&nbsp;</p>
        <p><a target="_blank" href="../howtotryit/tryhow_css_icon_bar_h.html" class="w3-btn">Попробуйте сами &raquo;</a></p>

    </div>
    <p style="clear:both"></p>
    <?php include '../include/addown_content.php'; ?>

    <h2>Как создать панель иконок</h2>
    <h5>Шаг 1) Добавьте HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!-- Добавить библиотеку иконок --&gt;<br>&lt;link rel=&quot;stylesheet&quot; href=&quot;https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css&quot;&gt;<br>
            <br>&lt;div class=&quot;icon-bar&quot;&gt;<br>&nbsp; &lt;a class=&quot;active&quot; href=&quot;#&quot;&gt;&lt;i
            class=&quot;fa fa-home&quot;&gt;&lt;/i&gt;&lt;/a&gt; <br>&nbsp; &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-search&quot;&gt;&lt;/i&gt;&lt;/a&gt;
            <br>&nbsp; &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-envelope&quot;&gt;&lt;/i&gt;&lt;/a&gt; <br>&nbsp; &lt;a href=&quot;#&quot;&gt;&lt;i
            class=&quot;fa fa-globe&quot;&gt;&lt;/i&gt;&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-trash&quot;&gt;&lt;/i&gt;&lt;/a&gt;
            <br>&lt;/div&gt;</div>
    </div>
    <hr>
    
    <h5>Шаг 2) Добавьте CSS:</h5>
    <div class="w3-example">
        <h3>Пример по вертикали</h3>
        <div class="w3-code notranslate cssHigh">
            .icon-bar {<br>&nbsp; width:
            90px; /* Установите определенную ширину */<br>&nbsp;
            background-color: #555; /* Темно-серый фон */<br>}<br><br>.icon-bar a {<br>
            &nbsp; display: block; /* Сделайте так, чтобы ссылки отображались друг под другом, а не рядом друг с другом */<br>&nbsp;&nbsp;text-align: center; /* Выровнять текст по центру */<br>&nbsp; padding: 16px; /* Добавьте отступ */<br>&nbsp; transition: all 0.3s ease; /* Добавить переход для эффектов наведения */<br>&nbsp;
            color: white; /* Белый цвет текста */<br>&nbsp; font-size: 36px; /* Увеличенный размер шрифта */<br>}<br><br>
            .icon-bar a:hover {<br>&nbsp;&nbsp;background-color: #000; /* Добавьте цвет при наведении */<br>}<br><br>.active {<br>&nbsp;&nbsp;background-color: #4CAF50; /* Добавить активный / текущий цвет */<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_css_icon_bar_v.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример по горизонтали</h3>
        <div class="w3-code notranslate cssHigh">
            .icon-bar {<br>&nbsp; width: 100%; /* На всю ширину */<br>&nbsp; background-color: #555;
            /* Темно-серый фон */<br>&nbsp;
            overflow: auto; /* Переполнение из-за float */<br>}<br><br>.icon-bar a {<br>&nbsp;
            float: left; /* Плавающие ссылки рядом */<br>&nbsp; text-align:
            center; /* Выровнять текст по центру */<br>&nbsp;
            width: 20%; /* Равная ширина (5 иконок шириной 20% каждая = 100%) */<br>&nbsp; padding: 12px 0;
            /* Некоторые верхние и нижние отступы */<br>&nbsp; transition: all 0.3s ease;
            /* Добавить переход для эффектов наведения */<br>&nbsp;&nbsp;color: white; /* Белый цвет текста */<br>
            &nbsp; font-size: 36px; /* Увеличенный размер шрифта */<br>}<br><br>.icon-bar a:hover {<br>&nbsp;
            background-color: #000; /* Добавьте цвет при наведении */<br>}<br><br>.active {<br>&nbsp;
            background-color: #4CAF50; /* Добавить активный / текущий цвет */<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_css_icon_bar_h.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h2>Как сделать на сайте панель навигации с иконками Font Awesome? Пример</h2>
    <div class="videowrap">
        <div class="videoblock">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/EigP5O9JMGw" allowfullscreen></iframe>
        </div>
        <p>Видеоинструкция, <strong>как сделать на сайте панель навигации с иконками</strong>.</p>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h2>Связанные страницы</h2>
    <p><b>Совет:</b> Перейдите к учебнику <a href="../css/css_navbar.php">CSS Панели навигации</a>, чтобы узнать больше о панелях навигации.</p>
    <p><b>Совет:</b> Перейдите к <a href="../icons/index.php">Учебник иконок</a> на нашем сайте <?php include '../include/w3schools.php'; ?>, чтобы узнать больше об иконках.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="index.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="howto_css_menu_icon.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>