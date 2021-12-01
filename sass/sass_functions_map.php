<?php include '../include/head.php'; ?>

  <title>Sass Функции карты. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Sass Функции карты. В Sass тип данных карты представляет одну или несколько пар ключ/значение. Карты Sass неизменны. Учебник по Sass. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/sass/sass_functions_map.html' />

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_sass.php'; ?>
<?php include '../include/before_content_sass.php'; ?>
<article>
    <h1>Sass <span class="color_h1">Функции карты</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sass_functions_list.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sass_functions_selector.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Sass Функции карты</h2>
    <p>В Sass тип данных карты представляет одну или несколько пар ключ/значение.</p>
    <p><b>Совет:</b> Также можно использовать <a href="sass_functions_list.php">Функции списка</a> с предыдущей страницы с картами. Тогда карта будет рассматриваться как список с двумя элементами.</p>
    <p>Карты Sass неизменны (они не могут быть изменены). Итак, функции карты, которые возвращают карту, вернут новую карту и не изменят исходную карту.</p>
    <p>В следующей таблице перечислены все функции карты в Sass:</p>

    <div class="w3-responsive">
        <table class="w3-table-all notranslate">
            <tr>
                <th>Функция</th>
                <th>Описание &amp; Пример</th>
            </tr>
            <tr>
                <td>map-get(<em>map</em>, <em>key</em>)</td>
                <td>Возвращает значение для указанного <em>key</em> на карте.<br><br>
                    <b>Пример:</b><br>$font-sizes: (&quot;small&quot;: 12px, &quot;normal&quot;: 18px, &quot;large&quot;: 24px)<br>map-get($font-sizes, &quot;small&quot;)<br><b>Результат:</b> 12px</td>
            </tr>
            <tr>
                <td>map-has-key(<em>map</em>, <em>key</em>)</td>
                <td>Проверяет, есть ли на <em>map</em> указанный <em>key</em>. Возвращает true или false.<br><br>
                    <b>Пример:</b><br>$font-sizes: (&quot;small&quot;: 12px, &quot;normal&quot;: 18px, &quot;large&quot;: 24px)<br>map-has-key($font-sizes, &quot;big&quot;)<br><b>Результат:</b> false</td>
            </tr>
            <tr>
                <td>map-keys(<em>map</em>)</td>
                <td>Возвращает список всех ключей в <em>map</em>.<br><br>
                    <b>Пример:</b><br> $font-sizes: (&quot;small&quot;: 12px, &quot;normal&quot;: 18px, &quot;large&quot;: 24px)<br>map-keys($font-sizes)<br><b>Результат:</b> &quot;small&quot;, &quot;normal, &quot;large&quot;</td>
            </tr>
            <tr>
                <td>map-merge(<em>map1</em>, <em>map2</em>)</td>
                <td>Добавляет <em>map2</em> в конец <em>map1</em>.<br><br><b>Пример:</b>
                    <br>$font-sizes: (&quot;small&quot;: 12px, &quot;normal&quot;: 18px, &quot;large&quot;: 24px)<br>
                    $font-sizes2: (&quot;x-large&quot;: 30px, &quot;xx-large&quot;: 36px)<br>map-merge($font-sizes,
                    $font-sizes2)<br><b>Результат:</b> &quot;small&quot;: 12px, &quot;normal&quot;: 18px, &quot;large&quot;: 24px,
                    &quot;x-large&quot;: 30px, &quot;xx-large&quot;: 36px</td>
            </tr>
            <tr>
                <td>map-remove(<em>map</em>, <em>keys...</em>)</td>
                <td>Удаляет указанные ключи из <em>map</em>.<br><br><b>Пример:</b><br>$font-sizes: (&quot;small&quot;: 12px, &quot;normal&quot;: 18px, &quot;large&quot;: 24px)<br>map-remove($font-sizes,
                    &quot;small&quot;)<br><b>Результат:</b> (&quot;normal&quot;: 18px, &quot;large&quot;: 24px)<br>map-remove($font-sizes,
                    &quot;small&quot;, &quot;large&quot;)<br><b>Результат:</b> (&quot;normal&quot;: 18px)</td>
            </tr>
            <tr>
                <td>map-values(<em>map</em>)</td>
                <td>Возвращает список всех значений в <em>map</em>.<br><br><b>Пример:</b><br>$font-sizes: (&quot;small&quot;: 12px, &quot;normal&quot;: 18px, &quot;large&quot;: 24px)<br>map-values($font-sizes)<br><b>Результат:</b> 12px, 18px, 24px</td>
            </tr>
        </table>
    </div>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sass_functions_list.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sass_functions_selector.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>