<?php include '../include/head.php'; ?>
<title>HTML Объявление DOCTYPE. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Объявление DOCTYPE. Определение типа документа. Полный справочник HTML-тегов. Применение на веб-странице. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_tags.php'; ?>
<?php include '../include/before_content_tags.php'; ?>

<article>
    <h1>HTML Объявление <span class='color_h1'>&lt;!DOCTYPE&gt;</span></h1>
    <div class='w3-clear w3-center nextprev'>
        <a class='w3-left w3-btn' href='tag_comment.php'>&#10094;<span class='w3-hide-small'> Prev</span></a>
        <a class='w3-btn' href='index.php'><span class='w3-hide-small'>Полный HTML </span>Справочник</a>
        <a class='w3-right w3-btn' href='tag_a.php'><span class='w3-hide-small'>Next </span>&#10095;</a>
    </div>
    <br>

    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;!DOCTYPE html&gt;<br>
            &lt;html&gt;<br>
            &lt;head&gt;<br>
            &lt;title&gt;Название документа&lt;/title&gt;<br>
            &lt;/head&gt;<br><br>
            &lt;body&gt;<br>
            Содержимое документа......<br>
            &lt;/body&gt;<br><br>
            &lt;/html&gt;
        </div>
        <a target='_blank' href='../htmltryit/tryhtml_doctype.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Определение и использование</h2>
    <p>Объявление &lt;!DOCTYPE&gt; должно быть самым первым делом в вашем HTML документе, перед &lt;html&gt; тегом.</p>
    <p>Объявление &lt;!DOCTYPE&gt; не является HTML тегом; это инструкция для веб-браузера, которая сообщает, в какой версии HTML написана страница.</p>
    <p>В HTML 4.01 объявление &lt;!DOCTYPE&gt; относится к DTD, потому что HTML 4.01 базировался на SGML. DTD определяет правила для языка разметки так, чтобы браузеры визуализировали содержание правильно.</p>
    <p>HTML5 не основан на SGML, и поэтому не требует ссылки на DTD.</p>
    <p><b>Совет:</b> Всегда добавляйте объявление &lt;!DOCTYPE&gt; к HTML-документам, чтобы браузер знал, какой тип документа следует ожидать.</p>
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
            <td style='text-align:left;'>&lt;!DOCTYPE&gt;</td>
            <td>Yes</td>
            <td>Yes</td>
            <td>Yes</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
    </table>
    <hr>

    <h2>Отличия между HTML 4.01 и HTML5</h2>
    <p>Существует три разных объявления &lt;!DOCTYPE&gt; в HTML 4.01. В HTML5 существует только один вид объявления:</p>
    <div class='w3-code w3-border notranslate'><div>
            &lt;!DOCTYPE html&gt;
        </div></div>
    <hr>

    <h2>HTML элементы и Doctype</h2>
    <p>Посмотрите таблицу всех <a href='ref_html_dtd.php'>HTML элементов, и в каком Doctype появляется в каждом документе</a>.</p>
    <hr>

    <h2>Советы и примечания</h2>
    <p><b>Примечание:</b> Объявление &lt;!DOCTYPE&gt; НЕ чуствительно к регистру.</p>
    <p><b>Совет:</b> Чтобы проверить, правильный ли HTML-код ваших веб-документов, перейдите на <a href='https://validator.w3.org/' target='_blank'>валидатор-сервис W3C</a>.</p>
    <hr>

    <h2>Общие объявления DOCTYPE</h2>

    <h3>HTML 5</h3>
    <div class='w3-code w3-border notranslate htmlHigh'><div>
            &lt;!DOCTYPE html&gt;
        </div></div>

    <h3>HTML 4.01 Strict</h3>
    <p>Этот DTD содержит все элементы и атрибуты HTML, но НЕ ВКЛЮЧАЕТ презентационные или устаревшие элементы (например, шрифт). Фреймы не разрешены.</p>
    <div class='w3-code w3-border notranslate htmlHigh'><div>
            &lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01//EN&quot; &quot;http://www.w3.org/TR/html4/strict.dtd&quot;&gt;
        </div></div>

    <h3>HTML 4.01 Transitional</h3>
    <p>Этот DTD содержит все HTML-элементы и атрибуты, включая презентационные и устаревшие элементы (например, шрифт). Фреймы не разрешены.</p>
    <div class='w3-code w3-border notranslate htmlHigh'><div>
            &lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01 Transitional//EN&quot; &quot;http://www.w3.org/TR/html4/loose.dtd&quot;&gt;
        </div></div>

    <h3>HTML 4.01 Frameset</h3>
    <p>Этот DTD соответствует HTML 4.01 Transitional, но позволяет использовать содержимое фреймов.</p>
    <div class='w3-code w3-border notranslate htmlHigh'><div>
            &lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01 Frameset//EN&quot; &quot;http://www.w3.org/TR/html4/frameset.dtd&quot;&gt;
        </div></div>

    <h3>XHTML 1.0 Strict</h3>
    <p>Этот DTD содержит все элементы и атрибуты HTML, но НЕ ВКЛЮЧАЕТ презентационные или устаревшие элементы (например, шрифт). Фреймы не разрешены. Разметка также должна быть записана как хорошо сформированный XML.</p>
    <div class='w3-code w3-border notranslate htmlHigh'><div>
            &lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Strict//EN&quot; &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd&quot;&gt;
        </div></div>

    <h3>XHTML 1.0 Transitional</h3>
    <p>Этот DTD содержит все HTML-элементы и атрибуты, включая презентационные и устаревшие элементы (например, шрифт). Фреймы не разрешены. Разметка также должна быть записана как хорошо сформированный XML.</p>
    <div class='w3-code w3-border notranslate htmlHigh'><div>
            &lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Transitional//EN&quot; &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd&quot;&gt;
        </div></div>

    <h3>XHTML 1.0 Frameset</h3>
    <p>Этот DTD соответсвует XHTML 1.0 Transitional, но позволяет использовать содержимое фреймов.</p>
    <div class='w3-code w3-border notranslate htmlHigh'><div>
            &lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Frameset//EN&quot; &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd&quot;&gt;
        </div></div>

    <h3>XHTML 1.1</h3>
    <p>Этот DTD соответсвует XHTML 1.0 Strict, но позволяет добавлять модули (например, для обеспечения поддержки Ruby для восточноазиатских языков).</p>
    <div class='w3-code w3-border notranslate htmlHigh'><div>
            &lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.1//EN&quot; &quot;http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd&quot;&gt;
        </div></div>
    <hr>
    <div class='w3-clear w3-center nextprev'>
        <a class='w3-left w3-btn' href='tag_comment.php'>&#10094;<span class='w3-hide-small'> Prev</span></a>
        <a class='w3-btn' href='index.php'><span class='w3-hide-small'>Полный HTML </span>Справочник</a>
        <a class='w3-right w3-btn' href='tag_a.php'><span class='w3-hide-small'>Next </span>&#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
