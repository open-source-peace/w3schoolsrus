<?php include '../include/head.php'; ?>
<title>PHP Математика. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Математика. Математические функции в PHP. Современный учебник по языку PHP. Как создать сайт с помощью PHP? <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP Математика</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_numbers.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_constants.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">В PHP есть набор математических функций, которые позволяют выполнять математические задачи с числами.</p>
    <hr>

    <h2>PHP функция pi()</h2>
    <p>Функция <code class="w3-codespan">pi()</code> возвращает значение ПИ:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>echo(pi()); // вернёт 3.1415926535898<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_math_pi.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>PHP функции min() и max()</h2>
    <p>Функции <code class="w3-codespan">min()</code> и <code class="w3-codespan">max()</code> могут использоваться для поиска наименьшего или наибольшего значения в списке аргументов:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>echo(min(0, 150, 30, 20, -8, -200));&nbsp; // вернёт -200<br>echo(max(0,
            150, 30, 20, -8, -200));&nbsp; // вернёт 150<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_math_min_max.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>PHP функция abs()</h2>
    <p>Функция <code class="w3-codespan">abs()</code> функция возвращает абсолютное (положительное) значение числа:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>echo(abs(-6.7));&nbsp; // вернёт 6.7<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_math_abs.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>PHP функция sqrt()</h2>
    <p>Функция <code class="w3-codespan">sqrt()</code> возвращает квадратный корень числа:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>echo(sqrt(64));&nbsp; // вернёт 8<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_math_sqrt.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>PHP функция round()</h2>
    <p>Функция <code class="w3-codespan">round()</code> округляет число с плавающей запятой до ближайшего целого числа:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>echo(round(0.60));&nbsp; // вернёт 1<br>echo(round(0.49));&nbsp;
            // вернёт 0<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_math_round.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Random (случайные) числа</h2>
    <p>Функция <code class="w3-codespan">rand()</code> генерирует случайное число:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>echo(rand());<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_math_rand.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Чтобы получить больший контроль над случайным числом, вы можете добавить необязательные параметры <em>min</em> и <em>max</em>, чтобы указать наименьшее целое число и наибольшее целое число, которые должны быть возвращены.</p>
    <p>Например, если вам нужно случайное целое число от 10 до 100 (включительно), используйте <code class="w3-codespan">rand(10, 100)</code>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>echo(rand(10, 100));<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_math_rand2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Полный справочник PHP Математика</h2>
    <p>Полный справочник по всем математическим функциям смотрите в <a href="php_ref_math.php">PHP Справочнике по математике</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <p>PHP Справочник по математике содержит описание и пример использования для каждой математической функции.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_numbers.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_constants.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>