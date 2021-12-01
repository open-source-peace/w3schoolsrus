<?php include '../include/head.php'; ?>

  <title>CSS Макет веб-сайта. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Макет веб-сайта. Какие бывают макеты сайтов? Стилизация страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        .w3-row-padding, .w3-row-padding>.w3-half, .w3-row-padding>.w3-third, .w3-row-padding>.w3-twothird, .w3-row-padding>.w3-threequarter, .w3-row-padding>.w3-quarter, .w3-row-padding>.w3-col {
            padding: 0 12px;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Макет веб-сайта</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_counters.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_units.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Макет веб-страницы и веб-сайта</h2>
    <h3>Что такое дизайн-макет сайта?</h3>
    <p><strong>Дизайн-макет сайта</strong> – это визуальный образ будущего сайта, разработанный с учётом технических возможностей HTML вёрстки. Такой макет является демонстрацией того, как визуально будет выглядеть сайт после вёрстки и наполнения.</p>
    <p>Веб-сайт обычно состоит из набора визуально идентичных веб-страниц (либо набора веб-страниц). Поэтому <strong>макет веб-сайта</strong> - это макет самих веб-страниц, из которых и состоит весь веб-сайт.</p>
    <p>Веб-страница обычно состоит из заголовка (<strong>header</strong>), навигационного меню (<strong>nav</strong>), контента (основного и дополнительного) и нижнего колонтитула (<strong>footer</strong>):</p>
    <div class="w3-card-2 w3-padding w3-padding-16">
        <iframe src="../csstryit/trycss_template_ifr5.html" style="border:0;width:100%;overflow:hidden;height:465px;"></iframe>
    </div>
    <p>Есть множество различных макетов на выбор. Однако приведенная выше структура является одной из наиболее распространенных, и мы подробнее рассмотрим её в этом учебнике.</p>
    <hr>

    <h2>Header - Заголовок</h2>
    <p><strong>Заголовок</strong> обычно расположен в верхней части веб-страницы (или прямо перед верхним меню навигации). Он часто содержит логотип или название сайта:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .header {<br>&nbsp; background-color: #F1F1F1;<br>&nbsp; text-align:
            center;<br>&nbsp; padding: 20px;<br>}
        </div>
        <p>Результат:</p>
        <div class="w3-padding w3-padding-16 w3-white notranslate">
            <div class="w3-light-grey w3-center" style="padding:30px;"><h2>Header</h2></div>
        </div>
        <a target="_blank" class="w3-btn w3-margin-top w3-margin-bottom" href="../csstryit/trycss_website_layout_header.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Навбар - панель навигации</h2>
    <p><strong>Панель навигации (навбар)</strong> содержит список ссылок, помогающих посетителям перемещаться по вашему сайту:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Контейнер navbar */<br>.topnav {<br>&nbsp; overflow: hidden;<br>&nbsp;
            background-color: #333;<br>}<br><br>/* Navbar links */<br>.topnav a {<br>&nbsp;&nbsp;float:
            left;<br>&nbsp; display: block;<br>&nbsp; color:
            #f2f2f2;<br>&nbsp; text-align: center;<br>&nbsp;
            padding: 14px 16px;<br>&nbsp; text-decoration: none;<br>}<br><br>
            /* Ссылки - изменяющие цвет при наведении мыши */<br>.topnav a:hover {<br>&nbsp;
            background-color: #ddd;<br>&nbsp; color: black;<br>}</div>
        <p>Результат:</p>
        <div class="w3-padding w3-padding-16 w3-white notranslate">
            <div class="w3-bar w3-black">
                <a class="w3-bar-item w3-button w3-padding-16" href="javascript:void(0)">Ссылка</a>
                <a class="w3-bar-item w3-button w3-padding-16" href="javascript:void(0)">Ссылка</a>
                <a class="w3-bar-item w3-button w3-padding-16" href="javascript:void(0)">Ссылка</a>
            </div>
        </div>
        <a target="_blank" class="w3-btn w3-margin-top w3-margin-bottom" href="../csstryit/trycss_website_layout_navbar.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Content - Содержимое</h2>
    <p>Макет <strong>секции из содержимым</strong> часто зависит от целевых пользователей. Наиболее распространенный макет - это одна секция (или комбинирование их из нескольких):</p>
    <ul>
        <li><strong>1-колонка</strong> (часто используется для мобильных браузеров)</li>
        <li><strong>2-колонки</strong> (часто используется для планшетов и ноутбуков)</li>
        <li><strong>3-колонки</strong> (используется только для настольных компьютеров)</li>
    </ul>

    <div class="w3-row-padding" style="margin:24px -22px">
        <div class="w3-col m4">
            <div class="w3-card-2 w3-padding w3-padding-16"><p style="margin-top:0">1-колонка:</p>
                <iframe src="../csstryit/trycss_layout_ifr.html" style="border:0;width:100%;overflow:hidden;height:177px;"></iframe>
            </div>
        </div>
        <p class="w3-hide-large w3-hide-medium" style="margin:8px 0">&nbsp;</p>
        <div class="w3-col m4">
            <div class="w3-card-2 w3-padding w3-padding-16"><p style="margin-top:0">2-колонки:</p>
                <iframe src="../csstryit/trycss_layout_ifr2.html" style="border:0;width:100%;overflow:hidden;height:177px;"></iframe>
            </div>
        </div>
        <p class="w3-hide-large w3-hide-medium" style="margin:8px 0">&nbsp;</p>

        <div class="w3-col m4">
            <div class="w3-card-2 w3-padding w3-padding-16"><p style="margin-top:0">3-колонки:</p>
                <iframe src="../csstryit/trycss_layout_ifr3.html" style="border:0;width:100%;overflow:hidden;height:177px;"></iframe>
            </div>
        </div>
    </div>

    <p>Мы создадим макет с 3 столбцами (колонками) и изменим его на 1 колонку на меньших экранах:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Создадим три равных колонки, которые плавают рядом друг с другом */<br>.column {<br>&nbsp;
            float: left;<br>&nbsp; width: 33.33%;<br>}<br><br>/* Очищаем float после колонок */<br>.row:after {<br>&nbsp; content: &quot;&quot;;<br>&nbsp;
            display: table;<br>&nbsp; clear: both;<br>}<br><br>/* Адаптивный макет - три колонки располагаются друг над другом, а не рядом друг с другом на меньших экранах (шириной 600 пикселей или меньше) */<br>@media screen and (max-width: 600px) {<br>&nbsp;&nbsp;.column
            {<br>&nbsp;&nbsp;&nbsp; width: 100%;<br>&nbsp;&nbsp;}<br>}
        </div>
        <p>Результат:</p>
        <div class="w3-padding w3-white notranslate w3-padding-16">
            <div class="w3-row">
                <div class="w3-col m4 w3-padding"><h2>Колонка</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique.</p></div>
                <div class="w3-col m4 w3-padding"><h2>Колонка</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique.</p></div>
                <div class="w3-col m4 w3-padding"><h2>Колонка</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique.</p></div>
            </div></div>
        <a target="_blank" class="w3-btn w3-margin-top w3-margin-bottom" href="../csstryit/trycss_website_layout_grid.html">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-note w3-panel">
        <p><b>Совет:</b> Чтобы создать макет с двумя колонками, измените ширину на 50%. Чтобы создать макет с 4 колонками, используйте 25% и т.д.</p>
        <p><b>Совет:</b> Хотите знать, как работает правило @media? Узнайте больше об этом в разделе <a href="css3_mediaqueries.php">CSS Медиа запросы</a>.</p>
        <p><b>Совет:</b> Более современный способ создания колончатых макетов - использовать <strong>CSS Flexbox</strong>. Однако этот способ не поддерживается в Internet Explorer 10 и более ранних версиях. Если вам требуется поддержка IE6-10, используйте float (как показано выше).</p>
        <p>Чтобы узнать больше о модуле <strong>Flexible Box Layout</strong> (макет гибкого блока), прочитайте раздел о <a href="css3_flexbox.php">CSS Flexbox</a> на нашем сайте.</p>
    </div>
    <hr>

    <h2>Неодинаковые колонки</h2>
    <p>Основной контент (раздел <b>main</b>) - самая большая и самая важная часть веб-страницы.</p>

    <p>На веб-странице могут быть колонки <strong>неодинаковой</strong> (различной) ширины, поэтому большая часть пространства зарезервирована для основного контента. Дополнительный контент (если он есть) часто используется в качестве альтернативной навигации или для указания информации, относящейся к основному контенту. Измените ширину колонок так, как вам нравится, только помните, что она должна давать в сумме всего 100%:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .column {<br>&nbsp; float: left;<br>}<br><br>/* Левая и правая колонки */<br>
            .column.side {<br>&nbsp;&nbsp;width: 25%;<br>}<br><br>/* Колонка посередине */<br>.column.middle
            {<br>&nbsp;&nbsp;width: 50%;<br>}<br><br>/* Адаптивный макет - три колонки располагаются друг над другом, а не рядом друг с другом. */<br>
            @media screen and (max-width: 600px) {<br>&nbsp; .column.side, .column.middle
            {<br>&nbsp;&nbsp;&nbsp; width: 100%;<br>&nbsp; }<br>}
        </div>
        <p>Результат:</p>
        <div class="w3-padding w3-white notranslate w3-padding-16">
            <div class="w3-row">
                <div class="w3-col m3 w3-padding"><h2>Боковая сторона</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p></div>
                <div class="w3-col m6 w3-padding"><h2>Основной контент</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p></div>
                <div class="w3-col m3 w3-padding"><h2>Боковая сторона</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p></div>
            </div></div>
        <a target="_blank" class="w3-btn w3-margin-top w3-margin-bottom" href="../csstryit/trycss_website_layout_grid2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Footer - Нижний колонтитул</h2>
    <p><strong>Нижний колонтитул (footer)</strong> находится внизу веб-страницы. Он часто содержит информацию, такую как авторское право и контактная информация:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .footer {<br>&nbsp; background-color: #F1F1F1;<br>&nbsp; text-align:
            center;<br>&nbsp; padding: 10px;<br>}
        </div>
        <p>Результат:</p>
        <div class="w3-padding w3-white notranslate w3-padding-16">
            <div class="w3-light-grey w3-center" style="padding:20px;">Footer</div>
        </div>
        <a target="_blank" class="w3-btn w3-margin-top w3-margin-bottom" href="../csstryit/trycss_website_layout_footer.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Адаптивный макет веб-сайта</h2>
    <p>Используя приведенный выше CSS код, мы создали <strong>адаптивный макет сайта</strong>, который меняется между двумя столбцами и столбцами на всю ширину в зависимости от ширины экрана:</p>
    <iframe src="../csstryit/trycss_website_layout_blog_ifr.html" style="width:100%;border:3px solid #ddd;height:606px"></iframe>
    <p><a target="_blank" href="../csstryit/trycss_website_layout_blog.html" class="w3-btn">Попробуйте сами &raquo;</a></p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_counters.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_units.php">Next &#10095;</a>
    </div>    
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>