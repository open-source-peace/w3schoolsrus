<?php include '../include/head.php'; ?>

<title>CSS Grid - Сетка. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Grid - Сетка. Как сделать макет-сетку на веб-странице? CSS Модуль Grid Layout. Как создать макет-сетку? Применение гридов для стилизации веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <link rel="stylesheet" href="../styles/browserref.css">
    <style>
        .grid-container {
            display: grid;
            grid-gap: 10px;
            background-color: #2196F3;
            padding: 10px;
            text-align: center;
        }
        .grid-container2 {
            display: grid;
            background-color: #2196F3;
            padding: 10px;
            text-align: center;
        }
        .grid-item {
            background-color: rgba(255, 255, 255, 0.8);
        }
        .grid-item2 {
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(0, 0, 0, 0.8);
        }
        .item1 {
            grid-row: 1;
            grid-column: 1;
        }
        .item2 {
            grid-row: 1;
            grid-column: 2;
        }
        .item3 {
            grid-row: 1;
            grid-column: 3;
        }
        .item4 {
            grid-row: 2;
            grid-column: 1;
        }
        .item5 {
            grid-row: 2;
            grid-column: 2;
        }
        .item6 {
            grid-row: 2;
            grid-column: 3;
        }
        .item7 {
            grid-row: 3;
            grid-column: 1 / span 3;
        }
        .anchor-container {
            position:relative;
        }
        .anchor-container a {
            position:absolute;
            top:-100px;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Модуль Grid Layout (Макет-сетка)</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_rwd_templates.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_grid_container.php">Next &#10095;</a>
    </div>
    <hr>
    <div class="grid-container" style="grid-template-areas:
    'header header header header header header'
    'menu main main main right right'
    'menu footer footer footer footer footer';">
        <div class="grid-item" style="grid-area: header"><h3>Header</h3></div>
        <div class="grid-item" style="grid-area: menu"><h3>Menu</h3></div>
        <div class="grid-item" style="grid-area: main"><h3>Main</h3></div>
        <div class="grid-item" style="grid-area: right"><h3>Right</h3></div>
        <div class="grid-item" style="grid-area: footer"><h3>Footer</h3></div>
    </div>
    <p>
        <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_layout_named.html">Попробуйте сами &raquo;</a>
    </p>

    <!--
    <div class="grid-container">
      <div class="grid-item item1"><h2>1</h2></div>
      <div class="grid-item item2"><h2>2</h2></div>
      <div class="grid-item item3"><h2>3</h2></div>
      <div class="grid-item item4"><h2>4</h2></div>
      <div class="grid-item item5"><h2>5</h2></div>
      <div class="grid-item item6"><h2>6</h2></div>
      <div class="grid-item item7"><h2>7</h2></div>
    </div>
    <p>
    <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_layout.html">Попробуйте сами &raquo;</a>
    </p>
    -->

    <hr>
    <h2>Grid Layout (Макет-сетка)</h2>
    <p>Модуль CSS Grid Layout предлагает систему макетов на основе сетки со строками и столбцами, что упрощает разработку веб-страниц без использования поплавков (float) и позиционирования (position).</p>
    <hr>
    <h2>Поддержка браузерами</h2>
    <p>Свойства сетки (grid) поддерживаются во всех современных браузерах.</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tr>
                <th style="width:20%;height:50px;" class="bsChrome" title="Chrome"></th>
                <th style="width:20%;" class="bsEdge" title="Internet Explorer / Edge"></th>
                <th style="width:20%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:20%;" class="bsSafari" title="Safari"></th>
                <th style="width:20%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td>57.0</td>
                <td>16.0</td>
                <td>52.0</td>
                <td>10</td>
                <td>44</td>
            </tr>
        </table>
    </div>
    <hr>

    <h2>Элементы сетки</h2>
    <p>Компоновка сетки состоит из родительского элемента с одним или несколькими дочерними элементами.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;grid-container&quot;&gt;<br>&nbsp; &lt;div class=&quot;grid-item&quot;&gt;1&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;grid-item&quot;&gt;2&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;grid-item&quot;&gt;3&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;grid-item&quot;&gt;4&lt;/div&gt;<br>&nbsp; &lt;div
            class=&quot;grid-item&quot;&gt;5&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;grid-item&quot;&gt;6&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;grid-item&quot;&gt;7&lt;/div&gt;<br>&nbsp; &lt;div
            class=&quot;grid-item&quot;&gt;8&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;grid-item&quot;&gt;9&lt;/div&gt;<br>&lt;/div&gt;
        </div>

        <div class="w3-white notranslate w3-padding">
            <div class="grid-container2" style="grid-template-columns:auto auto auto">
                <div class="grid-item2"><h2>1</h2></div>
                <div class="grid-item2"><h2>2</h2></div>
                <div class="grid-item2"><h2>3</h2></div>
                <div class="grid-item2"><h2>4</h2></div>
                <div class="grid-item2"><h2>5</h2></div>
                <div class="grid-item2"><h2>6</h2></div>
                <div class="grid-item2"><h2>7</h2></div>
                <div class="grid-item2"><h2>8</h2></div>
                <div class="grid-item2"><h2>9</h2></div>
            </div>
        </div>

        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <hr>
    <h2>Свойство Display</h2>
    <p>Элемент HTML становится контейнером сетки, когда его свойство <code class="w3-codespan">display</code> имеет значение <em>grid</em> или <em>inline-grid</em>.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .grid-container {<br>&nbsp;
            display: grid;<br>}</div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_display_grid.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .grid-container {<br>&nbsp;
            display: inline-grid;<br>}</div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_display_inline-grid.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <p>Все прямые потомки контейнера сетки автоматически становятся элементами <em>grid</em>, т.е. сетки.</p>
    <hr>
    <h2>Столбцы сетки</h2>
    <p>Вертикальные линии элементов сетки называются <em>столбцами</em> (или колонками).</p>

    <img src="../images/grid_columns.png" style="max-width:100%" alt="Макет grid. Столбцы сетки">
    <hr>
    <h2>Строки сетки</h2>
    <p>Горизонтальные линии элементов сетки называются <em>строками</em> (или рядами).</p>

    <img src="../images/grid_rows.png" style="max-width:100%" alt="Макет grid. Строки сетки">
    <hr>

    <h2>Пробелы сетки</h2>
    <p>Зазоры между каждым столбцом / строкой называются <em>пробелами</em> (column-gap или row-gap).</p>

    <img src="../images/grid_gaps.png" style="max-width:100%" alt="Макет grid. Пробелы сетки">

    <p>Вы можете настроить размер зазора, используя одно из следующих свойств:</p>
    <p>
        <code class="w3-codespan">grid-column-gap</code><br>
        <code class="w3-codespan">grid-row-gap</code><br>
        <code class="w3-codespan">grid-gap</code>
    </p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Свойство <em>grid-column-gap</em> устанавливает разрыв между столбцами:</p>
        <div class="w3-code notranslate cssHigh">
            .grid-container {<br>&nbsp;
            display: grid;<br><strong>&nbsp; grid-column-gap: 50px;</strong><br>}</div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-column-gap.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Свойство <em>grid-row-gap</em> устанавливает разрыв между строками:</p>
        <div class="w3-code notranslate cssHigh">
            .grid-container {<br>&nbsp;
            display: grid;<br><strong>&nbsp; grid-row-gap: 50px;<br></strong>}</div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-row-gap.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Свойство <em>grid-gap</em> является сокращенным свойством для свойств <em>grid-column-gap</em> и <em>grid-row-gap</em>:</p>
        <div class="w3-code notranslate cssHigh">
            .grid-container {<br>&nbsp;
            display: grid;<br><strong>&nbsp; grid-gap: 50px 100px;<br></strong>}</div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-gap2.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Свойство <em>grid-gap</em> также можно использовать для установки как разрыва строки, так и разрыва столбца в одном значении:</p>
        <div class="w3-code notranslate cssHigh">
            .grid-container {<br>&nbsp;
            display: grid;<br><strong>&nbsp; grid-gap: 50px;<br></strong>}</div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-gap.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <hr>
    <h2>Линии сетки</h2>
    <p>Линии между столбцами называются <em>линиями столбца</em>.</p>
    <p>Линии между строками называются <em>линиями строки</em>.</p>

    <img src="../images/grid_lines.png" style="max-width:100%" alt="Макет grid. Линии сетки">

    <p>При размещении элемента сетки в контейнере сетки обращайтесь к номерам строк:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Поместите элемент сетки в строку 1 столбца, и пусть он заканчивается в строке 3 столбца:</p>
        <div class="w3-code notranslate cssHigh">
            .item1 {<br><strong>
                &nbsp; </strong>grid-column-start: 1;<br>&nbsp; grid-column-end: 3;<br>}</div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_lines.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Поместите элемент сетки в строку строки 1, и пусть он заканчивается в строке 3:</p>
        <div class="w3-code notranslate cssHigh">
            .item1 {<br><strong>
                &nbsp; </strong>grid-row-start: 1;<br>&nbsp; grid-row-end: 3;<br>}</div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_lines2.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_rwd_templates.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_grid_container.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>