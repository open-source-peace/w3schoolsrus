<?php include '../include/head.php'; ?>

  <title>CSS Макет display: inline-block. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Макет - display: inline-block. Использование встроенного блока для создания навигационных ссылок. Виды навбара на веб-сайте. Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Макет - display: inline-block</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_float.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_align.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>Значение display: inline-block</h2>
    <p>По сравнению с <code class="w3-codespan">display: inline</code>, основное отличие состоит в том, что <code class="w3-codespan">display: inline-block</code> позволяет устанавливать ширину и высоту элемента.</p>
    <p>Кроме того, при <code class="w3-codespan">display: inline-block</code> верхние и нижние поля/отступы учитываются, а с <code class="w3-codespan">display: inline</code> не учитываются.</p>
    <p>По сравнению с <code class="w3-codespan">display: block</code> основное отличие состоит в том, что <code class="w3-codespan">display: inline-block</code> не добавляет обрыв строки после элемента, поэтому элемент может находиться рядом с другими элементами.</p>
    <p>В следующем примере показано различное поведение <code class="w3-codespan">display: inline</code>, <code class="w3-codespan">display: inline-block</code> и <code class="w3-codespan">display: block</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            span.a {<br>&nbsp;&nbsp;display: inline; /* по умолчанию для span */<br>&nbsp;
            width: 100px;<br>&nbsp;&nbsp;height: 100px;<br>&nbsp;
            padding: 5px;<br>&nbsp; border: 1px solid blue; <br>&nbsp;&nbsp;background-color: yellow; <br>}<br><br>span.b {<br>
            &nbsp; display:
            inline-block;<br>&nbsp; width: 100px;<br>&nbsp; height:
            100px;<br>&nbsp; padding: 5px;<br>&nbsp; border: 1px
            solid blue; <br>&nbsp; background-color: yellow; <br>}<br><br>
            span.c {<br>&nbsp;&nbsp;display: block;<br>&nbsp;&nbsp;width:
            100px;<br>&nbsp;&nbsp;height: 100px;<br>&nbsp; padding: 5px;<br>&nbsp;
            border: 1px solid blue; <br>&nbsp; background-color: yellow; <br>}</div>
        <a target="_blank" href="../csstryit/trycss_inline-block_span1.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>Использование inline-block (встроенного блока) для создания навигационных ссылок</h2>
    <p>Одно из распространенных применений для <code class="w3-codespan">display: inline-block</code> - отображение элементов списка по горизонтали, а не по вертикали. В следующем примере создаются горизонтальные навигационные ссылки:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .nav {<br>&nbsp; background-color: yellow; <br>&nbsp;&nbsp;list-style-type: none;<br>&nbsp;&nbsp;text-align:
            center;&nbsp;<br>&nbsp; padding: 0;<br>&nbsp; margin: 0;<br>}<br><br>.nav li {<br>&nbsp;&nbsp;display: inline-block;<br>
            &nbsp; font-size: 20px;<br>&nbsp;&nbsp;padding:
            20px;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_inline-block_nav.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
<!--
    <hr>
    <h2>Сетка блоков</h2>
    <p>В течение долгого времени можно было создать сетку блоков, которая заполняет ширину браузера и красиво оборачивается (при изменении размера браузера), используя свойство <code class="w3-codespan">float</code>.</p>
    <p>Однако значение <code class="w3-codespan">inline-block</code> свойства <code class="w3-codespan">display</code> может упростить эту задачу (но это не безупречно - см. больше примеров ниже).</p>
    <h3>Примеры</h3>
    <p>Плавающие блоки - с использованием <code class="w3-codespan">float</code> (обратите внимание, что также необходимо указать свойство <code class="w3-codespan">clear</code> для элемента после плавающего блока):</p>
    <div class="w3-example">
    <h3>Пример</h3>
    <div class="w3-code notranslate cssHigh">
    .floating-box {<br>&nbsp;&nbsp;&nbsp; float: left;<br>&nbsp;&nbsp;&nbsp;
    width: 150px;<br>&nbsp;&nbsp;&nbsp; height: 75px;<br>&nbsp;&nbsp;&nbsp;
    margin: 10px;<br>&nbsp;&nbsp;&nbsp; border: 3px solid #73AD21; <br>}<br><br>
    .after-box {<br>&nbsp;&nbsp;&nbsp; clear: left;<br>}</div>
    <a target="_blank" href="../csstryit/trycss_inline-block_old.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Такого же эффекта можно добиться, используя значение <code class="w3-codespan">inline-block</code> свойства <code class="w3-codespan">display</code> (обратите внимание, что <code class="w3-codespan">clear</code> не требуется):</p>
    <div class="w3-example">
    <h3>Пример</h3>
    <div class="w3-code notranslate cssHigh">
    .floating-box {<br>&nbsp;&nbsp;&nbsp; display: inline-block;<br>&nbsp;&nbsp;&nbsp;
    width: 150px;<br>&nbsp;&nbsp;&nbsp; height: 75px;<br>&nbsp;&nbsp;&nbsp;
    margin: 10px;<br>&nbsp;&nbsp;&nbsp; border: 3px solid #73AD21; <br>}</div>
    <a target="_blank" href="../csstryit/trycss_inline-block.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    -->
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_float.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_align.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>