<?php include '../include/head.php'; ?>
<title>PHP Сортировка массивов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Сортировка массивов. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Сортировка массивов</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_arrays_multidimensional.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_superglobals.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Элементы в массиве могут быть отсортированы в алфавитном или числовом порядке, по убыванию или возрастанию.</p>
    <hr>

    <h2>PHP - Функции сортировки для массивов</h2>
    <p>В этой главе мы рассмотрим следующие функции сортировки массива PHP:</p>
    <ul>
        <li><code class="w3-codespan">sort()</code> - сортировать массивы в порядке возрастания</li>
        <li><code class="w3-codespan">rsort()</code> - сортировать массивы в порядке убывания</li>
        <li><code class="w3-codespan">asort()</code> - сортировать ассоциативные массивы в порядке возрастания по значению</li>
        <li><code class="w3-codespan">ksort()</code> - сортировать ассоциативные массивы в порядке возрастания по ключу</li>
        <li><code class="w3-codespan">arsort()</code> - сортировать ассоциативные массивы в порядке убывания по значению</li>
        <li><code class="w3-codespan">krsort()</code> - сортировать ассоциативные массивы в порядке убывания по ключу</li>
    </ul>
    <hr>

    <h2>Сортировать массив в порядке возрастания - sort()</h2>
    <p>В следующем примере элементы массива $cars сортируются в возрастающем алфавитном порядке:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            $cars = array(&quot;Volvo&quot;, &quot;BMW&quot;, &quot;Toyota&quot;);<br>sort($cars);<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_array_sort_alpha.html">Попробуйте сами &raquo;</a>
    </div>

    <p>В следующем примере элементы массива $numbers сортируются в возрастающем числовом порядке:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            $numbers = array(4, 6, 2, 22, 11);<br>sort($numbers);<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_array_sort_num.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Сортировать массив в порядке убывания - rsort()</h2>
    <p>В следующем примере элементы массива $cars сортируются в алфавитном порядке по убыванию:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            $cars = array(&quot;Volvo&quot;, &quot;BMW&quot;, &quot;Toyota&quot;);<br>rsort($cars);<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_array_rsort_alpha.html">Попробуйте сами &raquo;</a>
    </div>
    <p>В следующем примере элементы массива $numbers сортируются в порядке убывания числового значения:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            $numbers = array(4, 6, 2, 22, 11);<br>rsort($numbers);<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_array_rsort_num.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Сортировка массива (по возрастанию) по значению - asort()</h2>
    <p>В следующем примере ассоциативный массив сортируется в порядке возрастания в соответствии со значением:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            $age = array(&quot;Peter&quot;=&gt;&quot;35&quot;, &quot;Ben&quot;=&gt;&quot;37&quot;, &quot;Joe&quot;=&gt;&quot;43&quot;);<br>
            asort($age);<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_array_asort.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Сортировка массива (по возрастанию) по ключу - ksort()</h2>
    <p>В следующем примере ассоциативный массив сортируется в порядке возрастания в соответствии с ключом:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            $age = array(&quot;Peter&quot;=&gt;&quot;35&quot;, &quot;Ben&quot;=&gt;&quot;37&quot;, &quot;Joe&quot;=&gt;&quot;43&quot;);<br>
            ksort($age);<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_array_ksort.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Сортировка массива (по убыванию) по значению - arsort()</h2>
    <p>В следующем примере ассоциативный массив сортируется в порядке убывания в соответствии со значением:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            $age = array(&quot;Peter&quot;=&gt;&quot;35&quot;, &quot;Ben&quot;=&gt;&quot;37&quot;, &quot;Joe&quot;=&gt;&quot;43&quot;);<br>
            arsort($age);<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_array_arsort.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Сортировка массива (по убыванию) по ключу - krsort()</h2>
    <p>В следующем примере ассоциативный массив сортируется в порядке убывания в соответствии с ключом:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            $age = array(&quot;Peter&quot;=&gt;&quot;35&quot;, &quot;Ben&quot;=&gt;&quot;37&quot;, &quot;Joe&quot;=&gt;&quot;43&quot;);<br>
            krsort($age);<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_array_krsort.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Полный справочник PHP массивов</h2>
    <p>Чтобы получить полную информацию обо всех функциях массива, перейдите в полный <a href="php_ref_array.php">Справочник PHP массивов</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <p>Справочник содержит краткое описание и примеры использования для каждой функции!</p>
    <hr>

    <h2>PHP Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/php/exercise.asp?filename=exercise_arrays6" method="post" target="_blank">
    <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
    <div class="exercisewindow">
        <h2>Упражнение:</h2>
        <p>Используйте правильный метод массива для сортировки массива <code class="w3-codepan">$colors</code> по алфавиту.</p>
        <div class="exerciseprecontainer">
<pre>
$colors = array("red", "green", "blue", "yellow"); 
<input name="ex1" maxlength="13" style="width: 138px;">;
</pre>
    </div>
    <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_arrays_multidimensional.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_superglobals.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>