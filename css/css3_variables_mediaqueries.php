<?php include '../include/head.php'; ?>

<title>CSS Переменные в медиа-запросах. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Переменные в медиа-запросах. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<link rel="stylesheet" href="../styles/browserref.css">

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS Использование переменных в медиа-запросах</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_variables_javascript.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_box-sizing.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Как использовать переменные в медиа-запросах</h2>
    <p>Теперь мы хотим изменить значение переменной внутри медиа-запроса.</p>
    <div class="w3-panel w3-note">
        <p><strong>Совет:</strong> Медиа-запросы предназначены для определения разных стилевых правил для разных устройств (экранов мониторов, планшетов, мобильных телефонов и т.д.). Вы можете узнать больше о медиа-запросах в главе <a href="css3_mediaqueries.php">Медиа-запросы</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>

    <p>Здесь мы сначала объявляем новую локальную переменную с именем --fontsize для класса <code class="w3-codespan">.container</code>. Устанавливаем его значение на 25 пикселей. Затем используем его в более низком классе <code class="w3-codespan">.container</code>. Затем создаём правило <code class="w3-codespan">@media</code>, которое гласит: &quot;Когда ширина браузера составляет 450 пикселей или больше, измените значение переменной --fontsize для <code class="w3-codespan">.container</code> до 50 пикселей&quot;.</p>
    <p>Вот полный пример:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Variable declarations */ <br>:root {<br>&nbsp; --blue: #1e90ff;<br>&nbsp; --white: #ffffff; <br>
            }<br><br>
            .container {<br>&nbsp; --fontsize: 25px;<br>}<br><br>/* Стили */<br>body {<br>&nbsp;
            background-color: var(--blue);<br>}<br><br>h2 {<br>&nbsp; border-bottom: 2px solid var(--blue);<br>}<br><br>.container
            {<br>&nbsp; color: var(--blue);<br>&nbsp; background-color: var(--white);<br>&nbsp;
            padding: 15px;<br>&nbsp; font-size: var(--fontsize);<br>}<br><br>@media screen and (min-width:
            450px) {<br>&nbsp; .container {<br>&nbsp;&nbsp;&nbsp; --fontsize: 50px;<br>&nbsp; }<br>}
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_var_mq.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <p>Вот ещё один пример, в котором мы также меняем значение переменной --blue в правиле <code class="w3-codespan">@media</code>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            /* Объявления переменных */ <br>:root {<br>&nbsp; --blue: #1e90ff;<br>&nbsp; --white: #ffffff; <br>
            }<br><br>
            .container {<br>&nbsp; --fontsize: 25px;<br>}<br><br>/* Styles */<br>body {<br>&nbsp;
            background-color: var(--blue);<br>}<br><br>h2 {<br>&nbsp; border-bottom: 2px solid var(--blue);<br>}<br><br>.container
            {<br>&nbsp; color: var(--blue);<br>&nbsp; background-color: var(--white);<br>&nbsp;
            padding: 15px;<br>&nbsp; font-size: var(--fontsize);<br>}<br><br>@media screen and (min-width:
            450px) {<br>&nbsp;
            .container {<br>&nbsp;&nbsp;&nbsp; --fontsize: 50px;<br>&nbsp; }<br>&nbsp;&nbsp;
            :root {<br>&nbsp;&nbsp;&nbsp; --blue: lightblue;<br>&nbsp; }<br>}
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_var_mq2.html">Попробуйте сами &raquo;</a>
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
        <a class="w3-left w3-btn" href="css3_variables_javascript.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_box-sizing.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>