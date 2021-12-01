<?php include '../include/head.php'; ?>

<title>CSS Справочник. Конвертер единиц. <?php include '../include/title.php'; ?></title>
<meta name='description' content="CSS Конвертер единиц измерения. Как преобразовать (конвертировать) пиксели в em? <?php include '../include/description.php'; ?>">
    <link rel="stylesheet" href="../styles/w3-fix.css">
    <style>
        table.notranslate tr:hover td{
            background-color:#555;
            color:white;
        }
        .conv {
            border:1px solid #999999;
            padding: 10px 16px;
            font-size: 18px;
            vertical-align: middle;
            line-height: 1.33;
        }

        .conv2 {
            font-size: 25px;
            background-color:#F1F1F1;
            line-height: 1.33;
            border:none;
            margin-left:15px;
        }
        .conv:hover {
            border-color:black;
        }
        .btn-lg {
            border-radius:0;
            margin-top:25px;
            display:block;
            padding: 11px 25px 11px 25px;
        }
        .pxem {
            float:left;
            margin-top:25px;
        }
        .empx {
            float:right;
            margin-top:25px;
        }
        @media screen and (max-width: 600px){
            .conv, .empx, .pxem {
                float:left;
                width: 100%;
            }
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_cssref.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>PX в EM <span class="color_h1">Преобразование (конвертирование)</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_units.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_colors.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Конвертер PX в EM</h2>
    <ul>
        <li>Установить размер шрифта по умолчанию (обычно 16 пикселей)</li>
        <li>Затем преобразуйте значение пикселя в em на основе размера по умолчанию</li>
        <li>Или конвертируйте значение em в пиксели на основе размера по умолчанию</li>
    </ul>
    <div class="jumbotron" style="padding:50px;margin-top:17px;background-color:#F1F1F1;">
        <p>Установить размер шрифта по умолчанию:</p>
        <input class="conv" type="text" id="pix1" size="8" value="16"> <span style="font-size:23px">px</span>
        <br><br>

        <p class="pxem">Конвертировать PX в EM:<br>
            <input onfocus="wrong()" onblur="works()" class="conv" type="text" size="8" id="myInput" value=""> <span style="font-size:23px">px</span>
        </p>
        <p class="empx">Конвертировать EM в PX:<br>
            <input onfocus="wrong2()" onblur="works2()" class="conv" type="text" size="8" id="myInput2" value=""> <span style="font-size:23px">em</span>
        </p>
        <p class="clearfix"></p>
        <button class="btn btn-lg w3-green" onclick="myFunction()"><span style="top:4px;" class="glyphicon glyphicon-transfer"> </span> Конвертировать</button>
        <hr>
        <p>Результат: <span style="font-size:24px" id="result1"></span></p>
        <br>
    </div>
    <hr>

    <h2>Размер шрифта Body</h2>
    <p>В приведенной ниже таблице выберите размер основного шрифта в пикселях (px), чтобы отобразить полную таблицу преобразования &quot;px в em и их процент&quot;.</p>
    <p><strong>Совет:</strong> Размер шрифта по умолчанию обычно составляет 16 пикселей.</p>
    <div id="demo"></div>

    <div class="w3-panel w3-note">
        <p><strong>В чем разница между PX, EM и процентами?</strong></p><p>PX (пиксель) - это статическая единица измерения, а процент и EM - относительные единицы измерения. Процент зависит от размера родительского шрифта. EM относится к текущему размеру шрифта элемента (2em означает в 2 раза больше размера текущего шрифта). Таким образом, если размер шрифта body составляет 16 пикселей, то 150% будет 24 пикселя (1,5*16), а 2em будет 32 пикселя (16*2). Посмотрите <a href="css_units.php">CSS единицы измерения</a>, чтобы узнать больше про единицы измерения в CSS.</p>
    </div>

    <script>
        function fillTable(x) {
            var t = "";
            t = t + "<table style='cursor:pointer;' class='w3-table-all notranslate'>"
            t = t + "<tr>"
            t = t + "<th style='cursor:auto;width:33%;font-weight:bold;'>px</th>"
            t = t + "<th style='cursor:auto;width:33%;font-weight:bold;'>em</th>"
            t = t + "<th style='cursor:auto;width:33%;font-weight:bold;'>процент</th>"
            t = t + "</tr>"
            for (i = 5; i < 26; i++) {
                t = t + "<tr onclick='fillTable(" + i + ")')'"
                if (i == x) {

                    t = t + " style='background-color:#555;color:white;' "
                }

                t = t + "><td>" + i + "px</td>"
                t = t + "<td>" + (i/x).toFixed(4) + "em</td>"
                t = t + "<td>" + ((i/x) * 100).toFixed(2) + "%</td>"
                t = t + "</tr>"
            }
            t = t + "</table>";
            document.getElementById("demo").innerHTML = t;
        }

        fillTable(16);

        function wrong() {
            document.getElementById("myInput2").disabled = true;
            document.getElementById("myInput2").value = "";
        }

        function wrong2() {
            document.getElementById("myInput").disabled = true;
            document.getElementById("myInput").value = "";
        }

        function works() {
            document.getElementById("myInput2").disabled = false;
            document.getElementById("myInput2").value = "";
        }


        function works2() {
            document.getElementById("myInput").disabled = false;
            document.getElementById("myInput").value = "";
        }


        function myFunction() {
            var x = document.getElementById("myInput").value;
            var z = document.getElementById("myInput2").value;
            var y = document.getElementById("pix1").value;
            var res = document.getElementById("result1");


            if (x) {
                res.innerHTML = x/y + "em";
            } else {
                res.innerHTML = z*y + "px";
            }

            if (isNaN (x) || isNaN (z) || isNaN (y)) {
                res.innerHTML = "Wrong input! Use numbers";
                res.style.color = "red";
            } else {
                res.style.color = "black";
            }
        }
    </script>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_units.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_colors.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>