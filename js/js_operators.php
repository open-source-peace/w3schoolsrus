<?php include '../include/head.php'; ?>

<title>JavaScript Операторы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Операторы. Что такое операторы языка программирования JavaScript. Какие бывают операторы: присваивания, сравнения, арифметические, логические, строковые, битовые. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
  <h1>JavaScript <span class='color_h1'>Операторы</span></h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='js_const.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='js_arithmetic.php'>Next &#10095;</a>
  </div>
  <hr>

  <div class='w3-example'>
    <h3>Пример</h3>
    <p>Присвойте значения переменным и сложите их вместе:</p>
    <div class='w3-code notranslate jsHigh'>
      var x = 5;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// присвоить переменной x значение 5<br>
      var y = 2;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// присвоить переменной y значение 2<br>
      var z = x + y;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// присвоить переменной z значение 7 (x + y)
    </div>
    <a target='_blank' href='../jstryit/tryjs_oper.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>

  <p>Оператор <strong>присваивания</strong> (<code class='w3-codespan'>=</code>) присваивает значение переменной.</p>
  <div class='w3-example'>
    <h3>Присваивание</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 10;</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_oper_equal.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>

  <p>Оператор <strong>сложения</strong> (<code class='w3-codespan'>+</code>) слаживает числа:</p>
  <div class='w3-example'>
    <h3>Сложение</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 5;<br>
      var y = 2;<br>var z = x + y;
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_oper_add.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>

  <p>Оператор <strong>умножения</strong> (<code class='w3-codespan'>*</code>) умножает числа.</p>
  <div class='w3-example'>
    <h3>Умножение</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 5;<br>
      var y = 2;<br>var z = x * y;
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_oper_mult.html?filename=tryjs_oper_mult' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript арифметические операторы</h2>
  <p>Арифметические операторы используются для выполнения арифметических операций над числами:</p>

  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:25%'>Оператор</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td>+</td>
      <td>Сложение</td>
    </tr>
    <tr>
      <td>-</td>
      <td>Вычитание</td>
    </tr>
    <tr>
      <td>*</td>
      <td>Умножение</td>
    </tr>
    <tr>
      <td>**</td>
      <td>Возведение в степень (<a href='js_es6.php'>ES2016</a>)</td>
    </tr>
    <tr>
      <td>/</td>
      <td>Деление</td>
    </tr>
    <tr>
      <td>%</td>
      <td>Модуль (остаток от деления)</td>
    </tr>
    <tr>
      <td>++</td>
      <td>Инкремент (увеличение на 1)</td>
    </tr>
    <tr>
      <td>--</td>
      <td>Декремент (уменьшение на 1)</td>
    </tr>
  </table>

  <div class='w3-panel w3-note'>
    <p><strong>Арифметические операторы</strong> полностью описаны в разделе <strong><a href='js_arithmetic.php'>JS Арифметические</a></strong>.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Операторы присваивания</h2>
  <p><strong>Операторы присваивания</strong> присваивают значения переменным JavaScript.</p>

  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:25%'>Оператор</th>
      <th>Пример</th>
      <th>Такой же как</th>
    </tr>
    <tr>
      <td>=</td>
      <td>x = y</td>
      <td>x = y</td>
    </tr>
    <tr>
      <td>+=</td>
      <td>x += y</td>
      <td>x = x + y</td>
    </tr>
    <tr>
      <td>-=</td>
      <td>x -= y</td>
      <td>x = x - y</td>
    </tr>
    <tr>
      <td>*=</td>
      <td>x *= y</td>
      <td>x = x * y</td>
    </tr>
    <tr>
      <td>/=</td>
      <td>x /= y</td>
      <td>x = x / y</td>
    </tr>
    <tr>
      <td>%=</td>
      <td>x %= y</td>
      <td>x = x % y</td>
    </tr>
    <tr>
      <td>**=</td>
      <td>x **= y</td>
      <td>x = x ** y</td>
    </tr>
  </table>

  <p><strong>Оператор присваивания</strong> (<code class='w3-codespan'>+=</code>) добавляет значение переменной.</p>
  <div class='w3-example'>
    <h3>Присваивание</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 10;<br>x += 5;</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_oper_plusequal.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>

  <div class='w3-panel w3-note'>
    <p><strong>Операторы присваивания</strong> полностью описаны в разделе <strong><a href='js_assignment.php'>JS Присваивание</a></strong>.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Строковые операторы</h2>
  <p>Оператор <code class='w3-codespan'>+</code> также может быть использован для добавления (объединения) строк.</p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var txt1 = &quot;John&quot;;<br>
      var txt2 = &quot;Doe&quot;;<br>
      var txt3 = txt1 + &quot; &quot; + txt2;
    </div>
    <p>Результат txt3 будет:</p>
    <div class='w3-white w3-padding notranslate'>
      <code>John Doe</code></div>
    <a class='w3-btn w3-margin-bottom w3-margin-top' href='../jstryit/tryjs_oper_concatenate.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>

  <p>Оператор присваивания <code class='w3-codespan'>+=</code> также может использоваться для добавления (объединения) строк:</p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var txt1 = &quot;Сегодня очень &quot;;<br>
      txt1 += &quot;хороший день&quot;;
    </div>

    <p>Результат txt1 будет:</p>
    <div class='w3-white w3-padding notranslate'>
      <code>Сегодня очень хороший день</code></div>
    <a class='w3-btn w3-margin-bottom w3-margin-top' href='../jstryit/tryjs_oper_concat4.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <div class='w3-panel w3-note'>
    <p>При использовании в строках оператор <code class='w3-codespan'>+</code> называется <strong>оператором конкатенации (объединения)</strong>.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Добавление строк и чисел</h2>
  <p>Добавление двух чисел вернёт сумму этих чисел, но добавление числа и строки вернёт строку:</p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 5 + 5;<br>
      var y = '5' + 5;<br>
      var z = 'Hello' + 5;<br>
    </div>
    <p>Результат <em>x</em>,<em> y</em> и <em>z</em> будет:</p>
    <div class='w3-white w3-padding notranslate'>
      <code>
        10<br>
        55<br/>
        Hello5
      </code>
    </div>
    <a class='w3-btn w3-margin-bottom w3-margin-top' href='../jstryit/tryjs_oper_concat5.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>

  <div class='w3-panel w3-note'>
    <p>Если вы сложите число и строку, результатом будет строка!</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>

  <h2>JavaScript Операторы сравнения</h2>

  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:12%'>Оператор</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td>==</td>
      <td>равно</td>
    </tr>
    <tr>
      <td>===</td>
      <td>равное значение и равный тип</td>
    </tr>
    <tr>
      <td>!=</td>
      <td>не равно</td>
    </tr>
    <tr>
      <td>!==</td>
      <td>не равное значение или не равный тип</td>
    </tr>
    <tr>
      <td>&gt;</td>
      <td>больше чем</td>
    </tr>
    <tr>
      <td>&lt;</td>
      <td>меньше чем</td>
    </tr>
    <tr>
      <td>&gt;=</td>
      <td>больше или равно</td>
    </tr>
    <tr>
      <td>&lt;=</td>
      <td>меньше или равно</td>
    </tr>
    <tr>
      <td>?</td>
      <td>троичный оператор</td>
    </tr>
  </table>

  <div class='w3-panel w3-note'>
    <p>Операторы сравнения полностью описаны в разделе <strong><a href='js_comparisons.php'>JS Сравнения</a></strong>.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Логические операторы</h2>

  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:12%'>Оператор</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td>&amp;&amp;</td>
      <td>логическое и</td>
    </tr>
    <tr>
      <td>||</td>
      <td>логическое или</td>
    </tr>
    <tr>
      <td>!</td>
      <td>логическое не</td>
    </tr>
  </table>

  <div class='w3-panel w3-note'>
    <p>Логические операторы полностью описаны в разделе <strong><a href='js_comparisons.php'>JS Сравнения</a></strong>.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Типы операторов</h2>

  <table class='w3-table-all notranslate'>
    <tr>
      <th style='width:30%'>Оператор</th>
      <th>Описание</th>
    </tr>
    <tr>
      <td>typeof</td>
      <td>Возвращает тип переменной</td>
    </tr>
    <tr>
      <td>instanceof</td>
      <td>Возвращает true, если объект является образцом типа объекта</td>
    </tr>
  </table>

  <div class='w3-panel w3-note'>
    <p>Типы операторов полностью описаны в разделе <strong><a href='js_type_conversion.php'>JS Преобразование типов</a></strong>.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Битовые операторы</h2>
  <p>Битовые операторы работают на 32-битных числах.</p>
  <p>Любой числовой операнд в операции преобразуется в 32-разрядное число. Результат конвертируется обратно в число JavaScript.</p>

  <div class='w3-responsive'>
    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:12%'>Оператор</th>
        <th style='width:25%'>Описание</th>
        <th>Пример</th>
        <th>Такой же как</th>
        <th>Результат</th>
        <th style='width:15%'>Десятичная дробь</th>
      </tr>
      <tr>
        <td>&amp;</td>
        <td>AND</td>
        <td>5 &amp; 1</td>
        <td>0101 &amp; 0001</td>
        <td>0001</td>
        <td>&nbsp;1</td>
      </tr>
      <tr>
        <td>|</td>
        <td>OR</td>
        <td>5 | 1</td>
        <td>0101 | 0001</td>
        <td>0101</td>
        <td>&nbsp;5</td>
      </tr>
      <tr>
        <td>~</td>
        <td>NOT</td>
        <td>~ 5</td>
        <td>&nbsp;~0101</td>
        <td>1010</td>
        <td>&nbsp;10</td>
      </tr>
      <tr>
        <td>^</td>
        <td>XOR</td>
        <td>5 ^ 1</td>
        <td>0101 ^ 0001</td>
        <td>0100</td>
        <td>&nbsp;4</td>
      </tr>
      <tr>
        <td>&lt;&lt;</td>
        <td>Нулевое заполнение левого смещения</td>
        <td>5 &lt;&lt; 1</td>
        <td>0101 &lt;&lt; 1</td>
        <td>1010</td>
        <td>&nbsp;10</td>
      </tr>
      <tr>
        <td>&gt;&gt;</td>
        <td>Обозначение правого смещения</td>
        <td>5 &gt;&gt; 1</td>
        <td>0101 &gt;&gt; 1</td>
        <td>0010</td>
        <td>&nbsp; 2</td>
      </tr>
      <tr>
        <td>&gt;&gt;&gt;</td>
        <td>Нулевое заполнение правого смещения</td>
        <td>5 &gt;&gt;&gt; 1</td>
        <td>0101 &gt;&gt;&gt; 1</td>
        <td>0010</td>
        <td>&nbsp; 2</td>
      </tr>
    </table>
  </div>


  <div class='w3-container w3-note'>
    <p>В приведенных выше примерах используются 4-битные неподписанные примеры. Но JavaScript использует 32-битные числа со знаком.<br>Из-за этого в JavaScript ~ 5 не вернет 10. Он вернет -6.<br>
      ~00000000000000000000000000000101 вернёт 11111111111111111111111111111010</p>
    <p>Побитовые операторы полностью описаны в разделе <a href='js_bitwise.php'><strong>JS Побитовые операторы</strong></a>.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <form autocomplete='off' spellcheck='false' id='w3-exerciseform' action='https://www.w3schools.com/js/exercise_js.asp?filename=exercise_js_operators1' method='post' target='_blank'>
    <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений</h2>
    <div class='exercisewindow'>
      <h2>Упражнение:</h2>
      <p>Перемножьте <code class='w3-codespan'>10</code> и <code class='w3-codespan'>5</code> и выведите результат.</p>
      <div class='exerciseprecontainer'>
<pre>
alert(10 <input name='ex1' maxlength='1' style='width: 15px;'> 5);
</pre>
      </div>
      <br>
      <button type='submit' class='w3-btn w3-margin-bottom'>Отправить ответ &raquo;</button>
    </div>
  </form>
  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='js_const.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='js_arithmetic.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>