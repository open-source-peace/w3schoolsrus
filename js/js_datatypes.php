<?php include '../include/head.php'; ?>

<title>JavaScript Типы данных. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Типы данных. Переменные JavaScript могут содержать множество типов данных: числа, строки, объекты, массивы, булевы значения и многое другое. Концепция типов данных. Примеры кода. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
  <h1>JavaScript <span class='color_h1'>Типы данных</span></h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='js_assignment.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='js_functions.php'>Next &#10095;</a>
  </div>
  <hr>
  <h2>JavaScript Типы данных</h2>
  <p>Переменные JavaScript могут содержать множество <strong>типов данных</strong>: числа, строки, объекты и многое другое:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      var length = 16;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Число<br>
      var lastName = &quot;Johnson&quot;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Строка<br>
      var
      x = {firstName:&quot;John&quot;, lastName:&quot;Doe&quot;};&nbsp;&nbsp;&nbsp; // Объект
    </div>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Концепция типов данных</h2>
  <p>В программировании типы данных являются важной концепцией.</p>
  <p>Чтобы иметь возможность работать с переменными, важно знать о типе данных.</p>
  <p>Без типов данных компьютер не может безопасно решить эту проблему:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      var x = 16 + &quot;Volvo&quot;;</div>
  </div>
  <p>Есть ли смысл добавлять &quot;Volvo&quot; к шестнадцати? Это приведёт к ошибке или покажет результат?</p>
  <p>JavaScript будет обрабатывать приведенный выше пример как:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      var x =
      &quot;16&quot; + &quot;Volvo&quot;;</div>
  </div>

  <div class='w3-panel w3-note'>
    <p>При добавлении числа и строки JavaScript будет обрабатывать число как строку.</p>
  </div>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 16 + &quot;Volvo&quot;;</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_datatypes_addstring.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = &quot;Volvo&quot; + 16;</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_datatypes_addstring2.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <p>JavaScript определяет выражения слева направо. Разные последовательности могут давать разные результаты:</p>
  <div class='w3-example'>
    <h3>JavaScript:</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 16 + 4 + &quot;Volvo&quot;;
    </div>

    <p>Результат:</p>
    <div class='w3-white w3-padding notranslate'>
      <code>20Volvo</code>
    </div>
    <a class='w3-btn w3-margin-bottom w3-margin-top' href='../jstryit/tryjs_datatypes_addstrings_1.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <div class='w3-example'>
    <h3>JavaScript:</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = &quot;Volvo&quot; + 16 + 4;
    </div>

    <p>Результат:</p>
    <div class='w3-white w3-padding notranslate'>
      <code>Volvo164</code>
    </div>
    <a class='w3-btn w3-margin-bottom w3-margin-top' href='../jstryit/tryjs_datatypes_addstrings_2.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <p>В первом примере JavaScript обрабатывает 16 и 4 как числа, пока не достигнет &quot;Volvo&quot;.</p>
  <p>Во втором примере, поскольку первый операнд является строкой, все операнды обрабатываются как строки.</p>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Типы являются динамическими</h2>
  <p>JavaScript имеет динамические типы. Это означает, что одна и та же переменная может использоваться для хранения разных типов данных (т.е. меняться при разных условиях):</p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Здесь x не определён<br>
      x = 5;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Здесь x является числом<br>
      x = &quot;John&quot;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Здесь x является строкой
    </div>
    <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_datatypes_dynamic.html'>Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>JavaScript Строки</h2>
  <p>Строка (или текстовая строка) представляет собой последовательность символов, например &quot;John Doe&quot;.</p>
  <p>Строки пишутся в кавычках. Вы можете использовать одинарные или двойные кавычки:<br>
  </p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var
      carName1 = &quot;Volvo XC60&quot;;&nbsp;&nbsp; // Использование двойных кавычек<br>
      var
      carName2 = 'Volvo XC60';&nbsp;&nbsp; // Использование одинарных кавычек</div>
    <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_datatypes_string_quotes.html'>Попробуйте сами &raquo;</a>
  </div>
  <p>Вы можете использовать кавычки внутри строки, если они не соответствуют кавычкам, окружающим строку:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var answer1 = &quot;Все нормально&quot;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      // Одинарная кавычка внутри двойных кавычек<br>
      var answer2 = 'Его зовут 'Johnny'';&nbsp;&nbsp;&nbsp;
      // Одинарные кавычки внутри двойных кавычек<br>
      var answer3 = 'Его зовут 'Johnny'';&nbsp;&nbsp;&nbsp;
      // Двойные кавычки внутри одинарных кавычек
    </div>
    <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_datatypes_string.html'>Попробуйте сами &raquo;</a></div>
  <p>Вы узнаете больше о строках позже в этом учебнике.</p>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Числа</h2>
  <p>JavaScript имеет только один тип чисел.</p>
  <p>Числа могут быть написаны <b>из</b> или <b>без</b> десятичных знаков:</p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x1 = 34.00;&nbsp;&nbsp;&nbsp;&nbsp; // Написано с десятичными знаками<br>
      var x2 = 34;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Написано без десятичных знаков
    </div>
    <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_datatypes_numbers.html'>Попробуйте сами &raquo;</a>
  </div>
  <p>Очень большие или очень маленькие числа могут быть написаны с научной (экспоненциальной) нотацией:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var y = 123e5;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// 12300000<br>
      var z = 123e-5;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// 0.00123</div>
    <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_datatypes_numbers_large.html'>Попробуйте сами &raquo;</a></div>
  <p>Вы узнаете больше о числах позже в этом учебнике.</p>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Булевы (логические) значения</h2>
  <p>Булевых может быть только два значения: <code class='w3-codespan'>true</code> или <code class='w3-codespan'>false</code> (истина или ложь).</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 5;<br>var y = 5;<br>var z = 6;<br>(x == y)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      // Возвращает true<br>(x == z)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Возвращает false</div>
    <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_datatypes_bolean.html'>Попробуйте сами &raquo;</a></div>
  <p>Булевы значения часто используются в условном тестировании.</p>
  <p>Вы узнаете больше об условном тестировании позже в этом учебнике.</p>
  <hr>

  <h2>JavaScript Массивы (arrays)</h2>
  <p>JavaScript массивы пишутся в квадратных скобках.</p>
  <p>Элементы массива разделяются запятыми.</p>
  <p>Следующий код объявляет (создает) массив с именем <code class='w3-codespan'>cars</code>, содержащий три элемента (названия машин):</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var cars = [&quot;Saab&quot;, &quot;Volvo&quot;, &quot;BMW&quot;];
    </div>
    <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_datatypes_array.html'>Попробуйте сами &raquo;</a>
  </div>

  <p>Индексы массива начинаются с нуля, что означает, что первый элемент равен [0], второй [1] и т.д.</p>
  <p>Подробнее о массивах вы узнаете далее в этом учебнике.</p>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Объекты</h2>
  <p>JavaScript объекты пишутся с помощью фигурных скобок <code class='w3-codespan'>{}</code>.</p>
  <p>Свойства объекта записываются в виде пар имя-значение, разделенных запятыми.</p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var person = {firstName:&quot;John&quot;, lastName:&quot;Doe&quot;, age:50, eyeColor:&quot;blue&quot;};<br>
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_datatypes_object.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <p>Объект (персона) в примере выше имеет 4 свойства: firstName, lastName, age и eyeColor.</p>
  <p>Вы узнаете больше об объектах позже в этом учебнике.</p>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Оператор typeof</h2>
  <p>Вы можете использовать оператор JavaScript <code class='w3-codespan'>typeof</code> чтобы найти тип JavaScript переменной.</p>
  <p>Оператор <code class='w3-codespan'>typeof</code> возвращает тип переменной или выражения:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      typeof &quot;&quot;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает
      &quot;string&quot;<br>
      typeof &quot;John&quot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает
      &quot;string&quot;<br>
      typeof &quot;John Doe&quot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает
      &quot;string&quot;</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_datatypes_typeof_string.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      typeof 0&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает
      &quot;number&quot;<br>
      typeof 314&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Возвращает
      &quot;number&quot;<br>
      typeof 3.14&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Возвращает
      &quot;number&quot;<br>
      typeof (3)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Возвращает
      &quot;number&quot;<br>typeof (3 + 4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Возвращает
      &quot;number&quot;</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_datatypes_typeof_number.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Undefined / неопределённое значение</h2>
  <p>В JavaScript переменная без значения имеет значение <code class='w3-codespan'>undefined</code>.
    Тип также <code class='w3-codespan'>undefined</code>.</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var car;&nbsp;&nbsp;&nbsp; // Значение не определено, тип не определен</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_datatypes_undefined.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <p>Любую переменную можно очистить, установив значение в <code class='w3-codespan'>undefined</code>.
    Тип также будет <code class='w3-codespan'>undefined</code>.</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      car = undefined;&nbsp;&nbsp;&nbsp; // Значение не определено, тип не определен</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_datatypes_undefined_2.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Пустые значения</h2>
  <p>Пустое значение не имеет ничего общего с <code class='w3-codespan'>undefined</code>.</p>
  <p>Пустая строка имеет допустимое значение и тип.</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var car = &quot;&quot;;&nbsp;&nbsp;&nbsp; // Значение является &quot;&quot;, typeof является &quot;string&quot;</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_datatypes_empty.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Null / Ноль</h2>
  <p>В JavaScript <code class='w3-codespan'>null</code> - это &quot;ничто&quot;. Предполагается, что это нечто, чего не существует.</p>
  <p>К сожалению, в JavaScript, тип данных <code class='w3-codespan'>null</code> является объектом.</p>

  <div class='w3-panel w3-note'>
    <p>Можно считать ошибкой в JavaScript, когда <code class='w3-codespan'>typeof null</code> является объектом. Он должен быть <code class='w3-codespan'>null</code>.</p>
  </div>

  <p>Объект можно очистить, установив его в <code class='w3-codespan'>null</code>:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var person = {firstName:&quot;John&quot;, lastName:&quot;Doe&quot;, age:50, eyeColor:&quot;blue&quot;};<br>person = null;&nbsp;&nbsp;&nbsp; // Теперь значение равно null, но тип по-прежнему является object<br>
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_datatypes_null.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <p>Также можно очистить объект, установив его <code class='w3-codespan'>undefined</code>:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var person = {firstName:&quot;John&quot;, lastName:&quot;Doe&quot;, age:50, eyeColor:&quot;blue&quot;};<br>person = undefined;&nbsp;&nbsp; //	Теперь и значение, и тип не определены<br>
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_datatypes_undefined_1.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Различия между Undefined и Null</h2>
  <p><code class='w3-codespan'>undefined</code> и <code class='w3-codespan'>null</code> равноценны, но различаются по типу:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      typeof undefined&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      // undefined<br>typeof null&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      // object<br><br>null === undefined&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      // false<br>null == undefined&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      // true</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_datatypes_undefined_3.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Примитивные данные</h2>
  <p>Примитивное значение данных - это одно простое значение данных без дополнительных свойств и методов.</p>
  <p>Оператор <code class='w3-codespan'>typeof</code> может вернуть один из этих примитивных типов:</p>
  <ul>
    <li><code class='w3-codespan'>string</code></li>
    <li><code class='w3-codespan'>number</code></li>
    <li><code class='w3-codespan'>boolean</code></li>
    <li><code class='w3-codespan'>undefined</code></li>
  </ul>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      typeof &quot;John&quot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает &quot;string&quot; <br>
      typeof 3.14&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает &quot;number&quot;<br>
      typeof true &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает  &quot;boolean&quot;<br>typeof false&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает
      &quot;boolean&quot;<br>typeof x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      // Возвращает &quot;undefined&quot; (если х не имеет значения)</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_datatypes_typeof_primitive.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Комплексные данные</h2>
  <p>Оператор <code class='w3-codespan'>typeof</code> может вернуть один из двух сложных типов:</p>
  <ul>
    <li><code class='w3-codespan'>function</code></li>
    <li><code class='w3-codespan'>object</code></li>
  </ul>

  <p>Оператор <code class='w3-codespan'>typeof</code> возвращает &quot;object&quot; для объектов, массивов и null.</p>
  <p>Оператор <code class='w3-codespan'>typeof</code> не возвращает &quot;object&quot; для функций.</p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      typeof {name:'John', age:34}&nbsp;// Возвращает &quot;object&quot;<br>
      typeof [1,2,3,4]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      // Возвращает &quot;object&quot; (не &quot;массив&quot;, смотрите примечание выше)<br>
      typeof null&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Возвращает &quot;object&quot;<br>typeof function myFunc(){}&nbsp;&nbsp; // Возвращает &quot;function&quot;<br>
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_datatypes_typeof_complex.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>

  <div class='w3-panel w3-note'>
    <p>Оператор <code class='w3-codespan'>typeof</code> возвращает &quot;<code class='w3-codespan'>object</code>&quot; для массивов, потому что в JavaScript массивы являются объектами.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <form autocomplete='off' spellcheck='false' id='w3-exerciseform' action='https://www.w3schools.com/js/exercise_js.asp?filename=exercise_js_datatypes1' method='post' target='_blank'>
    <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений</h2>
    <div class='exercisewindow'>
      <h2>Упражнение:</h2>
      <p>Используйте комментарии, чтобы описать правильный тип данных следующих переменных:</p>
      <div class='exerciseprecontainer'>
<pre>
var length = 16;            // <input name='ex1' maxlength='6' style='width: 64px;'>
var lastName = 'Johnson';   // <input name='ex2' maxlength='6' style='width: 64px;'>
var x = {
  firstName: 'John',
  lastName: 'Doe'
};                          // <input name='ex3' maxlength='6' style='width: 64px;'>
</pre>
      </div>
      <br>
      <button type='submit' class='w3-btn w3-margin-bottom'>Отправить ответ &raquo;</button>
    </div>
  </form>
  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='js_assignment.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='js_functions.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
