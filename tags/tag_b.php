<?php include '../include/head.php'; ?>
<title>HTML Тег &lt;b&gt;. Справочник тегов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='>HTML Тег &lt;b&gt; (от слова bold). Определяет жирный (полужирный) текст. Как сделать текст полужирным шрифтом? Полный справочник HTML-тегов. Применение на веб-странице. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_tags.php'; ?>
<?php include '../include/before_content_tags.php'; ?>

<article>
    <h1>HTML Тег <span class="color_h1">&lt;b&gt;</span></h1>
    <div class="w3-clear w3-center nextprev">
        <a class="w3-left w3-btn" href="tag_audio.php">&#10094;<span class="w3-hide-small"> Prev</span></a>
        <a class="w3-btn" href="index.php"><span class="w3-hide-small">Полный HTML </span>Справочник</a>
        <a class="w3-right w3-btn" href="tag_base.php"><span class="w3-hide-small">Next </span>&#10095;</a>
    </div>
    <br>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Выделите текст жирным (полужирным) шрифтом <span lang="no-bok">(не выделяя его как важный)</span>:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;p&gt;Это обычный текст - &lt;b&gt;и это жирный текст&lt;/b&gt;.&lt;/p&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryhtml5_b.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Больше примеров "Попробуйте сами" далее.</p>
    <hr>

    <h2>Определение и использование</h2>
    <p>Тег <code class="w3-codespan">&lt;b&gt;</code> указывает полужирный текст без особой важности.</p>
    <hr>

    <h2>Советы и примечания</h2>
    <p><b>Примечание:</b> Согласно спецификации HTML5, тег <code class="w3-codespan">&lt;b&gt;</code> следует использовать как ПОСЛЕДНЕЕ средство, когда нет более подходящего тега. В спецификации указано, что заголовки следует обозначать с помощью тегов <a href="tag_hn.php">&lt;h1&gt; - &lt;h6&gt;</a>, выделенный текст должен быть обозначен тегом <a href="tag_em.php">&lt;em&gt;</a>, важный текст должен быть обозначен <a href="tag_strong.php">&lt;strong&gt;</a>, а выделенный/маркированный текст следует обозначать тегом <a href="tag_mark.php">&lt;mark&gt;</a>.</p>
    <p><b>Совет.</b> Вы также можете использовать следующий CSS для выделения полужирного текста:  <code>&quot;font-weight: bold;&quot;</code>.</p>
    <hr>

    <h2>Поддержка браузерами</h2>
    <table class="browserref notranslate">
        <tr>
            <th style="width:20%;font-size:16px;text-align:left;">Элемент</th>
            <th style="width:16%;" class="bsChrome" title="Chrome"></th>
            <th style="width:16%;" class="bsEdge" title="Internet Explorer / Edge"></th>
            <th style="width:16%;" class="bsFirefox" title="Firefox"></th>
            <th style="width:16%;" class="bsSafari" title="Safari"></th>
            <th style="width:16%;" class="bsOpera" title="Opera"></th>
        </tr>
        <tr>
            <td style="text-align:left;">&lt;b&gt;</td>
            <td>Yes</td>
            <td>Yes</td>
            <td>Yes</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
    </table>
    <hr>

    <h2>Глобальные атрибуты</h2>
    <p>Тег <code class="w3-codespan">&lt;b&gt;</code> также поддерживает <a href="ref_standardattributes.php">Глобальные атрибуты в HTML</a>.</p>
    <hr>
    <h2>Атрибуты событий</h2>
    <p>Тег <code class="w3-codespan">&lt;b&gt;</code> также поддерживает <a href="ref_eventattributes.php">Атрибуты событий в HTML</a>.</p>
    <hr>
    <div id="midcontentadcontainer" style="overflow:auto;text-align:center">
      <?php include '../include/adup_content.php'; ?>
    </div>
    <hr>

    <h2>Больше примеров</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Используйте CSS для выделения полужирного текста:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;p&gt;Это обычный текст - &lt;span style=&quot;font-weight:bold;&quot;&gt;и это жирный текст&lt;/span&gt;.&lt;/p&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryhtml5_b2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>Связанные страницы</h2>
    <p>HTML учебник: <a href="../html/html_formatting.php">HTML Форматирование текста</a></p>
    <p>HTML DOM справочник: <a href="../jsref/dom_obj_b.php">Объект Bold</a></p>
    <hr>

    <h2>Настройки CSS по умолчанию</h2>
    <p>Большинство браузеров будут отображать элемент <code class="w3-codespan">&lt;b&gt;</code> со следующими значениями по умолчанию:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            b { <br>&nbsp; font-weight: bold;<br>} </div>
        <a target="_blank" href="../htmltryit/tryhtml5_b_default_css.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear w3-center nextprev">
        <a class="w3-left w3-btn" href="tag_audio.php">&#10094;<span class="w3-hide-small"> Prev</span></a>
        <a class="w3-btn" href="index.php"><span class="w3-hide-small">Полный HTML </span>Справочник</a>
        <a class="w3-right w3-btn" href="tag_base.php"><span class="w3-hide-small">Next </span>&#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>