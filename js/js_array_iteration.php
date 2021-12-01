<?php include '../include/head.php'; ?>

<title>JavaScript Итерация массива. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Итерация массива. Методы. Синтаксис. Применение. Методы итерации массива работают с каждым элементом массива. <?php include '../include/description.php'; ?>'>
<link rel="stylesheet" href="../styles/browserref.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript Итерация массива</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_array_sort.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_array_const.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Методы итерации массива</strong> работают с каждым элементом массива.</p>
    <hr>

    <h2>Array.forEach()</h2>
    <p>Метод <code class="w3-codespan">forEach()</code> вызывает функцию (функцию обратного вызова) один раз для каждого элемента массива.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const numbers = [45, 4, 9, 16, 25];<br>
            let txt = &quot;&quot;;<br>
            numbers.forEach(myFunction);<br><br>
            function myFunction(value, index, array) {<br>
            &nbsp;
            txt += value + &quot;&lt;br&gt;&quot;;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_foreach.html">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/adinfeed.php'; ?>
    <p>Обратите внимание, что функция принимает 3 аргумента:</p>
    <ul>
        <li>Значение элемента</li>
        <li>Индекс элемента</li>
        <li>Сам массив</li>
    </ul>

    <p>В приведенном выше примере используется только параметр значения. Пример можно переписать так:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const numbers = [45, 4, 9, 16, 25];<br>
            let txt = &quot;&quot;;<br>
            numbers.forEach(myFunction);<br><br>
            function myFunction(value) {<br>
            &nbsp;
            txt += value + &quot;&lt;br&gt;&quot;; <br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_foreach_2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Array.map()</h2>
    <p>Метод <code class="w3-codespan">map()</code> создает новый массив, выполняя функцию для каждого элемента массива.</p>
    <p>Метод <code class="w3-codespan">map()</code> не выполняет функцию для элементов массива без значений.</p>
    <p>Метод <code class="w3-codespan">map()</code> не изменяет исходный массив.</p>
    <p>В этом примере каждое значение массива умножается на 2:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const numbers1 = [45, 4, 9, 16, 25];<br>
            const numbers2 = numbers1.map(myFunction);<br>
            <br>
            function myFunction(value, index, array) {<br>
            &nbsp; return value * 2;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_map.html">Попробуйте сами &raquo;</a>
    </div>
    <p>Обратите внимание, что функция принимает 3 аргумента:</p>
    <ul>
        <li>Значение элемента</li>
        <li>Индекс элемента</li>
        <li>Сам массив</li>
    </ul>

    <p>Когда функция обратного вызова использует только параметр значения, параметры индекса и массива можно не указывать:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const numbers1 = [45, 4, 9, 16, 25];<br>
            const numbers2 = numbers1.map(myFunction);<br>
            <br>
            function myFunction(value) {<br>
            &nbsp; return value * 2;<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_map_2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h2>Array.filter()</h2>
    <p>Метод <code class="w3-codespan">filter()</code> создает новый массив с элементами массива, который проходит проверку.</p>

    <p>В этом примере создается новый массив из элементов со значением больше 18:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const numbers = [45, 4, 9, 16, 25];<br>
            const over18 = numbers.filter(myFunction);<br><br>
            function myFunction(value, index, array) {<br>&nbsp;&nbsp;return value &gt; 18;<br>} </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_filter.html">Попробуйте сами &raquo;</a>
    </div>
    <p>Обратите внимание, что функция принимает 3 аргумента:</p>
    <ul>
        <li>Значение элемента</li>
        <li>Индекс элемента</li>
        <li>Сам массив</li>
    </ul>

    <p>В приведенном выше примере функция обратного вызова не использует параметры индекса и массива, поэтому их можно не указывать:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const numbers = [45, 4, 9, 16, 25];<br>
            const over18 =
            numbers.filter(myFunction);<br><br>function myFunction(value) {<br>&nbsp;&nbsp;return value &gt; 18;<br>} </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_filter_2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Array.reduce()</h2>
    <p>Метод <code class="w3-codespan">reduce()</code> запускает функцию для каждого элемента массива для создания (уменьшения до) одного значения.</p>
    <p>Метод <code class="w3-codespan">reduce()</code> работает в массиве слева направо. Смотрите также <code class="w3-codespan">reduceRight()</code>.</p>
    <div class="w3-panel w3-note">
        <p>Метод <code class="w3-codespan">reduce()</code> не уменьшает исходный массив.</p>
    </div>
    <p>Этот пример находит сумму всех чисел в массиве:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const numbers = [45, 4, 9, 16, 25];<br>
            let sum = numbers.reduce(myFunction);<br>
            <br>function myFunction(total, value, index, array) {<br>&nbsp;
            return total + value;<br>} </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_reduce.html">Попробуйте сами &raquo;</a>
    </div>
    <p>Обратите внимание, что функция принимает 4 аргумента:</p>
    <ul>
        <li>Итого (начальное значение / ранее возвращенное значение)</li>
        <li>Значение элемента</li>
        <li>Индекс элемента</li>
        <li>Сам массив</li>
    </ul>

    <p>В приведенном выше примере не используются параметры индекса и массива. Его можно переписать на:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const numbers = [45, 4, 9, 16, 25];<br>
            let sum = numbers.reduce(myFunction);<br>
            <br>function myFunction(total, value) {<br>&nbsp;
            return total + value;<br>} </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_reduce_2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Метод <code class="w3-codespan">reduce()</code> может принимать начальное значение:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const numbers = [45, 4, 9, 16, 25];<br>
            let sum = numbers.reduce(myFunction, 100);<br>
            <br>function myFunction(total, value) {<br>&nbsp;&nbsp;return total + value;<br>} </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_reduce_initial.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Array.reduceRight()</h2>
    <p>Метод <code class="w3-codespan">reduceRight()</code> запускает функцию для каждого элемента массива для создания (уменьшения до) одного значения.</p>
    <p>Метод <code class="w3-codespan">reduceRight()</code> работает в массиве справа налево. Смотрите также <code class="w3-codespan">reduce()</code>.</p>
    <div class="w3-panel w3-note">
        <p>Метод <code class="w3-codespan">reduceRight()</code> не уменьшает исходный массив.</p>
    </div>
    <p>Этот пример находит сумму всех чисел в массиве:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const numbers = [45, 4, 9, 16, 25];<br>
            let sum = numbers1.reduceRight(myFunction);<br>
            <br>function myFunction(total, value, index, array) {<br>&nbsp;
            return total + value;<br>} </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_reduce_right.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Обратите внимание, что функция принимает 4 аргумента:</p>
    <ul>
        <li>Итого (начальное значение / ранее возвращенное значение)</li>
        <li>Значение элемента</li>
        <li>Индекс элемента</li>
        <li>Сам массив</li>
    </ul>

    <p>В приведенном выше примере не используются параметры индекса и массива. Его можно переписать на:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const numbers = [45, 4, 9, 16, 25];<br>
            let sum = numbers1.reduceRight(myFunction);<br>
            <br>function myFunction(total, value) {<br>&nbsp;&nbsp;return total + value;<br>} </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_reduce_right_2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Array.every()</h2>
    <p>Метод <code class="w3-codespan">every()</code> проверяет, все ли значения массива проходят тест.</p>
    <p>В этом примере проверяется, все ли значения массива больше 18:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const numbers = [45, 4, 9, 16, 25];<br>
            let allOver18 =
            numbers.every(myFunction);<br><br>function myFunction(value, index, array) {<br>
            &nbsp; return
            value &gt; 18;<br>} </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_every.html">Попробуйте сами &raquo;</a>
    </div>
    <p>Обратите внимание, что функция принимает 3 аргумента:</p>
    <ul>
        <li>Значение элемента</li>
        <li>Индекс элемента</li>
        <li>Сам массив</li>
    </ul>

    <p>Когда функция обратного вызова использует только первый параметр (значение), остальные параметры можно не указывать:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const numbers = [45, 4, 9, 16, 25];<br>
            let allOver18 =
            numbers.every(myFunction);<br><br>function myFunction(value) {<br>&nbsp; return
            value &gt; 18;<br>} </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_every_2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Array.some()</h2>
    <p>Метод <code class="w3-codespan">some()</code> проверяет, проходят ли некоторые значения массива тест.</p>

    <p>В этом примере проверяется, не превышают ли некоторые значения массива 18:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const numbers = [45, 4, 9, 16, 25];<br>
            let someOver18 = numbers.some(myFunction);<br><br>function myFunction(value, index, array) {<br>
            &nbsp; return
            value &gt; 18;<br>} </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_some.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Обратите внимание, что функция принимает 3 аргумента:</p>
    <ul>
        <li>Значение элемента</li>
        <li>Индекс элемента</li>
        <li>Сам массив</li>
    </ul>
    <?php include '../include/addown_content.php'; ?>

    <h2>Array.indexOf()</h2>
    <p>Метод <code class="w3-codespan">indexOf()</code> ищет в массиве значение элемента и возвращает его позицию.</p>
    <div class="w3-note">
        <p><b>Примечание:</b> Первый элемент имеет позицию 0, второй элемент - позицию 1 и т.д.</p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Искать элемент в массиве "Apple":</p>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Apple&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            let position = fruits.indexOf("Apple") + 1;
        </div>
        <a target="_blank" href="../jstryit/tryjs_array_indexof.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate">
        <div><i>array</i>.indexOf(<em>item</em>,<em> start</em>)</div>
    </div>

    <table class="ws-table-all notranslate">
        <tr>
            <td><em>item</em></td>
            <td>Обязательно. Элемент для поиска.</td>
        </tr>
        <tr>
            <td><em>start</em></td>
            <td>По желанию. С чего начать поиск. Отрицательные значения начнутся в данной позиции, считая от конца, и поиск до конца.</td>
        </tr>
    </table>

    <p><code class="w3-codespan">Array.indexOf()</code> возвращает -1, если элемент не найден.</p>
    <p>Если элемент присутствует более одного раза, он возвращает позицию первого вхождения.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Array.lastIndexOf()</h2>
    <p><code class="w3-codespan">Array.lastIndexOf()</code> то же самое, что и <code class="w3-codespan">Array.indexOf()</code>, но возвращает позицию последнего вхождения указанного элемента.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Искать элемент в массиве "Apple":</p>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Apple&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            let position = fruits.lastIndexOf("Apple") + 1;
        </div>
        <a target="_blank" href="../jstryit/tryjs_array_lastindexof.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate"><div>
            <i>array</i>.lastIndexOf(<em>item</em>,<em> start</em>)</div></div>
    <table class="ws-table-all notranslate">
        <tr>
            <td><em>item</em></td>
            <td>Обязательно. Элемент для поиска</td>
        </tr>
        <tr>
            <td><em>start</em></td>
            <td>По желанию. С чего начать поиск. Отрицательные значения будут начинаться с данной позиции, считая от конца, и поиск до начала. </td>
        </tr>
    </table>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Array.includes()</h2>
    <p>ECMAScript 2016 представил массивы <code class="w3-codespan">Array.includes()</code> Это позволяет нам проверить, присутствует ли элемент в массиве (включая NaN, в отличие от indexOf).</p>
    <div class="w3-example">

        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = ["Banana", "Orange", "Apple", "Mango"];<br><br>
            fruits.includes("Mango"); // является true
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_includes.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate">
        <i>array</i>.includes(<em>search-item</em>)
    </div>
    <div class="w3-note">
        <p>Array.includes() позволяет проверять значения NaN. В отличие от Array.indexOf().</p>
    </div>

    <p>Array.includes() не поддерживается в Internet Explorer и Edge 12/13.</p>
    <p>Первые версии браузеров с полной поддержкой:</p>

    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tbody><tr style="height:50px">
                <th style="width:16%;" class="bsChrome" title="Chrome"></th>
                <th style="width:16%;" class="bsEdge" title="Edge"></th>
                <th style="width:16%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:16%;" class="bsSafari" title="Safari"></th>
                <th style="width:16%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td>Chrome 47</td>
                <td>Edge 14</td>
                <td>Firefox 43</td>
                <td>Safari 9</td>
                <td>Opera 34</td>
            </tr>
            <tr>
                <td>Des 2015</td>
                <td>Aug 2016</td>
                <td>Des 2015</td>
                <td>Oct 2015</td>
                <td>Des 2015</td>
            </tr>
            </tbody></table>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Array.find()</h2>
    <p>Метод <code class="w3-codespan">find()</code> возвращает значение первого элемента массива, который передает тестовую функцию.</p>

    <p>В этом примере находит (возвращает значение) первый элемент, размер которого больше 18:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const numbers = [4, 9, 16, 25, 29];<br>
            let first = numbers.find(myFunction);<br><br>function myFunction(value, index, array) {<br>&nbsp;&nbsp;return value &gt; 18;<br>} </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_find.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Обратите внимание, что функция принимает 3 аргумента:</p>
    <ul>
        <li>Значение элемента</li>
        <li>Индекс элемента</li>
        <li>Сам массив</li>
    </ul>

    <p><code class="w3-codespan">Array.find()</code> не поддерживается в старых версиях браузеров. Первые версии браузеров с полной поддержкой:</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tbody><tr>
                <th style="width:20%;" class="bsChrome" title="Chrome"></th>
                <th style="width:20%;" class="bsEdge" title="Edge"></th>
                <th style="width:20%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:20%;" class="bsSafari" title="Safari"></th>
                <th style="width:20%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td>Chrome 45</td>
                <td>Edge 12</td>
                <td>Firefox 25</td>
                <td>Safari 8</td>
                <td>Opera 32</td>
            </tr>
            <tr>
                <td>Sep 2015</td>
                <td>Aug 2015</td>
                <td>Oct 2013</td>
                <td>Oct 2014</td>
                <td>Sep 2015</td>
            </tr>
            </tbody></table>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Array.findIndex()</h2>
    <p>Метод <code class="w3-codespan">findIndex()</code> возвращает индекс первого элемента массива, который передает тестовую функцию.</p>

    <p>В этом примере выполняется поиск индекса первого элемента, который больше 18:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const numbers = [4, 9, 16, 25, 29];<br>
            let first =
            numbers.findIndex(myFunction);<br><br>function myFunction(value, index, array) {<br>
            &nbsp; return
            value &gt; 18;<br>} </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_find_index.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Обратите внимание, что функция принимает 3 аргумента:</p>
    <ul>
        <li>Значение элемента</li>
        <li>Индекс элемента</li>
        <li>Сам массив</li>
    </ul>

    <p><code class="w3-codespan">Array.findIndex()</code> не поддерживается в старых версиях браузеров. Первые версии браузеров с полной поддержкой:</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tbody><tr>
                <th style="width:20%;" class="bsChrome" title="Chrome"></th>
                <th style="width:20%;" class="bsEdge" title="Edge"></th>
                <th style="width:20%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:20%;" class="bsSafari" title="Safari"></th>
                <th style="width:20%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td>Chrome 45</td>
                <td>Edge 12</td>
                <td>Firefox 25</td>
                <td>Safari 8</td>
                <td>Opera 32</td>
            </tr>
            <tr>
                <td>Sep 2015</td>
                <td>Aug 2015</td>
                <td>Oct 2013</td>
                <td>Oct 2014</td>
                <td>Sep 2015</td>
            </tr>
            </tbody>
        </table>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Array.from()</h2>
    <p>Метод <code class="w3-codespan">Array.from()</code> возвращает объект Array из любого объекта со свойством length или любого итеративного объекта.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Создать массив из строки:</p>
        <div class="w3-code notranslate jsHigh">
            Array.from(&quot;ABCDEFG&quot;)&nbsp;&nbsp;&nbsp;// Returns [A,B,C,D,E,F,G]<br>
        </div>
        <a target="_blank" href="../jstryit/tryjs_array_from.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Array.Keys()</h2>
    <p>Метод <code class="w3-codespan">Array.keys()</code> возвращает объект Array Iterator с ключами массива.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Создайте объект Array Iterator, содержащий ключи массива:</p>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            const keys = fruits.keys();<br><br>
            for (let of keys) {<br>
            &nbsp; text += x + &quot;&lt;br&gt;&quot;;<br>}
        </div>
        <a target="_blank" href="../jstryit/tryjs_array_keys.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>Полный справочник массивов</h2>
    <p>Для получения полной справки перейдите в <a href="../jsref/jsref_obj_array.php">Полный справочник JavaScript массив</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <p>Справочник содержит описания и примеры всех свойств и методов массива.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_array_sort.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_array_const.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>