<?php include '../include/head.php'; ?>

<title>Статистика Оценка средней совокупности. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Статистика Оценка средней совокупности. Среднее значение совокупности. Расчет доверительного интервала. Проверка условий. Нахождение точечной оценки. Определение уровня достоверности. Расчет погрешности. Рассчет доверительного интервала. <?php include '../include/description.php'; ?>'>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_stat.php'; ?>
<?php include '../include/before_content_stat.php'; ?>

<article>
    <h1>Статистика - Оценка средней совокупности</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_estimation_proportion.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_hypothesis_testing.php">Next &#10095;</a>
    </div>
    <p class="intro"><strong><a href="statistics_mean.php">Среднее</a> совокупности</strong> - это среднее значение <a href="statistics_data_types.php">числовой</a> переменной совокупности.</p>
    <p class="intro"><strong>Доверительные интервалы</strong> используются для <a href="statistics_estimation.php">оценки</a> средних значений совокупности.</p>
    <hr>
    <h2>Оценка среднего совокупности</h2>
    <p>Статистика из <a href="statistics_populations_and_samples.php">выборки</a> используется для оценки параметра генеральной совокупности.</p>
    <p>Наиболее вероятным значением параметра является <strong>точечная оценка</strong>.</p>
    <p>Кроме того, мы можем вычислить <strong>нижнюю границу</strong> и <strong>верхнюю границу</strong> для оценочного параметра.</p>
    <p><strong>Погрешность</strong> - это разница между нижней и верхней границами от точечной оценки.</p>
    <p>Вместе нижняя и верхняя границы определяют <strong>доверительный интервал</strong>.</p>
    <hr>
    <h2>Расчет доверительного интервала </h2>
    <p>Для расчета доверительного интервала используются следующие шаги:</p>
    <ol>
        <li>Проверить условия</li>
        <li>Найдите точечную оценку</li>
        <li>Определите уровень достоверности</li>
        <li>Рассчитайте погрешность</li>
        <li>Рассчитать доверительный интервал</li>
    </ol>
    <p>Например:</p>
    <ul>
        <li><strong>Совокупность</strong>: Лауреаты Нобелевской премии</li>
        <li><strong>Переменная</strong>: Возраст, когда они получили Нобелевскую премию</li>
    </ul>
    <p>Мы можем взять выборку и вычислить среднее значение и <a href="statistics_standard_deviation.php">стандартное отклонение</a> этой выборки.</p>
    <p>Выборки данных используются для оценки среднего возраста <b>всех</b> лауреатов Нобелевской премии.</p>
    <p>Случайным образом выбрав 30 лауреатов Нобелевской премии, мы смогли найти, что:</p>
    <div class="w3-code notranslate">
        <p>Средний возраст в выборке - 62,1 года</p>
        <p>Стандартное отклонение возраста в выборке составляет 13.46</p>
    </div>
    <p>На основе этих данных мы можем рассчитать доверительный интервал, выполнив следующие действия.</p>
    <?php include '../include/addown_content.php'; ?>
    <h2>1. Проверка условий</h2>
    <p>Условия для расчета доверительного интервала для среднего:</p>
    <ul>
        <li>Выборка произведена <a href="statistics_sample_types.php">случайным образом</a></li>
        <li>И при этом:</li>
        <ul>
            <li>Данные о совокупности распределены нормально</li>
            <li>Размер выборки достаточно велик</li>
        </ul>
    </ul>
    </ul>
    <p>Обычно достаточно большого размера выборки, например 30.</p>
    <p>В этом примере размер выборки был 30, и она была выбрана случайным образом, поэтому условия выполняются.</p>
    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Проверить, нормально ли распределяются данные, можно с помощью специализированных статистических тестов.</p>
    </div>
    <hr>
    <h2>2. Нахождение точечной оценки</h2>
    <p>Точечная оценка - это <a href="statistics_mean.php">среднее выборки</a> (\(\bar{x}\)).</p>
    <p>Формула для вычисления среднего значения выборки представляет собой сумму всех значений \(\sum x_{i}\) деленную на размер выборки (\(n\)):</p>
    <p>\(\displaystyle \bar{x} = \frac{\sum x_{i}}{n}\)</p>
    <p>В нашем примере средний возраст в выборке составил 62,1 года.</p>
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
        <p><b>Примечание:</b> А 95&#37; уровень достоверности означает, что если мы возьмем 100 различных выборок и сделаем доверительные интервалы для каждой:</p>
        <p>Истинный параметр будет в 95 доверительном интервале из этих 100 раз.</p>
    </div>
    <p>Мы используем <a href="statistics_students_t_distribution.php">стьюдент t-распределение</a>, чтобы найти <strong>предел погрешности</strong> для доверительного интервала.</p>
    <p>T-распределение корректируется для размера выборки с помощью &quot;degrees of freedom&quot; (df) - &quot;степеней свободы&quot;.</p>
    <p>Степени свободы - это размер выборки (n) - 1, поэтому в этом примере это 30 - 1 = 29</p>
    <p>Оставшиеся вероятности (\(\alpha\)) делятся на две, так что половина приходится на каждую хвостовую область распределения.</p>
    <p>Значения на оси t-значений, которые отделяют область хвоста от середины, называются <strong>критическими t-значениями</strong>.</p>
    <p>Ниже приведены графики стандартного нормального распределения, показывающие области хвоста (\(\alpha\)) для различных уровней достоверности при 29 степенях свободы (df).</p>
    <p><img src="../svg/img_t_ci.svg" style="width:100%; max-width:1200px; height:auto" alt="Стьюдент t-распределение с двумя областями хвоста, с разными размерами"></p>
    <?php include '../include/addown_content.php'; ?>
    <h2>4. Расчет погрешности</h2>
    <p>Предел погрешности - это разница между точечной оценкой и нижней и верхней границами.</p>
    <p>Предел погрешности (\(E\)) для пропорции рассчитывается с помощью <a href="statistics_t_table.php">критического t-значения</a> и <strong>стандартной ошибки</strong>:</p>
    <p>\(\displaystyle E = t_{\alpha/2}(df) \cdot \frac{s}{\sqrt{n}} \)</p>
    <p>Критическое t-значение \(t_{\alpha/2}(df) \) рассчитывается на основе стандартного нормального распределения и уровня достоверности.</p>
    <p>Стандартная ошибка \(\frac{s}{\sqrt{n}} \) рассчитывается на основе стандартного отклонения выборки (\(s\)) и размера выборки (\(n\)).</p>
    <p>В нашем примере со стандартным отклонением выборки (\(s\)) 13,46 и размером выборки 30 стандартная ошибка составляет:</p>
    <p>\(\displaystyle \frac{s}{\sqrt{n}} = \frac{13.46}{\sqrt{30}} \approx \frac{13.46}{5.477} = \underline{2.458}\)</p>
    <p>Если мы выберем 95&#37; в качестве уровня достоверности \(\alpha\) является 0.05.</p>
    <p>Т.о. нам нужно найти критическое t-значение \(t_{0.05/2}(29) = t_{0.025}(29)\)</p>
    <p>Критическое t-значение можно найти с помощью <a href="statistics_t_table.php">t-таблицы</a> или с помощью функции языка программирования:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <p>В Python используйте функцию библиотеки Scipy Stats <code class="w3-codespan">t.ppf()</code> чтобы найти t-значение для \(\alpha\)/2 = 0.025 и 29 степеней свободы.</p>
            <div class="w3-code notranslate pythonHigh">
                import scipy.stats as stats
                <br>
                print(stats.t.ppf(1-0.025, 29))
            </div>
            <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_stat_python_t_score.html">Попробуйте сами &raquo;</a>
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <p>В R используйте встроенную функцию <code class="w3-codespan">qt()</code> чтобы найти t-значение для \(\alpha\)/2 = 0.025 и 29 степеней свободы.</p>
            <div class="w3-code notranslate pythonHigh">
                qt(1-0.025, 29)
            </div>
            <a target="_blank" class="w3-btn w3-margin-bottom" href="../rtryit/demo_stat_r_t_score.html">Попробуйте сами &raquo;</a>
        </div>
    </div>
    <p>Используя любой метод, мы можем найти, что критическое t-значение \(t_{\alpha/2}(df)\) является \(\approx \underline{2.05} \)</p>
    <p>Стандартная ошибка \(\frac{s}{\sqrt{n}}\) была \( \approx \underline{2.458}\)</p>
    <p>Таким образом, погрешность равна (\(E\)):</p>
    <p>\(\displaystyle E = t_{\alpha/2}(df) \cdot \frac{s}{\sqrt{n}} \approx 2.05 \cdot 2.458  = \underline{5.0389}\)</p>
    <?php include '../include/addown_content.php'; ?>
    <h2>5. Рассчет доверительного интервала</h2>
    <p>Нижняя и верхняя границы доверительного интервала находятся путем вычитания и прибавления погрешности (\(E\)) из точечной оценки (\(\bar{x}\)).</p>
    <p>В нашем примере точечная оценка составила 0,2, а предел погрешности - 0,143, тогда:</p>
    <p>Нижняя граница:</p>
    <p>\(\bar{x} - E = 62.1 - 5.0389 \approx \underline{57.06} \)</p>
    <p>Верхняя граница:</p>
    <p>\(\bar{x} + E = 62.1 + 5.0389 \approx \underline{67.14} \)</p>
    <p>Доверительный интервал:</p>
    <p>\([57.06, 67.14]\)</p>
    <p>И мы можем резюмировать доверительный интервал, указав:</p>
    <div class="w3-code notranslate">
        <p><strong>95&#37;</strong> доверительный интервал для среднего возраста лауреатов Нобелевской премии составляет от <strong>57.06 до 67.14 лет</strong></p>
    </div>
    <hr>
    <h2>Расчет доверительного интервала с помощью программирования</h2>
    <p>Доверительный интервал можно рассчитать с помощью многих языков программирования.</p>
    <p>Использование программного обеспечения и программирования для расчета статистики более распространено для больших наборов данных, поскольку расчет вручную становится затруднительным.</p>
    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Результаты использования программного кода будут более точными из-за округления значений при вычислении вручную.</p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <p>В Python используйте scipy и math библиотеки для вычисления доверительного интервала для предполагаемой доли.</p>
            <p>Здесь размер выборки - 30, среднее значение выборки - 62,1, а стандартное отклонение - 13,46.</p>
            <div class="w3-code notranslate pythonHigh">
                import scipy.stats as stats
                <br>
                import math
                <br>
                <br>
                # Укажите среднее значение выборки (x_bar), стандартное отклонение выборки (s), размер выборки (n) и уровень достоверности
                <br>
                x_bar = 62.1
                <br>
                s = 13.46
                <br>
                n = 30
                <br>
                confidence_level = 0.95
                <br>
                <br>
                # Рассчитайте alpha, степени свободы (df), критическое t-значение и предел погрешности
                <br>
                alpha = (1-confidence_level)
                <br>
                df = n - 1
                <br>
                standard_error = s/math.sqrt(n)
                <br>
                critical_t = stats.t.ppf(1-alpha/2, df)
                <br>
                margin_of_error = critical_t * standard_error
                <br>
                <br>
                # Вычислить нижнюю и верхнюю границы доверительного интервала
                <br>
                lower_bound = x_bar - margin_of_error
                <br>
                upper_bound = x_bar + margin_of_error
                <br>
                <br>
                # Распечатайте результаты
                <br>
                print("Critical t-value: {:.3f}".format(critical_t))
                <br>
                print("Margin of Error: {:.3f}".format(margin_of_error))
                <br>
                print("Confidence Interval: [{:.3f},{:.3f}]".format(lower_bound,upper_bound))
                <br>
                print("The {:.1%} confidence interval for the population mean is:".format(confidence_level))
                <br>
                print("between {:.3f} and {:.3f}".format(lower_bound,upper_bound))
            </div>
            <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_stat_python_mean_ci.html">Попробуйте сами &raquo;</a>
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <p>R может использовать встроенные математические и статистические функции для вычисления доверительного интервала для предполагаемой доли.</p>
            <p>Здесь размер выборки - 30, среднее значение выборки - 62,1, а стандартное отклонение - 13,46.</p>
            <div class="w3-code notranslate pythonHigh">
                # Укажите среднее значение выборки (x_bar), стандартное отклонение выборки (s), размер выборки (n) и уровень достоверности
                <br>
                x_bar = 62.1
                <br>
                s = 13.46
                <br>
                n = 30
                <br>
                confidence_level = 0.95
                <br>
                <br>
                # Рассчитайте alpha, степени свободы (df), критическое t-значение и предел погрешности.
                <br>
                alpha = (1-confidence_level)
                <br>
                df = n - 1
                <br>
                standard_error = s/sqrt(n)
                <br>
                critical_t = qt(1-alpha/2, 29)
                <br>
                margin_of_error = critical_t * standard_error
                <br>
                <br>
                # Вычислить нижнюю и верхнюю границы доверительного интервала
                <br>
                lower_bound = x_bar - margin_of_error
                <br>
                upper_bound = x_bar + margin_of_error
                <br>
                <br>
                # Распечатайте результаты
                <br>
                sprintf("Critical t-value: %0.3f", critical_t)
                <br>
                sprintf("Margin of Error: %0.3f", margin_of_error)
                <br>
                sprintf("Confidence Interval: [%0.3f,%0.3f]", lower_bound, upper_bound)
                <br>
                sprintf("The %0.1f%% confidence interval for the population mean is:", confidence_level*100)
                <br>
                sprintf("between %0.4f and %0.4f", lower_bound, upper_bound)
            </div>
            <a target="_blank" class="w3-btn w3-margin-top w3-margin-bottom" href="../rtryit/demo_stat_r_mean_ci.html">Попробуйте сами &raquo;</a>
        </div>
    </div>
    <div class="w3-panel w3-info">
        <p><b>Примечание:</b> R также имеет встроенную функцию для вычисления доверительного интервала для среднего значения генеральной совокупности.</p>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <p>R может использовать встроенную функцию <code class="w3-codespan">t.test()</code> для вычисления доверительного интервала для оценочного среднего.</p>
            <p>Здесь выборка представляет собой 30 случайно сгенерированных значений со средним значением 60 и стандартным отклонением 12,5 с использованием функции <code class="w3-codespan">rnorm()</code> для создания выборки.</p>
            <div class="w3-code notranslate pythonHigh">
                # Укажите размер выборки (n) и уровень достоверности
                <br>
                n = 30
                <br>
                confidence_level = 0.95
                <br>
                <br>
                # Установите случайное начальное число и сгенерируйте данные выборки со средним значением 60 и стандартным отклонением 12,5
                <br>
                set.seed(3)
                <br>
                sample <- rnorm(n, 60, 12.5)
                <br>
                <br>
                # t.test function for sample data, confidence level, and selecting the $conf.int option
                <br>
                t.test(sample, conf.level = confidence_level)$conf.int
            </div>
            <a target="_blank" class="w3-btn w3-margin-top w3-margin-bottom" href="../rtryit/demo_stat_r_mean_ci2.html">Попробуйте сами &raquo;</a>
        </div>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_estimation_proportion.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_hypothesis_testing.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>