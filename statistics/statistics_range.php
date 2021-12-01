<?php include '../include/head.php'; ?>

<title>Статистика Диапазон. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Статистика Диапазон - это мера вариации, которая описывает, насколько разбросаны данные, это разница между наименьшим и наибольшим значением данных. Расчет диапазона. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_stat.php'; ?>
<?php include '../include/before_content_stat.php'; ?>

<article>
    <h1>Статистика - Диапазон</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_variation.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_quartiles_and_percentiles.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Диапазон</strong> - это мера вариации, которая описывает, насколько разбросаны данные.</p>
    <hr>
    <h2>Диапазон</h2>
    <p><strong>Диапазон</strong> - это разница между наименьшим и наибольшим значением данных.</p>
    <p>Диапазон - это простейшая мера вариации.</p>
    <p>Вот гистограмма возраста всех 934 лауреатов Нобелевской премии до 2020 года, показывающая <strong>диапазон</strong>:</p>
    <p><img src="../svg/img_histogram_range.svg" style="width:100%; max-width:1000px; height:auto" alt="Гистограмма возраста лауреатов Нобелевской премии с диапазоном между минимальным и максимальным значениями"></p>
    <p>Самому молодому победителю было 17 лет, а самому старшему - 97 лет. Тогда диапазон возраста для лауреатов Нобелевской премии составляет 80 лет.</p>
    <hr>
    <h2>Расчет диапазона</h2>
    <p>Диапазон можно рассчитать только для числовых данных.</p>
    <p>Сначала найдите наименьшее и наибольшее значения в этом примере:</p>
    <div class="w3-code notranslate">
        <p><u>13</u>, 21, 21, 40, 48, 55, <u>72</u></p>
    </div>
    <p>Вычислите разницу, вычтя наименьшее из наибольшего:</p>
    <p>72 - 13 = <u>59</u></p>
    <hr>
    <h2>Расчет диапазона с помощью программирования</h2>
    <p>Этот диапазон легко найти во многих языках программирования.</p>
    <p>Использование программного обеспечения и программирования для расчета статистики более распространено для больших наборов данных, так как найти их вручную становится сложно.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <p>В Python используйте метод <code class="w3-codespan">ptp()</code> библиотеки NumPy, чтобы найти диапазон значений 13, 21, 21, 40, 48, 55, 72:</p>
            <div class="w3-code notranslate pythonHigh">
                import numpy
                <br>
                <br>
                values = [13,21,21,40,48,55,72]
                <br>
                <br>
                x = numpy.ptp(values)
                <br>
                <br>
                print(x)
            </div>
            <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_stat_numpy_range.html">Попробуйте сами &raquo;</a>
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <p>Используйте функции R <code class="w3-codespan">min()</code> и <code class="w3-codespan">max()</code> чтобы найти диапазон значений 13, 21, 21, 40, 48, 55, 72:</p>
            <div class="w3-code notranslate pythonHigh">
                values &lt;- c(13,21,21,40,48,55,72)
                <br>
                <br>
                max(values) - min(values)
            </div>
            <a target="_blank" class="w3-btn w3-margin-top w3-margin-bottom" href="../rtryit/demo_stat_r_range.html">Попробуйте сами &raquo;</a>
        </div>
    </div>
    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Функция <code class="w3-codespan">range()</code> в R возвращает наименьшее и наибольшее значения.</p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_variation.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_quartiles_and_percentiles.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>