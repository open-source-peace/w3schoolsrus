<?php include '../include/head.php'; ?>
<title>PHP Обработка файлов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Обработка файлов. Манипулирование файлами. PHP функция открытия и чтения файла readfile(). Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Обработка файлов</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_includes.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_file_open.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Обработка файлов</strong> является важной частью любого веб-приложения. Вам часто нужно открывать и обрабатывать файл для разных задач.</p>
    <hr>

    <h2>PHP Манипулирование файлами</h2>
    <p>PHP имеет несколько функций для создания, чтения, загрузки и редактирования файлов.</p>
    <div class="w3-panel w3-note"><p>
        <p><strong>Будьте осторожны при манипулировании файлами!</strong></p>
        <p>Вы можете нанести большой ущерб, если сделаете что-то не так. Распространенные ошибки: редактирование неправильного файла, заполнение жесткого диска мусорными данными и случайное удаление содержимого файла.</p>
    </div>
    <hr>

    <h2>PHP функция readfile()</h2>
    <p>PHP функция <code class="w3-codespan">readfile()</code> читает файл и записывает его в выходной буфер.</p>
    <p>Предположим, у нас есть текстовый файл с именем &quot;webdictionary.txt&quot;, хранящийся на сервере, который выглядит следующим образом:</p>
    <div class="w3-code w3-border notranslate"><div>
            AJAX = Asynchronous JavaScript and XML<br>CSS = Cascading Style Sheets<br>
            HTML = Hyper Text Markup Language<br>PHP = PHP Hypertext Preprocessor<br>SQL = Structured Query Language<br>SVG = Scalable Vector Graphics<br>XML = EXtensible Markup Language</div>
    </div>

    <p>PHP код для чтения файла и записи его в выходной буфер выглядит следующим образом (функция <code class="w3-codespan">readfile()</code> возвращает количество прочитанных байтов при успешном выполнении):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>echo readfile(&quot;webdictionary.txt&quot;);<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_file_readfile" rel="nofollow">Выполнить пример &raquo;</a>
    </div>
    <p>Функция <code class="w3-codespan">readfile()</code> полезна, если вам нужно только открыть файл и прочитать его содержимое.</p>
    <p>В следующих главах вы узнаете больше об обработке файлов.</p>
    <hr>

    <h2>PHP Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/php/exercise.asp?filename=exercise_advanced2" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Предположим, у нас есть файл с именем &quot;webdict.txt&quot;, напишите корректный синтаксис, чтобы открыть и прочитать содержимое файла.</p>
            <div class="exerciseprecontainer">
<pre>
echo <input name="ex1" maxlength="23" style="width: 244px;">;
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_includes.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_file_open.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>