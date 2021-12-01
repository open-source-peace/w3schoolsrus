<?php include '../include/head.php'; ?>

<title>SQL Ключевое слово ORDER BY. <?php include '../include/title.php'; ?></title>
<meta name='description' content='SQL Ключевое слово ORDER BY. Сортировка по убыванию или возрастанию. Примеры использования. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_sql.php'; ?>
<?php include '../include/before_content_sql.php'; ?>

<article>
    <h1>SQL Ключевое слово <span class="color_h1">ORDER BY</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sql_and_or.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sql_insert.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>SQL Ключевое слово ORDER BY</h2>
    <p><strong>Ключевое слово ORDER BY</strong> используется для сортировки набора результатов в порядке возрастания или убывания.</p>
    <p><strong>Ключевое слово ORDER BY</strong> по умолчанию сортирует записи в порядке возрастания. Чтобы отсортировать записи в порядке убывания, используйте <strong>ключевое слово DESC</strong>.</p>

    <h3>Синтаксис ORDER BY</h3>
    <div class="w3-example">
        <div class="w3-code notranslate sqlHigh">
            SELECT <em>столбец1</em>,<em> столбец2, ...</em><br>
            FROM <em>имя_таблицы</em><br>
            ORDER BY <em>столбец1, столбец2, ... </em>ASC|DESC;</div></div>
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

    <h2>Пример ORDER BY</h2>
    <p>Следующий SQL оператор выбирает всех клиентов из таблицы &quot;Customers&quot;, отсортированных в столбце &quot;Country&quot;:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate sqlHigh">
            SELECT * FROM Customers<br>
            ORDER BY Country;
        </div>
        <a target="_blank" href="../sqltryit/trysql_select_orderby.html" class="w3-btn w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Пример ORDER BY DESC</h2>
    <p>Следующий SQL оператор выбирает всех клиентов из таблицы &quot;Customers&quot;, отсортированных по DESCENDING (убыванию) в столбце &quot;Country&quot;:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate sqlHigh">
            SELECT * FROM Customers<br>
            ORDER BY Country DESC;</div>
        <a target="_blank" href="../sqltryit/trysql_select_orderby_desc.html" class="w3-btn w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Пример ORDER BY Несколько столбцов</h2>
    <p>Следующий SQL оператор выбирает всех клиентов из таблицы &quot;Customers&quot;, отсортированных в столбцах &quot;Country&quot; и "CustomerName" (имя клиента). Это означает, что он упорядочивает по стране, но если некоторые строки имеют одну и ту же страну, он упорядочивает их по CustomerName (имени клиента):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate sqlHigh">
            SELECT * FROM Customers<br>
            ORDER BY Country, CustomerName;</div>
        <a target="_blank" href="../sqltryit/trysql_select_orderby2.html" class="w3-btn w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Пример 2 ORDER BY Несколько столбцов</h2>
    <p>Следующий SQL оператор выбирает всех клиентов из таблицы &quot;Customers&quot;, отсортированных по возрастанию в столбце &quot;Country&quot; и по убыванию в столбце &quot;CustomerName&quot;:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate sqlHigh">
            SELECT * FROM Customers<br>
            ORDER BY Country ASC, CustomerName DESC;</div>
        <a target="_blank" href="../sqltryit/trysql_select_orderby3.html" class="w3-btn w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/sql/exercise.asp?filename=exercise_orderby1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Выберите все записи из таблицы <code class="w3-codespan">Customers</code> отсортируйте результат в алфавитном порядке в столбце <code class="w3-codespan">City</code>.</p>
            <div class="exerciseprecontainer">
<pre>
SELECT * FROM Customers
<input name="ex1" maxlength="8" style="width: 85px;"> <input name="ex2" maxlength="4" style="width: 43px;">;
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sql_and_or.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sql_insert.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>