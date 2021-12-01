<?php include '../include/head.php'; ?>

<title>Кнопка Подробнее (Показать больше/скрыть) на веб-странице с помощью JavaScript. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать Кнопку Подробнее (Показать больше/скрыть) на веб-странице с помощью JavaScript? Ваш компьютер заражен коронавирусом (COVID-19) и будет уничтожен. Стилизация с применением CSS. Скачать бесплатно готовые скрипты для сайта. Готовые решения. Эффекты на сайте. <?php include '../include/description.php'; ?>'>
    <style>
        #more {display:none;}
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_readyscripts.php'; ?>
<?php include '../include/before_content_readyscripts.php'; ?>

<article>
    <h1>Кнопка &quot;Подробнее&quot; (&quot;Показать больше/скрыть&quot;)</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="matrix.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="imageonclick.php" title="Следующая страница">Next &#10095;</a>
    </div>
    <hr>
    <h3>Кнопка "Подробнее" с помощью JavaScript</h3>
    <p>С помощью данного скрипта <strong>создается кнопка &quot;Подробнее&quot; (&quot;показать больше/скрыть&quot;)</strong>, которая позволяет скрывать длинный текст на веб-странице, а при необходимости открывать его. Обычно такая кнопка используется на сайтах, где публикуется много текста (блоги, новостные сайты).</p>
    <p>Для создания такой кнопки необходимо написать следующий код:</p>
    <div class="w3-example">
        <h3>Пример кода на JavaScript:</h3>
        <div class="w3-code notranslate jsHigh">
            &lt;script&gt;<br>
            function readMore() {<br>
            &nbsp;var dots = document.getElementById("dots");<br>
            &nbsp;var more = document.getElementById("more");<br>
            &nbsp;var btn = document.getElementById("btn");<br>
            <br>
            if (dots.style.display === "none") {<br>
            &nbsp;dots.style.display="inline";<br>
            &nbsp;btn.innerHTML="Подробнее";<br>
            &nbsp;more.style.display="none";<br>
            } else {<br>
            &nbsp;dots.style.display="none";<br>
            &nbsp;btn.innerHTML="Скрыть";<br>
            &nbsp;more.style.display="inline";<br>
            &nbsp;}<br>
            }<br>
            &lt;/script&gt;
        </div>
    </div>
    <?php include '../include/adinfeed.php'; ?>
    <div class="w3-example">
        <h3>Пример HTML-кода:</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;style&gt;<br>
            &nbsp;#more {display:none;}<br>
            &lt;/style&gt;<br>
            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores nostrum corporis, beatae animi cum aut sequi nam odio consequatur ipsa dicta ad quas nemo esse, a veniam. Ne&lt;span id="dots"&gt;...&lt;/span&gt;&lt;span id="more"&gt;cessitatibus placeat, in. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis magnam, nemo totam ipsum dolor quis recusandae, dolorem deleniti officiis perferendis, qui consectetur exercitationem! Quidem eveniet, quae ipsam unde illum provident.&lt;/span&gt;&lt;/p&gt;<br>
            &lt;button id="btn" onclick="readMore()"&gt;Подробнее&lt;/button&gt;
        </div>
    </div>
    <p>Скопируйте данный код и вставьте в нужном месте на веб-странице между тегами <code class="w3-codespan">&lt;body&gt;</code> и <code class="w3-codespan">&lt;/body&gt;</code>.</p>
    <hr>
    <h3>Результат работы скрипта</h3>
    <div class="w3-example">
        <script>
            function readMore() {
                var dots = document.getElementById("dots");
                var more = document.getElementById("more");
                var btn = document.getElementById("btn");

                if (dots.style.display === "none") {
                    dots.style.display="inline";
                    btn.innerHTML="Подробнее";
                    more.style.display="none";
                } else {
                    dots.style.display="none";
                    btn.innerHTML="Скрыть";
                    more.style.display="inline";
                }
            }
        </script>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores nostrum corporis, beatae animi cum aut sequi nam odio consequatur ipsa dicta ad quas nemo esse, a veniam. Ne<span id="dots">...</span><span id="more">cessitatibus placeat, in. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis magnam, nemo totam ipsum dolor quis recusandae, dolorem deleniti officiis perferendis, qui consectetur exercitationem! Quidem eveniet, quae ipsam unde illum provident.</span></p>
        <button id="btn" onclick="readMore()">Подробнее</button>
    </div>
    <hr>
    <p>Также можно посмотреть работу данной кнопки (плюс дополнительная стилизация) в <a href="buttonmore_ex.html" target="_blank">отдельном окне</a>.</p>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="matrix.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="imageonclick.php" title="Следующая страница">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>