<?php include '../include/head.php'; ?>
<title>HTML Тег &lt;bdi&gt;. Справочник тегов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='>HTML Тег &lt;bdi&gt; Определяет . Как сделать ? Полный справочник HTML-тегов. Применение на веб-странице. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_tags.php'; ?>
<?php include '../include/before_content_tags.php'; ?>

<article>
    <h1>HTML Тег <span class="color_h1">&lt;bdi&gt;</span></h1>
    <div class="w3-clear w3-center nextprev">
        <a class="w3-left w3-btn" href="tag_basefont.php">&#10094;<span class="w3-hide-small"> Prev</span></a>
        <a class="w3-btn" href="index.php"><span class="w3-hide-small">Полный HTML </span>Справочник</a>
        <a class="w3-right w3-btn" href="tag_bdo.php"><span class="w3-hide-small">Next </span>&#10095;</a>
    </div>
    <br>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Изолируйте имена пользователей от окружающих настроек направления текста:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul&gt;<br>
            &nbsp;
            &lt;li&gt;Пользователь &lt;bdi&gt;hrefs&lt;/bdi&gt;: 60 баллов&lt;/li&gt;<br>
            &nbsp;
            &lt;li&gt;Пользователь &lt;bdi&gt;jdoe&lt;/bdi&gt;: 80 баллов&lt;/li&gt;<br>
            &nbsp;
            &lt;li&gt;Пользователь &lt;bdi&gt;&#1573;&#1610;&#1575;&#1606;&lt;/bdi&gt;: 90 баллов&lt;/li&gt;<br>
            &lt;/ul&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryhtml5_bdi.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Определение и использование</h2>
    <p><strong>BDI</strong> означает Bi-Directional Isolation (двунаправленная изоляция).</p>
    <p>Тег <code class="w3-codespan">&lt;bdi&gt;</code> изолирует часть текста, которая может быть отформатирована в другом направлении от другого текста за её пределами.</p>
    <p>Этот элемент полезен при встраивании пользовательского контента с неизвестным направлением текста.</p>
    <hr>

    <h2>Поддержка браузерами</h2>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tr>
                <th style="width:20%;font-size:16px;text-align:left;">Элемент</th>
                <th style="width:16%;" class="bsChrome" title="Chrome"></th>
                <th style="width:16%;" class="bsEdge" title="Internet Explorer / Edge"></th>
                <th style="width:16%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:16%;" class="bsSafari" title="Safari"></th>
                <th style="width:16%;" class="bsOpera" title="Opera"></th>
            </tr><tr>
                <td style="text-align:left;">&lt;bdi&gt;</td>
                <td>16.0</td>
                <td>79.0</td>
                <td>10.0</td>
                <td><span class="deprecated">Не поддерживается</span></td>
                <td>15.0</td>
            </tr>
        </table>
    </div>
    <hr>

    <h2>Глобальные атрибуты</h2>
    <p>Тег <code class="w3-codespan">&lt;bdi&gt;</code> также поддерживает <a href="ref_standardattributes.php">Глобальные атрибуты в HTML</a>.</p>
    <hr>
    <h2>Атрибуты событий</h2>
    <p>Тег <code class="w3-codespan">&lt;bdi&gt;</code> также поддерживает <a href="ref_eventattributes.php">Атрибуты событий в HTML</a>.</p>
    <br>
    <div class="w3-clear w3-center nextprev">
        <a class="w3-left w3-btn" href="tag_basefont.php">&#10094;<span class="w3-hide-small"> Prev</span></a>
        <a class="w3-btn" href="index.php"><span class="w3-hide-small">Полный HTML </span>Справочник</a>
        <a class="w3-right w3-btn" href="tag_bdo.php"><span class="w3-hide-small">Next </span>&#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>