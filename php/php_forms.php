<?php include '../include/head.php'; ?>
<title>PHP Формы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Формы. Обработка форм. Суперглобальные переменные $_GET и $_POST используются для сбора данных формы. Простая HTML форма. Современный учебник по языку PHP. Полный справочник. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Обработка форм</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_superglobals_get.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_form_validation.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">PHP Суперглобальные переменные $_GET и $_POST используются для сбора данных формы.</p>
    <hr>

    <h2>PHP - Простая HTML форма</h2>
    <p>В приведенном ниже примере показана простая форма HTML с двумя полями ввода и кнопкой отправки:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;html&gt;<br>
            &lt;body&gt;<br>
            <br>
            &lt;form action=&quot;welcome.php&quot; method=&quot;post&quot;&gt;<br>
            Name: &lt;input type=&quot;text&quot; name=&quot;name&quot;&gt;&lt;br&gt;<br>
            E-mail: &lt;input type=&quot;text&quot; name=&quot;email&quot;&gt;&lt;br&gt;<br>
            &lt;input type=&quot;submit&quot;&gt;<br>
            &lt;/form&gt;<br>
            <br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_form_post" target="_blank" rel="nofollow">Попробуйте сами &raquo;</a>
    </div>

    <p>Когда пользователь заполняет форму выше и нажимает кнопку отправки, данные формы отправляются для обработки в файл PHP с именем &quot;welcome.php&quot;. Данные формы отправляются методом HTTP POST.</p>

    <p>Для отображения представленных данных вы можете просто повторить все переменные. &quot;Welcome.php&quot; выглядит так:</p>
    <div class="w3-code w3-border notranslate"><div>
            &lt;html&gt;<br>
            &lt;body&gt;<br>
            <br>
            Welcome &lt;?php echo $_POST[&quot;name&quot;]; ?&gt;&lt;br&gt;<br>
            Your email address is: &lt;?php echo $_POST[&quot;email&quot;]; ?&gt;<br>
            <br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div></div>
    <p>На выходе может быть что-то вроде этого:</p>
    <div class="w3-code htmlHigh w3-border notranslate"><div>
            Welcome John<br>
            Your email address is john.doe@example.com </div></div>
    <p>Тот же результат может быть достигнут с использованием метода HTTP GET:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;html&gt;<br>
            &lt;body&gt;<br>
            <br>
            &lt;form action=&quot;welcome_get.php&quot; method=&quot;get&quot;&gt;<br>
            Name: &lt;input type=&quot;text&quot; name=&quot;name&quot;&gt;&lt;br&gt;<br>
            E-mail: &lt;input type=&quot;text&quot; name=&quot;email&quot;&gt;&lt;br&gt;<br>
            &lt;input type=&quot;submit&quot;&gt;<br>
            &lt;/form&gt;<br>
            <br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_form_get" target="_blank" rel="nofollow">Попробуйте сами &raquo;</a>
    </div>

    <p>и &quot;welcome_get.php&quot; выглядит так:</p>
    <div class="w3-code w3-border notranslate"><div>
            &lt;html&gt;<br>
            &lt;body&gt;<br>
            <br>
            Welcome &lt;?php echo $_GET[&quot;name&quot;]; ?&gt;&lt;br&gt;<br>
            Your email address is: &lt;?php echo $_GET[&quot;email&quot;]; ?&gt;<br>
            <br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div></div>
    <p>Код выше довольно прост. Однако самое главное отсутствует. Вам необходимо проверить данные формы, чтобы защитить ваш скрипт от вредоносного кода.</p>

    <div class="w3-panel w3-note">
        <p><strong>Подумайте о БЕЗОПАСНОСТИ при обработке форм PHP!</strong></p>
        <p>Эта страница не содержит проверки формы, она просто показывает, как вы можете отправлять и извлекать данные формы.</p>
        <p>Однако на следующих страницах будет показано, как обрабатывать формы PHP с учетом требований безопасности! Надлежащая проверка данных формы важна для защиты вашей формы от хакеров и спамеров!</p>
    </div>
    <hr>

    <h2>GET и POST</h2>
    <p>И GET, и POST создают массив (например, array( key1 =&gt; value1, key2 =&gt; value2, key3 =&gt; value3, ...)). Этот массив содержит пары ключ / значение, где ключи (key) - это имена элементов управления формы, а значения (value) - входные данные пользователя.</p>
    <p>И GET, и POST обрабатываются как $_GET и $_POST. Это суперглобальные переменные, что означает, что они всегда доступны, независимо от области видимости, и вы можете получить к ним доступ из любой функции, класса или файла, не делая ничего специально.</p>
    <p>$_GET - это массив переменных, переданных в текущий скрипт через параметры URL.</p>
    <p>$_POST - это массив переменных, передаваемых текущему скрипту с помощью HTTP-метода POST.</p>
    <hr>

    <h2>Когда использовать GET?</h2>
    <p>Информация, отправленная из формы с помощью метода GET, <b>видна всем</b> (все имена и значения переменных отображаются в URL-адресе). GET также имеет ограничения на количество информации для отправки. Ограничение составляет около 2000 символов. Однако, поскольку переменные отображаются в URL-адресе, можно добавить страницу в закладки. Это может быть полезно в некоторых случаях.</p>
    <p>GET может использоваться для отправки нечувствительных данных.</p>
    <p><b>Примечание:</b> GET никогда не должен использоваться для отправки паролей или другой конфиденциальной информации!</p>
    <hr>

    <h2>Когда использовать POST?</h2>
    <p>Информация, отправляемая из формы методом POST, <strong>невидима для других</strong> (все имена / значения встроены в тело HTTP-запроса) и не имеет <strong>никаких ограничений</strong> на количество отправляемой информации.</p>
    <p>Кроме того, POST поддерживает расширенные функции, такие как поддержка двоичного ввода из нескольких частей при загрузке файлов на сервер.</p>
    <p>Однако, поскольку переменные не отображаются в URL-адресе, невозможно добавить страницу в закладки.</p>
    <div class="w3-panel w3-note">
        <p><strong>Разработчики предпочитают POST для отправки данных формы.</strong></p>
    </div>
    <p>Далее в учебнике вы узнаете, как можно обрабатывать PHP-формы безопасным способом!</p>
    <hr>

    <h2>PHP Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/php/exercise.asp?filename=exercise_forms1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Если форма в белом разделе ниже отправлена, как вы можете в welcome.php вывести значение из поля &quot;first name&quot;?</p>
            <div class="exerciseprecontainer">
                <div style="background-color:white; padding:10px">&lt;form action="welcome.php" method="get"&gt;
                    First name: &lt;input type="text" name="fname"&gt;
                    &lt;/form&gt;
                </div>
                &lt;html&gt;<br>
                &lt;body&gt;<br>
                Welcome &lt;?php echo <input name="ex1" maxlength="14" style="width: 148px;">; ?&gt;<br>
                &lt;/body&gt;<br>
                &lt;/html&gt;
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_superglobals_get.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_form_validation.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>