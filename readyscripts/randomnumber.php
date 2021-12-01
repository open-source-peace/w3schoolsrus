<?php include '../include/head.php'; ?>

<title>Случайное число на веб-странице с помощью JavaScript. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать вывод случайного числа на веб-странице с помощью JavaScript? Скачать бесплатно готовые скрипты для сайта. Готовые решения. Эффекты на сайте. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_readyscripts.php'; ?>
<?php include '../include/before_content_readyscripts.php'; ?>

<article>
    <h1>Случайное число</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="randomtext.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="tablesorting.php" title="Следующая страница">Next &#10095;</a>
    </div>
    <hr>
    <h3>Псевдослучайное число на веб-странице с помощью JavaScript</h3>
    <p>При помощи данного скрипта можно <strong>сделать появление псевдослучайного (рандомного) числа в заданном диапазоне</strong> на веб-странице (в рассматриваемом примере одно- и двузначное число от 1 до 100). Вместо 100 нужно поставить число, которое больше на 1 Вашего максимального диапазона. Может использоваться как вспомогательный алгоритм генератора псевдослучайных чисел. Скопируйте данный код и вставьте в нужное место на веб-странице.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            &lt;script&gt;<br>
            var tmp = Math.round((Math.random() * (100 - 1)));<br>
            &lt;/script&gt;<br>
            Случайное число:<br>
            &lt;script&gt;<br>
            document.write(tmp);<br>
            &lt;/script&gt;
        </div>
        <p>Вставьте данный скрипт на веб-страницу между тегами <code>&lt;body&gt;</code> и <code>&lt;/body&gt;</code>.</p>
    </div>
    <h3>Результат:</h3>
    <div class="w3-example">
        <script>
            var tmp = Math.round((Math.random() * (100 - 1)));
        </script>
        Случайное число:
        <script>
            document.write(tmp);
        </script>
    </div>
    <p>При обновлении веб-страницы (при нажатии клавиши F5 на клавиатуре), число будет меняться в случайном порядке в диапазоне от 1 до 100.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="randomtext.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="tablesorting.php" title="Следующая страница">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>