<?php include '../include/head.php'; ?>

<title>CSS Grid - Контейнер. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Grid - Контейнер. Свойства grid-template-columns, grid-template-rows, justify-content, align-content. Создание макета веб-страницы с помощью сетки. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        .grid-container {
            display: grid;
            grid-gap: 10px;
            grid-template-columns: auto auto auto auto;
            background-color: #2196F3;
            padding: 10px;
            text-align: center;
        }
        .grid-item {
            background-color: rgba(255, 255, 255, 0.8);
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
    <h1>CSS <span class="color_h1">Контейнер сетки</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_grid.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_grid_item.php">Next &#10095;</a>
    </div>
    <hr>
    <div class="grid-container">
        <div class="grid-item item1"><h1>1</h1></div>
        <div class="grid-item item2"><h1>2</h1></div>
        <div class="grid-item item3"><h1>3</h1></div>
        <div class="grid-item item4"><h1>4</h1></div>
        <div class="grid-item item5"><h1>5</h1></div>
        <div class="grid-item item6"><h1>6</h1></div>
        <div class="grid-item item7"><h1>7</h1></div>
        <div class="grid-item item8"><h1>8</h1></div>
    </div>
    <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_container.html">Попробуйте сами &raquo;</a></p>
    <hr>

    <h2>Grid Контейнер</h2>
    <p>Чтобы элемент HTML работал как контейнер сетки, необходимо установить для свойства отображения значение  <em>grid</em> или <em>inline-grid</em>.</p>
    <p>Контейнеры сетки состоят из элементов сетки, размещенных внутри столбцов и строк.</p>
    <hr>

    <h2>Свойство grid-template-columns</h2>
    <p>Свойство <code class="w3-codespan">grid-template-columns</code> определяет количество столбцов в макете сетки и может определять ширину каждого столбца.</p>
    <p>Значение представляет собой разделенный пробелами список, где каждое значение определяет длину соответствующего столбца.</p>
    <p>Если вы хотите, чтобы макет сетки содержал 4 столбца, укажите ширину 4 столбцов или &quot;auto&quot; если все столбцы должны иметь одинаковую ширину.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Сделать сетку из 4 столбцов:</p>
        <div class="w3-code notranslate cssHigh">
            .grid-container {<br>
            &nbsp; display: grid;<br>&nbsp;
            grid-template-columns: auto auto auto auto;<br>}
        </div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-template-columns1.html">Попробуйте сами &raquo;</a></p>
    </div>

    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Если у вас есть более 4 элементов в сетке из 4 столбцов, сетка автоматически добавит новую строку для размещения элементов.</p>
    </div>

    <p>Свойство <code class="w3-codespan">grid-template-columns</code> также можно использовать для указания размера (ширины) столбцов.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Установите размер для 4 столбцов:</p>
        <div class="w3-code notranslate cssHigh">
            .grid-container {<br>
            &nbsp; display: grid;<br>&nbsp;
            grid-template-columns: 80px 200px auto 40px;<br>}
        </div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-template-columns2.html">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>

    <h2>Свойство grid-template-rows</h2>
    <p>Свойство <code class="w3-codespan">grid-template-rows</code> определяет высоту каждой строки.</p>
    <div class="grid-container2" style="grid-template-columns:auto auto auto auto;grid-template-rows:80px 200px;">
        <div><h1>1</h1></div>
        <div><h1>2</h1></div>
        <div><h1>3</h1></div>
        <div><h1>4</h1></div>
        <div><h1>5</h1></div>
        <div><h1>6</h1></div>
        <div><h1>7</h1></div>
        <div><h1>8</h1></div>
    </div>

    <p>Значение представляет собой разделенный пробелами список, где каждое значение определяет высоту соответствующей строки:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .grid-container {<br>
            &nbsp; display: grid;<br>&nbsp;
            grid-template-rows: 80px 200px;<br>}
        </div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_grid-template-rows.html">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>

    <h2>Свойство justify-content</h2>
    <p>Свойство <code class="w3-codespan">justify-content</code> используется для выравнивания всей сетки внутри контейнера.</p>
    <div class="grid-container2" style="grid-template-columns:50px 50px 50px;justify-content: space-evenly;">
        <div><h1>1</h1></div>
        <div><h1>2</h1></div>
        <div><h1>3</h1></div>
        <div><h1>4</h1></div>
        <div><h1>5</h1></div>
        <div><h1>6</h1></div>
    </div>
    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Общая ширина сетки должна быть меньше ширины контейнера, чтобы свойство justify-content имело какой-либо эффект.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .grid-container {<br>
            &nbsp; display: grid;<br>&nbsp;
            justify-content: space-evenly;<br>}
        </div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_justify-content_space-evenly.html">Попробуйте сами &raquo;</a></p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .grid-container {<br>
            &nbsp; display: grid;<br>&nbsp;
            justify-content: space-around;<br>}
        </div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_justify-content_space-around.html">Попробуйте сами &raquo;</a></p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .grid-container {<br>
            &nbsp; display: grid;<br>&nbsp;
            justify-content: space-between;<br>}
        </div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_justify-content_space-between.html">Попробуйте сами &raquo;</a></p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .grid-container {<br>
            &nbsp; display: grid;<br>&nbsp;
            justify-content: center;<br>}
        </div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_justify-content_center.html">Попробуйте сами &raquo;</a></p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .grid-container {<br>
            &nbsp; display: grid;<br>&nbsp;
            justify-content: start;<br>}
        </div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_justify-content_start.html">Попробуйте сами &raquo;</a></p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .grid-container {<br>
            &nbsp; display: grid;<br>&nbsp;
            justify-content: end;<br>}
        </div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_justify-content_end.html">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <h2>Свойство align-content</h2>
    <p>Свойство <code class="w3-codespan">align-content</code> используется для <em>вертикального</em> выравнивания всей сетки внутри контейнера.</p>

    <div class="w3-white notranslate w3-padding">
        <div class="grid-container2" style="height:400px;grid-template-columns:auto auto auto;align-content: center;">
            <div><h1>1</h1></div>
            <div><h1>2</h1></div>
            <div><h1>3</h1></div>
            <div><h1>4</h1></div>
            <div><h1>5</h1></div>
            <div><h1>6</h1></div>
        </div>
    </div>

    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Общая высота сетки должна быть меньше высоты контейнера, чтобы свойство align-content имело какой-либо эффект.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .grid-container {<br>
            &nbsp; display: grid;<br>&nbsp; height: 400px;<br>&nbsp;
            align-content: center;<br>}
        </div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_align-content_center.html">Попробуйте сами &raquo;</a></p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .grid-container {<br>
            &nbsp; display: grid;<br>&nbsp; height: 400px;<br>&nbsp;
            align-content: space-evenly;<br>}
        </div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_align-content_space-evenly.html">Попробуйте сами &raquo;</a></p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .grid-container {<br>
            &nbsp; display: grid;<br>&nbsp; height: 400px;<br>&nbsp;
            align-content: space-around;<br>}
        </div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_align-content_space-around.html">Попробуйте сами &raquo;</a></p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .grid-container {<br>
            &nbsp; display: grid;<br>&nbsp; height: 400px;<br>&nbsp;
            align-content: space-between;<br>}
        </div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_align-content_space-between.html">Попробуйте сами &raquo;</a></p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .grid-container {<br>
            &nbsp; display: grid;<br>&nbsp; height: 400px;<br>&nbsp;
            align-content: start;<br>}
        </div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_align-content_start.html">Попробуйте сами &raquo;</a></p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .grid-container {<br>
            &nbsp; display: grid;<br>&nbsp; height: 400px;<br>&nbsp;
            align-content: end;<br>}
        </div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss_grid_align-content_end.html">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_grid.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_grid_item.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>