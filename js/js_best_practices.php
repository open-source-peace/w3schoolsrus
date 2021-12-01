<?php include '../include/head.php'; ?>

<title>JavaScript Лучшие практики. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Лучшие практики. Всегда объявляйте локальные переменные. Объявления вверху. Инициализация переменных. Объявить объекты и массивы с помощью const. Не используйте new Object(). Автоматическое преобразование типов. Сравнение. Параметры по умолчанию. Использование eval(). <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Лучшие практики</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_conventions.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_mistakes.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Избегайте глобальных переменных, избегайте <code class="w3-codespan">new</code>, избегайте <code class="w3-codespan">==</code>, избегайте <code class="w3-codespan">eval()</code></p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Избегайте глобальных переменных</h2>
    <p>Сведите к минимуму использование глобальных переменных.</p>
    <p>Сюда входят все типы данных, объекты и функции.</p>
    <p>Глобальные переменные и функции могут быть перезаписаны другими скриптами.</p>
    <p>Вместо этого используйте локальные переменные и узнайте, как использовать <a href="js_function_closures.php">замыкания</a>.</p>
    <hr>

    <h2>Всегда объявляйте локальные переменные</h2>
    <p>Все переменные, используемые в функции, должны быть объявлены как <strong>локальные переменные</strong>.</p>
    <p>Локальные переменные <b>должны</b> быть объявлены с помощью ключевого слова <code class="w3-codespan">var</code> или ключевого слова <code class="w3-codespan">let</code>, иначе они станут глобальными переменными.</p>

    <div class="w3-panel w3-note"><p>Строгий режим не допускает необъявленных переменных.</p></div>
    <hr>
    <?php include '../include/addown_content.php'; ?>

    <h2>Объявления вверху</h2>
    <p>Хорошая практика программирования - помещать все объявления вверху каждого скрипта или функции.</p>
    <p>Это даёт:</p>
    <ul>
        <li>Более чистый код</li>
        <li>Обеспечивает единое место для поиска локальных переменных</li>
        <li>Упрощает избежание нежелательных (подразумеваемых) глобальных переменных</li>
        <li>Уменьшает вероятность нежелательного повторного объявления</li>
    </ul>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            // Объявить в начале<br>
            let firstName, lastName, price, discount, fullPrice;<br>
            <br>// Use later<br>firstName = &quot;John&quot;;<br>lastName = &quot;Doe&quot;;<br><br>price = 19.90;<br>
            discount = 0.10;<br><br>fullPrice = price - discount;</div>
    </div>
    <p>Это также касается переменных цикла:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            for (let i = 0; i &lt; 5; i++)
            {</div>
    </div>
    <hr>
    <?php include '../include/addown_content.php'; ?>

    <h2>Инициализация переменных</h2>
    <p>Рекомендуется инициализировать переменные при их объявлении.</p>
    <p>Это даёт:</p>
    <ul>
        <li>Более чистый код</li>
        <li>Обеспечивает единое место для инициализации переменных</li>
        <li>Избежание неопределенных значений</li>
    </ul>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            // Объявить и инициировать в начале<br>
            let firstName = &quot;&quot;,<br>
            let lastName = &quot;&quot;,<br>
            let price = 0,<br>
            let discount = 0,<br>
            let fullPrice = 0,<br>
            const myArray = [],<br>
            const myObject = {};</div>
    </div>

    <div class="w3-panel w3-note">
        <p>Инициализация переменных даёт представление о предполагаемом использовании (и предполагаемом типе данных).</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Объявить объекты с помощью <b>const</b></h2>
    <p>Объявление объектов с помощью const предотвратит случайное изменение типа:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let car = {type:"Fiat", model:"500", color:"white"};<br>
            car = "Fiat";&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Изменяет объект на строку<br>
        </div>
        <br>
        <div class="w3-code notranslate jsHigh">
            const car = {type:"Fiat", model:"500", color:"white"};<br>
            car = "Fiat";&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Невозможно<br>
        </div>
    </div>
    <hr>
    <?php include '../include/addown_content.php'; ?>

    <h2>Объявить массивы с помощью <b>const</b></h2>
    <p>Объявление массивов с помощью const предотвратит случайное изменение типа:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let cars = ["Saab", "Volvo", "BMW"];<br>
            cars = 3;&nbsp;&nbsp;&nbsp;&nbsp;// Изменяет массив на число<br>
        </div>
        <br>
        <div class="w3-code notranslate jsHigh">
            const cars = ["Saab", "Volvo", "BMW"];<br>
            cars = 3;&nbsp;&nbsp;&nbsp;&nbsp;// Невозможно<br>
        </div>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Не используйте new Object()</h2>
    <ul>
        <li>Используйте <code class="w3-codespan">&quot;&quot;</code> вместо <code class="w3-codespan">new String()</code></li>
        <li>Используйте <code class="w3-codespan">0</code> вместо <code class="w3-codespan">new Number()</code></li>
        <li>Используйте <code class="w3-codespan">false</code> вместо <code class="w3-codespan">new Boolean()</code></li>
        <li>Используйте <code class="w3-codespan">{}</code> вместо <code class="w3-codespan">new Object()</code></li>
        <li>Используйте <code class="w3-codespan">[]</code> вместо <code class="w3-codespan">new Array()</code></li>
        <li>Используйте <code class="w3-codespan">/()/</code> вместо <code class="w3-codespan">new RegExp()</code></li>
        <li>Используйте <code class="w3-codespan">function (){}</code> вместо <code class="w3-codespan">new Function()</code></li>
    </ul>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x1 = &quot;&quot;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // новая примитивная строка<br>
            let x2 = 0;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // новое примитивное число<br>
            let x3 = false;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // новое примитивное булево значение<br>
            const x4 = {};&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // новый объект<br>
            const x5 = [];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // новый объект массива<br>
            const x6 = /()/;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // новый объект regexp<br>
            const x7 = function(){};&nbsp;// новый объект функции</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_best_constructors.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/addown_content.php'; ?>

    <h2>Остерегайтесь автоматического преобразования типов</h2>
    <p>Код JavaScript не очень типизирован.</p>
    <p>Переменные могут содержать все типы данных.</p>
    <p>Переменная может изменять свой тип данных:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = &quot;Hello&quot;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// typeof x - это строка<br>
            x = 5;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// изменяет typeof x на число
        </div>
        <a target="_blank" href="../jstryit/tryjs_best_typeof.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Помните, что числа могут случайно быть преобразованы в строки или <code class="w3-codespan">NaN</code> (Not a Number - Не число).</p>

    <p>При выполнении математических операций JavaScript может преобразовывать числа в строки:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 5 + 7;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // x.valueOf() равно 12,&nbsp; typeof x - это число<br>
            let x = 5 + &quot;7&quot;;&nbsp;&nbsp;&nbsp;&nbsp; // x.valueOf() равно 57,&nbsp; typeof x - это строка<br>
            let x = &quot;5&quot; + 7;&nbsp;&nbsp;&nbsp;&nbsp; // x.valueOf() равно 57,&nbsp; typeof x - это строка<br>
            let x = 5 - 7; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // x.valueOf() равно -2,&nbsp; typeof x - это число<br>
            let x = 5 - &quot;7&quot;; &nbsp;&nbsp;&nbsp; // x.valueOf() равно -2,&nbsp; typeof x - это число<br>
            let x = &quot;5&quot; - 7; &nbsp;&nbsp;&nbsp; // x.valueOf() равно -2,&nbsp; typeof x - это число<br>
            let x = 5 - &quot;x&quot;;&nbsp; &nbsp;&nbsp; // x.valueOf() равно NaN, typeof x - это число
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_best_valueof.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Вычитание строки из строки не вызывает ошибки, но возвращает <code class="w3-codespan">NaN</code> (Not a Number):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            &quot;Hello&quot; - &quot;Dolly&quot; &nbsp;&nbsp; // вернёт NaN</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_best_string_op1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Используйте === Сравнение</h2>
    <p>Оператор сравнения <code class="w3-codespan">==</code> всегда преобразует (в соответствующие типы) перед сравнением.</p>
    <p>Оператор <code class="w3-codespan">===</code> принудительно сравнивает значения и тип:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            0 == &quot;&quot;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // true<br>
            1 == &quot;1&quot;; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // true<br>
            1 == true;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // true<br><br>
            0 === &quot;&quot;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // false<br>
            1 === &quot;1&quot;; &nbsp;&nbsp; &nbsp; // false<br>
            1 === true;&nbsp;&nbsp;&nbsp;&nbsp;
            // false
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_best_comparison.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/addown_content.php'; ?>

    <h2>Используйте значения параметров по умолчанию</h2>
    <p>Если функция вызывается с отсутствующим аргументом, значение отсутствующего аргумента устанавливается на <code class="w3-codespan">undefined</code> (неопределенное).</p>
    <p>Undefined (неопределенные) значения могут нарушить ваш код. Присваивать аргументам значения по умолчанию - хорошая привычка.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            function myFunction(x, y) {<br>
            &nbsp; if (y === undefined) {<br>
            &nbsp;&nbsp;&nbsp; y = 0;<br>
            &nbsp;  }<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_best_parameter_default.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <p><a href="js_es6.php">ECMAScript 2015</a> позволяет использовать параметры по умолчанию в определении функции:
        <div class="w3-code notranslate jsHigh">
            function (a=1, b=1) {&nbsp;/*код функции*/ }
        </div>
    </div>

    <p>Дополнительные сведения о параметрах и аргументах функции см. в разделе <a href="js_function_parameters.php">Параметры функции</a></p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Завершите переключатели настройками по умолчанию</h2>
    <p>Всегда завершайте операторы <code class="w3-codespan">switch</code> с помощью <code class="w3-codespan">default</code> (значения по умолчанию). Даже если вы думаете, что в этом нет необходимости.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            switch (new Date().getDay()) {<br>
            &nbsp;
            case 0:<br>
            &nbsp; &nbsp; day = &quot;Sunday&quot;;<br>
            &nbsp;&nbsp;&nbsp; break;<br>
            &nbsp;&nbsp;case 1:<br>
            &nbsp; &nbsp; day = &quot;Monday&quot;;<br>
            &nbsp;&nbsp;&nbsp; break;<br>
            &nbsp;&nbsp;case 2:<br>
            &nbsp; &nbsp; day = &quot;Tuesday&quot;;<br>
            &nbsp;&nbsp;&nbsp; break;<br>
            &nbsp;
            case 3:<br>
            &nbsp; &nbsp; day = &quot;Wednesday&quot;;<br>
            &nbsp;&nbsp;&nbsp; break;<br>
            &nbsp;
            case 4:<br>
            &nbsp;&nbsp;&nbsp; day = &quot;Thursday&quot;;<br>
            &nbsp;&nbsp;&nbsp; break;<br>
            &nbsp;&nbsp;case 5:<br>
            &nbsp; &nbsp; day = &quot;Friday&quot;;<br>
            &nbsp;&nbsp;&nbsp; break;<br>
            &nbsp;&nbsp;case 6:<br>
            &nbsp; &nbsp; day = &quot;Saturday&quot;;<br>
            &nbsp;&nbsp;&nbsp; break;<br>
            &nbsp;&nbsp;default:<br>&nbsp;&nbsp;&nbsp; day =
            &quot;Unknown&quot;;<br>}
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_break_switch.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/addown_content.php'; ?>
    <h2>Избегайте числовых, строковых и логических значений в качестве объектов</h2>
    <p>Всегда относитесь к числам, строкам или логическим значениям как к примитивным значениям. Не как к объектам.</p>
    <p>Объявление этих типов как объектов снижает скорость выполнения и вызывает неприятные побочные эффекты:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = &quot;John&quot;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
            let y = new String(&quot;John&quot;);<br>
            (x === y) // является false потому что x - это строка, а y - объект
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_best_object_string1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Или даже хуже:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = new String(&quot;John&quot;);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
            let y = new String(&quot;John&quot;);<br>
            (x == y) // является false, потому что нельзя сравнивать объекты
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_best_object_string2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>Избегайте использования eval()</h2>
    <p>Функция <code class="w3-codespan">eval()</code> используется для запуска текста как кода. Практически во всех случаях нет необходимости использовать его.</p>
    <p>Поскольку он позволяет запускать произвольный код, он также представляет проблему безопасности.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_conventions.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_mistakes.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>