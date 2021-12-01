<?php include '../include/head.php'; ?>
<title>PHP Валидация (проверка) формы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Валидация (проверка) формы. Современный учебник по языку PHP. Полный справочник. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Валидация (проверка) формы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_forms.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_form_required.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">В этой и следующих главах показано, как использовать PHP для проверки данных формы.</p>
    <hr>

    <h2>PHP Проверка формы</h2>
    <div class="w3-panel w3-note"><p>
        <p><strong>Подумайте о БЕЗОПАСНОСТИ при обработке форм PHP!</strong></p>
        <p>На этих страницах будет показано, как обрабатывать формы PHP с учетом требований безопасности. Надлежащая проверка данных формы важна для защиты вашей формы от хакеров и спамеров!</p>
    </div>

    <p>HTML форма, над которой мы будем работать в этих главах, содержит различные поля ввода: обязательные и дополнительные текстовые поля, переключатели и кнопку отправки:</p>
    <iframe src="https://tryphp.w3schools.com/demo/demo_form_validation_complete.php" style="border:3px solid #ddd;height:600px;width:100%;padding-left:8px;padding-right:2px"></iframe>

    <p>Правила валидации (проверки) для формы выше:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:25%">Поле</th>
            <th style="width:75%">Правила валидации</th>
        </tr>
        <tr>
            <td>Имя</td>
            <td>Обязательно. + Должно содержать только буквы и пробелы</td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td>Обязательно. + Должно содержать действительный адрес электронной почты (с @ and .)</td>
        </tr>
        <tr>
            <td>Веб-сайт</td>
            <td>Необязательно. Если присутствует, то должно содержать действительный URL</td>
        </tr>
        <tr>
            <td>Комментарий</td>
            <td>Необязательно. Многострочное поле ввода (текстовое поле)</td>
        </tr>
        <tr>
            <td>Пол</td>
            <td>Обязательно. Необходимо выбрать только один вариант</td>
        </tr>
    </table>
    <p>Сначала мы рассмотрим простой HTML-код формы:</p>
    <hr>

    <h2>Текстовые поля</h2>
    <p>Поля Имя, email и Веб-сайт являются элементами ввода текста, а поле комментария - текстовой областью. HTML-код выглядит так:</p>
    <div class="w3-code w3-border notranslate htmlHigh"><div>
            Имя: &lt;input type=&quot;text&quot; name=&quot;name&quot;&gt;<br>
            E-mail: &lt;input type=&quot;text&quot; name=&quot;email&quot;&gt;<br>Веб-сайт: &lt;input type=&quot;text&quot; name=&quot;website&quot;&gt;<br>Комментарий: &lt;textarea name=&quot;comment&quot; rows=&quot;5&quot; cols=&quot;40&quot;&gt;&lt;/textarea&gt;<br></div></div>
    <hr>

    <h2>Радио-кнопки</h2>
    <p>Указатели пола - это переключатели, а HTML-код выглядит следующим образом:</p>
    <div class="w3-code w3-border notranslate htmlHigh"><div>
            Gender:<br>&lt;input type=&quot;radio&quot; name=&quot;gender&quot;
            value=&quot;female&quot;&gt;Female<br>&lt;input type=&quot;radio&quot; name=&quot;gender&quot; value=&quot;male&quot;&gt;Male<br>&lt;input type=&quot;radio&quot; name=&quot;gender&quot; value=&quot;other&quot;&gt;Other</div></div>
    <hr>

    <h2>Элемент form</h2>
    <p>HTML-код формы выглядит следующим образом:</p>
    <div class="w3-code w3-border notranslate htmlHigh"><div>
            &lt;form method=&quot;post&quot; action=&quot;&lt;?php echo htmlspecialchars($_SERVER[&quot;PHP_SELF&quot;]);?&gt;&quot;&gt;</div></div>
    <p>Когда форма отправлена, данные формы отправляются с помощью method=&quot;post&quot;.</p>

    <div class="w3-panel w3-note">
        <p><strong>Что такое переменная $_SERVER[&quot;PHP_SELF&quot;]?</strong><br><br>$_SERVER[&quot;PHP_SELF&quot;] является суперглобальной переменной, которая возвращает имя исполняемого в данный момент скрипта.</p>
    </div>

    <p>Таким образом, $_SERVER[&quot;PHP_SELF&quot;] отправляет отправленные данные формы на саму страницу, вместо того, чтобы переходить на другую страницу. Таким образом, пользователь будет получать сообщения об ошибках на той же странице, где и форма.</p>

    <div class="w3-panel w3-note">
        <p><strong>Что такое функция htmlspecialchars()?</strong><br><br>Функция htmlspecialchars() преобразует специальные символы в объекты HTML. Это означает, что он заменит HTML символы, такие как &lt; и &gt; с помощью &amp;lt; и &amp;gt;. Это предотвращает использование кода злоумышленниками путем внедрения кода HTML или Javascript (межсайтовый скриптинг) в формы.</p>
    </div>
    <hr>

    <h2>Большая заметка о безопасности форм PHP</h2>
    <p>Переменная $_SERVER[&quot;PHP_SELF&quot;] может быть использована хакерами!!</p>
    <p>Если на вашей странице используется PHP_SELF то пользователь может ввести косую черту (/), а затем выполнить некоторые команды межсайтового скриптинга (XSS - Cross Site Scripting).</p>
    <div class="w3-panel w3-note">
        <p><strong>Межсайтовый скриптинг (XSS) - это тип уязвимости компьютерной безопасности, обычно встречающийся в веб-приложениях. XSS позволяет злоумышленникам внедрить клиентский скрипт в веб-страницы, просматриваемые другими пользователями.</strong></p>
    </div>

    <p>Предположим, у нас есть следующая форма на странице с именем &quot;test_form.php&quot;:</p>
    <div class="w3-code w3-border notranslate htmlHigh"><div>
            &lt;form method=&quot;post&quot; action=&quot;&lt;?php echo $_SERVER[&quot;PHP_SELF&quot;];?&gt;&quot;&gt;</div></div>
    <p>Теперь, если пользователь вводит нормальный URL-адрес в адресной строке, как
        &quot;http://www.example.com/test_form.php&quot;, приведенный выше код будет переведен в:</p>
    <div class="w3-code w3-border notranslate htmlHigh"><div>
            &lt;form method=&quot;post&quot; action=&quot;test_form.php&quot;&gt;</div></div>
    <p>Пока всё в порядке.</p>

    <p>Однако учтите, что пользователь вводит следующий URL в адресную строку:</p>
    <div class="w3-code w3-border notranslate"><div>
            http://www.example.com/test_form.php/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E</div></div>
    <p>В этом случае приведенный выше код будет переведен на:</p>
    <div class="w3-code w3-border notranslate htmlHigh"><div>
            &lt;form method=&quot;post&quot; action=&quot;test_form.php/&quot;&gt;&lt;script&gt;alert('hacked')&lt;/script&gt;</div></div>
    <p>Этот код добавляет тег &lt;script&gt; и команду alert. И когда страница загрузится, код JavaScript будет выполнен (пользователь увидит окно с предупреждением). Это простой и безобидный пример того, как можно использовать переменную PHP_SELF.</p>
    <p>Имейте в виду, что <strong>любой JavaScript-код может быть добавлен внутри тега &lt;script&gt;!</strong> Хакер может перенаправить пользователя в файл на другом сервере, и этот файл может содержать вредоносный код, который может изменять глобальные переменные или отправлять форму по другому адресу, например, для сохранения пользовательских данных.</p>
    <hr>

    <h2>Как избежать эксплойтов в $_SERVER[&quot;PHP_SELF&quot;]?</h2>
    <p>$_SERVER[&quot;PHP_SELF&quot;] эксплойтов можно избежать с помощью функции htmlspecialchars().</p>
    <p>Код формы должен выглядеть следующим образом:</p>
    <div class="w3-code w3-border notranslate htmlHigh"><div>
            &lt;form method=&quot;post&quot; action=&quot;&lt;?php echo htmlspecialchars($_SERVER[&quot;PHP_SELF&quot;]);?&gt;&quot;&gt;</div></div>
    <p>Функция htmlspecialchars() преобразует специальные символы в объекты HTML. Теперь, если пользователь попытается использовать переменную PHP_SELF, это приведет к следующему выводу:</p>
    <div class="w3-code w3-border notranslate htmlHigh"><div>
            &lt;form method=&quot;post&quot; action=&quot;test_form.php/&amp;quot;&amp;gt;&amp;lt;script&amp;gt;alert('hacked')&amp;lt;/script&amp;gt;&quot;&gt;</div></div>
    <p>Попытка эксплойта не удалась, и никакого вреда нанесено не было!</p>
    <hr>

    <h2>Проверьте данные формы с помощью PHP</h2>
    <p>Первое, что мы сделаем, это передадим все переменные через PHP функцию htmlspecialchars().</p>
    <p>Когда мы используем функцию htmlspecialchars(); затем, если пользователь пытается отправить следующее в текстовом поле:</p>
    <p>&lt;script&gt;location.href('http://www.hacked.com')&lt;/script&gt;</p>
    <p>- это не будет выполнено, потому что оно будет сохранено как HTML-код, как этот:</p>
    <p>&amp;lt;script&amp;gt;location.href('http://www.hacked.com')&amp;lt;/script&amp;gt;</p>
    <p>Код теперь безопасен для отображения на странице или внутри электронной почты.</p>
    <p>Мы также сделаем ещё две вещи, когда пользователь отправит форму:</p>
    <ol>
        <li>Убрать ненужные символы (лишний пробел, табуляцию, символ новой строки) из введенных пользователем данных (с помощью PHP функции trim())</li>
        <li>Удалить обратную косую черту (\) из введенных пользователем данных (с помощью PHP функции stripslashes())</li>
    </ol>

    <p>Следующим шагом является создание функции, которая будет выполнять всю проверку за нас (что гораздо удобнее, чем писать один и тот же код снова и снова).</p>
    <p>Назовем функцию test_input().</p>
    <p>Теперь мы можем проверить каждую переменную $_POST с помощью функции test_input(), и скрипт теперь выглядит следующим образом:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>// определить переменные и установить пустые значения<br>$name = $email = $gender = $comment = $website = &quot;&quot;;<br><br>if ($_SERVER[&quot;REQUEST_METHOD&quot;] == &quot;POST&quot;) {<br>&nbsp; $name = test_input($_POST[&quot;name&quot;]);<br>&nbsp; $email = test_input($_POST[&quot;email&quot;]);<br>
            &nbsp;
            $website = test_input($_POST[&quot;website&quot;]);<br>&nbsp; $comment = test_input($_POST[&quot;comment&quot;]);<br>&nbsp; $gender = test_input($_POST[&quot;gender&quot;]);<br>}<br>
            <br>function test_input($data) {<br>&nbsp; $data = trim($data);<br>&nbsp; $data = stripslashes($data);<br>&nbsp; $data = htmlspecialchars($data);<br>&nbsp; return $data;<br>
            }<br>?&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_form_validation_escapechar" target="_blank" rel="nofollow">Попробуйте сами &raquo;</a>
    </div>

    <p>Обратите внимание, что в начале скрипта мы проверяем, была ли отправлена форма, используя $_SERVER [&quot;REQUEST_METHOD&quot;]. Если REQUEST_METHOD - POST, то форма была отправлена - и она должна быть проверена. Если она не была отправлена, пропустите проверку и отобразите пустую форму.</p>
    <p>Однако в приведенном выше примере все поля ввода являются необязательными. Скрипт работает нормально, даже если пользователь не вводит никаких данных.</p>
    <p>Следующим шагом является обязательное заполнение полей ввода и создание сообщений об ошибках, если это необходимо.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_forms.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_form_required.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>