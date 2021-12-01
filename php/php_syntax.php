<?php include '../include/head.php'; ?>
<title>PHP Синтаксис. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Синтаксис. Базовый. Чувствительность к регистру. Упражнения. Как создать сайт? Учебник по языку программирования PHP7. Создание сайта с помощью PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Синтаксис</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_install.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_comments.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">PHP-скрипт выполняется на сервере, а обычный результат HTML отправляется обратно в браузер.</p>
    <hr>

    <h2>Базовый синтаксис PHP</h2>
    <p><strong>PHP</strong> скрипт может быть размещен в любом месте документа.</p>
    <p><strong>PHP</strong> скрипт начинается с <code class="w3-codespan">&lt;?php</code> и заканчивается <code class="w3-codespan">?&gt;</code>:</p>
    <div class="w3-code w3-border notranslate"><div>
            &lt;?php<br>
            // PHP код здесь<br>
            ?&gt;
        </div></div>
    <p>Расширение по умолчанию для файлов PHP &quot;<code class="w3-codespan">.php</code>&quot;.</p>
    <p>Файл PHP обычно содержит HTML теги и какой-то код PHP скрипта. Также в PHP-файле могут прописываться css-стили и код JavaScript.</p>
    <p>Если PHP-файл содержит только код, написанный на языке PHP, то закрытие кода с помощью <code class="w3-codespan">?&gt;</code> НЕ ТРЕБУЕТСЯ!</p>

    <p>Ниже есть пример простого PHP файла с PHP-скриптом, который использует встроенную функцию PHP &quot;<code class="w3-codespan">echo</code>&quot; чтобы вывести текст &quot;Hello World!&quot; на веб-странице:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;!DOCTYPE html&gt;<br>
            &lt;html&gt;<br>
            &lt;body&gt;<br><br>
            &lt;h1&gt;Моя первая PHP страница&lt;/h1&gt;<br><br>
            &lt;?php<br>
            echo &quot;Hello World!&quot;;<br>?&gt;<br><br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_syntax.html">Попробуйте сами &raquo;</a>
    </div>
    <p><strong>Примечание:</strong> PHP инструкции заканчиваются точкой с запятой (<code class="w3-codespan">;</code>).</p>
    <hr>

    <h2>Чувствительность к регистру в PHP</h2>
    <p>В PHP НЕТ ключевых слов (например, <code class="w3-codespan">if</code>,
        <code class="w3-codespan">else</code>, <code class="w3-codespan">while</code>,
        <code class="w3-codespan">echo</code> и др.), классов, функций и пользовательских функций, которые чувствительны к регистру.</p>
    <p>В приведенном ниже примере все три инструкции <strong>echo</strong> равнозначны и допустимы:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;!DOCTYPE html&gt;<br>
            &lt;html&gt;<br>
            &lt;body&gt;<br><br>
            &lt;?php<br>
            ECHO &quot;Hello World!&lt;br&gt;&quot;;<br>echo &quot;Hello World!&lt;br&gt;&quot;;<br>
            EcHo &quot;Hello World!&lt;br&gt;&quot;;<br>?&gt;<br><br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_syntax_case1.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-note w3-panel">
        <p><strong>Примечание:</strong> Однако, все имена переменных в PHP чувствительны к регистру!</p>
    </div>

    <p>Посмотрите на пример ниже; только первая инструкция будет отображать значение переменной <code class="w3-codespan">$color</code>! Это связано с тем, что <code class="w3-codespan">$color</code>, <code class="w3-codespan">$COLOR</code> и <code class="w3-codespan">$coLOR</code> рассматриваются как три разные переменные:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;!DOCTYPE html&gt;<br>
            &lt;html&gt;<br>
            &lt;body&gt;<br><br>
            &lt;?php<br>$color = &quot;red&quot;;<br>
            echo &quot;Мой автомобиль &quot; . $color . &quot;&lt;br&gt;&quot;;<br>echo &quot;Мой дом &quot; . $COLOR . &quot;&lt;br&gt;&quot;;<br>echo &quot;Моя лодка &quot; . $coLOR . &quot;&lt;br&gt;&quot;;<br>?&gt;<br><br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_syntax_case2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>PHP Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/php/exercise.asp?filename=exercise_syntax1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Вставьте недостающую часть кода ниже, чтобы вывести "Hello World".</p>
            <div class="exerciseprecontainer">
<pre>
<input name="ex1" maxlength="5" style="width: 54px;"> "Hello World";
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_install.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_comments.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>