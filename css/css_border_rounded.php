<?php include '../include/head.php'; ?>
  <title>CSS Закругленные границы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Закругленные границы. Как сделать закругление границ HTML-элемента? Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Закругленные границы</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_border_shorthand.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_margin.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS Закругленные границы</h2>
    <p>Свойство <code class='w3-codespan'>border-radius</code> используется для добавления закругленных границ к элементу:</p>
    <p style='border: 2px solid red;padding:2px;'>Обычная граница</p>
    <p style='border: 2px solid red;border-radius: 5px;padding:2px;'>Круглая граница</p>
    <p style='border: 2px solid red;border-radius: 8px;padding:2px;'>Закругленная граница</p>
    <p style='border: 2px solid red;border-radius: 12px;padding:2px;'>Более закругленная граница</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        p {<br>&nbsp;&nbsp;border: 2px solid red;<br>&nbsp;&nbsp;border-radius: 5px;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_border_round.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Больше примеров</h2>
    <p><a target='_blank' href='../csstryit/trycss_border-top.html'>Все свойства верхней границы в одном объявлении</a><br>
      В этом примере демонстрируется сокращенное свойство для установки всех свойств верхней границы в одном объявлении.</p>

    <p><a target='_blank' href='../csstryit/trycss_border-bottom-style.html'>Установите стиль нижней границы</a><br>
      В этом примере показано, как установить стиль нижней границы.</p>

    <p><a target='_blank' href='../csstryit/trycss_border-left-width.html'>Установите ширину левой границы</a><br>
      В этом примере показано, как установить ширину левой границы.</p>

    <p><a target='_blank' href='../csstryit/trycss_border-color.html'>Установите цвет четырех границ</a><br>
      В этом примере показано, как установить цвет четырех границ. Может иметь от одного до четырех цветов.</p>

    <p><a target='_blank' href='../csstryit/trycss_border-right-color.html'>Установите цвет правой границы</a><br>
      В этом примере показано, как установить цвет правой границы.</p>
    <hr>

    <div class='w3-container w3-dark-grey w3-padding'>
      <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений!</h2>
      <div class='w3-bar w3-margin-bottom'>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_border1' target='_blank'>Упражнение 1 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_border2' target='_blank'>Упражнение 2 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_border3' target='_blank'>Упражнение 3 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_border4' target='_blank'>Упражнение 4 &raquo;</a>
      </div>
    </div>

    <hr>
    <h2>Все свойства CSS границ</h2>
    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:25%'>Свойство</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td><a href='../cssref/pr_border.php'>border</a></td>
        <td>Устанавливает все свойства границы в одном объявлении</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_border-bottom.php'>border-bottom</a></td>
        <td>Устанавливает все свойства нижней границы в одном объявлении</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_border-bottom_color.php'>border-bottom-color</a></td>
        <td>Устанавливает цвет нижней границы</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_border-bottom_style.php'>border-bottom-style</a></td>
        <td>Устанавливает стиль нижней границы</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_border-bottom_width.php'>border-bottom-width</a></td>
        <td>Устанавливает ширину нижней границы</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_border-color.php'>border-color</a></td>
        <td>Устанавливает цвет четырех границ</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_border-left.php'>border-left</a></td>
        <td>Устанавливает все свойства левой границы в одном объявлении</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_border-left_color.php'>border-left-color</a></td>
        <td>Устанавливает цвет левой границы</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_border-left_style.php'>border-left-style</a></td>
        <td>Устанавливает стиль левой границы</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_border-left_width.php'>border-left-width</a></td>
        <td>Устанавливает ширину левой границы</td>
      </tr>
      <tr>
        <td><a href='../cssref/css3_pr_border-radius.php'>border-radius</a></td>
        <td>Устанавливает все четыре свойства border-*-radius для закругленных углов</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_border-right.php'>border-right</a></td>
        <td>Устанавливает все свойства правой границы в одном объявлении</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_border-right_color.php'>border-right-color</a></td>
        <td>Устанавливает цвет правой границы</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_border-right_style.php'>border-right-style</a></td>
        <td>Устанавливает стиль правой границы</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_border-right_width.php'>border-right-width</a></td>
        <td>Устанавливает ширину правой границы</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_border-style.php'>border-style</a></td>
        <td>Устанавливает стиль четырех границ</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_border-top.php'>border-top</a></td>
        <td>Устанавливает все свойства верхней границы в одном объявлении</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_border-top_color.php'>border-top-color</a></td>
        <td>Устанавливает цвет верхней границы</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_border-top_style.php'>border-top-style</a></td>
        <td>Устанавливает стиль верхней границы</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_border-top_width.php'>border-top-width</a></td>
        <td>Устанавливает ширину верхней границы</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_border-width.php'>border-width</a></td>
        <td>Устанавливает ширину четырех границ</td>
      </tr>
    </table>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_border_shorthand.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_margin.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>