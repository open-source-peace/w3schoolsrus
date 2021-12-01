<?php include '../include/head.php'; ?>

<title>JavaScript Функции. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Функция - это блок кода, предназначенный для выполнения конкретной задачи. JS-функция выполняется, когда что-то вызывает её. Синтакис функции, вызов, возврат. Локальные переменные. Примеры кода. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
  <h1>JavaScript <span class='color_h1'>Функции</span></h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='js_datatypes.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='js_objects.php'>Next &#10095;</a>
  </div>
  <hr>
  <p class='intro'><strong>JavaScript функция</strong> - это блок кода, предназначенный для выполнения конкретной задачи.</p>
  <p class='intro'><strong>JavaScript функция</strong> выполняется, когда &quot;что-то&quot; вызывает её.</p>
  <hr>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      function myFunction(p1, p2) {<br>
      &nbsp; return p1 * p2;&nbsp;&nbsp;
      //  Функция возвращает произведение p1 и p2<br>
      }<br>
    </div>
    <a target='_blank' href='../jstryit/tryjs_functions.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Синтаксис функции</h2>
  <p>JavaScript функция определяется с помощью ключевого слова <code class='w3-codespan'>function</code>, за которым следует <strong>имя</strong>, за которым следуют скобки <strong>()</strong>.</p>

  <p>Имена функций могут содержать буквы, цифры, подчеркивания и знаки доллара (те же правила, что и для переменных).</p>
  <p>Круглые скобки могут включать имена параметров, разделенные запятыми:<br>
    <strong>(<em>параметр1, параметр2, ...</em>)</strong></p>
  <p>Код, который должен быть выполнен функцией, помещен в фигурные скобки: <strong>{}</strong></p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      function <em>имя</em>(<em>параметр1, параметр2, параметр3</em>) {<br>
      &nbsp; // <em>код для выполнения</em><br>
      }
    </div>
  </div>

  <p><strong>Параметры</strong> функции указаны в скобках () в определении функции.</p>
  <p><strong>Аргументы</strong> функции - это <strong>значения</strong>, полученные функцией при её вызове.</p>
  <p>Внутри функции аргументы (параметры) ведут себя как локальные переменные.</p>

  <div class='w3-panel w3-note'>
    <p>Функция во многом совпадает с процедурой или подпрограммой в других языках программирования.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Вызов функции</h2>
  <p>Код внутри функции будет выполняться, когда 'что-то' <strong>вызывает</strong> функцию (обращается к функции):</p>
  <ul>
    <li>Когда происходит событие (когда пользователь нажимает кнопку)</li>
    <li>Когда она вызывается (обращаются) из кода JavaScript</li>
    <li>Автоматически (самостоятельно вызывается)</li>
  </ul>
  <p>Вы узнаете намного больше о вызове функций позже в этом учебнике.</p>
  <hr>

  <h2>Возврат функции</h2>
  <p>Когда JavaScript достигает объявления <code class='w3-codespan'>return</code>, функция прекращает выполнение.</p>
  <p>Если функция была вызвана из объявления, JavaScript 'вернётся' для выполнения кода после вызова объявления.</p>
  <p>Функции часто вычисляют <strong>возвращаемое значение</strong>. Возвращаемое значение &quot;возвращается&quot; обратно &quot;вызывающему&quot;:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <p>Рассчитайте произведение двух чисел и верните результат:</p>
    <div class='w3-code notranslate jsHigh'>
      var x = myFunction(4, 3);&nbsp;&nbsp;&nbsp;// Функция вызывается, возвращаемое значение заканчивается в x<br><br>
      function myFunction(a, b) {<br>
      &nbsp; return a * b;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
      // Функция возвращает произведение a и b<br>
      }<br>
    </div>
    <p>Результат в х будет:</p>
    <div class='w3-white w3-padding notranslate'>
      <code>
        12
      </code>
    </div>
    <a target='_blank' href='../jstryit/tryjs_function_return.html' class='w3-btn w3-margin-bottom w3-margin-top'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>

  <h2>Почему функции?</h2>
  <p>Вы можете повторно использовать код: определите код один раз и используйте его много раз.</p>
  <p>Вы можете использовать один и тот же код много раз с разными аргументами, чтобы получить разные результаты.</p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <p>Перевести Фаренгейты в градусы Цельсия:</p>
    <div class='w3-code notranslate jsHigh'>
      function toCelsius(fahrenheit) {<br>
      &nbsp; return (5/9) * (fahrenheit-32);<br>
      }<br>document.getElementById(&quot;demo&quot;).innerHTML = toCelsius(77);</div>
    <a target='_blank' href='../jstryit/tryjs_farenheit_to_celsius.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Оператор () вызывает функцию</h2>
  <p>Используя приведенный выше пример, <code class='w3-codespan'>toCelsius</code> ссылается на объект функции, а
    <code class='w3-codespan'>toCelsius()</code> ссылается на результат функции.</p>
  <p>Доступ к функции без () вернет определение функции вместо результата функции:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      function toCelsius(fahrenheit) {<br>
      &nbsp; return (5/9) * (fahrenheit-32);<br>
      }<br>document.getElementById(&quot;demo&quot;).innerHTML = toCelsius;</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_farenheit_to_celsius_2.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Функции, используемые в качестве переменных</h2>
  <p>Функции можно использовать так же, как вы используете переменные, во всех типах формул, назначений и вычислений.</p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <p>Вместо использования переменной для хранения возвращаемого значения функции:</p>
    <div class='w3-code notranslate jsHigh'>
      var x = toCelsius(77);<br>var text = &quot;Температура &quot; + x + &quot; Цельсия&quot;;
    </div>
    <p>Вы можете использовать функцию напрямую, как значение переменной:</p>
    <div class='w3-code notranslate jsHigh'>
      var text = &quot;Температура &quot; + toCelsius(77) + &quot; Цельсия&quot;;
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_function_variable.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>

  <div class='w3-panel w3-note'>
    <p>Позже в JavaScript-учебнике на нашем сайте <strong>W3Schools на русском</strong> вы узнаете намного больше о функциях в языке JavaScript.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Локальные переменные</h2>
  <p>Переменные, объявленные в функции JavaScript, становятся <strong>LOCAL</strong> для функции.</p>
  <p>Доступ к локальным переменным возможен только из функции.</p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      // код здесь НЕ может использовать carName<br><br>
      function myFunction() {<br>
      &nbsp;&nbsp;var carName = &quot;Volvo&quot;;<br>
      &nbsp;&nbsp;// код здесь МОЖЕТ использовать carName<br>
      }<br><br>
      // код здесь НЕ может использовать carName
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_function_scope.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <p>Поскольку локальные переменные распознаются только внутри их функций, переменные с одинаковым именем могут использоваться в разных функциях.</p>
  <p>Локальные переменные создаются при запуске функции и удаляются по завершении функции.</p>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <form autocomplete='off' spellcheck='false' id='w3-exerciseform' action='https://www.w3schools.com/js/exercise_js.asp?filename=exercise_js_functions1' method='post' target='_blank'>
    <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений</h2>
    <div class='exercisewindow'>
      <h2>Упражнение:</h2>
      <p>Выполнить функцию с именем <code class='w3-codespan'>myFunction</code>.</p>
      <div class='exerciseprecontainer'>
<pre>
function myFunction() {
  alert('Hello World!');
}
<input name='ex1' maxlength='12' style='width: 124px;'>;
</pre>
      </div>
      <br>
      <button type='submit' class='w3-btn w3-margin-bottom'>Отправить ответ &raquo;</button>
    </div>
  </form>
  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='js_datatypes.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='js_objects.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>