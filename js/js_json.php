<?php include '../include/head.php'; ?>

<title>JavaScript JSON. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript JSON. Что такое JSON? - это формат для хранения и передачи данных, используется, когда данные отправляются с сервера на веб-страницу. Правила синтаксиса. Данные JSON - имя и значение. Объекты, массивы. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">JSON</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_classes.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_debugging.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>JSON</strong> - это формат для хранения и передачи данных.</p>
    <p class="intro"><strong>JSON</strong> часто используется, когда данные отправляются с сервера на веб-страницу.</p>
    <hr>
    <h2>Что такое JSON?</h2>
    <ul>
        <li>JSON расшифровывается, как <b>J</b>ava<b>S</b>cript <b>O</b>bject <b>N</b>otation (Обозначение объектов JavaScript)</li>
        <li>JSON - это легкий формат обмена данными</li>
        <li>JSON не зависит от языка<b>*</b></li>
        <li>JSON является &quot;самоописывающим&quot; и легким для понимания</li>
    </ul>

    <p>* Синтаксис JSON является производным от синтаксиса объектной нотации JavaScript, но формат JSON является только текстовым. Код для чтения и генерации данных JSON можно написать на любом языке программирования.</p>
    <hr>
    <h2>JSON Пример</h2>
    <p>Этот синтаксис JSON определяет объект сотрудников: массив из 3 записей (объектов) сотрудников:</p>
    <div class="w3-example">
        <h3>JSON Пример</h3>
        <div class="w3-code notranslate jsHigh">
            {<br>&quot;employees&quot;:[<br>
            &nbsp;&nbsp;{&quot;firstName&quot;:&quot;John&quot;, &quot;lastName&quot;:&quot;Doe&quot;}, <br>
            &nbsp;&nbsp;{&quot;firstName&quot;:&quot;Anna&quot;, &quot;lastName&quot;:&quot;Smith&quot;},<br>
            &nbsp; {&quot;firstName&quot;:&quot;Peter&quot;, &quot;lastName&quot;:&quot;Jones&quot;}<br>
            ]<br>}<br>
        </div></div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Формат JSON оценивает объекты JavaScript</h2>
    <p>Формат JSON синтаксически идентичен коду для создания объектов JavaScript.</p>
    <p>Из-за этого сходства программа JavaScript может легко преобразовывать данные JSON в собственные объекты JavaScript.</p>
    <hr>

    <h2>JSON Правила синтаксиса</h2>
    <ul>
        <li>Данные представлены парами имя/значение</li>
        <li>Данные разделяются запятыми</li>
        <li>Фигурные скобки содержат объекты</li>
        <li>Квадратные скобки содержат массивы</li>
    </ul>
    <?php include '../include/addown_content.php'; ?>

    <h2>Данные JSON - имя и значение</h2>
    <p>JSON данные записываются в виде пар имя/значение, как и свойства объекта JavaScript.</p>
    <p>Пара имя/значение состоит из имени поля (в двойных кавычках), за которым следует двоеточие, за которым следует значение:</p>
    <div class="w3-code w3-border notranslate jsHigh">
        <div>&quot;firstName&quot;:&quot;John&quot;</div>
    </div>

    <div class="w3-panel w3-note"><p>Имена JSON требуют двойных кавычек. Имена JavaScript не требуют.</p></div>
    <hr>

    <h2>JSON Объекты</h2>
    <p>Объекты JSON заключаются в фигурные скобки.</p>
    <p>Как и в JavaScript, объекты могут содержать несколько пар имя/значение:</p>
    <div class="w3-code w3-border notranslate jsHigh"><div>{&quot;firstName&quot;:&quot;John&quot;, &quot;lastName&quot;:&quot;Doe&quot;}</div></div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>JSON Массивы</h2>
    <p>JSON массивы заключаются в квадратные скобки.</p>
    <p>Как и в JavaScript, массив может содержать объекты:</p>
    <div class="w3-code w3-border notranslate jsHigh">
        <div>
            &quot;employees&quot;:[<br>
            &nbsp;
            {&quot;firstName&quot;:&quot;John&quot;, &quot;lastName&quot;:&quot;Doe&quot;}, <br>
            &nbsp;
            {&quot;firstName&quot;:&quot;Anna&quot;, &quot;lastName&quot;:&quot;Smith&quot;}, <br>
            &nbsp;
            {&quot;firstName&quot;:&quot;Peter&quot;, &quot;lastName&quot;:&quot;Jones&quot;}<br>
            ]
        </div>
    </div>

    <p>В приведенном выше примере объект &quot;сотрудники&quot; - это массив. Он содержит три объекта.</p>
    <p>Каждый объект - это запись о человеке (с именем и фамилией).</p>
    <hr>
    <h2>Преобразование текста JSON в объект JavaScript</h2>
    <p>Обычно JSON используется для чтения данных с веб-сервера и отображения данных на веб-странице.</p>
    <p>Для простоты это можно продемонстрировать, используя строку в качестве входных данных.</p>
    <p>Сначала создайте строку JavaScript, содержащую синтаксис JSON:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            let text = '{ &quot;employees&quot; : [' +<br>
            '{ &quot;firstName&quot;:&quot;John&quot; , &quot;lastName&quot;:&quot;Doe&quot; },' +<br>
            '{ &quot;firstName&quot;:&quot;Anna&quot; , &quot;lastName&quot;:&quot;Smith&quot; },' +<br>
            '{ &quot;firstName&quot;:&quot;Peter&quot; , &quot;lastName&quot;:&quot;Jones&quot; } ]}';</div>
    </div>
    <p>Затем используйте встроенную JavaScript функцию <code class="w3-codespan">JSON.parse()</code> чтобы преобразовать строку в объект JavaScript:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">const obj = JSON.parse(text);</div>
    </div>
    <?php include '../include/adinfeed.php'; ?>
    <p>Наконец, используйте новый объект JavaScript на своей странице:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p id=&quot;demo&quot;&gt;&lt;/p&gt;<br>
            <br>
            &lt;script&gt;<br>
            document.getElementById(&quot;demo&quot;).innerHTML =<br>
            obj.employees[1].firstName + &quot; &quot; + obj.employees[1].lastName;<br>
            &lt;/script&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_json_parse.html">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-note w3-panel"><p>Вы можете узнать больше о JSON в <a href="js_json_intro.php">JSON Учебнике</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p></div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_classes.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_debugging.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>