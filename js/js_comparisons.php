<?php include '../include/head.php'; ?>

<title>JavaScript Сравнение и логические операторы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Операторы сравнения и логические. Как можно использовать? Условный (тернарный) оператор. Синтаксис. Сравнение разных типов. Преобразование в правильный тип перед сравнением. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Сравнение</span> и <span class="color_h1">Логические операторы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_booleans.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_if_else.php">Next &#10095;</a>
    </div>
    <hr>

    <p class="intro"><strong>Операторы сравнения</strong> и <strong>логические операторы</strong> используются для проверки <code class="w3-codespan">true</code> или <code class="w3-codespan">false</code>.</p>
    <hr>

    <h2>Операторы сравнения</h2>
    <p>Операторы сравнения используются в логических операторах для определения равенства или различия между переменными или значениями.</p>
    <p>Учитывая, что <code class="w3-codespan">x = 5</code>, в таблице ниже объясняются операторы сравнения:</p>

    <div class="w3-responsive" style="margin:-16px 0">
        <table class="ws-table-all notranslate">
            <tr>
                <th style="width:12%">Оператор</th>
                <th>Описание</th>
                <th>Сравнение</th>
                <th>Возвращает</th>
                <th style="width:10%">Попробуй это</th>
            </tr>
            <tr style="background-color:#f5f5f5;">
                <td rowspan="3">==</td>
                <td rowspan="3">равно</td>
                <td>x == 8</td>
                <td>false</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../jstryit/tryjs_comparison1.html">Попробуй это &raquo;</a></td>
            </tr>
            <tr style="background-color:#f5f5f5;">
                <td>x == 5</td>
                <td>true</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../jstryit/tryjs_comparison2.html">Попробуй это &raquo;</a></td>
            </tr>
            <tr style="background-color:#f5f5f5;">
                <td>x == "5"</td>
                <td>true</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../jstryit/tryjs_comparison12.html">Попробуй это &raquo;</a></td>
            </tr>
            <tr style="background-color:#fff;">
                <td rowspan="2">===</td>
                <td rowspan="2">равное значение и равный тип</td>
                <td>x === 5</td>
                <td>true</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../jstryit/tryjs_comparison4.html">Попробуй это &raquo;</a></td>
            </tr>
            <tr style="background-color:#fff;">
                <td>x === "5"</td>
                <td>false</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../jstryit/tryjs_comparison3.html">Попробуй это &raquo;</a></td>
            </tr>
            <tr style="background-color:#f5f5f5;">
                <td>!=</td>
                <td>не равно</td>
                <td>x != 8</td>
                <td>true</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../jstryit/tryjs_comparison5.html">Попробуй это &raquo;</a></td>
            </tr>
            <tr style="background-color:#fff;">
                <td rowspan="3">!==</td>
                <td rowspan="3">не равное значение или не равный тип</td>
                <td>x !== 5</td>
                <td>false</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_comparison7.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
            <tr style="background-color:#fff">
                <td>x !== &quot;5&quot;</td>
                <td>true</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_comparison6.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
            <tr style="background-color:#fff">
                <td>x !== 8</td>
                <td>true</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_comparison13.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
            <tr style="background-color:#f5f5f5">
                <td>&gt;</td>
                <td>больше чем</td>
                <td>x &gt; 8</td>
                <td>false</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../jstryit/tryjs_comparison8.html">Попробуй это &raquo;</a></td>
            </tr>
            <tr style="background-color:#fff;">
                <td>&lt;</td>
                <td>меньше чем</td>
                <td>x &lt; 8</td>
                <td>true</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../jstryit/tryjs_comparison9.html">Попробуй это &raquo;</a></td>
            </tr>
            <tr style="background-color:#f5f5f5;">
                <td>&gt;=</td>
                <td>больше чем или равно</td>
                <td>x &gt;= 8</td>
                <td>false</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../jstryit/tryjs_comparison10.html">Попробуй это &raquo;</a></td>
            </tr>
            <tr style="background-color:#fff;">
                <td>&lt;=</td>
                <td>меньше чем или равно</td>
                <td>x &lt;= 8</td>
                <td>true</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../jstryit/tryjs_comparison11.html">Попробуй это &raquo;</a></td>
            </tr>
        </table>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Как это можно использовать</h2>
    <p>Операторы сравнения могут использоваться в условных операторах для сравнения значений и принятия мер в зависимости от результата:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            if (age &lt; 14) text = &quot;Ты слишком юная, чтобы заниматься сексом&quot;;
        </div></div>

    <p>Вы узнаете больше об использовании условных операторов в следующей главе этого учебника.</p>
    <hr>

    <h2>Логические операторы</h2>
    <p>Логические операторы используются для определения логики между переменными или значениями.</p>
    <p>Учитывая, что <code class="w3-codespan">x = 6</code> и <code class="w3-codespan">y = 3</code>, в таблице ниже объясняются логические операторы:</p>

    <div class="w3-responsive" style="margin:-16px 0">
        <table class="ws-table-all notranslate">
            <tr>
                <th style="width:12%">Оператор</th>
                <th>Описание</th>
                <th>Пример</th>
                <th style="width:10%">Попробуй это</th>
            </tr>
            <tr>
                <td>&amp;&amp;</td>
                <td>and</td>
                <td>(x &lt; 10 &amp;&amp; y &gt; 1) является true</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../jstryit/tryjs_comparison_and.html">Попробуй это &raquo;</a></td>
            </tr>
            <tr>
                <td>||</td>
                <td>or</td>
                <td>(x == 5 || y == 5) является false</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../jstryit/tryjs_comparison_or.html">Попробуй это &raquo;</a></td>
            </tr>
            <tr>
                <td>!</td>
                <td>not</td>
                <td> !(x == y) является true</td>
                <td><a target="_blank" class="w3-btn btnsmall" href="../jstryit/tryjs_comparison_not.html">Попробуй это &raquo;</a></td>
            </tr>
        </table>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Условный (тернарный) оператор</h2>
    <p>JavaScript также содержит условный оператор, который присваивает значение переменной на основе некоторого условия.</p>
    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate">
        <div><em>variablename </em>= (<em>condition</em>) ?<em> value1</em>:<em>value2</em>&nbsp;</div>
    </div>

    <h3>Пример</h3>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            let voteable = (age &lt; 14) ? "Слишком юная":"Достаточно взрослая";</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_comparison.html">Попробуйте сами &raquo;</a>
    </div>
    <p>Если переменная age имеет значение ниже 14, значение переменной, подлежащей голосованию, будет &quot;Слишком юная&quot;, в противном случае значение переменной будет &quot;Достаточно взрослая&quot;.</p>
    <?php include '../include/addown_content.php'; ?>

    <h2>Сравнение разных типов</h2>
    <p>Сравнение данных разных типов может дать неожиданные результаты.</p>
    <p>При сравнении строки с числом JavaScript преобразует строку в число при выполнении сравнения. Пустая строка преобразуется в 0. Нечисловая строка преобразуется в <code class="w3-codespan">NaN</code>, что всегда <code class="w3-codespan">false</code>.</p>

    <table class="ws-table-all notranslate">
        <tr>
            <th>Кейс</th>
            <th>Значение</th>
            <th style="width:10%">Попробуй</th>
        </tr>
        <tr>
            <td>2 &lt; 12</td>
            <td>true</td>
            <td><a target="_blank" class="w3-btn btnsmall" href="../jstryit/tryjs_comparison_20.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>2 &lt; &quot;12&quot;</td>
            <td>true</td>
            <td><a target="_blank" class="w3-btn btnsmall" href="../jstryit/tryjs_comparison_21.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>2 &lt; &quot;John&quot;</td>
            <td>false</td>
            <td><a target="_blank" class="w3-btn btnsmall" href="../jstryit/tryjs_comparison_23.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>2 &gt; &quot;John&quot;</td>
            <td>false</td>
            <td><a target="_blank" class="w3-btn btnsmall" href="../jstryit/tryjs_comparison_24.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>2 == &quot;John&quot;</td>
            <td>false</td>
            <td><a target="_blank" class="w3-btn btnsmall" href="../jstryit/tryjs_comparison_25.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>&quot;2&quot; &lt; &quot;12&quot;</td>
            <td>false</td>
            <td><a target="_blank" class="w3-btn btnsmall" href="../jstryit/tryjs_comparison_26.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>&quot;2&quot; &gt; &quot;12&quot;</td>
            <td>true</td>
            <td><a target="_blank" class="w3-btn btnsmall" href="../jstryit/tryjs_comparison_27.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>&quot;2&quot; == &quot;12&quot;</td>
            <td>false</td>
            <td><a target="_blank" class="w3-btn btnsmall" href="../jstryit/tryjs_comparison_28.html">Попробуй это &raquo;</a></td>
        </tr>
    </table>

    <p>При сравнении двух строк, &quot;2&quot; будет больше, чем &quot;12&quot;, потому что (по алфавиту) 1 меньше чем 2.</p>
    <p>Чтобы обеспечить правильный результат, переменные должны быть преобразованы в правильный тип перед сравнением:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            age = Number(age);<br>
            if (isNaN(age)) {<br>
            &nbsp;&nbsp;voteable = &quot;Ввод не является числом&quot;;<br>
            } else {<br>
            &nbsp; voteable = (age &lt; 14) ? &quot;Слишком юная&quot; : &quot;Достаточно взрослая&quot;;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_comparison_12.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <form autocomplete="off" spellcheck="false" id="w3-exerciseform" action="https://www.w3schools.com/js/exercise_js.asp?filename=exercise_js_comparisons1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Выберите правильный <strong>оператор сравнения</strong>, чтобы вывести <code class="w3-codespan">true</code>, когда <code class="w3-codespan">x</code> больше чем <code class="w3-codespan">y</code>.</p>
            <div class="exerciseprecontainer">
<pre>
x = 10;
y = 5;
alert(x <input name="ex1" maxlength="1" style="width: 14px;"> y);
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_booleans.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_if_else.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>