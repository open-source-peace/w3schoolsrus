<?php include '../include/head.php'; ?>

<title>Машинное обучение. Учебник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Python Учебник. Машинное обучение. Что такое машинное обучение и где это используется? Набор и типы данных. Числовые, категориальные, порядковые данные. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_python.php'; ?>
<?php include '../include/before_content_python.php'; ?>

<article>
    <h1>Машинное обучение</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="matplotlib_pie_charts.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="python_ml_mean_median_mode.php">Next &#10095;</a>
    </div>

    <div class="w3-panel w3-info intro">
        <p><strong>Машинное обучение</strong> заставляет компьютер учиться на изучении данных и статистики.</p>
        <p><strong>Машинное обучение</strong> - это шаг в сторону искусственного интеллекта (ИИ).</p>
        <p><strong>Машинное обучение</strong> - это программа, которая анализирует данные и учится предсказывать результат.</p>
    </div>

    <h2>С чего начать?</h2>
    <p>В этом учебнике мы вернёмся к математике и изучим статистику, а также к тому, как вычислять важные числа на основе наборов данных.</p>
    <p>Мы также узнаем, как использовать различные модули Python, чтобы получить нужные нам ответы.</p>
    <p>И мы узнаем, как создавать функции, способные предсказывать результат на основе того, что мы узнали.</p>
    <hr>

    <h2>Набор данных</h2>
    <p>В компьютерном понимании набор данных - это любая совокупность данных. Это может быть что угодно, от массива до полной базы данных.</p>
    <p>Пример массива:</p>

    <div class="w3-example w3-light-grey">
        <p><code class="pythonHigh">[99,86,87,88,111,86,103,87,94,78,77,85,86]</code></p>
    </div>

    <p>Пример базы данных:</p>

    <table class="ws-table-all">
        <tr>
            <td>Carname</td><td>Color</td><td class="auto-style1">Age</td><td class="auto-style1">Speed</td><td class="auto-style2">AutoPass</td>
        </tr>
        <tr>
            <td>BMW</td><td>red</td><td class="auto-style1">5</td><td class="auto-style1">99</td><td class="auto-style2">Y</td>
        </tr>
        <tr>
            <td>Volvo</td><td>black</td><td class="auto-style1">7</td><td class="auto-style1">86</td><td class="auto-style2">Y</td>
        </tr>
        <tr>
            <td>VW</td><td>gray</td><td class="auto-style1">8</td><td class="auto-style1">87</td><td class="auto-style2">N</td>
        </tr>
        <tr>
            <td>VW</td><td>white</td><td class="auto-style1">7</td><td class="auto-style1">88</td><td class="auto-style2">Y</td>
        </tr>
        <tr>
            <td>Ford</td><td>white</td><td class="auto-style1">2</td><td class="auto-style1">111</td><td class="auto-style2">Y</td>
        </tr>
        <tr>
            <td>VW</td><td>white</td><td class="auto-style1">17</td><td class="auto-style1">86</td><td class="auto-style2">Y</td>
        </tr>
        <tr>
            <td>Tesla</td><td>red</td><td class="auto-style1">2</td><td class="auto-style1">103</td><td class="auto-style2">Y</td>
        </tr>
        <tr>
            <td>BMW</td><td>black</td><td class="auto-style1">9</td><td class="auto-style1">87</td><td class="auto-style2">Y</td>
        </tr>
        <tr>
            <td>Volvo</td><td>gray</td><td class="auto-style1">4</td><td class="auto-style1">94</td><td class="auto-style2">N</td>
        </tr>
        <tr>
            <td>Ford</td><td>white</td><td class="auto-style1">11</td><td class="auto-style1">78</td><td class="auto-style2">N</td>
        </tr>
        <tr>
            <td>Toyota</td><td>gray</td><td class="auto-style1">12</td><td class="auto-style1">77</td><td class="auto-style2">N</td>
        </tr>
        <tr>
            <td>VW</td><td>white</td><td class="auto-style1">9</td><td class="auto-style1">85</td><td class="auto-style2">N</td>
        </tr>
        <tr>
            <td>Toyota</td><td>blue</td><td class="auto-style1">6</td><td class="auto-style1">86</td><td class="auto-style2">Y</td>
        </tr>
    </table>
    <?php include '../include/addown_content.php'; ?>
    <p>Посмотрев на массив, мы можем предположить, что среднее значение, вероятно, составляет около 80 или 90, и мы также можем определить максимальное и минимальное значение, но что ещё мы можем сделать?</p>
    <p>И, посмотрев на базу данных, мы можем увидеть, что самый популярный цвет - белый, а самому старому автомобилю 17 лет, но что, если бы мы могли предсказать, есть ли у автомобиля AutoPass, просто взглянув на другие значения?</p>
    <p>Для этого и предназначено машинное обучение! Анализируем данные и прогнозируем результат!</p>

    <div class="w3-panel w3-note">
        <p>В машинном обучении обычно работают с очень большими наборами данных. В этом учебнике мы постараемся максимально упростить понимание различных концепций машинного обучения и будем работать с небольшими, простыми для понимания наборами данных.</p>
    </div>
    <hr>

    <h2>Типы данных</h2>
    <p>Для анализа данных важно знать, с какими типами данных мы имеем дело.</p>
    <p>Мы можем разделить типы данных на три основные категории:</p>
    <ul>
        <li><strong>Числовой</strong></li>
        <li><strong>Категориальный</strong></li>
        <li><strong>Порядковый</strong></li>
    </ul>

    <p><strong>Числовые</strong> данные представляют собой числа, и их можно разделить на две числовые категории:</p>

    <ul>
        <li>Дискретные данные<br> - числа, ограниченные целыми числами. Пример: количество проезжающих автомобилей.</li>
        <li>Непрерывные данные<br> - числа, которые имеют бесконечное значение. Пример: цена товара или размер товара.</li>
    </ul>

    <p><strong>Категориальные</strong> данные - это значения, которые нельзя сравнивать друг с другом. Пример: значение цвета или любые значения да / нет.</p>
    <p><strong>Порядковые</strong> данные похожи на категориальные данные, но их можно сравнивать друг с другом. Пример: школьные оценки, в которых A лучше, чем B, и т.д.</p>
    <p>Зная тип данных вашего источника данных, вы сможете узнать, какой метод использовать при их анализе.</p>
    <p>Вы узнаете больше о статистике и анализе данных в следующих разделах учебника на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="matplotlib_pie_charts.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="python_ml_mean_median_mode.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>