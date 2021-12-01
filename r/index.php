<?php include '../include/head_r.php'; ?>

<title>Язык программирования R. Учебник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Язык программирования R. Учебник. Что такое язык программирования R? Основы. Уроки для начинающих. W3Schools на русском'>
    <link rel="canonical" href="https://w3schoolsrus.github.io/r/index.php" />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_r.php'; ?>
<?php include '../include/before_content_r.php'; ?>

<article>
    <h1>R <span class='color_h1'>Учебник</span></h1>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
        <a class='w3-right w3-btn' href='r_intro.php'>Next &#10095;</a>
    </div>

    <div class='w3-panel w3-info intro'>
        <p><strong>R</strong> - это язык программирования.</p>
        <p><strong>R</strong> часто используется для статистических вычислений и графического представления для анализа и визуализации данных.</p>
        <a class='w3-btn w3-margin-bottom shadow-black-1' href='r_intro.php'>Начать изучение R немедленно &raquo;</a>
    </div>
    <hr>

    <h2>Примеры в каждой главе</h2>
    <p>Наш редактор <span style='color:darkblue'><b>&quot;Попробуйте сами&quot;</b></span> упрощает изучение R. Вы можете редактировать код R и просматривать результат в своём браузере.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Как вывести текст и как выполнить простое вычисление в R:</p>
        <div class="w3-code notranslate pythonHigh">
            "Hello World!"<br>5 + 5</div>
        <p>Result:</p>
        <div class="w3-black w3-padding">
            <code>
                [1] "Hello World!"<br>
                [1] 10</code>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom w3-margin-top" href="tryr.html?filename=demo_default">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Как с помощью R легко создать график с числами от 1 до 10 по оси x и y:</p>
        <div class="w3-code notranslate pythonHigh">
            plot(1:10)</div>
        <p>Результат:</p>

        <div class="w3-black w3-padding w3-padding-16">
            <img src="../images/plot.png" style="max-widtH:100%;" alt="Язык программирования R">
        </div>

        <a target="_blank" class="w3-btn w3-margin-bottom w3-margin-top" href="tryr.asp?filename=demo_plot">Попробуйте сами &raquo;</a>
    </div>


    <div class="w3-panel w3-note">
        <p>Мы рекомендуем изучать темы этого учебника в последовательности, указанной в левом меню (или открыв меню бургер, если вы пользуетесь мобильными гаджетами).</p>
    </div>
    <hr>

    <h2>R Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/r/exercise.asp?filename=exercise_syntax1" method="post" target="_blank">
    <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
    <div class="exercisewindow">
    <h2>Упражнение:</h2>
    <p>Вставьте недостающую часть кода ниже для вывода "Hello World".</p>
    <div class="exerciseprecontainer">
    <pre>
    <input name="ex1" maxlength="5" style="width: 54px;">("Hello World")
    </pre>
    </div>
    <br>
    <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
    </div>
    </form>
    <hr>

    <h2>Учиться на примерах</h2>
    <p>Учитесь на примерах! Этот учебник дополняет все пояснения поясняющими примерами.</p>
    <p>
    <a href="r_examples.php" class="w3-button w3-light-grey">Смотреть все R Примеры</a></p>
    <hr>

    <h2>R Викторина</h2>
    <p>Учитесь, пройдя викторину! Эта викторина покажет вам, как много вы знаете о языке R.</p>
    <p><a href="r_quiz.php" class="w3-button w3-blue shadow-black-1">Начать R Викторину</a></p>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
        <a class='w3-right w3-btn' href='r_intro.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar_r.php'; ?>
<?php include '../include/footer.php'; ?>