<?php include '../include/head.php'; ?>

<title>JavaScript Числовые методы и свойства. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Числовые методы и свойства числа. Преобразование переменных в числа. Глобальные JavaScript методы. Not a Number (Не число). <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Числовые методы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_numbers.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_arrays.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Числовые методы</strong> помогают работать с числами.</p>
    <hr>

    <h2>Числовые методы и свойства</h2>
    <p>Примитивные значения (например, 3.14 или 2014) не могут иметь свойств и методов (потому что они не являются объектами).</p>
    <p>Но с помощью JavaScript методы и свойства также доступны для примитивных значений, поскольку JavaScript обрабатывает примитивные значения как объекты при выполнении методов и свойств.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Метод toString()</h2>
    <p>Метод <code class="w3-codespan">toString()</code> возвращает число в виде строки.</p>
    <p>Все числовые методы можно использовать с любым типом чисел (литералами, переменными или выражениями):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 123;<br>
            x.toString();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает 123 из переменной x <br>
            (123).toString();&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; // возвращает 123 из литерала 123<br>
            (100 + 23).toString();&nbsp;&nbsp; // возвращает 123 из выражения 100 + 23
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_number_tostring.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод toExponential()</h2>
    <p>Метод <code class="w3-codespan">toExponential()</code> возвращает строку с округленным числом и записанным с использованием экспоненциальной записи .</p>
    <p>Параметр определяет количество знаков после десятичной точки:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 9.656;<br>
            x.toExponential(2);&nbsp;&nbsp;&nbsp;&nbsp; // возвращает 9.66e+0<br>
            x.toExponential(4);&nbsp;&nbsp;&nbsp;&nbsp; // возвращает 9.6560e+0<br>
            x.toExponential(6);&nbsp;&nbsp;&nbsp;&nbsp; // возвращает 9.656000e+0
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_number_toexponential.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Параметр необязательный. Если вы его не укажете, JavaScript не будет округлять число.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Метод toFixed()</h2>
    <p>Метод <code class="w3-codespan">toFixed()</code> возвращает строку с числом, записанным с указанным количеством десятичных знаков:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 9.656;<br>
            x.toFixed(0);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает 10<br>
            x.toFixed(2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает 9.66<br>
            x.toFixed(4);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает 9.6560<br>
            x.toFixed(6);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает 9.656000
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_number_tofixed.html" target="_blank">Попробуйте сами &raquo;</a></div>

    <div class="w3-panel w3-note">
        <p>Метод <code class="w3-codespan">toFixed(2)</code> идеально подходит для работы с деньгами.</p>
    </div>
    <hr>

    <h2>Метод toPrecision()</h2>
    <p>Метод <code class="w3-codespan">toPrecision()</code> возвращает строку с числом, записанным с указанной длиной:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 9.656;<br>
            x.toPrecision();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 9.656<br>
            x.toPrecision(2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 9.7<br>
            x.toPrecision(4);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 9.656<br>
            x.toPrecision(6);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 9.65600
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_number_toprecision.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Метод valueOf()</h2>
    <p>Метод <code class="w3-codespan">valueOf()</code> возвращает число как число.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 123;<br>
            x.valueOf();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает 123 из переменной x<br>
            (123).valueOf();&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; // возвращает 123 из литерала 123<br>
            (100 + 23).valueOf();&nbsp;&nbsp; // возвращает 123 из выражения 100 + 23
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_number_valueof.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>В JavaScript число может быть примитивным значением (typeof = number) или объектом (typeof = object).</p>
    <p>Метод <code class="w3-codespan">valueOf()</code> используется внутри JavaScript для преобразования числовых объектов в примитивные значения.</p>
    <p>Нет причин использовать это в вашем коде.</p>

    <div class="w3-panel w3-note">
        <p>Все типы данных JavaScript имеют метод <code class="w3-codespan">valueOf()</code> и метод <code class="w3-codespan">toString()</code>.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Преобразование переменных в числа</h2>
    <p>Есть 3 метода JavaScript, которые можно использовать для преобразования переменных в числа:</p>
    <ul>
        <li>Метод <code class="w3-codespan">Number()</code></li>
        <li>Метод <code class="w3-codespan">parseInt()</code></li>
        <li>Метод <code class="w3-codespan">parseFloat()</code></li>
    </ul>
    <p>Это не <strong>числовые</strong> методы, а <strong>глобальные</strong> методы JavaScript.</p>
    <hr>

    <h2>Глобальные JavaScript методы</h2>
    <p>Глобальные методы JavaScript можно использовать для всех типов данных JavaScript.</p>
    <p>Это наиболее актуальные методы при работе с числами:</p>
    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:25%">Метод</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>Number()</td>
            <td>Возвращает число, преобразованное из его аргумента.</td>
        </tr>
        <tr>
            <td>parseFloat()</td>
            <td>Анализирует (парсит) свой аргумент и возвращает число с плавающей запятой</td>
        </tr>
        <tr>
            <td>parseInt()</td>
            <td>Анализирует (парсит) свой аргумент и возвращает целое число</td>
        </tr>
    </table>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Метод Number()</h2>
    <p>Метод <code class="w3-codespan">Number()</code> может использоваться для преобразования переменных JavaScript в числа:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Number(true);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; // возвращает 1<br>
            Number(false);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает 0<br>
            Number(&quot;10&quot;);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;// возвращает 10<br>
            Number(&quot;&nbsp; 10&quot;);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает 10<br>
            Number(&quot;10&nbsp; &quot;);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает 10<br>
            Number(&quot; 10&nbsp; &quot;);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает 10<br>
            Number(&quot;10.33&quot;);&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;// возвращает 10.33<br>
            Number(&quot;10,33&quot;);&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;// возвращает NaN<br>
            Number(&quot;10 33&quot;);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// возвращает NaN <br>
            Number(&quot;John&quot;);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;// возвращает NaN
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_global_number.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Если число не может быть преобразовано, возвращается <code class="w3-codespan">NaN</code> (Not a Number - Не число).</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Метод Number(), используемый для дат</h2>
    <p>Метод <code class="w3-codespan">Number()</code> также может преобразовать дату в число:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Number(new Date(&quot;2017-09-30&quot;)); &nbsp; &nbsp;// возвращает 1506729600000<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_global_number_date.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Метод <code class="w3-codespan">Number()</code> выше возвращает количество миллисекунд с момента 1.1.1970.
        </p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Метод parseInt()</h2>
    <p>Метод <code class="w3-codespan">parseInt()</code> анализирует строку и возвращает целое число. Разрешены пробелы. Возвращается только первое число:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            parseInt(&quot;-10&quot;);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает -10<br>
            parseInt(&quot;-10.33&quot;);&nbsp;&nbsp;&nbsp;&nbsp; // возвращает -10<br>
            parseInt(&quot;10&quot;);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает 10<br>
            parseInt(&quot;10.33&quot;);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает 10<br>
            parseInt(&quot;10 20 30&quot;);&nbsp;&nbsp; // возвращает 10<br>
            parseInt(&quot;10 years&quot;);&nbsp;&nbsp; // возвращает 10<br>
            parseInt(&quot;years 10&quot;);&nbsp;&nbsp; // возвращает NaN
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_global_parseint.html" target="_blank">Попробуйте сами &raquo;</a></div>
    <p>Если число не может быть преобразовано, возвращается <code class="w3-codespan">NaN</code> (Not a Number - Не число).</p>
    <hr>

    <h2>Метод parseFloat()</h2>
    <p><code class="w3-codespan">parseFloat()</code> анализирует строку и возвращает число. Разрешены пробелы. Возвращается только первое число:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            parseFloat(&quot;10&quot;);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает 10<br>
            parseFloat(&quot;10.33&quot;);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// возвращает 10.33<br>
            parseFloat(&quot;10 20 30&quot;);&nbsp;&nbsp;// возвращает 10<br>
            parseFloat(&quot;10 years&quot;);&nbsp;&nbsp;// возвращает 10<br>
            parseFloat(&quot;years 10&quot;);&nbsp;&nbsp;// возвращает NaN
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_global_parsefloat.html" target="_blank">Попробуйте сами &raquo;</a></div>
    <p>Если число не может быть преобразовано, возвращается <code class="w3-codespan">NaN</code> (Not a Number - Не число).</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Свойства числа</h2>
    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:25%">Свойство</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>MAX_VALUE</td>
            <td>Возвращает максимально возможное число в JavaScript</td>
        </tr>
        <tr>
            <td>MIN_VALUE</td>
            <td>Возвращает наименьшее возможное число в JavaScript</td>
        </tr>
        <tr>
            <td>POSITIVE_INFINITY</td>
            <td>Представляет бесконечность (возвращается при переполнении)</td>
        </tr>
        <tr>
            <td>NEGATIVE_INFINITY</td>
            <td>Представляет отрицательную бесконечность (возвращается при переполнении)</td>
        </tr>
        <tr>
            <td>NaN</td>
            <td>Представляет значение NaN (Not-a-Number - Не число)</td>
        </tr>
    </table>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>JavaScript MIN_VALUE и MAX_VALUE</h2>
    <p>Свойство <code class="w3-codespan">MAX_VALUE</code> возвращает максимально возможное число в JavaScript.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = Number.MAX_VALUE;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_number_max.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Свойство <code class="w3-codespan">MIN_VALUE</code> возвращает наименьшее возможное число в JavaScript.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = Number.MIN_VALUE;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_number_min.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>JavaScript POSITIVE_INFINITY</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = Number.POSITIVE_INFINITY;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_number_pos_infinity.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p><code class="w3-codespan">POSITIVE_INFINITY</code> возвращается при переполнении:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 1 / 0;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_number_pos_infinity2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>JavaScript NEGATIVE_INFINITY</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = Number.NEGATIVE_INFINITY;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_number_neg_infinity.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p><code class="w3-codespan">NEGATIVE_INFINITY</code> возвращается при переполнении:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = -1 / 0;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_number_neg_infinity2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>JavaScript NaN - Not a Number (Не число)</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = Number.NaN;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_number_nan.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p><code class="w3-codespan">NaN</code> - это зарезервированное слово JavaScript, указывающее, что число не является допустимым числом.</p>
    <p>Попытка выполнить арифметику с нечисловой строкой приведет к <code class="w3-codespan">NaN</code> (Not a Number):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 100 / &quot;Apple&quot;;&nbsp; // x будет NaN (Not a Number)<br>
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_numbers_divide_string.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Числовые свойства нельзя использовать с переменными</h2>
    <p>Числовые свойства принадлежат оболочке числового объекта JavaScript под названием <strong>Number</strong>.</p>
    <p>Доступ к этим свойствам можно получить только как <code class="w3-codespan">Number.MAX_VALUE</code>.</p>
    <p>Использование <em>myNumber</em>.MAX_VALUE, где <em>myNumber</em> переменная, выражение или значение, вернёт <code class="w3-codespan">undefined</code> (не определено):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 6;<br>
            x.MAX_VALUE&nbsp;&nbsp;&nbsp; // возвращает undefined
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_number_max_undefined.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>Полный справочник JavaScript Числа</h2>
    <p>Для получения полной справки перейдите на <a href="../jsref/jsref_obj_number.php">Полный справочник JavaScript Числа</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <p>Справочник содержит описания и примеры всех свойств и методов числа.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_numbers.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_arrays.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>