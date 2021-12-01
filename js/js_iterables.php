<?php include '../include/head.php'; ?>

<title>JavaScript Итерации. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Итерации (итерируемые объекты). Цикл For Of. Итерация по строке, по массиву, по набору, по карте. Примеры. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript Итерации</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_break.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_sets.php">Next &#10095;</a>
    </div>

    <div class="w3-info">
        <p><strong>Итерации</strong> - это <strong>итерируемые объекты</strong> (например, массивы).</p>
        <p>Доступ к итерациям можно получить с помощью простого и эффективного кода.</p>
        <p>Итерации можно повторять с помощью циклов <code class="w3-codespan">for..of</code>.</p>
    </div>

    <h2>Цикл For Of</h2>
    <p>JavaScript оператор <code class="w3-codespan">for..of</code> перебирает элементы итерируемого объекта.</p>
    <div class="w3-example">
        <h3>Синтаксис</h3>
        <div class="w3-code notranslate jsHigh">
            for (переменная итерируемого) {<br>
            &nbsp; // <i>блок кода, который должен быть выполнен</i><br>
            }<br>
        </div>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Итерация</h2>
    <p>Итерацию легко понять.</p>
    <p>Это просто означает цикл по последовательности элементов.</p>
    <p>Вот несколько простых примеров:</p>
    <ul>
        <li>Итерация по строке</li>
        <li>Итерация по массиву</li>
    </ul>
    <hr>

    <h2>Итерация по строке</h2>
    <p>Вы можете использовать цикл <code class="w3-codespan">for..of</code> для перебора элементов строки:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const name = "W3Schools";<br>
            <br>
            for (const x of name) {<br>
            &nbsp;&nbsp;// <i>блок кода, который должен быть выполнен</i><br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_iterate_string.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Итерация по массиву</h2>
    <p>Вы можете использовать цикл <code class="w3-codespan">for..of</code> для перебора элементов массива:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const letters = ["a","b","c"];<br>
            <br>
            for (const x of letters) {<br>
            &nbsp;&nbsp;// <i>блок кода, который должен быть выполнен</i><br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_iterate_array.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-note">
        <p>Вы можете узнать больше об итерациях в главе <a href="js_object_iterables.php">JS Итерируемые объекты</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Итерация по набору</h2>
    <p>Вы можете использовать цикл <code class="w3-codespan">for..of</code> для перебора элементов набора:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const letters = new Set(["a","b","c"]);<br>
            <br>
            for (const x of letters) {<br>
            &nbsp;&nbsp;// <i>блок кода, который должен быть выполнен</i><br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_iterate_set.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-note">
        <p>Наборы и карты рассматриваются в следующих главах.</p>
    </div>

    <h2>Итерация по карте</h2>
    <p>Вы можете использовать цикл <code class="w3-codespan">for..of</code> для перебора элементов карты:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = new Map([<br>
            &nbsp;&nbsp;["apples", 500],<br>
            &nbsp;&nbsp;["bananas", 300],<br>
            &nbsp;&nbsp;["oranges", 200]<br>
            ]);<br>
            <br>
            for (const x of fruits) {<br>
            &nbsp;&nbsp;// <i>блок кода, который должен быть выполнен</i><br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_iterate_map.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_break.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_sets.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>