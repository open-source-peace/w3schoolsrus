<?php include '../include/head.php'; ?>
  <title>CSS3 Цвета. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS3 Цвета. Какие используются цвета в каскадных таблицах стилей? Какие веб-цвета применяются для стилизации веб-страниц? Значения HEX, RGB, HSL. Стилизация веб-страниц. Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
      <h1>CSS <span class="color_h1"> Цвета</span></h1>
      <div class="w3-clear nextprev">
          <a class="w3-left w3-btn" href="css3_backgrounds.php">&#10094; Prev</a>
          <a class="w3-right w3-btn" href="css_colors_keywords.php">Next &#10095;</a>
      </div>
      <hr>
      <p class="intro">CSS поддерживает <a href="css_colors.php">140+ названий цветов, HEX значения, RGB значения</a>, RGBA
          значения, HSL значения, HSLA значения и полутона (непрозрачность).</p>
      <hr>

      <h2>RGBA Цвета</h2>
      <p>Цветовые значения RGBA являются расширением цветовых значений RGB с альфа-каналом, который определяет непрозрачность для цвета.</p>
      <p>Значение цвета RGBA указывается с помощью: rgba (красный, зеленый, синий, альфа). Альфа-параметр - это число от 0,0 (полностью прозрачное) до 1,0 (полностью непрозрачное).</p>

      <div style="background: rgba(255, 0, 0, 0.2);padding:18px">rgba(255, 0, 0, 0.2);</div>
      <div style="background: rgba(255, 0, 0, 0.4);padding:18px">rgba(255, 0, 0, 0.4);</div>
      <div style="background: rgba(255, 0, 0, 0.6);padding:18px">rgba(255, 0, 0, 0.6);</div>
      <div style="background: rgba(255, 0, 0, 0.8);padding:18px">rgba(255, 0, 0, 0.8);</div>

      <p class="w3-margin-top">В следующем примере определяются разные цвета RGBA:</p>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              #p1 {background-color: rgba(255, 0, 0, 0.3);}&nbsp; /* red
              with opacity */<br>#p2 {background-color: rgba(0, 255, 0, 0.3);}&nbsp;&nbsp;/* зеленый с непрозрачностью */<br>#p3 {background-color: rgba(0, 0, 255, 0.3);}&nbsp;&nbsp;/* синий с непрозрачностью */
          </div>
          <a target="_blank" href="../csstryit/trycss3_color_rgba.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>HSL Цвета</h2>
      <p>HSL означает Hue, Saturation и Lightness (оттенок, насыщенность и яркость).</p>
      <p>Значение цвета HSL указывается с помощью: hsl(hue, saturation, lightness).</p>
      <ol>
          <li>Hue (оттенок) - это градус на цветовом круге (от 0 до 360):
              <ul>
                  <li>0 (или 360) - это красный (red)</li>
                  <li>120 - это зеленый (green)</li>
                  <li>240 - это синий (blue)</li>
              </ul>
          </li>
          <li>Saturation (насыщенность) - это процентное значение: 100% это полный цвет.</li>
          <li>Lightness (яркость) - это также процент; 0% тёмный (черный) и 100% белый.</li>
      </ol>

      <div style="background: hsl(0, 100%, 30%);padding:18px">hsl(0, 100%, 30%);</div>
      <div style="background: hsl(0, 100%, 50%);padding:18px">hsl(0, 100%, 50%);</div>
      <div style="background: hsl(0, 100%, 70%);padding:18px">hsl(0, 100%, 70%);</div>
      <div style="background: hsl(0, 100%, 90%);padding:18px">hsl(0, 100%, 90%);</div>

      <p class="w3-margin-top">В следующем примере определяются разные цвета HSL:</p>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              #p1 {background-color: hsl(120, 100%, 50%);}&nbsp; /* зеленый */<br>#p2 {background-color: hsl(120, 100%, 75%);}&nbsp;&nbsp;/* светло-зеленый */<br>#p3 {background-color: hsl(120, 100%, 25%);}&nbsp;&nbsp;/* темно-зеленый */<br>#p4 {background-color: hsl(120, 60%, 70%);}&nbsp;&nbsp;&nbsp;/* пастельно-зеленый */
          </div>
          <a target="_blank" href="../csstryit/trycss3_color_hsl.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>HSLA Цвета</h2>
      <p>Значения цвета HSLA являются расширением значений цвета HSL с альфа-каналом, который определяет непрозрачность для цвета.</p>
      <p>Значение цвета HSLA задается с помощью: hsla (оттенок, насыщенность, яркость, альфа), где параметр альфа определяет непрозрачность. Альфа-параметр - это число от 0,0 (полностью прозрачное) до 1,0 (полностью непрозрачное).</p>

      <div style="background: hsla(0, 100%, 30%, 0.3);padding:18px">hsla(0, 100%, 30%, 0.3);</div>
      <div style="background: hsla(0, 100%, 50%, 0.3);padding:18px">hsla(0, 100%, 50%, 0.3);</div>
      <div style="background: hsla(0, 100%, 70%, 0.3);padding:18px">hsla(0, 100%, 70%, 0.3);</div>
      <div style="background: hsla(0, 100%, 90%, 0.3);padding:18px">hsla(0, 100%, 90%, 0.3);</div>

      <p class="w3-margin-top">В следующем примере определяются разные цвета HSLA:</p>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              #p1 {background-color: hsla(120, 100%, 50%, 0.3);}&nbsp; /* зеленый с непрозрачностью */<br>#p2 {background-color: hsla(120, 100%, 75%, 0.3);}&nbsp;&nbsp;/* светло-зеленый с непрозрачностью */<br>#p3 {background-color: hsla(120, 100%, 25%, 0.3);}&nbsp;&nbsp;/* темно-зеленый с непрозрачностью */<br>#p4 {background-color: hsla(120, 60%, 70%, 0.3);}&nbsp;&nbsp;&nbsp;/* пастельно-зеленый с непрозрачностью */
          </div>
          <a target="_blank" href="../csstryit/trycss3_color_hsla.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Opacity - Непрозрачность</h2>
      <p>CSS свойство <code class="w3-codespan">opacity</code> устанавливает непрозрачность для всего элемента (цвет фона и текст будут непрозрачными/прозрачными).</p>
      <p>Значение свойства <code class="w3-codespan">opacity</code> должно быть числом от 0,0 (полностью прозрачный) до 1,0 (полностью непрозрачный).</p>

      <div style="background:rgb(255, 0, 0);opacity:0.2;padding:18px">rgb(255, 0, 0);opacity:0.2;</div>
      <div style="background:rgb(255, 0, 0);opacity:0.4;padding:18px">rgb(255, 0, 0);opacity:0.4;</div>
      <div style="background:rgb(255, 0, 0);opacity:0.6;padding:18px">rgb(255, 0, 0);opacity:0.6;</div>
      <div style="background:rgb(255, 0, 0);opacity:0.8;padding:18px">rgb(255, 0, 0);opacity:0.8;</div>

      <p class="w3-margin-top">Обратите внимание, что текст выше также будет прозрачным/непрозрачным!</p>
      <p>В следующем примере показаны разные элементы с непрозрачностью:</p>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              #p1 {background-color:rgb(255,0,0);opacity:0.6;}&nbsp; /* красный с непрозрачностью
              */<br>#p2 {background-color:rgb(0,255,0);opacity:0.6;}&nbsp; /* зеленый с непрозрачностью */<br>#p3 {background-color:rgb(0,0,255);opacity:0.6;}&nbsp; /* синий с непрозрачностью */
          </div>
          <a target="_blank" href="../csstryit/trycss3_color_opacity.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <div class="w3-container w3-dark-grey w3-padding">
          <h2 class="shadow-black-1">Проверьте себя с помощью упражнений!</h2>
          <div class="w3-bar w3-margin-bottom">
              <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_colors1" target="_blank" rel="nofollow">Упражнение 1 &raquo;</a>
              <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_colors2" target="_blank" rel="nofollow">Упражнение 2 &raquo;</a>
              <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_colors3" target="_blank" rel="nofollow">Упражнение 3 &raquo;</a>
              <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_colors4" target="_blank" rel="nofollow">Упражнение 4 &raquo;</a>
          </div>
      </div>

      <hr>
      <div class="w3-clear nextprev">
          <a class="w3-left w3-btn" href="css3_backgrounds.php">&#10094; Prev</a>
          <a class="w3-right w3-btn" href="css_colors_keywords.php">Next &#10095;</a>
      </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>