<?php include '../include/head.php'; ?>
<title>PHP Константы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Константы. Создание, синтаксис, примеры. Что такое константы? Глобальные константы. Массивы констант. Как применяют константы в PHP? Современный учебник по языку PHP. Как создать сайт с помощью PHP? <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Константы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_math.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_operators.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Константы</strong> похожи на переменные, за исключением того, что после их определения они не могут быть изменены или не определены.</p>
    <p>Constant - в пер. с анг. - постоянная (неизменная) величина.</p>
    <hr>

    <h2>PHP Константы</h2>
    <p>Константа - это идентификатор (имя) для простого значения. Значение не может быть изменено во время выполнения скрипта.</p>
    <p>Допустимое имя константы начинается с буквы или подчеркивания (без знака $ перед именем константы).</p>
    <p><strong>Примечание.</strong> В отличие от переменных, константы автоматически становятся глобальными для всего скрипта.</p>
    <hr>

    <h2>Создать PHP константу</h2>
    <p>Чтобы создать константу, используйте функцию <code class="w3-codespan">define()</code>.</p>
    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate">
        <div>
            define(<i>name</i>, <i>value</i>, <i>case-insensitive</i>)
        </div>
    </div>

    <p>Параметры:</p>
    <ul>
        <li><i>name</i>: Определяет имя константы</li>
        <li><i>value</i>: Определяет значение константы</li>
        <li><i>case-insensitive</i>: Указывает, должно ли имя константы учитываться без учета регистра. По умолчанию false</li>
    </ul>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Создайте константу с <strong>регистрозависимым</strong> именем:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            define(&quot;GREETING&quot;, &quot;Welcome to W3Schools!&quot;);<br>echo GREETING;<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_constant1.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Создайте константу с <strong>регистронезависимым</strong> именем:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            define(&quot;GREETING&quot;, &quot;Welcome to W3Schools!&quot;, true);<br>echo greeting;<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_constant2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>PHP Константа Array</h2>
    <p>В PHP7 вы можете создать константу Array, используя функцию <code class="w3-codespan">define()</code>.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Создать константу Array:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            define(&quot;cars&quot;, [<br>&nbsp;&nbsp;&nbsp; &quot;Alfa Romeo&quot;,<br>&nbsp;&nbsp;&nbsp;
            &quot;BMW&quot;,<br>&nbsp;&nbsp;&nbsp; &quot;Toyota&quot;<br>]);<br>echo cars[0];<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_constant_array.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Константы глобальные</h2>
    <p>Константы автоматически становятся глобальными и могут использоваться во всем скрипте.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>В этом примере используется константа внутри функции, даже если она определена вне функции:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>define(&quot;GREETING&quot;, &quot;Welcome to W3Schools!&quot;);<br><br>function myTest() {<br>&nbsp;&nbsp;&nbsp; echo GREETING;<br>}<br>&nbsp;<br>myTest();<br>
            ?&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_constant3.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_math.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_operators.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>