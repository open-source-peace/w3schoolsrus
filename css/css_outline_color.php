<?php include '../include/head.php'; ?>
  <title>CSS Цвет контура. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Цвет контура. Как установить цвет контура элементов HTML? Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Цвет контура</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_outline_width.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_outline_shorthand.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS Цвет контура</h2>
    <p>Свойство <code class='w3-codespan'>outline-color</code> используется для установки цвета контура.</p>
    <p>Цвет может быть установлен с помощью:</p>
    <ul>
      <li>name - укажите название цвета, например &quot;red&quot;</li>
      <li>HEX - укажите шестнадцатеричное значение, например &quot;#ff0000&quot;</li>
      <li>RGB - укажите значение RGB, например &quot;rgb(255,0,0)&quot;</li>
      <li>HSL - укажите значение HSL, например 'hsl(0, 100%, 50%)'</li>
      <li>invert - выполняет инверсию цвета (что обеспечивает видимость контура независимо от цветового фона)</li>
    </ul>

    <p>В следующем примере показаны несколько разных контуров с разными цветами. Также обратите внимание, что эти элементы также имеют тонкую черную рамку внутри контура:</p>
    <p style='border: 2px solid black;outline-style:solid;outline-color:red;padding: 2px 4px;'>Сплошной красный контур.</p>
    <p style='border: 2px solid black;outline-style:dotted;outline-color:blue;padding: 2px 4px;'>Точечный синий контур.</p>
    <p style='border: 2px solid black;outline-style:outset;outline-color:grey;padding: 2px 4px;'>Наружный серый контур.</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        p.ex1
        {<br>
        &nbsp; border: 2px solid black;<br>&nbsp;
        outline-style: solid;<br>
        &nbsp;&nbsp;outline-color: red;<br>
        }<br><br>p.ex2
        {<br>
        &nbsp;&nbsp;border: 2px solid black;<br>&nbsp;
        outline-style: dotted;<br>
        &nbsp;
        outline-color: blue;<br>
        }<br><br>p.ex3
        {<br>
        &nbsp;&nbsp;border: 2px solid black;<br>&nbsp;&nbsp;outline-style: outset;<br>
        &nbsp;&nbsp;outline-color: grey;<br>
        }</div>
      <a target='_blank' href='../csstryit/trycss_outline-color.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HEX Значения</h2>
    <p>Цвет контура также можно указать с помощью шестнадцатеричного значения (HEX):</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        p.ex1 {<br>&nbsp; outline-style: solid;<br>&nbsp; outline-color: #ff0000;
        /* red */<br>}</div>
      <a target='_blank' href='../csstryit/trycss_outline-color-hex.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>RGB Значения</h2>
    <p>Или используя значения RGB:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        p.ex1 {<br>&nbsp; outline-style: solid;<br>&nbsp; outline-color: rgb(255, 0, 0); /*
        red */<br>}</div>
      <a target='_blank' href='../csstryit/trycss_outline-color-rgb.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HSL Значения</h2>
    <p>Вы также можете использовать значения HSL:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        p.ex1 {<br>&nbsp; outline-style: solid;<br>&nbsp; outline-color: hsl(0, 100%, 50%);
        /* red */<br>}</div>
      <a target='_blank' href='../csstryit/trycss_outline-color-hsl.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-note w3-panel'>
      <p>Вы можете узнать больше о значениях HEX, RGB и HSL в разделах <a href='css_colors.php'>CSS Цвета</a> на нашем сайте <strong>W3Schools на русском</strong>.</p>
    </div>
    <hr>

    <h2>Инвертировать цвет</h2>
    <p>В следующем примере используется <code class='w3-codespan'>outline-color: invert</code>, который выполняет инверсию цвета. Это гарантирует, что контур будет виден независимо от цвета фона:</p>
    <p style='border: 1px solid yellow;outline-style:solid;outline-color:invert;padding: 2px 4px;'>Сплошной инвертированный контур.</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        p.ex1
        {<br>
        &nbsp;&nbsp;border: 1px solid yellow;<br>&nbsp;
        outline-style: solid;<br>
        &nbsp;
        outline-color: invert;<br>
        }</div>
      <a target='_blank' href='../csstryit/trycss_outline-color_invert.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_outline_width.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_outline_shorthand.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>