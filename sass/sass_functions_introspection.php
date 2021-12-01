<?php include '../include/head.php'; ?>

  <title>Sass Функции самоанализа. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Функции самоанализа (Introspection) редко используются при построении таблицы стилей. Однако они полезны, если что-то не работает правильно - чтобы выяснить, что происходит: например, функции отладки (дебаггинг). Учебник по Sass. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/sass/sass_functions_introspection.html' />

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_sass.php'; ?>
<?php include '../include/before_content_sass.php'; ?>
<article>
    <h1>Sass <span class="color_h1">Функции самоанализа</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sass_functions_selector.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sass_functions_color.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Sass Функции самоанализа</h2>
    <p><strong>Функции самоанализа</strong> (Introspection) редко используются при построении таблицы стилей. Однако они полезны, если что-то не работает должным образом - чтобы выяснить, что происходит: например, функции отладки (дебаггинг).</p>
    <p>В следующей таблице перечислены все функции самоанализа в Sass:</p>
    <div class="w3-responsive">
        <table class="w3-table-all notranslate">
            <tr>
                <th>Функция</th>
                <th>Описание &amp; Пример</th>
            </tr>
            <tr>
                <td>call(<em>function</em>, <em>arguments</em>...)</td>
                <td>Вызывает функцию с аргументами и возвращает результат.</td>
            </tr>
            <tr>
                <td>content-exists()</td>
                <td>Проверяет, прошел ли текущий миксин блок @content.</td>
            </tr>
            <tr>
                <td>feature-exists(<em>feature</em>)</td>
                <td>Проверяет, поддерживается ли <em>feature</em> (функция) текущей реализацией Sass.<br><br>
                    <b>Пример:</b><br>feature-exists(&quot;at-error&quot;);<br><b>Результат:</b> true</td>
            </tr>
            <tr>
                <td>function-exists(<em>functionname</em>)</td>
                <td>Проверяет, существует ли указанная функция.<br><br>
                    <b>Пример:</b><br>function-exists(&quot;nonsense&quot;)<br><b>Результат:</b> false</td>
            </tr>
            <tr>
                <td>get-function(<em>functionname</em>, css: false)</td>
                <td>Возвращает указанную функцию. Если css - true, вместо этого возвращается простая функция CSS.</td>
            </tr>
            <tr>
                <td>global-variable-exists(<em>variablename</em>)</td>
                <td>Проверяет, существует ли указанная глобальная переменная.<br><br>
                    <b>Пример:</b><br>variable-exists(a)<br><b>Результат:</b> true</td>
            </tr>
            <tr>
                <td>inspect(<em>value</em>)</td>
                <td>Возвращает строковое представление <em>value</em> (значение).</td>
            </tr>
            <tr>
                <td>mixin-exists(<em>mixinname</em>)</td>
                <td>Проверяет, существует ли указанный миксин.<br><br>
                    <b>Пример:</b><br>mixin-exists(&quot;important-text&quot;)<br><b>Результат:</b> true</td>
            </tr>
            <tr>
                <td>type-of(<em>value</em>)</td>
                <td>Возвращает тип <em>value</em> (значение). Может быть числом, строкой, цветом, списком, картой, bool, null, функцией, списком аргументов.<br><br>
                    <b>Пример:</b><br>type-of(15px)<br><b>Результат:</b> number<br>type-of(#ff0000)<br><b>Результат:</b> color</td>
            </tr>
            <tr>
                <td>unit(<em>number</em>)</td>
                <td>Возвращает единицу измерения, связанную с number (числом).<br><br>
                    <b>Пример:</b><br>unit(15px)<br><b>Результат:</b> px</td>
            </tr>
            <tr>
                <td>unitless(<em>number</em>)</td>
                <td>Проверяет, связана ли с указанным number (числом) единица измерения.<br><br>
                    <b>Пример:</b><br>unitless(15px)<br><b>Результат:</b> false<br>unitless(15)<br><b>Результат:</b> true</td>
            </tr>
            <tr>
                <td>variable-exists(<em>variablename</em>)</td>
                <td>Проверяет, существует ли указанная переменная в текущей области.<br>
                    <br>
                    <b>Пример:</b><br>variable-exists(b)<br><b>Результат:</b> true</td>
            </tr>
        </table>
    </div>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sass_functions_selector.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sass_functions_color.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>