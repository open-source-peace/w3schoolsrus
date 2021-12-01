<?php include '../include/head.php'; ?>
<title>PHP Оператор Switch. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Оператор Switch. Используется для выполнения различных действий в зависимости от условий. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP оператор <span class="color_h1">switch</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_if_else.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_looping.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Оператор <code class="w3-codespan">switch</code></strong> используется для выполнения различных действий в зависимости от условий.</p>
    <hr>

    <h2>PHP оператор switch</h2>
    <p>Используйте оператор <code class="w3-codespan">switch</code>, чтобы <strong>выбрать один из множества блоков кода для выполнения</strong>.</p>
    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate">
        <div>
            switch (<i>n</i>)
            {<br>
            &nbsp;&nbsp;&nbsp; case <i>label1:</i><br>
            &nbsp;&nbsp;<i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; код будет выполнен, если n=label1;</i><br>
            &nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; break;<br>
            &nbsp;
            &nbsp;
            case <i>label2:</i><br>
            &nbsp;&nbsp;<i>&nbsp;&nbsp;&nbsp; &nbsp; код будет выполнен, если n=label2;</i><br>
            &nbsp;&nbsp;&nbsp;
            &nbsp;
            &nbsp;&nbsp;break;<br>
            &nbsp;
            &nbsp;
            case <i>label3:</i><br>
            &nbsp;&nbsp;<i>&nbsp;&nbsp;&nbsp; &nbsp; код будет выполнен, если n=label3;</i><br>
            &nbsp;&nbsp;&nbsp;
            &nbsp;
            &nbsp;&nbsp;break;<br>&nbsp; &nbsp; ...<br>
            &nbsp;&nbsp;&nbsp; по умолчанию:<br>
            &nbsp;&nbsp;<i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; код будет выполнен, если n отличается от всех label;</i><br>
            }
        </div>
    </div>

    <p>Вот как это работает: во-первых, у нас есть одно выражение <i>n</i> (чаще всего переменная), которое вычисляется один раз. Затем значение выражения сравнивается со значениями для каждого случая в структуре. Если есть совпадение, выполняется блок кода, связанный с этим случаем. Используйте <code class="w3-codespan">break</code>, чтобы предотвратить автоматический запуск кода в следующем случае. Инструкция <code class="w3-codespan">default</code> используется, если совпадений не найдено.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            $favcolor = &quot;red&quot;;<br><br>
            switch ($favcolor)
            {<br>
            &nbsp;&nbsp;&nbsp; case &quot;red&quot;:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo &quot;Ваш любимый цвет красный!&quot;;<br>
            &nbsp;&nbsp;&nbsp;
            &nbsp;
            &nbsp; break;<br>
            &nbsp;
            &nbsp;
            case &quot;blue&quot;:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; echo &quot;Ваш любимый цвет синий!&quot;;<br>
            &nbsp;&nbsp;&nbsp;
            &nbsp;
            &nbsp; break;<br>
            &nbsp;
            &nbsp;
            case &quot;green&quot;:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; echo &quot;Ваш любимый цвет зеленый!&quot;;<br>
            &nbsp;&nbsp;&nbsp;
            &nbsp;
            &nbsp; break;<br>
            &nbsp;
            &nbsp;
            default:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; echo &quot;Ваш любимый цвет - ни красный, ни синий, ни зеленый!&quot;;<br>
            }<br>
            ?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_switch.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>PHP Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/php/exercise.asp?filename=exercise_switch1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Создайте оператор <code class="w3-codespan">switch</code>, который будет выводить &quot;Hello&quot;, если <code class="w3-codespan">$color</code> имеет значение "red", и "welcome" если <code class="w3-codespan">$color</code> имеет "green".</p>
            <div class="exerciseprecontainer">
<pre>
<input name="ex1" maxlength="6" style="width: 64px;"> ($color) {
  <input name="ex2" maxlength="4" style="width: 43px;"> "red":
    echo "Hello";
    break;
  <input name="ex3" maxlength="4" style="width: 43px;"> "green":
    echo "Welcome";
    break;
}
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_if_else.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_looping.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>