<?php include '../include/head.php'; ?>

<title>Наука о данных Учебник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Наука о данных Учебник. Что такое Наука о данных? Язык программирования Python. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_datascience.php'; ?>
<?php include '../include/before_content_datascience.php'; ?>

<article>
    <h1>Наука о данных <span class="color_h1">Учебник</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="index.php">&#10094; Home</a>
        <a class="w3-right w3-btn" href="ds_introduction.php">Next &#10095;</a>
    </div>

    <div class="w3-panel w3-info intro">
        <div class="w3-row-padding">
            <div class="w3-rest">
                <p>Сегодня данные правят миром. Это привело к огромному спросу на специалистов по данным.</p>
                <p>Специалист по данным помогает компаниям принимать решения, основанные на данных, чтобы улучшить свой бизнес.</p>
                <a class="w3-btn w3-margin-bottom shadow-black-1" href="ds_introduction.php" style="font-size: 18px;padding-left:25px;padding-right:25px;font-family: 'Source Sans Pro', sans-serif;margin-top:6px;">Начать изучение Науки о данных немедленно &raquo;</a>
            </div>
        </div>
    </div>
    <hr>

    <h2>Обучение на примерах</h2>
    <p>С нашим редактором &quot;Попробуйте сами&quot; вы можете редактировать код на Python и просматривать результат.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate pythonHigh">
            import pandas as pd<br>import matplotlib.pyplot as plt<br>from scipy
            import stats<br><br>full_health_data = pd.read_csv(&quot;data.csv&quot;, header=0, sep=&quot;,&quot;)<br>
            <br>x = full_health_data[&quot;Average_Pulse&quot;]<br>y = full_health_data[&quot;Calorie_Burnage&quot;]<br>
            <br>slope, intercept, r, p, std_err = stats.linregress(x, y)<br><br>def myfunc(x):<br>&nbsp;return
            slope * x + intercept<br><br>mymodel = list(map(myfunc, x))<br>
            <br>plt.scatter(x, y)<br>plt.plot(x, mymodel)<br>plt.ylim(ymin=0, ymax=2000)<br>
            plt.xlim(xmin=0, xmax=200)<br>plt.xlabel(&quot;Average_Pulse&quot;)<br>plt.ylabel (&quot;Calorie_Burnage&quot;)<br>
            plt.show()</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_lr_least_square&multi=demo_data_full_multi.html">Попробуйте сами &raquo;</a>
    </div>
    <p>Кликните на кнопку <b>&quot;Попробуйте сами&quot;</b>, чтобы увидеть, как она работает.</p>
    <hr>

    <h2>Скачать Python</h2>
    <p>Скачать Python вы можете с официального сайта Python: <a target="_blank" href="https://python.org/" rel="nofollow">https://python.org</a>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="index.php">&#10094; Home</a>
        <a class="w3-right w3-btn" href="ds_introduction.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>