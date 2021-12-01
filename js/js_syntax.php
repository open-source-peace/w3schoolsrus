<?php include '../include/head.php'; ?>

<title>JavaScript Синтаксис. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Синтаксис - набор правил по созданию программ на JavaScript. Значения, литералы, переменные, операторы, выражения, ключевые слова, комментарии, идентификаторы, верблюжий регистр, набор символов. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
  <h1>JavaScript <span class='color_h1'>Синтаксис</span></h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='js_statements.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='js_comments.php'>Next &#10095;</a>
  </div>
  <hr>
  <p class='intro'><strong>Синтаксис JavaScript</strong> - это набор правил по созданию программ на JavaScript:</p>
  <div class='w3-code w3-large w3-border notranslate jsHigh'>
    var x, y, z;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Как объявить переменные<br>
    x = 5; y = 6;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Как присвоить значения<br>
    z = x + y;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Как вычислить значения
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Значения</h2>
  <p><strong>Синтаксис JavaScript</strong> определяет два типа значений: фиксированные значения и значения переменных.</p>
  <p>Фиксированные значения называются <strong>литералами</strong>. Значения переменных называются <strong>переменными</strong>.</p>
  <hr>

  <h2>JavaScript Литералы</h2>
  <p>Наиболее важные правила для записи фиксированных значений:</p>
  <p><strong>Числа</strong> пишутся с десятичными знаками или без них:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      10.50<br><br>
      1001</div>
    <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_syntax_numbers.html'>Попробуйте сами &raquo;</a>
  </div>
  <p><strong>Строки</strong> - это текст, написанный в двойных или одинарных кавычках:</p>

  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      &quot;John Doe&quot;<br><br>
      'John Doe'
    </div>
    <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_syntax_strings.html'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Переменные</h2>
  <p>В языке программирования <strong>переменные</strong> используются для <strong>хранения</strong> значений данных.</p>
  <p>JavaScript использует ключевое слово <code class='w3-codespan'>var</code> для <strong>объявления</strong> переменных (от анг. variable - переменная).</p>
  <p><strong>Знак равенства</strong> используется для <strong>присвоения значений</strong> переменным.</p>
  <p>В этом примере x определяется как переменная. Затем х присваивается (даётся) значение 6:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      var x;<br><br>
      x = 6; </div>
    <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_syntax_variables.html'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Операторы</h2>
  <p>JavaScript использует <strong>арифметические операторы</strong> ( <code class='w3-codespan'>+</code> <code class='w3-codespan'>-</code> <code class='w3-codespan'>*</code> <code class='w3-codespan'>/</code> ) для
    <strong>вычисления</strong> значений:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      (5 + 6) * 10<br>
    </div>
    <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_syntax_operators.html'>Попробуйте сами &raquo;</a>
  </div>
  <p>JavaScript использует <strong>оператор присваивания</strong> ( <code class='w3-codespan'>=</code> ) для <strong>присвоения</strong> значений переменным:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      var x, y;<br>x = 5;<br>
      y = 6;</div>
    <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_syntax_assign.html'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Выражения</h2>
  <p>Выражение представляет собой комбинацию значений, переменных и операторов, которая вычисляет значение.</p>
  <p>Вычисление называется определением (результата).</p>
  <p>Например, 5 * 10 определяет 50:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      5 * 10
    </div>
    <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_syntax_expressions.html'>Попробуйте сами &raquo;</a>
  </div>
  <p>Выражения также могут содержать значения переменных:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      x * 10
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_syntax_expressions_variables.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <p>Значения могут быть разных типов, таких как числа и строки.</p>
  <p>Например, &quot;John&quot; + &quot; &quot; + &quot;Doe&quot; принимает значение &quot;John Doe&quot;:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      &quot;John&quot; + &quot; &quot; + &quot;Doe&quot;
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_syntax_expressions_strings.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Ключевые слова</h2>
  <p>JavaScript <strong>ключевые слова</strong> используются для определения действий, которые должны быть выполнены.</p>
  <p>Ключевое слово <code class='w3-codespan'>var</code> сообщает браузеру о создании переменной:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      var x, y;<br>x = 5 + 6;<br>y = x * 10;
    </div>
    <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_syntax_keywords.html'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Комментарии</h2>
  <p>Не все JavaScript инструкции &quot;выполняются&quot;.</p>
  <p>Код после двойной косой черты
    <code class='w3-codespan'>//</code> или между <code class='w3-codespan'>/*</code> и <code class='w3-codespan'>*/</code> рассматривается как <strong>комментарий</strong>.</p>
  <p>Комментарии игнорируются и не будут выполнены:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      var x = 5;&nbsp;&nbsp; // Я буду выполнен <br><br>// var x = 6;&nbsp;&nbsp; Я НЕ буду выполнен</div>
    <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_syntax_comments.html'>Попробуйте сами &raquo;</a>
  </div>
  <div class='w3-panel w3-note'>
    <p>Вы узнаете больше о комментариях в следующей главе.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Идентификаторы</h2>
  <p>Идентификаторы - это названия (имена).</p>
  <p>В JavaScript идентификаторы используются для именования переменных (и ключевых слов, и функций, и меток).</p>
  <p>Правила для легальных имен практически одинаковы в большинстве языков программирования.</p>
  <p>В JavaScript первый символ должен быть буквой, или подчеркиванием (_), или знаком доллара ($).</p>
  <p>Последующие символы могут быть буквами, цифрами, подчеркиванием или знаком доллара.</p>

  <div class='w3-panel w3-note'>
    <p>Числа не допускаются в качестве первого символа.<br> Таким образом, JavaScript может легко отличить идентификаторы от чисел.</p>
  </div>
  <hr>

  <h2>JavaScript чувствителен к регистру</h2>
  <p>Все JavaScript идентификаторы <strong>чувствительны к регистру</strong>.</p>
  <p>Переменные <code class='w3-codespan'>lastName</code> и <code class='w3-codespan'>lastname</code> являются двумя разными переменными:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      var lastname, lastName;<br>lastName = &quot;Doe&quot;;<br>lastname = &quot;Peterson&quot;;
    </div>
    <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_syntax_case.html'>Попробуйте сами &raquo;</a>
  </div>
  <p>JavaScript не интерпретирует <strong>VAR</strong> или <strong>Var</strong> как ключевое слово <strong>var</strong>.</p>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript и Camel Case / Верблюжий регистр</h2>
  <p>Исторически сложилось так, что программисты использовали разные способы объединения нескольких слов в одно имя переменной:</p>
  <p><strong>Дефис:</strong></p>
  <p>first-name, last-name, master-card, inter-city.</p>

  <div class='w3-panel w3-note'>
    <p>Дефисы не допускаются в JavaScript. Они зарезервированы для вычитания.</p>
  </div>

  <p><strong>Подчёркивание:</strong></p>
  <p>first_name, last_name, master_card, inter_city.</p>
  <a href='../images/camelcase.jpg'><img src='../images/camelcase.jpg' style="width:200px" alt='Camelcase - верблюжий регистр'></a>
  <p><strong>Верхний Верблюжий регистр (Pascal Case):</strong></p>
  <p>FirstName, LastName, MasterCard, InterCity.</p>
  <p><strong>Нижний Верблюжий регистр:</strong></p>
  <p>Программисты JavaScript склонны использовать верблюжий регистр, который начинается со строчной буквы:</p>
  <p>firstName, lastName, masterCard, interCity.</p>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Набор символов</h2>
  <p>JavaScript использует набор символов <strong>Unicode</strong>.</p>
  <p><strong>Unicode</strong> охватывает почти все символы и знаки препинания в мире.</p>
  <p>Для более детального ознакомления изучите <a href='../charsets/ref_html_utf8.php'>Полный справочник по Unicode</a> на нашем сайте <strong>W3Schools на русском</strong>.</p>
  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='js_statements.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='js_comments.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>