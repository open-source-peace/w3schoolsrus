<?php include '../include/head_howto.php'; ?>
<title>Как сделать меню иконку (бургер)? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать меню иконку (бургер) с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_css_menu_icon.html' rel='canonical'>
    <style>
        .container {
            display: inline-block;
            cursor: pointer;
        }
        .bar1, .bar2, .bar3 {
            width: 35px;
            height: 5px;
            background-color: #333;
            margin: 6px 0;
            transition: 0.4s;
        }
        .change .bar1 {
            -webkit-transform: rotate(-45deg) translate(-9px, 6px) ;
            transform: rotate(-45deg) translate(-9px, 6px) ;
        }
        .change .bar2 {
            opacity: 0;
        }
        .change .bar3 {
            -webkit-transform: rotate(45deg) translate(-8px, -8px) ;
            transform: rotate(45deg) translate(-8px, -8px) ;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>Как сделать - Меню бургер</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="howto_css_icon_bar.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="howto_js_accordion.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как сделать меню-иконку (меню-бургер для мобильных устройств)</strong>, используя CSS.</p>
    <hr>
    <h2>Как сделать меню иконку</h2>
    <p>Если вы не используете библиотеку иконок, вы можете создать иконку основного меню с помощью CSS:</p>
    <div class="w3-row">

        <div class="w3-half w3-center">
            <p>Меню иконка (бургер):</p>
            <div style="display: inline-block;">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <p><a target="_blank" href="../howtotryit/tryhow_css_menu_icon.html" class="w3-btn">Попробуйте сами &raquo;</a></p>

        </div>

        <div class="w3-half" style="text-align:center;">
            <p>Анимированная иконка (кликните на ней):</p>
            <div class="container" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <p><a target="_blank" href="../howtotryit/tryhow_css_menu_icon_js.html" class="w3-btn">Попробуйте сами &raquo;</a></p>
        </div>
    </div>
    <script>
        function myFunction(x) {
            x.classList.toggle("change");
        }
    </script>
    <hr>

    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div&gt;&lt;/div&gt;<br>&lt;div&gt;&lt;/div&gt;<br>&lt;div&gt;&lt;/div&gt;</div>
    </div>

    <h5>Шаг 2) Добавить CSS:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp;&nbsp;width: 35px;<br>&nbsp; height: 5px;<br>&nbsp;
            background-color: black;<br>&nbsp; margin: 6px 0;<br>}</div>
        <a target="_blank" href="../howtotryit/tryhow_css_menu_icon.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <h3>Объяснение примера</h3>
    <p>Свойства <code class="w3-codespan">width</code> и <code class="w3-codespan">height</code> определяют ширину и высоту каждой полосы.</p>
    <p>Мы добавили черный фон с помощью <code class="w3-codespan">background-color</code>, верхний и нижний отступы с помощью <code class="w3-codespan">margin</code>, которые используются для создания некоторого расстояния между каждой полосой.</p>
    <?php include '../include/addown_content.php'; ?>

    <h2>Анимированная иконка</h2>
    <p>Используйте CSS и JavaScript, чтобы изменить иконку меню на иконку &quot;отменить / удалить&quot; при нажатии на неё:</p>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class="container" onclick="myFunction(this)"&gt;<br>&nbsp; &lt;div
            class="bar1"&gt;&lt;/div&gt;<br>&nbsp; &lt;div class="bar2"&gt;&lt;/div&gt;<br>&nbsp; &lt;div
            class="bar3"&gt;&lt;/div&gt;<br>&lt;/div&gt;</div>
    </div>

    <h5>Шаг 2) Добавить CSS:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .container {<br>&nbsp;&nbsp;display: inline-block;<br>&nbsp;&nbsp;cursor: pointer;<br>}<br><br>
            .bar1, .bar2, .bar3 {<br>&nbsp; width: 35px;<br>&nbsp;&nbsp;height: 5px;<br>&nbsp;&nbsp;background-color: #333;<br>
            &nbsp;
            margin: 6px 0;<br>&nbsp; transition: 0.4s;<br>}<br><br>/* Поворот первой полосы */<br>.change .bar1 {<br>&nbsp;
            -webkit-transform: rotate(-45deg) translate(-9px, 6px) ;<br>&nbsp;
            transform: rotate(-45deg) translate(-9px, 6px) ;<br>}<br><br>/* Исчезание второй полосы */<br>.change .bar2 {<br>&nbsp;
            opacity: 0;<br>}<br><br>/* Поворот последней полосы */<br>.change .bar3 {<br>&nbsp;&nbsp;-webkit-transform:
            rotate(45deg) translate(-8px, -8px) ;<br>&nbsp;&nbsp;transform: rotate(45deg) translate(-8px, -8px) ;<br>}</div>
    </div>

    <h5>Шаг 3) Добавить JavaScript:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            function myFunction(x) {<br>&nbsp;&nbsp;x.classList.toggle("change");<br>
            }</div>
        <a target="_blank" href="../howtotryit/tryhow_css_menu_icon_js.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <h3>Объяснение примера</h3>
    <p>HTML &amp; CSS: Мы используем те же стили, что и раньше, только на этот раз мы оборачиваем элемент контейнера вокруг каждого элемента <code class="w3-codespan">&lt;div&gt;</code> и мы указываем имя класса для каждого из них.</p>
    <p>Элемент контейнера используется для отображения символа указателя, когда пользователь наводит указатель мыши на блоки div (полосы). Когда на нем кликают, он выполняет функцию JavaScript, которая добавляет к нему новое имя класса, что изменяет стили каждой горизонтальной полосы: первая и последняя полоса трансформируются и поворачиваются, преобразуясь в букву &quot;x&quot;. Полоса посередине исчезает и становится невидимой.</p>
    <?php include '../include/addown_content.php'; ?>
    <h2>Как сделать на сайте меню бургер с помощью HTML / CSS? Видео</h2>
    <div class="videowrap">
        <div class="videoblock">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/3nfHR--ZUK0" allowfullscreen></iframe>
        </div>
        <p>Видеоинструкция, <strong>как сделать на сайте меню-бургер</strong>.</p>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="howto_css_icon_bar.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="howto_js_accordion.php">Next &#10095;</a>
    </div>    
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>