<?php include '../include/head.php'; ?>
<title>PHP Суперглобальные - $GLOBALS. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Суперглобальные - $GLOBALS. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP Суперглобальные - $GLOBALS</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_superglobals.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_superglobals_server.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Суперглобальные переменные</strong> - это встроенные переменные, которые всегда доступны во всех областях.</p>
    <hr>

    <h2>PHP $GLOBALS</h2>
    <p>$GLOBALS - это суперглобальная переменная PHP, которая используется для доступа к глобальным переменным из любого места PHP скрипта (также из функций или методов).</p>
    <p>PHP хранит все глобальные переменные в массиве с именем $GLOBALS[<i>index</i>]. Значение <em>index</em> содержит имя переменной.</p>
    <p>В приведенном ниже примере показано, как использовать суперглобальную переменную $GLOBALS:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php <br>$x = 75; <br>$y = 25;<br>&nbsp;<br>function addition() { <br>&nbsp;&nbsp;$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; <br>}<br>&nbsp;<br>addition(); <br>echo $z; <br>?&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_global_global.html">Попробуйте сами &raquo;</a>
    </div>

    <p>В приведенном выше примере, поскольку z - это переменная, присутствующая в массиве $GLOBALS, она также доступна вне функции!</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_superglobals.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_superglobals_server.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>