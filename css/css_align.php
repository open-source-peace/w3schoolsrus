<?php include '../include/head.php'; ?>

<title>CSS Макет. Горизонтальное и вертикальное выравнивание. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Макет. Горизонтальное и вертикальное выравнивание. Как выравнивать элементы на странице по горизонтали и вертикали? Использование margin: auto; text-align: center; Как центрировать текст на веб-странице? Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Макет - Горизонтальное &amp; Вертикальное выравнивание</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_inline-block.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_combinators.php">Next &#10095;</a>
    </div>
    <hr>
    <div class="w3-dark-grey w3-padding-48 w3-display-container">
        <span class="w3-display-topmiddle w3-hide-small" style="margin-top:16px">&#9650;</span>
        <span class="w3-display-bottommiddle w3-hide-small" style="margin-bottom:16px">&#9660;</span>
        <div class="w3-center w3-display-container" style="background-color:#1abc9c;color:white; max-width:400px; margin:auto;padding: 15px">
            <span class="w3-display-left w3-hide-small" style="left:-30px">&#9664;</span>
            <span class="w3-display-right w3-hide-small" style="right:-30px">&#9658;</span>
            <h2>Центрирование элементов<br> по горизонтали и вертикали</h2>
        </div>
    </div>
    <hr>

    <h2>Выровнять элементы по центру</h2>
    <p>Для горизонтального центрирования элемента блока (например, &lt;div&gt;), используйте <code class="w3-codespan">margin: auto;</code></p>
    <p>Установка ширины элемента предотвратит его вытягивание до краёв контейнера.</p>
    <p>Затем элемент займет указанную ширину, а оставшееся пространство будет разделено поровну между двумя полями:</p>

    <div style="margin:0 auto;width:50%;border:3px solid green;padding:10px;">
        <p>Этот элемент div центрирован.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .center
            {<br>
            &nbsp;&nbsp;margin: auto;<br>
            &nbsp;
            width: 50%;<br>
            &nbsp;
            border: 3px solid green;<br>&nbsp; padding: 10px;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_align_container.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><b>Примечание:</b> Выравнивание по центру не действует, если свойство <code class="w3-codespan">width</code> не установлено
        (или установите на 100%).</p>
    <hr>

    <h2>Выровнять текст по центру</h2>
    <p>Чтобы просто центрировать текст внутри элемента, используйте <code class="w3-codespan">text-align: center;</code></p>

    <div style="text-align:center;border:3px solid green">
        <p>Этот текст центрирован.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .center {<br>&nbsp; text-align: center;<br>&nbsp;
            border: 3px solid green;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_align_text.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><strong>Совет:</strong> Дополнительные примеры выравнивания текста смотрите в разделе <a href="css_text.php">CSS Текст</a>.</p>
    <hr>

    <h2>Центрировать изображение</h2>
    <p>Чтобы центрировать изображение, установите для левого и правого поля значение <code class="w3-codespan">auto</code> и добавьте его в элемент <code class="w3-codespan">block</code>:</p>

    <img src="../images/paris.jpg" alt="Центрирование изображения" style="width:45%;display:block;margin:0 auto">

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            img
            {<br>&nbsp;&nbsp;display: block;<br>
            &nbsp; margin-left: auto;<br>&nbsp; margin-right: auto;<br>
            &nbsp;&nbsp;width: 40%;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_align_image.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Выравнивание по левому и правому краю - Использование позиции</h2>
    <p>Одним из способов выравнивания элементов является использование <code class="w3-codespan">position: absolute;</code>:</p>

    <div style="position:relative;margin-bottom:180px">
        <div style="position: absolute;right: 0;width: 300px;border: 3px solid #73AD21;padding: 10px;">
            <p>Коли я ще був школярем, казала мені мати - вчи англійську! А я не слухав матір... Тепер все треба вчити заново!</p>
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .right
            {<br>
            &nbsp;&nbsp;position: absolute;<br>
            &nbsp;
            right: 0px;<br>
            &nbsp;&nbsp;width: 300px;<br>
            &nbsp;&nbsp;border: 3px solid #73AD21;<br>&nbsp;&nbsp;padding: 10px;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_align_pos.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><b>Примечание:</b> Абсолютно позиционированные элементы удаляются из нормального потока и могут перекрывать элементы.</p>
    <hr>

    <h2>Выравнивание по левому и правому краю - Использование float</h2>
    <p>Другой метод выравнивания элементов - использовать свойство <code class="w3-codespan">float</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .right
            {<br>
            &nbsp;&nbsp;float: right;<br>
            &nbsp;
            width: 300px;<br>
            &nbsp;&nbsp;border: 3px solid #73AD21;<br>&nbsp;&nbsp;padding: 10px;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_align_float.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-note w3-panel">
        <p><strong>Примечание:</strong> Если элемент выше, чем элемент, содержащий его, и он является плавающим, он будет переполнен за пределами своего контейнера. Вы можете использовать хак <strong>clearfix</strong>, чтобы исправить это (см. пример ниже).</p>
    </div>
    <hr>

    <h2>Хак clearfix</h2>
    <div class="w3-border w3-padding">
        <div class="w3-row-padding" style="margin:0 -16px 32px">
            <div class="w3-half">
                <h3>Без Clearfix</h3>
                <img src="../images/clearfix_prob.jpg" style="width:100%;" class="w3-image" alt="Хак clearfix не применяется">
            </div>
            <div class="w3-half">
                <h3>Из Clearfix</h3>
                <img src="../images/clearfix_solution.jpg" style="width:100%;" class="w3-image" alt="Хак clearfix применяется">
            </div></div>
    </div>

    <p>Затем мы можем добавить <code class="w3-codespan">overflow: auto;</code> к содержащему элементу, чтобы решить эту проблему:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .clearfix {<br>&nbsp;&nbsp;overflow: auto;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_layout_clearfix.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Вертикальное центрирование - Использование padding</h2>
    <p>Существует много способов центрировать элемент по вертикали в CSS. Простое решение - использовать верхний и нижний <code class="w3-codespan">padding</code>:</p>

    <div style="border:3px solid green;padding:70px 2px;">
        <p>Я вертикально центрирован.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .center {<br>&nbsp;&nbsp;padding: 70px 0;<br>&nbsp;&nbsp;border: 3px solid green;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_align_padding.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>Чтобы центрировать как вертикально, так и горизонтально, используйте <code class="w3-codespan">padding</code> и <code class="w3-codespan">text-align: center</code>:</p>

    <div style="border:3px solid green;padding:70px 2px;;text-align:center;">
        <p>Я вертикально и горизонтально центрирован.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .center {<br>&nbsp; padding: 70px 0;<br>&nbsp;&nbsp;border: 3px solid green;<br>&nbsp; text-align: center;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_align_padding2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Центрировать по вертикали, используя высоту строки - line-height</h2>
    <p>Другой приём - использовать свойство <code class="w3-codespan">line-height</code> со значением, равным свойству <code class="w3-codespan">height</code>.</p>

    <div style="line-height:200px; height:200px;border:3px solid green;text-align:center;">
        <p style=" line-height:1.2; display:inline-block; vertical-align:middle;">Я вертикально и горизонтально центрирован.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .center {<br>&nbsp; line-height: 200px;<br>&nbsp;&nbsp;height: 200px;<br>&nbsp; border: 3px solid green;<br>&nbsp;&nbsp;text-align: center;<br>}<br><br>/* Если текст состоит из нескольких строк, добавьте следующее: */<br>.center p {<br>&nbsp;&nbsp;line-height: 1.5;<br>&nbsp;&nbsp;display: inline-block;<br>&nbsp;&nbsp;vertical-align: middle;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_align_line-height.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Вертикальное центрирование - использование position &amp; transform</h2>
    <p>Если <code class="w3-codespan">padding</code> и <code class="w3-codespan">line-height</code>
        не варианты, третье решение заключается в использовании позиционирования и свойства <code class="w3-codespan">transform</code>:</p>

    <div style="line-height:200px; height:200px;border:3px solid green;text-align:center;">
        <p style=" line-height:1.2; display:inline-block; vertical-align:middle;">Я вертикально и горизонтально центрирован.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .center { <br>&nbsp;&nbsp;height: 200px;<br>&nbsp;&nbsp;position: relative;<br>&nbsp; border: 3px solid green; <br>}<br><br>
            .center p {<br>&nbsp;&nbsp;margin: 0;<br>&nbsp;
            position: absolute;<br>&nbsp; top: 50%;<br>&nbsp;
            left: 50%;<br>&nbsp; transform: translate(-50%, -50%);<br>}</div>
        <a target="_blank" href="../csstryit/trycss_align_transform.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><strong>Совет:</strong> Вы узнаете больше о свойствах transform в разделе <a href="css3_2dtransforms.php">2D Трансформации</a>.</p>
    <hr>

    <h2>Центрирование по вертикали - Использование Flexbox</h2>
    <p>Вы также можете использовать flexbox для центрирования. Обратите внимание, что flexbox не поддерживается в IE10 и более ранних версиях:</p>

    <div style="display: flex;justify-content: center;align-items: center;height: 200px;border: 3px solid green;">Я вертикально и горизонтально центрирован.</div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .center {<br>&nbsp; display: flex;<br>&nbsp; justify-content: center;<br>&nbsp;
            align-items: center;<br>&nbsp; height: 200px;<br>&nbsp; border: 3px solid green; <br>}</div>
        <a target="_blank" href="../csstryit/trycss3_align_flex.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><strong>Совет:</strong> Вы узнаете больше про Flexbox в главе <a href="css3_flexbox.php">CSS Flexbox</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>

    <div class="w3-container w3-dark-grey w3-padding">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений!</h2>
        <div class="w3-bar w3-margin-bottom">
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_align1" target="_blank">Упражнение 1 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_align2" target="_blank">Упражнение 2 &raquo;</a>
        </div>
    </div>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_inline-block.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_combinators.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>