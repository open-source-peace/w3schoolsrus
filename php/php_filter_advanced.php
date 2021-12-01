<?php include '../include/head.php'; ?>
<title>PHP Расширенные фильтры. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Расширенные фильтры. Проверка целого числа в диапазоне. Проверить IPv6 адрес, URL - должен содержать QueryString. Удалить символы со значением ASCII &gt; 127. Полный справочник фильтров. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Расширенные фильтры</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_filter.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_callback_functions.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Проверка целого числа в диапазоне</h2>
    <p>В следующем примере функция <code class="w3-codespan">filter_var()</code> используется для проверки, имеет ли переменная тип INT и диапазон от 1 до 200:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$int = 122;<br>$min = 1;<br>$max = 200;<br><br>if (filter_var($int, FILTER_VALIDATE_INT, array(&quot;options&quot; =&gt; array(&quot;min_range&quot;=&gt;$min, &quot;max_range&quot;=&gt;$max))) === false) {<br>&nbsp;&nbsp;&nbsp; echo(&quot;Значение переменной находится вне допустимого диапазона&quot;);<br>} else {<br>&nbsp;&nbsp;&nbsp; echo(&quot;Значение переменной находится в допустимом диапазоне&quot;);<br>}<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_filter_adv1.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Проверить IPv6 адрес</h2>
    <p>В следующем примере используется функция <code class="w3-codespan">filter_var()</code> чтобы проверить, является ли переменная $ip действительным IPv6 адресом:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$ip = &quot;2001:0db8:85a3:08d3:1319:8a2e:0370:7334&quot;;<br><br>if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {<br>&nbsp;&nbsp;&nbsp; echo(&quot;$ip является действительным IPv6 адресом&quot;);<br>} else {<br>&nbsp;&nbsp;&nbsp; echo(&quot;$ip является недействительным IPv6 адресом&quot;);<br>}<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_filter_adv2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Проверить URL - должен содержать QueryString</h2>
    <p>В следующем примере функция <code class="w3-codespan">filter_var()</code> используется для проверки, является ли переменная $url URL-адресом со строкой запроса:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$url = "https://www.w3schools.com";<br><br>if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {<br>&nbsp;&nbsp;&nbsp; echo("$url является действительным URL со строкой запроса");<br>} else {<br>&nbsp;&nbsp;&nbsp; echo("$url является недействительным URL со строкой запроса");<br>}<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_filter_adv3.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Удалить символы со значением ASCII &gt; 127</h2>
    <p>В следующем примере функция <code class="w3-codespan">filter_var()</code> используется для очистки строки. Она удалит все HTML теги и все символы со значением &gt; 127 из строки:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$str = "&lt;h1&gt;Hello WorldÆØÅ!&lt;/h1&gt;";<br><br>$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);<br>echo $newstr;<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_filter_adv4.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Полный справочник PHP Фильтров</h2>
    <p>Для более полного ознакомления со всеми функциями PHP фильтров, перейдите в <a href="php_ref_filter.php">Справочник PHP фильтров</a> на нашем сайте <?php include '../include/w3schools.php'; ?>. Проверьте каждый фильтр, чтобы увидеть, какие параметры и флажки доступны.</p>
    <p>Справочник содержит краткое описание и примеры использования для каждой функции!</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_filter.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_callback_functions.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>