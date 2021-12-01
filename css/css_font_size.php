<?php include '../include/head.php'; ?>

  <title>CSS Размер шрифта. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Размер шрифта. Как изенить размер шрифты на веб-странице? Свойство font-size. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class='color_h1'>Размер шрифта</span></h1>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='css_font_style.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='css_font_google.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>Font Size - Размер шрифта</h2>
    <p>Свойство <code class='w3-codespan'>font-size</code> устанавливает размер текста.</p>
    <p>Возможность управлять размером текста важна в веб-дизайне. Однако не следует использовать настройку размера шрифта, чтобы параграфы выглядели как заголовки, а заголовки - как параграфы.</p>
    <p>Всегда используйте правильные теги HTML, например <code class="w3-codespan">&lt;h1&gt;</code> - <code class="w3-codespan">&lt;h6&gt;</code> для заголовков и <code class="w3-codespan">&lt;p&gt;</code> для параграфов.</p>
    <p>Значение font-size может быть абсолютным или относительным.</p>
    <p>Абсолютный размер:</p>
    <ul>
        <li>Устанавливает текст указанного размера</li>
        <li>Не позволяет пользователю изменять размер текста во всех браузерах (плохо по причинам доступности)</li>
        <li>Абсолютный размер полезен, когда известен физический размер вывода</li>
    </ul>
    <p>Относительный размер:</p>
    <ul>
        <li>Устанавливает размер относительно окружающих элементов</li>
        <li>Позволяет пользователю изменять размер текста в браузерах</li>
    </ul>
    <div class='w3-panel w3-note'>
        <p><strong>Примечание:</strong> Если вы не укажете размер шрифта, размер по умолчанию для обычного текста, например параграфов, будет 16px (16px=1em).</p>
    </div>
    <hr>

    <h2>Установить размер шрифта в пикселях</h2>
    <p>Установка размера текста в пикселях дает вам полный контроль над размером текста:</p>

    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate cssHigh'>
            h1 {<br>&nbsp;&nbsp;font-size: 40px;<br>}<br>
            <br>h2 {<br>&nbsp;&nbsp;font-size: 30px;<br>}<br>
            <br>p {<br>&nbsp;&nbsp;font-size: 14px;<br>}</div>
        <a target='_blank' href='../csstryit/trycss_font-size_px.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <p><strong>Совет:</strong> Если вы используете пиксели, вы все равно можете использовать инструмент масштабирования, чтобы изменить размер всей страницы.</p>
    <hr>

    <h2>Установить размер шрифта с помощью Em</h2>
    <p>Чтобы пользователи могли изменять размер текста (в меню браузера), многие разработчики используют <b>em</b> вместо пикселей.</p>
    <p>1em равно текущему размеру шрифта. Размер текста по умолчанию в браузерах составляет 16 пикселей. Итак, размер 1em по умолчанию составляет 16 пикселей.</p>
    <p>Размер можно рассчитать от пикселей до <b>em</b> по этой формуле:<i>pixels</i>/16=<i>em</i></p>

    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate cssHigh'>
            h1 {<br>&nbsp; font-size: 2.5em; /* 40px/16=2.5em */<br>}<br>
            <br>h2 {<br>&nbsp;&nbsp;font-size: 1.875em; /* 30px/16=1.875em */<br>
            }<br>
            <br>p {<br>&nbsp; font-size: 0.875em; /* 14px/16=0.875em */<br>}</div>
        <a target='_blank' href='../csstryit/trycss_font-size_em.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <p>В приведенном выше примере размер текста в <b>em</b> такой же, как в предыдущем примере в пикселях. Однако с помощью размера <b>em</b> можно настроить размер текста во всех браузерах.</p>
    <p>К сожалению, проблема со старыми версиями Internet Explorer все ещё существует. При увеличении текст становится больше, чем должен, и меньше, чем должен, при уменьшении.</p>
    <hr>

    <h2>Используйте комбинацию процентов и Em</h2>
    <p>Решение, которое работает во всех браузерах, - установить размер шрифта по умолчанию в процентах для элемента &lt;body&gt;:</p>

    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate cssHigh'>
            body {<br>&nbsp; font-size: 100%;<br>}<br>
            <br>h1 {<br>&nbsp; font-size: 2.5em;<br>}<br>
            <br>h2 {<br>&nbsp;&nbsp;font-size: 1.875em;<br>}<br>
            <br>p {<br>&nbsp; font-size: 0.875em;<br>}</div>
        <a target='_blank' href='../csstryit/trycss_font-size_percent_em.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <p>Теперь код отлично работает! Он показывает одинаковый размер текста во всех браузерах и позволяет всем браузерам увеличивать или изменять размер текста!</p>
    <hr>

    <h2>Адаптивный размер шрифта</h2>
    <p>Размер текста можно установить с помощью единицы <code class='w3-codespan'>vw</code>, что означает &quot;viewport width&quot; (ширина области просмотра).</p>
    <p>Таким образом, размер текста будет соответствовать размеру окна браузера:</p>

    <div class='w3-light-grey w3-padding w3-round'>
        <h1 style='font-size:8vw;'>Hello World</h1>
        <p style='font-size:2vw;'>Измените размер окна браузера, чтобы увидеть, как масштабируется размер шрифта.</p>
    </div>

    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;h1 style='<strong>font-size:10vw</strong>'&gt;Hello World&lt;/h1&gt;
        </div>
        <a class='w3-btn w3-margin-bottom' href='../csstryit/trycss_font_responsive.html' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-note w3-panel'>
        <p>Область просмотра (viewport) - это размер окна браузера. 1vw = 1% ширины области просмотра. Если ширина области просмотра 50 см, 1vw составляет 0,5 см.</p>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='css_font_style.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='css_font_google.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>