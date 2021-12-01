<?php include '../include/head.php'; ?>

<title>JavaScript Ключевое слово Const. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Ключевое слово Const. Невозможно переназначить. Когда использовать JavaScript const? Постоянные объекты и массивы. Область действия блока. Повторное объявление. Подъём (хостинг) Const. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Ключевое слово Const</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_let.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_operators.php">Next &#10095;</a>
    </div>

    <div class="w3-info">
        <p>Ключевое слово <code class="w3-codespan">const</code> было введено в <a href="js_es6.php">ES6 (2015)</a>.</p>
        <p>Переменные, определённые с помощью <code class="w3-codespan">const</code> не могут быть повторно объявлены.</p>
        <p>Переменные, определённые с помощью <code class="w3-codespan">const</code> нельзя переназначить.</p>
        <p>Переменные, определённые с помощью <code class="w3-codespan">const</code> имеют область действия блока.</p>
    </div>

    <h2>Невозможно переназначить</h2>
    <p>Переменную <code class="w3-codespan">const</code> нельзя переназначить:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const PI = 3.141592653589793;<br>
            PI = 3.14;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Это выдаст ошибку<br>
            PI = PI + 10;&nbsp;&nbsp; // Это также выдаст ошибку
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_const_value.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Должен быть назначен</h2>
    <p>JavaScript переменным <code class="w3-codespan">const</code> должно быть присвоено значение при их объявлении.</p>

    <div class="w3-example">
        <h3>Правильно</h3>
        <div class="w3-code notranslate jsHigh">
            const PI = 3.14159265359;<br>
        </div>
    </div>
    <div class="w3-example w3-pale-red">
        <h3>Неправильно</h3>
        <div class="w3-code notranslate jsHigh w3-border-red">
            const PI;<br>
            PI = 3.14159265359;<br>
        </div>
    </div>
    <div class="w3-note">
        <h2>Когда использовать JavaScript const?</h2>
        <p>Как правило, всегда объявляйте переменные с помощью <code class="w3-codespan">const</code>, если вы не знаете, что значение изменится.</p>
        <p>Всегда используйте <code class="w3-codespan">const</code> при объявлении:</p>
        <ul>
            <li>Новый массив</li>
            <li>Новый объект</li>
            <li>Новая функция</li>
            <li>Новый RegExp</li>
        </ul>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Постоянные объекты и массивы</h2>
    <p>Ключевое слово <code class="w3-codespan">const</code> немного вводит в заблуждение.</p>
    <p>Оно не определяет постоянное значение. Оно определяет постоянную ссылку на значение.</p>
    <p>Из-за этого вы НЕ МОЖЕТЕ:</p>
    <ul>
        <li>Переназначить постоянное значение</li>
        <li>Переназначить постоянный массив</li>
        <li>Переназначить постоянный объект</li>
    </ul>
    <p>Но вы МОЖЕТЕ:</p>
    <ul>
        <li>Изменить постоянный массив</li>
        <li>Изменить постоянный объект</li>
    </ul>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Постоянные массивы</h2>
    <p>Вы можете изменить элементы постоянного массива:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Вы можете создать постоянный массив:<br>
            const cars = [&quot;Saab&quot;, &quot;Volvo&quot;, &quot;BMW&quot;];<br><br>
            // Вы можете изменить элемент:<br>
            cars[0] = &quot;Toyota&quot;;<br><br>
            // Вы можете добавить элемент:<br>
            cars.push(&quot;Audi&quot;);<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_const_array.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Но вы НЕ можете переназначить массив:</p>

    <div class="w3-example  w3-pale-red">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh w3-border-red">
            const cars = [&quot;Saab&quot;, &quot;Volvo&quot;, &quot;BMW&quot;];<br>
            <br>
            cars = [&quot;Toyota&quot;, &quot;Volvo&quot;, &quot;Audi&quot;];&nbsp;&nbsp;&nbsp; // ERROR (ОШИБКА)
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_const_array_assign.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Постоянные объекты</h2>
    <p>Вы можете изменить свойства постоянного объекта:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Вы можете создать объект const:<br>
            const car = {type:"Fiat", model:"500", color:"white"};<br><br>
            // Вы можете изменить свойство:<br>
            car.color = "red";<br><br>
            // Вы можете добавить свойство:<br>
            car.owner = "Johnson";</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_const_object.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Но вы НЕ можете переназначить объект:</p>

    <div class="w3-example w3-pale-red">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh w3-border-red">
            const car = {type:"Fiat", model:"500", color:"white"};<br>
            <br>
            car = {type:"Volvo", model:"EX60", color:"red"};&nbsp;&nbsp;&nbsp; // ERROR (ОШИБКА)</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_const_object_assign.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Поддержка браузерами</h2>
    <p>Ключевое слово <code class="w3-codespan">const</code> не поддерживается в Internet Explorer 10 или более ранней версии.</p>
    <p>В следующей таблице определены первые версии браузера с полной поддержкой ключевого слова <code class="w3-codespan">const</code>:</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tbody><tr style="height:50px;">
                <th style="width:20%;" class="bsChrome" title="Chrome"></th>
                <th style="width:20%;" class="bsEdge" title="Edge"></th>
                <th style="width:20%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:20%;" class="bsSafari" title="Safari"></th>
                <th style="width:20%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td>Chrome 49</td>
                <td>IE 11 / Edge</td>
                <td>Firefox 36</td>
                <td>Safari 10</td>
                <td>Opera 36</td>
            </tr>
            <tr>
                <td>Mar, 2016</td>
                <td>Oct, 2013</td>
                <td>Feb, 2015</td>
                <td>Sep, 2016</td>
                <td>Mar, 2016</td>
            </tr></tbody>
        </table>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Область действия блока</h2>
    <p>Объявление переменной с помощью <code class="w3-codespan">const</code> аналогично <code class="w3-codespan">let</code> когда дело доходит <strong>Области действия блока</strong>.</p>
    <p>Переменная х, объявленная в блоке в этом примере, не совпадает с переменной x, объявленной вне блока:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const x = 10;<br>
            // Здесь x равно 10<br>
            <br>
            { <br>
            const x = 2;<br>
            // Здесь x равно 2<br>}<br>
            <br>
            // Здесь x равно 10
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_const.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Вы можете узнать больше об области действия блока в главе <a href="js_scope.php">JavaScript Область действия</a>.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Повторное объявление</h2>
    <p>Повторное объявление JavaScript переменной <code class="w3-codespan">var</code> разрешено в любом месте программы:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var x = 2;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Разрешено<br>
            var x = 3;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Разрешено<br>
            x = 4;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Разрешено</div>
    </div>
    <p>Повторное объявление существующей переменной <code class="w3-codespan">var</code> или <code class="w3-codespan">let</code> на <code class="w3-codespan">const</code> в той же области не разрешено:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var x = 2;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Разрешено<br>
            const x = 2;&nbsp;&nbsp;&nbsp;// Не разрешено<br>
            <br>
            {<br>
            let x = 2;&nbsp; &nbsp;&nbsp; // Разрешено<br>
            const x = 2;&nbsp;&nbsp;&nbsp;// Не разрешено<br>}<br>
            <br>
            {<br>
            const x = 2;&nbsp;&nbsp; // Разрешено<br>
            const x = 2;&nbsp;&nbsp;&nbsp;// Не разрешено<br>
            }
        </div>
    </div>
    <p>Переназначение существующей переменной <code class="w3-codespan">const</code>  в той же области действия не разрешено:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const x = 2;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Разрешено<br>
            x = 2;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Не разрешено<br>
            var x = 2;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Не разрешено<br>
            let x = 2;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Не разрешено<br>
            const x = 2;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Не разрешено<br>
            <br>{<br>&nbsp;
            const x = 2;&nbsp;&nbsp; // Разрешено<br>
            &nbsp; x = 2;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // Не разрешено<br>&nbsp; var x = 2;&nbsp;&nbsp;&nbsp;&nbsp;
            // Не разрешено<br>&nbsp; let x = 2;&nbsp;&nbsp;&nbsp;&nbsp;
            // Не разрешено<br>
            &nbsp;
            const x = 2;&nbsp;&nbsp;&nbsp;// Не разрешено<br>
            }<br>
        </div>
    </div>

    <p>Разрешено повторное объявление переменной с помощью <code class="w3-codespan">const</code> в другой области действия или в другом блоке:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const x = 2;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Разрешено<br><br>{<br>&nbsp;
            const x = 3;&nbsp;&nbsp; // Разрешено<br>
            }<br>
            <br>
            {<br>
            &nbsp;&nbsp;const x = 4;&nbsp;&nbsp;&nbsp;// Разрешено<br>
            }</div>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Подъём (хостинг) Const</h2>
    <p>Переменные, определенные с помощью <code class="w3-codespan">var</code> <strong>поднимаются</strong> вверх и могут быть инициализированы в любое время.</p>
    <p><b>Важно</b>: вы можете использовать переменную до её объявления:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Это OK:</p>
        <div class="w3-code notranslate jsHigh">
            carName = &quot;Volvo&quot;;<br>
            var carName;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_let_hoisting_var.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Если вы хотите узнать больше о подъёме, изучите главу <a href="js_hoisting.php">JavaScript Подъём</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.

    <p>Переменные, определенные с помощью <code class="w3-codespan">const</code> также поднимаются вверх, но не инициализируются.</p>
    <p>Важно: Использование переменной <code class="w3-codespan">const</code> перед её объявлением приведёт к ошибке <code class="w3-codespan">ReferenceError</code>:</p>

    <div class="w3-example w3-pale-red">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh w3-border-red">
            alert (carName);<br>
            const carName = &quot;Volvo&quot;;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_const_hoisting.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_let.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_operators.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>