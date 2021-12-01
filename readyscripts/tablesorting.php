<?php include '../include/head.php'; ?>

<title>Сортировка данных таблицы на веб-странице с помощью JavaScript. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать сортировку данных таблицы на веб-странице с помощью JavaScript? Стилизация с применением CSS. Скачать бесплатно готовые скрипты для сайта. Готовые решения. Эффекты на сайте. <?php include '../include/description.php'; ?>'>
    <script src="tablesort.js"></script>
    <style>
        /* стиль таблицы */
        table.sort {
            border-spacing:0.1em;
            margin-bottom:1em;
            margin-top:1em
        }
        /* ячейки таблицы */
        table.sort td {
            border:1px solid #ccc;
            padding:0.3em 1em
        }
        /* заголовки таблицы */
        table.sort thead td {
            cursor:pointer;
            font-weight:bold;
            text-align:center;
            vertical-align:middle
        }
        /* заголовок отсортированного столбца */
        table.sort thead td.curcol {
            background-color:#999;
            color:#fff
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_readyscripts.php'; ?>
<?php include '../include/before_content_readyscripts.php'; ?>

<article>
    <h1>Сортировка данных таблицы</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="randomnumber.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="216webcolors.php" title="Следующая страница">Next &#10095;</a>
    </div>
    <hr>
    <h3>Сортировка данных таблицы на веб-странице с помощью JavaScript</h3>
    <p>При помощи данного скрипта можно производить <strong>сортировку данных таблицы (в столбце)</strong> на веб-странице, без перезагрузки страницы и серверных обработок. Полностью клиентский скрипт. Скачайте архивный файл <a href="tablesort.zip" target="_blank" rel="nofollow">ZIP</a>, распакуйте его и поместите содержимое распакованной папки в ту же папку, где размещается ваша веб-страница.</p>
    <p><b>Внимание!</b> Изменение кода скрипта может повлечь его неработоспособность!</p>
    <p>Скопируйте приведённый ниже на странице код и вставьте перед кодом таблицы на веб-странице (обычно между <code class="w3-codespan">&lt;head&gt;</code> и <code class="w3-codespan">&lt;/head&gt;</code>, хотя можно и между <code class="w3-codespan">&lt;body&gt;</code> и <code class="w3-codespan">&lt;/body&gt;</code> - но только ПЕРЕД таблицей с данными).</p>
    <div class="w3-example">
        <h3>Подключение внешнего скрипта</h3>
        <div class="w3-code notranslate jsHigh">
            &lt;script src="tablesort.js"&gt;&lt;/script&gt;
        </div>
    </div>
    <p>Также нужны две картинки (изображения) в виде стрелок, которые бы указывали на тип проведенной сортировки конкретного столбца — файл "arrowdown.gif" (картинка сортировки вниз) и файл "arrowup.gif" (картинка сортировки вверх). Образцы картинок в папке "img" прилагаются в архиве и могут быть заменены Вами на любые другие с сохранением имени файла и папки.</p>
    <p>В список классов стилей обязательно добавьте описания, параметры которых (цвет, шрифт и отступы) можно редактировать (но их названия редактировать нельзя!):</p>
    <div class="w3-example">
        <h3>Код таблицы стилей:</h3>
        <div class="w3-code notranslate cssHigh">
            /* Код таблицы стилей */<br>
            table.sort {<br>
            border-spacing:0.1em;<br>
            margin-bottom:1em;<br>
            margin-top:1em<br>
            }<br>
            <br>
            /* ячейки таблицы */<br>
            table.sort td {<br>
            border:1px solid #ccc;<br>
            padding:0.3em 1em<br>
            }<br>
            <br>
            /* заголовки таблицы */<br>
            table.sort thead td {<br>
            cursor:pointer;<br>
            cursor:hand;<br>
            font-weight:bold;<br>
            text-align:center;<br>
            vertical-align:middle<br>
            }<br>
            <br>
            /* заголовок отсортированного столбца */<br>
            table.sort thead td.curcol {<br>
            background-color:#999;<br>
            color:#fff<br>
            }
        </div>
    </div>
    <p>Так должна выглядеть сортируемая таблица. Здесь налагаются очень жесткие требования по правильности её оформления. Все дополнительные команды, открывающие и закрывающие теги должны присутствовать. Необходимо указать теги <code>&lt;thead&gt;</code> (шапка таблицы) и <code>&lt;tbody&gt;</code> (основная часть таблицы). Обычно их мало кто использует, но здесь эти теги обязательны! Шапка таблицы также обязательна в указанной форме.</p>
    <?php include '../include/adinfeed.php'; ?>
    <p>Можно добавлять элементы оформления, но ставить все закрывающие теги в правильной последовательности. Обратите ОСОБОЕ внимание на код сортируемой таблицы, который можно редактировать в деталях. Внимание: регистр букв имеет значение и стили заголовков можно редактировать только через список стилей, иначе скрипт не будет работать!!!</p>

    <div class="w3-example">
        <h3>Код таблицы с данными</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;table class="sort" style="margin: auto; width:100%;"&gt;<br>
            &lt;thead&gt;<br>
            &lt;tr&gt;<br>
            &lt;td&gt;Имя поля 1&lt;td&gt;<br>
            &lt;td&gt;Имя поля 2&lt;/td&gt;<br>
            &lt;td&gt;Имя поля 3&lt;/td&gt;<br>
            &lt;td&gt;Имя поля 4&lt;/td&gt;<br>
            &lt;td&gt;Имя поля 5&lt;/td&gt;<br>
            &lt;/tr&gt;<br>
            &lt;/thead&gt;<br>
            <br>
            &lt;tbody&gt;<br>
            &lt;tr&gt;<br>
            &lt;td&gt;Кузьменко Иван Кузьмич&lt;/td&gt;<br>
            &lt;td&gt;студент ХПИ&lt;/td&gt;<br>
            &lt;td&gt;&lt;a href="#"&gt;название сайта&lt;a&gt;&lt;td&gt;<br>
            &lt;td&gt;1984 г. рожд.&lt;td&gt;<br>
            &lt;td&gt;мужск.&lt;/td&gt;<br>
            &lt;/tr&gt;<br>
            &lt;tr&gt;<br>
            &lt;td&gt;Зеленский Владимир Александрович&lt;/td&gt;<br>
            &lt;td&gt;безработный&lt;/td&gt;<br>
            &lt;td&gt;&lt;a href="#"&gt;название сайта&lt;/a&gt;&lt;/td&gt;<br>
            &lt;td&gt;1978 г. рожд.&lt;/td&gt;<br>
            &lt;td&gt;мужск.&lt;/td&gt;<br>
            &lt;/tr&gt;<br>
            &lt;tr&gt;<br>
            &lt;td&gt;Сидоров Сидор Сидорович&lt;/td&gt;<br>
            &lt;td&gt;безработный&lt;/td&gt;<br>
            &lt;td&gt;&lt;a href="#"&gt;название сайта&lt;/a&gt;&lt;/td&gt;<br>
            &lt;td&gt;1899 г. рожд.&lt;/td&gt;<br>
            &lt;td&gt;мужск.&lt;/td&gt;<br>
            &lt;/tr&gt;<br>
            &lt;tr&gt;<br>
            &lt;td&gt;Александрова Александра Александровна&lt;/td&gt;<br>
            &lt;td&gt;ребенок&lt;/td&gt;<br>
            &lt;td&gt;нет сайта&lt;/td&gt;<br>
            &lt;td&gt;2020 г. рожд.&lt;/td&gt;<br>
            &lt;td&gt;женск.&lt;/td&gt;<br>
            &lt;/tr&gt;<br>
            &lt;tr&gt;<br>
            &lt;td&gt;Шимпанзе Путинка&lt;/td&gt;<br>
            &lt;td&gt;обезьяна&lt;/td&gt;<br>
            &lt;td&gt;зоопарк&lt;/td&gt;<br>
            &lt;td&gt;1950 г. рожд.&lt;/td&gt;<br>
            &lt;td&gt;ХЛО&lt;/td&gt;<br>
            &lt;/tr&gt;<br>
            <br>
            &lt;/tbody&gt;<br>
            &lt;/table&gt;
        </div>
    </div>
    <h3>Результат:</h3>
    <p>Нажмите на шапку любого столбца, и он будет отсортирован.</p>
    <table class="sort" style="margin: auto; width:100%;">
        <thead>
        <tr>
            <td>Имя поля 1</td>
            <td>Имя поля 2</td>
            <td>Имя поля 3</td>
            <td>Имя поля 4</td>
            <td>Имя поля 5</td>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>Кузьменко Иван Кузьмич</td>
            <td>студент ХПИ</td>
            <td><a href="https://bilokurakyne.github.io/" target="_blank">Білокуракинський портал</a></td>
            <td>1984 г. рожд.</td>
            <td>мужск.</td>
        </tr>
        <tr>
            <td>Зеленский Владимир Александрович</td>
            <td>безработный</td>
            <td><a href="https://www.president.gov.ua/" target="_blank" rel="nofollow">president.gov.ua</a></td>
            <td>1978 г. рожд.</td>
            <td>мужск.</td>
        </tr>
        <tr>
            <td>Сидоров Сидор Сидорович</td>
            <td>безработный</td>
            <td><a href="http://microsoft.com/" target="_blank" rel="nofollow">Microsoft.com</a></td>
            <td>1899 г. рожд.</td>
            <td>мужск.</td>
        </tr>
        <tr>
            <td>Александрова Александра Александровна</td>
            <td>ребенок</td>
            <td>нет сайта</td>
            <td>2020 г. рожд.</td>
            <td>женск.</td>
        </tr>
        <tr>
            <td>Шимпанзе Путинка</td>
            <td>обезьяна</td>
            <td>зоопарк</td>
            <td>1950 г. рожд.</td>
            <td>ХЛО</td>
        </tr>
        </tbody>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="randomnumber.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="216webcolors.php" title="Следующая страница">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>