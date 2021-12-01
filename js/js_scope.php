<?php include '../include/head.php'; ?>

<title>JavaScript Область действия. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Область действия определяет доступность (видимость) переменных. Область действия блока, функции, глобальная.Строгий режим. Время жизни переменных. Аргументы функции. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Область действия</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_errors.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_hoisting.php">Next &#10095;</a>
    </div>
    <div class="w3-info">
        <p class="intro"><strong>Область действия</strong> (или <strong>область видимости</strong>) определяет доступность (видимость) переменных.</p>
        <p>JavaScript имеет 3 типа области действия:</p>
        <ul>
            <li>Область действия блока</li>
            <li>Область действия функции</li>
            <li>Область действия глобальная</li>
        </ul>
    </div>

    <h2>Область действия блока</h2>
    <p>До ES6 (2015) в JavaScript были только <b>Глобальная область действия</b> и <b>Область действия функции</b>.</p>
    <p>ES6 представил два важных новых ключевых слова JavaScript: <code class="w3-codespan">let</code> и <code class="w3-codespan">const</code>.</p>
    <p>Эти два ключевых слова обеспечивают <strong>область действия блока</strong> в JavaScript.</p>
    <p>К переменным, объявленным внутри блока { }, нельзя получить доступ извне блока:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            { <br>
            &nbsp;&nbsp;let x = 2;<br>
            }<br>
            // x НЕ может быть использован здесь</div>
    </div>
    <?php include '../include/adinfeed.php'; ?>
    <p>Переменные, объявленные с помощью ключевого слова <code class="w3-codespan">var</code> НЕ могут иметь область действия блока.</p>
    <p>К переменным, объявленным внутри блока { }, можно получить доступ извне блока.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            { <br>
            &nbsp;&nbsp;var x = 2; <br>
            }<br>
            // x МОЖНО использовать здесь</div>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Локальная область действия</h2>
    <p>Переменные, объявленные в функции JavaScript, становятся <strong>ЛОКАЛЬНЫМИ</strong> для функции.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // код здесь НЕ может использовать carName<br><br>function myFunction() {<br>
            &nbsp;&nbsp;let carName = &quot;Volvo&quot;;<br>&nbsp; // код здесь МОЖЕТ использовать carName<br>}<br>
            <br>// код здесь НЕ может использовать carName
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_scope_local.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-note">
        <p>Локальные переменные имеют <strong>Область действия функции</strong>:</p>
        <p>Доступ к ним можно получить только из функции.</p>
    </div>

    <p>Поскольку локальные переменные распознаются только внутри своих функций, переменные с одинаковыми именами могут использоваться в разных функциях.</p>
    <p>Локальные переменные создаются при запуске функции и удаляются, когда функция завершается.</p>
    <?php include '../include/addown_content.php'; ?>

    <h2>Область действия функции</h2>
    <p>JavaScript имеет область действия функции: каждая функция создает новую область действия.</p>
    <p>Переменные, определенные внутри функции, недоступны (видимы) вне функции.</p>
    <p>Переменные, объявленные с помощью <code class="w3-codespan">var</code>, <code class="w3-codespan">let</code> и <code class="w3-codespan">const</code> очень похожи, когда объявлены внутри функции.</p>
    <p>Они все имеют <strong>Область действия функции</strong>:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            function myFunction() {<br>
            &nbsp; var carName = "Volvo";&nbsp;&nbsp; // Область действия функции<br>
            }
        </div>
    </div>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            function myFunction() {<br>
            &nbsp; let carName = "Volvo";&nbsp;&nbsp; // Область действия функции<br>
            }
        </div>
    </div>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            function myFunction() {<br>
            &nbsp; const carName = "Volvo";&nbsp;&nbsp; // Область действия функции<br>
            }
        </div>
    </div>

    <?php include '../include/adinfeed.php'; ?>

    <h2>Глобальные JavaScript переменные</h2>
    <p>Переменная, объявленная вне функции, становится <strong>ГЛОБАЛЬНОЙ</strong>.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let carName = &quot;Volvo&quot;;<br>
            // код здесь может использовать carName<br><br>
            function myFunction() {<br>
            // код здесь также может использовать carName <br>}
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_scope_global.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-note">
        <p>Глобальная переменная имеет <strong>Глобальную область действия</strong>:</p>
        <p>Все скрипты и функции на веб-странице могут получить к ней доступ.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Глобальная область действия</h2>
    <p>Переменные, объявленные <strong>Глобально</strong> (вне какой-либо функции), имеют <strong>Глобальную область действия</strong>.</p>
    <p><strong>Доступ к глобальным переменным</strong> можно получить из любого места в программе JavaScript.</p>
    <p>Переменные, объявленные с помощью <code class="w3-codespan">var</code>, <code class="w3-codespan">let</code> и <code class="w3-codespan">const</code> очень похожи, когда объявлены вне блока.</p>
    <p>Они все имеют <strong>Глобальную область действия</strong>:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            var x = 2;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // Глобальная область действия</div>
    </div>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            let x = 2;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Глобальная область действия</div>
    </div>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            const x = 2;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Глобальная область действия</div>
    </div>
    <hr>

    <h2>JavaScript Переменные</h2>
    <p>В JavaScript объекты и функции также являются переменными.</p>
    <div class="w3-panel w3-note">
        <p>Область видимости определяет доступность переменных, объектов и функций из разных частей кода.</p>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Автоматически глобальная</h2>
    <p>Если вы присвоите значение переменной, которая не была объявлена, она автоматически станет <b>ГЛОБАЛЬНОЙ</b> переменной.</p>
    <p>Этот пример кода объявляет глобальную переменную <code class="w3-codespan">carName</code>, даже если значение назначается внутри функции.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            myFunction();<br><br>// код здесь может использовать carName
            <br><br>function myFunction() {<br>
            &nbsp; carName = &quot;Volvo&quot;;<br>}</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_local_global.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Строгий режим</h2>
    <p>Все современные браузеры поддерживают выполнение JavaScript в &quot;Строгом режиме&quot;.</p>
    <p>Вы узнаете больше о том, как использовать строгий режим в следующей главе этого учебника на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>

    <div class="w3-panel w3-warning">
        <p>В &quot;Строгом режиме&quot; необъявленные переменные не становятся глобальными автоматически.</p>
    </div>
    <hr>

    <h2>Глобальные переменные в HTML</h2>
    <p>В JavaScript глобальной областью действия является среда JavaScript.</p>
    <p>В HTML глобальной областью действия является объект окна.</p>
    <p>Глобальные переменные, определенные с помощью ключевого слова <code class="w3-codespan">var</code> принадлежат объекту окна:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var carName = &quot;Volvo&quot;;<br>// код здесь может использовать window.carName<br></div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_scope_window.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Глобальные переменные, определенные с помощью ключевого слова <code class="w3-codespan">let</code> не принадлежат объекту окна:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let carName = &quot;Volvo&quot;;<br>
            // код здесь не может использовать window.carName
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_let_global.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Предупреждение</h2>
    <div class="w3-panel w3-warning">
        <p>НЕ создавайте глобальные переменные, если вы не собираетесь.</p>
        <p>Ваши глобальные переменные (или функции) могут перезаписывать переменные (или функции) окна.<br>Любая функция, включая объект окна, может перезаписывать ваши глобальные переменные и функции.</p>
    </div>
    <hr>

    <h2>Время жизни переменных JavaScript</h2>
    <p>Время жизни переменной JavaScript начинается с момента её объявления.</p>
    <p>Функциональные (локальные) переменные удаляются по завершении функции.</p>
    <p>В веб-браузере глобальные переменные удаляются при закрытии окна (или вкладки) браузера.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Аргументы функции</h2>
    <p>Аргументы функции (параметры) работают как локальные переменные внутри функций.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_errors.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_hoisting.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>