<?php include '../include/head.php'; ?>

<title>JavaScript Распространённые ошибки. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Распространённые ошибки. Случайное использование оператора присваивания. Ожидание нечёткого сравнения. Сложение & конкатенация. Непонимание чисел с плавающей запятой (флоатов). Разрыв строки. Неправильная установка точки с запятой. Нарушение инструкции о возврате. Доступ к массивам с помощью именованных индексов. Завершение определений запятой. Неопределенное (undefined) не равно нулю. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Распространённые ошибки</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_best_practices.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_performance.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">В этой главе указаны некоторые <strong>распространенные ошибки JavaScript</strong>.</p>
    <hr>
    <h2>Случайное использование оператора присваивания</h2>
    <p>Программы JavaScript могут генерировать неожиданные результаты, если программист случайно использует оператор присваивания (<code class="w3-codespan">=</code>), вместо оператора сравнения (<code class="w3-codespan">==</code>) в операторе if.</p>
    <p>Этот оператор <code class="w3-codespan">if</code> возвращает <code class="w3-codespan">false</code> (как и ожидалось), поскольку x не равно  10:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            let x = 0;<br>if (x == 10) </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_mistakes_equal_1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Этот оператор <code class="w3-codespan">if</code> возвращает <code class="w3-codespan">true</code> (возможно, не так, как ожидалось), потому что 10 является true:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            let x = 0;<br>if (x = 10)
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_mistakes_equal_2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Этот оператор <code class="w3-codespan">if</code> возвращает <code class="w3-codespan">false</code> (возможно, не так, как ожидалось), потому что 0 - это false:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            let x = 0;<br>if (x = 0)
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_mistakes_equal_3.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Присвоение всегда возвращает значение присваивания.</p>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Ожидание нечеткого сравнения</h2>
    <p>При обычном сравнении тип данных не имеет значения. Этот оператор <code class="w3-codespan">if</code> возвращает значение true:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            let x = 10;<br>
            let y = &quot;10&quot;;<br>if (x == y) </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_mistakes_loose_1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>В строгом сравнении тип данных имеет значение. Этот оператор <code class="w3-codespan">if</code> возвращает false:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            let x = 10;<br>
            let y = &quot;10&quot;;<br>if (x === y) </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_mistakes_loose_2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Часто забывают, что в операторах <code class="w3-codespan">switch</code> используется строгое сравнение:</p>
    <p>Этот <code class="w3-codespan">case switch</code> будет отображать предупреждение:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            let x = 10;<br>
            switch(x) {<br>&nbsp;&nbsp;case 10: alert(&quot;Hello&quot;);<br>
            } </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_mistakes_loose_3.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Этот <code class="w3-codespan">case switch</code> не будет отображать предупреждение:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            let x = 10;<br>switch(x) {<br>&nbsp; case &quot;10&quot;: alert(&quot;Hello&quot;);<br>
            } </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_mistakes_loose_4.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Непонятное сложение &amp; Конкатенация</h2>
    <p><strong>Сложение</strong> - это добавление <strong>чисел</strong>.</p>
    <p><strong>Конкатенация</strong> - это добавление <strong>строк</strong>.</p>
    <p>В JavaScript в обеих операциях используется один и тот же оператор <code class="w3-codespan">+</code>.</p>
    <p>Из-за этого добавление числа в качестве числа приведет к другому результату, чем добавление числа в виде строки:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            let x = 10;<br>
            x = 10 + 5;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Теперь x равен 15<br>
            <br>
            let y = 10;<br>
            y += &quot;5&quot;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Теперь y равен &quot;105&quot;</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_mistakes_add_1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>При добавлении двух переменных бывает трудно предвидеть результат:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            let x = 10;<br>
            let y = 5;<br>
            let z = x + y;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Теперь z равно 15<br><br>
            let x = 10;<br>
            let y = &quot;5&quot;;<br>
            let z = x + y;&nbsp;&nbsp;&nbsp; &nbsp;// Теперь z равно &quot;105&quot;</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_mistakes_add_2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Непонимание чисел с плавающей запятой (флоатов)</h2>
    <p>Все числа в JavaScript хранятся как 64-битные <strong>числа с плавающей запятой</strong> (флоаты).</p>
    <p>Все языки программирования, включая JavaScript, испытывают трудности с точными значениями с плавающей запятой:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            let x = 0.1;<br>
            let y = 0.2;<br>let z = x + y&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // результат z не будет 0.3</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_mistakes_floats.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Чтобы решить указанную выше проблему, помогает умножение и деление:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let z = (x * 10 + y * 10) / 10;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // z будет 0.3</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_mistakes_floats_ok.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Разрыв строки JavaScript</h2>
    <p>JavaScript позволит вам разбить оператор на две строки:</p>

    <div class="w3-example">
        <h3>Пример 1</h3>
        <div class="w3-code notranslate jsHigh">
            let x =<br>&quot;Hello World!&quot;;</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_mistakes_string_1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Но разбить выражение в середине строки не получится:</p>

    <div class="w3-example">
        <h3>Пример 2</h3>
        <div class="w3-code notranslate jsHigh">
            let x = &quot;Hello<br>World!&quot;;</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_mistakes_string_2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Необходимо использовать &quot;бэкслеш&quot; (обратную косую черту \ ), если надо разбить оператор на строку:</p>

    <div class="w3-example">
        <h3>Пример 3</h3>
        <div class="w3-code notranslate jsHigh">
            let x = &quot;Hello \<br>World!&quot;;</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_mistakes_string_3.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Неправильная установка точки с запятой</h2>
    <p>Из-за неправильной точки с запятой этот блок кода будет выполняться независимо от значения x:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            if (x == 19);<br>{<br>
            &nbsp; // блок кода &nbsp; <br>}</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_mistakes_semicolon.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Нарушение инструкции о возврате</h2>
    <p>По умолчанию в JavaScript оператор автоматически закрывается в конце строки.</p>
    <p>По этой причине эти два примера возвращают одинаковый результат:</p>
    <div class="w3-example">
        <h3>Пример 1</h3>
        <div class="w3-code notranslate jsHigh">
            function myFunction(a) {<br>
            &nbsp; let power = 10&nbsp; <br>&nbsp; return a * power<br>}<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_mistakes_return_1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-example">
        <h3>Пример 2</h3>
        <div class="w3-code notranslate jsHigh">
            function myFunction(a) {<br>
            &nbsp; let power = 10;<br>&nbsp; return a * power;<br>}<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_mistakes_return_2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/adinfeed.php'; ?>
    <p>JavaScript также позволяет разбить оператор на две строки.</p>
    <p>Из-за этого пример 3 также вернёт тот же результат:</p>

    <div class="w3-example">
        <h3>Пример 3</h3>
        <div class="w3-code notranslate jsHigh">
            function myFunction(a) {<br>
            &nbsp; let<br>&nbsp;&nbsp;power = 10;&nbsp; <br>&nbsp;&nbsp;return a * power;<br>}</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_mistakes_return_3.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Но что произойдет, если вы разделите оператор return на две строки, как здесь:</p>
    <div class="w3-example">
        <h3>Пример 4</h3>
        <div class="w3-code notranslate jsHigh">
            function myFunction(a) {<br>
            &nbsp; let<br>&nbsp; power = 10;&nbsp; <br>&nbsp; return<br>&nbsp; a * power;<br>}</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_mistakes_return_4.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Функция вернёт <code class="w3-codespan">undefined</code>!</p>
    <p>Почему? Потому что JavaScript подумал, что вы имели в виду следующее:</p>
    <div class="w3-example">
        <h3>Пример 5</h3>
        <div class="w3-code notranslate jsHigh">
            function myFunction(a) {<br>
            &nbsp; let<br>&nbsp; power = 10;&nbsp; <br>&nbsp;&nbsp;return;<br>&nbsp; a * power;<br>}</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_mistakes_return_5.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Пояснение</h2>
    <p>Если инструкция неполная, например:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">let</div>
    </div>
    <p>JavaScript попытается завершить инструкцию, прочитав следующую строку:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">power = 10;</div>
    </div>
    <p>Но поскольку эта инструкция является полной:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">return</div>
    </div>
    <p>JavaScript автоматически закроет её вот так:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            return;</div>
    </div>
    <p>Это происходит потому, что закрывающие (завершающие) операторы из точкой с запятой не являются обязательными в JavaScript.</p>
    <p>JavaScript закроет оператор возврата (return) в конце строки, потому что это полная инструкция.</p>

    <div class="w3-panel w3-warning"><p>Никогда не забывайте про оператор return.</p></div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Доступ к массивам с помощью именованных индексов</h2>
    <p>Многие языки программирования поддерживают массивы с именованными индексами.</p>
    <p>Массивы с именованными индексами называются ассоциативными массивами (или хэшами).</p>
    <p>JavaScript <b>не</b> поддерживает массивы с именованными индексами.</p>
    <p>В JavaScript <strong>массивы</strong> используют <strong>нумерованные индексы</strong>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const person = [];<br>
            person[0] = &quot;John&quot;;<br>
            person[1] = &quot;Doe&quot;;<br>
            person[2] = 46;<br>person.length;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // person.length вернёт 3<br>person[0];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // person[0] вернёт &quot;John&quot;</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_associative_1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>В JavaScript <strong>объекты</strong> используют <strong>именованные индексы</strong>.</p>
    <p>Если вы используете именованный индекс при доступе к массиву, JavaScript переопределит массив на стандартный объект.</p>
    <p>После автоматического переопределения методы и свойства массива будут давать неопределенные (undefined) или неверные (incorrect) результаты:</p>

    <div class="w3-example">
        <h3>Пример:</h3>
        <div class="w3-code notranslate jsHigh">
            const person = [];<br>
            person[&quot;firstName&quot;] = &quot;John&quot;;<br>
            person[&quot;lastName&quot;] = &quot;Doe&quot;;<br>
            person[&quot;age&quot;] = 46;<br>person.length;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // person.length вернёт 0<br>person[0];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // person[0] вернёт undefined</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_associative_2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Завершение определений запятой</h2>
    <p>Конечные запятые в определениях объектов и массивов допустимы в ECMAScript 5.</p>
    <div class="w3-example">
        <h3>Пример объекта:</h3>
        <div class="w3-code notranslate jsHigh">
            person = {firstName:&quot;John&quot;, lastName:&quot;Doe&quot;, age:46,}
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример массива:</h3>
        <div class="w3-code notranslate jsHigh">
            points = [40, 100, 1, 5, 25, 10,];</div>
    </div>
    <div class="w3-panel w3-warning">
        <p>ВНИМАНИЕ!!</p>
        <p>Internet Explorer 8 выйдет из строя.</p>
        <p>JSON не допускает использование конечных запятых.</p>
    </div>
    <div class="w3-example">
        <h3>JSON:</h3>
        <div class="w3-code notranslate jsHigh">
            person = {"firstName":&quot;John&quot;, "lastName":&quot;Doe&quot;, "age":46}
        </div>
    </div>
    <div class="w3-example">
        <h3>JSON:</h3>
        <div class="w3-code notranslate jsHigh">
            points = [40, 100, 1, 5, 25, 10];</div>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Неопределенное (undefined) не равно нулю</h2>
    <p>Объекты, переменные, свойства и методы JavaScript могут быть <code class="w3-codespan">undefined</code>.</p>
    <p>Кроме того, пустые объекты JavaScript могут иметь значение <code class="w3-codespan">null</code>.</p>
    <p>Это может немного затруднить проверку того, что объект пуст.</p>
    <p>Вы можете проверить, существует ли объект, проверив его тип <code class="w3-codespan">undefined</code>:</p>

    <div class="w3-example">
        <h3>Пример:</h3>
        <div class="w3-code notranslate jsHigh">
            if (typeof myObj === &quot;undefined&quot;)&nbsp;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_mistakes_object_undefined.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Но вы не можете проверить, является ли объект <code class="w3-codespan">null</code>, потому что это вызовет ошибку, если объект <code class="w3-codespan">undefined</code>:</p>

    <div class="w3-example">
        <h3>Неверно:</h3>
        <div class="w3-code notranslate jsHigh">
            if (myObj === null)&nbsp; </div>
    </div>
    <p>Чтобы решить эту проблему, вы должны проверить, не является ли объект <code class="w3-codespan">null</code>, и не является <code class="w3-codespan">undefined</code>.</p>
    <p>Но это всё равно может вызвать ошибку:</p>

    <div class="w3-example">
        <h3>Неверно:</h3>
        <div class="w3-code notranslate jsHigh">
            if (myObj !== null &amp;&amp; typeof myObj !== &quot;undefined&quot;)&nbsp; </div>
    </div>
    <p>Из-за этого вы должны проверить, не <code class="w3-codespan">undefined</code> прежде, чем вы сможете проверить не <code class="w3-codespan">null</code>:</p>

    <div class="w3-example">
        <h3>Верно:</h3>
        <div class="w3-code notranslate jsHigh">
            if (typeof myObj !== &quot;undefined&quot; &amp;&amp; myObj !== null)&nbsp;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_mistakes_object_null.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_best_practices.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_performance.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>