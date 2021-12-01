<?php include '../include/head.php'; ?>

  <title>CSS Оформление текста. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Оформление текста. Как красиво оформить текст на веб-странице? Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Оформление текста</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_text_align.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_text_transformation.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>Оформление текста</h2>
    <p>Свойство <code class='w3-codespan'>text-decoration</code> используется для установки или удаления украшений из текста.</p>
    <p>Свойство <code class='w3-codespan'>text-decoration: none;</code> часто используется для удаления подчеркивания из ссылок:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        a {<br>&nbsp; text-decoration: none;<br>}
      </div>
      <a target='_blank' href='../csstryit/trycss_text-decoration_link.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <p>Другие значения <code class='w3-codespan'>text-decoration</code> используются для украшения текста:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        h1 {<br>&nbsp; text-decoration: overline;<br>}<br>
        <br>h2 {<br>&nbsp; text-decoration: line-through;<br>}<br>
        <br>h3 {<br>&nbsp; text-decoration: underline;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_text-decoration.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-panel w3-note'>
      <p><strong>Примечание:</strong> Не рекомендуется подчеркивать текст, не являющийся ссылкой, так как это часто сбивает читателя с толку.</p>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_text_align.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_text_transformation.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>