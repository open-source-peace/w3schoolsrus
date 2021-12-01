<?php include '../include/head.php'; ?>

  <title>Sass Функции списка. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Sass Функции списка используются для доступа к значениям в списке, объединения списков и добавления элементов в списки. Списки Sass неизменяемы. Списки Sass начинаются с 1. Первый элемент списка имеет индекс 1, а не 0. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/sass/sass_functions_list.html' />

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_sass.php'; ?>
<?php include '../include/before_content_sass.php'; ?>
<article>
    <h1>Sass <span class="color_h1">Функции списка</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sass_functions_numeric.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sass_functions_map.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Sass Функции списка</h2>
    <p>Функции списка используются для доступа к значениям в списке, объединения списков и добавления элементов в списки.</p>
    <p>Списки Sass неизменяемы (они не могут быть изменены). Т.о., функции списка, возвращающие список, будут
        возвращать новый список и не изменять исходный список.</p>
    <p>Списки Sass начинаются с 1. Первый элемент списка имеет индекс 1, а не 0.</p>
    <p>В следующей таблице перечислены все функции списков в Sass:</p>
    <div class="w3-responsive">
        <table class="w3-table-all notranslate">
            <tr>
                <th>Функция</th>
                <th>Описание &amp; Пример</th>
            </tr>
            <tr>
                <td>append(<em>list</em>, <em>value</em>, [<em>separator</em>])</td>
                <td>Добавляет одно <em>значение</em> в конец списка. <em>separator</em> может быть auto, запятая или пробел. Auto является по умолчанию.<br><br>
                    <strong>Пример:<br></strong>append((a b c), d)<br>Результат: a b c d<br>append((a b c), (d), comma)<br>
                    Результат: a, b, c, d</td>
            </tr>
            <tr>
                <td>index(<em>list</em>, <em>value</em>)</td>
                <td>Возвращает позицию index для <em>значения</em> в списке.<br><br>
                    <strong>Пример:</strong><br>index(a b c, b)<br>Результат: 2<br>index(a b c, f)<br>Результат: null</td>
            </tr>
            <tr>
                <td>is-bracketed(<em>list</em>)</td>
                <td>Проверяет, есть ли в списке квадратные скобки.<br><br>
                    <strong>Пример:</strong><br>is-bracketed([a b c])<br>Результат: true <br>is-bracketed(a b c)<br>Результат:
                    false</td>
            </tr>
            <tr>
                <td>join(<em>list1</em>, <em>list2</em>, [<em>separator, bracketed</em>])</td>
                <td>Добавляет <em>list2</em> в конец <em>list1</em>. <em>separator</em> может быть auto, запятая или пробел. Auto является по умолчанию (будет использоваться разделитель в первом списке). Заключенные в <em>квадратные скобки</em> могут быть auto, true и false. Auto является по умолчанию.<br><br>
                    <strong>Пример:</strong><br>join(a b c, d e f)<br>Результат: a b c d e f<br>join((a b c), (d e f),
                    comma)<br>Результат: a, b, c, d, e, f<br>join(a b c, d e f, $bracketed: true)<br>Результат:
                    [a b c d e f]</td>
            </tr>
            <tr>
                <td>length(<em>list</em>)</td>
                <td>Возвращает длину списка.<br><br>
                    <strong>Пример:</strong><br>length(a b c)<br>Результат: 3</td>
            </tr>
            <tr>
                <td>list-separator(<em>list</em>)</td>
                <td>Возвращает используемый разделитель списка в виде строки. Может быть либо пробелом, либо запятой.<br><br>
                    <strong>Пример:</strong><br>list-separator(a b c)<br>Результат: &quot;space&quot;<br>list-separator(a, b, c)<br>
                    Результат: &quot;comma&quot;</td>
            </tr>
            <tr>
                <td>nth(<em>list</em>, <em>n</em>)</td>
                <td>Возвращает <em>n</em>-й элемент в списке.<br><br>
                    <strong>Пример:</strong><br>nth(a b c, 3)<br>Результат: c</td>
            </tr>
            <tr>
                <td>set-nth(<em>list</em>, <em>n</em>, <em>value</em>)</td>
                <td>Устанавливает для <em>n</em>-го элемента списка указанное <em>значение</em>.<br>
                    <br>
                    <strong>Пример:</strong><br>set-nth(a b c, 2, x)<br>Результат: a x c</td>
            </tr>
            <tr>
                <td>zip(<em>lists</em>)</td>
                <td>Объединяет списки в один многомерный список.<br><br>
                    <strong>Пример:</strong><br>zip(1px 2px 3px, solid dashed dotted, red green blue)<br>Результат: 1px
                    solid red, 2px dashed green, 3px dotted blue</td>
            </tr>
        </table>
    </div>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sass_functions_numeric.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sass_functions_map.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>