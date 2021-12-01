<?php include '../include/head.php'; ?>

<title>JavaScript Оператор Typeof. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Оператор Typeof. Примитивные и комплексные данные. Тип данных typeof. Свойство constructor. Undefined и Null. Пустые значения. Различие между Undefined и Null. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript typeof</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_maps.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_type_conversion.php">Next &#10095;</a>
    </div>
    <hr>
    <p>В JavaScript есть 5 различных типов данных, которые могут содержать значения:</p>
    <ul>
        <li><code class="w3-codespan">string</code></li>
        <li><code class="w3-codespan">number</code></li>
        <li><code class="w3-codespan">boolean</code></li>
        <li><code class="w3-codespan">object</code></li>
        <li><code class="w3-codespan">function</code></li>
    </ul>
    <p>Есть 6 типов объектов:</p>
    <ul>
        <li><code class="w3-codespan">Object</code></li>
        <li><code class="w3-codespan">Date</code></li>
        <li><code class="w3-codespan">Array</code></li>
        <li><code class="w3-codespan">String</code></li>
        <li><code class="w3-codespan">Number</code></li>
        <li><code class="w3-codespan">Boolean</code></li>
    </ul>
    <p>И 2 типа данных, которые не могут содержать значения:</p>
    <ul>
        <li><code class="w3-codespan">null</code></li>
        <li><code class="w3-codespan">undefined</code></li>
    </ul>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Оператор typeof</h2>
    <p>Вы можете использовать оператор <code class="w3-codespan">typeof</code> чтобы найти тип данных переменной JavaScript.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            typeof &quot;John&quot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // Возвращает &quot;string&quot; <br>
            typeof 3.14&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // Возвращает &quot;number&quot;<br>
            typeof NaN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // Возвращает &quot;number&quot;<br>
            typeof false&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // Возвращает &quot;boolean&quot;<br>
            typeof [1,2,3,4]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает
            &quot;object&quot;<br>
            typeof {name:'John', age:34}&nbsp;
            // Возвращает &quot;object&quot;<br>typeof new Date()&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // Возвращает &quot;object&quot;<br>typeof function () {} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Возвращает
            &quot;function&quot;<br>
            typeof myCar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // Возвращает &quot;undefined&quot; *<br>
            typeof null&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // Возвращает &quot;object&quot;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_typeof_all.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Пожалуйста, обратите внимание:</p>
    <ul>
        <li>Тип данных NaN - это число</li>
        <li>Тип данных массива - это объект</li>
        <li>Тип данных даты - это объект</li>
        <li>Тип данных null - это объект</li>
        <li>Тип данных неопределенной переменной: <strong>undefined</strong> *</li>
        <li>Тип данных переменной, которой не было присвоено значение, также <strong>undefined</strong> *</li>
    </ul>

    <div class="w3-panel w3-note"><p>Вы не можете использовать <code class="w3-codespan">typeof</code> чтобы определить, является ли объект JavaScript массивом (или датой).</p></div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Примитивные данные</h2>
    <p>Примитивное значение данных - это одно простое значение данных без дополнительных свойств и методов.</p>
    <p>Оператор <code class="w3-codespan">typeof</code> может возвращать один из этих примитивных типов:</p>
    <ul>
        <li><code class="w3-codespan">string</code></li>
        <li><code class="w3-codespan">number</code></li>
        <li><code class="w3-codespan">boolean</code></li>
        <li><code class="w3-codespan">undefined</code></li>
    </ul>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            typeof &quot;John&quot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает
            &quot;string&quot; <br>
            typeof 3.14&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает
            &quot;number&quot;<br>
            typeof true &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает
            &quot;boolean&quot;<br>typeof false&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает
            &quot;boolean&quot;<br>typeof x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // Возвращает &quot;undefined&quot; (если x не имеет значения)</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_datatypes_typeof_primitive.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Комплексные данные</h2>
    <p>Оператор <code class="w3-codespan">typeof</code> может возвращать один из двух сложных типов:</p>
    <ul>
        <li><code class="w3-codespan">function</code></li>
        <li><code class="w3-codespan">object</code></li>
    </ul>

    <p>Оператор <code class="w3-codespan">typeof</code> возвращает &quot;object&quot; для объектов, массивов и null.</p>
    <p>Оператор <code class="w3-codespan">typeof</code> не возвращает &quot;object&quot; для функций.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            typeof {name:'John', age:34}&nbsp;// Возвращает &quot;object&quot;<br>
            typeof [1,2,3,4]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // Возвращает &quot;object&quot; (не &quot;массив&quot;, см. примечание ниже)<br>
            typeof null&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Возвращает &quot;object&quot;<br>
            typeof function myFunc(){}&nbsp;&nbsp; // Возвращает &quot;function&quot;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_datatypes_typeof_complex.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Оператор <code class="w3-codespan">typeof</code> возвращает &quot;<code class="w3-codespan">object</code>&quot; для массивов, потому что в JavaScript массивы являются объектами.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Тип данных typeof</h2>
    <p>Оператор <code class="w3-codespan">typeof</code> не является переменной. Это оператор. Операторы (+ - * / ) не имеют типа данных.</p>
    <p>Но оператор <code class="w3-codespan">typeof</code> всегда <strong>возвращает строку</strong> (содержащую тип операнда).</p>
    <hr>

    <h2>Свойство constructor</h2>
    <p>Свойство <code class="w3-codespan">constructor</code> возвращает функцию конструктора для всех переменных JavaScript.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            &quot;John&quot;.constructor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // Возвращает function String()&nbsp; {[native code]}<br>
            (3.14).constructor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // Возвращает function Number()&nbsp; {[native code]}<br>
            false.constructor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает function Boolean() {[native code]}<br>
            [1,2,3,4].constructor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // Возвращает function Array()&nbsp;&nbsp; {[native code]}<br>
            {name:'John',age:34}.constructor&nbsp;
            // Возвращает function Object()&nbsp; {[native code]}<br>
            new Date().constructor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Возвращает function Date()&nbsp; &nbsp; {[native code]}<br>
            function () {}.constructor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает function Function(){[native code]}
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_constructor_all.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Вы можете проверить свойство конструктора, чтобы узнать, является ли объект <code class="w3-codespan">Array</code> (содержит слово &quot;Array&quot;):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            function isArray(myArray) {<br>
            &nbsp; return myArray.constructor.toString().indexOf(&quot;Array&quot;) &gt; -1;<br>
            }
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_array_isarray.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <p>Или, что ещё проще, вы можете проверить, является ли объект <strong>Array функцией</strong>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            function isArray(myArray) {<br>
            &nbsp; return myArray.constructor
            === Array;<br>
            }
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_type_isarray.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <p>Вы можете проверить свойство конструктора, чтобы узнать, является ли объект <code class="w3-codespan">Date</code> (содержит слово &quot;Date&quot;):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            function isDate(myDate) {<br>
            &nbsp; return myDate.constructor.toString().indexOf(&quot;Date&quot;) &gt; -1;<br>
            }
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_date_isdate.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <p>Или, что ещё проще, вы можете проверить, является ли объект <strong>Date функцией</strong>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            function isDate(myDate) {<br>
            &nbsp; return myDate.constructor === Date;<br>
            }
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_type_isdate.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Undefined</h2>
    <p>В JavaScript переменная без значения имеет значение <code class="w3-codespan">undefined</code>. Тип также является <code class="w3-codespan">undefined</code>.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let car;&nbsp;&nbsp;&nbsp; // Значение - undefined, тип - undefined</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_datatypes_undefined.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Любую переменную можно очистить, установив значение на <code class="w3-codespan">undefined</code>.
        Тип также будет <code class="w3-codespan">undefined</code>.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            car = undefined;&nbsp;&nbsp;&nbsp; // Значение - undefined, тип - undefined</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_datatypes_undefined_2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Пустые значения</h2>
    <p>Пустое значение не имеет ничего общего с <code class="w3-codespan">undefined</code>.</p>
    <p>Пустая строка имеет как допустимое значение, так и тип.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let car = &quot;&quot;;&nbsp;&nbsp;&nbsp; // Значение - &quot;&quot;, тип - &quot;string&quot;</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_datatypes_empty.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Null</h2>
    <p>В JavaScript <code class="w3-codespan">null</code> означает &quot;ничего&quot;. Это должно быть что-то, чего не существует.</p>
    <p>К сожалению, в JavaScript тип данных <code class="w3-codespan">null</code> является объектом.</p>

    <div class="w3-panel w3-note">
        <p>Вы можете считать ошибкой в JavaScript то, что <code class="w3-codespan">typeof null</code> является объектом. Должен быть <code class="w3-codespan">null</code>.</p>
    </div>

    <p>Вы можете очистить объект, установив для него <code class="w3-codespan">null</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let person = {firstName:&quot;John&quot;, lastName:&quot;Doe&quot;, age:50, eyeColor:&quot;blue&quot;};<br>person = null;&nbsp;&nbsp;&nbsp; //
            Теперь значение равно null, но тип по-прежнему является объектом<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_datatypes_null.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Вы также можете очистить объект, установив для него <code class="w3-codespan">undefined</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let person = {firstName:&quot;John&quot;, lastName:&quot;Doe&quot;, age:50, eyeColor:&quot;blue&quot;};<br>person = undefined;&nbsp;&nbsp; //
            Теперь и значение, и тип не определены<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_datatypes_undefined_1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Различие между Undefined и Null</h2>
    <p><code class="w3-codespan">undefined</code> и <code class="w3-codespan">null</code> равны по значению, но различаются по типу:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            typeof undefined&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // undefined<br>typeof null&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // object<br><br>null === undefined&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // false<br>null == undefined&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // true</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_datatypes_undefined_3.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_maps.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_type_conversion.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>