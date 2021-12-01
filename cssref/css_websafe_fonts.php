<?php include '../include/head.php'; ?>

<title>CSS Справочник. Безопасные веб-шрифты. <?php include '../include/title.php'; ?></title>
<meta name='description' content="CSS Справочник. Безопасные веб-шрифты. Комбинации шрифтов на веб-странице. Какие шрифты лучше использовать на сайте? <?php include '../include/description.php'; ?>">

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_cssref.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Веб-безопасные комбинации шрифтов</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_ref_aural.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_fonts_fallbacks.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>Часто используемые комбинации шрифтов</h2>
    <p>Свойство font-family должно содержать несколько имен шрифтов в качестве &quot;резервной системы&quot;, чтобы обеспечить максимальную совместимость между браузерами / операционными системами. Если браузер не поддерживает первый шрифт, он пытается использовать следующий шрифт.</p>
    <p>Начните с нужного шрифта и завершите общим семейством, чтобы браузер мог выбрать аналогичный шрифт в общем семействе, если другие шрифты недоступны:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            p {<br>&nbsp; font-family: &quot;Times New Roman&quot;, Times, serif;<br>}
        </div>
        <a target="_blank" href="../csstryit/trycss_font-family.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Ниже приведены некоторые часто используемые комбинации шрифтов, организованные общим семейством.</p>

    <hr>
    <h2>Serif шрифты (из засечками)</h2>
    <div class="w3-responsive">
        <table class="w3-table-all notranslate">
            <tr>
                <th style="width:55%">font-family</th>
                <th>Пример текста</th>
            </tr>
            <tr>
                <td>Georgia, serif</td>
                <td><h2 style="margin-top:0;font-family: Georgia, serif">This is a heading</h2><p style="margin-bottom:0;font-family: Georgia, serif">This is a paragraph</p></td>
            </tr>
            <tr>
                <td>&quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif</td>
                <td><h2 style="margin-top:0;font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif">This is a heading</h2><p style="margin-bottom:0;font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif">This is a paragraph</p></td>
            </tr>
            <tr>
                <td>&quot;Times New Roman&quot;, Times, serif</td>
                <td><h2 style="margin-top:0;font-family: 'Times New Roman', Times, serif">This is a heading</h2><p style="margin-bottom:0;font-family: 'Times New Roman', Times, serif">This is a paragraph</p></td>
            </tr>
        </table>
    </div>
    <hr>

    <h2>Sans-Serif шрифты (без засечек)</h2>
    <div class="w3-responsive">
        <table class="w3-table-all notranslate">
            <tr>
                <th style="width:55%">font-family</th>
                <th>Пример текста</th>
            </tr>
            <tr>
                <td>Arial, Helvetica, sans-serif</td>
                <td><h2 style="margin-top:0;font-family: Arial, Helvetica, sans-serif;">This is a heading</h2><p style="margin-bottom:0;font-family: Arial, Helvetica, sans-serif;">This is a paragraph</p></td>
            </tr>
            <tr>
                <td>&quot;Arial Black&quot;, Gadget, sans-serif</td>
                <td><h2 style="margin-top:0;font-family: Arial Black, Gadget, sans-serif;font-weight:normal;">This is a heading</h2><p style="margin-bottom:0;font-family: Arial Black, Gadget, sans-serif">This is a paragraph</p></td>
            </tr>
            <tr>
                <td>&quot;Comic Sans MS&quot;, cursive, sans-serif</td>
                <td><h2 style="margin-top:0;font-family: 'Comic Sans MS', cursive, sans-serif">This is a heading</h2><p style="margin-bottom:0;font-family: 'Comic Sans MS', cursive, sans-serif">This is a paragraph</p></td>
            </tr>
            <tr>
                <td>Impact, Charcoal, sans-serif</td>
                <td><h2 style="margin-top:0;font-family: Impact, Charcoal, sans-serif;font-weight:normal">This is a heading</h2><p style="margin-bottom:0;font-family: Impact, Charcoal, sans-serif">This is a paragraph</p></td>
            </tr>
            <tr>
                <td>&quot;Lucida Sans Unicode&quot;, &quot;Lucida Grande&quot;, sans-serif</td>
                <td><h2 style="margin-top:0;font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif">This is a heading</h2><p style="margin-bottom:0;font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif">This is a paragraph</p></td>
            </tr>
            <tr>
                <td>Tahoma, Geneva, sans-serif</td>
                <td><h2 style="margin-top:0;font-family: Tahoma, Geneva, sans-serif">This is a heading</h2><p style="margin-bottom:0;font-family: Tahoma, Geneva, sans-serif">This is a paragraph</p></td>
            </tr>
            <tr>
                <td>&quot;Trebuchet MS&quot;, Helvetica, sans-serif</td>
                <td><h2 style="margin-top:0;font-family: 'Trebuchet MS', Helvetica, sans-serif">This is a heading</h2><p style="margin-bottom:0;font-family: 'Trebuchet MS', Helvetica, sans-serif">This is a paragraph</p></td>
            </tr>
            <tr>
                <td>Verdana, Geneva, sans-serif</td>
                <td><h2 style="margin-top:0;font-family: Verdana, Geneva, sans-serif">This is a heading</h2><p style="margin-bottom:0;font-family: Verdana, Geneva, sans-serif">This is a paragraph</p></td>
            </tr>
        </table>
    </div>
    <h2>Моноширинные шрифты</h2>
    <div class="w3-responsive">
        <table class="w3-table-all notranslate">
            <tr>
                <th style="width:55%">font-family</th>
                <th>Пример текста</th>
            </tr>
            <tr>
                <td>&quot;Courier New&quot;, Courier, monospace</td>
                <td><h2 style="margin-top:0;font-family: 'Courier New', Courier, monospace">This is a heading</h2><p style="margin-bottom:0;font-family: 'Courier New', Courier, monospace">This is a paragraph</p></td>
            </tr>
            <tr>
                <td>&quot;Lucida Console&quot;, Monaco, monospace</td>
                <td><h2 style="margin-top:0;font-family: 'Lucida Console', Monaco, monospace">This is a heading</h2><p style="margin-bottom:0;font-family: 'Lucida Console', Monaco, monospace">This is a paragraph</p></td>
            </tr>
        </table>
    </div>

    <div class="w3-note w3-panel">
        <p><b>Совет:</b> Также вы можете ознакомиться со всеми доступными <a href="../howto/howto_google_fonts.php">Google шрифтами</a> и их использованием на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_ref_aural.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_fonts_fallbacks.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>