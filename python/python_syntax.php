<?php include '../include/head.php'; ?>

<title>Python Синтаксис. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Python Синтаксис. Как писать код на Python? Бесплатные курсы онлайн по Питону. Примеры кода. <?php include '../include/description.php'; ?>'>
<style>
        a[id] {position:relative;top:-50px;}
        .w3-example {overflow:hidden;}
        .pagemenu{float:right;margin-left:20px;padding:20px;background-color:#f1f1f1;font-size:90%;line-height:2.8em;color:#555;}
        .pagemenu a {display:block;text-decoration:none!important;}
        .pagemenu a:hover {color:#000;}
        .pagemenu h2 {margin-top:1px;color:#999;font-size:20px;}
        .pagemenu hr {border-top: 1px solid #ccc;margin: 8px 0;}
        @media only screen and (max-width: 700px) {.pagemenu {display:none;}}
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_python.php'; ?>
<?php include '../include/before_content_python.php'; ?>

<article>
    <h1>Python <span class="color_h1">Синтаксис</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="python_getstarted.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="python_comments.php">Next &#10095;</a>
    </div>
    <hr>

    <div style="position:relative">
        <div class="pagemenu">
            <h2>На этой странице</h2>
            <hr>
            <a href="#execute_python_syntax">Python Выполнение синтаксиса</a>
            <a href="#python_indentation">Python Отступ</a>
            <a href="#python_variables">Python Переменные</a>
            <a href="#python_comments">Python Комментарии</a>
            <a href="#exercises">Упражнения</a>
        </div>

        <a id="execute_python_syntax"></a>
        <h2>Python Выполнение синтаксиса</h2>
        <p>Как мы узнали на предыдущем уроке, синтаксис <strong>Python</strong> можно выполнить, написав непосредственно в командной строке:</p>

        <div class="w3-example">
            <div class="w3-code notranslate w3-black">
                &gt;&gt;&gt; print("Hello, World!")<br>
                Hello, World!
            </div>
        </div>

        <p>Или создав файл python на сервере, используя расширение .py, и запустив его в командной строке:</p>

        <div class="w3-example">
            <div class="w3-code notranslate w3-black">
                C:\Users\<em>Your Name</em>&gt;python myfile.py
            </div>
        </div>
    </div>
    <hr>

    <a id="python_indentation"></a>
    <h2>Python Отступ</h2>

    <p>Отступы относятся к пробелам в начале строки кода.</p>
    <p>Если в других языках программирования отступ в коде предназначен только для удобства чтения, отступ в <strong>Python</strong> очень важен.</p>
    <p>Python использует отступ для обозначения блока кода.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate pythonHigh">
            if 5 &gt; 2:<br>&nbsp;
            print("Пять больше чем два!")
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_indentation.html">Запустить пример &raquo;</a>
    </div>

    <p><strong>Python</strong> выдаст вам ошибку, если вы пропустите отступ:</p>

    <div class="w3-example w3-pale-red">
        <h3>Пример</h3>
        <p>Синтаксическая ошибка:</p>
        <div class="w3-code notranslate pythonHigh">
            if 5 &gt; 2:<br>
            print("Пять больше чем два!")
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_indentation_test.html">Запустить пример &raquo;</a>
    </div>

    <p>Количество пробелов зависит от вас, как от программиста, но оно должно быть не меньше одного.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate pythonHigh">
            if 5 &gt; 2:<br>&nbsp;print("Пять больше чем два!")&nbsp;
            <br>if 5 &gt; 2:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; print("Пять больше чем два!")&nbsp;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_indentation2.html">Запустить пример &raquo;</a>
    </div>

    <p>Вы должны использовать одинаковое количество пробелов в одном и том же блоке кода, иначе <strong>Python</strong> выдаст вам ошибку:</p>

    <div class="w3-example w3-pale-red">
        <h3>Пример</h3>
        <p>Синтаксическая ошибка:</p>
        <div class="w3-code notranslate pythonHigh">
            if 5 &gt; 2:<br>
            &nbsp;print("Пять больше чем два!")
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; print(&quot;Пять больше чем два!&quot;)</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_indentation2_error.html">Запустить пример &raquo;</a>
    </div>
    <hr>

    <a id="python_variables"></a>
    <h2>Python Переменные</h2>

    <p>В <strong>Python</strong> переменные создаются в тот момент, когда вы присваиваете ей значение:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Переменные в Python:</p>
        <div class="w3-code notranslate pythonHigh">
            x = 5<br>y = &quot;Hello, World!&quot;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_syntax_variables.html">Запустить пример &raquo;</a>
    </div>

    <p>Python не имеет команды для объявления переменной.</p>
    <p>Подробнее о переменных вы узнаете в главе <a href="python_variables.php">Python Переменные</a>.</p>
    <hr>

    <a id="python_comments"></a>
    <h2>Комментарии</h2>
    <p><strong>Python</strong> имеет возможность комментирования с целью пояснения кода.</p>
    <p>Комментарии начинаются со знака решётки #, а Python отображает оставшуюся часть строки как комментарий:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Комментарии в Python:</p>
        <div class="w3-code notranslate pythonHigh">
            #Это комментарий<br>
            print("Hello, World!")
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../pythontryit/demo_comment.html">Запустить пример &raquo;</a>
    </div>

    <a id="exercises"></a>
    <hr>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/python/exercise.asp?filename=exercise_syntax1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Вставьте недостающую часть кода ниже для вывода "Hello World".</p>
            <div class="exerciseprecontainer">
<pre>
<input name="ex1" maxlength="5" style="width: 58px;">("Hello World")
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="python_getstarted.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="python_comments.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>