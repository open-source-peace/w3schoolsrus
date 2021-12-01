<?php include '../include/head.php'; ?>

    <title>Изменение фона в зависимости от времени суток с помощью JavaScript. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='Как сделать изменение фона в зависимости от времени суток с помощью JavaScript? Скачать бесплатно готовые скрипты для сайта. Готовые решения. Эффекты на сайте. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_readyscripts.php'; ?>
<?php include '../include/before_content_readyscripts.php'; ?>

<article>
    <h1>Изменение фона</h1>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='textchange.php' title='Предыдущая страница'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='verticalscrolling.php' title='Следующая страница'>Next &#10095;</a>
    </div>
    <hr>
    <h3>Как сделать изменение фона веб-страницы в зависимости от времени суток с помощью JavaScript</h3>
    <p>В зависимости от времени суток (утро, день, вечер, ночь) на веб-странице будет отображаться соответствующий фон.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            &lt;script&gt;<br>
            theTime = new Date();<br>
            theHour = theTime.getHours();<br>
            if(theHour &gt; 6 && theHour &lt; 18){<br>
            document.write('&lt;body background="day.jpg" text="day" &gt;');<br>
            }<br>
            else{<br>
            document.write('&lt;body background="night.jpg" text="night" &gt;');<br>
            }<br>
            &lt;/script&gt;
        </div>
        <p>Вставьте данный скрипт на веб-страницу между тегами <code>&lt;body&gt;</code> и <code>&lt;/body&gt;</code>, а также укажите правильный путь к картинкам фона.</p>
    </div>
    <h3>Результат:</h3>
    <a href='backgroundchange_ex.html' target='_blank'>Посмотреть в отдельном окне.</a>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='textchange.php' title='Предыдущая страница'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='verticalscrolling.php' title='Следующая страница'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>