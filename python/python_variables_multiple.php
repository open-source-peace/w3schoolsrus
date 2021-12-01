<?php include '../include/head.php'; ?>

<title>Python несколько значений переменных. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Python Несколько значений переменных. Присвоений множества значений переменным. Распаковка кортежей. Примеры кода. Учебник онлайн. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_python.php'; ?>
<?php include '../include/before_content_python.php'; ?>

<article>
    <h1>Python переменные - <span class="color_h1">Присвоить несколько значений</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="python_variables_names.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="python_variables_output.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Много значений для нескольких переменных</h2>
    <p>Python позволяет присваивать значения нескольким переменным в одной строке:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate pythonHigh">
            x, y, z = &quot;Orange&quot;, &quot;Banana&quot;, &quot;Cherry&quot;<br>print(x)<br>print(y)<br>print(z)
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_variables8.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Убедитесь, что количество переменных совпадает с количеством значений, иначе вы получите ошибку.</p>
    </div>
    <hr>

    <h2>Одно значение для нескольких переменных</h2>
    <p>Вы можете присвоить <em>одинаковое</em> значение нескольким переменным в одной строке:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate pythonHigh">
            x = y = z = &quot;Orange&quot;<br>print(x)<br>print(y)<br>print(z)
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_variables6.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Распаковать коллекцию</h2>
    <p>Если у вас есть набор значений в виде списка, кортежа и т.д., Python позволяет извлекать значения в переменные. Это называется <em>распаковкой</em>.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Распаковать список:</p>
        <div class="w3-code notranslate pythonHigh">
            fruits = [&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;]<br>
            x, y, z = fruits<br>
            print(x)<br>
            print(y)<br>
            print(z)
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_variables_unpack.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Узнать больше о распаковке вы можете в главе <a href="python_tuples_unpack.php">Распаковка кортежей</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="python_variables_names.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="python_variables_output.php">Next &#10095;</a>
    </div>    
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>