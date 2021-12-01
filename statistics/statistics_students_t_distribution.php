<?php include '../include/head.php'; ?>

<title>Статистика Стьюдент t-распределение. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Статистика Стьюдент t-распределение. Нахождение P-значения T-значения. Нахождение Z-значения T-значения. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_stat.php'; ?>
<?php include '../include/before_content_stat.php'; ?>

<article>
    <h1>Статистика - Стьюдент t-распределение</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_standard_normal_distribution.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_estimation.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Стьюдент t-распределение</strong> похоже на <a href="statistics_normal_distribution.php">нормальное распределение</a> и используется в статистических выводах для корректировки неопределенности.</p>
    <hr>
    <h2>Стьюдент t-распределение</h2>
    <p><strong>T-распределение</strong> используется для оценки и проверки гипотез для <a href="statistics_mean.php">среднего</a> совокупности (среднего значения).</p>
    <p><strong>T-распределение</strong> скорректировано с учетом дополнительной неопределенности оценки среднего.</p>
    <p>Если выборка мала, t-распределение шире. Если выборка большая, t-распределение уже.</p>
    <p>Чем больше размер выборки, тем ближе t-распределение к стандартному нормальному распределению.</p>
    <p>Ниже представлен график нескольких различных t-распределений.</p>
    <p><img src="../svg/img_t_distribution.svg" style="width:100%; max-width:1000px; height:auto" alt="Нормальное распределение и t-распределения с разными степенями свободы"></p>
    <p>Обратите внимание на то, что у некоторых кривых хвосты больше.</p>
    <p>Это связано с неопределенностью из-за меньшего размера выборки.</p>
    <p>Зеленая кривая соответствует наименьшему размеру выборки.</p>
    <p>Для t-распределения это выражается как &quot;степени свободы&quot; (df), которые вычисляются путем вычитания 1 из размера выборки (n).</p>
    <p>Например, размер выборки 30 даст 29 степеней свободы для t-распределения.</p>
    <p>T-распределение используется для нахождения <strong>критических t-значений</strong> и <strong>p-значений</strong> (вероятностей) для оценки и проверки гипотез.</p>
    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Нахождение критических t-значений и p-значений t-распределения аналогично z-значениям и p-значениям стандартного нормального распределения. Но убедитесь, что вы используете правильные степени свободы.</p>
    </div>
    <hr>
    <h2>Нахождение P-значения T-значения</h2>
    <p>Вы можете найти p-значения t-значения с помощью <a href="statistics_t_table.php">t-таблицы</a> или с помощью программирования.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>В Python используйте функцию <code class="w3-codespan">t.cdf()</code> из библиотеки Scipy Stats, чтобы определить вероятность получения значения t менее 2,1 с 29 степенями свободы:</p>
        <div class="w3-code notranslate pythonHigh">
            import scipy.stats as stats
            <br>
            print(stats.t.cdf(2.1, 29))
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_stat_python_t_p.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>С помощью R используйте встроенную функцию <code class="w3-codespan">pt()</code> и найдите вероятность получить значение меньше 2,1 при 29 степенях свободы:</p>
        <div class="w3-code notranslate pythonHigh">
            pt(2.1, 29)
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../rtryit/demo_stat_r_t_p.html">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h2>Нахождение Z-значения T-значения</h2>
    <p>Вы можете найти z-значения t-значения с помощью <a href="statistics_t_table.php">t-таблицы</a> или с помощью программирования.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>В Python используйте функцию библиотеки Scipy Stats <code class="w3-codespan">t.ppf()</code> найдите значение t, отделяющее верхние 25% от нижних 75% с 29 степенями свободы:</p>
        <div class="w3-code notranslate pythonHigh">
            import scipy.stats as stats
            <br>
            print(stats.t.ppf(0.75, 29))
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_stat_python_p_t.html">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>С помощью R используйте встроенную функцию <code class="w3-codespan">qt()</code> найдите значение t, отделяющее верхние 25% от нижних 75% с 29 степенями свободы (df):</p>
        <div class="w3-code notranslate pythonHigh">
            qt(0.75, 29)
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../rtryit/demo_stat_r_p_t.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_standard_normal_distribution.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_estimation.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>