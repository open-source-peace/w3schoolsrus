<?php include '../include/head.php'; ?>
    <title>W3.CSS Учебник. Кнопки. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='W3.CSS Кнопки. Классы кнопки w3-button и w3-btn. Цвета кнопок, при наведении мыши. Формы, размеры, границы. Кнопки с различными текстовыми эффектами, отступом, полной ширины, навбары. Отключенные кнопки. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_w3css.php'; ?>
<?php include '../include/before_content_w3css.php'; ?>

<article>
    <h1>W3.CSS <span class="color_h1">Кнопки</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_display.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_notes.php">Next &#10095;</a>
    </div>
    <hr>
    <div class="w3-section">
        <button class="w3-btn w3-ripple w3-red">Кнопка</button>
        <button class="w3-btn w3-ripple w3-blue">Кнопка</button>
        <button class="w3-btn w3-ripple w3-green">Кнопка</button>
        <button class="w3-btn w3-ripple w3-orange">Кнопка</button>
        <button class="w3-btn w3-ripple w3-teal">Кнопка</button>
        <button class="w3-btn w3-ripple w3-black">Кнопка</button>
        <button class="w3-btn w3-black w3-disabled">Отключено</button>
    </div>
    <div class="w3-section">
        <button class="w3-button w3-red">Кнопка</button>
        <button class="w3-button w3-blue">Кнопка</button>
        <button class="w3-button w3-green">Кнопка</button>
        <button class="w3-button w3-orange">Кнопка</button>
        <button class="w3-button w3-teal">Кнопка</button>
        <button class="w3-button w3-black">Кнопка</button>
        <button class="w3-button w3-black w3-disabled">Отключено</button>
    </div>
    <div class="w3-section">
        <button class="w3-btn w3-white w3-border">Button</button>
        <button class="w3-btn w3-grey w3-round">Кнопка</button>
        <button class="w3-btn w3-white w3-border w3-border-blue w3-round">Кнопка</button>
        <button class="w3-btn w3-white w3-border w3-border-red w3-text-red w3-round-large">Кнопка</button>
        <button class="w3-btn w3-white w3-border w3-border-green w3-round-xlarge">Кнопка</button>
        <button class="w3-btn w3-red" style="text-shadow:1px 1px 0 #444"><b>Тень</b></button>
        <button class="w3-btn w3-black w3-padding-large w3-hover-red">Кнопка</button>
    </div>
    <div class="w3-section">
        <a class="w3-button w3-large w3-circle w3-xlarge w3-ripple w3-black" style="z-index:0">+</a>
        <a class="w3-button w3-large w3-circle w3-xlarge w3-ripple w3-teal" style="z-index:0">+</a>
        <a class="w3-button w3-large w3-circle w3-xlarge w3-ripple w3-grey" style="z-index:0">+</a>
    </div>
    <div class="w3-bar">
        <button class="w3-bar-item w3-button w3-black">Кнопка1</button>
        <button class="w3-bar-item w3-button w3-teal">Кнопка2</button>
        <button class="w3-bar-item w3-button w3-dark-grey">Кнопка3</button>
    </div>
    <div class="w3-section">
        <button class="w3-button w3-block w3-black">Кнопка</button>
        <button class="w3-button w3-block w3-teal">Кнопка</button>
    </div>
    <hr>

    <h2>W3.CSS Классы кнопки</h2>
    <p>W3.CSS предоставляет следующие классы для кнопок:</p>
    <table class="w3-table w3-bordered w3-striped w3-border">
        <tr>
            <th style="width:170px">Класс</th>
            <th>Определяет</th>
        </tr>
        <tr>
            <td>w3-btn</td>
            <td>Прямоугольная кнопка с эффектом тени при наведении.<br>Цвет по умолчанию черный.</td>
        </tr>
        <tr>
            <td>w3-button</td>
            <td>Прямоугольная кнопка с серым эффектом наведения.<br>Цвет по умолчанию светло-серый в W3.CSS версии 3. <br> Цвет по умолчанию наследуется от родительского элемента в версии 4.</td>
        </tr>
        <tr>
            <td>w3-bar</td>
            <td>Горизонтальная полоса, которая может использоваться для группировки кнопок.<br>(Идеально подходит для горизонтальных меню навигации)</td>
        </tr>
        <tr>
            <td>w3-block</td>
            <td>Класс, который можно использовать для определения кнопки на всю ширину (100%).</td>
        </tr>
        <tr>
            <td>w3-circle</td>
            <td>Может использоваться для определения круглой кнопки.</td>
        </tr>
        <tr>
            <td>w3-ripple</td>
            <td>Может быть использован для создания эффекта ряби.</td>
        </tr>
    </table>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Кнопки</h2>
    <p>И класс <strong>w3-button</strong>, и класс <strong>w3-btn</strong> добавляют поведение кнопки к любым элементам HTML.</p>
    <p>Наиболее распространенные элементы для использования &lt;input type=&quot;button&quot;&gt;, &lt;button&gt; и &lt;a&gt;:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;input class=&quot;w3-button w3-black&quot; type=&quot;button&quot; value=&quot;Input Button&quot;&gt;<br>
            &lt;button class=&quot;w3-button w3-black&quot;&gt;Button Button&lt;/button&gt;<br>
            &lt;a href=&quot;https://www.w3schools.com&quot; class="w3-button w3-black"&gt;Link Button&lt;/a&gt;<br><br>
            &lt;input class=&quot;w3-btn w3-black&quot; type=&quot;button&quot; value=&quot;Input Button&quot;&gt;<br>
            &lt;button class=&quot;w3-btn w3-black&quot;&gt;Button Button&lt;/button&gt;<br>
            &lt;a href=&quot;https://www.w3schools.com&quot; class="w3-btn w3-black"&gt;Link Button&lt;/a&gt;
        </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_buttons_all.html" target='_blank'>Попробуйте сами &raquo;</a></p>
    </div>
    <hr>

    <h2>Цвета кнопок</h2>
    <p>
        <button class="w3-button w3-black">Black</button>
        <button class="w3-button w3-khaki">Khaki</button>
        <button class="w3-button w3-yellow">Yellow</button>
        <button class="w3-button w3-red">Red</button>
        <button class="w3-button w3-purple">Purple</button>
        <button class="w3-button w3-aqua">Aqua</button>
        <button class="w3-button w3-blue">Blue</button>
        <button class="w3-button w3-indigo">Indigo</button>
        <button class="w3-button w3-green">Green</button>
        <button class="w3-button w3-teal">Teal</button>
    </p>
    <p>Все классы <strong>w3-<em>color</em></strong> используются для добавления цвета к кнопкам:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;button class=&quot;w3-button w3-black&quot;&gt;Black&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-khaki&quot;&gt;Khaki&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-yellow&quot;&gt;Yellow&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-red&quot;&gt;Red&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-purple&quot;&gt;Purple&lt;/button&gt;</div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_buttons_colors.html" target='_blank'>Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Цвета при наведении</h2>
    <p>Эффекты наведения также бывают разных цветов. Вот некоторые:</p>
    <p>
        <button class="w3-button w3-black w3-hover-white">White</button>
        <button class="w3-button w3-black w3-hover-red">Red</button>
        <button class="w3-button w3-black w3-hover-purple">Purple</button>
        <button class="w3-button w3-black w3-hover-aqua">Aqua</button>
        <button class="w3-button w3-black w3-hover-blue">Blue</button>
        <button class="w3-button w3-black w3-hover-green">Green</button>
        <button class="w3-button w3-black w3-hover-teal">Teal</button>
    </p>
    <p>Классы <strong>w3-hover-<em>color</em></strong> используются для добавления цвета при наведении на кнопки:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;button class=&quot;w3-button w3-hover-black&quot;&gt;Black&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-hover-red&quot;&gt;Red&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-hover-purple&quot;&gt;Purple&lt;/button&gt;</div>
        <p>
            <a class="w3-btn" href="../w3csstryit/tryw3css_buttons_hover_colors.html" target='_blank'>Попробуйте сами &raquo;</a>
        </p>
    </div>
    <hr>

    <h2>Формы кнопок</h2>
    <p>
        <button class="w3-button w3-black">Normal</button>
        <button class="w3-button w3-black w3-round">Round</button>
        <button class="w3-button w3-black w3-round-large">Rounder</button>
        <button class="w3-button w3-black w3-round-xlarge">and Rounder</button>
        <button class="w3-button w3-black w3-round-xxlarge">and Rounder</button>
    </p>
    <p>
        <button class="w3-btn w3-black">Normal</button>
        <button class="w3-btn w3-black w3-round">Round</button>
        <button class="w3-btn w3-black w3-round-large">Rounder</button>
        <button class="w3-btn w3-black w3-round-xlarge">and Rounder</button>
        <button class="w3-btn w3-black w3-round-xxlarge">and Rounder</button>
    </p>
    <p>Классы <strong>w3-round-<em>size</em></strong> используются для добавления округленных границ к кнопкам:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;button class=&quot;w3-button w3-round&quot;&gt;Round&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-round-large&quot;&gt;Rounder&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-round-xlarge&quot;&gt;and Rounder&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-round-xxlarge&quot;&gt;and Rounder&lt;/button&gt;<br><br>
            &lt;button class=&quot;w3-btn w3-round&quot;&gt;Round&lt;/button&gt;<br>
            &lt;button class=&quot;w3-btn w3-round-large&quot;&gt;Rounder&lt;/button&gt;<br>
            &lt;button class=&quot;w3-btn w3-round-xlarge&quot;&gt;and Rounder&lt;/button&gt;<br>
            &lt;button class=&quot;w3-btn w3-round-xxlarge&quot;&gt;and Rounder&lt;/button&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_buttons_shapes.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Размеры кнопок</h2>
    <p>
        <button class="w3-button w3-tiny w3-black">Tiny</button>
        <button class="w3-button w3-small w3-black">Small</button>
        <button class="w3-button w3-medium w3-black">Medium</button>
        <button class="w3-button w3-large w3-black">Large</button>
        <button class="w3-button w3-xlarge w3-black">XLarge</button>
    </p>
    <p>Классы <strong>w3-<em>size</em></strong> могут быть использованы для определения различных размеров текста:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;button class=&quot;w3-button w3-tiny&quot;&gt;Tiny&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-small&quot;&gt;Small&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-medium&quot;&gt;Medium&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-large&quot;&gt;Large&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-xlarge&quot;&gt;xLarge&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-xxlarge&quot;&gt;XXLarge&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-xxxlarge&quot;&gt;XXXLarge&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-jumbo&quot;&gt;Jumbo&lt;/button&gt;<br>
        </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_buttons_sizes.html" target='_blank'>Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Границы кнопок</h2>
    <p>
        <button class="w3-button w3-white w3-border">Кнопка</button>
        <button class="w3-button w3-white w3-border w3-border-blue">Кнопка</button>
        <button class="w3-button w3-yellow w3-border">Кнопка</button>
        <button class="w3-button w3-white w3-border w3-border-red w3-round-large">Кнопка</button>
    </p>
    <p>
        <button class="w3-btn w3-white w3-border">Кнопка</button>
        <button class="w3-btn w3-white w3-border w3-border-blue">Кнопка</button>
        <button class="w3-btn w3-yellow w3-border">Кнопка</button>
        <button class="w3-btn w3-white w3-border w3-border-red w3-round-large">Кнопка</button>
    </p>
    <p>Класс <strong>w3-border</strong> можно использовать для добавления границ к кнопкам.</p>
    <p>Классы <strong>w3-border-<em>color</em></strong> используются для определения цвета границы:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;button class=&quot;w3-button w3-white w3-border&quot;&gt;Button&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-white w3-border w3-border-blue&quot;&gt;Button&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-yellow w3-border&quot;&gt;Button&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-white w3-border w3-border-red w3-round-large&quot;&gt;Button&lt;/button&gt;<br>
        </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_buttons_borders.html" target='_blank'>Попробуйте сами &raquo;</a></p>
    </div>
    <div class="w3-panel w3-note">
        <p><b>Совет:</b> Добавьте класс <strong>w3-round-<em>размер</em></strong> чтобы добавить скругленные границы.</p>
    </div>
    <hr>

    <h2>Кнопки с различными текстовыми эффектами</h2>
    <p>Кнопки могут использовать эффект более широкого текста:</p>
    <p>
        <button class="w3-button w3-black">Обычный</button>
        <button class="w3-button w3-wide w3-black">Широкий</button>
    </p>
    <p>Класс <strong>w3-wide</strong> добавляет более широкий текстовый эффект:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;button class=&quot;w3-button&quot;&gt;Normal&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-wide&quot;&gt;Wide&lt;/button&gt;<br>
        </div>
        <p>
            <a class="w3-btn" href="../w3csstryit/tryw3css_buttons_text_effects3.html" target='_blank'>Попробуйте сами &raquo;</a>
        </p>
    </div>
    <p>Кнопки могут иметь курсивный и жирный текст:</p>
    <p>
        <button class="w3-button w3-black">Обычный</button>
        <button class="w3-button w3-black"><i>Курсивный</i></button>
        <button class="w3-button w3-black"><b>Жирный</b></button>
    </p>
    <p>Используйте стандартные HTML теги (&lt;i&gt; и &lt;b&gt;), чтобы добавить курсивный или полужирный эффект к тексту кнопки:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;button class=&quot;w3-button&quot;&gt;&lt;i&gt;Курсивный&lt;/i&gt;&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button&quot;&gt;&lt;b&gt;Жирный&lt;/b&gt;&lt;/button&gt;<br>
        </div>
        <p>
            <a class="w3-btn" href="../w3csstryit/tryw3css_buttons_text_effects1.html" target='_blank'>Попробуйте сами &raquo;</a>
        </p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Кнопки с отступом (padding)</h2>
    <p>
        <button class="w3-button w3-padding-small w3-black">Кнопка</button>
        <button class="w3-button w3-black">Кнопка</button>
        <button class="w3-button w3-padding-large w3-black">Кнопка</button>
    </p>
    <p>
        <button class="w3-btn w3-black w3-padding-small">Кнопка</button>
        <button class="w3-btn w3-black">Кнопка</button>
        <button class="w3-btn w3-black w3-padding-large">Кнопка</button>
    </p>
    <p>Классы <strong>w3-padding-<em>размер</em></strong> используются для добавления дополнительного отступа вокруг текста кнопки:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;button class=&quot;w3-button w3-padding-small&quot;&gt;Кнопка&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button&quot;&gt;Кнопка&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-padding-large&quot;&gt;Кнопка&lt;/button&gt;<br><br>
            &lt;button class=&quot;w3-btn w3-padding-small&quot;&gt;Кнопка&lt;/button&gt;<br>
            &lt;button class=&quot;w3-btn&quot;&gt;Кнопка&lt;/button&gt;<br>
            &lt;button class=&quot;w3-btn w3-padding-large&quot;&gt;Кнопка&lt;/button&gt;
        </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_buttons_padding.html" target='_blank'>Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Кнопки полной ширины</h2>
    <p>Чтобы создать кнопку полной ширины, добавьте в неё класс <strong>w3-block</strong>.</p>
    <p>Кнопки полной ширины имеют ширину 100% и охватывают всю ширину родительского элемента:</p>
    <p><button class="w3-button w3-block w3-black">Кнопка</button></p>
    <p><button class="w3-button w3-block w3-teal">Кнопка</button></p>
    <p><button class="w3-button w3-block w3-red w3-left-align">Кнопка</button></p>
    <p><button class="w3-btn w3-block w3-black">Кнопка</button></p>
    <p><button class="w3-btn w3-block w3-teal">Кнопка</button></p>
    <p><button class="w3-btn w3-block w3-red w3-left-align">Кнопка</button></p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;button class=&quot;w3-button w3-block&quot;&gt;Кнопка&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-block w3-teal&quot;&gt;Кнопка&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-block w3-red w3-left-align&quot;&gt;Кнопка&lt;/button&gt;<br><br>
            &lt;button class=&quot;w3-btn w3-block&quot;&gt;Кнопка&lt;/button&gt;<br>
            &lt;button class=&quot;w3-btn w3-block w3-teal&quot;&gt;Кнопка&lt;/button&gt;<br>
            &lt;button class=&quot;w3-btn w3-block w3-red w3-left-align&quot;&gt;Кнопка&lt;/button&gt;
        </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_buttons_fullwidth.html" target='_blank'>Попробуйте сами &raquo;</a></p>
    </div>
    <div class="w3-panel w3-note"><p><strong>Совет:</strong> Выровняйте текст кнопки с помощью класса <strong>w3-left-align</strong> или  <strong>w3-right-align</strong>.</p></div>
    <p>Размер блока может быть определен с помощью <strong>style="width:"</strong>.</p>
    <p>
        <button class="w3-button w3-block w3-black" style="width:30%">Кнопка</button>
        <button class="w3-button w3-block w3-teal" style="width:50%">Кнопка</button>
        <button class="w3-button w3-block w3-red" style="width:80%">Кнопка</button>
    </p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;button class=&quot;w3-button w3-block w3-black&quot;
            style=&quot;width:30%&quot;&gt;Button&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-block w3-teal&quot; style=&quot;width:50%&quot;&gt;Button&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-block w3-red&quot; style=&quot;width:80%&quot;&gt;Button&lt;/button&gt;<br>
        </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_buttons_width_size.html" target='_blank'>Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Отключенные кнопки</h2>
    <p>Кнопки выделяются эффектом тени, и стрелочка курсора превращается в руку при наведении на них курсора.</p>
    <p>Отключенные кнопки непрозрачны (полупрозрачны) и отображают знак "no parking sign" ("парковка запрещена"):</p>
    <p>
        <button class="w3-button w3-teal">Кнопка</button>
        <button class="w3-button w3-teal w3-disabled">Отключено</button>
        <input type="button" class="w3-button w3-black" value="Кнопка">
        <input type="button" class="w3-button w3-black" value="Отключено" disabled>
    </p>
    <p>
        <button class="w3-btn w3-teal">Кнопка</button>
        <button class="w3-btn w3-teal w3-disabled">Отключено</button>
        <input type="button" class="w3-btn w3-black" value="Кнопка">
        <input type="button" class="w3-btn w3-black" value="Отключено" disabled>
    </p>
    <p>Класс <strong>w3-disabled</strong> используется для создания отключенной (disabled) кнопки (если элемент поддерживает стандартный disabled атрибут HTML, вместо него можно использовать disabled атрибут):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;a class="w3-button w3-disabled" href="https://www.w3schools.com"&gt;Кнопка-ссылка&lt;/a&gt;<br>
            &lt;button class=&quot;w3-button&quot; disabled&gt;Кнопка&lt;/button&gt;<br>
            &lt;input type=&quot;button&quot; class=&quot;w3-button&quot; value=&quot;Button&quot; disabled&gt;<br><br>
            &lt;a class="w3-btn w3-disabled" href="https://www.w3schools.com"&gt;Кнопка-ссылка&lt;/a&gt;<br>
            &lt;button class=&quot;w3-btn&quot; disabled&gt;Кнопка&lt;/button&gt;<br>
            &lt;input type=&quot;button&quot; class=&quot;w3-btn&quot; value=&quot;Button&quot; disabled&gt;<br>
        </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_buttons_disabled.html" target='_blank'>Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Кнопки-панели (бары)</h2>
    <p>Кнопки можно сгруппировать в горизонтальной полосе с помощью класса <strong>w3-bar</strong>:</p>

    <div class="w3-bar">
        <button class="w3-button w3-black">Кнопка</button>
        <button class="w3-button w3-teal">Кнопка</button>
        <button class="w3-button w3-red">Кнопка</button>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-bar&quot;&gt;<br>
            &nbsp; &lt;button class=&quot;w3-button w3-black&quot;&gt;Кнопка&lt;/button&gt;<br>
            &nbsp; &lt;button class=&quot;w3-button w3-teal&quot;&gt;Кнопка&lt;/button&gt;<br>
            &nbsp; &lt;button class=&quot;w3-button w3-red&quot;&gt;Кнопка&lt;/button&gt;<br>
            &lt;/div&gt;
        </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_buttons_bar.html" target='_blank'>Попробуйте сами &raquo;</a></p>
    </div>
    <div class="w3-panel w3-note"><p>Класс w3-bar появился в W3.CSS версии 2.93 / 2.94.</p></div>

    <p>Кнопки могут быть сгруппированы без пробелов между ними с помощью класса <strong>w3-bar-item</strong>:</p>
    <div class="w3-bar">
        <button class="w3-bar-item w3-button w3-black">Кнопка</button>
        <button class="w3-bar-item w3-button w3-teal">Кнопка</button>
        <button class="w3-bar-item w3-button w3-red">Кнопка</button>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-bar&quot;&gt;<br>
            &nbsp; &lt;button class=&quot;w3-bar-item w3-button w3-black&quot;&gt;Кнопка&lt;/button&gt;<br>
            &nbsp; &lt;button class=&quot;w3-bar-item w3-button w3-teal&quot;&gt;Кнопка&lt;/button&gt;<br>
            &nbsp; &lt;button class=&quot;w3-bar-item w3-button w3-red&quot;&gt;Кнопка&lt;/button&gt;<br>
            &lt;/div&gt;
        </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_buttons_bar_item.html" target='_blank'>Попробуйте сами &raquo;</a></p>
    </div>
    <?php include '../include/adinfeed.php'; ?>

    <div class="w3-center">
        <p>Панели кнопок можно центрировать с помощью класса <strong>w3-center</strong>:</p>
        <div class="w3-bar">
            <button class="w3-button w3-black">Кнопка</button>
            <button class="w3-button w3-teal">Кнопка</button>
            <button class="w3-button w3-dark-grey" disabled>Кнопка</button>
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-center&quot;&gt;<br>&lt;div class=&quot;w3-bar&quot;&gt;<br>
            &nbsp; &lt;button class=&quot;w3-button w3-black&quot;&gt;Кнопка&lt;/button&gt;<br>
            &nbsp; &lt;button class=&quot;w3-button w3-teal&quot;&gt;Кнопка&lt;/button&gt;<br>
            &nbsp; &lt;button class=&quot;w3-button w3-disabled&quot;&gt;Кнопка&lt;/button&gt;<br>
            &lt;/div&gt;<br>&lt;/div&gt;
        </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_buttons_bar_center.html" target='_blank'>Попробуйте сами &raquo;</a></p>
    </div>

    <p>Чтобы показать две (или более) панели кнопок в одной строке, добавьте класс <strong>w3-show-inline-block</strong>:</p>

    <div class="w3-show-inline-block">
        <div class="w3-bar">
            <button class="w3-bar-item w3-button w3-black">Кнопка</button>
            <button class="w3-bar-item w3-button w3-teal">Кнопка</button>
            <button class="w3-bar-item w3-button w3-dark-grey" disabled>Кнопка</button>
        </div>
    </div>
    <div class="w3-show-inline-block">
        <div class="w3-bar">
            <button class="w3-bar-item w3-button w3-black">Кнопка</button>
            <button class="w3-bar-item w3-button w3-teal">Кнопка</button>
            <button class="w3-bar-item w3-button w3-dark-grey" disabled>Кнопка</button>
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-show-inline-block&quot;&gt;<br>&lt;div class=&quot;w3-bar&quot;&gt;<br>
            &nbsp; &lt;button class=&quot;w3-btn&quot;&gt;Кнопка&lt;/button&gt;<br>&nbsp; &lt;button
            class=&quot;w3-btn w3-teal&quot;&gt;Кнопка&lt;/button&gt;<br>&nbsp; &lt;button class=&quot;w3-btn
            w3-disabled&quot;&gt;Кнопка&lt;/button&gt;<br>&lt;/div&gt;<br>&lt;/div&gt;<br><br>&lt;div
            class=&quot;w3-show-inline-block&quot;&gt;<br>&lt;div class=&quot;w3-bar&quot;&gt;<br>
            &nbsp; &lt;button class=&quot;w3-btn&quot;&gt;Кнопка&lt;/button&gt;<br>&nbsp; &lt;button
            class=&quot;w3-btn w3-teal&quot;&gt;Кнопка&lt;/button&gt;<br>&nbsp; &lt;button class=&quot;w3-btn
            w3-disabled&quot;&gt;Кнопка&lt;/button&gt;<br>&lt;/div&gt;<br>&lt;/div&gt;<br>
        </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_buttons_bar_inline.html" target='_blank'>Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Навигационные панели (навбары)</h2>
    <p>Панели кнопок можно легко использовать в качестве панелей навигации:</p>
    <div class="w3-bar w3-black">
        <button class="w3-bar-item w3-button">Кнопка</button>
        <button class="w3-bar-item w3-button">Кнопка</button>
        <button class="w3-bar-item w3-button">Кнопка</button>
    </div>
    <br>
    <div class="w3-bar w3-green">
        <button class="w3-bar-item w3-button">Кнопка</button>
        <button class="w3-bar-item w3-button">Кнопка</button>
        <button class="w3-bar-item w3-button">Кнопка</button>
    </div>
    <br>
    <div class="w3-bar w3-red">
        <button class="w3-bar-item w3-button">Кнопка</button>
        <button class="w3-bar-item w3-button">Кнопка</button>
        <button class="w3-bar-item w3-button">Кнопка</button>
    </div>
    <br>
    <div class="w3-bar w3-border">
        <button class="w3-bar-item w3-button">Кнопка</button>
        <button class="w3-bar-item w3-button">Кнопка</button>
        <button class="w3-bar-item w3-button">Кнопка</button>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-bar w3-black&quot;&gt;<br>&nbsp; &lt;button class=&quot;w3-bar-item
            w3-button&quot;&gt;Кнопка&lt;/button&gt;<br>&nbsp; &lt;button class=&quot;w3-bar-item
            w3-button&quot;&gt;Кнопка&lt;/button&gt;<br>&nbsp; &lt;button class=&quot;w3-bar-item
            w3-button&quot;&gt;Кнопка&lt;/button&gt;<br>&lt;/div&gt;</div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_buttons_bar_nav.html" target='_blank'>Попробуйте сами &raquo;</a></p>
    </div>
    <p>Размер каждого элемента можно определить с помощью <strong>style=&quot;width:&quot;</strong>:</p>

    <div class="w3-bar">
        <button class="w3-bar-item w3-button w3-black" style="width:33.3%">Кнопка</button>
        <button class="w3-bar-item w3-button w3-teal" style="width:33.3%">Кнопка</button>
        <button class="w3-bar-item w3-button w3-red" style="width:33.3%">Кнопка</button>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-bar&quot;&gt;<br>&nbsp; &lt;button class=&quot;w3-bar-item w3-button&quot;
            style=&quot;width:33.3%&quot;&gt;Кнопка&lt;/button&gt;<br>&nbsp; &lt;button class=&quot;w3-bar-item w3-button w3-teal&quot; style=&quot;width:33.3%&quot;&gt;Кнопка&lt;/button&gt;<br>&nbsp; &lt;button
            class=&quot;w3-bar-item w3-button w3-red&quot; style=&quot;width:33.3%&quot;&gt;Кнопка&lt;/button&gt;<br>&lt;/div&gt;<br>
        </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_buttons_bar_size.html" target='_blank'>Попробуйте сами &raquo;</a></p>
    </div>

    <div class="w3-panel w3-note"><p>Вы узнаете больше о навигации позже в этом учебнике.</p></div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Левая и правая кнопки</h2>
    <p>Используйте класс <strong>.w3-left</strong> и класс <strong>.w3-right</strong> чтобы перемещать кнопки влево или вправо:</p>
    <div class="w3-bar w3-black">
        <button class="w3-bar-item w3-button w3-left">Слева</button>
        <button class="w3-bar-item w3-button w3-right">Справа</button>
    </div>
    <p>Используется для создания кнопок "previous/next" (предыдущий/следующий):</p>
    <div class="w3-bar">
        <button class="w3-bar-item w3-button w3-left w3-light-grey">&laquo; Previous</button>
        <button class="w3-bar-item w3-button w3-right w3-green">Next &raquo;</button>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-bar&quot;&gt;<br>
            &nbsp; &lt;button class=&quot;w3-button w3-left&quot;&gt;Слева&lt;/button&gt;<br>
            &nbsp; &lt;button class=&quot;w3-button w3-right&quot;&gt;Справа&lt;/button&gt;<br>&lt;/div&gt;</div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_buttons_leftright.html" target='_blank'>Попробуйте сами &raquo;</a></p>
    </div>
    <hr>

    <h2>Кнопки с эффектами ряби</h2>
    <p>The <strong>w3-ripple</strong> создает эффект ряби (волны) для кнопок (при нажатии на них):</p>
    <p>
        <button class="w3-button w3-black w3-ripple">Кнопка</button>
        <button class="w3-button w3-ripple w3-red">Кнопка</button>
        <button class="w3-button w3-ripple w3-yellow">Кнопка</button>
    </p>
    <p>
        <button class="w3-btn w3-black w3-ripple">Кнопка</button>
        <button class="w3-btn w3-ripple w3-red">Кнопка</button>
        <button class="w3-btn w3-ripple w3-yellow">Кнопка</button>
    </p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;button class=&quot;w3-button w3-ripple&quot;&gt;Button&lt;/button&gt;<br>&lt;button
            class=&quot;w3-button w3-ripple w3-red&quot;&gt;Кнопка&lt;/button&gt;<br>&lt;button class=&quot;w3-button
            w3-ripple w3-yellow&quot;&gt;Кнопка&lt;/button&gt;<br>
        </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_buttons_ripple.html" target='_blank'>Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Все элементы могут быть кнопками</h2>
    <p>С помощью таблицы стилей W3.CSS все элементы можно сделать кнопкой:</p>
    <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half">
            <div class="w3-button w3-white w3-ripple" style="margin:0;padding:0">
                <img src="../images/img_snowtops.jpg" alt="Изображение в качестве кнопки" style="width:100%">
                <p>Картинка может быть w3-button</p>
            </div>
        </div>
        <div class="w3-half">
            <div class="w3-btn w3-white w3-ripple" style="margin:0;padding:0">
                <img src="../images/img_snowtops.jpg" alt="Изображение в качестве кнопки" style="width:100%">
                <p>Картинка может быть w3-btn</p>
            </div>
        </div>
    </div>
    <br><br>
    <div class="w3-button w3-green w3-ripple">
        <p>Любой div, header, footer или другие контейнеры могут быть <strong>w3-button</strong>!</p>
    </div>
    <br><br>
    <div class="w3-btn w3-green w3-ripple">
        <p>Любой div, header, footer или другие контейнеры могут быть <strong>w3-btn</strong>!</p>
    </div>
    <hr>

    <h2>Круглые кнопки</h2>
    <p>Класс w3-circle можно использовать для создания круглых кнопок:</p>
    <p>
        <a class="w3-button w3-xlarge w3-circle w3-black">+</a>
        <a class="w3-button w3-xlarge w3-circle w3-teal">+</a>
    </p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;button class=&quot;w3-button w3-circle w3-black&quot;&gt;+&lt;/button&gt;<br>
            &lt;button class=&quot;w3-button w3-circle w3-teal&quot;&gt;+&lt;/button&gt;<br>
        </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_buttons_circle.html" target='_blank'>Попробуйте сами &raquo;</a></p>
    </div>
    <p>Квадратные кнопки:</p>
    <p>
        <a class="w3-button w3-xlarge w3-black">+</a>
        <a class="w3-button w3-xlarge w3-teal">+</a>
    </p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;button class=&quot;w3-button w3-black&quot;&gt;+&lt;/button&gt;<br>&lt;button
            class=&quot;w3-button w3-teal&quot;&gt;+&lt;/button&gt;<br>
        </div>
        <p><a class="w3-btn" href="../w3csstryit/tryw3css_buttons_square.html" target='_blank'>Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_display.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_notes.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>