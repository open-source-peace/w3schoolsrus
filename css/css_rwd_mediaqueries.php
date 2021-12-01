<?php include '../include/head.php'; ?>

<title>CSS Медиа-запросы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Адаптивный веб-дизайн. Медиа-запросы - метод CSS, введенный в CSS3. Использует правило @media, чтобы включить блок CSS свойств, если выполняется определенное условие. Как применять медиа-запросы для адаптивности? Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>Адаптивный веб-дизайн <span class="color_h1">- Медиа-запросы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_rwd_grid.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_rwd_images.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>Что такое медиа-запросы?</h2>
    <p><strong>Медиа-запрос - это метод CSS, введенный в CSS3</strong>.</p>
    <p>Он использует <strong>правило <code class="w3-codespan">@media</code></strong> чтобы включить блок свойств CSS, только если выполняется определенное условие.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Если окно браузера имеет размер 600px или меньше, цвет фона будет светло-голубым:</p>
        <div class="w3-code notranslate cssHigh">
            @media only screen and (max-width: 600px) {<br>&nbsp; body {<br>
            &nbsp;&nbsp;&nbsp;
            background-color: lightblue;<br>&nbsp; }<br>}<br></div>
        <a target="_blank" href="../csstryit/tryresponsive_mediaquery.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Добавить брэкпоинт (точку перехода)</h2>
    <p>Ранее в этом учебнике мы делали веб-страницу со строками и столбцами, и она была адаптивной, но на маленьком экране она выглядела не очень хорошо.</p>
    <p>Медиа-запросы могут помочь с этим. Мы можем добавить брэкпоинт (точку перехода), когда определенные части проекта будут вести себя по-разному на каждом брэкпоинте.</p>
    <div class="w3-row-padding" style="text-align:center;font-weight:bold;font-size:90%;margin:24px -16px -8px -16px">
        <div class="w3-col m6 s12">
            <img src="../images/rwd_desktop.png" alt="Адаптивный веб-дизайн. Отображение на десктопе" style="border:2px solid #dddddd;">
            <br>
            Desktop
        </div>
        <div class="w3-col m6 s12">
            <img src="../images/rwd_phone.png" alt="Адаптивный веб-дизайн. Отображение на мобильном телефоне" style="border:2px solid #dddddd;">
            <br>
            Phone
        </div>
    </div>
    <br>
    <p>Используйте медиа-запрос для добавления брэкпоинта на 768 пикселей:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Когда экран (окно браузера) становится меньше 768 пикселей, ширина каждого столбца должна составлять 100%:</p>
        <div class="w3-code notranslate cssHigh">
            /* Для десктопов: */<br>.col-1 {width: 8.33%;}<br>.col-2 {width: 16.66%;}<br>.col-3 {width: 25%;}<br>
            .col-4 {width: 33.33%;}<br>.col-5 {width: 41.66%;}<br>.col-6 {width: 50%;}<br>
            .col-7 {width: 58.33%;}<br>.col-8 {width: 66.66%;}<br>.col-9 {width: 75%;}<br>
            .col-10 {width: 83.33%;}<br>.col-11 {width: 91.66%;}<br>.col-12 {width:
            100%;}<br><br>@media only screen and (max-width: 768px) {<br>&nbsp;&nbsp;/* Для мобильных телефонов: */<br>
            &nbsp;
            [class*=&quot;col-&quot;] {<br>&nbsp;&nbsp;&nbsp; width: 100%;<br>&nbsp;&nbsp;}<br>}<br></div>
        <a target="_blank" href="../csstryit/tryresponsive_breakpoints.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Mobile First - Всегда первым дизайн для мобильных телефонов</h2>
    <p><strong>Mobile First (мобильный первый)</strong> - означает проектирование для мобильных устройств до проектирования для настольного компьютера или любого другого устройства (это ускорит отображение страницы на небольших - мобильных устройствах).</p>
    <p>Это означает, что необходимо внести некоторые изменения в CSS.</p>
    <p>Вместо изменения стилей, когда ширина становится <em>меньше</em> чем 768px, необходимо изменить дизайн, когда ширина становится <em>больше</em> чем 768px. Это сделает дизайн Mobile First:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Для мобильных телефонов: */<br>[class*=&quot;col-&quot;] {<br>&nbsp; width: 100%;<br>}<br><br>@media only screen and (min-width:
            768px) {<br>&nbsp;&nbsp;/* Для десктопов: */<br>&nbsp;&nbsp;.col-1 {width: 8.33%;}<br>&nbsp;&nbsp;.col-2 {width: 16.66%;}<br>&nbsp;&nbsp;.col-3 {width: 25%;}<br>&nbsp;&nbsp;.col-4 {width: 33.33%;}<br>
            &nbsp; .col-5 {width: 41.66%;}<br>&nbsp; .col-6 {width: 50%;}<br>&nbsp; .col-7 {width: 58.33%;}<br>
            &nbsp; .col-8 {width: 66.66%;}<br>&nbsp;&nbsp;.col-9 {width: 75%;}<br>&nbsp;&nbsp;.col-10 {width: 83.33%;}<br>&nbsp;&nbsp;.col-11 {width: 91.66%;}<br>
            &nbsp; .col-12 {width: 100%;}<br>}<br></div>
        <a target="_blank" href="../csstryit/tryresponsive_mobilefirst.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <h2>Ещё другие брэкпоинты</h2>
    <p>Вы можете добавить столько брэкпоинтов, сколько необходимо.</p>
    <p>Можно вставить брэкпоинт между планшетами и мобильными телефонами.</p>
    <div class="w3-row-padding" style="text-align:center;font-weight:bold;font-size:90%;margin:24px -16px -8px -16px">
        <div class="w3-col m6 s12">
            <img src="../images/rwd_desktop.png" alt="Адаптивный веб-дизайн. Отображение на десктопе" style="border:2px solid #dddddd;">
            <br>
            Десктоп
        </div>
        <div class="w3-col m4 s12">
            <img src="../images/rwd_tablet.png" alt="Адаптивный веб-дизайн. Отображение на планшете" style="border:2px solid #dddddd;">
            <br>
            Планшет
        </div>
        <div class="w3-col m2 s12">
            <img src="../images/rwd_phone.png" alt="Адаптивный веб-дизайн. Отображение на мобильном телефоне" style="border:2px solid #dddddd;">
            <br>
            Телефон
        </div>
    </div>
    <br>
    <p>Это можно сделать, добавив ещё один медиа-запрос (с разрешением 600 пикселей) и набор новых классов для устройств размером более 600 пикселей (но меньше 768 пикселей):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Обратите внимание, что два набора классов практически идентичны, единственное отличие заключается в названии (<code class="w3-codespan">col-</code> и <code class="w3-codespan">col-s-</code>):</p>
        <div class="w3-code notranslate cssHigh">
            /* Для мобильных телефонов: */<br>[class*=&quot;col-&quot;] {<br>&nbsp;&nbsp;width: 100%;<br>}<br><br>@media only screen and (min-width: 600px) {<br>
            &nbsp;
            /* Для планшетов: */<br>&nbsp;&nbsp;.col-s-1 {width: 8.33%;}<br>&nbsp;&nbsp;.col-s-2 {width: 16.66%;}<br>
            &nbsp; .col-s-3 {width: 25%;}<br>&nbsp; .col-s-4 {width: 33.33%;}<br>&nbsp; .col-s-5 {width: 41.66%;}<br>
            &nbsp; .col-s-6 {width: 50%;}<br>&nbsp; .col-s-7 {width: 58.33%;}<br>&nbsp; .col-s-8 {width: 66.66%;}<br>
            &nbsp; .col-s-9 {width: 75%;}<br>&nbsp; .col-s-10 {width: 83.33%;}<br>&nbsp; .col-s-11 {width: 91.66%;}<br>
            &nbsp; .col-s-12 {width: 100%;}<br>}<br><br>@media only screen and (min-width:
            768px) {<br>&nbsp; /* Для десктопов: */<br>&nbsp; .col-1 {width: 8.33%;}<br>&nbsp; .col-2 {width: 16.66%;}<br>
            &nbsp; .col-3 {width: 25%;}<br>&nbsp; .col-4 {width: 33.33%;}<br>&nbsp; .col-5 {width: 41.66%;}<br>
            &nbsp; .col-6 {width: 50%;}<br>&nbsp; .col-7 {width: 58.33%;}<br>&nbsp; .col-8 {width: 66.66%;}<br>
            &nbsp; .col-9 {width: 75%;}<br>&nbsp; .col-10 {width: 83.33%;}<br>&nbsp; .col-11 {width: 91.66%;}<br>
            &nbsp; .col-12 {width: 100%;}<br>}</div>
    </div>

    <p>Может показаться странным, что у нас есть два набора идентичных классов, но это даёт нам возможность <em>в HTML</em> решать, что будет происходить со столбцами на каждом брэкпоинте:</p>
    <div class="w3-example">
        <h3>HTML Пример</h3>
        <p><strong>Для десктопа:</strong></p>
        <p>Первый и третий разделы будут занимать по 3 столбца каждый. Средняя часть будет охватывать 6 столбцов.</p>
        <p><strong>Для планшетов:</strong></p>
        <p>Первый раздел будет охватывать 3 столбца, второй - 9, а третий раздел будет отображаться под первыми двумя разделами и 12 столбцами:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;row&quot;&gt;<br>&nbsp; &lt;div class=&quot;col-3 col-s-3&quot;&gt;...&lt;/div&gt;<br>&nbsp; &lt;div
            class=&quot;col-6 col-s-9&quot;&gt;...&lt;/div&gt;<br>&nbsp; &lt;div
            class=&quot;col-3 col-s-12&quot;&gt;...&lt;/div&gt;<br>&lt;/div&gt;</div>
        <a target="_blank" href="../csstryit/tryresponsive_col-s.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Типичные брэкпоинты устройств</h2>
    <p>Существует множество экранов и устройств различной высоты и ширины, поэтому сложно создать точный брэкпоинт для каждого устройства. Для простоты вы можете выбрать пять групп:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /*
            Экстра маленькие устройства (телефоны, 600px и ниже) */<br>@media only screen and (max-width: 600px)
            {...} <br><br>/* Маленькие устройства (портретные планшеты и большие телефоны, 600px и выше)
            */<br>@media only screen and (min-width: 600px) {...} <br><br>/* Средние устройства (альбомные планшеты, 768px и выше) */<br>
            @media only screen and (min-width: 768px) {...} <br><br>/* Большие устройства (ноутбуки / десктопы, 992px и выше)
            */<br>
            @media only screen and (min-width: 992px) {...} <br><br>/* Очень большие устройства (большие ноутбуки и десктопы, 1200px и выше) */<br>@media only screen and (min-width: 1200px) {...} </div>
        <a target="_blank" href="../csstryit/tryresponsive_mediaquery_breakpoints.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Ориентация: Портрет / Альбом</h2>
    <p>Медиа-запросы также можно использовать для изменения макета страницы в зависимости от ориентации браузера.</p>
    <p>У вас может быть набор CSS свойств, которые будут применяться только тогда, когда окно браузера шире его высоты, так называемая &quot;альбомная&quot; ориентация:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Веб-страница будет иметь светло-синий фон ориентации в альбомном режиме:</p>
        <div class="w3-code notranslate cssHigh">
            @media only screen and (orientation: landscape) {<br>&nbsp;&nbsp;body {<br>
            &nbsp;&nbsp;&nbsp;
            background-color: lightblue;<br>&nbsp;&nbsp;}<br>}</div>
        <a target="_blank" href="../csstryit/tryresponsive_mediaquery_orientation.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>Скрыть элементы с медиа-запросами</h2>

    <p>Другое распространенное использование медиа-запросов - скрытие элементов на экранах разных размеров:</p>
    <div class="w3-yellow w3-hide-small w3-padding">Я буду скрыт на маленьких экранах.</div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Если размер экрана составляет 600 пикселей в ширину или меньше, скрыть элемент */<br>@media
            only screen and (max-width: 600px) {<br>&nbsp; div.example {<br>&nbsp;&nbsp;&nbsp;
            display: none;<br>&nbsp; }<br>}<br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_mediaqueries_hide.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Изменить размер шрифта с помощью медиа-запросов</h2>
    <p>Вы также можете использовать медиа-запросы для изменения размера шрифта элемента на экранах разных размеров:</p>
    <div class="w3-light-grey w3-padding fntzs"><h1>Переменный размер шрифта.</h1></div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Если размер экрана составляет 601 пикселей или более, установите размер шрифта для &lt;div&gt; на 80px */<br>@media only screen and (min-width:
            601px) {<br>&nbsp; div.example {<br>&nbsp;&nbsp;&nbsp;
            font-size: 80px;<br>&nbsp; }<br>}<br><br>/* Если размер экрана 600px или меньше, установите размер шрифта для &lt;div&gt; на 30px */<br>@media only screen and (max-width: 600px) {<br>&nbsp; div.example {<br>&nbsp;&nbsp;&nbsp;
            font-size: 30px;<br>&nbsp; }<br>}<br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_mediaqueries_fontsize.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS Справочник @media</h2>
    <p>Для полного обзора всех типов медиа и функций / выражений, пожалуйста, посмотрите на
        <a href="../cssref/css3_pr_mediaquery.php">@media правила в CSS справочнике</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_rwd_grid.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_rwd_images.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>