<?php include '../include/head.php'; ?>

  <title>Sass Цветовые функции. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Sass Цветовые функции: установки цвета, получения цвета и управления цветом. Учебник по Sass. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/sass/sass_functions_color.html' />

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_sass.php'; ?>
<?php include '../include/before_content_sass.php'; ?>

<article>
    <h1>Sass <span class="color_h1">Цветовые функции</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sass_functions_introspection.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="index.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Sass Цветовые функции</h2>
    <p>Мы разделили цветовые функции в Sass на три части: функции установки цвета, функции получения цвета и функции управления цветом:</p>
    <h3>Sass Функции установки цвета</h3>
    <div class="w3-responsive">
        <table class="w3-table-all notranslate">
            <tr>
                <th>Функция</th>
                <th>Описание &amp; Пример</th>
            </tr>
            <tr>
                <td>rgb(<em>red</em>, <em>green</em>, <em>blue</em>)</td>
                <td>Устанавливает цвет с использованием модели Красный-Зеленый-Синий (Red-Green-Blue - RGB). Значение цвета RGB задается с помощью: rgb(red, green, blue). Каждый параметр определяет интенсивность этого цвета и может быть целым числом от 0 до 255 или процентным значением (от 0% до 100%).<br><br>
                    <b>Пример:</b><br>rgb(0, 0, 255); // отображается как синий, потому что для синего параметра установлено максимальное значение (255), а для остальных установлено значение 0</td>
            </tr>
            <tr>
                <td>rgba(<em>red</em>, <em>green</em>, <em>blue</em>, <em>alpha</em>)</td>
                <td>Устанавливает цвет с использованием модели Красный-Зеленый-Синий-Альфа (Red-Green-Blue-Alpha - RGBA). Значения цвета RGBA являются расширением значений цвета RGB с альфа-каналом, который определяет непрозрачность цвета. Параметр альфа - это число от 0,0 (полностью прозрачный) до 1,0 (полностью непрозрачный).<br><br>
                    <b>Пример:</b><br>rgba(0, 0, 255, 0.3); // отображается как синий с непрозрачностью</td>
            </tr>
            <tr>
                <td>hsl(<em>hue</em>, <em>saturation</em>, <em>lightness</em>)</td>
                <td>Устанавливает цвет с использованием модели оттенка-насыщенности-яркости (Hue-Saturation-Lightness - HSL) и представляет представление цветов в цилиндрических координатах. Оттенок - это градус на цветовом круге (от 0 до 360) - 0 или 360 - красный, 120 - зеленый, 240 - синий. Насыщенность - это процентное значение; 0% означает оттенок серого, а 100% - полный цвет. Яркость тоже в процентах; 0% черный, 100% белый.<br><br>
                    <b>Пример:</b><br>hsl(120, 100%, 50%); // зеленый<br>hsl(120, 100%, 75%); // светло-зеленый<br>hsl(120, 100%, 25%); // темно-зеленый<br>hsl(120, 60%, 70%); // пастельно-зеленый <br></td>
            </tr>
            <tr>
                <td>hsla(<em>hue</em>, <em>saturation</em>, <em>lightness</em>, <em>alpha</em>)</td>
                <td>Устанавливает цвет с использованием модели оттенка-насыщенности-яркости-альфа (Hue-Saturation-Lightness-Alpha - HSLA). Значения цвета HSLA являются расширением значений цвета HSL с альфа-каналом, который определяет непрозрачность цвета. Параметр альфа - это число от 0,0 (полностью прозрачный) до 1,0 (полностью непрозрачный).<br><br>
                    <b>Пример:</b><br>hsl(120, 100%, 50%, 0.3); // зеленый с непрозрачностью<br> hsl(120, 100%, 75%, 0.3); // светло-зеленый с непрозрачностью</td>
            </tr>
            <tr>
                <td>grayscale(<em>color</em>)</td>
                <td>Устанавливает серый цвет с такой же яркостью, как <em>color</em>.<br><br>
                    <b>Пример:</b><br>grayscale(#7fffd4);<br><b>Результат:</b> #c6c6c6</td>
            </tr>
            <tr>
                <td>complement(<em>color</em>)</td>
                <td>Устанавливает цвет, который является дополнительным цветом <em>color</em>.<br><br>
                    <b>Пример:</b><br>complement(#7fffd4);<br><b>Результат:</b> #ff7faa</td>
            </tr>
            <tr>
                <td>invert(<em>color</em>, <em>weight</em>)</td>
                <td>Устанавливает цвет, который является инверсным или отрицательным цветом <em>color</em>. Параметр <em>weight</em> (толщина) является необязательным и должен быть числом от 0% до 100%. По умолчанию 100%.<br><br>
                    <b>Пример:</b><br>invert(white);<br><b>Результат:</b> black</td>
            </tr>
        </table>
    </div>

    <h3>Sass Функции получения цвета</h3>
    <div class="w3-responsive">
        <table class="w3-table-all notranslate">
            <tr>
                <th>Функция</th>
                <th>Описание &amp; Пример</th>
            </tr>
            <tr>
                <td>red(<em>color</em>)</td>
                <td>Возвращает значение красного <em>color</em> в виде числа между 0 и 255.<br><br>
                    <b>Пример:</b><br>red(#7fffd4);<br><b>Результат:</b> 127<br>red(red);<br><b>Результат:</b>
                    255</td>
            </tr>
            <tr>
                <td>green(<em>color</em>)</td>
                <td>Возвращает значение зеленого цвета <em>color</em> в виде числа между 0 и 255.<br><br>
                    <b>Пример:</b><br>green(#7fffd4);<br><b>Результат:</b> 255<br>green(blue);<br><b>Результат:</b>
                    0</td>
            </tr>
            <tr>
                <td>blue(<em>color</em>)</td>
                <td>Возвращает значение синего цвета <em>color</em> в виде числа между 0 и 255.<br><br>
                    <b>Пример:</b><br>blue(#7fffd4);<br><b>Результат:</b> 212<br>blue(blue);<br><b>Результат:</b> 255</td>
            </tr>
            <tr>
                <td>hue(<em>color</em>)</td>
                <td>Возвращает оттенок <em>color</em> как число от 0 до 255 градусов.<br><br>
                    <b>Пример:</b><br>hue(#7fffd4);<br><b>Результат:</b> 160deg</td>
            </tr>
            <tr>
                <td>saturation(<em>color</em>)</td>
                <td>Возвращает насыщенность HSL для <em>color</em> как число от 0% до 100%.<br><br>
                    <b>Пример:</b><br>saturation(#7fffd4);<br><b>Результат:</b> 100%</td>
            </tr>
            <tr>
                <td>lightness(<em>color</em>)</td>
                <td>Возвращает яркость HSL <em>color</em> в виде числа от 0% до 100%.<br><br>
                    <b>Пример:</b><br>lightness(#7fffd4);<br><b>Результат:</b> 74.9%</td>
            </tr>
            <tr>
                <td>alpha(<em>color</em>)</td>
                <td>Возвращает альфа-канал <em>color</em> как число от 0 до 1.<br><br>
                    <b>Пример:</b><br>alpha(#7fffd4);<br><b>Результат:</b> 1</td>
            </tr>
            <tr>
                <td>opacity(<em>color</em>)</td>
                <td>Возвращает альфа-канал <em>color</em> как число от 0 до 1.<br><br>
                    <b>Пример:</b><br>opacity(rgba(127, 255, 212, 0.5));<br><b>Результат:</b> 0.5</td>
            </tr>
        </table>
    </div>

    <h3>Sass Функции управления цветом</h3>
    <div class="w3-responsive">
        <table class="w3-table-all notranslate">
            <tr>
                <th>Функция</th>
                <th>Описание &amp; Пример</th>
            </tr>
            <tr>
                <td>mix(<em>color1</em>, <em>color2</em>, <em>weight</em>)</td>
                <td>Создает цвет, представляющий собой смесь <em>color1</em> и <em>color2</em>.
                    Параметр <em>weight</em> (вес) должен находиться в диапазоне от 0% до 100%. Больший вес означает, что нужно использовать больше color1. Меньший вес означает, что нужно использовать больше color2. По умолчанию 50%.</td>
            </tr>
            <tr>
                <td>adjust-hue(<em>color</em>, <em>degrees</em>)</td>
                <td>Регулирует оттенок <em>color</em> в диапазоне от -360 до 360 градусов.<br><br>
                    <b>Пример:</b><br>adjust-hue(#7fffd4, 80deg);<br><b>Результат:</b> #8080ff</td>
            </tr>
            <tr>
                <td>adjust-color(<em>color</em>, <em>red</em>, <em>green</em>, <em>blue</em>,
                    <em>hue</em>, <em>saturation</em>, <em>lightness</em>, <em>alpha</em>)</td>
                <td>Регулирует один или несколько параметров на указанную величину. Эта функция добавляет или вычитает указанное количество к/из существующего значения цвета.<br><br>
                    <b>Пример:</b><br>adjust-color(#7fffd4, blue: 25);<br><b>Результат:</b></td>
            </tr>
            <tr>
                <td>change-color(<em>color</em>, <em>red</em>, <em>green</em>, <em>blue</em>,
                    <em>hue</em>, <em>saturation</em>, <em>lightness</em>, <em>alpha</em>)</td>
                <td>Устанавливает для одного или нескольких параметров <em>color</em> новые значения.<br><br>
                    <b>Пример:</b><br>change-color(#7fffd4, red: 255);<br><b>Результат:</b>
                    #ffffd4</td>
            </tr>
            <tr>
                <td>scale-color(<em>color</em>, <em>red</em>, <em>green</em>, <em>blue</em>,&nbsp;
                    <em>saturation</em>, <em>lightness</em>, <em>alpha</em>)</td>
                <td>Масштабирует один или несколько параметров <em>color</em>.</td>
            </tr>
            <tr>
                <td>rgba(<em>color</em>, <em>alpha</em>)</td>
                <td>Создает новый цвет <em>color</em> с заданным <em>alpha</em> каналом.<br><br>
                    <b>Пример:</b><br>rgba(#7fffd4, 30%);<br><b>Результат:</b> rgba(127, 255, 212, 0.3)</td>
            </tr>
            <tr>
                <td>lighten(<em>color</em>, <em>amount</em>)</td>
                <td>Создает более светлый цвет <em>color</em> с <em>amount</em> (величиной) от 0% до 100%. Параметр amount увеличивает яркость HSL на этот процент.</td>
            </tr>
            <tr>
                <td>darken(<em>color</em>, <em>amount</em>)</td>
                <td>Создает более темный цвет <em>color</em> с <em>amount</em> от 0% до 100%. Параметр количества уменьшает яркость HSL на этот процент.</td>
            </tr>
            <tr>
                <td>saturate(<em>color</em>, <em>amount</em>)</td>
                <td>Создает более насыщенный цвет <em>color</em> с <em>amount</em> от 0% до 100%. Параметр количества увеличивает насыщенность HSL на этот процент.</td>
            </tr>
            <tr>
                <td>desaturate(<em>color</em>, <em>amount</em>)</td>
                <td>Создает менее насыщенный цвет <em>color</em> с <em>amount</em> от 0% до 100%. Параметр количества уменьшает насыщенность HSL на этот процент.</td>
            </tr>
            <tr>
                <td>opacify(<em>color</em>, <em>amount</em>)</td>
                <td>Создает более непрозрачный цвет <em>color</em> с <em>amount</em> от 0 до 1. Параметр amount увеличивает альфа-канал на эту величину.</td>
            </tr>
            <tr>
                <td>fade-in(<em>color</em>, <em>amount</em>)</td>
                <td>Создает более непрозрачный цвет <em>color</em> с <em>amount</em> от 0 до 1. Параметр amount увеличивает альфа-канал на эту величину.</td>
            </tr>
            <tr>
                <td>transparentize(<em>color</em>, <em>amount</em>)</td>
                <td>Создает более прозрачный цвет <em>color</em> с <em>amount</em> от 0 до 1. Параметр amount уменьшает альфа-канал на эту величину.</td>
            </tr>
            <tr>
                <td>fade-out(<em>color</em>, <em>amount</em>)</td>
                <td>Создает более прозрачный цвет <em>color</em> с <em>amount</em> от 0 до 1. Параметр amount уменьшает альфа-канал на эту величину.</td>
            </tr>
        </table>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sass_functions_introspection.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="index.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>