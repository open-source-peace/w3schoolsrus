<?php include '../include/head.php'; ?>

  <title>CSS Изображение фона. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Изображение фона. Как добавить фоновое изображение на веб-страницу с помощью CSS? Картинка в качестве фона. Стилизация веб-страниц. Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Background Image - Фоновое изображение</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_background.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_background_repeat.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS background-image</h2>
    <p>Свойство <code class='w3-codespan'>background-image</code> определяет изображение для использования в качестве фона элемента.</p>
    <p>По умолчанию изображение повторяется, поэтому оно покрывает весь элемент.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Установите фоновое изображение для страницы:</p>
      <div class='w3-code notranslate cssHigh'>
        body {<br>&nbsp;&nbsp;background-image: url(&quot;paper.gif&quot;);<br>}</div>
      <a target='_blank' href='../csstryit/trycss_background-image.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-example'>
      <h3>Пример</h3>
      <p>В этом примере показано <strong>плохое сочетание</strong> текста и фонового изображения. Текст плохо читается:</p>
      <div class='w3-code notranslate cssHigh'>
        body {<br>&nbsp;&nbsp;background-image: url(&quot;bgdesert.jpg&quot;);<br>}</div>
      <a target='_blank' href='../csstryit/trycss_background-image_bad.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <div class='w3-panel w3-note'>
      <p><b>Примечание:</b> При использовании фонового изображения используйте изображение, не нарушающее текст.</p>
    </div>

    <p>Фоновое изображение также можно установить для определенных элементов, таких как элемент &lt;p&gt; (для отдельного параграфа):</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        p {<br>&nbsp;&nbsp;background-image: url(&quot;paper.gif&quot;);<br>}</div>
      <a target='_blank' href='../csstryit/trycss_background-image_p.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_background.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_background_repeat.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>