<?php include '../include/head.php'; ?>

<title>MySQL Учебник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='MySQL Учебник. Бесплатные курсы онлайн по MySQL. Примеры кода. Тесты и задачи. Проверочная викторина. Полный справочник MySQL. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/bigbtn.css'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_mysql.php'; ?>
<?php include '../include/before_content_mysql.php'; ?>

<article>
    <h1>MySQL <span class="color_h1">Учебник</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="../index.php">&#10094; Home</a>
        <a class="w3-right w3-btn" href="mysql_intro.php">Next &#10095;</a>
    </div>

    <div class="w3-panel w3-info intro">
        <h3>Что такое MySQL?</h3>
        <p class="intro"><strong>MySQL</strong> - широко используемая система управления реляционными базами данных (relational database management system - RDBMS).</p>
        <p class="intro"><strong>MySQL</strong> бесплатный и с открытым исходным кодом.</p>
        <p class="intro"><strong>MySQL</strong> идеален как для малых, так и для больших приложений.</p>
        <a class="w3-btn w3-margin-bottom shadow-black-1"  href="mysql_intro.php" style="font-size: 18px;padding-left:25px;padding-right:25px;font-family: 'Source Sans Pro', sans-serif;margin-top:6px;">Начать изучение MySQL немедленно &raquo;</a>
    </div>
    <hr>

    <h2>Примеры в каждой главе</h2>
    <p>С помощью нашего онлайн-редактора MySQL вы можете редактировать операторы SQL и нажимать кнопку, чтобы просмотреть результат.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate sqlHigh">
            SELECT * FROM Customers;
        </div>
        <a target="_blank" href="../mysqltryit/trysql_select_all.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Нажмите кнопку &quot;Попробуйте сами&quot;, чтобы увидеть, как она работает.</p>
    <hr>

    <h2>MySQL Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/mysql/exercise.asp?filename=exercise_select1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Вставьте отсутствующий оператор, чтобы получить все столбцы из таблицы <code class="w3-codespan">Customers</code>.</p>
            <div class="exerciseprecontainer">
<pre>
<input name="ex1" maxlength="6" style="width: 64px;"> * FROM Customers;
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <?php include '../include/addown_content.php'; ?>

    <h2>MySQL Примеры</h2>
    <p>Учитесь на примерах! Этот учебник дополняет все пояснения поясняющими примерами.</p>
    <p><a href="mysql_examples.php" class="w3-button w3-light-grey w3-round">Смотреть все SQL Примеры</a></p>
    <hr>

    <h2>MySQL Проверочная викторина</h2>
    <p>Проверьте свои MySQL навыки на W3Schools!</p>
    <p><a href="mysql_quiz.php" class="w3-blue w3-button w3-round shadow-black-1">Начать MySQL Викторину!</a></p>
    <hr>

    <h2>MySQL Справочники</h2>
    <p>На W3Schools вы найдете полный справочник типов данных и функций MySQL:</p>
    <p><a href="mysql_datatypes.php" class="bigbtn">MySQL Типы данных</a></p>
    <p><a href="mysql_ref_functions.php" class="bigbtn">MySQL Функции</a></p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="../index.php">&#10094; Home</a>
        <a class="w3-right w3-btn" href="mysql_intro.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>