<?php include '../include/head.php'; ?>

<title>Node.JS Учебник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Node.JS Учебник. Полный курс онлайн по NodeJS. Примеры кода. Обучение на примерах. Тесты и задачи. Полный справочник Node.JS. Скачать бесплатно с официального сайта. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/bigbtn.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_nodejs.php'; ?>
<?php include '../include/before_content_nodejs.php'; ?>

<article>
    <h1>Node.js <span class="color_h1">Учебник</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="../index.php">&#10094; Home</a>
        <a class="w3-right w3-btn" href="nodejs_intro.php">Next &#10095;</a>
    </div>

    <div class="w3-panel w3-info intro">
        <p>Node.js - это серверная среда с открытым исходным кодом.</p>
        <p>Node.js позволяет запускать JavaScript на сервере.</p>
        <a class="w3-btn w3-margin-bottom shadow-black-1" href="nodejs_intro.php" style="font-size: 18px;padding-left:25px;padding-right:25px;font-family: 'Source Sans Pro', sans-serif;margin-top:6px;">Начать изучение Node.js немедленно &raquo;</a>
    </div>
    <hr>

    <h2>Обучение на примерах</h2>
    <p>Наш инструмент &quot;Показать Node.js&quot; позволяет легко изучить Node.js, он показывает и код, и результат.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var http = require('http');<br><br>http.createServer(function (req, res) {<br>&nbsp;&nbsp;res.writeHead(200, {'Content-Type': 'text/plain'});<br>&nbsp;&nbsp;res.end('Hello World!');<br>}).listen(8080); </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../nodejstryit/demo_intro.html">Выполнить пример &raquo;</a>
    </div>
    <p><b>Кликните на кнопку &quot;Выполнить пример&quot;, чтобы увидеть, как она работает.</b></p>
    <?php include '../include/addown_content.php'; ?>

    <h2>Примеры, выполняемые в интерфейсе командной строки</h2>
    <p>В этом учебнике будет несколько примеров, которые лучше объяснить, отобразив результат в интерфейсе командной строки.</p>
    <p>Когда это произойдет, инструмент &quot;Показать Node.js&quot; покажет результат на чёрном экране справа:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            console.log('Этот пример другой!');<br>
            console.log('Результат отображается в интерфейсе командной строки'); </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../nodejstryit/demo_intro_cmd.html">Выполнить пример &raquo;</a>
    </div>
    <p>Кликните на кнопку <b>&quot;Выполнить пример&quot;</b>, чтобы увидеть, как она работает.</p>
    <hr>

    <h2>Node.js Справочник</h2>
    <p>Node.js имеет набор встроенных модулей.</p>
    <p><a href="ref_modules.php">Встроенные модули Node.js</a></p>
    <hr>

    <h2>Скачать Node.js</h2>
    <p>Скачать Node.js можно из официального сайта Node.js:
        <a target="_blank" href="https://nodejs.org/" rel="nofollow">https://nodejs.org</a></p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="../index.php">&#10094; Home</a>
        <a class="w3-right w3-btn" href="nodejs_intro.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>