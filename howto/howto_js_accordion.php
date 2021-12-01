<?php include '../include/head_howto.php'; ?>
<title>Как сделать меню аккордеон? <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать меню аккордеон на сайте с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Пример кода. <?php include '../include/description.php'; ?>'>
<link href='<?php include '../include/w3schools_link.php'; ?>howto/howto_js_accordion.html' rel='canonical'>
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
    <h1>Как сделать - Складывающийся/Аккордеонный контент (Меню-аккордеон)</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="howto_css_menu_icon.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="howto_js_tabs.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Узнайте, <strong>как создать меню-аккордеон</strong> (складывающийся контент).</p>
    <hr>
    <h2>Аккордеон</h2>
    <p>Аккордеоны полезны, когда вы хотите переключаться между скрытием и отображением большого количества контента:</p>

    <button class="accordion">Секция 1</button>
    <div class="panel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <button class="accordion">Секция 2</button>
    <div class="panel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <button class="accordion">Секция 3</button>
    <div class="panel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].onclick = function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight){
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            }
        }
    </script>
    <p>
        <a target="_blank" href="../howtotryit/tryhow_js_accordion.html" class="w3-btn">Попробуйте сами &raquo;</a>
    </p>
    <hr>

    <h2>Создать Аккордеон</h2>
    <h5>Шаг 1) Добавить HTML:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;button class=&quot;accordion&quot;&gt;Секция 1&lt;/button&gt;<br>&lt;div class=&quot;panel&quot;&gt;<br>&nbsp; &lt;p&gt;Lorem
            ipsum...&lt;/p&gt;<br>&lt;/div&gt;<br><br>&lt;button class=&quot;accordion&quot;&gt;Секция
            2&lt;/button&gt;<br>&lt;div class=&quot;panel&quot;&gt;<br>&nbsp; &lt;p&gt;Lorem ipsum...&lt;/p&gt;<br>&lt;/div&gt;<br><br>
            &lt;button class=&quot;accordion&quot;&gt;Секция 3&lt;/button&gt;<br>&lt;div class=&quot;panel&quot;&gt;<br>&nbsp; &lt;p&gt;Lorem ipsum...&lt;/p&gt;<br>&lt;/div&gt;</div>
    </div>
    <hr>
    <h5>Шаг 2) Добавить CSS:</h5>
    <p>Стиль аккордеона:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Стиль кнопок, которые используются, чтобы открыть и закрыть панель аккордеона */<br>
            .accordion {<br>&nbsp;&nbsp;background-color: #eee;<br>&nbsp;&nbsp;color: #444;<br>
            &nbsp; cursor: pointer;<br>&nbsp; padding: 18px;<br>&nbsp; width: 100%;<br>&nbsp;
            text-align: left;<br>&nbsp;&nbsp;border: none;<br>&nbsp;&nbsp;outline: none;<br>
            &nbsp; transition: 0.4s;<br>}<br>
            <br>/* Добавьте цвет фона к кнопке, если она нажата (добавьте класс .active с помощью JS) и при наведении на нее указателя мыши (наведите курсор мыши) */<br>
            .active, .accordion:hover {<br>&nbsp;
            background-color: #ccc;<br>}<br><br>/* Стиль панели аккордеона. Примечание: по умолчанию скрыто */<br>.panel {<br>&nbsp;&nbsp;padding: 0 18px;<br>&nbsp;&nbsp;background-color: white;<br>&nbsp;&nbsp;display: none;<br>&nbsp;&nbsp;overflow: hidden;<br>}</div>
    </div>
    <hr>

    <h5>Шаг 3) Добавить JavaScript:</h5>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var acc = document.getElementsByClassName(&quot;accordion&quot;);<br>
            var i;<br><br>for (i = 0; i &lt; acc.length; i++) {<br>&nbsp;&nbsp;acc[i].addEventListener(&quot;click&quot;,
            function() {<br>&nbsp;&nbsp;&nbsp;
            /* Переключение между добавлением и удалением &quot;active&quot; class,<br>&nbsp;&nbsp;&nbsp; выделить кнопку, управляющую панелью */<br>&nbsp;&nbsp;&nbsp;
            this.classList.toggle(&quot;active&quot;);<br><br>&nbsp;&nbsp;&nbsp;
            /* Переключение между скрытием и отображением активной панели */<br>&nbsp;&nbsp;&nbsp;
            var panel = this.nextElementSibling;<br>&nbsp;&nbsp;&nbsp;
            if (panel.style.display === &quot;block&quot;) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            panel.style.display = &quot;none&quot;;<br>&nbsp;&nbsp;&nbsp;&nbsp;}
            else {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            panel.style.display = &quot;block&quot;;<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>&nbsp; });<br>
            }</div>
        <a target="_blank" href="../howtotryit/tryhow_js_accordion.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Анимированный Аккордеон (Скольжение вниз)</h2>
    <p>Чтобы сделать анимированный аккордеон, добавьте <code class="w3-codespan">max-height: 0</code>, <code class="w3-codespan">overflow: hidden</code> и <code class="w3-codespan">transition</code> для свойства max-height в класс <code class="w3-codespan">panel</code>.</p>
    <p>Затем используйте JavaScript, чтобы скользить вниз по контенту, установив вычисленную <code class="w3-codespan">max-height</code> в зависимости от высоты панели на экранах разных размеров:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;style&gt;<br>.panel {<br>&nbsp; padding: 0 18px;<br>&nbsp; background-color: white;<br>
            &nbsp;
            max-height: 0;<br>&nbsp;&nbsp;overflow: hidden;<br>&nbsp;&nbsp;transition: max-height 0.2s ease-out;<br>}<br>&lt;/style&gt;<br><br>&lt;script&gt;<br>var acc =
            document.getElementsByClassName(&quot;accordion&quot;);<br>var i;<br><br>for (i = 0; i &lt;
            acc.length; i++) {<br>&nbsp; acc[i].addEventListener(&quot;click&quot;, function() {<br>&nbsp;&nbsp;&nbsp; this.classList.toggle(&quot;active&quot;);<br>
            &nbsp;&nbsp;&nbsp;
            var panel = this.nextElementSibling;<br>&nbsp;&nbsp;&nbsp; if (panel.style.maxHeight) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            panel.style.maxHeight = null;<br>&nbsp;&nbsp;&nbsp; } else {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; panel.style.maxHeight =
            panel.scrollHeight + &quot;px&quot;;<br>&nbsp;&nbsp;&nbsp; } <br>&nbsp; });<br>}<br>
            &lt;/script&gt;<br></div>
        <a target="_blank" href="../howtotryit/tryhow_js_accordion_animate.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Добавить иконки</h2>
    <p>Добавьте символ к каждой кнопке, чтобы указать, является ли разборный контент открытым или закрытым:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .accordion:after {<br>&nbsp;&nbsp;content: '\02795'; /* Unicode символ для &quot;plus&quot; sign (+) */<br>&nbsp;&nbsp;font-size: 13px;<br>&nbsp;
            color: #777;<br>&nbsp; float: right;<br>&nbsp;&nbsp;margin-left: 5px;<br>}<br><br>
            .active:after {<br>&nbsp;&nbsp;content: &quot;\2796&quot;; /*
            Unicode символ для &quot;minus&quot; sign (-) */<br>}<br></div>
        <a target="_blank" href="../howtotryit/tryhow_js_accordion_symbol.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h2>Как сделать на сайте меню аккордеон с помощью HTML / CSS / JS? Видео</h2>
    <div class="videowrap">
        <div class="videoblock">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/9K7yPMbQelw" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <p>Видеоинструкция, <strong>как сделать на сайте меню-аккордеон</strong>.</p>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="howto_css_menu_icon.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="howto_js_tabs.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>