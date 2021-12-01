<?php include '../include/head.php'; ?>

  <title>CSS Интервал текста. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Интервал текста. Свойства text-indent, letter-spacing, line-height, word-spacing, white-space. Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
      <h1>CSS <span class='color_h1'>Интервал текста</span></h1>
      <div class='w3-clear nextprev'>
          <a class='w3-left w3-btn' href='css_text_transformation.php'>&#10094; Prev</a>
          <a class='w3-right w3-btn' href='css_text_shadow.php'>Next &#10095;</a>
      </div>
      <hr>

      <h2>Отступ текста</h2>
      <p>Свойство <code class='w3-codespan'>text-indent</code> используется для указания отступа первой строки текста:</p>
      <div class='w3-example'>
          <h3>Пример</h3>
          <div class='w3-code notranslate cssHigh'>
              p {<br>&nbsp; text-indent: 50px;<br>}</div>
          <a target='_blank' href='../csstryit/trycss_text-indent.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Межбуквенное расстояние</h2>
      <p>Свойство <code class='w3-codespan'>letter-spacing</code> используется для указания пробела между символами в тексте.</p>
      <p>В следующем примере показано, как увеличить или уменьшить расстояние между символами:</p>
      <div class='w3-example'>
          <h3>Пример</h3>
          <div class='w3-code notranslate cssHigh'>
              h1 {<br>&nbsp; letter-spacing: 3px;<br>}<br><br>h2 {<br>&nbsp;&nbsp;letter-spacing: -3px;<br>}</div>
          <a target='_blank' href='../csstryit/trycss_letter-spacing.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Высота строки</h2>
      <p>Свойство <code class='w3-codespan'>line-height</code> используется для указания расстояния между строками:</p>
      <div class='w3-example'>
          <h3>Пример</h3>
          <div class='w3-code notranslate cssHigh'>
              p.small {<br>&nbsp; line-height: 0.8;<br>}<br><br>p.big {<br>&nbsp;
              line-height: 1.8;<br>}</div>
          <a target='_blank' href='../csstryit/trycss_line-height.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Интервал между словами</h2>
      <p>Свойство <code class='w3-codespan'>word-spacing</code> используется для указания пробела между словами в тексте.</p>
      <p>В следующем примере показано, как увеличить или уменьшить расстояние между словами:</p>
      <div class='w3-example'>
          <h3>Пример</h3>
          <div class='w3-code notranslate cssHigh'>
              h1 {<br>&nbsp;&nbsp;word-spacing: 10px;<br>}<br><br>h2 {<br>&nbsp;&nbsp;word-spacing: -5px;<br>}</div>
          <a target='_blank' href='../csstryit/trycss_text_word-spacing.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Пробел</h2>
      <p>Свойство <code class='w3-codespan'>white-space</code> определяет, как обрабатываются пробелы внутри элемента.</p>
      <p>В этом примере показано, как отключить перенос текста внутри элемента:</p>
      <div class='w3-example'>
          <h3>Пример</h3>
          <div class='w3-code notranslate cssHigh'>
              p {<br>&nbsp; white-space: nowrap;<br>}</div>
          <a target='_blank' href='../csstryit/trycss_text_white-space.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
      </div>
      <hr>
      <div class='w3-clear nextprev'>
          <a class='w3-left w3-btn' href='css_text_transformation.php'>&#10094; Prev</a>
          <a class='w3-right w3-btn' href='css_text_shadow.php'>Next &#10095;</a>
      </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>