<?php include '../include/head.php'; ?>

  <title>CSS Выравнивание текста. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Выравнивание текста. Как выровнять текст на веб-странице? Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Выравнивание текста</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_text.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_text_decoration.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>Выравнивание текста</h2>
    <p>Свойство <code class='w3-codespan'>text-align</code> используется для установки горизонтального выравнивания текста.</p>
    <p>Текст может быть выровнен по левому или правому краю, по центру или по ширине.</p>
    <p>В следующем примере показан текст с выравниванием по центру, а также по левому и правому краю (выравнивание по левому краю используется по умолчанию, если направление текста слева направо, и по правому краю по умолчанию, если направление текста справа налево):</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        h1 {<br>&nbsp; text-align: center;<br>}<br><br>h2 {<br>&nbsp;&nbsp;text-align: left;<br>}<br><br>h3 {<br>&nbsp;&nbsp;text-align: right;<br>
        }</div>
      <a target='_blank' href='../csstryit/trycss_text-align.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <p>Когда для свойства <code class='w3-codepan'>text-align</code> установлено значение 'justify', каждая строка растягивается так, чтобы каждая строка имела одинаковую ширину, а левое и правое поля были прямыми (как, например, в журналах и газетах):</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        div {<br>&nbsp;&nbsp;text-align: justify;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_text-align_all.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Направление текста</h2>
    <p>Свойства <code class='w3-codespan'>direction</code> и <code class='w3-codespan'>unicode-bidi</code> могут использоваться для изменения направления текста элемента:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        p {<br>&nbsp;&nbsp;direction: rtl;<br>&nbsp; unicode-bidi: bidi-override;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_text_direction.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Вертикальное выравнивание</h2>
    <p>Свойство <code class='w3-codespan'>vertical-align</code> устанавливает вертикальное выравнивание элемента.</p>
    <p>Этот пример демонстрирует, как установить вертикальное выравнивание изображения в тексте:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        img.top {<br>&nbsp; vertical-align: top;<br>}<br><br>img.middle {<br>&nbsp;
        vertical-align: middle;<br>}<br><br>img.bottom {<br>&nbsp; vertical-align: bottom;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_vertical-align.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_text.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_text_decoration.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>