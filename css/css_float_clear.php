<?php include '../include/head.php'; ?>

  <title>CSS Макет. Clear и clearfix. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Макет. Clear и clearfix. Расположение элементом. Как сделать обтекание текста или картинки? Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        .floatl:after {
            font-weight: bold;
            content: 'Float Left';
            color:white;
        }
        .floatr:after  {
            font-weight:bold;
            content: 'Float Right';
            color:white;
        }
        @media only screen and (max-width: 500px){
            .floatl:after  {
                content: 'Left';
            }
            .floatr:after  {
                content: 'Right';
            }
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS Макет <span class="color_h1"> - clear и clearfix</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_float.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_float_examples.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Свойство clear</h2>
    <p>Свойство <code class="w3-codespan">clear</code> определяет, какие элементы могут плавать рядом с очищенным элементом и с какой стороны.</p>
    <p>Свойство <code class="w3-codespan">clear</code> может иметь одно из следующих значений:</p>
    <ul>
        <li>none - допускает плавающие элементы с обеих сторон. Это по умолчанию</li>
        <li>left - с левой стороны запрещены плавающие элементы</li>
        <li>right- с правой стороны запрещены плавающие элементы</li>
        <li>both - запрещены плавающие элементы и с левой, и с правой стороны</li>
        <li>inherit - элемент наследует clear значение своего родителя</li>
    </ul>
    <p>Наиболее распространенный способ использования свойства <code class="w3-codespan">clear</code> - после того, как вы применили свойство <code class="w3-codespan">float</code> для элемента.</p>
    <p>При очистке float вы должны сопоставить clear с float: если элемент перемещается влево, вы должны очистить его. Ваш float элемент будет продолжать плавать, но clear элемент появится под ним на веб-странице.</p>
    <p>В следующем примере очищается float слева. Означает, что с левой стороны (от div) не допускаются плавающие элементы:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp;&nbsp;clear: left;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_layout_clear.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Хак clearfix</h2>
    <p>Если элемент выше, чем содержащий его элемент, имеет float, он &quot;выйдет за пределы&quot; своего контейнера:</p>
    <div class="w3-border w3-padding">
        <div class="w3-row-padding" style="margin:0 -16px 32px">
            <div class="w3-half">
                <h3>Без Clearfix</h3>
                <img src="../images/clearfix_prob.jpg" style="width:100%;" class="w3-image" alt="Элемент без Clearfix">
            </div>
            <div class="w3-half">
                <h3>Из Clearfix</h3>
                <img src="../images/clearfix_solution.jpg" style="width:100%;" class="w3-image" alt="Элемент из Clearfix">
            </div></div>
    </div>

    <p>Мы можем добавить <code class="w3-codespan">overflow: auto;</code> к содержащему элементу, чтобы решить эту проблему:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .clearfix {<br>&nbsp;&nbsp;overflow: auto;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_layout_clearfix.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><code class="w3-codespan">overflow: auto</code> clearfix работает хорошо, пока вы можете контролировать свои поля и отступы (иначе вы можете увидеть полосы прокрутки). Однако <strong>новый современный способ clearfix-хак</strong> более безопасен, и следующий код используется для большинства веб-страниц:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .clearfix::after {<br>&nbsp;&nbsp;content: &quot;&quot;;<br>&nbsp;&nbsp;clear: both;<br>&nbsp;&nbsp;display: table;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_layout_clearfix2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-note w3-panel">
        <p>Вы узнаете больше о псевдоэлементе <code class="w3-codespan">::after</code> в следующей главе <a
                    href="index.php">CSS Учебника</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_float.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_float_examples.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>