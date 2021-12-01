<?php include '../include/head.php'; ?>

<title>SQL Оператор SELECT DISTINCT. <?php include '../include/title.php'; ?></title>
<meta name='description' content='SQL Оператор SELECT DISTINCT. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_sql.php'; ?>
<?php include '../include/before_content_sql.php'; ?>

<article>
    <h1>SQL Оператор <span class="color_h1">SELECT DISTINCT</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sql_select.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sql_where.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>SQL оператор SELECT DISTINCT</h2>
    <p><strong>Оператор SELECT DISTINCT</strong> используется для возврата только <strong>distinct</strong> - отдельных (разных) значений.</p>
    <p>Столбец внутри таблицы часто содержит много повторяющихся значений; а иногда необходимо перечислить только разные (отдельные) значения.</p>

    <h3>Синтаксис SELECT DISTINCT</h3>
    <div class="w3-example">
        <div class="w3-code notranslate sqlHigh">
            SELECT DISTINCT <em>столбец1</em>,<em> столбец2, ...</em><br>
            FROM <em>имя_таблицы</em>;</div></div>
    <hr>

    <h2>Демо-база данных</h2>
    <p>Ниже представлен выбор из таблицы &quot;Customers&quot; (&quot;Клиенты&quot;) в образце базы данных Northwind:</p>
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
    <h2>Пример SELECT без DISTINCT</h2>
    <p>Следующий SQL оператор выбирает ВСЕ (включая дубликаты) значения из столбца "Country" в таблице "Customers":</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate sqlHigh">
            SELECT Country FROM Customers;
        </div>
        <a target="_blank" href="../sqltryit/trysql_select_no_distinct.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Теперь давайте используем ключевое слово DISTINCT с указанным выше оператором SELECT и посмотрим на результат.</p>
    <hr>

    <h2>Примеры SELECT DISTINCT</h2>
    <p>Следующий SQL оператор выбирает только значения DISTINCT из столбца "Country" в таблице "Customers":</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate sqlHigh">
            SELECT DISTINCT Country FROM Customers;
        </div>
        <a target="_blank" href="../sqltryit/trysql_select_distinct.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>Следующий SQL оператор перечисляет количество разных (отдельных) стран-заказчиков:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate sqlHigh">
            SELECT COUNT(DISTINCT Country) FROM Customers;
        </div>
        <a target="_blank" href="../sqltryit/trysql_select_distinct2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p><strong>Примечание: Приведенный выше пример не будет работать в Firefox!</strong> Потому что COUNT(DISTINCT <em>column_name</em>) не поддерживается в базах данных Microsoft Access. Firefox использует Microsoft Access в наших примерах.</p>
    </div>

    <p>Вот обходной путь для MS Access:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate sqlHigh">
            SELECT Count(*) AS DistinctCountries<br>FROM (SELECT DISTINCT Country FROM Customers);
        </div>
        <a target="_blank" href="../sqltryit/trysql_select_distinct3.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/sql/exercise.asp?filename=exercise_select3" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Выберите все различные значения из столбца <code class="w3-codespan">Country</code> в таблице <code class="w3-codespan">Customers</code>.</p>
            <div class="exerciseprecontainer">
<pre>
<input name="ex1" maxlength="6" style="width: 66px;"> <input name="ex2" maxlength="8" style="width: 88px;"> Country <br class="phonebr">FROM Customers;
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sql_select.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sql_where.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>