<?php include '../include/head.php'; ?>
<title>PHP Массивы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Массивы. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Массивы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_functions.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_arrays_indexed.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Массив</strong> хранит несколько значений в одной переменной:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            $cars = array(&quot;Volvo&quot;, &quot;BMW&quot;, &quot;Toyota&quot;);<br>
            echo &quot;I like &quot; . $cars[0] . &quot;, &quot; . $cars[1] . &quot; and &quot; . $cars[2] . &quot;.&quot;;<br>
            ?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_array_num.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Что такое массив?</h2>
    <p><strong>Массив</strong> - это специальная переменная, которая может одновременно содержать несколько значений.</p>
    <p>Если у вас есть список элементов (например, список названий автомобилей), хранение автомобилей в отдельных переменных может выглядеть следующим образом:</p>

    <div class="w3-code w3-border notranslate"><div>
            $cars1 = &quot;Volvo&quot;;<br>
            $cars2 = &quot;BMW&quot;;<br>
            $cars3 = &quot;Toyota&quot;;
        </div></div>

    <p>Однако что, если вы хотите просмотреть машины и выбрать конкретную? А если бы у вас было не 3 машины, а 300?</p>
    <p>Решение - создать массив!</p>
    <p>Массив может содержать множество значений под одним именем, и вы можете получить доступ к значениям, указав номер индекса.</p>
    <hr>

    <h2>Создать массив в PHP</h2>
    <p>В PHP функция <code class="w3-codespan">array()</code> используется для создания массива:</p>
    <div class="w3-code w3-border notranslate"><div>
            array();</div></div>

    <p>В PHP есть три типа массивов:</p>
    <ul>
        <li><b>Индексированные массивы</b> - Массивы с числовым индексом</li>
        <li><b>Ассоциативные массивы</b> - Массивы с именованными ключами</li>
        <li><b>Многомерные массивы</b> - Массивы, содержащие один или несколько массивов</li>
    </ul>
    <hr>
    
    <h2>Получить длину массива - функция count()</h2>
    <p>Функция <code class="w3-codespan">count()</code> используется для возврата длины (количества элементов) массива:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            $cars = array(&quot;Volvo&quot;, &quot;BMW&quot;, &quot;Toyota&quot;);<br>echo count($cars);<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_array_length.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Полный справочник по массивам PHP</h2>
    <p>Чтобы получить полную информацию обо всех функциях массива, перейдите в полный <a href="php_ref_array.php">PHP Справочник массивов</a> на нашем сайте <?php include '../include/w3schools.php' ?>.</p>
    <p>Справочник содержит краткое описание и примеры использования для каждой функции!</p>
    <hr>

    <h2>PHP Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/php/exercise.asp?filename=exercise_arrays1" method="post" target="_blank" rel="nofollow">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Используйте правильную функцию для вывода количества элементов в массиве.</p>
            <div class="exerciseprecontainer">
<pre>
$fruits = array("Apple", "Banana", "Orange");
echo <input name="ex1" maxlength="14" style="width: 149px;">;
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_functions.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_arrays_indexed.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>