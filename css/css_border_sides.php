<?php include '../include/head.php'; ?>
  <title>CSS Стороны границы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Стороны границы. Как стилизовать отдельные стороны границы HTML-элемента? Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Стороны границы</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_border_color.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_border_shorthand.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS Border - Отдельные стороны</h2>
    <p>Из примеров на предыдущих страницах вы увидели, что можно указать разные границы для каждой стороны.</p>
    <p>В CSS также есть свойства для указания каждой из границ (верхней, правой, нижней и левой):</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        p
        {<br>
        &nbsp;
        border-top-style: dotted;<br>
        &nbsp;
        border-right-style: solid;<br>
        &nbsp;&nbsp;border-bottom-style: dotted;<br>
        &nbsp;&nbsp;border-left-style: solid;<br>
        }</div>
      <p>Результат:</p>
      <div class='w3-white w3-padding notranslate'>
        <div style='border-style: dotted solid;padding:8px;margin:8px 0'>Различные стили границы</div>
      </div>
      <a target='_blank' href='../csstryit/trycss_border-side.html' class='w3-btn w3-margin-bottom w3-margin-top'>Попробуйте сами &raquo;</a>
    </div>

    <p>Пример выше даёт тот же результат, что и этот:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        p {<br>&nbsp;
        border-style: dotted solid;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_border-side2.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <p>Итак, вот как это работает:</p>
    <p>Если свойство <code class='w3-codespan'>border-style</code> имеет четыре значения:</p>
    <ul>
      <li><b>border-style: dotted solid double dashed; </b>
        <ul>
          <li>верхняя граница dotted</li>
          <li>правая граница solid</li>
          <li>нижняя граница double</li>
          <li>левая граница dashed</li>
        </ul>
      </li>
    </ul>
    <p>Если свойство <code class='w3-codespan'>border-style</code> имеет три значения:</p>
    <ul>
      <li><b>border-style: dotted solid double;</b>
        <ul>
          <li>верхняя граница dotted</li>
          <li>правая и левая границы solid</li>
          <li>нижняя граница double</li></ul>
      </li>
    </ul>
    <p>Если свойство <code class='w3-codespan'>border-style</code> имеет два значения:</p>
    <ul>
      <li><b>border-style: dotted solid;</b>
        <ul>
          <li>верхняя и нижняя границы dotted</li>
          <li>правая и левая границы solid</li></ul>
      </li>
    </ul>
    <p>Если свойство <code class='w3-codespan'>border-style</code> имеет одно значение:</p>
    <ul>
      <li><b>border-style: dotted;</b><ul><li>все четыре границы dotted</li></ul></li>
    </ul>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        /* четыре значения */<br>p {<br>&nbsp; border-style: dotted solid double dashed; <br>}<br><br>/* три значения */<br>p {<br>&nbsp; border-style: dotted solid double; <br>}<br>
        <br>/* два значения */<br>p {<br>&nbsp; border-style: dotted solid; <br>}<br><br>/* одно значение */<br>p {<br>&nbsp; border-style: dotted; <br>}</div>
      <a target='_blank' href='../csstryit/trycss_border-side3.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-note w3-panel'>
      <p>В приведенном выше примере используется свойство <code class='w3-codespan'>border-style</code>. Однако он также работает с <code class='w3-codespan'>border-width</code> и <code class='w3-codespan'>border-color</code>.</p>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_border_color.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_border_shorthand.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>