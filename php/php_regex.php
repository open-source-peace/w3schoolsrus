<?php include '../include/head.php'; ?>
<title>PHP Регулярные выражения. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Регулярные выражения. Функции регулярных выражений. Современный учебник по языку PHP. Полный справочник. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Регулярные выражения</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_superglobals_get.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_forms.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Что такое Регулярные выражения?</h2>
    <p><strong>Регулярное выражение</strong> - это последовательность символов, образующая шаблон поиска. Когда вы ищете данные в тексте, вы можете использовать этот шаблон поиска, чтобы описать то, что вы ищете.</p>
    <p><strong>Регулярное выражение</strong> может быть одиночным символом или более сложным шаблоном.</p>
    <p><strong>Регулярные выражения</strong> могут использоваться для выполнения всех типов текстового поиска и операций замены текста.</p>
    <hr>

    <h2>Синтаксис Регулярных выражений в PHP</h2>
    <p>В PHP регулярные выражения - это строки, состоящие из разделителей, шаблона и необязательных модификаторов.</p>
    <div class="w3-code w3-border notranslate phpHigh"><div>
            $exp = &quot;/w3schools/i&quot;;</div>
    </div>

    <p>В приведенном выше примере <code class="w3-codespan">/</code> - это <strong>разделитель</strong>, <em>w3schools</em> - это <strong>шаблон </strong>, который выполняет поиск и <code class="w3-codespan">i</code> - это <strong>модификатор</strong>, который делает поиск нечувствительным к регистру.</p>
    <p>В качестве разделителя может использоваться любой символ, кроме буквы, числа, обратного слэша или пробела. Наиболее распространенным разделителем является слэш (/), но когда ваш шаблон содержит слэши, лучше выбрать другие разделители, такие как # или ~.</p>
    <hr>

    <h2>Функции регулярных выражений</h2>
    <p>PHP предоставляет множество функций, позволяющих использовать регулярные выражения. Функции <code class="w3-codespan">preg_match()</code>, <code class="w3-codespan">preg_match_all()</code> и <code class="w3-codespan">preg_replace()</code> - одни из наиболее часто используемых функций:</p>

    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:20%">Функция</th>
            <th style="width:80%">Описание</th>
        </tr>
        <tr>
            <td>preg_match()</td>
            <td>Возвращает 1, если шаблон был найден в строке, и 0, если нет</td>
        </tr>
        <tr>
            <td>preg_match_all()</td>
            <td>Возвращает, сколько раз шаблон был найден в строке, которое также может быть 0</td>
        </tr>
        <tr>
            <td>preg_replace()</td>
            <td>Возвращает новую строку, в которой совпадающие шаблоны были заменены другой строкой</td>
        </tr>
    </table>
    <hr>

    <h2>Использование preg_match()</h2>
    <p>Функция <code class="w3-codespan">preg_match()</code> сообщит вам, содержит ли строка совпадения с шаблоном.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Используйте регулярное выражение для поиска &quot;w3schools&quot; в строке без учета регистра:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$str = &quot;Visit W3Schools&quot;;<br>$pattern = &quot;/w3schools/i&quot;;<br>echo
            preg_match($pattern, $str); // Выведет 1<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_regex_match.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>


    <h2>Использование preg_match_all()</h2>
    <p>Функция <code class="w3-codespan">preg_match_all()</code> сообщит вам, сколько совпадений было найдено для шаблона в строке.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Используйте регулярное выражение для подсчета без учета регистра числа вхождений &quot;ain&quot; в строке:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$str = &quot;The rain in SPAIN falls mainly on the plains.&quot;;<br>
            $pattern = &quot;/ain/i&quot;;<br>echo preg_match_all($pattern, $str); // Выведет 4<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_regex_match_all.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Использование preg_replace()</h2>
    <p>Функция <code class="w3-codespan">preg_replace()</code> заменит все совпадения шаблона в строке другой строкой.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Используйте регулярное выражение без учета регистра, чтобы заменить Microsoft на W3Schools в строке:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$str = &quot;Visit Microsoft!&quot;;<br>$pattern = &quot;/microsoft/i&quot;;<br>echo
            preg_replace($pattern, &quot;W3Schools&quot;, $str); // Выведет &quot;Visit
            W3Schools!&quot;<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_regex_replace.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    
    <h2>Модификаторы регулярных выражений</h2>
    <p>Модификаторы могут изменить способ выполнения поиска.</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:22%">Модификатор</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>i</td>
            <td>Выполняет поиск без учета регистра</td>
        </tr>
        <tr>
            <td>m</td>
            <td>Выполняет многострочный поиск (шаблоны, которые ищут начало или конец строки, будут соответствовать началу или концу каждой строки)</td>
        </tr>
        <tr>
            <td>u</td>
            <td>Обеспечивает правильное сопоставление шаблонов в кодировке UTF-8</td>
        </tr>
    </table>
    <hr>

    <h2>Шаблоны регулярных выражений</h2>
    <p>Скобки используются для поиска ряда символов:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:22%">Выражение</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>[abc]</td>
            <td>Найдите один символ из вариантов в скобках</td>
        </tr>
        <tr>
            <td>[^abc]</td>
            <td>Найдите любой символ НЕ в скобках</td>
        </tr>
        <tr>
            <td>[0-9]</td>
            <td>Найдите один символ из диапазона от 0 до 9</td>
        </tr>
    </table>

    <h2>Метасимволы</h2>
    <p>Метасимволы - это символы со специальным значением:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:22%">Метасимволы</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>|</td>
            <td>Найдите совпадение для любого из шаблонов, разделенных | как: cat|dog|fish</td>
        </tr>
        <tr>
            <td>.</td>
            <td>Найдите только один экземпляр любого символа</td>
        </tr>
        <tr>
            <td>^</td>
            <td>Находит совпадение в начале строки, как в: ^Hello</td>
        </tr>
        <tr>
            <td>$</td>
            <td>Находит совпадение в конце строки, как в: World$</td>
        </tr>
        <tr>
            <td>\d</td>
            <td>Находит цифру</td>
        </tr>
        <tr>
            <td>\s</td>
            <td>Находит символ пробела</td>
        </tr>
        <tr>
            <td>\b</td>
            <td>Находит совпадение в начале такого слова: \bWORD или в конце такого слова: WORD\b</td>
        </tr>
        <tr>
            <td>\uxxxx</td>
            <td>Находит символ Юникода, указанный шестнадцатеричным числом xxxx</td>
        </tr>
    </table>

    <h2>Квантификаторы (кванторы)</h2>
    <p>Квантификаторы определяют количества:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:22%">Квантификатор</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>n+</td>
            <td>Соответствует любой строке, содержащей хотя бы один <em>n</em></td>
        </tr>
        <tr>
            <td>n*</td>
            <td>Соответствует любой строке, содержащей ноль или более вхождений <em>n</em></td>
        </tr>
        <tr>
            <td>n?</td>
            <td>Соответствует любой строке, содержащей ноль или одно вхождение <em>n</em></td>
        </tr>
        <tr>
            <td>n{x}</td>
            <td>Соответствует любой строке, содержащей последовательность <i>X</i> <i>n</i>'s</td>
        </tr>
        <tr>
            <td>n{x,y}</td>
            <td>Соответствует любой строке, содержащей последовательность от X до Y <i>n</i>'s</td>
        </tr>
        <tr>
            <td>n{x,}</td>
            <td>Соответствует любой строке, содержащей последовательность не менее X <i>n</i>'s</td>
        </tr>
    </table>

    <div class="w3-note w3-panel">
        <p><strong>Примечание:</strong> Если в вашем выражении требуется поиск одного из специальных символов, вы можете использовать обратный слэш (\), чтобы избежать их. Например, для поиска одного или нескольких вопросительных знаков вы можете использовать следующее выражение: $pattern = '/\?+/';</p>
    </div>
    <hr>

    <h2>Группировка</h2>
    <p>Вы можете использовать круглые скобки <code class="w3-codepan">()</code> для применения квантификаторов ко всем шаблонам. Их также можно использовать для выбора частей рисунка, которые будут использоваться в качестве совпадения.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Используйте группировку для поиска слова "banana", ища <em>ba</em> за которым следуют два экземпляра <em>na</em>:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$str = &quot;Apples and bananas.&quot;;<br>$pattern = &quot;/ba(na){2}/i&quot;;<br>echo
            preg_match($pattern, $str); // выведет 1<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_regex_grouping.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>Полный справочник регулярных выражений</h2>
    <p>Для получение более полной информации посетите <a href="php_ref_regex.php">Полный справочник регулярных выражений PHP</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <p>Справочник содержит описания и примеры всех функций регулярных выражений.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_superglobals_get.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_forms.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>