<?php include '../include/head.php'; ?>

<title>Статистика Совокупности и выборки. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Статистика Совокупности и выборки. Что такое совокупность и выборка. Совокупность - группа, о которой мы хотим узнать. Выборка - это часть совокупности. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_stat.php'; ?>
<?php include '../include/before_content_stat.php'; ?>

<article>
    <h1>Статистика - Совокупности и выборки</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_prediction_and_explanation.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_parameters_and_statistics.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Термины &quot;совокупность&quot; и &quot;выборка&quot; важны в статистике и относятся к ключевым понятиям, которые тесно связаны между собой.<p></p>
    <hr>
    <h2>Совокупность и выборка</h2>
    <p><strong>Совокупность</strong>: Всё в группе, о чем мы хотим узнать.</p>
    <p><strong>Выборка</strong>: часть совокупности.</p>
    <p>Примеры совокупностей и выборка из этих совокупностей:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Совокупность</th>
            <th>Выборка</th>
        </tr>
        <tr>
            <td>Все люди в Германии</td>
            <td>500 германцев</td>
        </tr>
        <tr>
            <td>Все клиенты Netflix</td>
            <td>300 Netflix клиентов</td>
        </tr>
        <tr>
            <td>Каждый производитель автомобилей</td>
            <td>Tesla, Toyota, BMW, Ford</td>
        </tr>
    </table>
    <?php include '../include/addown_content.php'; ?>
    <p>Для хорошего статистического анализа выборка должна быть как можно более &quot;похожей&quot; на генеральную совокупность. Если они достаточно похожи, мы говорим, что выборка <strong>репрезентативна</strong> для совокупности.</p>
    <p>Выборка используется, чтобы сделать выводы о генеральной совокупности. Если выборка недостаточно похожа на всю совокупность, выводы могут быть бесполезными.</p>
    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Многие слова имеют определенное значение в статистике.</p>
        <p>Слово &quot;совокупность&quot; (или &quot;популяция&quot;) обычно относится к группе людей. В статистике это любая конкретная группа, о которой нам интересно узнать.</p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_prediction_and_explanation.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_parameters_and_statistics.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>