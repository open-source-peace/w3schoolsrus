<?php include '../include/head.php'; ?>

  <title>CSS Преобразование текста. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Преобразование текста. Свойство text-transform. Как сделать все строчные или заглавные буквы в тексте? Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Преобразование текста</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_text_decoration.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_text_spacing.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>Преобразование текста</h2>
    <p>Свойство <code class='w3-codespan'>text-transform</code> используется для указания заглавных и строчных букв в тексте.</p>
    <p>Его можно использовать, чтобы преобразовать все в заглавные или строчные буквы или сделать первую букву каждого слова заглавной:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        p.uppercase {<br>&nbsp;&nbsp;text-transform: uppercase;<br>}<br>
        <br>p.lowercase {<br>&nbsp;&nbsp;text-transform: lowercase;<br>}<br>
        <br>p.capitalize {<br>&nbsp;&nbsp;text-transform: capitalize;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_text-transform.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_text_decoration.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_text_spacing.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>