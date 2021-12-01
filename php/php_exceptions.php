<?php include '../include/head.php'; ?>
<title>PHP Исключения. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Исключения. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Исключения</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_json.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_oop_what_is.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Что такое исключения?</h2>
    <p><strong>Исключением</strong> является объект, описывающий ошибку или непредвиденное поведение PHP скрипта.</p>
    <p>Многие функции и классы PHP создают исключения.</p>
    <p>Пользовательские функции и классы также могут вызывать исключения.</p>
    <p>Исключения - хороший способ остановить функцию, когда она обнаруживает данные, которые она не может использовать.</p>
    <hr>

    <h2>Выброс исключения</h2>
    <p>Оператор <code class="w3-codespan">throw</code> позволяет определяемой пользователем функции или методу вызывать исключение. Когда генерируется исключение, следующий за ним код не будет выполняться.</p>
    <p>Если исключение не обнаружено, произойдет фатальная ошибка с сообщением о &quot;Неперехваченном исключении&quot; (&quot;Uncaught Exception&quot;).</p>
    <p>Попробуем сгенерировать исключение, не улавливая его:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate w3-border-red">
            &lt;?php<br>function divide($dividend, $divisor) {<br>&nbsp; if($divisor == 0)
            {<br>&nbsp;&nbsp;&nbsp; throw new Exception(&quot;Деление на ноль&quot;);<br>&nbsp; }<br>&nbsp;
            return $dividend / $divisor;<br>}<br><br>echo divide(5, 0);<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_exceptions_throw.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Результат будет выглядеть примерно так:</p>
    <div class="w3-code w3-border notranslate">
            <b>Fatal error</b>: <strong>Uncaught Exception</strong>: Деление на ноль в C:\webfolder\test.php:4<br>
            Stack trace: #0 C:\webfolder\test.php(9):<br>
            divide(5, 0) #1 {main} thrown in <b>C:\webfolder\test.php</b> on line <b>4</b>
        </div>
    <hr>

    <h2>Инструкция try...catch</h2>
    <p>Чтобы избежать ошибки из приведенного выше примера, мы можем использовать инструкцию <code class="w3-codespan">try...catch</code> для перехвата исключений и продолжения процесса.</p>

    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate jsHigh"><div>
            try {<br>&nbsp; код, который может генерировать исключения<br>} catch(Exception $e) {<br>&nbsp;
            код, который запускается при обнаружении исключения<br>}</div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Показывать сообщение при возникновении исключения:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>function divide($dividend, $divisor) {<br>&nbsp; if($divisor ==
            0) {<br>&nbsp;&nbsp;&nbsp; throw new Exception(&quot;Деление на ноль&quot;);<br>&nbsp;
            }<br>&nbsp; return $dividend / $divisor;<br>}<br><br>try {<br>&nbsp; echo
            divide(5, 0);<br>} catch(Exception $e) {<br>&nbsp; echo &quot;Unable to divide.&quot;;<br>
            }<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_exceptions_try_catch.html">Попробуйте сами &raquo;</a>
    </div>
    <p>Блок catch указывает, какой тип исключения следует перехватить, и имя переменной, которая может использоваться для доступа к исключению. В приведенном выше примере тип исключения - <code class="w3-codespan">Exception</code>, а имя переменной - <code class="w3-codespan">$e</code>.</p>
    <hr>

    <h2>Инструкция try...catch...finally</h2>
    <p>Инструкция <code class="w3-codespan">try...catch...finally</code> может использоваться для перехвата исключений. Код в блоке <code class="w3-codespan">finally</code> будет всегда выполняться независимо от того, было ли обнаружено исключение. Если присутствует <code class="w3-codespan">finally</code>, блок <code class="w3-codespan">catch</code> является необязательным.</p>

    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate jsHigh"><div>
            try {<br>&nbsp; код, который может генерировать исключения<br>} catch(Exception $e) {<br>&nbsp;
            код, который запускается при обнаружении исключения<br>} finally {<br>&nbsp;
            код, который всегда выполняется независимо от того, было ли обнаружено исключение<br>}</div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Показать сообщение при возникновении исключения, а затем указать, что процесс завершен:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>function divide($dividend, $divisor) {<br>&nbsp; if($divisor
            == 0) {<br>&nbsp;&nbsp;&nbsp; throw new Exception(&quot;Деление на ноль&quot;);<br>&nbsp;
            }<br>&nbsp; return $dividend / $divisor;<br>}<br><br>try {<br>&nbsp; echo
            divide(5, 0);<br>} catch(Exception $e) {<br>&nbsp; echo "Unable to
            divide. ";<br>} finally {<br>&nbsp; echo "Process complete.";<br>}<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_exceptions_finally.html">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Вывести строку, даже если исключение не было обнаружено:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>function divide($dividend, $divisor) {<br>&nbsp; if($divisor == 0)
            {<br>&nbsp;&nbsp;&nbsp; throw new Exception(&quot;Деление на ноль&quot;);<br>&nbsp; }<br>&nbsp;
            return $dividend / $divisor;<br>}<br><br>try {<br>&nbsp; echo divide(5, 0);<br>} finally {<br>&nbsp; echo
            "Процесс завершен.";<br>}<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_exceptions_finally2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Объект исключения</h2>
    <p>Объект исключения содержит информацию об ошибке или неожиданном поведении, с которым столкнулась функция.</p>
    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate"><div>
            new Exception(message, code, previous)</div>
    </div>

    <h3>Значения параметров</h3>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:20%">Параметр</th>
            <th style="width:80%">Описание</th>
        </tr>
        <tr>
            <td>message</td>
            <td>Необязательный. Строка, описывающая, почему было сгенерировано исключение</td>
        </tr>
        <tr>
            <td>code</td>
            <td>Необязательный. Целое число, которое можно использовать, чтобы легко отличить это исключение от других того же типа</td>
        </tr>
        <tr>
            <td>previous</td>
            <td>Необязательный. Если это исключение было сгенерировано в блоке catch другого исключения, рекомендуется передать это исключение в этот параметр</td>
        </tr>
    </table>

    <h3>Методы</h3>
    <p>При перехвате исключения в следующей таблице показаны некоторые методы, которые можно использовать для получения информации об исключении:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:20%">Метод</th>
            <th style="width:80%">Описание</th>
        </tr>
        <tr>
            <td>getMessage()</td>
            <td>Возвращает строку, описывающую, почему было сгенерировано исключение</td>
        </tr>
        <tr>
            <td>getPrevious()</td>
            <td>Если это исключение было инициировано другим, этот метод возвращает предыдущее исключение. Если нет, то возвращается <em>null</em></td>
        </tr>
        <tr>
            <td>getCode()</td>
            <td>Возвращает код исключения</td>
        </tr>
        <tr>
            <td>getFile()</td>
            <td>Возвращает полный путь к файлу, в котором возникло исключение</td>
        </tr>
        <tr>
            <td>getLine()</td>
            <td>Возвращает номер строки кода, вызвавшего исключение</td>
        </tr>
    </table>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Вывести информацию о сгенерированном исключении:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>function divide($dividend, $divisor) {<br>&nbsp; if($divisor == 0)
            {<br>&nbsp;&nbsp;&nbsp; throw new Exception(&quot;Деление на ноль&quot;, 1);<br>&nbsp;
            }<br>&nbsp; return $dividend / $divisor;<br>}<br><br>try {<br>&nbsp; echo
            divide(5, 0);<br>} catch(Exception $ex) {<br>&nbsp; $code = $ex-&gt;getCode();<br>&nbsp;
            $message = $ex-&gt;getMessage();<br>&nbsp; $file = $ex-&gt;getFile();<br>&nbsp;
            $line = $ex-&gt;getLine();<br>&nbsp; echo &quot;Exception thrown in $file on line
            $line: [Code $code]<br>&nbsp; $message&quot;;<br>}<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_exceptions_obj_info.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Полный справочник исключений</h2>
    <p>Для получения более полной информации перейдите на <a href="php_ref_exception.php">Полный справочник PHP исключений</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <p>Справочник содержит описания и примеры всех методов PHP исключений.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_json.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_oop_what_is.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>