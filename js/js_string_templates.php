<?php include '../include/head.php'; ?>

<title>JavaScript Строковые шаблоны. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Строковые шаблоны (Шаблонные литералы). Back-Tics синтаксис. Кавычки внутри строк. Многострочные строки. Замены переменных. Замена выражения. HTML Шаблоны. Полный справочник. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/browserref.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript Шаблонные литералы</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_string_search.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_numbers.php">Next &#10095;</a>
    </div>
    <div class="w3-info">
        <h3>Синонимы:</h3>
        <ul class="w3-large">
            <li>Шаблонные литералы</li>
            <li>Шаблонные строки</li>
            <li>Строковые шаблоны</li>
            <li>Back-Tics синтаксис</li>
        </ul>
    </div>

    <h2>Back-Tics синтаксис</h2>
    <p><b>В шаблонных литералах</b> для определения строки используются back-ticks (``) (обратные галочки или кавычки), а не обычные кавычки (&quot;&quot;):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let text = `Hello World!`;
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_templates.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Кавычки внутри строк</h2>
    <p>С помощью <strong>шаблонных литералов</strong> вы можете использовать как одинарные, так и двойные кавычки внутри строки:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let text = `Его часто называют "Johnny"`;
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_templates_quotes.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>

    <h2>Многострочные строки</h2>
    <p><strong>Шаблонные литералы</strong> допускают использование многострочных строк:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let text =<br>
            `Быстрая<br>
            рыжая лиса<br>
            перепрыгивает<br>
            ленивую собаку`;<br>
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_templates_multiline.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Интерполяция</h2>
    <p><strong>Шаблонные литералы</strong> предоставляют простой способ интерполировать переменные и выражения в строки.</p>
    <p>Метод называется <strong>строковой интерполяцией</strong>.</p>
    <p>Синтаксис:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            ${...}</div>
    </div>
    <hr>

    <h2>Замены переменных</h2>
    <p><strong>Шаблонные литералы</strong> разрешают переменные в строках:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let firstName = "John";<br>
            let lastName = "Doe";<br>
            <br>
            let text = `Welcome ${firstName,}, ${firstName,}`;
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_templates_variables.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <div class="w3-note">
        <p>Автоматическая замена переменных действительными значениями называется <strong>интерполяцией строк</strong>.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Замена выражения</h2>
    <p><strong>Шаблонные литералы</strong> разрешают выражения в строках:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let price = 10;<br>
            let VAT = 0.25;<br>
            <br>
            let total = `Total: ${(price * (1 + VAT)).toFixed(2)}`;
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_templates_expressions.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <div class="w3-note">
        <p>Автоматическая замена выражений действительными значениями называется <strong>интерполяцией строк</strong>.</p>
    </div>
    <hr>

    <h2>HTML Шаблоны</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let header = "Templates Literals";<br>
            let tags = ["template literals", "javascript", "es6"];<br>
            <br>
            let html = `&lt;h2&gt;${header}&lt;/h2&gt;&lt;ul&gt;`;
            <br>
            for (const x of tags) {<br>
            &nbsp; html += `&lt;li&gt;${x}&lt;/li&gt;`;<br>
            }<br>
            <br>
            html += `&lt;/ul&gt;`;
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_templates_html.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Поддержка браузерами</h2>
    <p><strong>Шаблонные литералы</strong> не поддерживаются в Internet Explorer.</p>
    <p>Первые версии браузеров с полной поддержкой были:</p>
    <table class="browserref notranslate">
        <tr style="height:50px">
            <th style="width:16%;" class="bsChrome" title="Chrome"></th>
            <th style="width:16%;" class="bsEdge" title="Edge"></th>
            <th style="width:16%;" class="bsFirefox" title="Firefox"></th>
            <th style="width:16%;" class="bsSafari" title="Safari"></th>
            <th style="width:16%;" class="bsOpera" title="Opera"></th>
        </tr>
        <tr>
            <td>Chrome 41</td>
            <td>Edge 13</td>
            <td>Firefox 34</td>
            <td>Safari 10</td>
            <td>Opera 29</td>
        </tr>
        <tr>
            <td>Mar 2015</td>
            <td>Nov 2015</td>
            <td>Dec 2014</td>
            <td>Sep 2016</td>
            <td>Apr 2015</td>
        </tr>
    </table>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Полный справочник строк</h2>
    <p>Для получения полной справки перейдите на <a href="../jsref/jsref_obj_string.php">Полный справочник JavaScript строк</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <p>Справочник содержит описания и примеры всех свойств и методов строк.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_string_search.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_numbers.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>