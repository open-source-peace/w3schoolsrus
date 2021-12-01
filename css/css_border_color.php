<?php include '../include/head.php'; ?>
  <title>CSS Цвет границы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Цвет границы. Как установить цвет границы HTML-элемента? Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Цвет границы</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_border_width.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_border_sides.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS Цвет границы</h2>
    <p>Свойство <code class='w3-codespan'>border-color</code> используется для установки цвета четырех границ.</p>
    <p>Цвет может быть установлен:</p>
    <ul>
      <li>name - укажите название цвета, например &quot;red&quot;</li>
      <li>HEX - укажите значение HEX, например &quot;#ff0000&quot;</li>
      <li>RGB - укажите значение RGB, например &quot;rgb(255,0,0)&quot;</li>
      <li>HSL - укажите значение HSL, например &quot;hsl(0, 100%, 50%)&quot;</li>
      <li>transparent</li>
    </ul>
    <p><strong>Примечание:</strong> Если <code class='w3-codespan'>border-color</code> не задан, он наследует цвет элемента.</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Демонстрация разных цветов границы:</p>
      <div class='w3-code notranslate cssHigh'>
        p.one
        {<br>
        &nbsp;
        border-style: solid;<br>
        &nbsp;
        border-color: red;<br>
        }<br><br>
        p.two
        {<br>
        &nbsp;
        border-style: solid;<br>
        &nbsp;&nbsp;border-color: green;<br>
        }<br><br>p.three {<br>&nbsp;&nbsp;border-style: dotted;<br>&nbsp;&nbsp;border-color:
        blue;<br>}</div>
      <p>Результат:</p>
      <div class='w3-white w3-padding notranslate'>
        <div style='border-style: solid;border-color: red;padding:8px;margin-top:8px;margin-bottom:16px'>Красная граница</div>
        <div style='border-style: solid;border-color: green;padding:8px;margin-top:8px;margin-bottom:16px'>Зеленая граница</div>
        <div style='border-style: dotted;border-color: blue;padding:8px;margin-top:8px;margin-bottom:8px'>Синяя граница</div>
      </div>
      <a target='_blank' href='../csstryit/trycss_border-color1.html' class='w3-btn w3-margin-bottom w3-margin-top'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Определенные цвета сторон</h2>
    <p>Свойство <code class='w3-codespan'>border-color</code> может иметь от одного до четырех значений (для верхней границы, правой границы, нижней границы и левой границы).</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        p.one {<br>&nbsp;&nbsp;border-style: solid;<br>&nbsp;&nbsp;border-color: red green blue yellow;
        /* красный сверху, зеленый справа, синий снизу и желтый слева */<br>}</div>
      <a target='_blank' href='../csstryit/trycss_border-color2.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HEX Значения</h2>
    <p>Цвет границы также можно указать с помощью шестнадцатеричного значения (HEX):</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        p.one {<br>&nbsp;&nbsp;border-style: solid;<br>&nbsp;&nbsp;border-color: #ff0000; /* красный
        */<br>}</div>
      <a target='_blank' href='../csstryit/trycss_border-color-hex.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>RGB Значения</h2>
    <p>Или используя значения RGB:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        p.one {<br>&nbsp; border-style: solid;<br>&nbsp; border-color: rgb(255, 0, 0);
        /* красный */<br>}</div>
      <a target='_blank' href='../csstryit/trycss_border-color-rgb.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HSL Значения</h2>
    <p>Вы также можете использовать значения HSL:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        p.one {<br>&nbsp; border-style: solid;<br>&nbsp; border-color: hsl(0, 100%, 50%);
        /* красный */<br>}</div>
      <a target='_blank' href='../csstryit/trycss_border-color-hsl.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-note w3-panel'>
      <p>Вы можете узнать больше о значениях HEX, RGB и HSL в разделах <a href='css_colors.php'>CSS Цвета</a> на нашем сайте <strong>W3Schools на русском</strong>.</p>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_border_width.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_border_sides.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>