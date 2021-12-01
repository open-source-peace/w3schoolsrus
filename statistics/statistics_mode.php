<?php include '../include/head.php'; ?>

<title>Статистика Режим. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Статистика Режим - это тип среднего значения, который описывает, где находится большая часть данных. Унимодальный, бимодальный, мультимодальный режимы. Поиск режима. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_stat.php'; ?>
<?php include '../include/before_content_stat.php'; ?>

<article>
    <h1>Статистика - Режим</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_median.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_variation.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Режим</strong> - это тип среднего значения, который описывает, где находится большая часть данных.</p>
    <hr>
    <h2>Режим</h2>
    <p><strong>Режим</strong> - это наиболее часто встречающиеся значения в данных.</p>
    <p>Набор данных может иметь несколько значений, которые являются режимами.</p>
    <p>Распределение значений только с одним режимом называется <strong>унимодальным</strong>.</p>
    <p>Распределение значений с двумя режимами называется <strong>бимодальным</strong>. Обычно распределение с более чем одним режимом называется <strong>мультимодальным</strong>.</p>
    <p>Режим можно найти как для категориальных, так и для числовых данных.</p>
    <hr>
    <h2>Поиск режима</h2>
    <p>Это <strong>числовой</strong> пример:</p>
    <div class="w3-code notranslate">
        <p>4, <u>7</u>, 3, 8, 11, <u>7</u>, 10, 19, 6, 9, <u>12</u>, <u>12</u></p>
    </div>
    <p>И 7, и 12 появляются по два раза, а остальные значения только один раз. Режимы этих данных - 7 и 12. </p>
    <p>Вот <strong>категориальный</strong> пример с именами:</p>
    <div class="w3-code notranslate">
        <p>Alice, <u>John</u>, Bob, Maria, <u>John</u>, Julia, Carol</p>
    </div>
    <p>John появляется два раза, а остальные значения только один раз. Режим этих данных - John.</p>
    <hr>
    <h2>Поиск режима с помощью программирования</h2>
    <p>Этот режим легко найти на многих языках программирования.</p>
    <p>Использование программного обеспечения и программирования для расчета статистики более распространено для больших наборов данных, так как вычисление вручную становится затруднительным.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <p>В Python используйте метод <code class="w3-codespan">multimode()</code> библиотеки статистики, чтобы найти режимы значений 4,7,3,8,11,7,10,19,6,9,12,12:</p>
            <div class="w3-code notranslate pythonHigh">
                from statistics import multimode
                <br>
                <br>
                values = [4,7,3,8,11,7,10,19,6,9,12,12]
                <br>
                <br>
                x = multimode(values)
                <br>
                <br>
                print(x)
            </div>
            <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_stat_python_mode.html">Попробуйте сами &raquo;</a>
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <p>Использование R с пользовательской функцией для поиска режимов значений 4,7,3,8,11,7,10,19,6,9,12,12:</p>
            <div class="w3-code notranslate pythonHigh">
                mode <- function(x) {
                <br>
                &nbsp;&nbsp;unique_values <- unique(x)
                <br>
                &nbsp;&nbsp;table <- tabulate(match(x, unique_values))
                <br>
                &nbsp;&nbsp;unique_values[table == max(table)]
                <br>
                }
                <br>
                <br>
                values <- c(4,7,3,8,11,7,10,19,6,9,12,12)
                <br>
                <br>
                mode(values)
            </div>
            <a target="_blank" class="w3-btn w3-margin-top w3-margin-bottom" href="../rtryit/demo_stat_r_mode.html">Попробуйте сами &raquo;</a>
        </div>
    </div>
    <div class="w3-panel w3-warning">
        <p><b>Примечание:</b> R не имеет встроенной функции для поиска режима.</code></p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_box_plots.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_variation.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>