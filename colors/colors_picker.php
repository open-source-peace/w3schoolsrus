<?php include '../include/head.php'; ?>
<title>HTML Палитра цветов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Палитра цветов. Как выбрать цвета для веб-сайта? Цветовая палитра. <?php include '../include/description.php'; ?>'>
    <style>
        #selectedcolor {
            border:1px solid #e3e3e3;
            width:80%;
            height:300px;
            margin:auto;
        }
        #divpreview {
            border:1px solid #e3e3e3;
            width:80px;
            height:20px;
            margin:auto;
            visibility:hidden;
        }
        .colorTable, #colorhexDIV, #colorrgbDIV, #colorhslDIV, #colornamDIV {
            font-family:Consolas, 'Courier New', Courier, monospace;
        }
        #colorhexDIV, #colorrgbDIV, #colorhslDIV, #colornamDIV {
            font-size:18px;
        }
        #wronginputDIV {
            text-align:left;
            position:absolute;
            margin:4px 10px;
            color:#a94442;
            display:none;
        }
        .has-error input{
            border:1px solid red;
        }
        #entercolorDIV input,#entercolorDIV button{
            height:28px;
        }
        #entercolorDIV input{
            width:80%;
            border:1px solid #d3d3d3;
            border-right:none;
        }

        .w3-table-all td {
            padding:4px;
        }
        .colorthird1 {
            width:34%;
        }
        .colorthird2 {
            width:33%;
        }
        .colorthird3 {
            width:33%;
        }
        @media screen and (max-width:1080px) {
            .colorthird1,.colorthird2,.colorthird3 {
                width:100%;
            }
        }
    </style>
    <script src="../lib/w3color.js"></script>
    <script>
        var colorhex = "#FF0000";
        var color = "#FF0000";
        var colorObj = w3color(color);
        function mouseOverColor(hex) {
            document.getElementById("divpreview").style.visibility = "visible";
            document.getElementById("divpreview").style.backgroundColor = hex;
            document.body.style.cursor = "pointer";
        }
        function mouseOutMap() {
            if (hh == 0) {
                document.getElementById("divpreview").style.visibility = "hidden";
            } else {
                hh = 0;
            }
            document.getElementById("divpreview").style.backgroundColor = colorObj.toHexString();
            document.body.style.cursor = "";
        }
        var hh = 0;
        function clickColor(hex, seltop, selleft, html5) {
            var c, cObj, colormap, areas, i, areacolor, cc;
            if (html5 && html5 == 5)  {
                c = document.getElementById("html5colorpicker").value;
            } else {
                if (hex == 0)  {
                    c = document.getElementById("entercolor").value;
                } else {
                    c = hex;
                }
            }
            cObj = w3color(c);
            colorhex = cObj.toHexString();
            if (cObj.valid) {
                clearWrongInput();
            } else {
                wrongInput();
                return;
            }
            r = cObj.red;
            g = cObj.green;
            b = cObj.blue;
            document.getElementById("colornamDIV").innerHTML = (cObj.toName() || "");
            document.getElementById("colorhexDIV").innerHTML = cObj.toHexString();
            document.getElementById("colorrgbDIV").innerHTML = cObj.toRgbString();
            document.getElementById("colorhslDIV").innerHTML = cObj.toHslString();
            if ((!seltop || seltop == -1) && (!selleft || selleft == -1)) {
                colormap = document.getElementById("colormap");
                areas = colormap.getElementsByTagName("AREA");
                for (i = 0; i < areas.length; i++) {
                    areacolor = areas[i].getAttribute("onmouseover").replace('mouseOverColor("', '');
                    areacolor = areacolor.replace('")', '');
                    if (areacolor.toLowerCase() == colorhex) {
                        cc = areas[i].getAttribute("onclick").replace(')', '').split(",");
                        seltop = Number(cc[1]);
                        selleft = Number(cc[2]);
                    }
                }
            }
            if ((seltop+200)>-1 && selleft>-1) {
                document.getElementById("selectedhexagon").style.top=seltop + "px";
                document.getElementById("selectedhexagon").style.left=selleft + "px";
                document.getElementById("selectedhexagon").style.visibility="visible";
            } else {
                document.getElementById("divpreview").style.backgroundColor = cObj.toHexString();
                document.getElementById("selectedhexagon").style.visibility = "hidden";
            }
            document.getElementById("selectedcolor").style.backgroundColor = cObj.toHexString();
            document.getElementById("html5colorpicker").value = cObj.toHexString();
            document.getElementById('slideRed').value = r;
            document.getElementById('slideGreen').value = g;
            document.getElementById('slideBlue').value = b;
            changeRed(r);changeGreen(g);changeBlue(b);
            changeColor();
            document.getElementById("fixed").style.backgroundColor = cObj.toHexString();
        }
        function wrongInput() {
            document.getElementById("entercolorDIV").className = "has-error";
            document.getElementById("wronginputDIV").style.display = "block";
        }
        function clearWrongInput() {
            document.getElementById("entercolorDIV").className = "";
            document.getElementById("wronginputDIV").style.display = "none";
        }
        function changeRed(value) {
            document.getElementById('valRed').innerHTML = value;
            changeAll();
        }
        function changeGreen(value) {
            document.getElementById('valGreen').innerHTML = value;
            changeAll();
        }
        function changeBlue(value) {
            document.getElementById('valBlue').innerHTML = value;
            changeAll();
        }
        function changeAll() {
            var r = document.getElementById('valRed').innerHTML;
            var g = document.getElementById('valGreen').innerHTML;
            var b = document.getElementById('valBlue').innerHTML;
            document.getElementById('change').style.backgroundColor = "rgb(" + r + "," + g + "," + b + ")";
            document.getElementById('changetxt').innerHTML = "rgb(" + r + ", " + g + ", " + b + ")";
            document.getElementById('changetxthex').innerHTML = w3color("rgb(" + r + "," + g + "," + b + ")").toHexString();
        }

        function hslLum_top() {
            var i, a, match;
            var color = document.getElementById("colorhexDIV").innerHTML;
            var hslObj = w3color(color);
            var h = hslObj.hue;
            var s = hslObj.sat;
            var l = hslObj.lightness;
            var arr = [];
            for (i = 0; i <= 20; i++) {
                arr.push(w3color("hsl(" + h + "," + s + "," + (i * 0.05) + ")"));
            }
            arr.reverse();
            a = "<h3 class='w3-center'>Lighter / Darker:</h3><table class='colorTable' style='width:100%;'>";
            match = 0;
            for (i = 0; i < arr.length; i++) {
                if (match == 0 && Math.round(l * 100) == Math.round(arr[i].lightness * 100)) {
                    a += "<tr><td></td><td></td><td></td></tr>";
                    a += "<tr>";
                    a += "<td style='text-align:right;'><b>" + Math.round(l * 100) + "%&nbsp;</b></td>";
                    a += "<td style='background-color:" + w3color(hslObj).toHexString() + "'><br><br></td>";
                    a += "<td>&nbsp;<b>" + w3color(hslObj).toHexString() + "</b></td>";
                    a += "</tr>";
                    a += "<tr><td></td><td></td><td></td></tr>";
                    match = 1;
                } else {
                    if (match == 0 && l > arr[i].lightness) {
                        a += "<tr><td></td><td></td><td></td></tr>";
                        a += "<tr>";
                        a += "<td style='text-align:right;'><b>" + Math.round(l * 100) + "%&nbsp;</b></td>";
                        a += "<td style='background-color:" + w3color(hslObj).toHexString() + "'></td>";
                        a += "<td>&nbsp;<b>" + w3color(hslObj).toHexString() + "</b></td>";
                        a += "</tr>";
                        a += "<tr><td></td><td></td><td></td></tr>";
                        match = 1;
                    }
                    a += "<tr>";
                    a += "<td style='width:40px;text-align:right;'>" + Math.round(arr[i].lightness * 100) + "%&nbsp;</td>";
                    a += "<td style='cursor:pointer;background-color:" + arr[i].toHexString() + "' onclick='clickColor(\"" + arr[i].toHexString() + "\")'></td>";
                    a += "<td style='width:80px;'>&nbsp;" + arr[i].toHexString() + "</td>";
                    a += "</tr>";
                }
            }
            a += "</table>";
            document.getElementById("lumtopcontainer").innerHTML = a;
        }

        function hslTable(x) {
            var lineno, header, i, a, match, same, comp, loopHSL, HSL;
            var color = document.getElementById("colorhexDIV").innerHTML;
            var hslObj = w3color(color);
            var h = hslObj.hue;
            var s = hslObj.sat;
            var l = hslObj.lightness;
            var arr = [];
            if (x == "hue") {header = "Hue"; lineno = 24;}
            if (x == "sat") {header = "Saturation"; lineno = 20;}
            if (x == "light") {header = "Lightness"; lineno = 20;}
            for (i = 0; i <= lineno; i++) {
                if (x == "hue") {arr.push(w3color("hsl(" + (i * 15) + "," + s + "," + l + ")"));}
                if (x == "sat") {arr.push(w3color("hsl(" + h + "," + (i * 0.05) + "," + l + ")"));}
                if (x == "light") {arr.push(w3color("hsl(" + h + "," + s + "," + (i * 0.05) + ")"));}
            }
            if (x == "sat" || x == "light") {arr.reverse();}
            a = "<h3>" + header + "</h3>";
            a += "<div class='w3-responsive'>";
            a += "<table class='w3-table-all colorTable' style='width:100%;white-space: nowrap;font-size:14px;'>";
            a += "<tr>";
            a += "<td style='width:150px;'></td>";
            a += "<td style='text-align:right;text-transform:capitalize;'>" + x + "&nbsp;</td>";
            a += "<td>Hex</td>";
            a += "<td>Rgb</td>";
            a += "<td>Hsl</td>";
            a += "</tr>";
            match = 0;
            for (i = 0; i < arr.length; i++) {
                same = 0;
                if (x == "hue") {
                    loopHSL = w3color(arr[i]).hue;
                    HSL = h;
                    if (i == arr.length - 1) {loopHSL = 360;}
                    comp = (loopHSL > HSL);
                }
                if (x == "sat") {
                    loopHSL = Math.round(w3color(arr[i]).sat * 100);
                    HSL = Number(s * 100);
                    HSL = Math.round(HSL);
                    comp = (loopHSL < HSL);
                    HSL = HSL + "%";
                    loopHSL = loopHSL + "%";
                }
                if (x == "light") {
                    loopHSL = Math.round(w3color(arr[i]).lightness * 100);
                    HSL = Number(l * 100);
                    HSL = Math.round(HSL);
                    comp = (loopHSL < HSL);
                    HSL = HSL + "%";
                    loopHSL = loopHSL + "%";
                }
                if (HSL == loopHSL) {
                    match++;
                    same = 1;
                }
                if (comp) {match++;}
                if (match == 1) {
                    a += "<tr class='w3-green'>";
                    a += "<td style='background-color:" + hslObj.toHexString() + "'></td>";
                    a += "<td style='text-align:right;'><b>" + HSL + "&nbsp;</b></td>";
                    a += "<td><b>" + hslObj.toHexString() + "</b></td>";
                    a += "<td><b>" + hslObj.toRgbString() + "</b></td>";
                    a += "<td><b>" + hslObj.toHslString() + "</b></td>";
                    a += "</tr>";
                    match = 2;
                }
                if (same == 0) {
                    a += "<tr>";
                    a += "<td style='cursor:pointer;background-color:" + arr[i].toHexString() + "' onclick='clickColor(\"" + arr[i].toHexString() + "\")'></td>";
                    a += "<td style='text-align:right;'>" + loopHSL + "&nbsp;</td>";
                    a += "<td>" + arr[i].toHexString() + "</td>";
                    a += "<td>" + arr[i].toRgbString() + "</td>";
                    a += "<td>" + arr[i].toHslString() + "</td>";
                    a += "</tr>";
                }
            }
            a += "</table></div>";
            if (x == "hue") {document.getElementById("huecontainer").innerHTML = a;}
            if (x == "sat") {document.getElementById("hslsatcontainer").innerHTML = a;}
            if (x == "light") {document.getElementById("hsllumcontainer").innerHTML = a;}

        }
        function changeColor(value) {
            hslLum_top();
            hslTable("hue");
            hslTable("sat");
            hslTable("light");
        }
        window.onload = function() {
            var x = document.createElement("input");
            x.setAttribute("type", "color");
            if (x.type == "text") {
                document.getElementById("html5DIV").style.visibility = "hidden";
            }
        }
        function submitOnEnter(e) {
            keyboardKey = e.which || e.keyCode;
            if (keyboardKey == 13) {
                clickColor(0,-1,-1);
            }
        }
    </script>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_colors.php'; ?>
<?php include '../include/before_content_colors.php'; ?>

<article>
    <h1>HTML <span class="color_h1">Палитра цветов</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_shades.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_converter.php">Next &#10095;</a>
    </div>
    <hr>
    <div class="w3-row">
        <div class="w3-col colorthird1" style="text-align:center;">
            <h3>Выберите цвет:</h3>
            <div style="margin:auto;width:236px;">
                <img style='margin-right:2px;' src='../images/img_colormap.gif' usemap='#colormap' alt='colormap' /><map id='colormap' name='colormap' onmouseout='mouseOutMap()'><area style='cursor:pointer' shape='poly' coords='63,0,72,4,72,15,63,19,54,15,54,4' onclick='clickColor("#003366",-200,54)' onmouseover='mouseOverColor("#003366")' alt='#003366' /><area style='cursor:pointer' shape='poly' coords='81,0,90,4,90,15,81,19,72,15,72,4' onclick='clickColor("#336699",-200,72)' onmouseover='mouseOverColor("#336699")' alt='#336699' /><area style='cursor:pointer' shape='poly' coords='99,0,108,4,108,15,99,19,90,15,90,4' onclick='clickColor("#3366CC",-200,90)' onmouseover='mouseOverColor("#3366CC")' alt='#3366CC' /><area style='cursor:pointer' shape='poly' coords='117,0,126,4,126,15,117,19,108,15,108,4' onclick='clickColor("#003399",-200,108)' onmouseover='mouseOverColor("#003399")' alt='#003399' /><area style='cursor:pointer' shape='poly' coords='135,0,144,4,144,15,135,19,126,15,126,4' onclick='clickColor("#000099",-200,126)' onmouseover='mouseOverColor("#000099")' alt='#000099' /><area style='cursor:pointer' shape='poly' coords='153,0,162,4,162,15,153,19,144,15,144,4' onclick='clickColor("#0000CC",-200,144)' onmouseover='mouseOverColor("#0000CC")' alt='#0000CC' /><area style='cursor:pointer' shape='poly' coords='171,0,180,4,180,15,171,19,162,15,162,4' onclick='clickColor("#000066",-200,162)' onmouseover='mouseOverColor("#000066")' alt='#000066' /><area style='cursor:pointer' shape='poly' coords='54,15,63,19,63,30,54,34,45,30,45,19' onclick='clickColor("#006666",-185,45)' onmouseover='mouseOverColor("#006666")' alt='#006666' /><area style='cursor:pointer' shape='poly' coords='72,15,81,19,81,30,72,34,63,30,63,19' onclick='clickColor("#006699",-185,63)' onmouseover='mouseOverColor("#006699")' alt='#006699' /><area style='cursor:pointer' shape='poly' coords='90,15,99,19,99,30,90,34,81,30,81,19' onclick='clickColor("#0099CC",-185,81)' onmouseover='mouseOverColor("#0099CC")' alt='#0099CC' /><area style='cursor:pointer' shape='poly' coords='108,15,117,19,117,30,108,34,99,30,99,19' onclick='clickColor("#0066CC",-185,99)' onmouseover='mouseOverColor("#0066CC")' alt='#0066CC' /><area style='cursor:pointer' shape='poly' coords='126,15,135,19,135,30,126,34,117,30,117,19' onclick='clickColor("#0033CC",-185,117)' onmouseover='mouseOverColor("#0033CC")' alt='#0033CC' /><area style='cursor:pointer' shape='poly' coords='144,15,153,19,153,30,144,34,135,30,135,19' onclick='clickColor("#0000FF",-185,135)' onmouseover='mouseOverColor("#0000FF")' alt='#0000FF' /><area style='cursor:pointer' shape='poly' coords='162,15,171,19,171,30,162,34,153,30,153,19' onclick='clickColor("#3333FF",-185,153)' onmouseover='mouseOverColor("#3333FF")' alt='#3333FF' /><area style='cursor:pointer' shape='poly' coords='180,15,189,19,189,30,180,34,171,30,171,19' onclick='clickColor("#333399",-185,171)' onmouseover='mouseOverColor("#333399")' alt='#333399' /><area style='cursor:pointer' shape='poly' coords='45,30,54,34,54,45,45,49,36,45,36,34' onclick='clickColor("#669999",-170,36)' onmouseover='mouseOverColor("#669999")' alt='#669999' /><area style='cursor:pointer' shape='poly' coords='63,30,72,34,72,45,63,49,54,45,54,34' onclick='clickColor("#009999",-170,54)' onmouseover='mouseOverColor("#009999")' alt='#009999' /><area style='cursor:pointer' shape='poly' coords='81,30,90,34,90,45,81,49,72,45,72,34' onclick='clickColor("#33CCCC",-170,72)' onmouseover='mouseOverColor("#33CCCC")' alt='#33CCCC' /><area style='cursor:pointer' shape='poly' coords='99,30,108,34,108,45,99,49,90,45,90,34' onclick='clickColor("#00CCFF",-170,90)' onmouseover='mouseOverColor("#00CCFF")' alt='#00CCFF' /><area style='cursor:pointer' shape='poly' coords='117,30,126,34,126,45,117,49,108,45,108,34' onclick='clickColor("#0099FF",-170,108)' onmouseover='mouseOverColor("#0099FF")' alt='#0099FF' /><area style='cursor:pointer' shape='poly' coords='135,30,144,34,144,45,135,49,126,45,126,34' onclick='clickColor("#0066FF",-170,126)' onmouseover='mouseOverColor("#0066FF")' alt='#0066FF' /><area style='cursor:pointer' shape='poly' coords='153,30,162,34,162,45,153,49,144,45,144,34' onclick='clickColor("#3366FF",-170,144)' onmouseover='mouseOverColor("#3366FF")' alt='#3366FF' /><area style='cursor:pointer' shape='poly' coords='171,30,180,34,180,45,171,49,162,45,162,34' onclick='clickColor("#3333CC",-170,162)' onmouseover='mouseOverColor("#3333CC")' alt='#3333CC' /><area style='cursor:pointer' shape='poly' coords='189,30,198,34,198,45,189,49,180,45,180,34' onclick='clickColor("#666699",-170,180)' onmouseover='mouseOverColor("#666699")' alt='#666699' /><area style='cursor:pointer' shape='poly' coords='36,45,45,49,45,60,36,64,27,60,27,49' onclick='clickColor("#339966",-155,27)' onmouseover='mouseOverColor("#339966")' alt='#339966' /><area style='cursor:pointer' shape='poly' coords='54,45,63,49,63,60,54,64,45,60,45,49' onclick='clickColor("#00CC99",-155,45)' onmouseover='mouseOverColor("#00CC99")' alt='#00CC99' /><area style='cursor:pointer' shape='poly' coords='72,45,81,49,81,60,72,64,63,60,63,49' onclick='clickColor("#00FFCC",-155,63)' onmouseover='mouseOverColor("#00FFCC")' alt='#00FFCC' /><area style='cursor:pointer' shape='poly' coords='90,45,99,49,99,60,90,64,81,60,81,49' onclick='clickColor("#00FFFF",-155,81)' onmouseover='mouseOverColor("#00FFFF")' alt='#00FFFF' /><area style='cursor:pointer' shape='poly' coords='108,45,117,49,117,60,108,64,99,60,99,49' onclick='clickColor("#33CCFF",-155,99)' onmouseover='mouseOverColor("#33CCFF")' alt='#33CCFF' /><area style='cursor:pointer' shape='poly' coords='126,45,135,49,135,60,126,64,117,60,117,49' onclick='clickColor("#3399FF",-155,117)' onmouseover='mouseOverColor("#3399FF")' alt='#3399FF' /><area style='cursor:pointer' shape='poly' coords='144,45,153,49,153,60,144,64,135,60,135,49' onclick='clickColor("#6699FF",-155,135)' onmouseover='mouseOverColor("#6699FF")' alt='#6699FF' /><area style='cursor:pointer' shape='poly' coords='162,45,171,49,171,60,162,64,153,60,153,49' onclick='clickColor("#6666FF",-155,153)' onmouseover='mouseOverColor("#6666FF")' alt='#6666FF' /><area style='cursor:pointer' shape='poly' coords='180,45,189,49,189,60,180,64,171,60,171,49' onclick='clickColor("#6600FF",-155,171)' onmouseover='mouseOverColor("#6600FF")' alt='#6600FF' /><area style='cursor:pointer' shape='poly' coords='198,45,207,49,207,60,198,64,189,60,189,49' onclick='clickColor("#6600CC",-155,189)' onmouseover='mouseOverColor("#6600CC")' alt='#6600CC' /><area style='cursor:pointer' shape='poly' coords='27,60,36,64,36,75,27,79,18,75,18,64' onclick='clickColor("#339933",-140,18)' onmouseover='mouseOverColor("#339933")' alt='#339933' /><area style='cursor:pointer' shape='poly' coords='45,60,54,64,54,75,45,79,36,75,36,64' onclick='clickColor("#00CC66",-140,36)' onmouseover='mouseOverColor("#00CC66")' alt='#00CC66' /><area style='cursor:pointer' shape='poly' coords='63,60,72,64,72,75,63,79,54,75,54,64' onclick='clickColor("#00FF99",-140,54)' onmouseover='mouseOverColor("#00FF99")' alt='#00FF99' /><area style='cursor:pointer' shape='poly' coords='81,60,90,64,90,75,81,79,72,75,72,64' onclick='clickColor("#66FFCC",-140,72)' onmouseover='mouseOverColor("#66FFCC")' alt='#66FFCC' /><area style='cursor:pointer' shape='poly' coords='99,60,108,64,108,75,99,79,90,75,90,64' onclick='clickColor("#66FFFF",-140,90)' onmouseover='mouseOverColor("#66FFFF")' alt='#66FFFF' /><area style='cursor:pointer' shape='poly' coords='117,60,126,64,126,75,117,79,108,75,108,64' onclick='clickColor("#66CCFF",-140,108)' onmouseover='mouseOverColor("#66CCFF")' alt='#66CCFF' /><area style='cursor:pointer' shape='poly' coords='135,60,144,64,144,75,135,79,126,75,126,64' onclick='clickColor("#99CCFF",-140,126)' onmouseover='mouseOverColor("#99CCFF")' alt='#99CCFF' /><area style='cursor:pointer' shape='poly' coords='153,60,162,64,162,75,153,79,144,75,144,64' onclick='clickColor("#9999FF",-140,144)' onmouseover='mouseOverColor("#9999FF")' alt='#9999FF' /><area style='cursor:pointer' shape='poly' coords='171,60,180,64,180,75,171,79,162,75,162,64' onclick='clickColor("#9966FF",-140,162)' onmouseover='mouseOverColor("#9966FF")' alt='#9966FF' /><area style='cursor:pointer' shape='poly' coords='189,60,198,64,198,75,189,79,180,75,180,64' onclick='clickColor("#9933FF",-140,180)' onmouseover='mouseOverColor("#9933FF")' alt='#9933FF' /><area style='cursor:pointer' shape='poly' coords='207,60,216,64,216,75,207,79,198,75,198,64' onclick='clickColor("#9900FF",-140,198)' onmouseover='mouseOverColor("#9900FF")' alt='#9900FF' /><area style='cursor:pointer' shape='poly' coords='18,75,27,79,27,90,18,94,9,90,9,79' onclick='clickColor("#006600",-125,9)' onmouseover='mouseOverColor("#006600")' alt='#006600' /><area style='cursor:pointer' shape='poly' coords='36,75,45,79,45,90,36,94,27,90,27,79' onclick='clickColor("#00CC00",-125,27)' onmouseover='mouseOverColor("#00CC00")' alt='#00CC00' /><area style='cursor:pointer' shape='poly' coords='54,75,63,79,63,90,54,94,45,90,45,79' onclick='clickColor("#00FF00",-125,45)' onmouseover='mouseOverColor("#00FF00")' alt='#00FF00' /><area style='cursor:pointer' shape='poly' coords='72,75,81,79,81,90,72,94,63,90,63,79' onclick='clickColor("#66FF99",-125,63)' onmouseover='mouseOverColor("#66FF99")' alt='#66FF99' /><area style='cursor:pointer' shape='poly' coords='90,75,99,79,99,90,90,94,81,90,81,79' onclick='clickColor("#99FFCC",-125,81)' onmouseover='mouseOverColor("#99FFCC")' alt='#99FFCC' /><area style='cursor:pointer' shape='poly' coords='108,75,117,79,117,90,108,94,99,90,99,79' onclick='clickColor("#CCFFFF",-125,99)' onmouseover='mouseOverColor("#CCFFFF")' alt='#CCFFFF' /><area style='cursor:pointer' shape='poly' coords='126,75,135,79,135,90,126,94,117,90,117,79' onclick='clickColor("#CCCCFF",-125,117)' onmouseover='mouseOverColor("#CCCCFF")' alt='#CCCCFF' /><area style='cursor:pointer' shape='poly' coords='144,75,153,79,153,90,144,94,135,90,135,79' onclick='clickColor("#CC99FF",-125,135)' onmouseover='mouseOverColor("#CC99FF")' alt='#CC99FF' /><area style='cursor:pointer' shape='poly' coords='162,75,171,79,171,90,162,94,153,90,153,79' onclick='clickColor("#CC66FF",-125,153)' onmouseover='mouseOverColor("#CC66FF")' alt='#CC66FF' /><area style='cursor:pointer' shape='poly' coords='180,75,189,79,189,90,180,94,171,90,171,79' onclick='clickColor("#CC33FF",-125,171)' onmouseover='mouseOverColor("#CC33FF")' alt='#CC33FF' /><area style='cursor:pointer' shape='poly' coords='198,75,207,79,207,90,198,94,189,90,189,79' onclick='clickColor("#CC00FF",-125,189)' onmouseover='mouseOverColor("#CC00FF")' alt='#CC00FF' /><area style='cursor:pointer' shape='poly' coords='216,75,225,79,225,90,216,94,207,90,207,79' onclick='clickColor("#9900CC",-125,207)' onmouseover='mouseOverColor("#9900CC")' alt='#9900CC' /><area style='cursor:pointer' shape='poly' coords='9,90,18,94,18,105,9,109,0,105,0,94' onclick='clickColor("#003300",-110,0)' onmouseover='mouseOverColor("#003300")' alt='#003300' /><area style='cursor:pointer' shape='poly' coords='27,90,36,94,36,105,27,109,18,105,18,94' onclick='clickColor("#009933",-110,18)' onmouseover='mouseOverColor("#009933")' alt='#009933' /><area style='cursor:pointer' shape='poly' coords='45,90,54,94,54,105,45,109,36,105,36,94' onclick='clickColor("#33CC33",-110,36)' onmouseover='mouseOverColor("#33CC33")' alt='#33CC33' /><area style='cursor:pointer' shape='poly' coords='63,90,72,94,72,105,63,109,54,105,54,94' onclick='clickColor("#66FF66",-110,54)' onmouseover='mouseOverColor("#66FF66")' alt='#66FF66' /><area style='cursor:pointer' shape='poly' coords='81,90,90,94,90,105,81,109,72,105,72,94' onclick='clickColor("#99FF99",-110,72)' onmouseover='mouseOverColor("#99FF99")' alt='#99FF99' /><area style='cursor:pointer' shape='poly' coords='99,90,108,94,108,105,99,109,90,105,90,94' onclick='clickColor("#CCFFCC",-110,90)' onmouseover='mouseOverColor("#CCFFCC")' alt='#CCFFCC' /><area style='cursor:pointer' shape='poly' coords='117,90,126,94,126,105,117,109,108,105,108,94' onclick='clickColor("#FFFFFF",-110,108)' onmouseover='mouseOverColor("#FFFFFF")' alt='#FFFFFF' /><area style='cursor:pointer' shape='poly' coords='135,90,144,94,144,105,135,109,126,105,126,94' onclick='clickColor("#FFCCFF",-110,126)' onmouseover='mouseOverColor("#FFCCFF")' alt='#FFCCFF' /><area style='cursor:pointer' shape='poly' coords='153,90,162,94,162,105,153,109,144,105,144,94' onclick='clickColor("#FF99FF",-110,144)' onmouseover='mouseOverColor("#FF99FF")' alt='#FF99FF' /><area style='cursor:pointer' shape='poly' coords='171,90,180,94,180,105,171,109,162,105,162,94' onclick='clickColor("#FF66FF",-110,162)' onmouseover='mouseOverColor("#FF66FF")' alt='#FF66FF' /><area style='cursor:pointer' shape='poly' coords='189,90,198,94,198,105,189,109,180,105,180,94' onclick='clickColor("#FF00FF",-110,180)' onmouseover='mouseOverColor("#FF00FF")' alt='#FF00FF' /><area style='cursor:pointer' shape='poly' coords='207,90,216,94,216,105,207,109,198,105,198,94' onclick='clickColor("#CC00CC",-110,198)' onmouseover='mouseOverColor("#CC00CC")' alt='#CC00CC' /><area style='cursor:pointer' shape='poly' coords='225,90,234,94,234,105,225,109,216,105,216,94' onclick='clickColor("#660066",-110,216)' onmouseover='mouseOverColor("#660066")' alt='#660066' /><area style='cursor:pointer' shape='poly' coords='18,105,27,109,27,120,18,124,9,120,9,109' onclick='clickColor("#336600",-95,9)' onmouseover='mouseOverColor("#336600")' alt='#336600' /><area style='cursor:pointer' shape='poly' coords='36,105,45,109,45,120,36,124,27,120,27,109' onclick='clickColor("#009900",-95,27)' onmouseover='mouseOverColor("#009900")' alt='#009900' /><area style='cursor:pointer' shape='poly' coords='54,105,63,109,63,120,54,124,45,120,45,109' onclick='clickColor("#66FF33",-95,45)' onmouseover='mouseOverColor("#66FF33")' alt='#66FF33' /><area style='cursor:pointer' shape='poly' coords='72,105,81,109,81,120,72,124,63,120,63,109' onclick='clickColor("#99FF66",-95,63)' onmouseover='mouseOverColor("#99FF66")' alt='#99FF66' /><area style='cursor:pointer' shape='poly' coords='90,105,99,109,99,120,90,124,81,120,81,109' onclick='clickColor("#CCFF99",-95,81)' onmouseover='mouseOverColor("#CCFF99")' alt='#CCFF99' /><area style='cursor:pointer' shape='poly' coords='108,105,117,109,117,120,108,124,99,120,99,109' onclick='clickColor("#FFFFCC",-95,99)' onmouseover='mouseOverColor("#FFFFCC")' alt='#FFFFCC' /><area style='cursor:pointer' shape='poly' coords='126,105,135,109,135,120,126,124,117,120,117,109' onclick='clickColor("#FFCCCC",-95,117)' onmouseover='mouseOverColor("#FFCCCC")' alt='#FFCCCC' /><area style='cursor:pointer' shape='poly' coords='144,105,153,109,153,120,144,124,135,120,135,109' onclick='clickColor("#FF99CC",-95,135)' onmouseover='mouseOverColor("#FF99CC")' alt='#FF99CC' /><area style='cursor:pointer' shape='poly' coords='162,105,171,109,171,120,162,124,153,120,153,109' onclick='clickColor("#FF66CC",-95,153)' onmouseover='mouseOverColor("#FF66CC")' alt='#FF66CC' /><area style='cursor:pointer' shape='poly' coords='180,105,189,109,189,120,180,124,171,120,171,109' onclick='clickColor("#FF33CC",-95,171)' onmouseover='mouseOverColor("#FF33CC")' alt='#FF33CC' /><area style='cursor:pointer' shape='poly' coords='198,105,207,109,207,120,198,124,189,120,189,109' onclick='clickColor("#CC0099",-95,189)' onmouseover='mouseOverColor("#CC0099")' alt='#CC0099' /><area style='cursor:pointer' shape='poly' coords='216,105,225,109,225,120,216,124,207,120,207,109' onclick='clickColor("#993399",-95,207)' onmouseover='mouseOverColor("#993399")' alt='#993399' /><area style='cursor:pointer' shape='poly' coords='27,120,36,124,36,135,27,139,18,135,18,124' onclick='clickColor("#333300",-80,18)' onmouseover='mouseOverColor("#333300")' alt='#333300' /><area style='cursor:pointer' shape='poly' coords='45,120,54,124,54,135,45,139,36,135,36,124' onclick='clickColor("#669900",-80,36)' onmouseover='mouseOverColor("#669900")' alt='#669900' /><area style='cursor:pointer' shape='poly' coords='63,120,72,124,72,135,63,139,54,135,54,124' onclick='clickColor("#99FF33",-80,54)' onmouseover='mouseOverColor("#99FF33")' alt='#99FF33' /><area style='cursor:pointer' shape='poly' coords='81,120,90,124,90,135,81,139,72,135,72,124' onclick='clickColor("#CCFF66",-80,72)' onmouseover='mouseOverColor("#CCFF66")' alt='#CCFF66' /><area style='cursor:pointer' shape='poly' coords='99,120,108,124,108,135,99,139,90,135,90,124' onclick='clickColor("#FFFF99",-80,90)' onmouseover='mouseOverColor("#FFFF99")' alt='#FFFF99' /><area style='cursor:pointer' shape='poly' coords='117,120,126,124,126,135,117,139,108,135,108,124' onclick='clickColor("#FFCC99",-80,108)' onmouseover='mouseOverColor("#FFCC99")' alt='#FFCC99' /><area style='cursor:pointer' shape='poly' coords='135,120,144,124,144,135,135,139,126,135,126,124' onclick='clickColor("#FF9999",-80,126)' onmouseover='mouseOverColor("#FF9999")' alt='#FF9999' /><area style='cursor:pointer' shape='poly' coords='153,120,162,124,162,135,153,139,144,135,144,124' onclick='clickColor("#FF6699",-80,144)' onmouseover='mouseOverColor("#FF6699")' alt='#FF6699' /><area style='cursor:pointer' shape='poly' coords='171,120,180,124,180,135,171,139,162,135,162,124' onclick='clickColor("#FF3399",-80,162)' onmouseover='mouseOverColor("#FF3399")' alt='#FF3399' /><area style='cursor:pointer' shape='poly' coords='189,120,198,124,198,135,189,139,180,135,180,124' onclick='clickColor("#CC3399",-80,180)' onmouseover='mouseOverColor("#CC3399")' alt='#CC3399' /><area style='cursor:pointer' shape='poly' coords='207,120,216,124,216,135,207,139,198,135,198,124' onclick='clickColor("#990099",-80,198)' onmouseover='mouseOverColor("#990099")' alt='#990099' /><area style='cursor:pointer' shape='poly' coords='36,135,45,139,45,150,36,154,27,150,27,139' onclick='clickColor("#666633",-65,27)' onmouseover='mouseOverColor("#666633")' alt='#666633' /><area style='cursor:pointer' shape='poly' coords='54,135,63,139,63,150,54,154,45,150,45,139' onclick='clickColor("#99CC00",-65,45)' onmouseover='mouseOverColor("#99CC00")' alt='#99CC00' /><area style='cursor:pointer' shape='poly' coords='72,135,81,139,81,150,72,154,63,150,63,139' onclick='clickColor("#CCFF33",-65,63)' onmouseover='mouseOverColor("#CCFF33")' alt='#CCFF33' /><area style='cursor:pointer' shape='poly' coords='90,135,99,139,99,150,90,154,81,150,81,139' onclick='clickColor("#FFFF66",-65,81)' onmouseover='mouseOverColor("#FFFF66")' alt='#FFFF66' /><area style='cursor:pointer' shape='poly' coords='108,135,117,139,117,150,108,154,99,150,99,139' onclick='clickColor("#FFCC66",-65,99)' onmouseover='mouseOverColor("#FFCC66")' alt='#FFCC66' /><area style='cursor:pointer' shape='poly' coords='126,135,135,139,135,150,126,154,117,150,117,139' onclick='clickColor("#FF9966",-65,117)' onmouseover='mouseOverColor("#FF9966")' alt='#FF9966' /><area style='cursor:pointer' shape='poly' coords='144,135,153,139,153,150,144,154,135,150,135,139' onclick='clickColor("#FF6666",-65,135)' onmouseover='mouseOverColor("#FF6666")' alt='#FF6666' /><area style='cursor:pointer' shape='poly' coords='162,135,171,139,171,150,162,154,153,150,153,139' onclick='clickColor("#FF0066",-65,153)' onmouseover='mouseOverColor("#FF0066")' alt='#FF0066' /><area style='cursor:pointer' shape='poly' coords='180,135,189,139,189,150,180,154,171,150,171,139' onclick='clickColor("#CC6699",-65,171)' onmouseover='mouseOverColor("#CC6699")' alt='#CC6699' /><area style='cursor:pointer' shape='poly' coords='198,135,207,139,207,150,198,154,189,150,189,139' onclick='clickColor("#993366",-65,189)' onmouseover='mouseOverColor("#993366")' alt='#993366' /><area style='cursor:pointer' shape='poly' coords='45,150,54,154,54,165,45,169,36,165,36,154' onclick='clickColor("#999966",-50,36)' onmouseover='mouseOverColor("#999966")' alt='#999966' /><area style='cursor:pointer' shape='poly' coords='63,150,72,154,72,165,63,169,54,165,54,154' onclick='clickColor("#CCCC00",-50,54)' onmouseover='mouseOverColor("#CCCC00")' alt='#CCCC00' /><area style='cursor:pointer' shape='poly' coords='81,150,90,154,90,165,81,169,72,165,72,154' onclick='clickColor("#FFFF00",-50,72)' onmouseover='mouseOverColor("#FFFF00")' alt='#FFFF00' /><area style='cursor:pointer' shape='poly' coords='99,150,108,154,108,165,99,169,90,165,90,154' onclick='clickColor("#FFCC00",-50,90)' onmouseover='mouseOverColor("#FFCC00")' alt='#FFCC00' /><area style='cursor:pointer' shape='poly' coords='117,150,126,154,126,165,117,169,108,165,108,154' onclick='clickColor("#FF9933",-50,108)' onmouseover='mouseOverColor("#FF9933")' alt='#FF9933' /><area style='cursor:pointer' shape='poly' coords='135,150,144,154,144,165,135,169,126,165,126,154' onclick='clickColor("#FF6600",-50,126)' onmouseover='mouseOverColor("#FF6600")' alt='#FF6600' /><area style='cursor:pointer' shape='poly' coords='153,150,162,154,162,165,153,169,144,165,144,154' onclick='clickColor("#FF5050",-50,144)' onmouseover='mouseOverColor("#FF5050")' alt='#FF5050' /><area style='cursor:pointer' shape='poly' coords='171,150,180,154,180,165,171,169,162,165,162,154' onclick='clickColor("#CC0066",-50,162)' onmouseover='mouseOverColor("#CC0066")' alt='#CC0066' /><area style='cursor:pointer' shape='poly' coords='189,150,198,154,198,165,189,169,180,165,180,154' onclick='clickColor("#660033",-50,180)' onmouseover='mouseOverColor("#660033")' alt='#660033' /><area style='cursor:pointer' shape='poly' coords='54,165,63,169,63,180,54,184,45,180,45,169' onclick='clickColor("#996633",-35,45)' onmouseover='mouseOverColor("#996633")' alt='#996633' /><area style='cursor:pointer' shape='poly' coords='72,165,81,169,81,180,72,184,63,180,63,169' onclick='clickColor("#CC9900",-35,63)' onmouseover='mouseOverColor("#CC9900")' alt='#CC9900' /><area style='cursor:pointer' shape='poly' coords='90,165,99,169,99,180,90,184,81,180,81,169' onclick='clickColor("#FF9900",-35,81)' onmouseover='mouseOverColor("#FF9900")' alt='#FF9900' /><area style='cursor:pointer' shape='poly' coords='108,165,117,169,117,180,108,184,99,180,99,169' onclick='clickColor("#CC6600",-35,99)' onmouseover='mouseOverColor("#CC6600")' alt='#CC6600' /><area style='cursor:pointer' shape='poly' coords='126,165,135,169,135,180,126,184,117,180,117,169' onclick='clickColor("#FF3300",-35,117)' onmouseover='mouseOverColor("#FF3300")' alt='#FF3300' /><area style='cursor:pointer' shape='poly' coords='144,165,153,169,153,180,144,184,135,180,135,169' onclick='clickColor("#FF0000",-35,135)' onmouseover='mouseOverColor("#FF0000")' alt='#FF0000' /><area style='cursor:pointer' shape='poly' coords='162,165,171,169,171,180,162,184,153,180,153,169' onclick='clickColor("#CC0000",-35,153)' onmouseover='mouseOverColor("#CC0000")' alt='#CC0000' /><area style='cursor:pointer' shape='poly' coords='180,165,189,169,189,180,180,184,171,180,171,169' onclick='clickColor("#990033",-35,171)' onmouseover='mouseOverColor("#990033")' alt='#990033' /><area style='cursor:pointer' shape='poly' coords='63,180,72,184,72,195,63,199,54,195,54,184' onclick='clickColor("#663300",-20,54)' onmouseover='mouseOverColor("#663300")' alt='#663300' /><area style='cursor:pointer' shape='poly' coords='81,180,90,184,90,195,81,199,72,195,72,184' onclick='clickColor("#996600",-20,72)' onmouseover='mouseOverColor("#996600")' alt='#996600' /><area style='cursor:pointer' shape='poly' coords='99,180,108,184,108,195,99,199,90,195,90,184' onclick='clickColor("#CC3300",-20,90)' onmouseover='mouseOverColor("#CC3300")' alt='#CC3300' /><area style='cursor:pointer' shape='poly' coords='117,180,126,184,126,195,117,199,108,195,108,184' onclick='clickColor("#993300",-20,108)' onmouseover='mouseOverColor("#993300")' alt='#993300' /><area style='cursor:pointer' shape='poly' coords='135,180,144,184,144,195,135,199,126,195,126,184' onclick='clickColor("#990000",-20,126)' onmouseover='mouseOverColor("#990000")' alt='#990000' /><area style='cursor:pointer' shape='poly' coords='153,180,162,184,162,195,153,199,144,195,144,184' onclick='clickColor("#800000",-20,144)' onmouseover='mouseOverColor("#800000")' alt='#800000' /><area style='cursor:pointer' shape='poly' coords='171,180,180,184,180,195,171,199,162,195,162,184' onclick='clickColor("#993333",-20,162)' onmouseover='mouseOverColor("#993333")' alt='#993333' /></map>
                <script>
                    var thistop = "-35";
                    var thisleft = "135";
                </script>
                <div id='selectedhexagon' style='visibility:hidden;position:relative;width:21px;height:21px;background-image:url("../images/img_selectedcolor.gif")'></div>
                <div id='divpreview'>&nbsp;</div>
                <h3>Или введите цвет:</h3>
                <div id="entercolorDIV">
                    <input type="text" id="entercolor" placeholder="Color value" onkeydown="submitOnEnter(event)" onfocus="clearWrongInput();" style="z-index:0;"><button class="btn btn-default" type="button" onclick="clickColor(0,-1,-1)" style="z-index:0;">OK</button>
                </div>
                <div id="wronginputDIV">Неправильное введение</div>
                <br>
                <div id="html5DIV">
                    <h3>Или используйте HTML5:</h3>
                    <input type="color" id="html5colorpicker" onchange="clickColor(0, -1, -1, 5)" value="#ff0000" style="width:85%;">
                </div>
                <br>
                <br>
            </div>
        </div>

        <div class="w3-col colorthird2" style="text-align:center;">
            <h3>Выбранный цвет:</h3>
            <div id="selectedcolor" class="w3-large">
                <br><br>
                <span class="w3-text-black">Черный текст</span><br><br>
                <span class="w3-text-black" style="text-shadow:1px 1px 0 #444">Тень</span><br><br>
                <span class="w3-text-white">Белый текст</span><br><br>
                <span class="w3-text-white" style="text-shadow:1px 1px 0 #444">Тень</span>
            </div>
            <div id="colornamDIV" class="w3-margin-top"></div>
            <div><b><span id="colorhexDIV"></span></b></div>
            <div id="colorrgbDIV"></div>
            <div id="colorhslDIV"></div>
        </div>

        <div class="w3-col colorthird3">
            <!--<div id="huetopcontainer"></div>-->
            <div id="lumtopcontainer"></div>
        </div>
    </div>

    <hr>
    <div id="huecontainer"></div>
    <hr>

    <div id="hslsatcontainer"></div>
    <hr>
    <div id="hsllumcontainer"></div>
    <hr>
    <h2>RGB (Red, Green, Blue)</h2>
    <table class="w3-table w3-border" style="width:100%">
        <tr>
            <th>Red</th>
            <th>Green</th>
            <th>Blue</th>
        </tr>
        <tr>
            <td id="valRed"></td>
            <td id="valGreen"></td>
            <td id="valBlue"></td>
        </tr>
        <tr>
            <td id="red" style="height:50px;background-color:red"></td>
            <td id="green" style="background-color:green"></td>
            <td id="blue" style="background-color:blue"></td>
        </tr>
        <tr>
            <td>
                <input oninput="changeRed(this.value)" onchange="changeRed(this.value)" type="range" id="slideRed" name="slideRed" min="0" max="255">
            </td>
            <td>
                <input oninput="changeGreen(this.value)" onchange="changeGreen(this.value)" type="range" id="slideGreen" name="slideGreen" min="0" max="255">
            </td>
            <td>
                <input oninput="changeBlue(this.value)" onchange="changeBlue(this.value)" type="range" id="slideBlue" name="slideBlue" min="0" max="255">
            </td>
        </tr>
    </table>
    <div id="change" style="height:50px"></div>
    <div id="fixed" style="height:50px"></div>
    <div class="w3-center" style="font-family:Consolas, 'Courier New', Courier, monospace">
        <span id="changetxt"></span><br>
        <span id="changetxthex"></span>
    </div>
    <hr>
    <p>Уроки по использованию цветов на веб-страницах смотрите на нашем сайте <?php include '../include/w3schools.php'; ?> в разделах
        <a href="../html/html_colors.php">HTML Цвета</a> и <a href="../css/css_colors.php">CSS Цвета</a>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_shades.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_converter.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>