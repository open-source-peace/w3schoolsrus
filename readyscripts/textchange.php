<?php include '../include/head.php'; ?>

<title>Изменение текста в зависимости от времени суток с помощью JavaScript. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать изменение текста в зависимости от времени суток с помощью JavaScript? Скачать бесплатно готовые скрипты для сайта. Готовые решения. Эффекты на сайте. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_readyscripts.php'; ?>
<?php include '../include/before_content_readyscripts.php'; ?>

<article>
    <h1>Изменение текста</h1>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href="index.php" title='Предыдущая страница'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href="backgroundchange.php" title='Следующая страница'>Next &#10095;</a>
    </div>
    <hr>
    <h3>Изменение текста в зависимости от времени суток с помощью JavaScript</h3>
    <p>В зависимости от времени суток (утро, день, вечер, ночь) на веб-странице будет отображаться соответствующий текст.</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate jsHigh'>
            &lt;script&gt;<br>
            var h=(new Date()).getHours();<br>
            if (h &gt; 23 || h &lt; 7) document.write('Уже ночь, пора спать!');<br>
            if (h &gt; 6 && h &lt; 9) document.write('Уже утро, хватит дрыхнуть!');<br>
            if (h &gt; 9 && h &lt; 19) document.write('Солнце ещё высоко, нужно работать!');<br>
            if (h &gt; 18 && h &lt; 23) document. write('Уже вечер, а ты ещё не отдыхал! Хватит работать!');<br>
            &lt;/script&gt;
        </div>
        <p>Вставьте данный скрипт на веб-страницу между тегами <code>&lt;body&gt;</code> и <code>&lt;/body&gt;</code></p>
    </div>
    <h3>Результат (зависит от времени суток):</h3>
    <script>
        var h=(new Date()).getHours();
        if (h > 23 || h < 7) document.write('Уже ночь, пора спать!');
        if (h > 6 && h < 9) document.write('Уже утро, хватит дрыхнуть!');
        if (h > 9 && h < 19) document.write('Солнце ещё высоко, нужно работать!');
        if (h > 18 && h < 23) document. write('Уже вечер, а ты ещё не отдыхал! Хватит работать!');
    </script>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='index.php' title='Предыдущая страница'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='backgroundchange.php' title='Следующая страница'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>