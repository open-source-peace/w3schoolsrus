<?php include '../include/head.php'; ?>
<title>PHP Ассоциативные массивы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Ассоциативные массивы. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Ассоциативные массивы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_arrays_indexed.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_arrays_multidimensional.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>PHP Ассоциативные массивы</h2>
    <p><strong>Ассоциативные массивы</strong> - это массивы, которые используют именованные ключи, которые вы им назначаете.</p>
    <p>Есть два способа создать ассоциативный массив:</p>
    <div class="w3-code w3-border notranslate">
            $age = array(&quot;Peter&quot;=&gt;&quot;35&quot;, &quot;Ben&quot;=&gt;&quot;37&quot;, &quot;Joe&quot;=&gt;&quot;43&quot;)
    </div>
    <p>или:</p>
    <div class="w3-code w3-border notranslate">
        $age['Peter'] = &quot;35&quot;;<br>
        $age['Ben'] = &quot;37&quot;;<br>
        $age['Joe'] = &quot;43&quot;;
    </div>
    <p>Именованные ключи затем можно использовать в скрипте:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            $age = array(&quot;Peter&quot;=&gt;&quot;35&quot;, &quot;Ben&quot;=&gt;&quot;37&quot;, &quot;Joe&quot;=&gt;&quot;43&quot;);<br>
            echo &quot;Peter is &quot; . $age['Peter'] . &quot; years old.&quot;;<br>
            ?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_array_assoc.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Цикл по ассоциативному массиву</h2>
    <p>Чтобы просмотреть и вывести все значения ассоциативного массива, вы можете использовать цикл <code class="w3-codespan">foreach</code>, например этот:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$age = array(&quot;Peter&quot;=&gt;&quot;35&quot;, &quot;Ben&quot;=&gt;&quot;37&quot;, &quot;Joe&quot;=&gt;&quot;43&quot;);<br>
            <br>foreach($age as $x =&gt; $x_value) {<br>&nbsp; echo &quot;Key=&quot; . $x . &quot;, Value=&quot; . $x_value;<br>&nbsp;&nbsp;echo &quot;&lt;br&gt;&quot;;<br>}<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_array_assoc_loop.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Полный справочник PHP массивов</h2>
    <p>Чтобы получить полную информацию обо всех функциях массива, перейдите в полный <a href="php_ref_array.php">Справочник PHP массивов</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <p>Справочник содержит краткое описание и примеры использования для каждой функции!</p>
    <hr>

    <h2>PHP Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/php/exercise.asp?filename=exercise_arrays3" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Создайте ассоциативный массив, содержащий возраст Peter, Ben и Joe.</p>
            <div class="exerciseprecontainer">
<pre>
$age = array("Peter"<input name="ex1" maxlength="2" style="width:21px;">"35", "Ben"<input name="ex2" maxlength="2" style="width:21px;">"37", "Joe"<input name="ex3" maxlength="2" style="width:21px;">"43");
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_arrays_indexed.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_arrays_multidimensional.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>