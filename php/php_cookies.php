<?php include '../include/head.php'; ?>
<title>PHP Cookies / Куки. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Cookies / Куки. Что такое куки? Файл cookie - это небольшой файл, который сервер встраивает на компьютер пользователя. Каждый раз, когда один и тот же компьютер запрашивает страницу в браузере, он также отправляет cookie. С помощью PHP вы можете создавать и получать значения файлов cookie. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Cookies / Куки</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_file_upload.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_sessions.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>Что такое Cookie / Куки? </h2>
    <p>Файл cookie часто используется для идентификации пользователя. <strong>Файл cookie - это небольшой файл, который сервер встраивает на компьютер пользователя.</strong> Каждый раз, когда один и тот же компьютер запрашивает страницу в браузере, он также отправляет cookie. С помощью PHP вы можете создавать и получать значения файлов cookie.</p>
    <hr>
    <div class="w3-panel w3-note">Cookie - в пер. с анг. - Печенька.</div>
    <hr>

    <h2>Создание cookie в PHP</h2>
    <p>Cookie в PHP создаются с помощью функции <code class="w3-codespan">setcookie()</code>.</p>

    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate"><div>
            setcookie(<em>name, value, expire, path, domain, secure, httponly</em>);</div></div>

    <p>Только параметр <em>name</em> является обязательным. Все другие параметры опциональны (необязательны).</p>
    <hr>

    <h2>PHP Создать/Получить Cookie</h2>
    <p>В следующем примере создается файл cookie с именем &quot;user&quot; со значением &quot;John Doe&quot;. Срок действия файла cookie истекает через 30 дней (86400 * 30). Символ &quot;/&quot; означает, что файл cookie доступен на всем веб-сайте (в противном случае выберите каталог, который вы предпочитаете).</p>
    <p>Затем мы получаем значение cookie "user" (используя глобальную переменную $_COOKIE). Мы также используем функцию <code class="w3-codespan">isset()</code> чтобы узнать, установлен ли cookie:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$cookie_name = &quot;user&quot;;<br>$cookie_value = &quot;John Doe&quot;;<br>setcookie($cookie_name, $cookie_value, time() + (86400 * 30), &quot;/&quot;); // 86400 = 1 день<br>?&gt;<br>&lt;html&gt;<br>&lt;body&gt;<br><br>&lt;?php<br>if(!isset($_COOKIE[$cookie_name])) {<br>&nbsp;&nbsp;&nbsp; echo &quot;Cookie named '&quot; . $cookie_name . &quot;' is not set!&quot;;<br>} else {<br>&nbsp;&nbsp;&nbsp; echo &quot;Cookie '&quot; . $cookie_name . &quot;' is set!&lt;br&gt;&quot;;<br>&nbsp;&nbsp;&nbsp; echo &quot;Value is: &quot; . $_COOKIE[$cookie_name];<br>}<br>?&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_cookie1" rel="nofollow">Запустить пример &raquo;</a>
    </div>

    <div class="w3-panel w3-note"><p>
        <p><strong><b>Примечание:</b></strong> Функция <code class="w3-codespan">setcookie()</code> должна появляться ПЕРЕД тегом &lt;html&gt;.</p>
    </div>

    <p><b>Примечание:</b> Значение файла cookie автоматически кодируется URL-адресом при отправке файла cookie и автоматически декодируется при получении (для предотвращения кодирования URL-адреса используйте вместо него функцию <code class="w3-codespan">setrawcookie()</code>).</p>
    <hr>

    <h2>Изменение значения Cookie</h2>
    <p>Чтобы изменить cookie, просто установите (снова) cookie, используя функцию <code class="w3-codespan">setcookie()</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$cookie_name = &quot;user&quot;;<br>$cookie_value = &quot;Alex Porter&quot;;<br>
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), &quot;/&quot;);<br>?&gt;<br>&lt;html&gt;<br>&lt;body&gt;<br><br>&lt;?php<br>if(!isset($_COOKIE[$cookie_name])) {<br>&nbsp;&nbsp;&nbsp; echo &quot;Cookie named '&quot; . $cookie_name . &quot;' is not set!&quot;;<br>} else {<br>&nbsp;&nbsp;&nbsp; echo &quot;Cookie '&quot; . $cookie_name . &quot;' is set!&lt;br&gt;&quot;;<br>&nbsp;&nbsp;&nbsp; echo &quot;Value is: &quot; . $_COOKIE[$cookie_name];<br>}<br>?&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_cookie3" rel="nofollow">Запустить пример &raquo;</a>
    </div>
    <hr>

    <h2>Удаление Cookie</h2>
    <p>Чтобы удалить cookie, используйте функцию <code class="w3-codespan">setcookie()</code> с датой истечения срока действия в прошлом:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>// установить срок действия до часа назад<br>setcookie(&quot;user&quot;, &quot;&quot;, time() - 3600);<br>?&gt;<br>&lt;html&gt;<br>&lt;body&gt;<br><br>&lt;?php<br>echo &quot;Cookie 'user' удален.&quot;;<br>?&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_cookie4" rel="nofollow">Запустить пример &raquo;</a>
    </div>
    <hr>

    <h2>Проверьте, включены ли файлы cookie</h2>
    <p>В следующем примере создается небольшой скрипт, который проверяет, включены ли файлы cookie. Сначала попробуйте создать тестовый файл cookie с помощью функции <code class="w3-codespan">setcookie()</code>, а затем подсчитайте переменную массива $_COOKIE:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>setcookie(&quot;test_cookie&quot;, &quot;test&quot;, time() + 3600, '/');<br>?&gt;<br>&lt;html&gt;<br>&lt;body&gt;<br><br>&lt;?php<br>if(count($_COOKIE) &gt; 0) {<br>&nbsp;&nbsp;&nbsp; echo &quot;Cookie включены.&quot;;<br>} else {<br>&nbsp;&nbsp;&nbsp; echo &quot;Cookie отключены.&quot;;<br>}<br>
            ?&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_cookie5" rel="nofollow">Запустить пример &raquo;</a>
    </div>
    <hr>

    <h2>Полный справочник по PHP Network</h2>
    <p>Для получения более полной информации о сетевых функциях, перейдите в полный
        <a href="php_ref_network.php">Справочник PHP Network</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>

    <h2>PHP Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/php/exercise.asp?filename=exercise_advanced4" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Создайте cookie с именем "username".</p>
            <div class="exerciseprecontainer">
<pre>
<input name="ex1" maxlength="9" style="width: 100px;">("username", "John", time() + (86400 * 30), "/");
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_file_upload.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_sessions.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>