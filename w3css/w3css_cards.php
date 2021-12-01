<?php include '../include/head.php'; ?>
    <title>W3.CSS Учебник. Карточки. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='W3.CSS Карточки (Открытки). Классы карточек (открыток): w3-card, w3-card-2, w3-card-4. Цвет, содержание, фото-карточки, эффект при наведении мыши. Виджет погоды. Учебник по фреймворку W3.CSS для начинающих. Готовые шаблоны. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_w3css.php'; ?>
<?php include '../include/before_content_w3css.php'; ?>

<article>
    <h1>W3.CSS <span class="color_h1">Карточки (Открытки)</span></h1>

    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_borders.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_defaults.php">Next &#10095;</a>
    </div>
    <hr>

    <div class="w3-row w3-margin-top">
        <div class="w3-half">
            <div class="w3-card-4 test" style="width:92%;max-width:300px;">
                <img src="../images/img_avatar3.png" alt="Avatar" style="width:100%;opacity:0.85">
                <div class="w3-container">
                    <h4><b>Джон</b></h4>
                    <p>Архитектор и инженер</p>
                </div>
            </div>
            <br>
        </div>
        <div class="w3-half w3-hide-small">
            <div class="w3-card-4 test" style="width:97%">
                <header class="w3-container w3-blue">
                    <h1>Header</h1>
                </header>
                <div class="w3-container">
                    <p>Какой-то текст.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <footer class="w3-container w3-blue">
                    <h5>Footer</h5>
                </footer>

            </div>
        </div>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>W3.CSS Классы карточек (открыток)</h2>
    <p>W3.CSS предоставляет следующие классы для отображения бумажных карточек (открыток):</p>
    <table class="w3-table-all">
        <tr>
            <th>Класс</th>
            <th>Определяет</th>
        </tr>
        <tr>
            <td>w3-card</td>
            <td>То же, что w3-card-2</td>
        </tr>
        <tr>
            <td>w3-card-2</td>
            <td>Контейнер для любого HTML-контента (тень от 2px)</td>
        </tr>
        <tr>
            <td>w3-card-4</td>
            <td>Контейнер для любого HTML-контента (тень от 4px)</td>
        </tr>
    </table>
    <hr>

    <h2>Цветные карточки (открытки)</h2>
    <p>Чтобы отобразить цветные карточки, просто добавьте класс <strong>w3-<em>color</em></strong>:</p>
    <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-third">
            <div style="height:100px" class="w3-card w3-container w3-yellow w3-margin-bottom"><p>w3-card</p></div>
        </div>
        <div class="w3-third">
            <div style="height:100px" class="w3-card-2 w3-container w3-margin-bottom"><p>w3-card-2</p></div>
        </div>
        <div class="w3-third">
            <div style="height:100px" class="w3-card-4 w3-container w3-yellow w3-margin-bottom"><p>w3-card-4</p></div>
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример (Белые карточки)</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class="w3-card"&gt;<br>
            &nbsp;
            &lt;p&gt;w3-card&lt;/p&gt;<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_cards.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример (Желтые карточки)</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class="w3-card w3-yellow"&gt;<br>
            &nbsp;
            &lt;p&gt;w3-card&lt;/p&gt;<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_cards_yellow.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Содержание карточки</h2>
    <div class="w3-row">
        <div class="w3-card-4 xtest w3-col m8">
            <header class="w3-container w3-blue">
                <h1>Header</h1>
            </header>
            <div class="w3-container">
                <p>Какой-то текст.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <footer class="w3-container w3-blue">
                <h5>Footer</h5>
            </footer>

        </div>
    </div>
    <br>
    <p>Добавить контейнеры внутри карточки для создания различных разделов:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class="w3-card-4"&gt;<br><br>&lt;header class="w3-container w3-blue"&gt;<br>&nbsp;
            &lt;h1&gt;Header&lt;/h1&gt;<br>&lt;/header&gt;<br><br>&lt;div class="w3-container"&gt;<br>&nbsp;
            &lt;p&gt;Lorem ipsum...&lt;/p&gt;<br>&lt;/div&gt;<br><br>&lt;footer class="w3-container w3-blue"&gt;<br>&nbsp; &lt;h5&gt;Footer&lt;/h5&gt;<br>&lt;/footer&gt;<br>
            <br>&lt;/div&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_cards_depth.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Фото-карточки</h2>
    <div class="w3-card-4 test" style="width:50%;max-width:400px">
        <img src="../images/img_snowtops.jpg" alt="Альпы" style="width:100%">
        <div class="w3-container w3-center w3-padding">
            <p>Итальянские / Австрийские Альпы</p>
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class="w3-card-4"&gt;<br>&nbsp; &lt;img src="img_snowtops.jpg"
            alt="Alps"&gt;<br>&nbsp; &lt;div class=&quot;w3-container w3-center&quot;&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;p&gt;Итальянские / Австрийские Альпы&lt;/p&gt;<br>&nbsp; &lt;/div&gt;<br>&lt;/div&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_cards_photo.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Эффект при наведении мыши</h2>
    <p>Класс <strong>w3-hover-shadow</strong> добавляет эффект тени при наведении курсора - при наведении мыши любой элемент будет выглядеть как карточка (в том же стиле, что и w3-card-4).</p>
    <div class="w3-green w3-hover-shadow w3-padding-32 w3-center w3-container test" style="width:40%">
        <p>Наведите на меня!</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-green w3-hover-shadow w3-center&quot;&gt;<br>&nbsp; &lt;p&gt;Наведите на меня!&lt;/p&gt;<br>&lt;/div&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_cards_hover.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Больше примеров</h2>
    <div class="w3-card-4 test w3-dark-grey" style="width:50%;max-width:400px">

        <div class="w3-container w3-center">
            <h3>Запрос в друзья</h3>
            <img src="../images/img_avatar3.png" alt="Avatar" style="width:80%">
            <h4>John Doe</h4>
            <br>

            <button class="w3-button w3-green" style="width:49%">Принять</button>
            <button class="w3-button w3-red" style="width:49%">Отказать</button><br><br>
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-card-4 w3-dark-grey&quot;&gt;<br><br>&lt;div class=&quot;w3-container
            w3-center&quot;&gt;<br>&nbsp; &lt;h3&gt;Запрос в друзья&lt;/h3&gt;<br>&nbsp; &lt;img src=&quot;img_avatar3.png&quot;
            alt=&quot;Avatar&quot; style=&quot;width:80%&quot;&gt;<br>&nbsp; &lt;h5&gt;John
            Doe&lt;/h5&gt;<br>
            <br>&nbsp; &lt;button class=&quot;w3-button w3-green&quot;&gt;Принять&lt;/button&gt;<br>
            &nbsp; &lt;button class=&quot;w3-button w3-red&quot;&gt;Отказать&lt;/button&gt;<br>&lt;/div&gt;<br><br>&lt;/div&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_cards_buttons.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-card-4 test" style="width:50%;max-width:450px">
        <header class="w3-container w3-light-grey">
            <h3>John Doe</h3>
        </header>

        <div class="w3-container">
            <p>1 новый запрос о дружбе</p>
            <hr>
            <img src="../images/img_avatar3.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
            <p>Генеральный директор Mighty Schools. Маркетинг и реклама. Ищу новую работу и новые возможности.</p>
            <br>
        </div>
        <button class="w3-button w3-block w3-dark-grey">+ Connect</button>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-card-4&quot;&gt;<br><br>&lt;header class=&quot;w3-container w3-light-grey&quot;&gt;<br>
            &nbsp; &lt;h3&gt;John Doe&lt;/h3&gt;<br>&lt;/header&gt;<br><br>&lt;div
            class=&quot;w3-container&quot;&gt;<br>&nbsp; &lt;p&gt;1 новый запрос о дружбе&lt;/p&gt;<br>&nbsp; &lt;hr&gt;<br>&nbsp;
            &lt;img src=&quot;img_avatar3.png&quot; alt=&quot;Avatar&quot; class=&quot;w3-left w3-circle&quot;&gt;<br>&nbsp;
            &lt;p&gt;Генеральный директор Mighty Schools...&lt;/p&gt;<br>&lt;/div&gt;<br><br>&lt;button class=&quot;w3-button w3-block w3-dark-grey&quot;&gt;+ Connect&lt;/button&gt;<br><br>&lt;/div&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_cards_buttons2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Виджет Погоды</h2>
    <div class="w3-card-4" style="width:50%">
        <div class="w3-display-container w3-text-white">
            <img src="../images/img_london.jpg" alt="Lights" style="width:100%">
            <div class="w3-xlarge w3-display-bottomleft w3-padding">LONDON 60&deg; F</div>
        </div>
        <div class="w3-row">
            <div class="w3-third w3-center">
                <h3>MON</h3>
                <img src="../images/img_weather_sun.jpg" alt="Солнечная погода">
            </div>
            <div class="w3-third w3-center">
                <h3>TUE</h3>
                <img src="../images/img_weather_cloud.jpg" alt="Переменная облачность">
            </div>
            <div class="w3-third w3-center w3-margin-bottom">
                <h3>WED</h3>
                <img src="../images/img_weather_clouds.jpg" alt="Облачно">
            </div>
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-card-4&quot;&gt;<br>&nbsp; &lt;div
            class=&quot;w3-display-container w3-text-white&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;img src=&quot;img_london.jpg&quot;
            alt=&quot;Lights&quot; style=&quot;width:100%&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;div class=&quot;w3-xlarge w3-display-bottomleft
            w3-padding&quot;&gt;LONDON 60&amp;deg; F&lt;/div&gt;<br>&nbsp; &lt;/div&gt;<br>&nbsp; &lt;div class=&quot;w3-row&quot;&gt;<br>
            &nbsp;&nbsp;&nbsp;
            &lt;div class=&quot;w3-third w3-center&quot;&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;h3&gt;MON&lt;/h3&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;img src=&quot;img_weather_sun.jpg&quot;
            alt=&quot;sun&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>&nbsp;&nbsp;&nbsp; &lt;div class=&quot;w3-third w3-center&quot;&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;h3&gt;TUE&lt;/h3&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;img
            src=&quot;img_weather_cloud.jpg&quot; alt=&quot;cloud&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>&nbsp;&nbsp;&nbsp; &lt;div class=&quot;w3-third
            w3-center w3-margin-bottom&quot;&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;h3&gt;WED&lt;/h3&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;img src=&quot;img_weather_clouds.jpg&quot;
            alt=&quot;clouds&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>&nbsp; &lt;/div&gt;<br>&lt;/div&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_cards_widget.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_borders.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_defaults.php">Next &#10095;</a>
    </div>    
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>