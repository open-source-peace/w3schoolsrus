<?php include '../include/head.php'; ?>
  <title>CSS Сокращенное свойство контура. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Сокращенное свойство контура. Как сократить HTML-код для написания свойств контура? Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Сокращенное свойство контура</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_outline_color.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_outline_offset.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS Контур - Сокращенное свойство</h2>
    <p>Свойство <code class='w3-codespan'>outline</code> - это сокращенное свойство для установки следующих индивидуальных свойств контура:</p>
    <ul>
      <li><code class='w3-codespan'>outline-width</code></li>
      <li><code class='w3-codespan'>outline-style</code> (обязательно)</li>
      <li><code class='w3-codespan'>outline-color</code></li>
    </ul>
    <p>Свойство <code class='w3-codespan'>outline</code> указывается как одно, два или три значения из списка выше. Порядок значений не имеет значения.</p>
    <p>В следующем примере показаны некоторые контуры, указанные с помощью сокращенного свойства:</p>
    <p style='outline: dashed;padding: 2px 4px;'>Пунктирный контур.</p>
    <p style='outline: dotted red;padding: 2px 4px;'>Точечный красный контур.</p>
    <p style='outline: 5px solid yellow;padding: 2px 4px;'>Сплошной 5px желтый контур.</p>
    <p style='outline: ridge thick pink;padding: 2px 4px;'>Толстый ребристый розовый контур.</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        p.ex1
        {outline: dashed;}<br>p.ex2
        {outline: dotted red;}<br>p.ex3
        {outline: 5px solid yellow;}<br>p.ex4
        {outline: thick ridge pink;}</div>
      <a target='_blank' href='../csstryit/trycss_outline.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_outline_color.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_outline_offset.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>