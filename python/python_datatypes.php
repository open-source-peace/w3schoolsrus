<?php include '../include/head.php'; ?>

<title>Python Типы данных. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Python Типы данных. Текст, числа, последовательности, отображения, установки, логические, бинарные. Бесплатный учебник онлайн. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_python.php'; ?>
<?php include '../include/before_content_python.php'; ?>

<article>
    <h1>Python <span class="color_h1">Типы данных</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="python_variables.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="python_numbers.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Встроенные типы данных</h2>
    <p>В программировании тип данных является важной концепцией.</p>
    <p>Переменные могут хранить данные разных типов, а разные типы могут делать разные вещи.</p>
    <p><strong>Python</strong> имеет следующие <strong>типы данных</strong>, встроенные по умолчанию в эти категории:</p>
    <table class="w3-table">
        <tr>
            <td style="width:160px;">Тип Текст:</td>
            <td><code class="w3-codespan">str</code></td>
        </tr>
        <tr>
            <td>Типы Числовые:</td>
            <td><code class="w3-codespan">int</code>, <code class="w3-codespan">float</code>,
                <code class="w3-codespan">complex</code></td>
        </tr>
        <tr>
            <td>Типы Последовательности:</td>
            <td><code class="w3-codespan">list</code>, <code class="w3-codespan">tuple</code>,
                <code class="w3-codespan">range</code></td>
        </tr>
        <tr>
            <td>Тип Отображения:</td>
            <td><code class="w3-codespan">dict</code></td>
        </tr>
        <tr>
            <td>Типы Установки:</td>
            <td><code class="w3-codespan">set</code>, <code class="w3-codespan">frozenset</code></td>
        </tr>
        <tr>
            <td>Тип Логические (Boolean):</td>
            <td><code class="w3-codespan">bool</code></td>
        </tr>
        <tr>
            <td>Типы Бинарные:</td>
            <td><code class="w3-codespan">bytes</code>, <code class="w3-codespan">bytearray</code>,
                <code class="w3-codespan">memoryview</code></td>
        </tr>
    </table>
    <hr>

    <h2>Получение типа данных</h2>
    <p>Вы можете получить тип данных любого объекта, используя функцию <code class="w3-codespan">type()</code>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Вывести тип данных переменной x:</p>
        <div class="w3-code notranslate pythonHigh">
            x = 5<br>
            print(type(x))
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_type.html">Запустить пример &raquo;</a>
    </div>
    <hr>

    <h2>Установка типа данных</h2>
    <p>В Python тип данных устанавливается, когда вы присваиваете значение переменной:</p>

    <table class="w3-table-all notranslate dtref">
        <tr>
            <th style="min-width:350px">Пример</th>
            <th>Тип данных</th>
            <th style="width:90px">Попробовать</th>
        </tr>
        <tr>
            <td>x = &quot;Hello World&quot;</td>
            <td>str</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_str.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = 20</td>
            <td>int</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_int.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = 20.5</td>
            <td>float</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_float.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = 1j</td>
            <td>complex</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_complex.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = [&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;]</td>
            <td>list</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_list.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = (&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;)</td>
            <td>tuple</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_tuple.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = range(6)</td>
            <td>range</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_range.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = {&quot;name&quot; : &quot;John&quot;, &quot;age&quot; : 36}</td>
            <td>dict</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_dict.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = {&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;}</td>
            <td>set</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_set.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = frozenset({&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;})</td>
            <td>frozenset</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_frozenset.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = True</td>
            <td>bool</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_bool.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = b&quot;Hello&quot;</td>
            <td>bytes</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_bytes.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = bytearray(5)</td>
            <td>bytearray</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_bytearray.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = memoryview(bytes(5))</td>
            <td>memoryview</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_memoryview.html">Попробовать &raquo;</a></td>
        </tr>
    </table>
    <hr>

    <h2>Установка определенного типа данных</h2>
    <p>Если вы хотите указать тип данных, вы можете использовать следующие конструкции функций:</p>

    <table class="w3-table-all notranslate dtref">
        <tr>
            <th style="min-width:350px">Пример</th>
            <th>Типы данных</th>
            <th style="width:90px">Попробовать</th>
        </tr>
        <tr>
            <td>x = str(&quot;Hello World&quot;)</td>
            <td>str</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_str2.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = int(20)</td>
            <td>int</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_int2.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = float(20.5)</td>
            <td>float</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_float2.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = complex(1j)</td>
            <td>complex</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_complex2.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = list((&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;))</td>
            <td>list</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_list2.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = tuple((&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;))</td>
            <td>tuple</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_tuple2.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = range(6)</td>
            <td>range</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_range2.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = dict(name=&quot;John&quot;, age=36)</td>
            <td>dict</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_dict2.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = set((&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;))</td>
            <td>set</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_set2.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = frozenset((&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;))</td>
            <td>frozenset</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_frozenset2.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = bool(5)</td>
            <td>bool</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_bool2.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = bytes(5)</td>
            <td>bytes</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_bytes2.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = bytearray(5)</td>
            <td>bytearray</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_bytearray2.html">Попробовать &raquo;</a></td>
        </tr>
        <tr>
            <td>x = memoryview(bytes(5))</td>
            <td>memoryview</td>
            <td><a target="_blank" class="w3-btn btnsmall btnsmall" href="../pythontryit/demo_type_memoryview2.html">Попробовать &raquo;</a></td>
        </tr>
    </table>

    <a id="exercises"></a>
    <hr>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/python/exercise.asp?filename=exercise_datatypes1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>В следующем примере кода будет выведен тип данных x, какой это будет тип данных?</p>
            <div class="exerciseprecontainer">
<pre>
x = 5
print(type(x))
<input name="ex1" maxlength="3" style="width: 35px;">
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="python_variables.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="python_numbers.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>