<?php include '../include/head.php'; ?>

<title>Canvas Интро. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Canvas Интро. Что такое графика Canvas? Применение на веб-страницах. <?php include '../include/description.php'; ?>'>
<link rel="stylesheet" href="../styles/browserref.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_graphics.php'; ?>
<?php include '../include/before_content_graphics.php'; ?>

<article>
    <h1>HTML Canvas <span class="color_h1">Учебник</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="svg_reference.asp">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="canvas_drawing.asp">Next &#10095;</a>
    </div>
    <hr>

    <canvas id="myCanvas" style="width:50%;border:1px solid #c3c3c3;margin-top:15px;">
        Ваш браузер не поддерживает элемент &lt;canvas&gt;.
    </canvas>
    <p class="intro">HTML элемент <code class="w3-codespan">&lt;canvas&gt;</code> используется для рисования графики на веб-странице.</p>
    <p class="intro">Изображение выше создано с помощью элемента <code class="w3-codespan">&lt;canvas&gt;</code>.</p>
    <p class="intro">Он показывает четыре элемента: красный прямоугольник, прямоугольник с градиентом, многоцветный прямоугольник и многоцветный текст.</p>

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

    <h2>Что такое HTML Canvas?</h2>
    <p>HTML элемент <code class="w3-codespan">&lt;canvas&gt;</code> используется для рисования графики «на лету» с помощью скриптов (обычно JavaScript).</p>
    <p>Элемент <code class="w3-codespan">&lt;canvas&gt;</code> - это всего лишь контейнер для графики. Необходимо использовать скрипт для рисования графики.</p>
    <p>Canvas имеет несколько методов рисования контуров, прямоугольников, кругов, текста и добавления изображений.</p>
    <hr>

    <h2>Поддержка браузерами</h2>
    <p>Числа в таблице указывают первую версию браузера, полностью поддерживающую элемент <code class="w3-codespan">&lt;canvas&gt;</code>.</p>
    <table class="browserref notranslate">
        <tr>
            <th style="width:20%;font-size:16px;text-align:left;">Элемент</th>
            <th style="width:16%;" class="bsChrome" title="Chrome"></th>
            <th style="width:16%;" class="bsEdge" title="Internet Explorer / Edge"></th>
            <th style="width:16%;" class="bsFirefox" title="Firefox"></th>
            <th style="width:16%;" class="bsSafari" title="Safari"></th>
            <th style="width:16%;" class="bsOpera" title="Opera"></th>
        </tr>
        <tr>
            <td style="text-align:left;">&lt;canvas&gt;</td>
            <td>4.0</td>
            <td>9.0</td>
            <td>2.0</td>
            <td>3.1</td>
            <td>9.0</td>
        </tr>
    </table>

    <hr>
    <h2>HTML Canvas может рисовать текст</h2>
    <p>Canvas может рисовать красочный текст с анимацией или без неё.</p>
    <hr>

    <h2>HTML Canvas может рисовать графику</h2>
    <p>Canvas имеет отличные возможности для графического представления данных с изображениями графиков и диаграмм.</p>
    <hr>

    <h2>HTML Canvas можно анимировать</h2>
    <p>Canvas объекты могут двигаться. Возможно всё: от простых прыгающих мячей до сложных анимаций.</p>
    <hr>

    <h2>HTML Canvas может быть интерактивным</h2>
    <p>Canvas может реагировать на события JavaScript.</p>
    <p>Canvas может реагировать на любое действие пользователя (щелчки клавиш, клики мыши, нажатия кнопок, движение пальца).</p>
    <hr>

    <h2>HTML Canvas можно использовать в играх</h2>
    <p>Методы Canvas для анимации предлагают множество возможностей для игровых HTML-приложений.</p>
    <hr>

    <h2>Canvas Пример</h2>
    <p>В HTML элемент <code class="w3-codespan">&lt;canvas&gt;</code> выглядит так:</p>
    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;canvas id="myCanvas&quot; width="200" height="100"&gt;&lt;/canvas&gt;</div>
    </div>
    <p>Элемент <code class="w3-codespan">&lt;canvas&gt;</code> должен иметь атрибут id, чтобы на него можно было ссылаться с помощью JavaScript.</p>
    <p>Атрибуты width и height (ширина и высота) необходимы для определения размера холста (области canvas).</p>
    <p><b>Примечание:</b> Возможно использовать несколько элементов <code class="w3-codespan">&lt;canvas&gt;</code> на HTML странице.</p>

    <div class="w3-panel w3-note">
        <p>По умолчанию элемент <code class="w3-codespan">&lt;canvas&gt;</code> не имеет границы и содержимого.</p>
    </div>

    <p>Чтобы добавить границу, используйте атрибут <code class="w3-codespan">style</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;canvas id="myCanvas&quot; width="200" height="100"
            style=&quot;border:1px solid #000;&quot;&gt;&lt;/canvas&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../graphicstryit/trycanvas_empty.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>В следующих главах учебника на нашем сайте <?php include '../include/w3schools.php'; ?> показано, как рисовать с помощью элемента <strong>canvas</strong>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="svg_reference.asp">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="canvas_drawing.asp">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>