<?php include '../include/head.php'; ?>
  <title>CSS Margin Collapse - Свёртывание полей. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Margin Collapse - Свёртывание полей. Как убрать поля HTML-элемента? Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Margin Collapse - Свёртывание полей</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_margin.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn'  href='css_padding.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>Margin Collapse - Свёртывание полей</h2>
    <p>Верхнее и нижнее поля элементов иногда сворачиваются в одно поле, равное наибольшему из двух полей.</p>
    <p>Этого не происходит с левым и правым полями! Только верхнее и нижнее поля!</p>
    <p>Посмотрите на следующий пример:</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Демонстрация свёртывания полей:</p>
      <div class='w3-code notranslate cssHigh'>
        h1 {<br>&nbsp;&nbsp;margin: 0 0 50px 0;<br>}<br><br>h2 {<br>&nbsp;&nbsp;margin: 20px 0 0 0;<br>}</div>
      <a class='w3-btn w3-margin-bottom' href='../csstryit/trycss_margin_collapse.html' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <p>В приведенном выше примере элемент &lt;h1&gt; имеет нижнее поле 50 пикселей, а элемент &lt;h2&gt; имеет верхнее поле 20 пикселей.</p>
    <p>Здравый смысл подсказывает, что вертикальное поле между тегами &lt;h1&gt; и &lt;h2&gt; будет всего 70 пикселей (50 пикселей + 20 пикселей). Но из-за свёртывания полей фактическое поле составляет 50 пикселей.</p>
    <hr>

    <div class='w3-container w3-dark-grey w3-padding'>
      <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений!</h2>
      <div class='w3-bar w3-margin-bottom'>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_margin1' target='_blank'>Упражнение 1 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_margin2' target='_blank'>Упражнение 2 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_margin3' target='_blank'>Упражнение 3 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_margin4' target='_blank'>Упражнение 4 &raquo;</a>
      </div>
    </div>
    <hr>

    <h2>Все CSS свойства полей</h2>
    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:20%'>Свойство</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td><a href='../cssref/pr_margin.php'>margin</a></td>
        <td>Сокращенное свойство для установки свойств полей в одном объявлении</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_margin-bottom.php'>margin-bottom</a></td>
        <td>Устанавливает нижнее поле элемента</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_margin-left.php'>margin-left</a></td>
        <td>Устанавливает левое поле элемента</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_margin-right.php'>margin-right</a></td>
        <td>Устанавливает правое поле элемента</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_margin-top.php'>margin-top</a></td>
        <td>Устанавливает верхнее поле элемента</td>
      </tr>
    </table>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_margin.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn'  href='css_padding.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>