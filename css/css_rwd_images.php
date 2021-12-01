<?php include '../include/head.php'; ?>

<title>CSS Адаптивные изображения. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Адаптивный веб-дизайн. Адаптивные изображения. Свойства width, max-width. Фоновые изображения. Элемент picture. Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <link rel="stylesheet" href="../styles/browserref.css">
    <style>
        .bg1 {
            width: 100%;
            height:400px;
            background-image:url('../images/img_flowers.jpg');
            background-repeat:no-repeat;
            background-size:contain;
            border: 1px solid red;
        }
        .bg2 {
            width: 100%;
            height:400px;
            background-image:url('../images/img_flowers.jpg');
            background-size:100% 100%;
            border:1px solid red;
        }
        .bg3 {
            width: 100%;
            height:400px;
            background-image:url('../images/img_flowers.jpg');
            background-size:cover;
            border:1px solid red;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>Адаптивный веб-дизайн - <span class="color_h1">Изображения</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_rwd_mediaqueries.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_rwd_videos.php">Next &#10095;</a>
    </div>
    <hr>
    <div style="text-align:center;">
        <img src="../images/img_chania.jpg" style="width:50%;height:auto;" alt="Адаптивные изображения">
        <p>Измените размер окна браузера, чтобы увидеть, как изображение масштабируется по размеру страницы.</p>
    </div>
    <hr>

    <h2>Использование свойства width</h2>
    <p>Если для свойства <code class="w3-codespan">width</code> задано значение в процентах, а для высоты задано значение &quot;auto&quot;, изображение будет адаптивным и масштабируется вверх и вниз:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            img {<br>
            &nbsp;&nbsp;width: 100%;<br>&nbsp; height: auto;<br>
            }</div>
        <a target="_blank" href="../csstryit/tryresponsive_image2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Обратите внимание, что в приведенном выше примере изображение можно увеличить до размера, превышающего его исходный размер. Во многих случаях лучшим решением будет использование свойства <code class="w3-codespan">max-width </code>.</p>
    <hr>

    <h2>Использование свойства max-width</h2>
    <p>Если свойство <code class="w3-codespan">max-width</code> установлено на 100%, изображение будет уменьшаться, если это необходимо, но никогда не будет увеличиваться до размера, превышающего его исходный размер:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            img {<br>
            &nbsp; max-width: 100%;<br>&nbsp; height: auto;<br>
            }</div>
        <a target="_blank" href="../csstryit/tryresponsive_image.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>Добавить адаптивное изображение на веб-страницу</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            img {<br>
            &nbsp; width: 100%;<br>&nbsp; height: auto;<br>
            }</div>
        <a target="_blank" href="../csstryit/tryresponsive_image3.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Фоновые изображения</h2>
    <p>Фоновые изображения также могут реагировать на изменение размера и масштабирование.</p>
    <p>Далее вы увидите три разных метода:</p>

    <p>1. Если свойство <code class="w3-codespan">background-size</code> установлено на &quot;contain&quot;, фоновое изображение будет масштабироваться и пытаться соответствовать области содержимого. Однако изображение сохранит свое соотношение сторон (пропорциональное соотношение между шириной и высотой изображения):</p>

    <div class="bg1"></div>
    <br>
    <p>Вот CSS код:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp; width: 100%;<br>&nbsp; height: 400px;<br>&nbsp;
            background-image: url('img_flowers.jpg');<br>&nbsp;&nbsp;background-repeat: no-repeat;<br>&nbsp;&nbsp;background-size: contain;<br>&nbsp;&nbsp;border: 1px solid red;<br>}</div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/tryresponsive_image_background1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <p>2. Если для свойства <code class="w3-codespan">background-size</code> установлено значение "100% 100%", фоновое изображение будет растягиваться, чтобы охватить всю область содержимого:</p>

    <div class="bg2"></div>
    <br>
    <p>Вот CSS код:</p>
    <div class="w3-example">

        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp; width: 100%;<br>&nbsp; height: 400px;<br>&nbsp;
            background-image: url('img_flowers.jpg');<br>&nbsp;
            background-size: 100% 100%;<br>&nbsp; border: 1px solid red;<br>}</div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/tryresponsive_image_background2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <p>3. Если для свойства <code class="w3-codespan">background-size</code> установлено значение &quot;cover&quot;, фоновое изображение будет масштабироваться, чтобы охватить всю область содержимого. Обратите внимание, что значение &quot;cover&quot; сохраняет соотношение сторон, и некоторая часть фонового изображения может быть обрезана:</p>

    <div class="bg3"></div>
    <br>
    <p>Вот CSS код:</p>
    <div class="w3-example">
        <h3>Пример</h3>

        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp;&nbsp;width: 100%;<br>&nbsp; height: 400px;<br>&nbsp;
            background-image: url('img_flowers.jpg');<br>&nbsp;&nbsp;background-size: cover;<br>&nbsp;&nbsp;border: 1px solid red;<br>}</div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/tryresponsive_image_background3.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Разные изображения для разных устройств</h2>
    <p>Большое изображение может быть идеальным на большом экране компьютера, но бесполезным на маленьком устройстве. Зачем загружать большое изображение, если вам все равно нужно уменьшить его? Чтобы уменьшить нагрузку или по каким-либо другим причинам, вы можете использовать медиазапросы для отображения разных изображений на разных устройствах.</p>

    <p>Вот одно большое изображение и одно меньшее изображение, которое будет отображаться на разных устройствах:</p>

    <div class="row">
        <div class="col-lg-6" style="padding:15px;"><img src="../images/img_flowers.jpg" class="w3-image" alt="Адаптивные изображения"></div>
        <div class="col-lg-6" style="padding:15px;text-align:center;"><img src="../images/img_smallflower.jpg" class="w3-image"  alt="Адаптивные изображения"></div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Для ширины менее 400px: */<br>body {<br>&nbsp; background-image:
            url('img_smallflower.jpg'); <br>}<br><br>/*
            Для ширины 400px и больше: */<br>@media only screen and (min-width: 400px)
            {<br>&nbsp; body { <br>&nbsp;&nbsp;&nbsp;&nbsp;background-image: url('img_flowers.jpg'); <br>
            &nbsp;&nbsp;}<br>}</div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/tryresponsive_image_mediaq.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Вы можете использовать медиазапрос <code class="w3-codespan">min-device-width</code>, вместо <code class="w3-codespan">min-width</code>, который проверяет ширину устройства, а не ширина браузера. Тогда изображение не изменится при изменении размера окна браузера:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Для устройств, менее чем 400px: */<br>body {<br>&nbsp; background-image:
            url('img_smallflower.jpg'); <br>}<br><br>/*
            Для устройств 400px и больше: */<br>@media only screen and (min-device-width: 400px)
            {<br>&nbsp;&nbsp;body { <br>&nbsp;&nbsp;&nbsp;
            background-image: url('img_flowers.jpg'); <br>&nbsp;&nbsp;}<br>}</div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/tryresponsive_image_mediaq2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>HTML5 элемент &lt;picture&gt;</h2>
    <p>HTML5 представил элемент <code class="w3-codespan">&lt;picture&gt;</code> который позволяет вам определять более одного изображения.</p>
    <h3>Поддержка браузерами</h3>
    <table class="browserref notranslate">
        <tr>
            <th style="width:20%;font-size:16px;text-align:left;">Элемент</th>
            <th style="width:15%;" class="bsEdge" title="Internet Explorer / Edge"></th>
            <th style="width:15%;" class="bsChrome" title="Chrome"></th>
            <th style="width:15%;" class="bsFirefox" title="Firefox"></th>
            <th style="width:15%;" class="bsSafari" title="Safari"></th>
            <th style="width:15%;" class="bsOpera" title="Opera"></th>
        </tr>
        <tr>
            <td style="text-align:left;">&lt;picture&gt;</td>
            <td>13</td>
            <td>38.0</td>
            <td>38.0</td>
            <td>9.1</td>
            <td>25.0</td>
        </tr>
    </table>
    <br>
    <p>Элемент <code class="w3-codespan">&lt;picture&gt;</code> работает аналогично элементам <code class="w3-codespan">&lt;video&gt;</code> и <code class="w3-codespan">&lt;audio&gt;</code>. Вы устанавливаете разные источники, и первый источник, который соответствует предпочтениям, является тем, который используется:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;picture&gt;<br>&nbsp; &lt;source srcset=&quot;img_smallflower.jpg&quot; media=&quot;(max-width:
            400px)&quot;&gt;<br>&nbsp; &lt;source srcset=&quot;img_flowers.jpg&quot;&gt;<br>&nbsp; &lt;img
            src=&quot;img_flowers.jpg&quot; alt=&quot;Flowers&quot;&gt;<br>&lt;/picture&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/tryresponsive_image_picture.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Атрибут <code class="w3-codespan">srcset</code> является обязательным и определяет источник изображения.</p>
    <p>Атрибут <code class="w3-codespan">media</code> является необязательным и принимает запросы мультимедиа, которые вы найдете в <a href="../cssref/css3_pr_mediaquery.php">CSS @media правиле</a>.</p>
    <p>Также необходимо определить элемент <code class="w3-codespan">&lt;img&gt;</code> для браузеров, которые не поддерживают элемент <code class="w3-codespan">&lt;picture&gt;</code>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_rwd_mediaqueries.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_rwd_videos.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>