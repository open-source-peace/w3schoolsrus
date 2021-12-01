<?php include '../include/head.php'; ?>

<title>Статистика Оценка доли совокупности. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Статистика Оценка доли совокупности. Доля совокупности. Доверительные интервалы. Предел погрешности. Расчет доверительного интервала. Проверка условий. Нахождение точечной оценки. Определение уровня достоверности. Расчет погрешности. <?php include '../include/description.php'; ?>'>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_stat.php'; ?>
<?php include '../include/before_content_stat.php'; ?>

<article>
    <h1>Статистика - Оценка доли совокупности</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_estimation.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_estimation_mean.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Доля совокупности</strong> - это часть совокупности, которая принадлежит к определенной <a href="statistics_data_types.php">категории</a>.</p>
    <p class="intro"><strong>Доверительные интервалы</strong> используются для <a href="statistics_estimation.php">estimate</a> доли совокупности.</p>
    <hr>
    <h2>Оценка доли совокупности</h2>
    <p>Статистика <a href="statistics_populations_and_samples.php">выборки</a> используется для оценки параметра генеральной совокупности.</p>
    <p>Наиболее вероятное значение параметра - это <strong>точечная оценка</strong>.</p>
    <p>Кроме того, мы можем вычислить <strong>нижнюю границу</strong> и <strong>верхнюю границу</strong> для оценочного параметра.</p>
    <p><strong>Предел погрешности</strong> - это разница между нижней и верхней границами от точечной оценки.</p>
    <p>Вместе нижняя и верхняя границы определяют <strong>доверительный интервал</strong>.</p>
    <hr>
    <h2>Расчет доверительного интервала</h2>
    <p>Для расчета доверительного интервала используются следующие шаги:</p>
    <ol>
        <li>Проверьте условия</li>
        <li>Найдите точечную оценку</li>
        <li>Определите уровень достоверности</li>
        <li>Рассчитайте погрешность</li>
        <li>Рассчитайте доверительный интервал</li>
    </ol>
    <p>Например:</p>
    <ul>
        <li><strong>Совокупность</strong>: Лауреаты Нобелевской премии</li>
        <li><strong>Категория</strong>: Родился в Соединенных Штатах Америки</li>
    </ul>
    <p>Мы можем взять выборку и посмотреть, сколько из них родились в США.</p>
    <p>Выборки данных используются для оценки доли <b>всех</b> лауреатов Нобелевской премии, родившихся в США.</p>
    <p>Случайным образом выбрав 30 лауреатов Нобелевской премии, мы смогли найти, что:</p>
    <div class="w3-code notranslate">
        <p>6 из 30 нобелевских лауреатов в выборке родились в США.</p>
    </div>
    <p>По этим данным мы можем рассчитать доверительный интервал, выполнив следующие действия.</p>
    <hr>
    <h2>1. Проверка условий</h2>
    <p>Условия для расчета доверительного интервала для доли следующие:</p>
    <ul>
        <li>Выборка <a href="statistics_sample_types.php">произведена случайным образом</a></li>
        <li>Есть только два варианта:</li>
        <ul>
            <li>Находиться в категории</li>
            <li>Не в категории</li>
        </ul>
        <li>Для выборки требуется как минимум:</li>
        <ul>
            <li>5 участников в категории</li>
            <li>5 участников не в категории</li>
        </ul>
    </ul>
    <p>В нашем примере мы случайным образом выбрали 6 человек, родившихся в США.</p>
    <p>Остальные не родились в США, поэтому 24 из них принадлежат к другой категории.</p>
    <p>В этом случае условия выполнены.</p>
    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Можно рассчитать доверительный интервал, не имея 5 из каждой категории. Но необходимо внести особые корректировки.</p>
    </div>
    <hr>
    <h2>2. Нахождение точечной оценки</h2>
    <p>Точечная оценка - это доля выборки (\(\hat{p}\)).</p>
    <p>Формула для расчета доли выборки - это количество вхождений (\(x\)), делённое на размер выборки (\(n\)):</p>
    <p>\(\displaystyle \hat{p} =\frac{x}{n}\)</p>
    <p>В нашем примере 6 из 30 родились в США: \(x\) is 6, and \(n\) is 30.</p>
    <p>Таким образом, точечная оценка доли равна:</p>
    <p>\(\displaystyle \hat{p} = \frac{x}{n} = \frac{6}{30} = \underline{0.2} = 20\%\)</p>
    <p>Таким образом, 20&#37; из выборки родились в США.</p>
    <hr>
    <h2>3. Определение уровня достоверности</h2>
    <p>Уровень достоверности выражается в процентах или десятичном числе.</p>
    <p>Например, если уровень достоверности 95% или 0,95:</p>
    <p>Оставшаяся вероятность (\(\alpha\)) тогда равна: 5%, или 1 - 0.95 = 0.05.</p>

    <p>Обычно используемые уровни достоверности:</p>
    <ul>
        <li>90&#37; с \(\alpha\) = 0.1</li>
        <li>95&#37; с \(\alpha\) = 0.05</li>
        <li>99&#37; с \(\alpha\) = 0.01</li>
    </ul>
    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> 95&#37; уровень достоверности означает, что если мы возьмем 100 различных выборок и сделаем доверительные интервалы для каждого:</p>
        <p>Истинный параметр будет в 95 доверительном интервале из этих 100 раз.</p>
    </div>
    <p>Мы используем <a href="statistics_standard_normal_distribution.php">стандартное нормальное распределение</a>, чтобы найти <strong>предел погрешности</strong> для доверительного интервала.</p>
    <p>Остальные вероятности (\(\alpha\)) делятся на две, так что половина находится в каждой хвостовой области распределения.</p>
    <p>Значения на оси z-значений, которые отделяют область хвоста от середины, называются <strong>критическими z-значениями</strong>.</p>
    <p>Ниже приведены графики стандартного нормального распределения, показывающие области хвоста (\(\alpha\)) для различных уровней достоверности.</p>
    <p><img src="../svg/img_z_ci.svg" style="width:100%; max-width:1200px; height:auto" alt="Стандартные нормальные распределения с двумя областями хвоста, с разными размерами"></p>
    <hr>

    <h2>4. Расчет погрешности</h2>
    <p>Предел погрешности - это разница между точечной оценкой и нижней и верхней границами.</p>
    <p>Предел погрешности (\(E\)) для пропорции рассчитывается с помощью <a href="statistics_z_table.php">критического z-значения</a> и <strong>стандартной ошибки</strong>:</p>
    <p>\(\displaystyle E = Z_{\alpha/2} \cdot \sqrt{\frac{\hat{p}(1-\hat{p})}{n}} \)</p>
    <p>Критическое z-значение \(Z_{\alpha/2} \) рассчитывается на основе стандартного нормального распределения и уровня достоверности.</p>
    <p>Стандартная ошибка \(\sqrt{\frac{\hat{p}(1-\hat{p})}{n}} \) рассчитывается из точечной оценки (\(\hat{p}\)) и размера выборки (\(n\)).</p>
    <p>В нашем примере с 6 лауреатами Нобелевской премии, родившимися в США из 30 выборки, стандартная ошибка равна:</p>
    <p>\(\displaystyle \sqrt{\frac{\hat{p}(1-\hat{p})}{n}} = \sqrt{\frac{0.2(1-0.2)}{30}} = \sqrt{\frac{0.2 \cdot 0.8}{30}} = \sqrt{\frac{0.16}{30}} = \sqrt{0.00533..} \approx \underline{0.073}\)</p>
    <p>Если мы выберем 95&#37; в качестве уровня достоверности \(\alpha\) составляет 0.05.</p>
    <p>Т.о. нам нужно найти критическое z-значение \(Z_{0.05/2} = Z_{0.025}\)</p>
    <p>Критическое z-значение можно найти с помощью <a href="statistics_z_table.php">Z-table</a> или с помощью функции языка программирования:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>В Python используйте функцию библиотеки Scipy Stats <code class="w3-codespan">norm.ppf()</code> чтобы найти Z-значение для \(\alpha\)/2 = 0.025</p>
        <div class="w3-code notranslate pythonHigh">
            import scipy.stats as stats
            <br>
            print(stats.norm.ppf(1-0.025))
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_stat_python_z_score.html">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>В R используйте встроенную функцию <code class="w3-codespan">qnorm()</code> чтобы найти Z-значение для \(\alpha\)/2 = 0.025</p>
        <div class="w3-code notranslate pythonHigh">
            qnorm(1-0.025)
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../rtryit/demo_stat_r_z_score.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Используя любой метод, мы можем найти, что критическое Z-значение \( Z_{\alpha/2} \) is \(\approx \underline{1.96} \)</p>
    <p>Стандартная ошибка \(\sqrt{\frac{\hat{p}(1-\hat{p})}{n}}\) была \( \approx \underline{0.073}\)</p>
    <p>Таким образом, предел погрешности (\(E\)) является:</p>
    <p>\(\displaystyle E = Z_{\alpha/2} \cdot \sqrt{\frac{\hat{p}(1-\hat{p})}{n}} \approx 1.96 \cdot 0.073  = \underline{0.143}\)</p>
    <hr>

    <h2>5. Рассчитайте доверительный интервал</h2>
    <p>Нижняя и верхняя границы доверительного интервала находятся путем вычитания и прибавления погрешности (\(E\)) из точечной оценки (\(\hat{p}\)).</p>
    <p>В нашем примере точечная оценка составила 0,2, а предел погрешности - 0,143, тогда:</p>
    <p>Нижняя граница:</p>
    <p>\(\hat{p} - E = 0.2 - 0.143 = \underline{0.057} \)</p>
    <p>Верхняя граница:</p>
    <p>\(\hat{p} + E = 0.2 + 0.143 = \underline{0.343} \)</p>
    <p>Доверительный интервал:</p>
    <p>\([0.057, 0.343]\) or \([5.7 \%, 34,4 \%]\)</p>
    <p>И мы можем резюмировать доверительный интервал, указав:</p>
    <div class="w3-code notranslate">
        <p>Доверительный интервал <strong>95&#37;</strong> для доли лауреатов Нобелевской премии, родившихся в США, находится между <strong>5.7&#37; и 34.4&#37;</strong></p>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h2>Расчет доверительного интервала с помощью программирования</h2>
    <p>Доверительный интервал можно рассчитать с помощью многих языков программирования.</p>
    <p>Использование программного обеспечения и программирования для расчета статистики более распространено для больших наборов данных, поскольку расчет вручную становится затруднительным.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>В Python используйте библиотеки scipy и math для вычисления доверительного интервала для предполагаемой доли.</p>
        <p>Здесь размер выборки составляет 30, а количество вхождений - 6.</p>
        <div class="w3-code notranslate pythonHigh">
            import scipy.stats as stats
            <br>
            import math
            <br>
            <br>
            # Укажите количество выборок (x), размер выборки (n) и уровень достоверности
            <br>
            x = 6
            <br>
            n = 30
            <br>
            confidence_level = 0.95
            <br>
            <br>
            # Рассчитайте точечную оценку, alpha, критическое z-значение, стандартную ошибку и предел погрешности
            <br>
            point_estimate = x/n
            <br>
            alpha = (1-confidence_level)
            <br>
            critical_z = stats.norm.ppf(1-alpha/2)
            <br>
            standard_error = math.sqrt((point_estimate*(1-point_estimate)/n))
            <br>
            margin_of_error = critical_z * standard_error
            <br>
            <br>
            # Рассчитайте нижнюю и верхнюю границы доверительного интервала
            <br>
            lower_bound = point_estimate - margin_of_error
            <br>
            upper_bound = point_estimate + margin_of_error
            <br>
            <br>
            # Распечатайте результаты
            <br>
            print("Point Estimate: {:.3f}".format(point_estimate))
            <br>
            print("Critical Z-value: {:.3f}".format(critical_z))
            <br>
            print("Margin of Error: {:.3f}".format(margin_of_error))
            <br>
            print("Confidence Interval: [{:.3f},{:.3f}]".format(lower_bound,upper_bound))
            <br>
            print("The {:.1%} confidence interval for the population proportion is:".format(confidence_level))
            <br>
            print("between {:.3f} and {:.3f}".format(lower_bound,upper_bound))
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_stat_python_prop_ci.html">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>R может использовать встроенные математические и статистические функции для вычисления доверительного интервала для предполагаемой доли.</p>
        <p>Здесь размер выборки составляет 30, а количество вхождений - 6.</p>
        <div class="w3-code notranslate pythonHigh">
            # Укажите количество выборок (x), размер выборки (n) и уровень достоверности
            <br>
            x = 6
            <br>
            n = 30
            <br>
            confidence_level = 0.95
            <br>
            <br>
            # Рассчитайте точечную оценку, alpha, критическое z-значение, стандартную ошибку и предел погрешности.
            <br>
            point_estimate = x/n
            <br>
            alpha = (1-confidence_level)
            <br>
            critical_z = qnorm(1-alpha/2)
            <br>
            standard_error = sqrt(point_estimate*(1-point_estimate)/n)
            <br>
            margin_of_error = critical_z * standard_error
            <br>
            <br>
            # Рассчитайте нижнюю и верхнюю границы доверительного интервала
            <br>
            lower_bound = point_estimate - margin_of_error
            <br>
            upper_bound = point_estimate + margin_of_error
            <br>
            <br>
            # Распечатайте результаты
            <br>
            sprintf("Point Estimate: %0.3f", point_estimate)
            <br>
            sprintf("Critical Z-value: %0.3f", critical_z)
            <br>
            sprintf("Margin of Error: %0.3f", margin_of_error)
            <br>
            sprintf("Confidence Interval: [%0.3f,%0.3f]", lower_bound, upper_bound)
            <br>
            sprintf("The %0.1f%% confidence interval for the population proportion is:", confidence_level*100)
            <br>
            sprintf("between %0.4f and %0.4f", lower_bound, upper_bound)
        </div>
        <a target="_blank" class="w3-btn w3-margin-top w3-margin-bottom" href="../rtryit/demo_stat_r_prop_ci.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_estimation.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_estimation_mean.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>