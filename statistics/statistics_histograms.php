<?php include '../include/head.php'; ?>

<title>Статистика Гистограммы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Статистика Гистограммы. Гистограмма представляет количественные данные. Показывает частоту значений в данных, обычно в интервалах значений. Ширина ячейки. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_stat.php'; ?>
<?php include '../include/before_content_stat.php'; ?>

<article>
    <h1>Статистика - Гистограммы</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_frequency_tables.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_bar_graphs.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Гистограмма</strong> наглядно представляет количественные данные.</p>
    <hr>
    <h2>Гистограммы</h2>
    <p><strong>Гистограмма</strong> - это широко используемый график, показывающий распределение количественных (числовых) данных.</p>
    <p>Она показывает <strong>частоту</strong> значений в данных, обычно в интервалах значений. Частота - это количество раз, когда значение появлялось в данных.</p>
    <p>Каждый интервал представлен полосой, расположенной рядом с другими интервалами на числовой прямой.</p>
    <p>Высота полосы отображает частоту значений в этом интервале.</p>
    <p>Вот гистограмма возраста всех 934 лауреатов Нобелевской премии до 2020 года:</p>
    <p><img src="../svg/img_histogram.svg" style="width:100%; max-width:1200px; height:auto" alt="Гистограмма возраста лауреатов Нобелевской премии"></p>
    <p>Эта гистограмма использует возрастные интервалы от 10 до 19, от 20 до 29 и т.д.</p>
    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Гистограммы похожи на гистограммы, которые используются для качественных данных.</p>
    </div>
    <hr>
    <h2>Ширина ячейки</h2>
    <p>Интервалы значений часто называют &quot;ячейками&quot;. А длина интервала называется &quot;шириной ячейки&quot;.</p>
    <p>Мы можем выбрать любую ширину. Лучше всего, если ширина ячейки позволяет отображать достаточно деталей, не вызывая путаницы.</p>
    <p>Вот гистограмма тех же данных лауреата Нобелевской премии, но с шириной интервала 5 вместо 10:</p>
    <p><img src="../svg/img_histogram5bw.svg" style="width:100%; max-width:1200px; height:auto" alt="Гистограмма возраста лауреатов Нобелевской премии"></p>
    <p>В этой гистограмме используются возрастные интервалы от 15 до 19, от 20 до 24, от 25 до 29 и т.д.</p>
    <p>Меньшие интервалы дают более подробное представление о распределении значений возраста в данных.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_frequency_tables.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_bar_graphs.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>