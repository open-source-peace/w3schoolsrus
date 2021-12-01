<?php include '../include/head.php'; ?>
    <title>W3.CSS Учебник. Контейнеры. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='W3.CSS Контейнеры. Класс контейнера w3-container. Заголовки и нижние колонтитулы. Статьи и разделы. Отступы. Стилизация. Учебник по фреймворку W3.CSS для начинающих. Готовые шаблоны. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_w3css.php'; ?>
<?php include '../include/before_content_w3css.php'; ?>

<article>
    <h1>W3.CSS <span class="color_h1">Контейнеры</span></h1>

    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_colors.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_panels.php">Next &#10095;</a>
    </div>

    <hr>
    <div class="w3-container w3-black">
        <h2>Это заголовок</h2>
    </div>

    <div class="w3-container w3-light-grey w3-text-brown">
        <h2>Это статья</h2>
        <p>Эта статья светло-серая, а текст коричневый. Эта статья светло-серая, а текст коричневый. Эта статья светло-серая, а текст коричневый. Эта статья светло-серая, а текст коричневый. Эта статья светло-серая, а текст коричневый.</p>
    </div>
    <div class="w3-container w3-dark-grey">
        <p>Это нижний колонтитул</p>
    </div>
    <hr>

    <h2>Класс контейнера</h2>
    <p>Класс <b>w3-container</b> добавляет 16px левый и правый отступ (padding) к любому элементу HTML.</p>
    <p>Класс <strong>w3-container</strong> является идеальным классом для использования на всех элементах контейнера HTML, таких как:</p>
    <p>&lt;div&gt;, &lt;article&gt;, &lt;section&gt;, &lt;header&gt;, &lt;footer&gt;, &lt;form&gt; и др.</p>
    <hr>

    <h2>Контейнеры обеспечивают равенство</h2>
    <p>Класс <strong>w3-container</strong> обеспечивает равенство для всех элементов контейнера HTML:</p>
    <ul>
        <li>Общие поля (margin)</li>
        <li>Общие отступы (padding)</li>
        <li>Общие выравнивания (align)</li>
        <li>Общие шрифты (font)</li>
        <li>Общие цвета (color)</li>
    </ul>
    <p>Чтобы использовать контейнер, просто добавьте класс <strong>w3-container</strong> к любому элементу:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class="w3-container"&gt;<br>
            &nbsp; &lt;p&gt;Класс w3-container является важным классом W3.CSS.&lt;/p&gt;<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_containers_div.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Чтобы добавить цвет, просто добавьте класс <strong>w3-</strong><em><strong>color</strong></em>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class="w3-container w3-red"&gt;<br>
            &nbsp; &lt;p&gt;Лондон является столицей Англии.&lt;/p&gt;<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_containers_color.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Заголовки (header) и нижние колонтитулы (footer) </h2>
    <p>Класс <strong>w3-container</strong> может использоваться для стилизации заголовков:</p>
    <div class="w3-container w3-teal">
        <h1>Header</h1>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class="w3-container w3-teal"&gt;<br>
            &nbsp; &lt;h1&gt;Header&lt;/h1&gt;<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_containers_div_header.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;header class="w3-container w3-teal"&gt;<br>
            &nbsp; &lt;h1&gt;Header&lt;/h1&gt;<br>
            &lt;/header&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_containers_header.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p>Нет разницы в том, как W3.CSS обрабатывает элементы &lt;div&gt; и &lt;header&gt;.</p>
    </div>

    <p>Класс <strong>w3-container</strong> может быть использован для оформления нижних колонтитулов:</p>
    <footer class="w3-container w3-teal">
        <h3>Footer</h3>
        <p>Информация нижнего колонтитула идет здесь</p>
    </footer>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class="w3-container w3-teal"&gt;<br>
            &nbsp; &lt;h5&gt;Footer&lt;/h5&gt;<br>
            &nbsp; &lt;p&gt;Информация нижнего колонтитула идет здесь&lt;/p&gt;<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_containers_div_footer.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;footer class="w3-container w3-teal"&gt;<br>
            &nbsp; &lt;h5&gt;Footer&lt;/h5&gt;<br>
            &nbsp; &lt;p&gt;Информация нижнего колонтитула идет здесь&lt;/p&gt;<br>
            &lt;/footer&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_containers_footer.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Многие веб-страницы используют элементы &lt;div&gt; вместо элементов &lt;header&gt; и &lt;footer&gt;.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Статьи (article) и разделы (section)</h2>
    <p style="margin-bottom:10px;">Класс <strong>w3-container</strong> может использоваться для стилизации элементов &lt;article&gt; и &lt;section&gt;:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class="w3-container"&gt; <br>&nbsp; &lt;h2&gt;London&lt;/h2&gt;<br>&nbsp; &lt;p&gt;London
            is the most populous city in the United Kingdom, <br>&nbsp; with a metropolitan area of over 9 million inhabitants.&lt;/p&gt;<br>&lt;/div&gt;<br><br>
            &lt;article class="w3-container"&gt; <br>&nbsp; &lt;h2&gt;Paris&lt;/h2&gt;<br>&nbsp; &lt;p&gt;The
            Paris area is one of the largest population centers in Europe, <br>&nbsp;
            with more than 2 million inhabitants.&lt;/p&gt;<br>&lt;/article&gt;<br><br>&lt;section
            class="w3-container"&gt; <br>&nbsp; &lt;h2&gt;Tokyo&lt;/h2&gt;<br>&nbsp; &lt;p&gt;Tokyo is the
            center of the Greater Tokyo Area, <br>&nbsp; and the most populous metropolitan area in the world.&lt;/p&gt;<br>&lt;/section&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_containers_article.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Многие веб-страницы используют элементы &lt;div&gt; вместо элементов &lt;article&gt; и &lt;section&gt;.</p>
    </div>
    <hr>

    <h2>Пример веб-страницы</h2>
    <div class="w3-container w3-red">
        <h1>Header</h1>
    </div>
    <img src="../images/img_car_js.jpg" alt="Автомобиль" style="width:100%">
    <p>Автомобиль - это самоходное транспортное средство на колесах, используемое для перевозки. В большинстве определений этого термина указано, что автомобили предназначены для движения в основном по дорогам. (Википедия)</p>

    <footer class="w3-container w3-red">
        <h3>Footer</h3>
    </footer>

    <div class="w3-example">
        <h3>Пример использования HTML элементов &lt;div&gt;</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class="w3-container w3-red"&gt;<br>&nbsp; &lt;h1&gt;Header&lt;/h1&gt;<br>
            &lt;/div&gt;<br><br>&lt;img src="img_car.jpg" alt="Автомобиль" style="width:100%"&gt;<br><br>&lt;div
            class="w3-container"&gt;<br>&nbsp; &lt;p&gt;Автомобиль - это самоходное транспортное средство на колесах, используемое для перевозки. В большинстве определений этого термина указано, что автомобили предназначены для движения в основном по дорогам. (Википедия)&lt;/p&gt;<br>&lt;/div&gt;<br><br>&lt;div class="w3-container
            w3-red"&gt;<br>&nbsp;
            &lt;h5&gt;Footer&lt;/h5&gt;<br>&lt;/div&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_containers_combined.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример использования семантических HTML элементов</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;header class="w3-container w3-teal"&gt;<br>&nbsp; &lt;h1&gt;Header&lt;/h1&gt;<br>
            &lt;/header&gt;<br><br>&lt;img src="../images/img_car.jpg" alt="Car" style="width:100%"&gt;<br><br>&lt;article
            class="w3-container"&gt;<br>&nbsp; &lt;p&gt;Автомобиль - это самоходное транспортное средство на колесах, используемое для перевозки. В большинстве определений этого термина указано, что автомобили предназначены для движения в основном по дорогам. (Википедия)&lt;/p&gt;<br>&lt;/article&gt;<br><br>&lt;footer class="w3-container w3-teal"&gt;<br>&nbsp;&lt;h5&gt;Footer&lt;/h5&gt;<br>&lt;/footer&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_containers_semantic_article.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Отступы (padding) контейнера</h2>
    <p>Класс <b>w3-container</b> имеет по умолчанию <strong>16px</strong> левый и правый отступы (padding), и не имеет отступов вверху и снизу:</p>
    <div class="w3-container w3-blue">
        У меня нет верхнего или нижнего отступа</div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-container w3-blue"&gt;<br>
            У меня нет верхнего или нижнего отступа.<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_containers_padding_default.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Как правило, вам не нужно изменять padding контейнера по умолчанию, поскольку параграфы и заголовок обеспечивают поля, которые будут имитировать padding.</p>

    <div class="w3-container w3-blue">
        <h1>Я заголовок</h1>
        <p>Я параграф.</p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-container w3-blue"&gt;<br>
            &nbsp; &lt;h1&gt;А заголовок&lt;/h1&gt;<br>&nbsp; &lt;p&gt;Я параграф.&lt;/p&gt;<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_containers_padding.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_colors.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_panels.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>