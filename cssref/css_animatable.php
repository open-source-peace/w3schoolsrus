<?php include '../include/head.php'; ?>

<title>CSS Справочник. Анимация. <?php include '../include/title.php'; ?></title>
<meta name='description' content="CSS Справочник. Анимация. Как сделать анимацию на сайте с помощью CSS? <?php include '../include/description.php'; ?>">
<link rel="stylesheet" href="../styles/browserref.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_cssref.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Анимационные свойства</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_fonts_fallbacks.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_units.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Определение и использование</h2>
    <p>Некоторые свойства CSS являются <em>animatable</em>, что означает, что они могут использоваться в анимациях и переходах.</p>
    <p>Свойства анимации могут постепенно изменяться от одного значения к другому, например размер, число, процент и цвет.</p>
    <hr>

    <h2>Поддержка браузерами</h2>
    <p>Числа в таблице указывают первую версию браузера, которая полностью поддерживает CSS-анимацию.</p>
    <p>Числа, за которыми следуют -webkit-, -moz- или -o- указывают первую версию, которая работает с префиксом.</p>
    <table class="browserref notranslate">
        <tr>
            <th style="width:20%;padding:20px;" class="bsChrome" title="Chrome"></th>
            <th style="width:20%;" class="bsEdge" title="Internet Explorer"></th>
            <th style="width:20%;" class="bsFirefox" title="Firefox"></th>
            <th style="width:20%;" class="bsSafari" title="Safari"></th>
            <th style="width:20%;" class="bsOpera" title="Opera"></th>
        </tr>
        <tr>
            <td>43.0<br>4.0 -webkit-</td>
            <td>10.0</td>
            <td>16.0<br>5.0 -moz-</td>
            <td>9.0<br>4.0 -webkit-</td>
            <td>30.0<br>15.0 -webkit-<br>12.0 -o-</td>
        </tr>
    </table>
    <hr>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Анимировать цвет фона от красного до синего:</p>
        <div class="w3-code notranslate cssHigh">
            /* Код для старых Chrome, Safari и Opera */<br>
            @-webkit-keyframes mymove
            {<br>
            &nbsp;
            from {background-color: red;}<br>
            &nbsp;
            to {background-color: blue;}<br>
            }<br><br>/* Стандартный синтаксис */<br>@keyframes mymove
            {<br>
            &nbsp;
            from {background-color: red;}<br>
            &nbsp;
            to {background-color: blue;}<br>
            }<br>
        </div>
        <a target="_blank" href="../csstryit/trycss_animatable.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Свойства анимации</h2>
    <p>Это свойства <em>анимации</em> в CSS:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Свойство</th>
        </tr>
        <tr>
            <td><a href="css3_pr_background.php">background</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_background.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_background-color.php">background-color</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_background-color.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_background-position.php">background-position</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_background-position.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_background-size.php">background-size</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_background-size.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_border.php">border</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_border.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_border-bottom.php">border-bottom</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_border-bottom.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_border-bottom_color.php">border-bottom-color</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_border-bottom-color.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_border-bottom-left-radius.php">border-bottom-left-radius</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_border-bottom-left-radius.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_border-bottom-right-radius.php">border-bottom-right-radius</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_border-bottom-right-radius.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_border-bottom_width.php">border-bottom-width</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_border-bottom-width.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_border-color.php">border-color</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_border-color.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_border-left.php">border-left</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_border-left.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_border-left_color.php">border-left-color</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_border-left-color.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_border-left_width.php">border-left-width</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_border-left-width.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_border-right.php">border-right</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_border-right.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_border-right_color.php">border-right-color</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_border-right-color.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_border-right_width.php">border-right-width</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_border-right-width.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_border-spacing.php">border-spacing</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_border-spacing.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_border-top.php">border-top</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_border-top.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_border-top_color.php">border-top-color</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_border-top-color.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_border-top-left-radius.php">border-top-left-radius</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_border-top-left-radius.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_border-top-right-radius.php">border-top-right-radius</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_border-top-right-radius.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_border-top_width.php">border-top-width</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_border-top-width.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_pos_bottom.php">bottom</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_bottom.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_box-shadow.php">box-shadow</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_box-shadow.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_pos_clip.php">clip</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_clip.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_text_color.php">color</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_color.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_column-count.php">column-count</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_column-count.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_column-gap.php">column-gap</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_column-gap.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_column-rule.php">column-rule</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_column-rule.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_column-rule-color.php">column-rule-color</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_column-rule-color.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_column-rule-width.php">column-rule-width</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_column-rule-width.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_column-width.php">column-width</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_column-width.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_columns.php">columns</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_columns.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_filter.php">filter</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_filter.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_flex.php">flex</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_flex.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_flex-basis.php">flex-basis</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_flex-basis.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_flex-grow.php">flex-grow</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_flex-grow.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_flex-shrink.php">flex-shrink</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_flex-shrink.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_font_font.php">font</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_font.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_font_font-size.php">font-size</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_font-size.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_font-size-adjust.php">font-size-adjust</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_font-stretch.php">font-stretch</a></td>
        </tr>
        <tr>
            <td><a href="pr_font_weight.php">font-weight</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_font-weight.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_dim_height.php">height</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_height.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_pos_left.php">left</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_left.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_text_letter-spacing.php">letter-spacing</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_letter-spacing.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_dim_line-height.php">line-height</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_line-height.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_margin.php">margin</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_margin.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_margin-bottom.php">margin-bottom</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_margin-bottom.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_margin-left.php">margin-left</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_margin-left.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_margin-right.php">margin-right</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_margin-right.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_margin-top.php">margin-top</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_margin-top.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_dim_max-height.php">max-height</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_max-height.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_dim_max-width.php">max-width</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_max-width.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_dim_min-height.php">min-height</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_min-height.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_dim_min-width.php">min-width</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_min-width.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_object-position.php">object-position</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_object-position.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_opacity.php">opacity</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_opacity.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_order.php">order</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_order.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_outline.php">outline</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_outline.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_outline-color.php">outline-color</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_outline-color.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_outline-offset.php">outline-offset</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_outline-offset.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_outline-width.php">outline-width</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_outline-width.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_padding.php">padding</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_padding.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_padding-bottom.php">padding-bottom</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_padding-bottom.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_padding-left.php">padding-left</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_padding-left.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_padding-right.php">padding-right</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_padding-right.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_padding-top.php">padding-top</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_padding-top.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_perspective.php">perspective</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_perspective.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_perspective-origin.php">perspective-origin</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_perspective-origin.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_pos_right.php">right</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_right.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_text-decoration-color.php">text-decoration-color</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_text-decoration-color.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_text_text-indent.php">text-indent</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_text-indent.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_text-shadow.php">text-shadow</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_text-shadow.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_pos_top.php">top</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_top.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_transform.php">transform</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_transform.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="css3_pr_transform-origin.php">transform-origin</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_transform-origin.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_pos_vertical-align.php">vertical-align</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_vertical-align.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_class_visibility.php">visibility</a></td>
        </tr>
        <tr>
            <td><a href="pr_dim_width.php">width</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_width.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_text_word-spacing.php">word-spacing</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_word-spacing.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td><a href="pr_pos_z-index.php">z-index</a><a target="_blank" class="w3-btn btnsmall" href="../csstryit/trycss_anim_z-index.html">Попробуй это</a></td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_fonts_fallbacks.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_units.php">Next &#10095;</a>
    </div>    
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>