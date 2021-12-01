<?php include '../include/head.php'; ?>

<title>CSS Допустимые значения цвета. <?php include '../include/title.php'; ?></title>
<meta name='description' content="CSS Допустимые значения цвета. Какие названия цветов используются в веб-дизайне? <?php include '../include/description.php'; ?>">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_cssref.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Допустимые значения цвета</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_colors.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_default_values.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS Цвета</h2>
    <p>Цвета в CSS можно указать следующими способами:</p>
    <ul>
        <li>Шестнадцатеричные цвета (HEX)</li>
        <li>RGB цвета</li>
        <li>RGBA цвета</li>
        <li>HSL цвета</li>
        <li>HSLA цвета</li>
        <li>Предопределенные / кросс-браузерные названия цветов</li>
    </ul>
    <hr>

    <h2>Шестнадцатеричные цвета (HEX)</h2>
    <p>Шестнадцатеричный цвет задается с помощью: #RRGGBB, где шестнадцатеричные числа RR (red - красный), GG (green - зеленый) и BB (blue - синий) задают компоненты цвета. Все значения должны быть между 00 и FF.</p>
    <p>Например, значение #0000ff отображается как синий, потому что синий компонент установлен в его самое высокое значение (ff), а остальные установлены в 00.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Определите разные цвета HEX:</p>
        <div class="w3-code notranslate cssHigh">
            #p1 {background-color: #ff0000;}&nbsp;&nbsp; /* красный */<br>#p2 {background-color: #00ff00;}&nbsp;&nbsp; /* зелёный */<br>#p3 {background-color: #0000ff;}&nbsp;&nbsp; /* синий */
        </div>
        <a target="_blank" href="../csstryit/trycss_color_hex.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>RGB Цвета</h2>
    <p>Значение цвета RGB указывается с помощью <a href="func_rgb.php">rgb() функции</a>, которая имеет следующий синтаксис:</p>
    <p><code class="w3-codespan">rgb(red, green, blue)</code></p>
    <p>Каждый параметр (красный, зеленый и синий) определяет интенсивность цвета и может быть целым числом от 0 до 255 или процентным значением (от 0% до 100%).</p>
    <p>Например, значение rgb(0,0,255) отображается синим цветом, поскольку для параметра blue установлено самое высокое значение (255), а для остальных - 0.</p>
    <p>Также следующие значения определяют одинаковый цвет: rgb(0,0,255) и rgb(0%,0%,100%).</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Определите разные цвета RGB:</p>
        <div class="w3-code notranslate cssHigh">
            #p1 {background-color: rgb(255, 0, 0);}&nbsp;&nbsp; /* красный */<br>#p2 {background-color: rgb(0, 255, 0);}&nbsp;&nbsp; /* зеленый */<br>#p3 {background-color: rgb(0, 0, 255);}&nbsp;&nbsp; /* синий */
        </div>
        <a target="_blank" href="../csstryit/trycss_color_rgb.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>RGBA Цвета</h2>
    <p>Цветовые значения RGBA являются расширением цветовых значений RGB с альфа-каналом, который определяет непрозрачность объекта.</p>
    <p>Цвет RGBA указывается с помощью <a href="func_rgba.php">rgba() функции</a>, которая имеет следующий синтаксис:</p>
    <p><code class="w3-codespan">rgba(red, green, blue, alpha)</code></p>
    <p>Альфа-параметр - это число от 0,0 (полностью прозрачное) до 1,0 (полностью непрозрачное).</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Определите различные цвета RGB с непрозрачностью:</p>
        <div class="w3-code notranslate cssHigh">
            #p1 {background-color: rgba(255, 0, 0, 0.3);}&nbsp;&nbsp; /* красный с непрозрачностью */<br>#p2 {background-color: rgba(0, 255, 0, 0.3);}&nbsp;&nbsp; /* зеленый с непрозрачностью */<br>#p3 {background-color: rgba(0, 0, 255, 0.3);}&nbsp;&nbsp; /* синий с непрозрачностью */
        </div>
        <a target="_blank" href="../csstryit/trycss_color_rgba.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HSL Цвета</h2>
    <p>HSL обозначает оттенок, насыщенность и яркость - и представляет представление цветов в цилиндрических координатах.</p>
    <p>Значение цвета HSL указывается с помощью <a href="func_hsl.php">hsl() функции</a>, которая имеет следующий синтаксис:</p>
    <p><code class="w3-codespan">hsl(hue, saturation, lightness)</code></p>
    <p>Оттенок (hue) - это градус цветового круга (от 0 до 360) - 0 (или 360) - красный, 120 - зеленый, 240 - синий. Насыщенность (saturation) - это процентное значение; 0% означает оттенок серого, а 100% - полный цвет. Легкость (lightness) также в процентах; 0% черный, 100% белый.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Определите разные цвета HSL:</p>
        <div class="w3-code notranslate cssHigh">
            #p1 {background-color: hsl(120, 100%, 50%);}&nbsp;&nbsp; /* зеленый */<br>#p2 {background-color: hsl(120, 100%, 75%);}&nbsp;&nbsp; /* светло-зеленый */<br>#p3 {background-color: hsl(120, 100%, 25%);}&nbsp;&nbsp; /* темно-зеленый */<br>#p4 {background-color: hsl(120, 60%, 70%);}&nbsp;&nbsp;&nbsp; /* пастельно-зеленый */
        </div>
        <a target="_blank" href="../csstryit/trycss_color_hsl.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HSLA Цвета</h2>
    <p>Значения цвета HSLA являются расширением значений цвета HSL с альфа-каналом, который определяет непрозрачность объекта.</p>
    <p>Значение цвета HSLA указывается с помощью <a href="func_hsla.php">hsla() функции</a>, которая имеет следующий синтаксис:</p>
    <p><code class="w3-codespan">hsla(hue, saturation, lightness, alpha)</code></p>
    <p>Альфа-параметр - это число от 0,0 (полностью прозрачное) до 1,0 (полностью непрозрачное).</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Определите различные цвета HSL с непрозрачностью:</p>
        <div class="w3-code notranslate cssHigh">
            #p1 {background-color: hsla(120, 100%, 50%, 0.3);}&nbsp;&nbsp; /* зеленый с непрозрачностью */<br>#p2 {background-color: hsla(120, 100%, 75%, 0.3);}&nbsp;&nbsp; /* светло-зеленый с непрозрачностью */<br>#p3 {background-color: hsla(120, 100%, 25%, 0.3);}&nbsp;&nbsp; /* темно-зеленый с непрозрачностью */<br>#p4 {background-color: hsla(120, 60%, 70%, 0.3);}&nbsp;&nbsp;&nbsp; /* пастельно-зеленый с непрозрачностью */
        </div>
        <a target="_blank" href="../csstryit/trycss_color_hsla.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Предопределенные / кросс-браузерные названия цветов</h2>
    <p>140 названий цветов предопределены в спецификации цвета HTML и CSS.</p>
    <p>Посмотрите таблицу <a href="../colors/colors_names.php">предопределенных названий цветов</a>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_colors.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_default_values.php">Next &#10095;</a>
    </div>    
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>