<?php include '../include/head.php'; ?>
<title>PHP Цикл For. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Цикл For. Применение циклов в PHP. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Цикл for</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_looping_do_while.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_looping_foreach.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Цикл <code class="w3-codespan">for</code> проходит по блоку кода указанное количество раз.</p>
    <hr>

    <h2>PHP Цикл for</h2>
    <p>Цикл <code class="w3-codespan">for</code> используется, когда вы заранее знаете, сколько раз скрипт должен запускаться.</p>
    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate"><div>
            for (<i>счетчик инициализации; счетчик тестов; счетчик приращения</i>)
            {<br>
            &nbsp;&nbsp;<i>код, выполняемый для каждой итерации;</i><br>
            }
        </div></div>

    <p>Параметры:</p>
    <ul>
        <li><i>счетчик инициализации</i>: Инициализировать значение счетчика цикла.</li>
        <li><i>счетчик тестов</i>: Оценивается для каждой итерации цикла. Если он оценивается как TRUE, цикл продолжается. Если он принимает значение FALSE, цикл завершается.</li>
        <li><i>счетчик приращения</i>: Увеличивает значение счетчика цикла.</li>
    </ul>

    <h3>Примеры</h3>
    <p>В приведенном ниже примере отображаются числа от 0 до 10:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php <br>for ($x = 0; $x &lt;= 10; $x++)
            {<br>
            &nbsp;&nbsp;echo &quot;Число: $x &lt;br&gt;&quot;;<br>} <br>?&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_loop_for.html">Попробуйте сами &raquo;</a>
    </div>
    <h3>Объяснение примера</h3>
    <ul>
        <li>$x = 0; - Инициализируйте счетчик цикла ($x) и установите начальное значение на 0</li>
        <li>$x &lt;= 10; - Продолжайте цикл, пока $ x меньше или равно 10</li>
        <li>$x++ - Увеличивайте значение счетчика цикла на 1 для каждой итерации</li>
    </ul>

    <p>Этот пример считает до 100 десятками:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php <br>for ($x = 0; $x &lt;= 100; $x+=10)
            {<br>
            &nbsp; echo &quot;Число: $x &lt;br&gt;&quot;;<br>} <br>?&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_loop_for2.html">Попробуйте сами &raquo;</a>
    </div>
    <h3>Объяснение примера</h3>
    <ul>
        <li>$x = 0; - Инициализируйте счетчик цикла ($x) и установите начальное значение на 0</li>
        <li>$x &lt;= 100; - Продолжайте цикл, пока $x меньше или равно 100</li>
        <li>$x+=10 - Увеличивайте значение счетчика цикла на 10 для каждой итерации</li>
    </ul>
    <hr>

    <h2>PHP Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/php/exercise.asp?filename=exercise_loops3" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Создайте цикл от 0 до 9.</p>
            <div class="exerciseprecontainer">
<pre>
<input name="ex1" maxlength="3" style="width: 33px;"> ($i = 0; $i &lt; 10; <input name="ex2" maxlength="4" style="width: 43px;">) {
  echo $i;
}
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_looping_do_while.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_looping_foreach.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>