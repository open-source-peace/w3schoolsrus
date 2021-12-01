<?php include '../include/head_w3css.php'; ?>

<title>W3CSS Справочник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='W3CSS. CSS классы. Полный справочник. W3Schools на русском'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_w3css.php'; ?>
<?php include '../include/before_content_w3css.php'; ?>

<article>
    <h1>W3.CSS Справочник</h1>

    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='w3css_templates.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='w3css_downloads.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>W3.CSS Классы</h2>
    <div class='w3-row'>
        <div class='w3-col m4'>
            <ul style='margin-top:0px;margin-bottom:0px'>
                <li><a href='#container'>Контейнер</a></li>
                <li><a href='#table'>Таблица</a></li>
                <li><a href='#card'>Карточка</a></li>
                <li><a href='#responsive'>Адаптив</a></li>
                <li><a href='#layout'>Макет</a></li>
                <li><a href='#navigation'>Навигация</a></li>
                <li><a href='#button'>Кнопка</a></li>
            </ul>
        </div>
        <div class='w3-col m4'>
            <ul style='margin-top:0px;margin-bottom:0px'>
                <li><a href='#input'>Input</a></li>
                <li><a href='#modal'>Модал</a></li>
                <li><a href='#animation'>Анимация</a></li>
                <li><a href='#font'>Шрифт и Текст</a></li>
                <li><a href='#display'>Display</a></li>
                <li><a href='#effect'>Эффекты</a></li>
                <li><a href='#backgroundcolor'>Цвет фона</a></li>
            </ul>
        </div>
        <div class='w3-col m4'>
            <ul style='margin-top:0px;margin-bottom:0px'>
                <li><a href='#textcolor'>Цвет текста</a></li>
                <li><a href='#hover'>Наведение</a></li>
                <li><a href='#round'>Круг</a></li>
                <li><a href='#padding'>Padding</a></li>
                <li><a href='#margin'>Margin</a></li>
                <li><a href='#border'>Border</a></li>
            </ul>
        </div>
    </div>
    <hr>

    <h2><a id='container'>Классы контейнера</a></h2>
    <table class='w3-table w3-bordered w3-striped w3-border w3-sans-serif'>
        <tr>
            <th style='width:166px'>Класс</th>
            <th>Определяет</th>
            <th style='width:40px'></th>
        </tr>
        <tr>
            <td>w3-container</td>
            <td>HTML container with 16px left and right padding</td>
            <td>
                <a class='w3-btn' target='_blank' href='tryit.html?filename=tryw3css_ref_container'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Used as header</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_header'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Used as footer</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_footer'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-panel</td>
            <td>HTML container with 16px left and right padding and 16px top and bottom margin</td>
            <td>
                <a class='w3-btn' target='_blank' href='tryit.html?filename=tryw3css_ref_panel'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Used to display a note</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_panel_note'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Used to display a quote</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_panel_quote'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-badge</td>
            <td>Circular badge</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_badges'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-tag</td>
            <td>Rectangular tag</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_tags'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-ul</td>
            <td>Unordered list</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_ul'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-display-container</td>
            <td>Container for w3-display-<em>classes</em> (enables positioning of elements
                inside the container)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_display-position'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-block</td>
            <td>Class that can be used to define a full width for any element</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_block'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-code</td>
            <td>Code container</td>
            <td>
                <a class='w3-btn' href='tryit.html?filename=tryw3css_ref_code_container' target='_blank'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-codespan</td>
            <td>Inline code container (for code snippets)</td>
            <td>
                <a class='w3-btn' href='tryit.html?filename=tryw3css_ref_codespan' target='_blank'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-content</td>
            <td>Container for fixed size centered content</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_content&stacked=h'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-auto</td>
            <td>Container for responsive size centered content</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_auto&stacked=h'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-stretch</td>
            <td>Class that removes right and left margins (especially useful for stretching padded rows (w3-row-padding))</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_stretch'>Попробуй это</a></td>
        </tr>
    </table>

    <hr>
    <h2><a id='table'>Классы таблицы</a></h2>
    <table class='w3-table w3-bordered w3-striped w3-border w3-sans-serif'>
        <tr>
            <th style='width:166px'>Класс</th>
            <th>Определяет</th>
            <th style='width:40px'></th>
        </tr>
        <tr>
            <td>w3-table</td>
            <td>Container for an HTML table</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_tables'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-striped</td>
            <td>Striped table</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_tables_striped'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-border</td>
            <td>Bordered table</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_tables_border'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-bordered</td>
            <td>Bordered lines</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_tables_bordered'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-centered</td>
            <td>Centered table</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_tables_centered'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-hoverable</td>
            <td>Hoverable table</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_tables_hoverable'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-table-all</td>
            <td>All properties set</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_tables_all'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>With w3-striped, w3-border, and w3-bordered</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_tables_all'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>With colored head</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_tables_colored_head'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>With w3-responsive</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_tables_responsive'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>With w3-tiny</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_tables_tiny'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>With w3-small</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_tables_small'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>With w3-large</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_tables_large'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>With w3-xlarge</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_tables_xlarge'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>With w3-xxlarge</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_tables_xxlarge'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>With w3-xxxlarge</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_tables_xxxlarge'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>With color</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_tables_color'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>With w3-jumbo</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_tables_jumbo'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-responsive</td>
            <td>Creates a responsive table</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_tables_responsive'>Попробуй это</a></td>
        </tr>
    </table>
    <hr>
    <div id='midcontentadcontainer' style='overflow:auto;text-align:center'>
        <!-- MidContent -->
        <!-- <p class='adtext'>Advertisement</p> -->

        <!--<pre>mid_content, all: [300,250][336,280][728,90][970,250][970,90][320,50][468,60]</pre>-->
        <div id='snhb-mid_content-0'></div>

    </div>
    <hr>
    <h2><a id='card'>Классы карт</a></h2>
    <table class='w3-table w3-bordered w3-striped w3-border w3-sans-serif'>
        <tr>
            <th style='width:166px'>Класс</th>
            <th>Определяет</th>
            <th style='width:40px'></th>
        </tr>
        <tr>
            <td>w3-card</td>
            <td>Same as w3-card-2</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_cards'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-card-2</td>
            <td>Container for any HTML content (2px bordered shadow)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_cards'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-card-4</td>
            <td>Container for any HTML content (4px bordered shadow)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_cards'>Попробуй это</a></td>
        </tr>
    </table>
    <hr>
    <h2><a id='responsive'>Классы адаптивности</a></h2>
    <table class='w3-table w3-bordered w3-striped w3-border w3-sans-serif'>
        <tr>
            <th style='width:166px'>Класс</th>
            <th>Определяет</th>
            <th style='width:40px'></th>
        </tr>
        <tr>
            <td>w3-row</td>
            <td>Container for one row of fluid responsive content</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_row'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-row-padding</td>
            <td>Row where all columns have a default padding</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_row-padding'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-auto</td>
            <td>Container for responsive size centered content</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_auto&stacked=h'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-stretch</td>
            <td>Class that removes right and left margins</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_stretch'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-half</td>
            <td>Half (1/2) screen column container</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_responsive_half'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-third</td>
            <td>Third (1/3) screen column container</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_responsive_third'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-twothird</td>
            <td>Two third (2/3) screen column container</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_responsive_twothird'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-quarter</td>
            <td>Quarter (1/4) screen column container</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_responsive_quarter'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-threequarter</td>
            <td>Three quarters (3/4) screen column container</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_responsive_threequarter'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-col</td>
            <td>Column container for any HTML content</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_grid'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-rest</td>
            <td>Occupies the rest of the column width</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_responsive_rest'>Попробуй это</a></td>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        <tr>
            <td>l1 - l12</td>
            <td>Responsive sizes for large screens</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_responsive_grid'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>m1 - m12</td>
            <td>Responsive sizes for medium screens</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_responsive_grid'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>s1 - s12</td>
            <td>Responsive sizes for small screens</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_responsive_grid'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td></td>
        <tr>
            <td>w3-hide-small</td>
            <td>Hide content on small screens (less than 601px)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_showhide&stacked=h'>Попробуй это</a></td>
        <tr>
            <td>w3-hide-medium</td>
            <td>Hide content on medium screens</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_showhide&stacked=h'>Попробуй это</a></td>
        <tr>
            <td>w3-hide-large</td>
            <td>Hide content on large screens (larger than 992px)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_showhide&stacked=h'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td></td>
        <tr class='w3-white'>
            <td>w3-image</td>
            <td>Responsive image</td>
            <td>
                <a class='w3-btn' href='tryit.html?filename=tryw3css_ref_image' target='_blank'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td></td>
        </tr>
        <tr class='w3-white'>
            <td>w3-mobile</td>
            <td>Adds mobile-first responsiveness to any element.<br>Displays
                elements as block elements on mobile devices.</td>
            <td>
                <a class='w3-btn' href='tryit.html?filename=tryw3css_ref_mobile' target='_blank'>Попробуй это</a></td>
        </tr>
    </table>
    <hr>
    <h2><a id='layout'>Классы макета</a></h2>
    <table class='w3-table w3-bordered w3-striped w3-border w3-sans-serif'>
        <tr>
            <th style='width:166px'>Класс</th>
            <th>Определяет</th>
            <th style='width:40px'></th>
        </tr>
        <tr>
            <td>w3-cell-row</td>
            <td>Container for layout columns (cells).</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_layout_container'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-cell</td>
            <td>Layout column (cell).</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_layout_container'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-cell-top</td>
            <td>Aligns content at the top of a column (cell).</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_layout_align'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-cell-middle</td>
            <td>Aligns content at the vertical middle of a column (cell).</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_layout_align'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-cell-bottom</td>
            <td>Aligns content at the bottom of a column (cell).</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_layout_align'>Попробуй это</a></td>
        </tr>
    </table>
    <hr>

    <h2><a id='navigation'>Бар-классы - Навигация</a></h2>
    <table class='w3-table w3-bordered w3-striped w3-border w3-sans-serif'>
        <tr>
            <th style='width:166px'>Класс</th>
            <th>Определяет</th>
            <th style='width:40px'></th>
        </tr>
        <tr>
            <td>w3-bar</td>
            <td>Horizontal bar</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_bar'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-bar-block</td>
            <td>Vertical bar</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_bar_block'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-bar-item</td>
            <td>Provides common style for bar items</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_bar_item'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-sidebar</td>
            <td>Side bar</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_sidebar'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>A side bar can contain all types of content</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_sidebar_content'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>A side bar overlaying main content</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_sidebar_over'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>A side bar overlaying all main content</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_sidebar_overall'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>A side bar shifting main content to the right</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_sidebar_shift'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>A side bar with an overlay background</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_sidebar_overlay'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>A Side bar on the right side</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_sidebar_right'>Попробуй это</a></td>
        </tr>
        <tr>
        <tr>
            <td>w3-collapse</td>
            <td>Used together with w3-sidebar to create a fully automatic responsive side navigation. For this class to work, the page content must be within a 'w3-main' class</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_sidebar_hide&stacked=h'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-main</td>
            <td>Container for page content when using the w3-collapse class for responsive side navigations</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_sidebar_hide&stacked=h'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Fully automatic right-sided responsive side navigation</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_sidebar_hide_right&stacked=h'>Попробуй это</a></td>
        </tr>
    </table>
    <hr>

    <h2><a id='button'>Классы Dropdown</a></h2>
    <table class='w3-table w3-bordered w3-striped w3-border w3-sans-serif'>
        <tr>
            <td>w3-dropdown-click</td>
            <td>Clickable dropdown element</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_dropdown_click'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-dropdown-hover</td>
            <td>Hoverable dropdown element</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_dropdown_hover'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Hoverable dropdown element (used in w3-bar)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_dropdown_menu2'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Hoverable dropdown element (used in w3-bar-block)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_dropdown_bar_block'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Hoverable dropdown element (used in w3-sidebar)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_dropdown_menu3'>Попробуй это</a></td>
        </tr>
    </table>
    <hr>

    <h2><a id='button'>Классы кнопок</a></h2>
    <table class='w3-table w3-bordered w3-striped w3-border w3-sans-serif'>
        <tr>
            <th style='width:166px'>Класс</th>
            <th>Определяет</th>
            <th style='width:40px'></th>
        </tr>
        <tr>
            <td>w3-button</td>
            <td>Rectangular button with grey background color on hover</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_button'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-btn</td>
            <td>Rectangular button with shadows on hover</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_btn'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-circle</td>
            <td>Can be used to create a circular button</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_button_circular'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-ripple</td>
            <td>Rectangular button with ripple effect</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_btn_ripple'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Circular floating button with ripple effect</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_button_circle_ripple'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-bar</td>
            <td>Can be used to group elements (like buttons) in an horizontal bar</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_button-bar'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-block</td>
            <td>Class that can be used to define a full width w3-button</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_button_fullwidth'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Full width w3-btn</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_btn_fullwidth'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Full width circular button</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_button_circle_fullwidth'>Попробуй это</a></td>
        </tr>
    </table>

    <hr>
    <h2><a id='input'>Классы Input</a></h2>
    <table class='w3-table w3-bordered w3-striped w3-border w3-sans-serif'>
        <tr>
            <th style='width:166px'>Класс</th>
            <th>Определяет</th>
            <th style='width:40px'></th>
        </tr>
        <tr>
            <td>w3-input</td>
            <td>Input elements</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_input'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Input form as a card</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_input_card'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Input elements (top labels)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_input_top'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Input elements (bottom labels)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_input_bottom'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-check</td>
            <td>Checkbox input type</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_input_check'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-radio</td>
            <td>Radio input type</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_input_radio'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-select</td>
            <td>Input select element</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_input_select'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-animate-input</td>
            <td>Animates the width of an input to 100%</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_input_animate'>Попробуй это</a></td>
        </tr>
    </table>
    <hr>

    <h2><a id='modal'>Классы Modal</a></h2>
    <table class='w3-table w3-bordered w3-striped w3-border w3-sans-serif'>
        <tr>
            <th style='width:166px'>Класс</th>
            <th>Определяет</th>
            <th style='width:40px'></th>
        </tr>
        <tr>
            <td>w3-modal</td>
            <td>Modal container</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_modal'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-modal-content</td>
            <td>Modal pop-up element</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_modal'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-tooltip</td>
            <td>Tooltip element</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_tooltip'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-text</td>
            <td>Tooltip text</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_tooltip_text'>Попробуй это</a></td>
        </tr>
    </table>
    <hr>
    <h2><a id='animation'>Классы анимации</a></h2>
    <table class='w3-table w3-bordered w3-striped w3-border w3-sans-serif'>
        <tr>
            <th style='width:166px'>Класс</th>
            <th>Определяет</th>
            <th style='width:40px'></th>
        </tr>
        <tr>
            <td>w3-animate-top</td>
            <td>Animates an element from the top -300px to 0px</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_animate-top'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-animate-left</td>
            <td>Animates an element from left -300px to 0px</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_animate-left'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-animate-bottom</td>
            <td>Animates an element from the bottom -300px to 0px</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_animate-bottom'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-animate-right</td>
            <td>Animates an element from right -300px to 0px</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_animate-right'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-animate-opacity</td>
            <td>Animates an element's opacity from 0 to 1</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_animate-opacity'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-animate-zoom</td>
            <td>Animates an element from 0 to 100% in size</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_animate-zoom'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-animate-fading</td>
            <td>Animates an element's opacity from 0 to 1 and 1 to 0 (fades in AND out)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_animate-fading'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-spin</td>
            <td>Spin an icon 360 degrees</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_spin'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Spin any element 360 degrees</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_spin_img'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-animate-input</td>
            <td>Animates the width of an input field to 100%</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_input_animate'>Попробуй это</a></td>
        </tr>
    </table>
    <hr>
    <h2><a id='font'>Классы шрифта и текста</a></h2>
    <table class='w3-table w3-bordered w3-striped w3-border w3-sans-serif'>
        <tr>
            <th style='width:166px'>Класс</th>
            <th>Определяет</th>
            <th style='width:40px'></th>
        </tr>
        <tr>
            <td>w3-tiny</td>
            <td>Specifies a font size of 10 pixels</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_tiny'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-small</td>
            <td>Specifies a font size of 12 pixels</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_small'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-large</td>
            <td>Specifies a font size of 18 pixels</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_large'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-xlarge</td>
            <td>Specifies a font size of 24 pixels</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_xlarge'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-xxlarge</td>
            <td>Specifies a font size of 32 pixels</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_xxlarge'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-xxxlarge</td>
            <td>Specifies a font size of 48 pixels</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_xxxlarge'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-jumbo</td>
            <td>Specifies a font size of 64 pixels</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_jumbo'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-wide</td>
            <td>Specifies a wider text</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_wide'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-serif</td>
            <td>Changes the font to serif</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_serif'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-sans-serif</td>
            <td>Changes the font to sans-serif</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_sans-serif'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-cursive</td>
            <td>Changes the font to cursive</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_cursive'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-monospace</td>
            <td>Changes the font to monospace</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_monospace'>Попробуй это</a></td>
        </tr>
    </table>
    <hr>

    <h2><a id='display'>Классы Display</a></h2>
    <table class='w3-table w3-bordered w3-striped w3-border w3-sans-serif'>
        <tr>
            <th style='width:166px'>Класс</th>
            <th>Определяет</th>
            <th style='width:40px'></th>
        </tr>
        <tr>
            <td>w3-center</td>
            <td>Centered content</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_center'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-left</td>
            <td>Floats an element to the left (float: left)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_left'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-right</td>
            <td>Floats an element to the right (float: right)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_right'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-left-align</td>
            <td>Left aligned text</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_left_align'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-right-align</td>
            <td>Right aligned text</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_right_align'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-justify</td>
            <td>Right and left aligned text</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_justify'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-block</td>
            <td>Class that can be used to define a full width for any element</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_block'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-circle</td>
            <td>Circled content </td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_circle'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-hide</td>
            <td>Hidden content (display:none)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_hide'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-show</td>
            <td>Show content (display:block)</td>
            <td>
                <a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_show'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-show-block</td>
            <td>Alias of w3-show (display:block)</td>
            <td>
                <a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_show-block'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-show-inline-block</td>
            <td>Show content as inline-block (display:inline-block)</td>
            <td>
                <a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_show-inline-block'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-top</td>
            <td>Fixed content at the top of a page</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_topnav_fixed'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-bottom</td>
            <td>Fixed content at the bottom of a page</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_topnav_bottom'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-display-container</td>
            <td>Container for w3-display-<em>classes</em> (position: relative)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_display-position'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-display-topleft</td>
            <td>Displays content at the top left corner of the w3-display-container</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_display-position'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-display-topright</td>
            <td>Displays content at the top right corner of the w3-display-container</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_display-position'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-display-bottomleft</td>
            <td>Displays content at the bottom left corner of the w3-display-container</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_display-position'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-display-bottomright</td>
            <td>Displays content at the bottom right corner of the w3-display-container</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_display-position'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-display-left</td>
            <td>Displays content to the left (middle left) of the w3-display-container</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_display-position'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-display-right</td>
            <td>Displays content to the right (middle right) of the w3-display-container</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_display-position'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-display-middle</td>
            <td>Displays content in the middle (center) of the w3-display-container</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_display-position'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-display-topmiddle</td>
            <td>Displays content at the top middle of the w3-display-container</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_display-position'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-display-bottommiddle</td>
            <td>Displays content at the bottom middle of the w3-display-container</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_display-position'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-display-position</td>
            <td>Displays content at a specified position in the w3-display-container</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_display-position'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-display-hover</td>
            <td>Displays content on hover inside the w3-display-container</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_display-hover'>Попробуй это</a></td>
        </tr>
    </table>
    <hr>
    <h2><a id='effect'>Классы эффектов</a></h2>
    <table class='w3-table w3-bordered w3-striped w3-border w3-sans-serif'>
        <tr>
            <th style='width:166px'>Класс</th>
            <th>Определяет</th>
            <th style='width:40px'></th>
        </tr>
        <tr>
            <td>w3-opacity</td>
            <td>Adds opacity/transparency to an element (opacity: 0.6)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_opacity_element'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Add opacity/transparency to text</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_opacity'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-opacity-off</td>
            <td>Turns off opacity/transparency (opacity: 1)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_opacity-off'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-opacity-min</td>
            <td>Adds opacity/transparency to an element (opacity: 0.75)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_opacity_element'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-opacity-max</td>
            <td>Adds opacity/transparency to an element (opacity: 0.25)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_opacity_element'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-grayscale-min</td>
            <td>Adds a grayscale effect to an element (grayscale: 50%)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_grayscale'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-grayscale</td>
            <td>Adds a grayscale effect to an element (grayscale: 75%)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_grayscale'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-grayscale-max</td>
            <td>Adds a grayscale effect to an element (grayscale: 100%)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_grayscale'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-sepia-min</td>
            <td>Adds a sepia effect to an element (sepia: 50%)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_sepia'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-sepia</td>
            <td>Adds a sepia effect to an element (sepia: 75%)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_sepia'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-sepia-max</td>
            <td>Adds a sepia effect to an element (sepia: 100%)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_sepia'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-overlay</td>
            <td>Creates an overlay effect</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_overlay'>Попробуй это</a></td>
        </tr>
    </table>
    <hr>
    <h2><a id='backgroundcolor'>Классы Цвета фона</a></h2>
    <table class='w3-table w3-bordered w3-striped w3-border w3-sans-serif'>
        <tr>
            <th style='width:166px'>Класс</th>
            <th>Определяет</th>
            <th style='width:40px'></th>
        </tr>
        <tr>
            <td class='w3-red'>w3-red</td>
            <td>Background color red</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_red'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-pink'>w3-pink</td>
            <td>Background color pink</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_pink'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-purple'>w3-purple</td>
            <td>Background color purple</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_purple'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-deep-purple'>w3-deep-purple</td>
            <td>Background color deep purple</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_deep-purple'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-indigo'>w3-indigo</td>
            <td>Background color indigo</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_indigo'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-blue'>w3-blue</td>
            <td>Background color blue</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_blue'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-light-blue'>w3-light-blue</td>
            <td>Background color light blue</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_light-blue'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-cyan'>w3-cyan</td>
            <td>Background color cyan</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_cyan'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-aqua'>w3-aqua</td>
            <td>Background color aqua</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_aqua'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-teal'>w3-teal</td>
            <td>Background color teal</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_teal'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-green'>w3-green</td>
            <td>Background color green</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_green'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-light-green'>w3-light-green</td>
            <td>Background color light green</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_light-green'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-lime'>w3-lime</td>
            <td>Background color lime</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_lime'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-sand'>w3-sand</td>
            <td>Background color sand</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_sand'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-khaki'>w3-khaki</td>
            <td>Background color khaki</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_khaki'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-yellow'>w3-yellow</td>
            <td>Background color yellow</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_yellow'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-amber'>w3-amber</td>
            <td>Background color amber</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_amber'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-orange'>w3-orange</td>
            <td>Background color orange</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_orange'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-deep-orange'>w3-deep-orange</td>
            <td>Background color deep orange</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_deep-orange'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-blue-grey'>w3-blue-grey</td>
            <td>Background color blue grey</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_blue-grey'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-brown'>w3-brown</td>
            <td>Background color brown</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_brown'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-light-grey'>w3-light-grey</td>
            <td>Background color light grey</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_light-grey'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-grey'>w3-grey</td>
            <td>Background color grey</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_grey'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-dark-grey'>w3-dark-grey</td>
            <td>Background color dark grey</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_dark-grey'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-black'>w3-black</td>
            <td>Background color black</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_black'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-pale-red'>w3-pale-red</td>
            <td>Background color pale red</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_pale-red'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-pale-yellow'>w3-pale-yellow</td>
            <td>Background color pale yellow</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_pale-yellow'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-pale-green'>w3-pale-green</td>
            <td>Background color pale green</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_pale-green'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-pale-blue'>w3-pale-blue</td>
            <td>Background color pale blue</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_colors_pale-blue'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-transparent</td>
            <td>Transparent background-color</td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <hr>
    <h2>Классы Цвета при наведении</h2>
    <p>The colors above can also be used as hover classes:</p>
    <table class='w3-table w3-bordered w3-striped w3-border w3-sans-serif'>
        <tr>
            <th style='width:166px'>Класс</th>
            <th>Определяет</th>
            <th style='width:40px'></th>
        </tr>
        <tr>
            <td class='w3-white'>w3-hover-white</td>
            <td class='w3-hover-white'>Hover color white</td>
            <td><a target='_blank' class='w3-btn w3-hover-white' href='tryit.html?filename=tryw3css_ref_hover_white'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-black'>w3-hover-black</td>
            <td class='w3-hover-black'>Hover color black</td>
            <td><a target='_blank' class='w3-btn w3-hover-black' href='tryit.html?filename=tryw3css_ref_hover_black'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-red'>w3-hover-red</td>
            <td class='w3-hover-red'>Hover color red</td>
            <td><a target='_blank' class='w3-btn w3-hover-red' href='tryit.html?filename=tryw3css_ref_hover_red'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-blue'>w3-hover-blue</td>
            <td class='w3-hover-blue'>Hover color blue</td>
            <td><a target='_blank' class='w3-btn w3-hover-blue' href='tryit.html?filename=tryw3css_ref_hover_blue'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-green'>w3-hover-green</td>
            <td class='w3-hover-green'>Hover color green</td>
            <td><a target='_blank' class='w3-btn w3-hover-green' href='tryit.html?filename=tryw3css_ref_hover_green'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-aqua'>w3-hover-aqua</td>
            <td class='w3-hover-aqua'>Hover color aqua</td>
            <td><a target='_blank' class='w3-btn w3-hover-aqua' href='tryit.html?filename=tryw3css_ref_hover_aqua'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-orange'>w3-hover-orange</td>
            <td class='w3-hover-orange'>Hover color orange</td>
            <td><a target='_blank' class='w3-btn w3-hover-orange' href='tryit.html?filename=tryw3css_ref_hover_orange'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-grey'>w3-hover-grey</td>
            <td class='w3-hover-grey'>Hover color grey</td>
            <td><a target='_blank' class='w3-btn w3-hover-grey' href='tryit.html?filename=tryw3css_ref_hover_grey'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-pale-green'>w3-hover-pale-green</td>
            <td class='w3-hover-pale-green'>Hover color pale green</td>
            <td><a target='_blank' class='w3-btn w3-hover-pale-green' href='tryit.html?filename=tryw3css_ref_hover_pale_green'>Попробуй это</a></td>
        </tr>
    </table>
    <hr>
    <h2><a id='textcolor'>Классы Цвета текста</a></h2>
    <table class='w3-table w3-bordered w3-striped w3-border w3-sans-serif'>
        <tr>
            <th style='width:166px'>Класс</th>
            <th>Определяет</th>
            <th style='width:40px'></th>
        </tr>
        <tr>
            <td class='w3-text-red'><b>w3-text-red</b></td>
            <td>Text color red</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_red'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-green'><b>w3-text-green</b></td>
            <td>Text color green</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_green'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-blue'><b>w3-text-blue</b></td>
            <td>Text color blue</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_blue'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-yellow'><b>w3-text-yellow</b></td>
            <td>Text color yellow</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_yellow'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-light-grey'><b>w3-text-light-grey</b></td>
            <td>Text color light-grey</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_light-grey'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-grey'><b>w3-text-grey</b></td>
            <td>Text color grey</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_grey'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-dark-grey'><b>w3-text-dark-grey</b></td>
            <td>Text color dark grey</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_dark-grey'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-black'><b>w3-text-black</b></td>
            <td>Text color black</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_black'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-white'><b>w3-text-white</b></td>
            <td>Text color white</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_white'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-pink'><b>w3-text-pink</b></td>
            <td>Text color pink</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_pink'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-deep-purple'><b>w3-text-purple</b></td>
            <td>Text color purple</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_deep-purple'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-teal'><b>w3-text-teal</b></td>
            <td>Text color teal</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_teal'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-light-green'><b>w3-text-light-green</b></td>
            <td>Text color light green</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_light-green'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-lime'><b>w3-text-lime</b></td>
            <td>Text color lime</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_lime'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-deep-purple'><b>w3-text-deep-purple</b></td>
            <td>Text color deep purple</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_deep-purple'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-indigo'><b>w3-text-indigo</b></td>
            <td>Text color indigo</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_indigo'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-light-blue'><b>w3-text-light-blue</b></td>
            <td>Text color light blue</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_light-blue'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-blue-grey'><b>w3-text-blue-grey</b></td>
            <td>Text color blue grey</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_blue-grey'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-cyan'><b>w3-text-cyan</b></td>
            <td>Text color cyan</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_cyan'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-aqua'><b>w3-text-aqua</b></td>
            <td>Text color aqua</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_aqua'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-amber'><b>w3-text-amber</b></td>
            <td>Text color amber</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_amber'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-orange'><b>w3-text-orange</b></td>
            <td>Text color orange</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_orange'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-deep-orange'><b>w3-text-deep-orange</b></td>
            <td>Text color deep orange</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_deep-orange'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-sand'><b>w3-text-sand</b></td>
            <td>Text color sand</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_sand'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-khaki'><b>w3-text-khaki</b></td>
            <td>Text color khaki</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_khaki'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-brown'><b>w3-text-brown</b></td>
            <td>Text color brown</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_text_color_brown'>Попробуй это</a></td>
        </tr>
    </table>
    <hr>
    <h2><a id='hover'>Классы Текста при наведении</a></h2>
    <p>Приведенные выше текстовые классы также могут использоваться как классы при наведении курсора:</p>
    <table class='w3-table w3-bordered w3-striped w3-border w3-sans-serif'>
        <tr>
            <th style='width:166px'>Класс</th>
            <th>Определяет</th>
            <th style='width:40px'></th>
        </tr>
        <tr>
            <td class='w3-text-red'>w3-hover-text-red</td>
            <td class='w3-hover-text-red'>Hover text color red</td>
            <td><a target='_blank' class='w3-btn w3-hover-text-red' href='tryit.html?filename=tryw3css_ref_hover_text-red'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-green'>w3-hover-text-green</td>
            <td class='w3-hover-text-green'>Hover text color green</td>
            <td><a target='_blank' class='w3-btn w3-hover-text-green' href='tryit.html?filename=tryw3css_ref_hover_text-green'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-blue'>w3-hover-text-blue</td>
            <td class='w3-hover-text-blue'>Hover text color blue</td>
            <td><a target='_blank' class='w3-btn w3-hover-text-blue' href='tryit.html?filename=tryw3css_ref_hover_text-blue'>Попробуй это</a></td>
        </tr>
        <tr>
            <td class='w3-text-yellow'>w3-hover-text-yellow</td>
            <td class='w3-hover-text-yellow'>Hover text color yellow</td>
            <td><a target='_blank' class='w3-btn w3-hover-text-yellow' href='tryit.html?filename=tryw3css_ref_hover_text-yellow'>Попробуй это</a></td>
        </tr>
    </table>
    <hr>
    <h2><a id='hover'>Другие классы при наведении</a></h2>
    <table class='w3-table w3-bordered w3-striped w3-border w3-sans-serif'>
        <tr>
            <th style='width:166px'>Класс</th>
            <th>Определяет</th>
            <th style='width:40px'></th>
        </tr>
        <tr>
            <td>w3-hover-border-<em>color</em></td>
            <td>Hover border color</td>
            <td><a target='_blank' class='w3-btn w3-border-0 w3-hover-border-red' href='tryit.html?filename=tryw3css_ref_hover-border'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-hover-opacity</td>
            <td>Adds transparency to an element on hover (opacity: 0.6)</td>
            <td><a target='_blank' class='w3-btn w3-hover-opacity' href='tryit.html?filename=tryw3css_ref_hover_opacity'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-hover-opacity-off</td>
            <td>Removes transparency from an element on hover (100% opacity)</td>
            <td><a target='_blank' class='w3-btn w3-hover-opacity-off' href='tryit.html?filename=tryw3css_ref_hover_opacity-off'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-hover-shadow</td>
            <td>Adds shadow to an element on hover</td>
            <td><a target='_blank' class='w3-btn w3-hover-shadow' href='tryit.html?filename=tryw3css_ref_hover_shadow'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-hover-grayscale</td>
            <td>Adds a black and white (100% grayscale) effect to an element</td>
            <td><a target='_blank' class='w3-btn w3-hover-grayscale' href='tryit.html?filename=tryw3css_ref_hover_grayscale'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-hover-sepia</td>
            <td>Adds a sepia effect to an element on hover</td>
            <td><a target='_blank' class='w3-btn w3-hover-sepia' href='tryit.html?filename=tryw3css_ref_hover_sepia'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-hover-none</td>
            <td>Removes hover effects from an element</td>
            <td><a target='_blank' class='w3-btn w3-hover-none w3-hover-green' href='tryit.html?filename=tryw3css_ref_hover_none'>Попробуй это</a></td>
        </tr>
    </table>
    <hr>
    <h2><a id='round'>Классы круга</a></h2>
    <table class='w3-table w3-bordered w3-striped w3-border w3-sans-serif'>
        <tr>
            <th style='width:166px'>Класс</th>
            <th>Определяет</th>
            <th style='width:40px'></th>
        </tr>
        <tr>
            <td>w3-round</td>
            <td>Element rounded (border-radius) 4px</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_round'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-round-small</td>
            <td>Element rounded (border-radius) 2px</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_round'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-round-medium</td>
            <td>Element rounded (border-radius) 4px</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_round'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-round-large</td>
            <td>Element rounded (border-radius) 8px</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_round'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-round-xlarge</td>
            <td>Element rounded (border-radius) 16px</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_round'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-round-xxlarge</td>
            <td>Element rounded (border-radius) 32px</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_round'>Попробуй это</a></td>
        </tr>
    </table>
    <hr>

    <h2><a id='padding'>Классы Padding</a></h2>
    <table class='w3-table w3-bordered w3-striped w3-border w3-sans-serif'>
        <tr>
            <th style='width:166px'>Класс</th>
            <th>Определяет</th>
            <th style='width:50px'></th>
        </tr>
        <tr>
            <td>w3-padding-small</td>
            <td>Padding 4px top and bottom, and 8px left and right.</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_padding_size'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-padding</td>
            <td>Padding 8px top and bottom, and 16px left and right.</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_padding'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-padding-large</td>
            <td>Padding 12px top and bottom, and 24px left and right.</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_padding_size'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-padding-16</td>
            <td>Padding 16px top and bottom</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_padding_hor'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-padding-24</td>
            <td>Padding 24px top and bottom</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_padding_hor'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-padding-32</td>
            <td>Padding 32px top and bottom</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_padding_hor'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-padding-48</td>
            <td>Padding 48px top and bottom</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_padding_hor'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-padding-64</td>
            <td>Padding 64px top and bottom</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_padding_hor'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-padding-top-64</td>
            <td>Padding 64px on top</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_padding_top'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-padding-top-48</td>
            <td>Padding 48px on top</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_padding_top'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-padding-top-48</td>
            <td>Padding 32px on top</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_padding_top'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-padding-top-32</td>
            <td>Padding 24px on top</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_padding_top'>Попробуй это</a></td>
        </tr>

    </table>
    <hr>

    <h2><a id='margin'>Классы Margin</a></h2>
    <table class='w3-table w3-bordered w3-striped w3-border w3-sans-serif'>
        <tr>
            <th style='width:166px'>Класс</th>
            <th>Определяет</th>
            <th style='width:40px'></th>
        </tr>
        <tr>
            <td>w3-margin</td>
            <td>Adds an 16px margin to an element</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_margin'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-margin-top</td>
            <td>Adds an 16px top margin to an element</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_margin-top'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-margin-right</td>
            <td>Adds an 16px right margin to an element</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_margin-right'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-margin-bottom</td>
            <td>Adds an 16px bottom margin to an element</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_margin-bottom'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-margin-left</td>
            <td>Adds an 16px left margin to an element</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_margin-left'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-section</td>
            <td>Adds an 16px top and bottom margin to an element</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_section'>Попробуй это</a></td>
        </tr>
    </table>

    <hr>
    <h2><a id='border'>Классы Border</a></h2>
    <table class='w3-table w3-bordered w3-striped w3-border w3-sans-serif'>
        <tr>
            <th style='width:166px'>Класс</th>
            <th>Определяет</th>
            <th style='width:40px'></th>
        </tr>
        <tr>
            <td>w3-border</td>
            <td>Borders (top, right, bottom, left) </td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_border'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-border-top</td>
            <td>Border top</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_border-top'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-border-right</td>
            <td>Border right</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_border-right'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-border-bottom</td>
            <td>Border bottom</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_border-bottom'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-border-left</td>
            <td>Border left</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_border-left'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-border-0</td>
            <td>Removes all borders</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_utilities_border-0'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-border-<em>color</em></td>
            <td>Displays any defined borders in a specified color (like red, etc)</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_border-color'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-bottombar</td>
            <td>Adds a thick bottom border (bar) to an element</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_bottombar'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-leftbar</td>
            <td>Adds a thick left border (bar) to an element</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_leftbar'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-rightbar</td>
            <td>Adds a thick right border (bar) to an element</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_rightbar'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-topbar</td>
            <td>Adds a thick top border (bar) to an element</td>
            <td><a target='_blank' class='w3-btn' href='tryit.html?filename=tryw3css_ref_topbar'>Попробуй это</a></td>
        </tr>
        <tr>
            <td>w3-hover-border-<em>color</em></td>
            <td>Hoverable border color</td>
            <td><a target='_blank' class='w3-btn w3-border-green w3-hover-border-red' href='tryit.html?filename=tryw3css_ref_hover-border'>Попробуй это</a></td>
        </tr>
    </table>

    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='w3css_templates.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='w3css_downloads.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar_w3css.php'; ?>
<?php include '../include/footer.php'; ?>