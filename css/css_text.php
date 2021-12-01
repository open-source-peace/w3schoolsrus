<?php include '../include/head.php'; ?>

  <title>CSS Текст. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Текст. Форматирование текста. Как добавить цвет тексту? Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Текст</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_outline_offset.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_text_align.php'>Next &#10095;</a>
    </div>
    <br>

    <div style='margin:auto;border:1px solid gray;padding:8px;'>
      <h1 style='text-align:center;text-transform:uppercase;color:#4CAF50;'>форматирование текста</h1>
      <p style='text-indent:50px;text-align:justify;letter-spacing:3px;'>Этот текст оформлен с использованием некоторых свойств форматирования текста. Заголовок использует свойства text-align, text-transform и color. Параграф с отступом, выравнивается, а расстояние между символами указывается. Подчеркивание удалено с этой цветной <a style='text-decoration:none;color:#008CBA;' target='_blank' href='../csstryit/trycss_text.html'>&quot;Попробуйте сами&quot;</a> ссылки.</p>
    </div>
    <br>
    <a target='_blank' href='../csstryit/trycss_text.html' class='w3-btn'>Попробуйте сами &raquo;</a>
    <hr>

    <h2>Цвет текста</h2>
    <p>Свойство <code class='w3-codespan'>color</code> используется для установки цвета текста. Цвет указывается с помощью:</p>
    <ul>
      <li>названия цвета - например &quot;red&quot;</li>
      <li>значения HEX - например &quot;#ff0000&quot;</li>
      <li>значения RGB - например &quot;rgb(255,0,0)&quot;</li>
    </ul>
    <p>Посмотрите главу <a href='../cssref/css_colors_legal.php'>CSS Значения цвета</a> на нашем сайте <strong>W3Schools на русском</strong> для получения полного списка возможных значений цвета.</p>
    <p>Цвет текста по умолчанию для страницы определяется в селекторе основного текста.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        body {<br>&nbsp; color: blue;<br>}<br>
        <br>h1 {<br>&nbsp; color: green;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_color.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-panel w3-note'>
      <p><strong>Примечание:</strong> Для CSS, совместимого с W3C: если вы указываете свойство <code class='w3-codespan'>color</code>, вы также должны указать свойство <code class='w3-codespan'>background-color</code>.</p>
    </div>
    <hr>

    <h2>Цвет текста и цвет фона</h2>
    <p>В этом примере мы указываем свойство <code class='w3-codespan'>background-color</code> и свойство <code class='w3-codespan'>color</code>:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        body {<br>&nbsp; background-color: lightgrey;<br>&nbsp; color: blue;<br>}<br>
        <br>h1 {<br>&nbsp; background-color: black;<br>&nbsp; color: white;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_color_bg.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_outline_offset.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_text_align.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>