<?php include '../include/head.php'; ?>

<title>CSS Переменные и JavaScript. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Переменные и JavaScript. Изменение переменных с помощью JavaScript. Как изменить переменные? CSS функция var(). Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<link rel="stylesheet" href="../styles/browserref.css">

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS Изменение переменных с помощью JavaScript</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_variables_overriding.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_variables_mediaqueries.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Изменить переменные с помощью JavaScript</h2>
    <p>Переменные CSS имеют доступ к DOM, что означает, что вы можете изменять их с помощью JavaScript.</p>
    <p>Вот пример того, как вы можете создать скрипт для отображения и изменения переменной --blue из примера, использованного на предыдущих страницах. Пока не беспокойтесь, если вы не знакомы с JavaScript. Вы можете узнать больше о JavaScript в <a href="../js/index.php">JavaScript Учебнике</a> на нашем сайте <?php include '../include/w3schools.php'; ?>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;script&gt;<br>// Получить корневой элемент<br>var r = document.querySelector(':root');<br>
            <br>// Создать функцию для получения значения переменной<br>function myFunction_get() {<br>&nbsp; // Получить стили (свойства и значения) для root<br>&nbsp; var rs = getComputedStyle(r);<br>&nbsp; // Оповещение значения переменной --blue<br>&nbsp; alert(&quot;The value of --blue is: &quot; + rs.getPropertyValue('--blue'));<br>}<br><br>// Создать функцию для установки значения переменной<br>function myFunction_set() {<br>&nbsp; // Установите значение переменной --blue на другое значение (в данном случае &quot;lightblue&quot;)<br>&nbsp;
            r.style.setProperty('--blue', 'lightblue');<br>}<br>&lt;/script&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_var_js.html">Попробуйте сами &raquo;</a>
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
        <a class="w3-left w3-btn" href="css3_variables_overriding.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_variables_mediaqueries.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>