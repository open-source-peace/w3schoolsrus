<?php include '../include/head.php'; ?>

<title>Статистика Бар-графики. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Статистика Бар-графики (столбчатые диаграммы) визуально представляют качественные данные, показывают распределение качественных (категориальных) данных. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_stat.php'; ?>
<?php include '../include/before_content_stat.php'; ?>

<article>
    <h1>Статистика - Бар-графики</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_histograms.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_pie_charts.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Бар-графики</strong> (столбчатые диаграммы) визуально представляют качественные данные.</p>
    <hr>
    <h2>Бар-графики</h2>
    <p><strong>Бар-графики</strong> показывают распределение качественных (категориальных) данных.</p>
    <p>Они показывают <strong>частоту</strong> значений в данных. Частота - это количество раз, когда значение появлялось в данных.</p>
    <p>Каждая категория представлена полосой (баром). Высота полосы отображает частоту значений из этой категории в данных.</p>
    <p>Вот бар-график количества людей, получивших Нобелевскую премию в каждой категории до 2020 года:</p>
    <p><img src="../svg/img_bargraph.svg" style="width:100%; max-width:1200px; height:auto" alt="Бар-график количества людей, получивших Нобелевские премии в каждой категории"></p>
    <p>Некоторые категории существуют дольше других. В некоторых категориях также чаще встречаются множественные победители. Таким образом, количество победителей в каждой категории разное.</p>
    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Бар-графики похожи на гистограммы, которые используются для количественных данных.</p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_histograms.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_pie_charts.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>