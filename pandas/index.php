<?php include '../include/head.php'; ?>

<title>Pandas Учебник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Pandas Учебник. Что такое Pandas? Это библиотека Python. Используется для анализа данных. Бесплатные уроки онлайн. Примеры кода. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_pandas.php'; ?>
<?php include '../include/before_content_pandas.php'; ?>
    <style>
        .pelle-btn {
            width:220px;
            border-radius:5px;
        }
        .pelle-btn.x2:link,.pelle-btn.x2:visited{
            background-color:#96D4D4;
            color:#000;
        }
        .pelle-btn.x3:link,.pelle-btn.x3:visited{
            background-color:#FFC0C7;
            color:#000;
        }
        .pelle-btn:link,.pelle-btn:visited {
            background-color:#D9EEE1;
            color:#000;
        }
        .pelle-btn:hover,.pelle-btn:active {
            background-color:#b9dfc7!important;
        }
        .pelle-btn.x2:hover,.pelle-btn.x2:active {
            background-color:#5cbcbc!important;
        }
        .pelle-btn.x3:hover,.pelle-btn.x3:active {
            background-color:#ff808e!important;
        }
        .pelle-divider {
            width:50%;
            border-right:2px solid #D9EEE1;
            font-size:10px;
        }
        .pelle-divider.x2 {
            border-right:2px solid #96D4D4;
        }
        .pelle-divider.x3 {
            border-right:2px solid #FFC0C7;
        }

    </style>
<article>
    <h1>Pandas <span class="color_h1">Учебник</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="../index.php">&#10094; Home</a>
        <a class="w3-right w3-btn" href="pandas_intro.php">Next &#10095;</a>
    </div>

    <div class="w3-panel w3-info intro" style="background-color:#f3ecea">
        <div class="w3-hide-small" style="float:right;font-size:70px;color:#ffc0c7">[+:</div>
        <p><strong>Pandas</strong> - это библиотека Python.</p>
        <p><strong>Pandas</strong> используется для анализа данных.</p>
    </div>

    <h2>Обучение чтением</h2>
    <p>Мы создали 14 обучающих страниц, чтобы вы узнали больше о Pandas.</p>
    <p>Начиная с базового введения и заканчивая очисткой и нанесением данных на график:</p>

    <div style="text-align:center;">
        <div class="w3-row">
            <div class="w3-col m4 l4">
                <h3 style="text-align:center">Основы</h3>
                <a href="pandas_intro.php" class="w3-btn pelle-btn">Интро</a>
                <div class="pelle-divider">&nbsp;</div>
                <a href="pandas_getting_started.php" class="w3-btn pelle-btn">Старт</a><br>
                <div class="pelle-divider">&nbsp;</div>
                <a href="pandas_series.php" class="w3-btn pelle-btn">Pandas Серии</a><br>
                <div class="pelle-divider">&nbsp;</div>
                <a href="pandas_dataframes.php" class="w3-btn pelle-btn">DataFrames</a><br>
                <div class="pelle-divider">&nbsp;</div>
                <a href="pandas_csv.php" class="w3-btn pelle-btn">Чтение CSV</a><br>
                <div class="pelle-divider">&nbsp;</div>
                <a href="pandas_json.php" class="w3-btn pelle-btn">Чтение JSON</a><br>
                <div class="pelle-divider">&nbsp;</div>
                <a href="pandas_analyzing.php" class="w3-btn pelle-btn">Анализ данных</a><br>
            </div>
            <div class="w3-col m4 l4">
                <h3>Очистка данных</h3>
                <a href="pandas_cleaning.php" class="w3-btn pelle-btn x2">Очистка данных</a><br>
                <div class="pelle-divider x2">&nbsp;</div>
                <a href="pandas_cleaning_empty_cells.php" class="w3-btn pelle-btn x2">Очистка пустых ячеек</a><br>
                <div class="pelle-divider x2">&nbsp;</div>
                <a href="pandas_cleaning_wrong_format.php" class="w3-btn pelle-btn x2">Очистка неправ. формата</a><br>
                <div class="pelle-divider x2">&nbsp;</div>
                <a href="pandas_cleaning_wrong_data.php" class="w3-btn pelle-btn x2">Очистка неправ. данных</a><br>
                <div class="pelle-divider x2">&nbsp;</div>
                <a href="pandas_cleaning_duplicates.php" class="w3-btn pelle-btn x2">Удаление дубликатов</a><br>
            </div>
            <div class="w3-col m4 l4">
                <h3>Продвинутый</h3>
                <a href="pandas_correlations.php" class="w3-btn pelle-btn x3">Корреляции</a><br>
                <div class="pelle-divider x3">&nbsp;</div>
                <a href="pandas_plotting.php" class="w3-btn pelle-btn x3">Создание диаграмм</a><br>
            </div>
        </div>
    </div>
    <hr>
    <h2>Обучение с помощью проверочной викторины</h2>
    <p>Проверьте ваши Pandas навыки с помощью проверочной викторины.</p>
    <p><a href="pandas_quiz.php" class="w3-button w3-blue shadow-black-1">Начать Pandas Викторину</a></p>
    <hr>
    <h2>Обучение с помощью упражнений</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/python/pandas/exercise.asp?filename=exercise_series1" method="post" target="_blank">
        <h2 class="shadow-black-1">Pandas Упражнения</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Вставьте правильный метод Pandas для создания серии.</p>
            <div class="exerciseprecontainer">
<pre>
pd.<input name="ex1" maxlength="6" style="width: 64px;">(mylist)
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <h2>Обучение с помощью примеров</h2>
    <p>В нашем онлайн-редакторе &quot;Попробуйте сами&quot; вы можете использовать модуль Pandas и изменить код, чтобы увидеть результат.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Загрузите CSV файл в Pandas DataFrame:</p>
        <div class="w3-code notranslate pythonHigh">
            import pandas as pd<br><br>df = pd.read_csv('data.csv')<br><br>print(df.to_string())&nbsp;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pandastryit/demo_pandas_csv.html">Попробуйте сами &raquo;</a>
    </div>
    <p>Кликните на кнопку <b>&quot;Попробуйте сами&quot;</b>, чтобы увидеть, как она работает.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="../index.php">&#10094; Home</a>
        <a class="w3-right w3-btn" href="pandas_intro.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>