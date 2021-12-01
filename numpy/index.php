<?php include '../include/head.php'; ?>

<title>NumPy Учебник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='NumPy Учебник. Что такое NumPy? Python библиотека, которая используется для работы с массивами. Бесплатные уроки онлайн. Примеры кода. <?php include '../include/description.php'; ?>'>
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
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_numpy.php'; ?>
<?php include '../include/before_content_numpy.php'; ?>

<article>
    <h1>NumPy <span class="color_h1">Учебник</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="../index.php">&#10094; Home</a>
        <a class="w3-right w3-btn" href="numpy_intro.php">Next &#10095;</a>
    </div>

    <div class="w3-panel w3-info intro" style="background-color:#f3ecea">
        <div class="w3-hide-small" style="float:right;font-size:70px;color:#ffc0c7">[+:</div>
        <p><strong>NumPy</strong> - это Python библиотека.</p>
        <p><strong>NumPy</strong> - используется для работы с массивами.</p>
        <p><strong>NumPy</strong> - это сокращение от Numerical Python (Числовой Python).</p>
    </div>

    <h2>Обучение через чтение</h2>
    <p>Мы создали 43 обучающих страницы, чтобы вы узнали больше о NumPy.</p>
    <p>Начиная с базового введения и заканчивая созданием и нанесением на график случайных наборов данных, а также работой с функциями NumPy:</p>

    <div style="text-align:center;">
        <div class="w3-row">
            <div class="w3-col m4 l4">
                <h3 style="text-align:center">Основы</h3>
                <a class="w3-btn pelle-btn" href="numpy_intro.php">Интро</a>
                <div class="pelle-divider">&nbsp;</div>
                <a class="w3-btn pelle-btn" href="numpy_getting_started.php">Старт</a>
                <div class="pelle-divider">&nbsp;</div>
                <a class="w3-btn pelle-btn" href="numpy_creating_arrays.php">Создание массивов</a>
                <div class="pelle-divider">&nbsp;</div>
                <a class="w3-btn pelle-btn" href="numpy_array_indexing.php">Индексирование массива</a>
                <div class="pelle-divider">&nbsp;</div>
                <a class="w3-btn pelle-btn" href="numpy_array_slicing.php">Нарезка массива</a>
                <div class="pelle-divider">&nbsp;</div>
                <a class="w3-btn pelle-btn" href="numpy_data_types.php">Типы данных</a>
                <div class="pelle-divider">&nbsp;</div>
                <a class="w3-btn pelle-btn" href="numpy_copy_vs_view.php">Copy vs View</a>
                <div class="pelle-divider">&nbsp;</div>
                <a class="w3-btn pelle-btn" href="numpy_array_shape.php">Форма массива</a>
                <div class="pelle-divider">&nbsp;</div>
                <a class="w3-btn pelle-btn" href="numpy_array_reshape.php">Изменение формы массива</a>
                <div class="pelle-divider">&nbsp;</div>
                <a class="w3-btn pelle-btn" href="numpy_array_iterating.php">Итерация массива</a>
                <div class="pelle-divider">&nbsp;</div>
                <a class="w3-btn pelle-btn" href="numpy_array_join.php">Присоединение к массиву</a>
                <div class="pelle-divider">&nbsp;</div>
                <a class="w3-btn pelle-btn" href="numpy_array_split.php">Разделение массива</a>
                <div class="pelle-divider">&nbsp;</div>
                <a class="w3-btn pelle-btn" href="numpy_array_search.php">Поиск по массиву</a>
                <div class="pelle-divider">&nbsp;</div>
                <a class="w3-btn pelle-btn" href="numpy_array_sort.php">Сортировка массива</a>
                <div class="pelle-divider">&nbsp;</div>
                <a class="w3-btn pelle-btn" href="numpy_array_filter.php">Фильтр массива</a>
            </div>
            <div class="w3-col m4 l4">
                <h3>Random</h3>
                <a class="w3-btn pelle-btn x2" href="numpy_random.php">Random Интро</a>
                <div class="pelle-divider x2">&nbsp;</div>
                <a class="w3-btn pelle-btn x2" href="numpy_random_distribution.php">Распределение данных</a>
                <div class="pelle-divider x2">&nbsp;</div>
                <a class="w3-btn pelle-btn x2" href="numpy_random_permutation.php">Random Перестановка</a>
                <div class="pelle-divider x2">&nbsp;</div>
                <a class="w3-btn pelle-btn x2" href="numpy_random_seaborn.php">Seaborn Модуль</a>
                <div class="pelle-divider x2">&nbsp;</div>
                <a class="w3-btn pelle-btn x2" href="numpy_random_normal.php">Нормальное распр.</a>
                <div class="pelle-divider x2">&nbsp;</div>
                <a class="w3-btn pelle-btn x2" href="numpy_random_binomial.php">Биномиальное распр.</a>
                <div class="pelle-divider x2">&nbsp;</div>
                <a class="w3-btn pelle-btn x2" href="numpy_random_poisson.php">Пуассона распр.</a>
                <div class="pelle-divider x2">&nbsp;</div>
                <a class="w3-btn pelle-btn x2" href="numpy_random_uniform.php">Равномерное распр.</a>
                <div class="pelle-divider x2">&nbsp;</div>
                <a class="w3-btn pelle-btn x2" href="numpy_random_logistic.php">Логистическое распр.</a>
                <div class="pelle-divider x2">&nbsp;</div>
                <a class="w3-btn pelle-btn x2" href="numpy_random_multinomial.php">Мультиномиальное распр.</a>
                <div class="pelle-divider x2">&nbsp;</div>
                <a class="w3-btn pelle-btn x2" href="numpy_random_exponential.php">Экспоненциальное распр.</a>
                <div class="pelle-divider x2">&nbsp;</div>
                <a class="w3-btn pelle-btn x2" href="numpy_random_chisquare.php">Chi-квадрат распр.</a>
                <div class="pelle-divider x2">&nbsp;</div>
                <a class="w3-btn pelle-btn x2" href="numpy_random_rayleigh.php">Рэлея распр.</a>
                <div class="pelle-divider x2">&nbsp;</div>
                <a class="w3-btn pelle-btn x2" href="numpy_random_pareto.php">Парето распр.</a>
                <div class="pelle-divider x2">&nbsp;</div>
                <a class="w3-btn pelle-btn x2" href="numpy_random_zipf.php">Zipf распр.</a>
            </div>
            <div class="w3-col m4 l4">
                <h3>ufunc</h3>
                <a class="w3-btn pelle-btn x3" href="numpy_ufunc.php">ufunc Интро</a>
                <div class="pelle-divider x3">&nbsp;</div>
                <a class="w3-btn pelle-btn x3" href="numpy_ufunc_create_function.php">Создание функции</a>
                <div class="pelle-divider x3">&nbsp;</div>
                <a class="w3-btn pelle-btn x3" href="numpy_ufunc_simple_arithmetic.php">Простая арифметика</a>
                <div class="pelle-divider x3">&nbsp;</div>
                <a class="w3-btn pelle-btn x3" href="numpy_ufunc_rounding_decimals.php">Округление десятичных знаков</a>
                <div class="pelle-divider x3">&nbsp;</div>
                <a class="w3-btn pelle-btn x3" href="numpy_ufunc_logs.php">Логи</a>
                <div class="pelle-divider x3">&nbsp;</div>
                <a class="w3-btn pelle-btn x3" href="numpy_ufunc_summations.php">Итоги</a>
                <div class="pelle-divider x3">&nbsp;</div>
                <a class="w3-btn pelle-btn x3" href="numpy_ufunc_products.php">Продукты</a>
                <div class="pelle-divider x3">&nbsp;</div>
                <a class="w3-btn pelle-btn x3" href="numpy_ufunc_differences.php">Отличия</a>
                <div class="pelle-divider x3">&nbsp;</div>
                <a class="w3-btn pelle-btn x3" href="numpy_ufunc_lcm.php">Нахождение LCM</a>
                <div class="pelle-divider x3">&nbsp;</div>
                <a class="w3-btn pelle-btn x3" href="numpy_ufunc_gcd.php">Нахождение GCD</a>
                <div class="pelle-divider x3">&nbsp;</div>
                <a class="w3-btn pelle-btn x3" href="numpy_ufunc_trigonometric.php">Тригонометрия</a>
                <div class="pelle-divider x3">&nbsp;</div>
                <a class="w3-btn pelle-btn x3" href="numpy_ufunc_hyperbolic.php">Гиперболический</a>
                <div class="pelle-divider x3">&nbsp;</div>
                <a class="w3-btn pelle-btn x3" href="numpy_ufunc_set_operations.php">Набор операций</a>
            </div>
        </div>
    </div>
    <hr>
    <h2>Обучение с помощью викторины</h2>
    <p>Проверьте свои NumPy навыки с помощью проверочной викторины.</p>
    <p><a href="numpy_quiz.php" class="w3-button w3-blue shadow-black-1">Начать NumPy Викторину</a></p>
    <?php include '../include/addown_content.php'; ?>

    <h2>Обучение с помощью упражнений</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/python/numpy/exercise.asp?filename=exercise_creating_arrays1" method="post" target="_blank">
        <h2 class="shadow-black-1">NumPy Упражнения</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Вставьте правильный метод создания массива NumPy.</p>
            <div class="exerciseprecontainer">
<pre>
arr = np.<input name="ex1" maxlength="5" style="width: 54px;">([1, 2, 3, 4, 5])
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>

    <h2>Обучение на примерах</h2>
    <p>В нашем редакторе &quot;Попробуйте сами&quot; вы можете использовать модуль NumPy и изменить код, чтобы увидеть результат.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Создайте массив NumPy:</p>
        <div class="w3-code notranslate pythonHigh">
            import numpy as np
            <br><br>
            arr = np.array([1, 2, 3, 4, 5])<br><br>print(arr)<br><br>
            print(type(arr))
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_numpy_create_array.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Кликните на кнопку <b>&quot;Попробуйте сами&quot;</b>, чтобы увидеть, как она работает.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="../index.php">&#10094; Home</a>
        <a class="w3-right w3-btn" href="numpy_intro.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>