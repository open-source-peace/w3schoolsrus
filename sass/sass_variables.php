<?php include '../include/head.php'; ?>

  <title>Sass Переменные. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Sass Переменные. Как используются переменные в Sass? Переменные - это способ хранения информации, которую вы можете использовать позже. Синтаксис. Для объявления переменных Sass использует символ $, за которым следует имя переменной и её значение. Учебник по Sass. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/sass/sass_variables.html' />

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_sass.php'; ?>
<?php include '../include/before_content_sass.php'; ?>

<article>
    <h1>Sass <span class="color_h1">Переменные</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sass_installation.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sass_nesting.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Sass Переменные</h2>
    <p><strong>Переменные</strong> - это способ хранения информации, которую вы можете использовать позже.</p>
    <p>С помощью Sass вы можете хранить информацию в переменных, например:</p>
    <ul>
        <li>строки</li>
        <li>числа</li>
        <li>цвета</li>
        <li>булевы</li>
        <li>списки</li>
        <li>нули</li>
    </ul>
    <p>Для объявления переменных Sass использует символ $, за которым следует имя:</p>
    <div class="w3-example">
        <p>Синтаксис переменных Sass:</p>
        <div class="w3-code notranslate xcssHigh">
            $<i>имяПеременной</i>: <em>значение</em>;
        </div>
    </div>

    <p>В следующем примере объявляются 4 переменные с именами myFont, myColor, myFontSize и myWidth. После объявления переменных вы можете использовать переменные где угодно:</p>
    <div class="w3-example">
        <p>SCSS Синтаксис:</p>
        <div class="w3-code notranslate cssHigh">
            $myFont: Helvetica, sans-serif;<br>$myColor: red;<br>$myFontSize: 18px;<br>
            $myWidth: 680px;<br><br>body {<br>
            &nbsp;
            font-family: $myFont;<br>&nbsp;
            font-size: $myFontSize;<br>&nbsp; color: $myColor;<br>}<br><br>#container {<br>&nbsp;
            width: $myWidth;<br>}
        </div>
        <p>
            <a target="_blank" class="w3-btn" href="../sasstryit/demo_sass_var1.html">Выполнить пример &raquo;</a>
        </p>
    </div>

    <p>Итак, когда файл Sass переносится, он принимает переменные (myFont, myColor и т.д.) и выводит обычный CSS со значениями переменных, помещенными в CSS, например:</p>
    <div class="w3-example">
        <p>CSS Вывод:</p>
        <div class="w3-code notranslate cssHigh">
            body {<br>
            &nbsp;
            font-family: Helvetica, sans-serif;<br>&nbsp;
            font-size: 18px;<br>&nbsp; color: red;<br>}<br><br>#container {<br>&nbsp;
            width: 680px;<br>}
        </div>
        <br>
    </div>
    <hr>

    <h2>Sass Область действия переменной</h2>
    <p>Переменные Sass доступны только на уровне вложенности, на котором они определены.</p>
    <p>Посмотрите на следующий пример:</p>
    <div class="w3-example">
        <p>SCSS Синтаксис:</p>
        <div class="w3-code notranslate cssHigh">
            $myColor: red;<br><br>h1 {<br>
            &nbsp;
            $myColor: green;<br>&nbsp; color: $myColor;<br>}<br><br>p {<br>&nbsp;
            color: $myColor;<br>}
        </div>
        <p>
            <a target="_blank" class="w3-btn" href="../sasstryit/demo_sass_var2.html">Выполнить пример &raquo;</a>
        </p>
    </div>

    <p>Будет ли цвет текста внутри тега <code class="w3-codespan">&lt;p&gt;</code> красным или зеленым? Он будет красным!</p>
    <p>Другое определение, $myColor: green; находится внутри правила <code class="w3-codespan">&lt;h1&gt;</code> и будет доступен только там!</p>
    <p>Таким образом, вывод CSS будет таким:</p>

    <div class="w3-example">
        <p>CSS вывод:</p>
        <div class="w3-code notranslate cssHigh">
            h1 {<br>
            &nbsp; color: green;<br>}<br><br>p {<br>&nbsp;
            color: red;<br>}
        </div>
        <br>
    </div>

    <p>Хорошо, это поведение по умолчанию для области переменной.</p>
    <hr>

    <h2>Использование Sass !global</h2>
    <p>Поведение по умолчанию для области действия переменной можно изменить с помощью переключателя <code class="w3-codespan">!global</code>.</p>
    <p>
        <code class="w3-codespan">!global</code> указывает, что переменная является глобальной, что означает, что она доступна на всех уровнях.</p>
    <p>Посмотрите на следующий пример (такой же, как и выше, но с добавлением <code class="w3-codespan">!global</code>):</p>
    <div class="w3-example">
        <p>SCSS Синтаксис:</p>
        <div class="w3-code notranslate cssHigh">
            $myColor: red;<br><br>h1 {<br>
            &nbsp;
            $myColor: green !global;<br>&nbsp; color: $myColor;<br>}<br><br>p {<br>&nbsp;
            color: $myColor;<br>}
        </div>
        <p>
            <a target="_blank" class="w3-btn" href="../sasstryit/demo_sass_var3.html">Выполнить пример &raquo;</a>
        </p>
    </div>

    <p>Теперь цвет текста внутри тега <code class="w3-codespan">&lt;p&gt;</code> будет зеленым!</p>
    <p>Таким образом, вывод CSS будет:</p>

    <div class="w3-example">
        <p>CSS вывод:</p>
        <div class="w3-code notranslate cssHigh">
            h1 {<br>
            &nbsp; color: green;<br>}<br><br>p {<br>&nbsp;
            color: green;<br>}</div>
        <br>
    </div>

    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Глобальные переменные следует определять вне каких-либо правил. Было бы разумно определить все глобальные переменные в отдельном файле с именем &quot;_globals.scss&quot;, и включением файла с ключевым словом <a href="sass_mixin_include.php">@include</a>.</p>
    </div>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sass_installation.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sass_nesting.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>