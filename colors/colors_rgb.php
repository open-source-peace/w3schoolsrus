<?php include '../include/head.php'; ?>
<title>HTML Цвет RGB (Red, Green, Blue). <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Цвет RGB (Red, Green, Blue). Что означает RGB? Как используется RGB-цвет на веб-сайте? <?php include '../include/description.php'; ?>'>
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
            background-color:#fff;
            border:1px solid #aaa;
            height:24px;
            width:40px;
            padding:2px 4px;
            position:absolute;
            text-align:center;
            top:-14px;
            left:-15px;
            color:#000;
            border-radius:4px;
            font:14px verdana;
        }
        .pointer div::selection {
            color: #000;
            background: #fff;
        }
        .pointer i{
            color:#aaa
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
    <h1><span class="color_h1">RGB Цвета</span></h1>

    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_converter.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_hexadecimal.php">Next &#10095;</a>
    </div>
    <br>
    <div class="w3-container w3-padding-large" style="background-color:#f1f1f1;border:1px solid #d3d3d3;">
        <h2>RGB Калькулятор</h2>
        <br>
        <div class="w3-row">
            <div class="w3-col m7" id="result01" style="background-color:rgb(255,0,0);height:200px"></div>
            <div class="w3-col m1">&nbsp;</div>
            <div class="w3-col m4">
                <div class="w3-large" style="font-family:Consolas, 'courier new';bottom:10px;">
                    <input id="rgb01" type="text" class="w3-input w3-border" onchange="setFullColor()" onkeydown="submitOnEnter(event)">
                    <div id="hex01" class="w3-margin-top">#ff0000</div>
                    <div id="hsl01" class="w3-margin-top">hsl(0, 100%, 50%)</div>
                </div>
            </div>
        </div>
        <hr style="border-color:#d3d3d3" class="w3-hide-medium w3-hide-large">
        <br>
        <div class="w3-row">
            <div class="w3-col colorinput">
                <div style="width:30px;float:left;">R:</div>
                <input type="number" style="padding-left:6px;width:70px;" id="r01" oninput="setColor(this)" onchange="setColor(this)" value="255">
            </div>
            <div class="w3-rest colorslider">
                <div id="redtable"></div>
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col colorinput">
                <div style="width:30px;float:left;">G:</div>
                <input type="number" style="padding-left:6px;width:70px;" id="g01" oninput="setColor(this)" onchange="setColor(this)" value="0">
            </div>
            <div class="w3-rest colorslider">
                <div id="greentable"></div>
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col colorinput">
                <div style="width:30px;float:left;">B:</div>
                <input type="number" style="padding-left:6px;width:70px;" id="b01" oninput="setColor(this)" onchange="setColor(this)" value="0">
            </div>
            <div class="w3-rest colorslider">
                <div id="bluetable"></div>
            </div>
        </div>
        <div id="linktocp"></div>
    </div>

    <hr>
    <h2>RGB Цвета</h2>
    <p>Значение цвета RGB поддерживается во всех браузерах.</p>
    <p>Значениие цвета RGB указано с помощью: rgb(red, green, blue).</p>
    <p>Каждый параметр (red - красный, green - зеленый и blue - синий) определяет интенсивность цвета как целое число от 0 до 255.</p>
    <p>Например, rgb(0,0,255) отображается как синий, поскольку для синего параметра установлено самое высокое значение (255), а для других - 0.</p>
    <script>
        function submitOnEnter(e) {
            keyboardKey = e.which || e.keyCode;
            if (keyboardKey == 13) {
                setFullColor();
            }
        }
        function clickRed(red) {
            var r = document.getElementById("r01");
            r.value = red;
            setColor(r);
        }
        function clickGreen(green) {
            var g = document.getElementById("g01");
            g.value = green;
            setColor(g);
        }
        function clickBlue(blue) {
            var b = document.getElementById("b01");
            b.value = blue;
            setColor(b);
        }
        function drawRedTable() {
            var x, i, n, g, b;
            g = 0;
            b = 0;
            x = "<table class='tableslider'>"
            x += "<tr>";
            n = 0;
            for (i = 0; i <= 255; i++) {
                n = i;
                x += "<td";
                x += " style='position:relative;padding:0;'><div class='pointer' id='redpointer" + n + "'><div>" + n + "</div><i class='fa fa-caret-down'></i></div></td>";
            }
            x += "</tr>";
            x += "<tr>";
            n = 0;
            for (i = 0; i <= 255; i++) {
                n = i;
                x += "<td style='background-color:rgb(" + n + "," + g + "," + b + ");height:22px;padding:0;' onmousemove='tooltip(0, " + n + ")' onclick='clickRed(" + n + ")'></td>";
            }
            x += "</tr>";
            x += "</table>";
            document.getElementById("redtable").innerHTML = x;
        }
        function drawGreenTable() {
            var x, i, r, b;
            r = 0;
            b = 0;
            x = "<table class='tableslider'>"
            x += "<tr>";
            for (i = 0; i <= 255; i++) {
                x += "<td style='position:relative;padding:0;'><div class='pointer' id='greenpointer" + i + "'><div>" + i + "</div><i class='fa fa-caret-down'></i></div></td>";
            }
            x += "</tr>";
            x += "<tr>";
            for (i = 0; i <= 255; i++) {
                x += "<td style='background-color: rgb(" + r + ", " + i + "," + b + ");height:22px;padding:0;' onmousemove='tooltip(1, " + i + ")' onclick='clickGreen(" + i + ")'></td>";
            }
            x += "</tr></table>";
            document.getElementById("greentable").innerHTML = x;
        }
        function drawBlueTable() {
            var x, i, r, g;
            r = 0;
            g = 0;
            x = "<table class='tableslider'>"
            x += "<tr>";
            for (i = 0; i <= 255; i++) {
                x += "<td style='position:relative;padding:0;'><div class='pointer' id='bluepointer" + i + "'><div>" + i + "</div><i class='fa fa-caret-down'></i></div></td>";
            }
            x += "</tr>";
            x += "<tr>";
            for (i = 0; i <= 255; i++) {
                x += "<td style='background-color: rgb(" + r + "," + g + "," + i + ");height:22px;padding:0;' onmousemove='tooltip(2, " + i + ")' onclick='clickBlue(" + i + ")'></td>";
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
    <p>Значение цвета RGB поддерживается во всех основных браузерах.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate">
            <div class="htmlHigh">
                &lt;style&gt;<br>
            </div>
            <div class="cssHigh">
                div {<br>&nbsp;&nbsp;&nbsp; background-color: rgb(0, 191, 255);<br>&nbsp;&nbsp;&nbsp; color: rgb(255, 255, 255);<br>}<br>
            </div>
            <div class="htmlHigh">
                &lt;/style&gt;
            </div>
        </div>
        <br>
        <a class="w3-btn w3-margin-bottom" href="../colorstryit/trycolors_rgb.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_converter.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_hexadecimal.php">Next &#10095;</a>
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
                setColor(x);
            }
        }
        function setColor(elmnt) {
            var ele, col, r, g, b, rgb;
            r = document.getElementById("r01");
            g = document.getElementById("g01");
            b = document.getElementById("b01");
            elmnt.value = Number(elmnt.value);
            if (parseInt(elmnt.value) < 0) {elmnt.value = "0";}
            if (parseInt(elmnt.value) > 255) {elmnt.value = "255";}
            rgb = w3color("rgb(" + r.value + ", " + g.value + ", " + b.value + ")");
            document.getElementById("result01").style.backgroundColor = rgb.toRgbString();
            document.getElementById("rgb01").value = rgb.toRgbString();
            document.getElementById("hsl01").innerHTML = rgb.toHslString();
            document.getElementById("hex01").innerHTML = rgb.toHexString();
            for (i = 0; i <= 255; i++) {
                document.getElementById("redpointer" + i).style.display = "none";
            }
            for (i = 0; i <= 255; i++) {
                document.getElementById("greenpointer" + i).style.display = "none";
                document.getElementById("bluepointer" + i).style.display = "none";
            }
            document.getElementById("redpointer" + r.value).style.display = "inline";
            document.getElementById("greenpointer" + g.value).style.display = "inline";
            document.getElementById("bluepointer" + b.value).style.display = "inline";
            document.getElementById("linktocp").innerHTML = "<hr style='border-color:#dfdfdf'><p><a href='colors_picker.php?colorhex=" + rgb.toHexString().substr(1) + "'>Используйте этот цвет в нашей Палитре цветов</a></p>";
        }
        function setFullColor() {
            var color = w3color(document.getElementById("rgb01").value);
            var rgb = color.toRgb();
            document.getElementById("r01").value = rgb.r;
            document.getElementById("g01").value = rgb.g;
            document.getElementById("b01").value = rgb.b;
            setColor(document.getElementById("r01"));
        }
        color = w3color("ff0000");
        document.getElementById("rgb01").value = color.toRgbString();
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