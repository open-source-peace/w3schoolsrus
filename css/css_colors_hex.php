<?php include '../include/head.php'; ?>
  <title>CSS Цвет HEX. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Цвет HEX. Шестнадцатеричное значение цвета. Стилизация веб-страниц. Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
  <script src="../lib/w3color.js"></script>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class="color_h1">HEX Цвета</span></h1>
    <div class="w3-clear nextprev">
      <a class="w3-left w3-btn" href="css_colors_rgb.php">&#10094; Prev</a>
      <a class="w3-right w3-btn" href="css_colors_hsl.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>HEX Значение</h2>
    <p>В CSS цвет можно указать с помощью шестнадцатеричного значения в форме:</p>
    <p style="font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">#<em>rrggbb</em></p>
    <p>Где rr (red), gg (green) и bb (blue) шестнадцатеричные значения между 00 и ff (так же, как и десятичные 0-255).</p>
    <p>Например, #ff0000 отображается красным, потому что для красного установлено самое высокое значение (ff), а для остальных установлено самое низкое значение (00).</p>
    <p>Поэкспериментируйте, смешав значения HEX ниже:</p>

    <div class="w3-container xw3-light-grey">
      <div class="w3-row w3-container">
        <div class="w3-col m2 w3-container w3-center">
        </div>
        <div class="w3-col m8 w3-container w3-center">
          <div id="hexresult" style="line-height:80px;"><p id="hexresulttext" style="font-size:120%;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace;">&nbsp;</p></div>
        </div>
        <div class="w3-col m2 w3-container w3-center">
        </div>
      </div>
      <div class="w3-row w3-container">
        <div class="w3-col m4 w3-container w3-center">
          <p>RED</p>
          <input onchange="changeHex()" oninput="changeHex()" type="range" id="slideRedHex" name="slideRedHex" value="255" min="0" max="255">
          <div id="valRed2Hex" style="font-size:120%;font-family:Consolas, 'Courier New', Courier, monospace;">ff</div>
        </div>
        <div class="w3-col m4 w3-container w3-center">
          <p>GREEN</p>
          <input onchange="changeHex()" oninput="changeHex()" type="range" id="slideGreenHex" name="slideGreenHex" value="99" min="0" max="255">
          <div id="valGreen2Hex" style="font-size:120%;font-family:Consolas, 'Courier New', Courier, monospace;">0</div>
        </div>
        <div class="w3-col m4 w3-container w3-center">
          <p>BLUE</p>
          <input onchange="changeHex()" oninput="changeHex()" type="range" id="slideBlueHex" name="slideBlueHex" value="71" min="0" max="255">
          <div id="valBlue2Hex" style="font-size:120%;font-family:Consolas, 'Courier New', Courier, monospace;">0</div>
        </div>
      </div>
    </div>

    <div class="w3-example">
      <h3>Пример</h3>
      <div class="notranslate w3-white w3-container">

        <div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
          <div class="w3-col m6 w3-padding">
            <div style="background-color:#ff0000;">#ff0000</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:#0000ff;">#0000ff</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:#3cb371;">#3cb371</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:#ee82ee;">#ee82ee</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:#ffa500;">#ffa500</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:#6a5acd;">#6a5acd</div>
          </div>
        </div>
      </div>
      <br>
      <a target="_blank" href="../csstryit/trycss_color_hex2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>Оттенки серого часто определяются с использованием одинаковых значений для всех 3 источников света:</p>

    <div class="w3-example">
      <h3>Пример</h3>
      <div class="notranslate w3-white w3-container">

        <div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
          <div class="w3-col m6 w3-padding">
            <div style="background-color:#000;">#000000</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:#3c3c3c;">#3c3c3c</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:#787878;">#787878</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:#b4b4b4;">#b4b4b4</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:#f0f0f0;color:#555555">#f0f0f0</div>
          </div>
          <div class="w3-col m6 w3-padding">
            <div style="background-color:#fff;color:#555555">#ffffff</div>
          </div>
        </div>
      </div>
      <br>
      <a target="_blank" href="../csstryit/trycss_color_hex_gray.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <script>
        //changeRed(255)
        //changeGreen(0)
        //changeBlue(0)
        changeHex("r");
        function changeHex(x) {
            var col, r, g, b;
            r = document.getElementById("slideRedHex").value;
            g = document.getElementById("slideGreenHex").value;
            b = document.getElementById("slideBlueHex").value;
            col = w3color("rgb(" + r + "," + g + "," + b + ")");
            document.getElementById('valRed2Hex').innerHTML = col.toHexString().substr(1,2);
            document.getElementById('valGreen2Hex').innerHTML = col.toHexString().substr(3,2);
            document.getElementById('valBlue2Hex').innerHTML = col.toHexString().substr(5,2);
            document.getElementById('hexresult').style.backgroundColor = col.toRgbString();
            document.getElementById('hexresulttext').innerHTML = col.toHexString();
            if (col.isDark(150)) {
                document.getElementById('hexresulttext').style.color = "#fff";
            } else {
                document.getElementById('hexresulttext').style.color = "#1f2d3d";
            }
        }
    </script>

    <hr>
    <div class="w3-clear nextprev">
      <a class="w3-left w3-btn" href="css_colors_rgb.php">&#10094; Prev</a>
      <a class="w3-right w3-btn" href="css_colors_hsl.php">Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>