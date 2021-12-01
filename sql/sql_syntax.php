<?php include '../include/head.php'; ?>

<title>SQL Синтаксис. <?php include '../include/title.php'; ?></title>
<meta name='description' content='SQL Синтаксис. Использование SQL на веб-сайте. Таблицы базы данных. Инструкции и команды. Точка с запятой после инструкций. Примеры кода. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_sql.php'; ?>
<?php include '../include/before_content_sql.php'; ?>

<article>
    <h1>SQL <span class="color_h1">Синтаксис</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sql_intro.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sql_select.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>Таблицы базы данных</h2>
    <p>База данных чаще всего содержит одну или несколько таблиц. Каждая таблица обозначается именем (например, &quot;Клиенты&quot; или &quot;Заказы&quot;). Таблицы содержат записи (строки) с данными.</p>
    <p>В этом руководстве мы будем использовать хорошо известный образец базы данных Northwind (включенный в MS Access и MS SQL Server).</p>
    <p>Ниже представлен выбор из таблицы &quot;Клиенты&quot;:</p>
    <div class="w3-responsive">
        <table class="w3-table-all notranslate">
            <tr>
                <th>CustomerID</th>
                <th>CustomerName</th>
                <th>ContactName</th>
                <th>Address</th>
                <th>City</th>
                <th>PostalCode</th>
                <th>Country</th>
            </tr>
            <tr>
                <td>1<br><br></td>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Obere Str. 57</td>
                <td>Berlin</td>
                <td>12209</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Ana Trujillo Emparedados y helados</td>
                <td>Ana Trujillo</td>
                <td>Avda. de la Constitución 2222</td>
                <td>México D.F.</td>
                <td>05021</td>
                <td>Mexico</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Antonio Moreno Taquería</td>
                <td>Antonio Moreno</td>
                <td>Mataderos 2312</td>
                <td>México D.F.</td>
                <td>05023</td>
                <td>Mexico</td>
            </tr>
            <tr>
                <td>4<br><br></td>
                <td>Around the Horn</td>
                <td>Thomas Hardy</td>
                <td>120 Hanover Sq.</td>
                <td>London</td>
                <td>WA1 1DP</td>
                <td>UK</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Berglunds snabbköp</td>
                <td>Christina Berglund</td>
                <td>Berguvsvägen 8</td>
                <td>Luleå</td>
                <td>S-958 22</td>
                <td>Sweden</td>
            </tr>
        </table>
    </div>
    <p>В приведенной выше таблице содержится пять записей (по одной для каждого клиента) и семь столбцов (CustomerID, CustomerName, ContactName, Address, City, PostalCode и Country).</p>
    <hr>

    <h2>SQL Инструкции</h2>
    <p>Большинство действий, которые вам нужно выполнить с базой данных, выполняются с помощью SQL инструкций.</p>
    <p>Следующая SQL инструкция выбирает все записи в таблице &quot;Customers&quot; (&quot;Клиенты&quot;):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate sqlHigh">
            SELECT * FROM Customers;
        </div>
        <a target="_blank" href="../sqltryit/trysql_select_all.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>В этом учебнике мы расскажем вам о различных SQL инструкциях.</p>
    <hr>

    <h2>Имейте в виду, что...</h2>
    <ul>
        <li>Ключевые слова SQL НЕ чувствительны к регистру: select идентично SELECT</li>
    </ul>

    <p>В этом учебнике мы будем писать все ключевые слова SQL в верхнем регистре.</p>
    <hr>

    <h2>Точка с запятой после SQL инструкций?</h2>
    <p>Некоторые системы баз данных требуют наличия точки с запятой в конце каждой SQL инструкции.</p>
    <p>Точка с запятой - это стандартный способ разделения каждой SQL инструкции в системах баз данных, которые позволяют выполнять несколько SQL инструкций за один вызов сервера.</p>
    <p>В этом учебнике мы будем использовать точку с запятой в конце каждой SQL инструкции.</p>
    <hr>

    <h2>Некоторые из наиболее важных команд SQL</h2>
    <ul>
        <li><b>SELECT</b> - извлекает данные из базы данных</li>
        <li><b>UPDATE</b> - обновляет данные в базе данных</li>
        <li><b>DELETE</b> - удаляет данные из базы данных</li>
        <li><b>INSERT INTO</b> - вставляет новые данные в базу данных</li>
        <li><b>CREATE DATABASE</b> - создает новую базу данных</li>
        <li><b>ALTER DATABASE</b> - изменяет базу данных</li>
        <li><b>CREATE TABLE</b> - создает новую таблицу</li>
        <li><b>ALTER TABLE</b> - изменяет таблицу</li>
        <li><b>DROP TABLE</b> - удаляет таблицу</li>
        <li><b>CREATE INDEX</b> - создает индекс (ключ поиска)</li>
        <li><b>DROP INDEX</b> - удаляет индекс
        </li>
    </ul>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sql_intro.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sql_select.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>