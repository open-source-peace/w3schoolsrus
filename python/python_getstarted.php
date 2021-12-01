<?php include '../include/head.php'; ?>

<title>Python Установка. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Python Установка. Как установить Python? Бесплатные курсы онлайн. Примеры кода. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_python.php'; ?>
<?php include '../include/before_content_python.php'; ?>

<article>
    <h1>Python <span class="color_h1">Установка</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="python_intro.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="python_syntax.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Python Установка</h2>

    <p>На многих ПК и Mac уже установлен <strong>Python</strong>.</p>
    <p>Чтобы проверить, установлен ли <strong>Python</strong> на ПК с Windows, найдите в меню &quot;Пуск&quot; Python или выполните следующую команду в командной строке (cmd.exe):</p>

    <div class="w3-example">
        <div class="w3-code notranslate w3-black">
            C:\Users\<em>Your Name</em>&gt;python --version
        </div>
    </div>

    <p>Чтобы проверить, установлен ли <strong>Python</strong> на Linux или Mac, в Linux откройте командную строку или на Mac откройте терминал и введите:</p>

    <div class="w3-example">
        <div class="w3-code notranslate w3-black">
            python --version
        </div>
    </div>

    <p>Если вы обнаружите, что на вашем компьютере не установлен <strong>Python</strong>, вы можете бесплатно загрузить его с официального веб-сайта: <a href="https://www.python.org/" target="_blank" rel="nofollow">www.python.org</a></p>
    <hr>

    <h2>Python Быстрый старт</h2>
    <p><strong>Python</strong> - это интерпретируемый язык программирования - это означает, что вы, как разработчик, пишете файлы Python (с расширением .py) в текстовом редакторе, а затем помещаете эти файлы в интерпретатор Python для выполнения.</p>
    <p>Способ запуска файла Python в командной строке выглядит следующим образом:</p>

    <div class="w3-example">
        <div class="w3-code notranslate w3-black">
            C:\Users\<em>Your Name</em>&gt;python helloworld.py
        </div>
    </div>

    <p>где "helloworld.py" это имя вашего python-файла.</p>

    <p>Давайте напишем наш первый файл Python, называемый helloworld.py, который можно создать в любом текстовом редакторе.</p>

    <div class="w3-example">
        <p>helloworld.py</p>
        <div class="w3-code notranslate pythonHigh">
            print("Hello, World!")
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_helloworld.html">Запустить пример &raquo;</a>
    </div>

    <p>Просто и понятно. Сохраните ваш файл. Откройте командную строку, перейдите в каталог, в котором вы сохранили файл, и запустите:</p>

    <div class="w3-example">
        <div class="w3-code notranslate w3-black">
            C:\Users\<em>Your Name</em>&gt;python helloworld.py
        </div>
    </div>

    <p>Результат будет выведен:</p>
    <div class="w3-example">
        <div class="w3-code notranslate w3-black">
            Hello, World!
        </div>
    </div>

    <p>Поздравляем, вы написали и выполнили свою первую программу на <strong>Python</strong>.</p>
    <hr>

    <h2>Командная строка Python</h2>
    <p>Для тестирования небольшого количества кода в Python иногда проще и быстрее не писать код в файл. Это стало возможным, потому что Python может быть запущен как сама командная строка.</p>
    <p>Введите следующее в командной строке Windows, Mac или Linux:</p>

    <div class="w3-example">
        <div class="w3-code notranslate w3-black">
            C:\Users\<em>Your Name</em>&gt;python
        </div>
    </div>

    Или, если команда "python" не сработала, вы можете попробовать "py":

    <div class="w3-example">
        <div class="w3-code notranslate w3-black">
            C:\Users\<em>Your Name</em>&gt;py
        </div>
    </div>

    <p>Оттуда вы можете написать любой код Python, в том числе <em>Hello World</em> из предыдущего примера в учебнике:</p>

    <div class="w3-example">
        <div class="w3-code notranslate w3-black">
<span style="opacity:0.5">C:\Users\<em>Your Name</em>&gt;python<br>
Python 3.7.4 (tags/v3.7.4:e09359112e, Jul 8 2019, 19:29:22) [MSC v.1916 32 bit (Intel)] on win32<br>
Type "help", "copyright", "credits" or "license" for more information.</span><br>
            &gt;&gt;&gt; print("Hello, World!")
        </div>
    </div>
    <p>Который напишет &quot;Hello, World!&quot; в командной строке:</p>

    <div class="w3-example">
        <div class="w3-code notranslate w3-black">
<span style="opacity:0.5">C:\Users\<em>Your Name</em>&gt;python<br>
Python 3.7.4 (tags/v3.7.4:e09359112e, Jul 8 2019, 19:29:22) [MSC v.1916 32 bit (Intel)] on win32<br>
Type "help", "copyright", "credits" or "license" for more information.<br>
&gt;&gt;&gt; print("Hello, World!")</span><br>
            Hello, World!
        </div>
    </div>

    <p>Каждый раз, когда вы закончиваете работу в командной строке Python, вы можете просто набрать следующую команду, чтобы выйти из интерфейса командной строки Python:</p>

    <div class="w3-example">
        <div class="w3-code notranslate w3-black">
            exit()
        </div>
    </div>
    <p>В следующем уроке вы узнаете о синтаксисе языка <strong>Python</strong>.</p>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="python_intro.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="python_syntax.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>