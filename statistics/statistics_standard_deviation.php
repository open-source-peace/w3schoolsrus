<?php include '../include/head.php'; ?>

<title>Статистика Стандартное (среднеквадратичное) отклонение. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Статистика Стандартное (среднеквадратичное) отклонение. Расчет стандартного отклонения. Стандартное отклонение выборки. Справка по символам статистики <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_stat.php'; ?>
<?php include '../include/before_content_stat.php'; ?>

<article>
    <h1>Статистика - Стандартное (среднеквадратичное) отклонение</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_interquartile_range.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_statistical_inference.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Стандартное отклонение</strong> - это наиболее часто используемая мера вариации, которая описывает разброс данных.</p>
    <hr>
    <h2>Стандартное отклонение</h2>
    <p><strong>Стандартное отклонение</strong> (&sigma;) измеряет, насколько &quot;типичное&quot; наблюдение отличается от среднего значения данных (&mu;).</p>
    <p><strong>Стандартное отклонение</strong> является важным для многих статистических методов.</p>
    <p>Вот гистограмма возраста всех 934 лауреатов Нобелевской премии до 2020 года, показывающая <strong>стандартные отклонения.</strong>:</p>
    <p><img src="../svg/img_histogram_std.svg" style="width:100%; max-width:1000px; height:auto" alt="Гистограмма возраста лауреатов Нобелевской премии с указанием межквартильного диапазона"></p>
    <p>Каждая пунктирная линия на гистограмме показывает сдвиг на одно дополнительное стандартное отклонение.</p>
    <p>Если данные <strong>нормально распределены</strong></p>
    <ul>
        <li>Примерно 68.3&#37; данных находится в пределах 1 стандартного отклонения от среднего (от &mu;-1&sigma; до &mu;+1&sigma;) </li>
        <li>Примерно 95.5&#37; данных находится в пределах 2 стандартных отклонений от среднего (от &mu;-2&sigma; до &mu;+2&sigma;) </li>
        <li>Примерно 99.7&#37; данных находится в пределах 3 стандартных отклонений от среднего (от &mu;-3&sigma; до &mu;+3&sigma;) </li>
    </ul>
    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> <strong>Нормальное</strong> распределение имеет форму колокола и равномерно распространяется с обеих сторон.</p>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Расчет стандартного отклонения</h2>
    <p>Вы можете рассчитать стандартное отклонение как для <a href="statistics_populations_and_samples.php"><strong>совокупности</strong>, так и для <strong>выборки</strong></a>.</p>
    <p>Формулы <b>почти</b> одинаковы, и для обозначения стандартного отклонения (\(\sigma\)) и для <strong>выборки</strong> используются разные символы (\(s\)).</p>
    <p>Расчет <strong>стандартного отклонения</strong> (\(\sigma\)) выполняется по этой формуле:</p>
    <p>\(\displaystyle  \sigma = \sqrt{\frac{\sum (x_{i}-\mu)^2}{n}}\)</p>
    <p>Расчет <strong>выборки стандартного отклонения</strong> (\(s\)) выполняется по этой формуле:</p>
    <p>\(\displaystyle s = \sqrt{\frac{\sum (x_{i}-\bar{x})^2}{n-1}}\)</p>
    <p>\(n\) это общее количество наблюдений.</p>
    <p>\(\sum \) это символ для сложения списка чисел.</p>
    <p>\(x_{i}\) это список значений в данных: \(x_{1}, x_{2}, x_{3}, \ldots \)</p>
    <p>\(\mu\) - среднее значение совокупности, а \(\bar{x}\) - среднее выборки (среднее значение).</p>
    <p>\( (x_{i} - \mu ) \) и \( (x_{i} - \bar{x} ) \) разницы между значениями наблюдений (\(x_{i}\)) и средним.</p>
    <p>Каждая разница возводится в квадрат и складывается.</p>
    <p>Затем сумма делится на \(n\) or (\( n - 1 \)) и затем мы находим квадратный корень.</p>
    <p>Используя эти 4 примера значений для расчета <strong>стандартного отклонения генеральной совокупности</strong>:</p>
    <div class="w3-code notranslate">
        <p>4, 11, 7, 14</p>
    </div>
    <p>Сначала мы должны найти <a href="statistics_mean.php">среднее значение</a>:</p>
    <p>\(\displaystyle \mu = \frac{\sum x_{i}}{n} = \frac{4 + 11 + 7 + 14}{4} = \frac{36}{4} = \underline{9} \)</p>
    <p>Затем мы находим разницу между каждым значением и средним значением \( (x_{i}- \mu)\):</p>
    <ul>
        <li>\( 4-9 \; \:= -5 \)</li>
        <li>\( 11-9 = 2 \)</li>
        <li>\( 7-9 \; \:= -2 \)</li>
        <li>\( 14-9 = 5 \)</li>
    </ul>
    <p>Затем каждое значение возводится в квадрат или умножается само на себя \( ( x_{i}- \mu )^2\):</p>
    <ul>
        <li>\( (-5)^2 = (-5)(-5) = 25 \)</li>
        <li>\( 2^2 \; \; \; \; \; \, = 2*2 \; \; \; \; \; \; \; \: = 4 \)</li>
        <li>\( (-2)^2 = (-2)(-2) = 4 \)</li>
        <li>\( 5^2 \; \; \; \; \; \, = 5*5 \; \; \; \; \; \; \; \: = 25 \)</li>
    </ul>
    <p>Затем все квадраты разностей складываются \( \sum (x_{i} -\mu )^2\):</p>
    <p>\( 25 + 4 + 4 + 25 = 58\)</p>
    <p>Затем сумма делится на общее количество наблюдений, \( n \):</p>
    <p>\( \displaystyle \frac{58}{4} = 14.5\)</p>
    <p>Наконец, извлекаем квадратный корень из этого числа:
    <p>\( \sqrt{14.5} \approx \underline{3.81} \)</p>
    <p>Таким образом, стандартное отклонение значений примера примерно: \(3.81 \)</p>
    <hr>
    <h2>Расчет стандартного отклонения с помощью программирования</h2>
    <p>Стандартное отклонение можно легко вычислить с помощью многих языков программирования.</p>
    <p>Использование программного обеспечения и программирования для расчета статистики более распространено для больших наборов данных, поскольку расчет вручную становится затруднительным.</p>
    <h3>Стандартное отклонение совокупности</h3>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <p>В Python используйте метод <code class="w3-codespan">std()</code> библиотеки NumPy, чтобы найти стандартное отклонение значений 4,11,7,14:</p>
            <div class="w3-code notranslate pythonHigh">
                import numpy
                <br>
                <br>
                values = [4,11,7,14]
                <br>
                <br>
                x = numpy.std(values)
                <br>
                <br>print(x)
            </div>
            <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_stat_numpy_std.html">Попробуйте сами &raquo;</a>
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <p>Используйте формулу R, чтобы найти стандартное отклонение значений 4,11,7,14:</p>
            <div class="w3-code notranslate pythonHigh">
                values <- c(4,7,11,14)
                <br>
                <br>
                sqrt(mean((values-mean(values))^2))
            </div>
            <a target="_blank" class="w3-btn w3-margin-top w3-margin-bottom" href="../rtryit/demo_stat_r_std.html">Попробуйте сами &raquo;</a>
        </div>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h3>Стандартное отклонение выборки</h3>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <p>В Python используйте метод <code class="w3-codespan">std()</code> библиотеки NumPy, чтобы найти <strong>выборку</strong> стандартного отклонения значений 4,11,7,14:</p>
            <div class="w3-code notranslate pythonHigh">
                import numpy
                <br>
                <br>
                values = [4,11,7,14]
                <br>
                <br>
                x = numpy.std(values, ddof=1)
                <br>
                <br>print(x)
            </div>
            <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_stat_numpy_sstd.html">Попробуйте сами &raquo;</a>
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <p>Используйте функцию R <code class="w3-codespan">sd()</code> чтобы найти <strong>выборку</strong> стандартного отклонения значений 4,11,7,14:</p>
            <div class="w3-code notranslate pythonHigh">
                values <- c(4,7,11,14)
                <br>
                <br>
                sd(values)
            </div>
            <a target="_blank" class="w3-btn w3-margin-top w3-margin-bottom" href="../rtryit/demo_stat_r_sstd.html">Попробуйте сами &raquo;</a>
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
            <td>\( \sigma \)</td>
            <td>Стандартное отклонение совокупности. Произносится 'sigma'</td>
        </tr>
        <tr>
            <td>\( s \)</td>
            <td>Стандартное отклонение выборки</td>
        </tr>
        <tr>
            <td>\( \mu \)</td>
            <td>Среднее совокупности. Произносится 'mu'</td>
        </tr>
        <tr>
            <td>\( \bar{x} \)</td>
            <td>Среднее выборки. Произносится 'x-bar'</td>
        </tr>
        <tr>
            <td>\( \sum \)</td>
            <td>Оператор суммирования, 'заглавная сигма'</td>
        </tr>
        <tr>
            <td>\( x \)</td>
            <td>По переменной 'x' мы вычисляем среднее значение</td>
        </tr>
        <tr>
            <td>\( i \)</td>
            <td>Индекс 'i' переменной 'x'. Это идентифицирует каждое наблюдение для переменной</td>
        </tr>
        <tr>
            <td>\( n \)</td>
            <td>Количество наблюдений</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_interquartile_range.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_statistical_inference.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>