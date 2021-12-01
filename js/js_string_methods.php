<?php include '../include/head.php'; ?>

<title>JavaScript Строковые методы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Строковые методы и свойства. Длина строки. Нахождение строки в строке. Поиск. Извлечение частей строк. Методы slice(), substring(), substr(). Замена содержимого строки - метод replace(). Преобразование в верхний и нижний регистр. Методы concat(), String.trim(). Примеры кода. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
      <h1>JavaScript <span class="color_h1">Строковые методы</span></h1>
      <div class="w3-clear nextprev">
          <a class="w3-left w3-btn" href="js_strings.php">&#10094; Prev</a>
          <a class="w3-right w3-btn" href="js_string_search.php">Next &#10095;</a>
      </div>
      <hr>
      <p class="intro"><strong>Строковые методы</strong> помогают работать со строками.</p>
      <hr>

      <h2>Строковые методы и свойства</h2>
      <p>Примитивные значения, такие как &quot;John Doe&quot;, не могут иметь свойств или методов (поскольку они не являются объектами).</p>
      <p>Но в JavaScript методы и свойства также доступны для примитивных значений, потому что JavaScript обрабатывает примитивные значения как объекты при выполнении методов и свойств.</p>
      <hr>
    <?php include '../include/adinfeed.php'; ?>
      <h2>Длина строки</h2>
      <p>Свойство <code class="w3-codespan">length</code> возвращает длину строки:</p>

      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate jsHigh">
              var txt = &quot;ABCDEFGHIJKLMNOPQRSTUVWXYZ&quot;;<br>var sln = txt.length;</div>
          <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_length.html">Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Нахождение строки в строке</h2>
      <p>Метод <code class="w3-codespan">indexOf()</code> возвращает индекс (положение) <code class="w3-codespan">first</code> (первого) вхождения указанного текста в строке:</p>

      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate jsHigh">
              var str = &quot;Пожалуйста, найдите, где происходит 'locate'! &quot;;<br>
              var pos = str.indexOf(&quot;locate&quot;);
          </div>
          <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_indexof.html" target="_blank">Попробуйте сами &raquo;</a>
      </div>

      <div class="w3-panel w3-note">
          <p>JavaScript считает позиции с нуля.<br>0 - это первая позиция в строке, 1 - это вторая, 2 - это третья и т.д.</p>
      </div>

      <p>Метод <code class="w3-codespan">lastIndexOf()</code> возвращает индекс <strong>last</strong> (последнего) вхождения указанного текста в строку:</p>

      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate jsHigh">
              var str = &quot;Пожалуйста, найдите, где происходит 'locate'!&quot;;<br>
              var pos = str.lastIndexOf(&quot;locate&quot;);
          </div>
          <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_lastindexof.html" target="_blank">Попробуйте сами &raquo;</a>
      </div>
      <p>Оба метода <code class="w3-codespan">indexOf()</code> и <code class="w3-codespan">lastIndexOf()</code> возвращают -1, если текст не найден.</p>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate jsHigh">
              var str = &quot;Пожалуйста, найдите, где происходит 'locate'!&quot;;<br>
              var pos = str.lastIndexOf(&quot;John&quot;);
          </div>
          <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_indexof_1.html" target="_blank">Попробуйте сами &raquo;</a>
      </div>
    <?php include '../include/adinfeed.php'; ?>

      <p>Оба метода принимают второй параметр в качестве начальной позиции для поиска:</p>

      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate jsHigh">
              var str = &quot;Пожалуйста, найдите, где происходит 'locate'!&quot;;<br>
              var pos = str.indexOf(&quot;locate&quot;, 15);
          </div>
          <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_indexof_2.html" target="_blank">Попробуйте сами &raquo;</a>
      </div>

      <p>Методы <code class="w3-codespan">lastIndexOf()</code> выполняют поиск в обратном направлении (от конца к началу), что означает: если второй параметр равен <code class="w3-codepan">15</code>, поиск начинается с позиции 15 и выполняется до начала строка.</p>

      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate jsHigh">
              var str = &quot;Пожалуйста, найдите, где происходит 'locate'!&quot;;<br>
              var pos = str.lastIndexOf(&quot;locate&quot;, 15);
          </div>
          <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_lastindexof_2.html" target="_blank">Попробуйте сами &raquo;</a>
      </div>
      <hr>
    <?php include '../include/adinfeed.php'; ?>
      <h2>Поиск строки в строке</h2>
      <p>Метод <code class="w3-codespan">search()</code> ищет строку для указанного значения и возвращает позицию совпадения:</p>

      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate jsHigh">
              var str = &quot;Пожалуйста, найдите, где происходит 'locate'!&quot;;<br>
              var pos = str.search(&quot;locate&quot;);
          </div>
          <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_search_locate.html" target="_blank">Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>А вы заметили?</h2>
      <p>Два метода <code class="w3-codespan">indexOf()</code> и <code class="w3-codespan">search()</code>, <strong>равнозначны</strong>?</p>
      <p>Они принимают одни и те же аргументы (параметры) и возвращают одно и то же значение?</p>
      <p>Эти два метода <strong>НЕ</strong> равнозначны. Есть отличия:</p>
      <ul>
          <li>Метод <code class="w3-codespan">search()</code> не может принимать второй аргумент начальной позиции.</li>
          <li>Метод <code class="w3-codespan">indexOf()</code> не может принимать большие поисковые значения (регулярные выражения).</li>
      </ul>
      <p>Вы узнаете больше о регулярных выражениях в следующей главе.</p>
      <hr>
    <?php include '../include/adinfeed.php'; ?>
      <h2>Извлечение частей строк</h2>
      <p>Есть 3 метода для извлечения части строки::</p>
      <ul>
          <li><code class="w3-codespan">slice(<em>start</em>, <em>end</em>)</code></li>
          <li><code class="w3-codespan">substring(<em>start</em>, <em>end</em>)</code></li>
          <li><code class="w3-codespan">substr(<em>start</em>, <em>length</em>)</code></li>
      </ul>
      <hr>
    <h2>Метод slice()</h2>
    <p><code class="w3-codespan">slice()</code> извлекает часть строки и возвращает извлеченную часть в новой строке.</p>
    <p>Метод принимает 2 параметра: начальную позицию и конечную позицию (конечная позиция не включена).</p>
    <p>В этом примере вырезается часть строки из позиции 7 в позицию 12 (13-1):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var str = &quot;Apple, Banana, Kiwi&quot;;<br>
            var res = str.slice(7, 13);
        </div>
        <p>Результат <em>res</em> будет:</p>
        <div class="w3-white w3-padding notranslate">
            <code>Banana</code>
        </div>
        <a target="_blank" href="../jstryit/tryjs_string_slice.html" class="w3-btn w3-margin-bottom w3-margin-top">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p>Помните: JavaScript считает позиции с нуля. Первая позиция 0.</p>
    </div>

    <p>Если параметр отрицательный, позиция отсчитывается от конца строки.</p>
    <p>Этот пример вырезает часть строки из позиции -12 в позицию -6: </p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var str = &quot;Apple, Banana, Kiwi&quot;;<br>
            var res = str.slice(-12, -6);
        </div>
        <p>Результат <em>res</em> будет:</p>
        <div class="w3-white w3-padding notranslate">
            <code>Banana</code></div>
        <a class="w3-btn w3-margin-bottom w3-margin-top" href="../jstryit/tryjs_string_slice_negative.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Если вы опустите второй параметр, метод будет вырезать остальную часть строки:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var res = str.slice(7);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_slice_rest.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>или считая с конца:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var res = str.slice(-12);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_slice_rest_negative.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Отрицательные позиции не работают в Internet Explorer 8 и более ранних версиях.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Метод substring()</h2>
    <p>Метод <code class="w3-codespan">substring()</code> похожий на метод <code class="w3-codespan">slice()</code>.</p>
    <p>различие в том, что <code class="w3-codespan">substring()</code> не может принимать отрицательные индексы.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var str = &quot;Apple, Banana, Kiwi&quot;;<br>
            var res = str.substring(7, 13);
        </div>
        <p>Результат <em>res</em> будет:</p>
        <div class="w3-white w3-padding notranslate">
            <code>Banana</code></div>
        <a target="_blank" href="../jstryit/tryjs_string_substring.html" class="w3-btn w3-margin-bottom w3-margin-top">Попробуйте сами &raquo;</a>
    </div>

    <p>Если вы опустите второй параметр, <code class="w3-codespan">substring()</code> будет вырезать остальную часть строки.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Метод substr()</h2>
    <p>Метод <code class="w3-codespan">substr()</code> похожий на метод <code class="w3-codespan">slice()</code>.</p>
    <p>Разница в том, что второй параметр определяет <b>длину</b> извлеченной части.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var str = &quot;Apple, Banana, Kiwi&quot;;<br>
            var res = str.substr(7, 6);
        </div>
        <p>Результат <em>res</em> будет:</p>
        <div class="w3-white w3-padding notranslate">
            <code>Banana</code>
        </div>
        <a target="_blank" href="../jstryit/tryjs_string_substr.html" class="w3-btn w3-margin-bottom w3-margin-top">Попробуйте сами &raquo;</a>
    </div>

    <p>Если вы опустите второй параметр, <code class="w3-codespan">substr()</code> будет вырезать остальную часть строки.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var str = &quot;Apple, Banana, Kiwi&quot;;<br>
            var res = str.substr(7);
        </div>
        <p>Результат <em>res</em> будет:</p>
        <div class="w3-white w3-padding notranslate">
            <code>Banana, Kiwi</code></div>
        <a class="w3-btn w3-margin-bottom w3-margin-top" href="../jstryit/tryjs_string_substr1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Если первый параметр отрицателен, позиция отсчитывается от конца строки.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var str = &quot;Apple, Banana, Kiwi&quot;;<br>
            var res = str.substr(-4);
        </div>
        <p>Результат <em>res</em> будет:</p>
        <div class="w3-white w3-padding notranslate">
            <code>Kiwi</code></div>
        <a class="w3-btn w3-margin-bottom w3-margin-top" href="../jstryit/tryjs_string_substr2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Замена содержимого строки</h2>
    <p>Метод <code class="w3-codespan">replace()</code> заменяет указанное значение другим значением в строке:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            str = &quot;Пожалуйста, посетите Microsoft!&quot;;<br>
            var n = str.replace(&quot;Microsoft&quot;, &quot;W3Schools&quot;);<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_replace.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Метод <code class="w3-codespan">replace()</code> не меняет строку, в которой он вызывается. Он возвращает новую строку.</p>
    </div>

    <p>По умолчанию метод <code class="w3-codespan">replace()</code> заменяет <strong>только первое</strong> совпадение:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            str = &quot;Пожалуйста, посетите Microsoft и Microsoft!&quot;;<br>
            var n = str.replace(&quot;Microsoft&quot;, &quot;W3Schools&quot;);<br>
        </div>
        <p>
            <a class="w3-btn" href="../jstryit/tryjs_string_replace_first.html" target="_blank">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <p>По умолчанию метод <code class="w3-codespan">replace()</code> чувствителен к регистру. Запись MICROSOFT (написанная заглавными буквами) не будет работать:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            str = &quot;Пожалуйста, посетите Microsoft!&quot;;<br>
            var n = str.replace(&quot;MICROSOFT&quot;, &quot;W3Schools&quot;);<br>
        </div>
        <p>
            <a class="w3-btn" href="../jstryit/tryjs_string_replace_case.html" target="_blank">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <p>Чтобы заменить на содержимое без учёта регистра, используйте <strong>регулярное выражение</strong> с флажком <code class="w3-codespan">/i</code> (нечувствительный):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            str = &quot;Пожалуйста, посетите Microsoft!&quot;;<br>
            var n = str.replace(/MICROSOFT/i, &quot;W3Schools&quot;);<br>
        </div>
        <p>
            <a class="w3-btn" href="../jstryit/tryjs_string_replace_insensitive.html" target="_blank">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-panel w3-note">
        <p>Обратите внимание, что регулярные выражения пишутся без кавычек.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <p>Чтобы заменить все совпадения, используйте <strong>регулярное выражение</strong> с флажком <code class="w3-codespan">/g</code> (глобальное совпадение):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            str = &quot;Пожалуйста, посетите Microsoft и Microsoft!&quot;;<br>
            var n = str.replace(/Microsoft/g, &quot;W3Schools&quot;);<br>
        </div>
        <p>
            <a class="w3-btn" href="../jstryit/tryjs_string_replace_global.html" target="_blank">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-panel w3-note">
        <p>Вы узнаете больше о регулярных выражениях в главе <a href="js_regexp.php">JavaScript Регулярные выражение</a>.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Преобразование в верхний и нижний регистр</h2>
    <p>Строка преобразуется в верхний регистр с помощью <code class="w3-codespan">toUpperCase()</code>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var text1 = &quot;Hello World!&quot;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Строка<br>
            var text2 = text1.toUpperCase();&nbsp;&nbsp;// text2 - это текст1, преобразованный в верхний регистр</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_toupper.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Строка преобразуется в нижний регистр с помощью <code class="w3-codespan">toLowerCase()</code>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var text1 = &quot;Hello World!&quot;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Строка<br>
            var text2 = text1.toLowerCase();&nbsp;&nbsp;// text2 - это текст1, преобразованный в нижний регистр</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_tolower.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод concat()</h2>
    <p>Метод <code class="w3-codespan">concat()</code> объединяет две или более строки:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var text1 = &quot;Hello&quot;;<br>
            var text2 = &quot;World&quot;;<br>
            var text3 = text1.concat(&quot; &quot;, text2);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_concat.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Метод <code class="w3-codespan">concat()</code> можно использовать вместо оператора плюс. Эти две строки делают то же самое:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var text = &quot;Hello&quot; + &quot; &quot; + &quot;World!&quot;;<br>
            var text = &quot;Hello&quot;.concat(&quot; &quot;, &quot;World!&quot;);</div>
    </div>

    <div class="w3-panel w3-note">
        <p>Все строковые методы возвращают новую строку. Они не изменяют исходную строку.<br>
            Формально говоря: строки неизменны: строки не могут быть изменены, только заменены.
        </p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Метод String.trim()</h2>
    <p>Метод <code class="w3-codespan">trim()</code> удаляет пробелы с обеих сторон строки:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var str = &quot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hello World!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &quot;;<br>alert(str.trim());</div>
        <a target="_blank" href="../jstryit/tryjs_string_trim.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Метод <code class="w3-codespan">trim()</code> не поддерживается в Internet Explorer 8 или ниже.</p>
    </div>
    <p>Если вам нужно поддерживать IE 8, вместо этого вы можете использовать <code class="w3-codespan">replace()</code> с регулярным выражением:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var str = &quot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hello World!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &quot;;<br>
            alert(str.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, ''));</div>
        <a target="_blank" href="../jstryit/tryjs_string_trim_regexp.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>Вы также можете использовать решение замены выше, чтобы добавить функцию обрезки в JavaScript <code class="w3-codespan">String.prototype</code>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            if (!String.prototype.trim) {<br>&nbsp;&nbsp;String.prototype.trim =
            function () {<br>&nbsp;&nbsp; &nbsp;return
            this.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, '');<br>&nbsp; };<br>}<br>var str = &quot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hello World!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &quot;;<br>alert(str.trim());</div>
        <a target="_blank" href="../jstryit/tryjs_string_trim_polyfill.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <a id="mark_padding"></a>
    <h2>JavaScript String Padding - Заполнение строк</h2>
    <p>В ECMAScript 2017 добавлены два метода String: <code class="w3-codespan">padStart</code>
        и <code class="w3-codespan">padEnd</code> для поддержки заполнения в начале и в конце строки.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let str = "5";<br>
            str = str.padStart(4,0);<br>
            // результат 0005
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_padding1.html" target="_blank">Попробуйте сами »</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let str = "5";<br>
            str = str.padEnd(4,0);<br>
            // результат 5000
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_padding2.html" target="_blank">Попробуйте сами »</a>
    </div>
    <p>Заполнение строк не поддерживается в Internet Explorer.</p>
    <p>Firefox и Safari были первыми браузерами с поддержкой заполнения строк JavaScript:</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tbody><tr style="height:50px">
                <th style="width:16%;" class="bsChrome" title="Chrome"></th>
                <th style="width:16%;" class="bsEdge" title="Edge"></th>
                <th style="width:16%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:16%;" class="bsSafari" title="Safari"></th>
                <th style="width:16%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td>Chrome 57</td>
                <td>Edge 15</td>
                <td>Firefox 48</td>
                <td>Safari 10</td>
                <td>Opera 44</td>
            </tr>
            <tr>
                <td>Mar 2017</td>
                <td>Apr 2017</td>
                <td>Aug 2016</td>
                <td>Sep 2016</td>
                <td>Mar 2017</td>
            </tr>
            </tbody></table>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Извлечение строковых символов</h2>
    <p>Есть 3 метода для извлечения строковых символов:</p>
    <ul>
        <li><code class="w3-codespan">charAt(<em>position</em>)</code></li>
        <li><code class="w3-codespan">charCodeAt(<em>position</em>)</code></li>
        <li>Свойство access [ ]</li>
    </ul>
    <hr>

    <h2>Метод charAt()</h2>
    <p>Метод <code class="w3-codespan">charAt()</code> возвращает символ по указанному индексу (позиции) в строке:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var str = &quot;HELLO WORLD&quot;;<br>
            str.charAt(0);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает H
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_charat.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Метод charCodeAt()</h2>
    <p>Метод <code class="w3-codespan">charCodeAt()</code> возвращает unicode символа по указанному индексу в строке:</p>
    <p>Метод возвращает код UTF-16 (целое число от 0 до 65535).</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var str = &quot;HELLO WORLD&quot;;<br><br>
            str.charCodeAt(0);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает 72
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_charcodeat.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Свойство Access</h2>
    <p>ECMAScript 5 (2009) разрешает свойство access [ ] для строк:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var str = &quot;HELLO WORLD&quot;;<br>
            str[0];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает H</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_prop.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Свойство access может быть немного <strong>непредсказуемым:</strong> </p>
        <ul>
            <li>Это не работает в Internet Explorer 7 или более ранней версии</li>
            <li>Это делает строки похожими на массивы (но это не так)</li>
            <li>Если символ не найден, [] возвращает undefined, а charAt() возвращает пустую строку.</li>
            <li>Это только для чтения. str[0] = &quot;A&quot; не выдаёт ошибок (но не работает!)</li>
        </ul>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var str = &quot;HELLO WORLD&quot;;<br>
            str[0] = "A";&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <strong>// Не выдаёт ошибки, но не работает</strong><br>
            str[0];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает H
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_prop2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p>Если вы хотите работать со строкой в виде массива, вы можете преобразовать её в массив.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Преобразование строки в массив</h2>
    <p>Строка может быть преобразована в массив с помощью метода <code class="w3-codespan">split()</code>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var txt = &quot;a,b,c,d,e&quot;;&nbsp;&nbsp;&nbsp;// Строка<br>
            txt.split(&quot;,&quot;);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;// Разделить запятыми<br>
            txt.split(&quot; &quot;);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Разделить пробелами<br>
            txt.split(&quot;|&quot;);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Разделить вертикальной чертой
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_split.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Если разделитель опущен, возвращаемый массив будет содержать всю строку в индексе [0].</p>
    <p>Если разделитель является &quot;&quot;, возвращаемый массив будет массивом отдельных символов:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var txt = &quot;Hello&quot;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Строка<br>
            txt.split(&quot;&quot;);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Разделить символами
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_split_char.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>Полный справочник строк</h2>
    <p>Для более полного ознакомления со строками в JavaScript, перейдите на <a href="../jsref/jsref_obj_string.php">Полный справочник JavaScript строк</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <p>Справочник содержит описания и примеры всех строковых свойств и методов.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <form autocomplete="off" spellcheck="false" id="w3-exerciseform" action="https://www.w3schools.com/js/exercise_js.aspexercise_js_string_methods1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            Найти позицию символа <code class="w3-codespan">h</code> в строке <code class="w3-codespan">txt</code>.
            <div class="exerciseprecontainer">
<pre>
var txt = "abcdefghijklm";
var pos = txt.<input name="ex1" maxlength="12" style="width: 119px;">;
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
      <hr>
      <div class="w3-clear nextprev">
          <a class="w3-left w3-btn" href="js_strings.php">&#10094; Prev</a>
          <a class="w3-right w3-btn" href="js_string_search.php">Next &#10095;</a>
      </div>
  </article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>