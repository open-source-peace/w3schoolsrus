<?php include '../include/head.php'; ?>

<title>CSS Grid - Элементы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Grid - Элементы. Свойства сетки grid-column, grid-row, grid-area. Наименование и порядок элементов сетки. Создание макета веб-страницы с помощью сетки. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        .grid-container {
            display: grid;
            grid-gap: 10px;
            background-color: #2196F3;
            padding: 10px;
            text-align: center;
        }
        .grid-item {
            background-color: rgba(255, 255, 255, 0.8);
        }
        .item1 {
            grid-column: 1 / span 2;
            grid-row: 1;
        }
        .item2 {
            grid-column: 3;
            grid-row: 1 / span 2;
        }
        .item3 {
            grid-column: 1;
            grid-row: 2;
        }
        .item4 {
            grid-column: 2;
            grid-row: 2;
        }
        .item5 {
            grid-column: 1 / span 3;
            grid-row: 3;
        }
        .grid-container2 {
            display: grid;
            grid-gap: 10px;
            background-color: #2196F3;
            padding: 10px;
            text-align: center;
        }
        .grid-container2>div {
            background-color: rgba(255, 255, 255, 0.8);
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
    <h1>CSS <span class="color_h1">Элемент сетки</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_grid_container.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_templates.php">Next &#10095;</a>
    </div>
    <hr>
    <div class="grid-container">
        <div class="grid-item item1"><h1>1</h1></div>
        <div class="grid-item item2"><h1>2</h1></div>
        <div class="grid-item item3"><h1>3</h1></div>
        <div class="grid-item item4"><h1>4</h1></div>
        <div class="grid-item item5"><h1>5</h1></div>
    </div>
    <p>
        <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_item.html">Попробуйте сами &raquo;</a>
    </p>
    <hr>

    <h2>Дочерние элементы</h2>
    <p><em>Контейнер</em> сетки содержит <em>элементы</em> сетки.</p>
    <p>По умолчанию у контейнера есть один элемент сетки для каждого столбца в каждой строке, но вы можете стилизовать элементы сетки так, чтобы они охватывали несколько столбцов и / или строк.</p>
    <hr>

    <h2>Свойство grid-column:</h2>
    <p>Свойство <code class="w3-codespan">grid-column</code> определяет, в какие столбцы помещать элемент.</p>
    <p>Вы определяете, где элемент начнется, и где он закончится.</p>
    <div class="grid-container2" style="grid-template-columns:auto auto auto auto auto auto">
        <div style="grid-column:1/span 4;background-color:#ffffff;"><h1>1</h1></div>
        <div><h1>2</h1></div>
        <div><h1>3</h1></div>
        <div><h1>4</h1></div>
        <div><h1>5</h1></div>
        <div><h1>6</h1></div>
        <div><h1>7</h1></div>
        <div><h1>8</h1></div>
        <div><h1>9</h1></div>
        <div><h1>10</h1></div>
        <div><h1>11</h1></div>
        <div><h1>12</h1></div>
        <div><h1>13</h1></div>
        <div><h1>14</h1></div>
        <div><h1>15</h1></div>
    </div>
    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Свойство <em>grid-column</em> является сокращенным свойством для свойств <em>grid-column-start</em> и <em>grid-column-end</em>.</p>
    </div>

    <p>Чтобы разместить элемент, вы можете обратиться к <em>номерам строк</em> или использовать ключевое слово &quot;span&quot;, чтобы определить, сколько столбцов будет охватывать элемент.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Сделайте так, чтобы &quot;item1&quot; начинался в столбце 1 и заканчивался в столбце 5:</p>
        <div class="w3-code notranslate cssHigh">
            .item1 {<br>
            &nbsp;
            grid-column: 1 / 5;<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-column_line.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Сделайте так, чтобы &quot;item1&quot; начинался со столбцов 1 и 3:</p>
        <div class="w3-code notranslate cssHigh">
            .item1 {<br>
            &nbsp;
            grid-column: 1 / span 3;<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-column.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Сделайте так, чтобы &quot;item2&quot; начинался со столбцов 2 и 3:</p>
        <div class="w3-code notranslate cssHigh">
            .item2 {<br>
            &nbsp;
            grid-column: 2 / span 3;<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-column2.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <hr>

    <h2>Свойство grid-row:</h2>
    <p>Свойство <code class="w3-codespan">grid-row</code> определяет, в какую строку помещать элемент.</p>
    <p>Вы определяете, где элемент начнется, и где он закончится.</p>
    <div class="grid-container2" style="grid-template-columns:auto auto auto auto auto auto">
        <div style="grid-row:1/span 3;background-color:#fff;"><h1>1</h1></div>
        <div><h1>2</h1></div>
        <div><h1>3</h1></div>
        <div><h1>4</h1></div>
        <div><h1>5</h1></div>
        <div><h1>6</h1></div>
        <div><h1>7</h1></div>
        <div><h1>8</h1></div>
        <div><h1>9</h1></div>
        <div><h1>10</h1></div>
        <div><h1>11</h1></div>
        <div><h1>12</h1></div>
        <div><h1>13</h1></div>
        <div><h1>14</h1></div>
        <div><h1>15</h1></div>
        <div><h1>16</h1></div>
    </div>
    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Свойство <em>grid-row</em> является сокращенным свойством для свойств <em>grid-row-start</em> и <em>grid-row-end</em>.</p>
    </div>

    <p>Чтобы разместить элемент, вы можете обратиться к <em>номерам строк</em>, или использовать ключевое слово &quot;span&quot; чтобы определить, сколько строк будет охватывать элемент:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Сделайте так, чтобы &quot;item1&quot; начинался в строке 1 и заканчивался в строке 4:</p>
        <div class="w3-code notranslate cssHigh">
            .item1 {<br>
            &nbsp;
            grid-row: 1 / 4;<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-row1.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Сделайте так, чтобы &quot;item1&quot; начинался со строки 1 и занимал 2 строки:</p>
        <div class="w3-code notranslate cssHigh">
            .item1 {<br>
            &nbsp;
            grid-row: 1 / span 2;<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-row2.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <hr>

    <h2>Свойство grid-area</h2>
    <p>Свойство <code class="w3-codespan">grid-area</code> можно использовать как сокращенное свойство для
        <em>grid-row-start, grid-column-start, grid-row-end</em> и <em>grid-column-end</em> свойств.</p>

    <div class="grid-container2" style="grid-template-columns:auto auto auto auto auto auto">
        <div><h1>1</h1></div>
        <div><h1>2</h1></div>
        <div><h1>3</h1></div>
        <div><h1>4</h1></div>
        <div><h1>5</h1></div>
        <div><h1>6</h1></div>
        <div><h1>7</h1></div>
        <div style="grid-area:1/2/5/6;background-color:#fff;"><h1>8</h1></div>
        <div><h1>9</h1></div>
        <div><h1>10</h1></div>
        <div><h1>11</h1></div>
        <div><h1>12</h1></div>
        <div><h1>13</h1></div>
        <div><h1>14</h1></div>
        <div><h1>15</h1></div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Сделайте так, чтобы &quot;item8&quot; начинался в строке 1 и строке 2 и заканчивался в строке 5 и строке 6:</p>
        <div class="w3-code notranslate cssHigh">
            .item8 {<br>
            &nbsp;
            grid-area: 1 / 2 / 5 / 6;<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-area1.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Сделайте так, чтобы &quot;item8&quot; начинался со строки 2 и строки 1, а также занимал 2 строки и 3 столбца:</p>
        <div class="w3-code notranslate cssHigh">
            .item8 {<br>
            &nbsp;
            grid-area: 2 / 1 / span 2 / span 3;<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-area2.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <h2>Наименование элементов сетки</h2>
    <p>Свойство <code class="w3-codespan">grid-area</code> также можно использовать для присвоения имен элементам сетки.</p>

    <div class="grid-container2" style="grid-template-areas:
    'header header header header header header'
    'menu main main main right right'
    'menu footer footer footer footer footer';">
        <div style="grid-area: header"><h3>Header</h3></div>
        <div style="grid-area: menu"><h3>Menu</h3></div>
        <div style="grid-area: main"><h3>Main</h3></div>
        <div style="grid-area: right"><h3>Right</h3></div>
        <div style="grid-area: footer"><h3>Footer</h3></div>
    </div>

    <p>На именованные элементы сетки можно ссылаться с помощью свойства <code class="w3-codespan">grid-template-areas</code> контейнера сетки.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Item1 получает имя &quot;myArea&quot; и охватывает все пять столбцов в сетке с пятью столбцами:</p>
        <div class="w3-code notranslate cssHigh">
            .item1 {<br>&nbsp; grid-area:
            myArea;<br>}<br>.grid-container {<br>&nbsp; grid-template-areas: 'myArea myArea
            myArea myArea myArea';<br>} <br></div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-area_named.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <p>Каждый ряд определяется апострофами (' ')</p>
    <p>Столбцы в каждой строке определяются внутри апострофов, разделенных пробелом.</p>
    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Знак периода представляет элемент сетки без имени.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Пусть &quot;myArea&quot; охватывает два столбца в сетке с пятью столбцами (знаки периодов представляют элементы без имени):</p>
        <div class="w3-code notranslate cssHigh">
            .item1 {<br>&nbsp; grid-area:
            myArea;<br>}<br>.grid-container {<br>&nbsp; grid-template-areas: 'myArea myArea
            . . .';<br>} <br></div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-area_named1.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <p>Чтобы определить две строки, определите столбец второй строки внутри другого набора апострофов:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Сделайте так, чтобы &quot;item1&quot; занимал два столбца и две строки:</p>
        <div class="w3-code notranslate cssHigh">
            .grid-container {<br>&nbsp; grid-template-areas: 'myArea myArea
            . . .' 'myArea myArea . . .';<br>} <br></div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-area_named2.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Назовите все элементы и создайте готовый шаблон веб-страницы:</p>
        <div class="w3-code notranslate cssHigh">
            .item1 { grid-area: header; }<br>.item2 { grid-area: menu; }<br>.item3 {
            grid-area: main; }<br>.item4 { grid-area: right; }<br>.item5 { grid-area:
            footer; }<br><br>.grid-container {<br>&nbsp; grid-template-areas:<br>&nbsp;&nbsp;&nbsp;
            'header header header header header header'<br>&nbsp;&nbsp;&nbsp; 'menu main
            main main right right'<br>&nbsp;&nbsp;&nbsp; 'menu footer footer footer footer
            footer';<br>} <br></div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-area_named3.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <hr>

    <h2>Порядок элементов</h2>
    <p>Макет сетки позволяет нам размещать элементы где угодно.</p>
    <div class="w3-panel w3-note">
        <p>Первый элемент в коде HTML не должен отображаться как первый элемент в сетке.</p>
    </div>

    <div class="grid-container2" style="grid-template-columns:auto auto auto">
        <div style="grid-area: 1 / 3 / 2 / 4;"><h1>1</h1></div>
        <div style="grid-area: 2 / 3 / 3 / 4;"><h1>2</h1></div>
        <div style="grid-area: 1 / 1 / 2 / 2;"><h1>3</h1></div>
        <div style="grid-area: 1 / 2 / 2 / 3;"><h1>4</h1></div>
        <div style="grid-area: 2 / 1 / 3 / 2;"><h1>5</h1></div>
        <div style="grid-area: 2 / 2 / 3 / 3;"><h1>6</h1></div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .item1 { grid-area: 1 / 3 / 2 / 4; }<br>.item2 { grid-area: 2 / 3 / 3 / 4; }<br>
            .item3 { grid-area: 1 / 1 / 2 / 2; }<br>.item4 { grid-area: 1 / 2 / 2 / 3; }<br>
            .item5 { grid-area: 2 / 1 / 3 / 2; }<br>.item6 { grid-area: 2 / 2 / 3 / 3; }
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_flexible_order.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <p>Вы можете изменить порядок для определенных размеров экрана, используя медиа-запросы:</p>

    <style>
        .examplemediaqueries {
            grid-row: 1 / span 2;
        }
        @media only screen and (max-width: 500px) {
            .examplemediaqueries {
                grid-row: 2;
                grid-column: 1 / span 2;
            }
        }
    </style>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            @media only screen and (max-width: 500px) {<br>&nbsp; .item1 { grid-area: 1 /
            span 3 / 2 / 4; }<br>&nbsp; .item2 { grid-area: 3 / 3 / 4 / 4; }<br>&nbsp;
            .item3 { grid-area: 2 / 1 / 3 / 2; }<br>&nbsp; .item4 { grid-area: 2 / 2 /
            span 2 / 3; }<br>&nbsp; .item5 { grid-area: 3 / 1 / 4 / 2; }<br>&nbsp; .item6
            { grid-area: 2 / 3 / 3 / 4; }<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_flexible_order2.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <!--
    <hr>
    <h2>Свойство justify-self</h2>
    <p>Свойство <code class="w3-codespan">justify-self</code> может быть использовано для выравнивания содержимого внутри элемента.</p>
    <div class="w3-white notranslate w3-padding">
      <div class="grid-container2" style="grid-template-columns:auto auto auto">
        <div style="justify-self: center;"><h1>1</h1></div>
        <div><h1>2</h1></div>
        <div><h1>3</h1></div>
        <div><h1>4</h1></div>
        <div><h1>5</h1></div>
        <div><h1>6</h1></div>
      </div>
    </div>

    <div class="w3-example">
    <h3>Пример</h3>
    <div class="w3-code notranslate cssHigh">
      .item1 {<br>
      &nbsp;
      justify-self: center;<br>}
    </div>
    <p>
    <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-template-columns.html">Попробуйте сами &raquo;</a>
    </p>
    </div>

    <div class="w3-example">
    <h3>Пример</h3>
    <div class="w3-code notranslate cssHigh">
      .item1 {<br>
      &nbsp;
      justify-self: start;<br>}
    </div>
    <p>
    <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-template-columns.html">Попробуйте сами &raquo;</a>
    </p>
    </div>

    <div class="w3-example">
    <h3>Пример</h3>
    <div class="w3-code notranslate cssHigh">
      .item1 {<br>
      &nbsp;
      justify-self: end;<br>}
    </div>
    <p>
    <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-template-columns.html">Попробуйте сами &raquo;</a>
    </p>
    </div>

    <div class="w3-example">
    <h3>Пример</h3>
    <div class="w3-code notranslate cssHigh">
      .item1 {<br>
      &nbsp;
      justify-self: stretch;<br>}
    </div>
    <p>
    <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-template-columns.html">Попробуйте сами &raquo;</a>
    </p>
    </div>
    -->

    <!--
    <hr>

    <h2>The align-self Property</h2>
    <p>The <code class="w3-codespan">align-self</code> property can be used to vertically align the content inside an item.</p>

    <div class="w3-example">
    <h3>Пример</h3>
    <div class="w3-code notranslate cssHigh">
      .item1 {<br>
      &nbsp;
      align-self: end;<br>}
    </div>
    <div class="w3-white notranslate w3-padding">
      <div class="grid-container2" style="grid-template-columns:auto auto auto;grid-template-rows:150px 150px">
        <div style="align-self: end;"><h1>1</h1></div>
        <div><h1>2</h1></div>
        <div><h1>3</h1></div>
        <div><h1>4</h1></div>
        <div><h1>5</h1></div>
        <div><h1>6</h1></div>
      </div>
    </div>
    <p>
    <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-template-columns.html">Попробуйте сами &raquo;</a>
    </p>
    </div>

    <div class="w3-example">
    <h3>Пример</h3>
    <div class="w3-code notranslate cssHigh">
      .item1 {<br>
      &nbsp;
      align-self: start;<br>}
    </div>
    <div class="w3-white notranslate w3-padding">
      <div class="grid-container2" style="grid-template-columns:auto auto auto;grid-template-rows:150px 150px">
        <div style="align-self: start;"><h1>1</h1></div>
        <div><h1>2</h1></div>
        <div><h1>3</h1></div>
        <div><h1>4</h1></div>
        <div><h1>5</h1></div>
        <div><h1>6</h1></div>
      </div>
    </div>
    <p>
    <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-template-columns.html">Попробуйте сами &raquo;</a>
    </p>
    </div>

    <div class="w3-example">
    <h3>Пример</h3>
    <div class="w3-code notranslate cssHigh">
      .item1 {<br>
      &nbsp;
      align-self: center;<br>}
    </div>
    <div class="w3-white notranslate w3-padding">
      <div class="grid-container2" style="grid-template-columns:auto auto auto;grid-template-rows:150px 150px">
        <div style="align-self: center;"><h1>1</h1></div>
        <div><h1>2</h1></div>
        <div><h1>3</h1></div>
        <div><h1>4</h1></div>
        <div><h1>5</h1></div>
        <div><h1>6</h1></div>
      </div>
    </div>
    <p>
    <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-template-columns.html">Попробуйте сами &raquo;</a>
    </p>
    </div>

    <div class="w3-example">
    <h3>Пример</h3>
    <div class="w3-code notranslate cssHigh">
      .item1 {<br>
      &nbsp;
      align-self: stretch;<br>}
    </div>
    <div class="w3-white notranslate w3-padding">
      <div class="grid-container2" style="grid-template-columns:auto auto auto;grid-template-rows:150px 150px">
        <div style="align-self: stretch;"><h1>1</h1></div>
        <div><h1>2</h1></div>
        <div><h1>3</h1></div>
        <div><h1>4</h1></div>
        <div><h1>5</h1></div>
        <div><h1>6</h1></div>
      </div>
    </div>
    <p>
    <a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-template-columns.html">Попробуйте сами &raquo;</a>
    </p>
    </div>
    <hr>

    <h2>CSS Grid Layout Item Properties</h2>
    <p>The following table lists the CSS properties used with grid items:</p>
    <table class="w3-table-all notranslate">
      <tr>
        <th style="width:25%">Свойство</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td><a href="../cssref/pr_grid-column-start.php">grid-column-start</a></td>
        <td>Specifies where to start the grid item</td>
      </tr>
      <tr>
        <td><a href="../cssref/pr_grid-column-end.php">grid-column-end</a></td>
        <td>Specifies where to end the grid item</td>
      </tr>
      <tr>
        <td><a href="../cssref/pr_grid-row-start.php">grid-row-start</a></td>
        <td>Specifies where to start the grid item</td>
      </tr>
      <tr>
        <td><a href="../cssref/pr_grid-row-end.php">grid-row-end</a></td>
        <td>Specifies where to end the grid item</td>
      </tr>
      <tr>
        <td><a href="../cssref/pr_grid-column.php">grid-column</a></td>
        <td>A shorthand property for the <em>grid-column-start</em> and the <em>grid-column-end</em> properties</td>
      </tr>
      <tr>
        <td><a href="../cssref/pr_grid-row.php">grid-row</a></td>
        <td>A shorthand property for the <em>grid-row-start</em> and the <em>grid-row-end</em> properties</td>
      </tr>
      <tr>
        <td><a href="../cssref/pr_grid-area.php">grid-area</a></td>
        <td>Specifies a name for the grid item</td>
      </tr>
      <tr>
        <td><a href="../cssref/pr_grid_justify-self.php">justify-self</a></td>
        <td>Specifies how to align content aling the row axis</td>
      </tr>
      <tr>
        <td><a href="../cssref/pr_grid_align-self.php">align-self</a></td>
        <td>Specifies how to align content aling the column axis</td>
      </tr>
    </table>
    -->
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_grid_container.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_templates.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>