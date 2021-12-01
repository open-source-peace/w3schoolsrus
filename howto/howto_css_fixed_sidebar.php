<?php include '../include/head_howto.php'; ?>
<title>Как сделать фиксированный сайдбар? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать фиксированную боковую панель с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_css_fixed_sidebar.html' rel='canonical'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Фиксированный сайдбар</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_css_searchbar.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_sidenav.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как создать фиксированное боковое меню навигации</strong> с помощью CSS.</p>
    <hr>
    <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half">
            <p class="w3-text-green">На всю высоту:</p>
            <iframe src="../howtotryit/tryhow_css_sidenav_ifr.html" style="width:100%;border:5px solid #ddd;height:300px"></iframe>
            <a target="_blank" href="../howtotryit/tryhow_css_sidenav_fixed.html" class="ws-btn w3-margin-top">Попробуйте сами &raquo;</a>
        </div>
        <div class="w3-half">
            <p class="w3-text-green">Авто высота:</p>
            <iframe src="../howtotryit/tryhow_css_sidenav_ifr2.html" style="width:100%;border:5px solid #ddd;height:300px"></iframe>
            <a target="_blank" href="../howtotryit/tryhow_css_sidenav_fixed2.html" class="ws-btn w3-margin-top">Попробуйте сами &raquo;</a>
        </div>
    </div>
    <hr>

    <h2>Создать фиксированный сайдбар</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!-- Боковая навигация --&gt;<br>&lt;div class=&quot;sidenav&quot;&gt;<br>&nbsp; &lt;a href=&quot;#&quot;&gt;Про нас&lt;/a&gt;<br>&nbsp;
            &lt;a href=&quot;#&quot;&gt;Services&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#&quot;&gt;Клиенты&lt;/a&gt;<br>&nbsp; &lt;a href=&quot;#&quot;&gt;Контакты&lt;/a&gt;<br>
            &lt;/div&gt;<br><br>&lt;!-- Содержимое страницы --&gt;<br>&lt;div class=&quot;main&quot;&gt;<br>&nbsp; ...<br>&lt;/div&gt;</div>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h5>Шаг 2) Добавить CSS:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Меню боковой навигации */<br>.sidenav {<br>&nbsp; height: 100%; /* На всю высоту: удалите это, если хотите &quot;auto&quot; высоту */<br>&nbsp; width: 160px;
            /* Установите ширину боковой панели */<br>&nbsp; position: fixed; /* Фиксированная боковая панель (остаётся на месте при прокрутке) */<br>&nbsp; z-index: 1; /* Остаётся на поверхности */<br>
            &nbsp; top: 0; /* Остаётся вверху */<br>
            &nbsp; left: 0;<br>
            &nbsp; background-color: #111; /* Чёрный */<br>
            &nbsp; overflow-x: hidden; /* Отключить горизонтальную прокрутку */<br>
            &nbsp; padding-top: 20px;<br>
            }<br><br>/* Ссылки в меню навигации */<br>
            .sidenav a {<br>
            &nbsp; padding: 6px 8px 6px 16px;<br>
            &nbsp; text-decoration: none;<br>&nbsp; font-size: 25px;<br>
            &nbsp; color: #818181;<br>&nbsp; display: block;<br>}<br><br>
            /* Когда вы наводите указатель мыши на ссылки навигации, меняется их цвет */<br>
            .sidenav a:hover {<br>
            &nbsp; color: #f1f1f1;<br>}<br><br>
            /* Стиль содержимого страницы */<br>.main {<br>
            &nbsp;&nbsp;margin-left: 160px; /* То же, что и ширина боковой панели */<br>
            &nbsp; padding: 0px 10px;<br>}<br><br>
            /* На небольших экранах, где высота меньше 450 пикселей, измените стиль боковой панели (меньше отступов и меньший размер шрифта) */<br>
            @media screen and (max-height: 450px) {<br>
            &nbsp;&nbsp;.sidenav {padding-top: 15px;}<br>
            &nbsp; .sidenav a {font-size: 18px;}<br>
            }</div>
        <a target="_blank" href="../howtotryit/tryhow_css_sidenav_fixed.html" class="ws-btn w3-margin-bottom">Попробуйте сами (На всю высоту) &raquo;</a>
        <a target="_blank" href="../howtotryit/tryhow_css_sidenav_fixed2.html" class="ws-btn w3-margin-bottom">Попробуйте сами (Авто высота) &raquo;</a>
    </div>
    <hr>
    <p><b>Совет:</b> Перейдите к учебнику <a href="../css/css_navbar.php">CSS Навбар</a>, чтобы узнать больше о панелях навигации на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <p><b>Совет:</b> Перейдите к главе <a href="howto_js_sidenav.php">Как сделать - Боковая навигация</a>, чтобы узнать, как создать анимированную закрываемую боковую навигацию на сайте.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left ws-btn" href="howto_css_searchbar.php">&#10094; Prev</a>
        <a class="w3-right ws-btn" href="howto_js_sidenav.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>