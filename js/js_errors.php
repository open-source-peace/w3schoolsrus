<?php include '../include/head.php'; ?>

<title>JavaScript Ошибки. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Ошибки. Try и Catch. Операторы throw, finally. Проверка ввода. Объект Error (ошибка). Значения имени ошибки. Полный справочник. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Ошибки - Throw and Try to Catch (Брось и попробуй поймать)</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_regexp.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_scope.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Оператор <code class="w3-codespan">try</code></strong> позволяет проверить блок кода на наличие ошибок.</p>
    <p class="intro"><strong>Оператор <code class="w3-codespan">catch</code></strong> позволяет вам обрабатывать ошибку.</p>
    <p class="intro"><strong>Оператор <code class="w3-codespan">throw</code></strong> позволяет создавать собственные ошибки.</p>
    <p class="intro"><strong>Оператор <code class="w3-codespan">finally</code></strong> позволяет выполнять код после try и catch, независимо от результата.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Ошибки будут!</h2>
    <p>При выполнении кода JavaScript могут возникать разные ошибки.</p>
    <p>Ошибки могут быть ошибками кодирования, допущенными программистом, ошибками из-за неправильного ввода и другими непредвиденными ситуациями.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>В этом примере мы неправильно написали &quot;alert&quot; как &quot;adddlert&quot;, чтобы намеренно выдать ошибку:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;p id=&quot;demo&quot;&gt;&lt;/p&gt;<br><br>&lt;script&gt;<br>
            try {<br>&nbsp; adddlert(&quot;Welcome guest!&quot;);<br>}<br>catch(err) {<br>&nbsp;
            document.getElementById(&quot;demo&quot;).innerHTML = err.message;<br>}<br>&lt;/script&gt;</div>
        <a target="_blank" href="../jstryit/tryjs_try_catch.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p>JavaScript перехватывает <strong>adddlert</strong> как ошибку и выполняет код перехвата для её обработки.</p>
    </div>
    <hr>

    <h2>JavaScript try и catch</h2>
    <p>Оператор <code class="w3-codespan">try</code> позволяет определить блок кода, который будет проверяться на наличие ошибок во время его выполнения. .</p>
    <p>Оператор <code class="w3-codespan">catch</code> позволяет определить блок кода, который будет выполняться, если в блоке try возникает ошибка.</p>
    <p>JavaScript операторы <code class="w3-codespan">try</code> и <code class="w3-codespan">catch</code> идут в паре:</p>

    <div class="w3-example">
        <div class="w3-code notranslate">
            try {<br>
            &nbsp; <em>Блок кода, чтобы попробовать<br>
            </em>}<br>
            catch(<em>err</em>) {<br>
            &nbsp; <em>Блок кода для обработки ошибок<br>
            </em>}
        </div></div>
    <?php include '../include/addown_content.php'; ?>

    <h2>JavaScript Выдает ошибки</h2>
    <p>При возникновении ошибки JavaScript обычно останавливается и генерирует сообщение об ошибке.</p>
    <p>Технический термин для этого: JavaScript <strong>вызовет исключение (выдаст ошибку)</strong>.</p>
    <div class="w3-panel w3-note">
        <p>JavaScript фактически создаст <strong>объект ошибки</strong> с двумя свойствами:
            <strong>имя</strong> и <strong>сообщение</strong>.</p>
    </div>
    <hr>

    <h2>Оператор throw</h2>
    <p>Оператор <code class="w3-codespan">throw</code> позволяет вам создать настраиваемую ошибку.</p>
    <p>Технически вы можете <strong>вызвать исключение (выдать ошибку)</strong>.</p>

    <p>Исключением может быть JavaScript <code class="w3-codespan">String</code>, <code class="w3-codespan">Number</code>, <code class="w3-codespan">Boolean</code> или <code class="w3-codespan">Object</code>:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            throw &quot;Too big&quot;;&nbsp;&nbsp;&nbsp; // бросить текст<br>
            throw 500;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // бросить число</div>
    </div>
    <p>Если вы используете <code class="w3-codespan">throw</code> вместе с <code class="w3-codespan">try</code> и <code class="w3-codespan">catch</code>, вы можете контролировать выполнение программы и создавать собственные сообщения об ошибках.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Пример проверки ввода</h2>
    <p>В этом примере исследуется ввод. Если значение неверно, генерируется исключение (ошибка).</p>
    <p>Исключение (err) перехватывается оператором catch, и отображается настраиваемое сообщение об ошибке:</p>

    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;body&gt;<br><br>&lt;p&gt;Please input a number between 5 and 10:&lt;/p&gt;<br><br>&lt;input id=&quot;demo&quot; type=&quot;text&quot;&gt;<br>&lt;button type=&quot;button&quot;
            onclick=&quot;myFunction()&quot;&gt;Test Input&lt;/button&gt;<br>&lt;p id=&quot;p01&quot;&gt;&lt;/p&gt;<br><br>
            &lt;script&gt;<br>function myFunction() {<br>&nbsp;&nbsp;const message =
            document.getElementById(&quot;p01&quot;);<br>&nbsp;&nbsp;message.innerHTML = &quot;&quot;;<br>
            &nbsp;&nbsp;let x =
            document.getElementById(&quot;demo&quot;).value;<br>&nbsp;
            try { <br>&nbsp;&nbsp;&nbsp;&nbsp;if(x == &quot;&quot;) throw &quot;empty&quot;;<br>
            &nbsp;&nbsp;&nbsp;
            if(isNaN(x)) throw &quot;not a number&quot;;<br>&nbsp;&nbsp;&nbsp;
            x = Number(x);<br>&nbsp;&nbsp;&nbsp; if(x &lt; 5) throw
            &quot;too low&quot;;<br>&nbsp;&nbsp;&nbsp; if(x &gt; 10) throw &quot;too
            high&quot;;<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;catch(err) {<br>&nbsp;&nbsp;&nbsp; message.innerHTML =
            &quot;Input is &quot; + err;<br>&nbsp;&nbsp;}<br>}<br>&lt;/script&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
        </div>
        <a target="_blank" href="../jstryit/tryjs_throw_error.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>HTML Проверка</h2>
    <p>The code above is just an example.</p>
    <p>Современные браузеры часто используют комбинацию JavaScript и встроенной проверки HTML, используя предопределенные правила проверки, определенные в атрибутах HTML:</p>
    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;input id=&quot;demo&quot; type=&quot;number&quot; min=&quot;5&quot; max=&quot;10&quot; step=&quot;1&quot;&gt;</div>
    </div>

    <p>Вы можете узнать больше о проверке форм позже в данном учебнике на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>

    <?php include '../include/addown_content.php'; ?>

    <h2>Оператор finally</h2>
    <p>Оператор <code class="w3-codespan">finally</code> позволяет выполнять код после try и catch, независимо от результата:</p>

    <div class="w3-example">
        <h3>Синтаксис</h3>
        <div class="w3-code notranslate jsHigh">
            try {<br>
            &nbsp; <em>Блок кода, чтобы попробовать<br>
            </em>}<br>
            catch(<em>err</em>) {<br>
            &nbsp; <em>Блок кода для обработки ошибок<br>
            </em>}
            <br>finally {<br>&nbsp; <em>Блок кода, который будет выполняться независимо от результата try / catch<br>
            </em>}</div></div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            function myFunction() {<br>&nbsp; const message =
            document.getElementById(&quot;p01&quot;);<br>&nbsp; message.innerHTML = &quot;&quot;;<br>
            &nbsp;&nbsp;let x =
            document.getElementById(&quot;demo&quot;).value;<br>&nbsp;
            try { <br>&nbsp;&nbsp;&nbsp;
            if(x == &quot;&quot;) throw &quot;is empty&quot;;<br>&nbsp;&nbsp;&nbsp; if(isNaN(x))
            throw &quot;is not a number&quot;;<br>&nbsp;&nbsp;&nbsp;
            x = Number(x);<br>&nbsp;&nbsp;&nbsp; if(x &gt;
            10) throw &quot;is too high&quot;;<br>&nbsp;&nbsp;&nbsp; if(x &lt;
            5) throw &quot;is too low&quot;;<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;catch(err)
            {<br>&nbsp;&nbsp;&nbsp; message.innerHTML = &quot;Error: &quot; +
            err + &quot;.&quot;;<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;finally {<br>&nbsp;&nbsp;&nbsp;&nbsp;document.getElementById(&quot;demo&quot;).value = &quot;&quot;;<br>
            &nbsp;&nbsp;}<br>}</div>
        <a target="_blank" href="../jstryit/tryjs_finally_error.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Объект Error (ошибка)</h2>
    <p>JavaScript имеет встроенный объект error, который предоставляет информацию об ошибке при ее возникновении.</p>
    <p>Объект error предоставляет два полезных свойства: имя и сообщение.</p>
    <hr>

    <h2>Свойства объекта Error</h2>
    <table class="ws-table-all">
        <tr><th>Свойство</th><th>Описание</th></tr>
        <tr><td>name</td><td>Устанавливает или возвращает имя ошибки</td></tr>
        <tr><td>message</td><td>Устанавливает или возвращает сообщение об ошибке (строку)</td></tr>
    </table>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Значения имени ошибки</h2>
    <p>Свойство имени ошибки может вернуть шесть различных значений:</p>
    <table class="ws-table-all">
        <tr><th>Имя ошибки</th><th>Описание</th></tr>
        <tr><td>EvalError</td><td>Произошла ошибка в функции eval()</td></tr>
        <tr><td>RangeError</td><td>Произошло число &quot;Вне допустимого диапазона&quot;</td></tr>
        <tr><td>ReferenceError</td><td>Произошла недопустимая ссылка</td></tr>
        <tr><td>SyntaxError</td><td>Произошла синтаксическая ошибка</td></tr>
        <tr><td>TypeError</td><td>Произошла ошибка типа</td></tr>
        <tr><td>URIError</td><td>Произошла ошибка в encodeURI()</td></tr>
    </table>
    <p>Шесть различных значений описаны ниже.</p>
    <hr>

    <h2>Ошибка Eval Error</h2>
    <p>Ошибка <code class="w3-codespan">EvalError</code> указывает на ошибку в функции eval().</p>
    <div class="w3-panel w3-warning"><p>Новые версии JavaScript не генерируют EvalError. Вместо этого используйте SyntaxError.</p></div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Ошибка Range Error</h2>
    <p>Ошибка <code class="w3-codespan">RangeError</code> выдается, если вы используете число, выходящее за пределы диапазона допустимых значений.</p>
    <p>Например: вы не можете установить количество значащих цифр числа равным 500.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let num = 1;<br>
            try {<br>
            &nbsp; num.toPrecision(500);&nbsp;&nbsp; // Число не может содержать 500 значащих цифр<br>
            }<br>
            catch(err) {<br>
            &nbsp; document.getElementById(&quot;demo&quot;).innerHTML = err.name;<br>
            }
        </div>
        <a target="_blank" href="../jstryit/tryjs_error_rangeerror.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Ошибка Reference Error</h2>
    <p><code class="w3-codespan">ReferenceError</code> выдаётся, если вы используете (ссылаетесь) на переменную, которая не была объявлена:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 5;<br>try {<br>
            &nbsp;&nbsp;x = y + 1;&nbsp;&nbsp; // y не может использоваться (ссылаться)<br>
            }<br>
            catch(err) {<br>
            &nbsp; document.getElementById(&quot;demo&quot;).innerHTML = err.name;<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_error_referenceerror.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Ошибка Syntax Error</h2>
    <p><code class="w3-codespan">SyntaxError</code> выдаётся, если вы пытаетесь запустить код с синтаксической ошибкой.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            try {<br>&nbsp; eval(&quot;alert('Hello)&quot;);&nbsp;&nbsp; // Отсутствие ' приведет к ошибке<br>
            }<br>catch(err) {<br>&nbsp;&nbsp;document.getElementById(&quot;demo&quot;).innerHTML = err.name;<br>} </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_error_syntaxerror.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Ошибка Type Error</h2>
    <p><code class="w3-codespan">TypeError</code> выдаётся, если вы используете значение, выходящее за пределы диапазона ожидаемых типов:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let num = 1;<br>
            try {<br>
            &nbsp;&nbsp;num.toUpperCase();&nbsp;&nbsp; // Вы не можете преобразовать число в верхний регистр<br>
            }<br>
            catch(err) {<br>
            &nbsp;&nbsp;document.getElementById(&quot;demo&quot;).innerHTML = err.name;<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_error_typeerror.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Ошибка URI (Uniform Resource Identifier - Единый идентификатор ресурса) Error</h2>
    <p><code class="w3-codespan">URIError</code> выдаётся, если вы используете недопустимые символы в функции URI:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            try {<br>
            &nbsp; decodeURI(&quot;%%%&quot;);&nbsp;&nbsp; // Вы не можете декодировать URI знаки процента<br>
            }<br>
            catch(err) {<br>
            &nbsp;&nbsp;document.getElementById(&quot;demo&quot;).innerHTML = err.name;<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_error_urierror.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Нестандартные Свойства объекта Error</h2>
    <div class="w3-panel w3-warning">
        <p>Mozilla и Microsoft определяют некоторые нестандартные свойства объекта ошибки:</p>
        <p>fileName (Mozilla)<br>
            lineNumber (Mozilla)<br>
            columnNumber (Mozilla)<br>
            stack (Mozilla)<br>
            description (Microsoft)<br>
            number (Microsoft)</p>
        <p>Не используйте эти свойства на общедоступных веб-сайтах. Они не будут работать во всех браузерах.</p>
    </div>
    <hr>
    <h2>Полный справочник Error</h2>
    <p>Полный справочник по объекту Error смотрите в главе <a href="../jsref/jsref_obj_error.php">Полный справочник JavaScript Error</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_regexp.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_scope.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>