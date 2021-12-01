<?php include '../include/head.php'; ?>

<title>Статистика Статистические выводы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Статистика Статистические выводы. Основные типы: оценка, проверка гипотез. Распределение вероятностей. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_stat.php'; ?>
<?php include '../include/before_content_stat.php'; ?>

<article>
    <h1>Статистика - Статистические выводы</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_standard_deviation.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_normal_distribution.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>Статистические выводы</h2>
    <p>Использование анализа данных и статистики для заключения о <a href="statistics_populations_and_samples.php">совокупности</a> называется статистическим выводом.</p>
    <p>Основные типы статистических выводов:</p>
    <ul>
        <li>Оценка</li>
        <li>Проверка гипотез</li>
    </ul>
    <hr>
    <h2>Оценка</h2>
    <p>Статистика из выборки используется для оценки <a href="statistics_parameters_and_statistics.php">параметров</a> совокупности.</p>
    <p>Наиболее вероятное значение называется <strong>точечной оценкой</strong>.</p>
    <p>При оценке <b>всегда</b> присутствует неопределенность.</p>
    <p>Неопределенность часто выражается как <strong>доверительные интервалы</strong>, определяемые вероятным наименьшим и наибольшим значением параметра.</p>
    <p>Примером может служить доверительный интервал для количества велосипедов, которыми владеет голландец:</p>
    <div class="w3-code notranslate">
        <p>"Среднее количество велосипедов, которыми владеет голландец, составляет от 3,5 до 6 штук."</p>
    </div>
    <hr>
    <h2>Проверка гипотез</h2>
    <p><strong>Проверка гипотез</strong> - это метод проверки правильности утверждения о совокупности. Точнее, он проверяет, насколько вероятно, что гипотеза верна, на основе выборочных данных.</p>
    <p>Существуют разные типы проверки гипотез.</p>
    <p>Этапы теста зависят от:</p>
    <ul>
        <li>Тип данных (категориальные или числовые)</li>
        <li>Если вы смотрите на:</li>
        <ul>
            <li>Одна группа</li>
            <li>Сравнение одной группы с другой</li>
            <li>Сравнение одной и той же группы до и после изменения</li>
        </ul>
    </ul>
    <p>Некоторые примеры утверждений или вопросов, которые можно проверить с помощью проверки гипотез:</p>
    <div class="w3-code notranslate">
        <ul>
            <li>90&#37; австралийцев левши</li>
            <li>Средний вес собак превышает 40 кг?</li>
            <li>Врачи зарабатывают больше денег, чем юристы?</li>
        </ul>
    </div>
    <hr>
    <h2>Распределение вероятностей</h2>
    <p>Методы статистического вывода основаны на вычислении вероятности и распределении вероятностей.</p>
    <p>На следующих страницах вы узнаете о наиболее важных распределениях вероятностей.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_standard_deviation.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_normal_distribution.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>