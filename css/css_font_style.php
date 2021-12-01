<?php include '../include/head.php'; ?>

  <title>CSS Стиль шрифта. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Стиль шрифта. Как стилизовать шрифты на веб-странице? Свойство font-style. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class='color_h1'>Стиль шрифта</span></h1>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='css_font_fallbacks.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='css_font_size.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>Font-Style - Стиль шрифта</h2>
    <p>Свойство <code class='w3-codespan'>font-style</code> в основном используется для указания курсивного текста.</p>
    <p>Это свойство имеет три значения:</p>
    <ul>
        <li>normal - Текст отображается обычно</li>
        <li>italic - Текст отображается курсивом</li>
        <li>oblique - Текст &quot;наклонён&quot; (наклонный шрифт очень похож на курсив, но поддерживается в меньшей степени)</li>
    </ul>

    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate cssHigh'>
            p.normal {<br>&nbsp;&nbsp;font-style: normal;<br>}<br>
            <br>p.italic {<br>&nbsp;&nbsp;font-style: italic;<br>}<br>
            <br>p.oblique {<br>&nbsp; font-style: oblique;<br>}</div>
        <a target='_blank' href='../csstryit/trycss_font-style.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Font-Weight - Толщина шрифта</h2>
    <p>Свойство <code class='w3-codespan'>font-weight</code> определяет толщину шрифта:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate cssHigh'>
            p.normal {<br>&nbsp; font-weight: normal;<br>}<br>
            <br>p.thick {<br>&nbsp; font-weight: bold;<br>}</div>
        <a target='_blank' href='../csstryit/trycss_font-weight.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Font-Variant - Вариант шрифта</h2>
    <p>Свойство <code class='w3-codespan'>font-variant</code> определяет, должен ли текст отображаться мелким шрифтом.</p>
    <p>В шрифте с маленькими заглавными буквами все строчные буквы преобразуются в прописные. Однако преобразованные прописные буквы отображаются меньшим размером шрифта, чем исходные прописные буквы в тексте.</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate cssHigh'>
            p.normal {<br>&nbsp;&nbsp;font-variant: normal;<br>}<br>
            <br>p.small {<br>&nbsp; font-variant: small-caps;<br>}</div>
        <a target='_blank' href='../csstryit/trycss_font-variant.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='css_font_fallbacks.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='css_font_size.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>