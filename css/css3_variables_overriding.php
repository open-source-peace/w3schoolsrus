<?php include '../include/head.php'; ?>

<title>CSS Переопределение переменных. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Переменные - Переопределение переменных. Замена глобальных переменных локальными переменными. Как добавить новую локальную переменную? Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<link rel="stylesheet" href="../styles/browserref.css">

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS Переопределение переменных</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_variables.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_variables_javascript.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Замена глобальных переменных локальными переменными</h2>
    <p>На предыдущей странице мы узнали, что к <strong>глобальным переменным</strong> можно обращаться и использовать их во всём документе, в то время как <strong>локальные переменные</strong> можно использовать только внутри селектора, в котором они объявлены.</p>
    <p>Взгляните на пример с предыдущей страницы:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            :root {<br>&nbsp; --blue: #1e90ff;<br>&nbsp; --white: #ffffff; <br>}<br><br>
            body {<br>&nbsp; background-color: var(--blue);<br>}<br><br>h2 {<br>&nbsp; border-bottom: 2px solid var(--blue);<br>}<br>
            <br>.container {<br>&nbsp;
            color: var(--blue);<br>&nbsp; background-color: var(--white);<br>&nbsp; padding:
            15px;<br>}<br><br>button {<br>&nbsp; background-color: var(--white);<br>&nbsp;
            color: var(--blue);<br>&nbsp; border: 1px solid var(--blue);<br>&nbsp;
            padding: 5px;<br>}
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_var.html">Попробуйте сами &raquo;</a>
        <br>
    </div>

    <p>Иногда необходимо, чтобы переменные изменялись только в определенном разделе страницы.</p>
    <p>Предположим, нам нужен другой синий цвет для элементов button (кнопок). Затем мы можем повторно объявить переменную --blue внутри селектора button. Когда мы используем var(--blue) внутри этого селектора, он будет использовать объявленное здесь значение локальной переменной --blue.</p>
    <p>Мы видим, что локальная переменная --blue переопределяет глобальную переменную --blue для элементов button:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            :root {<br>&nbsp; --blue: #1e90ff;<br>&nbsp; --white: #ffffff; <br>}<br><br>
            body {<br>&nbsp; background-color: var(--blue);<br>}<br><br>h2 {<br>&nbsp; border-bottom: 2px solid var(--blue);<br>}<br>
            <br>.container {<br>&nbsp;
            color: var(--blue);<br>&nbsp; background-color: var(--white);<br>&nbsp; padding:
            15px;<br>}<br><br>button {<br>&nbsp; --blue: #0000ff;<br>&nbsp; background-color: var(--white);<br>&nbsp;
            color: var(--blue);<br>&nbsp; border: 1px solid var(--blue);<br>&nbsp;
            padding: 5px;<br>}
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_var_override.html">Попробуйте сами &raquo;</a>
        <br>
    </div>
    <hr>

    <h2>Добавить новую локальную переменную</h2>
    <p>Если переменная должна использоваться только в одном месте, мы также могли бы объявить новую локальную переменную, например:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            :root {<br>&nbsp; --blue: #1e90ff;<br>&nbsp; --white: #ffffff; <br>}<br><br>
            body {<br>&nbsp; background-color: var(--blue);<br>}<br><br>h2 {<br>&nbsp; border-bottom: 2px solid var(--blue);<br>}<br>
            <br>.container {<br>&nbsp;
            color: var(--blue);<br>&nbsp; background-color: var(--white);<br>&nbsp; padding:
            15px;<br>}<br><br>button {<br>&nbsp; --button-blue: #0000ff;<br>&nbsp; background-color: var(--white);<br>&nbsp;
            color: var(--button-blue);<br>&nbsp; border: 1px solid var(--button-blue);<br>&nbsp;
            padding: 5px;<br>}
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_var_local.html">Попробуйте сами &raquo;</a>
        <br>
    </div>
    <hr>

    <h2>Поддержка браузерами</h2>
    <p>Числа в таблице указывают первую версию браузера, которая полностью поддерживает функцию <code class="w3-codespan">var()</code>.</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tr>
                <th style="width:25%;font-size:16px;text-align:left;">Функция</th>
                <th style="width:15%;" class="bsChrome" title="Chrome"></th>
                <th style="width:15%;" class="bsEdge" title="Internet Explorer / Edge"></th>
                <th style="width:15%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:15%;" class="bsSafari" title="Safari"></th>
                <th style="width:15%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td style="text-align:left;">var()</td>
                <td>49.0</td>
                <td>15.0</td>
                <td>31.0</td>
                <td>9.1</td>
                <td>36.0</td>
            </tr>
        </table>
    </div>
    <hr>

    <h2>CSS Функция var()</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:28%">Свойство</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/func_var.php">var()</a></td>
            <td>Вставляет значение CSS переменной</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_variables.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_variables_javascript.php">Next &#10095;</a>
    </div>    
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>