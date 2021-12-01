<?php include '../include/head.php'; ?>

<title>JavaScript Оператор For In. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Оператор For In. Оператор for in может перебирать свойства массива. Метод forEach() вызывает функцию callback. Примеры. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript For In</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_loop_for.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_loop_forof.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Цикл For In</h2>
    <p>JavaScript оператор <code class="w3-codespan">for in</code> перебирает свойства объекта:</p>

    <div class="w3-example">
        <h3>Синтаксис</h3>
        <div class="w3-code notranslate jsHigh">
            for (ключ в объекте) {<br>
            &nbsp; // <i>блок кода, который должен быть выполнен</i><br>
            }
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {fname:&quot;John&quot;, lname:&quot;Doe&quot;, age:25};<br><br>
            let text = &quot;&quot;;<br>for (let x in person) {<br>
            &nbsp; text += person[x];<br>
            }</div>
        <a target="_blank" href="../jstryit/tryjs_object_for_in.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <h2>Объяснение примера</h2>
    <ul>
        <li>Цикл <b>for in</b> выполняет итерацию по объекту <b>person</b></li>
        <li>Каждая итерация возвращает <b>ключ</b> (x)</li>
        <li>Ключ используется для доступа к <b>значению</b> ключа</li>
        <li>Значение ключа является <b>person[x]</b></li>
    </ul>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>For In по массивам</h2>
    <p>JavaScript оператор <code class="w3-codespan">for in</code> также может перебирать свойства массива:</p>

    <div class="w3-example">
        <h3>Синтаксис</h3>
        <div class="w3-code notranslate jsHigh">
            for (переменная в массиве) {<br>
            &nbsp;&nbsp;code<br>
            }
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const numbers = [45, 4, 9, 16, 25];<br><br>
            let txt = "";<br>
            for (let x in numbers) {<br>
            &nbsp; txt += numbers[x];<br>
            }<br>
        </div>
        <a target="_blank" href="../jstryit/tryjs_array_for_in.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Не используйте <b>for in</b> над массивом, если важен <b>порядок</b> индекса.</p>
        <p>Порядок индекса зависит от реализации, и значения массива могут быть недоступны в ожидаемом порядке.</p>
        <p>Если порядок важен, лучше использовать цикл <b>for</b>, цикл <b>for of</b> или <b>Array.forEach()</b>.</p>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Array.forEach()</h2>
    <p>Метод <code class="w3-codespan">forEach()</code> вызывает функцию callback (функцию обратного вызова) один раз для каждого элемента массива.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const numbers = [45, 4, 9, 16, 25];<br><br>
            let txt = &quot;&quot;;<br>
            numbers.forEach(myFunction);<br><br>
            function myFunction(value, index, array) {<br>
            &nbsp;
            txt += value;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_foreach.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Обратите внимание, что функция принимает 3 аргумента:</p>
    <ul>
        <li>Значение элемента</li>
        <li>Индекс элемента</li>
        <li>Сам массив</li>
    </ul>

    <p>В приведенном выше примере используется только параметр значения. Его можно переписать на:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const numbers = [45, 4, 9, 16, 25];<br><br>
            let txt = &quot;&quot;;<br>
            numbers.forEach(myFunction);<br><br>
            function myFunction(value) {<br>
            &nbsp;
            txt += value; <br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_foreach_2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_loop_for.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_loop_forof.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>