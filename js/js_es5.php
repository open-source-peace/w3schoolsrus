<?php include '../include/head.php'; ?>

<title>JavaScript Версии. ECMAScript 2009 или ES5. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Версии. ECMAScript 2009 или ES5. Особенности ES5. Директива use strict. Доступ к свойствам по строкам. Строки на нескольких строках. Зарезервированные слова как названия свойств. Браузерная поддержка. <?php include '../include/description.php'; ?>'>
    <link rel="stylesheet" href="../styles/browserref.css">
    <style>
        #main a[id] {position: relative;top: -50px;}
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript ES5</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_versions.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_es6.php">Next &#10095;</a>
    </div>

    <div class="w3-panel w3-info">
        <p><strong>ECMAScript 2009</strong>, также известный как ES5, был первой серьезной версией <strong>JavaScript</strong>.</p>
        <p>В этой главе описаны наиболее важные функции ES5.</p>
    </div>

    <h2>Особенности ES5</h2>
    <ul>
        <li><a href="#mark_use_strict">&quot;use strict&quot;</a></li>
        <li><a href="#mark_string_property_access">String[<i>number</i>] access</a></li>
        <li><a href="#mark_string_multiline">Multiline strings</li>
        <li><a href="#mark_string_trim">String.trim()</a></li>
        <li><a href="#mark_isarray">Array.isArray()</a></li>
        <li><a href="#mark_array_foreach">Array.forEach()</a></li>
        <li><a href="#mark_array_map">Array.map()</a></li>
        <li><a href="#mark_array_filter">Array.filter()</a></li>
        <li><a href="#mark_array_reduce">Array.reduce()</a></li>
        <li><a href="#mark_array_reduceright">Array.reduceRight()</a></li>
        <li><a href="#mark_array_every">Array.every()</a></li>
        <li><a href="#mark_array_some">Array.some()</a></li>
        <li><a href="#mark_array_indexof">Array.indexOf()</a></li>
        <li><a href="#mark_array_lastindexof">Array.lastIndexOf()</a></li>
        <li><a href="#mark_json_parse">JSON.parse()</a></li>
        <li><a href="#mark_json_stringify">JSON.stringify()</a></li>
        <li><a href="#mark_date_now">Date.now()</a></li>
        <li><a href="#mark_date_toiso">Date.toISOString()</a></li>
        <li><a href="#mark_date_tojson">Date.toJSON()</a></li>
        <li><a href="#mark_getter">Property getters and setters</a></li>
        <li><a href="#mark_reserved">Reserved words as property names</a></li>
        <li><a href="#mark_object_methods">Object methods</a></li>
        <li><a href="#mark_object_define_property">Object defineProperty()</a></li>
        <li>Function.bind()</li>
        <li><a href="#mark_trailing_commas">Trailing commas</a></li>
    </ul>
    <hr>

    <h2>Поддержка браузерами</h2>
    <p><code class="w3-codespan">ES5</code> полностью поддерживается во всех современных браузерах:</p>
    <table class="browserref notranslate">
        <tr style="height:60px">
            <th style="width:16.6%;" class="bsChrome" title="Chrome"></th>
            <th style="width:16.6%;" class="bsIE" title="Internet Explorer"></th>
            <th style="width:16.6%;" class="bsEdge" title="Edge"></th>
            <th style="width:16.6%;" class="bsFirefox" title="Firefox"></th>
            <th style="width:16.6%;" class="bsSafari" title="Safari"></th>
            <th style="width:16.6%;" class="bsOpera" title="Opera"></th>
        </tr>
        <tr>
            <td>Chrome</td>
            <td>IE</td>
            <td>Edge</td>
            <td>Firefox</td>
            <td>Safari</td>
            <td>Opera</td>
        </tr>
        <tr>
            <td>Yes</td>
            <td>9.0</td>
            <td>Yes</td>
            <td>Yes</td>
            <td>Yes</td>
            <td>Yes</td>
    </table>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <a id="mark_use_strict"></a>
    <h2>Директива &quot;use strict&quot;</h2>
    <p><code class="w3-codespan">&quot;use strict&quot;</code> определяет, что код JavaScript должен выполняться в &quot;строгом режиме&quot;.</p>
    <p>В строгом режиме вы можете, например, не использовать необъявленные переменные.</p>

    <div class="w3-panel w3-note">
        <p>Вы можете использовать строгий режим во всех своих программах. Это помогает вам писать более чистый код, например предотвращает использование необъявленных переменных.</p>
        <p><code class="w3-codespan">"use strict"</code> это просто строковое выражение. Старые браузеры не выдадут ошибку, если не поймут её.</p>
    </div>
    <p>Подробнее в главе <a href="js_strict.php">JS Строгий режим</a>.</p>
    <hr>
    <a id="mark_string_property_access"></a>
    <h2>Доступ к свойствам по строкам</h2>
    <p>Метод <code class="w3-codespan">charAt()</code> возвращает символ по указанному индексу (позиции) в строке:</p>

    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var str = &quot;HELLO WORLD&quot;;<br>
            str.charAt(0);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // вернёт H
        </div>
        <a class='w3-btn w3-margin-bottom' href="../jstryit/tryjs_es5_string_charat.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>ES5 разрешает доступ к свойствам строк:</p>

    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var str = &quot;HELLO WORLD&quot;;<br>
            str[0];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // вернёт H
        </div>
        <a class='w3-btn w3-margin-bottom' href="../jstryit/tryjs_es5_string_prop.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p>Доступ к свойству в строке может быть немного непредсказуемым.</p>
        <p>Подробнее в главе <a href="js_string_methods.php">JS Строковые методы</a>.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <a id="mark_string_multiline"></a>
    <h2>Строки на нескольких строках</h2>
    <p>ES5 позволяет использовать строковые литералы на нескольких строках, если они экранированы обратным слэшем:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            &quot;Hello \<br>Dolly!&quot;;</div>
        <a class='w3-btn w3-margin-bottom' href="../jstryit/tryjs_string_break.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Метод \ может не иметь универсальной поддержки. <br>Старые браузеры могут по-разному обрабатывать пробелы вокруг обратного слэша. <br>Некоторые старые браузеры не допускают пробелов после символа \ .</p>
    </div>

    <p>Более безопасный способ разбить строковый литерал - использовать сложение строк:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            &quot;Hello &quot; + <br>&quot;Dolly!&quot;;
        </div>
        <a class='w3-btn w3-margin-bottom' href="../jstryit/tryjs_string_break_ok.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <a id="mark_reserved"></a>
    <h2>Зарезервированные слова как названия свойств</h2>
    <p>ES5 позволяет использовать зарезервированные слова в качестве имен свойств:</p>
    <div class='w3-example'>
        <h3>Пример объекта</h3>
        <div class="w3-code notranslate jsHigh">
            var obj = {name: &quot;John&quot;, new: &quot;yes&quot;}
        </div>
        <a target='_blank' class='w3-btn w3-margin-bottom' href="../jstryit/tryjs_es5_property.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <a id="mark_string_trim"></a>
    <h2>String.trim()</h2>
    <p><code class="w3-codespan">String.trim()</code> удаляет пробелы с обеих сторон строки.</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var str = &quot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hello World!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &quot;;<br>alert(str.trim());
        </div>
        <a target='_blank' href="../jstryit/tryjs_string_trim.html" class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <p>Подробнее в <a href="js_string_methods.php">JS Строковые методы</a>.</p>
    <hr>

    <a id="mark_isarray"></a>
    <h2>Array.isArray()</h2>
    <p>Метод <code class="w3-codespan">isArray()</code> проверяет, является ли объект массивом.</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            function myFunction() {<br>&nbsp;&nbsp;var fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>&nbsp;&nbsp;var x = document.getElementById(&quot;demo&quot;);<br>&nbsp; x.innerHTML = Array.isArray(fruits);<br>}</div>
        <a target='_blank' href="../jstryit/tryjs_array_is.html" class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <p>Подробнее в <a href="js_arrays.php">JS Массивы</a>.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <a id="mark_array_foreach"></a>
    <h2>Array.forEach()</h2>
    <p>Метод <code class="w3-codespan">forEach()</code> вызывает функцию один раз для каждого элемента массива.</p>

    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var txt = &quot;&quot;;<br>var numbers = [45, 4, 9, 16, 25];<br>
            numbers.forEach(myFunction);<br><br>
            function myFunction(value) {<br>&nbsp;
            txt = txt + value + &quot;&lt;br&gt;&quot;; <br>}
        </div>
        <a class='w3-btn w3-margin-bottom' href="../jstryit/tryjs_es5_array_foreach.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>Подробнее в <a href="js_array_iteration.php">JS Методы итерации массивов</a>.</p>
    <hr>
    <a id="mark_array_map"></a>
    <h2>Array.map()</h2>
    <p>В этом примере каждое значение массива умножается на 2: </p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var numbers1 = [45, 4, 9, 16, 25];<br>
            var numbers2 = numbers1.map(myFunction);<br><br>
            function myFunction(value) {<br>
            &nbsp;&nbsp;return value * 2;<br>}
        </div>
        <a class='w3-btn w3-margin-bottom' href="../jstryit/tryjs_es5_array_map.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>Подробнее в <a href="js_array_iteration.php">JS Методы итерации массивов</a>.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <a id="mark_array_filter"></a>
    <h2>Array.filter()</h2>
    <p>В этом примере создается новый массив из элементов со значением больше 18:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var numbers = [45, 4, 9, 16, 25];<br>var over18 = numbers.filter(myFunction);<br><br>function myFunction(value) {<br>&nbsp;&nbsp;return value &gt; 18;<br>} </div>
        <a class='w3-btn w3-margin-bottom' href="../jstryit/tryjs_es5_array_filter.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>Подробнее в <a href="js_array_iteration.php">JS Методы итерации массивов</a>.</p>
    <hr>
    <a id="mark_array_reduce"></a>

    <h2>Array.reduce()</h2>
    <p>Этот пример находит сумму всех чисел в массиве:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var numbers1 = [45, 4, 9, 16, 25];<br>var sum = numbers1.reduce(myFunction);<br>
            <br>function myFunction(total, value) {<br>&nbsp;
            return total + value;<br>} </div>
        <a class='w3-btn w3-margin-bottom' href="../jstryit/tryjs_es5_array_reduce.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <p>Подробнее в <a href="js_array_iteration.php">JS Методы итерации массивов</a>.</p>
    <hr>
    <a id="mark_array_reduceright"></a>

    <h2>Array.reduceRight()</h2>
    <p>Этот пример также находит сумму всех чисел в массиве:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var numbers1 = [45, 4, 9, 16, 25];<br>var sum = numbers1.reduceRight(myFunction);<br>
            <br>function myFunction(total, value) {<br>&nbsp;&nbsp;return total + value;<br>} </div>
        <a class='w3-btn w3-margin-bottom' href="../jstryit/tryjs_es5_array_reduce_right.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>Подробнее в <a href="js_array_iteration.php">JS Методы итерации массивов</a>.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <a id="mark_array_every"></a>

    <h2>Array.every()</h2>
    <p>В этом примере проверяется, все ли значения больше 18:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var numbers = [45, 4, 9, 16, 25];<br>var allOver18 =
            numbers.every(myFunction);<br><br>function myFunction(value) {<br>&nbsp; return value &gt; 18;<br>}
        </div>
        <a class='w3-btn w3-margin-bottom' href="../jstryit/tryjs_es5_array_every.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>Подробнее в <a href="js_array_iteration.php">JS Методы итерации массивов</a>.</p>
    <hr>
    <a id="mark_array_some"></a>

    <h2>Array.some()</h2>
    <p>В этом примере проверяется, не превышают ли некоторые значения 18:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var numbers = [45, 4, 9, 16, 25];<br>var allOver18 =
            numbers.some(myFunction);<br><br>function myFunction(value) {<br>&nbsp;&nbsp;return value &gt; 18;<br>} </div>
        <a class='w3-btn w3-margin-bottom' href="../jstryit/tryjs_es5_array_some.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>Подробнее в <a href="js_array_iteration.php">JS Методы итерации массивов</a>.</p>
    <hr>
    <a id="mark_array_indexof"></a>
    <h2>Array.indexOf()</h2>
    <p>Поиск в массиве значения элемента и возврат его позиции.</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            var a = fruits.indexOf("Apple");
        </div>
        <a target='_blank' href="../jstryit/tryjs_array_indexof.html" class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <p>Подробнее в <a href="js_array_iteration.php">JS Методы итерации массивов</a>.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <a id="mark_array_lastindexof"></a>
    <h2>Array.lastIndexOf()</h2>
    <p><code class="w3-codespan">Array.lastIndexOf()</code> то же самое, что и <code class="w3-codespan">Array.indexOf()</code>, но поиск выполняется с конца массива.</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            var a = fruits.lastIndexOf("Apple");
        </div>
        <a target='_blank' href="../jstryit/tryjs_array_lastindexof.html" class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <p>Подробнее в <a href="js_array_iteration.php">JS Методы итерации массивов</a>.</p>
    <hr>

    <a id="mark_json_parse"></a>
    <h2>JSON.parse()</h2>
    <p>Обычно JSON используется для получения данных с веб-сервера.</p>
    <p>Представьте, что вы получили эту текстовую строку с веб-сервера:</p>
    <div class='w3-example'>
        <div class="w3-code notranslate jsHigh">
            '{&quot;name&quot;:&quot;John&quot;, &quot;age&quot;:30, &quot;city&quot;:&quot;New York&quot;}'</div>
    </div>
    <p>JavaScript функция <code class="w3-codespan">JSON.parse()</code> используется для преобразования текста в объект JavaScript:</p>

    <div class='w3-example'>
        <div class="w3-code notranslate jsHigh">
            var obj = JSON.parse('{&quot;name&quot;:&quot;John&quot;, &quot;age&quot;:30, &quot;city&quot;:&quot;New York&quot;}');</div>
        <a target='_blank' href="../jstryit/tryjson_parse.html" class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <p>Подробнее в <a href="js_json_intro.php">JSON Учебнике</a>.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <a id="mark_json_stringify"></a>
    <h2>JSON.stringify()</h2>
    <p>Обычно JSON используется для отправки данных на веб-сервер.</p>
    <p>При отправке данных на веб-сервер данные должны быть строкой.</p>
    <p>Представьте, что у нас есть этот объект в JavaScript:</p>
    <div class='w3-example'>
        <div class="w3-code notranslate jsHigh">
            var obj = {name:&quot;John&quot;, age:30, city:&quot;New York&quot;};
        </div>
    </div>
    <p>Используйте JavaScript функцию <code class="w3-codespan">JSON.stringify()</code> чтобы преобразовать его в строку.</p>

    <div class='w3-example'>
        <div class="w3-code notranslate jsHigh">
            var myJSON = JSON.stringify(obj);</div>
    </div>
    <div class="w3-panel w3-note">
        <p>Результатом будет строка, следующая за нотацией JSON.</p>
    </div>
    <p>myJSON теперь является строкой и готов к отправке на сервер:</p>

    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var obj = {name:&quot;John&quot;, age:30, city:&quot;New York&quot;};<br>
            var myJSON = JSON.stringify(obj);<br>document.getElementById(&quot;demo&quot;).innerHTML = myJSON;</div>
        <a target='_blank' class='w3-btn w3-margin-bottom' href="../jstryit/tryjson_stringify.html">Попробуйте сами &raquo;</a>
    </div>
    <p>Подробнее читайте в <a href="js_json_intro.php">JSON Учебнике</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <a id="mark_date_now"></a>

    <h2>Date.now()</h2>
    <p><code class="w3-codespan">Date.now()</code> возвращает количество миллисекунд с нулевой даты (1 января 1970 00:00:00 UTC).</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var timInMSs = Date.now();</div>
        <a class='w3-btn w3-margin-bottom' href="../jstryit/tryjs_es5_date_now.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p><code class="w3-codespan">Date.now()</code> возвращает то же самое, что и getTime(), выполняемое для объекта <code class="w3-codespan">Date</code>.</p>
    <p>Подробнее в главе <a href="js_dates.php">JS Даты</a>.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <a id="mark_date_toiso"></a>
    <h2>Date.toISOString()</h2>
    <p>Метод <code class="w3-codespan">toISOString()</code> преобразует объект Date в строку, используя стандартный формат ISO:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            document.getElementById(&quot;demo&quot;).innerHTML = d.toISOString();
        </div>
        <a class='w3-btn w3-margin-bottom' href="../jstryit/tryjs_date_toisostring.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <a id="mark_date_tojson"></a>
    <h2>Date.toJSON()</h2>
    <p><code class="w3-codespan">Date.toJSON()</code> преобразует объект Date в строку, отформатированную как дату JSON.</p>
    <p>Даты JSON имеют тот же формат, что и стандарт ISO-8601: YYYY-MM-DDTHH:mm:ss.sssZ:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            d = new Date();<br>
            document.getElementById("demo").innerHTML = d.toJSON();
        </div>
        <a class='w3-btn w3-margin-bottom' href="../jstryit/tryjs_es5_date_tojson.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <a id="mark_getter"></a>
    <h2>Свойства Геттеры и Сеттеры</h2>
    <p>ES5 позволяет определять методы объекта с синтаксисом, который выглядит как получение (геттеры) или установка (сеттеры) свойства.</p>
    <p>В этом примере создается <strong>геттер</strong> для свойства с именем fullName:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Создать объект:<br>var person = {<br>&nbsp; firstName:
            &quot;John&quot;,<br>&nbsp; lastName : &quot;Doe&quot;,<br>&nbsp; get fullName() {<br>&nbsp;&nbsp;&nbsp;
            return this.firstName + &quot; &quot; + this.lastName;<br>&nbsp;&nbsp;}<br>};<br><br>// Отображение данных из объекта с помощью геттера:<br>document.getElementById(&quot;demo&quot;).innerHTML = person.fullName; </div>
        <a class='w3-btn w3-margin-bottom' href="../jstryit/tryjs_es5_setter1.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>В этом примере создаются <strong>сеттер</strong> (установщик) <strong>геттер</strong> (получатель) для свойства языка:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var person = {<br>&nbsp; firstName: &quot;John&quot;,<br>&nbsp;
            lastName : &quot;Doe&quot;,<br>&nbsp; language : &quot;NO&quot;,<br>&nbsp;
            get lang() {<br>&nbsp;&nbsp;&nbsp; return this.language;<br>&nbsp;&nbsp;},<br>&nbsp;&nbsp;set lang(value) {<br>&nbsp;&nbsp;&nbsp;
            this.language = value;<br>&nbsp;&nbsp;}<br>};<br><br>// Установить свойство объекта с помощью сеттера:<br>person.lang = &quot;en&quot;;<br><br>// Отображение данных из объекта с помощью геттера:<br>document.getElementById(&quot;demo&quot;).innerHTML = person.lang;<br> </div>
        <a class='w3-btn w3-margin-bottom' href="../jstryit/tryjs_es5_setter.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <p>В этом примере используется сеттер для защиты обновлений языка в верхнем регистре:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var person = {<br>&nbsp; firstName: &quot;John&quot;,<br>&nbsp;
            lastName : &quot;Doe&quot;,<br>&nbsp; language : &quot;NO&quot;,<br>&nbsp;&nbsp;set lang(value) {<br>&nbsp;&nbsp;&nbsp;
            this.language = value.toUpperCase();<br>&nbsp;&nbsp;}<br>};<br><br>// Установить свойство объекта с помощью установщика:<br>person.lang = &quot;en&quot;;<br><br>// Отображение данных от объекта:<br>document.getElementById(&quot;demo&quot;).innerHTML = person.language;<br> </div>
        <a class='w3-btn w3-margin-bottom' href="../jstryit/tryjs_es5_setter2.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>Узнать больше о геттерах и сеттерах вы можете в <a href="js_object_accessors.php">JS Средства доступа к объектам</a></p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <a id="mark_object_define_property"></a>
    <h2>Object.defineProperty()</h2>
    <p><code class="w3-codespan">Object.defineProperty()</code> - это новый метод объекта в ES5.</p>
    <p>Он позволяет вам определять свойство объекта и / или изменять значение свойства и / или метаданные.</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Создать объект:<br>var person = {<br>&nbsp; firstName:
            &quot;John&quot;,<br>&nbsp; lastName : &quot;Doe&quot;,<br>&nbsp; language : &quot;NO&quot;, <br>};<br><br>
            // Изменить свойство:<br><strong>Object.defineProperty</strong>(person, &quot;language&quot;, {<br>&nbsp;
            value: &quot;EN&quot;,<br>&nbsp;&nbsp;writable : true,<br>&nbsp;&nbsp;enumerable : true,<br>&nbsp;&nbsp;configurable : true<br>});<br><br>// Перечислить свойства<br>var txt = &quot;&quot;;<br>for (var x in person) {<br>&nbsp;
            txt += person[x] + &quot;&lt;br&gt;&quot;;<br>}<br>document.getElementById(&quot;demo&quot;).innerHTML = txt;<br> </div>
        <a class='w3-btn w3-margin-bottom' href="../jstryit/tryjs_object_defineproperty.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <p>Следующий пример - тот же код, за исключением того, что он скрывает свойство языка из перечисления:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Создать объект:<br>var person = {<br>&nbsp; firstName:
            &quot;John&quot;,<br>&nbsp; lastName : &quot;Doe&quot;,<br>&nbsp; language : &quot;NO&quot;, <br>};<br><br>
            // Изменить свойство:<br><strong>Object.defineProperty</strong>(person, &quot;language&quot;, {<br>&nbsp;
            value: &quot;EN&quot;,<br>&nbsp;&nbsp;writable : true,<br>&nbsp;&nbsp;enumerable : false,<br>&nbsp;&nbsp;configurable : true<br>});<br><br>// Перечислить свойства<br>var txt = &quot;&quot;;<br>for (var x in person) {<br>&nbsp;
            txt += person[x] + &quot;&lt;br&gt;&quot;;<br>}<br>document.getElementById(&quot;demo&quot;).innerHTML = txt;<br> </div>
        <a class='w3-btn w3-margin-bottom' href="../jstryit/tryjs_object_defineproperty2.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <p>В этом примере создаются сеттер и геттер для защиты обновлений языка в верхнем регистре:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            /// Создать объект:<br>var person = {<br>&nbsp;&nbsp;firstName: &quot;John&quot;,<br>
            &nbsp; lastName : &quot;Doe&quot;,<br>&nbsp; language : &quot;NO&quot;<br>};<br><br>// Изменить свойство:<br>
            <strong>Object.defineProperty</strong>(person, &quot;language&quot;, {<br>&nbsp; get : function() { return language },<br>&nbsp; set : function(value) { language = value.toUpperCase()}<br>});<br><br>
            // Изменить язык<br>person.language = &quot;en&quot;;<br><br>// Отобразить язык<br>
            document.getElementById(&quot;demo&quot;).innerHTML = person.language;</div>
        <a class='w3-btn w3-margin-bottom' href="../jstryit/tryjs_object_defineproperty3.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>E5 Методы объекта</h2>
    <a id="mark_object_methods"></a>
    <p>ES5 добавил много новых методов объекта в JavaScript:</p>

    <div class='w3-example'>
        <h3>Управление объектами</h3>
        <div class="w3-code notranslate jsHigh">
            // Создание объекта с существующим объектом в качестве прототипа<br>
            Object.create(parent, donor)<br><br>
            // Добавление или изменение свойства объекта<br>
            Object.defineProperty(object, property, descriptor)<br><br>
            // Добавление или изменение свойств объекта<br>
            Object.defineProperties(object, descriptors)<br><br>
            // Доступ к свойствам<br>
            Object.getOwnPropertyDescriptor(object, property)<br><br>
            // Возвращает все свойства в виде массива<br>
            Object.getOwnPropertyNames(object)<br><br>
            // Доступ к прототипу<br>
            Object.getPrototypeOf(object)<br><br>
            // Возвращает перечислимые свойства в виде массива<br>
            Object.keys(object)<br><br>
        </div>
        <h3>Защита объектов</h3>
        <div class="w3-code notranslate jsHigh">
            // Предотвращает добавление свойств к объекту<br>
            Object.preventExtensions(object)<br><br>
            // Возвращает true, если к объекту можно добавить свойства<br>
            Object.isExtensible(object)<br><br>
            // Предотвращает изменение свойств объекта (не значений)<br>
            Object.seal(object)<br><br>
            // Возвращает true, если объект запечатан<br>
            Object.isSealed(object)<br><br>
            // Предотвращает любые изменения объекта<br>
            Object.freeze(object)<br><br>
            // Возвращает true, если объект заморожен<br>
            Object.isFrozen(object)
        </div>
    </div>

    <p>Подробности в <a href="js_object_es5.php">Объект ECMAScript5</a>.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <a id="mark_trailing_commas"></a>
    <h2>Завершающие запятые</h2>
    <p>ES5 позволяет использовать конечные запятые в определениях объектов и массивов:</p>
    <div class='w3-example'>
        <h3>Пример объекта</h3>
        <div class="w3-code notranslate jsHigh">
            person = {<br>
            &nbsp; firstName: &quot;John&quot;,<br>
            &nbsp; lastName: &quot;
            Doe&quot;,<br>
            &nbsp;
            age: 46,<br>
            }
        </div>
    </div>
    <div class='w3-example'>
        <h3>Пример массива</h3>
        <div class="w3-code notranslate jsHigh">
            points = [<br>
            &nbsp; 1,<br>
            &nbsp; 5,<br>
            &nbsp; 10,<br>
            &nbsp; 25,<br>
            &nbsp; 40,<br>
            &nbsp; 100,<br>
            ];
        </div>
    </div>
    <div class="w3-panel w3-warning">
        <p>ВНИМАНИЕ !!!</p>
        <p>JSON не допускает конечных запятых.</p>
    </div>
    <div class='w3-example'>
        <h3>JSON Объекты:</h3>
        <div class="w3-code notranslate jsHigh">
            // Допускается:<br>var person = '{&quot;firstName&quot;:&quot;John&quot;, &quot;lastName&quot;:&quot;Doe&quot;,
            &quot;age&quot;:46}'<br>JSON.parse(person)<br><br>// Не допускается:<br>var person = '{&quot;firstName&quot;:&quot;John&quot;,
            &quot;lastName&quot;:&quot;Doe&quot;, &quot;age&quot;:46,}'<br>JSON.parse(person)</div>
        <h3>JSON Массивы:</h3>
        <div class="w3-code notranslate jsHigh">
            // Допускается:<br>points = [40, 100, 1, 5, 25, 10]<br><br>// Не допускается:<br>points = [40, 100, 1, 5, 25, 10,]</div>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_versions.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_es6.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>