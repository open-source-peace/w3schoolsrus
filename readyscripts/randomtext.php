<?php include '../include/head.php'; ?>

<title>Случайный текст на веб-странице с помощью JavaScript. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать случайный текст на веб-странице с помощью JavaScript? Скачать бесплатно готовые скрипты для сайта. Готовые решения. Эффекты на сайте. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_readyscripts.php'; ?>
<?php include '../include/before_content_readyscripts.php'; ?>

<article>
    <h1>Случайный текст и заголовок</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="randomlink.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="randomnumber.php" title="Следующая страница">Next &#10095;</a>
    </div>
    <hr>
    <h3>Случайный текст и заголовок на веб-странице с помощью JavaScript</h3>
    <p>При помощи данного скрипта можно сделать <strong>появление случайного (рандомного) текста</strong> на веб-странице вместе из заголовком. Скопируйте данный код и вставьте в нужное место на веб-странице.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            &lt;script&gt;<br>
            var a=Math.round(Math.random()*4)<br>
            // это число должно совпадать с максимальным индексом таблицы ссылок<br>
            <br>
            txt = new Array();<br>
            txt[0]="Текст 01"<br>
            txt[1]="Текст 02"<br>
            txt[2]="Текст 03"<br>
            txt[3]="Текст 04"<br>
            txt[4]="Текст 05"<br>
            document.write (""+txt[a]+"");<br>
            &lt;/script&gt;
        </div>
        <p>Вставьте данный скрипт на веб-страницу между тегами &lt;body&gt; и &lt;/body&gt;.</p>
    </div>
    <h3>Результат:</h3>
    <div class="w3-example">
        <script>
            var a=Math.round(Math.random()*4)
            // это число должно совпадать с максимальным индексом таблицы ссылок

            txt = new Array();
            txt[0]="Текст 01"
            txt[1]="Текст 02"
            txt[2]="Текст 03"
            txt[3]="Текст 04"
            txt[4]="Текст 05"
            document.write (""+txt[a]+"");
        </script>
    </div>
    <p>При обновлении веб-страницы (при нажатии клавиши F5 на клавиатуре), текст будет меняться в случайном порядке.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="randomlink.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="randomnumber.php" title="Следующая страница">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>