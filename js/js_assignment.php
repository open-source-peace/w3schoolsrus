<?php include '../include/head.php'; ?>

<title>JavaScript Присваивание. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Присваивание. Какие бывают операторы присваивания в языке программирования JavaScript. Оператор присваивания = присваивает значение переменной. Добавление, вычитание, умножение, деление, остаток. Примеры кода. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
  <h1>JavaScript <span class='color_h1'>Присваивание</span></h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='js_arithmetic.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='js_datatypes.php'>Next &#10095;</a>
  </div>
  <hr>

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
      <td>&lt;&lt;=</td>
      <td>x &lt;&lt;= y</td>
      <td>x = x &lt;&lt; y</td>
    </tr>
    <tr>
      <td>&gt;&gt;=</td>
      <td>x &gt;&gt;= y</td>
      <td>x = x &gt;&gt; y</td>
    </tr>
    <tr>
      <td>&gt;&gt;&gt;=</td>
      <td>x &gt;&gt;&gt;= y</td>
      <td>x = x &gt;&gt;&gt; y</td>
    </tr>
    <tr>
      <td>&amp;=</td>
      <td>x &amp;= y</td>
      <td>x = x &amp; y</td>
    </tr>
    <tr>
      <td>^=</td>
      <td>x ^= y</td>
      <td>x = x ^ y</td>
    </tr>
    <tr>
      <td>|=</td>
      <td>x |= y</td>
      <td>x = x | y</td>
    </tr>
    <tr>
      <td>**=</td>
      <td>x **= y</td>
      <td>x = x ** y</td>
    </tr>
  </table>

  <div class='w3-panel w3-note'>
    <p>Оператор <code class='w3-codespan'>**=</code> является экспериментальной частью предложения ECMAScript 2016 (ES7). Он не стабилен во всех браузерах. Не используйте его.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Примеры присваивания</h2>
  <p>Оператор присваивания <code class='w3-codespan'>=</code> присваивает значение переменной.</p>
  <div class='w3-example'>
    <h3>Присваивание</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 10;</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_assign_equal.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <p>Оператор присваивания <code class='w3-codespan'>+=</code> добавляет значение в переменную.</p>
  <div class='w3-example'>
    <h3>Присваивание</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 10;<br>x += 5;</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_assign_plusequal.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <p>Оператор присваивания <code class='w3-codespan'>-=</code> вычитает значение из переменной.</p>
  <div class='w3-example'>
    <h3>Присваивание</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 10;<br>x -= 5;</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_assign_minequal.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <p>Оператор присваивания <code class='w3-codespan'>*=</code> умножает переменную.</p>
  <div class='w3-example'>
    <h3>Присваивание</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 10;<br>x *= 5;</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_assign_multequal.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <p>Оператор присваивания <code class='w3-codespan'>/=</code> делит переменную.</p>
  <div class='w3-example'>
    <h3>Присваивание</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 10;<br>x /= 5;</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_assign_divequal.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <p>Оператор присваивания <code class='w3-codespan'>%=</code> присваивает остаток переменной.</p>
  <div class='w3-example'>
    <h3>Присваивание</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 10;<br>x %= 5;</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_assign_modequal.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <form autocomplete='off' spellcheck='false' id='w3-exerciseform' action='https://www.w3schools.com/js/exercise_js.asp?filename=exercise_js_operators4' method='post' target='_blank'>
    <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений</h2>
    <div class='exercisewindow'>
      <h2>Упражнение:</h2>
      <p>Используйте корректный <strong>оператор присваивания</strong> который приведёт к тому, что <code class='w3-codespan'>x</code> будет <code class='w3-codespan'>15</code> (также как <code class='w3-codespan'>x = x + y</code>).</p>
      <div class='exerciseprecontainer'>
<pre>
x = 10;
y = 5;
x <input name='ex1' maxlength='2' style='width: 25px;'> y;
</pre>
      </div>
      <br>
      <button type='submit' class='w3-btn w3-margin-bottom'>Отправить ответ &raquo;</button>
    </div>
  </form>
  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='js_arithmetic.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='js_datatypes.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>