<?php include '../include/head.php'; ?>

<title>JavaScript Производительность. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Производительность. Снижение активности в циклах. Доступ и размер DOM. Ненужные переменные. Отложить загрузку JavaScript. Использования with. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Производительность</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_mistakes.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_reserved.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Как ускорить JavaScript код?</strong></p>
    <hr>

    <h2>Снижение активности в циклах</h2>
    <p>Циклы часто используются в программировании.</p>
    <p>Каждый оператор в цикле, включая оператор for, выполняется для каждой итерации цикла.</p>
    <p>Операторы или присваивания, которые можно разместить за пределами цикла, заставят цикл работать быстрее.</p>
    <?php include '../include/adinfeed.php'; ?>
    <div class="w3-example w3-pale-red">
        <h3>Плохо:</h3>
        <div class="w3-code notranslate jsHigh w3-border-red">
            for (let i = 0; i &lt; arr.length; i++) {<br>
        </div>
    </div>

    <div class="w3-example">
        <h3>Лучший код:</h3>
        <div class="w3-code notranslate jsHigh">
            let l = arr.length;<br>
            for (let i = 0; i &lt; l; i++) {</div>
    </div>

    <p>Плохой код обращается к свойству length массива каждый раз, когда цикл повторяется.</p>
    <p>Более совершенный код получает доступ к свойству длины вне цикла и ускоряет выполнение цикла.</p>
    <hr>

    <h2>Ограничьте доступ к DOM</h2>
    <p>Доступ к HTML DOM происходит очень медленно по сравнению с другими операторами JavaScript.</p>
    <p>Если вы ожидаете получить доступ к элементу DOM несколько раз, получите доступ к нему один раз и используйте его как локальную переменную:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const obj = document.getElementById(&quot;demo&quot;);<br>obj.innerHTML = &quot;Hello&quot;;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_element_reference.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Уменьшить размер DOM</h2>
    <p>Сохраняйте небольшое количество элементов в HTML DOM.</p>
    <p>Это всегда улучшает загрузку страницы и ускоряет рендеринг (отображение страницы), особенно на небольших устройствах.</p>
    <p>Каждая попытка поиска в DOM (например, getElementsByTagName) выиграет от меньшего размера DOM.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Избегайте ненужных переменных</h2>
    <p>Не создавайте новые переменные, если не планируете сохранять значения.</p>
    <p>Часто можно заменить такой код:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            let fullName = firstName + &quot; &quot; + lastName;<br>
            document.getElementById(&quot;demo&quot;).innerHTML = fullName;
        </div>
    </div>
    <p>С этим:</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            document.getElementById(&quot;demo&quot;).innerHTML = firstName + &quot; &quot; + lastName;
        </div>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Отложить загрузку JavaScript</h2>
    <p>Размещение ваших скриптов в нижней части страницы позволяет браузеру загружать страницу первой.</p>
    <p>Во время загрузки скрипта браузер не будет запускать другие загрузки. Кроме того, все действия по синтаксическому анализу и рендерингу могут быть заблокированы.</p>

    <div class = "w3-panel w3-note">
        <p>Спецификация HTTP определяет, что браузеры не должны загружать более двух компонентов одновременно.</p>
    </div>

    <p>Альтернативой является использование <code class="w3-codespan">defer=&quot;true&quot;</code> в теге скрипта. Атрибут defer указывает, что скрипт должен выполняться после завершения анализа страницы, но он работает только для внешних скриптов.</p>
    <p>If possible, you can add your script to the page by code, after the page has loaded:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;script&gt;<br>window.onload = function() {<br>&nbsp;
            const element = document.createElement(&quot;script&quot;);<br>&nbsp;
            element.src = &quot;myScript.js&quot;;<br>&nbsp;
            document.body.appendChild(element);<br>};<br>&lt;/script&gt;</div>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Избегайте использования with</h2>
    <p>Избегайте использования ключевого слова <code class="w3-codespan">with</code>. Это отрицательно сказывается на скорости. Это также загромождает области JavaScript.</p>
    <p>Ключевое слово <code class="w3-codespan">with</code> <strong>запрещено</strong> в строгом режиме.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_mistakes.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_reserved.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>