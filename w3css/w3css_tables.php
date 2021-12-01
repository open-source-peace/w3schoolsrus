<?php include '../include/head.php'; ?>
    <title>W3.CSS Учебник. Таблицы. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='W3.CSS Оповещения. Как сделать таблицы на сайте. Отображение таблиц. Стилизация таблиц на веб-странице. Классы таблицы. Центрирование. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_w3css.php'; ?>
<?php include '../include/before_content_w3css.php'; ?>

<article>
    <h1>W3.CSS <span class="color_h1">Таблицы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_alerts.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_lists.php">Next &#10095;</a>
    </div>
    <hr>

    <table class="w3-table w3-bordered w3-striped w3-border test w3-hoverable">
        <tr class="w3-green">
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Возраст</th>
        </tr>
        <tbody>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr>
        <tr>
            <td>Bo</td>
            <td>Nilsson</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Mike</td>
            <td>Ross</td>
            <td>35</td>
        </tr>
        </tbody>
    </table>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>W3.CSS Классы таблицы</h2>
    <p>W3.CSS предоставляет следующие классы для таблиц:</p>
    <table class="w3-table-all">
        <tr>
            <th>Класс</th>
            <th>Определяет</th>
        </tr>
        <tr>
            <td>w3-table</td>
            <td>Контейнер для HTML таблицы</td>
        </tr>
        <tr>
            <td>w3-striped</td>
            <td>Полосатая таблица</td>
        </tr>
        <tr>
            <td>w3-border</td>
            <td>Таблица с границами</td>
        </tr>
        <tr>
            <td>w3-bordered</td>
            <td>Граничные линии</td>
        </tr>
        <tr>
            <td>w3-centered</td>
            <td>Центрирование содержимого таблицы</td>
        </tr>
        <tr>
            <td>w3-hoverable</td>
            <td>Таблица при наведении</td>
        </tr>
        <tr>
            <td>w3-table-all</td>
            <td>Установка всех свойств</td>
        </tr>
    </table>
    <hr>

    <h2>Базовая таблица</h2>
    <p>Класс <strong>w3-table</strong> используется для отображения базовой таблицы:</p>
    <table class="w3-table">
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Возраст</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr></table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table class="w3-table"&gt;<br>&lt;tr&gt;<br>&nbsp; &lt;th&gt;Имя&lt;/th&gt;<br>&nbsp;
            &lt;th&gt;Фамилия&lt;/th&gt;<br>&nbsp; &lt;th&gt;Возраст&lt;/th&gt;<br>&lt;/tr&gt;<br>
            &lt;tr&gt;<br>&nbsp; &lt;td&gt;Jill&lt;/td&gt;<br>&nbsp; &lt;td&gt;Smith&lt;/td&gt;<br>&nbsp; &lt;td&gt;50&lt;/td&gt;<br>
            &lt;/tr&gt;<br>&lt;/table&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_tables.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Полосатая таблица</h2>
    <p>Класс <strong>w3-striped</strong> используется для добавления эффекта зебры в таблицу:</p>
    <table class="w3-table w3-striped">
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Возраст</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr>
    </table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table class="w3-table w3-striped"&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_tables_striped.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Таблица с границами</h2>
    <p>Класс <strong>w3-bordered</strong> добавляет нижнюю границу к каждой строке таблицы:</p>
    <table class="w3-table w3-bordered"><tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Возраст</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr></table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table class="w3-table w3-bordered"&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_tables_bordered.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Полосатая таблица с границами</h2>
    <p>Объедините класс <strong>w3-striped</strong> и класс <strong>w3-bordered</strong>, чтобы создать полосатую таблицу с границами:</p>
    <table class="w3-table w3-bordered w3-striped"><tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Возраст</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr></table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table class="w3-table w3-striped w3-bordered"&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_tables_bordered_striped.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Граница вокруг таблицы</h2>
    <p>Класс <strong>w3-border</strong> используется для отображения границы вокруг таблицы:</p>
    <table class="w3-table w3-striped w3-border"><tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Возраст</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr></table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table class="w3-table w3-striped w3-border"&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_tables_border.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Класс <strong>w3-border</strong> не только для таблиц. Он может использоваться на любом элементе HTML!</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Отображение всего сразу</h2>
    <p>Класс <strong>w3-table-all</strong> комбинирует все выше перечисленные классы:</p>
    <table class="w3-table-all"><tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Возраст</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr>
    </table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table class="w3-table-all"&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_tables_all.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Перевёрнутые полосы</h2>
    <p>Чтобы перевернуть полосы (начать со светло-серого цвета), добавьте элемент &lt;thead&gt; вокруг строки заголовка таблицы. Вы также должны определить цвет, который будет использоваться для строки заголовка таблицы:</p>
    <table class="w3-table-all">
        <thead>
        <tr class="w3-light-grey">
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Возраст</th>
        </tr>
        </thead>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr>
        <tr>
            <td>Bo</td>
            <td>Nilson</td>
            <td>35</td>
        </tr>
    </table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;thead&gt;<br>&nbsp; &lt;tr class=&quot;w3-light-grey&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Имя&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;th&gt;Фамилия&lt;/th&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Возраст&lt;/th&gt;<br>&nbsp; &lt;/tr&gt;<br>
            &lt;/thead&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_tables_flipped.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Центрирование всего содержимого</h2>
    <p>Класс <strong>w3-centered</strong> центрирует содержимое таблицы:</p>
    <table class="w3-table-all w3-centered">
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Возраст</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr></table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table class="w3-table-all w3-centered"&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_tables_centered.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Центрирование одного столбца</h2>
    <p>Класс <strong>w3-center</strong> центрирует содержимое столбца:</p>
    <table class="w3-table-all">
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th class="w3-center">Возраст</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td class="w3-center">50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td class="w3-center">94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td class="w3-center">67</td>
        </tr></table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table class="w3-table-all"&gt;<br>&lt;tr&gt;<br>&nbsp;&nbsp;&lt;th&gt;Имя&lt;/th&gt;<br>&nbsp;&nbsp;&lt;th&gt;Фамилия&lt;/th&gt;<br>&nbsp;
            &lt;th class=&quot;w3-center&quot;&gt;Возраст&lt;/th&gt;<br>&lt;/tr&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_tables_center.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Выравнивание по правому краю содержимого одного столбца</h2>
    <p>Класс <strong>w3-right-align</strong> выравнивает по правому краю содержимое столбца:</p>
    <table class="w3-table-all">
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th class="w3-right-align">Возраст</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td class="w3-right-align">50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td class="w3-right-align">94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td class="w3-right-align">67</td>
        </tr></table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table class="w3-table-all"&gt;<br>&lt;tr&gt;<br>&nbsp; &lt;th&gt;Имя&lt;/th&gt;<br>&nbsp;
            &lt;th&gt;Фамилия&lt;/th&gt;<br>&nbsp; &lt;th class=&quot;w3-right-align&quot;&gt;Возраст&lt;/th&gt;<br>&lt;/tr&gt;<br><br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_tables_right.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Таблица при наведении</h2>
    <p>Класс <strong>w3-hoverable</strong> добавляет серый цвет фона при наведении мыши:</p>
    <table class="w3-table w3-bordered w3-striped w3-border w3-hoverable">
        <thead>
        <tr class="w3-light-grey">
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Возраст</th>
        </tr>
        </thead>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr>
    </table>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table class="w3-table-all w3-hoverable"&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_tables_hoverable.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Цвета при наведении</h2>
    <p>Если вам нужен определенный цвет при наведении, добавьте любой из классов <strong>w3-hover-<em>цвет</em></strong> к каждому элементу &lt;tr&gt;:</p>
    <table class="w3-table w3-bordered w3-striped w3-border w3-hoverable">
        <thead>
        <tr class="w3-light-grey w3-hover-red">
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Возраст</th>
        </tr>
        </thead>
        <tr class="w3-hover-green">
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr class="w3-hover-blue">
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr class="w3-hover-black">
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr>
    </table>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;tr class=&quot;w3-hover-green&quot;&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_tables_hoverable2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Комбинирование W3.CSS классов</h2>
    <p>Многие классы W3.CSS могут быть использованы для всех элементов HTML.</p>
    <p>Например: классы границ, классы цветов, классы шрифтов, классы карт и многое другое.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Цветной заголовок таблицы</h2>
    <p>Используйте любой из классов <strong>w3-<em>color</em></strong> для отображения цветной строки:</p>
    <table class="w3-table w3-striped w3-border">
        <thead>
        <tr class="w3-red">
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Возраст</th>
        </tr>
        </thead>

        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr></table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;tr class=&quot;w3-red&quot;&gt;<br>&nbsp;&nbsp;&lt;th&gt;Имя&lt;/th&gt;<br>&nbsp;&nbsp;&lt;th&gt;Last
            Name&lt;/th&gt;<br>&nbsp;&nbsp;&lt;th&gt;Возраст&lt;/th&gt;<br>&lt;/tr&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_tables_colored_heading.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Цветная таблица</h2>
    <p>Используйте любой из классов <strong>w3-<em>color</em></strong> для отображения цветной таблицы:</p>
    <table class="w3-table w3-blue">
        <thead>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Возраст</th>
        </tr>
        </thead>

        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr></table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table class="w3-table w3-blue"&gt; <br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_tables_color.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Отзывчивая (адпативная) таблица</h2>
    <p>Класс <strong>w3-responseive</strong> создает адаптивную таблицу. Таблица будет прокручиваться горизонтально на маленьких экранах. При просмотре на больших экранах разницы нет. </p>
    <p>Измените размер экрана, чтобы увидеть эффект в таблице ниже:</p>

    <div class="w3-responsive">
        <table class="w3-table w3-striped w3-bordered xw3-large"><tr>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Возраст</th>
                <th>Возраст</th>
                <th>Возраст</th>
                <th>Возраст</th>
                <th>Возраст</th>
                <th>Возраст</th>
                <th>Возраст</th>
                <th>Возраст</th>
                <th>Возраст</th>
                <th>Возраст</th>
                <th>Возраст</th>
            </tr>

            <tr>
                <td>Jill</td>
                <td>Smith</td>
                <td>5000</td>
                <td>5000</td>
                <td>5000</td>
                <td>5000</td>
                <td>5000</td>
                <td>5000</td>
                <td>5000</td>
                <td>5000</td>
                <td>5000</td>
                <td>5000</td>
                <td>5000</td>
            </tr>
            <tr>
                <td>Eve</td>
                <td>Jackson</td>
                <td>9400</td>
                <td>9400</td>
                <td>9400</td>
                <td>9400</td>
                <td>9400</td>
                <td>9400</td>
                <td>9400</td>
                <td>9400</td>
                <td>9400</td>
                <td>9400</td>
                <td>9400</td>
            </tr>
            <tr>
                <td>Adam</td>
                <td>Johnson</td>
                <td>6700</td>
                <td>6700</td>
                <td>6700</td>
                <td>6700</td>
                <td>6700</td>
                <td>6700</td>
                <td>6700</td>
                <td>6700</td>
                <td>6700</td>
                <td>6700</td>
                <td>6700</td>
            </tr></table>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class="w3-responsive"&gt;<br>&nbsp; &lt;table class="w3-table-all"&gt;<br>
            &nbsp;&nbsp;&nbsp;
            ... Содержимое таблицы ...<br>&nbsp; &lt;/table&gt;<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_tables_responsive.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Таблица как карточка</h2>
    <p>Используйте класс <strong>w3-card</strong> чтобы отобразить таблицу как карточку:</p>
    <table class="w3-table-all w3-card-4">
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Возраст</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr></table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table class="w3-table-all w3-card-4"&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_tables_card.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Крошечная (уменьшенная) таблица</h2>
    <p>Используйте класс <strong>w3-tiny</strong>, чтобы отобразить крошечную таблицу:</p>
    <table class="w3-table-all w3-tiny"><tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Возраст</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr>
    </table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table class="w3-table-all w3-tiny"&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_tables_tiny.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Маленькая таблица</h2>
    <p>Используйте класс <strong>w3-small</strong>, чтобы отобразить маленькую таблицу:</p>
    <table class="w3-table-all w3-small"><tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Возраст</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr>
    </table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table class="w3-table-all w3-small"&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_tables_small.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Большая таблица</h2>
    <p>Используйте класс <strong>w3-large</strong>, чтобы отобразить большую таблицу:</p>
    <table class="w3-table-all w3-large">
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Возраст</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr></table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table class="w3-table-all w3-large"&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_tables_large.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Более крупная (XLarge) таблица</h2>
    <p>Используйте класс <strong>w3-xlarge</strong>, чтобы отобразить более крупную (xlarge) таблицу:</p>
    <table class="w3-table-all w3-xlarge">
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Возраст</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr></table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table class="w3-table-all w3-xlarge"&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_tables_xlarge.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>XXLarge Таблица</h2>
    <p>Используйте класс <strong>w3-xxlarge</strong>, чтобы отобразить xxlarge таблицу:</p>
    <table class="w3-table-all w3-xxlarge"><tr>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Возраст</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr></table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table class="w3-table-all w3-xxlarge"&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_tables_xxlarge.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>XXXLarge таблица</h2>
    <p>Используйте класс <strong>w3-xxxlarge</strong>, чтобы отобразить xxxlarge таблицу:</p>
    <table class="w3-table-all w3-xxxlarge"><tr>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Возраст</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr></table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table class="w3-table-all w3-xxxlarge"&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_tables_xxxlarge.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Гигантская (jumbo) таблица</h2>
    <p>Используйте класс <strong>w3-jumbo</strong>, чтобы отобразить гигантскую (jumbo) таблицу:</p>
    <table class="w3-table-all w3-jumbo"><tr>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
        </tr></table>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table class="w3-table-all w3-jumbo"&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_tables_jumbo.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_alerts.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_lists.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>