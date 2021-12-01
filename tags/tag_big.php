<?php include '../include/head.php'; ?>
<title>HTML Тег &lt;big&gt;. Справочник тегов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='>HTML Тег &lt;big&gt; не поддерживается в HTML5. Использовался в HTML 4 для определения более крупного текста. Полный справочник HTML-тегов. Применение на веб-странице. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_tags.php'; ?>
<?php include '../include/before_content_tags.php'; ?>

<article>
    <h1>HTML Тег <span class="color_h1">&lt;big&gt;</span></h1>
    <div class="w3-clear w3-center nextprev">
        <a class="w3-left w3-btn" href="tag_bdo.php">&#10094;<span class="w3-hide-small"> Prev</span></a>
        <a class="w3-btn" href="index.php"><span class="w3-hide-small">Полный HTML </span>Справочник</a>
        <a class="w3-right w3-btn" href="tag_blockquote.php"><span class="w3-hide-small">Next </span>&#10095;</a>
    </div>
    <hr>

    <h2><span class="deprecated">Не поддерживается в HTML5.</span></h2>
    <p>Тег <code class="w3-codespan">&lt;big&gt;</code> использовался в HTML 4 для определения более крупного текста.</p>
    <hr>

    <h2>Что использовать вместо тега &lt;big&gt;?</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Укажите разные размеры шрифта для элементов HTML (с помощью CSS):</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>p.ex1 {<br>&nbsp; font-size: 30px;<br>}<br>p.ex2 {<br>&nbsp;
            font-size: 50px;<br>}<br>&lt;/style&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;p&gt;Это обычный параграф.&lt;/p&gt;<br>&lt;p
            class=&quot;ex1&quot;&gt;Это параграф побольше.&lt;/p&gt;<br>&lt;p class=&quot;ex2&quot;&gt;Это ещё больший параграф.&lt;/p&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryhtml_big_css.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div id="midcontentadcontainer" style="overflow:auto;text-align:center">
      <?php include '../include/adup_content.php'; ?>
    </div>
    <hr>
    <p>В учебнике по CSS на нашем сайте <?php include '../include/w3schools.php'; ?> вы можете найти дополнительную информацию о размерах шрифта в главе <a href="/css/css_font_size.asp">CSS Размер шрифта</a>.</p>
    <hr>
    <div class="w3-clear w3-center nextprev">
        <a class="w3-left w3-btn" href="tag_bdo.php">&#10094;<span class="w3-hide-small"> Prev</span></a>
        <a class="w3-btn" href="index.php"><span class="w3-hide-small">Полный HTML </span>Справочник</a>
        <a class="w3-right w3-btn" href="tag_blockquote.php"><span class="w3-hide-small">Next </span>&#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>