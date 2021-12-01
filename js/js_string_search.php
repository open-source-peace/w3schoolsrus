<?php include '../include/head.php'; ?>

<title>JavaScript Строковый поиск. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Строковый поиск. Методы для поиска строк. Синтаксис и поддержка браузерами. Значения параметров. Полный справочник. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript Строковый поиск</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_string_methods.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_string_templates.php">Next &#10095;</a>
    </div>
    <div class="w3-info">
        <h3>JavaScript методы для поиска строк:</h3>
        <ul>
            <li>String.indexOf()</li>
            <li>String.lastindexOf()</li>
            <li>String.startsWith()</li>
            <li>String.endsWith()</li>
        </ul>
    </div>

    <h2>String.indexOf()</h2>
    <p>Метод <code class="w3-codespan">indexOf()</code> возвращает индекс (позицию) <code class="w3-codespan">first</code> (первого) вхождения указанного текста в строку:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let str = &quot;Пожалуйста, найдите, где встречается слово 'locate'!&quot;;<br>
            str.indexOf(&quot;locate&quot;)&nbsp;&nbsp;&nbsp; // Возвращает 7
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_indexof.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>JavaScript считает позиции с нуля.<br>0 - первая позиция в строке, 1 - вторая, 2 - третья и т.д.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>String.lastIndexOf()</h2>
    <p>Метод <code class="w3-codespan">lastIndexOf()</code> возвращает индекс <strong>last</strong> (последнего) вхождения указанного текста в строку:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let str = &quot;Пожалуйста, найдите, где встречается слово 'locate'!&quot;;<br>
            str.lastIndexOf(&quot;locate&quot;)&nbsp;&nbsp;&nbsp; // Возвращает 21
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_lastindexof.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Оба <code class="w3-codespan">indexOf()</code> и <code class="w3-codespan">lastIndexOf()</code> возвращают -1, если текст не найден:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let str = &quot;Пожалуйста, найдите, где встречается слово 'locate'!&quot;;<br>
            str.lastIndexOf(&quot;John&quot;)&nbsp;&nbsp;&nbsp; // Возвращает -1
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_indexof_1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Оба метода принимают второй параметр в качестве начальной позиции для поиска:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let str = &quot;Пожалуйста, найдите, где встречается слово 'locate'!&quot;;<br>
            str.indexOf(&quot;locate&quot;, 15)&nbsp;&nbsp;&nbsp; // Возвращает 21
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_indexof_2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Методы <code class="w3-codespan">lastIndexOf()</code> выполняют поиск в обратном направлении (от конца к началу), что означает: если второй параметр равен <code class="w3-codespan">15</code>, поиск начинается с позиции 15 и до начала строки.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let str = &quot;Пожалуйста, найдите, где встречается слово 'locate'!&quot;;<br>
            str.lastIndexOf(&quot;locate&quot;, 15)&nbsp;&nbsp;&nbsp; // Возвращает 7
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_lastindexof_2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>String.search()</h2>
    <p>Метод <code class="w3-codespan">search()</code> ищет строку для указанного значения и возвращает позицию совпадения:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let str = &quot;Пожалуйста, найдите, где встречается слово 'locate'!&quot;;<br>
            str.search(&quot;locate&quot;)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает 7
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_search_locate.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Вы заметили?</h2>
    <p>Оба метода, <code class="w3-codespan">indexOf()</code> и <code class="w3-codespan">search()</code>, <strong>равнозначны?</strong></p>
    <p>Они принимают одни и те же аргументы (параметры) и возвращают одно и то же значение?</p>
    <p>Эти два метода <strong>НЕ РАВНОЗНАЧНЫ</strong>. Вот отличия:</p>
    <ul>
        <li>Метод <code class="w3-codespan">search()</code> не может принимать второй аргумент начальной позиции;</li>
        <li>Метод <code class="w3-codespan">indexOf()</code> не может принимать большие поисковые значения (регулярные выражения).</li>
    </ul>
    <p>Вы узнаете больше о регулярных выражениях в следующей главе.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>String.match()</h2>
    <p>Метод <code class="w3-codespan">match()</code> ищет в строке совпадение с регулярным выражением и возвращает совпадения в виде объекта Array (массив).</p>
    <div class="w3-example">
        <h3>Пример 1</h3>
        <p>Искать в строке &quot;ain&quot;:</p>
        <div class="w3-code notranslate jsHigh">
            let text = &quot;The rain in SPAIN stays mainly in the plain&quot;; <br>
            text.match(/ain/g)&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает массив [ain,ain,ain]
        </div>
        <a target="_blank" href="../jstryit/tryjs_match_regexp.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>Подробнее о <strong>регулярных выражениях</strong> читайте в главе <a href="../js/js_regexp.php">JS RegExp</a>.</p>
    <div class="w3-note">
        <p>Если регулярное выражение не включает модификатор <em>g</em> (для выполнения <em>глобального</em> поиска), метод <code class="w3-codespan">match()</code> вернёт только первое совпадение в строке.</p>
    </div>

    <h2>Синтаксис</h2>
    <div class="w3-code w3-border notranslate"><div>
            <i>string</i>.match(<em>regexp</em>)</div></div>
    <table class="ws-table-all notranslate">
        <tr>
            <td><em>regexp</em></td>
            <td>Обязательно. Значение для поиска в виде регулярного выражения</td>
        </tr>
        <tr>
            <td>Возвращает:</td>
            <td>Массив, содержащий совпадения, по одному элементу для каждого совпадения или <em>null</em>, если совпадений не найдено</td>
        </tr>
    </table>

    <div class="w3-example">
        <h3>Пример 2</h3>
        <p>Выполните глобальный поиск без учета регистра &quot;ain&quot;:</p>
        <div class="w3-code notranslate jsHigh">
            let text = &quot;The rain in SPAIN stays mainly in the plain&quot;; <br>
            text.match(/ain/gi) &nbsp;&nbsp;// Возвращает массив [ain,AIN,ain,ain]
        </div>
        <a target="_blank" href="../jstryit/tryjs_match_regexp2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>String.includes()</h2>
    <p>Метод <code class="w3-codespan">includes()</code> возвращает true, если строка содержит указанное значение.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let text = &quot;Hello world, welcome to the universe.&quot;;<br>
            text.includes(&quot;world&quot;)&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает true
        </div>
        <a target="_blank" href="../jstryit/tryjs_includes.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <h2>Поддержка браузерами</h2>
    <p>String.includes() не поддерживается в Internet Explorer.</p>
    <table class="browserref notranslate">
        <tr style="height:50px">
            <th style="width:16%;" class="bsChrome" title="Chrome"></th>
            <th style="width:16%;" class="bsEdge" title="Edge"></th>
            <th style="width:16%;" class="bsFirefox" title="Firefox"></th>
            <th style="width:16%;" class="bsSafari" title="Safari"></th>
            <th style="width:16%;" class="bsOpera" title="Opera"></th>
        </tr>
        <tr>
            <td>Chrome 41</td>
            <td>Edge 12</td>
            <td>Firefox 40</td>
            <td>Safari 9</td>
            <td>Opera 28</td>
        </tr>
        <tr>
            <td>Mar 2015</td>
            <td>Jul 2015</td>
            <td>Aug 2015</td>
            <td>Oct 2015</td>
            <td>Mar 2015</td>
        </tr>
    </table>

    <h2>Синтаксис</h2>
    <div class="w3-code w3-border notranslate"><div>
            <i>string</i>.includes(<em>searchvalue</em>,<em> start</em>)</div></div>
    <table class="ws-table-all notranslate">
        <tr>
            <td><em>searchvalue</em></td>
            <td>Обязательно. Строка для поиска</td>
        </tr>
        <tr>
            <td><em>start</em></td>
            <td>Не обязательно. По умолчанию 0. Позиция для начала поиска.</td>
        </tr>
        <tr>
            <td>Возвращает:</td>
            <td>Возвращает <code class="w3-codespan">true</code> если строка содержит значение, в противном случае <code class="w3-codespan">false</code></td>
        </tr>
        <tr>
            <td>JS Версия:</td>
            <td>ES6 (2015)</td>
        </tr>
    </table>

    <div class="w3-example">
        <p>Проверьте, есть ли в строке слово "world", начиная поиск с позиции 12:</p>
        <div class="w3-code notranslate jsHigh">
            let text = &quot;Hello world, welcome to the universe.&quot;;<br>
            text.includes(&quot;world&quot;, 12)&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает false
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_includes2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>String.startsWith()</h2>
    <p>Метод <code class="w3-codespan">startsWith()</code> возвращает <code class="w3-codespan">true</code> если строка начинается с указанного значения, в противном случае <code class="w3-codespan">false</code>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let text = &quot;Hello world, welcome to the universe.&quot;;<br>
            <br>
            text.startsWith(&quot;Hello&quot;)&nbsp;&nbsp;&nbsp;// Возвращает true
        </div>
        <a target="_blank" href="../jstryit/tryjs_startswith.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <h2>Синтаксис</h2>
    <div class="w3-code w3-border notranslate"><div>
            <i>string</i>.startsWith(<em>searchvalue</em>,<em> start</em>)</div></div>

    <h2>Значения параметров</h2>
    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:23%">Параметр</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><em>searchvalue</em></td>
            <td>Обязательно. Значение для поиска</td>
        </tr>
        <tr>
            <td><em>start</em></td>
            <td>Не обязательно. По умолчанию 0. Позиция начала поиска</td>
        </tr>
    </table>

    <div class="w3-example">
        <h3>Примеры</h3>
        <div class="w3-code notranslate jsHigh">
            let text = &quot;Hello world, welcome to the universe.&quot;;<br>
            <br>
            text.startsWith(&quot;world&quot;)&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает false
        </div>

        <div class="w3-code notranslate jsHigh">
            let text = &quot;Hello world, welcome to the universe.&quot;;<br>
            <br>
            text.startsWith(&quot;world&quot;, 5)&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает false
        </div>

        <div class="w3-code notranslate jsHigh">
            let text = &quot;Hello world, welcome to the universe.&quot;;<br>
            <br>
            text.startsWith(&quot;world&quot;, 6)&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает true
        </div>

        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_startswith2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-note">
        <p><b>Примечание:</b> Метод <code class="w3-codespan">startsWith()</code> чувствителен к регистру.</p>
    </div>
    <?php include '../include/adinfeed.php'; ?>
    <p>Метод <code class="w3-codespan">startsWith()</code> не поддерживается в Internet Explorer.</p>
    <table class="browserref notranslate">
        <tr style="height:50px">
            <th style="width:16%;" class="bsChrome" title="Chrome"></th>
            <th style="width:16%;" class="bsEdge" title="Internet Explorer / Edge"></th>
            <th style="width:16%;" class="bsFirefox" title="Firefox"></th>
            <th style="width:16%;" class="bsSafari" title="Safari"></th>
            <th style="width:16%;" class="bsOpera" title="Opera"></th>
        </tr>
        <tr>
            <td>Chrome 41</td>
            <td>Edge 12</td>
            <td>Firefox 17</td>
            <td>Safari 9</td>
            <td>Opera 28</td>
        </tr>
        <tr>
            <td>Mar 2015</td>
            <td>Jul 2015</td>
            <td>Aug 2015</td>
            <td>Oct 2015</td>
            <td>Mar 2015</td>
        </tr>
    </table>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>String.endsWith()</h2>
    <p>Метод <code class="w3-codespan">endsWith()</code> возвращает <code class="w3-codespan">true</code> если строка заканчивается указанным значением, в противном случае <code class="w3-codespan">false</code>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Проверьте, заканчивается ли строка на "Doe":</p>
        <div class="w3-code notranslate jsHigh">
            var text = &quot;John Doe&quot;;<br>
            text.endsWith(&quot;Doe&quot;)&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает true
        </div>
        <a target="_blank" href="../jstryit/tryjs_endswith.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <h2>Синтаксис</h2>
    <div class="w3-code w3-border notranslate">
        <div>
            <i>string</i>.endswith(<em>searchvalue</em>,<em> length</em>)
        </div>
    </div>
    <h2>Значения параметров</h2>
    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:23%">Параметр</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><em>searchvalue</em></td>
            <td>Обязательно. Значение для поиска</td>
        </tr>
        <tr>
            <td><em>length</em></td>
            <td>Не обязательно. Длина поиска</td>
        </tr>
    </table>

    <div class="w3-example">
        <p>Проверить 11 первых символов строки, оканчивающейся на "world":</p>
        <div class="w3-code notranslate jsHigh">
            let text = &quot;Hello world, welcome to the universe.&quot;;<br>
            text.endsWith(&quot;world&quot;, 11)&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает true
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_endswith2.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <div class="w3-note">
        <p><b>Примечание:</b> Метод <code class="w3-codespan">endsWith()</code> чувствителен к регистру.</p>
    </div>
    <?php include '../include/adinfeed.php'; ?>
    <p>Метод <code class="w3-codespan">endsWith()</code> не поддерживается в Internet Explorer.</p>
    <table class="browserref notranslate">
        <tr style="height:50px">
            <th style="width:16%;" class="bsChrome" title="Chrome"></th>
            <th style="width:16%;" class="bsEdge" title="Internet Explorer / Edge"></th>
            <th style="width:16%;" class="bsFirefox" title="Firefox"></th>
            <th style="width:16%;" class="bsSafari" title="Safari"></th>
            <th style="width:16%;" class="bsOpera" title="Opera"></th>
        </tr>
        <tr>
            <td>Chrome 51</td>
            <td>Edge 15</td>
            <td>Firefox 54</td>
            <td>Safari 10</td>
            <td>Opera 38</td>
        </tr>
        <tr>
            <td>May 2016</td>
            <td>Apr 2017</td>
            <td>Jun 2017</td>
            <td>Sep 2016</td>
            <td>Jun 2016</td>
        </tr>
    </table>
    <hr>
    <h2>Полный справочник строк</h2>
    <p>Для получения полной справки перейдите на <a href="../jsref/jsref_obj_string.php">Полный справочник JavaScript строк</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <p>Справочник содержит описания и примеры всех свойств и методов строк.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_string_methods.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_string_templates.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>