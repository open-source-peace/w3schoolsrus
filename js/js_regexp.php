<?php include '../include/head.php'; ?>

<title>JavaScript Регулярные выражения. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Регулярные выражения. Что такое? Синтаксис. Использование строковых методов. Модификаторы регулярных выражений. Шаблоны. Использование объекта RegExp. Полный справочник. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Регулярные выражения</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_bitwise.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_errors.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Регулярное выражение</strong> - это последовательность символов, образующая шаблон поиска.</p>
    <p class="intro">Шаблон поиска можно использовать для текстового поиска и операций замены текста.</p>
    <hr>

    <h2>Что такое регулярное выражение?</h2>
    <p><strong>Регулярное выражение</strong> - это последовательность символов, образующая <strong>шаблон поиска</strong>.</p>
    <p>Когда вы ищете данные в тексте, вы можете использовать этот шаблон поиска, чтобы описать то, что вы ищете.</p>
    <p><strong>Регулярное выражение</strong> может быть отдельным символом или более сложным шаблоном.</p>
    <p><strong>Регулярные выражения</strong> можно использовать для выполнения всех типов операций <strong>текстового поиска</strong> и <strong>замены текста</strong>.</p>

    <h2>Синтаксис</h2>
    <div class="w3-code w3-border notranslate"><div>
            /<em>pattern</em>/<em>modifiers</em>;
        </div></div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate">
            /w3schools/i;</div>
    </div>
    <p>Объяснение примера:</p>
    <p><strong>/w3schools/i</strong> - это регулярное выражение.</p>
    <p><strong>w3schools</strong> - это шаблон (для использования в поиске).</p>
    <p><strong>i</strong> - является модификатором (изменяет поиск без учета регистра).</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Использование строковых методов</h2>
    <p>В JavaScript регулярные выражения часто используются с двумя <strong>строковыми методами</strong>: <code class="w3-codespan">search()</code> и <code class="w3-codespan">replace()</code>.</p>
    <p>Метод <code class="w3-codespan">search()</code> использует выражение для поиска совпадения и возвращает позицию совпадения.</p>
    <p>Метод <code class="w3-codespan">replace()</code> возвращает измененную строку, в которой заменен шаблон.</p>
    <hr>

    <h2>Использование String search() со строкой</h2>
    <p>Метод <code class="w3-codespan">search()</code> ищет строку для указанного значения и возвращает позицию совпадения:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Используйте строку, чтобы выполнить поиск по запросу &quot;W3schools&quot; в строке:</p>
        <div class="w3-code notranslate jsHigh">
            let text = &quot;Visit W3Schools!&quot;;<br>
            let n = text.search(&quot;W3Schools&quot;);
        </div>
        <p>Результат в <em>n</em> будет:</p>
        <div class="w3-white w3-padding notranslate">
            <code>6</code>
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_string_search.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Использование String search() с регулярным выражением</h2>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Используйте регулярное выражение для поиска по запросу &quot;w3schools&quot; без учета регистра в строке:</p>
        <div class="w3-code notranslate jsHigh">
            let text = &quot;Visit W3Schools&quot;;<br>
            let n = text.search(/w3schools/i);
        </div>
        <p>Результат <em>n</em> будет:</p>
        <div class="w3-white w3-padding notranslate">
            <code>6</code>
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_regexp_string_search.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Использование String replace() со строкой</h2>
    <p>Метод <code class="w3-codespan">replace()</code> заменяет указанное значение другим значением в строке:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            let text = &quot;Visit Microsoft!&quot;;<br>
            let result = text.replace(&quot;Microsoft&quot;, &quot;W3Schools&quot;);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_replace.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Используйте String replace() с регулярным выражением</h2>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Используйте регулярное выражение без учета регистра, чтобы заменить Microsoft на W3Schools в строке:</p>
        <div class="w3-code notranslate jsHigh">
            let text = &quot;Visit Microsoft!&quot;;<br>
            let result = text.replace(/microsoft/i, &quot;W3Schools&quot;);
        </div>
        <p>Результат в <em>res</em> будет:</p>
        <div class="w3-white w3-padding notranslate">
            <code>Посетите W3Schools!</code></div>
        <a class="w3-btn w3-margin-bottom w3-margin-top" href="../jstryit/tryjs_regexp_string_replace.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Вы заметили?</h2>
    <div class="w3-panel w3-note">
        <p>Аргументы регулярного выражения (вместо строковых аргументов) можно использовать в приведенных выше методах.<br>
            Регулярные выражения могут сделать ваш поиск намного более мощным (например, без учета регистра).</p>
    </div>
    <hr>

    <h2>Модификаторы регулярных выражений</h2>
    <p><strong>Модификаторы</strong> можно использовать для более глобального поиска без учета регистра:</p>

    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:22%">Модификатор</th>
            <th>Описание</th>
            <th>Попробуй это</th>
        </tr>
        <tr>
            <td>i</td>
            <td>Сопоставление без учета регистра</td>
            <td><a target="_blank" class="w3-btn btnsmall w3-padding-small" href="../jstryit/tryjs_regexp_i.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>g</td>
            <td>Выполнить глобальное сопоставление (найти все совпадения, а не останавливаться после первого совпадения)</td>
            <td><a target="_blank" class="w3-btn btnsmall w3-padding-small" href="../jstryit/tryjs_regexp_g.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>m</td>
            <td>Выполнить многострочное сопоставление</td>
            <td><a target="_blank" class="w3-btn btnsmall w3-padding-small" href="../jstryit/tryjs_regexp_m.html">Попробуй это &raquo;</a></td>
        </tr>
    </table>
    <?php include '../include/addown_content.php'; ?>
    <h2>Шаблоны регулярных выражений</h2>
    <p><strong>Скобки</strong> используются для поиска ряда символов:</p>
    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:22%">Выражение</th>
            <th>Описание</th>
            <th style="width:5%">Попробуй это</th>
        </tr>
        <tr>
            <td>[abc]</td>
            <td>Найдите любой из символов в скобках</td>
            <td><a style="float:right" target="_blank" class="w3-btn btnsmall w3-padding-small" href="../jstryit/tryjs_regexp_abc.html">Попробуй это &raquo;</a></td>
        <tr>
            <td>[0-9]</td>
            <td>Найдите любую из цифр в скобках</td>
            <td><a style="float:right" target="_blank" class="w3-btn btnsmall w3-padding-small" href="../jstryit/tryjs_regexp_0-9.html">Попробуй это &raquo;</a></td>
        <tr>
            <td>(x|y)</td>
            <td>Найдите любую из альтернатив, разделенных |</td>
            <td><a style="float:right" target="_blank" class="w3-btn btnsmall w3-padding-small" href="../jstryit/tryjs_regexp_xy.html">Попробуй это &raquo;</a></td>
        </tr>
    </table>
    <?php include '../include/adinfeed.php'; ?>
    <p><strong>Метасимволы</strong> - это символы со специальным значением:</p>
    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:22%">Метасимвол</th>
            <th>Описание</th>
            <th>Попробуй это</th>
        </tr>
        <tr>
            <td>\d</td>
            <td>Найдите цифру</td>
            <td><a target="_blank" class="w3-btn btnsmall w3-padding-small" href="../jstryit/tryjs_regexp_d.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>\s</td>
            <td>Найдите символ пробела</td>
            <td><a target="_blank" class="w3-btn btnsmall w3-padding-small" href="../jstryit/tryjs_regexp_s.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>\b</td>
            <td>Найдите совпадение в начале такого слова: \bWORD, или в конце такого слова: WORD\b</td>
            <td>
                <a target="_blank" class="w3-btn btnsmall w3-padding-small" href="../jstryit/tryjs_regexp_b.html">Попробуй это &raquo;</a>
                <br>
                <a target="_blank" style="margin-top:2px;" class="w3-btn btnsmall w3-padding-small" href="../jstryit/tryjs_regexp_b2.html">Попробуй это &raquo;</a>
            </td>
        </tr>
        <tr>
            <td>\uxxxx</td>
            <td>Найдите символ Юникода, указанный шестнадцатеричным числом xxxx</td>
            <td><a target="_blank" class="w3-btn btnsmall w3-padding-small" href="../jstryit/tryjs_regexp_ux.html">Попробуй это &raquo;</a></td>
        </tr>
    </table>
    <?php include '../include/adinfeed.php'; ?>
    <p><strong>Квантификаторы</strong> определяют количества:</p>
    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:22%">Квантификатор</th>
            <th>Описание</th>
            <th style="width:5%">Попробуй это</th>
        </tr>
        <tr>
            <td>n+</td>
            <td>Соответствует любой строке, содержащей хотя бы один <em>n</em></td>
            <td style="float:right"><a target="_blank" class="w3-btn btnsmall w3-padding-small" href="../jstryit/tryjs_regexp_n1.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>n*</td>
            <td>Соответствует любой строке, содержащей ноль или более вхождений <em>n</em></td>
            <td style="float:right"><a target="_blank" class="w3-btn btnsmall w3-padding-small" href="../jstryit/tryjs_regexp_n2.html">Попробуй это &raquo;</a></td>
        </tr>
        <tr>
            <td>n?</td>
            <td>Соответствует любой строке, содержащей ноль или одно вхождение <em>n</em></td>
            <td style="float:right"><a target="_blank" class="w3-btn btnsmall w3-padding-small" href="../jstryit/tryjs_regexp_n3.html">Попробуй это &raquo;</a></td>
        </tr>
    </table>
    <?php include '../include/addown_content.php'; ?>

    <h2>Использование объекта RegExp</h2>
    <p>В JavaScript объект RegExp - это объект регулярного выражения с предопределенными свойствами и методами.</p>
    <hr>

    <h2>Использование test()</h2>
    <p>Метод <code class="w3-codespan">test()</code> - это метод выражения RegExp.</p>
    <p>Он ищет в строке шаблон и возвращает true или false, в зависимости от результата.</p>
    <p>В следующем примере выполняется поиск в строке символа &quot;e&quot;:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const pattern = /e/;<br>
            pattern.test(&quot;Все лучшее в жизни бесплатно!&quot;);
        </div>
        <p>Поскольку в строке есть буква &quot;e&quot;, вывод приведенного выше кода будет:</p>
        <div class="w3-white w3-padding notranslate">
            <code>true</code>
        </div>
        <p><a target="_blank" href="../jstryit/tryjs_regexp_test.html" class="w3-btn">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <div class="w3-example">
        <p>Вам не нужно сначала помещать регулярное выражение в переменную. Две приведенные выше строки можно сократить до одной:</p>
        <div class="w3-code notranslate jsHigh">
            /e/.test(&quot;Все лучшее в жизни бесплатно!&quot;);</div>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Использование exec()</h2>
    <p>Метод <code class="w3-codespan">exec()</code> - это метод выражения RegExp.</p>
    <p>Он ищет строку для указанного шаблона и возвращает найденный текст как объект.</p>
    <p>Если совпадений не найдено, возвращается пустой объект <i>(null)</i>.</p>
    <p>В следующем примере выполняется поиск в строке символа &quot;e&quot;:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            /e/.exec(&quot;Все лучшее в жизни бесплатно!&quot;);
        </div>
        <a target="_blank" href="../jstryit/tryjs_regexp_exec.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Полный справочник RegExp</h2>
    <p>Для получения полной справки перейдите на <a href="../jsref/jsref_obj_regexp.php">Полный справочник JavaScript RegExp</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <p>Справочник содержит описания и примеры всех свойств и методов RegExp.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_bitwise.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_errors.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>