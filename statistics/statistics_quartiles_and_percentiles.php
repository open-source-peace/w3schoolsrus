<?php include '../include/head.php'; ?>
<title>Статистика Квартили и процентили. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Статистика Квартили и процентили - это меры вариации, которые показывают, насколько разбросаны данные, являются типами квантилей. Расчет квартилей и процентилей с помощью программирования. Примеры. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_stat.php'; ?>
<?php include '../include/before_content_stat.php'; ?>

<article>
    <h1>Статистика - Квартили и процентили</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_range.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_interquartile_range.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Квартили</strong> и <strong>процентили</strong> - это меры вариации, которые показывают, насколько разбросаны данные.</p>
    <p class="intro">И квартили, и процентили являются типами <strong>квантилей</strong>.</p>
    <hr>
    <h2>Квартили</h2>
    <p><strong>Квартили</strong> - это значения, которые разделяют данные на четыре равные части.</p>
    <p>Вот гистограмма возраста всех 934 лауреатов Нобелевской премии до 2020 года, показывающая <strong>квартили</strong>:</p>
    <p><img src="../svg/img_histogram_quartiles.svg" style="width:100%; max-width:1000px; height:auto" alt="Гистограмма возраста лауреатов Нобелевской премии с указанием квартилей"></p>
    <p>Квартили (Q<sub>0</sub>,Q<sub>1</sub>,Q<sub>2</sub>,Q<sub>3</sub>,Q<sub>4</sub>) - это значения, которые разделяют каждую четверть.</p>
    <p>Между Q<sub>0</sub> и Q<sub>1</sub> находятся 25&#37; самые низкие значения в данных. Между Q<sub>1</sub> и Q<sub>2</sub> находятся следующие 25%. И так далее.</p>
    <ul>
        <li>Q<sub>0</sub> это наименьшее значение в данных.</li>
        <li>Q<sub>1</sub> это значение, отделяющее первую четверть от второй четверти данных</li>
        <li>Q<sub>2</sub> это среднее значение (медиана), отделяющее нижнюю часть от верхней</li>
        <li>Q<sub>3</sub> это значение, отделяющее третью четверть от четвёртой четверти</li>
        <li>Q<sub>4</sub> это наибольшее значение в данных</li>
    </ul>
    <hr>
    <h2>Расчет квартилей с помощью программирования</h2>
    <p>Квартили можно легко найти на многих языках программирования.</p>
    <p>Использование программного обеспечения и программирования для расчета статистики более распространено для больших наборов данных, так как поиск их вручную становится затруднительным.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <p>В Python используйте метод <code class="w3-codespan">quantile()</code> библиотеки NumPy, чтобы найти квартили значений 13, 21, 21, 40, 42, 48, 55, 72:</p>
            <div class="w3-code notranslate pythonHigh">
                import numpy
                <br>
                <br>
                values = [13,21,21,40,42,48,55,72]
                <br>
                <br>
                x = numpy.quantile(values, [0,0.25,0.5,0.75,1])
                <br>
                <br>
                print(x)
            </div>
            <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_stat_numpy_quartiles.html">Попробуйте сами &raquo;</a>
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <p>Используйте функцию R <code class="w3-codespan">quantile()</code> чтобы найти квантили значений 13, 21, 21, 40, 42, 48, 55, 72:</p>
            <div class="w3-code notranslate pythonHigh">
                values &lt;- c(13,21,21,40,42,48,55,72)
                <br>
                <br>
                quantile(values)
            </div>
            <a target="_blank" class="w3-btn w3-margin-top w3-margin-bottom" href="../rtryit/demo_stat_r_quartiles.html">Попробуйте сами &raquo;</a>
        </div>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h2>Процентили</h2>
    <p><strong>Процентили</strong> - это значения, которые разделяют данные на 100 равных частей.</p>
    <p>Например, 95-й процентиль отделяет самые низкие 95&#37; из значений сверху 5&#37;</p>
    <p>25-й процентиль (P<sub>25&#37;</sub>) совпадает с первым квартилем (Q<sub>1</sub>).</p>
    <p>50-й процентиль (P<sub>50&#37;</sub>) совпадает со вторым квартилем (Q<sub>2</sub>) и медианой.</p>
    <p>75-й процентиль (P<sub>75&#37;</sub>) совпадает с третьим квартилем (Q<sub>3</sub>)</p>
    <hr>
    <h2>Расчет процентилей с помощью программирования</h2>
    <p>Процентили легко найти во многих языках программирования.</p>
    <p>Использование программного обеспечения и программирования для расчета статистики более распространено для больших наборов данных, так как найти их вручную становится сложно.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <p>В Python используйте метод <code class="w3-codespan">percentile()</code> библиотеки NumPy, чтобы найти <code class="w3-codespan">65</code>-й процентиль значений 13, 21, 21, 40, 42, 48, 55, 72:</p>
            <div class="w3-code notranslate pythonHigh">
                import numpy
                <br>
                <br>
                values = [13,21,21,40,42,48,55,72]
                <br>
                <br>
                x = numpy.percentile(values, 65)
                <br>
                <br>
                print(x)
            </div>
            <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_stat_numpy_percentiles.html">Попробуйте сами &raquo;</a>
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div>
            <p>Используйте функцию R <code class="w3-codespan">quantile()</code> чтобы найти 65-й процентиль (<code class="w3-codespan">0.65</code>) значений 13, 21, 21, 40, 42, 48, 55, 72:</p>
            <div class="w3-code notranslate pythonHigh">
                values &lt;- c(13,21,21,40,42,48,55,72)
                <br>
                <br>
                quantile(values, 0.65)
            </div>
            <a target="_blank" class="w3-btn w3-margin-top w3-margin-bottom" href="../rtryit/demo_stat_r_percentiles.html">Попробуйте сами &raquo;</a>
        </div>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="statistics_box_plots.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="statistics_interquartile_range.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>