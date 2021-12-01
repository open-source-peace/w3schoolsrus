<?php include '../include/head.php'; ?>
<title>HTML Тег &lt;abbr&gt;. Справочник тегов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Тег &lt;abbr&gt;. Полный справочник HTML-тегов. Применение на веб-странице. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_tags.php'; ?>
<?php include '../include/before_content_tags.php'; ?>

<article>
    <h1>HTML тег <span class='color_h1'>&lt;abbr&gt;</span></h1>

    <div class='w3-clear w3-center nextprev'>
        <a class='w3-left w3-btn' href='tag_a.php'>&#10094;<span class='w3-hide-small'> Prev</span></a>
        <a class='w3-btn' href='index.php'><span class='w3-hide-small'>Полный HTML </span>Справочник</a>
        <a class='w3-right w3-btn' href='tag_acronym.php'><span class='w3-hide-small'>Next </span>&#10095;</a>
    </div>
    <br>

    <div class='w3-example'>
        <h3>Пример</h3>
        <p>Аббревиатура на веб-странице размечается следующим образом:</p>
        <div class='w3-code notranslate htmlHigh'>
            &lt;abbr title=&quot;Всемирная Организация Здравоохранения&quot;&gt;ВОЗ&lt;/abbr&gt; была образована в 1948.
        </div>
        <a target='_blank' href='../htmltryit/tryhtml_abbr_test.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Определение и использование</h2>
    <p>Тег <code class='w3-codespan'>&lt;abbr&gt;</code> определяет аббревиатуру или акроним, например &quot;HTML&quot;, 'Mr.&quot;, &quot;Dec.&quot;, &quot;ASAP&quot;, &quot;ATM&quot;.</p>
    <p><b>Совет:</b> Аббревиатура и акроним являются сокращенными версиями чего-то ещё. Оба часто представлены в виде серии букв.</p>
    <p>Разметка сокращений может дать полезную информацию для браузеров, систем перевода и поисковых систем.</p>
    <hr>

    <h2>Поддержка браузерами</h2>
    <table class='browserref notranslate'>
        <tr>
            <th style='width:20%;font-size:16px;text-align:left;'>Элемент</th>
            <th style='width:16%;' class='bsChrome' title='Chrome'></th>
            <th style='width:16%;' class='bsEdge' title='Internet Explorer / Edge'></th>
            <th style='width:16%;' class='bsFirefox' title='Firefox'></th>
            <th style='width:16%;' class='bsSafari' title='Safari'></th>
            <th style='width:16%;' class='bsOpera' title='Opera'></th>
        </tr>
        <tr>
            <td style='text-align:left;'>&lt;abbr&gt;</td>
            <td>Yes</td>
            <td>Yes</td>
            <td>Yes</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
    </table>
    <hr>

    <h2>Советы и примечания</h2>
    <p><b>Примечание:</b> Глобальный атрибут title используется с тегом <code class='w3-codespan'>&lt;abbr&gt;</code>, чтобы показать описание аббревиатуры / акронима, когда вы наводите курсор мыши на элемент <code class='w3-codespan'>&lt;abbr&gt;</code>.</p>
    <hr>

    <h2>Отличия между HTML 4.01 и HTML5</h2>
    <p>ОТСУТСТВУЮТ.</p>
    <hr>

    <h2>Глобальные атрибуты</h2>
    <p>Тег <code class='w3-codespan'>&lt;abbr&gt;</code> поддерживает <a href='ref_standardattributes.php'>Глобальные атрибуты в HTML</a>.</p>
    <hr>

    <h2>Атрибуты событий</h2>
    <p>Тег <code class='w3-codespan'>&lt;abbr&gt;</code> поддерживает <a href='ref_eventattributes.php'>Атрибуты событий в HTML</a>.</p>
    <hr>

    <h2>Больше примеров</h2>
    <div class='w3-example'>
        <h3>Пример</h3>
        <p><code class='w3-codespan'>&lt;abbr&gt;</code> также может использоваться с <a href='tag_dfn.php'>&lt;dfn&gt;</a> для определения аббревиатуры:</p>
        <div class='w3-code notranslate htmlHigh'>
            &lt;p&gt;&lt;dfn&gt;&lt;abbr title='Cascading Style Sheets'&gt;CSS&lt;/abbr&gt;&lt;/dfn&gt; - это язык, который описывает стиль HTML-документа.&lt;/p&gt;
        </div>
        <a target='_blank' href='../htmltryit/tryhtml_abbr2.html' class='w3-btn w3-margin-bottom'>Попробуйте сами »</a>
    </div>
    <hr>

    <h2>Связанные страницы</h2>
    <p>HTML DOM справочник: <a href='../jsref/dom_obj_abbr.php'>Объект Аббревиатура</a></p>
    <hr>

    <h2>Настройки CSS по умолчанию</h2>
    <p>Большинство браузеров отображают элемент <code class='w3-codespan'>&lt;abbr&gt;</code> со следующими значениями по умолчанию:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate cssHigh'>
            abbr { <br>&nbsp; display: inline;<br>} </div>
        <a target='_blank' href='../htmltryit/tryhtml_abbr_default_css.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class='w3-clear w3-center nextprev'>
        <a class='w3-left w3-btn' href='tag_a.php'>&#10094;<span class='w3-hide-small'> Prev</span></a>
        <a class='w3-btn' href='index.php'><span class='w3-hide-small'>Полный HTML </span>Справочник</a>
        <a class='w3-right w3-btn' href='tag_acronym.php'><span class='w3-hide-small'>Next </span>&#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>