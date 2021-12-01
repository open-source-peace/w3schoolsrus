<?php include '../include/head.php'; ?>

<title>Статистика Среднее значение. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Статистика Среднее значение - мера того, где находится большинство значений в данных. Центр, среднее, медиана, режим. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_stat.php'; ?>
<?php include '../include/before_content_stat.php'; ?>

<article>
    <h1>Статистика - Среднее значение</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_box_plots.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_mean.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Среднее значение</strong> - это мера того, где находится большинство значений в данных.</p>
    <hr>
    <h2>Центр данных</h2>
    <p>В центре данных находится большинство значений в данных. Средние значения - это измерения <strong>местоположения</strong> центра.</p>
    <p>Есть разные типы средних значений. Чаще всего используются:</p>
    <ul>
        <li><a href="statistics_mean.php">Среднее</a></li>
        <li><a href="statistics_median.php">Медиана</a></li>
        <li><a href="statistics_mode.php">Режим</a></li>
    </ul>
    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> В статистике средние значения часто называют 'мерами <strong>центральных тенденций</strong>'.</p>
    </div>
    <p>Например, используя значения:</p>
    <div class="w3-code notranslate">
        <p>40, 21, 55, 21, 48, 13, 72</p>
    </div>
    <hr>
    <h2>Среднее</h2>
    <p>Среднее значение обычно называют &quot;средним&quot;.</p>
    <p>Среднее - это сумма всех значений в данных, деленная на общее количество значений в данных:</p>
    <div class="w3-code notranslate">
        <p>(40 + 21 + 55 + 31 + 48 + 13 + 72)/7 = <u>38.57</u></p>
    </div>
    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Есть несколько типов средних значений. Самый распространенный тип среднего - это <strong>среднее арифметическое</strong>.</p>
        <p>В этом учебнике &quot;среднее&quot; относится к среднему арифметическому.</p>
    </div>
    <hr>
    <h2>Медиана</h2>
    <p><strong>Медиана</strong> - это 'среднее значение' данных.</p>
    <p>Медиана находится путем <strong>упорядочивания всех значений</strong> в данных и выбора среднего значения:</p>
    <div class="w3-code notranslate">
        <p>13, 21, 21, <u>40</u>, 48, 55, 72</p>
    </div>
    <p><strong>Экстремальные</strong> значения в данных меньше влияют на медианное значение, чем на среднее значение.</p>
    <p>Изменение последнего значения на 356 не приводит к изменению медианы:</p>
    <div class="w3-code notranslate">
        <p>13, 21, 21, <u>40</u>, 48, 55, <strong>356</strong></p>
    </div>
    <p>Среднее значение по-прежнему 40.</p>
    <p>Изменение последнего значения на 356 сильно меняет <strong>среднее</strong>:</p>
    <div class="w3-code notranslate">
        <p>(13 + 21 + 21 + 40 + 48 + 55 + 72)/7 = <u>38.57</u></p>
        <p>(13 + 21 + 21 + 40 + 48 + 55 + <strong>356</strong>)/7 = <u>79.14</u></p>
    </div>
    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Экстремальные значения - это значения в данных, которые намного меньше или больше средних значений в данных.</p>
    </div>
    <hr>
    <h2>Режим</h2>
    <p><strong>Режим</strong> - это значения, которые чаще всего встречаются в данных:</p>
    <div class="w3-code notranslate">
        <p>40, <u>21</u>, 55, <u>21</u>, 48, 13, 72</p>
    </div>
    <p>Здесь 21 встречается два раза, а остальные значения - только один раз. Режим этих данных - 21.</p>
    <p>Этот режим также используется для <strong>категориальных</strong> данных, в отличие от медианы и среднего. Категориальные данные нельзя описать напрямую числами, например именами:</p>
    <div class="w3-code notranslate">
        <p>Alice, <u>John</u>, Bob, Maria, <u>John</u>, Julia, Carol</p>
    </div>
    <p>Здесь John появляется два раза, а остальные значения только один раз. Режим этих данных - John.</p>
    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Может быть несколько режимов, если несколько значений появляются в данных одинаковое количество раз.</p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_box_plots.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_mean.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>