<?php include '../include/head.php'; ?>

<title>JSON Учебник. Введение. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JSON Учебник. Введение. Что такое JSON? Обмен данными. Получение, отправка и хранение данных. Зачем использовать JSON? Основы языка JavaScript. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_json.php'; ?>

<article>
    <h1>JSON <span class="color_h1">- Введение</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_ajax_examples.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_json_syntax.php">Next &#10095;</a>
    </div>

    <div class="w3-panel w3-info intro">
        <p><strong>JSON</strong>: <b>J</b>ava<b>S</b>cript <b>O</b>bject <b>N</b>otation (Обозначение объектов JavaScript).</p>
        <p><strong>JSON</strong> - это синтаксис для хранения и обмена данными.</p>
        <p><strong>JSON</strong> - это текст, написанный с использованием обозначения объектов JavaScript.</p>
    </div>
    <hr>

    <h2>Обмен данными</h2>
    <p>При обмене данными между браузером и сервером данные могут быть только текстовыми.</p>
    <p>JSON - это текст, и мы можем преобразовать любой объект JavaScript в JSON и отправить JSON на сервер.</p>
    <p>Мы также можем преобразовать любой JSON, полученный с сервера, в объекты JavaScript.</p>
    <p>Таким образом, мы можем работать с данными как с объектами JavaScript без сложного синтаксического анализа и перевода.</p>
    <hr>

    <h2>Отправка данных</h2>
    <p>Если у вас есть данные, хранящиеся в объекте JavaScript, вы можете преобразовать объект в JSON и отправить его на сервер:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var myObj = {name: &quot;John&quot;,
            age: 31, city: &quot;New York&quot;};<br>var myJSON =
            JSON.stringify(myObj);<br>window.location = &quot;demo_json.php?x=&quot; + myJSON;<br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjson_send.html?filename=">Попробуйте сами &raquo;</a>
    </div>
    <p>Вы узнаете больше о функции <code class="w3-codespan">JSON.stringify()</code> позже в этом учебнике.</p>
    <hr>

    <h2>Получение данных</h2>
    <p>Если вы получаете данные в формате JSON, вы можете преобразовать их в объект JavaScript:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            var myJSON =
            '{&quot;name&quot;:&quot;John&quot;,
            &quot;age&quot;:31, &quot;city&quot;:&quot;New York&quot;}';<br>var myObj =
            JSON.parse(myJSON);<br>document.getElementById(&quot;demo&quot;).innerHTML = myObj.name;</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjson_receive.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Вы узнаете больше о функции <code class="w3-codespan">JSON.parse()</code> позже в этом учебнике.</p>
    <hr>

    <h2>Хранение данных</h2>
    <p>При хранении данных они должны иметь определенный формат, и независимо от того, где вы их решите хранить, <em>текст</em> всегда является одним из допустимых форматов.</p>
    <p>JSON позволяет хранить объекты JavaScript в виде текста.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Хранение данных в локальном хранилище.</p>
        <div class="w3-code notranslate jsHigh">
            // Storing data:<br>myObj = {name: &quot;John&quot;,
            age: 31, city: &quot;New York&quot;};<br>myJSON =
            JSON.stringify(myObj);<br>localStorage.setItem(&quot;testJSON&quot;, myJSON);<br><br>
            // Retrieving data:<br>text = localStorage.getItem(&quot;testJSON&quot;);<br>obj =
            JSON.parse(text);<br>document.getElementById(&quot;demo&quot;).innerHTML = obj.name;</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjson_store.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Что такое JSON?</h2>
    <ul>
        <li>JSON расшифровывается как <b>J</b>ava<b>S</b>cript <b>O</b>bject <b>N</b>otation (Обозначение объектов JavaScript)</li>
        <li>JSON - это легкий формат обмена данными</li>
        <li>JSON является &quot;самоописывающим&quot; и легким для понимания</li>
        <li>JSON не зависит от языка <b>*</b></li>
    </ul>

    <div class="w3-panel w3-note">
        <p>* Примечание: <br>JSON использует синтаксис JavaScript, но формат JSON - только текст. <br>Текст может быть прочитан и использован в качестве формата данных любым языком программирования.</p>
    </div>

    <p>Формат JSON был первоначально определён Дугласом Крокфордом (<a target="_blank" href="http://www.crockford.com" rel="nofollow">Douglas Crockford</a>).</p>
    <hr>

    <h2>Зачем использовать JSON?</h2>
    <p>Поскольку формат JSON является только текстовым, его можно легко отправлять на сервер и с сервера и использовать в качестве формата данных любым языком программирования.</p>
    <p>JavaScript имеет встроенную функцию для преобразования строки, записанной в формате JSON, в собственные объекты JavaScript:</p>
    <p><code class="w3-codespan">JSON.parse()</code></p>
    <p>Таком образом, если вы получаете данные с сервера в формате JSON, вы можете использовать их, как любой другой объект JavaScript.</p>
    <hr>

    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_ajax_examples.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_json_syntax.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>