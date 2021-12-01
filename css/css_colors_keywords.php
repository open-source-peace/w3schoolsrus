<?php include '../include/head.php'; ?>

<title>CSS Ключевые слова цвета. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Ключевые слова цвета. Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1"> Ключевые слова цвета</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_colors.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_gradients.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">На этой странице объясняются ключевые слова <code class="w3-codespan">transparent</code>, <code class="w3-codespan">currentcolor</code> и <code class="w3-codespan">inherit</code>.</p>
    <hr>

    <h2>Ключевое слово transparent (прозрачность)</h2>
    <p>Ключевое слово <code class="w3-codespan">transparent</code> используется, чтобы сделать цвет прозрачным. Оно часто используется для создания прозрачного цвета фона для элемента.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Здесь цвет фона элемента &lt;div&gt; будет полностью прозрачным, а фоновое изображение будет видно сквозь него:</p>
        <div class="w3-code notranslate cssHigh">
            body {<br>&nbsp; background-image: url(&quot;paper.gif&quot;);<br>}<br><br>div { <br>&nbsp;
            background-color: transparent;<br>} </div>
        <a target="_blank" href="../csstryit/trycss_transparent.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Ключевое слово <code class="w3-codespan">transparent</code> эквивалентно rgba (0,0,0,0). Значения цвета RGBA являются расширением значений цвета RGB с альфа-каналом, который определяет непрозрачность цвета. Подробнее читайте в главе <a href="css_colors_rgb.php">CSS RGB</a> и в главе <a href="css3_colors.php">Цвета CSS</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <hr>

    <h2>Ключевое слово currentcolor (текущий цвет)</h2>
    <p>Ключевое слово <code class="w3-codespan">currentcolor</code> похоже на переменную, которая содержит текущее значение свойства цвета элемента.</p>
    <p>Это ключевое слово может быть полезно, если вы хотите, чтобы определенный цвет был согласован в элементе или на странице.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>В этом примере цвет границы элемента <code class="w3-codespan">&lt;div&gt;</code> будет синим, потому что цвет текста элемента <code class="w3-codespan">&lt;div&gt;</code> синий:</p>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp; color: blue;<br>&nbsp; border: 10px solid currentcolor;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_currentcolor.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>В этом примере цвет фона <code class="w3-codespan">&lt;div&gt;</code> установлен на текущее значение цвета основного элемента:</p>
        <div class="w3-code notranslate cssHigh">
            body {<br>&nbsp; color: purple;<br>}<br><br>div {<br>&nbsp; background-color: currentcolor;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_currentcolor2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>В этом примере цвет границы и цвет тени <code class="w3-codespan">&lt;div&gt;</code> установлен на текущее значение цвета основного элемента:</p>
        <div class="w3-code notranslate cssHigh">
            body {<br>&nbsp;color: green;<br>}<br><br>div { <br>&nbsp; box-shadow: 0px 0px 15px currentcolor;<br>&nbsp; border: 5px solid currentcolor;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_currentcolor3.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Ключевое слово inherit (наследование)</h2>
    <p>Ключевое слово <code class="w3-codespan">inherit</code> указывает, что свойство должно наследовать своё значение от родительского элемента.</p>
    <p>Ключевое слово <code class="w3-codespan">inherit</code> может использоваться для любого свойства CSS и для любого элемента HTML.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>В этом примере настройки границы <code class="w3-codespan">&lt;span&gt;</code> будут унаследованы от родительского элемента:</p>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp; border: 2px solid red;<br>}<br><br>span {<br>&nbsp; border: inherit;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_inherit.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_colors.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_gradients.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>