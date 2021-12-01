<?php include '../include/head.php'; ?>
<title>PHP Цикл While. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Цикл While. Что такое цикл в программировании? Зачем нужны циклы? Современный учебник по языку PHP. Упражнение. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Цикл while</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_looping.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_looping_do_while.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Цикл <code class="w3-codespan">while</code> выполняет цикл по блоку кода, пока выполняется указанное условие.</p>
    <hr>

    <h2>PHP Цикл while</h2>
    <p>Цикл <code class="w3-codespan">while</code> выполняет блок кода, пока выполняется указанное условие.</p>
    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate"><div>
            while (<i>условие верно</i>) {<br>
            <i>&nbsp;&nbsp;код будет выполняться</i>;<br>
            }
        </div></div>

    <h3>Примеры</h3>
    <p>В приведенном ниже примере отображаются числа от 1 до 5:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php <br>$x = 1; <br><br>while($x &lt;= 5) {<br>&nbsp; echo &quot;Число: $x &lt;br&gt;&quot;;<br>&nbsp;&nbsp;$x++;<br>} <br>?&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_loop_while.html">Попробуйте сами &raquo;</a>
    </div>

    <h3>Объяснение примера</h3>
    <ul>
        <li>$x = 1; - Инициализируйте счетчик цикла ($x) и установите начальное значение на 1</li>
        <li>$x &lt;= 5 - Продолжайте цикл, пока $x меньше или равно 5</li>
        <li>$x++; - Увеличивайте значение счетчика цикла на 1 для каждой итерации</li>
    </ul>

    <p>Этот пример считает до 100 десятками:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php <br>$x = 0; <br><br>while($x &lt;= 100) {<br>&nbsp;&nbsp;echo &quot;Число: $x &lt;br&gt;&quot;;<br>
            &nbsp; $x+=10;<br>} <br>?&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_loop_while2.html">Попробуйте сами &raquo;</a>
    </div>
    <h3>Объяснение примера</h3>
    <ul>
        <li>$x = 0; - Инициализируйте счетчик цикла ($x) и установите начальное значение на 0</li>
        <li>$x &lt;= 100 - Продолжайте цикл, пока $x меньше или равно 100</li>
        <li>$x+=10; - Увеличивайте значение счетчика цикла на 10 для каждой итерации</li>
    </ul>
    <hr>

    <h2>PHP Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/php/exercise.asp?filename=exercise_loops1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Выведите <code class="w3-codespan">$i</code>, если $i меньше 6.</p>
            <div class="exerciseprecontainer">
<pre>
$i = 1;

<input name="ex1" maxlength="5" style="width: 54px;"> ($i &lt; 6) <input name="ex2" maxlength="1" style="width: 11px;">
  echo $i;
  $i++;
<input name="ex3" maxlength="1" style="width: 12px;">
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_looping.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_looping_do_while.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>