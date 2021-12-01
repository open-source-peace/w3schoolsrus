<?php include '../include/head.php'; ?>

<title>HTML Графика. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Графика. Применение на веб-страницах. Google карты. Элементы SVG и Canvas. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_graphics.php'; ?>
<?php include '../include/before_content_graphics.php'; ?>

<article>
    <h1>HTML Графика</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="../index.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="google_maps_intro.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>Google карты</h2>
    <p>Элемент <a href="google_maps_intro.php">Google карты</a> позволяет вставлять карты в HTML.</p>
    <!--
    <div class="w3-card-4" id="googleMap" style="width:100%;height:400px;"></div>
    <script>
    function myMap()
    {
      var mapProp= {
        center:new google.maps.LatLng(51.508742,-0.120850),
        zoom:5,
      };
      var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
    -->
    <hr>

    <h2>SVG</h2>
    <p><a href="svg_intro.php">HTML элемент <code class="w3-codespan">&lt;svg&gt;</code></a> позволяет использовать векторную графику в HTML:</p>
    <div class="w3-row-padding" style="margin:16px -16px">
        <div class="w3-third w3-container">
            <div class="w3-card-4">
                <svg style="width:100%;height:200px">
                    <circle cx="100" cy="100" r="80" stroke="green" stroke-width="4" fill="yellow" />
                </svg>
            </div>
        </div>
        <div class="w3-third w3-container">
            <div class="w3-card-4">
                <svg style="width:100%;height:200px">
                    <rect x="30" y="20" rx="20" ry="20" width="150" height="150"
                          style="fill:red;stroke:black;stroke-width:5;opacity:0.5" />
                </svg>
            </div>
        </div>
        <div class="w3-third w3-container">
            <div class="w3-card-4">
                <svg style="width:100%;height:200px">
                    <polygon points="100,10 40,198 190,78 10,78 160,198"
                             style="fill:lime;stroke:purple;stroke-width:5;fill-rule:evenodd;" />
                </svg>
            </div>
        </div>
    </div>
    <hr>

    <h2>HTML Canvas</h2>
    <p><a href="canvas_intro.php">HTML элемент <code class="w3-codespan">&lt;canvas&gt;</code></a> может использоваться для рисования графики на веб-странице:</p>
    <div class="w3-panel w3-card-4">
        <p class="intro">Рисунок ниже создан с помощью <code class="w3-codespan">&lt;canvas&gt;</code>:</p>
        <canvas id="myCanvas" style="width:50%;border:1px solid #c3c3c3">
            Ваш браузер не поддерживает элемент &lt;canvas&gt;.
        </canvas>
        <p class="intro">Он показывает четыре элемента: красный прямоугольник, градиентный прямоугольник, многоцветный прямоугольник и многоцветный текст.</p>
    </div>

    <script>
        var c=document.getElementById("myCanvas");
        var canvOK=1;
        try {c.getContext("2d");}
        catch (er) {canvOK=0;}
        if (canvOK==1)
        {
            var ctx=c.getContext("2d");
            ctx.fillStyle="#FF0000";
            ctx.fillRect(20,20,100,50);

            var grd=ctx.createLinearGradient(140,20,240,70);
            grd.addColorStop(0,"black");
            grd.addColorStop(1,"white");
            ctx.fillStyle=grd;
            ctx.fillRect(140,20,100,50);

            var grd2=ctx.createLinearGradient(20,90,120,90);
            grd2.addColorStop(0,"black");
            grd2.addColorStop("0.3","magenta");
            grd2.addColorStop("0.5","blue");
            grd2.addColorStop("0.6","green");
            grd2.addColorStop("0.8","yellow");
            grd2.addColorStop(1,"red");
            ctx.fillStyle=grd2;
            ctx.fillRect(20,90,100,50);

            ctx.font="30px Verdana";
            var grd3=ctx.createLinearGradient(140,20,240,90);
            grd3.addColorStop(0,"black");
            grd3.addColorStop("0.3","magenta");
            grd3.addColorStop("0.6","blue");
            grd3.addColorStop("0.8","green");
            grd3.addColorStop(1,"red");
            ctx.strokeStyle=grd3;
            ctx.strokeText("Smile!",140,120); }
    </script>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="../index.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="google_maps_intro.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>