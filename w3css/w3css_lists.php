<?php include '../include/head.php'; ?>
    <title>W3.CSS Учебник. Списки. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='W3.CSS Списки. Как сделать списки на сайте. Отображение списков. Стилизация списков на веб-странице. Классы списков. Основной вид. В рамке. Заголовок списка. Как карточка. Центрирование. Цветной элемент списка. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_w3css.php'; ?>
<?php include '../include/before_content_w3css.php'; ?>

<article>
    <h1>W3.CSS <span class="color_h1">Списки</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_tables.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_images.php">Next &#10095;</a>
    </div>
    <hr>
    <ul class="w3-ul w3-card-4">
        <li class="w3-bar">
    <span onclick="this.parentElement.style.display='none'"
          class="w3-bar-item w3-button w3-white w3-xlarge w3-right">&times;</span>
            <img src="../images/img_avatar2.png" class="w3-bar-item w3-circle w3-hide-small" alt="Списки в W3.CSS" style="width:85px">
            <div class="w3-bar-item">
                <span class="w3-large">Mike</span><br>
                <span>Web Designer</span>
            </div>
        </li>

        <li class="w3-bar">
    <span onclick="this.parentElement.style.display='none'"
          class="w3-bar-item w3-button w3-white w3-xlarge w3-right">&times;</span>
            <img src="../images/img_avatar5.png" class="w3-bar-item w3-circle w3-hide-small" alt="Списки в W3.CSS" style="width:85px">
            <div class="w3-bar-item">
                <span class="w3-large">Jill</span><br>
                <span>Support</span>
            </div>
        </li>

        <li class="w3-bar">
    <span onclick="this.parentElement.style.display='none'"
          class="w3-bar-item w3-button w3-white w3-xlarge w3-right">&times;</span>
            <img src="../images/img_avatar6.png" class="w3-bar-item w3-circle w3-hide-small" alt="Списки в W3.CSS" style="width:85px">
            <div class="w3-bar-item">
                <span class="w3-large">Jane</span><br>
                <span>Accountant</span>
            </div>
        </li>
    </ul>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Основной список</h2>
    <p>Класс <strong>w3-ul</strong> используется для отображения основного списка:</p>
    <ul class="w3-ul">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul class=&quot;w3-ul&quot;&gt;<br>&nbsp; &lt;li&gt;Jill&lt;/li&gt;<br>&nbsp; &lt;li&gt;Eve&lt;/li&gt;<br>&nbsp; &lt;li&gt;Adam&lt;/li&gt;<br>
            &lt;/ul&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_lists.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Список в рамке</h2>
    <p>Класс <strong>w3-border</strong> добавляет рамку (границу) вокруг списка:</p>
    <ul class="w3-ul w3-border">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>
    <br>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul class=&quot;w3-ul w3-border&quot;&gt;<br>&nbsp; &lt;li&gt;Jill&lt;/li&gt;<br>&nbsp; &lt;li&gt;Eve&lt;/li&gt;<br>&nbsp;
            &lt;li&gt;Adam&lt;/li&gt;<br>&lt;/ul&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_lists_border.html" target="_blank">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Заголовок списка</h2>
    <p>Пример того, как добавить элемент заголовка в элемент списка:</p>
    <ul class="w3-ul w3-border">
        <li><h2>Имена</h2></li>
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>
    <br>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul class=&quot;w3-ul w3-border&quot;&gt;<br>&nbsp; &lt;li&gt;&lt;h2&gt;Имена&lt;/h2&gt;&lt;/li&gt;<br>&nbsp; &lt;li&gt;Jill&lt;/li&gt;<br>&nbsp; &lt;li&gt;Eve&lt;/li&gt;<br>&nbsp;
            &lt;li&gt;Adam&lt;/li&gt;<br>&lt;/ul&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_lists_header.html" target="_blank">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Список как карточка</h2>
    <p>Классы <strong>w3-card-<em>число</em></strong> могут быть использованы для отображения списка в виде карточки:</p>
    <ul class="w3-ul w3-card-4" style="width:50%">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>
    <br>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul class=&quot;w3-ul w3-card-4&quot; style=&quot;width:50%&quot;&gt;<br>&nbsp; &lt;li&gt;Jill&lt;/li&gt;<br>&nbsp; &lt;li&gt;Eve&lt;/li&gt;<br>&nbsp;
            &lt;li&gt;Adam&lt;/li&gt;<br>&lt;/ul&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_lists_card.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Центрированный список</h2>
    <p>Класс <strong>w3-center</strong> можно использовать для центрирования элементов списка в списке:</p>
    <ul class="w3-ul w3-center">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>
    <br>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul class=&quot;w3-ul w3-center&quot;&gt;<br>&nbsp; &lt;li&gt;Jill&lt;/li&gt;<br>&nbsp; &lt;li&gt;Eve&lt;/li&gt;<br>&nbsp;
            &lt;li&gt;Adam&lt;/li&gt;<br>&lt;/ul&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_lists_center.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Цветной список</h2>
    <p>Классы <strong>w3-<em>цвет</em></strong> могут быть использованы для добавления цвета в список:</p>
    <ul class="w3-ul w3-red">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>
    <hr>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul class=&quot;w3-ul w3-red&quot;&gt;<br>&nbsp; &lt;li&gt;Jill&lt;/li&gt;<br>&nbsp; &lt;li&gt;Eve&lt;/li&gt;<br>&nbsp;
            &lt;li&gt;Adam&lt;/li&gt;<br>&lt;/ul&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_lists_red.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Цветной элемент списка</h2>
    <p>Классы <strong>w3-<em>цвет</em></strong> могут быть использованы для добавления цвета к элементу списка:</p>
    <ul class="w3-ul">
        <li class="w3-blue">Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>
    <br>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul class=&quot;w3-ul&quot;&gt;<br>&nbsp; &lt;li class=&quot;w3-blue&quot;&gt;Jill&lt;/li&gt;<br>&nbsp; &lt;li&gt;Eve&lt;/li&gt;<br>&nbsp;
            &lt;li&gt;Adam&lt;/li&gt;<br>&lt;/ul&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_lists_blue.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Список при наведении</h2>
    <p>Класс <strong>w3-hoverable</strong> добавляет серый цвет фона к каждому элементу списка при наведении курсора:</p>
    <ul class="w3-ul w3-hoverable">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>
    <br>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul class=&quot;w3-ul w3-hoverable&quot;&gt;<br>&nbsp; &lt;li&gt;Jill&lt;/li&gt;<br>&nbsp; &lt;li&gt;Eve&lt;/li&gt;<br>&nbsp;
            &lt;li&gt;Adam&lt;/li&gt;<br>&lt;/ul&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_lists_hoverable.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Если вам нужен определенный цвет при наведении, добавьте любой из классов <strong>w3-hover-<em>цвет</em></strong> к каждому єлементу &lt;li&gt;:</p>
    <ul class="w3-ul">
        <li class="w3-hover-red">Jill</li>
        <li class="w3-hover-blue">Eve</li>
        <li class="w3-hover-green">Adam</li>
    </ul>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul class=&quot;w3-ul&quot;&gt;<br>&nbsp; &lt;li class=&quot;w3-hover-red&quot;&gt;Jill&lt;/li&gt;<br>&nbsp; &lt;li class=&quot;w3-hover-blue&quot;&gt;Eve&lt;/li&gt;<br>&nbsp; &lt;li class=&quot;w3-hover-green&quot;&gt;Adam&lt;/li&gt;<br>&lt;/ul&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_lists_hoverable2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Закрываемый элемент списка</h2>
    <p>Нажмите на «х», чтобы закрыть/скрыть элемент списка:</p>
    <ul class="w3-ul w3-card-4" style="width:50%">
        <li class="w3-display-container">Jill <span onclick="this.parentElement.style.display='none'"
                                                    class="w3-button w3-transparent w3-medium w3-display-right">&times;</span></li>
        <li class="w3-display-container">Adam <span onclick="this.parentElement.style.display='none'"
                                                    class="w3-button w3-transparent w3-medium w3-display-right">&times;</span></li>
        <li class="w3-display-container">Eve <span onclick="this.parentElement.style.display='none'"
                                                   class="w3-button w3-transparent w3-medium w3-display-right">&times;</span></li>
    </ul>
    <br>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;li class=&quot;w3-display-container&quot;&gt;Jill <br>&nbsp; &lt;span onclick="this.parentElement.style.display='none'"
            <br>&nbsp; class="w3-button w3-display-right"&gt;&amp;times;&lt;/span&gt;<br>&lt;/li&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_lists_close.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><b>Совет:</b> HTML сущность &amp;times; является предпочтительным значком для кнопок закрытия (вместо буквы &quot;X&quot;).</p>
    </div>
    <hr>

    <h2>Список с отступом (padding)</h2>
    <p>Классы <strong>w3-padding</strong> могут использоваться для добавления отступов к элементам списка:</p>

    <div class="w3-row">
        <div class="w3-half">
            <ul class="w3-ul w3-border" style="width:90%">
                <li class="w3-padding-small">Jill</li>
                <li class="w3-padding-small">Eve</li>
                <li class="w3-padding-small">Adam</li>
            </ul>
        </div>
        <div class="w3-half">
            <ul class="w3-ul w3-border" style="width:90%">
                <li class="w3-padding-large">Jill</li>
                <li class="w3-padding-large">Eve</li>
                <li class="w3-padding-large">Adam</li>
            </ul>
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul class=&quot;w3-ul&quot;&gt;<br>&nbsp; &lt;li class=&quot;w3-padding-small&quot;&gt;Jill&lt;/li&gt;<br>&nbsp; &lt;li
            class=&quot;w3-padding-small&quot;&gt;Eve&lt;/li&gt;<br>&nbsp;
            &lt;li class=&quot;w3-padding-small&quot;&gt;Adam&lt;/li&gt;<br>&lt;/ul&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_lists_padding.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Список аватаров</h2>
    <ul class="w3-ul w3-card-4">
        <li class="w3-bar">
    <span onclick="this.parentElement.style.display='none'"
          class="w3-bar-item w3-button w3-white w3-xlarge w3-right">&times;</span>
            <img src="../images/img_avatar2.png" class="w3-bar-item w3-circle w3-hide-small" alt="Списки в W3.CSS" style="width:85px">
            <div class="w3-bar-item">
                <span class="w3-large">Mike</span><br>
                <span>Web Designer</span>
            </div>
        </li>

        <li class="w3-bar">
    <span onclick="this.parentElement.style.display='none'"
          class="w3-bar-item w3-button w3-white w3-xlarge w3-right">&times;</span>
            <img src="../images/img_avatar5.png" class="w3-bar-item w3-circle w3-hide-small" alt="Списки в W3.CSS" style="width:85px">
            <div class="w3-bar-item">
                <span class="w3-large">Jill</span><br>
                <span>Support</span>
            </div>
        </li>

        <li class="w3-bar">
    <span onclick="this.parentElement.style.display='none'"
          class="w3-bar-item w3-button w3-white w3-xlarge w3-right">&times;</span>
            <img src="../images/img_avatar6.png" class="w3-bar-item w3-circle w3-hide-small" alt="Списки в W3.CSS" style="width:85px">
            <div class="w3-bar-item">
                <span class="w3-large">Jane</span><br>
                <span>Accountant</span>
            </div>
        </li>
    </ul>
    <br>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;li class=&quot;w3-bar&quot;&gt;<br>&nbsp; &lt;span onclick=&quot;this.parentElement.style.display='none'&quot;
            <br>&nbsp; class=&quot;w3-bar-item w3-button w3-xlarge w3-right&quot;&gt;&amp;times;&lt;/span&gt;<br>&nbsp;
            &lt;img src=&quot;img_avatar2.png&quot; class=&quot;w3-bar-item w3-circle&quot; style=&quot;width:85px&quot;&gt;<br>&nbsp;
            &lt;div class=&quot;w3-bar-item&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;span
            class=&quot;w3-large&quot;&gt;Mike&lt;/span&gt;&lt;br&gt;<br>&nbsp;&nbsp;&nbsp; &lt;span&gt;Web
            Designer&lt;/span&gt;<br>&nbsp; &lt;/div&gt;<br>&lt;/li&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_lists_avatar.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><b>Совет:</b> Вы узнаете больше о классах w3-bar в разделах <a href="w3css_bars.php">W3.CSS бари</a> и <a href="w3css_navigation.php">W3.CSS Навигация</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Ширина списка</h2>
    <p>Списки имеют ширину 100% по умолчанию. Используйте свойство width, чтобы изменить это.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul class=&quot;w3-ul&quot; style=&quot;width:30%&quot;&gt;<br>&nbsp; &lt;li&gt;Jill&lt;/li&gt;<br>&nbsp; &lt;li&gt;Eve&lt;/li&gt;<br>&nbsp;
            &lt;li&gt;Adam&lt;/li&gt;<br>&lt;/ul&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_lists_width.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>30% ширина:</p>
    <ul class="w3-ul w3-border" style="width:30%">
        <li>Jill</li>
        <li>Adam</li>
    </ul>

    <p>50% ширина:</p>
    <ul class="w3-ul w3-border" style="width:50%">
        <li>Jill</li>
        <li>Adam</li>
    </ul>

    <p>80% ширина:</p>
    <ul class="w3-ul w3-border" style="width:80%">
        <li>Jill</li>
        <li>Adam</li>
    </ul>
    <hr>

    <h2>Крошечный (tiny) список</h2>
    <p>Используйте класс <strong>w3-tiny</strong> чтобы отобразить крошечный (tiny) список:</p>

    <ul class="w3-ul w3-tiny" style="width:50%">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul class=&quot;w3-ul w3-tiny&quot;&gt;<br>&nbsp; &lt;li&gt;Jill&lt;/li&gt;<br>&nbsp; &lt;li&gt;Eve&lt;/li&gt;<br>&nbsp;
            &lt;li&gt;Adam&lt;/li&gt;<br>&lt;/ul&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_lists_tiny.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Маленький (small) список</h2>
    <p>Используйте класс <strong>w3-small</strong> чтобы отобразить маленький (small) список:</p>
    <ul class="w3-ul w3-small" style="width:50%">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul class=&quot;w3-ul w3-small&quot;&gt;<br>&nbsp; &lt;li&gt;Jill&lt;/li&gt;<br>&nbsp; &lt;li&gt;Eve&lt;/li&gt;<br>&nbsp;
            &lt;li&gt;Adam&lt;/li&gt;<br>&lt;/ul&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_lists_small.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Большой (large) список</h2>
    <p>Используйте класс <strong>w3-large</strong> чтобы отобразить большой (large) список:</p>
    <ul class="w3-ul w3-large" style="width:50%">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul class=&quot;w3-ul w3-large&quot;&gt;<br>&nbsp; &lt;li&gt;Jill&lt;/li&gt;<br>&nbsp; &lt;li&gt;Eve&lt;/li&gt;<br>&nbsp;
            &lt;li&gt;Adam&lt;/li&gt;<br>&lt;/ul&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_lists_large.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Экстра большой (xlarge) список</h2>
    <p>Используйте класс <strong>w3-xlarge</strong> чтобы отобразить экстра большой (xlarge) список:</p>
    <ul class="w3-ul w3-xlarge" style="width:50%">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul class=&quot;w3-ul w3-xlarge&quot;&gt;<br>&nbsp; &lt;li&gt;Jill&lt;/li&gt;<br>&nbsp; &lt;li&gt;Eve&lt;/li&gt;<br>&nbsp;
            &lt;li&gt;Adam&lt;/li&gt;<br>&lt;/ul&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_lists_xlarge.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>XXLarge список</h2>
    <p>Используйте класс <strong>w3-xxlarge</strong> чтобы отобразить XXLarge список:</p>
    <ul class="w3-ul w3-xxlarge" style="width:50%">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul class=&quot;w3-ul w3-xxlarge&quot;&gt;<br>&nbsp; &lt;li&gt;Jill&lt;/li&gt;<br>&nbsp; &lt;li&gt;Eve&lt;/li&gt;<br>&nbsp;
            &lt;li&gt;Adam&lt;/li&gt;<br>&lt;/ul&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_lists_xxlarge.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>XXXLarge список</h2>
    <p>Используйте класс <strong>w3-xxxlarge</strong> чтобы отобразить XXXLarge список:</p>
    <ul class="w3-ul w3-xxxlarge" style="width:50%">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul class=&quot;w3-ul w3-xxxlarge&quot;&gt;<br>&nbsp; &lt;li&gt;Jill&lt;/li&gt;<br>&nbsp; &lt;li&gt;Eve&lt;/li&gt;<br>&nbsp;
            &lt;li&gt;Adam&lt;/li&gt;<br>&lt;/ul&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_lists_xxxlarge.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Гигантский (jumbo) список</h2>
    <p>Используйте класс <strong>w3-jumbo</strong> чтобы отобразить огромный &quot;jumbo&quot; список:</p>
    <ul class="w3-ul w3-jumbo" style="width:50%">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>
    <br>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;ul class=&quot;w3-ul w3-jumbo&quot;&gt;<br>&nbsp; &lt;li&gt;Jill&lt;/li&gt;<br>&nbsp; &lt;li&gt;Eve&lt;/li&gt;<br>&nbsp;
            &lt;li&gt;Adam&lt;/li&gt;<br>&lt;/ul&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_lists_jumbo.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_tables.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_images.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>