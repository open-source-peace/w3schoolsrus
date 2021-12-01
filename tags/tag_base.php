<?php include '../include/head.php'; ?>
<title>HTML Тег &lt;base&gt;. Справочник тегов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='>HTML Тег &lt;base&gt; определяет базовый URL и / или цель для всех относительных URL в документе. должен иметь либо атрибут href, либо атрибут target, либо и то, и другое. В веб-документе может быть только один элемент base. Полный справочник HTML-тегов. Применение на веб-странице. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_tags.php'; ?>
<?php include '../include/before_content_tags.php'; ?>

<article>
    <h1>HTML Тег <span class="color_h1">&lt;base&gt;</span></h1>
    <div class="w3-clear w3-center nextprev">
        <a class="w3-left w3-btn" href="tag_b.php">&#10094;<span class="w3-hide-small"> Prev</span></a>
        <a class="w3-btn" href="index.php"><span class="w3-hide-small">Полный HTML </span>Справочник</a>
        <a class="w3-right w3-btn" href="tag_basefont.php"><span class="w3-hide-small">Next </span>&#10095;</a>
    </div>
    <br>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Укажите URL-адрес по умолчанию и цель по умолчанию для всех ссылок на странице:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;head&gt;<br>
            &nbsp;
            &lt;base href=&quot;https://www.w3schools.com/&quot; target=&quot;_blank&quot;&gt;<br>
            &lt;/head&gt;<br><br>&lt;body&gt;<br>
            &lt;img src=&quot;images/stickman.gif&quot; width=&quot;24&quot; height=&quot;39&quot; alt=&quot;Stickman&quot;&gt;<br>
            &lt;a href=&quot;tags/tag_base.asp&quot;&gt;HTML Тег base&lt;/a&gt;<br>
            &lt;/body&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryhtml_base_test.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Определение и использование</h2>
    <p>Тег <code class="w3-codespan">&lt;base&gt;</code> определяет базовый URL и / или цель для всех относительных URL в документе.</p>
    <p>Тег <code class="w3-codespan">&lt;base&gt;</code> должен иметь либо атрибут href, либо атрибут target, либо и то, и другое.</p>
    <p>В документе может быть только один единственный элемент <code class="w3-codespan">&lt;base&gt;</code> и он должен находиться внутри элемента <code>&lt;head&gt;</code>.</p>
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
            <td style="text-align:left;">&lt;base&gt;</td>
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
            <td><a href="att_base_href.php">href</a></td>
            <td><i>URL</i></td>
            <td>Определяет базовый URL-адрес для всех относительных URL-адресов на странице</td>
        </tr>
        <tr>
            <td><a href="att_base_target.php">target</a></td>
            <td>_blank<br>
                _parent<br>
                _self<br>
                _top</td>
            <td>Задает цель по умолчанию для всех гиперссылок и форм на странице</td>
        </tr>
    </table>
    <hr>

    <h2>Глобальные отрибуты и события</h2>
    <p>Тег <code class="w3-codespan">&lt;base&gt;</code> также поддерживает <a href="ref_standardattributes.php">Глобальные атрибуты в HTML</a>.</p>
    <hr>
    <h2>Атрибуты событий</h2>
    <p>Тег <code class="w3-codespan">&lt;base&gt;</code> не поддерживает никаких атрибутов событий.</p>
    <hr>
    <h2>Связанные страницы</h2>
    <p>HTML DOM справочник: <a href="../jsref/dom_obj_base.php">Объект Base</a></p>
    <hr>
    <h2>Настройки CSS по умолчанию</h2>
    <p>Нет.</p>
    <hr>
    <div class="w3-clear w3-center nextprev">
        <a class="w3-left w3-btn" href="tag_b.php">&#10094;<span class="w3-hide-small"> Prev</span></a>
        <a class="w3-btn" href="index.php"><span class="w3-hide-small">Полный HTML </span>Справочник</a>
        <a class="w3-right w3-btn" href="tag_basefont.php"><span class="w3-hide-small">Next </span>&#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>