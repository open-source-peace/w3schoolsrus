<?php include '../include/head.php'; ?>

<title>Возраст сайта с помощью JavaScript. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать счетчик возраста сайта? Сколько дней живёт сайт? Отображение на веб-странице с помощью JavaScript? Ваш компьютер заражен коронавирусом (COVID-19) и будет уничтожен. Стилизация с применением CSS. Скачать бесплатно готовые скрипты для сайта. Готовые решения. Эффекты на сайте. <?php include '../include/description.php'; ?>'>
    <script>
        function lifeSite() {
            var start = new Date('September 22, 2019'); // Дата создания сайта
            var end = new Date();
            var life = Math.round((end.getTime() - start.getTime()) / (1000 * 60 * 60 * 24));
            var suffix = new Array("день", "дня", "дней");
            var keys = [2, 0, 1, 1, 1, 2];
            var mod = life % 100;
            var suffix_key = mod > 4 && mod < 20 ? 2 : keys[Math.min(mod%10, 5)];
            document.getElementById("life_site").innerHTML = life + " " + suffix[suffix_key];
        }
    </script>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_readyscripts.php'; ?>
<?php include '../include/before_content_readyscripts.php'; ?>

<article>
    <h1>Возраст сайта. Сколько дней живёт сайт?</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="imagehover.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="timer.php" title="Следующая страница">Next &#10095;</a>
    </div>
    <hr>
    <h3>Скрипт на JavaScript, который позволяет узнать возраст сайта</h3>
    <p>С помощью данного скрипта на языке <strong>JavaScript</strong> можно узнать, <strong>сколько дней работает сайт</strong>. Скрипт написан на чистом <strong>JavaScript</strong>, без использования каких-либо библиотек и фреймворков.</p>
    <p>Для создания такого эффекта необходимо написать следующий код:</p>
    <div class="w3-example">
        <h3>Пример JavaScript-кода:</h3>
        <div class="w3-code notranslate jsHigh">
            &lt;script&gt;<br>
            function lifeSite() {<br>
            &nbsp;var start = new Date('September 22, 2019'); // Дата создания сайта<br>
            &nbsp;var end = new Date();<br>
            &nbsp;var life = Math.round((end.getTime() - start.getTime()) / (1000 * 60 * 60 * 24));<br>
            &nbsp;var suffix = new Array("день", "дня", "дней");<br>
            &nbsp;var keys = [2, 0, 1, 1, 1, 2];<br>
            &nbsp;var mod = life % 100;<br>
            &nbsp;var suffix_key = mod > 4 && mod < 20 ? 2 : keys[Math.min(mod%10, 5)];<br>
            &nbsp;document.getElementById("life_site").innerHTML = life + " " + suffix[suffix_key];<br>
            }<br>
            &lt;/script&gt;
        </div>
    </div>
    <p>JavaScript-код необходимо вставить между тегами <code class="w3-codespan">&lt;head&gt;</code> и <code class="w3-codespan">&lt;/head&gt;</code>.</p>
    <p>Дату создания сайта вы можете менять непосредственно в JavaScript-коде.</p>
    <div class="w3-example">
        <h3>Пример HTML-кода:</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p&gt;Этот сайт существует уже: &lt;span id="life_site" style="color: #0a0; font-size: 120%; font-weight: bold;"&gt;&lt;/span&gt;&lt;/p&gt;
        </div>
    </div>
    <?php include '../include/adinfeed.php'; ?>
    <p>Скопируйте данный html-код и вставьте его в нужном месте на веб-странице между тегами <code class="w3-codespan">&lt;body&gt;</code> и <code class="w3-codespan">&lt;/body&gt;</code>.</p>
    <p>Также пропишите для тега <code class="w3-codespan">&lt;body&gt;</code> следующее значение:</p>
    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;body onload="lifeSite()"&gt;
        </div>
    </div>
    <hr>
    <h3>Результат работы скрипта</h3>
    <p>Этот сайт существует уже: <span id="life_site" style="color: #0a0; font-size: 120%; font-weight: bold;"></span></p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="imagehover.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="timer.php" title="Следующая страница">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>