<?php include '../include/head.php'; ?>

<title>CSS Flexbox Элементы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Flex элементы. Гибкие (адаптивные) элементы. Свойства гибкого элемента. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        .flex-container3 {
            display: -webkit-flex;
            display: flex;
            background-color: #f1f1f1;
            text-align: center;
            color: white;
        }

        .flex-item3 {
            background-color: dodgerblue;
            width: 100px;
            margin: 10px;
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
    <h1>CSS <span class="color_h1">Flex</span> Элементы</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_flexbox_container.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_flexbox_responsive.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Дочерние элементы</h2>
    <p>Прямые дочерние элементы гибкого контейнера автоматически становятся гибкими (flex) элементами.</p>

    <div class="flex-container3">
        <div class="flex-item3"><h1>1</h1></div>
        <div class="flex-item3"><h1>2</h1></div>
        <div class="flex-item3"><h1>3</h1></div>
        <div class="flex-item3"><h1>4</h1></div>
    </div>

    <p>Элемент выше представляет четыре синих гибких элемента внутри серого гибкого контейнера.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;flex-container&quot;&gt;<br>&nbsp; &lt;div&gt;1&lt;/div&gt;<br>&nbsp;
            &lt;div&gt;2&lt;/div&gt;<br>&nbsp; &lt;div&gt;3&lt;/div&gt; <br>&nbsp;
            &lt;div&gt;4&lt;/div&gt;<br>&lt;/div&gt;
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_item.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <p>Свойства гибкого элемента:</p>
    <ul>
        <li><a href="#order"><code class="w3-codespan">order</code></a></li>
        <li><a href="#flex-grow"><code class="w3-codespan">flex-grow</code></a></li>
        <li><a href="#flex-shrink"><code class="w3-codespan">flex-shrink</code></a></li>
        <li><a href="#flex-basis"><code class="w3-codespan">flex-basis</code></a></li>
        <li><a href="#flex"><code class="w3-codespan">flex</code></a></li>
        <li><a href="#align-self"><code class="w3-codespan">align-self</code></a></li>
    </ul>
    <hr>

    <div class="anchor-container"><a id="order"></a></div>
    <h2>Свойство order</h2>
    <p>Свойство <code class="w3-codespan">order</code> определяет порядок гибких элементов.</p>
    <div class="flex-container3">
        <div style="order:3" class="flex-item3"><h1>1</h1></div>
        <div style="order:2" class="flex-item3"><h1>2</h1></div>
        <div style="order:4" class="flex-item3"><h1>3</h1></div>
        <div style="order:1" class="flex-item3"><h1>4</h1></div>
    </div>

    <p>Первый гибкий элемент в коде не обязательно должен отображаться как первый элемент в макете.</p>
    <p>Значение order должно быть числом, значение по умолчанию - 0.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Свойство <em>order</em> может изменять порядок гибких элементов:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;flex-container&quot;&gt;<br>&nbsp; &lt;div style=&quot;order: 3&quot;&gt;1&lt;/div&gt;<br>&nbsp;
            &lt;div style=&quot;order: 2&quot;&gt;2&lt;/div&gt;<br>&nbsp; &lt;div style=&quot;order: 4&quot;&gt;3&lt;/div&gt; <br>&nbsp;
            &lt;div style=&quot;order: 1&quot;&gt;4&lt;/div&gt;<br>&lt;/div&gt;
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_order_2.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <hr>

    <div class="anchor-container"><a id="flex-grow"></a></div>
    <h2>Свойство flex-grow</h2>
    <p>Свойство <code class="w3-codespan">flex-grow</code> определяет, насколько гибкий элемент будет расти относительно остальных гибких элементов.</p>
    <div class="flex-container3">
        <div style="flex-grow:1" class="flex-item3"><h1>1</h1></div>
        <div style="flex-grow:1" class="flex-item3"><h1>2</h1></div>
        <div style="flex-grow:8" class="flex-item3"><h1>3</h1></div>
    </div>
    <p>Значение должно быть числом, значение по умолчанию - 0.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Сделайте так, чтобы третий гибкий элемент увеличивался в восемь раз быстрее, чем другие гибкие элементы:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;flex-container&quot;&gt;<br>&nbsp; &lt;div style=&quot;flex-grow: 1&quot;&gt;1&lt;/div&gt;<br>&nbsp;
            &lt;div style=&quot;flex-grow: 1&quot;&gt;2&lt;/div&gt;<br>&nbsp; &lt;div style=&quot;flex-grow:
            8&quot;&gt;3&lt;/div&gt; <br>&lt;/div&gt;
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_flex-grow.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <hr>

    <div class="anchor-container"><a id="flex-shrink"></a></div>
    <h2>Свойство flex-shrink</h2>
    <p>Свойство <code class="w3-codespan">flex-shrink</code> определяет, насколько гибкий элемент будет сжиматься по сравнению с остальными гибкими элементами.</p>
    <div class="flex-container3" style="max-width:800px;">
        <div style="flex-shrink:1" class="flex-item3"><h1>1</h1></div>
        <div style="flex-shrink:1" class="flex-item3"><h1>2</h1></div>
        <div style="flex-shrink:0" class="flex-item3"><h1>3</h1></div>
        <div style="flex-shrink:1" class="flex-item3"><h1>4</h1></div>
        <div style="flex-shrink:1" class="flex-item3"><h1>5</h1></div>
        <div style="flex-shrink:1" class="flex-item3"><h1>6</h1></div>
        <div style="flex-shrink:1" class="flex-item3"><h1>7</h1></div>
        <div style="flex-shrink:1" class="flex-item3"><h1>8</h1></div>
        <div style="flex-shrink:1" class="flex-item3"><h1>9</h1></div>
        <div style="flex-shrink:1" class="flex-item3"><h1>10</h1></div>
    </div>
    <p>Значение должно быть числом, значение по умолчанию - 1.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Не позволяйте третьему гибкому элементу сжиматься так же сильно, как другим гибким элементам:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;flex-container&quot;&gt;<br>&nbsp; &lt;div&gt;1&lt;/div&gt;<br>&nbsp; &lt;div&gt;2&lt;/div&gt;<br>&nbsp; &lt;div style=&quot;flex-shrink:
            0&quot;&gt;3&lt;/div&gt;<br>
            &nbsp; &lt;div&gt;4&lt;/div&gt;<br>&nbsp; &lt;div&gt;5&lt;/div&gt;<br>&nbsp; &lt;div&gt;6&lt;/div&gt;<br>&nbsp;
            &lt;div&gt;7&lt;/div&gt;<br>&nbsp; &lt;div&gt;8&lt;/div&gt;<br>&nbsp; &lt;div&gt;9&lt;/div&gt;<br>&nbsp;
            &lt;div&gt;10&lt;/div&gt;<br>&lt;/div&gt;
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_flex-shrink.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <hr>

    <div class="anchor-container"><a id="flex-basis"></a></div>
    <h2>Свойство flex-basis</h2>
    <p>Свойство <code class="w3-codespan">flex-basis</code> определяет начальную длину гибкого элемента.</p>
    <div class="flex-container3">
        <div class="flex-item3"><h1>1</h1></div>
        <div class="flex-item3"><h1>2</h1></div>
        <div style="flex-basis: 200px;" class="flex-item3"><h1>3</h1></div>
        <div class="flex-item3"><h1>4</h1></div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Установите начальную длину третьего гибкого элемента на 200 пикселей:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;flex-container&quot;&gt;<br>&nbsp; &lt;div&gt;1&lt;/div&gt;<br>&nbsp; &lt;div&gt;2&lt;/div&gt;<br>&nbsp; &lt;div style=&quot;flex-basis: 200px&quot;&gt;3&lt;/div&gt;<br>
            &nbsp; &lt;div&gt;4&lt;/div&gt;<br>&lt;/div&gt;
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_flex-basis.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <hr>

    <div class="anchor-container"><a id="flex"></a></div>
    <h2>Свойство flex</h2>
    <p>Свойство <code class="w3-codespan">flex</code> является сокращенным свойством для  <code class="w3-codespan">
            flex-grow</code>, <code class="w3-codespan">flex-shrink</code> и <code class="w3-codespan">flex-basis</code> свойств.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Сделайте третий гибкий элемент не растущим (0), не сжимаемым (0) и с начальной длиной 200 пикселей:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;flex-container&quot;&gt;<br>&nbsp; &lt;div&gt;1&lt;/div&gt;<br>&nbsp; &lt;div&gt;2&lt;/div&gt;<br>&nbsp; &lt;div style=&quot;flex:
            0 0 200px&quot;&gt;3&lt;/div&gt;<br>
            &nbsp; &lt;div&gt;4&lt;/div&gt;<br>&lt;/div&gt;
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_flex.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <hr>

    <div class="anchor-container"><a id="align-self"></a></div>
    <h2>Свойство align-self</h2>
    <p>Свойство <code class="w3-codespan">align-self</code> определяет выравнивание для выбранного элемента внутри гибкого контейнера.</p>
    <p>Свойство <code class="w3-codespan">align-self</code> переопределяет выравнивание по умолчанию, установленное свойством контейнера <code class="w3-codespan">align-items</code>.</p>

    <div class="flex-container3" style="height:200px;">
        <div class="flex-item3"><h1>1</h1></div>
        <div class="flex-item3"><h1>2</h1></div>
        <div style="align-self:center;" class="flex-item3"><h1>3</h1></div>
        <div class="flex-item3"><h1>4</h1></div>
    </div>

    <p>В этих примерах мы используем контейнер высотой 200 пикселей, чтобы лучше продемонстрировать свойство <code class="w3-codespan">align-self</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Выровняйте третий гибкий элемент посередине контейнера:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;flex-container&quot;&gt;<br>&nbsp; &lt;div&gt;1&lt;/div&gt;<br>&nbsp; &lt;div&gt;2&lt;/div&gt;<br>&nbsp; &lt;div style=&quot;align-self:
            center&quot;&gt;3&lt;/div&gt;<br>
            &nbsp; &lt;div&gt;4&lt;/div&gt;<br>&lt;/div&gt;
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_align-self_center.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Выровняйте второй гибкий элемент вверху контейнера, а третий гибкий элемент - внизу контейнера:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;flex-container&quot;&gt;<br>&nbsp; &lt;div&gt;1&lt;/div&gt;<br>
            &nbsp; &lt;div style=&quot;align-self: flex-start&quot;&gt;2&lt;/div&gt;<br>
            &nbsp; &lt;div style=&quot;align-self: flex-end&quot;&gt;3&lt;/div&gt;<br>
            &nbsp; &lt;div&gt;4&lt;/div&gt;<br>&lt;/div&gt;
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_align-self_flex.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <hr>

    <h2>Свойства элементов CSS Flexbox</h2>
    <p>В следующей таблице перечислены все свойства элементов CSS Flexbox:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:25%">Свойство</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_align-self.php">align-self</a></td>
            <td>Задает выравнивание для гибкого элемента (переопределяет свойство гибкого контейнера align-items)</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_flex.php">flex</a></td>
            <td>Сокращенное свойство для свойств flex-grow, flex-shrink и flex-base</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_flex-basis.php">flex-basis</a></td>
            <td>Задает начальную длину гибкого элемента</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_flex-grow.php">flex-grow</a></td>
            <td>Определяет, насколько гибкий элемент будет расти относительно остальных гибких элементов в том же контейнере</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_flex-shrink.php">flex-shrink</a></td>
            <td>Определяет, насколько гибкий элемент будет сжиматься по сравнению с остальными гибкими элементами в том же контейнере</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_order.php">order</a></td>
            <td>Определяет порядок гибких элементов в одном контейнере</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_flexbox_container.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_flexbox_responsive.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>