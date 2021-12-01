<?php include '../include/head.php'; ?>

<title>Статистика Медиана. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Статистика Медиана. Нахождение медианы. Поиск медианы с помощью программирования. Примеры. Медиана может быть вычислена только для числовых переменных. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_stat.php'; ?>
<?php include '../include/before_content_stat.php'; ?>

<article>
    <h1>Статистика - Медиана</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_mean.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_mode.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Медиана</strong> - это тип среднего значения, которое описывает, где находится центр данных.</p>
    <hr>
    <h2>Медиана</h2>
    <p><strong>Медиана</strong> - это среднее значение в наборе данных, упорядоченное от меньшего к большему.</p>
    <hr>
    <h2>Нахождение медианы</h2>
    <p>Медиана может быть вычислена только для числовых переменных.</p>
    <p>Формула для определения среднего значения:</p>
    <p>\( \displaystyle \frac{n + 1}{2} \)</p>
    <p>Где \(n\) общее количество наблюдений.</p>
    <p>Если общее количество наблюдений является <strong>нечётным</strong> числом, формула даёт целое число, а значение этого наблюдения - медиана.</p>
    <div class="w3-code notranslate">
        <p>13, 21, 21, <u>40</u>, 48, 55, 72</p>
    </div>
    <p>Здесь всего 7 наблюдений, поэтому медиана - это 4-е значение:</p>
    <p>\( \displaystyle \frac{7 + 1}{2} = \frac{8}{2} = 4 \)</p>
    <p>Четвёртое значение в упорядоченном списке - <b>40</b>, так что это медиана.</p>
    <p>Если общее количество наблюдений является <b>чётным</b> числом, формула даёт десятичное число между двумя наблюдениями.</p>
    <div class="w3-code notranslate">
        <p>13, 21, 21, <u>40, 42</u>, 48, 55, 72</p>
    </div>
    <p>Здесь всего 8 наблюдений, поэтому медиана находится между 4-м и 5-м значениями:</p>
    <p> \( \displaystyle \frac{8 + 1}{2} = \frac{9}{2} = 4.5 \)</p>
    <p>4-е и 5-е значения в упорядоченном списке - <b>40</b> и <b>42</b>, поэтому медиана - это <strong>среднее</strong> этих двух значений. То есть сумма этих двух значений, делённая на 2:</p>
    <p>\( \displaystyle \frac{40+42}{2} = \frac{82}{2} = \underline{41} \)</p>
    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Важно, чтобы числа были упорядочены, прежде чем вы сможете найти медианное значение.</p>
    </div>
    <hr>
    <h2>Поиск медианы с помощью программирования</h2>
    <p>Медиану легко найти во многих языках программирования.</p>
    <p>Использование программного обеспечения и программирования для расчета статистики более распространено для больших наборов данных, так как найти их вручную становится сложно.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div><p>В Python используйте метод <code class="w3-codespan">median()</code> библиотеки NumPy, чтобы найти медиану значений 13, 21, 21, 40, 42, 48, 55, 72:</p>
            <div class="w3-code notranslate pythonHigh">
                import numpy
                <br>
                <br>
                values = [13,21,21,40,42,48,55,72]
                <br>
                <br>
                x = numpy.median(values)
                <br>
                <br>
                print(x)
            </div>
            <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_stat_numpy_median.html">Попробуйте сами &raquo;</a>
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <p>Используйте функцию R <code class="w3-codespan">median()</code> чтобы найти медиану значений 13, 21, 21, 40, 42, 48, 55, 72:</p>
            <div class="w3-code notranslate pythonHigh">
                values &lt;- c(13,21,21,40,42,48,55,72)
                <br>
                <br>
                median(values)
            </div>
            <a target="_blank" class="w3-btn w3-margin-top w3-margin-bottom" href="../rtryit/demo_stat_r_median.html">Попробуйте сами &raquo;</a>
        </div>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_mean.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_mode.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>