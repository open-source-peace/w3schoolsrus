<?php include '../include/head.php'; ?>

<title>CSS Flexbox (Flexible Box). <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Flexbox (Flexible Box). Гибкий блок. Модуль макета CSS Flexbox. Гибкие (адаптивные) элементы. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <link rel="stylesheet" type="text/css" href="../styles/browserref.css">
    <style>
        .flex-container2 {
            display: -webkit-flex;
            display: flex;
            background-color: dodgerblue;
            text-align: center;
        }
        .flex-item2 {
            background-color: #f1f1f1;
            width: 100px;
            margin: 10px;
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
    <h1>CSS <span class="color_h1">Flexbox</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_mediaqueries_ex.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_flexbox_container.php">Next &#10095;</a>
    </div>
    <hr>
    <div class="flex-container2" style="flex-wrap:nowrap">
        <div class="flex-item2"><h1>1</h1></div>
        <div class="flex-item2"><h1>2</h1></div>
        <div class="flex-item2"><h1>3</h1></div>
        <div class="flex-item2"><h1>4</h1></div>
        <div class="flex-item2"><h1>5</h1></div>
        <div class="flex-item2"><h1>6</h1></div>
        <div class="flex-item2"><h1>7</h1></div>
        <div class="flex-item2"><h1>8</h1></div>
    </div>
    <p>
        <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_flex-wrap_nowrap8.html">Попробуйте сами &raquo;</a>
    </p>
    <hr>
    <h2>Модуль макета CSS Flexbox</h2>
    <p>До модуля «Макет Flexbox» было четыре режима макета:</p>
    <ul>
        <li>Блоковый, для разделов на веб-странице</li>
        <li>Встроенный, для текста</li>
        <li>Табличный, для данных двумерной таблицы</li>
        <li>Позиционирование, для явного позиционирования элемента</li>
    </ul>
    <p>Модуль Flexible Box Layout упрощает разработку гибкой адаптивной структуры макета без использования float или позиционирования.</p>
    <hr>

    <h2>Поддержка браузерами</h2>
    <p>Свойства flexbox поддерживаются во всех современных браузерах.</p>
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
                <td>29.0</td>
                <td>11.0</td>
                <td>22.0</td>
                <td>10</td>
                <td>48</td>
            </tr>
        </table>
    </div>
    <hr>

    <h2>Flexbox элементы</h2>
    <p>Чтобы начать использовать модель Flexbox, вам необходимо сначала определить гибкий (flex) контейнер.</p>

    <div class="flex-container2">
        <div class="flex-item2"><h1>1</h1></div>
        <div class="flex-item2"><h1>2</h1></div>
        <div class="flex-item2"><h1>3</h1></div>
    </div>

    <p>Элемент выше представляет собой гибкий контейнер (синяя область) с тремя гибкими элементами.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Гибкий контейнер с тремя гибкими элементами:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;flex-container&quot;&gt;<br>&nbsp; &lt;div&gt;1&lt;/div&gt;<br>&nbsp; &lt;div&gt;2&lt;/div&gt;<br>&nbsp; &lt;div&gt;3&lt;/div&gt;<br>&lt;/div&gt;
        </div>
        <p><a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox.html">Попробуйте сами &raquo;</a></p>
    </div>

    <div class="w3-note w3-panel">
        <p>Вы узнаете больше о гибких контейнерах и гибких элементах в следующих главах на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_mediaqueries_ex.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_flexbox_container.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>