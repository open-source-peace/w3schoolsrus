<?php include '../include/head.php'; ?>
  <title>CSS Сокращенное свойство. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Сокращенное свойство границы. Как сократить написание CSS при стилизации границ HTML-элемента? Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Сокращенное свойство границы</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_border_sides.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_border_rounded.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS Border - Сокращенное свойство</h2>
    <p>Как вы видели на предыдущей странице, при работе с границами следует учитывать множество свойств.</p>
    <p>Чтобы сократить код, также можно указать все отдельные свойства границы в одном свойстве.</p>
    <p>Свойство <code class='w3-codespan'>border</code> - это сокращенное свойство для следующих индивидуальных свойств границы:</p>
    <ul>
      <li><code class='w3-codespan'>border-width</code></li>
      <li><code class='w3-codespan'>border-style</code> (обязательно)</li>
      <li><code class='w3-codespan'>border-color</code></li>
    </ul>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        p {<br>&nbsp;
        border: 5px solid red;<br>}</div>
      <p>Результат:</p>
      <div class='w3-white w3-padding notranslate'>
        <p style='border:5px solid red;padding:2px'>Какой-то текст</p>
      </div>
      <a target='_blank' href='../csstryit/trycss_border.html' class='w3-btn w3-margin-top w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <p>Вы также можете указать все отдельные свойства границы только для одной стороны:</p>
    <div class='w3-example'>
      <h3>Левая граница</h3>
      <div class='w3-code notranslate cssHigh'>
        p {<br>&nbsp;
        border-left: 6px solid red;<br>&nbsp;&nbsp;background-color: lightgrey;<br>}</div>
      <p>Результат:</p>
      <div class='w3-white w3-padding notranslate'>
        <p style='border-left:6px solid red;padding:5px 5px;background-color:lightgrey'>Какой-то текст</p>
      </div>
      <a target='_blank' href='../csstryit/trycss_border_left.html' class='w3-btn w3-margin-top w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-example'>
      <h3>Нижняя граница</h3>
      <div class='w3-code notranslate cssHigh'>
        p {<br>&nbsp;
        border-bottom: 6px solid red;<br>&nbsp; background-color: lightgrey;<br>}</div>
      <p>Результат:</p>
      <div class='w3-white w3-padding notranslate'>
        <p style='border-bottom:6px solid red;padding:5px 5px;background-color:lightgrey'>Какой-то текст</p>
      </div>
      <a target='_blank' href='../csstryit/trycss_border_bottom.html' class='w3-btn w3-margin-top w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_border_sides.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_border_rounded.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>