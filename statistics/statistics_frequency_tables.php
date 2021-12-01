<?php include '../include/head.php'; ?>

<title>Статистика Таблицы частот. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Статистика Таблицы частот. Таблицы относительной, суммарной, накопительной частоты. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_stat.php'; ?>
<?php include '../include/before_content_stat.php'; ?>

<article>
    <h1>Статистика - Таблицы частот</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_descriptive_statistics.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_histograms.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Таблицы частот</strong> - это способ представления данных. Данные подсчитываются и упорядочиваются для обобщения больших наборов данных.</p>
    <p class="intro">С помощью таблицы частот можно проанализировать, как данные распределяются по различным значениям.</p>
    <hr>
    <h2>Таблицы частот</h2>
    <p>Частота означает, сколько раз значение появляется в данных. Таблица может быстро показать нам, сколько раз появляется каждое значение.</p>
    <p>Если данные имеют много разных значений, проще использовать интервалы значений для представления их в таблице.</p>
    <p>Вот возраст 934 лауреатов Нобелевской премии до 2020 года. В таблице каждая строка представляет собой возрастной интервал в 10 лет.</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Возрастной интервал</th>
            <th>Частота</th>
        </tr>
        <tr>
            <td>
                10-19
            </td>
            <td>
                1
            </td>
        </tr>
        <tr>
            <td>
                20-29
            </td>
            <td>
                2
            </td>
        </tr>
        <tr>
            <td>
                30-39
            </td>
            <td>
                48
            </td>
        </tr>
        <tr>
            <td>
                40-49
            </td>
            <td>
                158
            </td>
        </tr>
        <tr>
            <td>
                50-59
            </td>
            <td>
                236
            </td>
        </tr>
        <tr>
            <td>
                60-69
            </td>
            <td>
                262
            </td>
        </tr>
        <tr>
            <td>
                70-79
            </td>
            <td>
                174
            </td>
        </tr>
        <tr>
            <td>
                80-89
            </td>
            <td>
                50
            </td>
        </tr>
        <tr>
            <td>
                90-99
            </td>
            <td>
                3
            </td>
        </tr>
    </table>
    <p>Мы видим, что есть только один победитель в возрасте от 10 до 19 лет. И что наибольшее количество победителей - люди в возрасте от 60 лет.</p>
    <div class="w3-panel w3-info">
        <p><b>Примечание:</b> Интервалы значений также называются &quot;ячейками&quot;.</p>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h2>Таблицы относительной частоты</h2>
    <p>Относительная частота означает, сколько раз значение появляется в данных по сравнению с общим количеством. <strong>Процент</strong> - это относительная частота.</p>
    <p>Вот относительная частота возрастов лауреатов Нобелевской премии. Теперь все частоты делятся на общее количество (928), чтобы получить проценты.</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Возрастной интервал</th>
            <th>Относительная частота</th>
        </tr>
        <tr>
            <td>
                10-19
            </td>
            <td>
                0.11&#37;
            </td>
        </tr>
        <tr>
            <td>
                20-29
            </td>
            <td>
                0.21&#37;
            </td>
        </tr>
        <tr>
            <td>
                30-39
            </td>
            <td>
                5.14&#37;
            </td>
        </tr>
        <tr>
            <td>
                40-49
            </td>
            <td>
                16.92&#37;
            </td>
        </tr>
        <tr>
            <td>
                50-59
            </td>
            <td>
                25.27&#37;
            </td>
        </tr>
        <tr>
            <td>
                60-69
            </td>
            <td>
                28.05&#37;
            </td>
        </tr>
        <tr>
            <td>
                70-79
            </td>
            <td>
                18.63&#37;
            </td>
        </tr>
        <tr>
            <td>
                80-89
            </td>
            <td>
                5.35&#37;
            </td>
        </tr>
        <tr>
            <td>
                90-99
            </td>
            <td>
                0.32&#37;
            </td>
        </tr>
    </table>
    <?php include '../include/addown_content.php'; ?>
    <h2>Таблицы суммарной частоты</h2>
    <p>Суммарная частота рассчитывается до определенного значения.</p>
    <p>Вот суммарная частота возрастов лауреатов Нобелевской премии. Теперь мы можем увидеть, сколько победителей были моложе определенного возраста.</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Возраст</th>
            <th>Накопленная частота</th>
        </tr>
        <tr>
            <td>
                Моложе чем 20
            </td>
            <td>
                1
            </td>
        </tr>
        <tr>
            <td>
                Моложе чем 30
            </td>
            <td>
                3
            </td>
        </tr>
        <tr>
            <td>
                Моложе чем 40
            </td>
            <td>
                51
            </td>
        </tr>
        <tr>
            <td>
                Моложе чем 50
            </td>
            <td>
                208
            </td>
        </tr>
        <tr>
            <td>
                Моложе чем 60
            </td>
            <td>
                442
            </td>
        </tr>
        <tr>
            <td>
                Моложе чем 70
            </td>
            <td>
                701
            </td>
        </tr>
        <tr>
            <td>
                Моложе чем 80
            </td>
            <td>
                875
            </td>
        </tr>
        <tr>
            <td>
                Моложе чем 90
            </td>
            <td>
                925
            </td>
        </tr>
        <tr>
            <td>
                Моложе чем 100
            </td>
            <td>
                928
            </td>
        </tr>
    </table>
    <p>Таблицы накопительной частоты также могут быть составлены с относительными частотами (процентами).</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_descriptive_statistics.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_histograms.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>