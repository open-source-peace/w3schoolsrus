<?php include '../include/head.php'; ?>

  <title>Sass Селекторные функции. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Sass Селекторные функции используются для проверки и управления селекторами. Описание и примеры селекторных функций. Полный справочник. Учебник по Sass. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/sass/sass_functions_selector.html' />

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_sass.php'; ?>
<?php include '../include/before_content_sass.php'; ?>
<article>
    <h1>Sass <span class="color_h1">Селекторные функции</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sass_functions_map.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sass_functions_introspection.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Sass Селекторные функции</h2>
    <p><strong>Селекторные функции</strong> используются для проверки и управления селекторами.</p>
    <p>В следующей таблице перечислены все селекторные функции в Sass:</p>
    <div class="w3-responsive">
        <table class="w3-table-all notranslate">
            <tr>
                <th>Функция</th>
                <th>Описание &amp; Пример</th>
            </tr>
            <tr>
                <td>is-superselector(<em>super</em>, <em>sub</em>)</td>
                <td>Проверяет, соответсвует ли селектор <em>super</em> всем элементам <em>sub</em>.<br><br>
                    <b>Пример:</b><br>is-superselector(&quot;div&quot;, &quot;div.myInput&quot;)<br><b>Результат:</b> true<br>is-superselector(&quot;div.myInput&quot;,
                    &quot;div&quot;)<br><b>Результат:</b> false<br>is-superselector(&quot;div&quot;,
                    &quot;div&quot;)<br><b>Результат:</b> true</td>
            </tr>
            <tr>
                <td>selector-append(<em>selectors</em>)</td>
                <td>Добавляет второй (и третий/четвертый и т.д.) селектор к первому селектору.<br><br>
                    <b>Пример:</b><br>selector-append(&quot;div&quot;, &quot;.myInput&quot;)<br><b>Результат:</b> div.myInput<br>selector-append(&quot;.warning&quot;,
                    &quot;__a&quot;)<br><b>Результат:</b> .warning__a</td>
            </tr>
            <tr>
                <td>selector-extend(<em>selector</em>, <em>extendee</em>, <em>extender</em>)</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>selector-nest(<em>selectors</em>)</td>
                <td>Возвращает новый селектор, содержащий вложенный список селекторов CSS на основе предоставленного списка.<br><br>
                    <b>Пример:</b><br>selector-nest(&quot;ul&quot;, &quot;li&quot;)<br><b>Результат:</b> ul li<br>selector-nest(&quot;.warning&quot;,
                    &quot;alert&quot;, &quot;div&quot;)<br><b>Результат:</b> .warning div, alert div</td>
            </tr>
            <tr>
                <td>selector-parse(<em>selector</em>)</td>
                <td>Возвращает список строк, содержащихся в <em>selector</em>, используя тот же формат, что и родительский селектор.<br><br>
                    <b>Пример:</b><br>selector-parse(&quot;h1 .myInput .warning&quot;)<br><b>Результат:</b> ('h1' '.myInput'
                    '.warning')</td>
            </tr>
            <tr>
                <td>selector-replace(<em>selector</em>, <em>original</em>, <em>replacement</em>)</td>
                <td>Возвращает новый селектор с селекторами, указанными в <em>replacement</em> вместо селекторов, указанных в <em>original</em>.<br><br>
                    <b>Пример:</b><br>selector-replace(&quot;p.warning&quot;, &quot;p&quot;, &quot;div&quot;)<br><b>Результат:</b> div.warning</td>
            </tr>
            <tr>
                <td>selector-unify(<em>selector1</em>, <em>selector2</em>)</td>
                <td>Возвращает новый селектор, который соответствует только элементам, соответствующим как <em>selector1</em> так и <em>selector2</em>.<br><br>
                    <b>Пример:</b><br>selector-unify(&quot;myInput&quot;, &quot;.disabled&quot;)<br><b>Результат:</b> myInput.disabled<br>
                    selector-unify(&quot;p&quot;, &quot;h1&quot;)<br><b>Результат:</b> null</td>
            </tr>
            <tr>
                <td>simple-selectors(<em>selectors</em>)</td>
                <td>Возвращает список отдельных селекторов в <em>selectors</em>.<br>
                    <br>
                    <b>Пример:</b><br>simple-selectors(&quot;div.myInput&quot;)<br><b>Результат:</b> div, .myInput<br>
                    simple-selectors(&quot;div.myInput:before&quot;)<br><b>Результат:</b> div, .myInput,
                    :before</td>
            </tr>
        </table>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sass_functions_map.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sass_functions_introspection.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>