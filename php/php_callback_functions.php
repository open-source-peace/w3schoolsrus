<?php include '../include/head.php'; ?>
<title>PHP Расширенные фильтры. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Расширенные фильтры. Проверка целого числа в диапазоне. Проверить IPv6 адрес, URL - должен содержать QueryString. Удалить символы со значением ASCII &gt; 127. Полный справочник фильтров. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Функции обратного вызова (callback)</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_filter_advanced.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_json.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Функции обратного вызова (callback)</h2>
    <p><strong>Функция обратного вызова</strong> (часто называемая просто <strong>&quot;callback&quot;</strong> - &quot;обратным вызовом&quot;) - это функция, которая передается в качестве аргумента другой функции.</p>
    <p>Любая существующая функция может использоваться как функция обратного вызова. Чтобы использовать функцию в качестве функции обратного вызова, передайте строку, содержащую имя функции, в качестве аргумента другой функции:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Передайте обратный вызов функции PHP <code class="w3-codespan">array_map()</code>, чтобы вычислить длину каждой строки в массиве:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>function my_callback($item) {<br>&nbsp; return strlen($item);<br>}<br><br>
            $strings = [&quot;apple&quot;, &quot;orange&quot;,
            &quot;banana&quot;, &quot;coconut&quot;];<br>$lengths =
            array_map(&quot;my_callback&quot;, $strings);<br>print_r($lengths);<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_callback_functions.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Начиная с версии 7, PHP может передавать анонимные функции как функции обратного вызова:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Используйте анонимную функцию в качестве обратного вызова для PHP функции <code class="w3-codespan">array_map()</code>:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$strings = [&quot;apple&quot;, &quot;orange&quot;, &quot;banana&quot;, &quot;coconut&quot;];<br>$lengths =
            array_map( function($item) { return strlen($item); } , $strings);<br>
            print_r($lengths);<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_callback_functions2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Обратные вызовы в пользовательских функциях</h2>
    <p>Пользовательские функции и методы также могут принимать функции обратного вызова в качестве аргументов. Чтобы использовать функции обратного вызова внутри пользовательской функции или метода, вызовите их, добавив круглые скобки к переменной и передав аргументы, как с обычными функциями:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Запустите обратный вызов из пользовательской функции:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>function exclaim($str) {<br>&nbsp; return $str . &quot;! &quot;;<br>}<br>
            <br>function ask($str) {<br>&nbsp; return $str . &quot;? &quot;;<br>}<br><br>function
            printFormatted($str, $format) {<br>&nbsp; // Вызов функции обратного вызова $format<br>&nbsp; echo $format($str);<br>}<br><br>// Передайте &quot;exclaim&quot; и &quot;ask&quot; как callback-функции для printFormatted()<br>printFormatted(&quot;Hello world&quot;, &quot;exclaim&quot;);<br>
            printFormatted(&quot;Hello world&quot;, &quot;ask&quot;);<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_callback_functions3.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_filter_advanced.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_json.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>