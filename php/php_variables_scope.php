<?php include '../include/head.php'; ?>
<title>PHP Область действия переменных. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Область действия переменных. Современный учебник по языку PHP. Создание сайта с помощью PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Область действия переменных</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_variables.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_echo_print.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>PHP Область действия (применения) переменных</h2>
    <p>В PHP переменные можно объявлять в любом месте скрипта.</p>
    <p><strong>Область действия переменной</strong> - это часть скрипта, где на переменную можно ссылаться/использовать.</p>
    <p>В PHP есть три различных области действия переменных:</p>
    <ul>
        <li>local - локальная</li>
        <li>global - глобальная</li>
        <li>static - статическая</li>
    </ul>
    <hr>

    <h2>Глобальная и локальная область действия</h2>
    <p>Переменная, объявленная <b>вне</b> функции, имеет ГЛОБАЛЬНУЮ ОБЛАСТЬ ДЕЙСТВИЯ, и к ней можно получить доступ только вне функции:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Переменная с глобальной областью действия:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$x = 5; // глобальная область<br><br>function myTest() {<br>&nbsp;&nbsp;// использование x внутри этой функции вызовет ошибку<br>&nbsp;&nbsp;echo &quot;&lt;p&gt;Переменная x внутри функции: $x&lt;/p&gt;&quot;;<br>} <br>myTest();<br><br>echo &quot;&lt;p&gt;Переменная x вне функции: $x&lt;/p&gt;&quot;;<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_var_global.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Переменная, объявленная <b>внутри</b> функции, имеет ЛОКАЛЬНУЮ ОБЛАСТЬ ДЕЙСТВИЯ, и к ней можно получить доступ только внутри этой функции:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Переменная с локальной областью действия:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>function myTest() {<br>&nbsp;&nbsp;$x = 5; // локальная область<br>&nbsp; echo &quot;&lt;p&gt;Переменная x внутри функции: $x&lt;/p&gt;&quot;;<br>} <br>myTest();<br><br>// использование x вне функции вызовет ошибку<br>echo &quot;&lt;p&gt;Переменная x вне функции: $x&lt;/p&gt;&quot;;<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_var_local.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>У вас могут быть локальные переменные с одинаковыми именами в разных функциях, потому что локальные переменные распознаются только той функцией, в которой они объявлены.</p>
    </div>
    <hr>

    <h2>PHP Ключевое слово global</h2>
    <p>Ключевое слово <code class="w3-codespan">global</code> используется для доступа к глобальной переменной из функции.</p>
    <p>Для этого используйте ключевое слово <code class="w3-codespan">global</code> перед переменными (внутри функции):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            $x = 5;<br>$y = 10;<br><br>
            function myTest()
            {<br>
            &nbsp;&nbsp;global $x, $y;<br>
            &nbsp;
            $y = $x + $y;<br>
            }<br><br>
            myTest();<br>
            echo $y; // выведет 15<br>
            ?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_var_global_keyword.html">Попробуйте сами &raquo;</a>
    </div>

    <p>PHP также хранит все глобальные переменные в массиве с именем <code class="w3-codespan">$GLOBALS[<i>index</i>]</code>.
    Массив <em><code class="w3-codespan">index</code></em> содержит имя переменной. Этот массив также доступен из функций и может использоваться для непосредственного обновления глобальных переменных.</p>
    <p>Пример выше можно переписать так:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            $x = 5;<br>
            $y = 10;<br>
            <br>
            function myTest()
            {<br>
            &nbsp;
            $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];<br>
            } <br>
            <br>
            myTest();<br>
            echo $y; // выведет 15<br>
            ?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_var_globals.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>PHP Ключевое слово static</h2>
    <p>Обычно, когда функция завершается / выполняется, все её переменные удаляются. Однако иногда необходимо, чтобы локальная переменная НЕ удалялась. Это необходимо для дальнейшей работы.</p>
    <p>Для этого используйте ключевое слово <code class="w3-codespan">static</code> при первом объявлении переменной:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>function myTest()
            {<br>
            &nbsp;&nbsp;static $x = 0;<br>
            &nbsp; echo $x;<br>
            &nbsp; $x++;<br>
            }<br><br>
            myTest();<br>
            myTest();<br>
            myTest();<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_var_static.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Затем, каждый раз, когда функция вызывается, эта переменная по-прежнему будет содержать информацию, содержащуюся с момента последнего вызова функции.</p>
    <p><b>Примечание:</b> Переменная по-прежнему является локальной для функции.</p>
    <hr>

    <h2>PHP Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/php/exercise.asp?filename=exercise_variables1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Создайте переменную с именем <code class="w3-codespan">txt</code> и присвойте ей значение <code class="w3-codespan">"Hello"</code>.</p>
            <div class="exerciseprecontainer">
<pre>
<input name="ex1" maxlength="4" style="width: 43px;"> = "<input name="ex2" maxlength="5" style="width: 54px;">";
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_variables.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_echo_print.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>