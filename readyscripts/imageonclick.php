<?php include '../include/head.php'; ?>

<title>Увеличение изображения при клике с помощью JavaScript. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать увеличение Подробнее (Показать больше/скрыть) на веб-странице с помощью JavaScript? Ваш компьютер заражен коронавирусом (COVID-19) и будет уничтожен. Стилизация с применением CSS. Скачать бесплатно готовые скрипты для сайта. Готовые решения. Эффекты на сайте. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_readyscripts.php'; ?>
<?php include '../include/before_content_readyscripts.php'; ?>

<article>
    <h1>Увеличение изображения при клике</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="buttonmore.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="imagechange.php" title="Следующая страница">Next &#10095;</a>
    </div>
    <hr>
    <h3>Увеличение изображения при клике с помощью JavaScript</h3>
    <p>С помощью данного скрипта можно <strong>создать эффект увеличения изображения при клике на нём</strong>, без перехода на отдельную страницу.</p>
    <p>Для создания такого эффекта необходимо вставить следующий код:</p>
    <div class="w3-example">
        <h3>Пример JavaScript-кода:</h3>
        <div class="w3-code notranslate jsHigh">
            &lt;script&gt;<br>
            var bigsize = "300"; // Размер большой картинки<br>
            var smallsize = "150"; // Размер маленькой картинки<br>
            function changeSizeImage(im) {<br>
            if(im.height == bigsize) im.height = smallsize;<br>
            else im.height = bigsize;<br>
            }<br>
            &lt;/script&gt;
        </div>
    </div>
    <?php include '../include/adinfeed.php'; ?>
    <div class="w3-example">
        <h3>Пример HTML-кода:</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div style="float:left;"&gt;<br>
            &lt;img src="img01.jpg" height="150" onclick="changeSizeImage(this)" alt="" /&gt;&nbsp;<br>
            &lt;p&gt;&lt;b&gt;Фото 1&lt;/b&gt;&lt;/p&gt;<br>
            &lt;/div&gt;<br>
            &lt;img src="img02.jpg" height="150" onclick="changeSizeImage(this)" alt="" /&gt;<br>
            &lt;p&gt;&lt;b&gt;Фото 2&lt;/b&gt;&lt;/p&gt;
        </div>
    </div>
    <p>Скопируйте данный код и вставьте в нужном месте на веб-странице между тегами <code class="w3-codespan">&lt;body&gt;</code> и <code class="w3-codespan">&lt;/body&gt;</code>.</p>
    <hr>
    <h3>Результат работы скрипта</h3>
    <script>
        var bigsize = "300"; // Размер большой картинки
        var smallsize = "150"; // Размер маленькой картинки
        function changeSizeImage(im) {
            if(im.height == bigsize) im.height = smallsize;
            else im.height = bigsize;
        }
    </script>
    <div style="float:left;">
        <img src="img01.jpg" height="150" onclick="changeSizeImage(this)" alt="" />&nbsp;
        <p><b>Фото 1</b></p>
    </div>
    <img src="img02.jpg" height="150" onclick="changeSizeImage(this)" alt="" />
    <p><b>Фото 2</b></p>
    <p>Кликните на изображении мышкой, чтобы увидеть эффект.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="buttonmore.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="imagechange.php" title="Следующая страница">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>