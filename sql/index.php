<?php include '../include/head.php'; ?>

<title>SQL Учебник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='SQL Учебник. Бесплатные курсы онлайн. Примеры кода. Полный справочник SQL. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/bigbtn.css'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_sql.php'; ?>
<?php include '../include/before_content_sql.php'; ?>

<article>
    <h1>SQL <span class='color_h1'>Учебник</span></h1>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
        <a class='w3-right w3-btn' href='sql_intro.php'>Next &#10095;</a>
    </div>

    <div class='w3-panel w3-info intro'>
        <h2>Что такое SQL?</h2>
        <p><strong>SQL</strong> - это стандартный язык для хранения, обработки и получения данных в базах данных.</p>
        <p>Наш учебник по <strong>SQL</strong> научит вас использовать SQL в: MySQL, SQL Server, MS Access, Oracle, Sybase, Informix, Postgres и других системах баз данных.</p>
        <a class='w3-btn w3-margin-bottom shadow-black-1'  href='sql_intro.php'>Начать изучение SQL немедленно &raquo;</a>
    </div>
    <hr>

    <h2>Примеры в каждом разделе</h2>
    <p>С помощью нашего онлайн-редактора SQL вы можете редактировать SQL инструкции и нажимать кнопку, чтобы просмотреть результат.</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate sqlHigh'>
            SELECT * FROM Customers;
        </div>
        <a target='_blank' href='../sqltryit/trysql_select_all.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <p>Кликните на кнопку <b>&quot;Попробуйте сами&quot;</b>, чтобы увидеть, как она работает.</p>
    <hr>

    <h2>SQL Упражнения</h2>
    <form autocomplete='off' id='w3-exerciseform' action='https://www.w3schools.com/sql/exercise.asp?filename=exercise_select1' method='post' target='_blank'>
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class='exercisewindow'>
            <h2>Упражнение:</h2>
            <p>Вставьте недостающую инструкцию, чтобы получить все столбцы из таблицы <code class='w3-codespan'>Customers</code>.</p>
            <div class='exerciseprecontainer'>
<pre>
<input name='ex1' maxlength='6' style='width: 64px;'> * FROM Customers;
</pre>
            </div>
            <br>
            <button type='submit' class='w3-btn w3-margin-bottom'>Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>

    <h2>SQL Примеры</h2>
    <p>Учитесь на примерах! Этот учебник дополняет все объяснения поясняющими примерами.</p>
    <p><a href='sql_examples.php' class='w3-button w3-light-grey'>Смотреть все SQL Примеры</a></p>
    <hr>

    <h2>SQL Проверочная Викторина</h2>
    <p>Проверьте ваши SQL навыки на W3Schools!</p>
    <p><a href='sql_quiz.php' class='w3-blue w3-button shadow-black-1'>Начать SQL Викторину!</a></p>
    <hr>

    <h2>SQL Справочники</h2>
    <p>На W3Schools вы найдете полный справочник по ключевым словам и функциям:</p>
    <a class='bigbtn' href='sql_ref_keywords.php'>SQL Справочник ключевых слов</a>
    <a class='bigbtn' href='sql_ref_mysql.php'>MYSQL Функции</a>
    <a class='bigbtn' href='sql_ref_sqlserver.php'>SQLServer Функции</a>
    <a class='bigbtn' href='sql_ref_msaccess.php'>MS Access Функции</a>
    <a class='bigbtn' href='sql_quickref.php'>SQL Краткий справочник</a>
    <hr>

    <h2>SQL Типы данных</h2>
    <p>Типы и диапазоны данных для Microsoft Access, MySQL и SQL Server.</p>
    <p><a class='bigbtn' href='sql_datatypes.php'>SQL Типы данных</a></p>
    <hr>

    <h2>Пройдите SQL Экзамен - получите свой Диплом!</h2>
    <?php include '../include/footer_cert.php'; ?>

    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
        <a class='w3-right w3-btn' href='sql_intro.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>