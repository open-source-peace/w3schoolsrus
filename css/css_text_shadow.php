<?php include '../include/head.php'; ?>

  <title>CSS Тень текста. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Тень текста. Как сделать тень для текста на веб-странице? Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        #simpleshadow {
            text-shadow: 2px 2px;
        }
        #simpleshadow2 {
            text-shadow: 2px 2px red;
        }
        #simpleshadow3 {
            text-shadow: 2px 2px 5px red;
        }
    </style>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Тень текста</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_text_spacing.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_font.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>Тень текста</h2>
    <p>Свойство <code class='w3-codespan'>text-shadow</code> добавляет тень к тексту.</p>
    <p>В простейшем случае вы указываете только горизонтальную тень (2px) и вертикальную тень (2px):</p>
    <h2 id='simpleshadow'>Эффект тени текста!</h2>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        h1
        {<br>
        &nbsp;&nbsp;text-shadow: 2px 2px;<br>
        }
      </div>
      <a target='_blank' class='w3-btn w3-margin-bottom' href='../csstryit/trycss3_text-shadow1.html'>Попробуйте сами &raquo;</a>
    </div>

    <p>Затем добавьте цвет (красный) к тени:</p>
    <h2 id='simpleshadow2'>Эффект тени текста!</h2>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        h1
        {<br>
        &nbsp;&nbsp;text-shadow: 2px 2px red;<br>
        }
      </div>
      <a target='_blank' class='w3-btn w3-margin-bottom' href='../csstryit/trycss3_text-shadow2.html'>Попробуйте сами &raquo;</a>
    </div>

    <p>Затем добавьте к тени эффект размытия (5px):</p>
    <h2 id='simpleshadow3'>Эффект тени текста!</h2>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        h1
        {<br>
        &nbsp;&nbsp;text-shadow: 2px 2px 5px red;<br>
        }
      </div>
      <a target='_blank' class='w3-btn w3-margin-bottom' href='../csstryit/trycss3_text-shadow3.html'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-note w3-panel'>
      <p><strong>Совет:</strong> Перейдите к главе <a href='css_font.php'>CSS Шрифты</a> на нашем сайте <strong>W3Schools на русском</strong>, чтобы узнать, как изменить шрифты, размер и стиль текста.</p>
      <p><strong>Совет:</strong> Перейдите к главе <a href='css3_text_effects.php'>CSS Эффекты текста</a> на нашем сайте <strong>W3Schools на русском</strong>, чтобы узнать о различных текстовых эффектах.</p>
    </div>
    <hr>

    <div class='w3-container w3-dark-grey w3-padding'>
      <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений!</h2>
      <div class='w3-bar w3-margin-bottom'>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_text1' target='_blank'>Упражнение 1 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_text2' target='_blank'>Упражнение 2 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_text3' target='_blank'>Упражнение 3 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_text4' target='_blank'>Упражнение 4 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_text5' target='_blank'>Упражнение 5 &raquo;</a>
      </div>
    </div>
    <hr>

    <h2>Все CSS свойства текста</h2>
    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:30%'>Свойство</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td><a href='../cssref/pr_text_color.php'>color</a></td>
        <td>Устанавливает цвет текста</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_text_direction.php'>direction</a></td>
        <td>Задает направление текста / направление письма</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_text_letter-spacing.php'>letter-spacing</a></td>
        <td>Увеличивает или уменьшает расстояние между символами в тексте</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_dim_line-height.php'>line-height</a></td>
        <td>Устанавливает высоту строки</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_text_text-align.php'>text-align</a></td>
        <td>Задает горизонтальное выравнивание текста</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_text_text-decoration.php'>text-decoration</a></td>
        <td>Определяет украшение, добавленное к тексту</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_text_text-indent.php'>text-indent</a></td>
        <td>Задает отступ первой строки в текстовом блоке</td>
      </tr>
      <tr>
        <td><a href='../cssref/css3_pr_text-shadow.php'>text-shadow</a></td>
        <td>Определяет эффект тени, добавляемый к тексту</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_text_text-transform.php'>text-transform</a></td>
        <td>Управляет заглавными буквами текста</td>
      </tr>
      <tr>
        <td><a href='../cssref/css3_pr_text-overflow.php'>text-overflow</a></td>
        <td>Определяет, как пользователю следует сигнализировать о переполненном содержимом, которое не отображается</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_text_unicode-bidi.php'>unicode-bidi</a></td>
        <td>Используется вместе со свойством <a href='../cssref/pr_text_direction.php'>direction</a> для установки или возврата, следует ли переопределить текст для поддержки нескольких языков в одном документе.</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_pos_vertical-align.php'>vertical-align</a></td>
        <td>Устанавливает вертикальное выравнивание элемента</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_text_white-space.php'>white-space</a></td>
        <td>Определяет, как обрабатываются пробелы внутри элемента</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_text_word-spacing.php'>word-spacing</a></td>
        <td>Увеличивает или уменьшает расстояние между словами в тексте</td>
      </tr>
    </table>
    <br>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_text_spacing.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_font.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>