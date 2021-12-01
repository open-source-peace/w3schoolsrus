<?php include '../include/head.php'; ?>
<title>PHP Числа. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Number - Числа. Числовые значения. Integer - целые, float - числа с плавающей точкой, infinity - бесконечность, NaN - не число, числовые строки. Приведение string и float к целым числам. Современный учебник по языку PHP. Как создать сайт с помощью PHP? <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Числа</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_string.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_math.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">В этой главе мы подробно рассмотрим <strong>целые числа (integer), числа с плавающей запятой (float) и числовые строки (number string)</strong>.</p>
    <hr>

    <h2>PHP Числа</h2>
    <p>В PHP следует обратить внимание на то, что он обеспечивает автоматическое преобразование типов данных.</p>
    <p>Таким образом, если вы назначите целочисленное значение переменной, тип этой переменной автоматически будет целым числом. Затем, если вы назначите строку для той же переменной, тип изменится на строку.</p>
    <p>Это автоматическое преобразование может иногда нарушать ваш код.</p>
    <hr>

    <h2>PHP Integer - Целые числа</h2>
    <p><strong>Целое число (integer)</strong> - это число без десятичной части.</p>
    <p>2, 256, -256, 10358, -179567 - целые числа. В то время как 7.56, 10.0, 150.67 являются числами с плавающей точкой. </p>
    <p>Таким образом, целочисленный тип данных - это недесятичное число в диапазоне от -2147483648 до 2147483647. Значение, большее (или меньшее) этого значения, будет сохранено как число с плавающей запятой, поскольку оно превышает предел целого числа.</p>
    <p>Еще одна важная вещь, которую нужно знать, это то, что даже если 4 * 2.5 равно 10, результат сохраняется как float, потому что один из операндов является float (2.5).</p>

    <div class="w3-note w3-panel"><b>Примечание.</b> Число 2147483647 = 2<sup>31</sup> - 1 - это простое число Мерсенна. Это наибольшее число, которое вмещает 32-битный знаковый целый тип данных обозначенный int32. Это число имеет запись в виде: двоичного: 1111111111111111111111111111111; восьмеричного: 17777777777; шестнадцатеричного: 7FFFFFFF. Целочисленный тип данных - это диапазон от -2147483648 до 2147483647.</div>

    <p>Вот несколько правил для целых чисел:</p>
    <ul>
        <li>Целое число должно содержать хотя бы одну цифру</li>
        <li>Целое число не должно иметь десятичной точки</li>
        <li>Целое число может быть положительным или отрицательным</li>
        <li>Целые числа можно указывать в трех форматах: десятичное (на основе 10), шестнадцатеричное (на основе 16 - с префиксом 0x) или восьмеричное (на основе 8 - с префиксом 0)</li>
    </ul>
    <p>PHP имеет следующие функции, чтобы проверить, является ли тип переменной целочисленным (integer):</p>
    <ul>
        <li>is_int()</li>
        <li>is_integer() - псевдоним is_int()</li>
        <li>is_long() - псевдоним is_int()</li>
    </ul>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Проверить, является ли тип переменной целочисленным:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php <br>$x = 5985;<br>var_dump(is_int($x));<br><br>$x = 59.85;<br>var_dump(is_int($x));<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_numbers_integer.html">Попробуйте сами &raquo;</a></div>
    <hr>

    <h2>PHP Float - Числа с плавающей точкой</h2>
    <p>Число с плавающей запятой - это число с десятичной точкой или число в экспоненциальной форме.</p>
    <p>2.0, 256.4, 10.358, 7.64E + 5, 5.56E-5 - все числа с плавающей точкой.</p>
    <p>Тип данных с плавающей запятой обычно может хранить значение до 1.7976931348623E + 308 (зависит от платформы) и может иметь максимальную точность 14 цифр.</p>
    <p>PHP имеет следующие функции для проверки, является ли тип переменной float:</p>
    <ul>
        <li>is_float()</li>
        <li>is_double() - псевдоним is_float()</li>
    </ul>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Проверьте, является ли тип переменной float:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php <br>$x = 10.365;<br>var_dump(is_float($x));<br>?&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_numbers_float.html">Попробуйте сами &raquo;</a></div>
    <hr>

    <h2>PHP Infinity - Бесконечность</h2>
    <p>Числовое значение, большее чем PHP_FLOAT_MAX считается бесконечным.</p>
    <p>PHP имеет следующие функции для проверки, является ли числовое значение конечным или бесконечным:</p>
    <ul>
        <li><a href="func_math_is_finite.php">is_finite()</a></li>
        <li><a href="func_math_is_infinite.php">is_infinite()</a></li>
    </ul>
    <p>Однако PHP функция var_dump() возвращает тип данных и значение:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Проверить, является ли числовое значение конечным или бесконечным:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php <br>$x = 1.9e411;<br>var_dump($x);<br>?&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_numbers_infinite.html">Попробуйте сами &raquo;</a></div>
    <hr>

    <h2>PHP NaN - Не число</h2>
    <p>NaN означает <strong>Not a Number</strong> - не число.</p>
    <p>NaN используется для невозможных математических операций.</p>
    <p>PHP имеет следующие функции для проверки, если значение не является числом:</p>
    <ul>
        <li><a href="func_math_is_nan.php">is_nan()</a></li>
    </ul>
    <p>Однако PHP функция var_dump() возвращает тип данных и значение:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Неверный расчет вернет значение NaN:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$x = acos(8);<br>var_dump($x);<br>?&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_numbers_nan.html">Попробуйте сами &raquo;</a></div>
    <hr>

    <h2>PHP Numerical Strings - Числовые строки</h2>
    <p>PHP функция is_numeric() может использоваться для определения, является ли переменная числовой. Функция возвращает true, если переменная является числом или числовой строкой, в противном случае false.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Проверить, является ли переменная числовой:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php <br>$x = 5985;<br>var_dump(is_numeric($x));<br><br>$x = &quot;5985&quot;;<br>
            var_dump(is_numeric($x));<br><br>$x = &quot;59.85&quot; + 100;<br>
            var_dump(is_numeric($x));<br><br>$x = &quot;Hello&quot;;<br>var_dump(is_numeric($x));<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_numbers_numeric.html">Попробуйте сами &raquo;</a></div>
    <div class="w3-note w3-panel">
        <p><strong>Примечание:</strong> Начиная из PHP 7.0: функция is_numeric() вернет FALSE для числовых строк в шестнадцатеричной форме (например, 0xf4c3b00c), так как они больше не рассматриваются как числовые строки.</p>
    </div>
    <hr>

    <h2>PHP Приведение string и float к целым числам (integer)</h2>
    <p>Иногда необходимо преобразовать числовое значение в другой тип данных.</p>
    <p>Функции (int), (integer) или intval() часто используются для преобразования значения в целое число.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Привести float и string в integer:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>// Привести float к int <br>$x = 23465.768;<br>$int_cast = (int)$x;<br>
            echo $int_cast;<br><br>echo &quot;&lt;br&gt;&quot;;<br><br>// Привести string к int<br>$x =
            &quot;23465.768&quot;;<br>$int_cast = (int)$x;<br>echo $int_cast;<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_numbers_cast.html">Попробуйте сами &raquo;</a></div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_string.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_math.php">Next &#10095;</a>
    </div>    
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>