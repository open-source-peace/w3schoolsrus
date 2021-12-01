<?php include '../include/head.php'; ?>

<title>CSS Flexbox Адаптивность. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Flexbox адаптивность. Адаптивный (отзывчивый) flexbox. Адаптивная галерея изображений с использованием Flexbox. Адаптивный веб-сайт с использованием Flexbox. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        .anchor-container a {
            position:absolute;
            top:-100px;
        }
        .flex-containerresp {
            display: flex;
            flex-direction: row;
            font-size: 30px;
            text-align: center;
        }
        .flex-item-leftresp {
            background-color: #f1f1f1;
            padding: 10px;
            border:1px solid #ddd;
            flex: 50%;
        }
        .flex-item-rightresp {
            background-color: #f1f1f1;
            border-top:1px solid #ddd;
            border-bottom:1px solid #ddd;
            padding: 10px;
            flex: 50%;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Flex</span> Адаптивность</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_flexbox_items.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_rwd_intro.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Адаптивный Flexbox</h2>
    <p>Вы узнали из главы <a href="css3_mediaqueries.php">CSS Медиа запросы</a>, что можно использовать медиа-запросы для создания различных макетов для разных размеров экрана и устройств.</p>

    <div class="w3-row-padding w3-border" style="margin-left:-16px;margin-right:-16px">
        <div class="w3-col s6">
            <p>Ноутбуки и настольные компьютеры:</p>
            <div class="flex-containerresp">
                <div class="flex-item-leftresp">1</div>
                <div class="flex-item-rightresp">2</div>
                <div class="flex-item-leftresp">3</div>
            </div>
        </div>

        <div class="w3-col s6">
            <p>Мобильные <span class="w3-hide-small">телефоны</span> и планшеты:</p>
            <div class="flex-containerresp" style="flex-direction: column;">
                <div class="flex-item-leftresp">1</div>
                <div class="flex-item-rightresp" style="border-top:none;border-bottom:none">2</div>
                <div class="flex-item-leftresp">3</div>
            </div>
            <br>
        </div>
    </div>

    <p>Например, если вы хотите создать макет с двумя столбцами для большинства размеров экрана и макет с одним столбцом для экранов небольших размеров (например, телефонов и планшетов), вы можете изменить <code class="w3-codespan">flex-direction</code> из <code class="w3-codespan">row</code> в <code class="w3-codespan">column</code> в определенной точке останова (800 пикселей в примере ниже):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp; display: flex;<br>&nbsp; flex-direction: row;<br>}<br><br>
            /* Адаптивный макет - делает макет с одним столбцом вместо макета с двумя столбцами */<br>
            @media (max-width: 800px) {<br>&nbsp; .flex-container {<br>&nbsp;&nbsp;&nbsp;
            flex-direction: column;<br>&nbsp; }<br>}</div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_responsive.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <p>Другой способ - изменить процентное значение свойства <code class="w3-codespan">flex</code> гибких элементов, чтобы создать разные макеты для разных размеров экрана. Обратите внимание, что необходимо также включить <code class="w3-codespan">flex-wrap: wrap;</code> в гибкий контейнер, чтобы этот пример работал:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .flex-container {<br>&nbsp; display: flex;<br>&nbsp; flex-wrap: wrap;<br>}<br>
            <br>.flex-item-left {<br>&nbsp; flex: 50%;<br>}<br><br>.flex-item-right {<br>&nbsp;
            flex: 50%;<br>}<br>
            <br>/* Адаптивный макет - делает макет с одним столбцом вместо макета с двумя столбцами */<br>
            @media (max-width: 800px) {<br>&nbsp; .flex-item-right, .flex-item-left {<br>&nbsp;&nbsp;&nbsp; flex: 100%;<br>&nbsp; }<br>}</div>
        <p>
            <a class="w3-btn" target="_blank" href="../csstryit/trycss3_flexbox_responsive2.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <hr>

    <h2>Адаптивная галерея изображений с использованием Flexbox</h2>
    <p>Используйте flexbox для создания адаптивной галереи изображений, которая может варьироваться от четырех, двух или полноразмерных изображений, в зависимости от размера экрана:</p>
    <iframe src="../howto/tryhow_css_image_grid_responsive.html" style="border:6px solid #f1f1f1;width:100%;height:600px;"></iframe>
    <a class="w3-btn w3-margin-top" target="_blank" href="../csstryit/trycss3_flexbox_image_gallery.html">Попробуйте сами &raquo;</a>
    <hr>

    <h2>Адаптивный веб-сайт с использованием Flexbox</h2>
    <p>Используйте flexbox для создания адаптивного веб-сайта, содержащего гибкую панель навигации и гибкий контент:</p>
    <iframe src="../csstryit/trycss3_flexbox_website_ifr.html" style="border:6px solid #eee;width:100%;height:630px;"></iframe>
    <a class="w3-btn w3-margin-top" target="_blank" href="../csstryit/trycss3_flexbox_website2.html">Попробуйте сами &raquo;</a>
    <hr>

    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_flexbox_items.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_rwd_intro.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>