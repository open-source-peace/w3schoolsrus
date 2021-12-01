<?php include '../include/head.php'; ?>
<title>PHP Цикл Foreach. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Цикл Foreach. Что такое цикл в программировании? Зачем нужны циклы? Современный учебник по языку PHP. Упражнение. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Цикл foreach</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_looping_for.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_looping_break.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Цикл <code class="w3-codespan">foreach</code> перебирает блок кода для каждого элемента в массиве.</p>
    <hr>

    <h2>PHP Цикл foreach</h2>
    <p>Цикл <code class="w3-codespan">foreach</code> работает только с массивами и используется для цикла по каждой паре ключ / значение в массиве.</p>
    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate"><div>
            foreach ($<i>array </i>as<i> </i>$<i>value</i>)
            {<br>
            &nbsp;&nbsp;<i>код для выполнения;</i><br>
            }
        </div></div>

    <p>Для каждой итерации цикла значение текущего элемента массива присваивается $value, а указатель массива перемещается на единицу, пока не достигнет последнего элемента массива.</p>
    <h3>Примеры</h3>
    <p>В следующем примере будут выведены значения данного массива ($colors):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php <br>$colors = array(&quot;red&quot;, &quot;green&quot;, &quot;blue&quot;, &quot;yellow&quot;); <br>
            <br>foreach ($colors as $value) {<br>&nbsp; echo &quot;$value &lt;br&gt;&quot;;<br>}<br>?&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_loop_foreach.html">Попробуйте сами &raquo;</a>
    </div>

    <p>В следующем примере будут выведены как ключи, так и значения данного массива ($age):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$age = array(&quot;Peter&quot;=&gt;&quot;35&quot;, &quot;Ben&quot;=&gt;&quot;37&quot;, &quot;Joe&quot;=&gt;&quot;43&quot;);<br>
            <br>foreach($age as $x =&gt; $val) {<br>&nbsp; echo &quot;$x = $val&lt;br&gt;&quot;;<br>}<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_loop_foreach2.html">Попробуйте сами &raquo;</a>
    </div>
    <p>Вы узнаете больше про массивы в разделе <a href="php_arrays.php">PHP Массивы</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_looping_for.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_looping_break.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>