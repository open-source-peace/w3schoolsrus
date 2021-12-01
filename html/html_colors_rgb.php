<?php include '../include/head.php'; ?>

<title>HTML цвета - RGB. <?php include '../include/title.php'; ?></title>
<meta name="description" content="HTML цвета - RGB. <?php include '../include/description.php'; ?>">
<script src="../lib/w3color.js"></script>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class="color_h1">RGB и RGBA цвета</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_colors.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_colors_hex.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Значение цвета RGB отображает <span style="color:red">КРАСНЫЙ (RED)</span>, <span style="color:green">ЗЕЛЕНЫЙ (GREEN)</span> и <span style="color:blue">СИНИЙ (BLUE)</span> источники света.</p>
    <p class="intro">Значение цвета RGBA - это расширение RGB с альфа-каналом (opacity/непрозрачность).</p>
    <hr>

    <h2>RGB Значение цвета</h2>
    <p>В HTML цвет может быть указан как значение RGB, используя эту формулу:</p>
    <p style="font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">rgb(<em>red,</em> <em>green</em>, <em>blue</em>)</p>
    <p>Каждый параметр (красный, зеленый и синий) определяет интенсивность цвета со значением от 0 до 255.</p>
    <p>Это означает, что существует 256 x 256 x 256 = 16777216 возможных цветов!</p>
    <p>Например, rgb (255, 0, 0) отображается красным, поскольку для красного установлено самое высокое значение (255), а для двух других (зеленый и синий) - 0.</p>
    <p>Другой пример, rgb (0, 255, 0) отображается зеленым, поскольку зеленому установлено самое высокое значение (255), а другим двум (красному и синему) установлено 0.</p>
    <p>Для отображения черного цвета установите для всех параметров цвета значение 0, например: rgb(0, 0, 0).</p>
    <p>Чтобы отобразить белый цвет, установите для всех цветовых параметров значение 255, например: rgb(255, 255, 255).</p>
    <p>Экспериментируйте, смешивая значения RGB ниже:</p>
    <div class="w3-container xw3-light-grey">
        <div class="w3-row w3-container">
            <div class="w3-col m2 w3-container w3-center">
            </div>
            <div class="w3-col m8 w3-container w3-center">
                <div id="rgbresult" style="line-height:80px;"><p id="rgbresulttext" style="font-size:120%;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace;">&nbsp;</p></div>
            </div>
            <div class="w3-col m2 w3-container w3-center">
            </div>
        </div>
        <div class="w3-row w3-container">
            <div class="w3-col m4 w3-container w3-center">
                <p>RED</p>
                <input onchange="changeRGB()" oninput="changeRGB()" type="range" id="slideRed" name="slideRed" value="255" min="0" max="255">
                <div id="valRed2" style="background-color:red;border-radius:5px;color:white;opacity:0.8">255</div>
            </div>
            <div class="w3-col m4 w3-container w3-center">
                <p>GREEN</p>
                <input onchange="changeRGB()" oninput="changeRGB()" type="range" id="slideGreen" name="slideGreen" value="99" min="0" max="255">
                <div id="valGreen2" style="background-color:#00ff00;border-radius:5px;opacity:0.8">0</div>
            </div>
            <div class="w3-col m4 w3-container w3-center">
                <p>BLUE</p>
                <input onchange="changeRGB()" oninput="changeRGB()" type="range" id="slideBlue" name="slideBlue" value="71" min="0" max="255">
                <div id="valBlue2" style="background-color:blue;border-radius:5px;color:white;opacity:0.8">0</div>
            </div>
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="notranslate w3-white w3-container">
            <div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgb(255, 0, 0);">rgb(255, 0, 0)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgb(0, 0, 255);">rgb(0, 0, 255)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgb(60, 179, 113);">rgb(60, 179, 113)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgb(238, 130, 238);">rgb(238, 130, 238)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgb(255, 165, 0);">rgb(255, 165, 0)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgb(106, 90, 205);">rgb(106, 90, 205)</div>
                </div>
            </div>
        </div>
        <br>
        <a target="_blank" href="../htmltryit/tryit77a4.html?filename=tryhtml_color_rgb" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Оттенки серого</h2>
    <p>Оттенки серого часто определяют, используя равные значения для всех трех параметров:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="notranslate w3-white w3-container">
            <div class="w3-row w3-center" style="line-height:80px;color:white;font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgb(60, 60, 60);">rgb(60, 60, 60)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgb(100, 100, 100);">rgb(100, 100, 100)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgb(140, 140, 140);">rgb(140, 140, 140)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgb(180, 180, 180);">rgb(180, 180, 180)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgb(200, 200, 200);color:#555555">rgb(200, 200, 200)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgb(240, 240, 240);color:#555555">rgb(240, 240, 240)</div>
                </div>
            </div>
        </div>
        <br>
        <a target="_blank" href="../htmltryit/tryit5352.html?filename=tryhtml_color_rgb_gray" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>RGBA Значения цвета</h2>
    <p>Значение цвета RGBA - это расширение значений цвета RGB с помощью альфа-канала, определяет непрозрачность цвета.</p>
    <p>Значения цвета RGBA указаны с:</p>
    <p style="font-size:20px;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace">rgba(<em>red,</em> <em>green</em>, <em>blue, alpha</em>)</p>
    <p>Параметр альфа - это число от 0,0 (полностью прозрачный) до 1,0 (совсем не прозрачно):</p>
    <p>Экспериментируйте, смешивая значение RGBA ниже:</p>
    <div class="w3-container xw3-light-grey">
        <div class="w3-row w3-container">
            <div class="w3-col m2 w3-container w3-center">
            </div>
            <div class="w3-col m8 w3-container w3-center">
                <div id="rgbaresult" style="line-height:80px;"><p id="rgbaresulttext" style="font-size:120%;font-weight:bold;font-family:Consolas, 'Courier New', Courier, monospace;">&nbsp;</p></div>
            </div>
            <div class="w3-col m2 w3-container w3-center">
            </div>
        </div>
        <div class="w3-row w3-container">
            <div class="w3-col m3 w3-container w3-center">
                <p>RED</p>
                <input onchange="changeRGBA()" oninput="changeRGBA()" type="range" id="slideRedA" name="slideRedA" value="255" min="0" max="255">
                <div id="valRed2A" style="background-color:red;border-radius:5px;color:white;opacity:0.8">255</div>
            </div>
            <div class="w3-col m3 w3-container w3-center">
                <p>GREEN</p>
                <input onchange="changeRGBA()" oninput="changeRGBA()" type="range" id="slideGreenA" name="slideGreenA" value="99" min="0" max="255">
                <div id="valGreen2A" style="background-color:#00ff00;border-radius:5px;opacity:0.8">0</div>
            </div>
            <div class="w3-col m3 w3-container w3-center">
                <p>BLUE</p>
                <input onchange="changeRGBA()" oninput="changeRGBA()" type="range" id="slideBlueA" name="slideBlueA" value="71" min="0" max="255">
                <div id="valBlue2A" style="background-color:blue;border-radius:5px;color:white;opacity:0.8">0</div>
            </div>
            <div class="w3-col m3 w3-container w3-center">
                <p>ALPHA</p>
                <input onchange="changeRGBA()" oninput="changeRGBA()" type="range" id="slideAlphaA" name="slideAlphaA" value="5" min="0" max="10">
                <div id="valAlpha2A" style="background-color:blue;border-radius:5px;color:white;opacity:0.8">0</div>
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
                    <div style="background-color:rgba(255, 99, 71, 0);color:#555555;">rgba(255, 99, 71, 0)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgba(255, 99, 71, 0.2);color:#555555;">rgba(255, 99, 71, 0.2)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgba(255, 99, 71, 0.4);">rgba(255, 99, 71, 0.4)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgba(255, 99, 71, 0.6);">rgba(255, 99, 71, 0.6)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgba(255, 99, 71, 0.8);">rgba(255, 99, 71, 0.8)</div>
                </div>
                <div class="w3-col m6 w3-padding">
                    <div style="background-color:rgba(255, 99, 71, 1);">rgba(255, 99, 71, 1)</div>
                </div>
            </div>
        </div>
        <br>
        <a target="_blank" href="../htmltryit/tryit3916.html?filename=tryhtml_color_rgba" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <script>
        //changeRed(255)
        //changeGreen(0)
        //changeBlue(0)
        changeRGB("r");
        function changeRGB(x) {
            var col, r, g, b;
            r = document.getElementById("slideRed").value;
            g = document.getElementById("slideGreen").value;
            b = document.getElementById("slideBlue").value;
            col = w3color("rgb(" + r + "," + g + "," + b + ")");
            document.getElementById('valRed2').innerHTML = r;
            document.getElementById('valGreen2').innerHTML = g;
            document.getElementById('valBlue2').innerHTML = b;
            document.getElementById('rgbresult').style.backgroundColor = col.toRgbString();
            document.getElementById('rgbresulttext').innerHTML = col.toRgbString();
            if (col.isDark(150)) {
                document.getElementById('rgbresulttext').style.color = "#ffffff";
            } else {
                document.getElementById('rgbresulttext').style.color = "#1f2d3d";
            }
        }
        //function changeGreen(value) {
        //    document.getElementById('valGreen').innerHTML = value;
        //}
        //function changeBlue(value) {
        //    document.getElementById('valBlue').innerHTML = value;
        //}
        changeRGBA("r");
        function changeRGBA(x) {
            var col, r, g, b, a;
            r = document.getElementById("slideRedA").value;
            g = document.getElementById("slideGreenA").value;
            b = document.getElementById("slideBlueA").value;
            a = document.getElementById("slideAlphaA").value/10;
            col = w3color("rgba(" + r + "," + g + "," + b + "," + a + ")");
            document.getElementById('valRed2A').innerHTML = r;
            document.getElementById('valGreen2A').innerHTML = g;
            document.getElementById('valBlue2A').innerHTML = b;
            document.getElementById('valAlpha2A').innerHTML = a;
            document.getElementById('rgbaresult').style.backgroundColor = col.toRgbaString();
            document.getElementById('rgbaresulttext').innerHTML = col.toRgbaString();
            if (col.isDark(150) && a > 0.2) {
                document.getElementById('rgbaresulttext').style.color = "#ffffff";
            } else {
                document.getElementById('rgbaresulttext').style.color = "#1f2d3d";
            }
        }
    </script>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_colors.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_colors_hex.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>