<?php include '../include/head.php'; ?>

  <title>CSS Макет. Свойства width и max-width. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Макет. Свойства width и max-width. Ширина и максимальная ширина. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS Макет<span class="color_h1"> - width и max-width</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_display_visibility.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_positioning.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>Использование width, max-width и margin: auto;</h2>
    <p>Как упоминалось в предыдущей главе, <strong>блочный элемент</strong> всегда занимает всю доступную ширину (растягивается влево и вправо, насколько это возможно).</p>
    <p>Установка свойства <code class="w3-codespan">width</code> блочного элемента предотвратит его вытягивание до краев контейнера. Затем вы можете установить поля автоматически, чтобы горизонтально центрировать элемент внутри контейнера. Элемент займет указанную ширину, а оставшееся пространство будет разделено поровну между двумя полями:</p>

    <div class="w3-theme-border" style="border-width:3px;border-style:solid;width:500px; margin: auto;">
        Этот элемент &lt;div&gt; имеет width 500px, а margin установлен auto.</div>
    <br>

    <p><strong>Примечание:</strong> Проблема с <code class="w3-codespan">&lt;div&gt;</code> выше происходит, когда окно браузера меньше ширины элемента. Затем браузер добавляет на страницу горизонтальную полосу прокрутки.</p>

    <p>Использование вместо этого <code class="w3-codespan">max-width</code> улучшит работу браузера с небольшими окнами. Это важно при создании сайта, пригодного для использования на небольших устройствах (т.е. для адаптивности):</p>

    <div class="w3-theme-border" style="border-width:3px;border-style:solid; max-width:500px; margin: auto;">
        Этот &lt;div&gt; элемент имеет max-width 500px и margin установлен в auto.</div>
    <br>
    <p><strong>Совет:</strong> Измените размер окна браузера до ширины менее 500 пикселей, чтобы увидеть разницу между двумя div-ами!</p>

    <p>Вот пример двух div-ов выше:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div.ex1 {<br>&nbsp;&nbsp;width: 500px;<br>&nbsp;&nbsp;margin:
            auto;<br>&nbsp;&nbsp;border: 3px solid #73AD21;<br>}<br>
            <br>div.ex2 {<br>&nbsp; max-width: 500px;<br>&nbsp;
            margin: auto;<br>&nbsp; border: 3px solid #73AD21;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_max-width.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_display_visibility.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_positioning.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>