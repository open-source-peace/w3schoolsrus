<?php include '../include/head.php'; ?>

<title>SQL Введение. <?php include '../include/title.php'; ?></title>
<meta name='description' content='SQL Введение. Что такое SQL? Что может делать SQL? Использование SQL на веб-сайте. Что такое RDBMS? Пример. Таблицы SQL. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_sql.php'; ?>
<?php include '../include/before_content_sql.php'; ?>

<article>
    <h1><span class="color_h1">Введение в</span> SQL</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="index.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sql_syntax.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>SQL</strong> - это стандартный язык для доступа к базам данных и управления ими.</p>
    <hr>

    <h2>Что такое SQL?</h2>
    <ul>
        <li>SQL означает <strong>Structured Query Language</strong> - язык структурированных запросов</li>
        <li>SQL позволяет получать доступ к базам данных и управлять ими</li>
        <li>SQL стал стандартом Американского национального института стандартов (ANSI) в 1986 году и Международной организации по стандартизации (ISO) в 1987 году</li>
    </ul>
    <hr>
    <h2>Что может делать SQL?</h2>
    <ul>
        <li>SQL может выполнять запросы к базе данных</li>
        <li>SQL может извлекать данные из базы данных</li>
        <li>SQL может вставлять записи в базу данных</li>
        <li>SQL может обновлять записи в базе данных</li>
        <li>SQL может удалять записи из базы данных</li>
        <li>SQL может создавать новые базы данных</li>
        <li>SQL может создавать новые таблицы в базе данных</li>
        <li>SQL может создавать хранимые процедуры в базе данных</li>
        <li>SQL может создавать представления в базе данных</li>
        <li>SQL может устанавливать разрешения для таблиц, процедур и представлений</li>
    </ul>
    <hr>
    <h2>SQL это стандарт - НО....</h2>
    <p>Хотя SQL является стандартом ANSI / ISO, существуют разные версии языка SQL.</p>
    <p>Однако, чтобы соответствовать стандарту ANSI, все они одинаково поддерживают как минимум основные команды (такие как SELECT, UPDATE, DELETE, INSERT, WHERE).</p>

    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Большинство программ баз данных SQL также имеют собственные проприетарные расширения в дополнение к стандарту SQL!</p>
    </div>
    <hr>

    <h2>Использование SQL на веб-сайте</h2>
    <p>Чтобы создать веб-сайт, отображающий данные из базы данных, вам потребуется:</p>
    <ul>
        <li>Программа базы данных СУБД (например, MS Access, SQL Server, MySQL)</li>
        <li>Чтобы использовать язык сценариев на стороне сервера, например PHP или ASP.</li>
        <li>Чтобы использовать SQL для получения нужных данных.</li>
        <li>Чтобы использовать HTML / CSS для стилизации страницы</li>
    </ul>
    <hr>
    <h2>RDBMS</h2>
    <p><strong>RDBMS</strong> означает <strong>Relational Database Management System</strong> - система управления реляционными базами данных.</p>
    <p>RDBMS является основой для SQL и для всех современных систем баз данных, таких как MS SQL Server, IBM DB2, Oracle, MySQL и Microsoft Access.</p>
    <p>Данные в СУБД хранятся в объектах базы данных, называемых таблицами. Таблица - это набор связанных записей данных, состоящий из столбцов и строк.</p>
    <p>Посмотрите таблицу &quot;Customers&quot; (&quot;Клиенты&quot;):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate sqlHigh">
            SELECT * FROM Customers;
        </div>
        <a target="_blank" href="../sqltryit/trysql_select_all.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>Каждая таблица разбита на более мелкие объекты, называемые полями. Поля в таблице &quot;Customers&quot; (&quot;Клиенты&quot;) состоят из идентификатора клиента, имени клиента, имени контакта, адреса, города, почтового индекса и страны. Поле - это столбец в таблице, предназначенный для хранения конкретной информации о каждой записи в таблице.</p>
    <p>Запись, также называемая строкой, - это каждая отдельная запись, существующая в таблице. Например, в приведенной выше таблице &quot;Customers&quot; 91 запись. Запись - это горизонтальный объект в таблице.</p>
    <p>Столбец - это вертикальный объект в таблице, который содержит всю информацию, связанную с определенным полем в таблице.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="index.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sql_syntax.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>