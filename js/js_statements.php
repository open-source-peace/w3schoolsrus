<?php include '../include/head.php'; ?>

<title>JavaScript Инструкции / Заявления. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Инструкции. Какие бывают инструкции в JavaScript? Заявления / Объявления. Программы. Ключевые слова. Точка с запятой. Пробел. Длина строки и разрывы строк. Блоки кода. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
  <h1>JavaScript <span class='color_h1'>Инструкции / Заявления</span></h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='js_output.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='js_syntax.php'>Next &#10095;</a>
  </div>
  <p><strong>Инструкция</strong> — это элемент языка, задающая полное описание действия, которое необходимо выполнить. Каждая инструкция представляет собой законченную фразу языка программирования и определяет некоторый вполне законченный этап обработки данных.</p>
  <hr>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x, y, z;&nbsp;&nbsp;&nbsp; // Заявление 1<br>
      x = 5;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Заявление 2<br>
      y = 6;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Заявление 3<br>
      z = x + y;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Заявление 4<br>
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_statements.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Программы</h2>
  <p><strong>Компьютерная программа</strong> - это список &quot;инструкций&quot;, которые должны быть &quot;выполнены&quot; компьютером.</p>
  <p>На языке программирования эти инструкции по программированию называются <strong>заявлениями</strong> (или объявлениями).</p>
  <p><strong>Программа на JavaScript</strong> - это список программных <strong>инструкций</strong>.</p>

  <div class='w3-panel w3-note'>
    <p>В HTML программы JavaScript выполняются непосредственно веб-браузером (на стороне клиента).</p>
  </div>
  <hr>

  <h2>JavaScript Инструкции</h2>
  <p>JavaScript инструкции состоят из: значений, операторов, выражений, ключевых слов и комментариев.</p>
  <p>Эта инструкция указывает браузеру написать &quot;Hello Dolly.&quot; внутри HTML элемента с id=&quot;demo&quot;:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      document.getElementById(&quot;demo&quot;).innerHTML = &quot;Hello Dolly.&quot;;</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_statement.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>

  <p>Большинство программ JavaScript содержат много различных JavaScript заявлений (инструкций).</p>
  <p>Инструкции выполняются друг за другом в том же порядке, в котором они написаны в коде.</p>

  <div class='w3-panel w3-note'>
    <p>Программы JavaScript (JavaScript заявления / инструкции) часто называют JavaScript кодом.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Точка с запятой ;</h2>
  <p>Точки с запятой разделяют JavaScript инструкции.</p>
  <p>Добавьте точку с запятой в конце каждой выполняемой инструкции:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      var a, b, c;&nbsp;&nbsp;&nbsp;&nbsp; // Заявить 3 переменные a, b, c<br>a = 5;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      // Присвоить значение 5 переменной а<br>
      b = 6;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Присвоить значение 6 переменной b<br>
      c = a + b;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Присвоить сумму a и b переменной c<br>
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_statements_semicolon1.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>

  <p>Когда они разделены точкой с запятой, допускается несколько инструкций в одной строке:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      a = 5; b = 6; c = a + b;
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_statements_semicolon2.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>

  <div class='w3-panel w3-note'>
    <p>В Интернете вы можете увидеть примеры без точек с запятой. Завершение инструкций точкой с запятой не требуется, но настоятельно рекомендуется.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Пробел</h2>
  <p>JavaScript игнорирует несколько пробелов. Вы можете добавить лишние пробелы в ваш скрипт, чтобы сделать его более читабельным.</p>
  <p>Следующие строки эквивалентны:</p>

  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      var person = &quot;Hege&quot;;<br>
      var person=&quot;Hege&quot;;
    </div>
  </div>
  <p>Хорошей практикой является размещение пробелов вокруг операторов ( = + - * / ):</p>

  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      var x = y + z;</div>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Длина строки и разрывы строк</h2>
  <p>Для лучшей читаемости программисты часто предпочитают избегать строк кода длиннее 80 символов.</p>
  <p>Если JavaScript объявление не помещается в одну строку, лучше всего его прервать после оператора (перенести на следующую строку):</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      document.getElementById(&quot;demo&quot;).innerHTML =<br>&quot;Hello Dolly!&quot;;</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_statements_linebreak.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Блоки кода</h2>
  <p>JavaScript инструкции могут быть сгруппированы в блоки кода внутри фигурных скобок {...}.</p>
  <p>Целью блоков кода является определение инструкций, которые будут выполняться вместе.</p>
  <p>В одном месте вы найдете инструкции, сгруппированные по блокам, в функциях JavaScript:</p>

  <div class='w3-example'>
    <h3>Примеры</h3>
    <div class='w3-code notranslate jsHigh'>
      function myFunction() {<br>
      &nbsp;&nbsp;document.getElementById(&quot;demo1&quot;).innerHTML = &quot;Hello Dolly!&quot;;<br>
      &nbsp;&nbsp;document.getElementById(&quot;demo2&quot;).innerHTML = &quot;How are you?&quot;;<br>
      }<br>
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_statements_blocks.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>

  <div class='w3-panel w3-note'>
    <p>В этом учебнике используется 2 пробела для блоков кода.<br>
      Вы узнаете больше о функциях позже в этом учебнике.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Ключевые слова</h2>
  <p>JavaScript инструкции часто начинаются с <strong>ключевого слова</strong> чтобы определить действие JavaScript, которое нужно выполнить.</p>
  <p>Посетите наш справочник &quot;Зарезервированные слова&quot;, чтобы просмотреть полный список <a href='js_reserved.php'>JavaScript ключевых слов</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
  <p>Вот список некоторых ключевых слов, которые вы будете изучать в этом учебнике:</p>
  <table class='w3-table-all' style='width: 100%'>
    <tr>
      <th style='height: 25px'>Ключевое слово</th>
      <th style='height: 25px'>Описание</th>
    </tr>
    <tr>
      <td>break</td>
      <td>Завершает переключатель (switch) или цикл (loop)</td>
    </tr>
    <tr>
      <td>continue</td>
      <td>Выходит из цикла и начинается сверху</td>
    </tr>
    <tr>
      <td>debugger</td>
      <td>Останавливает выполнение JavaScript и вызывает (если доступно) функцию отладки (дебаггинг)</td>
    </tr>
    <tr>
      <td>do ... while</td>
      <td>Выполняет блок инструкций и повторяет блок, пока условие истинно (true)</td>
    </tr>
    <tr>
      <td>for</td>
      <td>Указывает блок инструкций, которые должны быть выполнены, если условие истинно (true)</td>
    </tr>
    <tr>
      <td>function</td>
      <td>Заявляет функцию</td>
    </tr>
    <tr>
      <td>if ... else</td>
      <td>Указывает блок инструкций для выполнения в зависимости от условия</td>
    </tr>
    <tr>
      <td>return</td>
      <td>Выход из функции</td>
    </tr>
    <tr>
      <td>switch</td>
      <td>Указывает блок инструкций для выполнения в зависимости от различных случаев</td>
    </tr>
    <tr>
      <td>try ... catch</td>
      <td>Реализует обработку ошибок в блоке инструкций</td>
    </tr>
    <tr>
      <td>var</td>
      <td>Заявляет переменную</td>
    </tr>
  </table>

  <div class='w3-panel w3-note'>
    <p>Ключевые слова JavaScript являются зарезервированными словами. Зарезервированные слова не могут быть использованы в качестве имён для переменных.</p>
  </div>
  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='js_output.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='js_syntax.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>