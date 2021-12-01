<?php include '../include/head.php'; ?>

<title>JavaScript Ключевое слово Let. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Ключевое слово Let. Невозможно повторно объявить. Область действия блока. Повторное объявление переменных. Подъём (хостинг) Let. Примеры. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript Ключевое слово Let</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_variables.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_const.php">Next &#10095;</a>
    </div>

    <div class="w3-info">
        <p><strong>Ключевое слово <code class="w3-codespan">let</code></strong> было введено в <a href="js_es6.php">ES6 (2015)</a>.</p>
        <p>Переменные, определенные с помощью <code class="w3-codespan">let</code> нельзя повторно объявить.</p>
        <p>Переменные, определенные с помощью <code class="w3-codespan">let</code> должны быть объявлены перед использованием.</p>
        <p>Переменные, определенные с помощью <code class="w3-codespan">let</code> имеют область действия блока.</p>
    </div>

    <h2>Невозможно повторно объявить</h2>
    <p>Переменные, определенные с помощью <code class="w3-codespan">let</code> не могут быть <b>объявлены повторно</b>.</p>
    <p>Вы не можете случайно повторно объявить переменную.</p>

    <p>С помощью <code class="w3-codespan">let</code> вы не сможете этого сделать:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = "John Doe";<br>
            <br>
            let x = 0;<br><br>
            // SyntaxError: 'x' уже было объявлено<br>
        </div>
    </div>
    <p>С помощью <code class="w3-codespan">var</code> вы можете:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var x = "John Doe";<br>
            <br>
            var x = 0;
        </div>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Область действия блока</h2>
    <p>До ES6 (2015) в JavaScript были только <b>Global Scope</b> (Глобальная область) и <b>Function Scope</b> (область действия).</p>
    <p>ES6 представил два важных новых ключевых слова JavaScript: <code class="w3-codespan">let</code> и <code class="w3-codespan">const</code>.</p>
    <p>Эти два ключевых слова обеспечивают <strong>Block Scope</strong> (область действия блока) в JavaScript.</p>
    <p>К переменным, объявленным внутри блока { }, нельзя получить доступ извне блока:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            { <br>
            &nbsp;&nbsp;let x = 2;<br>
            }<br>
            // x НЕ может быть использован здесь</div>
    </div>

    <p>Переменные, объявленные с помощью ключевого слова <code class="w3-codespan">var</code>, НЕ могут иметь область действия блока.</p>
    <p>Переменные, объявленные внутри блока { }, могут быть доступны вне блока.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            { <br>
            &nbsp;&nbsp;var x = 2; <br>
            }<br>
            // x МОЖНО использовать здесь</div>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Повторное объявление переменных</h2>
    <p>Повторное объявление переменной с помощью ключевого слова <code class="w3-codespan">var</code> может вызвать проблемы.</p>
    <p>Повторное объявление переменной внутри блока также приведет к повторному объявлению переменной вне блока:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var x = 10;<br>
            // Здесь x равно 10<br>
            <br>
            { <br>
            var x = 2;<br>
            // Здесь x равно 2<br>}<br>
            <br>
            // Здесь x равно 2</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_es6_var.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Повторное объявление переменной с помощью ключевого слова <code class="w3-codespan">let</code> может решить эту проблему.</p>
    <p>Повторное объявление переменной внутри блока не приведет к повторному объявлению переменной вне блока:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 10;<br>
            // Здесь x равно 10<br>
            <br>
            {<br>
            let x = 2;<br>
            // Здесь x равно 2<br>}<br>
            <br>
            // Здесь x равно 10
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_es6_let.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>Поддержка браузерами</h2>
    <p>Ключевое слово <code class="w3-codespan">let</code> не полностью поддерживается в Internet Explorer 11 или более ранней версии.</p>
    <p>В следующей таблице определены первые версии браузера с полной поддержкой ключевого слова <code class="w3-codespan">let</code>:</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tr>
                <th style="width:20%;" class="bsChrome" title="Chrome"></th>
                <th style="width:20%;" class="bsEdge" title="Edge"></th>
                <th style="width:20%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:20%;" class="bsSafari" title="Safari"></th>
                <th style="width:20%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td>Chrome 49</td>
                <td>Edge 12</td>
                <td>Firefox 44</td>
                <td>Safari 11</td>
                <td>Opera 36</td>
            </tr>
            <tr>
                <td>Mar, 2016</td>
                <td>Jul, 2015</td>
                <td>Jan, 2015</td>
                <td>Sep, 2017</td>
                <td>Mar, 2016</td>
            </tr>
        </table>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Повторное объявление</h2>
    <p>Повторное объявление переменной JavaScript с помощью <code class="w3-codespan">var</code> разрешено в любом месте программы:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var x = 2;<br>
            // Теперь x равно 2<br>
            <br>
            var x = 3;<br>
            // Теперь x равно 3
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_let_redeclare_var.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>С помощью <code class="w3-codespan">let</code> повторное объявление переменной в том же блоке ЗАПРЕЩЕНО:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var x = 2;&nbsp;&nbsp;&nbsp;&nbsp;// Разрешено<br>
            let x = 3;&nbsp;&nbsp;&nbsp;&nbsp;// Не разрешено<br>
            <br>
            {<br>
            let x = 2;&nbsp;&nbsp;&nbsp;&nbsp;// Разрешено<br>
            let x = 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Не разрешено<br>
            }<br>
            <br>
            {<br>
            let x = 2;&nbsp;&nbsp;&nbsp;&nbsp;// Разрешено<br>
            var x = 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Не разрешено<br>
            }<br>
        </div>
    </div>

    <p>Повторное объявление переменной с помощью <code class="w3-codespan">let</code> в другом блоке РАЗРЕШЕНО:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 2;&nbsp;&nbsp;&nbsp;&nbsp;// Разрешено<br><br>{<br>
            let x = 3;&nbsp;&nbsp;&nbsp; // Разрешено<br>
            }<br>
            <br>
            {<br>
            let x = 4;&nbsp;&nbsp;&nbsp;&nbsp;// Разрешено<br>
            }</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_let_redeclare.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Подъём (хостинг) Let</h2>
    <p>Переменные, определённые с помощью <code class="w3-codespan">var</code>, <strong>поднимаются</strong> вверх и могут быть инициализированы в любое время.</p>
    <p>Важно: вы можете использовать переменную до её объявления:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Это OK:</p>
        <div class="w3-code notranslate jsHigh">
            carName = &quot;Volvo&quot;;<br>
            var carName;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_let_hoisting_var.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Если вы хотите узнать больше о подъёме, изучите главу <a href="js_hoisting.php">JavaScript Подъём</a>.
    <p>Переменные, определенные с помощью <code class="w3-codespan">let</code> также поднимаются в верхнюю часть блока, но не инициализируются.</p>
    <p>Важно: использование переменной <code class="w3-codespan">let</code> перед её объявлением приведет к ошибке <code class="w3-codespan">ReferenceError</code>:</p>

    <div class="w3-example w3-pale-red">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh w3-border-red">
            carName = &quot;Saab&quot;;<br>
            let carName = "Volvo";</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_let_hoisting_let.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_variables.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_const.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>