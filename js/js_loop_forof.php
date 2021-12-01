<?php include '../include/head.php'; ?>

<title>JavaScript Оператор For Of. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Оператор For Of. Синтаксис. Циклы по массиву и строке. Циклы while и do/while. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/browserref.css'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript For Of</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_loop_forin.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_loop_while.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Цикл For Of</h2>
    <p>JavaScript оператор <code class="w3-codespan">for of</code> перебирает значения итерируемого объекта.</p>
    <p>Он позволяет вам перебирать повторяющиеся структуры данных, такие как массивы, строки, карты, списки узлов и т.д.:</p>
    <div class="w3-example">
        <h3>Синтаксис</h3>
        <div class="w3-code notranslate jsHigh">
            for (переменная итерируемого) {<br>
            &nbsp; // <i>блок кода, который должен быть выполнен</i><br>
            }<br>
        </div></div>

    <p><b>variable</b> - Для каждой итерации переменной присваивается значение следующего свойства. <em>Переменная</em> может быть объявлена с помощью <code class="w3-codespan">const</code>, <code class="w3-codespan">let</code> или <code class="w3-codespan">var</code>.</p>
    <p><b>iterable</b> - Объект с итеративными свойствами (имеет свойство повторяться).</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Поддержка браузерами</h2>
    <p><b>For/of</b> был добавлен в JavaScript 2015 (<a href="js_es6.php">ES6</a>)</p>
    <p>Safari 7 был первым браузером, который поддерживал:</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tbody><tr style="height:50px">
                <th style="width:20%;" class="bsChrome" title="Chrome"></th>
                <th style="width:20%;" class="bsEdge" title="Edge"></th>
                <th style="width:20%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:20%;" class="bsSafari" title="Safari"></th>
                <th style="width:19%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td>Chrome 38</td>
                <td>Edge 12</td>
                <td>Firefox 51</td>
                <td>Safari 7</td>
                <td>Opera 25</td>
            </tr>
            <tr>
                <td>Oct 2014</td>
                <td>Jul 2015</td>
                <td>Oct 2016</td>
                <td>Oct 2013</td>
                <td>Oct 2014</td>
            </tr>
            </tbody></table>
    </div>
    <p><strong>For/of</strong> не поддерживается в Internet Explorer.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Цикл по массиву</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const cars = ["BMW", "Volvo", "Mini"];<br><br>
            let text = "";<br>
            for (let x of cars) {<br>
            &nbsp; text += x;<br>
            }<br>
        </div>
        <a target="_blank" href="../jstryit/tryjs_object_for_of.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Цикл по строке</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let language = "JavaScript";<br><br>
            let text = "";<br>
            for (let x of language) {<br>
            text += x;<br>
            }
        </div>
        <a target="_blank" href="../jstryit/tryjs_object_for_of2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Цикл While</h2>
    <p>Цикл <code class="w3-codespan">while</code> и цикл <code class="w3-codespan">do/while</code> описаны в следующей главе данного учебника на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_loop_forin.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_loop_while.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>