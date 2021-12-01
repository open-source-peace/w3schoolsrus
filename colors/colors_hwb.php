<?php include '../include/head.php'; ?>
<title>HTML Цвет HWB (Hue, Whiteness, Blackness). <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Цвет HWB (Hue, Whiteness, Blackness). Что означает HWB? Рекомендованный цвет для CSS4. Как применяется HWB-цвет на веб-сайте? <?php include '../include/description.php'; ?>'>
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
    <h1><span class="color_h1">HWB Цвета</span></h1>

    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_hsl.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_cmyk.php">Next &#10095;</a>
    </div>
    <hr>

    <p class="intro"><strong>HWB</strong> (<b>Hue</b> - Оттенок, <b>Whiteness</b> - Белизна, <b>Blackness</b> - Чернота) - рекомендованный стандарт для <strong>CSS4</strong>.</p>
    <hr>

    <div class="w3-container w3-padding-large" style="background-color:#f1f1f1;border:1px solid #d3d3d3;">
        <h2>HWB Калькулятор</h2>
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
                <input type="number" style="padding-left:6px;width:70px;" id="hue01" oninput="setColor(this)" onchange="setColor(this)" value="0">
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
            var x, i, n;
            x = "<table class='tableslider'>"
            x += "<tr>";
            n = 0;
            for (i = 0; i <= 360; i++) {
                n = i;
                x += "<td style='position:relative;padding:0;'><div class='pointer hue' id='huepointer" + n + "'><div>" + n + "</div><i class='fa fa-caret-down'></i></div></td>";
            }
            x += "</tr>";
            x += "<tr>";
            n = 0;
            for (i = 0; i <= 360; i++) {
                n = i;
                x += "<td style='height:22px;padding:0;background-color:hsl(" + n + ",100%,50%)' onmousemove='tooltip(0, " + n + ")' onclick='clickHue(" + n + ")'></td>";
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
                x += "<td style='padding:0;height:22px;background-color:" + w3color("hwb(" + hue + ", " + i + "%, 0)").toRgbString() + "' onmousemove='tooltip(1, " + i + ")' onclick='clickWhite(" + i + ")'></td>";
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
                x += "<td onmousemove='tooltip(2, " + i + ")' onclick='clickBlack(" + i + ")' style='padding:0;height:22px;background-color:" + w3color("hwb(" + hue + ", 0, " + i + "%)").toRgbString() + "'></td>";
            }
            x += "</tr></table>";
            document.getElementById("blacktable").innerHTML = x;
        }
        drawWhiteTable(0);
        drawHueTable(0);
        drawBlackTable(0);
    </script>
    <hr>
    <h2>HTML Поддержка</h2>
    <p>HWB не поддерживается в HTML (пока ещё), но он предлагается как новый стандарт в <strong>CSS4</strong>.</p>
    <p>Ожидая <strong>CSS4</strong>, вы можете включить библиотеку цветов <strong>W3Schools</strong> и использовать HWB в качестве HTML-атрибута, как здесь:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div
            data-w3-color=&quot;hwb(60, 50%, 0)&quot;&gt;<br><br>
            &lt;p&gt;Лондон - це столиця Англії .<br>
            Це найбільш густонаселене місто Великобританії,<br>
            з агломерацією понад 13 мільйонів жителів.&lt;/p&gt;<br><br>
            &lt;/div&gt;<br><br>&lt;script src=&quot;../lib/w3color.js&quot;&gt;&lt;/script&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../colorstryit/trycolors_hwb.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Библиотека цветов W3Schools</h2>
    <p>Библиотеку JavaScript, используемую в примере выше, можно скачать по ссылке:</p>
    <p><strong><a target="_blank" href="https://www.w3schools.com/lib/w3color.js">https://www.w3schools.com/lib/w3color.js</a></strong></p>
    <p>Также вы можете воспользоваться альтернативным скачиванием с нашего сайта <?php include '../include/w3schools.php'; ?> по ссылке:
        <a href="../lib/w3color.js" target="_blank">https://w3schoolsrus.github.io/lib/w3color.js</a></p>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_hsl.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_cmyk.php">Next &#10095;</a>
    </div>

    <script>
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
            var ele, col, h, w, b, rgb, i;
            h = document.getElementById("hue01");
            w = document.getElementById("white01");
            b = document.getElementById("black01");
            elmnt.value = Number(elmnt.value);
            if (parseInt(elmnt.value) < 0) {elmnt.value = "0";}
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
            rgb = w3color("hwb(" + h.value + ", " + w.value + "%, " + b.value + "%)");
            document.getElementById("result01").style.backgroundColor = rgb.toRgbString();
            document.getElementById("hwb01").value = rgb.toHwbString();
            document.getElementById("rgb01").innerHTML = rgb.toRgbString();
            document.getElementById("hex01").innerHTML = rgb.toHexString();
            document.getElementById("hsl01").innerHTML = rgb.toHslString();
            for (i = 0; i <= 360; i++) {
                document.getElementById("huepointer" + i).style.display = "none";
            }
            drawWhiteTable(h.value);
            drawBlackTable(h.value);
            for (i = 0; i <= 100; i++) {
                document.getElementById("whitepointer" + i).style.display = "none";
                document.getElementById("blackpointer" + i).style.display = "none";
            }
            document.getElementById("huepointer" + h.value).style.display = "inline";
            document.getElementById("whitepointer" + w.value).style.display = "inline";
            document.getElementById("blackpointer" + b.value).style.display = "inline";
            document.getElementById("linktocp").innerHTML = "<hr style='border-color:#dfdfdf'><p><a href='colors_picker.php?colorhex=" + rgb.toHexString().substr(1) + "'>Используйте этот цвет в нашей Палитре цветов </a></p>";
        }
        function setFullColor() {
            var color = w3color(document.getElementById("hwb01").value);
            var hwb = color.toHwb();
            document.getElementById("hue01").value = hwb.h.toFixed(0);
            document.getElementById("white01").value = (hwb.w * 100).toFixed(0);
            document.getElementById("black01").value = (hwb.b * 100).toFixed(0);
            setColor(document.getElementById("hue01"));
        }
        color = w3color("ff0000");
        document.getElementById("hwb01").value = color.toHwbString();
        setFullColor();
    </script>
    <hr>
    <p>Уроки по использованию цветов на веб-страницах смотрите на нашем сайте в разделах
        <a href="../html/html_colors.php">HTML Цвета</a> и <a href="../css/css_colors.php">CSS Цвета</a>.</p>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>