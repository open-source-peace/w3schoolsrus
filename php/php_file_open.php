<?php include '../include/head.php'; ?>
<title>PHP Файл Открыть/Читать/Закрыть. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Файл Открыть/Читать/Закрыть. Открыть файл - fopen(), читать файл - fread(), закрыть файл - fclose(), читать одну строку - fgets(), проверить end-of-file (конец файла) - feof(), одиночный символ - fgetc(). Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Файл Открыть/Читать/Закрыть</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_file.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_file_create.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">В этой главе вы научитесь открывать, читать и закрывать файл на сервере.</p>
    <hr>

    <h2>PHP Открыть файл - fopen()</h2>
    <p>Лучший способ открыть файлы - использовать функцию <code class="w3-codespan">fopen()</code>. Эта функция предоставляет больше возможностей, чем функция <code class="w3-codespan">readfile()</code>.</p>
    <p>Мы будем использовать текстовый файл &quot;webdictionary.txt&quot; во время уроков:</p>
    <div class="w3-code w3-border notranslate"><div>
            AJAX = Asynchronous JavaScript and XML<br>CSS = Cascading Style Sheets<br>
            HTML = Hyper Text Markup Language<br>PHP = PHP Hypertext Preprocessor<br>SQL = Structured Query Language<br>SVG = Scalable Vector Graphics<br>XML = EXtensible Markup Language</div>
    </div>

    <p>Первый параметр <code class="w3-codespan">fopen()</code> содержит имя файла, который нужно открыть, а второй параметр указывает, в каком режиме файл должен быть открыт. В следующем примере также генерируется сообщение, если функция fopen() не может открыть указанный файл:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$myfile = fopen(&quot;webdictionary.txt&quot;, &quot;r&quot;) or die(&quot;Невозможно открыть файл!&quot;);<br>echo fread($myfile,filesize(&quot;webdictionary.txt&quot;));<br>
            fclose($myfile);<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_file_fopen" rel="nofollow">Выполнить пример &raquo;</a>
    </div>
    <p><b>Примечание:</b> Функции <code class="w3-codespan">fread()</code> и <code class="w3-codespan">fclose()</code> будут описаны ниже.</p>
    <p>Файл может быть открыт в одном из следующих режимов:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:10%">Режим</th>
            <th style="width:90%">Описание</th>
        </tr>
        <tr>
            <td>r</td>
            <td><strong>Открывает файл только для чтения</strong>. Указатель файла начинается с начала файла</td>
        </tr>
        <tr>
            <td>w</td>
            <td><strong>Открывает файл только для записи</strong>. Удаляет содержимое файла или создает новый файл, если он не существует. Указатель файла начинается с начала файла</td>
        </tr>
        <tr>
            <td>a</td>
            <td><strong>Открывает файл только для записи</strong>. Существующие данные в файле сохраняются. Указатель файла начинается с конца файла. Создает новый файл, если файл не существует</td>
        </tr>
        <tr>
            <td>x</td>
            <td><strong>Создает новый файл только для записи</strong>. Возвращает FALSE и ошибку, если файл уже существует</td>
        </tr>
        <tr>
            <td>r+</td>
            <td><strong>Открывает файл для чтения/записи</strong>. Указатель файла начинается с начала файла</td>
        </tr>
        <tr>
            <td>w+</td>
            <td><strong>Открывает файл для чтения/записи</strong>. Удаляет содержимое файла или создает новый файл, если он не существует. Указатель файла начинается с начала файла</td>
        </tr>
        <tr>
            <td>a+</td>
            <td><strong>Открывает файл для чтения/записи</strong>. Существующие данные в файле сохраняются. Указатель файла начинается с конца файла. Создает новый файл, если файл не существует</td>
        </tr>
        <tr>
            <td>x+</td>
            <td><strong>Создает новый файл для чтения/записи</strong>. Возвращает FALSE и ошибку, если файл уже существует</td>
        </tr>
    </table>
    <hr>

    <h2>PHP Читать файл - fread()</h2>
    <p>Функция <code class="w3-codespan">fread()</code> читает из открытого файла.</p>
    <p>Первый параметр <code class="w3-codespan">fread()</code> содержит имя файла для чтения, а второй параметр указывает максимальное количество байтов для чтения.</p>
    <p>Следующий PHP код читает файл &quot;webdictionary.txt&quot; до конца:</p>
    <div class="w3-code w3-border notranslate"><div>
            fread($myfile,filesize(&quot;webdictionary.txt&quot;));</div></div>
    <hr>

    <h2>PHP Закрыть файл - fclose()</h2>
    <p>Функция <code class="w3-codespan">fclose()</code> используется для закрытия открытого файла.</p>

    <div class="w3-panel w3-note">
        <p>Хорошей практикой программирования является закрытие всех файлов после того, как вы закончили работу с ними. Вы же не хотите, чтобы открытый файл продолжал работать на вашем сервере и занимать ресурсы!</p>
    </div>

    <p>Функция <code class="w3-codespan">fclose()</code> требует имя файла (или переменной, содержащей имя файла), которую мы хотим закрыть:</p>
    <div class="w3-code w3-border notranslate htmlHigh">
        <div>
            &lt;?php<br>
            $myfile = fopen(&quot;webdictionary.txt&quot;, &quot;r&quot;);<br>// некоторый код, который будет выполнен....<br>
            fclose($myfile);<br>
            ?&gt;
        </div></div>
    <hr>

    <h2>PHP Читать одну строку - fgets()</h2>
    <p>Функция <code class="w3-codespan">fgets()</code> используется для чтения одной строки из файла.</p>
    <p>В приведенном ниже примере выводится первая строка файла &quot;webdictionary.txt&quot;:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$myfile = fopen(&quot;webdictionary.txt&quot;, &quot;r&quot;) or die(&quot;Невозможно открыть файл!&quot;);<br>echo fgets($myfile);<br>
            fclose($myfile);<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_file_fgets" rel="nofollow">Выполнить пример &raquo;</a>
    </div>
    <p><b>Примечание:</b> После вызова функции <code class="w3-codespan">fgets()</code> указатель файла переместился на следующую строку.</p>
    <hr>

    <h2>PHP Проверить &quot;end-of-file&quot; (конец файла) - feof()</h2>
    <p>Функция <code class="w3-codespan">feof()</code> проверяет, был ли достигнут &quot;end-of-file&quot; (EOF) - конец файла.</p>
    <p>Функция <code class="w3-codespan">feof()</code> полезна для циклического прохождения данных неизвестной длины.</p>
    <p>Пример ниже читает файл &quot;webdictionary.txt&quot; построчно, пока не будет достигнут конец файла:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$myfile = fopen(&quot;webdictionary.txt&quot;, &quot;r&quot;) or die(&quot;Невозможно открыть файл!&quot;);<br>// Вывести одну строку до конца файла<br>while(!feof($myfile)) {<br>&nbsp;&nbsp;echo fgets($myfile) . &quot;&lt;br&gt;&quot;;<br>}<br>fclose($myfile);<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_file_feof" rel="nofollow">Выполнить пример &raquo;</a>
    </div>
    <hr>

    <h2>PHP Читать одиночный символ - fgetc()</h2>
    <p>Функция <code class="w3-codespan">fgetc()</code> используется для чтения одного символа из файла.</p>
    <p>В приведенном ниже примере файл &quot;webdictionary.txt&quot; читается символ за символом, до достижения конца файла:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$myfile = fopen(&quot;webdictionary.txt&quot;, &quot;r&quot;) or die(&quot;Невозможно открыть файл!&quot;);<br>// Вывести один символ до конца файла<br>while(!feof($myfile)) {<br>&nbsp;&nbsp;echo fgetc($myfile);<br>}<br>fclose($myfile);<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_file_fgetc" rel="nofollow">Выполнить пример &raquo;</a>
    </div>
    <p><b>Примечание:</b> После вызова функции <code class="w3-codespan">fgetc()</code> указатель файла перемещается на следующий символ.</p>
    <hr>

    <h2>Полный справочник по файловой системе PHP</h2>
    <p>Для более полного ознакомления с функциями файловой системы, перейдите к полному <a href="php_ref_filesystem.php">PHP Справочнику файловой системы</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>

    <h2>PHP Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/php/exercise.asp?filename=exercise_advanced3" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Откройте файл и напишите корректный синтаксис для вывода одного символа за раз, до конца файла.</p>
            <div class="exerciseprecontainer">
<pre>
$myfile = fopen("webdict.txt", "r");
while(!<input name="ex1" maxlength="4" style="width: 43px;">($myfile)) {
  echo <input name="ex2" maxlength="5" style="width: 54px;">($myfile);
}
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_file.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_file_create.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>