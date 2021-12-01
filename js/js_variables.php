<?php include '../include/head.php'; ?>

<title>JavaScript Переменные. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Переменные. Объявление (создание) переменных. Имена переменных. Идентификаторы, оператор присваивания, типы данных. Арифметические операторы. Значение = undefined. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
  <h1>JavaScript <span class='color_h1'>Переменные</span></h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='js_comments.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='js_let.php'>Next &#10095;</a>
  </div>
  <hr>

  <p><strong>JavaScript переменные</strong> - это контейнеры для хранения значений данных.</p>
  <p>В этом примере <code class='w3-codespan'>x</code>, <code class='w3-codespan'>y</code> и <code class='w3-codespan'>z</code> - это переменные, объявленные с помощью ключевого слова var:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 5;<br>var y = 6;<br>var z = x + y;
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_variables.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <p>Из приведенного выше примера вы можете ожидать:</p>
  <ul>
    <li>х хранит значение 5</li>
    <li>у хранит значение 6</li>
    <li>z хранит значение 11</li>
  </ul>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
<h2>Использование <b>let</b> и <b>const</b> (2015)</h2>
<p>До 2015 года использование ключевого слова <code class="w3-codespan">var</code> было единственным способом объявить переменную JavaScript.</p>
<p>Версия JavaScript 2015 года (ES6 - ECMAScript 2015) позволяет использовать ключевое слово <code class="w3-codespan">const</code> для определения переменной, которую нельзя переназначить, а также ключевое слово <code class="w3-codespan">let</code> для определения переменной с ограниченной областью действия.</p>
<p>Поскольку описать разницу между этими ключевыми словами немного сложно, и поскольку они не поддерживаются в старых браузерах, в первой части этого учебника чаще всего будет использоваться ключевое слово <code class="w3-codespan">var</code>.</p>
<p>Safari 10 и Edge 14 были первыми браузерами, полностью поддерживающими версию ES6:</p>
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
            <td>Chrome 58</td>
            <td>Edge 14</td>
            <td>Firefox 54</td>
            <td>Safari 10</td>
            <td>Opera 55</td>
        </tr>
        <tr>
            <td>Jan 2017</td>
            <td>Aug 2016</td>
            <td>Mar 2017</td>
            <td>Jul 2016</td>
            <td>Aug 2018</td>
        </tr>
        </tbody></table>
</div>
    <p>По состоянию на начало 2021 года практически все современные браузеры поддерживают версию JavaScript 2015 (ES6).</p>
    <hr>
  <h2>Очень похоже на алгебру</h2>
  <p>В этом примере <code class='w3-codespan'>price1</code>, <code class='w3-codespan'>price2</code> и <code class='w3-codespan'>total</code> - это переменные:</p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var price1 = 5;<br>var price2 = 6;<br>
      var total = price1 + price2;<br>
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_variables_total.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <p>В программировании, как и в алгебре, мы используем переменные (например, price1) для хранения значений.</p>
  <p>В программировании, как и в алгебре, мы используем переменные в выражениях (total = price1 + price2).</p>
  <p>Из приведенного выше примера вы можете рассчитать сумму, которая равна 11.</p>

  <div class='w3-panel w3-note'>
    <p><strong>JavaScript переменные</strong> - это контейнеры для хранения значений данных.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Идентификаторы</h2>
  <p>Все JavaScript <strong>переменные</strong> должны быть <strong>идентифицированы</strong> с помощью <strong>уникальных имён</strong>.</p>
  <p>Эти уникальные имена называются <strong>идентификаторами</strong>.</p>
  <p>Идентификаторы могут быть короткими именами (например, x и y) или более описательными именами (age, sum, totalVolume).</p>
  <p>Общие правила построения имен для переменных (уникальные идентификаторы):</p>
  <ul>
    <li>Имена могут содержать буквы, цифры, подчеркивания и знаки доллара.</li>
    <li>Имена должны начинаться с буквы</li>
    <li>Имена также могут начинаться с $ и _ (но мы не будем использовать их в этом учебнике)</li>
    <li>Имена чувствительны к регистру (y и Y - разные переменные)</li>
    <li>Зарезервированные слова (например, ключевые слова JavaScript) нельзя использовать в качестве имён</li>
  </ul>

  <div class='w3-panel w3-note'>
    <p><strong>JavaScript идентификаторы</strong> чувствительны к регистру.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Оператор присваивания</h2>
  <p>В JavaScript знак равенства (<code class='w3-codespan'>=</code>) является оператором &quot;присваивания&quot;, а не оператором &quot;равно&quot;.</p>
  <p>Это такое отличие от алгебры. Следующее выражение не имеет смысла в алгебре:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      x = x + 5
    </div>

  </div>
  <p>В JavaScript, однако, такое выражение имеет смысл: х присваивается значение x + 5.</p>
  <p>(Вычисляется значение x + 5 и результат помещается в x. Значение x увеличивается на 5.)</p>

  <div class='w3-panel w3-note'>
    <p>Оператор &quot;равно&quot; в JavaScript записывается как <code class='w3-codespan'>==</code> (два знака &quot;равно&quot;).</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Типы данных</h2>
  <p>JavaScript переменные могут содержать числа (например, 1, 78, -25, 1024 и т.д.) и текстовые значения как &quot;John Doe&quot;.</p>
  <p>В программировании текстовые значения называются текстовыми строками.</p>
  <p>JavaScript может обрабатывать многие типы данных, но сейчас просто подумайте о числах и строках.</p>
  <p>Строки пишутся в двойных или одинарных кавычках. Числа пишутся без кавычек.</p>
  <p>Если вы поставите число в кавычки, оно будет рассматриваться как текстовая строка.</p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var pi = 3.14;<br>
      var person = &quot;John Doe&quot;;<br>
      var answer = 'Yes I am!';
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_variables_types.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Объявление (создание) переменных JavaScript</h2>
  <p>Создание переменной в JavaScript называется &quot;объявлением&quot; переменной.</p>
  <p>Вы объявляете переменную JavaScript с ключевым словом <code class='w3-codespan'>var</code>:</p>

  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      var carName;
    </div>
  </div>

  <p>После объявления переменная не имеет значения (технически она имеет значение <code class='w3-codespan'>undefined</code>, т.е. &quot;не определена&quot;).</p>
  <p>Чтобы <strong>присвоить</strong> значение переменной, используйте знак равенства <code class='w3-codespan'>=</code>:</p>

  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      carName = &quot;Volvo&quot;;
    </div>
  </div>

  <p>Вы также можете присвоить значение переменной при объявлении её:</p>

  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      var carName = &quot;Volvo&quot;;
    </div>
  </div>
  <p>В приведенном ниже примере мы создаем переменную с именем <code class='w3-codespan'>carName</code> и присваиваем ей значение &quot;Volvo&quot;.</p>
  <p>Затем мы &quot;выводим&quot; значение внутри HTML параграфа с id=&quot;demo&quot;:</p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate htmlHigh'>
      &lt;p id=&quot;demo&quot;&gt;&lt;/p&gt;<br><br>&lt;script&gt;<br>
      var carName = &quot;Volvo&quot;;<br>
      document.getElementById(&quot;demo&quot;).innerHTML = carName; <br>&lt;/script&gt;</div>
    <a target='_blank' href='../jstryit/tryjs_variables_create.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>

  <div class='w3-panel w3-note'>
    <p>Хорошая практика программирования - объявлять все переменные в начале скрипта.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Одна инструкция, много переменных</h2>
  <p>Вы можете объявить много переменных в одной инструкции.</p>
  <p>Начните инструкцию с <code class='w3-codespan'>var</code> и разделите переменные <strong>запятой</strong>:</p>

  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      var person = &quot;John Doe&quot;, carName = &quot;Volvo&quot;, price = 200;
    </div>
    <a target='_blank' href='../jstryit/tryjs_variables_multi.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>

  <p>Объявление может занимать несколько строк:</p>

  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      var person = &quot;John Doe&quot;,<br>
      carName = &quot;Volvo&quot;,<br>
      price = 200;
    </div>
    <a target='_blank' href='../jstryit/tryjs_variables_multiline.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Значение = undefined (не определено)</h2>
  <p>В компьютерных программах переменные часто объявляются без значения. Значение может быть чем-то, что должно быть рассчитано, или что-то, что будет предоставлено позже, например, пользовательский ввод.</p>
  <p>Переменная, объявленная без значения, будет иметь значение <code class='w3-codespan'>undefined</code>.</p>
  <p>Переменная carName будет иметь значение <code class='w3-codespan'>undefined</code> после выполнения этой инструкции:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var carName;
    </div>
    <a target='_blank' href='../jstryit/tryjs_variables_undefined.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Повторное объявление переменных JavaScript</h2>
  <p>Если вы повторно объявите переменную JavaScript, она не потеряет своего значения.</p>
  <p>Переменная <code class='w3-codespan'>carName</code> по-прежнему будет иметь значение &quot;Volvo&quot; после выполнения этих инструкций:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var
      carName = &quot;Volvo&quot;;<br>
      var carName;
    </div>
    <a target='_blank' href='../jstryit/tryjs_variables_redefine.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript Арифметика</h2>
  <p>Как и в случае с алгеброй, вы можете выполнять арифметику с переменными JavaScript, используя такие операторы, как <code class='w3-codespan'>=</code> и <code class='w3-codespan'>+</code>:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 5 + 2 + 3;<br>
    </div>
    <a target='_blank' href='../jstryit/tryjs_variables_add_numbers.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>

  <p>Вы также можете добавить строки, но строки будут объединены:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = &quot;John&quot; + &quot; &quot; + &quot;Doe&quot;;</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_variables_add_strings.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>

  <p>Также попробуйте это:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = &quot;5&quot; + 2 + 3;<br>
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_variables_add_string_number.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>

  <div class='w3-panel w3-note'>
    <p>Если взять число в кавычки, остальные числа будут считаться строками и объединятся.</p>
  </div>

  <p>Теперь попробуйте это:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 2 + 3 + &quot;5&quot;;<br>
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_variables_add_number_string.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <form autocomplete='off' spellcheck='false' id='w3-exerciseform' action='https://www.w3schools.com/js/exercise_js.asp?filename=exercise_js_variables1' method='post' target='_blank'>
    <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений</h2>
    <div class='exercisewindow'>
      <h2>Упражнение:</h2>
      <p>Создайте переменную с именем <code class='w3-codespan'>carName</code> и присвойте ей значение <code class='w3-codespan'>Volvo</code>.</p>
      <div class='exerciseprecontainer'>
<pre>var <input name="ex1" maxlength="7" style="width: 75px;"> = "<input name="ex2" maxlength="5" style="width: 54px;">";</pre>
      </div>
      <br>
      <button type='submit' class='w3-btn w3-margin-bottom'>Отправить ответ &raquo;</button>
    </div>
  </form>
  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='js_comments.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='js_let.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>