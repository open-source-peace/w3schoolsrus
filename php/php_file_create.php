<?php include '../include/head.php'; ?>
<title>PHP Файл создать/записать. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Файл создать/записать. Как создать и записать файлы на сервере? Функции fopen(), fwrite(). Перезапись файлов. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Файл создать/записать</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_file_open.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_file_upload.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">В этой главе вы научитесь <strong>создавать</strong> и <strong>записывать</strong> файлы на сервере.</p>
    <hr>

    <h2>PHP Создать файл - fopen()</h2>
    <p>Функция <code class="w3-codespan">fopen()</code> также используется для создания файла. Может быть, немного запутанно, но в PHP файл создается с использованием той же функции, что и для открытия файлов.</p>
    <p>Если вы используете <code class="w3-codespan">fopen()</code> для файла, который не существует, он создаст его, учитывая, что файл открыт для записи (w - writing) или добавления (a - appending).</p>
    <p>В приведенном ниже примере создается новый файл с именем &quot;testfile.txt&quot;. Файл будет создан в том же каталоге, где находится код PHP:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code phpHigh notranslate">
            $myfile = fopen(&quot;testfile.txt&quot;, &quot;w&quot;)
        </div>
        <br>
    </div>
    <hr>

    <h2>PHP Право доступа к файлу</h2>
    <p>Если у вас возникают ошибки при попытке запустить этот код, убедитесь, что вы предоставили доступ к файлу PHP для записи информации на жесткий диск.</p>
    <hr>

    <h2>PHP Записать в файл - fwrite()</h2>
    <p>Функция <code class="w3-codespan">fwrite()</code> используется для записи в файл.</p>
    <p>Первый параметр <code class="w3-codespan">fwrite()</code> содержит имя файла для записи, а второй параметр - строку для записи.</p>
    <p>Пример ниже записывает пару имен в новый файл с именем &quot;newfile.txt&quot;:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$myfile = fopen(&quot;newfile.txt&quot;, &quot;w&quot;) or die(&quot;Невозможно открыть файл!&quot;);<br>$txt = &quot;John Doe\n&quot;;<br>fwrite($myfile, $txt);<br>$txt = &quot;Jane Doe\n&quot;;<br>fwrite($myfile, $txt);<br>fclose($myfile);<br>?&gt;
        </div>
        <br>
    </div>

    <p>Обратите внимание, что мы записали в файл &quot;newfile.txt&quot; дважды. Каждый раз, когда мы записывали в файл, мы отправляли строку $txt, которая сначала содержала &quot;John Doe&quot; а вторая содержала &quot;Jane Doe&quot;. После того как мы закончили писать, мы закрыли файл с помощью функции <code class="w3-codespan">fclose()</code>.</p>
    <p>Если мы откроем файл &quot;newfile.txt&quot; он будет выглядеть так:</p>
    <div class="w3-code htmlHigh w3-border notranslate"><div>
            John Doe<br>Jane Doe</div>
    </div>
    <hr>

    <h2>PHP Перезапись</h2>
    <p>Теперь, когда &quot;newfile.txt&quot; содержит некоторые данные, мы можем показать, что происходит, когда мы открываем существующий файл для записи. Все существующие данные будут удалены, и мы начнем с пустого файла.</p>
    <p>В приведенном ниже примере мы открываем существующий файл &quot;newfile.txt&quot;, и записываем в него новые данные:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$myfile = fopen(&quot;newfile.txt&quot;, &quot;w&quot;) or die(&quot;Невозможно открыть файл!&quot;);<br>$txt = &quot;Mickey Mouse\n&quot;;<br>fwrite($myfile, $txt);<br>$txt = &quot;Minnie Mouse\n&quot;;<br>fwrite($myfile, $txt);<br>fclose($myfile);<br>?&gt;
        </div>
        <br>
    </div>

    <p>Если мы теперь откроем файл &quot;newfile.txt&quot; то John и Jane исчезли, и будут присутствовать только те данные, которые мы только что написали:</p>
    <div class="w3-code w3-border notranslate"><div>
            Mickey Mouse<br>Minnie Mouse</div>
    </div>
    <hr>

    <h2>Полный справочник по файловой системе PHP</h2>
    <p>Для более детального ознакомления с функциями файловой системы, перейдите к полному <a href="php_ref_filesystem.php">PHP Справочнику файловой системы</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_file_open.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_file_upload.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>