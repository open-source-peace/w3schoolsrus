<?php include '../include/head.php'; ?>

<title>Таймер на сайте с помощью JavaScript. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать счетчик возраста сайта? Сколько дней живёт сайт? Отображение на веб-странице с помощью JavaScript? Ваш компьютер заражен коронавирусом (COVID-19) и будет уничтожен. Стилизация с применением CSS. Скачать бесплатно готовые скрипты для сайта. Готовые решения. Эффекты на сайте. <?php include '../include/description.php'; ?>'>
    <script>
        function startTimer() {
            var my_timer = document.getElementById("my_timer");
            var time = my_timer.innerHTML;
            var arr = time.split(":");
            var h = arr[0];
            var m = arr[1];
            var s = arr[2];
            if (s == 0) {
                if (m == 0) {
                    if (h == 0) {
                        alert("Ваше время вышло");
                        window.location.reload();
                        return;
                    }
                    h--;
                    m = 60;
                    if (h < 10) h = "0" + h;
                }
                m--;
                if (m < 10) m = "0" + m;
                s = 59;
            }
            else s--;
            if (s < 10) s = "0" + s;
            document.getElementById("my_timer").innerHTML = h+":"+m+":"+s;
            setTimeout(startTimer, 1000);
        }
    </script>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_readyscripts.php'; ?>
<?php include '../include/before_content_readyscripts.php'; ?>

<article>
    <body onload="startTimer()">
    <h1>Таймер на сайте</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="siteage.html" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="timer.html" title="Следующая страница">Next &#10095;</a>
    </div>
    <hr>

    <h3>Таймер на сайте, который отсчитывает время. Скрипт на JavaScript</h3>
    <p>С помощью данного скрипта на языке <strong>JavaScript</strong> можно установить <strong>таймер</strong>, который отсчитывает время от указанного до нуля. Скрипт написан на чистом <strong>JavaScript</strong>, без использования каких-либо библиотек и фреймворков.</p>
    <p>Для создания такого <strong>таймера</strong> необходимо написать следующий код:</p>

    <div class="w3-example">
        <h3>Пример JavaScript-кода:</h3>
        <div class="w3-code notranslate jsHigh">
            &lt;script&gt;<br>
            &nbsp;function startTimer() {<br>
            &nbsp;&nbsp;var my_timer = document.getElementById("my_timer");<br>
            &nbsp;&nbsp;var time = my_timer.innerHTML;<br>
            &nbsp;&nbsp;var arr = time.split(":");<br>
            &nbsp;&nbsp;var h = arr[0];<br>
            &nbsp;&nbsp;var m = arr[1];<br>
            &nbsp;&nbsp;var s = arr[2];<br>
            &nbsp;&nbsp;if (s == 0) {<br>
            &nbsp;&nbsp;&nbsp;if (m == 0) {<br>
            &nbsp;&nbsp;&nbsp;if (h == 0) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;alert("Ваше время вышло");<br>
            &nbsp;&nbsp;&nbsp;&nbsp;window.location.reload();<br>
            &nbsp;&nbsp;&nbsp;&nbsp;return;<br>
            &nbsp;&nbsp;&nbsp;}<br>
            &nbsp;&nbsp;&nbsp;h--;<br>
            &nbsp;&nbsp;&nbsp;m = 60;<br>
            &nbsp;&nbsp;&nbsp;if (h < 10) h = "0" + h;<br>
            &nbsp;&nbsp;}<br>
            &nbsp;&nbsp;m--;<br>
            &nbsp;&nbsp;if (m < 10) m = "0" + m;<br>
            &nbsp;&nbsp;s = 59;<br>
            &nbsp;}<br>
            &nbsp;else s--;<br>
            &nbsp;if (s < 10) s = "0" + s;<br>
            &nbsp;document.getElementById("my_timer").innerHTML = h+":"+m+":"+s;<br>
            &nbsp;setTimeout(startTimer, 1000);<br>
            }<br>
            &lt;/script&gt;
        </div>
    </div>
    <p>JavaScript-код необходимо вставить между тегами <code class="w3-codespan">&lt;head&gt;</code> и <code class="w3-codespan">&lt;/head&gt;</code>.</p>
    <p>Начальное значение таймера задаётся в html-коде внутри тегов <code class="w3-codespan">&lt;span&gt;</code> и <code class="w3-codespan">&lt;/span&gt;</code> в виде: <b>часы:минуты:секунды</b>.</p>

    <div class="w3-example">
        <h3>Пример HTML-кода:</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p&gt;&lt;span id="my_timer" style="color: #f00; font-size: 120%; font-weight: bold;"&gt;01:05:00&lt;/span&gt;&lt;/p&gt;
        </div>
    </div>

    <p>Скопируйте данный html-код и вставьте его в нужном месте на веб-странице между тегами <code class="w3-codespan">&lt;body&gt;</code> и <code class="w3-codespan">&lt;/body&gt;</code>.</p>
    <p>Также пропишите для тега <code class="w3-codespan">&lt;body&gt;</code> следующее значение:</p>
    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;body onload="startTimer()"&gt;
        </div>
    </div>
    <hr>

    <h3>Результат работы скрипта</h3>
    <p><span id="my_timer" style="color: #f00; font-size: 120%; font-weight: bold;">01:05:00</span></p>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="siteage.html" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="timer.html" title="Следующая страница">Next &#10095;</a>
    </div>
    </body>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>