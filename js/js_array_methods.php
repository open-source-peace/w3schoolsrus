<?php include '../include/head.php'; ?>

<title>JavaScript Методы массива. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Методы массива. Преобразование массивов в строки. Popping и Pushing. Сдвиг (шифтинг), смена, удаление элементов. Объединение, нарезка массива. Использование метода splice(). Автоматический toString(). Нахождение максимальных и минимальных значений. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript Методы массива</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_arrays.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_array_sort.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>Преобразование массивов в строки</h2>

    <p>JavaScript метод <code class="w3-codespan">toString()</code> преобразует массив в строку (разделенных запятыми) значений массива.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            document.getElementById(&quot;demo&quot;).innerHTML = fruits.toString();
        </div>
        <p>Результат:</p>
        <div class="w3-white w3-padding notranslate">
            Banana,Orange,Apple,Mango<br>
        </div>
        <a class="w3-btn w3-margin-bottom w3-margin-top" href="../jstryit/tryjs_array_tostring.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Метод <code class="w3-codespan">join()</code> также объединяет все элементы массива в строку.</p>
    <p>Он ведет себя так же, как <code class="w3-codespan">toString()</code>, но, кроме того, вы можете указать разделитель:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            document.getElementById(&quot;demo&quot;).innerHTML = fruits.join(&quot; * &quot;);
        </div>
        <p>Результат:</p>
        <div class="w3-white w3-padding notranslate">
            Banana * Orange * Apple * Mango</div>
        <a class="w3-btn w3-margin-bottom w3-margin-top" href="../jstryit/tryjs_array_join.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>Popping и Pushing</h2>
    <p>Когда вы работаете с массивами, легко удалять элементы и добавлять новые элементы.</p>
    <p>Вот что такое popping (извлечение) и pushing (выталкивание):</p>
    <p>Извлечение (popping) элементов <b>из</b> массива, или выталкивание (pushing) элементов <b>в</b> массив.</p>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Popping</h2>
    <p>Метод <code class="w3-codespan">pop()</code> удаляет последний элемент из массива:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            fruits.pop();&nbsp;&nbsp;// Удаляет &quot;Mango&quot; из fruits</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_pop.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Метод <code class="w3-codespan">pop()</code> возвращает значение, которое было &quot;извлечено&quot;:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            let x = fruits.pop();&nbsp;&nbsp;// x = &quot;Mango&quot;</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_pop_out.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Pushing</h2>
    <p>Метод <code class="w3-codespan">push()</code> добавляет новый элемент в массив (в конце):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            fruits.push(&quot;Kiwi&quot;);&nbsp;&nbsp; // Добавляет &quot;Kiwi&quot; к fruits</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_push.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Метод <code class="w3-codespan">push()</code> возвращает новую длину массива:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            let x = fruits.push(&quot;Kiwi&quot;);&nbsp;&nbsp; //&nbsp; x = 5</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_push_length.html" target="_blank">Попробуйте сами &raquo;</a></div>
    <hr>

    <h2>Сдвиг (шифтинг) элементов</h2>
    <p>Сдвиг (шифтинг) эквивалентен popping (выталкиванию), работая с первым элементом вместо последнего.</p>
    <p>Метод <code class="w3-codespan">shift()</code> удаляет первый элемент массива и &quot;сдвигает&quot; все остальные элементы с более низким индексом.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            fruits.shift();&nbsp;&nbsp;&nbsp;// Удаляет &quot;Banana&quot; из fruits
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_shift.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Метод <code class="w3-codespan">shift()</code> возвращает значение, которое было &quot;сдвинуто&quot;:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            let x = fruits.shift();&nbsp;&nbsp;&nbsp; // x = &quot;Banana&quot;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_shift_return.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Метод <code class="w3-codespan">unshift()</code> добавляет новый элемент в массив (в начале) и &quot;отменяет&quot; сдвиг старых элементов:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            fruits.unshift(&quot;Lemon&quot;);&nbsp;&nbsp;&nbsp;&nbsp;// Добавляет &quot;Lemon&quot; к fruits
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_unshift.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Метод <code class="w3-codespan">unshift()</code> возвращает новую длину массива.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            fruits.unshift(&quot;Lemon&quot;);&nbsp;&nbsp;&nbsp;
            // Возвращает 5
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_unshift_return.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Смена элементов</h2>
    <p>Доступ к элементам массива осуществляется по их <strong>порядковому номеру</strong>:</p>

    <div class="w3-panel w3-note">
        <p><strong>Индексы массива</strong> начинаются с 0:</p>
        <p>[0] - это первый элемент массива<br>[1] - это второй элемент массива<br>[2] - это третий элемент массива и т.д.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            fruits[0] = &quot;Kiwi&quot;; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // Изменяет первый элемент fruits на &quot;Kiwi&quot;</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_change.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Свойство <code class="w3-codespan">length</code> предоставляет простой способ добавить новый элемент в массив:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            fruits[fruits.length] = &quot;Kiwi&quot;;
            // Добавляет &quot;Kiwi&quot; к fruits</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_change_add.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Удаление элементов</h2>
    <p>Поскольку массивы JavaScript являются объектами, элементы можно удалять с помощью JavaScript оператора <code class="w3-codespan">delete</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            delete fruits[0];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // Изменяет первый элемент в fruits на <strong>undefined</strong></div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_delete.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-warning">
        <p>Использование <strong>delete</strong> может оставить undefined дыры в массиве. Вместо этого используйте pop() или shift().</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Объединение массива</h2>
    <p>Метод <code class="w3-codespan">splice()</code> может использоваться для добавления новых элементов в массив:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            fruits.splice(2, 0, &quot;Lemon&quot;, &quot;Kiwi&quot;);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryit.htmltryjs_array_splice" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Первый параметр (2) определяет позицию <b>где</b> новые элементы должны быть <b>добавлены</b> (вставлены).</p>
    <p>Второй параметр (0) определяет <b>сколько</b> элементов следует <b>удалить</b>.</p>
    <p>Остальные параметры (&quot;Lemon&quot; , &quot;Kiwi&quot;) определяют новые элементы, которые необходимо <b>добавить</b>.</p>
    <p>Метод <code class="w3-codespan">splice()</code> возвращает массив с удаленными элементами:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            fruits.splice(2, 2, &quot;Lemon&quot;, &quot;Kiwi&quot;);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_splice_return.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Использование splice() для удаления элементов</h2>
    <p>Благодаря умной настройке параметров вы можете использовать <code class="w3-codespan">splice()</code> для удаления элементов, не оставляя &quot;дыр&quot; в массиве:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            fruits.splice(0, 1);&nbsp;&nbsp;&nbsp;// Удаляет первый элемент
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_remove.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Первый параметр (0) определяет позицию, в которую должны быть <b>добавлены</b> (вставлены) новые элементы.</p>
    <p>Второй параметр (1) определяет <strong>сколько</strong> элементов необходимо <b>удалить</b>.</p>
    <p>Остальные параметры опущены. Новые элементы добавляться не будут.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Слияние (конкатенация, объединение) массивов</h2>
    <p>Метод <code class="w3-codespan">concat()</code> создает новый массив путем объединения (конкатенации) существующих массивов:</p>
    <div class="w3-example">
        <h3>Пример (Слияние двух массивов)</h3>
        <div class="w3-code notranslate jsHigh">
            const myGirls = [&quot;Cecilie&quot;, &quot;Lone&quot;];<br>
            const myBoys = [&quot;Emil&quot;, &quot;Tobias&quot;, &quot;Linus&quot;];<br>
            <br>
            // Объединяет (соединяет) myGirls и myBoys<br>
            const myChildren = myGirls.concat(myBoys);&nbsp;&nbsp;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_concat.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p>Метод <code class="w3-codespan">concat()</code> не изменяет существующие массивы. Он всегда возвращает новый массив.</p>
    </div>

    <p>Метод <code class="w3-codespan">concat()</code> может принимать любое количество аргументов массива:</p>
    <div class="w3-example">
        <h3>Пример (Слияние трёх массивов)</h3>
        <div class="w3-code notranslate jsHigh">
            const arr1 = [&quot;Cecilie&quot;, &quot;Lone&quot;];<br>
            const arr2 = [&quot;Emil&quot;, &quot;Tobias&quot;, &quot;Linus&quot;];<br>
            const arr3 = [&quot;Robin&quot;, &quot;Morgan&quot;];<br>
            const myChildren = arr1.concat(arr2, arr3);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_concat2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Метод <code class="w3-codespan">concat()</code> также может принимать строки в качестве аргументов:</p>
    <div class="w3-example">
        <h3>Пример (Слияние массива со значениями)</h3>
        <div class="w3-code notranslate jsHigh">
            const arr1 = [&quot;Emil&quot;, &quot;Tobias&quot;, &quot;Linus&quot;];<br>
            const myChildren = arr1.concat(&quot;Peter&quot;);&nbsp;</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_concat3.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Нарезка массива</h2>
    <p>Метод <code class="w3-codespan">slice()</code> вырезает часть массива в новый массив.</p>
    <p>В этом примере вырезается часть массива, начиная с элемента массива 1 (&quot;Orange&quot;):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Lemon&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            const citrus = fruits.slice(1);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_slice1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Метод <code class="w3-codespan">slice()</code> создает новый массив. Он не удаляет какие-либо элементы из исходного массива.</p>
    </div>

    <p>В этом примере вырезается часть массива, начиная с элемента массива 3 (&quot;Apple&quot;):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Lemon&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            const citrus = fruits.slice(3);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_slice3.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Метод <code class="w3-codespan">slice()</code> может принимать два аргумента, например <code class="w3-codespan">slice(1, 3)</code>.</p>
    <p>Затем метод выбирает элементы из начального аргумента и до конечного аргумента (но не включая его).</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Lemon&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            const citrus = fruits.slice(1, 3);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_slice.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Если конечный аргумент опущен, как в первых примерах, метод <code class="w3-codespan">slice()</code> вырезает остальную часть массива.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Lemon&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            const citrus = fruits.slice(2);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_slice2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Автоматический toString()</h2>
    <p>JavaScript автоматически преобразует массив в строку, разделенную запятыми, когда ожидается примитивное значение.</p>
    <p>Это всегда так, когда вы пытаетесь вывести массив.</p>
    <p>Эти два примера дадут одинаковый результат:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            document.getElementById(&quot;demo&quot;).innerHTML = fruits.toString();
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_tostring.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            document.getElementById(&quot;demo&quot;).innerHTML = fruits;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_automatic.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p>Все JavaScript объекты имеют метод toString().</p>
    </div>
    <hr>
    <h2>Нахождение максимальных и минимальных значений в массиве</h2>
    <p>Нет встроенных функций для поиска самого высокого или самого низкого значения в массиве JavaScript.</p>
    <p>Вы узнаете, как решить эту проблему, в следующей главе этого учебника на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <h2>Сортировка массивов</h2>
    <p>Сортировочные массивы рассматриваются в следующей главе этого учебника.</p>
    <hr>
    <h2>Полный справочник массивов</h2>
    <p>Для получения полной справки перейдите на <a href="../jsref/jsref_obj_array.php">Полный справочник JavaScript массивов</a>.</p>
    <p>Справочник содержит описания и примеры всех свойств и методов массива.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <form autocomplete="off" spellcheck="false" id="w3-exerciseform" action="https://www.w3schools.com/js/exercise_js.asp?filename=exercise_js_array_methods1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Используйте правильный метод Array, чтобы удалить <strong>последний элемент</strong> из <code class="w3-codespan">fruits</code> array.</p>
            <div class="exerciseprecontainer">
<pre>
const fruits = ["Banana", "Orange", "Apple"];
<input name="ex1" maxlength="12" style="width: 125px;">;
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_arrays.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_array_sort.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>