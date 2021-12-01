<?php include '../include/head.php'; ?>
<title>HTML Блочные и встроенные элементы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Блочные и встроенные элементы. Как создать? Элементы div и span. <?php include '../include/description.php'; ?>'>
    <style>
        .mylist {float:left;width:120px;}
        .mylist a:link,.mylist a:visited {text-decoration:none;}
        .mylist a:hover,.mylist a:active {text-decoration:underline;text-decoration-color: mediumblue;}
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class='color_h1'>Блочные и встроенные элементы</span></h1>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='html_lists_other.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='html_classes.php'>Next &#10095;</a>
    </div>
    <hr>
    <p class='intro'>Каждый HTML элемент имеет отображаемое значение по умолчанию в зависимости от типа элемента.</p>
    <p>Есть два значения отображения: <strong>блочное (block)</strong> и <strong>встроенное (inline)</strong>.</p>
    <hr>

    <h2>Блочные элементы</h2>
    <p>Блочный элемент всегда начинается с новой строки и занимает всю доступную ширину (растягивается влево и вправо насколько это возможно).</p>
    <div class="w3-theme-border" style="border-width:1px;border-style:solid;padding:5px;">Элемент &lt;div&gt; является блочным элементом.</div>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div&gt;Hello World&lt;/div&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit739b.html?filename=tryhtml_block_div" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Это блочные элементы в HTML:</p>
    <div class="w3-row htmlHigh w3-code" style="line-height:25px;border-left:none;">
        <div class='mylist'><a href="../tags/tag_address.php">&lt;address&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_article.php">&lt;article&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_aside.php">&lt;aside&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_blockquote.php">&lt;blockquote&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_canvas.php">&lt;canvas&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_dd.php">&lt;dd&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_div.php">&lt;div&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_dl.php">&lt;dl&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_dt.php">&lt;dt&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_fieldset.php">&lt;fieldset&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_figcaption.php">&lt;figcaption&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_figure.php">&lt;figure&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_footer.php">&lt;footer&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_form.php">&lt;form&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_hn.php">&lt;h1&gt;-&lt;h6&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_header.php">&lt;header&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_hr.php">&lt;hr&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_li.php">&lt;li&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_main.php">&lt;main&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_nav.php">&lt;nav&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_noscript.php">&lt;noscript&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_ol.php">&lt;ol&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_p.php">&lt;p&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_pre.php">&lt;pre&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_section.php">&lt;section&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_table.php">&lt;table&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_tfoot.php">&lt;tfoot&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_ul.php">&lt;ul&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_video.php">&lt;video&gt;</a></div>
    </div>
    <hr>

    <h2>Встроенные элементы (строчные)</h2>
    <p>Встроенный элемент не начинается с новой строки, и он занимает лишь столько ширины, сколько нужно.</p>
    <p>Это <span class="w3-theme-border" style="border-width:1px;border-style:solid;padding:5px">&lt;span&gt; элемент внутри</span> параграфа.</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;span&gt;Hello World&lt;/span&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitb8de.html?filename=tryhtml_inline_span" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Это встроенные элементы в HTML:</p>
    <div class="w3-row htmlHigh w3-code" style="line-height:25px;border-left:none;">
        <div class='mylist'><a href="../tags/tag_a.php">&lt;a&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_abbr.php">&lt;abbr&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_acronym.php">&lt;acronym&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_b.php">&lt;b&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_bdo.php">&lt;bdo&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_big.php">&lt;big&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_br.php">&lt;br&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_button.php">&lt;button&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_cite.php">&lt;cite&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_code.php">&lt;code&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_dfn.php">&lt;dfn&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_em.php">&lt;em&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_i.php">&lt;i&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_img.php">&lt;img&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_input.php">&lt;input&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_kbd.php">&lt;kbd&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_label.php">&lt;label&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_map.php">&lt;map&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_object.php">&lt;object&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_output.php">&lt;output&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_q.php">&lt;q&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_samp.php">&lt;samp&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_script.php">&lt;script&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_select.php">&lt;select&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_small.php">&lt;small&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_span.php">&lt;span&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_strong.php">&lt;strong&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_sub.php">&lt;sub&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_sup.php">&lt;sup&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_textarea.php">&lt;textarea&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_time.php">&lt;time&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_tt.php">&lt;tt&gt;</a></div>
        <div class='mylist'><a href="../tags/tag_var.php">&lt;var&gt;</a></div>
    </div>
    <div class="w3-note w3-panel">
        <p><strong>Примечание:</strong> Встроенный элемент не может содержать в себе блочный элемент!</p>
    </div>
    <hr>

    <h2>Элемент &lt;div&gt;</h2>
    <p>Элемент <code class='w3-codespan'>&lt;div&gt;</code> часто используется как контейнер для других элементов HTML.</p>
    <p>Элемент <code class='w3-codespan'>&lt;div&gt;</code> не имеет обязательных атрибутов, но <code class='w3-codespan'>style</code>, <code class='w3-codespan'>class</code> и <code class='w3-codespan'>id</code> являются общими.</p>
    <p>При использовании вместе с CSS элемент <code class='w3-codespan'>&lt;div&gt;</code> может использоваться для стилизации блоков содержимого:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div style=&quot;background-color:black;color:white;padding:20px;&quot;&gt;<br>
            &nbsp; &lt;h2&gt;Лондон&lt;/h2&gt;<br>&nbsp; &lt;p&gt;Лондон - столица Англии. Это самый густонаселенный город Соединенного Королевства, в котором проживает более 13 миллионов жителей.&lt;/p&gt;<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit78bc.html?filename=tryhtml_div" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Элемент &lt;span&gt;</h2>
    <p>Элемент <code class='w3-codespan'>&lt;span&gt;</code> - это встроенный контейнер, используемый для разметки части текста или части документа.</p>
    <p>Элемент <code class='w3-codespan'>&lt;span&gt;</code> не имеет обязательных атрибутов, но <code class='w3-codespan'>style</code>, <code class='w3-codespan'>class</code> и <code class='w3-codespan'>id</code> являются общими.</p>
    <p>При использовании вместе с CSS элемент <code class='w3-codespan'>&lt;span&gt;</code> можно использовать для стилизации частей текста:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p&gt;My mother has &lt;span style=&quot;color:blue;font-weight:bold&quot;&gt;blue&lt;/span&gt; eyes
            and my father has &lt;span style=&quot;color:darkolivegreen;font-weight:bold&quot;&gt;dark
            green&lt;/span&gt; eyes.&lt;/p&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit1fcd.html?filename=tryhtml_span" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Резюме</h2>
    <ul>
        <li>Есть два значения отображения: блочное и встроенное</li>
        <li>Блочный элемент всегда начинается с новой строки и занимает всю доступную ширину</li>
        <li>Встроенный элемент не начинается с новой строки, и он занимает лишь столько ширины, сколько необходимо</li>
        <li>Элемент <code class='w3-codespan'>&lt;div&gt;</code> является блочным и часто используется как контейнер для других элементов HTML </li>
        <li>Элемент <code class='w3-codespan'>&lt;span&gt;</code> - это встроенный контейнер, который используется для разметки части текста или части документа</li>
    </ul>
    <hr>

    <h2>HTML теги</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Тег</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../tags/tag_div.php">&lt;div&gt;</a></td>
            <td>Определяет раздел в документе (блочный элемент)</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_span.php">&lt;span&gt;</a></td>
            <td>Определяет раздел в документе (встроенный элемент)</td>
        </tr>
    </table>
    <div class="w3-note w3-panel">
        <p>Для ознакомления с полным списком всех доступных HTML тегов посетите <a href="..../tags/index.php">HTML Справочник тегов</a> на нашем сайте.</p>
    </div>
    <hr>
    <div class="quest">
        <h3>Вопросы для самоконтроля</h3>
        <ul>
            <li><em>Какие есть способы отображения HTML-элементов на веб-странице?</em></li>
            <li><em>Какой HTML-элемент начинается с новой строки и занимает всю доступную ширину на странице?</em></li>
            <li><em>Какой HTML-элемент не начинается с новой строки и занимает лишь столько ширины, сколько нужно?</em></li>
            <li><em>Каким элементом является элемент <code class='w3-codespan'>&lt;div&gt;</code>?</em></li>
            <li><em>Каким элементом является элемент <code class='w3-codespan'>&lt;span&gt;</code>?</em></li>
            <li><em>Может ли встроенный элемент включать в себя блочный элемент?</em></li>
            <li><em>Может ли блочный элемент включать в себя встроенный элемент?</em></li>
            <li><em>Для чего чаще всего используется HTML-элемент <code class='w3-codespan'>&lt;div&gt;</code>?</em></li>
            <li><em>Для чего чаще всего используется HTML-элемент <code class='w3-codespan'>&lt;span&gt;</code>?</em></li>
        </ul>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='html_lists_other.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='html_classes.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>