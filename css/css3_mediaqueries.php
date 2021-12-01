<?php include '../include/head.php'; ?>

<title>CSS Медиа запросы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Медиа запросы. Синтаксис. Типы медиа - all, print, screen, speech. Адаптивность веб-сайта. Отображение на разных разрешениях экрана и устройствах. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <link rel="stylesheet" href="../styles/browserref.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Медиа запросы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_box-sizing.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_mediaqueries_ex.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>CSS2 Введенные медиа типы</h2>
    <p>Правило <code class="w3-codespan">@media</code> введенное в CSS2, позволило определять различные правила стиля для разных типов медиа.</p>
    <p>Примеры: у вас может быть один набор правил стилей для экранов компьютеров, один для принтеров, один для портативных устройств, один для телевизионных устройств и т.д.</p>
    <p>К сожалению, эти медиа типы никогда не получали большой поддержки со стороны устройств, кроме типа печатных носителей.</p>
    <hr>

    <h2>CSS3 Введенные медиа-запросы</h2>
    <p>Медиа-запросы в CSS3 расширили идею медиа типов в CSS2: вместо того чтобы искать тип устройства, они смотрят на возможности устройства.</p>
    <p>Медиа-запросы могут использоваться для проверки многих вещей, таких как:</p>
    <ul>
        <li>ширина и высота области просмотра</li>
        <li>ширина и высота устройства</li>
        <li>ориентация (планшет / телефон в альбомном или портретном режиме?)</li>
        <li>разрешение экрана</li>
    </ul>
    <p>Использование медиазапросов - это популярный метод доставки адаптивной таблицы стилей на настольные компьютеры, ноутбуки, планшеты и мобильные телефоны (например, телефоны iPhone и Android).</p>
    <hr>

    <h2>Поддержка браузерами</h2>
    <p>Числа в таблице указывают первую версию браузера, которая полностью поддерживает правило <code class="w3-codespan">@media</code>.</p>
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
                <td style="text-align:left;">@media</td>
                <td>21.0</td>
                <td>9.0</td>
                <td>3.5</td>
                <td>4.0</td>
                <td>9.0</td>
            </tr>
        </table>
    </div>
    <hr>

    <h2>Синтаксис медиа-запроса</h2>
    <p>Медиа-запрос состоит из медиа-типа и может содержать одно или несколько выражений, которые могут принимать значение true или false.</p>
    <div class="w3-code w3-border notranslate cssHigh"><div>
            @media not|only <i>mediatype </i>and<i> </i> (<i>выражения</i>) {<i><br>&nbsp;&nbsp;CSS-Code;<br></i>}</div></div>
    <p>Результат запроса равен true, если указанный тип мультимедиа соответствует типу устройства, на котором отображается документ, и все выражения в мульти-медиа запросе имеют значение true. Когда медиа-запрос имеет значение true, применяются соответствующие таблицы стилей или правила стилей в соответствии с обычными правилами каскадирования.</p>
    <p>Если вы не используете операторы not или only, тип носителя является необязательным, и подразумевается тип <code class="w3-codespan">all</code> (т.е. все).</p>

    <p>Вы также можете иметь разные таблицы стилей для разных медиа:</p>
    <div class="w3-code w3-border notranslate htmlHigh"><div>
            &lt;link rel=&quot;stylesheet&quot; media=&quot;<em>mediatype</em> and|not|only (<em>выражения</em>)&quot;
            href=&quot;<em>print.css</em>&quot;&gt;</div></div>
    <hr>

    <h2>CSS3 Типы медиа</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:25%">Значение</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>all</td>
            <td>Используется для всех медиа-устройств</td>
        </tr>
        <tr>
            <td>print</td>
            <td>Используется для принтеров</td>
        </tr>
        <tr>
            <td>screen</td>
            <td>Используется для экранов компьютеров, планшетов, смартфонов и т.д.</td>
        </tr>
        <tr>
            <td>speech</td>
            <td>Используется для программ чтения с экрана (скринридеров), которые &quot;читают&quot; страницу вслух</td>
        </tr>
    </table>
    <hr>

    <h2>Медиа-запросы. Простые примеры</h2>
    <p>Один из способов использования медиазапросов - иметь альтернативный раздел CSS прямо внутри таблицы стилей.</p>
    <p>В следующем примере цвет фона изменяется на светло-зеленый, если область просмотра имеет ширину 480 пикселей или шире (если область просмотра меньше 480 пикселей, цвет фона будет розовым):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            @media screen and (min-width: 480px) {<br>&nbsp; body {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;background-color: lightgreen;<br>&nbsp;&nbsp;}<br>}<br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_media_queries1.html">Попробуйте сами &raquo;</a>
    </div>

    <p>В следующем примере показано меню, которое будет всплывать слева от страницы, если область просмотра имеет ширину 480 пикселей или шире (если область просмотра меньше 480 пикселей, меню будет отображаться поверх содержимого):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            @media screen and (min-width: 480px) {<br>&nbsp;&nbsp;#leftsidebar
            {width: 200px; float: left;}<br>&nbsp;&nbsp;#main
            {margin-left: 216px;}<br>}<br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_media_queries2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-note w3-panel">
        <h2>Больше примеров медиа-запросов</h2>
        <p>Чтобы увидеть больше примеров по медиа-запросам, перейдите на следующую страницу: <a href="css3_mediaqueries_ex.php">CSS Медиа-запросы. Примеры</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <hr>

    <h2>CSS Справочник @media</h2>
    <p>Для полного обзора всех типов медиа и функций / выражений, пожалуйста, посмотрите в <a href="../cssref/css3_pr_mediaquery.php">CSS Справочнике @media правил</a>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_box-sizing.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_mediaqueries_ex.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>