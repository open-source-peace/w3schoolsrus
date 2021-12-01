<?php include '../include/head.php'; ?>
<title>HTML Тег &lt;area&gt;. Справочник тегов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='>HTML Тег &lt;area&gt;. Определяет область внутри изображения-карты. Полный справочник HTML-тегов. Применение на веб-странице. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_tags.php'; ?>
<?php include '../include/before_content_tags.php'; ?>

<article>
    <h1>HTML тег <span class='color_h1'>&lt;area&gt;</span></h1>
    <div class='w3-clear w3-center nextprev'>
        <a class='w3-left w3-btn' href='tag_applet.php'>&#10094;<span class='w3-hide-small'> Prev</span></a>
        <a class='w3-btn' href='index.php'><span class='w3-hide-small'>Полный HTML </span>Справочник</a>
        <a class='w3-right w3-btn' href='tag_article.php'><span class='w3-hide-small'>Next </span>&#10095;</a>
    </div>
    <br>

    <div class='w3-example'>
        <h3>Пример</h3>
        <p>Изображение-карта с интерактивными (кликабельными) областями:</p>
        <div class='w3-code notranslate htmlHigh'>

            &lt;img src=&quot;planets.gif&quot;
            width=&quot;145&quot; height=&quot;126&quot;
            alt=&quot;Planets&quot;<br>
            usemap=&quot;#planetmap&quot;&gt;<br>
            <br>
            &lt;map
            name=&quot;planetmap&quot;&gt;<br>
            &nbsp;
            &lt;area shape=&quot;rect&quot; coords=&quot;0,0,82,126&quot; href=&quot;sun.htm&quot; alt=&quot;Sun&quot;&gt;<br>
            &nbsp;
            &lt;area shape=&quot;circle&quot; coords=&quot;90,58,3&quot; href=&quot;mercur.htm&quot; alt=&quot;Mercury&quot;&gt;<br>
            &nbsp;
            &lt;area shape=&quot;circle&quot; coords=&quot;124,58,8&quot; href=&quot;venus.htm&quot; alt=&quot;Venus&quot;&gt;<br>
            &lt;/map&gt;

        </div>
        <a target='_blank' href='../htmltryit/tryhtml_areamap.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Определение и использование</h2>
    <p>Тег <code>&lt;area&gt;</code> определяет область внутри изображения-карты (изображение-карта - это изображение с интерактивными областями).</p>
    <p>Элемент <code>&lt;area&gt;</code> всегда вложен в тег <code>&lt;map&gt;</code>.</p>
    <p><b>Примечание:</b> Атрибут usemap в теге <a href='tag_img.php'>&lt;img&gt;</a> связан с атрибутом name элемента <a href='tag_map.php'>&lt;map&gt;</a> и создает связь между изображением и картой.</p>
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
            <td style='text-align:left;'>&lt;area&gt;</td>
            <td>Yes</td>
            <td>Yes</td>
            <td>Yes</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
    </table>
    <hr>

    <h2>Отличия между HTML 4.01 и HTML5</h2>
    <p>HTML5 имеет некоторые новые атрибуты, и некоторые атрибуты HTML 4.01 больше не поддерживаются.</p>
    <hr>

    <h2>Отличия между HTML и XHTML</h2>
    <p>В HTML у тега <code>&lt;area&gt;</code> нет конечного тега.</p>
    <p>В XHTML тег <code>&lt;area&gt;</code> должен быть правильно закрыт.</p>
    <hr>

    <h2>Атрибуты</h2>
    <table class='w3-table-all notranslate' id='table1'>
        <tr>
            <th style='width:18%'>Атрибут</th>
            <th style='width:27%'>Значение</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href='att_area_alt.php'>alt</a></td>
            <td><i>text</i></td>
            <td>Определяет альтернативный текст для области. Требуется, если присутствует атрибут href</td>
        </tr>
        <tr>
            <td><a href='att_area_coords.php'>coords</a></td>
            <td><i>coordinates</i></td>
            <td>Определяет координаты области</td>
        </tr>
        <tr>
            <td><a href='att_area_download.php'>download</a></td>
            <td><i>filename</i></td>
            <td>Указывает, что цель будет загружена, когда пользователь нажимает гиперссылку</td>
        </tr>
        <tr>
            <td><a href='att_area_href.php'>href</a></td>
            <td><i>URL</i></td>
            <td>Определяет цель гиперссылки для области</td>
        </tr>
        <tr>
            <td><a href='att_area_hreflang.php'>hreflang</a></td>
            <td><i>language_code</i></td>
            <td>Определяет язык целевого URL</td>
        </tr>
        <tr>
            <td><a href='att_area_media.php'>media</a></td>
            <td><i>media query</i></td>
            <td>Указывает, для какого носителя / устройства оптимизирован целевой URL</td>
        </tr>
        <tr>
            <td><a href='att_area_nohref.php' class='notsupported'>nohref</a></td>
            <td><i>value</i></td>
            <td><span class='deprecated'>Не поддерживается в HTML5.</span><br>Указывает, что область не имеет связанной ссылки</td>
        </tr>
        <tr>
            <td><a href='att_area_rel.php'>rel</a></td>
            <td>alternate<br>
                author<br>
                bookmark<br>
                help<br>
                license<br>
                next<br>
                nofollow<br>
                noreferrer<br>
                prefetch<br>
                prev<br>
                search<br>
                tag</td>
            <td>Определяет связь между текущим документом и целевым URL</td>
        </tr>
        <tr>
            <td><a href='att_area_shape.php'>shape</a></td>
            <td>
                default<br>
                rect<br>
                circle<br>
                poly</td>
            <td>Определяет форму области</td>
        </tr>
        <tr>
            <td><a href='att_area_target.php'>target</a></td>
            <td>_blank<br>
                _parent<br>
                _self<br>
                _top<br>
                <em>framename</em></td>
            <td>Указывает, где открыть целевой URL</td>
        </tr>
        <tr>
            <td><a href='att_area_type.php'>type</a></td>
            <td><i>media_type</i></td>
            <td>Определяет тип мультимедиа целевого URL</td>
        </tr>
    </table>

    <h2>Глобальные атрибуты</h2>
    <p>Тег <code>&lt;area&gt;</code> также поддерживает <a href='ref_standardattributes.php'>Глобальные атрибуты в HTML</a>.</p>
    <hr>
    <h2>Атрибуты событий</h2>
    <p>Тег <code>&lt;area&gt;</code> также поддерживает <a href='ref_eventattributes.php'>Атрибуты событий в HTML</a>.</p>
    <hr>
    <h2>Связанные страницы</h2>
    <p>HTML DOM справочник:
        <a href='../jsref/dom_obj_area.php'>Объект Area</a></p>
    <hr>
    <h2>Настройки CSS по умолчанию</h2>
    <p>Большинство браузеров отображают элемент <code>&lt;area&gt;</code> со следующими значениями по умолчанию:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate cssHigh'>
            area { <br>&nbsp; display: none;<br>} </div>
    </div>
    <hr>
    <div class='w3-clear w3-center nextprev'>
        <a class='w3-left w3-btn' href='tag_applet.php'>&#10094;<span class='w3-hide-small'> Prev</span></a>
        <a class='w3-btn' href='index.php'><span class='w3-hide-small'>Полный HTML </span>Справочник</a>
        <a class='w3-right w3-btn' href='tag_article.php'><span class='w3-hide-small'>Next </span>&#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>