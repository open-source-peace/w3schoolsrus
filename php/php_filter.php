<?php include '../include/head.php'; ?>
<title>PHP Фильтры. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Фильтры. Зачем использовать фильтры? Зачем необходимо проверять внешние данные. Функция filter_var(). Как проверить строку, целое число, IP-адрес, email, URL. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Фильтры</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_sessions.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_filter_advanced.php">Next &#10095;</a>
    </div>
    <hr>

    <p class="intro"><strong>Проверка данных</strong> = Определите, в правильной ли форме данные.</p>
    <p class="intro"><strong>Обеззараживание (дезинфекция) данных</strong> = Удалите любой недопустимый символ из данных.</p>
    <hr>

    <h2>Расширение PHP фильтра</h2>
    <p>PHP фильтры используются для проверки и очистки внешнего ввода.</p>
    <p>Расширение фильтра PHP имеет множество функций, необходимых для проверки пользовательского ввода, и предназначено для упрощения и ускорения проверки данных.</p>
    <p>Функция <code class="w3-codespan">filter_list()</code> может быть использована для просмотра списка расширений фильтра PHP: </p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;table&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;Filter Name&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;Filter ID&lt;/td&gt;<br>&nbsp; &lt;/tr&gt;<br>&nbsp; &lt;?php<br>&nbsp; foreach (filter_list() as $id =&gt;$filter) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo '&lt;tr&gt;&lt;td&gt;' . $filter . '&lt;/td&gt;&lt;td&gt;' . filter_id($filter) . '&lt;/td&gt;&lt;/tr&gt;';<br>&nbsp; }<br>&nbsp; ?&gt;<br>&lt;/table&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_filter1.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Зачем использовать фильтры?</h2>
    <p>Многие веб-приложения получают внешний вход. Внешний вход/данные могут быть:</p>
    <ul>
        <li>Пользовательский ввод из формы</li>
        <li>Cookies</li>
        <li>Данные веб-служб</li>
        <li>Серверные переменные</li>
        <li>Результаты запроса к базе данных</li>
    </ul>

    <div class="w3-panel w3-note"><p>
        <p><strong>Вы всегда должны проверять внешние данные!<br></strong>Неправильные данные могут привести к проблемам с безопасностью и сломать вашу веб-страницу!<br>Используя фильтры PHP, вы можете быть уверены, что ваше приложение получит правильный ввод!</p>
    </div>
    <hr>

    <h2>PHP функция filter_var()</h2>
    <p>Функция <code class="w3-codespan">filter_var()</code> проверки и дезинфекции данных.</p>
    <p>Функция <code class="w3-codespan">filter_var()</code> фильтрует одну переменную с указанным фильтром. Требуется две части данных:</p>
    <ul>
        <li>Переменная, которую вы хотите проверить</li>
        <li>Тип проверки для использования</li>
    </ul>
    <hr>

    <h2>Дезинфицировать строку (string)</h2>
    <p>В следующем примере функция <code class="w3-codespan">filter_var()</code> используется для удаления всех HTML тегов из строки:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$str = "&lt;h1&gt;Hello World!&lt;/h1&gt;";<br>$newstr = filter_var($str, FILTER_SANITIZE_STRING);<br>echo $newstr;<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_filter2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Проверить целое число (integer)</h2>
    <p>В следующем примере используется функция <code class="w3-codespan">filter_var()</code> чтобы проверить, является ли переменная $int целым числом. Если $int является целым числом, вывод приведенного ниже кода будет следующим: "Integer is valid" ("Целое число допустимо"). Если $int не является целым числом, вывод будет: "Integer is not valid" ("Целое число не допустимо"):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$int = 100;<br><br>if (!filter_var($int, FILTER_VALIDATE_INT) === false) {<br>&nbsp;&nbsp;&nbsp; echo("Integer is valid");<br>} else {<br>&nbsp;&nbsp;&nbsp; echo("Integer is not valid");<br>}<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_filter3.html">Попробуйте сами &raquo;</a>
    </div>

    <h3>Примечание: filter_var() и проблема с 0</h3>
    <p>В приведенном выше примере, если $int было установлено на 0, вышеприведённая функция вернёт "Integer is not valid". Чтобы решить эту проблему, используйте код ниже:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$int = 0;<br><br>if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {<br>&nbsp;&nbsp;&nbsp; echo("Integer is valid");<br>} else {<br>&nbsp;&nbsp;&nbsp; echo("Integer is not valid");<br>}<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_filter4.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Проверить IP адрес</h2>
    <p>В следующем примере используется функция <code class="w3-codespan">filter_var()</code> чтобы проверить, является ли переменная $ip действительным IP-адресом:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$ip = "127.0.0.1";<br><br>if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {<br>&nbsp;&nbsp;&nbsp; echo("$ip is a valid IP address");<br>} else {<br>&nbsp;&nbsp;&nbsp; echo("$ip is not a valid IP address");<br>}<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_filter5.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Дезинфекция и проверка адреса электронной почты</h2>
    <p>В следующем примере используется функция <code class="w3-codespan">filter_var()</code> чтобы сначала удалить все недопустимые символы из переменной $email, а затем проверить, является ли это действительный адрес электронной почты:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$email = "john.doe@example.com";<br><br>// Удалить все недопустимые символы из электронной почты<br>$email = filter_var($email, FILTER_SANITIZE_EMAIL);<br><br>// Проверить e-mail<br>if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {<br>&nbsp;&nbsp;&nbsp; echo("$email is a valid email address");<br>} else {<br>&nbsp;&nbsp;&nbsp; echo("$email is not a valid email address");<br>}<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_filter6.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Дезинфекция и проверка URL</h2>
    <p>В следующем примере функция <code class="w3-codespan">filter_var()</code> сначала удаляет все недопустимые символы из URL-адреса, а затем проверяет, является ли $url действительным URL-адресом:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$url = "https://www.w3schools.com";<br>
            <br>// Удалить все недопустимые символы из URL<br>$url = filter_var($url, FILTER_SANITIZE_URL);<br><br>// Проверить url<br>if (!filter_var($url, FILTER_VALIDATE_URL) === false) {<br>&nbsp;&nbsp;&nbsp; echo("$url is a valid URL");<br>} else {<br>&nbsp;&nbsp;&nbsp; echo("$url is not a valid URL");<br>}<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_filter7.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Полный справочник PHP Фильтров</h2>
    <p>Для более полного ознакомления со всеми функциями PHP фильтров, перейдите в главу <a href="php_ref_filter.php">Справочник PHP фильтров</a> на нашем сайте <?php include '../include/w3schools.php'; ?>. Проверьте каждый фильтр, чтобы увидеть, какие параметры и флажки доступны.</p>
    <p>Справочник содержит краткое описание и примеры использования для каждой функции!</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_sessions.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_filter_advanced.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>