<?php include '../include/head.php'; ?>

<title>JavaScript Рандомные числа. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Рандомные числа. Случайные целые числа. Правильная случайная функция. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript Рандомные числа</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_math.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_booleans.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Math.random()</h2>
    <p><code class="w3-codespan">Math.random()</code> возвращает <strong>случайное (рандомное) число</strong> от 0 (включительно) до 1 (исключая):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Возвращает случайное число:<br>
            Math.random();
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_random.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p><code class="w3-codespan">Math.random()</code> всегда возвращает число меньше 1.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>JavaScript Случайные целые числа</h2>
    <p><code class="w3-codespan">Math.random()</code> используется с <code class="w3-codespan">Math.floor()</code>, может использоваться для возврата случайных целых чисел.</p>
    <div class="w3-note">
        <p>Целых чисел в JavaScript не существует.</p>
        <p>Здесь речь идёт о числах без десятичных знаков.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Возвращает случайное целое число от 0 до 9:<br>
            Math.floor(Math.random() * 10);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_random_0_9.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Возвращает случайное целое число от 0 до 10:<br>
            Math.floor(Math.random() * 11);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_random_0_10.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Возвращает случайное целое число от 0 до 99:<br>
            Math.floor(Math.random() * 100);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_random_0_99.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Возвращает случайное целое число от 0 до 100:<br>
            Math.floor(Math.random() * 101);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_random_0_100.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Возвращает случайное целое число от 1 до 10:<br>
            Math.floor(Math.random() * 10) + 1;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_random_1_10.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Возвращает случайное целое число от 1 до 100:<br>
            Math.floor(Math.random() * 100) + 1;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_random_1_100.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Правильная случайная функция</h2>
    <p>Как вы можете видеть из приведенных выше примеров, было бы неплохо создать правильную случайную функцию для использования для всех случайных целочисленных целей.</p>
    <p>Эта JavaScript функция всегда возвращает случайное число от min (включено) до max (исключено):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            function getRndInteger(min, max) {<br>
            &nbsp;&nbsp;return Math.floor(Math.random() * (max - min) ) + min;<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_random_function.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Эта функция JavaScript всегда возвращает случайное число от min до max (оба включены):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            function getRndInteger(min, max) {<br>
            &nbsp; return Math.floor(Math.random() * (max - min + 1) ) + min;<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_random_function2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_math.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_booleans.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>