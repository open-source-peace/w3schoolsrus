<?php include '../include/head.php'; ?>

<title>Появление изображения при наведении с помощью JavaScript. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать появление изображения при наведении курсора на веб-странице с помощью JavaScript? Ваш компьютер заражен коронавирусом (COVID-19) и будет уничтожен. Стилизация с применением CSS. Скачать бесплатно готовые скрипты для сайта. Готовые решения. Эффекты на сайте. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_readyscripts.php'; ?>
<?php include '../include/before_content_readyscripts.php'; ?>

<article>
    <h1>Появление изображения при наведении мыши на ссылку</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="imagechange.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="siteage.php" title="Следующая страница">Next &#10095;</a>
    </div>
    <hr>
    <h3>Появление изображения при наведении мыши на ссылку с помощью JavaScript</h3>
    <p>С помощью данного скрипта можно создать эффект <strong>появления изображения</strong> при наведении мыши на ссылку <strong>с помощью чистого JavaScript кода</strong>.</p>
    <p>Для создания такого эффекта необходимо написать следующий код:</p>
    <div class="w3-example">
        <h3>Пример JavaScript-кода:</h3>
        <div class="w3-code notranslate jsHigh">
            &lt;script&gt;<br>
            &nbsp;function showLinkImage(id) {<br>
            &nbsp;&nbsp;document.getElementById(id).style.display = "block";<br>
            }<br>
            &nbsp;function hideLinkImage(id) {<br>
            &nbsp;&nbsp;document.getElementById(id).style.display = "none";<br>
            }<br>
            &lt;/script&gt;
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример HTML-кода:</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;a href="#" onmouseover="showLinkImage('pic_1')" onmouseout="hideLinkImage('pic_1')"&gt;Изображение №1&lt;/a&gt;<br>
            &lt;div id="pic_1" style="display: none; position: absolute;"&gt;<br>
            &nbsp;&lt;img src="img01.jpg" alt="Изображение 1" /&gt;<br>
            &lt;/div&gt;<br>
            &lt;a href="#" onmouseover="showLinkImage('pic_2')" onmouseout="hideLinkImage('pic_2')"&gt;Изображение №2&lt;/a&gt;<br>
            &lt;div id="pic_2" style="display: none; position: absolute;"&gt;<br>
            &nbsp;&lt;img src="img02.jpg" alt="Изображение 2" /&gt;<br>
            &lt;/div&gt;
        </div>
    </div>
    <p>Скопируйте данный javascript-код и вставьте его в голове веб-страницы между тегами <code class="w3-codespan">&lt;head&gt;</code> и <code class="w3-codespan">&lt;/head&gt;</code>, а html-код вставьте в нужном месте на веб-странице между тегами <code class="w3-codespan">&lt;body&gt;</code> и <code class="w3-codespan">&lt;/body&gt;</code>. Также укажите своё расположение изображений с помощью тега <code class="w3-codespan">&lt;img&gt;</code>.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h3>Результат работы скрипта</h3>
    <p>Наведите курсор мыши на ссылки ниже.</p>
    <script>
        function showLinkImage(id) {
            document.getElementById(id).style.display = "block";
        }
        function hideLinkImage(id) {
            document.getElementById(id).style.display = "none";
        }
    </script>
    <a href="#" onmouseover="showLinkImage('pic_1')" onmouseout="hideLinkImage('pic_1')">Изображение №1</a>
    <div id="pic_1" style="display: none; position: absolute;">
        <img src="img01.jpg" alt="Изображение 1" />
    </div>
    <a href="#" onmouseover="showLinkImage('pic_2')" onmouseout="hideLinkImage('pic_2')">Изображение №2</a>
    <div id="pic_2" style="display: none; position: absolute;">
        <img src="img02.jpg" alt="Изображение 2" />
    </div>
    <hr>
    <p>Обратите внимание, что изображения появляются при наведении мыши на ссылку, и при этом располагаются сверху над остальными объектами на веб-странице (как бы накладываются сверху), что не вызывает резких рывков и перемещения других объектов на странице.</p>
    <p>Если же вам необходимо, чтобы изображения не накладывались сверху на другие объекты, а сдвигали их, то поменяйте положение изображений на значение <code>position: relative</code> в html-коде.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="imagechange.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="siteage.php" title="Следующая страница">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>