<?php include '../include/head.php'; ?>

<title>Слайдшоу Плавная смена изображений с помощью JavaScript. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать слайдшоу Плавная смена изображений на веб-странице с помощью JavaScript? Ваш компьютер заражен коронавирусом (COVID-19) и будет уничтожен. Стилизация с применением CSS. Скачать бесплатно готовые скрипты для сайта. Готовые решения. Эффекты на сайте. <?php include '../include/description.php'; ?>'>
    <style>
        .img-slide {
            position: absolute; width:250px; height:200px;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_readyscripts.php'; ?>
<?php include '../include/before_content_readyscripts.php'; ?>

<article>
    <h1>Слайдшоу &quot;Плавная смена изображений&quot;</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="imageonclick.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="imagehover.php" title="Следующая страница">Next &#10095;</a>
    </div>
    <hr>
    <h3>Создание слайдшоу в виде плавной смены изображений с помощью JavaScript</h3>
    <p>С помощью данного скрипта можно создать эффект <strong>плавной смены изображений</strong> с определённой периодичностью с помощью чистого <strong>JavaScript</strong>. Большим преимуществом данного скрипта является его кроссбраузерность (работает практически во всех современных браузерах), а также то, что нет необходимости использовать какую-либо JavaScript-библиотеку типа jQuery.</p>
    <p>Для создания такого эффекта необходимо написать следующий код:</p>
    <div class="w3-example">
        <h3>Пример JavaScript-кода:</h3>
        <div class="w3-code notranslate jsHigh">
            &lt;script&gt;<br>
            var total_pics_num = 4; // колличество изображений<br>
            var interval = 3000;    // задержка между изображениями<br>
            var time_out = 1;       // задержка смены изображений<br>
            var i = 0;<br>
            var timeout;<br>
            var opacity = 100; // прозрачность<br>
            function fade_to_next() {<br>
            opacity--;<br>
            var k = i + 1;<br>
            var image_now = 'image_' + i;<br>
            if (i == total_pics_num) k = 1;<br>
            var image_next = 'image_' + k;<br>
            document.getElementById(image_now).style.opacity = opacity/100;<br>
            document.getElementById(image_now).style.filter = 'alpha(opacity='+ opacity +')';<br>
            document.getElementById(image_next).style.opacity = (100-opacity)/100;<br>
            document.getElementById(image_next).style.filter = 'alpha(opacity='+ (100-opacity) +')';<br>
            timeout = setTimeout("fade_to_next()",time_out);<br>
            if (opacity==1) {<br>
            opacity = 100;<br>
            clearTimeout(timeout);<br>
            }<br>
            }<br>
            setInterval (<br>
            function() {<br>
            i++;<br>
            if (i > total_pics_num) i=1;<br>
            fade_to_next();<br>
            }, interval<br>
            );<br>
            &lt;/script&gt;
        </div>
    </div>
    <?php include '../include/adinfeed.php'; ?>
    <div class="w3-example">
        <h3>Пример CSS-кода:</h3>
        <div class="w3-code notranslate cssHigh">
            /* Создание класса для изображений с фиксированной позицией и размерами */<br>
            &lt;style&gt;<br>
            .img-slide {<br>
            position: absolute; width:250px; height:200px;<br>
            }<br>
            &lt;/style&gt;
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример HTML-кода:</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div style="min-height:200px;"&gt;<br>
            &lt;img src='img01.jpg' id="image_1" class="img-slide" /&gt;<br>
            &lt;img src='img02.jpg' id="image_2" style="opacity: 0; filter: alpha(opacity=0);" class="img-slide" alt="" /&gt;<br>
            &lt;img src='img03.jpg' id="image_3" style="opacity: 0; filter: alpha(opacity=0);" class="img-slide" alt="" /&gt;<br>
            &lt;img src='img04.jpg' id="image_4" style="opacity: 0; filter: alpha(opacity=0);" class="img-slide" alt="" /&gt;<br>
            &lt;/div&gt;
        </div>
    </div>
    <p>Скопируйте данный javascript-код и css-код и вставьте его в голове веб-страницы между тегами <code class="w3-codespan">&lt;head&gt;</code> и <code class="w3-codespan">&lt;/head&gt;</code>, а html-код вставьте в нужном месте на веб-странице между тегами <code class="w3-codespan">&lt;body&gt;</code> и <code class="w3-codespan">&lt;/body&gt;</code>.</p>
    <hr>
    <h3>Результат работы скрипта</h3>
    <script>
        var total_pics_num = 4; // колличество изображений
        var interval = 3000;    // задержка между изображениями
        var time_out = 1;       // задержка смены изображений
        var i = 0;
        var timeout;
        var opacity = 100; // прозрачность
        function fade_to_next() {
            opacity--;
            var k = i + 1;
            var image_now = 'image_' + i;
            if (i == total_pics_num) k = 1;
            var image_next = 'image_' + k;
            document.getElementById(image_now).style.opacity = opacity/100;
            document.getElementById(image_now).style.filter = 'alpha(opacity='+ opacity +')';
            document.getElementById(image_next).style.opacity = (100-opacity)/100;
            document.getElementById(image_next).style.filter = 'alpha(opacity='+ (100-opacity) +')';
            timeout = setTimeout("fade_to_next()",time_out);
            if (opacity==1) {
                opacity = 100;
                clearTimeout(timeout);
            }
        }
        setInterval (
            function() {
                i++;
                if (i > total_pics_num) i=1;
                fade_to_next();
            }, interval
        );
    </script>
    <div style="min-height:200px;">
        <img src='img01.jpg' id="image_1" class="img-slide" alt="" />
        <img src='img02.jpg' id="image_2" style="opacity: 0; filter: alpha(opacity=0);" class="img-slide" alt="" />
        <img src='img03.jpg' id="image_3" style="opacity: 0; filter: alpha(opacity=0);" class="img-slide" alt="" />
        <img src='img04.jpg' id="image_4" style="opacity: 0; filter: alpha(opacity=0);" class="img-slide" alt="" />
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="imageonclick.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="imagehover.php" title="Следующая страница">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>