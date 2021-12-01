<?php include '../include/head.php'; ?>

<title>HTML цвета - HEX. <?php include '../include/title.php'; ?></title>
<meta name="description" content="HTML Цвета - HEX. <?php include '../include/description.php'; ?>">
<script src="../lib/w3color.js"></script>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class="color_h1">HEX Цвета</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_colors_rgb.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_colors_hsl.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Шестнадцатеричный цвет указывается с: #RRGGBB, где шестнадцатеричные целые числа RR (красный), GG (зеленый) и BB (синий) определяют компоненты цвета.</p>
    <hr>

    <h2>HEX Значения цвета</h2>
    <p>В HTML цвет можно указать, используя шестнадцатеричное значение в форме:</p>
    <p style="font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">#<em>rrggbb</em></p>
    <p>Где rr (красный), gg (зеленый) и bb (синий) - шестнадцатеричные значения от 00 до ff (такие же, как десятичные 0-255).</p>
    <p>Например, #ff0000 отображается красным, поскольку для красного установлено самое высокое значение (ff), а для двух других (зеленый и синий) установлено значение 00.</p>
    <p>Другой пример, #00ff00 отображается зеленым, поскольку для зеленого установлено самое высокое значение (ff), а для других двух (красного и синего) установлено значение 00.</p>
    <p>Для отображения черного цвета установите для всех параметров цвета значения 00, например: #000000.</p>
    <p>Для просмотра белый, установите для всех параметров цвета значения ff, например: #ffffff.</p>

    <p>Экспериментируйте, смешивая значения HEX, приведенные ниже:</p>
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
        <a target="_blank" href="../htmltryit/tryitb051.html?filename=tryhtml_color_hex" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Оттенки серого</h2>
    <p>Оттенки серого часто определяют, используя равные значения для всех трех параметров:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="notranslate w3-white w3-container">
            <div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:#404040;">#404040</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:#686868;">#686868</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:#A0A0A0;">#a0a0a0</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:#BEBEBE;">#bebebe</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:#dcdcdc;color:#555555">#dcdcdc</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:#f8f8f8;color:#555555">#f8f8f8</div>
                </div>
            </div>
        </div>
        <br>
        <a target="_blank" href="../htmltryit/tryit3d96.html?filename=tryhtml_color_hex_gray" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
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
                document.getElementById('hexresulttext').style.color = "#ffffff";
            } else {
                document.getElementById('hexresulttext').style.color = "#1f2d3d";
            }
        }
    </script>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_colors_rgb.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_colors_hsl.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
