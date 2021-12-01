<?php include '../include/head.php'; ?>
<title>PHP Загрузка файлов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Файл загрузить. Настройка файла php.ini. Создание HTML формы. Полный PHP скрипт для загрузки файла. Как загрузить файлы на сервер? Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Загрузка файлов</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_file_create.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_cookies.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">С помощью PHP легко <strong>загружать файлы на сервер</strong>.</p>
    <p class="intro">Однако с легкостью возникает опасность, поэтому всегда будьте осторожны при загрузке файлов!</p>
    <hr>

    <h2>Настройте файл &quot;php.ini&quot;</h2>
    <p>Во-первых, убедитесь, что PHP настроен на загрузку файлов.</p>
    <p>В файле &quot;php.ini&quot; найдите директиву <code class="w3-codespan">file_uploads</code> и установите для нее значение On:</p>
    <div class="w3-example">
        <div class="w3-code htmlHigh notranslate">
            file_uploads = On
        </div>
    </div>
    <hr>

    <h2>Создать HTML форму</h2>
    <p>Затем создайте HTML-форму, которая позволит пользователям выбирать файл изображения, который они хотят загрузить:</p>
    <div class="w3-example">
        <div class="w3-code htmlHigh notranslate">
            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;body&gt;<br><br>&lt;form action=&quot;upload.php&quot; method=&quot;post&quot;
            enctype=&quot;multipart/form-data&quot;&gt;<br>&nbsp;&nbsp;&nbsp; Выберите изображение для загрузки:<br>&nbsp;&nbsp;&nbsp; &lt;input type=&quot;file&quot; name=&quot;fileToUpload&quot; id=&quot;fileToUpload&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;input type=&quot;submit&quot; value=&quot;Upload Image&quot; name=&quot;submit&quot;&gt;<br>
            &lt;/form&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
        </div>
    </div>

    <p>Некоторые правила для HTML-формы выше:</p>
    <ul>
        <li>Убедитесь, что форма использует method=&quot;post&quot;</li>
        <li>Форма также нуждается в следующем атрибуте: enctype=&quot;multipart/form-data&quot;. Он указывает, какой тип контента использовать при отправке формы</li>
    </ul>
    <p>Без вышеуказанных запросов загрузка файла не будет работать.</p>
    <p>Также обратите внимание:</p>
    <ul>
        <li>Атрибут type=&quot;file&quot; тега &lt;input&gt; показывает поле ввода в качестве элемента управления выбора файла с кнопкой &quot;Browse&quot; рядом с элементом управления вводом</li>
    </ul>
    <p>Приведенная выше форма отправляет данные в файл с именем &quot;upload.php&quot;, который создаётся следующим.</p>
    <hr>

    <h2>Создать PHP скрипт для загрузки файла</h2>
    <p>Файл &quot;upload.php&quot; содержит код для загрузки файла:</p>
    <div class="w3-example">
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$target_dir = &quot;uploads/&quot;;<br>$target_file = $target_dir . basename($_FILES[&quot;fileToUpload&quot;][&quot;name&quot;]);<br>$uploadOk = 1;<br>$imageFileType =
            strtolower(pathinfo($target_file,PATHINFO_EXTENSION));<br>// Проверьте, является ли файл изображения фактическим изображением или поддельным изображением<br>if(isset($_POST[&quot;submit&quot;])) {<br>&nbsp;&nbsp;&nbsp; $check = getimagesize($_FILES[&quot;fileToUpload&quot;][&quot;tmp_name&quot;]);<br>&nbsp;&nbsp;&nbsp; if($check !== false) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo &quot;Файл является изображением - &quot; . $check[&quot;mime&quot;] . &quot;.&quot;;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $uploadOk = 1;<br>&nbsp;&nbsp;&nbsp; } else {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo &quot;Файл не является изображением.&quot;;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $uploadOk = 0;<br>&nbsp;&nbsp;&nbsp; }<br>}<br>?&gt;
        </div>
    </div>
    <p>Объяснение PHP скрипта:</p>
    <ul>
        <li>$target_dir = &quot;uploads/&quot; - указывает каталог, в который будет помещен файл</li>
        <li>$target_file указывает путь к файлу для загрузки</li>
        <li>$uploadOk=1 еще не используется (будет использоваться позже)</li>
        <li>$imageFileType содержит расширение файла (в нижнем регистре)</li>
        <li>Затем проверьте, является ли файл изображения фактическим изображением или поддельным изображением.</li>
    </ul>

    <div class="w3-panel w3-note"><p>
        <p><b>Примечание:</b> Вам нужно будет создать новый каталог с именем &quot;uploads&quot; в каталоге, где находится файл &quot;upload.php&quot;. Загруженные файлы будут сохранены там.</p>
    </div>
    <hr>

    <h2>Проверьте, существует ли файл уже</h2>
    <p>Теперь мы можем добавить некоторые ограничения.</p>
    <p>Сначала мы проверим, существует ли файл в папке &quot;uploads&quot; Если это так, отображается сообщение об ошибке, и $uploadOk устанавливается в 0:</p>
    <div class="w3-example">
        <div class="w3-code htmlHigh notranslate">
            // Проверьте, существует ли файл<br>if (file_exists($target_file)) {<br>&nbsp;&nbsp;&nbsp; echo &quot;Извините, файл уже существует.&quot;;<br>&nbsp;&nbsp;&nbsp; $uploadOk = 0;<br>
            } </div>
    </div>
    <hr>


    <h2>Ограничить размер файла</h2>
    <p>Поле ввода файла в нашей HTML-форме называется &quot;fileToUpload&quot;.</p>
    <p>Теперь необходимо проверить размер файла. Если размер файла превышает 500 КБ, отображается сообщение об ошибке, и $uploadOk имеет значение 0:</p>
    <div class="w3-example">
        <div class="w3-code phpHigh notranslate">
            // Проверить размер файла<br>if ($_FILES[&quot;fileToUpload&quot;][&quot;size&quot;] &gt; 500000) {<br>&nbsp;&nbsp;&nbsp; echo &quot;Извините, ваш файл слишком большой.&quot;;<br>&nbsp;&nbsp;&nbsp; $uploadOk = 0;<br>
            } </div>
    </div>
    <hr>

    <h2>Ограничить тип файла</h2>
    <p>Приведенный ниже код позволяет пользователям загружать только файлы JPG, JPEG, PNG и GIF. Все другие типы файлов выдают сообщение об ошибке перед установкой $uploadOk в 0:</p>
    <div class="w3-example">
        <div class="w3-code phpHigh notranslate">
            // Разрешить определенные форматы файлов<br>if($imageFileType != &quot;jpg&quot; &amp;&amp; $imageFileType  != &quot;png&quot; &amp;&amp; $imageFileType != &quot;jpeg&quot;<br>&amp;&amp; $imageFileType != &quot;gif&quot; ) {<br>&nbsp;&nbsp;&nbsp;  echo &quot;Извините, только JPG, JPEG, PNG &amp; GIF файлы разрешены.&quot;;<br>&nbsp;&nbsp;&nbsp;  $uploadOk = 0;<br>}
        </div>
    </div>
    <hr>

    <h2>Полный PHP скрипт загрузки файла</h2>
    <p>Полный файл &quot;upload.php&quot; выглядит так:</p>
    <div class="w3-example">
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$target_dir = &quot;uploads/&quot;;<br>$target_file = $target_dir . basename($_FILES[&quot;fileToUpload&quot;][&quot;name&quot;]);<br>$uploadOk = 1;<br>$imageFileType =
            strtolower(pathinfo($target_file,PATHINFO_EXTENSION));<br>// Проверьте, является ли файл изображения фактическим изображением или поддельным изображением<br>if(isset($_POST[&quot;submit&quot;])) {<br>&nbsp;&nbsp;&nbsp; $check = getimagesize($_FILES[&quot;fileToUpload&quot;][&quot;tmp_name&quot;]);<br>&nbsp;&nbsp;&nbsp; if($check !== false) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo &quot;Файл является изображением - &quot; . $check[&quot;mime&quot;] . &quot;.&quot;;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $uploadOk = 1;<br>&nbsp;&nbsp;&nbsp; } else {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo &quot;Файл не является изображением.&quot;;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $uploadOk = 0;<br>&nbsp;&nbsp;&nbsp; }<br>}<br>// Проверить, существует ли файл<br>if (file_exists($target_file)) {<br>&nbsp;&nbsp;&nbsp; echo &quot;Извините, файл уже существует.&quot;;<br>&nbsp;&nbsp;&nbsp; $uploadOk = 0;<br>}<br>
            // Проверить размер файла<br>if ($_FILES[&quot;fileToUpload&quot;][&quot;size&quot;] &gt; 500000) {<br>&nbsp;&nbsp;&nbsp; echo &quot;Извините, ваш файл слишком большой.&quot;;<br>&nbsp;&nbsp;&nbsp; $uploadOk = 0;<br>
            }<br>// Разрешить определенные форматы файлов<br>if($imageFileType != &quot;jpg&quot; &amp;&amp; $imageFileType != &quot;png&quot; &amp;&amp; $imageFileType != &quot;jpeg&quot;<br>&amp;&amp; $imageFileType != &quot;gif&quot; ) {<br>&nbsp;&nbsp;&nbsp; echo &quot;Извините, только JPG, JPEG, PNG &amp; GIF файлы разрешены.&quot;;<br>&nbsp;&nbsp;&nbsp; $uploadOk = 0;<br>}<br>// Проверить, не установлен ли $uploadOk в 0 по ошибке<br>if ($uploadOk == 0) {<br>&nbsp;&nbsp;&nbsp; echo &quot;Извините, ваш файл не был загружен.&quot;;<br>// если все в порядке, попробуйте загрузить файл<br>} else {<br>&nbsp;&nbsp;&nbsp; if (move_uploaded_file($_FILES[&quot;fileToUpload&quot;][&quot;tmp_name&quot;], $target_file)) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo &quot;Файл &quot;. basename( $_FILES[&quot;fileToUpload&quot;][&quot;name&quot;]). &quot; был загружен.&quot;;<br>&nbsp;&nbsp;&nbsp; } else {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo &quot;Извините, при загрузке файла произошла ошибка.&quot;;<br>&nbsp;&nbsp;&nbsp; }<br>}<br>?&gt;
        </div>
    </div>
    <hr>

    <h2>Полный справочник по файловой системе PHP</h2>
    <p>Для более полного ознакомления с функциями файловой системы, перейдите к полному
        <a href="php_ref_filesystem.php">PHP Справочнику файловой системы</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_file_create.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_cookies.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>