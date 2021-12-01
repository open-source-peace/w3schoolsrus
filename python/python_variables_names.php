<?php include '../include/head.php'; ?>

<title>Python Имена переменных. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Python Имена переменных. Как называть переменные в языке программирования Python? Чувствительность к регистру. Паскаль, верблюжий, змеиный регистры. Примеры кода. Учебник онлайн. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_python.php'; ?>
<?php include '../include/before_content_python.php'; ?>

<article>
    <h1>Python - <span class="color_h1">Имена переменных</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="python_variables.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="python_variables_multiple.php">Next &#10095;</a>
    </div>
    <hr>


    <h2>Именна переменных</h2>
    <p>Переменная может иметь короткое имя (например, x и y) или более информативное имя (age, carname, total_volume).</p>
    <p>Правила для именования переменных Python:</p>
    <ul>
        <li>Имя переменной должно начинаться с буквы или символа подчеркивания</li>
        <li>Имя переменной не может начинаться с цифры</li>
        <li>Имя переменной может содержать только буквенно-цифровые символы и символы подчеркивания (A – z, 0–9 и _)</li>
        <li>Имена переменных чувствительны к регистру (age, Age и AGE - это три разные переменные)</li>
    </ul>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Допустимые имена переменных:</p>
        <div class="w3-code notranslate pythonHigh">
            myvar = &quot;John&quot;<br>my_var = "John"<br>_my_var = "John"<br>myVar = "John"<br>
            MYVAR = "John"<br>myvar2 = "John"</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_variable_names_legal.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example w3-pale-red">
        <h3>Пример</h3>
        <p>Недопустимые имена переменных:</p>
        <div class="w3-code notranslate pythonHigh w3-border-red">
            2myvar = "John"<br>my-var = "John"<br>
            my var = "John"</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_variable_names_error.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Помните, что имена переменных чувствительны к регистру!</p>
    </div>
    <hr>

    <h2>Имена переменных из нескольких слов</h2>
    <p>Имена переменных, содержащие более одного слова, могут быть трудночитаемыми.</p>
    <p>Есть несколько способов сделать их более читабельными:</p>

    <h2>Верблюжий регистр</h2>
    <p>Каждое слово, кроме первого, начинается с заглавной буквы:</p>

    <div class="w3-codeline notranslate pythonHigh">
        myVariableName = "John"
    </div>
    <hr>
    <h2>Регистр Pascal</h2>
    <p>Каждое слово начинается с заглавной буквы:</p>

    <div class="w3-codeline notranslate pythonHigh">
        MyVariableName = "John"
    </div>
    <hr>
    <h2>Змеиный регистр</h2>
    <p>Каждое слово отделяется символом подчеркивания:</p>

    <div class="w3-codeline notranslate pythonHigh">
        my_variable_name = "John"
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="python_variables.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="python_variables_multiple.php">Next &#10095;</a>
    </div>    
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>