<?php include '../include/head.php'; ?>

<title>CSS Свойство object-fit. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Свойство object-fit. Подгонка объекта. Как изображению или видео нужно изменить размер, чтобы соответствовать контейнеру? Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<link rel="stylesheet" href="../styles/browserref.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Свойство object-fit</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_images.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_object-position.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">CSS свойство <code class="w3-codespan">object-fit</code> используется, чтобы указать, как <code class="w3-codespan">&lt;img&gt;</code> или <code class="w3-codespan">&lt;video&gt;</code> нужно изменить размер, чтобы соответствовать его контейнеру.</p>
    <p>Object-fit - в пер. с анг. - подгонка объекта.</p>
    <hr>
    <h2>Поддержка браузерами</h2>
    <p>Числа в таблице указывают первую версию браузера, которая полностью поддерживает свойство.</p>
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
                <td style="text-align:left;">object-fit</td>
                <td>31.0</td>
                <td>16.0</td>
                <td>36.0</td>
                <td>7.1</td>
                <td>19.0</td>
            </tr>
        </table>
    </div>
    <hr>

    <h2>CSS свойство object-fit</h2>
    <p>CSS свойство <code class="w3-codespan">object-fit</code> используется, чтобы указать, как <code class="w3-codespan">&lt;img&gt;</code> или <code class="w3-codespan">&lt;video&gt;</code> должны быть изменены, чтобы соответствовать его контейнеру.</p>
    <p>Это свойство указывает содержимому заполнять контейнер различными способами; такие как &quot;сохранить это соотношение сторон&quot; или &quot;растянуть и занять как можно больше места&quot;.</p>
    <p>Посмотрите на следующее изображение из Парижа, размером 400x300 пикселей:</p>
    <img src="../images/paris.jpg" alt="Париж" style="width:400px;height:300px">

    <p>Однако, если мы добавим изображение более 200x400 пикселей, оно будет выглядеть так:</p>
    <img src="../images/paris.jpg" alt="Париж" style="width:200px;height:400px">
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            img {<br>&nbsp;&nbsp;width: 200px;<br>&nbsp;&nbsp;height:
            400px;<br>}</div>
        <a target="_blank" href="../csstryit/trycss3_object-fit_without.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>Мы видим, что изображение сжимается, чтобы уместиться в контейнер размером 200x400 пикселей, и его исходное соотношение сторон нарушается.</p>
    <p>Если мы используем <code class="w3-codespan">object-fit: cover;</code> - это обрезает стороны изображения, сохраняя пропорции, а также заполняя пространство, как на изображении ниже:</p>

    <img src="../images/paris.jpg" alt="Париж" style="width:200px;height:400px;object-fit:cover;">

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            img {<br>&nbsp; width: 200px;<br>&nbsp; height:
            400px;<br>&nbsp; object-fit: cover;<br>}</div>
        <a target="_blank" href="../csstryit/trycss3_object-fit.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Другой пример</h2>
    <p>Здесь у нас есть два изображения, и мы хотим, чтобы они занимали 50% ширины окна браузера и 100% высоты.</p>
    <p>В следующем примере мы НЕ используем <code class="w3-codespan">object-fit</code>, поэтому при изменении размера окна браузера соотношение сторон изображений будет нарушено:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <div style="width:100%;height:300px;">
                <img src="../images/rock600x400.jpg" alt="Норвегия" style="float:left;width:50%;height:100%;">
                <img src="../images/paris.jpg" alt="Париж" style="float:left;width:50%;height:100%;">
            </div>
            <br>
        </div>
        <a target="_blank" href="../csstryit/trycss3_object-fit2_without.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>В следующем примере мы используем <code class="w3-codespan">object-fit: cover;</code>, поэтому при изменении размера окна браузера соотношение сторон изображений сохраняется:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <div style="width:100%;height:300px;">
                <img src="../images/rock600x400.jpg" alt="Norway" style="float:left;width:50%;height:100%;object-fit:cover;">
                <img src="../images/paris.jpg" alt="Paris" style="float:left;width:50%;height:100%;object-fit:cover;">
            </div>
            <br>
        </div>
        <a target="_blank" href="../csstryit/trycss3_object-fit2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Все значения CSS свойства object-fit</h2>
    <p>Свойство <code class="w3-codespan">object-fit</code> может иметь следующие значения:</p>
    <ul>
        <li><code class="w3-codespan">fill</code> - Это по умолчанию. Размер заменяемого содержимого заполнен в поле содержимого элемента. При необходимости объект будет растянут или сдавлен, чтобы соответствовать</li>
        <li><code class="w3-codespan">contain</code> - Замененное содержимое масштабируется, чтобы сохранить его пропорции, в то же время вписываясь в поле содержимого элемента</li>
        <li><code class="w3-codespan">cover</code> - Размер заменяемого содержимого соответствует его пропорциям при заполнении всего поля содержимого элемента. Объект будет обрезан, чтобы соответствовать</li>
        <li><code class="w3-codespan">none</code> - Замененный контент не изменяется</li>
        <li><code class="w3-codespan">scale-down</code> - Размер содержимого определяется так, как если бы он не был указан или содержался (что привело бы к уменьшению размера конкретного объекта)</li>
    </ul>
    <p>В следующем примере демонстрируются все возможные значения свойства <code class="w3-codespan">object-fit</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .fill {object-fit: fill;}<br>
            .contain {object-fit: contain;}<br>
            .cover {object-fit: cover;}<br>
            .scale-down {object-fit: scale-down;}<br>
            .none {object-fit: none;}</div>
        <a target="_blank" href="../csstryit/trycss3_object-fit_all.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <h2>CSS Object-* Свойства</h2>
    <p>В следующей таблице перечислены CSS свойства object-* :</p>
    <table class="w3-table-all notranslate">
        <tbody><tr>
            <th style="width:25%">Свойство</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_object-fit.php">object-fit</a></td>
            <td>Определяет, как &lt;img&gt; или &lt;video&gt; должен быть изменен, чтобы соответствовать его контейнеру</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_object-position.php">object-posititon</a></td>
            <td>Определяет, как &lt;img&gt; или &lt;video&gt; должен располагаться с координатами x/y внутри &quot;собственного поля содержимого&quot;.</td>
        </tr>
        </tbody>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_images.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_object-position.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>