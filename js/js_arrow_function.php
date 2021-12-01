<?php include '../include/head.php'; ?>

<link rel="stylesheet" href="../styles/browserref.css">
<title>JavaScript Функция стрелки. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Функция стрелки (или Стрелочные функции). Обработка this. Поддержка браузерами. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript Функция стрелки</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_this.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_classes.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Функции стрелки</strong> (или <strong>стрелочные функции</strong>) были введены в ES6.<br><strong>Стрелочные функции</strong> позволяют нам писать более короткий синтаксис функций:</p>

    <div class="w3-example">
        <h3>Раньше:</h3>
        <div class="w3-code notranslate jsHigh">
            hello = function() {<br>&nbsp; return &quot;Hello World!&quot;;<br>}</div>
        <p><a target="_blank" class="w3-btn" href="../jstryit/tryjs_arrow_function1.html">Попробуйте сами &raquo;</a></p>
    </div>

    <div class="w3-example">
        <h3>Со стрелочной функцией:</h3>
        <div class="w3-code notranslate jsHigh">
            hello = () =&gt; {<br>&nbsp; return &quot;Hello World!&quot;;<br>}</div>
        <p><a target="_blank" class="w3-btn" href="../jstryit/tryjs_arrow_function2.html">Попробуйте сами &raquo;</a></p>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <p>Код становится короче! Если функция имеет только один оператор, и оператор возвращает значение, вы можете удалить скобки <em>и</em> ключевое слово <code class="w3-codespan">return</code>:</p>
    <div class="w3-example">
        <h3>Стрелочные функции возвращают значение по умолчанию:</h3>
        <div class="w3-code notranslate jsHigh">
            hello = () =&gt; &quot;Hello World!&quot;;</div>
        <p><a target="_blank" class="w3-btn" href="../jstryit/tryjs_arrow_function3.html">Попробуйте сами &raquo;</a></p>
    </div>
    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Это работает, если функция имеет только один оператор.</p>
    </div>

    <p>Если есть параметры, вы передаёте их в круглых скобках:</p>

    <div class="w3-example">
        <h3>Функция стрелки с параметрами:</h3>
        <div class="w3-code notranslate jsHigh">
            hello = (val) =&gt; &quot;Hello &quot; + val;</div>
        <p><a target="_blank" class="w3-btn" href="../jstryit/tryjs_arrow_function4.html">Попробуйте сами &raquo;</a></p>
    </div>

    <p>Фактически, если есть только один параметр, вы также можете пропустить круглые скобки:</p>

    <div class="w3-example">
        <h3>Функция стрелки без скобок:</h3>
        <div class="w3-code notranslate jsHigh">
            hello = val =&gt; &quot;Hello &quot; + val;</div>
        <a name="arrowthis"><span style="display:none">this</span></a>
        <p>
            <a target="_blank" class="w3-btn" href="../jstryit/tryjs_arrow_function5.html">Попробуйте сами &raquo;</a>
        </p>
    </div>
    <?php include '../include/adinfeed.php'; ?>

    <h2>А что насчёт <code class="w3-codespan">this</code>?</h2>
    <p>Обработка <code class="w3-codespan">this</code> также отличается в стрелочных функциях от обычных функций.</p>
    <p>Короче говоря, со стрелочными функциями нет привязки <code class="w3-codespan">this</code>.</p>
    <p>В обычных функциях ключевое слово <code class="w3-codespan">this</code> представляет объект, вызывающий функцию, которым может быть окно, документ, кнопка или что-то ещё.</p>
    <p>Для стрелочных функций <code class="w3-codespan">this</code> ключевое слово <em>always</em> представляет объект, определяющий стрелочную функцию.</p>
    <p>Давайте рассмотрим два примера, чтобы понять разницу.</p>
    <p>Оба примера вызывают метод дважды: сначала при загрузке страницы, и ещё раз, когда пользователь нажимает кнопку.</p>
    <p>В первом примере используется обычная функция, а во втором - стрелочная функция.</p>
    <p>Результат показывает, что первый пример возвращает два разных объекта (окно и кнопку), а второй пример возвращает объект окна дважды, поскольку объект окна является &quot;владельцем&quot; функции.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>В обычной функции <code class="w3-codespan">this</code> представляет объект, который <em>вызывает</em> функцию:</p>
        <div class="w3-code notranslate jsHigh">
            // Обычная функция:<br>hello = function() {<br>&nbsp; document.getElementById(&quot;demo&quot;).innerHTML += this;<br>}<br><br>// Объект окна вызывает функцию:<br>
            window.addEventListener(&quot;load&quot;, hello);<br><br>// Объект кнопки вызывает функцию:<br>document.getElementById(&quot;btn&quot;).addEventListener(&quot;click&quot;, hello);</div>
        <p><a target="_blank" class="w3-btn" href="../jstryit/tryjs_arrow_function6.html">Попробуйте сами &raquo;</a></p>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>С помощью функции стрелки <code class="w3-codespan">this</code> представляет <em>владельца</em> функции:</p>
        <div class="w3-code notranslate jsHigh">
            // Функция стрелки:<br>hello = () =&gt; {<br>&nbsp; document.getElementById(&quot;demo&quot;).innerHTML += this;<br>}<br><br>// Объект окна вызывает функцию:<br>
            window.addEventListener(&quot;load&quot;, hello);<br><br>// Объект кнопки вызывает функцию:<br>document.getElementById(&quot;btn&quot;).addEventListener(&quot;click&quot;, hello);</div>
        <p><a target="_blank" class="w3-btn" href="../jstryit/tryjs_arrow_function7.html">Попробуйте сами &raquo;</a></p>
    </div>

    <p>Помните об этих различиях, когда работаете с функциями. Иногда поведение обычных функций - это то, что вам нужно, если нет, используйте стрелочные функции.</p>
    <hr>
    <?php include '../include/addown_content.php'; ?>

    <h2>Поддержка браузерами</h2>
    <p>В следующей таблице определены первые версии браузеров с полной поддержкой функций стрелок в JavaScript:</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tbody><tr style="height:50px;">
                <th style="width:20%;" class="bsChrome" title="Chrome"></th>
                <th style="width:20%;" class="bsEdge" title="Edge"></th>
                <th style="width:20%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:20%;" class="bsSafari" title="Safari"></th>
                <th style="width:20%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td>Chrome 45</td>
                <td>Edge 12</td>
                <td>Firefox 22</td>
                <td>Safari 10</td>
                <td>Opera 32</td>
            </tr>
            <tr>
                <td>Sep, 2015</td>
                <td>Jul, 2015</td>
                <td>May, 2013</td>
                <td>Sep, 2016</td>
                <td>Sep, 2015</td>
            </tr></tbody>
        </table>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_this.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_classes.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>