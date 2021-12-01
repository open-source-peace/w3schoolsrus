<?php include '../include/head.php'; ?>
<title>HTML Цвета NCol (Natural Colors). <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Цвета NCol (Natural Colors). Что означает NCol? Натуральные (природные) цвета. Рекомендованный стандарт цвета для CSS4. Как используется NCol-цвет на веб-сайте? <?php include '../include/description.php'; ?>'>
<script src="../lib/w3color.js"></script>
<style>
        .colorinput {
            width:105px;
            padding:25px 0 15px 0;
        }
        .colorslider {
            padding:30px 25px 15px 20px;
        }
        .tableslider {
            width:100%;
            border-collapse:collapse;
        }
        .pointer {
            text-align:center;display:none;position:absolute;top:-14px;left:-2px;
        }
        .pointer div{
            background-color:#ffffff;
            border:1px solid #aaaaaa;
            height:24px;
            width:40px;
            padding:2px 4px;
            position:absolute;
            text-align:center;
            top:-14px;
            left:-15px;
            color:#000000;
            border-radius:4px;
            font:14px verdana;
        }
        .pointer div::selection {
            color: #000000;
            background: #ffffff;
        }
        .pointer i{
            color:#aaaaaa
        }
        @media screen and (max-width:600px) {
            .colorinput {
                padding:25px 0 0 0;
            }
            .colorslider {
                width:100%;
                padding:30px 25px 15px 20px;
            }
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_colors.php'; ?>
<?php include '../include/before_content_colors.php'; ?>

<article>
    <h1><span class="color_h1">NCol Цвета</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_cmyk.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_gradient.php">Next &#10095;</a>
    </div>
    <br>
    <div class="w3-container w3-padding-large" style="background-color:#f1f1f1;border:1px solid #d3d3d3;">
        <h2>NCol Калькулятор</h2>
        <br>
        <div class="w3-row">
            <div class="w3-col m7" id="result01" style="background-color:hsl(0,100%,50%);height:200px"></div>
            <div class="w3-col m1">&nbsp;</div>
            <div class="w3-col m4">
                <div class="w3-large" style="font-family:Consolas, 'courier new';bottom:10px;">
                    <input id="hwb01" type="text" class="w3-input w3-border" onchange="setFullColor()" onkeydown="submitOnEnter(event)">
                    <div id="rgb01" class="w3-margin-top">rgb(255, 0, 0)</div>
                    <div id="hex01" class="w3-margin-top">#ff0000</div>
                    <div id="hsl01" class="w3-margin-top">hsl(0, 100%, 50%)</div>
                </div>
            </div>
        </div>
        <hr style="border-color:#d3d3d3" class="w3-hide-medium w3-hide-large">
        <br>
        <div class="w3-row">
            <div class="w3-col colorinput">
                <div style="width:30px;float:left;">H:</div>
                <input type="text" style="padding-left:6px;width:70px;" id="hue01" oninput="setColor(this)" onchange="setColor(this)" value="R">
            </div>
            <div class="w3-rest colorslider">
                <div id="huetable"></div>
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col colorinput">
                <div style="width:30px;float:left;">W:</div>
                <input type="number" style="padding-left:6px;width:70px;" id="white01" oninput="setColor(this)" onchange="setColor(this)" value="0">
            </div>
            <div class="w3-rest colorslider">
                <div id="whitetable"></div>
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col colorinput">
                <div style="width:30px;float:left;">B:</div>
                <input type="number" style="padding-left:6px;width:70px;" id="black01" oninput="setColor(this)" onchange="setColor(this)" value="0">
            </div>
            <div class="w3-rest colorslider">
                <div id="blacktable"></div>
            </div>
        </div>
        <div id="linktocp"></div>
    </div>
    <script>
        function submitOnEnter(e) {
            keyboardKey = e.which || e.keyCode;
            if (keyboardKey == 13) {
                setFullColor();
            }
        }
        function clickHue(hue) {
            var h = document.getElementById("hue01");
            h.value = hue;
            setColor(h);
        }
        function clickWhite(white) {
            var w = document.getElementById("white01");
            w.value = white;
            setColor(w);
        }
        function clickBlack(black) {
            var b = document.getElementById("black01");
            b.value = black;
            setColor(b);
        }
        function drawHueTable(hue) {
            var x, i, n, c, ncol;
            x = "<table class='tableslider'>"
            x += "<tr>";
            c = "R";
            n = -1;
            for (i = 0; i < 60; i++) {
                if (i == 10) {c = "Y"; n = -1; }
                if (i == 20) {c = "G"; n = -1; }
                if (i == 30) {c = "C"; n = -1; }
                if (i == 40) {c = "B"; n = -1; }
                if (i == 50) {c = "M"; n = -1; }
                n++;
                ncol = c + (n * 10);
                if (n == 0) {ncol = c; }
                x += "<td style='position:relative;padding:0;'><div class='pointer hue' id='huepointer" + ncol + "'><div>" + ncol + "</div><i class='fa fa-caret-down'></i></div></td>";
            }
            x += "</tr>";
            x += "<tr>";
            c = "R";
            n = -1;
            for (i = 0; i < 60; i++) {
                if (i == 10) {c = "Y"; n = -1; }
                if (i == 20) {c = "G"; n = -1; }
                if (i == 30) {c = "C"; n = -1; }
                if (i == 40) {c = "B"; n = -1; }
                if (i == 50) {c = "M"; n = -1; }
                n++;
                ncol = c + (n * 10);
                if (n == 0) {ncol = c; }
                x += "<td style='height:22px;padding:0;background-color:hsl(" + (i * 6) + ",100%,50%)' onmousemove='tooltip(0, \"" + ncol + "\")' onclick='clickHue(\"" + ncol + "\")'></td>";
            }
            x += "</tr>";
            x += "</table>";
            document.getElementById("huetable").innerHTML = x;
        }
        function drawWhiteTable(hue) {
            var x, i;
            x = "<table class='tableslider'>"
            x += "<tr>";
            for (i = 0; i <= 100; i++) {
                x += "<td style='position:relative;padding:0;'><div class='pointer' id='whitepointer" + i + "'><div>" + i + "</div><i class='fa fa-caret-down'></i></div></td>";
            }
            x += "</tr>";
            x += "<tr>";
            for (i = 0; i <= 100; i++) {
                x += "<td style='padding:0;height:22px;background-color:" + w3color("hwb(" + hue + ", " + i + "%, 0%)").toRgbString() + "' onmousemove='tooltip(1, " + i + ")' onclick='clickWhite(" + i + ")'></td>";
            }
            x += "</tr></table>";
            document.getElementById("whitetable").innerHTML = x;
        }
        function drawBlackTable(hue) {
            var x, i;
            x = "<table class='tableslider'>"
            x += "<tr>";
            for (i = 0; i <= 100; i++) {
                x += "<td style='position:relative;padding:0;'><div class='pointer' id='blackpointer" + i + "'><div>" + i + "</div><i class='fa fa-caret-down'></i></div></td>";
            }
            x += "</tr>";
            x += "<tr>";
            for (i = 0; i <= 100; i++) {
                x += "<td onmousemove='tooltip(2, " + i + ")' onclick='clickBlack(" + i + ")' style='padding:0;height:22px;background-color:" + w3color("hwb(" + hue + ", 0%, " + i + "%)").toRgbString() + "'></td>";
            }
            x += "</tr></table>";
            document.getElementById("blacktable").innerHTML = x;
        }
    </script>
    <hr>

    <h2>Natural Colors (NCol) - Натуральные цвета</h2>
    <p>Натуральные цвета (NCol) - это инициатива W3Schools.</p>
    <p>Система предназначена для упрощения выбора HTML цветов.</p>
    <p>NCol определяет цвета, используя цветовую букву с цифрой, чтобы указать расстояние (в процентах) от цвета.</p>
    <p>R30 означает 30% от <strong>Red</strong>, движется навстречу <strong>Yellow</strong>. (Иными словами: красный из 30% желтого).</p>

    <table class="w3-table-all">
        <tr><th>Буква</th><th>Цвет</th><th>Оттенки</th></tr>
        <tr><td>R</td><td>Red</td><td>
                <div class="w3-tag" style="width:75px;height:25px;background-color:rgb(255,0,0)">R</div>
                <div class="w3-tag" style="width:75px;height:25px;background-color:rgb(255,64,0)">R25</div>
                <div class="w3-tag" style="width:75px;height:25px;background-color:rgb(255,128,0)">R50</div>
                <div class="w3-tag" style="width:75px;height:25px;background-color:rgb(255,191,0)">R75</div>
            </td></tr>
        <tr><td>Y</td><td>Yellow</td><td>
                <div class="w3-tag" style="width:75px;height:25px;background-color:rgb(255,255,0)">Y</div>
                <div class="w3-tag" style="width:75px;height:25px;background-color:rgb(191,255,0)">Y25</div>
                <div class="w3-tag" style="width:75px;height:25px;background-color:rgb(128,255,0)">Y50</div>
                <div class="w3-tag" style="width:75px;height:25px;background-color:rgb(64,255,0)">Y75</div>
            </td></tr>
        <tr><td>G</td><td>Green</td><td>
                <div class="w3-tag" style="width:75px;height:25px;background-color:rgb(0,255,0)">G</div>
                <div class="w3-tag" style="width:75px;height:25px;background-color:rgb(0,255,64)">G25</div>
                <div class="w3-tag" style="width:75px;height:25px;background-color:rgb(0,255,128)">G50</div>
                <div class="w3-tag" style="width:75px;height:25px;background-color:rgb(0,255,191)">G75</div>
            </td></tr>
        <tr><td>C</td><td>Cyan</td><td>
                <div class="w3-tag" style="width:75px;height:25px;background-color:rgb(0,255,255)">C</div>
                <div class="w3-tag" style="width:75px;height:25px;background-color:rgb(0,191,255)">C25</div>
                <div class="w3-tag" style="width:75px;height:25px;background-color:rgb(0,128,255)">C50</div>
                <div class="w3-tag" style="width:75px;height:25px;background-color:rgb(0,64,255)">C75</div>
            </td></tr>
        <tr><td>B</td><td>Blue</td><td>
                <div class="w3-tag" style="width:75px;height:25px;background-color:rgb(0,0,255)">B</div>
                <div class="w3-tag" style="width:75px;height:25px;background-color:rgb(64,0,255)">B25</div>
                <div class="w3-tag" style="width:75px;height:25px;background-color:rgb(128,0,255)">B50</div>
                <div class="w3-tag" style="width:75px;height:25px;background-color:rgb(191,0,255)">B75</div>
            </td></tr>
        <tr><td>M</td><td>Magenta</td><td>
                <div class="w3-tag" style="width:75px;height:25px;background-color:rgb(255,0,255)">M</div>
                <div class="w3-tag" style="width:75px;height:25px;background-color:rgb(255,0,191)">M25</div>
                <div class="w3-tag" style="width:75px;height:25px;background-color:rgb(255,0,128)">M50</div>
                <div class="w3-tag" style="width:75px;height:25px;background-color:rgb(255,0,64)">M75</div>
            </td></tr>
    </table>
    <table>
        <tr>
            <td>R</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Y</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>G</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>C</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>B</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>M</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td data-w3-color="R">&nbsp;</td>
            <td data-w3-color="R10">&nbsp;</td>
            <td data-w3-color="R20">&nbsp;</td>
            <td data-w3-color="R30">&nbsp;</td>
            <td data-w3-color="R40">&nbsp;</td>
            <td data-w3-color="R50">&nbsp;</td>
            <td data-w3-color="R60">&nbsp;</td>
            <td data-w3-color="R70">&nbsp;</td>
            <td data-w3-color="R80">&nbsp;</td>
            <td data-w3-color="R90">&nbsp;</td>
            <td data-w3-color="Y">&nbsp;</td>
            <td data-w3-color="Y10">&nbsp;</td>
            <td data-w3-color="Y20">&nbsp;</td>
            <td data-w3-color="Y30">&nbsp;</td>
            <td data-w3-color="Y40">&nbsp;</td>
            <td data-w3-color="Y50">&nbsp;</td>
            <td data-w3-color="Y60">&nbsp;</td>
            <td data-w3-color="Y70">&nbsp;</td>
            <td data-w3-color="Y80">&nbsp;</td>
            <td data-w3-color="Y90">&nbsp;</td>
            <td data-w3-color="G">&nbsp;</td>
            <td data-w3-color="G10">&nbsp;</td>
            <td data-w3-color="G20">&nbsp;</td>
            <td data-w3-color="G30">&nbsp;</td>
            <td data-w3-color="G40">&nbsp;</td>
            <td data-w3-color="G50">&nbsp;</td>
            <td data-w3-color="G60">&nbsp;</td>
            <td data-w3-color="G70">&nbsp;</td>
            <td data-w3-color="G80">&nbsp;</td>
            <td data-w3-color="G90">&nbsp;</td>
            <td data-w3-color="C">&nbsp;</td>
            <td data-w3-color="C10">&nbsp;</td>
            <td data-w3-color="C20">&nbsp;</td>
            <td data-w3-color="C30">&nbsp;</td>
            <td data-w3-color="C40">&nbsp;</td>
            <td data-w3-color="C50">&nbsp;</td>
            <td data-w3-color="C60">&nbsp;</td>
            <td data-w3-color="C70">&nbsp;</td>
            <td data-w3-color="C80">&nbsp;</td>
            <td data-w3-color="C90">&nbsp;</td>
            <td data-w3-color="B">&nbsp;</td>
            <td data-w3-color="B10">&nbsp;</td>
            <td data-w3-color="B20">&nbsp;</td>
            <td data-w3-color="B30">&nbsp;</td>
            <td data-w3-color="B40">&nbsp;</td>
            <td data-w3-color="B50">&nbsp;</td>
            <td data-w3-color="B60">&nbsp;</td>
            <td data-w3-color="B70">&nbsp;</td>
            <td data-w3-color="B80">&nbsp;</td>
            <td data-w3-color="B90">&nbsp;</td>
            <td data-w3-color="M">&nbsp;</td>
            <td data-w3-color="M10">&nbsp;</td>
            <td data-w3-color="M20">&nbsp;</td>
            <td data-w3-color="M30">&nbsp;</td>
            <td data-w3-color="M40">&nbsp;</td>
            <td data-w3-color="M50">&nbsp;</td>
            <td data-w3-color="M60">&nbsp;</td>
            <td data-w3-color="M70">&nbsp;</td>
            <td data-w3-color="M80">&nbsp;</td>
            <td data-w3-color="M90">&nbsp;</td>
        </tr></table>

    <p>Цвет и расстояние также можно указать в оттенках (0-360):</p>
    <table class="w3-table-all">
        <tr>
            <td style="width:16.67%;color:white;background-color:rgb(255,0,0)">R = 000</td>
            <td style="width:16.67%;background-color:rgb(255,255,0)">Y = 060</td>
            <td style="width:16.67%;background-color:rgb(0,255,0)">G = 120</td>
            <td style="width:16.67%;background-color:rgb(0,255,255)">C = 180</td>
            <td style="width:16.67%;color:white;background-color:rgb(0,0,255)">B = 240</td>
            <td style="width:16.67%;background-color:rgb(255,0,255)">M = 300</td>
        </tr>
    </table>
    <hr>

    <h2>HTML Поддержка</h2>
    <p>NCol не поддерживается в HTML, но он очень близок к новой системе цветов HWB, предложенной в <strong>CSS4</strong>.</p>
    <p>Ожидая <strong>CSS4</strong>, вы можете включить библиотеку цветов W3Schools и использовать NCol в качестве HTML-атрибута, как здесь:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div
            data-w3-color=&quot;R50,50%,0&quot;&gt;<br><br>
            &lt;p&gt;Київ - це столиця Великої України.<br>
            Це найбільш густонаселене місто Великої України,<br>
            з агломерацією понад 5 мільйонів жителів.&lt;/p&gt;<br><br>
            &lt;/div&gt;
            <br><br>&lt;script src=&quot;../lib/w3color.js&quot;&gt;&lt;/script&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../colorstryit/trycolors_ncol.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <h2>Библиотека цветов W3Schools</h2>
    <p>Библиотеку JavaScript, используемую в примере выше, можно скачать по ссылке:</p>
    <p><strong><a target="_blank" href="https://www.w3schools.com/lib/w3color.js">https://www.w3schools.com/lib/w3color.js</a></strong></p>
    <p>Также вы можете воспользоваться альтернативным скачиванием с нашего сайта <?php include '../include/w3schools.php'; ?> по ссылке: <a href="../lib/w3color.js" target="_blank">https://w3schoolsrus.github.io/lib/w3color.js</a></p>
    <hr>

    <h2>Почему NCol?</h2>
    <p>Объяснить цвета с помощью обозначений RGB или HEX очень сложно.</p>
    <p>Можете ли вы сказать, что такое цвет rgb(199,21,133)?</p>
    <p>RGB основан на том, как физически производить цвета, смешивая источники света.</p>
    <p><strong>NCol базируется на том, как цвета выглядят для человеческого глаза.</strong></p>
    <p>Благодаря этому NCol значительно облегчает описание цветов.</p>
    <p>Впервые природные цвета описал Карл Эвальд Константин Геринг (Германия 1834 - 1918).</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_cmyk.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_gradient.php">Next &#10095;</a>
    </div>
    <script>
        w3SetColorsByAttribute();
        var btnclck = false;
        if (window.addEventListener) {
            window.addEventListener("mousedown", function () {btnclck = true; });
        } else if (window.attachEvent) {
            window.attachEvent("onmousedown", function () {btnclck = true; });
        }
        if (window.addEventListener) {
            window.addEventListener("mouseup", function () {btnclck = false; });
        } else if (window.attachEvent) {
            window.attachEvent("onmouseup", function () {btnclck = false; });
        }
        function tooltip(e, n) {
            var x;
            if (btnclck) {
                if (e == 0) { x = document.getElementById("hue01"); }
                if (e == 1) { x = document.getElementById("white01"); }
                if (e == 2) { x = document.getElementById("black01"); }
                x.value = n;
                setColor(x);
            }
        }
        function setColor(elmnt) {
            var ele, col, ncol, h, w, b, rgb, i, c, n, hue, step;
            h = document.getElementById("hue01");
            w = document.getElementById("white01");
            b = document.getElementById("black01");
            if (parseInt(elmnt.value) < 0) {elmnt.value = "0";}
            if (Number(h.value)) {
                hue = h.value;
            } else {
                step = 0;
                c = h.value.substr(0, 1).toUpperCase();
                if (c == "") {hue = 0; c = ""; n = ""; }
                if (c == "R") {hue = 0; }
                if (c == "Y") {hue = 60; }
                if (c == "G") {hue = 120; }
                if (c == "C") {hue = 180; }
                if (c == "B") {hue = 240; }
                if (c == "M") {hue = 300; }
                if (hue == undefined) {
                    c = "R";
                    hue = 0;
                }
                n = h.value.substr(1);
                if (n == "") {
                    step = 0;
                } else {
                    if (n < 0) {n = 0; }
                    if (n > 99) {n = 99; }
                    if (!Number(n)) {
                        hue = 0;
                        n = "";
                    } else {
                        step = Number(n);
                    }
                }
                h.value = c.toUpperCase() + n;
                hue = parseInt(hue + (step * 0.6));
            }
            if (elmnt.id == "hue01") {
                if (parseInt(elmnt.value) > 360) {elmnt.value = "360";}
            } else {
                if (parseInt(elmnt.value) > 100) {elmnt.value = "100";}
            }
            if (elmnt.id == "white01") {
                if (parseInt(w.value) + parseInt(b.value) > 100) {
                    b.value = 100 - parseInt(w.value);
                }
            }
            if (elmnt.id == "black01") {
                if (parseInt(w.value) + parseInt(b.value) > 100) {
                    w.value = 100 - parseInt(b.value);
                }
            }
            rgb = w3color("ncol(" + h.value + ", " + w.value + "%, " + b.value + "%)");
            document.getElementById("result01").style.backgroundColor = rgb.toRgbString();
            document.getElementById("hwb01").value = rgb.toNcolString();
            document.getElementById("rgb01").innerHTML = rgb.toRgbString();
            document.getElementById("hex01").innerHTML = rgb.toHexString();
            document.getElementById("hsl01").innerHTML = rgb.toHslString();
            c = "R";
            n = -1;
            for (i = 0; i < 60; i++) {
                if (i == 10) {c = "Y"; n = -1; }
                if (i == 20) {c = "G"; n = -1; }
                if (i == 30) {c = "C"; n = -1; }
                if (i == 40) {c = "B"; n = -1; }
                if (i == 50) {c = "M"; n = -1; }
                n++;
                ncol = c + (n * 10);
                if (n == 0) {ncol = c; }
                if (document.getElementById("huepointer" + ncol)) {document.getElementById("huepointer" + ncol).style.display = "none"; }
            }
            drawWhiteTable(hue);
            drawBlackTable(hue);
            for (i = 0; i <= 100; i++) {
                if (document.getElementById("whitepointer" + i)) {document.getElementById("whitepointer" + i).style.display = "none"; }
                if (document.getElementById("blackpointer" + i)) {document.getElementById("blackpointer" + i).style.display = "none"; }
            }
            if (document.getElementById("huepointer" + h.value)) {document.getElementById("huepointer" + h.value).style.display = "inline"; }
            if (document.getElementById("whitepointer" + w.value)) {document.getElementById("whitepointer" + w.value).style.display = "inline"; }
            if (document.getElementById("blackpointer" + b.value)) {document.getElementById("blackpointer" + b.value).style.display = "inline"; }
            document.getElementById("linktocp").innerHTML = "<hr style='border-color:#dfdfdf'><p><a href='colors_picker.php?colorhex=" + rgb.toHexString().substr(1) + "'>Використовуйте цей колір у нашій Палітрі кольорів</a></p>";
        }
        drawWhiteTable(0);
        drawHueTable(0);
        drawBlackTable(0);
        function setFullColor() {
            var color = w3color(document.getElementById("hwb01").value);
            var ncol = color.toNcol();
            document.getElementById("hue01").value = ncol.ncol;
            document.getElementById("white01").value = (ncol.w * 100).toFixed(0);
            document.getElementById("black01").value = (ncol.b * 100).toFixed(0);
            setColor(document.getElementById("hue01"));
        }
        color = w3color("ff0000");
        document.getElementById("hwb01").value = color.toNcolString();
        setFullColor();
    </script>
    <hr>
    <p>Уроки по использованию цветов на веб-страницах смотрите на нашем сайте <?php include '../include/w3schools.php'; ?> в разделах
        <a href="../html/html_colors.php">HTML Цвета</a> и <a href="../css/css_colors.php">CSS Цвета</a>.</p>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>