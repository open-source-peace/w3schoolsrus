<?php include '../include/head.php'; ?>

<title>Статистика Описание данных. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Статистика. Описание данных. Описательная статистика. Какие бывают графики? Сводная статистика. Часть статистического анализа. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_stat.php'; ?>
<?php include '../include/before_content_stat.php'; ?>

<article>
    <h1>Статистика - Описание данных</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_gathering_data.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_making_conclusions.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Описание данных</strong> обычно является вторым этапом статистического анализа после сбора данных.</p>
    <hr>
    <h2>Описательная статистика</h2>
    <p>Информация (данные) из вашей выборки или генеральной совокупности может быть представлена в виде графиков или <strong>резюмирована</strong> числами. Это покажет ключевую информацию более простым способом, чем просто просмотр необработанных данных. Это может помочь нам понять, как данные <strong>распределяются</strong>.</p>
    <p>Графики могут наглядно показать распределение данных.</p>
    <p>Примеры графиков:</p>
    <ul>
        <li><a href="statistics_histograms.php">Гистограммы</a></li>
        <li><a href="statistics_pie_charts.php">Круговые диаграммы</a></li>
        <li><a href="statistics_bar_graphs.php">Бар-графики</a></li>
        <li><a href="statistics_box_plots.php">Коробочные диаграммы</a></li>
    </ul>
    <p>Некоторые графики тесно связаны с числовой сводной статистикой. Их вычисление даёт нам основу для этих графиков.</p>
    <p>Например, прямоугольная диаграмма визуально показывает <strong>квартили</strong> распределения данных.</p>
    <p>Квартили - это данные, разделенные на четыре части или четверти равного размера. Квартиль - это один из видов сводной статистики.</p>
    <h3>Сводная статистика</h3>
    <p>Сводная статистика требует большого объема информации и суммирует её в нескольких парах ключевых значений.</p>
    <p>Числа рассчитываются на основе данных, которые также описывают форму распределений. Это индивидуальная &quot;статистика&quot;.</p>
    <p>Вот несколько важных примеров:</p>
    <ul>
        <li><a href="statistics_average.php">Среднее, медиана и режим</a></li>
        <li><a href="statistics_range.php">Диапазон</a> и <a href="statistics_interquartile_range.php">межквартильный диапазон</a></li>
        <li><a href="statistics_quartiles_and_percentiles.php">Квартили и процентили</a></li>
        <li><a href="statistics_standard_deviation.php">Стандартное отклонение и дисперсия</a></li>
    </ul>
    <div class="w3-panel w3-info">
        <p><b>Примечание:</b> Описательная статистика часто представляется как часть <strong>статистического анализа</strong>.</p>
        <p>Описательная статистика также полезна для проведения дальнейшего анализа, анализа данных и поиска того, что стоит изучить более внимательно.</p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_gathering_data.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_making_conclusions.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>