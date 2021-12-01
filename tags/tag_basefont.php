<?php include '../include/head.php'; ?>
<title>HTML Тег &lt;basefont&gt;. Справочник тегов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='>HTML Тег &lt;basefont&gt; использовался в HTML 4, чтобы указать цвет текста, размер шрифта или семейство шрифтов по умолчанию для всего текста в документе HTML. Не поддерживается в HTML5. Полный справочник HTML-тегов. Применение на веб-странице. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_tags.php'; ?>
<?php include '../include/before_content_tags.php'; ?>

<article>
    <h1>HTML Тег <span class="color_h1">&lt;basefont&gt;</span></h1>
    <div class="w3-clear w3-center nextprev">
        <a class="w3-left w3-btn" href="tag_base.php">&#10094;<span class="w3-hide-small"> Prev</span></a>
        <a class="w3-btn" href="index.php"><span class="w3-hide-small">Полный HTML </span>справочник</a>
        <a class="w3-right w3-btn" href="tag_bdi.php"><span class="w3-hide-small">Next </span>&#10095;</a>
    </div>
    <hr>

    <h2><span class="deprecated">Не поддерживается в HTML5.</span></h2>
    <p>Тег <code class="w3-codespan">&lt;basefont&gt;</code> использовался в <strong>HTML 4</strong>, чтобы указать цвет текста, размер шрифта или семейство шрифтов по умолчанию для всего текста в документе HTML.</p>
    <hr>

    <h2>Что использовать вместо тега &lt;basefont&gt;?</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Укажите цвет текста по умолчанию для страницы (с помощью CSS):</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>body {<br>&nbsp; color: red;<br>}<br>
            &lt;/style&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;h1&gt;Это заголовок&lt;/h1&gt;<br>&lt;p&gt;Это параграф.&lt;/p&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryhtml_basefont_color_css.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Укажите семейство шрифтов по умолчанию для страницы (с помощью CSS):</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>body {<br>&nbsp; font-family: courier, serif;<br>
            }<br>
            &lt;/style&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;h1&gt;Это заголовок&lt;/h1&gt;<br>&lt;p&gt;Это параграф.&lt;/p&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryhtml_basefont_face_css.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Укажите размер шрифта по умолчанию для страницы (с помощью CSS):</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>body {<br>&nbsp; font-size: 50px;<br>}<br>&lt;/style&gt;<br>
            &lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;h1&gt;Это заголовок&lt;/h1&gt;<br>&lt;p&gt;Это параграф.&lt;/p&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryhtml_basefont_size_css.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><b>Совет:</b> В учебнике по CSS на нашем сайте <?php include '../include/w3schools.php'; ?> вы можете найти дополнительную информацию о <a href="../css/css_text.php">CSS Цвет текста</a> и <a href="../css/css_font.php">CSS Шрифты</a>.</p>
    <hr>
    <div class="w3-clear w3-center nextprev">
        <a class="w3-left w3-btn" href="tag_base.php">&#10094;<span class="w3-hide-small"> Prev</span></a>
        <a class="w3-btn" href="index.php"><span class="w3-hide-small">Полный HTML </span>справочник</a>
        <a class="w3-right w3-btn" href="tag_bdi.php"><span class="w3-hide-small">Next </span>&#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>