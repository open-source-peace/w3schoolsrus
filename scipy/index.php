<?php include '../include/head.php'; ?>

<title>SciPy Учебник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='SciPy Учебник. Что такое SciPy? - Это библиотека научных вычислений, в которой используется NumPy. Означает научный Python. Бесплатные уроки онлайн. Примеры кода. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_scipy.php'; ?>
<?php include '../include/before_content_scipy.php'; ?>
    <style>
        .pelle-btn {
            width:180px;
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
    <h1>SciPy <span class="color_h1">Учебник</span></h1>

    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="index.php">&#10094; Home</a>
        <a class="w3-right w3-btn" href="scipy_intro.php">Next &#10095;</a>
    </div>
    <div class="w3-panel w3-info intro" style="background-color:#f3ecea">
        <div class="w3-hide-small" style="float:right;font-size:70px;color:#ffc0c7">[+:</div>
        <p><strong>SciPy</strong> - это библиотека научных вычислений, в которой используется <a href="../numpy/index.php">NumPy</a>.</p>
        <p><strong>SciPy</strong> означает Scientific Python (Научный Python).</p>
    </div>

    <h2>Обучение чтением</h2>
    <p>Мы создали 10 обучающих страниц, чтобы вы могли изучить основы SciPy:</p>

    <div style="text-align:center;">
        <div class="w3-row">
            <div class="w3-col m12 l12">
                <h3 style="text-align:center">Основы SciPy</h3>
                <a href="scipy_intro.php" class="w3-btn pelle-btn">Интро</a>
                <div class="pelle-divider">&nbsp;</div>
                <a href="scipy_getting_started.php" class="w3-btn pelle-btn">Старт</a><br>
                <div class="pelle-divider">&nbsp;</div>
                <a href="scipy_constants.php" class="w3-btn pelle-btn">Константы</a><br>
                <div class="pelle-divider">&nbsp;</div>
                <a href="scipy_optimizers.php" class="w3-btn pelle-btn">Оптимизаторы</a><br>
                <div class="pelle-divider">&nbsp;</div>
                <a href="scipy_sparse_data.php" class="w3-btn pelle-btn">Разрозненные данные</a><br>
                <div class="pelle-divider">&nbsp;</div>
                <a href="scipy_graphs.php" class="w3-btn pelle-btn">Графики</a><br>
                <div class="pelle-divider">&nbsp;</div>
                <a href="scipy_spatial_data.php" class="w3-btn pelle-btn">Пространственные данные</a><br>
                <div class="pelle-divider">&nbsp;</div>
                <a href="scipy_matlab_arrays.php" class="w3-btn pelle-btn">Массивы Matlab</a><br>
                <div class="pelle-divider">&nbsp;</div>
                <a href="scipy_interpolation.php" class="w3-btn pelle-btn">Интерполяция</a><br>
                <div class="pelle-divider">&nbsp;</div>
                <a href="scipy_statistical_significance_tests.php" class="w3-btn pelle-btn">Тесты на значимость</a><br>
            </div>
        </div>
    </div>
    <hr>

    <h2>Обучение с помощью проверочной викторины</h2>
    <p>Проверьте свои SciPy навыки с помощью проверочной викторины.</p>
    <p><a href="scipy_quiz.php" class="w3-button w3-blue">Начать SciPy Викторину</a></p>
    <hr>

    <h2>Обучение с помощью упражнений</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/python/scipy/exercise.php?filename=exercise_constants1" method="post" target="_blank">
        <h2>SciPy Упражнения</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Вставьте правильный синтаксис для вывода единицы километра (в метрах):</p>
            <div class="exerciseprecontainer">
<pre>
print(constants.<input name="ex1" maxlength="4" style="width: 44px;">);
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Submit Answer &raquo;</button>
        </div>
    </form>
    <hr>
    <h2>Обучение с помощью упражнений</h2>
    <p>В нашем онлайн-редакторе &quot;Попробуйте сами&quot; вы можете использовать модуль SciPy и изменить код, чтобы увидеть результат.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Сколько кубометров в одном литре:</p>
        <div class="w3-code notranslate pythonHigh">
            from scipy import constants
            <br><br>
            print(constants.liter)</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pytontryit/demo_scipy_import.html">Попробуйте сами &raquo;</a>
    </div>

    <p><b>Кликните на кнопку &quot;Попробуйте сами&quot; чтобы увидеть, как она работает.</b></p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="index.php">&#10094; Home</a>
        <a class="w3-right w3-btn" href="scipy_intro.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>