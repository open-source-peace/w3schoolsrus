<?php include '../include/head.php'; ?>
<title>PHP Обязательные поля формы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Обязательные поля формы. Имя, email, веб-сайт, пол, комментарий. Как создавать формы на PHP? Современный учебник по языку PHP. Полный справочник. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Формы - обязательные поля</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_form_validation.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_form_url_email.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">В этой главе показано, как сделать <strong>обязательные поля ввода</strong> и, при необходимости, создать сообщения об ошибках.</p>
    <hr>

    <h2>PHP - Обязательные поля</h2>

    <p>Из таблицы правил проверки формы на предыдущей странице видно, что &quot;Имя&quot;, &quot;E-mail&quot;, и &quot;Пол&quot; - обязательные поля. Эти поля не могут быть пустыми и должны быть заполнены в HTML форме.</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:25%">Поле</th>
            <th style="width:75%">Правила проверки</th>
        </tr>
        <tr>
            <td>Имя</td>
            <td>Обязательно. + Должно содержать только буквы и пробелы</td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td>Обязательно. + Должен содержать действительный адрес электронной почты (с использованием @ and .)</td>
        </tr>
        <tr>
            <td>Веб-сайт</td>
            <td>Не обязательно. Если поле присутствует, оно должно содержать действительный URL</td>
        </tr>
        <tr>
            <td>Комментарий</td>
            <td>Не обязательно. Многострочное поле ввода (текстовое поле)</td>
        </tr>
        <tr>
            <td>Пол</td>
            <td>Обязательно. Должен быть выбран один вариант</td>
        </tr>
    </table>
    <p>В предыдущей главе все поля ввода были необязательными.</p>
    <p>В следующем коде мы добавили несколько новых переменных: $nameErr, $emailErr, $genderErr и $websiteErr. Эти переменные ошибки будут содержать сообщения об ошибках для обязательных полей. Мы также добавили оператор <code class="w3-codespan">if else</code> для каждой переменной $_POST. Он проверяет, является ли переменная $_POST пустой (с помощью функции PHP <code class="w3-codespan">empty()</code>). Если оно пустое, сообщение об ошибке сохраняется в различных переменных ошибки, а если оно не пустое, оно отправляет введенные пользователем данные через функцию <code class="w3-codespan">test_input()</code>:</p>

    <div class="w3-code w3-border notranslate htmlHigh"><div>
            &lt;?php<br>// определить переменные и установить пустые значения<br>$nameErr = $emailErr
            = $genderErr = $websiteErr = &quot;&quot;;<br>$name = $email = $gender = $comment =
            $website = &quot;&quot;;<br><br>if ($_SERVER[&quot;REQUEST_METHOD&quot;] == &quot;POST&quot;) {<br>
            &nbsp;
            if (empty($_POST[&quot;name&quot;])) {<br>&nbsp;&nbsp;&nbsp; $nameErr = &quot;Имя обязательно&quot;;<br>&nbsp; } else {<br>&nbsp;&nbsp;&nbsp; $name = test_input($_POST[&quot;name&quot;]);<br>&nbsp; }<br><br>&nbsp; if (empty($_POST[&quot;email&quot;]))
            {<br>&nbsp;&nbsp;&nbsp; $emailErr = &quot;Email обязательно&quot;;<br>&nbsp; } else {<br>&nbsp;&nbsp;&nbsp; $email = test_input($_POST[&quot;email&quot;]);<br>&nbsp; }<br><br>&nbsp; if (empty($_POST[&quot;website&quot;]))
            {<br>&nbsp;&nbsp;&nbsp; $website = &quot;&quot;;<br>&nbsp; } else {<br>&nbsp;&nbsp;&nbsp; $website = test_input($_POST[&quot;website&quot;]);<br>&nbsp; }<br><br>&nbsp; if (empty($_POST[&quot;comment&quot;])) {<br>&nbsp;&nbsp;&nbsp; $comment = &quot;&quot;;<br>&nbsp; } else {<br>&nbsp;&nbsp;&nbsp; $comment = test_input($_POST[&quot;comment&quot;]);<br>&nbsp; }<br><br>&nbsp; if
            (empty($_POST[&quot;gender&quot;])) {<br>&nbsp;&nbsp;&nbsp; $genderErr = &quot;Пол обязательно&quot;;<br>&nbsp; } else
            {<br>&nbsp;&nbsp;&nbsp; $gender = test_input($_POST[&quot;gender&quot;]);<br>&nbsp; }<br>}<br>?&gt;</div></div>
    <hr>

    <h2>PHP - Показать сообщения об ошибках</h2>
    <p>Затем в HTML-форму мы добавляем небольшой скрипт после каждого обязательного поля, который генерирует правильное сообщение об ошибке, если это необходимо (то есть, если пользователь пытается отправить форму без заполнения обязательных полей):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;form method=&quot;post&quot; action=&quot;&lt;?php echo htmlspecialchars($_SERVER[&quot;PHP_SELF&quot;]);?&gt;&quot;&gt;<br> <br>
            Name: &lt;input type=&quot;text&quot; name=&quot;name&quot;&gt;<br>&lt;span class=&quot;error&quot;&gt;* &lt;?php echo $nameErr;?&gt;&lt;/span&gt;<br>
            &lt;br&gt;&lt;br&gt;<br>E-mail:<br>&lt;input type=&quot;text&quot; name=&quot;email&quot;&gt;<br>&lt;span class=&quot;error&quot;&gt;* &lt;?php echo $emailErr;?&gt;&lt;/span&gt;<br>&lt;br&gt;&lt;br&gt;<br>
            Website:<br>&lt;input type=&quot;text&quot; name=&quot;website&quot;&gt;<br>&lt;span class=&quot;error&quot;&gt;&lt;?php echo $websiteErr;?&gt;&lt;/span&gt;<br>&lt;br&gt;&lt;br&gt;<br>
            Comment: &lt;textarea name=&quot;comment&quot; rows=&quot;5&quot; cols=&quot;40&quot;&gt;&lt;/textarea&gt;<br>&lt;br&gt;&lt;br&gt;<br>
            Gender:<br>&lt;input type=&quot;radio&quot; name=&quot;gender&quot;  value=&quot;female&quot;&gt;Female<br>&lt;input type=&quot;radio&quot; name=&quot;gender&quot; value=&quot;male&quot;&gt;Male<br>&lt;input type=&quot;radio&quot; name=&quot;gender&quot; value=&quot;other&quot;&gt;Other<br>
            &lt;span class=&quot;error&quot;&gt;* &lt;?php echo $genderErr;?&gt;&lt;/span&gt;<br>&lt;br&gt;&lt;br&gt;<br>&lt;input type=&quot;submit&quot; name=&quot;submit&quot; value=&quot;Submit&quot;&gt; <br>
            <br>&lt;/form&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_form_validation_required" target="_blank" rel="nofollow">Попробуйте сами &raquo;</a>
    </div>
    <p>Следующим шагом является проверка входных данных, а именно: &quot;Содержит ли поле <i>Имя</i> только буквы и пробелы?&quot;, и &quot;Содержит ли поле <i>E-mail</i> валидный синтаксис адреса электронной почты?&quot;, и, если заполнено поле <i>Веб-сайт</i>, &quot;содержит ли оно действительный URL-адрес?&quot;</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_form_validation.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_form_url_email.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>