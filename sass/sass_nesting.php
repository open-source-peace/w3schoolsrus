<?php include '../include/head.php'; ?>

  <title>Sass Вложения. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Sass Вложенные правила и свойства. Sass позволяет вкладывать селекторы CSS так же, как и в HTML. SCSS Синтаксис. В CSS правила определяются одно за другим. Вложенные свойства Sass. Учебник по Sass. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/sass/sass_nesting.html' />

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_sass.php'; ?>
<?php include '../include/before_content_sass.php'; ?>

<article>
    <h1>Sass <span class="color_h1">Вложенные правила и свойства</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sass_variables.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sass_import.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Вложенные правила Sass</h2>
    <p>Sass позволяет вкладывать селекторы CSS так же, как и в HTML.</p>
    <p>Взгляните на пример кода Sass для навигации по сайту:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>SCSS Синтаксис:</p>
        <div class="w3-code notranslate cssHigh">
            nav {<br>&nbsp; ul {<br>&nbsp;&nbsp;&nbsp; margin: 0;<br>&nbsp;&nbsp;&nbsp;
            padding: 0;<br>&nbsp;&nbsp;&nbsp; list-style: none;<br>&nbsp; }<br>&nbsp;
            li {<br>&nbsp;&nbsp;&nbsp; display: inline-block;<br>&nbsp; }<br>&nbsp; a {<br>&nbsp;&nbsp;&nbsp; display:
            block;<br>&nbsp;&nbsp;&nbsp; padding: 6px 12px;<br>&nbsp;&nbsp;&nbsp;
            text-decoration: none;<br>&nbsp; }<br>}
        </div>
        <p>
            <a target="_blank" class="w3-btn" href="../sasstryit/demo_sass_nest1.html">Выполнить пример &raquo;</a>
        </p>
    </div>

    <p>Обратите внимание, что в Sass <code class="w3-codespan">ul</code>,
        <code class="w3-codespan">li</code> и <code class="w3-codespan">a</code> селекторы вложены в селектор <code class="w3-codespan">nav</code>.</p>

    <p>В CSS правила определяются одно за другим (не вложенными):</p>
    <div class="w3-example">
        <p>CSS Синтаксис:</p>
        <div class="w3-code notranslate cssHigh">
            nav ul {<br>&nbsp; margin: 0;<br>&nbsp; padding: 0;<br>&nbsp; list-style:
            none;<br>}<br>nav li {<br>&nbsp; display: inline-block;<br>}<br>nav a {<br>&nbsp;
            display: block;<br>&nbsp; padding: 6px 12px;<br>&nbsp; text-decoration: none;<br>
            }
        </div>
        <br>
    </div>
    <p>Поскольку вы можете вкладывать свойства в Sass, он чище и легче читается, чем стандартный CSS.</p>
    <hr>

    <h2>Вложенные свойства Sass</h2>
    <p>Многие свойства CSS имеют одинаковый префикс, например font-family, font-size и font-weight или text-align, text-transform и text-overflow.</p>
    <p>С помощью Sass вы можете записать их как вложенные свойства:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>SCSS Синтаксис:</p>
        <div class="w3-code notranslate cssHigh">
            font: {<br>&nbsp; family: Helvetica, sans-serif;<br>&nbsp; size: 18px;<br>&nbsp;
            weight: bold;<br>}<br><br>text: {<br>&nbsp; align: center;<br>&nbsp;
            transform: lowercase;<br>&nbsp; overflow: hidden;<br>}
        </div>
        <br>
    </div>

    <p>Транспиллер Sass преобразует вышеуказанное в обычный CSS:</p>
    <div class="w3-example">
        <p>CSS Вывод:</p>
        <div class="w3-code notranslate cssHigh">
            font-family: Helvetica, sans-serif;<br>font-size: 18px;<br>font-weight: bold;<br><br>
            text-align: center;<br>text-transform: lowercase;<br>text-overflow:
            hidden;
        </div>
        <br>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sass_variables.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sass_import.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>