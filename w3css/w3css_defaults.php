<?php include '../include/head.php'; ?>
    <title>W3.CSS Учебник. Значения по умолчанию. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='W3.CSS Значения по умолчанию. Заголовки. Классы размера шрифта. Отмена настроек W3.CSS по умолчанию. Изменение шрифта по умолчанию. <?php include '../include/description.php'; ?>'>
    <link rel="preload" href="../lib/fonts/fontawesome.woff2?14663396" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../lib/fonts/source-code-pro-v14-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../lib/fonts/roboto-mono-v13-latin-500.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../lib/fonts/source-sans-pro-v14-latin-700.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../lib/fonts/source-sans-pro-v14-latin-600.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../lib/fonts/freckle-face-v9-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_w3css.php'; ?>
<?php include '../include/before_content_w3css.php'; ?>

<article>
    <h1>W3.CSS Значения по умолчанию</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_cards.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_fonts.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>W3.CSS легко читать</h2>
    <p>Страницы, сделанные с помощью <strong>W3.CSS</strong> легко читаются даже людьми с небольшими нарушениями зрения.</p>
    <ul>
        <li>Размер шрифта по умолчанию - 15 пикселей</li>
        <li>Семейство шрифта по умолчанию - Verdana с хорошим межбуквенным интервалом</li>
        <li>Межстрочный интервал по умолчанию (1,5) тоже очень удобен</li>
    </ul>
    <hr>

    <h2>HTML Заголовки &lt;h1&gt; - &lt;h6&gt;</h2>
    <p>По умолчанию W3.CSS стилизует заголовки HTML таким образом:</p>

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
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_fonts_headings.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Классы Font-Size (размер шрифта)</h2>
    <p style="margin-bottom:10px;">Заголовки следует использовать для того, чем они являются: в качестве заголовков.</p>
    <p style="margin-bottom:10px;">В W3.CSS размеры шрифта можно установить с помощью следующих классов <strong>w3-<em>size</em></strong>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate">
            <div class="w3-tiny">w3-tiny</div>
            <div class="w3-small">w3-small</div>
            <div class="w3-medium">w3-medium (по умолчанию)</div>
            <div class="w3-large">w3-large</div>
            <div class="w3-xlarge">w3-xlarge</div>
            <div class="w3-xxlarge">w3-xxlarge</div>
            <div class="w3-xxxlarge">w3-xxxlarge</div>
            <div class="w3-jumbo">w3-jumbo</div>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_fonts_size.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Отмена настроек W3.CSS по умолчанию</h2>
    <p>Изменить настройки W3.CSS по умолчанию очень просто.</p>
    <p>У вас есть как минимум три варианта:</p>
    <ol>
        <li>Отменить настройки по умолчанию в &lt;head&gt; разделе вашей страницы</li>
        <li>Добавить свой собственный CSS-файл после W3.CSS</li>
        <li>Загрузить и изменить содержимое файла W3.CSS</li>
    </ol>

    <div class="w3-example">
        <h3>Переопределить в &lt;head&gt;</h3>
        <div class="w3-code notranslate cssHigh">
            h1{font-size:64px;}<br>
            h2{font-size:48px;}<br>
            h3{font-size:36px;}<br>h4{font-size:24px;}<br>
            h5{font-size:20px;}<br>h6{font-size:18px;}
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_fonts_override.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Добавьте свой CSS</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;link rel=&quot;stylesheet&quot; href=&quot;https://www.w3schools.com/w3css/4/w3.css&quot;&gt;<br>&lt;link rel=&quot;stylesheet&quot;
            href=&quot;myStyle.css&quot;&gt;</div>
    </div>

    <div class="w3-example">
        <h3>Измените W3.CSS</h3>
        <div class="w3-code notranslate cssHigh">
            h1{font-size:36px} h2{font-size:30px} h3{font-size:24px} h4{font-size:20px} h5{font-size:18px} h6{font-size:16px}
        </div>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Изменение шрифта по умолчанию</h2>
    <p>В заголовке веб-страницы (или в таблице стилей) после загрузки W3.CSS измените стиль html и body:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;link rel=&quot;stylesheet&quot; href=&quot;https://www.w3schools.com/w3css/4/w3.css&quot;&gt;<br>
            &lt;style&gt;<br>
            html, body, h1, h2, h3, h4, h5, h6 {<br>&nbsp; font-family: cursive, sans-serif;<br>}<br>
            &lt;/style&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_fonts_page.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_cards.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_fonts.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>