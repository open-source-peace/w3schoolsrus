<?php include '../include/head.php'; ?>
    <title>W3.CSS Учебник. Изображения. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='W3.CSS Изображения. Как вставить изображения на сайте. Стилизация изображений на веб-странице. Классы изображений. Закругленное изображение, с границей, в виде карточки, текст на изображении, адаптивные, непрозрачность, оттенки серого, сепия. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_w3css.php'; ?>
<?php include '../include/before_content_w3css.php'; ?>

<article>
    <h1>W3.CSS <span class="color_h1">Изображения</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_lists.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_input.php">Next &#10095;</a>
    </div>
    <hr>

    <div class="w3-row-padding" style="margin-left:-16px;margin-right:-16px;">
        <div class="w3-quarter">
            <p>Закругленное изображение:</p>
            <img src="../images/img_lights.jpg" class="w3-round testsm" alt="Northern Lights" style="width:85%">
        </div>
        <div class="w3-quarter">
            <p>Круглое изображение:</p>
            <img src="../images/img_forest.jpg" class="w3-circle testsm" alt="Forest" style="width:85%">
        </div>
        <div class="w3-quarter">
            <p>Изображение с границей:</p>
            <img src="../images/img_mountains.jpg" class="testsm w3-hover-opacity w3-border" alt="Mountains" style="padding:4px;width:85%">
        </div>
        <div class="w3-quarter">
            <p>Текст на изображении:</p>
            <div class="w3-display-container">
                <img src="../images/img_nature.jpg" alt="Nature" style="width:85%" class="w3-card-4 testsm">
                <div class="w3-display-bottomleft w3-text-white w3-container w3-padding" style="width:85%">Природа</div>
            </div>
        </div>
    </div>
    <div style="clear:both;margin-bottom:28px;"></div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Закругленное изображение</h2>
    <img src="../images/img_snowtops.jpg" class="w3-round" alt="Norway" style="width:35%">
    <p>Класс <strong>w3-round</strong> добавляет закругленные углы к изображению:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;img_snowtops.jpg&quot; class=&quot;w3-round&quot; alt=&quot;Norway&quot;&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_images_round.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Круглое изображение</h2>
    <img src="../images/img_snowtops.jpg" class="w3-circle" alt="Norway" style="width:35%">
    <p>Класс <strong>w3-circle</strong> формирует изображение в круг:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;snowtops.jpg&quot; class=&quot;w3-circle&quot; alt=&quot;Alps"&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_images_circle.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Изображение с границей</h2>
    <img src="../images/img_snowtops.jpg" class="w3-border" alt="Norway" style="padding:4px;width:40%">
    <p>Класс <strong>w3-border</strong> добавляет границы вокруг изображения:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;snowtops.jpg&quot; class=&quot;w3-border w3-padding&quot; alt=&quot;Alps"&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_images_border.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Изображение как карточка</h2>
    <p>Оберните любой из классов <strong>w3-card-*</strong> вокруг элемента &lt;img&gt; чтобы отобразить его как карточку (добавьте тени):</p>

    <div class="w3-row">
        <div class="w3-half">
            <div class="w3-card-4 test" style="width:90%">
                <img src="../images/img_lights.jpg" alt="Lights" style="width:100%">
            </div>
            <br>
        </div>
        <div class="w3-half">
            <div class="w3-card-4 test" style="width:60%">
                <img src="../images/img_avatar3.png" alt="Админ всех админов" style="width:100%">
                <div class="w3-container">
                    <h4><b>Вася</b></h4>
                    <p>Админ всех админов</p>
                </div>
            </div>
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-card-4&quot;&gt;<br>
            &nbsp; &lt;img src=&quot;img_avatar.png&quot;
            alt=&quot;Админ всех админов&quot;&gt;<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_images_card.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Текст на изображении</h2>
    <p>Разместите текст на изображении с помощью <strong>w3-display-</strong><em><strong>классов</strong></em>:</p>
    <div class="w3-display-container w3-text-white">
        <img src="../images/img_lights.jpg" alt="Lights" style="width:100%;height:300px">
        <div class="w3-display-topleft w3-container"><p>Top Left</p></div>
        <div class="w3-display-topright w3-container"><p>Top Right</p></div>
        <div class="w3-display-bottomleft w3-container"><p>Bottom Left</p></div>
        <div class="w3-display-bottomright w3-container"><p>Bottom Right</p></div>
        <div class="w3-display-left w3-container"><p>Left</p></div>
        <div class="w3-display-right w3-container"><p>Right</p></div>
        <div class="w3-display-middle w3-large">Middle</div>
        <div class="w3-display-topmiddle w3-container"><p>Top Middle</p></div>
        <div class="w3-display-bottommiddle w3-container"><p>Bottom Middle</p></div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-display-container&quot;&gt;<br>&nbsp; &lt;img src=&quot;img_lights.jpg&quot;
            alt=&quot;Lights&quot;&gt;<br>&nbsp; &lt;div class=&quot;w3-display-topleft w3-container&quot;&gt;Top
            Left&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;w3-display-topright w3-container&quot;&gt;Top
            Right&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;w3-display-bottomleft w3-container&quot;&gt;Bottom
            Left&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;w3-display-bottomright w3-container&quot;&gt;Bottom
            Right&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;w3-display-left w3-container&quot;&gt;Left&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;w3-display-right w3-container&quot;&gt;Right&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;w3-display-middle w3-large&quot;&gt;Middle&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;w3-display-topmiddle w3-container&quot;&gt;Top Middle&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;w3-display-bottommiddle w3-container&quot;&gt;Bottom Middle&lt;/div&gt;<br>
            &lt;/div&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_images_text.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Адаптивные изображения</h2>
    <p>Изображение может быть настроено на автоматическое изменение размера в соответствии с размером его контейнера.</p>
    <p>Если вы хотите, чтобы изображение уменьшалось, но оно не должно быть больше исходного размера, используйте класс w3-image.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;img_lights.jpg&quot;
            alt=&quot;Lights&quot; class=&quot;w3-image&quot;&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_images_w3image.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Если вы хотите, чтобы изображение реагировало на увеличение и уменьшение масштаба, установите для CSS свойства width значение 100%:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;img_lights.jpg&quot;
            alt=&quot;Lights&quot; style=&quot;width:100%&quot;&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_images_responsive.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Если вы хотите ограничить адаптивное изображение максимальным размером, используйте свойство max-width:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;img_lights.jpg&quot;
            alt=&quot;Lights&quot; style=&quot;width:100%;max-width:400px&quot;&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_images_max.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Непрозрачность / Opacity</h2>
    <p>Классы <strong>w3-opacity</strong> делают изображения прозрачными:</p>
    <div class="w3-row-padding" style="margin:0 -16px">

        <div class="w3-quarter w3-center">
            <img src="../images/img_forest.jpg" style="width:100%" alt="Непрозрачность">
            <p>Обычное</p>
        </div>

        <div class="w3-quarter w3-center">
            <img src="../images/img_forest.jpg" class="w3-opacity-min" alt="Непрозрачность" style="width:100%;">
            <p>w3-opacity-min</p>
        </div>


        <div class="w3-quarter w3-center">
            <img src="../images/img_forest.jpg" class="w3-opacity" alt="Непрозрачность" style="width:100%;">
            <p>w3-opacity</p>
        </div>

        <div class="w3-quarter w3-center">
            <img src="../images/img_forest.jpg" class="w3-opacity-max" alt="Непрозрачность" style="width:100%;">
            <p>w3-opacity-max<p>
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;img_forest.jpg&quot; alt=&quot;Forest&quot; class=&quot;w3-opacity-min&quot;&gt;
            <br>&lt;img src=&quot;img_forest.jpg&quot; alt=&quot;Forest&quot; class=&quot;w3-opacity&quot;&gt;
            <br>&lt;img src=&quot;img_forest.jpg&quot; alt=&quot;Forest&quot; class=&quot;w3-opacity-max&quot;&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_images_opacity.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Оттенки серого</h2>
    <p>Классы <strong>w3-grayscale</strong> добавляют эффект серого к изображению:</p>
    <div class="w3-row-padding" style="margin:0 -16px">

        <div class="w3-quarter w3-center">
            <img src="../images/img_workshop.jpg" style="width:100%" alt="Эффект серого на изображении">
            <div class="w3-center w3-container">
                <p>Обычное</p>
            </div>
        </div>

        <div class="w3-quarter w3-center w3-grayscale-min">
            <img src="../images/img_workshop.jpg" style="width:100%;" alt="Эффект серого на изображении">
            <div class="w3-center w3-container">
                <p>w3-grayscale-min</p>
            </div>
        </div>

        <div class="w3-quarter w3-center w3-grayscale">
            <img src="../images/img_workshop.jpg" style="width:100%;" alt="Эффект серого на изображении">
            <div class="w3-center w3-container">
                <p>w3-grayscale</p>
            </div>
        </div>

        <div class="w3-quarter w3-center w3-grayscale-max">
            <img src="../images/img_workshop.jpg" style="width:100%;" alt="Эффект серого на изображении">
            <div class="w3-center w3-container">
                <p>w3-grayscale-max<p>
            </div>
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;image.jpg&quot; alt=&quot;Table&quot; class=&quot;w3-grayscale-min&quot;&gt;
            <br>&lt;img src=&quot;image.jpg&quot; alt=&quot;Table&quot; class=&quot;w3-grayscale&quot;&gt;
            <br>&lt;img src=&quot;image.jpg&quot; alt=&quot;Table&quot; class=&quot;w3-grayscale-max&quot;&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_images_grayscale.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-note w3-panel">
        <p><b>Примечание:</b> Классы w3-grayscale не поддерживаются в IE 11 и более ранних версиях.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Сепия</h2>
    <p>Классы <strong>w3-sepia</strong> добавляют эффект сепии к изображению:</p>
    <div class="w3-row-padding" style="margin:0 -16px">

        <div class="w3-quarter w3-center">
            <img src="../images/img_workshop.jpg" style="width:100%" alt="Эффект сепия на изображении отсутствует">
            <div class="w3-center w3-container">
                <p>Обычное</p>
            </div>
        </div>

        <div class="w3-quarter w3-center w3-sepia-min">
            <img src="../images/img_workshop.jpg" style="width:100%;" alt="Минимальный эффект сепия на изображении">
            <div class="w3-center w3-container">
                <p>w3-sepia-min</p>
            </div>
        </div>

        <div class="w3-quarter w3-center w3-sepia">
            <img src="../images/img_workshop.jpg" style="width:100%;" alt="Эффект сепия на изображении">
            <div class="w3-center w3-container">
                <p>w3-sepia</p>
            </div>
        </div>

        <div class="w3-quarter w3-center w3-sepia-max">
            <img src="../images/img_workshop.jpg" style="width:100%;" alt="Максимальный эффект сепия на изображении">
            <div class="w3-center w3-container">
                <p>w3-sepia-max<p>
            </div>
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;image.jpg&quot; alt=&quot;Table&quot; class=&quot;w3-sepia-min&quot;&gt;
            <br>&lt;img src=&quot;image.jpg&quot; alt=&quot;Table&quot; class=&quot;w3-sepia&quot;&gt;
            <br>&lt;img src=&quot;image.jpg&quot; alt=&quot;Table&quot; class=&quot;w3-sepia-max&quot;&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_images_sepia.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-note w3-panel">
        <p><b>Примечание:</b> Классы w3-sepia не поддерживаются в IE 11 и более ранних версиях.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Эффекты при наведении</h2>
    <p>Вы также можете добавить специальные эффекты при наведении курсора мыши.</p>
    <div class="w3-row-padding" style="margin:0 -16px">

        <div class="w3-third w3-center w3-hover-opacity">
            <img src="../images/streetart2.jpg" alt="Norway" style="width:100%;margin-bottom:-9px">
            <div class="w3-center w3-container">
                <p>w3-hover-opacity</p>
            </div>
        </div>

        <div class="w3-third w3-center w3-hover-grayscale">
            <img src="../images/streetart2.jpg" alt="Norway" style="width:100%;margin-bottom:-9px">
            <div class="w3-center w3-container">
                <p>w3-hover-grayscale</p>
            </div>
        </div>


        <div class="w3-third w3-center w3-hover-sepia">
            <img src="../images/streetart2.jpg" alt="Norway" style="width:100%;margin-bottom:-9px">
            <div class="w3-center w3-container">
                <p>w3-hover-sepia</p>
            </div>
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;image.jpg&quot; alt=&quot;Einstein&quot; class=&quot;w3-hover-opacity&quot;&gt;<br>&lt;img src=&quot;image.jpg&quot; alt=&quot;Einstein&quot; class=&quot;w3-hover-grayscale&quot;&gt;<br>&lt;img src=&quot;image.jpg&quot; alt=&quot;Einstein&quot; class=&quot;w3-hover-sepia&quot;&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_images_hover_eff.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Непрозрачность выключена</h2>
    <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half">
            <p>Добавить прозрачность при наведении:</p>
            <img src="../images/img_snow_wide.jpg" class="w3-hover-opacity" alt="Norway" style="width:100%">
        </div>
        <div class="w3-half">
            <p>Удалить прозрачность при наведении:</p>
            <img src="../images/img_snow_wide.jpg" class="w3-opacity w3-hover-opacity-off" alt="Norway" style="width:100%">
        </div>
    </div>

    <p>Класс <strong>w3-hover-opacity</strong> добавляет прозрачность изображению при наведении мыши, а класс <strong>w3-hover-opacity-off</strong> удаляет прозрачность при наведении курсора.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;snowtops.jpg&quot; class=&quot;w3-hover-opacity&quot; alt=&quot;Alps"&gt;
            <br>&lt;img src=&quot;snowtops.jpg&quot; class=&quot;w3-opacity w3-hover-opacity-off&quot; alt=&quot;Альпы"&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_images_hover.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Создание фотоальбома</h2>
    <p>В этом примере мы используем систему Responsive Grid W3.CSS (адаптивная сетка W3.CSS) для создания фотоальбома, который хорошо выглядит на всех устройствах. Вы узнаете больше об этом позже.</p>

    <div class="w3-container w3-theme">
        <h1>Лето 2015</h1>
    </div>

    <div class="w3-row-padding w3-margin-top">
        <div class="w3-third">
            <div class="w3-card">
                <img src="../images/img_5terre.jpg" style="width:100%" alt="Создание фотоальбома с помощью W3.CSS">
                <div class="w3-container">
                    <h4>5 Terre</h4>
                </div>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card">
                <img src="../images/img_monterosso.jpg" style="width:100%" alt="Создание фотоальбома с помощью W3.CSS">
                <div class="w3-container">
                    <h4>Monterosso</h4>
                </div>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card">
                <img src="../images/img_vernazza.jpg" style="width:100%" alt="Создание фотоальбома с помощью W3.CSS">
                <div class="w3-container">
                    <h4>Vernazza</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="w3-row-padding w3-margin-top">
        <div class="w3-third">
            <div class="w3-card">
                <img src="../images/img_manarola.jpg" style="width:100%" alt="Создание фотоальбома с помощью W3.CSS">
                <div class="w3-container">
                    <h4>Manarola</h4>
                </div>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card">
                <img src="../images/img_corniglia.jpg" style="width:100%" alt="Создание фотоальбома с помощью W3.CSS">
                <div class="w3-container">
                    <h4>Corniglia</h4>
                </div>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card">
                <img src="../images/img_riomaggiore.jpg" style="width:100%" alt="Создание фотоальбома с помощью W3.CSS">
                <div class="w3-container">
                    <h4>Riomaggiore</h4>
                </div>
            </div>
        </div>
        <br>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-third&quot;&gt;<br>&nbsp; &lt;div class=&quot;w3-card&quot;&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;img src=&quot;img_monterosso.jpg&quot; style=&quot;width:100%&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;div
            class=&quot;w3-container&quot;&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;h4&gt;Monterosso&lt;/h4&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;/div&gt;<br>&nbsp; &lt;/div&gt;<br>&lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_images_album.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_lists.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_input.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>