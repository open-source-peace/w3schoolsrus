<?php include '../include/head.php'; ?>
  <title>CSS Outline Offset. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Outline Offset. Свойство смещения контура. Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Outline Offset</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_outline_shorthand.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_text.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS Outline Offset</h2>
    <p>Свойство <code class='w3-codespan'>outline-offset</code> добавляет пространство между контуром и краем / границей элемента. Пространство между элементом и его контуром прозрачное.</p>

    <p>В следующем примере указывается контур на 15 пикселей за пределами границы:</p>
    <p style='margin:30px;border:1px solid black;outline:1px solid red;outline-offset:15px;'>Этот параграф имеет контур 15 пикселей за пределами границы.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        p {<br>&nbsp;&nbsp;margin: 30px;<br>&nbsp; border: 1px solid black;<br>&nbsp; outline:
        1px solid red;<br>&nbsp;
        outline-offset: 15px;<br>}
      </div>
      <a target='_blank' href='../csstryit/trycss_outline-offset.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <p>В следующем примере показано, что пространство между элементом и его контуром прозрачное:</p>
    <p style='margin:30px;background:yellow;border:1px solid black;outline:1px solid red;outline-offset:15px;'>
        Контур этого параграфа составляет 15 пикселей за пределами границы.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        p {<br>&nbsp; margin: 30px;<br>&nbsp; background:
        yellow;<br>&nbsp; border: 1px solid black;<br>&nbsp; outline:
        1px solid red;<br>&nbsp;
        outline-offset: 15px;<br>}
      </div>
      <a target='_blank' href='../csstryit/trycss_outline-offset2.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <div class='w3-container w3-dark-grey w3-padding'>
      <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений!</h2>
      <div class='w3-bar w3-margin-bottom'>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_outline1' target='_blank'>Упражнение 1 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_outline2' target='_blank'>Упражнение 2 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_outline3' target='_blank'>Упражнение 3 &raquo;</a>
      </div>
    </div>
    <hr>

    <h2>Все CSS свойства контура</h2>

    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:20%'>Свойство</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td><a href='../cssref/pr_outline.php'>outline</a></td>
        <td>Сокращенное свойство для установки ширины контура, стиля контура и цвета контура в одном объявлении.</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_outline-color.php'>outline-color</a></td>
        <td>Устанавливает цвет контура</td>
      </tr>
      <tr>
        <td><a href='../cssref/css3_pr_outline-offset.php'>outline-offset</a></td>
        <td>Задает расстояние между контуром и краем или границей элемента.</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_outline-style.php'>outline-style</a></td>
        <td>Устанавливает стиль контура</td>
      </tr>
      <tr>
        <td>
          <a href='../cssref/pr_outline-width.php'>outline-width</a></td>
        <td>Устанавливает ширину контура</td>
      </tr>
    </table>
    <br>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_outline_shorthand.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_text.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>