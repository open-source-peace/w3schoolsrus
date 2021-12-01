<?php include '../include/head.php'; ?>
<title>PHP Сессии. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Сессии. Что такое PHP сессия? - Это способ хранения информации (в переменных) для использования на нескольких страницах. Старт сессии. Получить значения переменной. Изменить и уничтожить сессию. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Сессии</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_cookies.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_filter.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Сессия</strong> - это способ хранения информации (в переменных) для использования на нескольких страницах.</p>
    <p class="intro">В отличие от куки, информация не хранится на компьютере пользователя.</p>
    <hr>

    <h2>Что такое PHP сессия?</h2>
    <p>Когда вы работаете с приложением, вы открываете его, вносите некоторые изменения, а затем закрываете его. Это очень похоже на сессию. Компьютер знает, кто вы. Он знает, когда вы запускаете приложение и когда вы заканчиваете работать с ним. Но в Интернете есть одна проблема: веб-сервер не знает, кто вы и чем занимаетесь, потому что HTTP-адрес не поддерживает состояние.</p>
    <p>Переменные сессии решают эту проблему путем хранения пользовательской информации, которая будет использоваться на нескольких страницах (например, имя пользователя, любимый цвет и т.д.). По умолчанию переменные сессии сохраняются до тех пор, пока пользователь не закроет браузер.</p>
    <p>Т.о., переменные сессии содержат информацию об одном пользователе и доступны для всех страниц в одном приложении.</p>

    <div class="w3-panel w3-note">
        <p><strong>Совет:</strong> Если вам нужно постоянное хранилище, вы можете сохранить данные в
            <a href="php_mysql_intro.php">базе данных</a>.</p>
    </div>
    <hr>

    <h2>Старт PHP сессии</h2>
    <p>Сессия запускается с помощью функии <code class="w3-codespan">session_start()</code>.</p>
    <p>Переменные сессии устанавливаются с помощью глобальной PHP переменной: $_SESSION.</p>
    <p>Теперь давайте создадим новую страницу с именем &quot;demo_session1.php&quot;. На этой странице мы начинаем новую сессию PHP и устанавливаем некоторые переменные сессии:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>// Старт сессии<br>session_start();<br>?&gt;<br>&lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;body&gt;<br><br>&lt;?php<br>// Установить переменные сессии<br>$_SESSION[&quot;favcolor&quot;] = &quot;green&quot;;<br>$_SESSION[&quot;favanimal&quot;] = &quot;cat&quot;;<br>echo &quot;Переменные сессии установлены.&quot;;<br>?&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_session1" rel="nofollow">Запустить пример &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><strong><b>Примечание:</b></strong> Функция <code class="w3-codespan">session_start()</code> должна находиться в самом начале документа. Перед любыми тегами HTML.</p>
    </div>
    <hr>

    <h2>Получить значения переменной PHP сессии</h2>
    <p>Далее мы создаем еще одну страницу под названием &quot;demo_session2.php&quot;. На этой странице мы получим доступ к информации о сессии, которую мы установили на первой странице (&quot;demo_session1.php&quot;).</p>
    <p>Обратите внимание, что переменные сессии не передаются по отдельности каждой новой странице, а извлекаются из сессии, которую мы открываем в начале каждой страницы (<code class="w3-codespan">session_start()</code>).</p>
    <p>Также обратите внимание, что все значения переменных сессии хранятся в глобальной переменной $_SESSION:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>session_start();<br>?&gt;<br>&lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>
            &lt;body&gt;<br><br>&lt;?php<br>// Echo переменных сессии, которые были установлены на предыдущей странице<br>echo &quot;Favorite color is &quot; . $_SESSION[&quot;favcolor&quot;] . &quot;.&lt;br&gt;&quot;;<br>echo &quot;Favorite animal is &quot; . $_SESSION[&quot;favanimal&quot;] . &quot;.&quot;;<br>?&gt;<br><br>
            &lt;/body&gt;<br>&lt;/html&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_session2" rel="nofollow">Запустить пример &raquo;</a>
    </div>
    <p>Другой способ показать все значения переменных сессии для пользовательской сессии - запустить следующий код:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>session_start();<br>?&gt;<br>&lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;body&gt;<br><br>&lt;?php<br>
            print_r($_SESSION);<br>?&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_session3" rel="nofollow">Запустить пример &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p><strong>Как это работает? Как он узнал, что это я?</strong><br><br>Большинство сессий устанавливают на компьютере пользователя ключ пользователя, который выглядит примерно так: 765487cf34ert8dede5a562e4f3a7e12. Затем, когда сессия открывается на другой странице, он сканирует компьютер на предмет наличия ключа пользователя. Если есть совпадение, он получает доступ к этой сессии, если нет, он начинает новую сессию.</p>
    </div>
    <hr>

    <h2>Изменить переменную PHP сессии</h2>
    <p>Чтобы изменить переменную сессии, просто перезапишите её:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>session_start();<br>?&gt;<br>&lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;body&gt;<br><br>&lt;?php<br>// чтобы изменить переменную сессии, просто перезапишите её <br>$_SESSION[&quot;favcolor&quot;] = &quot;yellow&quot;;<br>print_r($_SESSION);<br>?&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_session4" rel="nofollow">Запустить пример &raquo;</a>
    </div>
    <hr>

    <h2>Уничтожить PHP сессию</h2>
    <p>Чтобы удалить все глобальные переменные сессии и уничтожить сессию, используйте <code class="w3-codespan">session_unset()</code> и <code class="w3-codespan">session_destroy()</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>session_start();<br>?&gt;<br>&lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;body&gt;<br><br>&lt;?php<br>// удалить все переменные сессии<br>session_unset(); <br><br>// уничтожить сессию <br>session_destroy(); <br>?&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_session5" rel="nofollow">Запустить пример &raquo;</a>
    </div>
    <hr>

    <h2>PHP Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/php/exercise.asp?filename=exercise_advanced5" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Создайте переменную сессии с именем "favcolor".</p>
            <div class="exerciseprecontainer">
<pre>
session_start();
<input name="ex1" maxlength="9" style="width: 96px;">["favcolor"] = "green";
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_cookies.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_filter.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>