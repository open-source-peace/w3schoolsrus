<?php include '../include/head.php'; ?>

<title>Самопечатающийся текст на веб-странице с помощью JavaScript. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать самопечатающийся текст на веб-странице с помощью JavaScript? Стилизация с применением CSS. Скачать бесплатно готовые скрипты для сайта. Готовые решения. Эффекты на сайте. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_readyscripts.php'; ?>
<?php include '../include/before_content_readyscripts.php'; ?>

<article>
    <h1>Вывод самопечатающегося текста на веб-странице</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="216webcolors.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="questionpage.php" title="Следующая страница">Next &#10095;</a>
    </div>
    <hr>
    <h3>Вывод самопечатающего текста на веб-странице с помощью JavaScript</h3>
    <p>С помощью данного скрипта можно <strong>вывести на экран самопечатающийся текст</strong>, как-будто его набирает человек на клавиатуре. Скопируйте данный код и вставте в нужном месте на веб-странице.</p>
    <div class="w3-example">
        <h3>Пример скрипта</h3>
        <div class="w3-code notranslate jsHigh">
            &lt;script&gt;<br>
            var chr = -1;<br>
            var txt = 'Компьютер набирает самопечатающийся текст'<br>
            var l = txt.length<br>
            var p = "_"<br>
            function changetext()<br>
            {<br>
            chr++;<br>
            t = document.all["text"].innerHTML<br>
            tt = t.substring(0,t.length-p.length)<br>
            if(txt.charAt(chr)!="&lt;")<br>
            {<br>
            document.all["text"].innerHTML= tt + txt.charAt(chr) + p<br>
            }<br>
            else {<br>
            document.all["text"].innerHTML= tt + txt.substring(chr, chr+4) + p<br>
            chr=chr+3<br>
            }<br>
            setTimeout("changetext()", 40)<br>
            }<br>
            function str(num) {<br>
            var s = ""<br>
            for(i=0; i&lt;num; i++)<br>
            {  s = s + " "  }<br>
            return s  }<br>
            &lt;/script&gt;<br>
            <br>
            &lt;body onload="changetext()"&gt;<br>
            &lt;font id="text"&gt;&lt;/font&gt;<br>
        </div>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <p>Если текст большой и есть необходимость сделать абзац (или перевод строки), то в выводимом тексте можно вставить тег <code class="w3-codespan">&lt;br&gt;</code>. Также можно регулировать скорость печатания текста параметром <strong>setTimeout</strong>, изменяя число (в приведенном коде 40). Чем меньше данное число - тем скорость будет быстрее.</p>
    <hr>
    <h3>Результат работы скрипта:</h3>
    <script>
        var chr = -1;
        var txt = 'Компьютер набирает самопечатающийся текст. Так, как будто за клавиатурой находится человек. Скорость можно регулировать. Текст тоже можно записать любой. Только поисковые системы не смогут увидеть и проиндексировать этот скрипт. <br>Компьютер набирает самопечатающийся текст. Так, как будто за клавиатурой находится человек. Скорость можно регулировать. Текст тоже можно записать любой. И даже абзац для программы не проблема, как Вы видите. Только поисковые системы не смогут увидеть и проиндексировать этот скрипт.'
        var l = txt.length
        var p = "_"
        function changetext()
        {
            chr++;
            t = document.all["text"].innerHTML
            tt = t.substring(0,t.length-p.length)
            if(txt.charAt(chr)!="<")
            {
                document.all["text"].innerHTML= tt + txt.charAt(chr) + p
            }
            else {
                document.all["text"].innerHTML= tt + txt.substring(chr, chr+4) + p
                chr=chr+3
            }
            setTimeout("changetext()", 40)
        }
        function str(num) {
            var s = ""
            for(i=0; i<num; i++)
            {  s = s + " "  }
            return s  }
    </script>
    <body onload="changetext()">
    <font id="text"></font>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="216webcolors.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="questionpage.php" title="Следующая страница">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>