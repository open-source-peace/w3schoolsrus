<?php include '../include/head.php'; ?>

<title>JavaScript Сортировка массива. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Сортировка массива. Обращение (реверс) массива. Числовая сортировка. Функция сравнения. В случайном порядке (рандомно). Метод Фишера Йейтса. Наибольшее (или наименьшее) значение. Использование Math.max() и Math.min() в массиве. Собственные методы. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Сортировка массивов</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_array_methods.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_array_iteration.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Сортировка массива</h2>
    <p>Метод <code class="w3-codespan">sort()</code> сортирует массив по алфавиту:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            fruits.sort();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Сортирует элементы из fruits
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_sort.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Обращение (реверс) массива</h2>
    <p>Метод <code class="w3-codespan">reverse()</code> меняет местами элементы в массиве.</p>
    <p>Вы можете использовать его для сортировки массива в порядке убывания:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            fruits.sort();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // Сначала сортируйте элементы fruits<br>
            fruits.reverse();&nbsp;&nbsp;&nbsp;&nbsp;
            // Затем измените порядок элементов</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_sort_reverse.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Числовая сортировка</h2>
    <p>По умолчанию функция <code class="w3-codespan">sort()</code> сортирует значения как <b>строки</b>.</p>
    <p>Это хорошо подходит для строк (&quot;Apple&quot; идёт перед &quot;Banana&quot;).</p>
    <p>Однако, если числа отсортированы как строки, &quot;25&quot; будет больше &quot;100&quot;, потому что &quot;2&quot; больше чем &quot;1&quot;.</p>
    <p>Из-за этого метод <code class="w3-codespan">sort()</code> будет давать неверный результат при сортировке чисел.</p>
    <p>Вы можете исправить это, предоставив <b>функцию сравнения</b>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const points = [40, 100, 1, 5, 25, 10];<br>
            points.sort(function(a, b){return a - b});
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_sort2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Используйте тот же приём для сортировки массива по убыванию:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const points = [40, 100, 1, 5, 25, 10];<br>
            points.sort(function(a, b){return b - a});
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_sort3.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Функция сравнения</h2>
    <p>Цель функции сравнения - определить альтернативный порядок сортировки.</p>
    <p>Функция сравнения должна возвращать отрицательное, нулевое или положительное значение в зависимости от аргументов:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            function(a, b){return a - b}
        </div>
    </div>
    <p>Когда функция <code class="w3-codespan">sort()</code> сравнивает два значения, она отправляет значения в функцию сравнения и сортирует значения в соответствии с возвращенным (отрицательным, нулевым, положительным) значением.</p>
    <p>Если результат отрицательный, <code class="w3-codespan">a</code> сортируется перед <code class="w3-codespan">b</code>.</p>
    <p>Если результат положительный, <code class="w3-codespan">b</code> сортируется перед <code class="w3-codespan">a</code>.</p>
    <p>Если результат равен 0, то порядок сортировки двух значений не изменяется.</p>
    <p><strong>Пример:</strong></p>
    <p>Функция сравнения сравнивает все значения в массиве, по два значения за раз <code class="w3-codespan">(a, b)</code>.</p>
    <p>При сравнении 40 и 100 метод <code class="w3-codespan">sort()</code> вызывает функцию сравнения (40, 100).</p>
    <p>Функция вычисляет 40 - 100 <code class="w3-codespan">(a - b)</code>, и поскольку результат отрицательный (-60), функция сортировки отсортирует 40 как значение меньше 100.</p>
    <p>Вы можете использовать этот фрагмент кода, чтобы поэкспериментировать с числовой и алфавитной сортировкой:</p>

    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;button onclick=&quot;myFunction1()&quot;&gt;Сортировать по алфавиту&lt;/button&gt;<br>&lt;button
            onclick=&quot;myFunction2()&quot;&gt;Сортировать по числу&lt;/button&gt;<br><br>&lt;p id=&quot;demo&quot;&gt;&lt;/p&gt;<br>
            <br>&lt;script&gt;<br>const points = [40, 100, 1, 5, 25, 10];<br>
            document.getElementById(&quot;demo&quot;).innerHTML = points;<br><br>function
            myFunction1() {<br>&nbsp;&nbsp;points.sort();<br>&nbsp;&nbsp;document.getElementById(&quot;demo&quot;).innerHTML
            = points;<br>}<br><br>function myFunction2() {<br>&nbsp; points.sort(function(a, b){return
            a - b});<br>&nbsp;&nbsp;document.getElementById(&quot;demo&quot;).innerHTML = points;<br>}<br>
            &lt;/script&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_sort_alpha.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Сортировка массива в случайном порядке (рандомно)</h2>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const points = [40, 100, 1, 5, 25, 10];<br>
            points.sort(function(a, b){return 0.5 - Math.random()});
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_array_sort_random.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>

    <h2>Метод Фишера Йейтса (Fisher Yates)</h2>
    <p>Приведенный выше пример <em>array</em>.sort() не является точным, некоторые числа предпочтительнее других.</p>
    <p>Самый популярный правильный метод, называемый перетасовкой Фишера Йейтса, был введен в науку о данных ещё в 1938 году!</p>
    <p>В JavaScript метод можно перевести вот так:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const points = [40, 100, 1, 5, 25, 10];<br><br>
            for (let i = points.length -1; i &gt; 0;
            i--) {<br>&nbsp; let j = Math.floor(Math.random() * i)<br>&nbsp; let k = points[i]<br>&nbsp;
            points[i] = points[j]<br>&nbsp; points[j] = k<br>}</div>
        <p><a class="w3-btn" href="../jstryit/tryjs_array_sort_random2.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Найдите наибольшее (или наименьшее) значение массива</h2>
    <p>Нет встроенных функций для поиска максимального или минимального значения в массиве.</p>
    <p>Однако после того, как вы отсортировали массив, вы можете использовать индекс для получения наибольшего и наименьшего значений.</p>
    <p>Сортировка по возрастанию:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const points = [40, 100, 1, 5, 25, 10];<br>
            points.sort(function(a, b){return a - b});<br>
            // теперь points[0] содержит наименьшее значение<br>
            // и points[points.length-1] содержит наибольшее значение</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_sort_low.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Сортировка по убыванию:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const points = [40, 100, 1, 5, 25, 10];<br>
            points.sort(function(a, b){return b - a});<br>
            // теперь points[0] содержит наибольшее значение<br>
            // и points[points.length-1] содержит наименьшее значение</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_sort_high.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note"><p><strong>Сортировка всего массива</strong> - очень неэффективный метод, если вы хотите найти только самое высокое (или самое низкое) значение.</p></div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Использование Math.max() в массиве</h2>
    <p>Вы можете использовать <code class="w3-codespan">Math.max.apply</code> чтобы найти наибольшее число в массиве:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            function myArrayMax(arr) {<br>
            &nbsp; return Math.max.apply(null, arr);<br>}
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_array_sort_math_max.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <p><code class="w3-codespan">Math.max.apply(null, [1, 2, 3])</code> эквивалентно <code class="w3-codespan">Math.max(1, 2, 3)</code>.</p>
    <hr>

    <h2>Использование Math.min() в массиве</h2>
    <p>Вы можете использовать <code class="w3-codespan">Math.min.apply</code> чтобы найти наименьшее число в массиве:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            function myArrayMin(arr) {<br>
            &nbsp;&nbsp;return Math.min.apply(null, arr);<br>}
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_array_sort_math_min.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <p><code class="w3-codespan">Math.min.apply(null, [1, 2, 3])</code> эквивалентно <code class="w3-codespan">Math.min(1, 2, 3)</code>.</p>
    <?php include '../include/addown_content.php'; ?>
    <h2>Собственные Min / Max JavaScript методы</h2>
    <p>Самым быстрым решением является использование метода &quot;home made&quot; (&quot;сделаного самим&quot;).</p>
    <p>Эта функция просматривает массив, сравнивая каждое значение с наибольшим найденным значением: </p>
    <div class="w3-example">
        <h3>Пример (Найти Max-значение)</h3>
        <div class="w3-code notranslate jsHigh">
            function myArrayMax(arr) {<br>
            &nbsp;&nbsp;let len = arr.length;<br>
            &nbsp;&nbsp;let max = -Infinity;<br>
            &nbsp;&nbsp;while (len--) {<br>
            &nbsp;&nbsp;&nbsp;
            if (arr[len] &gt; max) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            max = arr[len];<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>&nbsp;&nbsp;}<br>&nbsp; return max;<br>}</div>
        <p><a class="w3-btn" href="../jstryit/tryjs_array_sort_max.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <p>Эта функция просматривает массив, сравнивая каждое значение с наименьшим найденным значением:</p>
    <div class="w3-example">
        <h3>Пример (Найти Min-значение)</h3>
        <div class="w3-code notranslate jsHigh">
            function myArrayMin(arr) {<br>&nbsp;&nbsp;let len = arr.length;<br>&nbsp;&nbsp;let min = Infinity;<br>&nbsp;&nbsp;while (len--) {<br>&nbsp;&nbsp;&nbsp;
            if (arr[len] &lt; min) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            min = arr[len];<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;return min;<br>}</div>
        <p><a class="w3-btn" href="../jstryit/tryjs_array_sort_min.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Сортировка массивов объектов</h2>
    <p>Массивы JavaScript часто содержат объекты:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const cars = [<br>
            &nbsp;
            {type:&quot;Volvo&quot;, year:2016},<br>
            &nbsp;
            {type:&quot;Saab&quot;, year:2001},<br>
            &nbsp;
            {type:&quot;BMW&quot;, year:2010}<br>];</div>
    </div>
    <p>Даже если объекты имеют свойства разных типов данных, метод <code class="w3-codespan">sort()</code> можно использовать для сортировки массива.</p>
    <p>Решение состоит в том, чтобы написать функцию сравнения для сравнения значений свойств:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            cars.sort(function(a, b){return a.year - b.year});</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_sort_object1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Сравнение свойств строк немного сложнее:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            cars.sort(function(a, b){<br>
            &nbsp;&nbsp;let x = a.type.toLowerCase();<br>
            &nbsp;&nbsp;let y = b.type.toLowerCase();<br>
            &nbsp; if (x &lt; y) {return -1;}<br>&nbsp;
            if (x &gt; y) {return 1;}<br>&nbsp; return 0;<br>});</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_sort_object2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Полный справочник массивов</h2>
    <p>Для получение более полной информации о массивах посетите <a href="../jsref/jsref_obj_array.php">Полный справочник JavaScript массивов</a>.</p>
    <p>Справочник содержит описания и примеры всех свойств и методов массива.</p>
    <hr>

    <form autocomplete="off" spellcheck="false" id="w3-exerciseform" action="https://www.w3schools.com/js/exercise_js.asp?filename=exercise_js_array_sort1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Используйте корректный метод Array для сортировки массива <code class="w3-codespan">fruits</code> по алфавиту.</p>
            <div class="exerciseprecontainer">
<pre>
const fruits = ["Banana", "Orange", "Apple", "Kiwi"];
<input name="ex1" maxlength="13" style="width: 134px;">;
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_array_methods.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_array_iteration.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>