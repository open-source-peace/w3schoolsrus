<?php include '../include/head.php'; ?>

<title>HTML Карты изображений. <?php include '../include/title.php'; ?></title>
<meta name="description" content="HTML Карты изображений. С помощью карт изображений HTML возможно создавать зоны, на которые можно кликать. Как сделать карту изображений? Что такое карта изображений на веб-сайте? <?php include '../include/description.php'; ?>">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class="color_h1">Фоновое изображение</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_images_imagemap.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_images_picture.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Фоновое изображение можно указать почти для любого элемента HTML.</p>
    <hr>
    <div class="sum">
        <h4>В этой теме:</h4>
        <ul>
            <li><a href="#c1"><em>Фоновое изображение на элементе HTML</em></a></li>
            <li><a href="#c2"><em>Фоновое изображение на странице</em></a></li>
            <li><a href="#c3"><em>Повторение фона</em></a></li>
            <li><a href="#c4"><em>Фон обложки</em></a></li>
            <li><a href="#c5"><em>Растягивание фона</em></a></li>
        </ul>
    </div>
    <hr>

    <h2 id="c1">Фоновое изображение на элементе HTML</h2>
    <p>Чтобы добавить фоновое изображение к элементу HTML, используйте HTML атрибут <code class="w3-codespan">style</code> и CSS свойство <code class="w3-codespan">background-image</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Добавьте фоновое изображение к элементу HTML:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;div style=&quot;background-image: url('img_girl.jpg');&quot;&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit609f.html?filename=tryhtml_images_background3" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Вы также можете указать фоновое изображение в элементе <code class="w3-codespan">&lt;style&gt;</code> в разделе <code class="w3-codespan">&lt;head&gt;</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Укажите фоновое изображение в элементе <code class="w3-codespan">&lt;style&gt;</code>:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;style&gt;<br>div {<br>&nbsp; background-image: url('img_girl.jpg');<br>
            }<br>&lt;/style&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit3698.html?filename=tryhtml_images_background4" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c2">Фоновое изображение на странице</h2>
    <p>Если вы хотите, чтобы фоновое изображение было на всю страницу, вы должны указать фоновое изображение в элементе <code class="w3-codespan">&lt;body&gt;</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Добавьте фоновое изображение для всей страницы:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;style&gt;<br>body {<br>&nbsp; background-image: url('img_girl.jpg');<br>
            }<br>&lt;/style&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit695b.html?filename=tryhtml_images_background5" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c3">Повторение фона</h2>
    <p>Если фоновое изображение меньше элемента, изображение будет повторяться по горизонтали и вертикали, пока не достигнет конца элемента:</p>

    <div style="height:300px;background-image:url('../images/example_img_girl.jpg');">
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;style&gt;<br>body {<br>&nbsp; background-image: url('example_img_girl.jpg');<br>}<br>&lt;/style&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitf210.html?filename=tryhtml_images_background6" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Чтобы избежать повторения фонового изображения, установите для свойства <code class="w3-codespan">background-repeat</code> значение <code class="w3-codespan">no-repeat</code> (т.е. не повторяться).</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;style&gt;<br>body {<br>&nbsp; background-image: url('example_img_girl.jpg');<br>&nbsp;
            background-repeat: no-repeat;<br>}<br>&lt;/style&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit8f7c.html?filename=tryhtml_images_background6_1" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c4">Фон обложки</h2>
    <p>Если вы хотите, чтобы фоновое изображение охватывало весь элемент, вы можете установить для свойства <code class="w3-codespan">background-size</code> значение <code class="w3-codespan">cover.</code></p>
    <p>Также, чтобы весь элемент был всегда покрыт, установите свойства <code class="w3-codespan">background-attachment</code> значение <code class="w3-codespan">fixed:</code></p>
    <p>Таким образом, фоновое изображение покроет весь элемент, а не будет растягиваться (изображение сохранит исходные пропорции):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;style&gt;<br>body {<br>&nbsp; background-image: url('img_girl.jpg');<br>&nbsp;
            background-repeat: no-repeat;<br>&nbsp; background-attachment: fixed; <br>&nbsp;
            background-size: cover;<br>
            }<br>&lt;/style&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit460f.html?filename=tryhtml_images_background7" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c5">Растягивание фона</h2>
    <p>Если вы хотите, чтобы фоновое изображение растягивалось, чтобы вместиться во всём элементе, вы можете установить для свойства <code class="w3-codespan">background-size</code> значение <code class="w3-codespan">100% 100%</code>:</p>
    <div style="height:300px;background-image:url('../images/img_girl.jpg');background-size:100% 100%;">
    </div>
    <p>Попробуйте изменить размер окна браузера, и вы увидите, что изображение растянеться, но всегда будет охватывать весь элемент.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;style&gt;<br>body {<br>&nbsp; background-image: url('img_girl.jpg');<br>&nbsp;
            background-repeat: no-repeat;<br>&nbsp; background-attachment: fixed; <br>&nbsp;
            background-size: 100% 100%;<br>
            }<br>&lt;/style&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryita60c.html?filename=tryhtml_images_background8" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Узнать больше о CSS</h2>
    <p>Из приведенных выше примеров вы узнали, что фоновые изображения можно стилизовать с помощью CSS свойств фона.</p>
    <p>Чтобы узнать больше о CSS свойствах фона, прочитайте раздел <a href="../css/css_background.php">CSS Фон</a> на нашему сайте.</p>
    <hr>
    <div class="quest">
        <h3>Вопросы для самоконтроля</h3>
        <ul>
            <li><em>Как добавить фоновое изображение к HTML-элементам?</em></li>
            <li><em>Какой атрибут используется для добавления фонового изображения?</em></li>
            <li><em>Какое CSS-свойство используется для добавления фонового изображения?</em></li>
            <li><em>Где нужно указать путь к фоновому изображению, чтобы вся страница должна быть с фоновам изображением?</em></li>
            <li><em>Как будет отображаться на странице фоновое изображение, если оно меньше HTML-элемента?</em></li>
            <li><em>Какое значение нужно установить для свойства <code class="w3-codespan">background-repeat</code>, чтобы избежать повторения фонового изображения?</em></li>
            <li><em>Какое значение нужно установить для свойства <code class="w3-codespan">background-size</code>, чтобы фоновое изображение охватывало весь HTML-элемент?</em></li>
            <li><em>Какое значение нужно установить для свойства <code class="w3-codespan">background-attachment</code>, чтобы весь HTML-элемент был всегда покрыт?</em></li>
            <li><em>Какое значение нужно установить для свойства <code class="w3-codespan">background-size</code>, чтобы фоновое изображение растягивалось, чтобы вместить весь HTML-элемент?</em></li>
        </ul>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_images_imagemap.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_images_picture.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
