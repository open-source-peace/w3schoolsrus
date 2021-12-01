<?php include '../include/head.php'; ?>

<title>CSS Отражение изображения. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Отражение изображения. Как отобразить изображение с помощью CSS? Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <link rel="stylesheet" href="../styles/browserref.css">
    <style>
        #reflectimg {
            -webkit-box-reflect: right 20px;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Отражение изображения</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_images.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_object-fit.php">Next &#10095;</a>
    </div>
    <hr>
    <p>В этой главе вы узнаете, как отразить изображение.</p>
    <img id="reflectimg" src="../images/img_tree.png" alt="Отображение изображения">
    <hr>

    <h2>CSS Отражения изображения</h2>
    <p>Свойство <code class="w3-codespan">box-reflect</code> используется для создания отражения изображения.</p>
    <p>Значение свойства <code class="w3-codespan">box-reflect</code> может быть: <code class="w3-codespan">below</code>, <code class="w3-codespan">above</code>,
        <code class="w3-codespan">left</code> или <code class="w3-codespan">right</code>.</p>
    <hr>
    <h2>Поддержка браузерами</h2>
    <p>Числа в таблице указывают первую версию браузера, полностью поддерживающую свойство.</p>
    <p>Цифры, за которыми следует -webkit-, указывают первую версию, которая работала с префиксом.</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tr>
                <th style="width:25%;font-size:16px;text-align:left;">Свойство</th>
                <th style="width:15%;" class="bsChrome" title="Chrome"></th>
                <th style="width:15%;" class="bsEdge" title="Internet Explorer / Edge"></th>
                <th style="width:15%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:15%;" class="bsSafari" title="Safari"></th>
                <th style="width:15%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td style="text-align:left;">box-reflect</td>
                <td>4.0&nbsp;-webkit-</td>
                <td>79.0&nbsp;-webkit-</td>
                <td><span class="deprecated">Не поддерживается</span></td>
                <td>4.0&nbsp;-webkit-</td>
                <td>15.0&nbsp;-webkit-</td>
            </tr>
        </table>
    </div>
    <hr>

    <h2>Примеры</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Здесь нам нужно отражение под изображением:</p>
        <div class="w3-code notranslate cssHigh">
            img {<br>&nbsp; -webkit-box-reflect: below;<br>} </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_reflection_below.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Здесь мы хотим, чтобы отражение было справа от изображения:</p>
        <div class="w3-code notranslate cssHigh">
            img {<br>&nbsp; -webkit-box-reflect: right;<br>} </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_reflection_right.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS Смещение отражения</h2>
    <p>Чтобы указать зазор между изображением и отражением, добавьте размер зазора в свойство <code class="w3-codespan">box-reflect</code>.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Здесь нам нужно отражение под изображением со смещением 20 пикселей:</p>
        <div class="w3-code notranslate cssHigh">
            img {<br>&nbsp; -webkit-box-reflect: below 20px;<br>} </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_reflection_offset.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS Отражение с градиентом</h2>
    <p>Мы также можем создать эффект затухания на отражении.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Создайте эффект затемнения на отражении:</p>
        <div class="w3-code notranslate cssHigh">
            img {<br>&nbsp; -webkit-box-reflect: below 0px linear-gradient(to bottom, rgba(0,0,0,0.0),
            rgba(0,0,0,0.4));<br>} </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_reflection_gradient.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_images.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_object-fit.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>