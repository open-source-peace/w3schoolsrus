<?php include '../include/head.php'; ?>

<title>JavaScript Версии. ECMAScript 2015 или ES6, или ECMAScript 6. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Версии. ECMAScript 2015 также известен как ES6 и ECMAScript 6. Новые возможности. Ключевое слово let, const. Функции стрелки. Цикл For/Of. Объекты карты, Набора. Классы. Промисы. Тип символа. Значения параметров по умолчанию. Функция Rest Parameter. Браузерная поддержка. <?php include '../include/description.php'; ?>'>
    <link rel="stylesheet" href="../styles/browserref.css">
    <style>
        #main a[id] {position: relative;top: -50px;}
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>Javascript ES6</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_es5.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_2016.php">Next &#10095;</a>
    </div>
    <div class="w3-panel w3-info">
        <p>ECMAScript 2015 стал второй крупной версией JavaScript.</p>
        <p>ECMAScript 2015 также известен как ES6 и ECMAScript 6.</p>
        <p>В этой главе описаны наиболее важные функции ES6.</p>
    </div>

    <h2>Новые возможности ES6</h2>
    <ul>
        <li><a href="#mark_let">Ключевое слово let</a></li>
        <li><a href="#mark_const">Ключевое слово const</a></li>
        <li><a href="#mark_arrow">Функции стрелок</a></li>
        <li><a href="#mark_forof">For/of</a></li>
        <li><a href="#mark_map">Карты объектов</a></li>
        <li><a href="#mark_set">Наборы объектов</a></li>
        <li><a href="#mark_class">Классы</a></li>
        <li><a href="#mark_promise">Промисы</a></li>
        <li><a href="#mark_symbol">Символ</a></li>
        <li><a href="#mark_param">Параметры по умолчанию</a></li>
        <li><a href="#mark_rest">Функция Остаточный параметр</a></li>
        <li><a href="#mark_includes">String.includes()</a></li>
        <li><a href="#mark_startswith">String.startsWith()</a></li>
        <li><a href="#mark_endswith">String.endsWith()</a></li>
        <li><a href="#mark_array_from">Array.from()</a></li>
        <li><a href="#mark_array_keys">Array.keys()</a></li>
        <li><a href="#mark_array_find">Array.find()</a></li>
        <li><a href="#mark_array_findIndex">Array.findIndex()</a></li>
        <li><a href="#mark_math_methods">Новые математические методы</a></li>
        <li><a href="#mark_number_properties">Новые числовые свойства</a></li>
        <li><a href="#mark_number_methods">Новые числовые методы</a></li>
        <li><a href="#mark_global_methods">Новые глобальные методы</a></li>
        <li>Iterables Object.entries</li>
        <li>JavaScript Модули</li>
    </ul>
    <hr>

    <h2>Поддержка браузерами ES6 (2015)</h2>
    <p>Safari 10 и Edge 14 были первыми браузерами, полностью поддерживающими ES6:</p>

    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tbody><tr style="height:60px">
                <th style="width:20%;" class="bsChrome" title="Chrome"></th>
                <th style="width:20%;" class="bsEdge" title="Edge"></th>
                <th style="width:20%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:20%;" class="bsSafari" title="Safari"></th>
                <th style="width:19%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td>Chrome 58</td>
                <td>Edge 14</td>
                <td>Firefox 54</td>
                <td>Safari 10</td>
                <td>Opera 55</td>
            </tr>
            <tr>
                <td>Jan 2017</td>
                <td>Aug 2016</td>
                <td>Mar 2017</td>
                <td>Jul 2016</td>
                <td>Aug 2018</td>
            </tr>
            </tbody>
        </table>
    </div>
    <hr>

    <a id="mark_let"></a>
    <h2>JavaScript Ключевое слово let</h2>
    <p>Ключевое слово <code class="w3-codespan">let</code> позволяет объявить переменную с областью видимости блока.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var x = 10;<br>
            // Здесь x равен 10<br>{ <br>
            &nbsp;&nbsp;let x = 2;<br>
            &nbsp; // Здесь x равен 2<br>}<br> // Здесь x равен 10
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_es6_let.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Подробнее о ключевом слове <code class="w3-codespan">let</code> вы можете узнать в главе: <a href="js_let.php">JavaScript Let</a>.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    
    <a id="mark_const"></a>
    <h2>JavaScript Ключевое слово const</h2>
    <p>Ключевое слово <code class="w3-codespan">const</code> позволяет объявить константу (переменную JavaScript с постоянным значением).</p>
    <p>Константы аналогичны let переменным, за исключением того, что значение нельзя изменить.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var x = 10;<br>
            // Здесь x равно 10<br> { <br>
            &nbsp;&nbsp;const x = 2;<br>
            &nbsp; // Здесь x равно 2<br>}<br>// Здесь x равно 10
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_es6_const.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Подробнее о ключевом слове <code class="w3-codespan">const</code> вы можете узнать в главе <a href="js_const.php">JavaScript Const</a>.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <a id="mark_arrow"></a>
    <h2>Функции стрелки</h2>
    <p>Функции стрелок (стрелочные функции) позволяют использовать короткий синтаксис для написания функциональных выражений.</p>
    <p>Вам не нужны ключевые слова <code class="w3-codespan">function</code>, <code class="w3-codespan">return</code> и <strong>фигурные скобки</strong>.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // ES5<br> var x = function(x, y) {<br>
            &nbsp;&nbsp;return x * y;<br> }<br><br> // ES6<br>
            const x = (x, y) =&gt; x * y;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_es6_arrow.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>У стрелочных функций нет собственного <code class="w3-codespan">this</code>. Они не подходят для определения <strong>методов объекта</strong>.</p>
    <p>Стрелочные функции не поднимаются. Они должны быть определены <b>до</b> их использования.</p>
    <p>Использование <code class="w3-codespan">const</code> безопаснее, чем использование <code class="w3-codespan">var</code>, поскольку выражение функции всегда является постоянным значением.</p>
    <p>Вы можете опустить ключевое слово <code class="w3-codespan">return</code> и фигурные скобки только в том случае, если функция является одним оператором. Поэтому рекомендуется всегда использовать их:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const x = (x, y) =&gt; { return x * y };<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_es6_arrow_safe.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Дополнительные сведения о стрелочных функциях см. в главе: <a href="js_arrow_function.php">JavaScript Функция стрелок</a>.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <a id="mark_forof"></a>
    <h2>Цикл For/Of</h2>
    <p>JavaScript инструкция <code class="w3-codespan">for/of</code> перебирает значения итерируемых объектов.</p>
    <p><code class="w3-codespan">for/of</code> позволяет перебирать итерируемые структуры данных, такие как массивы, строки, карты, списки узлов и т. д.</p>
    <p>Цикл <code class="w3-codespan">for/of</code> имеет следующий синтаксис:</p>
    <div class="w3-code w3-border notranslate jsHigh"><div>
            for (<i>переменной</i> of <i>итерируемого</i>) {<br>
            &nbsp; // <i>блок кода, который должен быть выполнен </i><br>
            }<br>
        </div>
    </div>
    <p><em>переменная</em> - Для каждой итерации переменной присваивается значение следующего свойства. <em>Переменная</em> может быть объявлена с помощью <code class="w3-codespan">const</code>, <code class="w3-codespan">let</code> или <code class="w3-codespan">var</code>.</p>
    <p><em>итерируемое</em> - Объект с итеративными свойствами.</p>

    <h3>Цикл по массиву</h3>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const cars = [&quot;BMW&quot;, &quot;Volvo&quot;, &quot;Mini&quot;];<br>
            let text = "";<br>
            <br>for (let x of cars) {<br>
            &nbsp; text += x + " ";<br> }
        </div>
        <a target="_blank" href="../jstryit/tryjs_object_for_of.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <h3>Цикл по строке</h3>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let language = &quot;JavaScript&quot;;<br>
            let text = "";<br>
            <br>
            for (let x of language) {<br>&nbsp;
            &nbsp; text += x + " ";<br> }
        </div>
        <a target="_blank" href="../jstryit/tryjs_object_for_of2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Подробнее в главе: <a href="js_loop_forin.php">JavaScript Цикл For/In/Of</a>.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <a id="mark_map"></a>
    <h2>JavaScript Объекты карты</h2>
    <div class="w3-note"><p>Возможность использовать объект в качестве ключа - важная особенность карты.</p></div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Создание объектов<br>
            const apples = {name: 'Apples'};<br>
            const bananas = {name: 'Bananas'};<br>
            const oranges = {name: 'Oranges'};<br>
            <br>
            // Создание новой карты<br>
            const fruits = new Map();<br>
            <br>
            // Добавление новых элементов на карте<br>
            fruits.set(apples, 500);<br>
            fruits.set(bananas, 300);<br>
            fruits.set(oranges, 200);<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_map_create.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Узнайте больше об объектах карты в главе: <a href="js_object_maps.php">JavaScript Map()</a>.</p>
    <hr>

    <a id="mark_set"></a>
    <h2>JavaScript Объекты Набора</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Создать Набор<br>
            const letters = new Set();<br>
            <br>
            // Добавить несколько значений в Набор<br>
            letters.add("a");<br>
            letters.add("b");<br>
            letters.add("c");<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_set_create_values.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Подробнее об объектах Набора в главе: <a href="js_object_sets.php">JavaScript Set()</a>.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <a id="mark_class"></a>

    <h2>JavaScript Классы</h2>
    <p>JavaScript классы - это шаблоны для JavaScript объектов.</p>
    <p>Используйте ключевое слово <code class="w3-codespan">class</code> для создания класса.</p>
    <p>Всегда добавляйте метод с именем <code class="w3-codespan">constructor()</code>:</p>

    <div class="w3-example">
        <h3>Синтаксис</h3>
        <div class="w3-code notranslate jsHigh">
            class ClassName {<br>
            &nbsp;  constructor() { ... }<br>
            }
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            class Car {<br>
            &nbsp;  constructor(name, year) {<br>
            &nbsp;&nbsp;&nbsp; this.name = name;<br>
            &nbsp;&nbsp;&nbsp; this.year = year;<br>
            &nbsp; }<br>
            }
        </div>
    </div>

    <p>В приведенном выше примере создается класс с именем &quot;Car&quot;.</p>
    <p>У класса есть два начальных свойства: "name" (название) и "year" (год).</p>

    <div class="w3-panel w3-note">
        <p>JavaScript класс <b>не является</b> объектом.</p>
        <p>Он является <b>шаблоном</b> для JavaScript объектов.</p>
    </div>
    <hr>
    <h2>Использование класса</h2>
    <p>Когда у вас есть класс, вы можете использовать его для создания объектов:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const myCar1 = new Car(&quot;Ford&quot;, 2014);<br>
            const myCar2 = new Car(&quot;Audi&quot;, 2019);
        </div>
        <p><a target="_blank" class="w3-btn" href="../jstryit/tryjs_class_init.html">Попробуйте сами &raquo;</a></p>
    </div>
    <p>Подробнее о классах в главе: <a href="js_classes.php">JavaScript Классы</a>.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <a id="mark_promise"></a>
    <h2>JavaScript Промисы</h2>
    <p>Промис - это JavaScript объект, который связывает &quot;Производящий код&quot; и &quot;Потребляющий код&quot;.</p>
    <p>"Производящий код" может занять некоторое время и &quot;Потребляющий код&quot; должен дождаться результата.</p>
    <div class="w3-example">
        <h3>Синтаксис промиса</h3>
        <div class="w3-code notranslate jsHigh">
            const myPromise = new Promise(function(myResolve, myReject) {<br>
            // "Производящий код" (может занять некотрое время)<br>
            <br>
            &nbsp; myResolve(); // в случае успеха<br>
            &nbsp; myReject(); &nbsp;// когда ошибка<br>
            });<br><br>
            // "Потребляющий код" (должен дождаться выполнения промиса).<br>
            myPromise.then(<br>
            &nbsp; function(value) { /* код в случае успеха */ },<br>
            &nbsp; function(error) { /* код, если какая-то ошибка */ }<br>
            );
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример использования промиса</h3>
        <div class="w3-code notranslate jsHigh">
            const myPromise = new Promise(function(myResolve, myReject) {<br>
            &nbsp; setTimeout(function() { myResolve(&quot;I love You !!&quot;); }, 3000);<br>});<br><br>
            myPromise.then(function(value) {<br>
            &nbsp; document.getElementById(&quot;demo&quot;).innerHTML = value;<br>
            });
        </div>
        <p><a target="_blank" class="w3-btn" href="../jstryit/tryjs_promise3.html">Попробуйте сами &raquo;</a></p>
    </div>
    <p>Подробнее о промисах в главе: <a href="js_promise.php">JavaScript Промисы</a>.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <a id="mark_symbol"></a>
    <h2>Тип символа</h2>
    <p>JavaScript символ - это примитивный тип данных, такой же, как Number (число), String (строка) или Boolean (булево).</p>
    <p>Он представляет собой уникальный &quot;скрытый&quot; идентификатор, к которому никакой другой код не может случайно получить доступ.</p>
    <p>Например, если разные кодировщики хотят добавить свойство person.id к объекту person, принадлежащему стороннему коду, они могут смешивать значения друг друга.</p>
    <p>Использование Symbol() для создания уникальных идентификаторов решает эту проблему:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {<br>
            &nbsp; firstName: &quot;John&quot;,<br>
            &nbsp; lastName: &quot;Doe&quot;,<br>
            &nbsp; age: 50,<br>
            &nbsp; eyeColor: &quot;blue&quot;<br>
            };<br><br>
            let id = Symbol('id');<br>
            person[id] = 140353;<br>
            // теперь Person[id] = 140353<br>
            // но person.id все еще не определено
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_symbol.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p>Символы всегда уникальны.</p>
        <p>Если вы создадите два символа с одинаковым описанием, они будут иметь разные значения.</p>
    </div>

    <div class="w3-code notranslate jsHigh">
        Symbol("id") == Symbol("id") // false
    </div>
    <hr>
    <a id="mark_param"></a>

    <h2>Значения параметров по умолчанию</h2>
    <p>ES6 позволяет параметрам функции иметь значения по умолчанию.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            function myFunction(x, y = 10) {<br>&nbsp;
            // y равно 10, если не передано или не определено<br>&nbsp;
            return x + y;<br>}<br>myFunction(5); // вернёт 15</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_es6_default.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <a id="mark_rest"></a>
    <h2>Функция Rest Parameter</h2>
    <p>Параметр rest (...) позволяет функции обрабатывать неопределенное количество аргументов как массив:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            function sum(...args) {<br>
            &nbsp; let sum = 0;<br>
            &nbsp; for (let arg of args) sum += arg;<br>
            &nbsp; return sum;<br>
            }<br><br>
            let x = sum(4, 9, 16, 25, 29, 100, 66, 77);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_rest.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <a id="mark_includes"></a>
    <h2>String.includes()</h2>
    <p>Метод <code class="w3-codespan">includes()</code> вернёт <code class="w3-codespan">true</code> если строка содержит указанное значение, иначе <code class="w3-codespan">false</code>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let text = &quot;Hello world, welcome to the universe.&quot;;<br>
            text.includes(&quot;world&quot;)&nbsp;&nbsp;&nbsp;&nbsp;// Вернёт true
        </div>
        <a target="_blank" href="../jstryit/tryjs_includes.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <a id="mark_startswith"></a>
    <h2>String.startsWith()</h2>
    <p>Метод <code class="w3-codespan">startsWith()</code> вернёт <code class="w3-codespan">true</code> если строка начинается с указанного значения, иначе <code class="w3-codespan">false</code>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let text = &quot;Hello world, welcome to the universe.&quot;;<br>
            <br>
            text.startsWith(&quot;Hello&quot;)&nbsp;&nbsp;&nbsp;// Вернёт true
        </div>
        <a target="_blank" href="../jstryit/tryjs_startswith.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <a id="mark_endswith"></a>
    <h2>String.endsWith()</h2>
    <p>Метод <code class="w3-codespan">endsWith()</code> вернёт <code class="w3-codespan">true</code> если строка заканчивается указанным значением, иначе <code class="w3-codespan">false</code>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var text = &quot;John Doe&quot;;<br>
            text.endsWith(&quot;Doe&quot;)&nbsp;&nbsp;&nbsp;&nbsp;// вернёт true
        </div>
        <a target="_blank" href="../jstryit/tryjs_endswith.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <a id="mark_array_from"></a>

    <h2>Array.from()</h2>
    <p>Метод <code class="w3-codespan">Array.from()</code> возвращает объект массива с любого объекта с свойством длины или любым итерируемым (повторяющимся) объектом.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Создать массив из строки:</p>
        <div class="w3-code notranslate jsHigh">
            Array.from(&quot;ABCDEFG&quot;)&nbsp;&nbsp;&nbsp;// Вернёт [A,B,C,D,E,F,G]<br>
        </div>
        <a target="_blank" href="../jstryit/tryjs_array_from.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <a id="mark_array_keys"></a>

    <h2>Array.Keys()</h2>
    <p>Метод <code class="w3-codespan">Array.keys()</code> возвращает объект Array Iterator с ключами массива.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Создать объект Array Iterator, содержащий ключи массива:</p>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            const keys = fruits.keys();<br><br>
            let text = "";<br>
            for (let x of keys) {<br>
            &nbsp; text += x + &quot;&lt;br&gt;&quot;;<br>}
        </div>
        <a target="_blank" href="../jstryit/tryjs_array_keys.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <a id="mark_array_find"></a>

    <h2>Array.find()</h2>
    <p>Метод <code class="w3-codespan">find()</code> возвращает значение первого элемента массива, который передаёт тестовую функцию.</p>
    <p>В этом примере находит (возвращает значение) первый элемент, размер которого больше 18:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const numbers = [4, 9, 16, 25, 29];<br>let first = numbers.find(myFunction);<br><br>function myFunction(value, index, array) {<br>
            &nbsp; return value &gt; 18;<br>} </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_find.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Обратите внимание, что функция принимает 3 аргумента:</p>
    <ul>
        <li>Значение элемента</li>
        <li>Индекс элемента</li>
        <li>Сам массив</li>
    </ul>
    <hr>
    <a id="mark_array_findIndex"></a>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Array.findIndex()</h2>
    <p>Метод <code class="w3-codespan">findIndex()</code> возвращает индекс первого элемента массива, который передает тестовую функцию.</p>
    <p>В этом примере выполняется поиск индекса первого элемента больше 18:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const numbers = [4, 9, 16, 25, 29];<br>let first = numbers.findIndex(myFunction);<br><br>function myFunction(value, index, array) {<br>
            &nbsp; return value &gt; 18;<br>} </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_find_index.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Обратите внимание, что функция принимает 3 аргумента:</p>
    <ul>
        <li>Значение элемента</li>
        <li>Индекс элемента</li>
        <li>Сам массив</li>
    </ul>
    <hr>

    <a id="mark_math_methods"></a>
    <h2>Новые математические методы</h2>
    <p>ES6 добавил следующие методы для математического объекта:</p>
    <ul>
        <li><code class="w3-codespan">Math.trunc()</code></li>
        <li><code class="w3-codespan">Math.sign()</code></li>
        <li><code class="w3-codespan">Math.cbrt()</code></li>
        <li><code class="w3-codespan">Math.log2()</code></li>
        <li><code class="w3-codespan">Math.log10()</code></li>
    </ul>
    <hr>
    <h2>Метод Math.trunc()</h2>
    <p>Метод <code class="w3-codespan">Math.trunc(x)</code> возвращает целочисленную часть Х:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Math.trunc(4.9);&nbsp;&nbsp;&nbsp;&nbsp;// вернёт 4<br>
            Math.trunc(4.7);&nbsp;&nbsp;&nbsp;&nbsp;// вернёт 4<br>
            Math.trunc(4.4);&nbsp;&nbsp;&nbsp;&nbsp;// вернёт 4<br>
            Math.trunc(4.2);&nbsp;&nbsp;&nbsp;&nbsp;// вернёт 4<br>
            Math.trunc(-4.2);&nbsp;&nbsp;&nbsp;&nbsp;// вернёт -4<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_math_trunc.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод Math.sign()</h2>
    <p>Метод <code class="w3-codespan">Math.sign(x)</code> возвращает, если X отрицательный, нулевой или положительный:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Math.sign(-4);&nbsp;&nbsp;&nbsp;&nbsp;// вернёт -1<br>
            Math.sign(0);&nbsp;&nbsp;&nbsp;&nbsp;// вернёт 0<br>
            Math.sign(4);&nbsp;&nbsp;&nbsp;&nbsp;// вернёт 1<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_math_sign.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Метод Math.cbrt()</h2>
    <p>Метод <code class="w3-codespan">Math.cbrt(x)</code> возвращает кубический корень Х:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Math.cbrt(8);&nbsp;&nbsp;&nbsp;&nbsp;// вернёт 2<br>
            Math.cbrt(64);&nbsp;&nbsp;&nbsp;&nbsp;// вернёт 4<br>
            Math.cbrt(125);&nbsp;&nbsp;&nbsp;&nbsp;// вернёт 5<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_math_cbrt.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод Math.log2()</h2>
    <p>Метод <code class="w3-codespan">Math.log2(x)</code> возвращает логарифм Х по основанию 2:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Math.log2(2);&nbsp;&nbsp;&nbsp;&nbsp;// вернёт 1<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_math_log2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод Math.log10()</h2>
    <p><code class="w3-codespan">Math.log10(x)</code> возвращает логарифм X по основанию 10:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Math.log10(10);&nbsp;&nbsp;&nbsp;&nbsp;// вернёт 1<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_math_log10.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <a id="mark_number_properties"></a>
    <h2>Новые свойства числа</h2>
    <p>ES6 добавил следующие свойства к объекту Number (число):</p>
    <ul>
        <li><code class="w3-codespan">EPSILON</code></li>
        <li><code class="w3-codespan">MIN_SAFE_INTEGER</code></li>
        <li><code class="w3-codespan">MAX_SAFE_INTEGER</code></li>
    </ul>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = Number.EPSILON;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_es6_epsilon.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = Number.MIN_SAFE_INTEGER;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_es6_min_safe.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = Number.MAX_SAFE_INTEGER;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_es6_max_safe.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <a id="mark_number_methods"></a>
    <h2>Новые методы числа</h2>
    <p>ES6 добавил 2 новых метода к объекту Number (Число):</p>
    <ul>
        <li><code class="w3-codespan">Number.isInteger()</code></li>
        <li><code class="w3-codespan">Number.isSafeInteger()</code></li>
    </ul>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Метод Number.isInteger()</h2>
    <p>Метод <code class="w3-codespan">Number.isInteger()</code> возвращает <code class="w3-codespan">true</code> если аргумент является целым числом .</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Number.isInteger(10);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // вернёт true<br>
            Number.isInteger(10.5);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // вернёт false<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_es6_isinteger.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>Метод Number.isSafeInteger()</h2>
    <p>Безопасное целое число - это целое число, которое может быть точно представлено как число двойной точности.</p>
    <p>Метод <code class="w3-codespan">Number.isSafeInteger()</code> возвращает <code class="w3-codespan">true</code> если аргумент является безопасным целым числом.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Number.isSafeInteger(10);&nbsp;&nbsp;&nbsp;&nbsp;// вернёт true<br>
            Number.isSafeInteger(12345678901234567890);&nbsp; // вернёт false<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_es6_issafeinteger.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/adinfeed.php'; ?>
    <div class="w3-container w3-note">
        <p>Безопасные целые числа - это целые числа от -(2<sup>53</sup> - 1) до +(2<sup>53</sup> - 1).<br> Это безопасно: 9007199254740991. Это не безопасно: 9007199254740992.</p>
    </div>
    <hr>

    <a id="mark_global_methods"></a>
    <h2>Новые глобальные методы</h2>
    <p>ES6 добавил 2 новых метода глобального числа:</p>
    <ul>
        <li><code class="w3-codespan">isFinite()</code></li>
        <li><code class="w3-codespan">isNaN()</code></li>
    </ul>
    <hr>

    <h2>Метод isFinite()</h2>
    <p>Глобальный метод <code class="w3-codespan">isFinite()</code> возвращает <code class="w3-codespan">false</code> если аргумент имеет значение <code class="w3-codespan">Infinity</code> или <code class="w3-codespan">NaN</code>.</p>
    <p>Иначе возвращается <code class="w3-codespan">true</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            isFinite(10/0);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // вернёт false<br>
            isFinite(10/1);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // вернёт true<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_es6_isfinite.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод isNaN()</h2>
    <p>Глобальный метод <code class="w3-codespan">isNaN()</code> возвращает <code class="w3-codespan">true</code> если аргумент имеет <code class="w3-codespan">NaN</code>. Иначе возвращает <code class="w3-codespan">false</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            isNaN("Hello");&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // вернёт true<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_es6_isnan.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_es5.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_2016.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>