<?php include '../include/head.php'; ?>
<title>PHP Условные операторы if...else...elseif. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Условные операторы if...else...elseif. Оператор switch. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">if...else...elseif</span> Операторы</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_operators.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_switch.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Условные операторы</strong> используются для выполнения различных действий в зависимости от условий.</p>
    <hr>

    <h2>PHP Условные операторы</h2>
    <p>Очень часто, когда вы пишете код, вы хотите выполнять разные действия для разных условий. Для этого вы можете использовать условные выражения в своём коде.</p>
    <p>В PHP есть следующие условные операторы:</p>
    <ul>
        <li>Оператор <code class="w3-codespan">if</code> выполняет некоторый код, если выполняется одно условие</li>
        <li>Оператор <code class="w3-codespan">if...else</code> выполняет некоторый код, если условие true, и другой код, если условие false</li>
        <li>Оператор <code class="w3-codespan">if...elseif...else</code> выполняет разные коды для более чем двух условий</li>
        <li>Оператор <code class="w3-codespan">switch</code> выбирает один из множества блоков кода для выполнения</li>
    </ul>
    <hr>

    <h2>PHP - Оператор if</h2>
    <p>Оператор <code class="w3-codespan">if</code> выполняет некоторый код, если выполняется одно условие.</p>

    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate"><div>
            if (<i>состояние</i>) {<i><br>
                &nbsp;&nbsp;&nbsp; код, который будет выполнен, если условие true</i>;<br>}
        </div></div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Выведет &quot;Have a good day!&quot; если текущее время (ЧАС) меньше, чем 20:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            $t = date(&quot;H&quot;);<br>
            <br>if ($t &lt; &quot;20&quot;) {<br>
            &nbsp;&nbsp;&nbsp; echo &quot;Have a good day!&quot;;<br>
            }<br>
            ?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_if.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>PHP - Оператор if...else</h2>
    <p>Оператор <code class="w3-codespan">if...else</code> выполняет некоторый код, если условие true, и другой код, если это условие false.</p>

    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate"><div>
            if (<i>состояние</i>)&nbsp;{<br>
            &nbsp;
            &nbsp;&nbsp;<i>код, который будет выполнен, если условие true;</i><br>
            }
            else {<br>
            &nbsp;&nbsp;<i>&nbsp; код, который будет выполнен, если условие false;<br>
            </i>}
        </div></div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Выведет &quot;Have a good day!&quot; если текущее время меньше 20, и &quot;Have a good night!&quot; если иначе:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            $t = date(&quot;H&quot;);<br><br>
            if ($t &lt; &quot;20&quot;) {<br>
            &nbsp;
            &nbsp;
            echo &quot;Have a good day!&quot;;<br>
            }
            else {<br>
            &nbsp;&nbsp;&nbsp; echo
            &quot;Have a good night!&quot;;<br>
            }<br>
            ?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_if_else.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>PHP - Оператор if...elseif...else</h2>
    <p>Оператор <code class="w3-codespan">if...elseif...else</code> выполняет разные коды для более чем двух условий.</p>
    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate"><div>
            if (<i>состояние</i>) {<br>
            &nbsp;
            &nbsp;&nbsp;<i>код, который будет выполнен, если это условие true;<br>
            </i>}
            elseif (<i>состояние</i>) {<br>
            &nbsp;&nbsp;<i>&nbsp; код, который будет выполнен, если первое условие false и это условие true;<br>
            </i>} else {<br>
            &nbsp;
            &nbsp;&nbsp;<i>код, который будет выполнен, если все условия false;<br>
            </i>}
        </div></div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Выведет &quot;Have a good morning!&quot; если текущее время меньше 10, и &quot;Have a good day!&quot; если текущее время меньше 20. В противном случае будет выведено &quot;Have a good night!&quot;:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            $t = date(&quot;H&quot;);<br>
            <br>if ($t &lt; &quot;10&quot;) {<br>
            &nbsp;&nbsp;&nbsp; echo &quot;Have a good morning!&quot;;<br>
            }
            elseif ($t &lt; &quot;20&quot;) {<br>
            &nbsp;&nbsp;&nbsp; echo &quot;Have a good day!&quot;;<br>
            } else {<br>
            &nbsp;&nbsp;&nbsp; echo &quot;Have a good night!&quot;;<br>
            }<br>
            ?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_if_elseif.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>PHP - Оператор switch</h2>
    <p>Оператор <code class="w3-codespan">switch</code> будет объяснён в следующей главе.</p>
    <hr>

    <h2>PHP Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/php/exercise.asp?filename=exercise_ifelse1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Вывести "Hello World", если <code class="w3codespan">$a</code> больше, чем <code class="w3codespan">$b</code>.</p>
            <div class="exerciseprecontainer">
<pre>
$a = 50;
$b = 10;
<input name="ex1" maxlength="2" style="width: 22px;"> <input name="ex2" maxlength="3" style="width: 32px;"> &gt; <input name="ex3" maxlength="3" style="width: 33px;"> {
  echo "Hello World";
}
</pre>
            </div>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_operators.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_switch.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>