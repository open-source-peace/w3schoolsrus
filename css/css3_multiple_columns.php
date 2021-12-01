<?php include '../include/head.php'; ?>

<title>CSS Несколько столбцов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Несколько столбцов. Многостолбцовый макет. Свойства нескольких столбцов. Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<link rel="stylesheet" href="../styles/browserref.css">
<style>
    .newspaper {
        padding: 15px;
        -webkit-column-count: 3; /* Chrome, Safari, Opera */
        -moz-column-count: 3; /* Firefox */
        column-count: 3;
        -webkit-column-gap: 40px; /* Chrome, Safari, Opera */
        -moz-column-gap: 40px; /* Firefox */
        column-gap: 40px;
        -webkit-column-rule: 1px solid lightgrey; /* Chrome, Safari, Opera */
        -moz-column-rule: 1px solid lightgrey; /* Firefox */
        column-rule: 1px solid lightgrey;
    }
</style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Несколько столбцов</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_pagination.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_user_interface.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS Многостолбцовый макет</h2>
    <p>Многостолбцовый макет CSS позволяет легко определять несколько столбцов текста - как в газетах:</p>
    <div style="border:1px solid #ddd">
        <div class="w3-light-grey w3-center" style="padding:32px 64px"><h3>Daily Ping</h3></div>
        <p class="newspaper">
            <span class="w3-large">Lorem ipsum</span><br> dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
        </p>
    </div>
    <hr>

    <h2>CSS Свойства нескольких столбцов</h2>
    <p>В этой главе вы узнаете о следующих свойствах нескольких столбцов:</p>
    <ul>
        <li><code class="w3-codespan">column-count</code></li>
        <li><code class="w3-codespan">column-gap</code></li>
        <li><code class="w3-codespan">column-rule-style</code></li>
        <li><code class="w3-codespan">column-rule-width</code></li>
        <li><code class="w3-codespan">column-rule-color</code></li>
        <li><code class="w3-codespan">column-rule</code></li>
        <li><code class="w3-codespan">column-span</code></li>
        <li><code class="w3-codespan">column-width</code></li>
    </ul>
    <hr>

    <h2>Поддержка браузерами</h2>
    <p>Числа в таблице указывают первую версию браузера, которая полностью поддерживает свойство.</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tr>
                <th style="width:25%;font-size:16px;text-align:left;">Свойство</th>
                <th style="width:15%;" class="bsChrome" title="Chrome"></th>
                <th style="width:15%;" class="bsEdge" title="Internet Explorer / Edge"></th>
                <th style="width:15%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:15%;" class="bsSafari" title="Safari"></th>
                <th style="width:15%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td style="text-align:left;">column-count</td>
                <td>50.0</td>
                <td>10.0</td>
                <td>52.0</td>
                <td>9.0</td>
                <td>37.0</td>
            </tr>
            <tr>
                <td style="text-align:left;">column-gap</td>
                <td>50.0</td>
                <td>10.0</td>
                <td>52.0</td>
                <td>9.0</td>
                <td>37.0</td>
            </tr>
            <tr>
                <td style="text-align:left;">column-rule</td>
                <td>50.0</td>
                <td>10.0</td>
                <td>52.0</td>
                <td>9.0</td>
                <td>37.0</td>
            </tr>
            <tr>
                <td style="text-align:left;">column-rule-color</td>
                <td>50.0</td>
                <td>10.0</td>
                <td>52.0</td>
                <td>9.0</td>
                <td>37.0</td>
            </tr>
            <tr>
                <td style="text-align:left;">column-rule-style</td>
                <td>50.0</td>
                <td>10.0</td>
                <td>52.0</td>
                <td>9.0</td>
                <td>37.0</td>
            </tr>
            <tr>
                <td style="text-align:left;">column-rule-width</td>
                <td>50.0</td>
                <td>10.0</td>
                <td>52.0</td>
                <td>9.0</td>
                <td>37.0</td>
            </tr>
            <tr>
                <td style="text-align:left;">column-span</td>
                <td>50.0</td>
                <td>10.0</td>
                <td>71.0</td>
                <td>9.0</td>
                <td>37.0</td>
            </tr>
            <tr>
                <td style="text-align:left;">column-width</td>
                <td>50.0</td>
                <td>10.0</td>
                <td>52.0</td>
                <td>9.0</td>
                <td>37.0</td>
            </tr>
        </table>
    </div>
    <hr>

    <h2>CSS Создать несколько столбцов</h2>
    <p>Свойство <code class="w3-codespan">column-count</code> определяет количество столбцов, на которые должен быть разделен элемент.</p>
    <p>В следующем примере текст в элементе &lt;div&gt; будет разделен на 3 столбца:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;&nbsp;column-count: 3;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_column-count.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS Укажите разрыв между столбцами</h2>
    <p>Свойство <code class="w3-codespan">column-gap</code> определяет разрыв между столбцами.</p>
    <p>В следующем примере указывается зазор в 40 пикселей между столбцами:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;&nbsp;column-gap: 40px;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_column-gap.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS Разделитель между столбцами</h2>
    <p>Свойство <code class="w3-codespan">column-rule-style</code> определяет стиль разделителя между столбцами:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;&nbsp;column-rule-style: solid;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_column-rule-style.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Свойство <code class="w3-codespan">column-rule-width</code> определяет ширину разделителя между столбцами:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;&nbsp;column-rule-width: 1px;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_column-rule-width.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Свойство <code class="w3-codespan">column-rule-color</code> определяет цвет разделителя между столбцами:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;&nbsp;column-rule-color: lightblue;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_column-rule-color.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Свойство <code class="w3-codespan">column-rule</code> является сокращенным свойством для установки всех свойств выше column-rule-*.</p>
    <p>В следующем примере задаются ширина, стиль и цвет разделителя между столбцами:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div
            {<br>
            &nbsp;&nbsp;column-rule: 1px solid lightblue;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_column-rule.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Укажите, сколько столбцов должен охватывать элемент</h2>
    <p>Свойство <code class="w3-codespan">column-span</code> указывает, сколько столбцов должен охватывать элемент.</p>
    <p>В следующем примере указывается, что элемент &lt;h2&gt; должен охватывать все столбцы:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            h2 {<br>
            &nbsp;&nbsp;column-span: all;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_column-span.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Укажите ширину столбца</h2>
    <p>Свойство <code class="w3-codespan">column-width</code> определяет рекомендуемую оптимальную ширину для столбцов.</p>
    <p>В следующем примере указывается, что рекомендуемая оптимальная ширина для столбцов должна составлять 100 пикселей:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>
            &nbsp;&nbsp;column-width: 100px;<br>
            }
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_column-width.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS Свойства нескольких столбцов</h2>
    <p>В следующей таблице перечислены все свойства нескольких столбцов:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:28%">Свойство</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_column-count.php">column-count</a></td>
            <td>Определяет количество столбцов, на которые должен быть разбит элемент</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_column-fill.php">column-fill</a></td>
            <td>Определяет, как заполнять столбцы</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_column-gap.php">column-gap</a></td>
            <td>Определяет разрыв между столбцами</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_column-rule.php">column-rule</a></td>
            <td>Сокращенное свойство для установки всех свойств column-rule-*</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_column-rule-color.php">column-rule-color</a></td>
            <td>Определяет цвет разделителя между столбцами</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_column-rule-style.php">column-rule-style</a></td>
            <td>Определяет стиль разделителя между столбцами</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_column-rule-width.php">column-rule-width</a></td>
            <td>Определяет ширину разделителя между столбцами</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_column-span.php">column-span</a></td>
            <td>Определяет, сколько столбцов элемент должен охватывать</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_column-width.php">column-width</a></td>
            <td>Определяет предлагаемую оптимальную ширину для столбцов</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_columns.php">columns</a></td>
            <td>Сокращенное свойство для установки ширины столбца и количества столбцов</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_pagination.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_user_interface.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>