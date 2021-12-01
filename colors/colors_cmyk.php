<?php include '../include/head.php'; ?>
<title>HTML Цвета CMYK (CYAN, MAGENTA, YELLOW, BLACK). <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Цвета CMYK (CYAN, MAGENTA, YELLOW, BLACK). Что означает CMYK? Рекомендованный стандарт цвета для CSS4. Как применяется CMYK-цвет на веб-сайте? <?php include '../include/description.php'; ?>'>
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
    <h1><span class="color_h1">CMYK Цвета</span></h1>

    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_hwb.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_ncol.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>CMYK</strong> - рекомендованный стандарт для <strong>CSS4</strong>.</p>
    <hr>
    <div class="w3-container w3-padding-large" style="background-color:#f1f1f1;border:1px solid #d3d3d3;">
        <h2>CMYK Калькулятор</h2>
        <br>
        <div class="w3-row">
            <div class="w3-col m7" id="result01" style="background-color:rgb(255,0,0);height:200px"></div>
            <div class="w3-col m1">&nbsp;</div>
            <div class="w3-col m4">
                <div class="w3-large" style="font-family:Consolas, 'courier new';bottom:10px;">
                    <input id="cmyk01" type="text" class="w3-input w3-border" onchange="setFullColor()" onkeydown="submitOnEnter(event)">
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
                <div style="width:30px;float:left;">C:</div>
                <input type="number" style="padding-left:6px;width:70px;" id="c01" oninput="setColor(this)" onchange="setColor(this)" value="100">
            </div>
            <div class="w3-rest colorslider">
                <div id="cyantable"></div>
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col colorinput">
                <div style="width:30px;float:left;">M:</div>
                <input type="number" style="padding-left:6px;width:70px;" id="m01" oninput="setColor(this)" onchange="setColor(this)" value="0">
            </div>
            <div class="w3-rest colorslider">
                <div id="magentatable"></div>
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col colorinput">
                <div style="width:30px;float:left;">Y:</div>
                <input type="number" style="padding-left:6px;width:70px;" id="y01" oninput="setColor(this)" onchange="setColor(this)" value="0">
            </div>
            <div class="w3-rest colorslider">
                <div id="yellowtable"></div>
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col colorinput">
                <div style="width:30px;float:left;">K:</div>
                <input type="number" style="padding-left:6px;width:70px;" id="k01" oninput="setColor(this)" onchange="setColor(this)" value="0">
            </div>
            <div class="w3-rest colorslider">
                <div id="blacktable"></div>
            </div>
        </div>
        <div id="linktocp"></div>
    </div>

    <hr>
    <h2>CMYK Цвета</h2>
    <p>CMYK цвета - это комбинация цветов CYAN (голубого), MAGENTA (пурпурного), YELLOW (жёлтого), BLACK (чёрного).</p>
    <p>На экранах компьютеров отображаются цвета с использованием значений цвета RGB. Принтеры часто представляют цвета, используя значения цветов CMYK.</p>
    <hr>
    <h2>HTML Поддержка</h2>
    <p>CMYK не поддерживается в HTML, но он предлагается как новый стандарт в <strong>CSS4</strong>.</p>
    <p>Ожидая <strong>CSS4</strong>, вы можете включить библиотеку цветов W3Schools и использовать CMYK в качестве HTML-атрибута, как здесь:</p>
    <hr>

    <h2>Попробуйте сами</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate">
            <div class="htmlHigh">
                &lt;div data-w3-color=&quot;cmyk(100%, 0%, 0%, 0%)&quot;&gt;<br><br>&lt;p&gt;Киев - это столица Великой Украины.<br>Это самый большой и густонаселенный город Великой Украины, <br> со столичной агломерацией более 5 миллионов жителей.&lt;/p&gt;<br><br>&lt;/div&gt;
                <br><br>&lt;script src=&quot;../lib/w3color.js&quot;&gt;&lt;/script&gt;</div>
        </div>
        <br>
        <a class="w3-btn w3-margin-bottom" href="../colorstryit/trycolors_cmyk.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>Библиотека цветов W3Schools</h2>
    <p>Библиотеку JavaScript, используемую в примере выше, можно скачать по ссылке:</p>
    <p><strong><a target="_blank" href="https://www.w3schools.com/lib/w3color.js">https://www.w3schools.com/lib/w3color.js</a></strong></p>
    <p>Также вы можете воспользоваться альтернативным скачиванием с нашего сайта <?php include '../include/w3schools.php'; ?> по ссылке: <a href="../lib/w3color.js" target="_blank">https://w3schoolsrus.github.io/lib/w3color.js</a></p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_hwb.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_ncol.php">Next &#10095;</a>
    </div>
    <script>
        function submitOnEnter(e) {
            keyboardKey = e.which || e.keyCode;
            if (keyboardKey == 13) {
                setFullColor();
            }
        }
        function clickCyan(cyan) {
            var c = document.getElementById("c01");
            c.value = cyan;
            setColor(c);
        }
        function clickMagenta(magenta) {
            var m = document.getElementById("m01");
            m.value = magenta;
            setColor(m);
        }
        function clickYellow(yellow) {
            var y = document.getElementById("y01");
            y.value = yellow;
            setColor(y);
        }
        function clickBlack(black) {
            var b = document.getElementById("k01");
            b.value = black;
            setColor(b);
        }
        function drawCyanTable() {
            var x, i, m, y, k, color;
            m = 0;
            y = 0;
            k = 0;
            x = "<table class='tableslider'>"
            x += "<tr>";
            for (i = 0; i <= 100; i++) {
                x += "<td style='position:relative;padding:0;'><div class='pointer' id='cyanpointer" + i + "'><div>" + i + "</div><i class='fa fa-caret-down'></i></div></td>";
            }
            x += "</tr>";
            x += "<tr>";
            for (i = 0; i <= 100; i++) {
                color = w3color("cmyk(" + i + "%, " + m + "%, " + y + "%, " + k + "%)");
                x += "<td style='background-color:" + color.toRgbString() + ";height:22px;padding:0;' onmousemove='tooltip(0, " + i + ")' onclick='clickCyan(" + i + ")'></td>";
            }
            x += "</tr>";
            x += "</table>";
            document.getElementById("cyantable").innerHTML = x;
        }
        function drawMagentaTable() {
            var x, i, c, y, k, color;
            c = 0;
            y = 0;
            k = 0;
            x = "<table class='tableslider'>"
            x += "<tr>";
            for (i = 0; i <= 100; i++) {
                x += "<td style='position:relative;padding:0;'><div class='pointer' id='magentapointer" + i + "'><div>" + i + "</div><i class='fa fa-caret-down'></i></div></td>";
            }
            x += "</tr>";
            x += "<tr>";
            for (i = 0; i <= 100; i++) {
                color = w3color("cmyk(" + c + "%, " + i + "%, " + y + "%, " + k + "%)");
                x += "<td style='background-color:" + color.toRgbString() + ";height:22px;padding:0;' onmousemove='tooltip(1, " + i + ")' onclick='clickMagenta(" + i + ")'></td>";
            }
            x += "</tr>";
            x += "</table>";
            document.getElementById("magentatable").innerHTML = x;
        }
        function drawYellowTable() {
            var x, i, c, m, k, color;
            c = 0;
            m = 0;
            k = 0;
            x = "<table class='tableslider'>"
            x += "<tr>";
            for (i = 0; i <= 100; i++) {
                x += "<td style='position:relative;padding:0;'><div class='pointer' id='yellowpointer" + i + "'><div>" + i + "</div><i class='fa fa-caret-down'></i></div></td>";
            }
            x += "</tr>";
            x += "<tr>";
            for (i = 0; i <= 100; i++) {
                color = w3color("cmyk(" + c + "%, " + m + "%, " + i + "%, " + k + "%)");
                x += "<td style='background-color:" + color.toRgbString() + ";height:22px;padding:0;' onmousemove='tooltip(2, " + i + ")' onclick='clickYellow(" + i + ")'></td>";
            }
            x += "</tr>";
            x += "</table>";
            document.getElementById("yellowtable").innerHTML = x;
        }
        function drawBlackTable() {
            var x, i, c, m, y, color;
            c = 0;
            m = 0;
            y = 0;
            x = "<table class='tableslider'>"
            x += "<tr>";
            for (i = 0; i <= 100; i++) {
                x += "<td style='position:relative;padding:0;'><div class='pointer' id='blackpointer" + i + "'><div>" + i + "</div><i class='fa fa-caret-down'></i></div></td>";
            }
            x += "</tr>";
            x += "<tr>";
            for (i = 0; i <= 100; i++) {
                color = w3color("cmyk(" + c + "%, " + m + "%, " + y + "%, " + i + "%)");
                x += "<td style='background-color:" + color.toRgbString() + ";height:22px;padding:0;' onmousemove='tooltip(3, " + i + ")' onclick='clickBlack(" + i + ")'></td>";
            }
            x += "</tr>";
            x += "</table>";
            document.getElementById("blacktable").innerHTML = x;
        }
        drawCyanTable();
        drawMagentaTable();
        drawYellowTable();
        drawBlackTable();
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
                if (e == 0) { x = document.getElementById("c01"); }
                if (e == 1) { x = document.getElementById("m01"); }
                if (e == 2) { x = document.getElementById("y01"); }
                if (e == 3) { x = document.getElementById("k01"); }
                x.value = n;
                setColor(x);
            }
        }
        function setColor(elmnt) {
            var ele, col, c, m, y, k, rgb;
            c = document.getElementById("c01");
            m = document.getElementById("m01");
            y = document.getElementById("y01");
            k = document.getElementById("k01");
            elmnt.value = Number(elmnt.value);
            if (parseInt(elmnt.value) < 0) {elmnt.value = "0";}
            if (parseInt(elmnt.value) > 100) {elmnt.value = "100";}
            rgb = w3color("cmyk(" + c.value + "%, " + m.value + "%, " + y.value + "%, " + k.value + "%)");
            document.getElementById("result01").style.backgroundColor = rgb.toRgbString();
            document.getElementById("cmyk01").value = rgb.toCmykString();
            document.getElementById("rgb01").innerHTML = rgb.toRgbString();
            document.getElementById("hsl01").innerHTML = rgb.toHslString();
            document.getElementById("hex01").innerHTML = rgb.toHexString();
            for (i = 0; i <= 100; i++) {
                document.getElementById("cyanpointer" + i).style.display = "none";
                document.getElementById("magentapointer" + i).style.display = "none";
                document.getElementById("yellowpointer" + i).style.display = "none";
                document.getElementById("blackpointer" + i).style.display = "none";
            }
            document.getElementById("cyanpointer" + c.value).style.display = "inline";
            document.getElementById("magentapointer" + m.value).style.display = "inline";
            document.getElementById("yellowpointer" + y.value).style.display = "inline";
            document.getElementById("blackpointer" + k.value).style.display = "inline";
            document.getElementById("linktocp").innerHTML = "<hr style='border-color:#dfdfdf'><p><a href='colors_picker.php?colorhex=" + rgb.toHexString().substr(1) + "'>Используйте этот цвет в нашей Палитре цветов</a></p>";
        }
        function setFullColor() {
            var color = w3color(document.getElementById("cmyk01").value);
            var cmyk = color.toCmyk();
            document.getElementById("c01").value = (cmyk.c * 100).toFixed(0);
            document.getElementById("m01").value = (cmyk.m * 100).toFixed(0);
            document.getElementById("y01").value = (cmyk.y * 100).toFixed(0);
            document.getElementById("k01").value = (cmyk.k * 100).toFixed(0);
            setColor(document.getElementById("c01"));
        }
        color = w3color("cmyk(100%, 0%, 0%, 0%)");
        document.getElementById("cmyk01").value = color.toCmykString();
        setFullColor();
    </script>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>