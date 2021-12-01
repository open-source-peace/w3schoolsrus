<?php include '../include/head.php'; ?>

<title>Статистика Среднее. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Статистика Среднее - это тип среднего значения, которое описывает, где находится центр данных. Среднее арифметическое. Расчет среднего. Расчёт с программированием. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_stat.php'; ?>
<?php include '../include/before_content_stat.php'; ?>

<article>
    <h1>Статистика - Среднее</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_average.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_median.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Среднее</strong> - это тип среднего значения, которое описывает, где находится центр данных.</p>
    <hr>
    <h2>Среднее</h2>
    <p>Среднее значение обычно называют &quot;средним&quot;.</p>
    <p>Среднее значение - это сумма всех значений в данных, делённая на общее количество значений в данных.</p>
    <p>Среднее значение рассчитывается для числовых переменных. Переменная - это что-то в данных, которое может варьироваться, например:</p>
    <ul>
        <li>Возраст</li>
        <li>Высота</li>
        <li>Доход</li>
    </ul>
    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Есть несколько типов средних значений. Самый распространенный тип среднего - это <strong>среднее арифметическое</strong>.</p>
        <p>В этом учебнике под &quot;средним&quot; понимается среднее арифметическое.</p>
    </div>
    <hr>
    <h2>Расчет среднего</h2>
    <p>Вы можете рассчитать среднее значение как для <a href="../statistics_populations_and_samples.php"><strong>совокупности</strong>, так и для <strong>выборки</strong></a>.</p>
    <p>Формулы одинаковы и используют разные символы для обозначения среднего по генеральной совокупности (\(\mu\)) и выборочного среднего (\(\bar{x}\)).</p>
    <p>Расчёт <strong>среднего численного значения</strong> (\(\mu\)) выполняется по этой формуле:</p>
    <p>\(\displaystyle  \mu = \frac{\sum x_{i}}{n}\)</p>
    <p>Расчёт <strong>среднего выборки</strong> (\(\bar{x}\)) выполняется по этой формуле:</p>
    <p>\(\displaystyle \bar{x} = \frac{\sum x_{i}}{n}\)</p>
    <p>Нижняя часть дроби (\(n\)) - это общее количество наблюдений.</p>
    <p>\(\sum \) - это символ для сложения списка чисел.</p>
    <p>\(x_{i}\) - это список значений в данных: \(x_{1}, x_{2}, x_{3}, \ldots \)</p>
    <p>Верхняя часть дроби (\(\sum x_{i}\)) - это сумма \(x_{1}, x_{2}, x_{3}, \ldots \) сложенных вместе.</p>
    <p>Итак, если в выборке есть 4 наблюдения со значениями: 4, 11, 7, 14, расчет будет:</p>
    <p>\(\displaystyle \bar{x} = \frac{4 + 11 + 7 + 14}{4} = \frac{36}{4} = \underline{9} \)</p>
    <?php include '../include/addown_content.php'; ?>

    <h2>Расчёт с программированием</h2>
    <p>Среднее значение можно легко вычислить с помощью многих языков программирования.</p>
    <p>Использование программного обеспечения и программирования для расчета статистики более распространено для больших наборов данных, поскольку расчет вручную становится затруднительным.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <p>В Python используйте метод <code class="w3-codespan">mean()</code> библиотеки NumPy, чтобы найти среднее значение 4,11,7,14:</p>
            <div class="w3-code notranslate pythonHigh">
                import numpy
                <br>
                <br>
                values = [4,11,7,14]
                <br>
                <br>
                x = numpy.mean(values)
                <br>
                <br>print(x)
            </div>
            <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_stat_numpy_mean.html">Попробуйте сами &raquo;</a>
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <p>Используйте функцию R <code class="w3-codespan">mean()</code> чтобы найти среднее значение 4,11,7,14:</p>
            <div class="w3-code notranslate pythonHigh">
                values <- c(4,7,11,14)
                <br>
                <br>
                mean(values)
            </div>
            <a target="_blank" class="w3-btn w3-margin-top w3-margin-bottom" href="../rtryit/demo_stat_r_mean.html">Попробуйте сами &raquo;</a>
        </div>
    </div>
    <hr>
    <h2>Справка по символам статистики</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Символ</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>\( \mu \)</td>
            <td>Среднее совокупности. Произносится 'mu'.</td>
        </tr>
        <tr>
            <td>\( \bar{x} \)</td>
            <td>Среднее значение выборки. Произносится как 'x-bar'.</td>
        </tr>
        <tr>
            <td>\( \sum \)</td>
            <td>Оператор суммирования, 'заглавная сигма'.</td>
        </tr>
        <tr>
            <td>\( x \)</td>
            <td>По переменной 'x' мы вычисляем среднее значение для неё.</td>
        </tr>
        <tr>
            <td>\( i \)</td>
            <td>Индекс 'i' переменной 'x'. Это идентифицирует каждое наблюдение для переменной.</td>
        </tr>
        <tr>
            <td>\( n \)</td>
            <td>Количество наблюдений.</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_average.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_median.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>