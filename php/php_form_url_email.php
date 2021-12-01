<?php include '../include/head.php'; ?>
<title>PHP Форма URL/e-mail. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Форма URL/e-mail. PHP Формы - Как проверить E-mail и URL. Обязательные поля ввода формы. Полный скрипт на PHP. Современный учебник по языку PHP. Полный справочник. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Формы - Проверка E-mail и URL</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_form_required.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_form_complete.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">В этой главе показано, как проверять имена, электронную почту и URL-адреса.</p>
    <hr>

    <h2>PHP - Проверка имени</h2>
    <p>Приведенный ниже код показывает простой способ проверить, содержит ли поле имени (name) только буквы и пробелы. Если значение name недопустимо, сохраните сообщение об ошибке:</p>
    <div class="w3-code w3-border notranslate"><div>
            $name = test_input($_POST[&quot;name&quot;]);<br>
            if (!preg_match(&quot;/^[a-zA-Z ]*$/&quot;,$name)) {<br>&nbsp; $nameErr = &quot;Разрешены только буквы и пробелы&quot;; <br>}</div>
    </div>

    <div class="w3-panel w3-note"><p>
        <p><strong>Функция preg_match() ищет строку для шаблона, возвращая true, если шаблон существует, и false в противном случае.</strong></p>
    </div>
    <hr>

    <h2>PHP - Проверка E-mail</h2>
    <p>Самый простой и безопасный способ проверить, правильно ли сформирован адрес электронной почты, - это использовать PHP-функцию filter_var().</p>
    <p>В приведенном ниже коде, если адрес электронной почты не правильно сформирован, сохраните сообщение об ошибке:</p>
    <div class="w3-code w3-border notranslate"><div>
            $email = test_input($_POST[&quot;email&quot;]);<br>
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {<br>&nbsp; $emailErr = &quot;Invalid email format&quot;; <br>}</div></div>
    <hr>

    <h2>PHP - Проверка URL</h2>
    <p>Приведенный ниже код демонстрирует способ проверки правильности синтаксиса URL-адреса (это регулярное выражение также допускает тире в URL-адресе). Если синтаксис URL-адреса недопустим, сохраните сообщение об ошибке:</p>
    <div class="w3-code w3-border notranslate"><div>
            $website = test_input($_POST[&quot;website&quot;]);<br>if (!preg_match(&quot;/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&amp;@#\/%?=~_|!:,.;]*[-a-z0-9+&amp;@#\/%=~_|]/i&quot;,$website)) {<br>&nbsp;&nbsp;$websiteErr = &quot;Invalid URL&quot;; <br>}</div>
    </div>
    <hr>

    <h2>PHP - Подтвердите имя, email и URL</h2>
    <p>Теперь скрипт выглядит так:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>// определить переменные и установить пустые значения<br>$nameErr = $emailErr = $genderErr = $websiteErr = &quot;&quot;;<br>$name = $email = $gender = $comment = $website = &quot;&quot;;<br><br>if ($_SERVER[&quot;REQUEST_METHOD&quot;] == &quot;POST&quot;) {<br>&nbsp; if (empty($_POST[&quot;name&quot;])) {<br>&nbsp;&nbsp;&nbsp; $nameErr = &quot;Name is required&quot;;<br>&nbsp; } else {<br>&nbsp;&nbsp;&nbsp; $name = test_input($_POST[&quot;name&quot;]);<br>&nbsp;&nbsp;&nbsp; // проверьте, содержит ли имя только буквы и пробелы<br>&nbsp;&nbsp;&nbsp; if (!preg_match(&quot;/^[a-zA-Z ]*$/&quot;,$name)) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $nameErr = &quot;Разрешены только буквы и пробелы&quot;; <br>&nbsp;&nbsp;&nbsp; }<br>&nbsp; }<br><br>&nbsp; if (empty($_POST[&quot;email&quot;])) {<br>&nbsp;&nbsp;&nbsp; $emailErr = &quot;Email is required&quot;;<br>&nbsp; } else {<br>&nbsp;&nbsp;&nbsp; $email = test_input($_POST[&quot;email&quot;]);<br>&nbsp;&nbsp;&nbsp; // проверьте, правильно ли сформирован адрес электронной почты<br>&nbsp;&nbsp;&nbsp; if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $emailErr = &quot;Invalid email format&quot;; <br>&nbsp;&nbsp;&nbsp; }<br>&nbsp; }<br><br>&nbsp; if (empty($_POST[&quot;website&quot;])) {<br>&nbsp;&nbsp;&nbsp; $website = &quot;&quot;;<br>&nbsp; } else {<br>&nbsp;&nbsp;&nbsp; $website = test_input($_POST[&quot;website&quot;]);<br>&nbsp;&nbsp;&nbsp; // проверить правильность синтаксиса URL-адреса (это регулярное выражение также допускает тире в URL-адресе)<br>&nbsp;&nbsp;&nbsp; if (!preg_match(&quot;/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&amp;@#\/%?=~_|!:,.;]*[-a-z0-9+&amp;@#\/%=~_|]/i&quot;,$website)) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $websiteErr = &quot;Invalid URL&quot;; <br>&nbsp;&nbsp;&nbsp; }<br>&nbsp; }<br><br>&nbsp; if (empty($_POST[&quot;comment&quot;])) {<br>&nbsp;&nbsp;&nbsp; $comment = &quot;&quot;;<br>&nbsp; } else {<br>&nbsp;&nbsp;&nbsp; $comment = test_input($_POST[&quot;comment&quot;]);<br>&nbsp; }<br><br>&nbsp; if (empty($_POST[&quot;gender&quot;])) {<br>&nbsp;&nbsp;&nbsp; $genderErr = &quot;Пол указывать обязательно&quot;;<br>&nbsp; } else {<br>&nbsp;&nbsp;&nbsp; $gender = test_input($_POST[&quot;gender&quot;]);<br>&nbsp; }<br>}<br>?&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_form_validation_special" target="_blank" rel="nofollow">Попробуйте сами &raquo;</a>
    </div>
    <p>Следующий шаг - показать, как запретить форме очищать все поля ввода, когда пользователь отправляет форму.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_form_required.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_form_complete.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>