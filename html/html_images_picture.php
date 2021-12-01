<?php include '../include/head.php'; ?>

<title>HTML Элемент Picture. <?php include '../include/title.php'; ?></title>
<meta name="description" content="HTML Карты изображений. Элемент Picture позволяет отображать разные изображения для разных устройств или размеров экрана. <?php include '../include/description.php'; ?>">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML элемент <span class="color_h1">&lt;picture&gt;</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_images_background.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_tables.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">HTML элемент <code class="w3-codespan">&lt;picture&gt;</code> позволяет отображать разные изображения для разных устройств или размеров экрана.</p>
    <hr>
    <img src="../images/picture_example.jpg" style="max-width:100%" alt="Применение элемента picture">
    <hr>

    <h2>HTML элемент &lt;picture&gt;</h2>
    <p>HTML элемент <code class="w3-codespan">&lt;picture&gt;</code> предоставляет веб-разработчикам большую гибкость в определении графических ресурсов.</p>
    <p>Элемент <code class="w3-codespan">&lt;picture&gt;</code> содержит один или несколько элементов <code class="w3-codespan">&lt;source&gt;</code> каждый из которых ссылается на разные изображения через атрибут <code class="w3-codespan">srcset</code>. Таким образом браузер может выбрать изображение, которое лучше всего соответствует текущему просмотру и/или устройству.</p>
    <p>Каждый элемент <code class="w3-codespan">&lt;source&gt;</code> имеет атрибут <code class="w3-codespan">media</code>, который определяет, когда изображение является наиболее подходящим.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Отображайте различные изображения для различных размеров экрана:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;picture&gt;<br>&nbsp; &lt;source media="(min-width: 650px)" srcset="img_food.jpg"&gt;<br>
            &nbsp;
            &lt;source media="(min-width: 465px)" srcset="img_car.jpg"&gt;<br>&nbsp; &lt;img src="img_girl.jpg&quot;&gt;<br>&lt;/picture&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit6953.html?filename=tryhtml_images_picture1" target="_blank">Попробуйте сами &raquo;</a>
    </div>


    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Всегда указывайте элемент <code class="w3-codespan">&lt;img&gt;</code> как последний дочерний элемент елемента <code class="w3-codespan">&lt;picture&gt;</code>. Элемент <code class="w3-codespan">&lt;img&gt;</code> используется браузерами, которые не поддерживают элемент <code class="w3-codespan">&lt;picture&gt;</code> или если ни один из тегов <code class="w3-codespan">&lt;source&gt;</code> не совпадает.</p>
    </div>
    <hr>

    <h2>Когда использовать элемент изображения</h2>
    <p>Существует две основные цели элемента <code class="w3-codespan">&lt;picture&gt;</code>:</p>
    <h3>1. Пропускная способность</h3>
    <p>Если у вас небольшой экран или устройство, не нужно загружать большой файл изображения. Браузер будет использовать первый <code class="w3-codespan">&lt;source&gt;</code> элемент с соответствующими значениями атрибутов и игнорировать любой из следующих элементов.</p>
    <h3>2. Поддержка формата</h3>
    <p>Некоторые браузеры или устройства могут поддерживать не все форматы изображений. Используя элемент <code class="w3-codespan">&lt;picture&gt;</code> вы можете добавлять изображения всех форматов, и браузер будет использовать первый распознанный формат, а также игнорировать любой из следующих элементов.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Браузер будет использовать первый распознанный формат изображения:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;picture&gt;<br>&nbsp; &lt;source srcset="img_avatar.png"&gt;<br>
            &nbsp; &lt;source srcset="img_girl.jpg"&gt;<br>
            &nbsp; &lt;img src="img_beatles.gif"
            alt="Beatles" style="width:auto;"&gt;<br>&lt;/picture&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit532d.html?filename=tryhtml_images_picture_format" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Браузер будет использовать первый элемент <code class="w3-codespan">&lt;source&gt;</code> из соответствующими значениями атрибутов и будет игнорировать любые следующие элементы <code class="w3-codespan">&lt;source&gt;</code>.</p>
    </div>
    <hr>

    <h2>HTML Теги изображения</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Тег</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../tags/tag_img.php">&lt;img&gt;</a></td>
            <td>Определяет изображение</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_map.php">&lt;map&gt;</a></td>
            <td>Определяет карту изображения</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_area.php">&lt;area&gt;</a></td>
            <td>Определяет область, на которую можно кликнуть внутри карты изображения</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_picture.php">&lt;picture&gt;</a></td>
            <td>Определяет контейнер для нескольких ресурсов изображений</td>
        </tr>
    </table>
    <div class="w3-note w3-panel">
        <p>Для ознакомления с полным списком всех доступных HTML тегов посетите <a href="../tags/index.php">HTML Справочник тегов</a> на нашем сайте.</p>
    </div>
    <hr>
    <div class="quest">
        <h3>Вопросы для самоконтроля</h3>
        <ul>
            <li><em>Для чего необходим HTML-элемент <code class="w3-codespan">&lt;picture&gt;</code>?</em></li>
            <li><em>Сколько элементов <code class="w3-codespan">&lt;source&gt;</code> может содержать в себе элемент <code class="w3-codespan">&lt;picture&gt;</code>?</em></li>
            <li><em>С помощью какого атрибута элемент <code class="w3-codespan">&lt;source&gt;</code> ссылается на разные изображения?</em></li>
            <li><em>Что определяет атрибут <code class="w3-codespan">media</code> каждого элемента <code class="w3-codespan">&lt;source&gt;</code>?</em></li>
        </ul>
    </div>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_images_background.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_tables.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
