<?php include '../include/head.php'; ?>

<title>JavaScript Арифметические операторы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Арифметические операторы. Какие бывают арифметические операторы в языке программирования JavaScript и как они применяются? Сложение, вычитание, умножение, деление, возведение в степень, модуль, инкремент, декремент. Операторы и операнды. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
  <h1>JavaScript <span class='color_h1'>Арифметические операторы</span></h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='js_operators.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='js_assignment.php'>Next &#10095;</a>
  </div>
  <hr>

  <h2>JavaScript Арифметические операторы</h2>
  <p><strong>Арифметические операторы</strong> выполняют арифметику над числами (литералами или переменными).</p>

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
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Арифметические операции</h2>
  <p>Типичная <strong>арифметическая операция</strong> оперирует двумя числами.</p>
  <p>Два числа могут быть литералами:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 100 + 50;
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_arithmetic_operation.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <p>или переменными:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = a + b;
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_arithmetic_variables.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <p>или выражениями:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = (100 + 50) * a;
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_arithmetic_expressions.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Операторы и операнды</h2>
  <p>Числа (в арифметической операции) называются <strong>операндами</strong>.</p>
  <p>Операция (которая выполняется между двумя операндами) определяется <strong>оператором</strong>.</p>

  <table class='w3-table-all'>
    <tr>
      <th>Операнд</th>
      <th>Оператор</th>
      <th>Операнд</th>
    </tr>
    <tr>
      <td>100</td>
      <td>+</td>
      <td>50</td>
    </tr>
  </table>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Сложение</h2>
  <p>Оператор <strong>сложения</strong> (<code class='w3-codespan'>+</code>) складывает числа:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 5;<br>
      var y = 2;<br>
      var z = x + y;
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_oper_add.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Вычитание</h2>
  <p>Оператор <strong>вычитания</strong> (<code class='w3-codespan'>-</code>) вычитает числа.</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 5;<br>
      var y = 2;<br>
      var z = x - y;
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_oper_sub.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Умножение</h2>
  <p>Оператор <strong>умножения</strong> (<code class='w3-codespan'>*</code>) умножает числа.</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 5;<br>
      var y = 2;<br>
      var z = x * y;
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_oper_mult.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Деление</h2>
  <p>Оператор <strong>деления</strong> (<code class='w3-codespan'>/</code>) делит числа.</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 5;<br>
      var y = 2;<br>
      var z = x / y;
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_oper_div.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Остаток</h2>
  <p>Оператор <strong>модуля</strong> (<code class='w3-codespan'>%</code>) возвращает остаток от деления.</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 5;<br>
      var y = 2;<br>
      var z = x % y;
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_oper_mod.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <div class='w3-container w3-note'>
    <p>В арифметике деление двух целых чисел дает <strong>частное</strong> и <strong>остаток</strong>.<br>
      В математике результатом <strong>операции по модулю</strong> является <strong>остаток</strong> арифметического деления.</p>
  </div>
  <hr>
  <h2>Приращение (инкрементинг)</h2>
  <p>Оператор <strong>инкремент</strong> (<code class='w3-codespan'>++</code>) увеличивает число.</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 5;<br>x++;<br>var z = x;</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_oper_increment.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Уменьшение (декрементинг)</h2>
  <p>Оператор <strong>декремент</strong> (<code class='w3-codespan'>--</code>) уменьшает число.</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 5;<br>
      x--;<br>
      var z = x;
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_oper_decrement.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Возведение в степень</h2>
  <p>Оператор <strong>возведения в степень</strong> (<code class='w3-codespan'>**</code>) возводит первый операнд в степень второго операнда.</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 5;<br>
      var z = x ** 2;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // результат 25
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_arithmetric_exponent1.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>

  <p>x ** y дает тот же результат, что и <code class='w3-codespan'>Math.pow(x,y)</code>:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 5;<br>
      var z =
      Math.pow(x,2);&nbsp;&nbsp; // результат 25
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_arithmetric_exponent2.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Приоритет оператора</h2>
  <p>Приоритет оператора описывает порядок выполнения операций в арифметическом выражении.</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 100 + 50 * 3;
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_arithmetic_precedence1.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>

  <p>Результат примера выше такой же, как 150 * 3, или он такой же, как 100 + 150?</p>
  <p>Сначала выполняется сложение или умножение?</p>
  <p>Как и в традиционной школьной математике, умножение делается первым.</p>
  <p>Умножение (<code class='w3-codespan'>*</code>) и деление (<code class='w3-codespan'>/</code>) имеют более высокий <strong>приоритет</strong>, чем сложение (<code class='w3-codespan'>+</code>) и вычитание (<code class='w3-codespan'>-</code>).</p>
  <p>И (также как в школьной математике) приоритет можно изменить с помощью скобок:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = (100 + 50) * 3;
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_arithmetic_precedence2.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <p>При использовании скобок, операции внутри скобок вычисляются первыми.</p>
  <p>Когда несколько операций имеют одинаковый приоритет (например, сложение и вычитание), они вычисляются слева направо:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 100 + 50 - 3;
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_arithmetic_precedence3.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>

  <h2>JavaScript Значения приоритета оператора</h2>

  <div class='w3-panel w3-warning'>
    <p>Бледно-красные записи указывают на ECMAScript 2015 (ES6) или выше.</p>
  </div>

  <table class='w3-table-all'>
    <tr>
      <th style='width:10%'>Значение</th>
      <th style='width:15%'>Оператор</th>
      <th>Описание</th>
      <th>Пример</th>
    </tr>
    <tr>
      <td>20</td>
      <td>( )</td>
      <td>Группировка выражений</td>
      <td>(3 + 4)</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>19</td>
      <td>.</td>
      <td>Член</td>
      <td>person.name</td>
    </tr>
    <tr>
      <td>19</td>
      <td>[]</td>
      <td>Член</td>
      <td>person[&quot;name&quot;]</td>
    </tr>
    <tr>
      <td>19</td>
      <td>()</td>
      <td>Вызов функции</td>
      <td>myFunction()</td>
    </tr>
    <tr>
      <td>19</td>
      <td>new</td>
      <td>Создание</td>
      <td>new Date()</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>17</td>
      <td>++</td>
      <td>Постфиксный инкремент</td>
      <td>i++</td>
    </tr>
    <tr>
      <td>17</td>
      <td>--</td>
      <td>Постфиксный декремент</td>
      <td>i--</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>16</td>
      <td>++</td>
      <td>Префикс инкремента</td>
      <td>++i</td>
    </tr>
    <tr>
      <td>16</td>
      <td>--</td>
      <td>Префикс декремента</td>
      <td>--i</td>
    </tr>
    <tr>
      <td>16</td>
      <td>!</td>
      <td>Не логический</td>
      <td>!(x==y)</td>
    </tr>
    <tr>
      <td>16</td>
      <td>typeof</td>
      <td>Тип</td>
      <td>typeof x</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr class='w3-pale-red'>
      <td>15</td>
      <td>**</td>
      <td>Возведение в степень (ES2016)</td>
      <td>10 ** 2</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>14</td>
      <td>*</td>
      <td>Умножение</td>
      <td>10 * 5</td>
    </tr>
    <tr>
      <td>14</td>
      <td>/</td>
      <td>Деление</td>
      <td>10 / 5</td>
    </tr>
    <tr>
      <td>14</td>
      <td>%</td>
      <td>Остаток от деления</td>
      <td>10 % 5</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>13</td>
      <td>+</td>
      <td>Сложение</td>
      <td>10 + 5</td>
    </tr>
    <tr>
      <td>13</td>
      <td>-</td>
      <td>Вычитание</td>
      <td>10 - 5</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>12</td>
      <td>&lt;&lt;</td>
      <td>Сдвиг влево</td>
      <td>x &lt;&lt; 2</td>
    </tr>
    <tr>
      <td>12</td>
      <td>&gt;&gt;</td>
      <td>Сдвиг вправо</td>
      <td>x &gt;&gt; 2</td>
    </tr>
    <tr>
      <td>12</td>
      <td>&gt;&gt;&gt;</td>
      <td>Сдвиг вправо (без знака)</td>
      <td>x &gt;&gt;&gt; 2</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>11</td>
      <td>&lt;</td>
      <td>Меньше чем</td>
      <td>x &lt; y&nbsp;</td>
    </tr>
    <tr>
      <td>11</td>
      <td>&lt;=</td>
      <td>Меньше или равно</td>
      <td>x &lt;= y</td>
    </tr>
    <tr>
      <td>11</td>
      <td>&gt;</td>
      <td>Больше чем</td>
      <td>x &gt; y</td>
    </tr>
    <tr>
      <td>11</td>
      <td>&gt;=</td>
      <td>Больше или равно</td>
      <td>x &gt;= y</td>
    </tr>
    <tr class='w3-pale-red'>
      <td>11</td>
      <td>in</td>
      <td>Свойство в объекте</td>
      <td>'PI' в Математике</td>
    </tr>
    <tr class='w3-pale-red'>
      <td>11</td>
      <td>instanceof</td>
      <td>Экземпляр объекта</td>
      <td>instanceof Array</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>10</td>
      <td>==</td>
      <td>Равно</td>
      <td>x == y</td>
    </tr>
    <tr>
      <td>10</td>
      <td>===</td>
      <td>Строгое равно</td>
      <td>x === y</td>
    </tr>
    <tr>
      <td>10</td>
      <td>!=</td>
      <td>Не равно</td>
      <td>x != y</td>
    </tr>
    <tr>
      <td>10</td>
      <td>!==</td>
      <td>Строгое не равно</td>
      <td>x !== y</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>9</td>
      <td>&amp;</td>
      <td>Побитовое AND</td>
      <td>x &amp; y</td>
    </tr>
    <tr>
      <td>8</td>
      <td>^</td>
      <td>Побитовое XOR</td>
      <td>x ^ y</td>
    </tr>
    <tr>
      <td>7</td>
      <td>|</td>
      <td>Побитовое OR</td>
      <td>x | y</td>
    </tr>
    <tr>
      <td>6</td>
      <td>&amp;&amp;</td>
      <td>Логическое AND</td>
      <td>x &amp;&amp; y</td>
    </tr>
    <tr>
      <td>5</td>
      <td>||</td>
      <td>Логическое OR</td>
      <td>x || y</td>
    </tr>
    <tr>
      <td>4</td>
      <td>? :</td>
      <td>Условие</td>
      <td>? 'Yes' : 'No'</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>3</td>
      <td>+=</td>
      <td>Присваивание</td>
      <td>x += y</td>
    </tr>
    <tr>
      <td>3</td>
      <td>/=</td>
      <td>Присваивание</td>
      <td>x /= y</td>
    </tr>
    <tr>
      <td>3</td>
      <td>-=</td>
      <td>Присваивание</td>
      <td>x -= y</td>
    </tr>
    <tr>
      <td>3</td>
      <td>*=</td>
      <td>Присваивание</td>
      <td>x *= y</td>
    </tr>
    <tr>
      <td>3</td>
      <td>%=</td>
      <td>Присваивание</td>
      <td>x %= y</td>
    </tr>
    <tr>
      <td>3</td>
      <td>&lt;&lt;=</td>
      <td>Присваивание</td>
      <td>x &lt;&lt;= y</td>
    </tr>
    <tr>
      <td>3</td>
      <td>&gt;&gt;=</td>
      <td>Присваивание</td>
      <td>x &gt;&gt;= y</td>
    </tr>
    <tr>
      <td>3</td>
      <td>&gt;&gt;&gt;=</td>
      <td>Присваивание</td>
      <td>x &gt;&gt;&gt;= y</td>
    </tr>
    <tr>
      <td>3</td>
      <td>&amp;=</td>
      <td>Присваивание</td>
      <td>x &amp;= y</td>
    </tr>
    <tr>
      <td>3</td>
      <td>^=</td>
      <td>Присваивание</td>
      <td>x ^= y</td>
    </tr>
    <tr>
      <td>3</td>
      <td>|=</td>
      <td>Присваивание</td>
      <td>x |= y</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr class='w3-pale-red'>
      <td>2</td>
      <td>yield</td>
      <td>Функция паузы</td>
      <td>yield x</td>
    </tr>
    <tr>
      <td>1</td>
      <td>,</td>
      <td>Запятая</td>
      <td>5 , 6</td>
    </tr>
  </table>

  <div class='w3-panel w3-note'>
    <p>Выражения в скобках полностью вычисляются до того, как значение используется в остальной части выражения.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <form autocomplete='off' spellcheck='false' id='w3-exerciseform' action='https://www.w3schools.com/js/exercise_js.asp?filename=exercise_js_operators2' method='post' target='_blank'>
    <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений</h2>
    <div class='exercisewindow'>
      <h2>Упражнение:</h2>
      <p>Разделите <code class='w3-codespan'>10</code> на <code class='w3-codespan'>2</code> и выведите результат.</p>
      <div class='exerciseprecontainer'>
<pre>
alert(10 <input name='ex1' maxlength='1' style='width: 15px;'> 2);
</pre>
      </div>
      <br>
      <button type='submit' class='w3-btn w3-margin-bottom'>Отправить ответ &raquo;</button>
    </div>
  </form>
  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='js_operators.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='js_assignment.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>