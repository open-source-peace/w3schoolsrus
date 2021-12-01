<?php include '../include/head.php'; ?>
<title>HTML Тег &lt;blockquote&gt;. Справочник тегов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='>HTML Тег &lt;blockquote&gt;. Определяет раздел, цитируемый из другого источника (цитату). Браузеры обычно делают отступ в элементах blockquote. Полный справочник HTML-тегов. Применение на веб-странице. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_tags.php'; ?>
<?php include '../include/before_content_tags.php'; ?>

<article>
    <h1>HTML Тег <span class="color_h1">&lt;blockquote&gt;</span></h1>
    <div class="w3-clear w3-center nextprev">
        <a class="w3-left w3-btn" href="tag_big.php">&#10094;<span class="w3-hide-small"> Prev</span></a>
        <a class="w3-btn" href="index.php"><span class="w3-hide-small">Полный HTML </span>Справочник</a>
        <a class="w3-right w3-btn" href="tag_body.php"><span class="w3-hide-small">Next </span>&#10095;</a>
    </div>
    <br>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Раздел, цитируемый из другого источника:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;blockquote cite=&quot;http://www.worldwildlife.org/who/index.html&quot;&gt;<br>
            Вот уже 50 лет WWF защищает будущее природы. Всемирный фонд дикой природы (WWF), ведущая в мире природоохранная организация, работает в 100 странах, и его поддерживают 1,2 миллиона членов в США и около 5 миллионов во всем мире.<br>
            &lt;/blockquote&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryhtml_blockquote_test.php" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Больше примеров "Попробуйте сами" ниже.</p>
    <hr>

    <h2>Определение и использование</h2>
    <p>Тег <code class="w3-codespan">&lt;blockquote&gt;</code> определяет раздел, цитируемый из другого источника.</p>
    <p>Браузеры обычно делают отступ в элементах <code class="w3-codespan">&lt;blockquote&gt;</code>  (см. пример ниже, чтобы узнать, как удалить отступ).</p>
    <hr>

    <h2>Советы и примечания</h2>
    <p><b>Совет:</b> Используйте <code class="w3-codespan"><a href="tag_q.asp">&lt;q&gt;</a></code> для встроенных (коротких) цитат.</p>
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
            <td style="text-align:left;">&lt;blockquote&gt;</td>
            <td>Yes</td>
            <td>Yes</td>
            <td>Yes</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
    </table>
    <hr>

    <h2>Атрибуты</h2>
    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:20%">Атрибут</th>
            <th style="width:20%">Значение</th>
            <th style="width:60%">Описание</th>
        </tr>
        <tr>
            <td><a href="att_blockquote_cite.asp">cite</a></td>
            <td><i>URL</i></td>
            <td>Указывает источник цитаты</td>
        </tr>
    </table>
    <hr>

    <h2>Глобальные атрибуты</h2>
    <p>Тег <code class="w3-codespan">&lt;blockquote&gt;</code> также поддерживает <a href="ref_standardattributes.asp">Глобальные атрибуты в HTML</a>.</p>
    <hr>
    <h2>Атрибуты событий</h2>
    <p>Тег <code class="w3-codespan">&lt;blockquote&gt;</code> также поддерживает <a href="ref_eventattributes.asp">Атрибуты событий в HTML</a>.</p>
    <hr>
    <div id="midcontentadcontainer" style="overflow:auto;text-align:center">
      <?php include '../include/adup_content.php'; ?>
    </div>
    <hr>

    <h2>Больше примеров</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Используйте CSS, чтобы удалить отступ в элементе цитаты:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>blockquote {<br>&nbsp; margin-left: 0;<br>}<br>
            &lt;/style&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;p&gt;Вот цитата с сайта WWF:&lt;/p&gt;<br><br>&lt;blockquote
            cite=&quot;http://www.worldwildlife.org/who/index.html&quot;&gt;<br>Вот уже 50 лет WWF защищает будущее природы. Всемирный фонд дикой природы (WWF), ведущая в мире природоохранная организация, работает в 100 странах, и его поддерживают 1,2 миллиона членов в США и около 5 миллионов во всем мире.<br>&lt;/blockquote&gt;<br>
            <br>&lt;/body&gt;<br>&lt;/html&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryhtml_blockquote2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <h2>Связанные страницы</h2>
    <p>HTML DOM справочник: <a href="../jsref/dom_obj_blockquote.php">Объект Blockquote</a></p>
    <hr>
    <h2>Настройки CSS по умолчанию</h2>
    <p>Большинство браузеров будут отображать элемент <code class="w3-codespan">&lt;blockquote&gt;</code> со следующими значениями по умолчанию:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            blockquote {<br>&nbsp; display: block;<br>&nbsp; margin-top: 1em;<br>&nbsp; margin-bottom: 1em;<br>&nbsp; margin-left: 40px;<br>&nbsp; margin-right: 40px;<br>}</div>
        <a target="_blank" href="../htmltryit/tryhtml_blockquote_default_css.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear w3-center nextprev">
        <a class="w3-left w3-btn" href="tag_big.php">&#10094;<span class="w3-hide-small"> Prev</span></a>
        <a class="w3-btn" href="index.php"><span class="w3-hide-small">Полный HTML </span>Справочник</a>
        <a class="w3-right w3-btn" href="tag_body.php"><span class="w3-hide-small">Next </span>&#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>