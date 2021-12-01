<?php include '../include/head.php'; ?>

<title>JavaScript Use Strict. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Use Strict. Директива (указание) "use strict". Объявление строгого режима. Синтаксис. Что не разрешено в строгом режиме? <?php include '../include/description.php'; ?>'>
<link rel="stylesheet" href="../styles/browserref.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Use Strict</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_hoisting.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_this.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><code class="w3-codespan">&quot;use strict&quot;;</code> определяет, что JavaScript код должен выполняться в <strong>&quot;строгом режиме&quot;</strong>.</p>
    <hr>

    <h2>Директива (указание) &quot;use strict&quot;</h2>
    <p>Директива <code class="w3-codespan">&quot;use strict&quot;</code> была новой в ECMAScript версии 5.</p>
    <p>Это не инструкция, а буквальное выражение, игнорируемое более ранними версиями JavaScript.</p>
    <p>Цель <code class="w3-codespan">&quot;use strict&quot;</code> - указать, что код должен выполняться в &quot;строгом режиме&quot;.</p>
    <p>В строгом режиме нельзя, например, использовать необъявленные переменные.</p>
    <p>Все современные браузеры поддерживают "use strict", кроме Internet Explorer 9 и ниже:</p>
    <table class="browserref notranslate">
        <tr>
            <th style="width:20%;font-size:16px;text-align:left;">Директива</th>
            <th style="width:16%;" class="bsChrome" title="Chrome"></th>
            <th style="width:16%;" class="bsEdge"  title="Internet Explorer / Edge"></th>
            <th style="width:16%;" class="bsFirefox" title="Firefox"></th>
            <th style="width:16%;" class="bsSafari" title="Safari"></th>
            <th style="width:16%;" class="bsOpera" title="Opera"></th>
        </tr>
        <tr>
            <td style="text-align:left;">"use strict"</td>
            <td>13.0</td>
            <td>10.0</td>
            <td>4.0</td>
            <td>6.0</td>
            <td>12.1</td>
        </tr>
    </table>
    <p>Цифры в таблице указывают первую версию браузера, полностью поддерживающую директиву.</p>
    <div class="w3-panel w3-note">
        <p>Вы можете использовать строгий режим во всех своих программах. Это помогает вам писать более чистый код, например предотвращает использование необъявленных переменных.</p>
        <p><code class="w3-codespan">"use strict"</code> это просто строка, поэтому IE 9 не выдаст ошибку, даже если он её не понимает.</p>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h2>Объявление строгого режима</h2>
    <p>Строгий режим объявляется добавлением <span class="w3-codespan">&quot;use strict&quot;;</span> в начало скрипта или функции.</p>
    <p>Объявленный в начале скрипта, он имеет глобальную область видимости (весь код в скрипте будет выполняться в строгом режиме):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            "use strict";<br>x = 3.14;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Это вызовет ошибку, потому что x не объявлен<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_strict_variable.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            "use strict";<br>myFunction();<br><br>
            function myFunction() {<br>
            &nbsp;&nbsp;y = 3.14;&nbsp;&nbsp; // Это также вызовет ошибку, потому что y не объявлен<br>}</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_strict_global.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Объявленный внутри функции, он имеет локальную область видимости (только код внутри функции находится в строгом режиме):</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            x = 3.14;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Это не вызовет ошибки
            <br>myFunction();<br><br>
            function myFunction() {<br>
            &nbsp;&nbsp;"use strict";<br>
            &nbsp; y = 3.14;&nbsp;&nbsp; // Это вызовет ошибку<br>}<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_strict_local.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Синтаксис &quot;use strict&quot;;</h2>
    <p>Синтаксис для объявления строгого режима был разработан для совместимости со старыми версиями JavaScript.</p>
    <p>Компиляция числового литерала (4 + 5;) или строкового литерала (&quot;John Doe&quot;;) в программе JavaScript не имеет побочных эффектов. Он просто компилируется в несуществующую переменную и умирает.</p>
    <p>Таким образом, <code class="w3-codespan">&quot;use strict&quot;;</code> имеет значение только для новых компиляторов, которые &quot;понимают&quot; смысл этого.</p>
    <hr>

    <h2>Почему именно строгий режим?</h2>
    <p>Строгий режим упрощает запись &quot;защищенного&quot; JavaScript.</p>
    <p>Строгий режим заменяет ранее принятый &quot;плохой синтакис&quot; на реальные ошибки.</p>
    <p>Например, в обычном JavaScript неправильный ввод имени переменной создаёт новую глобальную переменную. В строгом режиме это вызовет ошибку, что сделает невозможным случайное создание глобальной переменной.</p>
    <p>В обычном JavaScript разработчик не будет получать никаких сообщений об ошибках, присваивающих значения неперезаписываемым свойствам.</p>
    <p>В строгом режиме любое присвоение не доступному для записи свойству, свойству только для получения, несуществующему свойству, несуществующей переменной или несуществующему объекту вызовет ошибку.</p>
    <?php include '../include/addown_content.php'; ?>

    <h2>Не разрешено в строгом режиме</h2>
    <p>Использование переменной без её объявления не допускается:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            &quot;use strict&quot;;<br>
            x = 3.14;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Это вызовет ошибку</div>
        <p><a class="w3-btn" href="../jstryit/tryjs_strict_variable.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <div class="w3-panel w3-note"><p>Объекты тоже переменные.</p></div>

    <p>Использование объекта без его объявления не допускается:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            &quot;use strict&quot;;<br>
            x = {p1:10, p2:20};&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Это вызовет ошибку</div>
        <p>
            <a class="w3-btn" href="../jstryit/tryjs_strict_object.html" target="_blank">Попробуйте сами &raquo;</a>
        </p>
    </div>

    <p>Удаление переменной (или объекта) запрещено.</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            &quot;use strict&quot;;<br>let x = 3.14;<br>
            delete x;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Это вызовет ошибку
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_strict_delete.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <?php include '../include/adinfeed.php'; ?>
    <p>Удаление функции запрещено.</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            &quot;use strict&quot;;<br>function x(p1, p2) {}; <br>delete x;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            // Это вызовет ошибку&nbsp;
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_strict_delete_function.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <p>Дублирование имени параметра запрещено:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            &quot;use strict&quot;;<br>function x(p1, p1) {};&nbsp;&nbsp; // Это вызовет ошибку
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_strict_duplicate.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <p>Восьмеричные числовые литералы не допускаются:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            &quot;use strict&quot;;<br>let x = 010;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Это вызовет ошибку
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_strict_octal.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <p>Восьмеричные escape-символы не допускаются:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            &quot;use strict&quot;;<br>
            let x = &quot;\010&quot;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Это вызовет ошибку
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_strict_escape.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <p>Запись в свойство, доступное только для чтения, не разрешена:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            &quot;use strict&quot;;<br>
            const obj = {};<br>
            Object.defineProperty(obj, &quot;x&quot;, {value:0, writable:false});<br><br>
            obj.x = 3.14;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; // Это вызовет ошибку
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_strict_readonly.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <?php include '../include/adinfeed.php'; ?>
    <p>Запись в свойство только для получения не допускается:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            &quot;use strict&quot;;<br>
            const obj = {get x()
            {return 0} };<br><br>obj.x = 3.14;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Это вызовет ошибку
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_strict_getonly.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <p>Удаление свойства, которое невозможно удалить, запрещено:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            &quot;use strict&quot;;<br>delete Object.prototype; // Это вызовет ошибку
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_strict_deleteprop.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <p>Слово <code class="w3-codespan">eval</code> нельзя использовать в качестве переменной:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            &quot;use strict&quot;;<br>let eval = 3.14;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Это вызовет ошибку
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_strict_eval.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <p>Слово <code class="w3-codespan">arguments</code> нельзя использовать в качестве переменной:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            &quot;use strict&quot;;<br>let arguments = 3.14;&nbsp;&nbsp;&nbsp; // Это вызовет ошибку
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_strict_arguments.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <p>Оператор <code class="w3-codespan">with</code> не допускается:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            &quot;use strict&quot;;<br>with (Math){x = cos(2)}; // Это вызовет ошибку 
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_strict_width.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <p>По соображениям безопасности <code class="w3-codespan">eval()</code> не разрешено создавать переменные в той области, из которой он был вызван:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            &quot;use strict&quot;;<br>eval (&quot;let x = 2&quot;);<br>
            alert (x);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;// Это вызовет ошибку
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_strict_eval2.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <p>Ключевое слово <code class="w3-codespan">this</code> в функциях ведет себя иначе в строгом режиме.</p>
    <p>Ключевое слово <code class="w3-codespan">this</code> относится к объекту, который вызвал функцию.</p>
    <p>Если объект не указан, функции в строгом режиме вернут <code class="w3-codespan">undefined</code>, а функции в нормальном режиме вернут глобальный объект (окно):</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            &quot;use strict&quot;;<br>function myFunction() {<br>&nbsp;
            alert(this); // выведет предупреждение &quot;undefined&quot;<br>}<br>myFunction(); </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_strict_this.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <h2>На будущее!</h2>
    <p>Ключевые слова, зарезервированные для будущих версий JavaScript, НЕ могут использоваться в качестве имён переменных в строгом режиме.</p>
    <p>А именно:</p>
    <ul>
        <li>implements</li>
        <li>interface</li>
        <li>let</li>
        <li>package</li>
        <li>private</li>
        <li>protected</li>
        <li>public</li>
        <li>static</li>
        <li>yield</li>
    </ul>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            &quot;use strict&quot;;<br>let public = 1500;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Это вызовет ошибку 
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_strict_names.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <div class="w3-panel w3-warning">
        <h2>Обратите внимание!</h2>
        <p>Директива &quot;use strict&quot; распознаётся только в <b>начале</b> скрипта или функции.</p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_strict.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_this.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>