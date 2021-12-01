<?php include '../include/head.php'; ?>

<title>JavaScript Версии. ECMAScript 2016. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Версии. ECMAScript 2016. Новые функции. Оператор и присвоение возведения в степень. Массивы Array.includes(). Браузерная поддержка. <?php include '../include/description.php'; ?>'>
    <link rel="stylesheet" href="../styles/browserref.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>ECMAScript 2016</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_es6.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_2017.php">Next &#10095;</a>
    </div>

    <div class="w3-panel w3-info">
        <p>Соглашение об именовании JavaScript началось с ES1, ES2, ES3, ES5 и ES6.</p>
        <p>Но ECMAScript 2016 и 2017 не назывался ES7 и ES8.</p>
        <p>С 2016 года новые версии именуются по годам (ECMAScript 2016/2017/2018).</p>
    </div>

    <h2>Новые функции в ECMAScript 2016</h2>
    <p>В этой главе представлены новые функции в ECMAScript 2016:</p>
    <ul>
        <li>JavaScript Возведение в степень (**)</li>
        <li>JavaScript Присваивание возведения в степень (**=)</li>
        <li>JavaScript Array.prototype.includes</li>
    </ul>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Оператор возведения в степень</h2>
    <p>Оператор <b>возведения в степень</b> (<code class="w3-codespan">**</code>) возводит первый операнд в степень второго операнда.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 5;<br>
            let z = x ** 2;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // результат равен 25
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_es6_exponent1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p><code class="w3-codespan">x ** y</code> даёт тот же результат, что и <code class="w3-codespan">Math.pow(x, y)</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 5;<br>
            let z = Math.pow(x,2);&nbsp;&nbsp; // результат равен 25
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_es6_exponent2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>Присвоение возведения в степень</h2>
    <p>Оператор <b>присвоения возведения в степень</b> (<code class="w3-codespan">**=</code>) увеличивает значение переменной до степени правого операнда.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = 5;<br>
            x **= 2; // результат равен 25
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_es6_exponent3.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Chrome 52 и Edge 14 были первыми браузерами, полностью поддерживающими оператор возведения в степень:</p>
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
                <td>Chrome 52</td>
                <td>Edge 14</td>
                <td>Firefox 52</td>
                <td>Safari 10.1</td>
                <td>Opera 39</td>
            </tr>
            <tr>
                <td>Jul 2016</td>
                <td>Aug 2016</td>
                <td>Mar 2017</td>
                <td>Mar 2017</td>
                <td>Aug 2016</td>
            </tr>
            </tbody></table>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>JavaScript Array.includes()</h2>
    <p>ECMAScript 2016 представил массивы <code class = "w3 -codepan"> Array.prototype.includes </code>. Это позволяет нам проверить, присутствует ли элемент в массиве:</p>
    <div class="w3-example">

        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = ["Banana", "Orange", "Apple", "Mango"];<br><br>
            fruits.includes("Mango"); // является true
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_includes.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Все современные браузеры поддерживают Array.prototype.includes:</p>
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
                <td>Firefox 43</td>
                <td>Safari 9</td>
                <td>Opera 34</td>
            </tr>
            <tr>
                <td>Des 2015</td>
                <td>Aug 2016</td>
                <td>Des 2015</td>
                <td>Oct 2015</td>
                <td>Des 2015</td>
            </tr>
            </tbody></table>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_es6.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_2017.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>