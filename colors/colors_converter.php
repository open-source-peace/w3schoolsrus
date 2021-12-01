<?php include '../include/head.php'; ?>
<title>HTML Конвертер цветов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Конвертер цветов. Как выбрать цвета для веб-сайта? <?php include '../include/description.php'; ?>'>
<script src="../lib/w3color.js"></script>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_colors.php'; ?>
<?php include '../include/before_content_colors.php'; ?>

<article>
    <h1><span class="color_h1">Конвертер цветов</span></h1>

    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_picker.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_rgb.php">Next &#10095;</a>
    </div>
    <br>
    <div class="w3-container w3-padding-large" style="background-color:#f1f1f1;border:1px solid #d3d3d3;">
        <div class="w3-row">
            <div class="w3-col l6">
                <h2>Введите цвет:</h2>
                <label><span class="w3-text-grey"><i>назва, hex, rgb, hsl, hwb, cmyk, ncol:</i></span></label>
                <input id="color01" type="text" value="rgb(0, 191, 255)" class="w3-input w3-border" oninput="convertColor()" onchange="validateColor()" onkeydown="submitOnEnter(event)">
                <br>
                <div class="resultStrings">
                    <div id="error01"></div>
                    <table id="resultTable">
                        <tr><td id="helpname01"></td><td id="name01"></td></tr>
                        <tr><td id="helprgb01"></td><td id="rgb01"></td></tr>
                        <tr><td id="helphex01"></td><td id="hex01"></td></tr>
                        <tr><td id="helphsl01"></td><td id="hsl01"></td></tr>
                        <tr><td id="helphwb01"></td><td id="hwb01"></td></tr>
                        <tr><td id="helpcmyk01"></td><td id="cmyk01"></td></tr>
                        <tr><td id="helpncol01"></td><td id="ncol01"></td></tr>
                        <!--<tr><td id="helpasterix" colspan="2">*Не веб-стандарт.</td></tr>-->
                    </table>
                </div>
            </div>
            <div class="w3-col l6" style="padding:40px 40px 10px 40px;">
                <div id="behindresult01">
                    <div style="height:294px" id="result01">&nbsp;</div>
                </div>
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col">
                <div id="linktocp"></div>
            </div>
        </div>
    </div>
    <hr>
    <h2>W3Color JavaScript библиотека</h2>
    <p>JavaScript библиотеку цветов, которая используется в конвертере цветов, можно скачать по ссылке:</p>
    <p><strong><a target="_blank" href="https://www.w3schools.com/lib/w3color.js" rel="nofollow">https://www.w3schools.com/lib/w3color.js</a></strong></p>
    <p>Или с нашего сайта <?php include '../include/w3schools.php'; ?> по ссылке: <a href="../lib/w3color.js" target="_blank">https://w3schoolsrus.github.io/lib/w3color.js</a></p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_picker.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_rgb.php">Next &#10095;</a>
    </div>
    <script>
        function convertColor() {
            color = document.getElementById("color01").value;
            if (color == "") {
                validateColor();
                return;
            }
            color = color.toLowerCase();
            //document.getElementsByTagName("h1")[0].style.color = w3color(color).toRgbString();
            c = w3color(color);
            if (c.valid) {
                document.getElementById("resultTable").style.display = "table";
                document.getElementById("error01").innerHTML = "";
                document.getElementById("result01").style.backgroundColor = c.toRgbaString();
                if (c.toName() == "") {
                    document.getElementById("name01").style.fontStyle = "italic";
                    document.getElementById("name01").style.color = "#757575";
                    document.getElementById("name01").innerHTML = "no name";
                } else {
                    document.getElementById("name01").style.fontStyle = "normal";
                    document.getElementById("name01").style.color = "#000000";
                    document.getElementById("name01").innerHTML = c.toName();
                }
                document.getElementById("helpname01").innerHTML = "Name";
                document.getElementById("hex01").innerHTML = c.toHexString();
                document.getElementById("helphex01").innerHTML = "<a href='colors_hexadecimal.php?color=" + c.toHexString().substr(1) + "'>Hex</a>";
                document.getElementById("cmyk01").innerHTML = c.toCmykString();
                document.getElementById("helpcmyk01").innerHTML = "<a href='colors_cmyk.php?color=" + c.toCmykStringDecimal() + "'>Cmyk</a>";
                document.getElementById("helpncol01").innerHTML = "<a href='colors_ncol.php?color=" + c.toNcolStringDecimal() + "'>Ncol</a>";
                if ((color.indexOf("rgba") > -1 || color.indexOf("hsla") > -1 || color.indexOf("hwba") > -1 || color.indexOf("ncola")) > -1
                    || (color.indexOf("cmyk") == -1 && color.split(",").length == 4)
                    || (color.indexOf("cmyk") > -1 && color.split(",").length == 5)) {
                    document.getElementById("rgb01").innerHTML = c.toRgbaString();
                    document.getElementById("hsl01").innerHTML = c.toHslaString();
                    document.getElementById("hwb01").innerHTML = c.toHwbaString();
                    document.getElementById("ncol01").innerHTML = c.toNcolaString();
                    document.getElementById("helprgb01").innerHTML = "Rgba";
                    document.getElementById("helphsl01").innerHTML = "Hsla";
                    document.getElementById("helphwb01").innerHTML = "Hwba";
                } else {
                    document.getElementById("rgb01").innerHTML = c.toRgbString();
                    document.getElementById("hsl01").innerHTML = c.toHslString();
                    document.getElementById("hwb01").innerHTML = c.toHwbString();
                    document.getElementById("ncol01").innerHTML = c.toNcolString();
                    document.getElementById("helprgb01").innerHTML = "<a href='colors_rgb.php?color=" + c.toRgbString() + "'>Rgb</a>";
                    document.getElementById("helphsl01").innerHTML = "<a href='colors_hsl.php?color=" + c.toHslStringDecimal() + "'>Hsl</a>";
                    document.getElementById("helphwb01").innerHTML = "<a href='colors_hwb.php?color=" + c.toHwbStringDecimal() + "'>Hwb</a>";
                }
                document.getElementById("linktocp").innerHTML = "<hr style='border-color:#dfdfdf'><p><a href='colors_picker.php?color=" + c.toHexString().substr(1) + "'>Используйте этот цвет в нашей Палитре цветов</a></p>";
            } else {
                validateColor();
            }
        }
        function validateColor() {
            var color, c, x, i, l;
            color = document.getElementById("color01").value;
            c = w3color(color);
            if (color == "" || !c.valid) {
                document.getElementById("result01").style.backgroundColor = "#f1f1f1";
                document.getElementById("resultTable").style.display = "none";
                document.getElementById("error01").innerHTML = "Неправильное значение цвета";
                document.getElementById("hex01").innerHTML = "";
                document.getElementById("rgb01").innerHTML = "";
                document.getElementById("hsl01").innerHTML = "";
                document.getElementById("hwb01").innerHTML = "";
                document.getElementById("ncol01").innerHTML = "";
                document.getElementById("helpname01").innerHTML = "";
                document.getElementById("helphex01").innerHTML = "";
                document.getElementById("helprgb01").innerHTML = "";
                document.getElementById("helphsl01").innerHTML = "";
                document.getElementById("helphwb01").innerHTML = "";
                document.getElementById("helpncol01").innerHTML = "";
            } else {
                document.getElementById("resultTable").style.display = "table";
                document.getElementById("error01").innerHTML = "";

                convertColor();
            }
        }
        function submitOnEnter(e) {
            keyboardKey = e.which || e.keyCode;
            if (keyboardKey == 13) {
                validateColor();
            }
        }
        convertColor();
    </script>
    <hr>
    <p>Уроки по использованию цветов на веб-страницах смотрите на нашем сайте в разделах
        <a href="../html/html_colors.php">HTML Цвета</a> и <a href="../css/css_colors.php">CSS Цвета</a>.</p>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>