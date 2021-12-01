<?php include '../include/head.php'; ?>

<title>JavaScript Наборы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Наборы. Основные методы набора. Как создать новый набор. Методы new Set(), add(), forEach(), values(). <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript Наборы</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_iterables.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_maps.php">Next &#10095;</a>
    </div>

    <div class="w3-info">
        <p><strong>Набор JavaScript</strong> (Set) - это набор уникальных значений.</p>
        <p>Каждое значение может встречаться в наборе только один раз.</p>
    </div>

    <h2>Основные методы набора</h2>

    <table class="ws-table-all">
        <tr><th style="width: 120px">Метод</th><th>Описание</th></tr>
        <tr><td>new Set()</td><td>Создает новый набор</td></tr>
        <tr><td>add()</td><td>Добавляет новый элемент в Набор</td></tr>
        <tr><td>delete()</td><td>Удаляет элемент из набора</td></tr>
        <tr><td>has()</td><td>Возвращает true, если значение существует в наборе</td></tr>
        <tr><td>forEach()</td><td>Вызывает обратный вызов (callback) для каждого элемента в наборе</td></tr>
        <tr><td>values()</td><td>Возвращает итератор со всеми значениями в наборе</td></tr>
        <tr><th style="width: 120px">Свойство</th><th>Описание</th></tr>
        <tr><td>size</td><td>Возвращает числовые элементы в наборе</td></tr>
    </table>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Как создать набор</h2>
    <p>Вы можете создать набор JavaScript с помощью:</p>
    <ul>
        <li>Передача массива в <code class="w3-codespan">new Set()</code></li>
        <li>Создайте новый набор и используйте <code class="w3-codespan">add()</code> для добавления значений</li>
        <li>Создайте новый набор и используйте <code class="w3-codespan">add()</code> для добавления переменных</li>
    </ul>
    <hr>

    <h2>Метод new Set()</h2>
    <p>Передайте массив в конструктор <code class="w3-codespan">new Set()</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Создать набор<br>
            const letters = new Set(["a","b","c"]);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_set_create_array.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Создать набор и добавить значения:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Создать набор<br>
            const letters = new Set();<br>
            <br>
            // Добавить значения к набору<br>
            letters.add("a");<br>
            letters.add("b");<br>
            letters.add("c");<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_set_create_values.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <p>Создать набор и добавить переменные:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Создать набор<br>
            const letters = new Set();<br>
            <br>
            // Создать переменные<br>
            const a = "a";<br>
            const b = "b";<br>
            const c = "c";<br>
            <br>
            // Добавить переменные к набору<br>
            letters.add(a);<br>
            letters.add(b);<br>
            letters.add(c);<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_set_create.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод add()</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            letters.add("d");<br>
            letters.add("e");
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_set_add.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Если вы добавите одинаковые элементы, будет сохранен только первый:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            letters.add("a");<br>
            letters.add("b");<br>
            letters.add("c");<br>
            letters.add("c");<br>
            letters.add("c");<br>
            letters.add("c");<br>
            letters.add("c");<br>
            letters.add("c");<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_set_add_equals.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <?php include '../include/adinfeed.php'; ?>

    <h2>Метод forEach()</h2>
    <p>Метод <code class="w3-codespan">forEach()</code> вызывает функцию для каждого элемента набора:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Создать набор<br>
            const letters = new Set(["a","b","c"]);<br>
            <br>
            // Список всех элементов<br>
            let text = "";<br>
            letters.forEach (function(value) {<br>
            &nbsp;&nbsp;text += value;<br>
            })<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_set_foreach.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Метод values()</h2>
    <p>Метод <code class="w3-codespan">values()</code> возвращает новый объект итератора, содержащий все значения в наборе:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            letters.values()&nbsp;&nbsp;&nbsp;// Возвращает [объект Set Iterator]
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_set_values.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Теперь вы можете использовать объект Iterator для доступа к элементам:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Список всех элементов<br>
            let text = "";<br>
            for (const x of letters.values()) {<br>
            &nbsp;&nbsp;text += x;<br>
            }<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_set_iterator.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_iterables.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_maps.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>