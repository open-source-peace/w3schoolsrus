<?php include '../include/head.php'; ?>

<title>Python Переменные. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Python Переменные. Создание переменных в языке программирования Python. Какие бывают переменные? Имена переменных. Чувствительность к регистру. Примеры кода. Учебник онлайн. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_python.php'; ?>
<?php include '../include/before_content_python.php'; ?>

<article>
    <h1>Python <span class="color_h1">Переменные</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="python_comments.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="python_variables_names.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Переменные</h2>
    <p><strong>Переменные</strong> - это контейнеры для хранения значений данных.</p>
    <hr>
    <h2>Создание переменных</h2>
    <p>В Python нет команды для объявления переменной.</p>
    <p>Переменная создается в тот момент, когда вы впервые присваиваете ей значение.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate pythonHigh">
            x = 5<br>
            y = "John"<br>
            print(x)<br>
            print(y)
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_variables1.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Переменные не нужно объявлять с каким-либо конкретным <em>типом</em>, и они даже могут изменить тип после того, как они были установлены.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate pythonHigh">
            x = 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; # x это тип int<br>
            x = "Sally" # x теперь тип str<br>
            print(x)
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_variables2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Кастинг</h2>
    <p>Если вы хотите указать тип данных переменной, это можно сделать с помощью кастинга (т.е. приведения к определённому типу).</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate pythonHigh">
            x =
            str(3)&nbsp;&nbsp;&nbsp; # x будет '3'<br>y = int(3)&nbsp;&nbsp;&nbsp; # y
            будет 3<br>z = float(3)&nbsp; # z будет 3.0</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_variables_casting.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Получить тип</h2>
    <p>Вы можете получить тип данных переменной с помощью функции <code class="w3-codespan">type()</code>.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate pythonHigh">
            x = 5<br>y = &quot;John&quot;<br>print(type(x))<br>print(type(y))</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_variables_type.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-note w3-panel">Вы узнаете больше о <a href="python_datatypes.php">типах данных</a> и <a href="python_casting.php">кастинге</a> позже в этом учебнике на нашем сайте <?php include '../include/w3schools.php'; ?>.</div>
    <hr>

    <h2>Одиночные или двойные кавычки?</h2>
    <p>Строковые переменные могут быть объявлены с использованием одинарных или двойных кавычек:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate pythonHigh">
            x = &quot;John&quot;<br># то же самое, что и <br>x =
            'John'
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_variables7.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Чувствительность к регистру</h2>
    <p>Имена переменных чувствительны к регистру.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Это создаст две разные переменные:</p>
        <div class="w3-code notranslate pythonHigh">
            a = 4<br>A =
            &quot;Sally&quot;<br>#A не будет перезаписывать a</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_variables_cs.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="python_comments.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="python_variables_names.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>