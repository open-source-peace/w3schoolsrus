<?php include '../include/head.php'; ?>

<title>AJAX Учебник. Введение. <?php include '../include/title.php'; ?></title>
<meta name='description' content='AJAX Учебник. Введение. Что такое AJAX? Как работает AJAX? Функция loadDoc(). AJAX позволяет обновлять веб-страницы асинхронно, обмениваясь данными с веб-сервером. Основы языка JavaScript. <?php include '../include/description.php'; ?>'>
<script>
        function loadDoc() {
            if (window.XMLHttpRequest) {
                // код для IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // код для IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "../jstryit/ajax_info.txt", true);
            xmlhttp.send();
        }
    </script>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_ajax.php'; ?>

<article>
    <h1>AJAX. <span class="color_h1">Введение</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_cookies.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_ajax_http.php">Next &#10095;</a>
    </div>

    <div class="w3-panel w3-info intro">
        <p><strong>AJAX</strong> - это мечта разработчика, потому что вы можете:</p>
        <ul>
            <li>Считывать данные с веб-сервера - после загрузки страницы</li>
            <li>Обновить веб-страницу без перезагрузки страницы</li>
            <li>Отправка данных на веб-сервер - в фоновом режиме</li>
        </ul>
    </div>

    <div class="w3-example">
        <h3>AJAX Пример</h3>
        <div class="w3-padding w3-white notranslate">
            <div id="demo">
                <h2>Позвольте AJAX изменить этот текст</h2>
                <button type="button" onclick="loadDoc()">Изменить содержимое</button>
            </div>
        </div>
        <p><a target="_blank" href="../jstryit/tryjs_ajax_first.html" class="w3-btn">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>

    <h2>AJAX Объяснение примера</h2>
    <div class="w3-example">
        <h3>HTML Страница</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>
            &lt;body&gt;<br><br>
            &lt;div id=&quot;demo&quot;&gt;<br>&nbsp; &lt;h2&gt;Пусть AJAX изменит этот текст&lt;/h2&gt;<br>&nbsp;
            &lt;button type=&quot;button&quot; onclick=&quot;loadDoc()&quot;&gt;Изменить содержимое&lt;/button&gt;<br>
            &lt;/div&gt;<br><br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div>
    </div>

    <p>HTML страница содержит раздел &lt;div&gt; и &lt;button&gt;.</p>
    <p>Раздел &lt;div&gt; используется для отображения информации с сервера.</p>
    <p>Кнопка &lt;button&gt; вызывает функцию (если по ней кликнуть).</p>
    <p>Функция запрашивает данные с веб-сервера и отображает их:</p>

    <div class="w3-example">
        <h3>Функция loadDoc()</h3>
        <div class="w3-code notranslate jsHigh">
            function loadDoc() {<br>
            &nbsp; var xhttp = new   XMLHttpRequest();<br>
            &nbsp; xhttp.onreadystatechange = function() {<br>&nbsp;&nbsp;&nbsp;
            if (this.readyState == 4 &amp;&amp; this.status == 200) {<br>&nbsp;&nbsp;&nbsp;&nbsp;
            document.getElementById(&quot;demo&quot;).innerHTML = this.responseText;<br>&nbsp;&nbsp;&nbsp;
            }<br>&nbsp; };<br>&nbsp; xhttp.open(&quot;GET&quot;, &quot;ajax_info.txt&quot;, true);<br>&nbsp; xhttp.send();<br>}
        </div>
    </div>
    <hr>

    <h2>Что такое AJAX?</h2>
    <p>AJAX = <strong>A</strong>synchronous <strong>J</strong>avaScript <strong>A</strong>nd
        <strong>X</strong>ML.</p>
    <p>AJAX - это не язык программирования.</p>
    <p>AJAX просто использует комбинацию:</p>
    <ul>
        <li>Встроенный в браузер объект <code class="w3-codespan">XMLHttpRequest</code> (для запроса данных с веб-сервера)</li>
        <li>JavaScript и HTML DOM (для отображения или использования данных)</li>
    </ul>

    <div class="w3-panel w3-note"><p>Название AJAX вводит в заблуждение. Приложения AJAX могут использовать XML для передачи данных, но не менее распространено переносить данные в виде обычного текста или текста JSON.</p></div>

    <p><strong>AJAX</strong> позволяет обновлять веб-страницы асинхронно, негласно обмениваясь данными с веб-сервером. Это означает, что можно обновлять части веб-страницы без перезагрузки всей страницы.</p>
    <hr>

    <h2>Как работает AJAX</h2>
    <p><img class="w3-image" alt="Как работает AJAX" src="../images/pic_ajax.gif"></p>
    <ul class="w3-ul w3-border w3-section">
        <li>1. На веб-странице происходит событие (страница загружается, нажимается кнопка)</li>
        <li>2. Объект XMLHttpRequest создаёт JavaScript</li>
        <li>3. Объект XMLHttpRequest отправляет запрос на веб-сервер</li>
        <li>4. Сервер обрабатывает запрос</li>
        <li>5. Сервер отправляет ответ на веб-страницу</li>
        <li>6. Ответ читается JavaScript</li>
        <li>7. Правильное действие (например, обновление страницы) выполняется JavaScript</li>
    </ul>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_cookies.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_ajax_http.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>