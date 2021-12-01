<?php include '../include/head.php'; ?>

  <title>JavaScript Строки. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='JavaScript Строки используются для хранения и манипулирования текстом. Строка JavaScript содержит ноль или более символов, заключенных в кавычки. Примеры кода. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

  <article>
    <h1>JavaScript <span class='color_h1'>Строки</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='js_events.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='js_string_methods.php'>Next &#10095;</a>
    </div>
    <hr>
    <p class='intro'><strong>JavaScript</strong> строки используются для хранения и манипулирования текстом.</p>
    <hr>

    <h2>JavaScript Строки</h2>
    <p>Строка JavaScript содержит ноль или более символов, заключенных в кавычки.</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        var x = &quot;John Doe&quot;;
      </div>
      <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_string.html'>Попробуйте сами &raquo;</a>
    </div>

    <p>Вы можете использовать одинарные или двойные кавычки:</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        var carName1 = &quot;Volvo XC60&quot;;&nbsp;
        // Двойные кавычки<br>
        var carName2 = 'Volvo XC60';&nbsp; // Одинарные кавычки </div>
      <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_string_quotes.html'>Попробуйте сами &raquo;</a>
    </div>
    <p>Вы можете использовать кавычки внутри строки, если они не соответствуют кавычкам, окружающим строку:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        var answer1 = &quot;Это правильно&quot;;<br>
        var answer2 = &quot;Его зовут 'Johnny'&quot;;<br>
        var answer3 = 'Его зовут 'Johnny'';<br>
      </div>
      <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_string_quotes_mixed.html'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
      <?php include '../include/adinfeed.php'; ?>
    <h2>Длина строки</h2>
    <p>Чтобы найти длину строки, используйте встроенное свойство <code class='w3-codespan'>length</code>:</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        var txt = &quot;ABCDEFGHIJKLMNOPQRSTUVWXYZ&quot;;<br>var sln = txt.length;</div>
      <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_string_length.html'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Экранирующий символ</h2>
    <p>Поскольку строки должны быть записаны в кавычках, JavaScript будет неправильно понимать эту строку:</p>

    <div class='w3-example'>
      <div class='w3-code notranslate jsHigh'>
        var x = &quot;Мы так называемые &quot;Викинги&quot; из севера.&quot;;<br>
      </div>
    </div>

    <p>Строка будет разделена на фразе &quot;Мы так называемые &quot;.</p>
    <p>Решение, чтобы избежать этой проблемы, заключается в использовании экранирующего символа <strong>обратной косой черты</strong> (обратного слэша).</p>
    <p>Экранирующий символ обратной косой черты (<code class='w3-codespan'>\</code>) превращает специальные символы в строковые символы:</p>
      <?php include '../include/adinfeed.php'; ?>
    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:25%'>Код</th>
        <th>Результат</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td>\'</td>
        <td>'</td>
        <td>Одинарные кавычки</td>
      </tr>
      <tr>
        <td>\&quot;</td>
        <td>&quot;</td>
        <td>Двойные кавычки</td>
      </tr>
      <tr>
        <td>\\</td>
        <td>\</td>
        <td>Обратный слэш</td>
      </tr>
    </table>

    <p>Последовательность <code class='w3-codespan'>\'</code>&nbsp; вставляет двойную кавычку в строку:<p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        var x = &quot;Мы так называемые \&quot;Викинги\&quot; из севера.&quot;;</div>
      <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_string_escape_quotes2.html'>Попробуйте сами &raquo;</a>
    </div>
    <p>Последовательность <code class='w3-codespan'>\'</code>&nbsp; вставляет одинарную кавычку в строку:<p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        var x = 'Это\' правильно.';<br>
      </div>
      <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_string_escape_quotes1.html'>Попробуйте сами &raquo;</a>
    </div>
    <p>Последовательность <code class='w3-codespan'>\\</code>&nbsp; вставляет обратный слэш в строку:<p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        var x = &quot;Символ \\ называется обратной косой чертой (обратным слэшем).&quot;;<br>
      </div>
      <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_string_escape_backslash.html'>Попробуйте сами &raquo;</a>
    </div>

    <p>Шесть других экранирующих последовательностей, валидных в JavaScript:</p>
    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:25%'>Код</th>
        <th>Результат</th>
      </tr>
      <tr>
        <td>\b</td>
        <td>Backspace (возврат на одну позицию)</td>
      </tr>
      <tr>
        <td>\f</td>
        <td>Подача формы</td>
      </tr>
      <tr>
        <td>\n</td>
        <td>Новая линия (новая строка)</td>
      </tr>
      <tr>
        <td>\r</td>
        <td>Возврат каретки</td>
      </tr>
      <tr>
        <td>\t</td>
        <td>Горизонтальный табулятор</td>
      </tr>
      <tr>
        <td>\v</td>
        <td>Вертикальный табулятор</td>
      </tr>
    </table>

    <div class='w3-panel w3-note'>
      <p>Вышеуказанные 6 управляющих символов изначально были предназначены для управления пишущими машинками, телетайпами и факсимильными аппаратами. Они не имеют никакого смысла в HTML.</p>
    </div>
    <hr>
      <?php include '../include/adinfeed.php'; ?>

    <h2>Прерывание длинных строк кода</h2>
    <p>Для лучшей читаемости программисты часто предпочитают избегать строк кода длиннее 80 символов.</p>
    <p>Если JavaScript объявление (оператор) не помещается в одну строку, лучше всего его разбить после объявления (оператора):</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        document.getElementById(&quot;demo&quot;).innerHTML =<br>&quot;Hello Dolly!&quot;;</div>
      <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_statements_linebreak.html' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>Вы также можете разбить строку кода <b>внутри текстовой строки</b> с помощью одного обратного слэша:</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        document.getElementById(&quot;demo&quot;).innerHTML =
        &quot;Hello \<br>Dolly!&quot;;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_string_break.html' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-panel w3-note'>
      <p>Метод обратного слэша <code class='w3-codespan'>\</code> не является предпочтительным методом. Это может не иметь универсальной поддержки. Некоторые браузеры не допускают пробелов за символом обратного слэша <code class='w3-codespan'>\</code>.</p>
    </div>

    <p>Более безопасный способ разбить строку, это использовать добавление строки:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        document.getElementById(&quot;demo&quot;).innerHTML = &quot;Hello &quot; + <br>&quot;Dolly!&quot;;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_string_break_ok.html' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <p>Вы не можете разбить строку кода с помощью обратного слэша:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        document.getElementById(&quot;demo&quot;).innerHTML = \ <br>&quot;Hello Dolly!&quot;;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_strings_codebreak.html' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
      <?php include '../include/adinfeed.php'; ?>
    <h2>Строки могут быть объектами</h2>
    <p>Обычно строки JavaScript являются примитивными значениями, созданными из литералов:</p>
    <p><code class='w3-codespan'>var firstName = &quot;John&quot;;</code></p>
    <p>Но строки также могут быть определены как объекты с ключевым словом <code class='w3-codespan'>new</code>:</p>
    <p><code class='w3-codespan'>var firstName = new String(&quot;John&quot;);</code></p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        var x = &quot;John&quot;;<br>
        var y = new String(&quot;John&quot;);<br><br>
        // typeof x вернёт строку<br>// typeof y вернёт объект</div>
      <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_string_object.html' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-panel w3-note'>
      <p>Не создавайте строки как объекты. Это замедляет скорость выполнения.<br>
        Ключевое слово <code class='w3-codespan'>new</code> усложняет код. Это может привести к неожиданным результатам:</p>
    </div>

    <p>При использовании оператора <code class='w3-codespan'>==</code> одинаковые строки равны:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        var x = &quot;John&quot;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
        var y = new String(&quot;John&quot;);<br><br>
        // (x == y) верно, потому что х и у имеют равные значения</div>
      <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_string_object1.html' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>При использовании оператора <code class='w3-codespan'>===</code> одинаковые строки не равны, поскольку оператор <code class='w3-codespan'>===</code> ожидает равенства как по типу, так и по значению.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        var x = &quot;John&quot;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
        var y = new String(&quot;John&quot;);<br><br>
        // (x === y) является false (неверно), потому что x и y имеют разные типы (строка и объект)
      </div>
      <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_string_object2.html' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>Или даже хуже. Объекты нельзя сравнивать:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        var x = new String(&quot;John&quot;);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
        var y = new String(&quot;John&quot;);<br><br>
        // (x == y) является false (неверно), потому что х и у разные объекты<br></div>
      <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_string_object3.html' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        var x = new String(&quot;John&quot;);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
        var y = new String(&quot;John&quot;);<br><br>
        // (x === y) является false (неверно), потому что х и у разные объекты<br></div>
      <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_string_object4.html' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-panel w3-note'>
      <p>Обратите внимание на разницу между <code class='w3-codespan'>(x==y)</code> и <code class='w3-codespan'>(x===y)</code>.<br>Сравнение двух JavaScript объектов будет <strong>всегда</strong> возвращать <code class='w3-codespan'>false</code>.</p>
    </div>
    <hr>
      <?php include '../include/adinfeed.php'; ?>

    <form autocomplete='off' spellcheck='false' id='w3-exerciseform' action='https://www.w3schools.com/js/exercise_js.asp?filename=exercise_js_strings1' method='post' target='_blank'>
      <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений</h2>
      <div class='exercisewindow'>
        <h2>Упражнение:</h2>
        <p>Используйте свойство <code class='w3-codespan'>length</code>, чтобы указать длину <code class='w3-codespan'>txt</code>.</p>
        <div class='exerciseprecontainer'>
<pre>
var txt = 'Hello World!';
var x = <input name='ex1' maxlength='10' style='width: 105px;'>;
alert(x);
</pre>
        </div>
        <br>
        <button type='submit' class='w3-btn w3-margin-bottom'>Отправить ответ &raquo;</button>
      </div>
    </form>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='js_events.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='js_string_methods.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>