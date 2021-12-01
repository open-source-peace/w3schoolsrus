<?php include '../include/head.php'; ?>
<title>PHP Суперглобальные - $SERVER. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Суперглобальные - $SERVER. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP Суперглобальные - $_SERVER</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_superglobals_globals.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_superglobals_request.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Суперглобальные переменные</strong> - это встроенные переменные, которые всегда доступны во всех областях.</p>
    <hr>

    <h2>PHP $_SERVER</h2>
    <p>$_SERVER - это суперглобальная переменная PHP, которая содержит информацию о заголовках, путях и расположении скриптов.</p>
    <p>В приведенном ниже примере показано, как использовать некоторые элементы в $_SERVER:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php <br>echo $_SERVER['PHP_SELF'];<br>echo &quot;&lt;br&gt;&quot;;<br>
            echo $_SERVER['SERVER_NAME'];<br>echo &quot;&lt;br&gt;&quot;;<br>echo $_SERVER['HTTP_HOST'];<br>
            echo &quot;&lt;br&gt;&quot;;<br>echo $_SERVER['HTTP_REFERER'];<br>echo &quot;&lt;br&gt;&quot;;<br>echo $_SERVER['HTTP_USER_AGENT'];<br>echo &quot;&lt;br&gt;&quot;;<br>echo $_SERVER['SCRIPT_NAME'];<br>?&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_global_server">Попробуйте сами &raquo;</a>
    </div>
    <p>В следующей таблице перечислены наиболее важные элементы, которые могут быть внутри $_SERVER:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:35%">Элемент/Код</th>
            <th style="width:65%">Описание</th>
        </tr>
        <tr>
            <td>$_SERVER['PHP_SELF']</td>
            <td>Возвращает имя файла исполняемого в данный момент скрипта</td>
        </tr>
        <tr>
            <td>$_SERVER['GATEWAY_INTERFACE']</td>
            <td>Возвращает версию Common Gateway Interface (CGI), которую использует сервер</td>
        </tr>
        <tr>
            <td>$_SERVER['SERVER_ADDR']</td>
            <td>Возвращает IP-адрес хост-сервера</td>
        </tr>
        <tr>
            <td>$_SERVER['SERVER_NAME']</td>
            <td>Возвращает имя хост-сервера (например, www.w3schools.com)</td>
        </tr>
        <tr>
            <td>$_SERVER['SERVER_SOFTWARE']</td>
            <td>Возвращает строку идентификации сервера (например, Apache/2.2.24)</td>
        </tr>
        <tr>
            <td>$_SERVER['SERVER_PROTOCOL']</td>
            <td>Возвращает имя и версию информационного протокола (например, HTTP/1.1)</td>
        </tr>
        <tr>
            <td>$_SERVER['REQUEST_METHOD']</td>
            <td>Возвращает метод запроса, используемый для доступа к странице (например, POST)</td>
        </tr>
        <tr>
            <td>$_SERVER['REQUEST_TIME']</td>
            <td>Возвращает отметку времени начала запроса (например, 1377687496)</td>
        </tr>
        <tr>
            <td>$_SERVER['QUERY_STRING']</td>
            <td>Возвращает строку запроса, если к странице обращаются через строку запроса</td>
        </tr>
        <tr>
            <td>$_SERVER['HTTP_ACCEPT']</td>
            <td>Возвращает заголовок Accept из текущего запроса</td>
        </tr>
        <tr>
            <td>$_SERVER['HTTP_ACCEPT_CHARSET']</td>
            <td>Возвращает заголовок Accept_Charset из текущего запроса (например, utf-8,ISO-8859-1)</td>
        </tr>
        <tr>
            <td>$_SERVER['HTTP_HOST']</td>
            <td>Возвращает заголовок Host из текущего запроса</td>
        </tr>
        <tr>
            <td>$_SERVER['HTTP_REFERER']</td>
            <td>Возвращает полный URL-адрес текущей страницы (ненадежно, потому что не все пользовательские агенты поддерживают его)</td>
        </tr>
        <tr>
            <td>$_SERVER['HTTPS']</td>
            <td>Запрашивается ли скрипт через безопасный протокол HTTP</td>
        </tr>
        <tr>
            <td>$_SERVER['REMOTE_ADDR']</td>
            <td>Возвращает IP-адрес, с которого пользователь просматривает текущую страницу</td>
        </tr>
        <tr>
            <td>$_SERVER['REMOTE_HOST']</td>
            <td>Возвращает имя хоста, с которого пользователь просматривает текущую страницу</td>
        </tr>
        <tr>
            <td>$_SERVER['REMOTE_PORT']</td>
            <td>Возвращает порт, используемый на машине пользователя для связи с веб-сервером</td>
        </tr>
        <tr>
            <td>$_SERVER['SCRIPT_FILENAME']</td>
            <td>Возвращает абсолютный путь к исполняемому в данный момент скрипту</td>
        </tr>
        <tr>
            <td>$_SERVER['SERVER_ADMIN']</td>
            <td>Возвращает значение, указанное в директиве SERVER_ADMIN в файле конфигурации веб-сервера (если ваш скрипт выполняется на виртуальном хосте, это будет значение, определенное для этого виртуального хоста) (например, someone@w3schools.com)</td>
        </tr>
        <tr>
            <td>$_SERVER['SERVER_PORT']</td>
            <td>Возвращает порт на сервере, который используется веб-сервером для связи (например, 80)</td>
        </tr>
        <tr>
            <td>$_SERVER['SERVER_SIGNATURE']</td>
            <td>Возвращает версию сервера и имя виртуального хоста, которые добавляются на сгенерированные сервером страницы</td>
        </tr>
        <tr>
            <td>$_SERVER['PATH_TRANSLATED']</td>
            <td>Возвращает путь к текущему скрипту на основе файловой системы</td>
        </tr>
        <tr>
            <td>$_SERVER['SCRIPT_NAME']</td>
            <td>Возвращает путь к текущему скрипту</td>
        </tr>
        <tr>
            <td>$_SERVER['SCRIPT_URI']</td>
            <td>Returns the URI of the current page</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_superglobals_globals.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_superglobals_request.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>