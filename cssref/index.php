<?php include '../include/head.php'; ?>

<title>CSS Справочник. <?php include '../include/title.php'; ?></title>
<meta name="description" content="CSS Полный справочник. <?php include '../include/description.php'; ?>">
<link rel="stylesheet" href="../cdn/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
    function filterSearch() {
        var a, l, b, i, j, c, h, ahref, s, tr, td;
        c = document.getElementById("searchstring").value.toUpperCase();
        a = document.getElementById("cssproperties").getElementsByClassName("w3-table-all");
        h = document.getElementById("cssproperties").getElementsByTagName("h2");
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
                    } else {
                        if (td.innerHTML.toUpperCase().indexOf(c) > -1) {
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
                        h[j].style.display = "none";
                    } else {
                        a[j].style.display = "";
                        h[j].style.display = "";
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
                    a[i].style.backgroundColor = "#ffffff";
                    c = 0;
                }
            }
        }
    }
</script>
<style>
    #cssproperties .w3-table-all tr:nth-child(odd) {
        background-color: #f1f1f1;
    }
    #cssproperties .w3-table-all tr:nth-child(even) {
        background-color: #fff;
    }
    #cssproperties .w3-table-all td:first-child {
        width: 30%!important;
    }

    input[type=text] {
        width: 100%;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
    }

    #searchicon:after {
        content: "\f002";
        font-family: FontAwesome, sans-serif;
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
<?php include '../include/leftmenu_cssref.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Справочник</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="../index.php">&#10094; Home</a>
        <a class="w3-right w3-btn" href="css3_browsersupport.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS Свойства</h2>
    <div style="position:relative"><div id="searchicon"></div></div>
    <input type="text" id="searchstring" name="search" placeholder="Поиск.." oninput="filterSearch()">
    <div id="cssproperties">
        <h2>A</h2>
        <table class="w3-table-all notranslate">
            <tr>
                <td><a href="css3_pr_align-content.php">align-content</a></td>
                <td>Задает выравнивание между линиями внутри гибкого контейнера, когда элементы не используют все доступное пространство</td>
            </tr>
            <tr>
                <td><a href="css3_pr_align-items.php">align-items</a></td>
                <td>Задает выравнивание для элементов внутри гибкого контейнера</td>
            </tr>
            <tr>
                <td><a href="css3_pr_align-self.php">align-self</a></td>
                <td>Задает выравнивание для выбранных элементов внутри гибкого контейнера</td>
            </tr>
            <tr>
                <td><a href="css3_pr_all.php">all</a></td>
                <td>Сбрасывает все свойства (кроме unicode-bidi и direction)</td>
            </tr>
            <tr>
                <td><a href="css3_pr_animation.php">animation</a></td>
                <td>Сокращенное свойство для всех свойств <em>animation-*</em></td>
            </tr>
            <tr>
                <td><a href="css3_pr_animation-delay.php">animation-delay</a></td>
                <td>Определяет задержку начала анимации</td>
            </tr>
            <tr>
                <td><a href="css3_pr_animation-direction.php">animation-direction</a></td>
                <td>Определяет, должна ли анимация воспроизводиться вперед, назад или в альтернативных циклах</td>
            </tr>
            <tr>
                <td><a href="css3_pr_animation-duration.php">animation-duration</a></td>
                <td>Определяет, сколько времени должно занять анимация для завершения одного цикла</td>
            </tr>
            <tr>
                <td><a href="css3_pr_animation-fill-mode.php">animation-fill-mode</a></td>
                <td>Задает стиль для элемента, когда анимация не воспроизводится (до начала, после окончания или и то, и другое)</td>
            </tr>
            <tr>
                <td><a href="css3_pr_animation-iteration-count.php">animation-iteration-count</a></td>
                <td>Определяет, сколько раз должна воспроизводиться анимация</td>
            </tr>
            <tr>
                <td><a href="css3_pr_animation-name.php">animation-name</a></td>
                <td>Задает имя для анимации @keyframes</td>
            </tr>
            <tr>
                <td><a href="css3_pr_animation-play-state.php">animation-play-state</a></td>
                <td>Определяет, запущена ли анимация или приостановлена</td>
            </tr>
            <tr>
                <td><a href="css3_pr_animation-timing-function.php">animation-timing-function</a></td>
                <td>Определяет кривую скорости анимации</td>
            </tr>
        </table>

        <h2>B</h2>
        <table class="w3-table-all notranslate">
            <tr>
                <td style="width:30%"><a href="css3_pr_backface-visibility.php">backface-visibility</a></td>
                <td>Определяет, должна ли быть видна задняя грань элемента, когда он смотрит на пользователя</td>
            </tr>
            <tr>
                <td><a href="css3_pr_background.php">background</a></td>
                <td>Сокращенное свойство для всех свойств <em>background-*</em></td>
            </tr>
            <tr>
                <td><a href="pr_background-attachment.php">background-attachment</a></td>
                <td>Устанавливает, будет ли фоновое изображение прокручиваться вместе с остальной частью страницы или фиксировано</td>
            </tr>
            <tr>
                <td><a href="pr_background-blend-mode.php">background-blend-mode</a></td>
                <td>Определяет режим наложения каждого фонового слоя (цвет/изображение)</td>
            </tr>
            <tr>
                <td><a href="css3_pr_background-clip.php">background-clip</a></td>
                <td>Определяет, насколько далеко должен распространяться фон (цвет или изображение) внутри элемента</td>
            </tr>
            <tr>
                <td><a href="pr_background-color.php">background-color</a></td>
                <td>Задает цвет фона элемента</td>
            </tr>
            <tr>
                <td><a href="pr_background-image.php">background-image</a></td>
                <td>Задает одно или несколько фоновых изображений для элемента</td>
            </tr>
            <tr>
                <td><a href="css3_pr_background-origin.php">background-origin</a></td>
                <td>Определяет исходную позицию фонового изображения</td>
            </tr>
            <tr>
                <td><a href="pr_background-position.php">background-position</a></td>
                <td>Определяет положение фонового изображения</td>
            </tr>
            <tr>
                <td><a href="pr_background-repeat.php">background-repeat</a></td>
                <td>Устанавливает, будет ли/как будет повторяться фоновое изображение</td>
            </tr>
            <tr>
                <td><a href="css3_pr_background-size.php">background-size</a></td>
                <td>Определяет размер фоновых изображений</td>
            </tr>
            <tr>
                <td><a href="pr_border.php">border</a></td>
                <td>Сокращенное свойство для <em>border-width, border-style</em> и <em>border-color</em></td>
            </tr>
            <tr>
                <td><a href="pr_border-bottom.php">border-bottom</a></td>
                <td>Сокращенное свойство для <em>border-bottom-width, border-bottom-style</em> и <em>border-bottom-color</em></td>
            </tr>
            <tr>
                <td><a href="pr_border-bottom_color.php">border-bottom-color</a></td>
                <td>Устанавливает цвет нижней границы</td>
            </tr>
            <tr>
                <td><a href="css3_pr_border-bottom-left-radius.php">border-bottom-left-radius</a></td>
                <td>Определяет радиус границы нижнего левого угла</td>
            </tr>
            <tr>
                <td><a href="css3_pr_border-bottom-right-radius.php">border-bottom-right-radius</a></td>
                <td>Определяет радиус границы нижнего правого угла</td>
            </tr>
            <tr>
                <td><a href="pr_border-bottom_style.php">border-bottom-style</a></td>
                <td>Устанавливает стиль нижней границы</td>
            </tr>
            <tr>
                <td><a href="pr_border-bottom_width.php">border-bottom-width</a></td>
                <td>Устанавливает ширину нижней границы</td>
            </tr>
            <tr>
                <td><a href="pr_border-collapse.php">border-collapse</a></td>
                <td>Устанавливает, должны ли границы таблицы сворачиваться в единую границу или разделяться</td>
            </tr>
            <tr>
                <td><a href="pr_border-color.php">border-color</a></td>
                <td>Устанавливает цвет четырех границ</td>
            </tr>
            <tr>
                <td><a href="css3_pr_border-image.php">border-image</a></td>
                <td>Сокращенное свойство для всех свойств <em>border-image-*</em></td>
            </tr>
            <tr>
                <td><a href="css3_pr_border-image-outset.php">border-image-outset</a></td>
                <td>Определяет величину, на которую область изображения границы выходит за пределы границы блока</td>
            </tr>
            <tr>
                <td><a href="css3_pr_border-image-repeat.php">border-image-repeat</a></td>
                <td>Определяет, должно ли изображение границы повторяться, закругляться или растягиваться</td>
            </tr>
            <tr>
                <td><a href="css3_pr_border-image-slice.php">border-image-slice</a></td>
                <td>Определяет, как разрезать изображение границы</td>
            </tr>
            <tr>
                <td><a href="css3_pr_border-image-source.php">border-image-source</a></td>
                <td>Задает путь к изображению, которое будет использоваться в качестве границы</td>
            </tr>
            <tr>
                <td><a href="css3_pr_border-image-width.php">border-image-width</a></td>
                <td>Определяет ширину изображения границы</td>
            </tr>
            <tr>
                <td><a href="pr_border-left.php">border-left</a></td>
                <td>Сокращенное свойство для всех свойств <em>border-left-*</em></td>
            </tr>
            <tr>
                <td><a href="pr_border-left_color.php">border-left-color</a></td>
                <td>Устанавливает цвет левой границы</td>
            </tr>
            <tr>
                <td><a href="pr_border-left_style.php">border-left-style</a></td>
                <td>Устанавливает стиль левой границы</td>
            </tr>
            <tr>
                <td><a href="pr_border-left_width.php">border-left-width</a></td>
                <td>Устанавливает ширину левой границы</td>
            </tr>
            <tr>
                <td><a href="css3_pr_border-radius.php">border-radius</a></td>
                <td>Сокращенное свойство для четырех свойств <em>border-*-radius</em></td>
            </tr>
            <tr>
                <td><a href="pr_border-right.php">border-right</a></td>
                <td>Сокращенное свойство для всех свойств <em>border-right-*</em></td>
            </tr>
            <tr>
                <td><a href="pr_border-right_color.php">border-right-color</a></td>
                <td>Устанавливает цвет правой границы</td>
            </tr>
            <tr>
                <td><a href="pr_border-right_style.php">border-right-style</a></td>
                <td>Устанавливает стиль правой границы</td>
            </tr>
            <tr>
                <td><a href="pr_border-right_width.php">border-right-width</a></td>
                <td>Устанавливает ширину правой границы</td>
            </tr>
            <tr>
                <td><a href="pr_border-spacing.php">border-spacing</a></td>
                <td>Устанавливает расстояние между границами соседних ячеек</td>
            </tr>
            <tr>
                <td><a href="pr_border-style.php">border-style</a></td>
                <td>Устанавливает стиль четырех границ</td>
            </tr>
            <tr>
                <td><a href="pr_border-top.php">border-top</a></td>
                <td>Сокращенное свойство для <em>border-top-width, border-top-style</em> и <em>border-top-color</em></td>
            </tr>
            <tr>
                <td><a href="pr_border-top_color.php">border-top-color</a></td>
                <td>Устанавливает цвет верхней границы</td>
            </tr>
            <tr>
                <td><a href="css3_pr_border-top-left-radius.php">border-top-left-radius</a></td>
                <td>Определяет радиус границы верхнего левого угла</td>
            </tr>
            <tr>
                <td><a href="css3_pr_border-top-right-radius.php">border-top-right-radius</a></td>
                <td>Определяет радиус границы правого верхнего угла</td>
            </tr>
            <tr>
                <td><a href="pr_border-top_style.php">border-top-style</a></td>
                <td>Устанавливает стиль верхней границы</td>
            </tr>
            <tr>
                <td><a href="pr_border-top_width.php">border-top-width</a></td>
                <td>Устанавливает ширину верхней границы</td>
            </tr>
            <tr>
                <td><a href="pr_border-width.php">border-width</a></td>
                <td>Устанавливает ширину четырех границ</td>
            </tr>
            <tr>
                <td><a href="pr_pos_bottom.php">bottom</a></td>
                <td>Устанавливает позицию элемента снизу родительского элемента</td>
            </tr>
            <tr>
                <td><a href="css3_pr_box-decoration-break.php">box-decoration-break</a></td>
                <td>Устанавливает поведение фона и границы элемента при разрыве страницы или, для встроенных элементов, при разрыве строки.</td>
            </tr>
            <tr>
                <td><a href="css3_pr_box-shadow.php">box-shadow</a></td>
                <td>Добавляет одну или несколько теней к элементу</td>
            </tr>
            <tr>
                <td><a href="css3_pr_box-sizing.php">box-sizing</a></td>
                <td>Определяет, как рассчитываются ширина и высота элемента: должны ли они включать отступы и границы или нет</td>
            </tr>
            <tr>
                <td><a href="pr_break-after.php">break-after</a></td>
                <td>Определяет, должен ли разрыв страницы, столбца или области происходить после указанного элемента</td>
            </tr>
            <tr>
                <td><a href="pr_break-before.php">break-before</a></td>
                <td>Определяет, должен ли разрыв страницы, столбца или области происходить перед указанным элементом</td>
            </tr>
            <tr>
                <td><a href="pr_break-inside.php">break-inside</a></td>
                <td>Указывает, должен ли разрыв страницы, столбца или области происходить внутри указанного элемента</td>
            </tr>
        </table>

        <h2>C</h2>
        <table class="w3-table-all notranslate">
            <tr>
                <td><a href="pr_tab_caption-side.php">caption-side</a></td>
                <td>Задает размещение заголовка таблицы</td>
            </tr>
            <tr>
                <td><a href="css3_pr_caret-color.php">caret-color</a></td>
                <td>Определяет цвет курсора (каретки) во входных данных, текстовых областях или любом редактируемом элементе</td>
            </tr>
            <tr>
                <td><a href="pr_charset_rule.php">@charset</a></td>
                <td>Определяет кодировку символов, используемую в таблице стилей</td>
            </tr>
            <tr>
                <td><a href="pr_class_clear.php">clear</a></td>
                <td>Определяет, с каких сторон элемента плавающие элементы не могут плавать</td>
            </tr>
            <tr>
                <td><a href="pr_pos_clip.php">clip</a></td>
                <td>Обрезает абсолютно позиционированный элемент</td>
            </tr>
            <tr>
                <td><a href="pr_text_color.php">color</a></td>
                <td>Устанавливает цвет текста</td>
            </tr>
            <tr>
                <td><a href="css3_pr_column-count.php">column-count</a></td>
                <td>Задает количество столбцов, на которые должен быть разделен элемент</td>
            </tr>
            <tr>
                <td><a href="css3_pr_column-fill.php">column-fill</a></td>
                <td>Определяет, как заполнять столбцы, сбалансированно или нет</td>
            </tr>
            <tr>
                <td><a href="css3_pr_column-gap.php">column-gap</a></td>
                <td>Определяет зазор (расстояние) между столбцами</td>
            </tr>
            <tr>
                <td><a href="css3_pr_column-rule.php">column-rule</a></td>
                <td>Сокращенное свойство для всех свойств <em>column-rule-*</em></td>
            </tr>
            <tr>
                <td><a href="css3_pr_column-rule-color.php">column-rule-color</a></td>
                <td>Задает цвет правила между столбцами</td>
            </tr>
            <tr>
                <td><a href="css3_pr_column-rule-style.php">column-rule-style</a></td>
                <td>Задает стиль правила между столбцами</td>
            </tr>
            <tr>
                <td><a href="css3_pr_column-rule-width.php">column-rule-width</a></td>
                <td>Определяет ширину правила между столбцами</td>
            </tr>
            <tr>
                <td><a href="css3_pr_column-span.php">column-span</a></td>
                <td>Определяет, сколько столбцов должен занимать элемент</td>
            </tr>
            <tr>
                <td><a href="css3_pr_column-width.php">column-width</a></td>
                <td>Определяет ширину столбца</td>
            </tr>
            <tr>
                <td><a href="css3_pr_columns.php">columns</a></td>
                <td>Сокращенное свойство для <em>column-width</em> и <em>column-count</em></td>
            </tr>
            <tr>
                <td><a href="pr_gen_content.php">content</a></td>
                <td>Используется с псевдоэлементами :before и :after для вставки сгенерированного содержимого</td>
            </tr>
            <tr>
                <td><a href="pr_gen_counter-increment.php">counter-increment</a></td>
                <td>Увеличивает или уменьшает значение одного или нескольких счетчиков CSS</td>
            </tr>
            <tr>
                <td><a href="pr_gen_counter-reset.php">counter-reset</a></td>
                <td>Создает или сбрасывает один или несколько счетчиков CSS</td>
            </tr>
            <tr>
                <td><a href="pr_class_cursor.php">cursor</a></td>
                <td>Указывает курсор мыши, который будет отображаться при наведении указателя на элемент</td>
            </tr>
        </table>

        <h2>D</h2>
        <table class="w3-table-all notranslate">
            <tr>
                <td><a href="pr_text_direction.php">direction</a></td>
                <td>Определяет направление текста/направление письма</td>
            </tr>
            <tr>
                <td><a href="pr_class_display.php">display</a></td>
                <td>Определяет, как должен отображаться определенный элемент HTML</td>
            </tr>
        </table>

        <h2>E</h2>
        <table class="w3-table-all notranslate">
            <tr>
                <td style="width:20%"><a href="pr_tab_empty-cells.php">empty-cells</a></td>
                <td>Указывает, следует ли отображать границы и фон в пустых ячейках таблицы</td>
            </tr>
        </table>

        <h2>F</h2>
        <table class="w3-table-all notranslate">
            <tr>
                <td style="width:20%"><a href="css3_pr_filter.php">filter</a></td>
                <td>Определяет эффекты (например, размытие или изменение цвета) на элементе перед отображением элемента</td>
            </tr>
            <tr>
                <td><a href="css3_pr_flex.php">flex</a></td>
                <td>Сокращенное свойство для свойств <em>flex-grow, flex-shrink</em> и <em>flex-basis</em></td>
            </tr>
            <tr>
                <td><a href="css3_pr_flex-basis.php">flex-basis</a></td>
                <td>Задает начальную длину гибкого элемента</td>
            </tr>
            <tr>
                <td><a href="css3_pr_flex-direction.php">flex-direction</a></td>
                <td>Определяет направление гибких элементов</td>
            </tr>
            <tr>
                <td><a href="css3_pr_flex-flow.php">flex-flow</a></td>
                <td>Сокращенное свойство для свойств <em>flex-direction</em> и <em>flex-wrap</em></td>
            </tr>
            <tr>
                <td><a href="css3_pr_flex-grow.php">flex-grow</a></td>
                <td>Определяет, насколько элемент будет увеличиваться относительно остальных</td>
            </tr>
            <tr>
                <td><a href="css3_pr_flex-shrink.php">flex-shrink</a></td>
                <td>Определяет, как элемент будет уменьшаться по сравнению с остальными</td>
            </tr>
            <tr>
                <td><a href="css3_pr_flex-wrap.php">flex-wrap</a></td>
                <td>Определяет, должны ли гибкие элементы оборачиваться или нет</td>
            </tr>
            <tr>
                <td><a href="pr_class_float.php">float</a></td>
                <td>Определяет, должен ли блок плавать</td>
            </tr>
            <tr>
                <td><a href="pr_font_font.php">font</a></td>
                <td>Сокращенное свойство для свойств <em>font-style, font-variant, font-weight, font-size/line-height</em> и <em>font-family</em></td>
            </tr>
            <tr>
                <td><a href="css3_pr_font-face_rule.php">@font-face</a></td>
                <td>Правило, позволяющее веб-сайтам загружать и использовать шрифты, отличные от &quot;web-безопасных&quot; шрифтов</td>
            </tr>
            <tr>
                <td><a href="pr_font_font-family.php">font-family</a></td>
                <td>Задает семейство шрифтов для текста</td>
            </tr>
            <tr>
                <td><a href="css3_pr_font-feature-settings.php">font-feature-settings</a></td>
                <td>Позволяет управлять расширенными типографскими функциями в шрифтах OpenType</td>
            </tr>
            <tr>
                <td>@font-feature-values</td>
                <td>Позволяет авторам использовать общее имя в font-variant-alternate для функции, активированной по-разному в OpenType</td>
            </tr>
            <tr>
                <td><a href="css3_pr_font-kerning.php">font-kerning</a></td>
                <td>Управляет использованием информации о кернинге (расстояние между буквами)</td>
            </tr>
            <tr>
                <td>font-language-override</td>
                <td>Управляет использованием глифов, зависящих от языка, в гарнитуре</td>
            </tr>
            <tr>
                <td><a href="pr_font_font-size.php">font-size</a></td>
                <td>Определяет размер шрифта текста</td>
            </tr>
            <tr>
                <td><a href="css3_pr_font-size-adjust.php">font-size-adjust</a></td>
                <td>Сохраняет удобочитаемость текста при откате шрифта</td>
            </tr>
            <tr>
                <td><a href="css3_pr_font-stretch.php">font-stretch</a></td>
                <td>Выбирает обычное, сжатое или расширенное начертание из семейства шрифтов</td>
            </tr>
            <tr>
                <td><a href="pr_font_font-style.php">font-style</a></td>
                <td>Задает стиль шрифта для текста</td>
            </tr>
            <tr>
                <td>font-synthesis</td>
                <td>Управляет тем, какие отсутствующие шрифты (полужирный или курсив) могут быть синтезированы браузером</td>
            </tr>
            <tr>
                <td><a href="pr_font_font-variant.php">font-variant</a></td>
                <td>Определяет, должен ли текст отображаться мелким шрифтом</td>
            </tr>
            <tr>
                <td>font-variant-alternates</td>
                <td>Управляет использованием альтернативных глифов, связанных с альтернативными именами, определенными в @font-feature-values</td>
            </tr>
            <tr>
                <td><a href="css3_pr_font-variant-caps.php">font-variant-caps</a></td>
                <td>Управляет использованием альтернативных глифов для заглавных букв</td>
            </tr>
            <tr>
                <td>font-variant-east-asian</td>
                <td>Управляет использованием альтернативных глифов для восточноазиатских шрифтов (например, японского и китайского)</td>
            </tr>
            <tr>
                <td>font-variant-ligatures</td>
                <td>Управляет тем, какие лигатуры и контекстные формы используются в текстовом содержимом элементов, к которым он применяется</td>
            </tr>
            <tr>
                <td>font-variant-numeric</td>
                <td>Управляет использованием альтернативных глифов для чисел, дробей и порядковых маркеров</td>
            </tr>
            <tr>
                <td>font-variant-position</td>
                <td>Управляет использованием альтернативных глифов меньшего размера, расположенных как верхний или нижний индекс относительно базовой линии шрифта</td>
            </tr>
            <tr>
                <td><a href="pr_font_weight.php">font-weight</a></td>
                <td>Определяет толщину шрифта</td>
            </tr>
        </table>

        <h2>G</h2>
        <table class="w3-table-all notranslate">
            <tr>
                <td style="width:20%"><a href="/cssref/pr_grid.php">grid</a></td>
                <td>Сокращенное свойство для свойств <em>grid-template-rows, grid-template-columns, grid-template-areas, grid-auto-rows, grid-auto-columns</em> и <em>grid-auto-flow</em></td>
            </tr>
            <tr>
                <td><a href="pr_grid-area.php">grid-area</a></td>
                <td>Либо задает имя для элемента сетки, либо это свойство является сокращенным свойством для свойств <em>grid-row-start</em>, <em>grid-column-start</em>, <em>grid-row-end</em> и <em>grid-column-end</em></td>
            </tr>
            <tr>
                <td><a href="pr_grid-auto-columns.php">grid-auto-columns</a></td>
                <td>Задает размер столбца по умолчанию</td>
            </tr>
            <tr>
                <td><a href="pr_grid-auto-flow.php">grid-auto-flow</a></td>
                <td>Определяет, как автоматически размещенные элементы вставляются в сетку</td>
            </tr>
            <tr>
                <td><a href="pr_grid-auto-rows.php">grid-auto-rows</a></td>
                <td>Задает размер строки по умолчанию</td>
            </tr>
            <tr>
                <td><a href="pr_grid-column.php">grid-column</a></td>
                <td>Сокращенное свойство для свойств <em>grid-column-start</em> и <em>grid-column-end</em></td>
            </tr>
            <tr>
                <td><a href="pr_grid-column-end.php">grid-column-end</a></td>
                <td>Указывает, где закончить элемент сетки</td>
            </tr>
            <tr>
                <td><a href="pr_grid-column-gap.php">grid-column-gap</a></td>
                <td>Определяет размер зазора между столбцами</td>
            </tr>
            <tr>
                <td><a href="pr_grid-column-start.php">grid-column-start</a></td>
                <td>Указывает, где начать элемент сетки</td>
            </tr>
            <tr>
                <td><a href="pr_grid-gap.php">grid-gap</a></td>
                <td>Сокращенное свойство для свойств <em>grid-row-gap</em> и <em>grid-column-gap</em></td>
            </tr>
            <tr>
                <td><a href="pr_grid-row.php">grid-row</a></td>
                <td>Сокращенное свойство для свойств <em>grid-row-start</em> и <em>grid-row-end</em></td>
            </tr>
            <tr>
                <td><a href="pr_grid-row-end.php">grid-row-end</a></td>
                <td>Указывает, где закончить элемент сетки</td>
            </tr>
            <tr>
                <td><a href="pr_grid-row-gap.php">grid-row-gap</a></td>
                <td>Определяет размер зазора между строками</td>
            </tr>
            <tr>
                <td><a href="pr_grid-row-start.php">grid-row-start</a></td>
                <td>Указывает, где начать элемент сетки</td>
            </tr>
            <tr>
                <td><a href="pr_grid-template.php">grid-template</a></td>
                <td>Сокращенное свойство для свойств <em>grid-template-rows</em>, <em>grid-template-columns</em> и <em>grid-areas</em></td>
            </tr>
            <tr>
                <td><a href="pr_grid-template-areas.php">grid-template-areas</a></td>
                <td>Определяет, как отображать столбцы и строки, используя именованные элементы сетки</td>
            </tr>
            <tr>
                <td><a href="pr_grid-template-columns.php">grid-template-columns</a></td>
                <td>Определяет размер столбцов и количество столбцов в макете сетки</td>
            </tr>
            <tr>
                <td><a href="pr_grid-template-rows.php">grid-template-rows</a></td>
                <td>Определяет размер строк в макете сетки</td>
            </tr>
        </table>

        <h2>H</h2>
        <table class="w3-table-all notranslate">
            <tr>
                <td style="width:20%"><a href="css3_pr_hanging-punctuation.php">hanging-punctuation</a></td>
                <td>Определяет, можно ли помещать знак пунктуации за пределы поля строки</td>
            </tr>
            <tr>
                <td><a href="pr_dim_height.php">height</a></td>
                <td>Устанавливает высоту элемента</td>
            </tr>
            <tr>
                <td><a href="css3_pr_hyphens.php">hyphens</a></td>
                <td>Устанавливает, как разделять слова, чтобы улучшить расположение параграфов</td>
            </tr>
        </table>

        <h2>I</h2>
        <table class="w3-table-all notranslate">
            <tr>
                <td>image-rendering</td>
                <td>Даёт подсказку браузеру о том, какие аспекты изображения наиболее важно сохранить при масштабировании изображения</td>
            </tr>
            <tr>
                <td><a href="pr_import_rule.php">@import</a></td>
                <td>Позволяет импортировать таблицу стилей в другую таблицу стилей</td>
            </tr>
            <tr>
                <td><a href="css3_pr_isolation.php">isolation</a></td>
                <td>Определяет, должен ли элемент создавать новое содержимое стека</td>
            </tr>
        </table>

        <h2>J</h2>
        <table class="w3-table-all notranslate">
            <tr>
                <td style="width:20%"><a href="css3_pr_justify-content.php">justify-content</a></td>
                <td>Задает выравнивание между элементами внутри гибкого контейнера, когда элементы не используют все доступное пространство</td>
            </tr>
        </table>

        <h2>K</h2>
        <table class="w3-table-all notranslate">
            <tr>
                <td style="width:20%"><a href="css3_pr_animation-keyframes.php">@keyframes</a></td>
                <td>Определяет код анимации</td>
            </tr>
        </table>

        <h2>L</h2>
        <table class="w3-table-all notranslate">
            <tr>
                <td style="width:20%"><a href="pr_pos_left.php">left</a></td>
                <td>Задает левую позицию позиционированного элемента</td>
            </tr>
            <tr>
                <td><a href="pr_text_letter-spacing.php">letter-spacing</a></td>
                <td>Увеличивает или уменьшает расстояние между символами в тексте</td>
            </tr>
            <tr>
                <td>line-break</td>
                <td>Определяет, как/если разрыв строки</td>
            </tr>
            <tr>
                <td><a href="pr_dim_line-height.php">line-height</a></td>
                <td>Устанавливает высоту строки</td>
            </tr>
            <tr>
                <td><a href="pr_list-style.php">list-style</a></td>
                <td>Устанавливает все свойства для списка в одном объявлении</td>
            </tr>
            <tr>
                <td><a href="pr_list-style-image.php">list-style-image</a></td>
                <td>Определяет изображение как маркер элемента списка</td>
            </tr>
            <tr>
                <td><a href="pr_list-style-position.php">list-style-position</a></td>
                <td>Определяет положение маркеров пунктов списка</td>
            </tr>
            <tr>
                <td><a href="pr_list-style-type.php">list-style-type</a></td>
                <td>Определяет тип маркера элемента списка</td>
            </tr>
        </table>

        <h2>M</h2>
        <table class="w3-table-all notranslate">
            <tr>
                <td style="width:20%"><a href="pr_margin.php">margin</a></td>
                <td>Устанавливает все свойства полей в одном объявлении</td>
            </tr>
            <tr>
                <td><a href="pr_margin-bottom.php">margin-bottom</a></td>
                <td>Устанавливает нижнее поле элемента</td>
            </tr>
            <tr>
                <td><a href="pr_margin-left.php">margin-left</a></td>
                <td>Устанавливает левое поле элемента</td>
            </tr>
            <tr>
                <td><a href="pr_margin-right.php">margin-right</a></td>
                <td>Устанавливает правое поле элемента</td>
            </tr>
            <tr>
                <td><a href="pr_margin-top.php">margin-top</a></td>
                <td>Устанавливает верхнее поле элемента</td>
            </tr>
            <tr>
                <td>mask</td>
                <td>Скрывает элемент, маскируя или обрезая изображение в определенных местах</td>
            </tr>
            <tr>
                <td>mask-type</td>
                <td>Определяет, используется ли элемент маски в качестве маски яркости или альфа-маски</td>
            </tr>
            <tr>
                <td><a href="pr_dim_max-height.php">max-height</a></td>
                <td>Устанавливает максимальную высоту элемента</td>
            </tr>
            <tr>
                <td><a href="pr_dim_max-width.php">max-width</a></td>
                <td>Устанавливает максимальную ширину элемента</td>
            </tr>
            <tr>
                <td><a href="css3_pr_mediaquery.php">@media</a></td>
                <td>Устанавливает правила стиля для разных типов/устройств/размеров носителей</td>
            </tr>
            <tr>
                <td><a href="pr_dim_min-height.php">min-height</a></td>
                <td>Устанавливает минимальную высоту элемента</td>
            </tr>
            <tr>
                <td><a href="pr_dim_min-width.php">min-width</a></td>
                <td>Устанавливает минимальную ширину элемента</td>
            </tr>
            <tr>
                <td><a href="pr_mix-blend-mode.php">mix-blend-mode</a></td>
                <td>Определяет, как содержимое элемента должно сливаться с его прямым родительским фоном</td>
            </tr>
        </table>

        <h2>O</h2>
        <table class="w3-table-all notranslate">
            <tr>
                <td style="width:20%"><a href="css3_pr_object-fit.php">object-fit</a></td>
                <td>Определяет, как содержимое заменяемого элемента должно соответствовать блоку, установленному его используемой высотой и шириной</td>
            </tr>
            <tr>
                <td><a href="css3_pr_object-position.php">object-position</a></td>
                <td>Задает выравнивание заменяемого элемента внутри его поля</td>
            </tr>
            <tr>
                <td><a href="css3_pr_opacity.php">opacity</a></td>
                <td>Устанавливает уровень непрозрачности для элемента</td>
            </tr>
            <tr>
                <td><a href="css3_pr_order.php">order</a></td>
                <td>Устанавливает порядок гибкого элемента относительно остальных</td>
            </tr>
            <tr>
                <td>orphans</td>
                <td>Устанавливает минимальное количество строк, которые должны оставаться внизу страницы, когда разрыв страницы происходит внутри элемента</td>
            </tr>
            <tr>
                <td><a href="pr_outline.php">outline</a></td>
                <td>Сокращенное свойство для свойств <em>outline-width, outline-style</em> и <em>outline-color</em></td>
            </tr>
            <tr>
                <td><a href="pr_outline-color.php">outline-color</a></td>
                <td>Устанавливает цвет контура</td>
            </tr>
            <tr>
                <td><a href="css3_pr_outline-offset.php">outline-offset</a></td>
                <td>Смещает контур и выводит его за край границы</td>
            </tr>
            <tr>
                <td><a href="pr_outline-style.php">outline-style</a></td>
                <td>Устанавливает стиль контура</td>
            </tr>
            <tr>
                <td><a href="pr_outline-width.php">outline-width</a></td>
                <td>Устанавливает ширину контура</td>
            </tr>
            <tr>
                <td><a href="pr_pos_overflow.php">overflow</a><br>
                </td>
                <td>Определяет, что происходит, если содержимое выходит за пределы поля элемента (переполнение)</td>
            </tr>
            <tr>
                <td>overflow-wrap</td>
                <td>Определяет, может ли браузер разбивать строки в словах, чтобы предотвратить переполнение (когда строка слишком длинна, чтобы уместиться в содержащем её поле)</td>
            </tr>
            <tr>
                <td><a href="css3_pr_overflow-x.php">overflow-x</a></td>
                <td>Указывает, следует ли обрезать левый/правый края содержимого, если он выходит за пределы области содержимого элемента</td>
            </tr>
            <tr>
                <td><a href="css3_pr_overflow-y.php">overflow-y</a></td>
                <td>Определяет, обрезать ли верхний/нижний края содержимого, если он выходит за пределы области содержимого элемента</td>
            </tr>
        </table>

        <h2>P</h2>
        <table class="w3-table-all notranslate">
            <tr>
                <td style="width:20%"><a href="pr_padding.php">padding</a></td>
                <td>Сокращенное свойство для всех свойств <em>padding-*</em></td>
            </tr>
            <tr>
                <td><a href="pr_padding-bottom.php">padding-bottom</a></td>
                <td>Устанавливает нижний отступ элемента</td>
            </tr>
            <tr>
                <td><a href="pr_padding-left.php">padding-left</a></td>
                <td>Устанавливает левый отступ элемента</td>
            </tr>
            <tr>
                <td><a href="pr_padding-right.php">padding-right</a></td>
                <td>Устанавливает правый отступ элемента</td>
            </tr>
            <tr>
                <td><a href="pr_padding-top.php">padding-top</a></td>
                <td>Устанавливает верхний отступ элемента</td>
            </tr>
            <tr>
                <td><a href="pr_print_pageba.php">page-break-after</a></td>
                <td>Устанавливает поведение разрыва страницы после элемента</td>
            </tr>
            <tr>
                <td><a href="pr_print_pagebb.php">page-break-before</a></td>
                <td>Устанавливает поведение разрыва страницы перед элементом</td>
            </tr>
            <tr>
                <td><a href="pr_print_pagebi.php">page-break-inside</a></td>
                <td>Устанавливает поведение разрыва страницы внутри элемента</td>
            </tr>
            <tr>
                <td><a href="css3_pr_perspective.php">perspective</a></td>
                <td>Придает трехмерному элементу некоторую перспективу</td>
            </tr>
            <tr>
                <td><a href="css3_pr_perspective-origin.php">perspective-origin</a></td>
                <td>Определяет, в какой позиции пользователь смотрит на трехмерный элемент</td>
            </tr>
            <tr>
                <td><a href="css3_pr_pointer-events.php">pointer-events</a></td>
                <td>Определяет, реагирует ли элемент на события указателя</td>
            </tr>
            <tr>
                <td><a href="pr_class_position.php">position</a></td>
                <td>Задает тип метода позиционирования, используемого для элемента (статический, относительный, абсолютный или фиксированный)</td>
            </tr>
        </table>

        <h2>Q</h2>
        <table class="w3-table-all notranslate">
            <tr>
                <td><a href="pr_gen_quotes.php">quotes</a></td>
                <td>Устанавливает тип кавычек для встроенных цитат</td>
            </tr>
        </table>

        <h2>R</h2>
        <table class="w3-table-all notranslate">
            <tr>
                <td><a href="css3_pr_resize.php">resize</a></td>
                <td>Определяет, можно ли (и как) изменять размер элемента пользователем</td>
            </tr>
            <tr>
                <td><a href="pr_pos_right.php">right</a></td>
                <td>Задает правильную позицию позиционируемого элемента</td>
            </tr>
        </table>

        <h2>S</h2>
        <table class="w3-table-all notranslate">
            <tr>
                <td><a href="pr_scroll-behavior.php">scroll-behavior</a></td>
                <td>Указывает, следует ли плавно анимировать позицию прокрутки в прокручиваемом поле вместо прямого перехода</td>
            </tr>
        </table>

        <h2>T</h2>
        <table class="w3-table-all notranslate">
            <tr>
                <td><a href="css3_pr_tab-size.php">tab-size</a></td>
                <td>Определяет ширину символа табуляции</td>
            </tr>
            <tr>
                <td><a href="pr_tab_table-layout.php">table-layout</a></td>
                <td>Определяет алгоритм, используемый для компоновки ячеек, строк и столбцов таблицы</td>
            </tr>
            <tr>
                <td><a href="pr_text_text-align.php">text-align</a></td>
                <td>Определяет горизонтальное выравнивание текст</td>
            </tr>
            <tr>
                <td><a href="css3_pr_text-align-last.php">text-align-last</a></td>
                <td>Описывает, как выравнивается последняя строка блока или строка прямо перед принудительным разрывом строки, когда выравнивание текста установлено &quot;justify&quot;</td>
            </tr>
            <tr>
                <td>text-combine-upright</td>
                <td>Задает комбинацию нескольких символов в пространстве одного символа</td>
            </tr>
            <tr>
                <td><a href="pr_text_text-decoration.php">text-decoration</a></td>
                <td>Указывает оформление, добавленное к тексту</td>
            </tr>
            <tr>
                <td><a href="css3_pr_text-decoration-color.php">text-decoration-color</a></td>
                <td>Определяет цвет оформления текста</td>
            </tr>
            <tr>
                <td><a href="css3_pr_text-decoration-line.php">text-decoration-line</a></td>
                <td>Определяет тип линии в оформлении текста</td>
            </tr>
            <tr>
                <td><a href="css3_pr_text-decoration-style.php">text-decoration-style</a></td>
                <td>Определяет стиль линии в оформлении текста</td>
            </tr>
            <tr>
                <td><a href="pr_text_text-indent.php">text-indent</a></td>
                <td>Задает отступ первой строки в текстовом блоке</td>
            </tr>
            <tr>
                <td><a href="css3_pr_text-justify.php">text-justify</a></td>
                <td>Определяет метод выравнивания, используемый при выравнивании текста &quot;justify&quot;</td>
            </tr>
            <tr>
                <td>text-orientation</td>
                <td>Определяет ориентацию текста в строке</td>
            </tr>
            <tr>
                <td><a href="css3_pr_text-overflow.php">text-overflow</a></td>
                <td>Определяет, что должно произойти, когда текст переполняет содержащий элемент</td>
            </tr>
            <tr>
                <td><a href="css3_pr_text-shadow.php">text-shadow</a></td>
                <td>Добавляет тень к тексту</td>
            </tr>
            <tr>
                <td><a href="pr_text_text-transform.php">text-transform</a></td>
                <td>Управляет использованием заглавных букв в тексте</td>
            </tr>
            <tr>
                <td>text-underline-position</td>
                <td>Определяет положение подчеркивания, которое задается с помощью свойства text-decoration</td>
            </tr>
            <tr>
                <td><a href="pr_pos_top.php">top</a></td>
                <td>Определяет верхнюю позицию позиционированного элемента</td>
            </tr>
            <tr>
                <td><a href="css3_pr_transform.php">transform</a></td>
                <td>Применяет 2D или 3D преобразование к элементу</td>
            </tr>
            <tr>
                <td><a href="css3_pr_transform-origin.php">transform-origin</a></td>
                <td>Позволяет изменять положение трансформируемых элементов</td>
            </tr>
            <tr>
                <td><a href="css3_pr_transform-style.php">transform-style</a></td>
                <td>Определяет, как вложенные элементы отображаются в 3D-пространстве</td>
            </tr>
            <tr>
                <td><a href="css3_pr_transition.php">transition</a></td>
                <td>Сокращенное свойство для всех свойств <em>transition-*</em></td>
            </tr>
            <tr>
                <td><a href="css3_pr_transition-delay.php">transition-delay</a></td>
                <td>Указывает, когда начнется эффект перехода</td>
            </tr>
            <tr>
                <td><a href="css3_pr_transition-duration.php">transition-duration</a></td>
                <td>Определяет, сколько секунд или миллисекунд требуется для завершения эффекта перехода</td>
            </tr>
            <tr>
                <td><a href="css3_pr_transition-property.php">transition-property</a></td>
                <td>Задает имя свойства CSS, для которого предназначен эффект перехода</td>
            </tr>
            <tr>
                <td><a href="css3_pr_transition-timing-function.php">transition-timing-function</a></td>
                <td>Определяет кривую скорости эффекта перехода</td>
            </tr>
        </table>

        <h2>U</h2>
        <table class="w3-table-all notranslate">
            <tr>
                <td><a href="pr_text_unicode-bidi.php">unicode-bidi</a></td>
                <td>Используется вместе со свойством <a href="pr_text_direction.php">direction</a> для установки или возврата, следует ли переопределить текст для поддержки нескольких языков в одном документе</td>
            </tr>
            <tr>
                <td><a href="css3_pr_user-select.php">user-select</a></td>
                <td>Определяет, можно ли выделить текст элемента</td>
            </tr>
        </table>

        <h2>V</h2>
        <table class="w3-table-all notranslate">
            <tr>
                <td style="width:20%"><a href="pr_pos_vertical-align.php">vertical-align</a></td>
                <td>Устанавливает вертикальное выравнивание элемента</td>
            </tr>
            <tr>
                <td><a href="pr_class_visibility.php">visibility</a></td>
                <td>Определяет, является ли элемент видимым</td>
            </tr>
        </table>

        <h2>W</h2>
        <table class="w3-table-all notranslate">
            <tr>
                <td><a href="pr_text_white-space.php">white-space</a></td>
                <td>Определяет, как обрабатываются пробелы внутри элемента</td>
            </tr>
            <tr>
                <td>widows</td>
                <td>Устанавливает минимальное количество строк, которые должны оставаться в верхней части страницы, когда разрыв страницы происходит внутри элемента</td>
            </tr>
            <tr>
                <td><a href="pr_dim_width.php">width</a></td>
                <td>Устанавливает ширину элемента</td>
            </tr>
            <tr>
                <td><a href="css3_pr_word-break.php">word-break</a></td>
                <td>Определяет, как слова должны разрываться при достижении конца строки</td>
            </tr>
            <tr>
                <td><a href="pr_text_word-spacing.php">word-spacing</a></td>
                <td>Увеличивает или уменьшает расстояние между словами в тексте</td>
            </tr>
            <tr>
                <td><a href="css3_pr_word-wrap.php">word-wrap</a></td>
                <td>Позволяет разбивать длинные неразрывные слова и переносить их на следующую строку</td>
            </tr>
            <tr>
                <td><a href="css3_pr_writing-mode.php">writing-mode</a></td>
                <td>Определяет расположение строк текста: горизонтально или вертикально</td>
            </tr>
        </table>

        <h2>Z</h2>
        <table class="w3-table-all notranslate">
            <tr>
                <td><a href="pr_pos_z-index.php">z-index</a></td>
                <td>Устанавливает порядок стека позиционированного элемента</td>
            </tr>
        </table>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="../index.php">&#10094; Home</a>
        <a class="w3-right w3-btn" href="css3_browsersupport.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>