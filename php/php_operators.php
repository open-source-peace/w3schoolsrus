<?php include '../include/head.php'; ?>
<title>PHP Операторы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Операторы. Арифметические, присваивания, сравнения, увеличения, уменьшения, логические, строковые, массива, условного присваивания. Как применяются операторы в PHP? Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Операторы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_constants.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_if_else.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>PHP Операторы</h2>
    <p><strong>Операторы</strong> используются для выполнения операций с переменными и значениями.</p>
    <p>PHP делит операторы на следующие группы:</p>
    <ul>
        <li>Арифметические операторы</li>
        <li>Операторы присваивания</li>
        <li>Операторы сравнения</li>
        <li>Операторы увеличения/уменьшения</li>
        <li>Логические операторы</li>
        <li>Строковые операторы</li>
        <li>Операторы массива</li>
        <li>Операторы условного присваивания</li>
    </ul>
    <hr>

    <h2>PHP Арифметические операторы</h2>
    <p>PHP арифметические операторы используются с числовыми значениями для выполнения обычных арифметических операций, таких как сложение, вычитание, умножение и т.д.</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:15%">Оператор</th>
            <th style="width:20%">Имя</th>
            <th style="width:20%">Пример</th>
            <th style="width:35%">Результат</th>
            <th style="width:10%">Показать это</th>
        </tr>
        <tr>
            <td>+</td>
            <td>Сложение</td>
            <td>$x + $y</td>
            <td>Сумма $x и $y</td>
            <td><a target="_blank" class="w3-btn btnsmall" href="../phptryit/tryphp_oper_addition.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>-</td>
            <td>Вычитание</td>
            <td>$x - $y</td>
            <td>Разница $x и $y</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_subtraction.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>*</td>
            <td>Умножение</td>
            <td>$x * $y</td>
            <td>Произведение $x и $y</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_multiplication.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>/</td>
            <td>Деление</td>
            <td>$x / $y</td>
            <td>Отношение $x и $y</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_division.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>%</td>
            <td>Модуль</td>
            <td>$x % $y</td>
            <td>Остаток $x делённый на $y</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_modulus.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>**</td>
            <td>Возведение</td>
            <td>$x ** $y</td>
            <td>Результат возведения $x до $y степени</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_exponentiation.html">Попробуй это &raquo;</a></td>
        </tr>
    </table>
    <hr>

    <h2>PHP Операторы присваивания</h2>
    <p>Операторы присваивания PHP используются с числовыми значениями для записи значения в переменную.</p>
    <p>Основной оператор присваивания в PHP это &quot;=&quot;. Это означает, что левый операнд устанавливается в значение выражения присваивания справа.</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:15%">Присваивание</th>
            <th style="width:20%">Такой же как...</th>
            <th style="width:55%">Описание</th>
            <th style="width:10%">Показать это</th>
        </tr>
        <tr>
            <td>x = y</td>
            <td>x = y</td>
            <td>Левый операнд устанавливается в значение выражения справа</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_set.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>x += y</td>
            <td>x = x + y</td>
            <td>Сложение</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_addition2.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>x -= y</td>
            <td>x = x - y</td>
            <td>Вычитание</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_subtraction2.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>x *= y</td>
            <td>x = x * y</td>
            <td>Умножение</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_multiplication.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>x /= y</td>
            <td>x = x / y</td>
            <td>Деление</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_division2.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>x %= y</td>
            <td>x = x % y</td>
            <td>Модуль</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_modulus2.html">Попробуй это &raquo;</a></td>
        </tr>
    </table>
    <hr>

    <h2>PHP Операторы сравнения</h2>
    <p>PHP операторы сравнения используются для сравнения двух значений (число или строка):</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:15%">Оператор</th>
            <th style="width:22%">Имя</th>
            <th style="width:15%">Пример</th>
            <th style="width:38%">Результат</th>
            <th style="width:10%">Показать это</th>
        </tr>
        <tr>
            <td>==</td>
            <td>Равно</td>
            <td>$x == $y</td>
            <td>Возвращает true, если $x равен $y</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_equal.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>===</td>
            <td>Идентичный</td>
            <td>$x === $y</td>
            <td>Возвращает true, если $x равно $y, и они одного типа</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_identical.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>!=</td>
            <td>Не равно</td>
            <td>$x != $y</td>
            <td>Возвращает true если $x не равно $y</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_not_equal.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>&lt;&gt;</td>
            <td>Не равно</td>
            <td>$x &lt;&gt; $y</td>
            <td>Возвращает true, если $x не равно $y</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_not_equal2.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>!==</td>
            <td>Не идентичный</td>
            <td>$x !== $y</td>
            <td>Возвращает true, если $x не равно $y, или они не одного типа</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_not_identical.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>&gt;</td>
            <td>Больше, чем</td>
            <td>$x &gt; $y</td>
            <td>Возвращает true, если $x больше, чем $y</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_greater_than.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>&lt;</td>
            <td>Меньше, чем</td>
            <td>$x &lt; $y</td>
            <td>Возвращает true, если $x меньше, чем $y</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_less_than.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>&gt;=</td>
            <td>Больше или равно</td>
            <td>$x &gt;= $y</td>
            <td>Возвращает true, если $x больше или равно $y</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_greater_than2.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>&lt;=</td>
            <td>Меньше или равно</td>
            <td>$x &lt;= $y</td>
            <td>Возвращает true, если $x меньше или равно $y</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_less_than2.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>&lt;=&gt;</td>
            <td>Spaceship (космический корабль)</td>
            <td>$x &lt;=&gt; $y</td>
            <td>Возвращает целое число меньше, равно или больше нуля, в зависимости от того, $x меньше, равно или больше, чем $y. Введено в PHP 7.</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_spaceship.html">Попробуй это &raquo;</a></td>
        </tr>
    </table>
    <hr>

    <h2>PHP Операторы Инкремент / Декремент</h2>
    <p>PHP операторы инкремента используются для увеличения значения переменной.</p>
    <p>PHP операторы декремента используются для уменьшения значения переменной.</p>
    <table class="w3-table-all notranslate" id="table1">
        <tr>
            <th style="width:15%">Оператор</th>
            <th style="width:20%">Имя</th>
            <th style="width:55%">Описание</th>
            <th style="width:10%">Показать это</th>
        </tr>
        <tr>
            <td>++$x</td>
            <td>Пре-инкремент</td>
            <td>Увеличивает $x на единицу, затем возвращает $x</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_pre_incr.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>$x++</td>
            <td>Пост-инкремент</td>
            <td>Возвращает $x, затем увеличивает $x на единицу</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_post_incr.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>--$x</td>
            <td>Пре-декремент</td>
            <td>Уменьшает $x на единицу, затем возвращает $x</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_pre_decr.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>$x--</td>
            <td>Пост-декремент</td>
            <td>Возвращает $x, затем уменьшает $x на единицу</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_post_decr.html">Попробуй это &raquo;</a></td>
        </tr>
    </table>
    <hr>

    <h2>PHP Логические операторы</h2>
    <p>PHP логические операторы используются для объединения условных операторов.</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:15%">Оператор</th>
            <th style="width:20%">Имя</th>
            <th style="width:20%">Пример</th>
            <th style="width:35%">Результат</th>
            <th style="width:10%">Показать это</th>
        </tr>
        <tr>
            <td>and</td>
            <td>И</td>
            <td>$x and $y</td>
            <td>True, если $x и $y верны</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_and.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>or</td>
            <td>Или</td>
            <td>$x or $y</td>
            <td>True, если $x или $y верны</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_or.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>xor</td>
            <td>X или</td>
            <td>$x xor $y</td>
            <td>True если $x или $y верны, но не оба</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_xor.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>&amp;&amp;</td>
            <td>И</td>
            <td>$x &amp;&amp; $y</td>
            <td>True если $x и $y верны</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_and2.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>||</td>
            <td>Или</td>
            <td>$x || $y</td>
            <td>True если $x или $y верны</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_or2.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>!</td>
            <td>Не</td>
            <td>!$x</td>
            <td>True если $x не верен</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_not.html">Попробуй это &raquo;</a></td>
        </tr>
    </table>
    <hr>

    <h2>PHP Строковые операторы</h2>
    <p>PHP имеет два оператора, которые специально предназначены для строк.</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:15%">Оператор</th>
            <th style="width:25%">Имя</th>
            <th style="width:25%">Пример</th>
            <th style="width:25%">Результат</th>
            <th style="width:10%">Показать это</th>
        </tr>
        <tr>
            <td>.</td>
            <td>Конкатенация</td>
            <td>$txt1 . $txt2</td>
            <td>Конкатенация $txt1 и $txt2</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_string1.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>.=</td>
            <td>Конкатенация присвоения</td>
            <td>$txt1 .= $txt2</td>
            <td>Добавляет $txt2 к $txt1</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_string2.html">Попробуй это &raquo;</a></td>
        </tr>
    </table>
    <hr>

    <h2>PHP Операторы Array (массива)</h2>
    <p>Операторы массива PHP используются для сравнения массивов.</p>
    <table class="w3-table-all notranslate" id="table2">
        <tr>
            <th style="width:15%">Оператор</th>
            <th style="width:18%">Имя</th>
            <th style="width:17%">Пример</th>
            <th style="width:40%">Результат</th>
            <th style="width:10%">Показать это</th>
        </tr>
        <tr>
            <td>+</td>
            <td>Объединение</td>
            <td>$x + $y</td>
            <td>Объединение $x и $y</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_arr_union.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>==</td>
            <td>Равенство</td>
            <td>$x == $y</td>
            <td>Возвращает true если $x и $y имеют одинаковые пары ключ/значение</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_arr_equality.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>===</td>
            <td>Идентичность</td>
            <td>$x === $y</td>
            <td>озвращает true, если $x и $y имеют одинаковые пары ключ/значение в одном и том же порядке и одинаковых типов</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_arr_identity.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>!=</td>
            <td>Неравенство</td>
            <td>$x != $y</td>
            <td>Возвращает true если $x не равен $y</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_arr_inequality.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>&lt;&gt;</td>
            <td>Неравенство</td>
            <td>$x &lt;&gt; $y</td>
            <td>Возвращает true если $x не равен $y</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_arr_inequality2.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>!==</td>
            <td>Неидентичность</td>
            <td>$x !== $y</td>
            <td>Возвращает true если $x не идентичный $y</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_arr_non_identity.html">Попробуй это &raquo;</a></td>
        </tr>
    </table>

    <hr>

    <h2>PHP Операторы условного присваивания</h2>
    <p>PHP операторы условного присваивания используются для установки значения в зависимости от условий:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:15%">Оператор</th>
            <th style="width:22%">Имя</th>
            <th style="width:15%">Пример</th>
            <th style="width:38%">Результат</th>
            <th style="width:10%">Показать это</th>
        </tr>
        <tr>
            <td>?:</td>
            <td>Тройной</td>
            <td>$x = <em>expr1</em> ? <em>expr2</em> : <em>expr3</em></td>
            <td>Возвращает значение $x.<br>Значение $x равно <em>expr2</em>, если <em>expr1</em> = TRUE.<br>Значение $x равно <em>expr3</em>, если <em>expr1</em> = FALSE</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_ternary.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>??</td>
            <td>Нулевое слияние</td>
            <td>$x = <em>expr1</em> ?? <em>expr2</em></td>
            <td>Возвращает значение $x.<br>Значение $x равно <em>expr1</em>, если <em>expr1</em> существует и не равно NULL.<br>Если <em>expr1</em> не существует или имеет значение NULL, значение $x равно <em>expr2</em>.<br>Введено в PHP 7</td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;" href="../phptryit/tryphp_oper_null_coalescing.html">Попробуй это &raquo;</a></td>
        </tr>
    </table>
    <hr>

    <h2>PHP Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/php/exercise.aspexercise_operators1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Умножьте <code class="w3-codespan">10</code> на <code class="w3-codespan">5</code> и выведите результат.</p>
            <div class="exerciseprecontainer">
<pre>
echo 10 <input name="ex1" maxlength="1" style="width: 12px;"> 5;
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_constants.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_if_else.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>