<?php include '../include/head.php'; ?>
    <title>W3.CSS Учебник. Шрифты. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='W3.CSS Шрифты. Классы размера шрифта. Заголовки. Переопределение настроек W3.CSS по умолчанию. Изменение шрифта страницы. Подключение внешних Google-шрифтов. <?php include '../include/description.php'; ?>'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=brick-sign">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Allerta+Stencil'>
    <style>
        .w3-tangerine {
            font-family: 'Tangerine', serif;
            font-size: 64px;
        }
        .w3-lobster {
            font-family: 'Lobster', serif;
            font-size: 48px;
        }
        .w3-allerta {
            font-family: 'Allerta Stencil', sans-serif;
            font-size: 48px;
        }
        .w3-roboto {
            font-family: 'Roboto', sans-serif;
            font-size: 17px;
        }
        .w3-myfont {
            font-family: "Comic Sans MS", cursive, sans-serif;
            font-size: 48px;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_w3css.php'; ?>
<?php include '../include/before_content_w3css.php'; ?>

<article>
    <h1>W3.CSS <span class="color_h1">Шрифты</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_defaults.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_fonts_google.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Страницы со стилем W3.CSS легко читать!</h2>
    <p>Страницы, стилизованные с помощью каскадной таблицы стилей <strong>W3.CSS</strong> легко читаются, даже для людей с небольшими нарушениями зрения.</p>
    <ul>
        <li>В <strong>W3.CSS</strong> по умолчанию размер шрифта составляет 15 пикселей</li>
        <li>По умолчанию используется шрифт <strong>Verdana</strong> с удобным межбуквенным интервалом</li>
        <li>Межстрочный интервал по умолчанию (1.5) также очень удобен</li>
    </ul>
    <hr>

    <h2>HTML Заголовки &lt;h1&gt; - &lt;h6&gt;</h2>
    <p>По умолчанию <strong>W3.CSS</strong> стилизирует HTML заголовки таким образом:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate">
            <h1>&lt;h1&gt;Заголовок 1 (36px)&lt;/h1&gt;</h1>
            <h2>&lt;h2&gt;Заголовок 2 (30px)&lt;/h2&gt;</h2>
            <h3>&lt;h3&gt;Заголовок 3 (24px)&lt;/h3&gt;</h3>
            <h4>&lt;h4&gt;Заголовок 4 (20px)&lt;/h4&gt;</h4>
            <h5>&lt;h5&gt;Заголовок 5 (18px)&lt;/h5&gt;</h5>
            <h6>&lt;h6&gt;Заголовок 6 (16px)&lt;/h6&gt;</h6>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_fonts_headings.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Классы размера шрифта (font-size)</h2>
    <p style="margin-bottom:10px;">Заголовки должны использоваться как есть: только как заголовки.</p>
    <p style="margin-bottom:10px;">В <strong>W3.CSS</strong> размеры шрифта могут быть установлены с помощью следующих классов <strong>w3-<em>size</em></strong>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate">
            <div class="w3-tiny">w3-tiny</div>
            <div class="w3-small">w3-small</div>
            <div class="w3-medium">w3-medium (по-умолчанию)</div>
            <div class="w3-large">w3-large</div>
            <div class="w3-xlarge">w3-xlarge</div>
            <div class="w3-xxlarge">w3-xxlarge</div>
            <div class="w3-xxxlarge">w3-xxxlarge</div>
            <div class="w3-jumbo">w3-jumbo</div>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_fonts_size.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Переопределение настроек W3.CSS по умолчанию</h2>
    <p>Переопределить настройки <strong>W3.CSS</strong> по умолчанию очень просто.</p>
    <p>Есть как минимум три варианта:</p>
    <ol>
        <li>Переопределите настройки по умолчанию в разделе &lt;head&gt; веб-страницы</li>
        <li>Добавьте ссылку на свой собственный файл CSS после ссылки на файл W3.CSS</li>
        <li>Загрузите и измените содержимое файла W3.CSS на свое усмотрение</li>
    </ol>

    <div class="w3-example">
        <h3>Переопределить в &lt;head&gt;</h3>
        <div class="w3-code notranslate cssHigh">
            h1{font-size:64px;}<br>
            h2{font-size:48px;}<br>
            h3{font-size:36px;}<br>h4{font-size:24px;}<br>
            h5{font-size:20px;}<br>h6{font-size:18px;}
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_fonts_override.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Добавить ссылку на свой собственный файл CSS</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;link rel=&quot;stylesheet&quot; href=&quot;https://www.w3schools.com/w3css/4/w3.css&quot;&gt;<br>&lt;link rel=&quot;stylesheet&quot;
            href=&quot;myStyle.css&quot;&gt; &lt;!-- ссылка на свой файл css --&gt;</div>
    </div>

    <div class="w3-example">
        <h3>Изменить W3.CSS</h3>
        <div class="w3-code notranslate cssHigh">
            h1{font-size:36px} h2{font-size:30px} h3{font-size:24px} h4{font-size:20px} h5{font-size:18px} h6{font-size:16px}
        </div>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Изменение шрифта страницы по умолчанию</h2>
    <p>В заголовке вашей веб-страницы (или в таблице стилей) после подключения W3.CSS измените стиль html и body:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;link rel=&quot;stylesheet&quot; href=&quot;https://www.w3schools.com/w3css/4/w3.css&quot;&gt;<br>
            &lt;style&gt;<br>
            html, body, h1, h2, h3, h4, h5, h6 {<br>&nbsp; font-family: &quot;Comic Sans MS&quot;, cursive, sans-serif;<br>}<br>
            &lt;/style&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_fonts_page.html" target="_blank">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>W3.CSS Внешние шрифты</h2>
    <div class="w3-tangerine">Making the web beautiful!</div>
    <p>С помощью W3.CSS очень легко добавлять новые шрифты на веб-страницу.</p>
    <ul>
        <li>Очень прост в использовании (только CSS и HTML)</li>
        <li>Неограниченное использование внешних библиотек шрифтов (например, Google Fonts)</li>
        <li>Работает во всех современных браузерах</li>
    </ul>
    <hr>

    <h2>Использование класса шрифтов</h2>
    <div class="w3-myfont">Создаём сеть!</div>

    <p>В заголовке веб-страницы (или в таблице стилей) создайте класс шрифта:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .w3-myfont {<br>&nbsp; font-family: &quot;Comic Sans MS&quot;, cursive, sans-serif;<br>}
        </div>
    </div>
    <p>В теле (body) вашей веб-страницы используйте имя класса шрифта:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;body&gt;<br>&nbsp; &lt;p class=&quot;w3-myfont&quot;&gt;Создаём сеть!&lt;/p&gt;<br>&lt;/body&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_fonts_class.html" target="_blank">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Использование внешних шрифтов</h2>
    <p>В заголовке веб-страницы добавьте внешний шрифт и присвойте шрифту имя класса:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;link rel=&quot;stylesheet&quot; href=&quot;https://fonts.googleapis.com/css?family=Tangerine&quot;&gt;<br>
            <br>&lt;style&gt;<br>.w3-tangerine {<br>&nbsp; font-family: 'Tangerine', serif;<br>}<br>
            &lt;/style&gt;</div>
    </div>
    <p>В теле (body) веб-страницы используйте имя класса:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;body&gt;<br>&nbsp; &lt;p class=&quot;w3-tangerine&quot;&gt;Делаем Интернет красивым!&lt;/p&gt;<br>&lt;/body&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_fonts_intro.html" target="_blank">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 class="w3-xxxlarge">Больше примеров</h2>
    <div class="w3-lobster">Создаём сеть!</div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;link rel=&quot;stylesheet&quot;<br>href=&quot;https://fonts.googleapis.com/css?family=Lobster"&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_fonts_lobster.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-lobster font-effect-brick-sign">Создаём сеть!</div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;link rel=&quot;stylesheet&quot;<br>href="https://fonts.googleapis.com/css?family=Lobster&amp;effect=brick-sign"&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_fonts_effects.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-allerta w3-black w3-center">Создаём сеть!</div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;link rel=&quot;stylesheet&quot;<br>href="https://fonts.googleapis.com/css?family=Allerta+Stencil"&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_fonts_allerta.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Эффекты шрифта не работают в Internet Explorer 9 и более ранних версиях.</p>
    </div>

    <p><b>Примечание.</b> Некоторые <strong>Google-шрифты</strong> отображаются только латиницей. При этом на русском языке (кириллицей) шрифты могут <b>не работать</b>! Это нужно учитывать при использовании Google-шрифтов на своих сайтах!</p>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_defaults.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_fonts_google.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>