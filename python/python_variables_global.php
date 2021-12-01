<?php include '../include/head.php'; ?>

<title>Python Глобальные переменные. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Python Глобальные переменные - это переменные, которые создаются вне функции. Бесплатный учебник онлайн. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_python.php'; ?>
<?php include '../include/before_content_python.php'; ?>

<article>
    <h1>Python - <span class="color_h1">Глобальные переменные</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="python_variables_output.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="python_variables_exercises.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Глобальные переменные</h2>
    <p>Переменные, которые создаются вне функции (как во всех приведенных выше примерах), называются <strong>глобальными переменными</strong>.</p>
    <p>Глобальные переменные могут использовать все, как внутри функций, так и вне их.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Создайте переменную вне функции и используйте ее внутри функции</p>
        <div class="w3-code notranslate pythonHigh">
            x = &quot;awesome&quot;<br><br>
            def myfunc():<br>&nbsp; print(&quot;Python is &quot; + x)<br><br>myfunc()</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_variables_global.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Если вы создаете переменную с тем же именем внутри функции, эта переменная будет локальной и может использоваться только внутри функции. Глобальная переменная с тем же именем останется прежней, глобальной и с исходным значением.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Создайте переменную внутри функции с тем же именем, что и глобальная переменная</p>
        <div class="w3-code notranslate pythonHigh">
            x = &quot;awesome&quot;<br><br>
            def myfunc():<br>&nbsp; x = &quot;fantastic&quot;<br>&nbsp; print(&quot;Python is &quot; + x)<br><br>myfunc()<br>
            <br>print(&quot;Python is &quot; + x)</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_variables_global2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Ключевое слово global</h2>
    <p>Обычно, когда вы создаете переменную внутри функции, эта переменная является локальной и может использоваться только внутри этой функции.</p>
    <p>Чтобы создать глобальную переменную внутри функции, можно использовать ключевое слово <code class="w3-codespan">global</code>.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Если вы используете ключевое слово <code class="w3-codespan">global</code>, переменная принадлежит глобальной области действия:</p>
        <div class="w3-code notranslate pythonHigh">
            def myfunc():<br>&nbsp; global x<br>&nbsp; x = &quot;fantastic&quot;<br><br>myfunc()<br>
            <br>print(&quot;Python is &quot; + x)</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_variables_global3.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Также используйте ключевое слово <code class="w3-codespan">global</code>, если хотите изменить глобальную переменную внутри функции.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Чтобы изменить значение глобальной переменной внутри функции, обратитесь к переменной с помощью ключевого слова <code class="w3-codespan">global</code>:</p>
        <div class="w3-code notranslate pythonHigh">
            x = &quot;awesome&quot;<br><br>def myfunc():<br>&nbsp; global x<br>&nbsp; x = &quot;fantastic&quot;<br><br>myfunc()<br>
            <br>print(&quot;Python is &quot; + x)</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_variables_global4.html">Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="python_variables_output.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="python_variables_exercises.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>