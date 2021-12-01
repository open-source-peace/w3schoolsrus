<?php include '../include/head.php'; ?>
  <title>CSS Padding - Отступ. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Padding - Отступ. Как сделать внутренние отступы для HTML-элемента? Сокращенное свойство. Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Padding - Внутренний отступ</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_margin_collapse.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_dimension.php'>Next &#10095;</a>
    </div>
    <hr>
    <div class='w3-theme-border' style='width:100%;padding:70px;border-width:1px;border-style:solid;'>
      Этот элемент имеет внутренний отступ 70px.
    </div>
    <br>
    <a target='_blank' href='../csstryit/trycss_padding_intro.html' class='w3-btn'>Попробуйте сами &raquo;</a>
    <hr>

    <h2>CSS Padding - Внутренний отступ</h2>
    <p>CSS свойства <code class='w3-codespan'>padding</code> используются для создания пространства вокруг содержимого элемента внутри любых определенных границ.</p>
    <p>Благодаря CSS у вас есть полный контроль над отступом. Есть свойства для установки отступов для каждой стороны элемента (вверху, справа, внизу и слева).</p>
    <hr>

    <h2>Padding - Отдельные стороны</h2>
    <p>CSS имеет свойства для указания отступа для каждой стороны элемента:</p>
    <ul>
      <li><code class='w3-codespan'>padding-top</code></li>
      <li><code class='w3-codespan'>padding-right</code></li>
      <li><code class='w3-codespan'>padding-bottom</code></li>
      <li><code class='w3-codespan'>padding-left</code></li>
    </ul>
    <p>Все свойства padding могут иметь следующие значения:</p>
    <ul>
      <li><em>length</em> - указывает отступ в пикселях, pt, см и т.д.</li>
      <li><em>%</em> - указывает отступ в % от ширины содержащего элемента</li>
      <li>inherit - указывает, что отступ должен быть унаследован от родительского элемента</li>
    </ul>

    <p><b>Примечание:</b> Отрицательные значения не допускаются!</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Установите разные отступы для всех четырех сторон элемента &lt;div&gt;</p>
      <div class='w3-code notranslate cssHigh'>
        div {<br>&nbsp;
        padding-top: 50px;<br>
        &nbsp;&nbsp;padding-right: 30px;<br>
        &nbsp;&nbsp;padding-bottom: 50px;<br>
        &nbsp;&nbsp;padding-left: 80px;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_padding_sides.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    
    <h2>Padding - Сокращенное свойство</h2>
    <p>Чтобы сократить код, можно указать все свойства отступа в одном свойстве.</p>
    <p>Свойство <code class='w3-codespan'>padding</code> - это сокращенное свойство для следующих индивидуальных свойств отступа:</p>
    <ul>
      <li><code class='w3-codespan'>padding-top</code></li>
      <li><code class='w3-codespan'>padding-right</code></li>
      <li><code class='w3-codespan'>padding-bottom</code></li>
      <li><code class='w3-codespan'>padding-left</code></li>
    </ul>

    <p>Т.о., вот как это работает:</p>
    <p>Если свойство <code class='w3-codespan'>padding</code> имеет четыре значения:</p>
    <ul>
      <li><b>padding: 25px 50px 75px 100px; </b>
        <ul><li>верхний отступ 25px</li>
          <li>правый отступ 50px</li>
          <li>нижний отступ 75px</li>
          <li>левый отступ 100px</li></ul>
      </li>
    </ul>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Используйте сокращенное свойство padding с четырьмя значениями:</p>
      <div class='w3-code notranslate cssHigh'>
        div {<br>&nbsp;
        padding: 25px 50px 75px 100px;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_padding_shorthand_4val.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <p>Если свойство <code class='w3-codespan'>padding</code> имеет три значения:</p>
    <ul>
      <li><b>padding: 25px 50px 75px;</b><ul>
          <li>верхний отступ 25px</li>
          <li>правый и левый отступы 50px</li>
          <li>нижний отступ 75px</li></ul>
      </li>
    </ul>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Используйте сокращенное свойство padding с тремя значениями:</p>
      <div class='w3-code notranslate cssHigh'>
        div {<br>&nbsp;
        padding: 25px 50px 75px;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_padding_shorthand_3val.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <p>Если свойство <code class='w3-codespan'>padding</code> имеет два значения:</p>
    <ul>
      <li><b>padding: 25px 50px;</b>
          <ul>
              <li>верхний и нижний отступы 25px</li>
              <li>правый и левый отступы 50px</li>
          </ul>
      </li>
    </ul>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Используйте сокращенное свойство padding с двумя значениями:</p>
      <div class='w3-code notranslate cssHigh'>
        div {<br>&nbsp;
        padding: 25px 50px;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_padding_shorthand_2val.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <p>Если свойство <code class='w3-codespan'>padding</code> имеет одно значение:</p>
    <ul>
      <li><b>padding: 25px;</b><ul><li>все четыре отступа 25px</li></ul>
      </li>
    </ul>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Используйте сокращенное свойство padding с одним значением:</p>
      <div class='w3-code notranslate cssHigh'>
        div {<br>&nbsp;
        padding: 25px;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_padding_shorthand_1val.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Padding и Width</h2>
    <p>CSS свойство <code class='w3-codespan'>width</code> определяет ширину области содержимого элемента. Область содержимого - это часть внутри отступа, границы и поля элемента (<a href='css_boxmodel.php'>блочная модель</a>).</p>
    <p>Итак, если элемент имеет указанную ширину, добавленный к этому элементу отступ будет добавлен к общей ширине элемента. Часто это нежелательный результат.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Здесь элемент &lt;div&gt; имеет ширину 300 пикселей. Однако фактическая ширина элемента &lt;div&gt; будет 350 пикселей (300 пикселей + 25 пикселей слева + 25 пикселей справа):</p>
      <div class='w3-code notranslate cssHigh'>
        div {<br>&nbsp;&nbsp;width: 300px;<br>&nbsp;&nbsp;padding: 25px;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_padding_width.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <p>Чтобы сохранить ширину 300 пикселей, независимо от количества отступов, вы можете использовать свойство <code class='w3-codepan'>box-sizing</code>. Это заставляет элемент сохранять свою ширину; если вы увеличите отступ, доступное пространство содержимого уменьшится.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Используйте свойство box-sizing, чтобы ширина оставалась равной 300 пикселей, независимо от количества отступов:</p>
      <div class='w3-code notranslate cssHigh'>
        div {<br>&nbsp; width: 300px;<br>&nbsp;&nbsp;padding: 25px;<br>&nbsp;&nbsp;box-sizing: border-box;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_padding_width2.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Больше примеров</h2>
    <p><a target='_blank' href='../csstryit/trycss_padding-left.html'>Установите левый отступ</a><br>
        Этот пример демонстрирует, как установить левый отступ элемента &lt;p&gt;.</p>
    <p><a target='_blank' href='../csstryit/trycss_padding-right.html'>Установите правый отступ</a><br>
      Этот пример демонстрирует, как установить правый отступ элемента &lt;p&gt;.</p>
    <p><a target='_blank' href='../csstryit/trycss_padding-top.html'>Установите верхний отступ</a><br>
      Этот пример демонстрирует, как установить верхний отступ элемента &lt;p&gt;.</p>
    <p><a target='_blank' href='../csstryit/trycss_padding-bottom.html'>Установите нижний отступ</a><br>
      Этот пример демонстрирует, как установить нижний отступ элемента &lt;p&gt;.</p>
    <hr>

    <div class='w3-container w3-dark-grey w3-padding'>
      <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений!</h2>
      <div class='w3-bar w3-margin-bottom'>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_padding1' target='_blank'>Упражнение 1 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_padding2' target='_blank'>Упражнение 2 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_padding3' target='_blank'>Упражнение 3 &raquo;</a>
      </div>
    </div>
    <hr>

    <h2>Все CSS свойства отступа</h2>

    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:30%'>Свойство</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td><a href='../cssref/pr_padding.php'>padding</a></td>
        <td>Сокращенное свойство для установки всех свойств отступа в одном объявлении</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_padding-bottom.php'>padding-bottom</a></td>
        <td>Устанавливает нижний отступ элемента</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_padding-left.php'>padding-left</a></td>
        <td>Устанавливает левый отступ элемента</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_padding-right.php'>padding-right</a></td>
        <td>Устанавливает правый отступ элемента</td>
      </tr>
      <tr>
        <td><a href='../cssref/pr_padding-top.php'>padding-top</a></td>
        <td>Устанавливает верхний отступ элемента</td>
      </tr>
    </table>
    <br>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_margin_collapse.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_dimension.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>