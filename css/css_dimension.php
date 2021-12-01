<?php include '../include/head.php'; ?>
  <title>CSS Ширина и высота. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Ширина и высота. Как добавить ширину (width) и высоту (height) для элемента на веб-странице с помощью CSS? Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Высота и ширина</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_padding.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_boxmodel.php'>Next &#10095;</a>
    </div>
    <hr>
    <div class='w3-theme-border' style='width:100%;border-width:1px;border-style:solid;padding:5px;'>
      Этот элемент имеет ширину 100%.
    </div>
    <br>
    <a target='_blank' href='../csstryit/trycss_height_width_intro.html' class='w3-btn'>Попробуйте сами &raquo;</a>
    <hr>

    <h2>CSS Настройка высоты и ширины</h2>
    <p>Свойства <code class='w3-codespan'>height</code> и <code class='w3-codespan'>width</code> используются для установки высоты и ширины элемента.</p>
    <p>Свойства высоты и ширины не включают <strong>padding</strong> (отступы), <strong>border</strong> (границы) или <strong>margin</strong> (поля). Они устанавливают высоту/ширину области внутри отступа, границы и поля элемента.</p>
    <hr>

    <h2>CSS Значения height/width</h2>

    <p>Свойства <code class='w3-codespan'>height</code> и <code class='w3-codespan'>width</code> могут иметь следующие значения:</p>
    <ul>
      <li><code class='w3-codespan'>auto</code> - Это по умолчанию. Браузер рассчитывает высоту и ширину</li>
      <li><code class='w3-codespan'>length</code> - Определяет высоту/ширину в px, cm и т.д.</li>
      <li><code class='w3-codespan'>%</code> - Определяет высоту/ширину в процентах от содержащего блока</li>
      <li><code class='w3-codespan'>initial</code> - Устанавливает высоту/ширину в значение по умолчанию</li>
      <li><code class='w3-codespan'>inherit</code> - Высота/ширина будут унаследованы от родительского значения</li>
    </ul>
    <hr>

    <h2>CSS height/width Примеры</h2>

    <div class='w3-theme-border' style='width:50%;height:200px;padding:10px;background-color:powderblue'>Этот элемент имеет высоту 200 пикселей и ширину 50%.</div>

    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Установите высоту и ширину элемента <code class='w3-codespan'>&lt;div&gt;</code>:</p>
      <div class='w3-code notranslate cssHigh'>
        div {<br>&nbsp;&nbsp;height:
        200px;<br>&nbsp; width: 50%;<br>&nbsp; background-color: powderblue;<br>}</div>
      <p>
        <a class='w3-btn' target='_blank' href='../csstryit/trycss_dim_height_width2.html'>Попробуйте сами &raquo;</a>
      </p>
    </div>

    <div class='w3-theme-border' style='height:100px;width:500px;padding:10px;background-color:powderblue'>
      Этот элемент имеет высоту 100 пикселей и ширину 500 пикселей.</div>

    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Установите высоту и ширину другого элемента &lt;div&gt;:</p>
      <div class='w3-code notranslate cssHigh'>
        div {<br>&nbsp;
        height:
        100px;<br>&nbsp;&nbsp;width: 500px;<br>&nbsp;&nbsp;background-color: powderblue;<br>}</div>
      <p>
        <a class='w3-btn' target='_blank' href='../csstryit/trycss_dim_height_width.html'>Попробуйте сами &raquo;</a>
      </p>
    </div>
    <p><strong>Примечание:</strong> Помните, что свойства <code class='w3-codespan'>height</code> и <code class='w3-codespan'>width</code> не включают отступы (padding), границы (border) или поля (margin)! Они устанавливают высоту/ширину области внутри отступа, границы и поля элемента!</p>
    <hr>

    <h2>Установка максимальной ширины - max-width</h2>
    <p>Свойство <code class='w3-codespan'>max-width</code> используется для установки максимальной ширины элемента.</p>
    <p>Свойство <code class='w3-codespan'>max-width</code> можно указывать в <em>значениях длины</em>, таких как px, cm и т.д. или в процентах (%) от содержащего блока или установите значение none (это значение по умолчанию - означает, что максимальная ширина отсутствует).</p>

    <p>Проблема с <code class='w3-codespan'>&lt;div&gt;</code> выше возникает, когда окно браузера меньше ширины элемента (500 пикселей), т.к. браузер добавляет на страницу горизонтальную полосу прокрутки.</p>
    <p>Использование <code class='w3-codespan'>max-width</code> вместо этого в данной ситуации улучшит работу браузера с небольшими окнами.</p>
    <p><strong>Совет:</strong> Измените окно браузера на ширину меньше 500 пикселей, чтобы увидеть разницу между двумя div-ами!</p>
    <div class='w3-theme-border' style='padding:10px;background-color:powderblue;height:100px; max-width:500px;'>
      Этот элемент имеет высоту 100 пикселей и максимальную ширину 500 пикселей.</div>
    <p><strong>Примечание:</strong> Значение свойства <code class='w3-codespan'>max-width</code> переопределяет <code class='w3-codespan'>width</code>.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Этот <code class='w3-codespan'>&lt;div&gt;</code> элемент имеет высоту 100 пикселей и максимальную ширину 500 пикселей:</p>
      <div class='w3-code notranslate cssHigh'>
        div {<br>
        &nbsp; max-width: 500px;<br>&nbsp;
        height:
        100px;<br>&nbsp; background-color: powderblue;<br>}</div>
      <p>
        <a class='w3-btn' target='_blank' href='../csstryit/trycss_dim_max_width.html'>Попробуйте сами &raquo;</a>
      </p>
    </div>
    <hr>

    <h2>Попробуйте сами - Примеры</h2>
    <p><a target='_blank' href='../csstryit/trycss_dim_height.html'>Установите высоту и ширину элементов</a><br>Этот пример демонстрирует, как установить высоту и ширину различных элементов.</p>
    <p><a target='_blank' href='../csstryit/trycss_dim_height_percent.html'>Установите высоту и ширину изображения, используя проценты</a><br>Этот пример демонстрирует, как установить высоту и ширину изображения, используя процентное значение.</p>
    <p><a target='_blank' href='../csstryit/trycss_dim_max-width.html'>Установите минимальную ширину и максимальную ширину элемента</a><br>Этот пример демонстрирует, как установить минимальную ширину и максимальную ширину элемента, используя значение в пикселях.</p>
    <p><a target='_blank' href='../csstryit/trycss_dim_max-height.html'>Установите минимальную высоту и максимальную высоту элемента</a><br>Этот пример демонстрирует, как установить минимальную высоту и максимальную высоту элемента, используя значение в пикселях.</p>
    <hr>

    <div class='w3-container w3-dark-grey w3-padding'>
      <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений!</h2>
      <div class='w3-bar w3-margin-bottom'>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_dimension1' target='_blank'>Упражнение 1 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_dimension2' target='_blank'>Упражнение 2 &raquo;</a>
      </div>
    </div>
    <hr>

    <h2>Все свойства CSS Размеров</h2>
    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:20%'>Свойство</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td><a href='../cssref/pr_dim_height.php'>height</a></td>
        <td>Устанавливает высоту элемента</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_dim_max-height.php'>max-height</a></td>
        <td>Устанавливает максимальную высоту элемента</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_dim_max-width.php'>max-width</a></td>
        <td>Устанавливает максимальную ширину элемента</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_dim_min-height.php'>min-height</a></td>
        <td>Устанавливает минимальную высоту элемента</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_dim_min-width.php'>min-width</a></td>
        <td>Устанавливает минимальную ширину элемента</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_dim_width.php'>width</a></td>
        <td>Устанавливает ширину элемента</td>
      </tr>
    </table>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_padding.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_boxmodel.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>