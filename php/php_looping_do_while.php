<?php include '../include/head.php'; ?>
<title>PHP Цикл Do While. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Цикл Do While. Использование циклов в PHP. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Цикл do while</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_looping_while.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_looping_for.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Цикл <code class="w3-codespan">do...while</code> один раз выполняет цикл по блоку кода, а затем повторяет цикл, пока выполняется указанное условие.</p>
    <hr>

    <h2>PHP Цикл do...while</h2>
    <p>Цикл <code class="w3-codespan">do...while</code> всегда выполняет блок кода один раз, затем проверяет условие и повторяет цикл, пока указанное условие true (верно).</p>
    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate"><div>
            do
            {<br>
            <i>&nbsp; код будет выполняться;<br>
            </i>}
            while (<i>условие верно</i>);
        </div></div>

    <h3>Примеры</h3>
    <p>В приведенном ниже примере сначала для переменной $x устанавливается значение 1 ($x = 1). Затем цикл <code class="w3-codespan">do...while</code> выведет некоторый результат, а затем увеличит переменную $x на 1. Затем условие проверяется ($x меньше или равно 5?), и цикл будет продолжать выполняться до тех пор, пока $x меньше или равно 5:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php <br>$x = 1; <br><br>do {<br>&nbsp;&nbsp;echo &quot;Число: $x &lt;br&gt;&quot;;<br>
            &nbsp; $x++;<br>} while ($x &lt;= 5);<br>?&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_loop_do_while.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> В цикле <code class="w3-codespan">do...while</code> условие проверяется ПОСЛЕ выполнения инструкций внутри цикла. Это означает, что цикл <code class="w3-codespan">do...while</code> выполнит свои инструкции хотя бы один раз, даже если условие false (ложно). См. пример ниже.</p>
    </div>

    <p>В этом примере для переменной $x устанавливается значение 6, затем выполняется цикл, и <b>затем проверяется условие</b>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php <br>$x = 6;<br> <br>do {<br>&nbsp; echo &quot;Число: $x &lt;br&gt;&quot;;<br>&nbsp;&nbsp;$x++;<br>} while ($x &lt;= 5);<br>?&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_loop_do_while2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_looping_while.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_looping_for.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>