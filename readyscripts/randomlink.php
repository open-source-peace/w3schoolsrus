<?php include '../include/head.php'; ?>

<title>Случайная ссылка на веб-странице с помощью JavaScript. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать случайную ссылку на веб-странице с помощью JavaScript? Скачать бесплатно готовые скрипты для сайта. Готовые решения. Эффекты на сайте. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_readyscripts.php'; ?>
<?php include '../include/before_content_readyscripts.php'; ?>

<article>
    <h1>Случайная ссылка</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="randomimage.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="randomtext.php" title="Следующая страница">Next &#10095;</a>
    </div>
    <hr>
    <h3>Случайная ссылка на веб-странице с помощью JavaScript</h3>
    <p>При помощи данного скрипта можно сделать <strong>появление случайной (рандомной) ссылки</strong> на веб-странице. Скопируйте данный код и вставьте в нужное место на веб-странице.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            &lt;script&gt;<br>
            var a=Math.round(Math.random()*2)<br>
            // это число должно совпадать с максимальным индексом таблицы ссылок<br>
            <br>
            link = new Array();<br>
            link[0]="index.html"<br>
            link[1]="index1.html"<br>
            link[2]="index2.html"<br>
            // с максимальным индексом link[..] совпадает число, на которое умножаем вверху<br>
            <br>
            document.write ("&lt;a href="+link[a]+"&gt;Ссылка&lt;/a&gt;");<br>
            &lt;/script&gt;<br>
        </div>
        <p>Вставьте данный скрипт на веб-страницу между тегами &lt;body&gt; и &lt;/body&gt;.</p>
    </div>
    <h3>Результат:</h3>
    <p><a href="randomlink_ex.html" target="_blank">Посмотреть в отдельном окне.</a></p>
    <p>При обновлении веб-страницы (при нажатии клавиши F5 на клавиатуре), ссылки будут меняться в случайном порядке.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="randomimage.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="randomtext.php" title="Следующая страница">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>