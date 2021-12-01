<?php include '../include/head.php'; ?>
    <title>W3.CSS Учебник. Ввод. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='W3.CSS Ввод. Форма ввода. Стилизация ввода. Карточки. Округлые границы. Цвета. При наведении. Анимированные. Меню выбора. Элементы формы в сетке. Ярлыки иконок. <?php include '../include/description.php'; ?>'>
    <link rel="stylesheet" href="../cdn/font-awesome/4.7.0/css/font-awesome.min.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_w3css.php'; ?>
<?php include '../include/before_content_w3css.php'; ?>

<article>
    <h1>W3.CSS <span class="color_h1">Input / Ввод</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_images.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_badges.php">Next &#10095;</a>
    </div>
    <hr>

    <div class="w3-container w3-teal">
        <h2>Форма ввода</h2>
    </div>
    <form class="w3-container w3-card-4">
        <br>
        <p><label class="w3-text-grey">Имя</label><input class="w3-input w3-border" type="text" required></p>
        <p><label class="w3-text-grey">Email</label><input class="w3-input w3-border" type="text" required></p>
        <p><label class="w3-text-grey">Тема</label><textarea class="w3-input w3-border" style="resize:none"></textarea></p>
        <br>
        <div class="w3-row">
            <div class="w3-half">
                <input id="milk" class="w3-check" type="checkbox" checked="checked">
                <label>Молоко</label>
                <br>
                <input id="sugar" class="w3-check" type="checkbox">
                <label>Сахар</label>
                <br>
                <input id="lemon" class="w3-check" type="checkbox" disabled>
                <label>Лимон (Отключено)</label>
                <br><br>
            </div>

            <div class="w3-half">
                <input id="male" class="w3-radio" type="radio" name="gender" value="male" checked>
                <label>Мужчина</label>
                <br>
                <input id="female" class="w3-radio" type="radio" name="gender" value="female">
                <label>Женщина</label>
                <br>
                <input id="unknown" class="w3-radio" type="radio" name="gender" value="" disabled>
                <label>Не знаю (Отключено)</label>
            </div>
        </div>
        <p><button type="button" class="w3-btn w3-padding w3-teal" style="width:130px">Отправить&nbsp; &#10095;</button></p>
    </form>
    <hr>

    <div class="w3-row-padding" style="margin-left:-16px;margin-right:-16px">
        <div class="w3-half">
            <h2>Верхние ярлыки</h2>
            <div class="w3-border">
                <div class="w3-container w3-blue">
                    <h2>Форма ввода</h2>
                </div>
                <form class="w3-container">
                    <div class="w3-section">
                        <label>Имя</label>
                        <input class="w3-input" type="text">
                    </div>
                    <div class="w3-section">
                        <label>Фамилия</label>
                        <input class="w3-input" type="text">
                    </div>
                </form>
            </div>

            <div class="w3-example">
                <h3>Пример</h3>
                <div class="w3-code notranslate htmlHigh">
                    &lt;form class="w3-container&quot;&gt;<br><br>&lt;label&gt;Имя&lt;/label&gt;<br>
                    &lt;input class=&quot;w3-input&quot; type=&quot;text&quot;&gt;<br><br>&lt;label&gt;Фамилия&lt;/label&gt;<br>
                    &lt;input class=&quot;w3-input&quot; type=&quot;text&quot;&gt;<br>
                    <br>&lt;/form&gt;
                </div>
                <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_input_top.html?filename=" target="_blank">Попробуйте сами &raquo;</a>
            </div>

        </div>
        <div class="w3-half">
            <h2>Нижние ярлыки</h2>
            <div class="w3-border">
                <div class="w3-container w3-red">
                    <h2>Форма ввода</h2>
                </div>
                <form class="w3-container">
                    <div class="w3-section">
                        <input class="w3-input" type="text">
                        <label>Имя</label>
                    </div>
                    <div class="w3-section">
                        <input class="w3-input" type="text">
                        <label>Фамилия</label>
                    </div>
                </form>
            </div>
            <div class="w3-example">
                <h3>Пример</h3>
                <div class="w3-code notranslate htmlHigh">
                    &lt;form class="w3-container&quot;&gt;<br><br>&lt;input class="w3-input" type="text"&gt;<br>&lt;label&gt;Имя&lt;/label&gt;<br>
                    <br>&lt;input class="w3-input" type="text"&gt;<br>&lt;label&gt;Фамилия&lt;/label&gt;<br>
                    <br>&lt;/form&gt;
                </div>
                <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_input_bottom.html?filename=" target="_blank">Попробуйте сами &raquo;</a>
            </div>

        </div>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Карточки ввода</h2>
    <div class="w3-card-4">
        <div class="w3-container w3-theme">
            <h2>Заголовок</h2>
        </div>

        <form class="w3-container">
            <p>
                <label>Имя</label>
                <input class="w3-input" type="text"></p>
            <p>
                <label>Фамилия</label>
                <input class="w3-input" type="text"></p>
            <br>
        </form>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-card-4&quot;&gt;<br><br>&lt;div class=&quot;w3-container
            w3-green&quot;&gt;<br>&nbsp; &lt;h2&gt;Заголовок&lt;/h2&gt;<br>&lt;/div&gt;<br><br>&lt;form class="w3-container"&gt;<br> <br>&lt;label&gt;Имя&lt;/label&gt;<br>&lt;input class=&quot;w3-input&quot;
            type=&quot;text&quot;&gt;<br> <br>
            &lt;label&gt;Фамилия&lt;/label&gt;<br>&lt;input class=&quot;w3-input&quot;
            type=&quot;text&quot;&gt;<br>
            <br>&lt;/form&gt;<br><br>&lt;/div&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_input_card.html?filename=" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Цветные ярлыки</h2>
    <p>Используйте любой из классов <strong>w3-text-color</strong> чтобы раскрасить ярлыки:</p>
    <form class="w3-container w3-card-4">
        <p>
            <label class="w3-text-blue"><b>Имя</b></label>
            <input class="w3-input w3-border" type="text">
        </p>
        <p>
            <label class="w3-text-blue"><b>Фамилия</b></label>
            <input class="w3-input w3-border" type="text">
        </p>
        <p>
            <a class="w3-btn w3-blue" href="../w3csstryit/tryw3css_input_label_colored.html?filename=" target="_blank">Зарегистрировать</a>
        </p>
    </form>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;form class="w3-container"&gt;<br> <br>&lt;label class="w3-text-blue"&gt;&lt;b&gt;Имя&lt;/b&gt;&lt;/label&gt;<br>
            &lt;input class=&quot;w3-input w3-border&quot; type=&quot;text&quot;&gt;<br>&nbsp;<br>
            &lt;label class="w3-text-blue"&gt;&lt;b&gt;Фамилия&lt;/b&gt;&lt;/label&gt;<br>
            &lt;input class=&quot;w3-input w3-border&quot; type=&quot;text&quot;&gt;<br><br>&lt;button class=&quot;w3-btn w3-blue&quot;&gt;Зарегистрировать&lt;/button&gt;<br>&nbsp;<br>&lt;/form&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_input_label_colored.html?filename=" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Ввод с границами</h2>
    <p>Добавьте класс <strong>w3-border</strong> для создания ввода с границами:</p>
    <form class="w3-container w3-card-4 w3-light-grey">
        <p>
            <label>Имя</label>
            <input class="w3-input w3-border" type="text"></p>
        <p>
            <label>Фамилия</label>
            <input class="w3-input w3-border" type="text"></p>
        <br>
    </form>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;input class=&quot;w3-input w3-border&quot; type=&quot;text&quot;&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_input_bordered.html?filename=" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Округлые границы</h2>
    <p>Используйте любой из классов <strong>w3-round</strong> для создания округленных границ:</p>
    <form class="w3-container w3-card-4 w3-light-grey">
        <p>
            <label>Имя</label>
            <input class="w3-input w3-border w3-round" type="text"></p>
        <p>
            <label>Фамилия</label>
            <input class="w3-input w3-border w3-round-large" type="text"></p>
        <br>
    </form>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;input class=&quot;w3-input w3-border w3-round&quot;
            type=&quot;text&quot;&gt;<br> <br>&lt;input class=&quot;w3-input w3-border w3-round-large&quot;
            type=&quot;text&quot;&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_input_rounded.html?filename=" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Ввод без границ</h2>
    <p>Класс <strong>w3-input</strong> имеет нижнюю границу по умолчанию. Если вы хотите ввод без границ, добавьте класс <strong>w3-border-0</strong>:</p>
    <form class="w3-container w3-card-4 w3-light-grey">
        <p>
            <label>Имя</label>
            <input class="w3-input w3-border-0" type="text"></p>
        <p>
            <label>Фамилия</label>
            <input class="w3-input w3-border-0" type="text"></p>
        <br>
    </form>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;form class=&quot;w3-container w3-light-grey&quot;&gt;<br>&nbsp; &lt;label&gt;Имя&lt;/label&gt;<br>&nbsp; &lt;input class=&quot;w3-input w3-border-0&quot; type=&quot;text&quot;&gt;<br>
            <br>&nbsp; &lt;label&gt;Фамилия&lt;/label&gt;<br>&nbsp; &lt;input class=&quot;w3-input
            w3-border-0&quot; type=&quot;text&quot;&gt;<br>&lt;/form&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_input_border-none.html?filename=" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Цвета</h2>
    <p>Не стесняйтесь использовать ваши любимые стили и цвета:</p>
    <div class="w3-card-4">
        <div class="w3-container w3-teal">
            <h2>Форма ввода</h2>
        </div>
        <form class="w3-container">
            <p>
                <label class="w3-text-teal"><b>Имя</b></label>
                <input class="w3-input w3-border w3-light-grey" type="text">
            </p>
            <p>
                <label class="w3-text-teal"><b>Фамилия</b></label>
                <input class="w3-input w3-border w3-light-grey" type="text">
            </p>
            <p>
                <a class="w3-btn w3-blue-grey" href="../w3csstryit/tryw3css_input_colors.html?filename=" target="_blank">Зарегистрировать</a>
            </p>
        </form>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-container w3-teal&quot;&gt;<br>&nbsp; &lt;h2&gt;Форма ввода&lt;/h2&gt;<br>&lt;/div&gt;<br>
            <br>&lt;form class=&quot;w3-container&quot;&gt;<br>&nbsp; &lt;label class=&quot;w3-text-teal&quot;&gt;&lt;b&gt;Имя&lt;/b&gt;&lt;/label&gt;<br>&nbsp;
            &lt;input class=&quot;w3-input w3-border w3-light-grey&quot; type=&quot;text&quot;&gt;<br>
            <br>&nbsp; &lt;label class=&quot;w3-text-teal&quot;&gt;&lt;b&gt;Фамилия&lt;/b&gt;&lt;/label&gt;<br>&nbsp;
            &lt;input class=&quot;w3-input w3-border w3-light-grey&quot; type=&quot;text&quot;&gt;<br>
            <br>&nbsp; &lt;button class=&quot;w3-btn w3-blue-grey&quot;&gt;Зарегистрировать&lt;/button&gt;<br>&lt;/form&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_input_colors.html?filename=" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Вводы при наведении</h2>
    <p>Классы <strong>w3-hover-</strong><em><strong>цвет</strong></em> добавляет цвет фона в поле ввода при наведении мыши:</p>
    <form class="w3-panel w3-card-4">
        <h2>Форма ввода</h2>
        <div class="w3-section">
            <label>Имя:</label>
            <input class="w3-input w3-hover-grey" type="text">
        </div>
        <div class="w3-section">
            <label>Фамилия:</label>
            <input class="w3-input w3-hover-grey" type="text">
        </div>
        <div class="w3-section">
            <label>Тема:</label>
            <input class="w3-input w3-hover-red" type="text">
        </div>
    </form>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;input class=&quot;w3-input w3-hover-green&quot; type=&quot;text&quot;&gt;<br>&lt;input class=&quot;w3-input w3-border w3-hover-red&quot; type=&quot;text&quot;&gt;<br>&lt;input class=&quot;w3-input
            w3-border w3-hover-blue&quot; type=&quot;text&quot;&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_input_hoverable.html?filename=" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Анимированные вводы</h2>
    <p>Класс <strong>w3-animate-input</strong> преобразует ширину поля ввода в 100%, когда получает фокус:</p>
    <p>
        <input class="w3-input w3-animate-input" type="text" style="width:30%;" placeholder="Нажми на меня!"></p>
    <p>
        <input class="w3-input w3-border w3-animate-input" type="text" style="width:30%;" placeholder="Нажми на меня!"></p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;input class=&quot;w3-input w3-animate-input&quot;
            type=&quot;text&quot; style=&quot;width:30%&quot;&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_input_animate.html?filename=" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <form class="w3-padding w3-card-4">
        <h2>Флажки</h2>
        <div>
            <p>
                <input class="w3-check" type="checkbox" checked="checked">
                <label>Молоко</label>
            </p>
        </div>
        <div>
            <p>
                <input class="w3-check" type="checkbox">
                <label>Сахар</label>
            </p>
        </div>
        <div>
            <p>
                <input class="w3-check" type="checkbox" disabled>
                <label>Лимон (Отключено)</label>
            </p>
        </div>
    </form>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;input class=&quot;w3-check&quot; type=&quot;checkbox&quot; checked=&quot;checked&quot;&gt;<br>
            &lt;label&gt;Молоко&lt;/label&gt;<br><br>&lt;input class=&quot;w3-check&quot;
            type=&quot;checkbox&quot;&gt;<br>&lt;label&gt;Сахар&lt;/label&gt;<br>
            <br>
            &lt;input class=&quot;w3-check&quot; type=&quot;checkbox&quot; disabled&gt;<br>
            &lt;label&gt;Лимон (Отключено)&lt;/label&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_input_check.html?filename=" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <form class="w3-padding w3-card-4">
        <h2>Радио-кнопки</h2>
        <div><p>
                <input class="w3-radio" type="radio" name="gender" value="male" checked>
                <label>Мужчина</label>
        </div>
        <div><p>
                <input class="w3-radio" type="radio" name="gender" value="female">
                <label>Женщина</label>
        </div>
        <div><p>
                <input class="w3-radio" type="radio" name="gender" value="" disabled>
                <label>Не знаю (Отключено)</label>
        </div>
    </form>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;input class=&quot;w3-radio&quot; type=&quot;radio&quot; name=&quot;gender&quot; value=&quot;male&quot; checked&gt;<br>
            &lt;label&gt;Мужчина&lt;/label&gt;<br>
            <br>&lt;input class=&quot;w3-radio&quot; type=&quot;radio&quot; name=&quot;gender&quot; value=&quot;female&quot;&gt;<br>&lt;label&gt;Женщина&lt;/label&gt;<br><br>&lt;input class=&quot;w3-radio&quot;
            type=&quot;radio&quot; name=&quot;gender&quot; value=&quot;&quot; disabled&gt;<br>&lt;label&gt;Не знаю (Отключено)&lt;/label&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_input_radio.html?filename=" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Выберите параметры</h2>

    <form class="w3-padding w3-card-4" style="height:160px">
        <select class="w3-select" name="option">
            <option value="" disabled selected>Выберите свой вариант</option>
            <option value="1">Параметр 1</option>
            <option value="2">Параметр 2</option>
            <option value="3">Параметр 3</option>
        </select>
    </form>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;select class=&quot;w3-select&quot; name=&quot;option&quot;&gt;<br>&nbsp; &lt;option value=&quot;&quot; disabled selected&gt;Выберите свой вариант&lt;/option&gt;<br>&nbsp; &lt;option value=&quot;1&quot;&gt;Параметр 1&lt;/option&gt;<br>&nbsp; &lt;option value=&quot;2&quot;&gt;Параметр 2&lt;/option&gt;<br>&nbsp; &lt;option value=&quot;3&quot;&gt;Параметр 3&lt;/option&gt;<br>&lt;/select&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_input_select.html?filename=" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Меню выбора с границами</h2>

    <form class="w3-padding w3-card-4" style="height:160px">
        <select class="w3-select w3-border" name="option">
            <option value="" disabled selected>Выберите свой вариант</option>
            <option value="1">Параметр 1</option>
            <option value="2">Параметр 2</option>
            <option value="3">Параметр 3</option>
        </select>
    </form>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;select class=&quot;w3-select w3-border&quot; name=&quot;option&quot;&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_input_select_border.html?filename=" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Элементы формы в сетке</h2>
    <p>В этом примере мы используем адаптивную сеточную систему W3.CSS (Responsive Grid System), чтобы входные данные отображались в одной строке (на меньших экранах они будут располагаться горизонтально с шириной 100%). Вы узнаете больше об этом в следующих разделах.</p>

    <div class="w3-row-padding w3-margin-bottom" style="margin:0 -16px">
        <div class="w3-third">
            <input class="w3-input w3-border" type="text" placeholder="Один">
        </div>
        <div class="w3-third">
            <input class="w3-input w3-border" type="text" placeholder="Два">
        </div>
        <div class="w3-third">
            <input class="w3-input w3-border" type="text" placeholder="Три">
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-row-padding&quot;&gt;<br>&nbsp; &lt;div class=&quot;w3-third&quot;&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;input class=&quot;w3-input w3-border&quot; type=&quot;text&quot; placeholder=&quot;Один&quot;&gt;<br>&nbsp;
            &lt;/div&gt;<br>&nbsp; &lt;div class=&quot;w3-third&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;input
            class=&quot;w3-input w3-border&quot; type=&quot;text&quot; placeholder=&quot;Два&quot;&gt;<br>&nbsp; &lt;/div&gt;<br>&nbsp;
            &lt;div class=&quot;w3-third&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;input class=&quot;w3-input
            w3-border&quot; type=&quot;text&quot; placeholder=&quot;Три&quot;&gt;<br>&nbsp; &lt;/div&gt;<br>&lt;/div&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_input_grid.html?filename=" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Сетка с метками</h2>
    <div class="w3-row-padding w3-margin-bottom" style="margin:0 -16px">
        <div class="w3-half">
            <label>Имя</label>
            <input class="w3-input w3-border" type="text" placeholder="Один">
        </div>
        <div class="w3-half">
            <label>Фамилия</label>
            <input class="w3-input w3-border" type="text" placeholder="Два">
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-row-padding&quot;&gt;<br>&nbsp; &lt;div class=&quot;w3-half&quot;&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;label&gt;Имя&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp; &lt;input
            class=&quot;w3-input w3-border&quot; type=&quot;text&quot; placeholder=&quot;Один&quot;&gt;<br>&nbsp; &lt;/div&gt;<br>&nbsp;
            &lt;div class=&quot;w3-half&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;label&gt;Фамилия&lt;/label&gt;<br>&nbsp;&nbsp;&nbsp; &lt;input class=&quot;w3-input
            w3-border&quot; type=&quot;text&quot; placeholder=&quot;Два&quot;&gt;<br>&nbsp; &lt;/div&gt;<br>&lt;/div&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_input_grid2.html?filename=" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Ярлыки иконок</h2>
    <form class="w3-container w3-card-4 w3-light-grey w3-text-green">
        <h2 class="w3-center">Связаться с нами</h2>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="nam" type="text" placeholder="Имя">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="last" type="text" placeholder="Email">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="email" type="text" placeholder="Телефон">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="mess" type="text" placeholder="Сообщение">
            </div>
        </div>
        <br>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_input_contact.html?filename=" target="_blank">Попробуйте сами &raquo;</a>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_images.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_badges.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>