<?php include '../include/head.php'; ?>

  <title>CSS Сокращенное свойство. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Сокращенное свойство. Стилизация фона веб-страниц. Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Background - Сокращенное свойство</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_background_attachment.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_border.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS background - Сокращенное свойство</h2>
    <p>Чтобы сократить код, также можно указать все свойства фона в одном единственном свойстве. Это называется сокращенным свойством.</p>
    <p>Вместо того, чтобы писать:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate cssHigh'>
        body {<br>&nbsp; background-color: #fff;<br>&nbsp; background-image:
        url(&quot;img_tree.png&quot;);<br>&nbsp; background-repeat: no-repeat;<br>&nbsp;
        background-position: right top;<br>}</div>
    </div>

    <p>Вы можете использовать сокращенное свойство <code class='w3-codespan'>background</code>:</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Используйте сокращенное свойство, чтобы установить свойства фона в одном объявлении:</p>
      <div class='w3-code notranslate cssHigh'>
        body {<br>&nbsp; background: #fff url(&quot;../images/img_tree.png&quot;) no-repeat right top;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_background_shorthand.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <p>При использовании сокращенного свойства порядок значений свойств следующий:</p>
    <ul>
      <li><code class='w3-codespan'>background-color</code></li>
      <li><code class='w3-codespan'>background-image</code></li>
      <li><code class='w3-codespan'>background-repeat</code></li>
      <li><code class='w3-codespan'>background-attachment</code></li>
      <li><code class='w3-codespan'>background-position</code></li>
    </ul>
    <p>Не имеет значения, отсутствует ли одно из значений свойств, если остальные находятся в этом порядке. Обратите внимание, что мы не используем свойство background-attachment в приведенных выше примерах, так как оно не имеет значения.</p>
    <hr>

    <div class='w3-container w3-dark-grey w3-padding'>
      <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений!</h2>
      <div class='w3-bar w3-margin-bottom'>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_background1' target='_blank'>Упражнение 1 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_background2' target='_blank'>Упражнение 2 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_background3' target='_blank'>Упражнение 3 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_background4' target='_blank'>Упражнение 4 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_background5' target='_blank'>Упражнение 5 &raquo;</a>
      </div>
    </div>
    <hr>

    <h2>Все CSS свойства фона</h2>

    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:30%'>Свойство</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td><a href='../cssref/css3_pr_background.php'>background</a></td>
        <td>Устанавливает все свойства фона в одном объявлении</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_background-attachment.php'>background-attachment</a></td>
        <td>Устанавливает, является ли фоновое изображение фиксированным или прокручивается вместе с остальной частью страницы</td>
      </tr>
      <tr>
        <td><a href='../cssref/css3_pr_background-clip.php'>background-clip</a></td>
        <td>Определяет область рисования фона</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_background-color.php'>background-color</a></td>
        <td>Устанавливает цвет фона элемента</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_background-image.php'>background-image</a></td>
        <td>Устанавливает фоновое изображение для элемента</td>
      </tr>
      <tr>
        <td><a href='../cssref/css3_pr_background-origin.php'>background-origin</a></td>
        <td>Определяет, где расположены фоновые изображения.</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_background-position.php'>background-position</a></td>
        <td>Устанавливает начальную позицию фонового изображения</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_background-repeat.php'>background-repeat</a></td>
        <td>Устанавливает, как будет повторяться фоновое изображение</td>
      </tr>
      <tr>
        <td><a href='../cssref/css3_pr_background-size.php'>background-size</a></td>
        <td>Определяет размер фонового изображения (изображений)</td>
      </tr>
    </table>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_background_attachment.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_border.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>