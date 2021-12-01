<?php include '../include/head.php'; ?>

<title>JavaScript Дебагинг (отладка). <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Отладка (дебагинг) кода. Метод console.log(). Установка точек останова. Ключевое слово debugger. Основные инструменты отладки браузеров. Как запустить консоль в браузере? <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Отладка (дебагинг)</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_json.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_conventions.php">Next &#10095;</a>
    </div>
    <hr>

    <div class="w3-note w3-panel"><p><strong>Ошибки (баги)</strong> могут (будут) возникать каждый раз, когда вы пишете новый компьютерный код.</p></div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Отладка (дебагинг) кода</h2>
    <p>Программный код может содержать синтаксические или логические ошибки.</p>
    <p>Многие из этих ошибок сложно диагностировать.</p>
    <p>Часто, когда программный код содержит ошибки, ничего не происходит. Сообщения об ошибках отсутствуют, и вы не получите указаний, где искать ошибки.</p>
    <p>Поиск (и исправление) ошибок в программном коде называется <strong>отладкой (или дебагингом) кода</strong>.</p>
    <hr>
    <h2>Отладчики JavaScript</h2>
    <p>Отладка - непростая задача. Но, к счастью, все современные браузеры имеют встроенный отладчик JavaScript.</p>
    <p>Встроенные отладчики можно включать и выключать, заставляя пользователя сообщать об ошибках.</p>
    <p>С помощью отладчика вы также можете устанавливать точки останова (места, где выполнение кода может быть остановлено) и проверять переменные во время выполнения кода.</p>
    <p>Обычно так. В противном случае следуя инструкциям внизу страницы, вы активируете отладку в своем браузере с помощью клавиши F12 и выбираете &quot;Консоль&quot; в меню отладчика.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Метод console.log()</h2>
    <p>Если ваш браузер поддерживает отладку, вы можете использовать <code class="w3-codespan">console.log()</code> для отображения значений JavaScript в окне отладчика:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;body&gt;<br><br>&lt;h1&gt;Моя первая веб-страница&lt;/h1&gt;<br><br>
            &lt;script&gt;<br>a = 5;<br>b = 6;<br>c = a + b;<br>console.log(c);<br>&lt;/script&gt;<br>
            <br>&lt;/body&gt;<br>&lt;/html&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_console.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-note w3-panel">
        <p><b>Совет:</b> Дополнительные сведения о методе <code class="w3-codespan">console.log()</code> смотрите в <a href="../jsref/met_console_log.php">Справочнике по JavaScript консоле</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <hr>

    <h2>Установка точек останова</h2>
    <p>В окне отладчика вы можете установить точки останова в JavaScript коде.</p>
    <p>В каждой точке останова JavaScript прекращает выполнение и позволяет вам проверять значения JavaScript.</p>
    <p>После изучения значений вы можете возобновить выполнение кода (обычно с помощью кнопки воспроизведения).</p>
    <hr>
    <?php include '../include/addown_content.php'; ?>

    <h2>Ключевое слово debugger</h2>
    <p>Ключевое слово <code class="w3-codespan">debugger</code> останавливает выполнение JavaScript и вызывает (если доступно) функцию отладки.</p>
    <p>Это та же функция, что и установка точки останова в отладчике.</p>
    <p>Если отладка недоступна, инструкция отладчика не действует.</p>
    <p>При включенном отладчике этот код перестанет выполняться до того, как выполнит третью строку.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 15 * 5;<br>debugger;<br>document.getElementById(&quot;demo&quot;).innerHTML = x;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_debugger.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Основные инструменты отладки браузеров</h2>
    <p>Обычно вы активируете отладку в своём браузере с помощью F12 и выбираете &quot;Console&quot; в меню отладчика.</p>
    <p>В противном случае выполните следующие действия:</p>
    <h2>Chrome</h2>
    <ul>
        <li>Открыть браузер.</li>
        <li>В меню выберите &quot;Дополнительные инструменты&quot;.</li>
        <li>В инструментах выберите &quot;Инструменты разработчика&quot;.</li>
        <li>Затем выберите Консоль.</li>
    </ul>
    <h2>Firefox</h2>
    <ul>
        <li>Открыть браузер.</li>
        <li>В меню выберите &quot;Инструменты веб-разработчика&quot;.</li>
        <li>Затем выберите &quot;Консоль&quot;.</li>
    </ul>
    <h2>Edge</h2>
    <ul>
        <li>Открыть браузер.</li>
        <li>В меню выберите &quot;Инструменты разработчика&quot;.</li>
        <li>Затем выберите &quot;Консоль&quot;.</li>
    </ul>
    <h2>Opera</h2>
    <ul>
        <li>Открыть браузер.</li>
        <li>В меню выберите &quot;Разработка&quot;.</li>
        <li>Из &quot;Разработка&quot; выберите &quot;Инструменты разработчика&quot;.<br></li>
        <li>Затем выберите &quot;Консоль&quot;.</li>
    </ul>
    <h2>Safari</h2>
    <ul>
        <li>Перейдите в Safari, Настройки, Дополнительно в главном меню..</li>
        <li>Установите флажок &quot;Включить показывать меню разработки в строке меню&quot;.</li>
        <li>При появлении новой опции &quot;Develop&quot; появляется в меню:<br>Выберите &quot;Show Error Console&quot;.</li>
    </ul>
    <hr>
    <h2>А вы знаете?</h2>
    <div class="w3-panel w3-note">
        <p><strong>Отладка - это процесс тестирования, поиска и устранения багов (ошибок) в компьютерных программах</strong>.<br>Первой известной компьютерной ошибкой был настоящий жук (<i>bug - с анг. насекомое</i>), застрявший в электронике. Именно поэтому ошибки в программах стали называть багами (жуками).</p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_json.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_conventions.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>