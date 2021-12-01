<?php include '../include/head.php'; ?>

<title>Python Комментарии. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Python Комментарии. Как писать комментарии в Python? Бесплатные курсы онлайн по Питону. Примеры кода. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_python.php'; ?>
<?php include '../include/before_content_python.php'; ?>

<article>
    <h1>Python <span class="color_h1">Комментарии</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="python_syntax.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="python_variables.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>Зачем нужны комментарии в коде Python?</h2>
    <p class="intro"><strong>Комментарии</strong> могут быть использованы для объяснения кода <strong>Python</strong>.</p>
    <p class="intro"><strong>Комментарии</strong> могут быть использованы, чтобы сделать код более читабельным людьми, которые просматривают код.</p>
    <p class="intro"><strong>Комментарии</strong> могут быть использованы для предотвращения выполнения при тестировании кода (для временного закомментирования и отладки кода).</p>
    <hr>
    <h2>Создание комментария в Python</h2>
    <p>Комментарии начинаются из символа <code class="w3-codespan">#</code> и Python их игнорирует:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate pythonHigh">
            #Это комментарий<br>
            print("Hello, World!")
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_comment1.html">Запустить пример &raquo;</a>
    </div>

    <p>Комментарии могут быть размещены в конце строки, и Python будет игнорировать остальную часть строки:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate pythonHigh">
            print("Hello, World!") #Это комментарий
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_comment2.html">Запустить пример &raquo;</a>
    </div>

    <p>Комментарии не обязательно должны быть текстом для объяснения кода, их также можно использовать для предотвращения выполнения Python кода (закомментирования части кода):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate pythonHigh">
            #print(&quot;Hello, World!&quot;)<br>print(&quot;Cheers, Mate!&quot;)</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_comment3.html">Запустить пример &raquo;</a>
    </div>
    <hr>

    <h2>Многострочные комментарии</h2>
    <p>Python на самом деле не имеет синтаксиса для многострочных комментариев.</p>
    <p>Чтобы добавить многострочный комментарий, вы можете вставить символ <code class="w3-codespan">#</code> для каждой строки:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate pythonHigh">
            #Это комментарий<br>#написанный в<br>#более чем одну строку <br>print(&quot;Hello, World!&quot;)
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_comment4.html">Запустить пример &raquo;</a>
    </div>

    <p>Или, не совсем так, как предполагалось, вы можете использовать многострочную строку.</p>
    <p>Поскольку Python будет игнорировать строковые литералы, которые не назначены переменной, вы можете добавить многострочную строку (тройные кавычки) в свой код и поместить в нее свой комментарий:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate pythonHigh">
            &quot;&quot;&quot;<br>Этот комментарий<br>написан в <br>более чем одну строку<br>&quot;&quot;&quot;<br>print(&quot;Hello, World!&quot;)</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_comment5.html">Запустить пример &raquo;</a>
    </div>
    <p>Пока строка не назначена переменной, Python будет читать код, но затем игнорировать его, если вы сделали многострочный комментарий.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="python_syntax.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="python_variables.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>