<?php include '../include/head.php'; ?>

<title>SQL Оператор SELECT. <?php include '../include/title.php'; ?></title>
<meta name='description' content='SQL Оператор SELECT. Выбор столбцов в таблице. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_sql.php'; ?>
<?php include '../include/before_content_sql.php'; ?>

<article>
    <h1>SQL <span class="color_h1">Оператор SELECT</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sql_syntax.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sql_distinct.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>SQL Оператор SELECT</h2>
    <p>SQL <strong>оператор SELECT</strong> используется для выбора данных из базы данных.</p>
    <p>Возвращенные данные сохраняются в таблице результатов, называемой набором результатов.</p>
    <h3>Синтаксис SELECT</h3>
    <div class="w3-example">
        <div class="w3-code notranslate sqlHigh">
            SELECT <em>column1</em>,<em> column2, ...</em><br>
            FROM <em>table_name</em>;</div></div>
    <p>Здесь column1, column2, ... - это имена полей таблицы, из которой вы хотите выбрать данные. Если вы хотите выбрать все поля, доступные в таблице, используйте следующий синтаксис:</p>
    <div class="w3-example">
        <div class="w3-code notranslate sqlHigh">
            SELECT * FROM <em>table_name</em>;</div></div>
    <hr>

    <h2>Демо-база данных</h2>
    <p>Ниже представлен выбор из таблицы &quot;Customers&quot; в образце базы данных Northwind:</p>
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
    <hr>

    <h2>Пример столбца SELECT</h2>
    <p>Следующий SQL оператор выбирает столбцы &quot;CustomerName&quot; и &quot;City&quot; из таблицы &quot;Customers&quot;:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate sqlHigh">
            SELECT CustomerName, City FROM Customers;
        </div>
        <a target="_blank" href="../sqltryit/trysql_select_columns.html" class="w3-btn w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>Пример SELECT *</h2>
    <p>Следующий SQL оператор выбирает все столбцы из таблицы &quot;Customers&quot;:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate sqlHigh">
            SELECT * FROM Customers;
        </div>
        <a target="_blank" href="../sqltryit/trysql_select_all.html" class="w3-btn w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/sql/exercise.asp?filename=exercise_select1" method="post" target="_blank">
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
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sql_syntax.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sql_distinct.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>