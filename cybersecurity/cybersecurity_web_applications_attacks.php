<?php include '../include/head.php'; ?>
<title>Учебник по кибербезопасности. Атаки на веб-приложения. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Атаки на веб-приложения. IDOR. Избегайте &quot;Волшебных чисел&quot;. SQL-инъекция. XSS - Межсайтовый скриптинг. HTML Кодирование. CSP - Политика безопасности контента. Сканирование веб-приложений. Учебник по кибербезопасности. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_cybersecurity.php'; ?>
<?php include '../include/before_content_cybersecurity.php'; ?>

<article>
    <h1>Кибербезопасность. <span class="color_h1">Атаки на веб-приложения</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="cybersecurity_network_attacks.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="cybersecurity_wifi_attacks.php">Next &#10095;</a>
    </div>
    <hr>

    <p class="intro"><strong>Веб-приложения</strong> сегодня повсюду, и они используются для управления практически всем, что вы можете себе представить. В этой главе мы рассмотрим <strong>атаки и безопасность веб-приложений</strong>.</p>
    <hr>

    <h2>IDOR (&quot;Insecure Direct Object Reference&quot; - &quot;Небезопасная прямая ссылка на объект&quot;)</h2>
    <p>IDOR уязвимости возникают, когда разработчики не реализовали требования авторизации для доступа к ресурсам.</p>
    <p><img src="../svg/img_idor.svg" alt="IDOR" style="width:100%;max-width:1280px"></p>
    <p>Ева, просто изменив идентификатор, например параметр документа Rest, может получить доступ к документам Алисы.</p>
    <p>Это происходит, когда веб-приложение не обеспечивает авторизацию между объектами, позволяя злоумышленникам перечислять значения и проверять доступ к другим точкам данных.</p>
    <p>Например, у нас может быть следующий псевдокод, не показывающий никаких признаков авторизации:</p>
    <div class="w3-example">
        <div class="w3-code notranslate">$id = getInputFromUser();<br>
            $doc = getDocument($id);<br>
            return $doc;
        </div></div>
    <p>Приведенный выше код запрашивает ввод от пользователя, не выполняет проверку или дезинфекцию, затем выполняет поиск напрямую с помощью функции getDocument и возвращает рассматриваемый документ.</p>
    <p>Лучшей реализацией будет проверка привилегий:</p>
    <div class="w3-example">
        <div class="w3-code notranslate">$id = getInputFromUser();<br>
            $user = findUsername();<br>
            $doc = "";<br>
            if (hasAccessToDocument($user, $id)) {<br>
            &nbsp;&nbsp;$doc = getDocument($id);<br>
            } else {<br>
            &nbsp;&nbsp;$doc = "Не авторизован для этого документа";<br>
            }<br>
            return $doc;<br>
        </div></div>
    <p>Подобные уязвимости легко найти, поскольку вы можете просто изменить простое число и посмотреть, получите ли вы доступ к чужим данным. Проверка того, авторизован ли пользователь в первую очередь, предотвращает эту уязвимость.</p>
    <div class="w3-panel w3-note"><b>Примечание</b>: Псевдокод просто означает код, который похож на реальный код, но на самом деле может не работать. Он используется для создания примера реального кода.</div>
    <hr>

    <h2>Избегайте &quot;Волшебных чисел&quot;</h2>
    <p>Приложение хочет избежать использования последовательностей чисел при обращении к данным. В примере IDOR документы имели идентификаторы от 1000 до 1002. Иногда эти числа называют &quot;волшебными (магическими) числами&quot;, поскольку они напрямую указывают на ресурс на сервере, например, через базу данных, и все значения могут быть легко перечислены. Например, злоумышленник может проверить все идентификаторы документов от 0 до 10000 и записать любые результаты, обеспечивающие доступ к данным.</p>
    <p>Хотя авторизация должна быть правильно реализована, также полезно использовать GUID (&quot;Globally Unique Identifier&quot; - &quot;Глобальный уникальный идентификатор&quot;) или UUID (&quot;Universally Unique Identifier&quot; - &quot;Универсальный уникальный идентификатор&quot;) при обращении к данным. Эти идентификаторы разработаны так, чтобы быть глобально уникальными и их невозможно перечислить из-за встроенной энтропии генерации чисел.</p>
    <p>Вот как может выглядеть GUID:</p>
    <ul>
        <li>3377d5a6-236e-4d68-be9c-e91b22afd216</li>
    </ul>

    <div class="w3-note w3-panel"><b>Примечание:</b> Если вы посмотрите на математику, стоящую за угадыванием числа, указанного выше, мы быстро увидим, что это нелегко пересчитать. Перечисление - это метод, который можно использовать для просмотра всех возможных вариантов значения, GUID или UUID предотвращают это.</div>
    <hr>

    <h2>SQL-инъекция</h2>
    <p>Многие веб-приложения подключены к базе данных. База данных содержит всю информацию, которую веб-приложение желает хранить и использовать. </p>
    <p>SQL-инъекция - это метод, позволяющий злоумышленникам манипулировать языком SQL (&quot;Structured Query Language&quot; - &quot;Язык структурированных запросов&quot;), который использует разработчик веб-приложения. Обычно это происходит из-за отсутствия очистки данных. SQL регулярно используется разработчиками для доступа к ресурсам базы данных.</p>
    <p>
        <img src="https://mycourses.w3schools.com/courses/195/files/12663/preview" alt="sqlinjection.svg" data-api-endpoint="https://mycourses.w3schools.com/api/v1/courses/195/files/12663" data-api-returntype="File" />
    </p>
    <p><img src="../svg/img_peer-to-peer.svg" alt="Peer-to-Peer" style="width:100%;max-width:1280px"></p>
    <p>В запросе Евы на рисунке выше мы видим, что она вводит значение: 1000' OR '1'='1</p>
    <p>Это приводит к тому, что результирующий SQL-запрос возвращает все строки таблицы, поскольку база данных оценивает этот оператор как всегда истинный. Подумайте об этом: база данных получает запрос, в котором значение может быть либо 1000, либо 1 равно 1; он будет возвращать значение каждый раз! Существует множество различных функций и операций SQL, которые мы можем использовать для управления синтаксисом, и этот пример - лишь один из очень многих.</p>
    <p>Ниже приведен пример псевдокода, который содержит уязвимость SQL-инъекции.</p>
    <div class="w3-example">
        <div class="w3-code notranslate">
            $username =  getUserName();<br>
            $pw = getPassword();<br>
            $user = mysql_query("SELECT * FROM userTable WHERE username = $username AND password =  $pw");<br>
            if ($user) {<br>
            &nbsp;&nbsp;$loggedIn = True;<br>
            } else {<br>
            &nbsp;&nbsp;$loggedIn = False;<br>
            }
        </div>
    </div>
    <p>Мы видим, что нет никакой дезинфекции как для переменных имени пользователя, так и для переменных пароля; вместо этого они используются непосредственно в SQL, вызывая уязвимость. Код позволяет установить переменную $loggedIn, если запрос что-либо возвращает.</p>
    <p>Чтобы злоумышленник мог воспользоваться этим, он может просто создать URL-адрес целевого домена с атакой в нём следующим образом:</p>
    <div class="w3-example">
        <div class="w3-code notranslate">/login?username=admin&amp;password=password' OR '1'='1
        </div></div>
    <p>Переменная пароля содержит символы SQL, в результате чего результирующая строка SQL возвращает строку, даже если пароль нам неизвестен. Результирующий SQL-запрос будет:</p>
    <div class="w3-example">
        <div class="w3-code notranslate">SELECT * FROM userTable WHERE username = 'admin' AND password = 'password' OR '1'='1'</div>
    </div>
    <p>Параметризованные запросы - это рекомендуемое решение для защиты от SQL-инъекций. В параметризованном запросе разработчики тщательно следят за тем, чтобы каждый ввод запроса был определен как конкретное значение и тип. Вот пример из приведенного выше кода, который считается безопасной реализацией:</p>
    <div class="w3-example">
        <div class="w3-code notranslate">
            $username = getUserName();<br>
            $pw = getPassword();<br>
            $parameterizedQuery = prepare_query("SELECT * FROM userTable where username = ? and password = ?");<br>
            $parameterizedQuery.setString(1, $username)<br>
            $parameterizedQuery.setString(2, $password)<br>
            $user = parameterizedQuery.execute();<br>
            if ($user) {<br>
            &nbsp; &nbsp; $loggedIn = True;<br>
            } else {<br>
            &nbsp; &nbsp; $loggedIn = False;<br>
            }</div></div>
    <p>В приведенном выше примере разработчик тщательно сказал, что параметр 1 должен быть строкой и содержать имя пользователя и пароль во втором параметре.</p>
    <div class="w3-panel w3-note"><b>Примечание:</b> SQL-инъекция стала возможной, потому что разработчики тщательно не очищают ввод от пользователей и, таким образом, позволяют злоумышленнику обмануть приложение и базу данных, чтобы запустить неавторизованный код SQL.</div>
    <hr>

    <h2>XSS (&quot;Cross-Site Scripting&quot; - &quot;Межсайтовый скриптинг&quot;)</h2>
    <p>XSS использует сервер для атаки посетителей сервера. Атака нацелена не на сам сервер, а на пользователей.</p>
    <p>Сервер просто используется для отражения значений злоумышленников, обычно JavaScript, против посетителей, которые затем запускают данные злоумышленников в своём собственном браузере. Злоумышленник должен создать ввод, который сервер не очищает и не дезинфицирует, таким образом, когда посетитель кликает ссылку, содержащую значения злоумышленников, или посещает ресурс на веб-странице, который злоумышленник использовал в своей атаке, пользователь запускает код, который - предоставил злоумышленник.</p>
    <p>Вот графический пример того, как Ева отправляет Алисе ссылку, содержащую XSS-атаку:</p>
    <p><img src="../svg/img_xss.svg" alt="XSS" style="width:100%;max-width:1280px"></p>
    <p>Эта атака называется отраженным XSS и предполагает, что Ева обнаруживает уязвимость, затем отправляет ссылку, содержащую атаку, ничего не подозревающему пользователю и заставляет его кликнуть ссылку. Ссылка содержит атаку и заставляет веб-сервер возвращать атаку жертве, кликнув ссылку.</p>
    <p>Код, стоящий за этим, может быть чем-то простым, как этот пример псевдокода:</p>
    <div class="w3-example">
        <div class="w3-code notranslate">
            $nickname = etNickName();<br>
            echo "Привет $nickname, приятно познакомиться!";
        </div></div>
    <p>Другой вид XSS-атаки называется хранимой XSS-атакой. В атаках Stored XSS злоумышленник может сохранять контент на веб-странице, который отражается каждый раз, когда кто-то посещает веб-сайт. Необязательно, чтобы кто-то кликнул ссылку.</p>
    <p>На этом рисунке показано, как Ева может сохранять вредоносный код JavaScript для выполнения в любом браузере при посещении ресурса:</p>
    <p><img src="../svg/img_stored-xss.svg" alt="Сохранённый XSS" style="width:100%;max-width:1280px"></p>
    <p>XSS-атаки могут многое сделать, например:</p>
    <ul>
        <li>Кража файлов cookie, которые могут использоваться для аутентификации;</li>
        <li>Дезинфекция веб-сайта, представление содержимого, которое веб-сервер не намеревался;</li>
        <li>Фишинговые пользователи, оставляющие учётные данные в поддельных формах входа.</li>
    </ul>
    <p>Для защиты от XSS есть несколько рекомендаций:</p>
    <ul>
        <li>Разрешить веб-серверу возвращать заголовки CSP (&quot;Content Security Policy&quot; - &quot;Политика безопасности контента&quot;), которые строго решают, где и как выполняется JavaScript.</li>
        <li>Безопасно кодируйте выходные данные, которые веб-сервер возвращает пользователям, эффективно превращая символы HTML в закодированные безопасные символы.</li>
    </ul>
    <hr>

    <h2>HTML Кодирование</h2>
    <p>HTML кодирование позволяет веб-приложению безопасно возвращать обычно небезопасные символы. Например, следующие специальные символы могут быть закодированы в их соответствующие аналоги:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Специальные символы</th>
            <th>HTML объект</th>
        </tr>
        <tr>
            <td>&lt;</td>
            <td>&lt;</td>
        </tr>
        <tr>
            <td>&gt;</td>
            <td>&gt;</td>
        </tr>
        <tr>
            <td>&quot;</td>
            <td>&quot;</td>
        </tr>
        <tr>
            <td>&amp;</td>
            <td>&amp;</td>
        </tr>
        <tr>
            <td>&rsquo;</td>
            <td>&rsquo;</td>
        </tr>
    </table>
    <p>Это даёт результат, который можно безопасно отображать. Затем мы можем использовать JavaScript на стороне клиента, чтобы безопасно превращать объекты HTML в значения.</p>
    <hr>

    <h2>CSP (&quot;Content Security Policy&quot; - &quot;Политика безопасности контента&quot;)</h2>
    <p>Веб-сервер может контролировать, какой JavaScript разрешен для запуска на веб-сайте. Это не устраняет уязвимости, но добавляет глубокую защиту на случай неизвестной уязвимости.</p>
    <p>Обычный и строгий CSP - предоставить пользователям веб-приложения список всех принятых исходных файлов JavaScript.</p>
    <p>Кроме того, для CSP типично предотвращать выполнение встроенного JavaScript.</p>
    <p>Чтобы упростить реализацию и обнаружение продолжающихся атак, CSP позволяет клиентам сообщать о нарушениях CSP на URL-адрес, предоставленный сервером.</p>
    <hr>

    <h2>Сканирование веб-приложений</h2>
    <p>Существует множество сканеров веб-приложений. Это позволяет сканировать приложения на наличие уязвимостей, таких как SQL-инъекция и XSS. В отличие от сканера сетевых уязвимостей, сканер веб-приложений обычно строится на эвристике, а не на сигнатурах и списках известных уязвимостей.</p>
    <p>Сканеры веб-приложений полезны, особенно когда они встроены в процессы разработки, такие как CI (&quot;Continuous Integration&quot; - &quot;Непрерывная интеграция&quot;) и CD (&quot;Continuous Delivery&quot; - &quot;Непрерывная доставка&quot;).</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="cybersecurity_network_attacks.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="cybersecurity_wifi_attacks.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>