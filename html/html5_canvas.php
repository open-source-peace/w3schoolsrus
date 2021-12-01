<?php include '../include/head.php'; ?>

  <title>HTML5 Canvas. Графика на сайте. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML5 Canvas. Графика на сайте. Как добавить элементы canvas на веб-странице? Рисование с помощью canvas. <?php include '../include/description.php'; ?>'>
  <link rel='stylesheet' href='../styles/browserref.css'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML5 <span class='color_h1'>Canvas</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html5_migration.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_svg.php'>Next &#10095;</a>
    </div>
    <hr>

    <div>
      <canvas id='myCanvas' width='270' height='160' style='border:1px solid #c3c3c3;float:left;margin-right:20px;margin-bottom:15px'>
        Ваш браузер не поддерживает элемент &lt;canvas&gt;.
      </canvas>
      <p>HTML элемент <code class='w3-codespan'>&lt;canvas&gt;</code> используется для рисования графики на веб-странице.</p>
      <p>Графический объект слева создается с помощью элемента <code class='w3-codespan'>&lt;canvas&gt;</code>. Он показывает четыре элемента: красный прямоугольник, градиентный прямоугольник, многоцветный прямоугольник и многоцветный текст.</p>
    </div>
    <div style='clear:both;'></div>
    <script>
        var c=document.getElementById('myCanvas');
        var canvOK=1;
        try {c.getContext('2d');}
        catch (er) {canvOK=0;}
        if (canvOK==1)
        {
            var ctx=c.getContext('2d');
            ctx.fillStyle='#FF0000';
            ctx.fillRect(20,20,100,50);

            var grd=ctx.createLinearGradient(140,20,240,70);
            grd.addColorStop(0,'black');
            grd.addColorStop(1,'white');
            ctx.fillStyle=grd;
            ctx.fillRect(140,20,100,50);

            var grd2=ctx.createLinearGradient(20,90,120,90);
            grd2.addColorStop(0,'black');
            grd2.addColorStop('0.3','magenta');
            grd2.addColorStop('0.5','blue');
            grd2.addColorStop('0.6','green');
            grd2.addColorStop('0.8','yellow');
            grd2.addColorStop(1,'red');
            ctx.fillStyle=grd2;
            ctx.fillRect(20,90,100,50);

            ctx.font='30px Verdana';
            var grd3=ctx.createLinearGradient(140,20,240,90);
            grd3.addColorStop(0,'black');
            grd3.addColorStop('0.3','magenta');
            grd3.addColorStop('0.6','blue');
            grd3.addColorStop('0.8','green');
            grd3.addColorStop(1,'red');
            ctx.strokeStyle=grd3;
            ctx.strokeText('Smile!',140,120); }
    </script>
    <hr>

    <h2>Что такое HTML Canvas?</h2>
    <p>HTML элемент <code class='w3-codespan'>&lt;canvas&gt;</code> (<i>с анг. canvas - холст</i>) используется для рисования графики на лету с помощью JavaScript.</p>
    <p>Элемент <code class='w3-codespan'>&lt;canvas&gt;</code> является лишь контейнером для графики. На самом деле необходимо использовать JavaScript, чтобы нарисовать графику.</p>
    <p><strong>Canvas</strong> имеет несколько методов для рисования дорожек, полей, кругов, текста и добавления изображения.</p>
    <hr>
    <h2>Поддержка браузерами</h2>
    <p>Цифры в таблице определяют первую версию браузера, которая полностью поддерживает элемент <code class='w3-codespan'>&lt;canvas&gt;</code>.</p>
    <table class='browserref notranslate'>
      <tr>
        <th style='width:20%;font-size:16px;text-align:left;'>Элемент</th>
        <th style='width:16%;' class='bsChrome' title='Chrome'></th>
        <th style='width:16%;' class='bsEdge' title='Internet Explorer / Edge'></th>
        <th style='width:16%;' class='bsFirefox' title='Firefox'></th>
        <th style='width:16%;' class='bsSafari' title='Safari'></th>
        <th style='width:16%;' class='bsOpera' title='Opera'></th>
      </tr>
      <tr>
        <td style='text-align:left;'>&lt;canvas&gt;</td>
        <td>4.0</td>
        <td>9.0</td>
        <td>2.0</td>
        <td>3.1</td>
        <td>9.0</td>
      </tr>
    </table>
    <hr>

    <h2>Canvas Примеры</h2>
    <p><strong>Canvas</strong> (холст) - это прямоугольная область на HTML странице. По умолчанию холст не имеет границы и содержания.</p>
    <p>Разметка выглядит так:</p>
    <div class='w3-code w3-border notranslate htmlHigh'><div>
        &lt;canvas id='myCanvas&quot; width='200' height='100'&gt;&lt;/canvas&gt;
      </div></div>

    <p><b>Примечание:</b> Всегда указывайте атрибут <code class='w3-codespan'>id</code> (на который ссылается скрипт), атрибуты <code class='w3-codespan'>width</code> (ширина) и <code class='w3-codespan'>height</code> (высота) для определения размера холста. Чтобы добавить границу, воспользуйтесь атрибутом <code class='w3-codespan'>style</code>.</p>
    <p>Вот пример основного, пустого холста:</p>

    <canvas id='myCanvas' width='200' height='100' style='border:1px solid #000000;'>
      Ваш веб-браузер не поддерживает элемент canvas.
    </canvas>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;canvas id='myCanvas&quot; width='200' height='100'
        style=&quot;border:1px solid
        #000000;&quot;&gt;<br>
        &lt;/canvas&gt;
      </div>
      <a target='_blank' href='../htmltryit/tryitc5c9.html?filename=tryhtml5_canvas_empty' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h3>Нарисовать линию</h3>
    <canvas id='myCanvas2' width='200' height='100' style='border:1px solid #d3d3d3;'>
      Ваш веб-браузер не поддерживает элемент canvas.
    </canvas>
    <script>
        var c=document.getElementById('myCanvas2');
        var canvOK=1;
        try {c.getContext('2d');}
        catch (er) {canvOK=0;}
        if (canvOK==1)
        {
            var ctx=c.getContext('2d');
            ctx.moveTo(0,0);
            ctx.lineTo(200,100);
            ctx.stroke();
        }
    </script>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        var c = document.getElementById(&quot;myCanvas&quot;);<br>var ctx = c.getContext(&quot;2d&quot;);<br>
        ctx.moveTo(0, 0);<br>ctx.lineTo(200, 100);<br>
        ctx.stroke();</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitdeac.html?filename=tryhtml5_canvas_tut_path' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h3>Нарисовать круг</h3>
    <canvas id='myCanvas3' width='200' height='100' style='border:1px solid #d3d3d3;'>
      Ваш веб-браузер не поддерживает элемент canvas.
    </canvas>
    <script>
        var c=document.getElementById('myCanvas3');
        var canvOK=1;
        try {c.getContext('2d');}
        catch (er) {canvOK=0;}
        if (canvOK==1)
        {
            var ctx=c.getContext('2d');
            ctx.beginPath();
            ctx.arc(95,50,40,0,2*Math.PI);
            ctx.stroke();
        }
    </script>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        var c = document.getElementById(&quot;myCanvas&quot;);<br>var ctx = c.getContext(&quot;2d&quot;);<br>
        ctx.beginPath();<br>ctx.arc(95, 50, 40, 0, 2 * Math.PI);<br>ctx.stroke();</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitabb9.html?filename=tryhtml5_canvas_tut_path2' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h3>Нарисовать текст</h3>
    <canvas id='myCanvas4' width='200' height='100' style='border:1px solid #d3d3d3;'>
      Ваш веб-браузер не поддерживает элемент canvas.
    </canvas>
    <script>
        var c=document.getElementById('myCanvas4');
        var canvOK=1;
        try {c.getContext('2d');}
        catch (er) {canvOK=0;}
        if (canvOK==1)
        {
            var ctx=c.getContext('2d');
            ctx.font='30px Arial';
            ctx.fillText('Hello World',10,50);
        }
    </script>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        var c = document.getElementById(&quot;myCanvas&quot;);<br>var ctx = c.getContext(&quot;2d&quot;);<br>
        ctx.font = &quot;30px Arial&quot;;<br>ctx.fillText(&quot;Hello World&quot;, 10, 50);</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit99c3.html?filename=tryhtml5_canvas_tut_text' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h3>Обведенный текст</h3>
    <canvas id='myCanvas5' width='200' height='100' style='border:1px solid #d3d3d3;'>
      Ваш веб-браузер не поддерживает элемент canvas.
    </canvas>
    <script>
        var c=document.getElementById('myCanvas5');
        var canvOK=1;
        try {c.getContext('2d');}
        catch (er) {canvOK=0;}
        if (canvOK==1)
        {
            var ctx=c.getContext('2d');
            ctx.font='30px Arial';
            ctx.strokeText('Hello World',10,50);
        }
    </script>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        var c = document.getElementById(&quot;myCanvas&quot;);<br>var ctx = c.getContext(&quot;2d&quot;);<br>
        ctx.font = &quot;30px Arial&quot;;<br>ctx.strokeText(&quot;Hello World&quot;, 10, 50);</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitdf3c.html?filename=tryhtml5_canvas_tut_text2' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h3>Нарисовать линейный градиент</h3>
    <canvas id='myCanvas6' width='200' height='100' style='border:1px solid #d3d3d3;'>
      Ваш веб-браузер не поддерживает элемент canvas.
    </canvas>
    <script>
        var c=document.getElementById('myCanvas6');
        var canvOK=1;
        try {c.getContext('2d');}
        catch (er) {canvOK=0;}
        if (canvOK==1)
        {
            var ctx=c.getContext('2d');
            // Create gradient
            var grd = ctx.createLinearGradient(0,0,200,0);
            grd.addColorStop(0,'red');
            grd.addColorStop(1,'white');
            // Fill with gradient
            ctx.fillStyle = grd;
            ctx.fillRect(10,10,150,80);
        }
    </script>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        var c = document.getElementById(&quot;myCanvas&quot;);<br>
        var ctx = c.getContext(&quot;2d&quot;);<br>
        <br>
        // Создать градиент<br>
        var grd = ctx.createLinearGradient(0, 0, 200, 0);<br>
        grd.addColorStop(0, &quot;red&quot;);<br>
        grd.addColorStop(1, &quot;white&quot;);<br>
        <br>
        // Заполнить градиентом<br>
        ctx.fillStyle = grd;<br>
        ctx.fillRect(10, 10, 150, 80);</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit4412.html?filename=tryhtml5_canvas_tut_grad' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h3>Нарисовать круговой градиент</h3>
    <canvas id='myCanvas7' width='200' height='100' style='border:1px solid #d3d3d3;'>
      Ваш веб-браузер не поддерживает элемент canvas.
    </canvas>
    <script>
        var c=document.getElementById('myCanvas7');
        var canvOK=1;
        try {c.getContext('2d');}
        catch (er) {canvOK=0;}
        if (canvOK==1)
        {
            var ctx=c.getContext('2d');
            // Создать градиент
            var grd = ctx.createRadialGradient(75,50,5,90,60,100);
            grd.addColorStop(0,'red');
            grd.addColorStop(1,'white');
            // Заполнить градиентом
            ctx.fillStyle = grd;
            ctx.fillRect(10,10,150,80);
        }
    </script>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        var c = document.getElementById(&quot;myCanvas&quot;);<br>
        var ctx = c.getContext(&quot;2d&quot;);<br>
        <br>
        // Создать градиент<br>
        var grd = ctx.createRadialGradient(75, 50, 5, 90, 60, 100);<br>
        grd.addColorStop(0, &quot;red&quot;);<br>
        grd.addColorStop(1, &quot;white&quot;);<br>
        <br>
        // Заполнить градиентом<br>
        ctx.fillStyle = grd;<br>ctx.fillRect(10, 10, 150, 80);</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitb560.html?filename=tryhtml5_canvas_tut_grad2' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <div class='w3-example'>
      <h3>Нарисовать изображение</h3>
      <div class='w3-code notranslate jsHigh'>
        var c = document.getElementById(&quot;myCanvas&quot;);<br>
        var ctx = c.getContext(&quot;2d&quot;);<br>
        var img = document.getElementById(&quot;scream&quot;);<br>
        ctx.drawImage(img, 10, 10);</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit3ad8.html?filename=tryhtml5_canvas_tut_img' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HTML Canvas Учебник</h2>
    <p>Чтобы узнать больше про HTML <code class='w3-codespan'>&lt;canvas&gt;</code>, посетите полный <a href='../graphics/canvas_intro.php'>HTML Canvas Учебник</a> на нашем сайте <strong>W3Schools на русском</strong>.</p>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html5_migration.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_svg.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>