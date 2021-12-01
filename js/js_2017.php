<?php include '../include/head.php'; ?>

<title>JavaScript Версии. ECMAScript 2017. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Версии. ECMAScript 2017. Новые возможности. Заполнение строк. Записи объектов. Значения объекта. Асинхронные функции. Браузерная поддержка. <?php include '../include/description.php'; ?>'>
    <link rel="stylesheet" href="../styles/browserref.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>ECMAScript 2017</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_2016.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_2018.php">Next &#10095;</a>
    </div>

    <div class="w3-panel w3-info">
        <p>Соглашение об именовании JavaScript началось с ES1, ES2, ES3, ES5 и ES6.</p>
        <p>Но ECMAScript 2016 и 2017 не назывался ES7 и ES8.</p>
        <p>С 2016 года новые версии именуются по годам (ECMAScript 2016/2017/2018).</p>
    </div>

    <h2>Новые возможности ECMAScript 2017</h2>
    <p>В этой главе представлены новые функции в ECMAScript 2017:</p>
    <ul>
        <li><a href="#mark_padding">JavaScript Заполнение строк</a></li>
        <li><a href="#mark_obj_entries">JavaScript Object.entries</a></li>
        <li><a href="#mark_obj_values">JavaScript Object.values</a></li>
        <li><a href="#mark_async">JavaScript Асинхронные функции</a></li>
        <li>JavaScript Общая память</li>
    </ul>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <a id="mark_padding"></a>
    <h2>JavaScript Заполнение строк</h2>
    <p>В ECMAScript 2017 добавлены два метода строк: <code class="w3-codespan">padStart</code> и <code class="w3-codespan">padEnd</code> для поддержки заполнения в начале и в конце строки.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let str = &quot;5&quot;;<br>
            str = str.padStart(4,0);<br>
            // результат равен 0005
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_padding1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let str = &quot;5&quot;;<br>
            str = str.padEnd(4,0);<br>
            // результат равен 5000
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_string_padding2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Заполнение строк не поддерживается в Internet Explorer.</p>
    <p>Firefox и Safari были первыми браузерами с поддержкой заполнения строк в JavaScript:</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tbody><tr style="height:50px">
                <th style="width:16%;" class="bsChrome" title="Chrome"></th>
                <th style="width:16%;" class="bsEdge" title="Edge"></th>
                <th style="width:16%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:16%;" class="bsSafari" title="Safari"></th>
                <th style="width:16%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td>Chrome 57</td>
                <td>Edge 15</td>
                <td>Firefox 48</td>
                <td>Safari 10</td>
                <td>Opera 44</td>
            </tr>
            <tr>
                <td>Mar 2017</td>
                <td>Apr 2017</td>
                <td>Aug 2016</td>
                <td>Sep 2016</td>
                <td>Mar 2017</td>
            </tr>
            </tbody></table>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <a id="mark_obj_entries"></a>
    <h2>JavaScript Записи объектов</h2>
    <p>ECMAScript 2017 добавил к объектам новый метод <code class="w3-codespan">Object.entries</code>.</p>
    <p>Метод Object.entries() возвращает массив пар ключ / значение в объекте:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {<br>&nbsp; firstName : &quot;John&quot;,<br>&nbsp; lastName : &quot;Doe&quot;,<br>&nbsp;
            age : 50,<br>&nbsp; eyeColor : &quot;blue&quot;<br>};<br>document.getElementById(&quot;demo&quot;).innerHTML = Object.entries(person);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_entries.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Object.entries() упрощает использование объектов в циклах:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = {Bananas:300, Oranges:200, Apples:500};<br><br>
            let text = "";<br>
            for (let [fruit, value] of Object.entries(fruits)) {<br>
            text += fruit + ": " + value + "<br>";<br> }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_entries_loop.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Object.entries() также упрощает преобразование объектов в карты:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = {Bananas:300, Oranges:200, Apples:500};<br><br>
            const myMap = new Map(Object.entries(fruits));
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_entries_map.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Chrome и Firefox были первыми браузерами с поддержкой <code class="w3-codespan">Object.entries</code>:</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tbody><tr style="height:50px">
                <th style="width:16%;" class="bsChrome" title="Chrome"></th>
                <th style="width:16%;" class="bsEdge" title="Edge"></th>
                <th style="width:16%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:16%;" class="bsSafari" title="Safari"></th>
                <th style="width:16%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td>Chrome 47</td>
                <td>Edge 14</td>
                <td>Firefox 47</td>
                <td>Safari 10.1</td>
                <td>Opera 41</td>
            </tr>
            <tr>
                <td>Jun 2016</td>
                <td>Aug 2016</td>
                <td>Jun 2016</td>
                <td>Mar 2017</td>
                <td>Oct 2016</td>
            </tr>
            </tbody></table>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <a id="mark_obj_values"></a>
    <h2>JavaScript Значения объекта</h2>
    <p><code class="w3-codespan">Object.values</code> похожи на <code class="w3-codespan">Object.entries</code>, но возвращает одномерный массив значений объекта:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {<br>&nbsp; firstName : &quot;John&quot;,<br>&nbsp; lastName : &quot;Doe&quot;,<br>&nbsp;
            age : 50,<br>&nbsp; eyeColor : &quot;blue&quot;<br>};<br>document.getElementById(&quot;demo&quot;).innerHTML =
            Object.values(person);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_values.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Firefox и Chrome были первыми браузерами с поддержкой <code class="w3-codespan">Object.values</code>:</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tbody><tr style="height:50px">
                <th style="width:16%;" class="bsChrome" title="Chrome"></th>
                <th style="width:16%;" class="bsEdge" title="Edge"></th>
                <th style="width:16%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:16%;" class="bsSafari" title="Safari"></th>
                <th style="width:16%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td>Chrome 54</td>
                <td>Edge 14</td>
                <td>Firefox 47</td>
                <td>Safari 10.1</td>
                <td>Opera 41</td>
            </tr>
            <tr>
                <td>Oct 2016</td>
                <td>Aug 2016</td>
                <td>Jun 2016</td>
                <td>Mar 2017</td>
                <td>Oct 2016</td>
            </tr>
            </tbody></table>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <a id="mark_async"></a>
    <h2>JavaScript Асинхронные функции</h2>
    <div class="w3-example">
        <h3>Ожидание тайм-аута</h3>
        <div class="w3-code notranslate jsHigh">
            async function myDisplay() {<br>
            &nbsp; let myPromise = new Promise(function(myResolve,  myReject) {<br>
            &nbsp;&nbsp;&nbsp; setTimeout(function() { myResolve("I love You !!"); }, 3000);<br>
            &nbsp; });<br>
            &nbsp; document.getElementById(&quot;demo&quot;).innerHTML = await myPromise;<br>}<br><br>
            myDisplay();
        </div>
        <p><a target="_blank" class="w3-btn" href="../jstryit/tryjs_async4.html">Попробуйте сами &raquo;</a></p>
    </div>
    <p>Firefox и Chrome были первыми браузерами с поддержкой асинхронных функций JavaScript:</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tbody><tr style="height:50px">
                <th style="width:16%;" class="bsChrome" title="Chrome"></th>
                <th style="width:16%;" class="bsEdge" title="Edge"></th>
                <th style="width:16%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:16%;" class="bsSafari" title="Safari"></th>
                <th style="width:16%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td>Chrome 55</td>
                <td>Edge 15</td>
                <td>Firefox 52</td>
                <td>Safari 11</td>
                <td>Opera 42</td>
            </tr>
            <tr>
                <td>Des 2016</td>
                <td>Apr 2017</td>
                <td>Mar 2017</td>
                <td>Sep 2017</td>
                <td>Des 2016</td>
            </tr>
            </tbody></table>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_2016.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_2018.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>