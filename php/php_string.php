<?php include '../include/head.php'; ?>
<title>PHP Строки. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP String - Строки. Строковые значения. Наиболее используемые функции для работы со строками в PHP. Современный учебник по языку PHP. Как создать сайт с помощью PHP? <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">String - Строки</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_datatypes.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_numbers.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Строка (string)</strong> - это последовательность символов, например &quot;Hello world!&quot;.</p>
    <hr>

    <h2>Строковые функции PHP</h2>
    <p>В этой главе будут рассмотрены некоторые часто используемые функции для работы со строками.</p>
    <hr>

    <h2>strlen() - Вернуть длину строки</h2>
    <p>PHP функция <code class="w3-codespan">strlen()</code> возвращает длину строки.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Вернуть длину строки &quot;Hello world!&quot;:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            echo strlen(&quot;Hello world!&quot;); // выведет 12<br>
            ?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_string_length.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>str_word_count() - Подсчитать слова в строке</h2>
    <p>PHP функция <code class="w3-codespan">str_word_count()</code> считает количество слов в строке.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Подсчитать количество слов в строке &quot;Hello world!&quot;:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            echo str_word_count(&quot;Hello world!&quot;); // выведет 2<br>
            ?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_string_word_count.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>strrev() - Перевернуть строку</h2>
    <p>PHP функция <code class="w3-codespan">strrev()</code> переворачивает строку.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Перевернуть строку &quot;Hello world!&quot;:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            echo strrev(&quot;Hello world!&quot;); // выведет !dlrow olleH<br>
            ?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_string_reverse.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>strpos() - Поиск текста в строке</h2>
    <p>PHP функция <code class="w3-codespan">strpos()</code> ищет определенный текст в строке. Если совпадение найдено, функция возвращает позицию символа первого совпадения. Если совпадений не найдено, возвращается FALSE.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Поиск текста &quot;world&quot; в строке &quot;Hello world!&quot;:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            echo strpos(&quot;Hello world!&quot;, &quot;world&quot;); // выведет 6<br>
            ?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_string_pos.html">Попробуйте сами &raquo;</a>
    </div>

    <p><strong>Примечание:</strong> Первая позиция символа в строке - 0 (не 1).</p>
    <hr>

    <h2>str_replace() - Заменить текст внутри строки</h2>
    <p>PHP функция <code class="w3-codespan">str_replace()</code> заменяет некоторые символы другими символами в строке.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Заменить текст &quot;world&quot; на &quot;Dolly&quot;:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            echo str_replace(&quot;world&quot;, &quot;Dolly&quot;, &quot;Hello world!&quot;); // выведет Hello Dolly!<br>
            ?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_string_replace.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Полный справочник PHP Строки</h2>
    <p>Для полной справки на все строковые функции, перейдите к полному <a href="php_ref_string.php">Справочнику PHP Строки</a> на нашем сайте
      <?php include '../include/w3schools.php'; ?>.</p>
    <p>Справочник PHP Строки содержит описание и пример использования для каждой функции!</p>
    <hr>

    <h2>PHP Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/php/exercise.asp?filename=exercise_strings1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Получить длину строки "Hello World!".</p>
            <div class="exerciseprecontainer">
<pre>
echo <input name="ex1" maxlength="6" style="width: 64px;">("Hello World!");
</pre>
            </div>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_datatypes.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_numbers.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>