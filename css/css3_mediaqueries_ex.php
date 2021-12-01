<?php include '../include/head.php'; ?>

<title>CSS Примеры Медиа запросов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Примеры Медиа запросов. Для меню, столбцов. Как скрыть элементы? Как изменить шрифт. Гибкая галерея изображений. Гибкий веб-сайт. Портретная и альбомная ориентация. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <link rel="stylesheet" href="../styles/browserref.css">
    <style>
        .w3-row-padding, .w3-row-padding> .w3-row-padding> .w3-row-padding> .w3-row-padding> .w3-row-padding> .w3-row-padding> {padding: 0 12px;}
        @media screen and (min-width: 601px) {
            .fntzs h1 {font-size:80px}
        }
        @media screen and (max-width: 600px) {.fntzs h1 {font-size:30px}
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Медиа запросы - Примеры</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_mediaqueries.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_flexbox.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>CSS Медиа-запросы - Больше примеров</h2>
    <p>Давайте рассмотрим еще несколько примеров использования медиа-запросов.</p>
    <p>Медиа-запросы - это популярный метод доставки адаптивной таблицы стилей на разные устройства. Чтобы продемонстрировать простой пример, мы можем изменить цвет фона для разных устройств:</p>

    <img src="../images/mqcap.jpg" alt="Медиа-запросы для адаптивности веб-страниц" style="width:100%;max-width:700px;margin:auto;display:block;">

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Установите телесный цвет фона */<br>body {<br>&nbsp;
            background-color: tan;<br>}<br><br>/* На экранах с разрешением 992 пикселей и менее установите цвет фона синий */<br>@media screen and (max-width: 992px) {<br>&nbsp; body {<br>&nbsp;&nbsp;&nbsp;
            background-color: blue;<br>&nbsp; }<br>}<br><br>/* На экранах с разрешением 600px установите цвет фона оливковый */<br>@media screen and (max-width: 600px) {<br>&nbsp;
            body {<br>&nbsp;&nbsp;&nbsp; background-color: olive;<br>&nbsp; }<br>}<br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_mediaqueries_ex1.html">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-note w3-panel">
        <p>Вы задаетесь вопросом, почему мы используем точно 992px и 600px? Это то, что мы называем &quot;типичными брэкпоинтами&quot; (точки изменения) для устройств. Вы можете прочитать больше о типичных брэкпоинтах в нашем <a href="css_rwd_intro.php">Учебнике по адаптивному веб-дизайну</a>.</p>
    </div>
    <hr>

    <h2>Медиа-запросы для меню</h2>
    <p>В этом примере мы используем медиа-запросы для создания адаптивного меню навигации, которое отличается дизайном на разных размерах экрана.</p>
    <div class="w3-row-padding" style="margin:-16px -24px 24px -24px">

        <div class="w3-col m7">
            <p>Большие экраны:</p>
            <div class="w3-bar w3-black">
                <a href="javascript:void(0)" class="w3-bar-item w3-button w3-green">Главная</a>
                <a href="javascript:void(0)" class="w3-bar-item w3-button">Ссылка 1</a>
                <a href="javascript:void(0)" class="w3-bar-item w3-button">Ссылка 2</a>
                <a href="javascript:void(0)" class="w3-bar-item w3-button">Ссылка 3</a>
            </div>
        </div>

        <div class="w3-col m5">
            <p>Маленькие экраны:</p>
            <div class="w3-bar-block w3-black">
                <a class="w3-bar-item w3-button w3-green w3-padding" href="javascript:void(0)">Главная</a>
                <a class="w3-bar-item w3-button w3-padding" href="javascript:void(0)">Ссылка 1</a>
                <a class="w3-bar-item w3-button w3-padding" href="javascript:void(0)">Ссылка 2</a>
                <a class="w3-bar-item w3-button w3-padding" href="javascript:void(0)">Ссылка 3</a>
            </div>

        </div>

    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Контейнер navbar */<br>.topnav {<br>&nbsp; overflow: hidden;<br>&nbsp;
            background-color: #333;<br>}<br><br>/* Navbar ссылки */<br>.topnav a {<br>&nbsp;&nbsp;float:
            left;<br>&nbsp;&nbsp;display: block;<br>&nbsp;&nbsp;color:
            white;<br>&nbsp;&nbsp;text-align: center;<br>&nbsp;&nbsp;padding: 14px 16px;<br>
            &nbsp; text-decoration: none;<br>}<br><br>
            /* На экранах шириной 600px или меньше, сделайте ссылки меню сложенными друг на друга, а не рядом друг с другом. */<br>@media screen and (max-width: 600px) {<br>
            &nbsp;
            .topnav a {<br>&nbsp;&nbsp;&nbsp;&nbsp;float: none;<br>&nbsp;&nbsp;&nbsp; width:
            100%;<br>&nbsp;&nbsp;}<br>}</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_mediaqueries_navbar.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Медиа-запросы для столбцов</h2>
    <p>Распространенное использование медиа-запросов, заключается в создании гибкого макета. В этом примере мы создаем макет, который варьируется между четырьмя, двумя столбцами и столбцами полной ширины в зависимости от размеров экрана:</p>

    <div class="w3-row-padding" style="margin:24px -22px">
        <div class="w3-col m4">
            <div class="w3-card-2 w3-padding w3-padding-16"><p style="margin-top:0">
                    Большие экраны:</p>
                <iframe src="../csstryit/trycss_mq_ex_ifr4.html" style="border:0;width:100%;overflow:hidden;height:110px;"></iframe>
            </div>
        </div>
        <p class="w3-hide-large w3-hide-medium" style="margin:8px 0">&nbsp;</p>
        <div class="w3-col m4">
            <div class="w3-card-2 w3-padding w3-padding-16"><p style="margin-top:0">
                    Средние экраны:</p>
                <iframe src="../csstryit/trycss_mq_ex_ifr2.html" style="border:0;width:100%;overflow:hidden;height:110px;"></iframe>
            </div>
        </div>
        <p class="w3-hide-large w3-hide-medium" style="margin:8px 0">&nbsp;</p>

        <div class="w3-col m4">
            <div class="w3-card-2 w3-padding w3-padding-16"><p style="margin-top:0">
                    Маленькие экраны:</p>
                <iframe src="../csstryit/trycss_mq_ex_ifr.html" style="border:0;width:100%;overflow:hidden;height:110px;"></iframe>
            </div>
        </div>
    </div>

    <div class="w3-example">
        <h3>Примеры</h3>
        <div class="w3-code notranslate cssHigh">
            /* Создайте четыре равных столбца, которые плавают рядом друг с другом */<br>.column {<br>&nbsp;
            float: left;<br>&nbsp; width: 25%;<br>}<br><br>/* На экранах шириной 992 пикселя или меньше происходит переход от четырех столбцов к двум столбцам */<br>@media screen and (max-width: 992px) {<br>&nbsp;
            .column {<br>&nbsp;&nbsp;&nbsp; width: 50%;<br>&nbsp; }<br>}<br><br>/* На экранах шириной 600px или меньше столбцы должны располагаться друг над другом, а не рядом друг с другом. */<br>
            @media screen and (max-width: 600px) {<br>&nbsp; .column {<br>&nbsp;&nbsp;&nbsp; width:
            100%;<br>&nbsp; }<br>}<br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_mediaqueries_ex2.html">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-note w3-panel">
        <p><strong>Совет:</strong> Более современный способ создания макетов столбцов заключается в использовании CSS Flexbox (см. Пример ниже). Однако это не поддерживается в Internet Explorer 10 и более ранних версиях. Если вам требуется поддержка IE6-10, используйте float (как показано выше).</p>
        <p>Чтобы узнать больше о модуле Flexible Box Layout, прочитайте раздел <a href="css3_flexbox.php">CSS Flexbox</a>.</p>
        <p>Чтобы узнать больше об адаптивном веб-дизайне, прочтите <a href="css_rwd_intro.php">Учебник по адаптивному веб-дизайну</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Контейнер для флексбоксов */<br>.row {<br>&nbsp; display: flex;<br>&nbsp;
            flex-wrap: wrap;<br>}<br><br>/* Создайте четыре равных столбца */<br>.column {<br>&nbsp; flex: 25%;<br>&nbsp;
            padding: 20px;<br>}<br><br>/* На экранах шириной 992 пикселя или меньше переходите от четырех столбцов к двум столбцам */<br>@media screen and (max-width: 992px) {<br>&nbsp;
            .column {<br>&nbsp;&nbsp;&nbsp; flex: 50%;<br>&nbsp; }<br>}<br><br>/* На экранах шириной 600px или меньше столбцы должны располагаться друг над другом, а не рядом друг с другом. */<br>
            @media screen and (max-width: 600px) {<br>&nbsp; .row {<br>&nbsp;&nbsp;&nbsp;
            flex-direction: column;<br>&nbsp; }<br>}<br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_mediaqueries_flex.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Скрыть элементы с помощью медиа-запросов</h2>
    <p>Другое распространенное использование медиа-запросов - скрытие элементов на экранах разных размеров:</p>
    <div class="w3-yellow w3-hide-small w3-padding">Я буду спрятан на маленьких экранах.</div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Если размер экрана составляет 600 пикселей в ширину или меньше, скрыть элемент */<br>@media
            screen and (max-width: 600px) {<br>&nbsp; div.example {<br>&nbsp;&nbsp;&nbsp;
            display: none;<br>&nbsp; }<br>}<br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_mediaqueries_hide.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Изменить размер шрифта с помощью медиазапросов</h2>
    <p>Вы также можете использовать медиа-запросы для изменения размера шрифта элемента на экранах разных размеров:</p>
    <div class="w3-light-grey w3-padding fntzs"><h1>Переменный размер шрифта.</h1></div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Если размер экрана превышает 600 пикселей, установите размер шрифта в &lt;div&gt; на 80px */<br>@media screen and (min-width:
            600px) {<br>&nbsp; div.example {<br>&nbsp;&nbsp;&nbsp;
            font-size: 80px;<br>&nbsp; }<br>}<br><br>/* Если размер экрана составляет 600 пикселей в ширину или меньше, установите размер шрифта в &lt;div&gt; на 30px */<br>@media screen and (max-width: 600px) {<br>&nbsp; div.example {<br>&nbsp;&nbsp;&nbsp;
            font-size: 30px;<br>&nbsp; }<br>}<br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_mediaqueries_fontsize.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Гибкая галерея изображений</h2>
    <p>В этом примере мы используем медиазапросы вместе с flexbox для создания адаптивной галереи изображений:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <iframe src="../howtotryit/tryhow_css_image_grid_responsive.html" style="background:white;border:none;width:100%;height:600px;"></iframe>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom w3-margin-top" href="../csstryit/trycss_mediaqueries_img_gallery.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Гибкий веб-сайт</h2>
    <p>В этом примере мы используем медиа-запросы вместе с flexbox для создания адаптивного веб-сайта, содержащего гибкую панель навигации и гибкий контент.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <iframe src="../csstryit/trycss3_flexbox_website_ifr.html" style="border:2px solid #ddd;width:100%;height:625px;"></iframe>
        </div>
        <a class="w3-btn w3-margin-top w3-margin-bottom" target="_blank" href="../csstryit/trycss_mediaqueries_website.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Ориентация: Портретная (вертикальная) / Альбомная (горизонтальная)</h2>
    <p>Медиа-запросы также можно использовать для изменения макета страницы в зависимости от ориентации браузера.</p>
    <p>У вас может быть набор свойств CSS, которые будут применяться только тогда, когда окно браузера шире его высоты, так называемая &quot;landscape&quot; (&quot;альбомная&quot;) ориентация:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Используйте светло-голубой цвет фона, если ориентация в альбомном режиме:</p>
        <div class="w3-code notranslate cssHigh">
            @media only screen and (orientation: landscape) {<br>&nbsp;&nbsp;body {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;background-color: lightblue;<br>&nbsp;&nbsp;}<br>}</div>
        <a target="_blank" href="../csstryit/tryresponsive_mediaquery_orientation.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>От минимальной ширины до максимальной ширины</h2>
    <p>Вы также можете использовать <code class="w3-codespan">(max-width: <em>..</em>) and (min-width: <em>..</em>)</code> значения для установки минимальной ширины и максимальной ширины.</p>
    <p>Например, когда ширина браузера составляет от 600 до 900 пикселей, измените внешний вид элемента &lt;div&gt;:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            @media screen and (max-width: 900px) and (min-width: 600px) {<br>&nbsp;&nbsp;div.example {<br>&nbsp;&nbsp;&nbsp;
            font-size: 50px;<br>&nbsp;&nbsp;&nbsp; padding: 50px;<br>&nbsp;&nbsp;&nbsp;
            border: 8px solid black;<br>&nbsp;&nbsp;&nbsp; background: yellow;<br>&nbsp; }<br>}<br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_mediaqueries_minmax.html">Попробуйте сами &raquo;</a>
    </div>
    <p><strong>Используя дополнительное значение:</strong> В приведенном ниже примере мы добавляем дополнительный медиа-запрос к нашему уже существующему, используя запятую (это будет вести себя как оператор OR - или):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Если ширина между 600px и 900px <strong>OR</strong> (или) больше 1100px - изменить внешний вид &lt;div&gt; */<br>@media screen and (max-width: 900px) and (min-width: 600px), (min-width:
            1100px) {<br>&nbsp;&nbsp;div.example {<br>&nbsp;&nbsp;&nbsp;
            font-size: 50px;<br>&nbsp;&nbsp;&nbsp; padding: 50px;<br>&nbsp;&nbsp;&nbsp;
            border: 8px solid black;<br>&nbsp;&nbsp;&nbsp; background: yellow;<br>&nbsp; }<br>}<br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_mediaqueries_minmax2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS Справочник @media</h2>
    <p>Чтобы получить полный обзор всех типов мультимедиа и функций / выражений, ознакомьтесь с <a href="../cssref/css3_pr_mediaquery.php">@media правилами в CSS справочнике</a>.</p>
    <p><strong>Совет:</strong> Чтобы узнать больше об адаптивном веб-дизайне (как настроить таргетинг на разные устройства и экраны), используя брэкпоинты медиа-запросов, прочитайте <a href="css_rwd_intro.php">Учебник по адаптивному веб-дизайну</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_mediaqueries.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_flexbox.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>