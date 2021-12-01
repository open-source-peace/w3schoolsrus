<?php include '../include/head.php'; ?>

<title>SQL Предложение WHERE. <?php include '../include/title.php'; ?></title>
<meta name='description' content='SQL Предложение WHERE. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_sql.php'; ?>
<?php include '../include/before_content_sql.php'; ?>

<article>
    <h1>SQL Предложение <span class="color_h1">WHERE</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sql_distinct.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sql_and_or.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>SQL предложение WHERE</h2>
    <p><strong>Предложение WHERE</strong> используется для фильтрации записей.</p>
    <p><strong>Предложение WHERE</strong> используется для извлечения только тех записей, которые соответствуют указанному условию.</p>

    <h3>Синтаксис WHERE</h3>
    <div class="w3-example">
        <div class="w3-code notranslate sqlHigh">
            SELECT <em>столбец1</em>,<em> столбец2, ...</em><br>
            FROM <em>имя_таблицы</em><br>
            WHERE <em>условие</em>;</div></div>

    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Предложение WHERE используется не только в операторе SELECT, оно также используется в операторах UPDATE, DELETE и т.д.!</p>
    </div>
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
    
    <h2>Пример предложения WHERE</h2>
    <p>Следующий SQL оператор выбирает всех клиентов из страны &quot;Mexico&quot; в таблице &quot;Customers&quot;:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate sqlHigh">
            SELECT * FROM Customers<br>
            WHERE Country='Mexico';</div>
        <a target="_blank" href="../sqltryit/trysql_select_where.html" class="w3-btn w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Текстовые поля с числовыми полями</h2>
    <p>SQL требует одинарных кавычек вокруг текстовых значений (большинство систем баз данных также допускают двойные кавычки).</p>
    <p>Однако числовые поля не следует заключать в кавычки:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate sqlHigh">
            SELECT * FROM Customers<br>
            WHERE CustomerID=1;</div>
        <a target="_blank" href="../sqltryit/trysql_select_where_number.html" class="w3-btn w3-margin-bottom">
            Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Операторы в предложении WHERE</h2>
    <p>В предложении WHERE можно использовать следующие операторы:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:20%">Оператор</th>
            <th style="width:70%">Описание</th>
            <th style="width:10%">Пример</th>
        </tr>
        <tr>
            <td>=</td>
            <td>Равно</td>
            <td><a target="_blank" class="w3-btn btnsmall" href="../sqltryit/trysql_op_equal_to.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td>&gt;</td>
            <td>Больше чем</td>
            <td><a target="_blank" class="w3-btn btnsmall" href="../sqltryit/trysql_op_greater_than.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td>&lt;</td>
            <td>Меньше чем</td>
            <td><a target="_blank" class="w3-btn btnsmall" href="../sqltryit/trysql_op_less_than.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td>&gt;=</td>
            <td>Больше чем или равно</td>
            <td><a target="_blank" class="w3-btn btnsmall" href="../sqltryit/trysql_op_greater_than2.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td>&lt;=</td>
            <td>Меньше чем или равно</td>
            <td><a target="_blank" class="w3-btn btnsmall" href="../sqltryit/trysql_op_less_than2.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td>&lt;&gt;</td>
            <td>Не равно. <b>Примечание:</b> В некоторых версиях SQL этот оператор может быть записан как !=</td>
            <td><a target="_blank" class="w3-btn btnsmall" href="../sqltryit/trysql_op_not_equal_to.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td>BETWEEN</td>
            <td>Между определенным диапазоном</td>
            <td><a target="_blank" class="w3-btn btnsmall" href="../sqltryit/trysql_op_between.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td>LIKE</td>
            <td>Поиск по шаблону</td>
            <td><a target="_blank" class="w3-btn btnsmall" href="../sqltryit/trysql_op_like.html">Попробуй это</a></td>
        </tr>
        <tr>
            <td>IN</td>
            <td>Указать несколько возможных значений для столбца</td>
            <td><a target="_blank" class="w3-btn btnsmall" href="../sqltryit/trysql_op_in.html">Попробуй это</a></td>
        </tr>
    </table>
    <hr>

    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/sql/exercise.asp?filename=exercise_where1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Выберите все записи, в которых столбец <code class="w3-codespan">City</code> имеет значение "Berlin".</p>
            <div class="exerciseprecontainer">
<pre>
SELECT * FROM Customers
<input name="ex1" maxlength="5" style="width: 54px;"> <input name="ex2" maxlength="4" style="width: 43px;"> = <input name="ex3" maxlength="8" style="width: 85px;">;
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Submit Answer &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="sql_distinct.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="sql_and_or.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>