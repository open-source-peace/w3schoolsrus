<?php include '../include/head.php'; ?>
<title>HTML Тег &lt;a&gt;. Справочник тегов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML тег &lt;a&gt; определяет гиперссылку. Как добавить ссылку на веб-странице? Что такое гиперссылка? Какие бывают ссылки? Полный справочник HTML-тегов. Применение на веб-странице. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_tags.php'; ?>
<?php include '../include/before_content_tags.php'; ?>

<article>
    <h1>HTML тег <span class="color_h1">&lt;a&gt;</span></h1>

    <div class="w3-clear w3-center nextprev">
        <a class="w3-left w3-btn" href="tag_doctype.php">&#10094;<span class="w3-hide-small"> Prev</span></a>
        <a class="w3-btn" href="index.php"><span class="w3-hide-small">Полный HTML </span>Справочник</a>
        <a class="w3-right w3-btn" href="tag_abbr.php"><span class="w3-hide-small">Next </span>&#10095;</a>
    </div>
    <br>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Ссылка на W3Schools.com:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;a href=&quot;https://www.w3schools.com&quot;&gt;Посетите W3Schools.com!&lt;/a&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryhtml_link_test.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Больше примеров далее &quot;Попробуйте сами&quot;.</p>
    <hr>

    <h2>Определение и использование</h2>
    <p>Тег <code class="w3-codespan">&lt;a&gt;</code> определяет гиперссылку, которая используется для перехода с одной страницы на другую.</p>
    <p>Наиболее важным атрибутом элемента <code class="w3-codespan">&lt;a&gt;</code> является атрибут href, который указывает на назначение ссылки.</p>
    <p>По умолчанию ссылки будут выглядеть следующим образом во всех браузерах:</p>
    <ul>
        <li>Непосещенная ссылка подчёркнута и <span style="color:blue">синим</span> цветом</li>
        <li>Посещённая ссылка подчёркнута и <span style="color:purple">фиолетовым</span> цветом</li>
        <li>Активная ссылка подчёркнута и <span style="color:red">красным</span> цветом</li>
    </ul>
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
            <td style="text-align:left;">&lt;a&gt;</td>
            <td>Yes</td>
            <td>Yes</td>
            <td>Yes</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
    </table>
    <p>Все современные браузеры поддерживают тег <code class="w3-codespan">&lt;a&gt;</code>.</p>
    <hr>

    <h2>Советы и заметки</h2>
    <p><b>Примечание:</b> Следующие атрибуты: download, hreflang, media, rel, target и type не могут присутствовать, если отсутствует основной атрибут href.</p>
    <p><b>Примечание:</b> Связанная страница обычно отображается в текущем окне браузера, если вы не укажете другую цель с помощью атрибута target.</p>
    <p><b>Совет:</b> Для стилизации ссылок используйте CSS: <a href="../css/css_link.php">CSS Ссылки. Учебник</a>
        и <a href="../css/css3_buttons.php">CSS Кнопки. Учебник</a></p>
    <hr>

    <h2>Различия между HTML 4.01 и HTML5</h2>
    <p>В HTML 4.01 тег <code class="w3-codespan">&lt;a&gt;</code> может быть гиперссылкой или якорем. В HTML5 тег <code class="w3-codespan">&lt;a&gt;</code> является всегда гиперссылкой, но если он не имеет атрибута href, он является только заполнителем для гиперссылки.</p>
    <p>Спецификация HTML5 имеет некоторые новые атрибуты для ссылок, а некоторые атрибуты спецификации HTML 4.01 уже больше не поддерживаются.</p>
    <hr>

    <h2>Атрибуты</h2>
    <table class="w3-table-all notranslate" id="table1">
        <tr>
            <th style="width:20%">Атрибут</th>
            <th style="width:20%">Значение</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="att_a_charset.php" class="notsupported">charset</a></td>
            <td><i>char_encoding</i></td>
            <td><span class="deprecated">Не поддерживается в HTML5.</span><br>Определяет набор символов связанного документа</td>
        </tr>
        <tr>
            <td><a href="att_a_coords.php" class="notsupported">coords</a></td>
            <td><i>coordinates</i></td>
            <td><span class="deprecated">Не поддерживается в HTML5.</span><br>Определяет координаты ссылки</td>
        </tr>
        <tr>
            <td><a href="att_a_download.php">download</a></td>
            <td><i>filename</i></td>
            <td>Указывает, что цель будет загружена, когда пользователь нажимает гиперссылку</td>
        </tr>
        <tr>
            <td><a href="att_a_href.php">href</a></td>
            <td><i>URL</i></td>
            <td>Определяет URL страницы, на которую идет ссылка</td>
        </tr>
        <tr>
            <td><a href="att_a_hreflang.php">hreflang</a></td>
            <td><i>language_code</i></td>
            <td>Определяет язык связанного документа</td>
        </tr>
        <tr>
            <td><a href="att_a_media.php">media</a></td>
            <td><i>media_query</i></td>
            <td>Указывает, для какого носителя/устройства оптимизирован связанный документ</td>
        </tr>
        <tr>
            <td><a href="att_a_name.php" class="notsupported">name</a></td>
            <td><i>section_name</i></td>
            <td><span class="deprecated">Не поддерживается в HTML5. Используйте глобальный
        <a href="ref_standardattributes.php">id атрибут</a> вместо этого.<br></span>Определяет имя якоря</td>
        </tr>
        <tr>
            <td><a href="att_a_ping.php">ping</a></td>
            <td><em>list_of_URLs</em></td>
            <td>Определяет разделенный пробелами список URL-адресов, по которым при переходе по ссылке браузер будет отправлять запросы на отправку сообщений с помощью основного текста (в фоновом режиме). Обычно используется для отслеживания.</td>
        </tr>
        <tr>
            <td>referrerpolicy</td>
            <td>no-referrer<br>no-referrer-when-downgrade<br>origin<br>origin-when-cross-origin<br>unsafe-url</td>
            <td>Указывает, какой реферер отправить</td>
        </tr>
        <tr>
            <td><a href="att_a_rel.php">rel</a></td>
            <td>alternate<br>
                author<br>
                bookmark<br>external<br>
                help<br>
                license<br>
                next<br>
                nofollow<br>
                noreferrer<br>noopener<br>
                prev<br>
                search<br>
                tag</td>
            <td>Определяет связь между текущим документом и связанным документом</td>
        </tr>
        <tr>
            <td><a href="att_a_rev.php" class="notsupported">rev</a></td>
            <td><i>text</i></td>
            <td><span class="deprecated">Не поддерживается в HTML5.</span><br>Определяет связь между связанным документом и текущим документом</td>
        </tr>
        <tr>
            <td><a href="att_a_shape.php" class="notsupported">shape</a></td>
            <td>default<br>
                rect<br>
                circle<br>
                poly</td>
            <td><span class="deprecated">Не поддерживается в HTML5.</span><br>Определяет форму ссылки</td>
        </tr>
        <tr>
            <td><a href="att_a_target.php">target</a></td>
            <td>_blank<br>
                _parent<br>
                _self<br>
                _top<br>
                <em>framename</em></td>
            <td>Указывает, где открыть связанный документ</td>
        </tr>
        <tr>
            <td><a href="att_a_type.php">type</a></td>
            <td><i>media_type</i></td>
            <td>Определяет тип мультимедиа связанного документа</td>
        </tr>
        </tbody>
    </table>

    <h2>Глобальные атрибуты</h2>
    <p>Тег <code class="w3-codespan">&lt;a&gt;</code> также поддерживает <a href="ref_standardattributes.php">Глобальные атрибуты в HTML</a>.</p>
    <hr>
    <h2>Атрибуты событий</h2>
    <p>Тег <code class="w3-codespan">&lt;a&gt;</code> также поддерживает <a href="ref_eventattributes.php">Атрибуты событий в HTML</a>.</p>
    <hr>
    
    <h2>Больше примеров</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Как использовать изображение в качестве ссылки:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;a href=&quot;https://www.w3schools.com&quot;&gt;<br>&lt;img border=&quot;0&quot; alt=&quot;W3Schools&quot;
            src=&quot;logo_w3s.gif&quot; width=&quot;100&quot; height=&quot;100&quot;&gt;<br>
            &lt;/a&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryhtml_link_image.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Как открыть ссылку в новом окне браузера:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;a href=&quot;https://www.w3schools.com&quot; target=&quot;_blank&quot;&gt;Visit W3Schools.com!&lt;/a&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryhtml_link_target.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Как сделать ссылку на адрес электронной почты:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;a href=&quot;mailto:someone@example.com&quot;&gt;Отправить email&lt;/a&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryhtml_link_mailto.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Как привязать к номеру телефона:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;a href=&quot;tel:+4733378901&quot;&gt;+47 333 78 901&lt;/a&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryhtml_link_phoneto.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Как сделать ссылку на другой раздел на той же странице:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;a href=&quot;#section2&quot;&gt;Go to Section 2&lt;/a&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryhtml5_a_href_anchor.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Как сделать ссылку на JavaScript:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;a href=&quot;javascript:alert('Hello World!');&quot;&gt;Выполнить JavaScript&lt;/a&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryhtml5_a_href_script.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Связанные страницы</h2>
    <p>HTML учебник: <a href="../html/html_links.php">HTML Ссылки</a></p>
    <p>HTML DOM справочник: <a href="../jsref/dom_obj_anchor.php">Объект Anchor</a></p>
    <p>CSS учебник: <a href="../css/css_link.php">Стилизация ссылок</a></p>
    <hr>
    <h2>Настройки CSS по умолчанию</h2>
    <p>Большинство браузеров будут отображать элемент <code class="w3-codespan">&lt;a&gt;</code> со следующими значениями по умолчанию:</p>
    <div class="w3-example">
        <div class="w3-code notranslate cssHigh">
            a:link, a:visited { <br>&nbsp;&nbsp;color: (<em>internal value</em>);<br>&nbsp; text-decoration: underline;<br>
            &nbsp; cursor: auto;<br>}<br><br>
            a:link:active, a:visited:active { <br>&nbsp; color: (<em>internal value</em>);<br>} </div>
    </div>
    <hr>
    <div class="w3-clear w3-center nextprev">
        <a class="w3-left w3-btn" href="tag_doctype.php">&#10094;<span class="w3-hide-small"> Prev</span></a>
        <a class="w3-btn" href="index.php"><span class="w3-hide-small">Полный HTML </span>Справочник</a>
        <a class="w3-right w3-btn" href="tag_abbr.php"><span class="w3-hide-small">Next </span>&#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
