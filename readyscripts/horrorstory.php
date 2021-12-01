<?php include '../include/head.php'; ?>

<title>Страшилка для лузеров с помощью предупреждений на веб-странице с помощью JavaScript. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать страшилку (предупреждения) для лузеров на веб-странице с помощью JavaScript? Ваш компьютер заражен коронавирусом (COVID-19) и будет уничтожен. Стилизация с применением CSS. Скачать бесплатно готовые скрипты для сайта. Готовые решения. Эффекты на сайте. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_readyscripts.php'; ?>
<?php include '../include/before_content_readyscripts.php'; ?>

<article>
    <h1>Страшилка для лузеров</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="questionpage.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="matrix.php" title="Следующая страница">Next &#10095;</a>
    </div>
    <hr>
    <h3>Страшилка для лузеров с помощью предупреждений на JavaScript</h3>
    <p>С помощью данного скрипта можно <strong>выводить на экран предупреждения о повреждении копьютера, вирусах (COVID-19) и прочий бред</strong>, который может напугать начинающих пользователей ПК. Скопируйте данный код и вставьте в нужном месте на веб-странице.</p>
    <div class="w3-example">
        <h3>Пример кода</h3>
        <div class="w3-code notranslate jsHigh">
            &lt;script&gt;<br>
            function confirmClose() {<br>
            &nbsp;alert("Ошибка: 107x has occurred. Неопределённый вирус инфицирует ваш жёсткий диск. Сейчас будут удалены все файлы на вашем компьютере.")<br>
            &nbsp;if (confirm("Сообщите вашему поставщику жёсткого диска об этой ошибке."))<br>
            &nbsp;alert('Вирус уничтожен, но информация на вашем компьютере может быть повреждена.');<br>
            &nbsp;else alert('Вы не можете отменить данную операцию, вам придётся перезагрузить Ваш компьютер!');<br>
            &nbsp;{<br>
            &nbsp;&nbsp;parent.close();<br>
            &nbsp;}<br>
            }<br>
            &lt;/script&gt;<br>
            &lt;form&gt;<br>
            &nbsp;&lt;input type="button" value ="Нажмите сюда" onClick="confirmClose()"&gt;<br>
            &lt;/form&gt;<br>
        </div>
    </div>
    <hr>
    <h3>Результат работы скрипта</h3>
    <p>Результат работы скрипта можно посмотреть в <a href="horrorstory_ex.html" target="_blank">отдельном окне</a></p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="questionpage.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="matrix.php" title="Следующая страница">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>