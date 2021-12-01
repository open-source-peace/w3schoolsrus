<?php include '../include/head.php'; ?>
<title>HTML Тег &lt;bdo&gt;. Справочник тегов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='>HTML Тег &lt;bdo&gt; - это сокращение от Bi-Directional Override (Двунаправленное переключение). Используется для переопределения текущего направления текста. Как перенаправить текст (изменить направление текста)? Полный справочник HTML-тегов. Применение на веб-странице. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_tags.php'; ?>
<?php include '../include/before_content_tags.php'; ?>

<article>
    <h1>HTML Тег <span class="color_h1">&lt;bdo&gt;</span></h1>
    <div class="w3-clear w3-center nextprev">
        <a class="w3-left w3-btn" href="tag_bdi.php">&#10094;<span class="w3-hide-small"> Prev</span></a>
        <a class="w3-btn" href="index.php"><span class="w3-hide-small">Полный HTML </span>Справочник</a>
        <a class="w3-right w3-btn" href="tag_big.php"><span class="w3-hide-small">Next </span>&#10095;</a>
    </div>
    <br>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Укажите направление текста:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;bdo dir=&quot;rtl&quot;&gt;<br>Этот текст будет идти справа налево.<br>&lt;/bdo&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryhtml_bdo.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Определение и использование</h2>
    <p><strong>BDO</strong> это сокращение от Bi-Directional Override (Двунаправленное переключение).</p>
    <p>Тег <code class="w3-codespan">&lt;bdo&gt;</code> используется для переопределения текущего направления текста.</p>
    <hr>
    <div id="midcontentadcontainer" style="overflow:auto;text-align:center">
      <?php include '../include/adup_content.php'; ?>
    </div>
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
            <td style="text-align:left;">&lt;bdo&gt;</td>
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
            <th style="width:15%">Атрибут</th>
            <th style="width:15%">Значение</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="att_bdo_dir.php">dir</a></td>
            <td>ltr<br>
                rtl</td>
            <td>Обязательный. Задает направление текста внутри элемента &lt;bdo&gt;</td>
        </tr>
    </table>
    <hr>

    <h2>Глобальные атрибуты</h2>
    <p>Тег <code class="w3-codespan">&lt;bdo&gt;</code> также поддерживает <a href="ref_standardattributes.php">Глобальные атрибуты в HTML</a>.</p>
    <hr>
    <h2>Атрибуты событий</h2>
    <p>Тег <code class="w3-codespan">&lt;bdo&gt;</code> также поддерживает <a href="ref_eventattributes.php">Атрибуты событий в HTML</a>.</p>
    <hr>
    <h2>Связанные страницы</h2>
    <p>HTML DOM справочник: <a href="../jsref/dom_obj_bdo.php">Объект BDO</a></p>
    <hr>
    <h2>CSS настройки по умолчанию</h2>
    <p>Большинство браузеров будут отображать элемент <code class="w3-codespan">&lt;bdo&gt;</code> со следующими значениями по умолчанию:</p>
    <div class="w3-example">
        <div class="w3-code notranslate cssHigh">
            bdo { <br>&nbsp;&nbsp;unicode-bidi: bidi-override;<br>} </div>
    </div>
    <hr>
    <div class="w3-clear w3-center nextprev">
        <a class="w3-left w3-btn" href="tag_bdi.php">&#10094;<span class="w3-hide-small"> Prev</span></a>
        <a class="w3-btn" href="index.php"><span class="w3-hide-small">Полный HTML </span>Справочник</a>
        <a class="w3-right w3-btn" href="tag_big.php"><span class="w3-hide-small">Next </span>&#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>