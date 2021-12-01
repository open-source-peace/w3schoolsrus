<?php include '../include/head.php'; ?>

<title>Статистика Круговые диаграммы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Статистика Круговые диаграммы наглядно представляют качественные данные, используются для отображения распределения качественных (категориальных) данных. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_stat.php'; ?>
<?php include '../include/before_content_stat.php'; ?>

<article>
    <h1>Статистика - Круговые диаграммы</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_bar_graphs.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_box_plots.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Круговая диаграмма</strong> наглядно представляет качественные данные.</p>
    <hr>
    <h2>Круговые диаграммы</h2>
    <p>Круговые диаграммы используются для отображения распределения качественных (категориальных) данных.</p>
    <p>Она показывает <strong>частоту</strong> или <strong>относительную частоту</strong> значений в данных.</p>
    <p>Частота - это количество раз, когда значение появлялось в данных. Относительная частота - это процент от общего числа.</p>
    <p>Каждая категория представлена кусочком в &quot;круговой диаграмме&quot; (круге). Размер каждого среза представляет частоту значений из этой категории в данных.</p>
    <p>Вот круговая диаграмма количества людей, получивших Нобелевскую премию в каждой категории до 2020 года:</p>
    <p><img src="../svg/img_piechart.svg" style="width:100%; max-width:1000px; height:auto" alt="Круговая диаграмма числа людей, получивших Нобелевские премии в каждой категории"></p>
    <p>Эта круговая диаграмма показывает относительную частоту. Таким образом, размер каждого фрагмента определяется процентным соотношением для каждой категории.</p>
    <p>Некоторые категории существуют дольше других. В некоторых категориях также чаще встречаются множественные победители. Таким образом, количество победителей в каждой категории разное.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_bar_graphs.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_box_plots.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>