<?php include '../include/head.php'; ?>
<title>PHP Break и Continue. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Break и Continue. Прерывание и продолжение. Современный учебник по языку PHP. Упражнение. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Break и Continue</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_looping_foreach.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_functions.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>PHP Break - Прерывание</h2>
    <p>Вы уже видели оператор <code class="w3-codespan">break</code> который использовался в предыдущей главе этого руководства. Он использовался для &quot;выпрыгивания&quot; из оператора <code class="w3-codespan">switch</code>.</p>
    <p>Оператор <code class="w3-codespan">break</code> также может использоваться для выхода из цикла.</p>
    <p>Этот пример выходит из цикла, когда <strong>x</strong> равен <strong>4</strong>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php <br>for ($x = 0; $x &lt; 10; $x++) {<br>&nbsp; if ($x == 4) {<br>&nbsp;&nbsp;&nbsp;
            break;<br>&nbsp; }<br>&nbsp; echo &quot;Число: $x &lt;br&gt;&quot;;<br>}<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_break.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>PHP Continue - Продолжение</h2>
    <p>Оператор <code class="w3-codespan">continue</code> прерывает одну итерацию (в цикле), если возникает указанное условие, и продолжает следующую итерацию в цикле.</p>
    <p>В этом примере пропускается значение <strong>4</strong>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php <br>for ($x = 0; $x &lt; 10; $x++) {<br>&nbsp; if ($x == 4) {<br>&nbsp;&nbsp;&nbsp;
            continue;<br>&nbsp; }<br>&nbsp; echo &quot;Число: $x &lt;br&gt;&quot;;<br>}<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_continue.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Break и Continue в цикле While</h2>
    <p>Вы также можете использовать <code class="w3-codespan">break</code> и <code class="w3-codespan">continue</code> в цикле <code class="w3-codespan">while</code>:</p>

    <div class="w3-example">
        <h3>Пример Break</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php <br>$x = 0;<br><br>while($x &lt; 10) {<br>&nbsp; if ($x == 4) {<br>&nbsp;&nbsp;&nbsp;
            break;<br>&nbsp; }<br>&nbsp; echo &quot;Число: $x &lt;br&gt;&quot;;<br>&nbsp; $x++;<br>
            } <br>?&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_break_while.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример Continue</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php <br>$x = 0;<br><br>while($x &lt; 10) {<br>&nbsp; if ($x == 4) {<br>&nbsp;&nbsp;&nbsp;
            $x++;<br>&nbsp;&nbsp;&nbsp; continue;<br>&nbsp; }<br>&nbsp; echo &quot;Число: $x &lt;br&gt;&quot;;<br>&nbsp; $x++;<br>} <br>?&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_continue_while.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_looping_foreach.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_functions.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>