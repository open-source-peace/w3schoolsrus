<?php include '../include/head.php'; ?>

  <title>CSS Google шрифты. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Google шрифты. Как подключить Google шрифты на веб-странице? Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <link href='https://fonts.googleapis.com/css?family=Sofia|Trirong|Audiowide&effect=fire|neon|outline|emboss|shadow-multiple' rel='stylesheet'>
    <style>
        h1.a {font-family: "Audiowide", sans-serif;}
        h1.b {font-family: "Sofia", sans-serif;}
        h1.c {font-family: 'Trirong', serif;}
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class='color_h1'>Google шрифты</span></h1>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='css_font_size.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='css_font_pairings.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>Google шрифты</h2>
    <p>Если вы не хотите использовать какие-либо стандартные шрифты в HTML, вы можете использовать <strong>Google шрифты</strong>.</p>
    <p><strong>Google шрифты</strong> можно использовать бесплатно, и вы можете выбрать из более 1000 шрифтов.</p>
    <hr>

    <h2>Как использовать Google шрифты</h2>
    <p>Просто добавьте ссылку на специальную таблицу стилей в разделе &lt;head&gt;, а затем обратитесь к шрифту в CSS.</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <p>Здесь мы используем шрифт под названием &quot;Sofia&quot; из Google шрифтов:</p>
        <div class='w3-code notranslate htmlHigh'>
            &lt;head&gt;<br><strong>&lt;link rel=&quot;stylesheet&quot;
                href=&quot;https://fonts.googleapis.com/css?family=Sofia&quot;&gt;</strong><br>&lt;style&gt;<br>body {<br>&nbsp;
            font-family: &quot;Sofia&quot;, sans-serif;<br>}<br>&lt;/style&gt;<br>&lt;/head&gt;<br></div>
        <p>Результат:</p>
        <div class='w3-code notranslate'>
            <h1 style="font-family:'Sofia',sans-serif;">Sofia Font</h1>
            <p style="font-family:'Sofia',sans-serif;">Lorem ipsum dolor sit amet.</p>
            <p style="font-family:'Sofia',sans-serif;">123456790</p>
        </div>
        <a target='_blank' href='../csstryit/trycss_font-google_sofia.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-example'>
        <h3>Пример</h3>
        <p>Здесь мы используем шрифт под названием &quot;Trirong&quot; из Google шрифтов:</p>
        <div class='w3-code notranslate htmlHigh'>
            &lt;head&gt;<br><strong>&lt;link rel=&quot;stylesheet&quot;
                href=&quot;https://fonts.googleapis.com/css?family=Trirong&quot;&gt;</strong><br>&lt;style&gt;<br>body {<br>&nbsp;
            font-family: &quot;Trirong&quot;, serif;<br>}<br>&lt;/style&gt;<br>&lt;/head&gt;<br></div>
        <p>Результат:</p>
        <div class='w3-code notranslate'>
            <h1 style="font-family:'Trirong',serif;">Trirong Font</h1>
            <p style="font-family:'Trirong',serif;">Lorem ipsum dolor sit amet.</p>
            <p style="font-family:'Trirong',serif;">123456790</p>
        </div>
        <a target='_blank' href='../csstryit/trycss_font-google_trirong.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-example'>
        <h3>Пример</h3>
        <p>Здесь мы используем шрифт под названием &quot;Audiowide&quot; из Google Fonts:</p>
        <div class='w3-code notranslate htmlHigh'>
            &lt;head&gt;<br><strong>&lt;link rel=&quot;stylesheet&quot;
                href=&quot;https://fonts.googleapis.com/css?family=Audiowide&quot;&gt;</strong><br>&lt;style&gt;<br>body {<br>&nbsp;
            font-family: &quot;Audiowide&quot;, sans-serif;<br>}<br>&lt;/style&gt;<br>&lt;/head&gt;</div>
        <p>Результат:</p>
        <div class='w3-code notranslate'>
            <h1 style="font-family:'Audiowide',sans-serif;">Audiowide Font</h1>
            <p style="font-family:'Audiowide',sans-serif;">Lorem ipsum dolor sit amet.</p>
            <p style="font-family:'Audiowide',sans-serif;">123456790</p>
        </div>
        <a target='_blank' href='../csstryit/trycss_font-google_audiowide.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-panel w3-note'>
        <p><strong>Примечание:</strong> При указании шрифта в CSS всегда указывайте хотя бы один резервный шрифт (чтобы избежать неожиданного поведения). Т.о., необходимо добавить общее семейство шрифтов (например, serif или sans-serif) в конец списка.</p>
    </div>
    <p>Чтобы просмотреть список всех доступных Google шрифтов, посетите учебник <a href='../howto/howto_google_fonts.php'>Google шрифты</a> на нашем сайте <strong>W3Schools на русском</strong>.</p>
    <hr>

    <h2>Использование нескольких Google шрифтов</h2>
    <p>Чтобы использовать несколько Google шрифтов, просто разделите имена шрифтов вертикальной чертой (<code class='w3-codespan'>|</code>), как здесь:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <p>Запросить несколько шрифтов:</p>
        <div class='w3-code notranslate htmlHigh'>
            &lt;head&gt;<br><strong>&lt;link rel=&quot;stylesheet&quot;
                href=&quot;https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong&quot;&gt;</strong><br>&lt;style&gt;<br>
            h1.a {font-family: &quot;Audiowide&quot;, sans-serif;}<br>h1.b {font-family: &quot;Sofia&quot;,
            sans-serif;}<br>h1.c {font-family: &quot;Trirong&quot;, serif;}<br>&lt;/style&gt;<br>&lt;/head&gt;<br></div>
        <p>Результат:</p>
        <div class='w3-code notranslate'>
            <h1 class='a'>Audiowide Font</h1>
            <h1 class='b'>Sofia Font</h1>
            <h1 class='c'>Trirong Font</h1>
        </div>
        <a target='_blank' href='../csstryit/trycss_font-google_multiple.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-panel w3-note'>
        <p><strong>Примечание:</strong> Запрос нескольких шрифтов может замедлить работу ваших веб-страниц! Так что будьте осторожны с этим.</p>
    </div>
    <hr>

    <h2>Стилизация Google шрифтов</h2>
    <p>Конечно, вы можете стилизовать Google шрифты по своему усмотрению с помощью CSS!</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <p>Стиль шрифта &quot;Sofia&quot;:</p>
        <div class='w3-code notranslate htmlHigh'>
            &lt;head&gt;<br><strong>&lt;link rel=&quot;stylesheet&quot;
                href=&quot;https://fonts.googleapis.com/css?family=Sofia&quot;&gt;</strong><br>&lt;style&gt;<br>body {<br>&nbsp;
            font-family: &quot;Sofia&quot;, sans-serif;<br>&nbsp; font-size: 30px;<br>&nbsp;
            text-shadow: 3px 3px 3px #ababab;<br>}<br>&lt;/style&gt;<br>&lt;/head&gt;<br></div>
        <p>Результат:</p>
        <div class='w3-code notranslate'>
            <h1 style='font-family:"Sofia",sans-serif;font-size:50px;text-shadow:3px 3px 3px #ababab;'>Sofia шрифт</h1>
            <p style='font-family:"Sofia",sans-serif;font-size:30px;text-shadow:3px 3px 3px #ababab;'>Lorem ipsum dolor sit amet.</p>
            <p style='font-family:"Sofia",sans-serif;font-size:30px;text-shadow:3px 3px 3px #ababab;'>123456790</p></div>
        <a target='_blank' href='../csstryit/trycss_font-google_sofia2.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Включение эффектов шрифта</h2>
    <p>Google также включил различные эффекты шрифтов, которые вы можете использовать.</p>
    <p>Сначала добавьте <code class='w3-codespan'>effect=<em>effectname</em></code> к Google API, затем добавьте имя специального класса к элементуe, который будет использовать специальный эффект. Имя класса всегда начинается с <code class='w3-codespan'>font-effect-</code> и заканчивается с <code class='w3-codespan'><em>effectname</em></code>.</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <p>Добавьте эффект огня к шрифту &quot;Sofia&quot;:</p>
        <div class='w3-code notranslate htmlHigh'>
            &lt;head&gt;<br><strong>&lt;link rel=&quot;stylesheet&quot;
                href=&quot;https://fonts.googleapis.com/css?family=Sofia&amp;effect=fire&quot;&gt;</strong><br>&lt;style&gt;<br>body {<br>&nbsp;
            font-family: &quot;Sofia&quot;, sans-serif;<br>&nbsp; font-size: 30px;<br>}<br>&lt;/style&gt;<br>&lt;/head&gt;<br>
            &lt;body&gt;<br><br>&lt;h1 class=&quot;font-effect-fire&quot;&gt;София в огне&lt;/h1&gt;<br><br>&lt;/body&gt;<br></div>
        <p>Результат:</p>
        <div class='w3-code notranslate'>
            <h1 style='font-family:"Sofia",sans-serif;font-size:50px;' class='font-effect-fire'>София в огне</h1>
        </div>
        <a target='_blank' href='../csstryit/trycss_font-google_effect.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <p>Чтобы запросить несколько эффектов шрифта, просто разделите имена эффектов вертикальной чертой (<code class='w3-codespan'>|</code>), как здесь:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <p>Добавьте несколько эффектов к шрифту &quot;Sofia&quot;:</p>
        <div class='w3-code notranslate htmlHigh'>
            &lt;head&gt;<br><strong>&lt;link rel=&quot;stylesheet&quot;
                href=&quot;https://fonts.googleapis.com/css?family=Sofia&amp;effect=neon|outline|emboss|shadow-multiple&quot;&gt;</strong><br>&lt;style&gt;<br>body {<br>&nbsp;
            font-family: &quot;Sofia&quot;, sans-serif;<br>&nbsp; font-size: 30px;<br>}<br>&lt;/style&gt;<br>&lt;/head&gt;<br>
            &lt;body&gt;<br><br>&lt;h1 class=&quot;font-effect-neon&quot;&gt;Неоновый эффект&lt;/h1&gt;<br>&lt;h1 class=&quot;font-effect-outline&quot;&gt;Эффект контура&lt;/h1&gt;<br>&lt;h1 class=&quot;font-effect-emboss&quot;&gt;Эффект тиснения&lt;/h1&gt;<br>&lt;h1 class=&quot;font-effect-shadow-multiple&quot;&gt;Эффект множественной тени&lt;/h1&gt;<br><br>&lt;/body&gt;<br></div>
        <p>Результат:</p>
        <div class='w3-code notranslate'>
            <h1 style='font-family:"Sofia",sans-serif;font-size:50px;' class='font-effect-neon'>Неоновый эффект</h1>
            <h1 style='font-family:"Sofia",sans-serif;font-size:50px;' class='font-effect-outline'>Эффект контура</h1>
            <h1 style='font-family:"Sofia",sans-serif;font-size:50px;' class='font-effect-emboss'>Эффект тиснения</h1>
            <h1 style='font-family:"Sofia",sans-serif;font-size:50px;' class='font-effect-shadow-multiple'>Эффект множественной тени</h1>
        </div>
        <a target='_blank' href='../csstryit/trycss_font-google_effect2.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <p><b>Примечание.</b> Google шрифты будут работать, только если вы подключены к Интернету.</p>
    <hr>
    <p>Все Google шрифты доступны на сайте Google по ссылке <a href="https://fonts.google.com/" target="_blank" rel="nofollow">https://fonts.google.com/</a>.</p>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='css_font_size.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='css_font_pairings.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>