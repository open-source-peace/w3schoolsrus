<?php include '../include/head.php'; ?>
  <title>CSS Ширина контура. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Ширина контура. Как установить ширину контура элементов HTML? Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Ширина контура</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_outline.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_outline_color.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS Ширина контура</h2>
    <p>Свойство <code class='w3-codespan'>outline-width</code> определяет ширину контура и может иметь одно из следующих значений:</p>
    <ul>
      <li>thin - тонкий (обычно 1px)</li>
      <li>medium - средний (обычно 3px)</li>
      <li>thick - толстый (обычно 5px)</li>
      <li>Определенный размер (в px, pt, cm, em и т.д.)</li>
    </ul>

    <p>В следующем примере показаны контуры разной ширины:</p>
    <p style='border: 1px solid black;outline-style:solid;outline-color:red;outline-width:thin;padding:2px 4px;'>Тонкий контур.</p>
    <p style='border: 1px solid black;outline-style:solid;outline-color:red;outline-width:medium;padding:2px 4px;'>Средний контур.</p>
    <p style='border: 1px solid black;outline-style:solid;outline-color:red;outline-width:thick;padding:2px 4px;'>Толстый контур.</p>
    <p style='border: 1px solid black;outline-style:solid;outline-color:red;outline-width:4px;padding:2px 4px;'>Контур толщиной в 4px.</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        p.ex1
        {<br>&nbsp;&nbsp;border: 1px solid black;<br>
        &nbsp;&nbsp;outline-style: solid;<br>&nbsp;&nbsp;outline-color: red;<br>
        &nbsp;
        outline-width: thin;<br>
        }<br><br>p.ex2
        {<br>&nbsp; border: 1px solid black;<br>
        &nbsp;
        outline-style: solid;<br>&nbsp; outline-color: red;<br>
        &nbsp;&nbsp;outline-width: medium;<br>
        }<br><br>p.ex3
        {<br>&nbsp;&nbsp;border: 1px solid black;<br>
        &nbsp;
        outline-style: solid;<br>&nbsp; outline-color: red;<br>
        &nbsp;&nbsp;outline-width: thick;<br>
        }<br><br>
        p.ex4
        {<br>
        &nbsp;&nbsp;border: 1px solid black;<br>
        &nbsp;&nbsp;outline-style: solid;<br>&nbsp; outline-color: red;<br>
        &nbsp;
        outline-width: 4px;<br>
        }
      </div>
      <a target='_blank' href='../csstryit/trycss_outline-width.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_outline.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_outline_color.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>