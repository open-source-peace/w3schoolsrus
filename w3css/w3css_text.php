<?php include '../include/head.php'; ?>
    <title>W3.CSS Учебник. Текст. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='W3.CSS Текст. Выравнивание текста на веб-странице. Центрирование элементов. Широкий текст. Непрозрачность текста. Создание тени. Спецэффекты текста.  <?php include '../include/description.php'; ?>'>
    
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_w3css.php'; ?>
<?php include '../include/before_content_w3css.php'; ?>

<article>
    <h1>W3.CSS <span class="color_h1">Текст</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_fonts_google.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_round.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Выравнивание текста</h2>
    <p>Классы <strong>w3-left-align</strong> и <strong>w3-right-align</strong> используются для выравнивания текста.</p>
    <div class="w3-container w3-border w3-large">
        <div class="w3-left-align"><p>Выровненный по левому краю текст.</p></div>
        <div class="w3-right-align"><p>Выровненный по правому краю текст.</p></div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-container w3-border w3-large&quot;&gt;<br>&nbsp; &lt;div class=&quot;w3-left-align&quot;&gt;&lt;p&gt;Выровненный по левому краю текст.&lt;/p&gt;&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;w3-right-align&quot;&gt;&lt;p&gt;Выровненный по правому краю текст.&lt;/p&gt;&lt;/div&gt;<br>&lt;/div&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_text_aligned.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Центрирование элементы</h2>
    <p>Класс <strong>w3-center</strong> используется для выравнивания элементов по центру (центрирования):</p>
    <div class="w3-container w3-center">
        <h2>Центрированный контент</h2>
        <img src="../images/img_car.jpg" alt="Центрированное изображение" style="width:80%;max-width:320px">
        <p>Какой-то центрированный текст.</p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-container w3-center&quot;&gt;<br>
            &nbsp; &lt;h2&gt;Центрированный контент&lt;/h2&gt;<br>
            &nbsp; &lt;img src=&quot;img_car.jpg&quot; alt=&quot;автомобиль&quot; style=&quot;width:80%;max-width:320px&quot;&gt;<br>&nbsp; &lt;p&gt;Какой-то центрированный текст.&lt;/p&gt;<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_text_center.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Широкий текст</h2>
    <p>Класс <strong>w3-wide</strong> определяет более широкий текст:</p>
    <p>Этот текст обычный.</p>
    <p class="w3-wide">Этот текст шире.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p class=&quot;w3-wide&quot;&gt;Класс w3-wide определяет более широкий текст.&lt;/p&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_text_wide.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Непрозрачность текста</h2>
    <p>Класс <strong>w3-opacity</strong> предназначен для работы со всеми цветами:</p>

    <div class="w3-panel w3-pink">
        <h2 class="w3-opacity">Непрозрачность текста</h2>
    </div>

    <div class="w3-panel w3-blue">
        <h2 class="w3-opacity">Непрозрачность текста</h2>
    </div>

    <div class="w3-panel w3-orange">
        <h2 class="w3-opacity">Непрозрачность текста</h2>
    </div>

    <div class="w3-panel w3-black">
        <h2 class="w3-opacity">Непрозрачность текста</h2>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-pink&quot;&gt;<br>
            &nbsp; &lt;h2 class=&quot;w3-opacity&quot;&gt;Непрозрачность текста&lt;/h2&gt;<br>&lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_text_opacity.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Тень текста</h2>
    <p>Свойство CSS3 text-shadow можно использовать для добавления к тексту эффектов тени или размытия:</p>
    <div class="w3-container w3-white w3-border">
        <h2 style="text-shadow:1px 1px 0 #444">Тень текста</h2>
    </div>
    <br>
    <div class="w3-container w3-light-grey">
        <h2 style="text-shadow:1px 1px 0 #444">Тень текста</h2>
    </div>
    <br>
    <div class="w3-container w3-blue">
        <h2 style="text-shadow:1px 1px 0 #444">Тень текста</h2>
    </div>
    <br>
    <div class="w3-container w3-green">
        <h2 style="text-shadow:1px 1px 0 #444">Тень текста</h2>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;h2 class=&quot;w3-blue&quot; style=&quot;text-shadow:1px 1px 0 #444&quot;&gt;Тень текста&lt;/h2&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_text_shadow.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Спецэффекты для текста</h2>
    <div class="w3-panel w3-pink">
        <h1 class="w3-opacity"><b>Непрозрачность текста + Жирный текст</b></h1>
    </div>

    <div class="w3-panel w3-amber">
        <h1 class="w3-text-yellow" style="text-shadow:1px 1px 0 #444"><b>Желтый текст + Тень + Жирный текст</b></h1>
    </div>

    <div class="w3-panel w3-blue">
        <h1 class="w3-text-orange" style="text-shadow:1px 1px 0 #444"><b>Оранжевый текст + Тень + Жирный текст</b></h1>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-panel w3-pink&quot;&gt;<br>&nbsp; &lt;h1 class=&quot;w3-opacity&quot;&gt;<br>&nbsp; &lt;b&gt;Непрозрачность текста + Жирный текст&lt;/b&gt;&lt;/h1&gt;<br>&lt;/div&gt;<br><br>&lt;div class=&quot;w3-panel w3-amber&quot;&gt;<br>&nbsp; &lt;h1 class=&quot;w3-text-yellow&quot;
            style=&quot;text-shadow:1px 1px 0 #444&quot;&gt;<br>&nbsp; &lt;b&gt;Желтый текст + Тень + Жирный текст&lt;/b&gt;&lt;/h1&gt;<br>&lt;/div&gt;<br><br>&lt;div class=&quot;w3-panel w3-blue&quot;&gt;<br>&nbsp; &lt;h1 class=&quot;w3-text-orange&quot;
            style=&quot;text-shadow:1px 1px 0 #444&quot;&gt;<br>&nbsp; &lt;b&gt;Оранжевый текст + Тень + Жирный текст&lt;/b&gt;&lt;/h1&gt;<br>&lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_text_special.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p>Тень текста не работает в IE 9 и более ранних версиях.</p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_fonts_google.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_round.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>