<?php include '../include/head.php'; ?>
<title>HTML Цвет HSL (hue, saturation, lightness). <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Цвет HSL (hue, saturation, lightness). Что означает HSL? Как используется HSL-цвет на веб-сайте? <?php include '../include/description.php'; ?>'>
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
    <h1><span class="color_h1">HSL Цвета</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_hexadecimal.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_hwb.php">Next &#10095;</a>
    </div>
    <br>
    <div class="w3-container w3-padding-large" style="background-color:#f1f1f1;border:1px solid #d3d3d3;">
        <h2>HSL Калькулятор</h2>
        <br>
        <div class="w3-row">
            <div class="w3-col m7" id="result01" style="background-color:hsl(0,100%,50%);height:200px"></div>
            <div class="w3-col m1">&nbsp;</div>
            <div class="w3-col m4">
                <div class="w3-large" style="font-family:Consolas, 'courier new';bottom:10px;">
                    <input id="hsl01" type="text" class="w3-input w3-border" onchange="setFullColor()" onkeydown="submitOnEnter(event)">
                    <div id="rgb01" class="w3-margin-top">rgb(255, 0, 0)</div>
                    <div id="hex01" class="w3-margin-top">#ff0000</div>
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
                <div style="width:30px;float:left;">S:</div>
                <input type="number" style="padding-left:6px;width:70px;" id="sat01" oninput="setColor(this)" onchange="setColor(this)" value="100">
            </div>
            <div class="w3-rest colorslider">
                <div id="saturationtable"></div>
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col colorinput">
                <div style="width:30px;float:left;">L:</div>
                <input type="number" style="padding-left:6px;width:70px;" id="lig01" oninput="setColor(this)" onchange="setColor(this)" value="50">
            </div>
            <div class="w3-rest colorslider">
                <div id="lightnesstable"></div>
            </div>
        </div>
        <div id="linktocp"></div>
    </div>
    <hr>
    <h2>HSL Цвета</h2>
    <p>Значения цвета HSL поддерживаются в IE9 +, Firefox, Chrome, Safari и Opera 10+.</p>
    <p>HSL означает <b>hue</b> - оттенок, <b>saturation</b> - насыщенность и <b>lightness</b> - лёгкость.</p>
    <p>Значения цвета HSL указаны с помощью: <code class="w3-codespan">hsl(<em>hue</em>, <em>saturation</em>, <em>lightness</em>)</code>.</p>
    <hr>
    <h2>Hue - Оттенок</h2>
    <p>Оттенок - это градус на цветовом круге от 0 до 360. 0 - красный, 120 - зеленый, 240 - синий.</p>
    <hr>
    <h2>Saturation - Насыщенность</h2>
    <p>Насыщенность - это процентное значение; 0% означает оттенок серого, а 100% - полный цвет.</p>
    <hr>
    <h2>Lightness - Лёгкость</h2>
    <p>Лёгкость - это также процент; 0% - черный, 100% - белый.</p>
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
        function clickSat(sat) {
            var s = document.getElementById("sat01");
            s.value = sat;
            setColor(s);
        }
        function clickLig(lig) {
            var l = document.getElementById("lig01");
            l.value = lig;
            setColor(l);
        }
        function drawHueTable(hue) {
            var x, i, n;
            x = "<table class='tableslider'>"
            x += "<tr>";
            n = 0;
            for (i = 0; i <= 360; i++) {
                n = i;
                x += "<td";
                x += " style='position:relative;padding:0;'><div class='pointer hue' id='huepointer" + n + "'><div>" + n + "</div><i class='fa fa-caret-down'></i></div></td>";
            }
            x += "</tr>";
            x += "<tr>";
            n = 0;
            for (i = 0; i <= 360; i++) {
                n = i;
                x += "<td style='background-color:hsl(" + n + ",100%,50%);height:22px;padding:0;' onmousemove='tooltip(0, " + n + ")' onclick='clickHue(" + n + ")'></td>";
            }
            x += "</tr>";
            x += "</table>";
            document.getElementById("huetable").innerHTML = x;
        }
        function drawSatTable(hue) {
            var x, i;
            x = "<table class='tableslider'>"
            x += "<tr>";
            for (i = 0; i <= 100; i++) {
                x += "<td style='position:relative;padding:0;'><div class='pointer' id='satpointer" + i + "'><div>" + i + "</div><i class='fa fa-caret-down'></i></div></td>";
            }
            x += "</tr>";
            x += "<tr>";
            for (i = 0; i <= 100; i++) {
                x += "<td onmousemove='tooltip(1, " + i + ")' onclick='clickSat(" + i + ")' style='padding:0;height:22px;background-color: hsl(" + hue + ", " + i + "%, 50%)'></td>";
            }
            x += "</tr></table>";
            document.getElementById("saturationtable").innerHTML = x;
        }
        function drawLigTable(hue) {
            var x, i;
            x = "<table class='tableslider'>"
            x += "<tr>";
            for (i = 0; i <= 100; i++) {
                x += "<td style='position:relative;padding:0;'><div class='pointer' id='ligpointer" + i + "'><div>" + i + "</div><i class='fa fa-caret-down'></i></div></td>";
            }
            x += "</tr>";
            x += "<tr>";
            for (i = 0; i <= 100; i++) {
                x += "<td onmousemove='tooltip(2, " + i + ")' onclick='clickLig(" + i + ")' style='padding:0;height:22px;background-color: hsl(" + hue + ", 100%," + i + "%)'></td>";
            }
            x += "</tr></table>";
            document.getElementById("lightnesstable").innerHTML = x;
        }
        drawHueTable(0);
        drawSatTable(0);
        drawLigTable(0);
    </script>

    <hr>
    <h2>Попробуйте сами</h2>
    <p>Значения цвета HSL поддерживаются во всех основных браузерах.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate">
            <div class="htmlHigh">
                &lt;style&gt;<br>
            </div>
            <div class="cssHigh">
                div {<br>&nbsp;&nbsp;&nbsp; background-color: hsl(180, 50%, 50%);<br>&nbsp;&nbsp;&nbsp; color: hsl(0, 0%, 100%);<br>}<br>
            </div>
            <div class="htmlHigh">
                &lt;/style&gt;
            </div>
        </div>
        <br>
        <a class="w3-btn w3-margin-bottom" href="../colorstryit/trycolors_hsl.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_hexadecimal.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_hwb.php">Next &#10095;</a>
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
                if (e == 1) { x = document.getElementById("sat01"); }
                if (e == 2) { x = document.getElementById("lig01"); }
                x.value = n;
                setColor(x);
            }
        }
        function setColor(elmnt) {
            var ele, col, h, s, l, rgb;
            h = document.getElementById("hue01");
            s = document.getElementById("sat01");
            l = document.getElementById("lig01");
            elmnt.value = Number(elmnt.value);
            if (parseInt(elmnt.value) < 0) {elmnt.value = "0";}
            if (elmnt.id == "hue01") {
                if (parseInt(elmnt.value) > 360) {elmnt.value = "360";}
            } else {
                if (parseInt(elmnt.value) > 100) {elmnt.value = "100";}
            }
            rgb = w3color("hsl(" + h.value + ", " + s.value + "%, " + l.value + "%)");
            document.getElementById("result01").style.backgroundColor = rgb.toHslString();
            document.getElementById("hsl01").value = rgb.toHslString();
            document.getElementById("rgb01").innerHTML = rgb.toRgbString();
            document.getElementById("hex01").innerHTML = rgb.toHexString();
            for (i = 0; i <= 360; i++) {
                document.getElementById("huepointer" + i).style.display = "none";
            }
            drawSatTable(h.value);
            drawLigTable(h.value);
            for (i = 0; i <= 100; i++) {
                document.getElementById("satpointer" + i).style.display = "none";
                document.getElementById("ligpointer" + i).style.display = "none";
            }
            document.getElementById("huepointer" + h.value).style.display = "inline";
            document.getElementById("satpointer" + s.value).style.display = "inline";
            document.getElementById("ligpointer" + l.value).style.display = "inline";
            document.getElementById("linktocp").innerHTML = "<hr style='border-color:#dfdfdf'><p><a href='colors_picker.php?colorhex=" + rgb.toHexString().substr(1) + "'>Use this color in our Color Picker</a></p>";
        }
        function setFullColor() {
            var color = w3color(document.getElementById("hsl01").value);
            var hsl = color.toHsl();
            document.getElementById("hue01").value = hsl.h.toFixed(0);
            document.getElementById("sat01").value = (hsl.s * 100).toFixed(0);
            document.getElementById("lig01").value = (hsl.l * 100).toFixed(0);
            setColor(document.getElementById("hue01"));
        }
        color = w3color("ff0000");
        document.getElementById("hsl01").value = color.toHslString();
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