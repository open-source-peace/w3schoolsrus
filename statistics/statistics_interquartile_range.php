<?php include '../include/head.php'; ?>

<title>Статистика Межквартильный диапазон. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Статистика Межквартильный диапазон - это мера вариации, которая описывает разброс данных, это разница между первым и третьим квартилями. Расчет межквартильного диапазона с помощью программирования. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_stat.php'; ?>
<?php include '../include/before_content_stat.php'; ?>

<article>
    <h1>Статистика - Межквартильный диапазон</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_quartiles_and_percentiles.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_standard_deviation.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Межквартильный диапазон</strong> - это мера вариации, которая описывает разброс данных.</p>
    <hr>
    <h2>Межквартильный диапазон</h2>
    <p><strong>Межквартильный диапазон</strong> - это разница между первым и третьим <a href="statistics_quartiles_and_percentiles.php">квартилями</a> (Q<sub>1</sub> и Q<sub>3</sub>).</p>
    <p>&quot;Средняя половина&quot; данных находится между первым и третьим квартилем.</p>
    <p>Первый квартиль - это значение в данных, которое разделяет нижние 25&#37; значений из верхних 75&#37;.</p>
    <p>Третий квартиль - это значение в данных, которое разделяет нижние 75&#37; значений из первых 25&#37;.</p>
    <p>Вот гистограмма возраста всех 934 лауреатов Нобелевской премии до 2020 года, показывающая <strong>межквартильный диапазон (IQR).</strong>:</p>
    <p><img src="../svg/img_histogram_iqr.svg" style="width:100%; max-width:1000px; height:auto" alt="Гистограмма возраста лауреатов Нобелевской премии с указанием межквартильного диапазона"></p>
    <p>Здесь средняя половина - от 51 до 69 лет. Межквартильный диапазон для лауреатов Нобелевской премии составляет 18 лет.</p>
    <p></p>
    <?php include '../include/addown_content.php'; ?>
    <h2>Расчет межквартильного диапазона с помощью программирования</h2>
    <p>Межквартильный диапазон можно легко найти с помощью многих языков программирования.</p>
    <p>Использование программного обеспечения и программирования для расчета статистики более распространено для больших наборов данных, так как поиск их вручную становится затруднительным.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <p>В Python используйте метод <code class="w3-codespan">iqr()</code> библиотеки SciPy, чтобы найти межквартильный диапазон значений 13, 21, 21, 40, 42, 48, 55, 72:</p>
            <div class="w3-code notranslate pythonHigh">
                from scipy import stats
                <br>
                <br>
                values = [13,21,21,40,42,48,55,72]
                <br>
                <br>
                x = stats.iqr(values)
                <br>
                <br>
                print(x)
            </div>
            <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_stat_python_iqr.html">Попробуйте сами &raquo;</a>
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <p>Используйте функцию R <code class="w3-codespan">IQR()</code>, чтобы найти межквартильный диапазон значений 13, 21, 21, 40, 42, 48, 55, 72:</p>
            <div class="w3-code notranslate pythonHigh">
                values &lt;- c(13,21,21,40,42,48,55,72)
                <br>
                <br>
                IQR(values)
            </div>
            <a target="_blank" class="w3-btn w3-margin-top w3-margin-bottom" href="../rtryit/demo_stat_r_iqr.html">Попробуйте сами &raquo;</a>
        </div>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_quartiles_and_percentiles.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_standard_deviation.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>