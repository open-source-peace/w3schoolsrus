<?php include '../include/head.php'; ?>

<title>JavaScript Числа. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript числа всегда являются 64-битными числами с плавающей запятой. Добавление (сложение) чисел и строк. Числовые строки. NaN - Not a Number (Не число). Infinity / Бесконечность. Шестнадцатеричные. Числа могут быть объектами. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Числа</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_string_templates.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_number_methods.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">В JavaScript есть только один тип <strong>числа</strong>. Числа можно писать с десятичными знаками или без них.</p>
    <hr>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 3.14;&nbsp;&nbsp;&nbsp; // Число с десятичными знаками<br>
            let y = 3;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Число без десятичных знаков
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_numbers1.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <p>Сверхбольшие или сверхмалые числа могут быть записаны в экспоненциальной нотации:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 123e5;&nbsp;&nbsp;&nbsp; // 12300000<br>
            let y = 123e-5;&nbsp;&nbsp; // 0.00123
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_numbers2.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Числа JavaScript всегда являются 64-битными числами с плавающей запятой </h2>
    <p>В отличие от многих других языков программирования, JavaScript не определяет различные типы чисел, такие как целые, короткие, длинные, числа с плавающей запятой и т.д.</p>
    <p>В соответствии с международным стандартом IEEE 754 числа JavaScript всегда хранятся как числа с плавающей запятой двойной точности.</p>
    <p>В этом формате числа хранятся в 64-битном формате, где число (дробь) хранится в битах от 0 до 51, показатель степени - в битах с 52 по 62, а знак - в битах 63:</p>
    <table class="ws-table-all">
        <tr>
            <th>Значение (также известное как дробь/Мантисса)</th>
            <th>Экспонента</th>
            <th>Знак</th>
        </tr>
        <tr>
            <td>52 бит (0 - 51)&nbsp;</td>
            <td>11 бит (52 - 62)</td>
            <td>1 бит (63)</td>
        </tr>
    </table>
    <hr>

    <h2>Точность</h2>
    <p>Целые числа (числа без точки или показателя степени) имеют точность до 15 цифр.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 999999999999999;&nbsp;&nbsp; // x будет 999999999999999<br>
            let y = 9999999999999999;&nbsp; // y будет 10000000000000000
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_numbers_inaccurate1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Максимальное количество десятичных знаков - 17, но арифметика с плавающей запятой не всегда точна на 100%:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 0.2 + 0.1;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // x будет 0.30000000000000004</div>
        <p><a class="w3-btn" href="../jstryit/tryjs_numbers_inaccurate2.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <p>Чтобы решить указанную выше проблему, помогает умножать и делить:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = (0.2 * 10 + 0.1 * 10) / 10;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // x будет 0.3</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_numbers_inaccurate3.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Добавление чисел и строк</h2>
    <div class="w3-panel w3-warning">
        <p>ВНИМАНИЕ!!</p>
        <p>JavaScript использует оператор + как для сложения, так и для конкатенации.</p>
        <p>Числа складываются. Строки объединяются.</p>
    </div>
    <p>Если сложить два числа, получится число:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 10;<br>
            let y = 20;<br>
            let z = x + y;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // z будет 30 (число)
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_numbers_add.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Если вы сложите две строки, результатом будет конкатенация (объединение) строк.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = &quot;10&quot;;<br>
            let y = &quot;20&quot;;<br>
            let z = x + y;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // z будет 1020 (строка)
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_numbers_add_strings1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Если вы сложите число и строку, результатом будет конкатенация строк:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 10;<br>
            let y = &quot;20&quot;;<br>
            let z = x + y;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // z будет 1020 (строка)
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_numbers_add_strings2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Если вы сложите строку и число, результатом будет конкатенация строк:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = &quot;10&quot;;<br>
            let y = 20;<br>
            let z = x + y;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // z будет 1020 (строка)
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_numbers_add_strings5.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Распространённая ошибка - ожидать, что этот результат будет 30:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 10;<br>
            let y = 20;<br>
            let z = &quot;Результат: &quot; + x + y;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_numbers_add_strings3.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Распространённой ошибкой является ожидание того, что результат будет 102030:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 10;<br>
            let y = 20;<br>
            let z = "30";<br>
            let result = x + y + z;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_numbers_add_strings4.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p>JavaScript интерпретатор работает слева направо.</p>
        <p>Первые 10 + 20 складываются, потому что x и y - оба числа.</p>
        <p>Затем 30 + &quot;30&quot; - объединяются, потому что z является строкой (т.к. взято в кавычки).</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Числовые строки</h2>
    <p>JavaScript строки могут иметь числовое содержание:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            let x = 100;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // x является числом<br>
            <br>let y = &quot;100&quot;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // y является строкой</div>
    </div>

    <p>JavaScript попытается преобразовать строки в числа во всех числовых операциях:</p>
    <p>Это будет работать:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            let x = &quot;100&quot;;<br>
            let y = &quot;10&quot;;<br>
            let z = x / y;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  // z будет 10
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_numbers_string1.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <p>Это тоже сработает:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            let x = &quot;100&quot;;<br>
            let y = &quot;10&quot;;<br>
            let z = x * y;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  // z будет 1000</div>
        <p><a class="w3-btn" href="../jstryit/tryjs_numbers_string2.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <p>И это будет работать:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            let x = &quot;100&quot;;<br>
            let y = &quot;10&quot;;<br>
            let z = x - y;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  // z будет 90</div>
        <p><a class="w3-btn" href="../jstryit/tryjs_numbers_string3.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <p>Но это не сработает:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            let x = &quot;100&quot;;<br>
            let y = &quot;10&quot;;<br>
            let z = x + y;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  // z не будет 110 (будет 10010)</div>
        <p><a class="w3-btn" href="../jstryit/tryjs_numbers_string4.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <div class="w3-panel w3-note">
        <p>В последнем примере JavaScript использует оператор + для объединения (конкатенации) строк.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>NaN - Not a Number (Не число)</h2>
    <p><code class="w3-codespan">NaN</code> - это зарезервированное слово в JavaScript, указывающее, что число не является допустимым числом.</p>
    <p>Попытка выполнить арифметику с нечисловой строкой приведет к результату <code class="w3-codespan">NaN</code> (Not a Number / Не число):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 100 / &quot;Apple&quot;;&nbsp;
            // x будет NaN (Not a Number)<br>
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_numbers_divide_string.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <p>Однако, если строка содержит числовое значение, результатом будет число:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 100 / &quot;10&quot;;&nbsp;&nbsp;&nbsp;&nbsp;
            // x будет 10</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_numbers_divide_number.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Вы можете использовать глобальную JavaScript функцию <code class="w3-codespan">isNaN()</code> чтобы узнать, является ли значение числом:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 100 / &quot;Apple&quot;;<br>isNaN(x);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает true, потому что x является Not a Number
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_numbers_isnan_true.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Следите за <code class="w3-codespan">NaN</code>. Если вы используете <code class="w3-codespan">NaN</code> в математической операции, результат также будет <code class="w3-codespan">NaN</code>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = NaN;<br>
            let y = 5;<br>
            let z = x + y;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // z будет NaN
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_numbers_nan_math.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Или результатом может быть конкатенация (объединение):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = NaN;<br>
            let y = &quot;5&quot;;<br>
            let z = x + y;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // z будет NaN5</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_numbers_nan_concat.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p><code class="w3-codespan">NaN</code> является числом: <code class="w3-codespan">typeof NaN</code> возвращает <code class="w3-codespan">number</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            typeof NaN;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает &quot;number&quot;</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_numbers_nan_typeof.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Infinity / Бесконечность</h2>
    <p><code class="w3-codespan">Infinity</code> (или <code class="w3-codespan">-Infinity</code>) это значение, которое JavaScript вернёт, если вы вычислите число за пределами максимально возможного числа.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let myNumber = 2;<br>while (myNumber != Infinity) {&nbsp;&nbsp;&nbsp;// Выполнить до бесконечности<br>
            &nbsp; myNumber = myNumber * myNumber;<br>}
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_numbers_infinity.html" target="_blank">Попробуйте сами &raquo;</a></div>

    <p>Деление на 0 (ноль) также даёт <code class="w3-codespan">Infinity</code> (бесконечность):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x =&nbsp; 2 / 0;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // x будет Infinity<br>
            let y = -2 / 0;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// y будет -Infinity
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_numbers_infinity_zero.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p><code class="w3-codespan">Infinity</code> является числом: <code class="w3-codespan">typeof Infinity</code> возвращает <code class="w3-codespan">number</code>.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            typeof Infinity;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает &quot;number&quot;</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_numbers_infinity_typeof.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Hexadecimal / Шестнадцатеричные</h2>
    <p>JavaScript интерпретирует числовые константы как шестнадцатеричные, если им предшествует 0x.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 0xFF;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // x будет 255
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_numbers_hex.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Никогда не пишите числа с нулем в начале (например, 07).<br>Некоторые версии JavaScript интерпретируют числа как восьмеричные, если они записаны с нулем в начале.</p>
    </div>

    <p>По умолчанию в JavaScript числа отображаются в виде десятичных знаков с <b>основанием 10</b>.</p>
    <p>Но вы можете использовать метод <code class="w3-codespan">toString()</code> для вывода чисел от <b>основания 2</b> до <b>основания 36</b>.</p>
    <p>В шестнадцатеричном формате используется <b>основание 16</b>. В десятичной системе используется <b>основание 10</b>. Восьмеричное число - это <b>основание 8</b>. Двоичный формат - это <b>основание 2</b>.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let myNumber = 32;<br>myNumber.toString(10);&nbsp;&nbsp;// вернёт 32<br>myNumber.toString(32);&nbsp;&nbsp;// вернёт 10<br>
            myNumber.toString(16);&nbsp;&nbsp;// вернёт 20<br>
            myNumber.toString(8);&nbsp;&nbsp;&nbsp;// вернёт 40<br>
            myNumber.toString(2);&nbsp;&nbsp;&nbsp;// вернёт 100000<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_numbers_tostring.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Числа могут быть объектами</h2>
    <p>Обычно числа JavaScript - это примитивные значения, созданные из литералов:</p>
    <p><code class="w3-codespan">let x = 123;</code></p>
    <p>Но числа также можно определить как объекты с ключевым словом <code class="w3-codespan">new</code>:</p>
    <p><code class="w3-codespan">let y = new Number(123);</code></p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 123;<br>
            let y = new Number(123);<br><br>
            // typeof x вернёт число<br>
            // typeof y вернёт объект
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_number_object.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Не создавайте Number (числовые) объекты. Это снижает скорость выполнения.<br>Ключевое слово <code class="w3-codespan">new</code> усложняет код. Это может привести к неожиданным результатам:</p>
    </div>

    <p>При использовании оператора <code class="w3-codespan">==</code> равные числа равны:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 500;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
            let y = new Number(500);<br><br>
            // (x == y) является true, потому что x и y имеют равные значения
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_number_object1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>При использовании оператора <code class="w3-codespan">===</code> равные числа не равны, поскольку оператор <code class="w3-codespan">===</code> ожидает равенства как по типу, так и по значению.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 500;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
            let y = new Number(500);<br><br>
            // (x === y) является false, потому что x и y имеют разные типы
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_number_object2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Или даже хуже. Невозможно сравнивать объекты:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = new Number(500);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
            let y = new Number(500);<br><br>
            // (x == y) является false, потому что объекты нельзя сравнивать
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_number_object3.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Обратите внимание на разницу между <code class="w3-codespan">(x==y)</code> и <code class="w3-codespan">(x===y)</code>.<br>Сравнение двух объектов JavaScript всегда будет возвращать <code class="w3-codespan">false</code>.</p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_string_templates.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_number_methods.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>