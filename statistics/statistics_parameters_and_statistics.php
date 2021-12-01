<?php include '../include/head.php'; ?>

<title>Статистика Параметры и статистика. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Статистика Параметры и статистика выборки. Среднее значение, медиана и режим - это разные типы средних значений. Дисперсия и стандартное отклонение - это два типа значений, описывающих разброс значений. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_stat.php'; ?>
<?php include '../include/before_content_stat.php'; ?>

<article>
    <h1>Статистика - Параметры и статистика</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_populations_and_samples.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_study_types.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Термины &quot;параметр&quot; и &quot;статистика&quot; (выборки) относятся к ключевым понятиям, которые тесно связаны в статистике.</p>
    <p class="intro">Они также напрямую связаны с концепциями совокупностей и выборок.</p>
    <hr>
    <h2>Параметры и статистика</h2>
    <p><strong>Параметр</strong>: Число, которое описывает что-то обо всей <strong>совокупности</strong>.</p>
    <p><strong>Статистика выборки</strong>: Число, которое описывает что-то в <strong>выборке</strong>.</p>
    <p>Параметры - это ключевые вещи, о которых мы хотим узнать. Параметры обычно неизвестны.</p>
    <p>Статистика выборки даёт нам <strong>оценки</strong> параметров.</p>
    <p>Всегда остаётся <strong>неуверенность</strong> в том, насколько точны оценки. Больше уверенности даёт нам больше полезных знаний.</p>
    <p>Для каждого параметра, о котором мы хотим узнать, мы можем получить выборку и вычислить статистику выборки, которая даёт нам оценку параметра.</p>
    <?php include '../include/addown_content.php'; ?>
    <h3>Некоторые важные примеры</h3>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Параметр</th>
            <th>Статистика выборки</th>
        </tr>
        <tr>
            <td>Среднее</td>
            <td>Выборочное среднее</td>
        </tr>
        <tr>
            <td>Медиана</td>
            <td>Медиана выборки</td>
        </tr>
        <tr>
            <td>Режим</td>
            <td>Выборка режима</td>
        </tr>
        <tr>
            <td>Дисперсия</td>
            <td>Выборочная дисперсия</td>
        </tr>
        <tr>
            <td>Стандартное отклонение</td>
            <td>Стандартное отклонение выборки</td>
        </tr>
    </table>
    <p><strong>Среднее значение, медиана и режим</strong> - это разные типы средних значений (типичные (средние) значения в генеральной совокупности). <p> Например:</p>
    <ul>
        <li>Типичный возраст жителей страны</li>
        <li>Типичная прибыль компании</li>
        <li>Типичный пробег электромобиля</li>
    </ul>
    <p><strong>Дисперсия</strong> и <strong>стандартное отклонение</strong> - это два типа значений, описывающих разброс значений.
    <p>Один класс учеников в школе обычно бывает примерно одного возраста. Возраст учащихся будет иметь <b>низкую</b> дисперсию и стандартное отклонение.</p>
    <p>В целой стране будут люди самых разных возрастов. Тогда дисперсия и стандартное отклонение возраста по всей стране будут <b>больше</b>, чем в одном классе.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_populations_and_samples.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_study_types.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>