<?php include '../include/head.php'; ?>

<title>Python Вывод переменных. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Python Вывод переменных. Инструкция вывода переменных в Python. Пример кода. Бесплатный учебник онлайн. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_python.php'; ?>
<?php include '../include/before_content_python.php'; ?>

<article>
    <h1>Python - <span class="color_h1">Вывод переменных</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="python_variables_multiple.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="python_variables_global.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Вывод переменных</h2>

    <p>Python инструкция <code class="w3-codespan">print</code> часто используется для вывода переменных.</p>
    <p>Чтобы объединить текст и переменную, Python использует символ <code class="w3-codespan">+</code>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate pythonHigh">
            x = &quot;awesome&quot;<br>print(&quot;Python is &quot; + x)
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_variables3.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Вы также можете использовать символ <code class="w3-codespan">+</code> чтобы добавить переменную к другой переменной:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate pythonHigh">
            x = &quot;Python is &quot;<br>y = &quot;awesome&quot;<br>z =&nbsp; x + y<br>
            print(z)
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_variables4.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Для чисел символ <code class="w3-codespan">+</code> работает как математический оператор:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate pythonHigh">
            x = 5<br>y = 10<br>print(x + y)
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_variables5.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Если вы попытаетесь объединить строку и число, Python выдаст вам ошибку:</p>

    <div class="w3-example w3-pale-red">
        <h3>Пример</h3>
        <div class="w3-code notranslate pythonHigh w3-border-red">
            x = 5<br>y = &quot;John&quot;<br>print(x + y)
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_variables_test.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="python_variables_multiple.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="python_variables_global.php">Next &#10095;</a>
    </div>    
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>