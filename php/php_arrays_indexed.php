<?php include '../include/head.php'; ?>
<title>PHP Проиндексированные массивы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Проиндексированные массивы. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Индексированные массивы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_arrays.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_arrays_associative.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>PHP Индексированные массивы</h2>
    <p>Есть два способа создать индексированные массивы:</p>
    <p>Индекс может быть назначен автоматически (индекс всегда начинается с 0), например:</p>
    <div class="w3-code w3-border notranslate"><div>
            $cars = array(&quot;Volvo&quot;, &quot;BMW&quot;, &quot;Toyota&quot;);</div></div>

    <p>или индекс можно присвоить вручную:</p>
    <div class="w3-code w3-border notranslate"><div>
            $cars[0] = &quot;Volvo&quot;;<br>
            $cars[1] = &quot;BMW&quot;;<br>
            $cars[2] = &quot;Toyota&quot;;
        </div></div>
    <p>В следующем примере создается индексированный массив с именем $cars, ему присваиваются три элемента, а затем выводится текст, содержащий значения массива:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            $cars = array(&quot;Volvo&quot;, &quot;BMW&quot;, &quot;Toyota&quot;);<br>echo &quot;I like &quot; . $cars[0] . &quot;, &quot; . $cars[1] . &quot; and &quot; . $cars[2] . &quot;.&quot;;<br>
            ?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_array_num.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Цикл по индексированному массиву</h2>
    <p>Чтобы просмотреть и вывести все значения индексированного массива, вы можете использовать цикл <code class="w3-codepan">for</code>, например этот:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            $cars = array(&quot;Volvo&quot;, &quot;BMW&quot;, &quot;Toyota&quot;);<br>
            $arrlength = count($cars);<br><br>for($x = 0; $x &lt; $arrlength; $x++) {<br>&nbsp; echo $cars[$x];<br>&nbsp;&nbsp;echo &quot;&lt;br&gt;&quot;;<br>}<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_array_num_loop.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Полный справочник PHP массивов</h2>
    <p>Чтобы получить полную информацию обо всех функциях массива, перейдите в полный <a href="php_ref_array.php">Справочник PHP массивов</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <p>Справочник содержит краткое описание и примеры использования для каждой функции!</p>
    <hr>

    <h2>PHP Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/php/exercise.asp?filename=exercise_arrays2" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Выведите второй элемент в массиве $fruit.</p>
            <div class="exerciseprecontainer">
<pre>
$fruits = array("Apple", "Banana", "Orange");
echo <input name="ex1" maxlength="10" style="width:105px;">;
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_arrays.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_arrays_associative.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>