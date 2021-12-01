<?php include '../include/head.php'; ?>

<title>JavaScript Условия if else и else if. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Условия if else и else if. Что такое условные операторы. Как применяются? Примеры использования. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript Условия if else и else if</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_comparisons.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_switch.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Условные операторы</strong> используются для выполнения разных действий в зависимости от разных условий.</p>
    <hr>

    <h2>Условные операторы</h2>
    <p>Очень часто, когда вы пишете код, вы хотите выполнять разные действия для разных решений.</p>
    <p>Для этого вы можете использовать в своем коде <strong>условные операторы</strong>.</p>
    <p>В JavaScript у нас есть следующие <strong>условные операторы</strong>:</p>
    <ul>
        <li>Используйте <code class="w3-codespan">if</code> чтобы указать блок кода, который должен быть выполнен, если указанное условие true</li>
        <li>Используйте <code class="w3-codespan">else</code> чтобы указать блок кода, который должен быть выполнен, если то же условие false</li>
        <li>Используйте <code class="w3-codespan">else if</code> чтобы указать новое условие для проверки, если первое условие false</li>
        <li>Используйте <code class="w3-codespan">switch</code> чтобы указать множество альтернативных блоков кода для выполнения</li>
    </ul>
    <div class="w3-panel w3-note">
        <p>Оператор <code class="w3-codespan">switch</code> описан в следующей главе этого учебника на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Оператор if</h2>
    <p>Используйте оператор <code class="w3-codespan">if</code> чтобы указать блок кода JavaScript, который будет выполняться, если условие true.</p>

    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate jsHigh"><div>
            if (<i>condition</i>) {<br>
            &nbsp;&nbsp;//<em>&nbsp; блок кода, который должен быть выполнен, если условие true<br>
            </em>}
        </div>
    </div>

    <div class="w3-panel w3-note">
        <p>Обратите внимание, что <code class="w3-codespan">if</code> вводится строчными буквами. Заглавные буквы (If или IF) вызовут ошибку JavaScript.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Сделайте приветствие &quot;Good day&quot; если час меньше, чем 18:00:</p>
        <div class="w3-code notranslate jsHigh">
            if (hour &lt; 18) {<br>
            &nbsp; greeting = &quot;Good day&quot;;<br>
            }</div>
        <p>Результат приветствия будет:</p>
        <div class="w3-white w3-padding notranslate">
            <code>
                <script>
                    d=new Date();
                    var time=d.getHours();
                    if (time<20)
                    {
                        document.write("Good day");
                    }
                </script>
            </code>
        </div>
        <a target="_blank" href="../jstryit/tryjs_ifthen.html" class="w3-btn w3-margin-bottom w3-margin-top">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Оператор else</h2>
    <p>Используйте оператор <code class="w3-codespan">else</code> чтобы указать блок кода, который будет выполняться, если условие false.</p>
    <div class="w3-code w3-border notranslate jsHigh"><div>
            if (<i>condition</i>) {<br>
            &nbsp;&nbsp;//<em>&nbsp; блок кода, который должен быть выполнен, если условие true<br>
            </em>}
            else {
            <br>
            &nbsp;&nbsp;//<em>&nbsp; блок кода, который должен быть выполнен, если условие false<br>
            </em>}</div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Если час меньше 18, создайте &quot;Good day&quot;; приветствие, иначе &quot;Good evening&quot;:</p>
        <div class="w3-code notranslate jsHigh">
            if (hour &lt; 18) {<br>
            &nbsp;&nbsp;greeting = &quot;Good day&quot;;<br>
            }
            else {<br>
            &nbsp; greeting = &quot;Good evening&quot;;<br>
            }
        </div>
        <p>Результат приветствия будет:</p>
        <div class="w3-white w3-padding notranslate">
            <code>
                <script>
                    d=new Date();
                    var time=d.getHours();
                    if (time<20)
                    {
                        document.write("Good day");
                    }
                    else
                    {
                        document.write("Good evening");
                    }
                </script>
            </code>
        </div>
        <a target="_blank" href="../jstryit/tryjs_ifthenelse.html" class="w3-btn w3-margin-bottom w3-margin-top">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Оператор else if</h2>
    <p>Используйте оператор <code class="w3-codespan">else if</code> чтобы указать новое условие, если первое условие false.</p>

    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate jsHigh"><div>
            if (<i>условие1</i>) {<br>
            &nbsp;&nbsp;//<em>&nbsp; блок кода, который должен быть выполнен, если условие1 true<br>
            </em>}
            else if (<i>условие2</i>) {<br>
            &nbsp;&nbsp;//<em>&nbsp; блок кода, который должен быть выполнен, если условие1 false, а условие2 true</em><br>
            } else {<br>
            &nbsp;&nbsp;//<em>&nbsp; блок кода, который должен быть выполнен, если условие1 false, а условие2 false<br>
            </em>}</div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Если время меньше 10:00, создайте сообщение приветствия &quot;Good morning&quot;, если нет, но время меньше 20:00, создайтье приветствие &quot;Good day&quot;, в противном случае &quot;Good evening&quot;:</p>
        <div class="w3-code notranslate jsHigh">
            if (time &lt; 10) {<br>
            &nbsp; greeting = &quot;Good morning&quot;;<br>
            }
            else if (time &lt; 20)&nbsp;{<br>
            &nbsp; greeting = &quot;Good day&quot;;<br>
            }
            else&nbsp;{<br>
            &nbsp; greeting = &quot;Good evening&quot;;<br>
            }
        </div>
        <p>Результат приветствия будет:</p>
        <div class="w3-white w3-padding notranslate">
            <code>
                <script>
                    d=new Date();
                    time=d.getHours();
                    if (time<10)
                    {
                        document.write("Good morning");
                    }
                    else if (time<20)
                    {
                        document.write("Good day");
                    }
                    else
                    {
                        document.write("Good evening");
                    }
                </script>
            </code>
        </div>
        <a target="_blank" href="../jstryit/tryjs_elseif.html" class="w3-btn w3-margin-bottom w3-margin-top">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Больше примеров</h2>
    <p><a target="_blank" href="../jstryit/tryjs_randomlink.html">Случайная ссылка</a><br>В этом примере будет записана ссылка либо на W3Schools, либо на Всемирный фонд дикой природы (WWF). При использовании случайного числа вероятность каждой ссылки составляет 50%.</p>
    <hr>

    <form autocomplete="off" spellcheck="false" id="w3-exerciseform" action="https://www.w3schools.com/js/exercise_js.asp?filename=exercise_js_conditions1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Исправьте оператор <code class="w3-codespan">if</code> чтобы вывести "Hello World" если <code class="w3-codespan">x</code> больше чем <code class="w3-codespan">y</code>.</p>
            <div class="exerciseprecontainer">
<pre>
if <input name="ex1" maxlength="1" style="width: 14px;">x &gt; y<input name="ex2" maxlength="1" style="width: 14px;"> <input name="ex3" maxlength="1" style="width: 14px;">
  alert("Hello World");
<input name="ex4" maxlength="1" style="width: 14px;">
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_comparisons.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_switch.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>