<?php include '../include/head.php'; ?>

<title>Статистика Стандартное нормальное распределение. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Статистика Стандартное нормальное распределение. Нахождение P-значения из Z-значения. Нахождение P-значения между Z-значениями. <?php include '../include/description.php'; ?>'>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_stat.php'; ?>
<?php include '../include/before_content_stat.php'; ?>

<article>
    <h1>Статистика - Стандартное нормальное распределение</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_normal_distribution.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_students_t_distribution.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Стандартное нормальное распределение</strong> - это <a href="statistics_normal_distribution.php">нормальное распределение</a>, где среднее значение равно 0, а стандартное отклонение - 1.</p>
    <p class="intro"></p>
    <hr>
    <h2>Стандартное нормальное распределение</h2>
    <p>Обычно распределенные данные можно преобразовать в стандартное нормальное распределение.</p>
    <p>Стандартизация нормально распределенных данных упрощает сравнение различных наборов данных.</p>
    <p>Стандартное нормальное распределение используется для:</p>
    <ul>
        <li>Расчет доверительных интервалов</li>
        <li>Проверка гипотез</li>
    </ul>
    <p>Вот график стандартного нормального распределения со значениями вероятности (p-значения) между стандартными отклонениями:</p>
    <p><img src="../svg/img_standard_normal.svg" style="width:100%; max-width:1000px; height:auto" alt="Стандартное нормальное распределение с указанными вероятностями"></p>
    <p>Стандартизация упрощает расчет вероятностей.</p>
    <p>Функции для вычисления вероятностей сложны и их трудно вычислить вручную.</p>
    <p>Обычно вероятности находят, просматривая таблицы предварительно рассчитанных значений или используя программное обеспечение и программирование. </p>
    <p>Стандартное нормальное распределение также называется "Z-распределением", а значения - "Z-значениями" (или Z-оценками).</p>
    <hr>
    <h2>Z-значения</h2>
    <p>Z-значения выражают количество стандартных отклонений от среднего значения.</p>
    <p>Формула для расчета Z-значения:</p>
    <p>\(\displaystyle Z = \frac{x-\mu}{\sigma}\)</p>
    <p>\(x\) - это значение, которое мы стандартизируем, \(\mu\) - это среднее значение, а \(\sigma\) - это стандартное отклонение.</p>
    <p>Например, если мы знаем, что:</p>
    <div class="w3-code notranslate">
        <p>Средний рост людей в Германии - 170 см (\(\mu\))</p>
        <p>Стандартное отклонение роста людей в Германии составляет 10 см (\(\sigma\))</p>
        <p>Боб ростом 200 см (\(x\))</p>
    </div>
    <p>Боб на 30 см выше среднего жителя Германии.</p>
    <p>30 см - это 3 раза по 10 см. Таким образом, рост Боба на 3 стандартных отклонения больше, чем средний рост в Германии.</p>
    <p>Используя формулу:</p>
    <p>\(\displaystyle Z = \frac{x-\mu}{\sigma} = \frac{200-170}{10} = \frac{30}{10} = \underline{3} \)</p>
    <p>Z-значение роста Боба (200 см) равно 3.</p>
    <hr>
    <h2>Нахождение P-значения из Z-значения</h2>
    <p>Используя <a href="statistics_z_table.php">Z-таблицу</a> или программирование, мы можем подсчитать, сколько людей в Германии ниже Боба, а сколько выше.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>В Python используйте функцию Scipy Stats library <code class="w3-codespan">norm.cdf()</code>, чтобы найти вероятность получения значения Z меньше 3:</p>
        <div class="w3-code notranslate pythonHigh">
            import scipy.stats as stats
            <br>
            print(stats.norm.cdf(3))
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_stat_python_p_z.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>С помощью R используйте встроенную функцию <code class="w3-codespan">pnorm()</code> и найдите вероятность получения значения Z меньше 3:</p>
        <div class="w3-code notranslate pythonHigh">
            pnorm(3)
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../rtryit/demo_stat_r_p_z.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Используя любой метод, мы можем найти, что вероятность равна \(\approx 0.9987\), или \( 99.87\% \)</p>
    <p>Это означает, что Боб выше 99.87&#37; людей в Германии.</p>
    <p>Вот график стандартного нормального распределения и Z-значение 3 для визуализации вероятности:</p>
    <p><img src="../svg/img_z_score3.svg" style="width:100%; max-width:1000px; height:auto" alt="Стандартное нормальное распределение с указанной вероятностью для z-значения 3"></p>
    <p>Эти методы находят p-значение с точностью до конкретного z-значения, которое у нас есть.</p>
    <p>Чтобы найти p-значение выше z-значения, мы можем вычислить 1 минус вероятность.</p>
    <p>Таком образом, в примере Боба мы можем вычислить 1 - 0.9987 = 0.0013, или 0.13&#37;.</p>
    <p>Это означает, что всего 0.13&#37; немцев выше Боба.</p>
    <?php include '../include/addown_content.php'; ?>
    <h2>Нахождение P-значения между Z-значениями</h2>
    <p>Если вместо этого мы хотим узнать, сколько людей в Германии ростом от 155 до 165 см, используя тот же пример:</p>
    <div class="w3-code notranslate">
        <p>Средний рост людей в Германии - 170 см (\(\mu\))</p>
        <p>Стандартное отклонение роста людей в Германии составляет 10 см (\(\sigma\))</p>
    </div>
    <p>Теперь нам нужно рассчитать Z-значения для 155 см и 165 см:</p>
    <br>
    <p>\(\displaystyle Z = \frac{x-\mu}{\sigma} = \frac{155-170}{10} = \frac{-15}{10} = \underline{-1.5} \)</p>
    <p>Z-значение 155 см составляет -1.5</p>
    <br>
    <p>\(\displaystyle Z = \frac{x-\mu}{\sigma} = \frac{165-170}{10} = \frac{-5}{10} = \underline{-0.5} \)</p>
    <p>Z-значение 165 см составляет -0,5.</p>
    <br>
    <p>Используя <a href="statistics_z_table.php">Z-table</a> или программирование, мы можем обнаружить, что p-значение для двух z-значений:</p>
    <ul>
        <li>Вероятность того, что значение z будет меньше -0,5 (меньше 165 см), равна 30.85&#37;</li>
        <li>Вероятность того, что значение z будет меньше -1,5 (меньше 155 см), равна 6.68&#37;</li>
    </ul>
    <p>Вычтем 6.68&#37; из 30.85&#37; чтобы найти вероятность получения z-значения между ними.</p>
    <p>30.85&#37; - 6.68&#37; = <u>24.17&#37;</u></p>
    <p>Вот набор графиков, иллюстрирующих процесс:</p>
    <p><img src="../svg/img_z_scores.svg" style="width:60%; max-width:600px; height:auto" alt="Стандартное нормальное распределение с указанной вероятностью для z-значения 3"></p>
    <?php include '../include/addown_content.php'; ?>
    <h2>Нахождение Z-значения P-значения</h2>
    <p>Вы также можете использовать p-значения (вероятность), чтобы найти z-значения.</p>
    <p>Например:</p>
    <div class="w3-code notranslate">
        <p>"Какой у вас рост, если вы выше 90% немцев?"</p>
    </div>
    <p>Значение p составляет 0,9 или 90&#37;.</p>
    <p>Используя <a href="statistics_z_table.php">Z-таблицу</a> или программирование, мы можем вычислить z-значение:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>В Python используйте функцию Scipy Stats library <code class="w3-codespan">norm.ppf()</code> найдите z-значение, отделяющее верхние 10% от нижних 90%:</p>
        <div class="w3-code notranslate pythonHigh">
            import scipy.stats as stats
            <br>
            print(stats.norm.ppf(0.9))
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_stat_python_z_p.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>С помощью R используйте встроенную функцию <code class="w3-codespan">qnorm()</code> найдите z-значение, отделяющее верхние 10% от нижних 90%:</p>
        <div class="w3-code notranslate pythonHigh">
            qnorm(0.9)
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../rtryit/demo_stat_r_z_p.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Используя любой метод, мы можем найти, что Z-значение равно \(\приблизительно 1.281\)</p>
    <p>Это означает, что человек, рост которого на 1,281 стандартного отклонения выше среднего роста немцев, выше 90&#37; немцев.</p>
    <p>Затем мы используем формулу для вычисления высоты (\(x\)) на основе среднего (\(\mu\)) 170 см и стандартного отклонения (\(\sigma\)) 10 см:</p>
    <p>\(\displaystyle Z  = \frac{x-\mu}{\sigma} \)</p>
    <p>\(\displaystyle  1.281 = \frac{x-180}{10} \)</p>
    <p>\(1.281 \cdot 10 = x-180 \)</p>
    <p>\(12.81 = x - 180 \)</p>
    <p>\(12.81 + 180 = x \)</p>
    <p>\(\underline{192.81} = x \)</p>
    <p>Таким образом, мы можем сделать вывод, что:</p>
    <div class="w3-code notranslate">
        <p>"Вы должны быть не <b>ниже</b> 192,81 см, чтобы быть выше 90% немцев".</p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_normal_distribution.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_students_t_distribution.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>