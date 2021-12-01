<?php include '../include/head.php'; ?>
<title>PHP Суперглобальные - $_REQUEST. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Суперглобальные - $_REQUEST. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP Суперглобальные - $_REQUEST</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_superglobals_server.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_superglobals_post.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Суперглобальные переменные</strong> - это встроенные переменные, которые всегда доступны во всех областях.</p>
    <hr>

    <h2>PHP $_REQUEST</h2>
    <p>PHP $_REQUEST - это суперглобальная переменная PHP, которая используется для сбора данных после отправки HTML-формы.</p>
    <p>В приведенном ниже примере показана форма с полем ввода и кнопкой отправки. Когда пользователь отправляет данные, нажимая &quot;Отправить&quot;, данные формы отправляются в файл, указанный в атрибуте действия формы тега &lt;form&gt;. В этом примере мы указываем на этот файл для обработки данных формы. Если вы хотите использовать другой файл PHP для обработки данных формы, замените его именем файла по вашему выбору. Затем можно использовать суперглобальную переменную $_REQUEST для сбора значения поля ввода:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;html&gt;<br>
            &lt;body&gt;<br>
            <br>
            &lt;form method=&quot;post&quot; action=&quot;&lt;?php echo $_SERVER['PHP_SELF'];?&gt;&quot;&gt;<br>&nbsp; Name: &lt;input type=&quot;text&quot; name=&quot;fname&quot;&gt;<br>&nbsp; &lt;input type=&quot;submit&quot;&gt;<br>
            &lt;/form&gt;<br><br>&lt;?php<br>if ($_SERVER[&quot;REQUEST_METHOD&quot;] == &quot;POST&quot;) {<br>&nbsp; // собирать значение поля ввода<br>&nbsp;&nbsp;$name = $_REQUEST['fname'];<br>
            &nbsp; if (empty($name)) {<br>&nbsp;&nbsp;&nbsp; echo &quot;Name is empty&quot;;<br>&nbsp;&nbsp;} else {<br>
            &nbsp;&nbsp;&nbsp; echo $name;<br>&nbsp;&nbsp;}<br>}<br>?&gt;<br>
            <br>
            &lt;/body&gt;<br>
            &lt;/html&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_global_request" target="_blank" rel="nofollow">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_superglobals_server.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_superglobals_post.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>