<?php include '../include/head.php'; ?>

<title>SQL Оператор INSERT INTO. <?php include '../include/title.php'; ?></title>
<meta name='description' content='SQL Оператор INSERT INTO. Синтаксис. Как вставлять данные только в указанные столбцы? Примеры использования. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_sql.php'; ?>
<?php include '../include/before_content_sql.php'; ?>

<article>
    <h1>SQL Оператор <span class="color_h1">INSERT INTO</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sql_orderby.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sql_null_значениеs.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>SQL Оператор INSERT INTO</h2>
    <p><strong>SQL Оператор INSERT INTO</strong> используется для вставки новых записей в таблицу.</p>

    <h3>Синтаксис INSERT INTO</h3>
    <p>Можно написать оператор INSERT INTO двумя способами.</p>

    <p>Первый способ определяет как имена столбцов, так и значения, которые нужно вставить:</p>
    <div class="w3-example">
        <div class="w3-code notranslate sqlHigh">
            INSERT INTO <em>имя_таблицы</em> (<em>столбец1</em>,<em> столбец2</em>,<em> столбец3</em>, ...)<br>
            VALUES (<em>значение1</em>,<em> значение2</em>,<em> значение3</em>, ...);</div></div>

    <p>Если вы добавляете значения для всех столбцов таблицы, вам не нужно указывать имена столбцов в запросе SQL. Однако убедитесь, что порядок значений соответствует порядку столбцов в таблице. Синтаксис INSERT INTO будет следующим:</p>
    <div class="w3-example">
        <div class="w3-code notranslate sqlHigh">
            INSERT INTO <em>имя_таблицы</em><br>
            VALUES (<em>значение1</em>,<em> значение2</em>,<em> значение3</em>, ...);</div></div>
    <hr>

    <h2>Демо-база данных</h2>
    <p>Ниже представлен выбор из таблицы &quot;Customers&quot; в базе данных Northwind:</p>
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
                <td>89</td>
                <td>White Clover Markets</td>
                <td>Karl Jablonski</td>
                <td>305 - 14th Ave. S. Suite 3B</td>
                <td>Seattle</td>
                <td>98128</td>
                <td>USA</td>
            </tr>
            <tr>
                <td>90<br><br></td>
                <td>Wilman Kala</td>
                <td>Matti Karttunen</td>
                <td>Keskuskatu 45</td>
                <td>Helsinki</td>
                <td>21240</td>
                <td>Finland</td>
            </tr>
            <tr>
                <td>91<br><br></td>
                <td>Wolski</td>
                <td>Zbyszek</td>
                <td>ul. Filtrowa 68</td>
                <td>Walla</td>
                <td>01-012</td>
                <td>Poland</td>
            </tr>
        </table>
    </div>
    <hr>

    <h2>Пример INSERT INTO</h2>
    <p>Следующий SQL оператор вставляет новую запись в таблицу &quot;Customers&quot;:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate sqlHigh">
            INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)<br>
            VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway');
        </div>
        <a target="_blank" href="../sqltryit/trysql_insert_colname.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>Выбор из таблицы &quot;Customers&quot; теперь будет выглядеть так:</p>
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
                <td>89</td>
                <td>White Clover Markets</td>
                <td>Karl Jablonski</td>
                <td>305 - 14th Ave. S. Suite 3B</td>
                <td>Seattle</td>
                <td>98128</td>
                <td>USA</td>
            </tr>
            <tr>
                <td>90<br><br></td>
                <td>Wilman Kala</td>
                <td>Matti Karttunen</td>
                <td>Keskuskatu 45</td>
                <td>Helsinki</td>
                <td>21240</td>
                <td>Finland</td>
            </tr>
            <tr>
                <td>91<br><br></td>
                <td>Wolski</td>
                <td>Zbyszek</td>
                <td>ul. Filtrowa 68</td>
                <td>Walla</td>
                <td>01-012</td>
                <td>Poland</td>
            </tr>
            <tr>
                <td>92</td>
                <td>Cardinal</td>
                <td>Tom B. Erichsen</td>
                <td>Skagen 21</td>
                <td>Stavanger</td>
                <td>4006</td>
                <td>Norway</td>
            </tr>
        </table>
    </div>

    <div class="w3-panel w3-note">
        <p><strong>Вы заметили, что мы не вставили какой-либо номер в поле CustomerID?</strong><br>Столбец CustomerID является полем с <a href="sql_autoincrement.php">автоинкрементом</a> и создается автоматически, когда в таблицу вставляется новая запись.</p>
    </div>
    <hr>

    <h2>Вставлять данные только в указанные столбцы</h2>
    <p>Также можно вставлять данные только в определенные столбцы.</p>
    <p>Следующий SQL оператор вставит новую запись, но вставит данные только в столбцы &quot;CustomerName&quot;, &quot;City&quot; и &quot;Country&quot; (CustomerID будет обновлён автоматически):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate sqlHigh">
            INSERT INTO Customers (CustomerName, City, Country)<br>
            VALUES ('Cardinal', 'Stavanger', 'Norway');
        </div>
        <a target="_blank" href="../sqltryit/trysql_insert_cols.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>Выбор из таблицы &quot;Customers&quot; теперь будет выглядеть так:</p>
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
                <td>89</td>
                <td>White Clover Markets</td>
                <td>Karl Jablonski</td>
                <td>305 - 14th Ave. S. Suite 3B</td>
                <td>Seattle</td>
                <td>98128</td>
                <td>USA</td>
            </tr>
            <tr>
                <td>90<br><br></td>
                <td>Wilman Kala</td>
                <td>Matti Karttunen</td>
                <td>Keskuskatu 45</td>
                <td>Helsinki</td>
                <td>21240</td>
                <td>Finland</td>
            </tr>
            <tr>
                <td>91<br><br></td>
                <td>Wolski</td>
                <td>Zbyszek</td>
                <td>ul. Filtrowa 68</td>
                <td>Walla</td>
                <td>01-012</td>
                <td>Poland</td>
            </tr>
            <tr>
                <td>92</td>
                <td>Cardinal</td>
                <td>null</td>
                <td>null&nbsp;</td>
                <td>Stavanger</td>
                <td>null</td>
                <td>Norway</td>
            </tr>
        </table>
    </div>
    <hr>

    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/sql/exercise.asp?filename=exercise_insert1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Вставьте новую запись в таблицу <code class="w3-codespan">Customers</code>.</p>
            <div class="exerciseprecontainer">
<pre>
<input name="ex1" maxlength="11" style="width: 117px;"> Customers <input name="ex2" maxlength="1" style="width: 12px;">
CustomerName,
Address,
City,
PostalCode,
Country<input name="ex3" maxlength="1" style="width: 11px;">
<input name="ex4" maxlength="6" style="width: 64px;"> <input name="ex5" maxlength="1" style="width: 11px;">
'Hekkan Burger',
'Gateveien 15',
'Sandnes',
'4306',
'Norway'<input name="ex6" maxlength="1" style="width: 12px;">;
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sql_orderby.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sql_null_значениеs.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>