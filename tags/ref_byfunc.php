<?php include '../include/head.php'; ?>
<title>HTML Справочник тегов. <?php include '../include/title.php'; ?></title>
<meta name='description' content="Полный справочник HTML тегов. Теги по категории. Сколько всего тегов в HTML5? <?php include '../include/description.php'; ?>">
<link rel="stylesheet" href="../cdn/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
    function filterSearch() {
        var a, l, b, i, j, c, ahref, s, tr, td;
        c = document.getElementById("searchstring").value.toUpperCase();
        a = document.getElementById("htmltags").getElementsByClassName("w3-table-all");
        //h = document.getElementById("htmltags").getElementsByTagName("h2");
        for (j = 0; j < a.length; j++) {
            s = 0;
            tr = a[j].getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    ahref = td.getElementsByTagName("a")[0];
                    if (ahref) {
                        ahref = ahref.innerHTML;
                        ahref = ahref.replace("&lt;", "");
                        ahref = ahref.replace("&gt;", "");
                        if (ahref.toUpperCase().indexOf(c) > -1) {
                            tr[i].style.display = "";
                            s = 1;
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
                if (i == (tr.length - 1)) {
                    if (s == 0) {
                        a[j].style.display = "none";
                        //h[j].style.display = "none";
                    } else {
                        a[j].style.display = "";
                        //h[j].style.display = "";
                        fixStripes(tr);
                    }
                }
            }
        }
    }

    function fixStripes(a) {
        var i, c = 0, n = 0;
        for (i = 0; i < a.length; i++) {
            if (a[i].style.display != "none") {
                if (c == 0) {
                    a[i].style.backgroundColor = "#f1f1f1";
                    c = 1;
                } else {
                    a[i].style.backgroundColor = "#fff";
                    c = 0;
                }
            }
        }
    }
</script>
<style>
    .notsupported,.notsupported:hover,.notsupported:active,.notsupported:visited,.notsupported:link {
        color:rgb(197,128,128)
    }
    #htmltags .w3-table-all tr:nth-child(odd) {
        background-color: #f1f1f1;
    }
    #htmltags .w3-table-all tr:nth-child(even) {
        background-color: #fff;
    }
    #htmltags .w3-table-all td:first-child {
        width: 30%!important;
    }
    input[type=text] {
        width: 100%;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        margin-bottom:5px;
    }
    #searchicon:after {
        content: "\f002";
        font-family: FontAwesome;
        position: absolute;
        font-size: 24px;
        color: #ccc;
        top: 6px;
        left: 12px;
    }
    label {
        font-weight:normal;
    }
</style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_tags.php'; ?>
<?php include '../include/before_content_tags.php'; ?>

<article>
    <h1>HTML Справочник элементов - Все теги по категориям</h1>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='index.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='ref_html_browsersupport.php'>Next &#10095;</a>
    </div>
    <hr>
    <div style='position:relative'><div id='searchicon'></div></div>
    <input type='text' id='searchstring' name='search' placeholder='Поиск..' oninput='filterSearch()'>
    <div id='htmltags'>
        <h2>Основные HTML теги</h2>
        <table class='w3-table-all notranslate'>
            <tr>
                <th style='width:20%'>Тег</th>
                <th>Описание</th>
            </tr>
            <tr>
                <td><a href='tag_doctype.php'>&lt;!DOCTYPE&gt;</a>&nbsp;</td>
                <td>Определяет тип документа</td>
            </tr>
            <tr>
                <td><a href='tag_html.php'>&lt;html&gt;</a></td>
                <td>Определяет документ HTML</td>
            </tr>
            <tr>
                <td><a href='tag_head.php'>&lt;head&gt;</a></td>
                <td>Определяет информацию о документе</td>
            </tr>
            <tr>
                <td><a href='tag_title.php'>&lt;title&gt;</a></td>
                <td>Определяет заголовок документа</td>
            </tr>
            <tr>
                <td><a href='tag_body.php'>&lt;body&gt;</a></td>
                <td>Определяет тело документа</td>
            </tr>
            <tr>
                <td><a href='tag_hn.php'>&lt;h1&gt; to &lt;h6&gt;</a></td>
                <td>Определяет заголовки HTML</td>
            </tr>
            <tr>
                <td><a href='tag_p.php'>&lt;p&gt;</a></td>
                <td>Определяет параграф (абзац)</td>
            </tr>
            <tr>
                <td><a href='tag_br.php'>&lt;br&gt;</a></td>
                <td>Вставляет один разрыв строки</td>
            </tr>
            <tr>
                <td><a href='tag_hr.php'>&lt;hr&gt;</a></td>
                <td>Определяет тематическое изменение содержания</td>
            </tr>
            <tr>
                <td><a href='tag_comment.php'>&lt;!--...--&gt;</a></td>
                <td>Определяет комментарий</td>
            </tr>
            </tbody>
        </table>
        <h2>Форматирование</h2>
        <table class='w3-table-all notranslate'>
            <tbody><tr>
                <th style='width:20%'>Тег</th>
                <th>Описание</th>
            </tr>
            <tr>
                <td><a class='notsupported' href='tag_acronym.php'>&lt;acronym&gt;</a></td>
                <td><span class='deprecated'>Не поддерживается в HTML5. Используйте &lt;abbr&gt; вместо этого.<br></span>Определяет акроним</td>
            </tr>
            <tr>
                <td><a href='tag_abbr.php'>&lt;abbr&gt;</a></td>
                <td>Определяет аббревиатуру или акроним</td>
            </tr>
            <tr>
                <td><a href='tag_address.php'>&lt;address&gt;</a></td>
                <td>Определяет контактную информацию для автора / владельца документа / статьи</td>
            </tr>
            <tr>
                <td><a href='tag_b.php'>&lt;b&gt;</a></td>
                <td>Определяет жирный текст</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_bdi.php'>&lt;bdi&gt;</a></td>
                <td>Изолирует часть текста, который может быть отформатирован в другом направлении от прочего текста за его пределами</td>
            </tr>
            <tr>
                <td><a href='tag_bdo.php'>&lt;bdo&gt;</a></td>
                <td>Переопределяет текущее направление текста</td>
            </tr>
            <tr>
                <td><a class='notsupported' href='tag_big.php'>&lt;big&gt;</a></td>
                <td><span class='deprecated'>Не поддерживается в HTML5. Используйте CSS вместо этого.<br></span>Определяет большой текст</td>
            </tr>
            <tr>
                <td><a href='tag_blockquote.php'>&lt;blockquote&gt;</a></td>
                <td>Определяет раздел, что цитируется с другого источника</td>
            </tr>
            <tr>
                <td><a class='notsupported' href='tag_center.php'>&lt;center&gt;</a></td>
                <td><span class='deprecated'>Не поддерживается в HTML5. Используйте CSS вместо этого.<br></span>Определяет центрирование текста</td>
            </tr>
            <tr>
                <td><a href='tag_cite.php'>&lt;cite&gt;</a></td>
                <td>Определяет название произведения</td>
            </tr>
            <tr>
                <td><a href='tag_code.php'>&lt;code&gt;</a></td>
                <td>Определяет фрагмент компьютерного кода</td>
            </tr>
            <tr>
                <td><a href='tag_del.php'>&lt;del&gt;</a></td>
                <td>Определяет удалённый с документа текст</td>
            </tr>
            <tr>
                <td><a href='tag_dfn.php'>&lt;dfn&gt;</a></td>
                <td>Представляет определяющий экземпляр термина</td>
            </tr>
            <tr>
                <td><a href='tag_em.php'>&lt;em&gt;</a></td>
                <td>Определяет подчёркнутый текст</td>
            </tr>
            <tr>
                <td><a class='notsupported' href='tag_font.php'>&lt;font&gt;</a></td>
                <td><span class='deprecated'>Не поддерживается в HTML5. Используйте CSS вместо этого.<br></span>Определяет шрифт, цвет и размер для текста</td>
            </tr>
            <tr>
                <td><a href='tag_i.php'>&lt;i&gt;</a></td>
                <td>Определяет часть текста альтернативным голосом или настроением</td>
            </tr>
            <tr>
                <td><a href='tag_ins.php'>&lt;ins&gt;</a></td>
                <td>Определяет текст, который был вставлен в документ</td>
            </tr>
            <tr>
                <td><a href='tag_kbd.php'>&lt;kbd&gt;</a></td>
                <td>Определяет ввод с клавиатуры</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_mark.php'>&lt;mark&gt;</a></td>
                <td>Определяет отмеченный / выделенный текст</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_meter.php'>&lt;meter&gt;</a></td>
                <td>Определяет скалярное измерение в границах известного диапазона (датчик)</td>
            </tr>
            <tr>
                <td><a href='tag_pre.php'>&lt;pre&gt;</a></td>
                <td>Определяет предварительно отформатированный текст</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_progress.php'>&lt;progress&gt;</a></td>
                <td>Представляет ход выполнения задания</td>
            </tr>
            <tr>
                <td><a href='tag_q.php'>&lt;q&gt;</a></td>
                <td>Определяет короткую цитату</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_rp.php'>&lt;rp&gt;</a></td>
                <td>Определяет, что отображать в браузерах, которые не поддерживают ruby аннотации</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_rt.asp'>&lt;rt&gt;</a></td>
                <td>Определяет объяснение / произношение символов (для восточноазиатской типографики)</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_ruby.php'>&lt;ruby&gt;</a></td>
                <td>Определяет аннотацию ruby (для восточноазиатской типографики)</td>
            </tr>
            <tr>
                <td><a href='tag_s.php'>&lt;s&gt;</a></td>
                <td>Определяет текст, которій больше не является правильным</td>
            </tr>
            <tr>
                <td><a href='tag_samp.php'>&lt;samp&gt;</a></td>
                <td>Определяет исходные данные с компьютерной программы</td>
            </tr>
            <tr>
                <td><a href='tag_small.php'>&lt;small&gt;</a></td>
                <td>Определяет меньший текст</td>
            </tr>
            <tr>
                <td><a class='notsupported' href='tag_strike.php'>&lt;strike&gt;</a></td>
                <td><span class='deprecated'>Не поддерживается в HTML5. Используйте &lt;del&gt; или &lt;s&gt; вместо этого.<br></span>Определяет перечёркнутый текст</td>
            </tr>
            <tr>
                <td><a href='tag_strong.php'>&lt;strong&gt;</a></td>
                <td>Определяет важный текст</td>
            </tr>
            <tr>
                <td><a href='tag_sub.php'>&lt;sub&gt;</a></td>
                <td>Определяет подстрочный текст (нижний индекс)</td>
            </tr>
            <tr>
                <td><a href='tag_sup.php'>&lt;sup&gt;</a></td>
                <td>Определяет надстрочный текст (верхний индекс)</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_template.php'>&lt;template&gt;</a></td>
                <td>Определяет шаблон</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_time.php'>&lt;time&gt;</a></td>
                <td>Определяет дату / время</td>
            </tr>
            <tr>
                <td><a class='notsupported' href='tag_tt.php'>&lt;tt&gt;</a></td>
                <td><span class='deprecated'>Не поддерживается в HTML5. Используйте CSS вместо этого.<br></span>Определяет текст телетайпа</td>
            </tr>
            <tr>
                <td><a href='tag_u.php'>&lt;u&gt;</a></td>
                <td>Определяет текст, который должен быть стилистически отличным от обычного текста</td>
            </tr>
            <tr>
                <td><a href='tag_var.php'>&lt;var&gt;</a></td>
                <td>Определяет переменную</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_wbr.php'>&lt;wbr&gt;</a></td>
                <td>Определяет возможный разрыв строки</td>
            </tr>
            </tbody>
        </table>
        <h2>Формы и входящие данные</h2>
        <table class='w3-table-all notranslate'>
            <tbody><tr>
                <th style='width:20%'>Тег</th>
                <th>Описание</th>
            </tr>
            <tr>
                <td><a href='tag_form.php'>&lt;form&gt;</a></td>
                <td>Определяет форму HTML для ввода пользователем</td>
            </tr>
            <tr>
                <td><a href='tag_input.php'>&lt;input&gt;</a></td>
                <td>Определяет элемент управления вводом</td>
            </tr>
            <tr>
                <td><a href='tag_textarea.php'>&lt;textarea&gt;</a></td>
                <td>Определяет многострочный элемент управления вводом (текстовая область)</td>
            </tr>
            <tr>
                <td><a href='tag_button.php'>&lt;button&gt;</a></td>
                <td>Определяет кнопку, которую можно нажимать</td>
            </tr>
            <tr>
                <td><a href='tag_select.php'>&lt;select&gt;</a></td>
                <td>Определяет выпадающий список</td>
            </tr>
            <tr>
                <td><a href='tag_optgroup.php'>&lt;optgroup&gt;</a></td>
                <td>Определяет группу соответствующих параметров в выпадающем списке</td>
            </tr>
            <tr>
                <td><a href='tag_option.php'>&lt;option&gt;</a></td>
                <td>Определяет параметр в выпадающем списке</td>
            </tr>
            <tr>
                <td><a href='tag_label.php'>&lt;label&gt;</a></td>
                <td>Определяет метку&nbsp;для &lt;input&gt; элемента</td>
            </tr>
            <tr>
                <td><a href='tag_fieldset.php'>&lt;fieldset&gt;</a></td>
                <td>Группы связанных элементов в форме</td>
            </tr>
            <tr>
                <td><a href='tag_legend.php'>&lt;legend&gt;</a></td>
                <td>Определяет заголовок для &lt;fieldset&gt; элемента</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_datalist.php'>&lt;datalist&gt;</a></td>
                <td>Определяет список предварительно определённых параметров управления вводом</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_output.php'>&lt;output&gt;</a></td>
                <td>Определяет результат расчёта</td>
            </tr>
            </tbody>
        </table>
        <h2>Фреймы</h2>
        <table class='w3-table-all notranslate'>
            <tbody><tr>
                <th style='width:20%'>Тег</th>
                <th>Описание</th>
            </tr>
            <tr>
                <td><a class='notsupported' href='tag_frame.php'>&lt;frame&gt;</a></td>
                <td> <span class='deprecated'>Не поддерживается в HTML5.<br></span>Определяет окно (фрейм) в наборе фреймов</td>
            </tr>
            <tr>
                <td><a class='notsupported' href='tag_frameset.php'>&lt;frameset&gt;</a></td>
                <td><span class='deprecated'>Не поддерживается в HTML5.<br></span>Определяет набор фреймов</td>
            </tr>
            <tr>
                <td><a class='notsupported' href='tag_noframes.php'>&lt;noframes&gt;</a></td>
                <td><span class='deprecated'>Не поддерживается в HTML5.<br></span>Определяет альтернативное содержание для пользователей, которые не поддерживают фреймы</td>
            </tr>
            <tr>
                <td><a href='tag_iframe.php'>&lt;iframe&gt;</a></td>
                <td>Определяет встроенный фрейм</td>
            </tr>
            </tbody>
        </table>
        <h2>Изображения</h2>
        <table class='w3-table-all notranslate'>
            <tbody><tr>
                <th style='width:20%'>Тег</th>
                <th>Изображение</th>
            </tr>
            <tr>
                <td><a href='tag_img.php'>&lt;img&gt;</a></td>
                <td>Определяет изображение</td>
            </tr>
            <tr>
                <td><a href='tag_map.php'>&lt;map&gt;</a></td>
                <td>Определяет карту изображения на стороне клиента</td>
            </tr>
            <tr>
                <td><a href='tag_area.php'>&lt;area&gt;</a></td>
                <td>Определяет область внутри карты изображения</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_canvas.php'>&lt;canvas&gt;</a></td>
                <td>Используется для рисования на лету с помощью сценариев (обычно на JavaScript)</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_figcaption.php'>&lt;figcaption&gt;</a></td>
                <td>Определяет заголовок для элемента &lt;figure&gt;</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_figure.php'>&lt;figure&gt;</a></td>
                <td>Определяет автономное содержание</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_picture.php'>&lt;picture&gt;</a></td>
                <td>Определяет контейнер для нескольких ресурсов изображения</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_svg.php'>&lt;svg&gt;</a></td>
                <td>Определяет контейнер для графики SVG</td>
            </tr>
            </tbody>
        </table>
        <h2>Аудио / Видео</h2>
        <table class='w3-table-all notranslate'>
            <tbody><tr>
                <th style='width:20%'>Тег</th>
                <th>Описание</th>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_audio.php'>&lt;audio&gt;</a></td>
                <td>Определяет звуковой контент</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_source.php'>&lt;source&gt;</a></td>
                <td>Определяет несколько медиа-ресурсов для медиа-элементов (&lt;video&gt;, &lt;audio&gt;, &lt;picture&gt;)</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_track.php'>&lt;track&gt;</a></td>
                <td>Определяет текстовые дорожки для медиа-элементов (&lt;video&gt; и &lt;audio&gt;)</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_video.php'>&lt;video&gt;</a></td>
                <td>Определяет видео или фильм</td>
            </tr>
            </tbody>
        </table>
        <h2>Ссылки</h2>
        <table class='w3-table-all notranslate'>
            <tbody><tr>
                <th style='width:20%'>Тег</th>
                <th>Описание</th>
            </tr>
            <tr>
                <td><a href='tag_a.php'>&lt;a&gt;</a></td>
                <td>Определяет гиперссылку</td>
            </tr>
            <tr>
                <td><a href='tag_link.php'>&lt;link&gt;</a></td>
                <td>Определяет взаимосвязь между документом и внешним ресурсом (наиболее часто используется для ссылки на внешние таблицы стилей)</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_nav.php'>&lt;nav&gt;</a></td>
                <td>Определяет навигационные ссылки (навигация по сайту)</td>
            </tr>
            </tbody>
        </table>
        <h2>Списки</h2>
        <table class='w3-table-all notranslate'>
            <tbody><tr>
                <th style='width:20%'>Тег</th>
                <th>Описание</th>
            </tr>
            <tr>
                <td><a href='tag_ul.php'>&lt;ul&gt;</a></td>
                <td>Определяет неупорядоченный (ненумерованный) список</td>
            </tr>
            <tr>
                <td><a href='tag_ol.php'>&lt;ol&gt;</a></td>
                <td>Определяет упорядоченный (нумерованный) список</td>
            </tr>
            <tr>
                <td><a href='tag_li.php'>&lt;li&gt;</a></td>
                <td>Определяет элемент списка</td>
            </tr>
            <tr>
                <td><a class='notsupported' href='tag_dir.php'>&lt;dir&gt;</a></td>
                <td><span class='deprecated'>Не поддерживается в HTML5. Используйте <a href='tag_ul.php'>&lt;ul&gt;</a> вместо этого.<br></span>Определяет список каталогов</td>
            </tr>
            <tr>
                <td><a href='tag_dl.php'>&lt;dl&gt;</a></td>
                <td>Определяет список описаний</td>
            </tr>
            <tr>
                <td><a href='tag_dt.php'>&lt;dt&gt;</a></td>
                <td>Определяет термин / имя в списке описания</td>
            </tr>
            <tr>
                <td><a href='tag_dd.php'>&lt;dd&gt;</a></td>
                <td>Определяет описание / значение термина в списке описания</td>
            </tr>
            </tbody>
        </table>
        <h2>Таблицы</h2>
        <table class='w3-table-all notranslate'>
            <tbody><tr>
                <th style='width:20%'>Tег</th>
                <th>Описание</th>
            </tr>
            <tr>
                <td><a href='tag_table.php'>&lt;table&gt;</a></td>
                <td>Определяет таблицю</td>
            </tr>
            <tr>
                <td><a href='tag_caption.php'>&lt;caption&gt;</a></td>
                <td>Определяет подпись таблицы</td>
            </tr>
            <tr>
                <td><a href='tag_th.php'>&lt;th&gt;</a></td>
                <td>Определяет ячейку заголовка в таблице</td>
            </tr>
            <tr>
                <td><a href='tag_tr.php'>&lt;tr&gt;</a></td>
                <td>Определяет строку в таблице</td>
            </tr>
            <tr>
                <td><a href='tag_td.php'>&lt;td&gt;</a></td>
                <td>Определяет ячейку в таблице</td>
            </tr>
            <tr>
                <td><a href='tag_thead.php'>&lt;thead&gt;</a></td>
                <td>Группирует содержание заголовка в таблице</td>
            </tr>
            <tr>
                <td><a href='tag_tbody.php'>&lt;tbody&gt;</a></td>
                <td>Группирует содержание тела в таблице</td>
            </tr>
            <tr>
                <td><a href='tag_tfoot.php'>&lt;tfoot&gt;</a></td>
                <td>Группирует содержание нижнего колонтитула в таблице</td>
            </tr>
            <tr>
                <td><a href='tag_col.php'>&lt;col&gt;</a></td>
                <td>Указывает свойства столбцов для каждого столбца в элементе &lt;colgroup&gt;</td>
            </tr>
            <tr>
                <td><a href='tag_colgroup.php'>&lt;colgroup&gt;</a></td>
                <td>Определяет группу с одного или нескольких столбцов в таблице для форматирования</td>
            </tr>
            </tbody>
        </table>
        <h2>Стили и семантика</h2>
        <table class='w3-table-all notranslate'>
            <tbody><tr>
                <th style='width:20%'>Тег</th>
                <th>Описание</th>
            </tr>
            <tr>
                <td><a href='tag_style.php'>&lt;style&gt;</a></td>
                <td>Определяет информацию о стиле для документа</td>
            </tr>
            <tr>
                <td><a href='tag_div.php'>&lt;div&gt;</a></td>
                <td>Определяет блочный раздел в документе</td>
            </tr>
            <tr>
                <td><a href='tag_span.php'>&lt;span&gt;</a></td>
                <td>Определяет строчный раздел в документе</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_header.php'>&lt;header&gt;</a></td>
                <td>Определяет заголовок для документа или раздела</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_footer.php'>&lt;footer&gt;</a></td>
                <td>Определяет нижний колонтитул (футер) для документа или раздела</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_main.php'>&lt;main&gt;</a></td>
                <td>Определяет основное содержание документа</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_section.php'>&lt;section&gt;</a></td>
                <td>Определяет раздел (секцию) в документе</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_article.php'>&lt;article&gt;</a></td>
                <td>Определяет статью</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_aside.php'>&lt;aside&gt;</a></td>
                <td>Определяет содержание, кроме содержимого страницы (в стороне)</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_details.php'>&lt;details&gt;</a></td>
                <td>Определяет дополнительные детали, которые пользователь может просматривать или прятать</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_dialog.php'>&lt;dialog&gt;</a></td>
                <td>Определяет диалоговій бокс или окно</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_summary.php'>&lt;summary&gt;</a></td>
                <td>Определяет видимый заголовок для элемента &lt;details&gt;</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_data.php'>&lt;data&gt;</a></td>
                <td>Связывает заданный контент с машиночитаемым переводом</td>
            </tr>
            </tbody></table>
        <h2>Мета Информация</h2>
        <table class='w3-table-all notranslate'>
            <tbody><tr>
                <th style='width:20%'>Тег</th>
                <th>Описание</th>
            </tr>
            <tr>
                <td><a href='tag_head.php'>&lt;head&gt;</a></td>
                <td>Определяет информацию о документе</td>
            </tr>
            <tr>
                <td><a href='tag_meta.php'>&lt;meta&gt;</a></td>
                <td>Определяет метаданные HTML документа</td>
            </tr>
            <tr>
                <td><a href='tag_base.php'>&lt;base&gt;</a></td>
                <td>Указывает базовый URL-адрес / цель для всех относительных URL-адресов документа</td>
            </tr>
            <tr>
                <td><a class='notsupported' href='tag_basefont.php'>&lt;basefont&gt;</a></td>
                <td><span class='deprecated'>Не поддерживается в HTML5. Используйте CSS вместо этого.<br></span>Определяет цвет, размер и шрифт по умолчанию для всего текста документа</td>
            </tr>
            </tbody>
        </table>
        <h2>Программирование</h2>
        <table class='w3-table-all notranslate'>
            <tbody><tr>
                <th style='width:20%'>Тег</th>
                <th>Описание</th>
            </tr>
            <tr>
                <td><a href='tag_script.php'>&lt;script&gt;</a></td>
                <td>Определяет скрипт на стороне клиента</td>
            </tr>
            <tr>
                <td><a href='tag_noscript.php'>&lt;noscript&gt;</a></td>
                <td>Определяет альтернативное содержание для пользователей, которые не поддерживают сценари на стороне клиента</td>
            </tr>
            <tr>
                <td><a class='notsupported' href='tag_applet.php'>&lt;applet&gt;</a></td>
                <td><span class='deprecated'>Не поддерживается в HTML5. Используйте <a href='tag_embed.php'>&lt;embed&gt;</a> или <a href='tag_object.php'>&lt;object&gt;</a> вместо этого.<br></span>Определяет встроенный апплет</td>
            </tr>
            <tr>
                <td class='html5badge'><a href='tag_embed.php'>&lt;embed&gt;</a></td>
                <td>Определяет контейнер для внешнего (не HTML) приложения</td>
            </tr>
            <tr>
                <td><a href='tag_object.php'>&lt;object&gt;</a></td>
                <td>Определяет встроенный объект</td>
            </tr>
            <tr>
                <td><a href='tag_param.php'>&lt;param&gt;</a></td>
                <td>Определяет параметр для объекта</td>
            </tr>
        </table>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='index.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='ref_attributes.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
