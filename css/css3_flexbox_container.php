<?php include '../include/head.php'; ?>

<title>CSS Flexbox Container - Гибкий контейнер. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Flex Container - Гибкий контейнер. Свойства flex контейнера. Идеальное центрирование. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
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
    <h1>CSS <span class="color_h1">Гибкий (flex)</span> контейнер</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_flexbox.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_flexbox_items.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Родительский элемент (контейнер)</h2>
    <p>Как мы указали в предыдущей главе, это гибкий <strong>контейнер</strong> (синяя область) с тремя гибкими <strong>элементами</strong>:</p>

    <div class="flex-container2">
        <div class="flex-item2"><h1>1</h1></div>
        <div class="flex-item2"><h1>2</h1></div>
        <div class="flex-item2"><h1>3</h1></div>
    </div>

    <p>Гибкий (flex) контейнер становится гибким, если для свойства <code class="w3-codespan">display</code> установлено значение <code class="w3-codespan">flex</code>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>}</div>
        <a class="w3-btn w3-margin-bottom" target="_blank" href="../csstryit/trycss3_flexbox.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Свойства гибкого (flex) контейнера:</p>

    <ul>
        <li><a href="#flex-direction"><code class="w3-codespan">flex-direction</code></a></li>
        <li><a href="#flex-wrap"><code class="w3-codespan">flex-wrap</code></a></li>
        <li><a href="#flex-flow"><code class="w3-codespan">flex-flow</code></a></li>
        <li><a href="#justify-content"><code class="w3-codespan">justify-content</code></a></li>
        <li><a href="#align-items"><code class="w3-codespan">align-items</code></a></li>
        <li><a href="#align-content"><code class="w3-codespan">align-content</code></a></li>
    </ul>
    <hr>

    <div class="anchor-container"><a id="flex-direction"></a></div>
    <h2>Свойство flex-direction</h2>
    <p>Свойство <code class="w3-codespan">flex-direction</code> определяет, в каком направлении контейнер хочет складывать гибкие элементы.</p>

    <div class="flex-container2" style="flex-direction:column">
        <div class="flex-item2"><h1>1</h1></div>
        <div class="flex-item2"><h1>2</h1></div>
        <div class="flex-item2"><h1>3</h1></div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Значение <code class="w3-codespan">column</code> складывает гибкие элементы по вертикали (сверху вниз):</p>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>&nbsp;
            flex-direction: column;<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_flex-direction_column.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Значение <code class="w3-codespan">column-reverse</code> складывает гибкие элементы по вертикали (но снизу вверх):</p>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>&nbsp;
            flex-direction: column-reverse;<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_flex-direction_column-reverse.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Значение <code class="w3-codespan">row</code> складывает гибкие элементы по горизонтали (слева направо):</p>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>&nbsp;
            flex-direction: row;<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_flex-direction_row.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Значение <code class="w3-codespan">row-reverse</code> складывает гибкие элементы по горизонтали (но справа налево):</p>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>&nbsp;
            flex-direction: row-reverse;<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_flex-direction_row-reverse.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <hr>

    <div class="anchor-container"><a id="flex-wrap"></a></div>
    <h2>Свойство flex-wrap</h2>
    <p>Свойство <code class="w3-codespan">flex-wrap</code> определяет, должны ли элементы гибкости оборачиваться или нет.</p>

    <p>В приведенных ниже примерах есть 12 гибких элементов, чтобы лучше продемонстрировать свойство <code class="w3-codespan">flex-wrap</code>.</p>

    <div class="flex-container2" style="flex-wrap:wrap">
        <div class="flex-item2"><h1>1</h1></div>
        <div class="flex-item2"><h1>2</h1></div>
        <div class="flex-item2"><h1>3</h1></div>
        <div class="flex-item2"><h1>4</h1></div>
        <div class="flex-item2"><h1>5</h1></div>
        <div class="flex-item2"><h1>6</h1></div>
        <div class="flex-item2"><h1>7</h1></div>
        <div class="flex-item2"><h1>8</h1></div>
        <div class="flex-item2"><h1>9</h1></div>
        <div class="flex-item2"><h1>10</h1></div>
        <div class="flex-item2"><h1>11</h1></div>
        <div class="flex-item2"><h1>12</h1></div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Значение <code class="w3-codespan">wrap</code> указывает, что гибкие элементы будут переноситься при необходимости:</p>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>&nbsp;
            flex-wrap: wrap;<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_flex-wrap_wrap.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Значение <code class="w3-codespan">nowrap</code> указывает, что гибкие элементы не будут переноситься (по умолчанию):</p>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>&nbsp;
            flex-wrap: nowrap;<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_flex-wrap_nowrap.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Значение <code class="w3-codespan">wrap-reverse</code> указывает, что гибкие элементы будут упакованы при необходимости в обратном порядке:</p>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>&nbsp;
            flex-wrap: wrap-reverse;<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_flex-wrap_wrap-reverse.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <hr>

    <div class="anchor-container"><a id="flex-flow"></a></div>
    <h2>Свойство flex-flow</h2>
    <p>Свойство <code class="w3-codespan">flex-flow</code> - это сокращенное свойство для установки свойств <code class="w3-codespan">flex-direction</code> и <code class="w3-codespan">flex-wrap</code>.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>&nbsp;
            flex-flow: row wrap;<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_flex-flow_row_wrap.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <hr>

    <div class="anchor-container"><a id="justify-content"></a></div>
    <h2>Свойство justify-content</h2>
    <p>Свойство <code class="w3-codespan">justify-content</code> используется для выравнивания гибких элементов:</p>
    <div class="flex-container2" style="justify-content:center">
        <div class="flex-item2"><h1>1</h1></div>
        <div class="flex-item2"><h1>2</h1></div>
        <div class="flex-item2"><h1>3</h1></div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Значение <code class="w3-codespan">center</code> выравнивает гибкие элементы в центре контейнера:</p>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>&nbsp;
            justify-content: center;<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_justify-content_center.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Значение <code class="w3-codespan">flex-start</code> выравнивает гибкие элементы в начале контейнера (по умолчанию):</p>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>&nbsp;
            justify-content: flex-start;<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_justify-content_flex-start.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Значение <code class="w3-codespan">flex-end</code> выравнивает гибкие элементы в конце контейнера:</p>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>&nbsp;
            justify-content: flex-end;<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_justify-content_flex-end.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Значение <code class="w3-codespan">space-around</code> отображает гибкие элементы с пробелом до, между и после строк:</p>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>&nbsp;
            justify-content: space-around;<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_justify-content_space-around.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Значение <code class="w3-codespan">space-between</code> отображает элементы гибкости с пробелом между строками:</p>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>&nbsp;
            justify-content: space-between;<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_justify-content_space-between.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <hr>

    <div class="anchor-container"><a id="align-items"></a></div>
    <h2>Свойство align-items</h2>
    <p>Свойство <code class="w3-codespan">align-items</code> используется для выравнивания гибких элементов.</p>

    <div class="flex-container2" style="align-items:center;height:200px;">
        <div class="flex-item2"><h1>1</h1></div>
        <div class="flex-item2"><h1>2</h1></div>
        <div class="flex-item2"><h1>3</h1></div>
    </div>

    <p>В этих примерах мы используем контейнер высотой 200 пикселей, чтобы лучше продемонстрировать свойство <code class="w3-codespan">align-items</code>.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Значение <code class="w3-codespan">center</code> выравнивает гибкие элементы в середине контейнера:</p>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>&nbsp; height: 200px;<br>&nbsp;
            align-items: center;<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_align-items_center.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Значение <code class="w3-codespan">flex-start</code> выравнивает гибкие элементы в верхней части контейнера:</p>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>&nbsp; height: 200px;<br>&nbsp;
            align-items: flex-start;<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_align-items_flex-start.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Значение <code class="w3-codespan">flex-end</code> выравнивает гибкие элементы в нижней части контейнера:</p>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>&nbsp; height: 200px;<br>&nbsp;
            align-items: flex-end;<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_align-items_flex-end.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Значение <code class="w3-codespan">stretch</code> растягивает гибкие элементы, чтобы заполнить контейнер (по умолчанию):</p>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>&nbsp; height: 200px;<br>&nbsp;
            align-items: stretch;<br>}
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_align-items_stretch.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Значение <code class="w3-codespan">baseline</code> выравнивает гибкие элементы, например выравнивает их базовые линии:</p>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>&nbsp; height: 200px;<br>&nbsp;
            align-items: baseline;<br>}
        </div>
        <p><strong>Примечание:</strong> в примере используется другой размер шрифта, чтобы продемонстрировать выравнивание элементов по базовой линии текста.:</p>

        <div class="w3-white notranslate w3-padding">
            <div style="position:relative;">
                <hr style="position:absolute;color:red;background-color:red;border-color:red;top:42px;width:100%">
            </div>
            <div class="flex-container2" style="align-items:baseline;height:100px;">
                <div class="flex-item2"><h1>1</h1></div>
                <div class="flex-item2"><h6>2</h6></div>
                <div class="flex-item2"><h3>3</h3></div>
                <div class="flex-item2"><small>4</small></div>
            </div>
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_align-items_baseline.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <hr>

    <div class="anchor-container"><a id="align-content"></a></div>
    <h2>Свойство align-content</h2>
    <p>Свойство <code class="w3-codespan">align-content</code> используется для выравнивания гибких линий.</p>
    <div class="flex-container2" style="flex-wrap:wrap;align-content:space-between;height:300px;">
        <div class="flex-item2"><h1>1</h1></div>
        <div class="flex-item2"><h1>2</h1></div>
        <div class="flex-item2"><h1>3</h1></div>
        <div class="flex-item2"><h1>4</h1></div>
        <div class="flex-item2"><h1>5</h1></div>
        <div class="flex-item2"><h1>6</h1></div>
        <div class="flex-item2"><h1>7</h1></div>
        <div class="flex-item2"><h1>8</h1></div>
        <div class="flex-item2"><h1>9</h1></div>
        <div class="flex-item2"><h1>10</h1></div>
        <div class="flex-item2"><h1>11</h1></div>
        <div class="flex-item2"><h1>12</h1></div>
    </div>
    <p>В этих примерах мы используем контейнер высотой 600 пикселей со свойством <code class="w3-codespan">flex-wrap</code> установленным на <code class="w3-codespan">wrap</code>, чтобы лучше продемонстрировать свойство <code class="w3-codespan">align-content</code>.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Значение <code class="w3-codespan">space-between</code> отображает гибкие линии с равным пространством между ними:</p>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>&nbsp; height: 600px;<br>&nbsp;
            flex-wrap: wrap;<br>&nbsp;
            align-content: space-between;<br>
            }
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_align-content_space-between.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Значение <code class="w3-codespan">space-around</code> отображает гибкие линии с пробелом до, между и после них:</p>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>&nbsp; height: 600px;<br>&nbsp;
            flex-wrap: wrap;<br>&nbsp;
            align-content: space-around;<br>
            }
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_align-content_space-around.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Значение <code class="w3-codespan">stretch</code> растягивает гибкие линии, чтобы занять оставшееся пространство (по умолчанию):</p>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>&nbsp; height: 600px;<br>&nbsp;
            flex-wrap: wrap;<br>&nbsp;
            align-content: stretch;<br>
            }
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_align-content_stretch.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Значение <code class="w3-codespan">center</code> отображает гибкие линии в середине контейнера:</p>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>&nbsp; height: 600px;<br>&nbsp;
            flex-wrap: wrap;<br>&nbsp;
            align-content: center;<br>
            }
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_align-content_center.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Значение <code class="w3-codespan">flex-start</code> отображает гибкие линии в начале контейнера:</p>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>&nbsp; height: 600px;<br>&nbsp;
            flex-wrap: wrap;<br>&nbsp;
            align-content: flex-start;<br>
            }
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_align-content_flex-start.html">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Значение <code class="w3-codespan">flex-end</code>  отображает гибкие линии в конце контейнера:</p>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp;
            display: flex;<br>&nbsp; height: 600px;<br>&nbsp;
            flex-wrap: wrap;<br>&nbsp;
            align-content: flex-end;<br>
            }
        </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_align-content_flex-end.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <hr>

    <h2>Идеальное центрирование</h2>
    <p>В следующем примере мы решим очень распространенную проблему стиля: идеальное центрирование.</p>
    <div class="flex-container2" style="justify-content:center;align-items:center;height:300px;">
        <div class="flex-item2" style="height:100px;width:100px;"></div>
    </div>

    <p><strong>РЕШЕНИЕ:</strong> Установите для свойств <code class="w3-codespan">justify-content</code> и <code class="w3-codespan">align-items</code> значение <code class="w3-codespan">center</code>, и гибкий элемент будет идеально центрирован:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp; display: flex;<br>&nbsp; height: 300px;<br><strong>&nbsp; justify-content:
                center;<br>&nbsp; align-items: center;<br></strong>}<br> </div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_perfect_center.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <hr>

    <h2>Свойства контейнера CSS Flexbox</h2>
    <p>В следующей таблице перечислены все свойства контейнера CSS Flexbox:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:25%">Свойства</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_align-content.php">align-content</a></td>
            <td>Изменяет поведение свойства flex-wrap. Он похож на align-items, но вместо выравнивания гибких элементов он выравнивает гибкие линии</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_align-items.php">align-items</a></td>
            <td>Вертикальное выравнивание гибких элементов, когда элементы не используют все доступное пространство на поперечной оси</td>
        </tr>
        <tr>
            <td><a href="../cssref/pr_class_display.php">display</a></td>
            <td>Определяет тип поля, используемого для элемента HTML</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_flex-direction.php">flex-direction</a></td>
            <td>Задает направление гибких элементов внутри гибкого контейнера</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_flex-flow.php">flex-flow</a></td>
            <td>Сокращенное свойство для flex-direction и flex-wrap</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_flex-wrap.php">flex-wrap</a></td>
            <td>Определяет, должны ли гибкие элементы оборачиваться или нет, если для них недостаточно места на одной гибкой линии</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_justify-content.php">justify-content</a></td>
            <td>Горизонтально выравнивает гибкие элементы, когда элементы не используют все доступное пространство на главной оси</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_flexbox.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_flexbox_items.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>