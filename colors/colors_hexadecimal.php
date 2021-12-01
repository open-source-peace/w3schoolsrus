<?php include '../include/head.php'; ?>
<title>HTML Цвет HEX. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Цвет HEX (шестнадцатеричный). Что означает HEX? Как используются HEX-цвета на веб-сайте? <?php include '../include/description.php'; ?>'>
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
    <h1><span class="color_h1">HEX Цвета</span></h1>

    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_rgb.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_hsl.php">Next &#10095;</a>
    </div>
    <br>
    <div class="w3-container w3-padding-large" style="background-color:#f1f1f1;border:1px solid #d3d3d3;">
        <h2>HEX Калькулятор</h2>
        <br>
        <div class="w3-row">
            <div class="w3-col m7" id="result01" style="background-color:#ff0000;height:200px"></div>
            <div class="w3-col m1">&nbsp;</div>
            <div class="w3-col m4">
                <div class="w3-large" style="font-family:Consolas, 'courier new';bottom:10px;">
                    <input id="hex01" type="text" class="w3-input w3-border" onchange="setFullColor()" onkeydown="submitOnEnter(event)">
                    <div id="rgb01" class="w3-margin-top">rgb(255, 0, 0)#000000</div>
                    <div id="hsl01" class="w3-margin-top">hsl(0, 0%, 0%)</div>
                </div>
            </div>
        </div>
        <hr style="border-color:#d3d3d3" class="w3-hide-medium w3-hide-large">
        <br>
        <div class="w3-row">
            <div class="w3-col colorinput">
                <div style="width:30px;float:left;">R:</div>
                <input type="number" id="r01Num" tabindex="-1" aria-hidden="true" oninput="numberValue(this)" onchange="numberValue(this)" style="padding-left:0;width:30px;margin-left:40px;position:absolute;background-color:transparent;border-color:transparent;color:transparent;" value="255">
                <input type="text" style="padding-left:6px;width:70px;" id="r01" oninput="setColor()" onchange="setColor()" value="ff">
            </div>
            <div class="w3-rest colorslider">
                <div id="redtable"></div>
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col colorinput">
                <div style="width:30px;float:left;">G:</div>
                <input type="number" id="g01Num" tabindex="-1" aria-hidden="true" oninput="numberValue(this)" onchange="numberValue(this)" style="padding-left:0;width:30px;margin-left:40px;position:absolute;background-color:transparent;border-color:transparent;color:transparent;" value="0">
                <input type="text" style="padding-left:6px;width:70px;" id="g01" oninput="setColor()" onchange="setColor()" value="00">
            </div>
            <div class="w3-rest colorslider">
                <div id="greentable"></div>
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col colorinput">
                <div style="width:30px;float:left;">B:</div>
                <input type="number" id="b01Num" tabindex="-1" aria-hidden="true" oninput="numberValue(this)" onchange="numberValue(this)" style="padding-left:0;width:30px;margin-left:40px;position:absolute;background-color:transparent;border-color:transparent;color:transparent;" value="0">
                <input type="text" style="padding-left:6px;width:70px;" id="b01" oninput="setColor()" onchange="setColor()" value="00">
            </div>
            <div class="w3-rest colorslider">
                <div id="bluetable"></div>
            </div>
        </div>
        <div id="linktocp"></div>
    </div>

    <hr>
    <h2>Шестнадцатеричные цвета</h2>
    <p>Шестнадцатеричные значения цвета также поддерживаются во всех браузерах.</p>
    <p>Шестнадцатеричный цвет обозначается символом: #RRGGBB.</p>
    <p>RR (red), GG (green) та BB (blue) являются шестнадцатеричными целыми числами от 00 до FF, которые указывают интенсивность цвета.</p>
    <p>Например, #0000FF отображается как синий, поскольку для синего компонента установлено наибольшее значение (FF), а для других - 00.</p>

    <script>
        function submitOnEnter(e) {
            keyboardKey = e.which || e.keyCode;
            if (keyboardKey == 13) {
                setFullColor();
            }
        }
        function numberValue(elmnt) {
            var val, x;
            val = Number(elmnt.value);
            if (val < 0) {val = 0;}
            if (val > 255) {val = 255;}
            val = toHex(val);
            x = document.getElementById(elmnt.id.substr(0, 3));
            x.value = val;
            setColor();
        }
        function toHex(n) {
            var hex = n.toString(16);
            while (hex.length < 2) {hex = "0" + hex; }
            return hex;
        }
        function clickRed(red) {
            var r = document.getElementById("r01");
            r.value = red;
            setColor();
        }
        function clickGreen(green) {
            var g = document.getElementById("g01");
            g.value = green;
            setColor();
        }
        function clickBlue(blue) {
            var b = document.getElementById("b01");
            b.value = blue;
            setColor();
        }
        function drawRedTable() {
            var x, i, n, g, b;
            g = "00";
            b = "00";
            x = "<table class='tableslider'>"
            x += "<tr>";
            n = 0;
            for (i = 0; i <= 255; i++) {
                n = toHex(i);
                x += "<td style='position:relative;padding:0;'><div class='pointer red' id='redpointer" + n + "'><div>" + n + "</div><i class='fa fa-caret-down'></i></div></td>";
            }
            x += "</tr>";
            x += "<tr>";
            n = 0;
            for (i = 0; i <= 255; i++) {
                n = toHex(i);
                x += "<td style='background-color:#" + n + g + b + ";height:22px;padding:0;' onmousemove='tooltip(0, \"" + n + "\")' onclick='clickRed(\"" + n + "\")'></td>";
            }
            x += "</tr>";
            x += "</table>";
            document.getElementById("redtable").innerHTML = x;
        }
        function drawGreenTable() {
            var x, i, r, b;
            r = "00";
            b = "00";
            x = "<table class='tableslider'>"
            x += "<tr>";
            for (i = 0; i <= 255; i++) {
                n = toHex(i);
                x += "<td style='position:relative;padding:0;'><div class='pointer' id='greenpointer" + n + "'><div>" + n + "</div><i class='fa fa-caret-down'></i></div></td>";
            }
            x += "</tr>";
            x += "<tr>";
            for (i = 0; i <= 255; i++) {
                n = toHex(i);
                x += "<td onmousemove='tooltip(1, \"" + n + "\")' onclick='clickGreen(\"" + n + "\")' style='padding:0;height:22px;background-color:#" + r + n + b + "'></td>";
            }
            x += "</tr></table>";
            document.getElementById("greentable").innerHTML = x;
        }
        function drawBlueTable() {
            var x, i, r, g;
            r = "00";
            g = "00";
            x = "<table class='tableslider'>"
            x += "<tr>";
            for (i = 0; i <= 255; i++) {
                n = toHex(i);
                x += "<td style='position:relative;padding:0;'><div class='pointer' id='bluepointer" + n + "'><div>" + n + "</div><i class='fa fa-caret-down'></i></div></td>";
            }
            x += "</tr>";
            x += "<tr>";
            for (i = 0; i <= 255; i++) {
                n = toHex(i);
                x += "<td onmousemove='tooltip(2, \"" + n + "\")' onclick='clickBlue(\"" + n + "\")' style='padding:0;height:22px;background-color:#" + r + g + n + "'></td>";
            }
            x += "</tr></table>";
            document.getElementById("bluetable").innerHTML = x;
        }
        drawRedTable(0);
        drawGreenTable(0);
        drawBlueTable(0);
    </script>

    <hr>
    <h2>Попробуйте сами</h2>
    <p>Шестнадцатеричные значения цвета поддерживаются во всех браузерах.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate">
            <div class="htmlHigh">
                &lt;style&gt;<br>
            </div>
            <div class="cssHigh">
                div {<br>&nbsp;&nbsp;&nbsp; background-color: #00bfff;<br>&nbsp;&nbsp;&nbsp; color: #fff;<br>}<br>
            </div>
            <div class="htmlHigh">
                &lt;/style&gt;
            </div>
        </div>
        <br>
        <a class="w3-btn w3-margin-bottom" href="../colorstryit/trycolors_hex.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_rgb.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_hsl.php">Next &#10095;</a>
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
                if (e == 0) { x = document.getElementById("r01"); }
                if (e == 1) { x = document.getElementById("g01"); }
                if (e == 2) { x = document.getElementById("b01"); }
                x.value = n;
                setColor();
            }
        }
        function setColor() {
            var ele, col, r, g, b, rgb, rval, gval, bval,n;
            r = document.getElementById("r01");
            g = document.getElementById("g01");
            b = document.getElementById("b01");
            rval = r.value;
            gval = g.value;
            bval = b.value;
            if (rval == "") rval = "0";
            if (gval == "") gval = "0";
            if (bval == "") bval = "0";
            while (rval.length < 2) {rval = rval + rval;}
            while (gval.length < 2) {gval = gval + gval;}
            while (bval.length < 2) {bval = bval + bval;}
            if (parseInt(rval, 16) < 0) {rval = "0"; r.value = rval;}
            if (parseInt(rval, 16) > 255) {rval = "ff"; r.value = rval;}
            if (parseInt(gval, 16) < 0) {gval = "0"; g.value = gval;}
            if (parseInt(gval, 16) > 255) {gval = "ff"; g.value = gval;}
            if (parseInt(bval, 16) < 0) {bval = "0"; b.value = bval;}
            if (parseInt(bval, 16) > 255) {bval = "ff"; b.value = bval;}
            rgb = w3color("#" + rval + gval + bval);
            document.getElementById("result01").style.backgroundColor = rgb.toRgbString();
            document.getElementById("rgb01").innerHTML = rgb.toRgbString();
            document.getElementById("hsl01").innerHTML = rgb.toHslString();
            document.getElementById("hex01").value = rgb.toHexString();
            document.getElementById("r01Num").value = parseInt(rval, 16);
            document.getElementById("g01Num").value = parseInt(gval, 16);
            document.getElementById("b01Num").value = parseInt(bval, 16);
            for (i = 0; i <= 255; i++) {
                n = toHex(i);
                document.getElementById("redpointer" + n).style.display = "none";
            }
            for (i = 0; i <= 255; i++) {
                n = toHex(i);
                document.getElementById("greenpointer" + n).style.display = "none";
                document.getElementById("bluepointer" + n).style.display = "none";
            }
            if (!document.getElementById("redpointer" + rval)) {rval = "00";}
            if (!document.getElementById("redpointer" + gval)) {gval = "00";}
            if (!document.getElementById("redpointer" + bval)) {bval = "00";}
            document.getElementById("redpointer" + rval).style.display = "inline";
            document.getElementById("greenpointer" + gval).style.display = "inline";
            document.getElementById("bluepointer" + bval).style.display = "inline";
            document.getElementById("linktocp").innerHTML = "<hr style='border-color:#dfdfdf'><p><a href='colors_picker.php?colorhex=" + rgb.toHexString().substr(1) + "'>Используйте этот цвет в нашей Палитре цветов</a></p>";
        }
        function setFullColor() {
            color = w3color(document.getElementById("hex01").value);
            document.getElementById("r01").value = color.toHexString().substr(1,2);
            document.getElementById("g01").value = color.toHexString().substr(3,2);
            document.getElementById("b01").value = color.toHexString().substr(5,2);
            setColor();
        }
        color = w3color("ff0000");
        document.getElementById("hex01").value = color.toHexString();
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