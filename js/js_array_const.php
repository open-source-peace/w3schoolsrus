<?php include '../include/head.php'; ?>

<title>JavaScript Массив Const. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Массив Const. Массив, объявленный с помощью const, нельзя переназначить. Массивы не являются константами. Элементы можно переназначить. <?php include '../include/description.php'; ?>'>
<link rel="stylesheet" href="../styles/browserref.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Массив Const</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_array_iteration.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_dates.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>ECMAScript 2015 (ES6)</h2>
    <p>В 2015 году в JavaScript появилось новое важное ключевое слово: <code class="w3-codespan">const</code>.</p>
    <p>Стало обычной практикой объявлять массивы с помощью <code class="w3-codespan">const</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const cars = [&quot;Saab&quot;, &quot;Volvo&quot;, &quot;BMW&quot;];<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_const_array_use.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Невозможно переназначить</h2>
    <p>Массив, объявленный с помощью <code class="w3-codespan">const</code>, нельзя переназначить:</p>

    <div class="w3-example  w3-pale-red">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh w3-border-red">
            const cars = [&quot;Saab&quot;, &quot;Volvo&quot;, &quot;BMW&quot;];<br>
            cars = [&quot;Toyota&quot;, &quot;Volvo&quot;, &quot;Audi&quot;];&nbsp;&nbsp;&nbsp; // ERROR
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_const_array_assign.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Массивы не являются константами</h2>
    <p>Ключевое слово <code class="w3-codespan">const</code> немного вводит в заблуждение.</p>
    <p>Оно НЕ определяет постоянный массив. Оно определяет постоянную ссылку на массив.</p>
    <p>Из-за этого мы все ещё можем изменять элементы постоянного массива.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Элементы можно переназначить</h2>
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
    <hr>

    <h2>Поддержка браузерами</h2>
    <p>Ключевое слово <code class="w3-codespan">const</code> не поддерживается в Internet Explorer 10 или более ранних версиях.</p>
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
    <h2>Назначено при объявлении</h2>
    <p>JavaScript переменным <code class="w3-codespan">const</code> должно быть присвоено значение при их объявлении:</p>
    <p>Значение: массивы, объявленные с помощью <code class="w3-codespan">const</code> должны быть инициализированы при объявлении.</p>
    <p>Использование <code class="w3-codespan">const</code> без инициализации массива является синтаксической ошибкой:</p>

    <div class="w3-example w3-pale-red">
        <h3>Пример</h3>
        <p>Так это не работает:</p>
        <div class="w3-code notranslate jsHigh w3-border-red">
            const cars;<br>
            cars = ["Saab", "Volvo", "BMW"];<br>
        </div>
    </div>

    <p>Массивы, объявленные с помощью <code class="w3-codespan">var</code> можно инициализировать в любое время.</p>
    <p>Вы даже можете использовать массив до того, как он будет объявлен:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Это работает:</p>
        <div class="w3-code notranslate jsHigh">
            cars = ["Saab", "Volvo", "BMW"];<br>
            var cars;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_hoisting_var.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Область действия блока Const</h2>
    <p>Массив, объявленный с помощью <code class="w3-codespan">const</code> имеет <b>Область действия блока</b>.</p>
    <p>Массив, объявленный в блоке, не совпадает с массивом, объявленным вне блока:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const cars = ["Saab", "Volvo", "BMW"];<br>
            // Здесь cars[0] является "Saab"<br>
            {<br>
            &nbsp;&nbsp;const cars = ["Toyota", "Volvo", "BMW"];<br>
            &nbsp;&nbsp;// Здесь cars[0] является "Toyota"<br>
            }<br>
            // здесь cars[0] является <b>"Saab"</b>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_const.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Массив, объявленный с помощью <code class="w3-codespan">var</code> не имеет области действия блока:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var cars = ["Saab", "Volvo", "BMW"];<br>
            // Здесь cars[0] является "Saab"<br>
            {<br>
            &nbsp;&nbsp;var cars = ["Toyota", "Volvo", "BMW"];<br>
            &nbsp;&nbsp;// Здесь cars[0] является "Toyota"<br>
            }<br>
            // Здесь cars[0] является <b>"Toyota"</b>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_var.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Вы можете узнать больше об Области действия блока в главе <a href="js_scope.php">JavaScript Область действия</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <?php include '../include/addown_content.php'; ?>

    <h2>Повторное объявление массивов</h2>
    <p>Повторное объявление массива, объявленного с помощью <code class="w3-codespan">var</code>, разрешено в любом месте программы:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var cars = ["Volvo", "BMW"]; &nbsp;&nbsp;// Разрешено<br>
            var cars = ["Toyota", "BMW"]; &nbsp;// Разрешено<br>
            cars = ["Volvo", "Saab"]; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Разрешено<br>
        </div>
    </div>
    <p>Повторное объявление или переназначение массива в <code class="w3-codespan">const</code>, в той же области или в том же блоке не допускается:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var cars = ["Volvo", "BMW"];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; // Разрешено<br>
            const cars = ["Volvo", "BMW"];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;// Не разрешено<br>
            {<br>
            &nbsp;&nbsp;var cars = ["Volvo", "BMW"];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; // Разрешено<br>
            &nbsp;&nbsp;const cars = ["Volvo", "BMW"];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;// Не разрешено<br>
            }
        </div>
    </div>

    <p>Повторное объявление или переназначение существующего массива <code class="w3-codespan">const</code> в той же области или в том же блоке не допускается:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const cars = ["Volvo", "BMW"];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Разрешено<br>
            const cars = ["Volvo", "BMW"];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;// Не разрешено<br>
            var cars = ["Volvo", "BMW"];&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;// Не разрешено<br>
            cars = ["Volvo", "BMW"];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;// Не разрешено<br>
            <br>
            {<br>
            &nbsp;&nbsp;const cars = ["Volvo", "BMW"];&nbsp;&nbsp;&nbsp;&nbsp; // Разрешено<br>
            &nbsp;&nbsp;const cars = ["Volvo", "BMW"];&nbsp;&nbsp;&nbsp; &nbsp;// Не разрешено<br>
            &nbsp;&nbsp;var cars = ["Volvo", "BMW"];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;// Не разрешено<br>
            &nbsp;&nbsp;cars = ["Volvo", "BMW"];&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;// Не разрешено<br>
            }
        </div>
    </div>

    <p>Разрешено повторное объявление массива с помощью <code class="w3-codespan">const</code>, в другой области или в другом блоке:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const cars = ["Volvo", "BMW"];&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;// Разрешено<br>
            {<br>
            &nbsp;&nbsp;const cars = ["Volvo", "BMW"];&nbsp;&nbsp;&nbsp; &nbsp;// Разрешено<br>
            }<br>
            {<br>
            &nbsp;&nbsp;const cars = ["Volvo", "BMW"];&nbsp;&nbsp;&nbsp; &nbsp;// Разрешено<br>
            }
        </div>
    </div>
    <hr>
    <h2>Полный справочник массивов</h2>
    <p>Для получения полной справки перейдите на наш <a href="../jsref/jsref_obj_array.php">Полный справочник JavaScript массивов</a>.</p>
    <p>Справочник содержит описания и примеры всех свойств и методов массива.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_array_iteration.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_dates.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>