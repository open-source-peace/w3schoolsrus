<?php include '../include/head.php'; ?>

<title>JavaScript Преобразование типов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Преобразование типов. Преобразование строк в числа. Числовые методы. Унарный оператор + . Преобразование чисел в строки, дат в числа, дат в строки. Преобразование логических значений в числа, в строки. Автоматическое преобразование типов, строк. Таблица преобразования типов. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Преобразование типов</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_typeof.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_bitwise.php">Next &#10095;</a>
    </div>
    <div class="w3-info">
        <ul>
            <li>Преобразование строк в числа</li>
            <li>Преобразование чисел в строки</li>
            <li>Преобразование дат в числа</li>
            <li>Преобразование чисел в даты</li>
            <li>Преобразование логических значений в числа</li>
            <li>Преобразование чисел в логические значения</li>
        </ul>
    </div>

    <h2>JavaScript Преобразование типов</h2>
    <p>Переменные JavaScript можно преобразовать в новую переменную и другой тип данных:</p>
    <ul>
        <li>С помощью функции JavaScript</li>
        <li><strong>Автоматически</strong> самим JavaScript</li>
    </ul>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Преобразование строк в числа</h2>
    <p>Глобальный метод <code class="w3-codespan">Number()</code> может преобразовывать строки в числа.</p>
    <p>Строки, содержащие числа (например &quot;3.14&quot;) преобразуются в числа (например 3.14).</p>
    <p>Пустые строки преобразуются в 0.</p>
    <p>Все остальное преобразуется в <code class="w3-codespan">NaN</code> (Not a Number - Не число).</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            Number(&quot;3.14&quot;)&nbsp;&nbsp;&nbsp; // возвращает 3.14<br>
            Number(&quot; &quot;)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает 0 <br>
            Number(&quot;&quot;)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  // возвращает 0<br>
            Number(&quot;99 88&quot;)&nbsp;&nbsp; // возвращает NaN
        </div>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Числовые методы</h2>
    <p>В главе <a href="js_number_methods.php">Числовые методы</a> вы найдёте другие методы, которые можно использовать для преобразования строк в числа:</p>
    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:25%">Метод</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>Number()</td>
            <td>Возвращает число, преобразованное из его аргумента</td>
        </tr>
        <tr>
        <tr>
            <td>parseFloat()</td>
            <td>Анализирует строку и возвращает число с плавающей запятой</td>
        </tr>
        <tr>
            <td>parseInt()</td>
            <td>Анализирует строку и возвращает целое число</td>
        </tr>
    </table>
    <hr>

    <h2>Унарный оператор +</h2>
    <p><strong>Унарный оператор +</strong> можно использовать для преобразования переменной в число:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let y = &quot;5&quot;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // y является строкой<br>
            let x = + y;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // x является числом
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_typeof3.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Если переменную невозможно преобразовать, она всё равно станет числом, но со значением <code class="w3-codespan">NaN</code> (Not a Number):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let y = &quot;John&quot;;&nbsp;&nbsp;
            // y является строкой<br>
            let x = + y;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// x является числом (NaN)</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_typeof4.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Преобразование чисел в строки</h2>
    <p>Глобальный метод <code class="w3-codespan">String()</code> может преобразовывать числа в строки.</p>
    <p>Его можно использовать с любым типом чисел, литералов, переменных или выражений:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            String(x)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// возвращает строку из числовой переменной x<br>
            String(123)&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; // возвращает строку из числового литерала 123<br>
            String(100 + 23)&nbsp; // возвращает строку из числа из выражения</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_number_string.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Числовой метод <code class="w3-codespan">toString()</code> делает то же самое.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            x.toString()<br>(123).toString()<br>(100 + 23).toString()</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_number_tostring.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Больше методов</h2>
    <p>В главе <a href="js_number_methods.php">Числовые методы</a> вы найдете другие методы, которые можно использовать для преобразования чисел в строки:</p>
    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:25%">Метод</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>toExponential()</td>
            <td>Возвращает строку с округленным числом, записанным с использованием экспоненциальной записи</td>
        </tr>
        <tr>
            <td>toFixed()</td>
            <td>Возвращает строку с округленным числом и записанным с указанным количеством десятичных знаков</td>
        </tr>
        <tr>
            <td>toPrecision()</td>
            <td>Возвращает строку с числом, записанным с указанной длиной</td>
        </tr>
    </table>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Преобразование дат в числа</h2>
    <p>Глобальный метод <code class="w3-codespan">Number()</code> можно использовать для преобразования дат в числа.</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            d = new Date();<br>Number(d)&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает 1404568027739
        </div>
    </div>

    <p>Метод даты <code class="w3-codespan">getTime()</code> делает то же самое.</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            d = new Date();<br>d.getTime()&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; // возвращает 1404568027739
        </div>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Преобразование дат в строки</h2>

    <p>Глобальный метод <code class="w3-codespan">String()</code> может преобразовывать даты в строки.</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            String(Date())&nbsp; // возвращает &quot;Thu Jul 17 2014 15:38:19 GMT+0200 (W. Europe Daylight Time)&quot;</div>
    </div>

    <p>Метод даты <code class="w3-codespan">toString()</code> делает то же самое.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Date().toString()&nbsp; // возвращает &quot;Thu Jul 17 2014 15:38:19 GMT+0200 (W. Europe Daylight Time)&quot;</div>
    </div>

    <p>В главе <a href="js_date_methods.php">Методы даты</a> вы найдете больше методов, которые можно использовать для преобразования дат в строки:</p>
    <table class="ws-table-all notranslate">
        <tr>
            <th>Метод</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>getDate()</td>
            <td>Получите день в виде числа (1-31)</td>
        </tr>
        <tr>
            <td>getDay()</td>
            <td>Получите номер дня недели (0-6)</td>
        </tr>
        <tr>
            <td>getFullYear()</td>
            <td>Получите четырехзначный год (yyyy)</td>
        </tr>
        <tr>
            <td>getHours()</td>
            <td>Получите час (0-23)</td>
        </tr>
        <tr>
            <td>getMilliseconds()</td>
            <td>Получите миллисекунды (0-999)</td>
        </tr>
        <tr>
            <td>getMinutes()</td>
            <td>Получите минуты (0-59)</td>
        </tr>
        <tr>
            <td>getMonth()</td>
            <td>Получите месяц (0-11)</td>
        </tr>
        <tr>
            <td>getSeconds()</td>
            <td>Получите секунды (0-59)</td>
        </tr>
        <tr>
            <td>getTime()</td>
            <td>Получите время (миллисекунды с 1 января 1970 г.)</td>
        </tr>
    </table>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Преобразование логических значений в числа</h2>
    <p>Глобальный метод <code class="w3-codespan">Number()</code> также может преобразовывать логические значения в числа.</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            Number(false)&nbsp;&nbsp;&nbsp;&nbsp; // возвращает 0<br>
            Number(true)&nbsp; &nbsp;&nbsp;&nbsp; // возвращает 1
        </div>
    </div>
    <hr>

    <h2>Преобразование логических значений в строки</h2>
    <p>Глобальный метод <code class="w3-codespan">String()</code> может преобразовывать логические значения в строки.</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            String(false)&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;// возвращает &quot;false&quot;<br>
            String(true)&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; // возвращает &quot;true&quot;
        </div>
    </div>

    <p>Логический метод <code class="w3-codespan">toString()</code> делает то же самое.</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            false.toString()&nbsp;&nbsp;&nbsp;// возвращает &quot;false&quot;<br>
            true.toString()&nbsp; &nbsp; // возвращает &quot;true&quot;
        </div>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Автоматическое преобразование типов</h2>
    <p>Когда JavaScript пытается оперировать &quot;неправильным&quot; типом данных, он попытается преобразовать значение в &quot;правильный&quot; тип.</p>
    <p>Результат не всегда соответствует вашим ожиданиям:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            5 + null&nbsp;&nbsp;&nbsp; // возвращает 5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; потому что null преобразуется в 0<br>&quot;5&quot; + null&nbsp; // возвращает &quot;5null&quot;&nbsp;&nbsp; потому что null преобразуется в &quot;null&quot;<br>&quot;5&quot; + 2&nbsp;&nbsp;&nbsp;&nbsp; // возвращает &quot;52&quot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; потому что 2 преобразуется в &quot;2&quot;<br>
            &quot;5&quot; - 2&nbsp;&nbsp;&nbsp;&nbsp; // возвращает 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; потому что &quot;5&quot; преобразуется в 5<br>&quot;5&quot; * &quot;2&quot;&nbsp;&nbsp; // возвращает 10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; потому что &quot;5&quot; и &quot;2&quot; преобразуются в 5 и 2</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_type_convert_auto.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Автоматическое преобразование строк</h2>
    <p>JavaScript автоматически вызывает функцию переменной <code class="w3-codespan">toString()</code> когда вы пытаетесь &quot;вывести&quot; объект или переменную:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            document.getElementById(&quot;demo&quot;).innerHTML = myVar;<br><br>
            // if myVar = {name:&quot;Fjohn&quot;}&nbsp; // toString преобразуется в &quot;[object Object]&quot;<br>
            // if myVar = [1,2,3,4]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // toString преобразуется в &quot;1,2,3,4&quot;<br>
            // if myVar = new Date()&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // toString преобразуется в &quot;Fri Jul 18 2014 09:08:55 GMT+0200&quot;<br>
        </div>
    </div>

    <p>Числа и логические значения также преобразуются, но это не очень заметно:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            // if myVar = 123&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // toString преобразуется в &quot;123&quot;<br>
            // if myVar = true &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // toString преобразуется в &quot;true&quot;<br>
            // if myVar = false&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // toString преобразуется в &quot;false&quot;
        </div>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Таблица преобразования типов JavaScript</h2>
    <p>В этой таблице показан результат преобразования различных значений JavaScript в Number, String и Boolean:</p>

    <div class="w3-responsive" style="margin:-16px 0">
        <table class="ws-table-all notranslate">
            <tr>
                <th>Оригинал<br>Значение</th>
                <th>Преобразование<br>в Number</th>
                <th>Преобразование<br>в String</th>
                <th>Преобразование<br>в Boolean</th>
                <th style="width:10%">Попробуй это</th>
            </tr>
            <tr>
                <td>false</td>
                <td>0</td>
                <td>&quot;false&quot;</td>
                <td>false</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_type_convert_false.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
            <tr>
                <td>true</td>
                <td>1</td>
                <td>&quot;true&quot;</td>
                <td>true</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_type_convert_true.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
            <tr>
                <td>0</td>
                <td>0</td>
                <td>&quot;0&quot;</td>
                <td>false</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_type_convert_number_0.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>&quot;1&quot;</td>
                <td>true</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_type_convert_number_1.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
            <tr>
                <td>&quot;0&quot;</td>
                <td>0</td>
                <td>&quot;0&quot;</td>
                <td class="important">true</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_type_convert_string_0.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
            <tr>
                <td>&quot;000&quot;</td>
                <td>0</td>
                <td>&quot;000&quot;</td>
                <td class="important">true</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_type_convert_string_000.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
            <tr>
                <td>&quot;1&quot;</td>
                <td>1</td>
                <td>&quot;1&quot;</td>
                <td>true</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_type_convert_string_1.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
            <tr>
                <td>NaN</td>
                <td>NaN</td>
                <td>&quot;NaN&quot;</td>
                <td>false</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_type_convert_nan.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
            <tr>
                <td>Infinity</td>
                <td>Infinity</td>
                <td>&quot;Infinity&quot;</td>
                <td>true</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_type_convert_infinity.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
            <tr>
                <td>-Infinity</td>
                <td>-Infinity</td>
                <td>&quot;-Infinity&quot;</td>
                <td>true</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_type_convert_infinity_minus.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
            <tr>
                <td>&quot;&quot;</td>
                <td class="important">0</td>
                <td>&quot;&quot;</td>
                <td class="important">false</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_type_convert_string_empty.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
            <tr>
                <td>&quot;20&quot;</td>
                <td>20</td>
                <td>&quot;20&quot;</td>
                <td>true</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_type_convert_string_number.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
            <tr>
                <td>&quot;twenty&quot;</td>
                <td>NaN</td>
                <td>&quot;twenty&quot;</td>
                <td>true</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_type_convert_string_text.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
            <tr>
                <td>[ ]</td>
                <td class="important">0</td>
                <td>&quot;&quot;</td>
                <td>true</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_type_convert_array_empty.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
            <tr>
                <td>[20]</td>
                <td class="important">20</td>
                <td>&quot;20&quot;</td>
                <td>true</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_type_convert_array_one_number.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
            <tr>
                <td>[10,20]</td>
                <td>NaN</td>
                <td>&quot;10,20&quot;</td>
                <td>true</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_type_convert_array_two_numbers.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
            <tr>
                <td>[&quot;twenty&quot;]</td>
                <td>NaN</td>
                <td>&quot;twenty&quot;</td>
                <td>true</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_type_convert_array_one_string.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
            <tr>
                <td>[&quot;ten&quot;,&quot;twenty&quot;]</td>
                <td>NaN</td>
                <td>&quot;ten,twenty&quot;</td>
                <td>true</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_type_convert_array_two_strings.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
            <tr>
                <td>function(){}</td>
                <td>NaN</td>
                <td>&quot;function(){}&quot;</td>
                <td>true</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_type_convert_function.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
            <tr>
                <td>{ }</td>
                <td>NaN</td>
                <td>&quot;[object Object]&quot;</td>
                <td>true</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_type_convert_object.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
            <tr>
                <td>null</td>
                <td class="important">0</td>
                <td>&quot;null&quot;</td>
                <td>false</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_type_convert_null.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
            <tr>
                <td>undefined</td>
                <td>NaN</td>
                <td>&quot;undefined&quot;</td>
                <td>false</td>
                <td><a class="w3-btn btnsmall" href="../jstryit/tryjs_type_convert_undefined.html" target="_blank">Попробуй это &raquo;</a></td>
            </tr>
        </table>
    </div>

    <p>Значения в кавычках обозначают строковые значения.</p>
    <p><span class="important">Красные значения</span> указывают на значения, которых (некоторые) программисты могут не ожидать.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_typeof.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_bitwise.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>