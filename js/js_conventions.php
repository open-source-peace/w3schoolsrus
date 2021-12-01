<?php include '../include/head.php'; ?>

<title>JavaScript Гид по стилю. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Гид по стилю. Соглашения о кодировании JavaScript. Имена переменных. Пространства (пробелы) вокруг операторов. Отступы в коде. Правила инструкций. Правила объекта. Длина строки. Соглашения об именах. Загрузка JavaScript в HTML. Доступ к HTML-элементам. Расширения файлов. Имена файлов в нижнем регистре. Производительность. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript Гид по стилю</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_debugging.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_best_practices.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Всегда используйте одни и те же <strong>соглашения о кодировании</strong> для всех своих проектов JavaScript.</p>
    <hr>

    <h1>Соглашения о кодировании JavaScript</h1>
    <p><strong>Соглашения о кодировании</strong> - это <strong>рекомендации по стилю программирования</strong>. Обычно они содержат:</p>
    <ul>
        <li>Правила именования и объявления для переменных и функций</li>
        <li>Правила использования пробелов, отступов и комментариев</li>
        <li>Практика и принципы программирования</li>
    </ul>
    <?php include '../include/adinfeed.php'; ?>
    <p>Правила кодирования <strong>безопасное качество</strong>:</p>
    <ul>
        <li>Улучшают читаемость кода</li>
        <li>Упрощают обслуживание кода</li>
    </ul>
    <p>Соглашения о кодировании могут быть задокументированными правилами, которым должны следовать команды, или просто вашей индивидуальной практикой кодирования.</p>

    <div class="w3-panel w3-note">
        <p>На этой странице описаны общие соглашения о коде JavaScript, используемые W3Schools. <br>Вам также следует прочитать следующую главу &quot;Лучшие практики&quot; и узнать, как избежать ошибок при программировании.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Имена переменных</h2>
    <p>В W3schools мы используем <b>camelCase</b> (верблюжийРегистр) для имен идентификаторов (переменных и функций).</p>
    <p>Все имена начинаются с <b>буквы</b>.</p>
    <p>Внизу страницы вы найдете более широкое обсуждение правил именования.</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            firstName = &quot;John&quot;;<br>lastName = &quot;Doe&quot;;<br><br>price = 19.90;<br>
            tax = 0.20;<br><br>fullPrice = price + (price * tax);</div>
    </div>
    <hr>

    <h2>Пространства (пробелы) вокруг операторов</h2>
    <p>Всегда ставьте пробелы вокруг операторов ( = + - * / ) и после запятых:</p>

    <div class="w3-example">
        <h3>Примеры:</h3>
        <div class="w3-code notranslate jsHigh">
            let x = y + z;<br>
            const myArray = [&quot;Volvo&quot;, &quot;Saab&quot;,
            &quot;Fiat&quot;];</div>
    </div>
    <hr>
    <?php include '../include/addown_content.php'; ?>

    <h2>Отступы в коде</h2>
    <p>Всегда используйте 2 пробела для отступов кодовых блоков:</p>
    <div class="w3-example">
        <h3>Функции:</h3>
        <div class="w3-code notranslate jsHigh">
            function toCelsius(fahrenheit) {<br>
            &nbsp; return (5 / 9) * (fahrenheit - 32);<br>
            }
        </div>
    </div>

    <div class="w3-panel w3-warning"><p>Не используйте табы (табуляторы) для отступов. Разные редакторы по-разному интерпретируют табы.</p></div>
    <hr>

    <h2>Правила инструкций</h2>
    <p>Общие правила для простых инструкций:</p>

    <ul>
        <li>Всегда заканчивайте простую инструкцию точкой с запятой.</li>
    </ul>

    <div class="w3-example">
        <h3>Примеры:</h3>
        <div class="w3-code notranslate jsHigh">
            const cars = [&quot;Volvo&quot;, &quot;Saab&quot;,
            &quot;Fiat&quot;];<br><br>
            const person = {<br>&nbsp; firstName: &quot;John&quot;,<br>&nbsp;
            lastName: &quot;Doe&quot;,<br>&nbsp; age: 50,<br>&nbsp; eyeColor:
            &quot;blue&quot;<br>};</div>
    </div>
    <?php include '../include/adinfeed.php'; ?>
    <p>Общие правила для сложных (составных) инструкций:</p>
    <ul>
        <li>Поместите открывающую скобку в конец первой строки</li>
        <li>Используйте один пробел перед открывающей скобкой</li>
        <li>Поместите закрывающую скобку в новую строку без начальных пробелов</li>
        <li>Не заканчивайте сложную инструкцию точкой с запятой</li>
    </ul>
    <div class="w3-example">
        <h3>Функции:</h3>
        <div class="w3-code notranslate jsHigh">
            function toCelsius(fahrenheit) {<br>
            &nbsp;&nbsp;return (5 / 9) * (fahrenheit - 32);<br>
            }
        </div>
    </div>

    <div class="w3-example">
        <h3>Циклы:</h3>
        <div class="w3-code notranslate jsHigh">
            for (let i = 0; i &lt; 5; i++) {<br>&nbsp;&nbsp;x += i;<br>}</div>
    </div>

    <div class="w3-example">
        <h3>Условия:</h3>
        <div class="w3-code notranslate jsHigh">
            if (time &lt; 20) {<br>&nbsp;&nbsp;greeting = &quot;Good day&quot;;<br>} else {<br>
            &nbsp;greeting = &quot;Good evening&quot;;<br>}</div>
    </div>
    <hr>
    <?php include '../include/addown_content.php'; ?>

    <h2>Правила объекта</h2>
    <p>Общие правила для определений объектов:</p>

    <ul>
        <li>Разместите открывающую скобку на той же строке, что и имя объекта</li>
        <li>Используйте двоеточие плюс один пробел между каждым свойством и его значением</li>
        <li>Используйте кавычки для строковых значений, а не для числовых значений</li>
        <li>Не ставьте запятую после последней пары &quot;свойство-значение&quot; </li>
        <li>Поместите закрывающую скобку в новую строку без пробелов в начале</li>
        <li>Всегда заканчивайте определение объекта точкой с запятой</li>
    </ul>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh" style="color: #404040">
            const person = {<br>&nbsp; firstName: &quot;John&quot;,<br>&nbsp;
            lastName: &quot;Doe&quot;,<br>&nbsp; age: 50,<br>&nbsp; eyeColor:
            &quot;blue&quot;<br>};</div>
    </div>

    <p>Короткие объекты могут быть записаны сжатыми в одну строку, используя только пробелы между свойствами, например:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh" style="color: #404040">
            const person = {firstName:&quot;John&quot;, lastName:&quot;Doe&quot;, age:50, eyeColor:&quot;blue&quot;};</div>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Длина строки &lt; 80</h2>
    <p>Для удобства чтения избегайте строк длиной более 80 символов.</p>
    <p>Если оператор JavaScript не умещается в одной строке, лучше всего его разорвать после оператора или запятой.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            document.getElementById(&quot;demo&quot;).innerHTML =<br>
            &quot;Hello Dolly.&quot;;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_line_break.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/addown_content.php'; ?>

    <h2>Соглашения об именах</h2>
    <p>Всегда используйте одно и то же соглашение об именах для всего кода. Например:</p>
    <ul>
        <li>Имена переменных и функций записываются как <b>camelCase</b> (верблюжийРегистр)</li>
        <li>Глобальные переменные, записываются в <b>ВЕРХНЕМ РЕГИСТРЕ</b> (мы этого не делаем, но это довольно часто)</li>
        <li>Константы (например, PI) записываются в <b>ВЕРХНЕМ РЕГИСТРЕ</b></li>
    </ul>
    <p>Что следует использовать в именах переменных: <b>hyp-hens</b>, <b>camelCase</b> или <b>under_scores</b>?</p>
    <p>Программисты часто обсуждают этот вопрос. Ответ зависит от того, кого вы спрашиваете:</p>
    <p><strong>Дефисы в HTML и CSS:</strong></p>
    <p>Атрибуты HTML5 могут начинаться с data-, например: data-quantity (количество данных), data-price (цена данных) и т.д.</p>
    <p>CSS использует дефисы в именах свойств, например: font-size (размер шрифта).</p>

    <div class="w3-panel w3-warning"><p>Дефисы могут быть ошибочно приняты за попытки вычитания. В именах JavaScript нельзя использовать дефис.</p></div>

    <p><strong>Подчеркивание:</strong></p>
    <p>Многие программисты предпочитают использовать символы подчеркивания (date_of_birth), особенно в базах данных SQL.</p>
    <p>Подчеркивание часто используется в документации PHP.</p>
    <p><strong>PascalCase:</strong></p>
    <p>Программисты на C часто предпочитают PascalCase.</p>
    <p><strong>camelCase:</strong></p>
    <p>camelCase используется самим JavaScript, jQuery и другими библиотеками JavaScript.</p>

    <div class="w3-panel w3-warning"><p>Не начинайте имена со знака $. Это приведет к конфликту со многими именами библиотек JavaScript.</p></div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Загрузка JavaScript в HTML</h2>
    <p>Используйте простой синтаксис для загрузки внешних скриптов (атрибут type не нужен):</p>

    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;script src=&quot;myscript.js&quot;&gt;&lt;/script&gt;</div>
    </div>
    <hr>
    <?php include '../include/addown_content.php'; ?>

    <h2>Доступ к HTML-элементам</h2>
    <p>Последствие использования &quot;неопрятного&quot; HTML стиля могут привести к ошибкам JavaScript.</p>
    <p>Эти два оператора JavaScript дадут разные результаты:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            const obj = getElementById(&quot;Demo&quot;)<br><br>
            const obj = getElementById(&quot;demo&quot;)
        </div>
    </div>
    <p>Если возможно, используйте то же соглашение об именах (как JavaScript) в HTML.</p>
    <p>Посетите учебник по <a href="../html/html5_syntax.php">HTML Стилю</a>.</p>
    <hr>

    <h2>Расширения файлов</h2>
    <p>HTML файлы должны иметь расширение <em>.html</em>, (также допускается <i>.htm</i>).
    <p>CSS файлы должны иметь расширение <em>.css</em>.</p>
    <p>JavaScript файлы должны иметь расширение <em>.js</em>.</p>
    <hr>

    <h2>Используйте имена файлов в нижнем регистре</h2>
    <p>Большинство веб-серверов (Apache, Unix) чувствительны к регистру в именах файлов:</p>
    <p><i>london.jpg</i> недоступен как <i>London.jpg</i>.</p>
    <p>Другие веб-серверы (Microsoft, IIS) не чувствительны к регистру:</p>
    <p><i>london.jpg</i> можно открыть как <i>London.jpg</i> или <i>london.jpg</i>.</p>
    <p>Если вы используете сочетание верхнего и нижнего регистра, вы должны быть предельно последовательны.</p>
    <p>Если вы перейдете с сервера без учета регистра на сервер с учетом регистра, даже небольшие ошибки могут нарушить работу вашего веб-сайта.</p>
    <p>Чтобы избежать этих проблем, всегда используйте имена файлов в нижнем регистре (если возможно).</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Производительность</h2>
    <p>Соглашения о кодировании не используются компьютерами. Большинство правил мало влияют на выполнение программ.</p>
    <p>Отступы и лишние пробелы не имеют значения в небольших скриптах.</p>
    <p>Для кода, находящегося в разработке, предпочтение следует отдавать удобочитаемости. Большие производственные скрипты следует минимизировать.&nbsp; </p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_debugging.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_best_practices.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>