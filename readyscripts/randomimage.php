<?php include '../include/head.php'; ?>

<title>Случайное изображение на веб-странице с помощью JavaScript. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать случайное изображение на веб-странице с помощью JavaScript? Скачать бесплатно готовые скрипты для сайта. Готовые решения. Эффекты на сайте. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_readyscripts.php'; ?>
<?php include '../include/before_content_readyscripts.php'; ?>

<article>
    <h1>Случайное изображение</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="verticalscrolling.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="randomlink.php" title="Следующая страница">Next &#10095;</a>
    </div>
    <hr>
    <h3>Случайное изображение на веб-странице с помощью JavaScript</h3>
    <p>При помощи данного скрипта можно сделать <strong>появление случайного (рандомного) изображения</strong> на веб-странице. Скопируйте данный код и вставьте в нужное место на веб-странице.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            &lt;script&gt;<br>
            var a=Math.round(Math.random()*4)<br>
            // это число должно совпадать с максимальным индексом таблицы изображений<br>
            <br>
            image = new Array();<br>
            image[0]="img01.jpg"<br>
            image[1]="img02.jpg"<br>
            image[2]="img03.jpg"<br>
            image[3]="img04.jpg"<br>
            image[4]="img05.jpg"<br>
            // с максимальным индексом image[..] совпадает число, на которое умножаем вверху<br>
            <br>
            document.write ("&lt;img src="+image[a]+"&gt;");<br>
            &lt;/script&gt;<br>
        </div>
        <p>Вставьте данный скрипт на веб-страницу между тегами <code>&lt;body&gt;</code> и <code>&lt;/body&gt;</code>, а также укажите правильный путь к изображениям.</p>
    </div>
    <h3>Результат:</h3>
    <p><a href="randomimage_ex.html" target="_blank">Посмотреть в отдельном окне.</a></p>
    <p>Нажимайте клавишу F5 на клавиатуре, чтобы увидеть меняющиеся в случайном порядке изображения.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="verticalscrolling.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="randomlink.php" title="Следующая страница">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>