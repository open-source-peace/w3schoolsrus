<?php include '../include/head.php'; ?>

<title>CSS box-sizing - Размер блока. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Свойство box-sizing - Размер блока. Позволяет включать отступы и границы в общую ширину и высоту элемента. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        #div1 {
            width: 300px;
            height: 100px;
            border: 1px solid blue;
            box-sizing: content-box;
        }

        #div2 {
            width: 300px;
            height: 100px;
            padding: 50px;
            border: 1px solid red;
            box-sizing: content-box;
        }

        #div3 {
            width: 300px;
            height: 100px;
            border: 1px solid blue;
            box-sizing: border-box;
        }

        #div4 {
            width: 300px;
            height: 100px;
            padding: 50px;
            border: 1px solid red;
            box-sizing: border-box;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Box-sizing - Размер блока</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_variables_mediaqueries.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_mediaqueries.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS Размер блока</h2>
    <p><strong>CSS свойство <code class="w3-codespan">box-sizing</code></strong> позволяет включать отступы и границы в общую ширину и высоту элемента.</p>
    <hr>

    <h2>Без CSS свойства box-sizing</h2>
    <p>По умолчанию ширина и высота элемента рассчитывается следующим образом:</p>
    <p>width + padding + border = фактическая ширина элемента<br>
        height + padding + border = фактическая высота элемента</p>
    <p>Это означает, что когда вы устанавливаете ширину / высоту элемента, элемент часто кажется больше, чем вы установили (потому что граница и отступ элемента добавляются к указанной ширине / высоте элемента).</p>
    <p>На следующем рисунке показаны два элемента &lt;div&gt; с одинаковыми заданными шириной и высотой:</p>
    <div id="div1">Этот div меньше (ширина 300 пикселей и высота 100 пикселей).</div>
    <br>
    <div id="div2">Этот div больше (ширина также 300px и высота 100px).</div>
    <br>
    <p>Два элемента &lt;div&gt; приведенные выше, в результате имеют разные размеры (потому что у div2 задан отступ):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .div1 {<br>&nbsp;&nbsp;width: 300px;<br>&nbsp;&nbsp;height:
            100px;<br>&nbsp; border: 1px solid blue; <br>}<br>
            <br>.div2 {<br>&nbsp; width: 300px;<br>&nbsp;&nbsp;height: 100px;<br>&nbsp;&nbsp;padding: 50px;<br>&nbsp;&nbsp;border: 1px solid red;<br>} </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_box-sizing_old.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Свойство <code class="w3-codespan">box-sizing</code> решает эту проблему.</p>
    <hr>

    <h2>Из CSS свойством box-sizing</h2>
    <p>Свойство <code class="w3-codespan">box-sizing</code> позволяет нам включать отступы и границы в общую ширину и высоту элемента.</p>
    <p>Если вы установили <code class="w3-codespan">box-sizing: border-box;</code> для элементов отступ и границы включаются в ширину и высоту:</p>

    <div id="div3">Оба div сейчас одинакового размера!</div>
    <br>
    <div id="div4">Ура!</div>
    <br>

    <p>Вот тот же пример, что и выше, с <code class="w3-codespan">box-sizing: border-box;</code> добавлен в оба элемента &lt;div&gt;:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .div1 {<br>&nbsp;&nbsp;width: 300px;<br>&nbsp;&nbsp;height:
            100px;<br>&nbsp;&nbsp;border: 1px solid blue;<br>&nbsp;&nbsp;box-sizing: border-box;<br>}<br>
            <br>.div2 {<br>&nbsp;&nbsp;width: 300px;<br>&nbsp;
            height: 100px;<br>&nbsp; padding: 50px;<br>&nbsp;&nbsp;border: 1px solid red;<br>&nbsp;&nbsp;box-sizing: border-box;<br>} </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_box-sizing_new.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Поскольку результат использования <code class="w3-codespan">box-sizing: border-box;</code> намного лучше, многие разработчики хотят, чтобы все элементы на их страницах работали таким образом.</p>
    <p>Приведенный ниже код гарантирует, что все элементы будут иметь более удобный размер. Многие браузеры уже используют <code class="w3-codespan">box-sizing: border-box;</code> для многих элементов формы (но не для всех - поэтому входные и текстовые области выглядят по-разному по width: 100%;).</p>
    <p>Применять это ко всем элементам безопасно и разумно:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            * {<br>&nbsp; box-sizing: border-box;<br>}
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_box-sizing_all.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS свойство box-sizing</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:28%">Свойство</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_box-sizing.php">box-sizing</a></td>
            <td>Определяет, как рассчитываются ширина и высота элемента: должны ли они содержать отступы и границы или нет</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_variables_mediaqueries.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_mediaqueries.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>