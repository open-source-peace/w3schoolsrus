<?php include '../include/head.php'; ?>
  <title>CSS Цвет HSL. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Цвет HSL. Стилизация веб-страниц. Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
  <script src="../lib/w3color.js"></script>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class="color_h1">HSL Цвета</span></h1>
    <div class="w3-clear nextprev">
      <a class="w3-left w3-btn" href="css_colors_hex.php">&#10094; Prev</a>
      <a class="w3-right w3-btn" href="css_background.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>HSL значение</h2>
    <p>В CSS цвет можно указать с помощью hue, saturation, lightness (HSL) (оттенка, насыщенности, яркости) в форме:</p>
    <p style="font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">hsl(<em>hue</em>, <em>saturation</em>, <em>lightness</em>)</p>
    <p>Hue (оттенок) - это градус на цветовом круге от 0 до 360. Где 0 - красный, 120 - зеленый, а 240 - синий.</p>
    <p>Saturation (насыщенность) - процентное значение, 0% - оттенок серого, 100% - полный цвет.</p>
    <p>Lightness (яркость) также выражается в процентах, 0% - черный, 50% - ни светлый, ни темный, 100% - белый.</p>
    <p>Поэкспериментируйте, смешивая значения HSL ниже:</p>

    <div class="w3-container xw3-light-grey">
      <div class="w3-row w3-container">
        <div class="w3-col m2 w3-container w3-center">
        </div>
        <div class="w3-col m8 w3-container w3-center">
          <div id="hslresult" style="line-height:80px;"><p id="hslresulttext" style="font-size:120%;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace;">&nbsp;</p></div>
        </div>
        <div class="w3-col m2 w3-container w3-center">
        </div>
      </div>
      <div class="w3-row w3-container">
        <div class="w3-col m4 w3-container w3-center">
          <p>HUE</p>
          <input onchange="changeHsl()" oninput="changeHsl()" type="range" id="slideHue" name="slideHue" value="0" min="0" max="360">
          <div id="valHue" style="font-size:120%;font-family:Consolas, 'Courier New', Courier, monospace;">0</div>
        </div>
        <div class="w3-col m4 w3-container w3-center">
          <p>SATURATION</p>
          <input onchange="changeHsl()" oninput="changeHsl()" type="range" id="slideSat" name="slideSat" value="100" min="0" max="100">
          <div id="valSat" style="font-size:120%;font-family:Consolas, 'Courier New', Courier, monospace;">100%</div>
        </div>
        <div class="w3-col m4 w3-container w3-center">
          <p>LIGHTNESS</p>
          <input onchange="changeHsl()" oninput="changeHsl()" type="range" id="slideLight" name="slideLight" value="50" min="0" max="100">
          <div id="valLight" style="font-size:120%;font-family:Consolas, 'Courier New', Courier, monospace;">50%</div>
        </div>
      </div>
    </div>

    <div class="w3-example">
      <h3>Пример</h3>
      <div class="notranslate w3-white w3-container">
        <div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsl(0, 100%, 50%);">hsl(0, 100%, 50%)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsl(240, 100%, 50%)">hsl(240, 100%, 50%)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsl(147, 50%, 47%);">hsl(147, 50%, 47%)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsl(300, 76%, 72%);">hsl(300, 76%, 72%)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsl(39, 100%, 50%);">hsl(39, 100%, 50%)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsl(248, 53%, 58%);">hsl(248, 53%, 58%)</div>
          </div>
        </div>
      </div>
      <br>
      <a target="_blank" href="../csstryit/trycss_color_hsl2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h3>Saturation - Насыщенность</h3>
    <p>Насыщенность можно описать как интенсивность цвета.</p>
    <p>100% чистый цвет, без оттенков серого.</p>
    <p>50% - это 50% серого, но цвет все равно виден.</p>
    <p>0% полностью серый, цвет больше не виден.</p>

    <div class="w3-example">
      <h3>Пример</h3>
      <div class="notranslate w3-white w3-container">
        <div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsl(0, 100%, 50%);">hsl(0, 100%, 50%)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsl(0, 80%, 50%)">hsl(0, 80%, 50%)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsl(0, 60%, 50%);">hsl(0, 60%, 50%)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsl(0, 40%, 50%);">hsl(0, 40%, 50%)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsl(0, 20%, 50%);">hsl(0, 20%, 50%)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsl(0, 0%, 50%);">hsl(0, 0%, 50%)</div>
          </div>
        </div>
      </div>
      <br>
      <a target="_blank" href="../csstryit/trycss_color_hsl_saturation.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h3>Lightness - Яркость</h3>
    <p>Яркость цвета можно описать как количество света, которое вы хотите придать цвету, где 0% означает отсутствие света (черный), 50% означает 50% света (ни темный, ни светлый), 100% означает полную яркость (белый).</p>

    <div class="w3-example">
      <h3>Пример</h3>
      <div class="notranslate w3-white w3-container">
        <div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsl(0, 100%, 0%);">hsl(0, 100%, 0%)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsl(0, 100%, 25%)">hsl(0, 100%, 25%)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsl(0, 100%, 50%);">hsl(0, 100%, 50%)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsl(0, 100%, 75%);">hsl(0, 100%, 75%)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsl(0, 100%, 90%);color:#555555">hsl(0, 100%, 90%)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsl(0, 100%, 100%);color:#555555;">hsl(0, 100%, 100%)</div>
          </div>
        </div>
      </div>
      <br>
      <a target="_blank" href="../csstryit/trycss_color_hsl_lightness.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <p>Оттенки серого часто определяются путем установки оттенка и насыщенности на 0 и регулировки яркости от 0% до 100%, чтобы получить более темные/более светлые оттенки:</p>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="notranslate w3-white w3-container">
        <div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsl(0, 0%, 0%);">hsl(0, 0%, 0%)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsl(0, 0%, 24%)">hsl(0, 0%, 24%)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsl(0, 0%, 47%);">hsl(0, 0%, 47%)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsl(0, 0%, 71%);">hsl(0, 0%, 71%)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsl(0, 0%, 94%);color:#555555">hsl(0, 0%, 94%)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsl(0, 0%, 100%);color:#555555;">hsl(0, 0%, 100%)</div>
          </div>
        </div>
      </div>
      <br>
      <a target="_blank" href="../csstryit/trycss_color_hsl_gray.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HSLA значение</h2>
    <p>Значения цвета HSLA являются расширением значений цвета HSL с альфа-каналом, который определяет непрозрачность цвета.</p>
    <p>Значение цвета HSLA указывается с помощью:</p>
    <p style="font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">hsla(<em>hue,</em> <em>saturation</em>, <em>lightness, alpha</em>)</p>
    <p>Параметр альфа - это число от 0,0 (полностью прозрачный) до 1,0 (совсем не прозрачный):</p>
    <p>Поэкспериментируйте, смешивая значения HSLA ниже:</p>

    <div class="w3-container xw3-light-grey">
      <div class="w3-row w3-container">
        <div class="w3-col m2 w3-container w3-center">
        </div>
        <div class="w3-col m8 w3-container w3-center">
          <div id="hslaresult" style="line-height:80px;"><p id="hslaresulttext" style="font-size:120%;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace;">&nbsp;</p></div>
        </div>
        <div class="w3-col m2 w3-container w3-center">
        </div>
      </div>
      <div class="w3-row w3-container">
        <div class="w3-col m3 w3-container w3-center">
          <p>HUE</p>
          <input onchange="changeHsla()" oninput="changeHsla()" type="range" id="slideHueA" name="slideHueA" value="0" min="0" max="360">
          <div id="valHueA" style="font-size:120%;font-family:Consolas, 'Courier New', Courier, monospace;">0</div>
        </div>
        <div class="w3-col m3 w3-container w3-center">
          <p>SATURATION</p>
          <input onchange="changeHsla()" oninput="changeHsla()" type="range" id="slideSatA" name="slideSatA" value="100" min="0" max="100">
          <div id="valSatA" style="font-size:120%;font-family:Consolas, 'Courier New', Courier, monospace;">100%</div>
        </div>
        <div class="w3-col m3 w3-container w3-center">
          <p>LIGHTNESS</p>
          <input onchange="changeHsla()" oninput="changeHsla()" type="range" id="slideLightA" name="slideLightA" value="50" min="0" max="100">
          <div id="valLightA" style="font-size:120%;font-family:Consolas, 'Courier New', Courier, monospace;">50%</div>
        </div>
        <div class="w3-col m3 w3-container w3-center">
          <p>ALPHA</p>
          <input onchange="changeHsla()" oninput="changeHsla()" type="range" id="slideHslAlpha" name="slideHslAlpha" value="5" min="0" max="10">
          <div id="valHslAlpha" style="font-size:120%;font-family:Consolas, 'Courier New', Courier, monospace;">0.5</div>
        </div>
      </div>
    </div>

    <div class="w3-example">
      <h3>Пример</h3>
      <div class="notranslate w3-white">
        <div class="w3-row w3-center"
             style="
    line-height:80px;
    color:white;
    font-size:20px;
    font-weight:bold;
    font-family:Consolas, 'Courier New', Courier, monospace;
    background-image:url(../images/img_bg_eyeicon.png), url(../images/img_bg_transparent.gif);
    background-repeat:no-repeat, repeat;
    background-position:center, top left;
    background-color:#fff;">
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsla(9, 100%, 64%, 0);color:#555555;">hsla(9, 100%, 64%, 0)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsla(9, 100%, 64%, 0.2);color:#555555;">hsla(9, 100%, 64%, 0.2)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsla(9, 100%, 64%, 0.4);">hsla(9, 100%, 64%, 0.4)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsla(9, 100%, 64%, 0.6);">hsla(9, 100%, 64%, 0.6)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsla(9, 100%, 64%, 0.8);">hsla(9, 100%, 64%, 0.8)</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:hsla(9, 100%, 64%, 1);">hsla(9, 100%, 64%, 1)</div>
          </div>
        </div>
      </div>
      <br>
      <a target="_blank" href="../csstryit/trycss_color_hsla2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <script>
        //changeRed(255)
        //changeGreen(0)
        //changeBlue(0)
        changeHsl("h");
        function changeHsl(x) {
            var col, h, s, l;
            h = document.getElementById("slideHue").value;
            s = document.getElementById("slideSat").value;
            l = document.getElementById("slideLight").value;
            col = w3color("hsl(" + h + "," + s/100 + "," + l/100 + ")");
            document.getElementById('valHue').innerHTML = col.toHsl().h;
            document.getElementById('valSat').innerHTML = Math.round(col.toHsl().s * 100) + "%";
            document.getElementById('valLight').innerHTML = Math.round(col.toHsl().l * 100) + "%";
            document.getElementById('hslresult').style.backgroundColor = col.toHslString();
            document.getElementById('hslresulttext').innerHTML = col.toHslString();
            if (col.isDark(150)) {
                document.getElementById('hslresulttext').style.color = "#fff";
            } else {
                document.getElementById('hslresulttext').style.color = "#1f2d3d";
            }
        }
        changeHsla("h");
        function changeHsla(x) {
            var col, h, s, l, a;
            h = document.getElementById("slideHueA").value;
            s = document.getElementById("slideSatA").value;
            l = document.getElementById("slideLightA").value;
            a = document.getElementById("slideHslAlpha").value/10;
            col = w3color("hsla(" + h + "," + s/100 + "," + l/100 + "," + a + ")");
            document.getElementById('valHueA').innerHTML = col.toHsl().h;
            document.getElementById('valSatA').innerHTML = Math.round(col.toHsl().s * 100) + "%";
            document.getElementById('valLightA').innerHTML = Math.round(col.toHsl().l * 100) + "%";
            document.getElementById('valHslAlpha').innerHTML = col.toHsl().a;
            document.getElementById('hslaresult').style.backgroundColor = col.toHslaString();
            document.getElementById('hslaresulttext').innerHTML = col.toHslaString();
            if (col.isDark(150) && a > 0.2) {
                document.getElementById('hslaresulttext').style.color = "#fff";
            } else {
                document.getElementById('hslaresulttext').style.color = "#1f2d3d";
            }
        }
    </script>
    <hr>
    <div class="w3-clear nextprev">
      <a class="w3-left w3-btn" href="css_colors_hex.php">&#10094; Prev</a>
      <a class="w3-right w3-btn" href="css_background.php">Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>