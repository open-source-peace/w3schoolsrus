<?php include '../include/head.php'; ?>
<title>PHP Суперглобальные - $_GET. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Суперглобальные - $_GET. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP Суперглобальные - $_GET</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_superglobals_post.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_regex.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Суперглобальные переменные</strong> - это встроенные переменные, которые всегда доступны во всех областях.</p>
    <hr>

    <h2>PHP $_GET</h2>
    <p>PHP $_GET - это суперглобальная переменная PHP, которая используется для сбора данных формы после отправки HTML-формы с помощью <code class="w3-codespan">method=&quot;get&quot;</code>.</p>
    <p>$_GET также может собирать данные, отправленные в URL.</p>
    <p>Предположим, у нас есть HTML-страница, содержащая гиперссылку с параметрами:</p>
    <div class="w3-code w3-border notranslate"><div>
            &lt;html&gt;<br>
            &lt;body&gt;<br><br>
            &lt;a href=&quot;test_get.php?subject=PHP&amp;web=W3schools.com&quot;&gt;Test $GET&lt;/a&gt;<br><br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div></div>
    <p>Когда пользователь кликает на ссылку &quot;Test $GET&quot;, параметры &quot;subject&quot; и &quot;web&quot; отправляются в &quot;test_get.php&quot;, после чего вы можете получить доступ к их значениям в &quot;test_get.php&quot; с помощью $_GET.</p>
    <p>В приведенном ниже примере показан код в &quot;test_get.php&quot;:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;html&gt;<br>
            &lt;body&gt;<br>
            <br>
            &lt;?php <br>echo &quot;Study &quot; . $_GET['subject'] . &quot; at &quot; . $_GET['web'];<br>?&gt;<br>
            <br>
            &lt;/body&gt;<br>
            &lt;/html&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_global_get" target="_blank" rel="nofollow">Попробуйте сами &raquo;</a>
    </div>
    <p><b>Совет:</b> Вы узнаете больше о $_POST в главе <a href="php_forms.php">PHP Формы</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>

    <br>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_superglobals_post.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_regex.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>