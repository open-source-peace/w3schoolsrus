<?php include '../include/head.php'; ?>
    <title>W3.CSS Учебник. Google Шрифты. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='W3.CSS Google шрифты. Как подключить к сайту (установить на веб-странице)? Какие бывают? Скачать бесплатно шрифты. <?php include '../include/description.php'; ?>'>
    <link rel="preload" href="../lib/fonts/fontawesome.woff2?14663396" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../lib/fonts/source-code-pro-v14-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../lib/fonts/roboto-mono-v13-latin-500.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../lib/fonts/source-sans-pro-v14-latin-700.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../lib/fonts/source-sans-pro-v14-latin-600.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../lib/fonts/freckle-face-v9-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=shadow-multiple">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
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
            font-size: 48px;
        }
        .w3-sofia {
            font-family: "Sofia", cursive;
            font-size: 48px;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_w3css.php'; ?>
<?php include '../include/before_content_w3css.php'; ?>

<article>
    <h1>W3.CSS Google шрифты</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_fonts.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_text.php">Next &#10095;</a>
    </div>

    <div class="w3-panel w3-info">
        <p>С помощью W3.CSS очень легко добавлять новые шрифты.
        <ul>
            <li>Очень проста в использовании (только CSS и HTML)</li>
            <li>Неограниченное использование внешних библиотек шрифтов (например, Google Fonts)</li>
            <li>Работает во всех современных браузерах</li>
        </ul>
    </div>

    <p class="w3-roboto">Это шрифт Roboto</p>
    <p class="w3-sofia">Это шрифт Sofia</p>
    <p class="w3-sofia font-effect-fire">Это шрифт Sofia в огне</p>
    <p class="w3-tangerine">Создаём красивый Web!</p>
    <p class="w3-lobster">Создаём интересный Web!</p>
    <p class="w3-lobster font-effect-shadow-multiple">Шрифт с эффектом тени!</p>
    <p class="w3-allerta">Шрифт Allerta!</p>
    <p class="w3-allerta w3-black w3-center">Allerta на черном фоне!</p>
    <hr>
    <p><b>Примечание.</b> Некоторые шрифты на русском языке (кириллицей) не отображаются указанным Google-шрифтом, т.к. они не поддерживаются. Отображаются только шрифты латиницей, которые поддерживаются Google.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Использование Google шрифтов</h2>
    <p>Google Fonts можно использовать бесплатно, и у них есть более 1000 шрифтов на выбор.</p>
    <p>В заголовке своей веб-страницы добавьте ссылку на нужный Google-шрифт:</p>

    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;link rel=&quot;stylesheet&quot; href=&quot;https://fonts.googleapis.com/css?family=Roboto&quot;&gt;<br>
        </div>
    </div>
    <p>Затем добавьте CSS с указанием, где его использовать:</p>
    <div class="w3-example">
        <div class="w3-code notranslate cssHigh">
            body,h1,h2,h3,h4,h5,h6 {font-family: Roboto, sans-serif;}
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_fonts_roboto.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Другой пример</h2>
    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;link rel=&quot;stylesheet&quot; href=&quot;https://fonts.googleapis.com/css?family=Sophia&quot;&gt;<br>
        </div>
        <div class="w3-code notranslate cssHigh">
            body,h1,h2,h3,h4,h5,h6 {font-family: Sofia, serif;}
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_fonts_google.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Создание класса шрифта</h2>
    <p>В заголовке веб-страницы разместите ссылку на Google-шрифт:</p>
    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;link rel=&quot;stylesheet&quot; href=&quot;https://fonts.googleapis.com/css?family=Sophia&quot;&gt;<br>
        </div>
    </div>

    <p>Затем создайте класс шрифта:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            .w3-sofia {<br>&nbsp; font-family: Sofia, cursive;<br>}
        </div>
    </div>
    <p>На веб-странице используйте класс шрифта:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p class=&quot;w3-sofia&quot;&gt;Making the Web!&lt;/p&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_fonts_class.html" target="_blank">
            Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-sofia">
        Making the Web!
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <div class="w3-example">
        <h3>Пример</h3>

        <div class="w3-code notranslate htmlHigh">
            &lt;link rel=&quot;stylesheet&quot; href=&quot;https://fonts.googleapis.com/css?family=Tangerine&quot;&gt;
        </div>

        <div class="w3-code notranslate cssHigh">
            .w3-tangerine {<br>&nbsp; font-family: 'Tangerine', serif;<br>}<br>
        </div>

        <div class="w3-code notranslate htmlHigh">
            &lt;p class=&quot;w3-tangerine&quot;&gt;Making the Web Beautiful!&lt;/p&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_fonts_intro.html" target="_blank">
            Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-tangerine">
        Making the Web!
    </div>
    <hr>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;link rel=&quot;stylesheet&quot;<br>href=&quot;https://fonts.googleapis.com/css?family=Lobster"&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_fonts_lobster.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-lobster">
        Making the Web!
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;link rel=&quot;stylesheet&quot;<br>href="https://fonts.googleapis.com/css?family=Lobster&amp;effect=shadow-multiple"&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_fonts_effects.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-lobster font-effect-shadow-multiple">
        Making the Web!</div>
    <hr>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;link rel=&quot;stylesheet&quot;<br>href="https://fonts.googleapis.com/css?family=Allerta+Stencil"&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_fonts_allerta.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-allerta w3-black w3-center">
        Making the Web!</div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_fonts.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_text.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>