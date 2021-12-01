<?php include '../include/head.php'; ?>

<title>JavaScript Хостинг. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Хостинг. Что такое подъём? Поднятие JavaScript объявления. Ключевые слова let и const. Инициализации JavaScript не запускаются. Если разработчик не понимает подъема, программы могут содержать баги (ошибки). <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Хостинг</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_scope.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_strict.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Хостинг (подъём)</strong> - это стандартное поведение JavaScript, заключающееся в перемещении объявлений наверх.</p>
    <hr>

    <h2>Поднятие JavaScript объявления</h2>
    <p>В JavaScript переменную можно объявить после того, как она была использована.</p>
    <p>Другими словами: переменную можно использовать до того, как она была объявлена.</p>
    <p><b>Пример 1</b> даёт тот же результат, что и <b>Пример 2</b>:</p>
    <div class="w3-example">
        <h3>Пример 1</h3>
        <div class="w3-code notranslate jsHigh">
            x = 5; // Присвоить 5 к x<br><br>
            elem = document.getElementById(&quot;demo&quot;); // Найти элемент <br>
            elem.innerHTML = x;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Отобразить x в элементе<br><br>
            var x; // Объявить x
        </div>
        <a target="_blank" href="../jstryit/tryjs_hoisting1.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-example">
        <h3>Пример 2</h3>
        <div class="w3-code notranslate jsHigh">
            var x; // Объявить x<br>
            x = 5; // Присвоить 5 к x<br><br>
            elem = document.getElementById(&quot;demo&quot;); // Найти элемент <br>
            elem.innerHTML = x;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Отобразить x в элементе<br>
        </div>
        <a target="_blank" href="../jstryit/tryjs_hoisting2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>Чтобы понять это, вы должны понимать термин &quot;хостинг&quot; (подъём).</p>
    <p>Подъем - это стандартное поведение JavaScript, заключающееся в перемещении всех объявлений в верхнюю часть текущей области видимости (в верхнюю часть текущего скрипта или текущей функции).</p>
    <?php include '../include/addown_content.php'; ?>

    <h2>Ключевые слова let и const</h2>
    <p>Переменные, определенные с помощью <code class="w3-codespan">let</code> и <code class="w3-codespan">const</code> поднимаются в верхнюю часть блока, но не <em>инициализируются</em>.</p>
    <p>Значение: блоку кода известно о переменной, но её нельзя использовать, пока она не будет объявлена.</p>
    <p>Использование переменной <code class="w3-codespan">let</code> перед её объявлением приведет к <code class="w3-codespan">ReferenceError</code> (ошибке).</p>
    <p>Переменная находится во &quot;временной мертвой зоне&quot; от начала блока до его объявления:</p>

    <div class="w3-example w3-pale-red">
        <h3>Пример</h3>
        Это приведет к <code class="w3-codespan">ReferenceError</code>:
        <div class="w3-code notranslate jsHigh">
            carName = &quot;Volvo&quot;;<br>
            let carName;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_let_hoisting_let.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Использование переменной <code class="w3-codespan">const</code> перед её объявлением является синтаксической ошибкой, поэтому код просто не запускается.</p>

    <div class="w3-example w3-pale-red">
        <h3>Пример</h3>
        <p>Этот код не будет работать.</p>
        <div class="w3-code notranslate jsHigh">
            carName = &quot;Volvo&quot;;<br>
            const carName;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_let_hoisting_const.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Узнайте больше о let и const в <a href="js_let.php">JS Let / Const</a>.</p>

    <?php include '../include/adinfeed.php'; ?>
    <h2>Инициализации JavaScript не запускаются </h2>
    <p>JavaScript поднимает только объявления, но не инициализации.</p>
    <p><b>Пример 1</b> не даёт такой же результат, как <b>Пример 2</b>:</p>

    <div class="w3-example">
        <h3>Пример 1</h3>
        <div class="w3-code notranslate jsHigh">
            var x = 5; // Инициализировать x<br>var y = 7; // Инициализировать y<br><br>elem = document.getElementById(&quot;demo&quot;); // Найти элемент <br>
            elem.innerHTML = x + &quot; &quot; + y;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Отобразить x и y
        </div>
        <a target="_blank" href="../jstryit/tryjs_hoisting4.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-example">
        <h3>Пример 2</h3>
        <div class="w3-code notranslate jsHigh">
            var x = 5; // Инициализировать x<br>
            <br>
            elem = document.getElementById(&quot;demo&quot;); // Найти элемент <br>
            elem.innerHTML = x + &quot; &quot; + y;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Отобразить x и y<br>
            <br>
            var y = 7; // Инициализировать y
        </div>
        <a target="_blank" href="../jstryit/tryjs_hoisting3.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>Имеет ли смысл, что y не определен в последнем примере?</p>
    <p>Это связано с тем, что наверх поднимается только объявление (var y), а не инициализация (= 7).</p>
    <p>Из-за подъема y был объявлен до его использования, но поскольку инициализации не поднимаются, значение y не определено.</p>
    <p>Пример 2 то же самое, что писать:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var x = 5; // Инициализировать x<br>
            var y;&nbsp;&nbsp;&nbsp;&nbsp; // Объявить y<br>
            <br>
            elem = document.getElementById(&quot;demo&quot;); // Найти элемент <br>
            elem.innerHTML = x + &quot; &quot; + y;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Отобразить x и y<br>
            <br>
            y = 7;&nbsp;&nbsp;&nbsp; // Присвоить 7 к y
        </div>
        <a target="_blank" href="../jstryit/tryjs_hoisting5.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Объявите свои переменные наверху!</h2>
    <p>Подъем (хостинг) является для многих разработчиков неизвестным или недооцененным поведением JavaScript.</p>
    <p>Если разработчик не понимает подъема, программы могут содержать баги (ошибки).</p>
    <p>Чтобы избежать ошибок, всегда объявляйте все переменные в начале каждой области.</p>
    <p>Так как JavaScript интерпретирует код именно так, это всегда хорошее правило.</p>
    <div class="w3-panel w3-note"><p>JavaScript в строгом режиме не позволяет использовать переменные, если они не объявлены. <br>Изучите <strong>&quot;use strict&quot;</strong> в следующей главе учебника на нашем сайте <?php include '../include/w3schools.php'; ?>.</p></div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_scope.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_strict.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>