<?php include '../include/head.php'; ?>
<title>PHP Инструкции Echo и Print. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Инструкции Echo и Print. Вывод на экран. Современный учебник по языку PHP. Создание сайта с помощью PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Инструкции echo и print</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_variables_scope.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_datatypes.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">В PHP есть два основных способа получить вывод: <code class="w3-codespan">echo</code> и <code class="w3-codespan">print</code>.</p>
    <p class="intro">В этом учебнике используются <code class="w3-codespan">echo</code> или <code class="w3-codespan">print</code> почти в каждом примере. Т.о., эта глава содержит немного больше информации об этих двух инструкциях вывода.</p>
    <hr>

    <h2>PHP Инструкции echo и print</h2>
    <p>Инструкции <code class="w3-codespan">echo</code> и <code class="w3-codespan">print</code> почти одинаковы. Обе они используются для вывода данных на экран. </p>
    <p>Но есть небольшие отличия: <code class="w3-codespan">echo</code> не имеет возвращаемого значения, а <code class="w3-codespan">print</code> имеет возвращаемое значение 1, поэтому его можно использовать в выражениях. <code class="w3-codespan">echo</code> может принимать несколько параметров (хотя такое использование редко), а <code class="w3-codespan">print</code> может принимать один аргумент. <code class="w3-codespan">echo</code> немного быстрее, чем <code class="w3-codespan">print</code>.</p>
    <hr>

    <h2>PHP инструкция echo</h2>
    <p>Инструкция <code class="w3-codespan">echo</code> может использоваться со скобками или без них:
        <code class="w3-codespan">echo</code> или <code class="w3-codespan">echo()</code>.</p>
    <p><strong>Отображение текста</strong></p>
    <p>В следующем примере показано, как вывести текст с помощью команды <code class="w3-codespan">echo</code> (обратите внимание, что текст может содержать HTML разметку):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            echo &quot;&lt;h2&gt;PHP - это легко!&lt;/h2&gt;&quot;;<br>
            echo &quot;Hello world!&lt;br&gt;&quot;;<br>echo &quot;Я собираюсь изучить PHP!&lt;br&gt;&quot;;<br>
            echo &quot;Эта &quot;, &quot;строка &quot;, &quot;была &quot;, &quot;сделана &quot;, &quot;с несколькими параметрами.&quot;;<br>
            ?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_echo1.html">Попробуйте сами &raquo;</a>
    </div>
    <p><strong>Отображение переменных</strong></p>
    <p>В следующем примере показано, как выводить текст и переменные с помощью инструкции <code class="w3-codespan">echo</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$txt1 = &quot;Изучение PHP&quot;;<br>$txt2 = &quot;W3Schools&quot;;<br>
            $x = 5;<br>$y = 4;<br>
            <br>echo &quot;&lt;h2&gt;&quot; . $txt1 . &quot;&lt;/h2&gt;&quot;;<br>echo &quot;Выучите PHP на
            &quot; . $txt2 . &quot;&lt;br&gt;&quot;;<br>echo $x + $y;<br>?&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_echo2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>PHP Инструкция print</h2>
    <p>Инструкция <code class="w3-codespan">print</code> может использоваться со скобками или без них:
        <code class="w3-codespan">print</code> или <code class="w3-codespan">print()</code>.</p>
    <p><strong>Отображение текста</strong></p>
    <p>В следующем примере показано, как вывести текст с помощью команды <code class="w3-codespan">print</code> (обратите внимание, что текст может содержать HTML разметку):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            print &quot;&lt;h2&gt;PHP - это легко!&lt;/h2&gt;&quot;;<br>
            print &quot;Hello world!&lt;br&gt;&quot;;<br>print &quot;Я собираюсь изучить PHP!&quot;;<br>
            ?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_print1.html">Попробуйте сами &raquo;</a>
    </div>
    <p><strong>Отображение переменных</strong></p>
    <p>В следующем примере показано, как вывести текст и переменные с помощью инструкции <code class="w3-codespan">print</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$txt1 = &quot;Learn PHP&quot;;<br>$txt2 = &quot;W3Schools&quot;;<br>
            $x = 5;<br>$y = 4;<br>
            <br>print &quot;&lt;h2&gt;&quot; . $txt1 . &quot;&lt;/h2&gt;&quot;;<br>
            print &quot;Выучите PHP на &quot; . $txt2 . &quot;&lt;br&gt;&quot;;<br>print $x + $y;<br>?&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_print2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_variables_scope.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_datatypes.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>