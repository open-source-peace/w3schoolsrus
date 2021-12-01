<?php include '../include/head.php'; ?>

<title>Типы данных JavaScript. <?php include '../include/title_jslearn.php'; ?></title>
<meta name='description' content='Типы данных в JavaScript. Число. BigInt. Строка. Булевый (логический) тип. Null. Undefined. Объекты и символы. Оператор typeof. Задачи. <?php include '../include/description_jslearn.php'; ?>'>
<link rel='stylesheet' href='../styles/accordion.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_jslearn.php'; ?>
<?php include '../include/before_content_jslearn.php'; ?>

<article>
  <h1>JavaScript Типы данных</h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='variables.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='alert_prompt_confirm.php'>Next &#10095;</a>
  </div>
  <hr>
    <p>Значение в JavaScript всегда относится к данным определённого типа. Например, это может быть строка или число.</p>
    <p>Есть восемь основных типов данных в JavaScript. В этой главе мы рассмотрим их в общем, а в следующих главах поговорим подробнее о каждом.</p>
    <p>Переменная в JavaScript может содержать любые данные. В один момент там может быть строка, а в другой – число:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            // Не будет ошибкой<br>
            let message = "hello";<br>
            message = 123456;
        </div>
    </div>
    <p>Языки программирования, в которых такое возможно, называются <strong>&quot;динамически типизированными&quot;</strong>. Это значит, что типы данных есть, но переменные не привязаны ни к одному из них.</p>
    <hr>
    <h2>Число</h2>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            let n = 123;<br>
            n = 12.345;
        </div>
    </div>
    <p><em>Числовой тип данных</em> (<code>number</code>) представляет как целочисленные значения, так и числа с плавающей точкой.</p>
    <p>Существует множество операций для чисел, например, умножение <code>*</code>, деление <code>/</code>, сложение <code>+</code>, вычитание <code>-</code> и так далее.</p>
    <p>Кроме обычных чисел, существуют так называемые <strong>&quot;специальные числовые значения&quot;</strong>, которые относятся к этому типу данных: <code>Infinity</code>, <code>-Infinity</code> и <code>NaN</code>.</p>
    <ul>
        <li><code>Infinity</code> представляет собой математическую <a href="https://ru.wikipedia.org/wiki/%D0%91%D0%B5%D1%81%D0%BA%D0%BE%D0%BD%D0%B5%D1%87%D0%BD%D0%BE%D1%81%D1%82%D1%8C#%D0%92_%D0%BC%D0%B0%D1%82%D0%B5%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B5" title="Википедия">бесконечность</a> ∞. Это особое значение, которое больше любого числа.</li>
    </ul>
        <p>Мы можем получить его в результате деления на ноль:</p>
        <div class='w3-example'>
            <div class='w3-code notranslate jsHigh'>
                alert( 1 / 0 ); // Infinity
            </div>
        </div>
        <p>Или задать его явно:</p>
        <div class='w3-example'>
            <div class='w3-code notranslate jsHigh'>
                alert( Infinity ); // Infinity
            </div>
        </div>
    <ul>
        <li><code>NaN</code> означает вычислительную ошибку. Это результат неправильной или неопределённой математической операции, например:</li>
    </ul>
        <div class='w3-example'>
            <div class='w3-code notranslate jsHigh'>
                alert( "не число" / 2 ); // NaN, такое деление является ошибкой
            </div>
        </div>
        <p>Значение <code>NaN</code> &quot;прилипчиво&quot;. Любая операция с <code>NaN</code> возвращает <code>NaN</code>:</p>
        <div class='w3-example'>
            <div class='w3-code notranslate jsHigh'>
                alert( "не число" / 2 + 5 ); // NaN
            </div>
        </div>
        <p>Если где-то в математическом выражении есть <code>NaN</code>, то результатом вычислений с его участием будет <code>NaN</code>.</p>
    <div class='important'>
        <p><span class='info_sign'>&#x2139;</span><b>Математические операции – безопасны</b></p>
        <p>Математические операции в JavaScript &quot;безопасны&quot;. Мы можем делать что угодно: делить на ноль, обращаться с нечисловыми строками как с числами и т.д.</p>
        <p>Скрипт никогда не остановится с фатальной ошибкой (не &quot;умрёт&quot;). В худшем случае мы получим <code>NaN</code> как результат выполнения.</p>
    </div>
    <p>Специальные числовые значения относятся к типу &quot;число&quot;. Конечно, это не числа в привычном значении этого слова.</p>
    <p>Подробнее о работе с числами мы поговорим в главе <a href="number.php">Числа</a>.</p>
    <hr>
    <h2>BigInt</h2>
    <p>В JavaScript тип «number» не может содержать числа больше, чем <code>(2<sup>53</sup>-1)</code> (т. е. <code>9007199254740991</code>), или меньше, чем <code>-(2<sup>53</sup>-1)</code> для отрицательных чисел. Это техническое ограничение вызвано их внутренним представлением.</p>
    <p>Для большинства случаев этого достаточно. Но иногда нам нужны действительно гигантские числа, например, в криптографии или при использовании метки времени («timestamp») с микросекундами.</p>
    <p>Тип <code>BigInt</code> был добавлен в JavaScript, чтобы дать возможность работать с целыми числами произвольной длины.</p>
    <p>Чтобы создать значение типа <code>BigInt</code>, необходимо добавить <code>n</code> в конец числового литерала:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            // символ "n" в конце означает, что это BigInt<br>
            const bigInt = 1234567890123456789012345678901234567890n;
        </div>
    </div>
    <p>Так как <code>BigInt</code>-числа нужны достаточно редко, мы рассмотрим их в отдельной главе <a href="bigint.php">BigInt</a>. Ознакомьтесь с ней, когда вам понадобятся настолько большие числа.</p>
    <div class='important'>
        <p><span class='info_sign'>&#x2139;</span><b>Поддержка</b></p>
        <p>В данный момент <code>BigInt</code> поддерживается только в браузерах Firefox, Chrome, Edge и Safari, но не поддерживается в IE.</p>
    </div>
    <hr>
    <h2>Строка</h2>
    <p>Строка (<code>string</code>) в JavaScript должна быть заключена в кавычки.</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            let str = "Привет";<br>
            let str2 = 'Одинарные кавычки тоже подойдут';<br>
            let phrase = `Обратные кавычки позволяют встраивать переменные ${str}`;
        </div>
    </div>
    <p>В JavaScript существует три типа кавычек.</p>
    <ol>
        <li>Двойные кавычки: <code>&quot;Привет&quot;</code>.</li>
        <li>Одинарные кавычки: <code>'Привет'</code>.</li>
        <li>Обратные кавычки: <code>`Привет`</code>.</li>
    </ol>
    <p>Двойные или одинарные кавычки являются «простыми», между ними нет разницы в JavaScript.</p>
    <p>Обратные же кавычки имеют расширенную функциональность. Они позволяют нам встраивать выражения в строку, заключая их в <code>${…}</code>. Например:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            let name = "Иван";<br>
            <br>
            // Вставим переменную<br>
            alert( `Привет, ${name}!` ); // Привет, Иван!<br>
            <br>
            // Вставим выражение<br>
            alert( `результат: ${1 + 2}` ); // результат: 3
        </div>
    </div>
    <p>Выражение внутри <code>${…}</code> вычисляется, и его результат становится частью строки. Мы можем положить туда всё, что угодно: переменную <code>name</code>, или выражение <code>1 + 2</code>, или что-то более сложное.</p>
    <p>Обратите внимание, что это можно делать только в обратных кавычках. Другие кавычки не имеют такой функциональности встраивания!</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            alert( "результат: ${1 + 2}" ); // результат: ${1 + 2} (двойные кавычки ничего не делают)
        </div>
    </div>
    <p>Мы рассмотрим строки более подробно в главе <a href="string.php">Строки</a>.</p>
    <div class='important'>
        <p><span class='info_sign'>&#x2139;</span><b>Нет отдельного типа данных для одного символа.</b></p>
        <p>В некоторых языках, например C и Java, для хранения одного символа, например "<code>a</code>" или "<code>%</code>", существует отдельный тип. В языках C и Java это <code>char</code>.</p>
        <p>В JavaScript подобного типа нет, есть только тип <code>string</code>. Строка может содержать ноль символов (быть пустой), один символ или множество.</p>
    </div>
    <hr>
    <h2>Булевый (логический) тип</h2>
    <p>Булевый тип (<code>boolean</code>) может принимать только два значения: <code>true</code> (истина) и <code>false</code> (ложь).</p>
    <p>Такой тип, как правило, используется для хранения значений да/нет: <code>true</code> значит «да, правильно», а <code>false</code> значит «нет, не правильно».</p>
    <p>Например:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            let nameFieldChecked = true; // да, поле отмечено<br>
            let ageFieldChecked = false; // нет, поле не отмечено
        </div>
    </div>
    <p>Булевые значения также могут быть результатом сравнений:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            let isGreater = 4 > 1;<br>
            <br>
            alert( isGreater ); // true (результатом сравнения будет "да")
        </div>
    </div>
    <p>Мы рассмотрим булевые значения более подробно в главе <a href="logical_operators.php">Логические операторы</a>.</p>
    <hr>
    <h2>Значение «null»</h2>
    <p>Специальное значение <code>null</code> не относится ни к одному из типов, описанных выше.</p>
    <p>Оно формирует отдельный тип, который содержит только значение <code>null</code>:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            let age = null;
        </div>
    </div>
    <p>В JavaScript <code>null</code> не является «ссылкой на несуществующий объект» или «нулевым указателем», как в некоторых других языках.</p>
    <p>Это просто специальное значение, которое представляет собой «ничего», «пусто» или «значение неизвестно».</p>
    <p>В приведённом выше коде указано, что значение переменной <code>age</code> неизвестно.</p>
    <hr>
    <h2>Значение «undefined»</h2>
    <p>Специальное значение <code>undefined</code> также стоит особняком. Оно формирует тип из самого себя так же, как и <code>null</code>.</p>
    <p>Оно означает, что «значение не было присвоено».</p>
    <p>Если переменная объявлена, но ей не присвоено никакого значения, то её значением будет <code>undefined</code>:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            let age;<br>
            <br>
            alert(age); // выведет "undefined"
        </div>
    </div>
    <p>Технически мы можем присвоить значение <code>undefined</code> любой переменной:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            let age = 123;<br>
            <br>
            // изменяем значение на undefined<br>
            age = undefined;<br>
            <br>
            alert(age); // "undefined"
        </div>
    </div>
    <p>…Но так делать не рекомендуется. Обычно <code>null</code> используется для присвоения переменной «пустого» или «неизвестного» значения, а <code>undefined</code> – для проверок, была ли переменная назначена.</p>
    <hr>
    <h2>Объекты и символы</h2>
    <p>Тип <code>object</code> (объект) – особенный.</p>
    <p>Все остальные типы называются «примитивными», потому что их значениями могут быть только простые значения (будь то строка, или число, или что-то ещё). В объектах же хранят коллекции данных или более сложные структуры.</p>
    <p>Объекты занимают важное место в языке и требуют особого внимания. Мы разберёмся с ними в главе <a href="object.php">Объекты</a> после того, как узнаем больше о примитивах.</p>
    <p>Тип <code>symbol</code> (символ) используется для создания уникальных идентификаторов в объектах. Мы упоминаем здесь о нём для полноты картины, изучим этот тип после объектов.</p>
    <hr>
    <h2>Оператор typeof</h2>
    <p>Оператор <code>typeof</code> возвращает тип аргумента. Это полезно, когда мы хотим обрабатывать значения различных типов по-разному или просто хотим сделать проверку.</p>
    <p>У него есть две синтаксические формы:</p>
    <ol>
        <li>Синтаксис оператора: <code>typeof x</code>.</li>
        <li>Синтаксис функции: <code>typeof(x)</code>.</li>
    </ol>
    <p>Другими словами, он работает со скобками или без скобок. Результат одинаковый.</p>
    <p>Вызов <code>typeof x</code> возвращает строку с именем типа:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            typeof undefined // "undefined"<br>
            <br>
            typeof 0 // "number"<br>
            <br>
            typeof 10n // "bigint"<br>
            <br>
            typeof true // "boolean"<br>
            <br>
            typeof "foo" // "string"<br>
            <br>
            typeof Symbol("id") // "symbol"<br>
            <br>
            typeof Math // "object"  (1)<br>
            <br>
            typeof null // "object"  (2)<br>
            <br>
            typeof alert // "function"  (3)
        </div>
    </div>
    <p>Последние три строки нуждаются в пояснении:</p>
    <ol>
        <li><code>Math</code> — это встроенный объект, который предоставляет математические операции и константы. Мы рассмотрим его подробнее в главе <a href="number.php">Числа</a>. Здесь он служит лишь примером объекта.</li>
        <li>Результатом вызова <code>typeof null</code> является <code>&quot;object&quot;</code>. Это официально признанная ошибка в <code>typeof</code>, ведущая начало с времён создания JavaScript и сохранённая для совместимости. Конечно, <code>null</code> не является объектом. Это специальное значение с отдельным типом.</li>
        <li>Вызов <code>typeof alert</code> возвращает <code>&quot;function&quot;</code>, потому что <code>alert</code> является функцией. Мы изучим функции в следующих главах, где заодно увидим, что в JavaScript нет специального типа «функция». Функции относятся к объектному типу. Но <code>typeof</code> обрабатывает их особым образом, возвращая <code>&quot;function&quot;</code>. Так тоже повелось от создания JavaScript. Формально это неверно, но может быть удобным на практике.</li>
    </ol>
    <hr>
    <h2>Резюме</h2>
    <p>В JavaScript есть 8 основных типов.</p>
    <ul>
        <li><code>number</code> для любых чисел: целочисленных или чисел с плавающей точкой; целочисленные значения ограничены диапазоном <code>±(2<sup>53</sup>-1)</code>.</li>
        <li><code>bigint</code> для целых чисел произвольной длины.</li>
        <li><code>string</code> для строк. Строка может содержать ноль или больше символов, нет отдельного символьного типа.</li>
        <li><code>boolean</code> для <code>true</code>/<code>false</code>.</li>
        <li><code>null</code> для неизвестных значений – отдельный тип, имеющий одно значение <code>null</code>.</li>
        <li><code>undefined</code> для неприсвоенных значений – отдельный тип, имеющий одно значение <code>undefined</code>.</li>
        <li><code>object</code> для более сложных структур данных.</li>
        <li><code>symbol</code> для уникальных идентификаторов.</li>
    </ul>
    <p>Оператор <code>typeof</code> позволяет нам увидеть, какой тип данных сохранён в переменной.</p>
    <ul>
        <li>Имеет две формы: <code>typeof x</code> или <code>typeof(x)</code>.</li>
        <li>Возвращает строку с именем типа. Например, <code>&quot;string&quot;</code>.</li>
        <li>Для <code>null</code> возвращается <code>&quot;object&quot;</code> – это ошибка в языке, на самом деле это не объект.</li>
    </ul>
    <p>В следующих главах мы сконцентрируемся на примитивных значениях, а когда познакомимся с ними, перейдём к объектам.</p>
    <hr>
    <h2>&#9989; Задачи</h2>
    <h3>Шаблонные строки</h3>
    <p>Что выведет этот скрипт?</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            let name = "Ilya";<br>
            <br>
            alert( `hello ${1}` ); // ?<br>
            <br>
            alert( `hello ${"name"}` ); // ?<br>
            <br>
            alert( `hello ${name}` ); // ?
        </div>
    </div>
    <button class="accordion">Решение <i class='fa fa-caret-down'></i></button>
    <div class="panel">
        <div class='important'>
            <p>Обратные кавычки позволяют вставить выражение внутри <code>${...}</code> в строку.</p>
            <div class='w3-code notranslate jsHigh'>
                let name = "Ilya";<br>
                <br>
                // выражение - число 1<br>
                alert( `hello ${1}` ); // hello 1<br>
                <br>
                // выражение - строка "name"<br>
                alert( `hello ${"name"}` ); // hello name<br>
                <br>
                // выражение - переменная, вставим её в строку<br>
                alert( `hello ${name}` ); // hello Ilya
            </div>
        </div>
    </div>

    <script src="../scripts/accordion.js"></script>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='variables.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='alert_prompt_confirm.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
