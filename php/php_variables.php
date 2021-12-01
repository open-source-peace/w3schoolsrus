<?php include '../include/head.php'; ?>
<title>PHP Переменные. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Переменные. Создание (оъявление) переменных. Как создают переменные в PHP? Вывод перменных. Современный учебник по языку PHP. Создание сайта с помощью PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Переменные</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_comments.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_variables_scope.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Переменные</strong> - это &quot;контейнеры&quot; для хранения информации.</p>
    <hr>

    <h2>Создание (объявление) переменных PHP</h2>
    <p>В PHP переменная начинается со знака <code class="w3-codespan">$</code>, за которым следует имя переменной:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;?php<br>
            $txt = &quot;Hello world!&quot;;<br>
            $x = 5;<br>$y = 10.5;<br>
            ?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_var.html">Попробуйте сами &raquo;</a>
    </div>
    <p>После выполнения приведенных выше инструкций переменная
        <code class="w3-codespan">$txt</code> будет иметь значение
        <code class="w3-codespan">Hello world!</code>, переменная
        <code class="w3-codespan">$x</code> будет иметь значение
        <code class="w3-codespan">5</code>, и переменная <code class="w3-codespan">$y</code> будет иметь значение
        <code class="w3-codespan">10.5</code>.</p>
    <p><b>Примечание:</b> Когда вы присваиваете текстовое значение переменной, заключите значение в кавычки.</p>
    <p><strong>Примечание:</strong> В отличие от других языков программирования, в PHP нет команды для объявления переменной. Она создаётся в тот момент, когда вы впервые присваиваете ей значение.</p>

    <div class="w3-panel w3-note">
        <p>Думайте о переменных как о контейнерах для хранения данных.</p>
    </div>
    <hr>

    <h2>PHP Переменные</h2>
    <p>Переменная может иметь короткое имя (например, x и y) или более информативное имя (возраст, carname, total_volume).</p>
    <p>Правила для переменных PHP:</p>
    <ul>
        <li>Переменная начинается со знака <code class="w3-codespan">$</code>, за которым следует имя переменной</li>
        <li>Имя переменной должно начинаться с буквы или символа подчеркивания</li>
        <li>Имя переменной не может начинаться с цифры</li>
        <li>Имя переменной может содержать только буквенно-цифровые символы и символы подчеркивания (A-z, 0-9, и _ )</li>
        <li>Имена переменных чувствительны к регистру (<code class="w3-codespan">$age</code> и <code class="w3-codespan">$AGE</code> - это две разные переменные)</li>
    </ul>

    <div class="w3-panel w3-note">
        <p>Помните, что имена переменных PHP чувствительны к регистру!</p>
    </div>
    <hr>

    <h2>Вывод переменных</h2>
    <p>PHP инструкция <code class="w3-codespan">echo</code> часто используется для вывода данных на экран.</p>
    <p>В следующем примере будет показано, как выводить текст и переменную:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;?php<br>
            $txt = &quot;W3Schools.com&quot;;<br>
            echo &quot;I love $txt!&quot;;<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_var2.html">Попробуйте сами &raquo;</a>
    </div>

    <p>В следующем примере будет получен тот же результат, что и в примере выше:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            $txt = &quot;W3Schools.com&quot;;<br>
            echo &quot;I love &quot; . $txt . &quot;!&quot;;<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_var3.html">Попробуйте сами &raquo;</a>
    </div>

    <p>В следующем примере будет выведена сумма двух переменных:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            $x = 5;<br>$y = 4;<br>echo $x + $y;<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_var4.html">Попробуйте сами &raquo;</a>
    </div>
    <p><strong>Примечание:</strong> Вы узнаете больше об инструкции <code class="w3-codespan">echo</code> и о том, как выводить данные на экран в следующей главе.</p>
    <hr>

    <h2>PHP - это слабо типизированный язык</h2>
    <p>В приведенном выше примере обратите внимание, что нам не нужно было указывать PHP, какому типу данных принадлежит переменная.</p>
    <p>PHP автоматически связывает тип данных с переменной в зависимости от её значения. Поскольку типы данных строго не установлены, вы можете делать такие вещи, как добавление строки к целому числу, не вызывая ошибки.</p>
    <p>В PHP 7 были добавлены объявления типов. Это даёт возможность указать тип данных, ожидаемый при объявлении функции, а при включении строгого требования будет выдана &quot;Fatal Error&quot; (&quot;Фатальная ошибка&quot;) на несоответствие типа.</p>
    <p>Вы узнаете больше о <code class="w3-codespan">strict</code> (строгих) и <code class="w3-codespan">non-strict</code> (не строгих) требованиях, а также объявлениях типов данных в главе <a href="php_functions.php">PHP Функции</a>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_comments.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_variables_scope.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>