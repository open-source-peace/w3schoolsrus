<?php include '../include/head.php'; ?>
<title>PHP Подключение файлов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Подключение файлов. Операторы include и require. Какие бывают способы подключения файлов в PHP? Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Подключение файлов</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_date.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_file.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Оператор <code class="w3-codespan">include</code> (или <code class="w3-codespan">require</code>) берет весь текст / код / разметку, который существует в указанном файле, и копирует его в файл, который использует оператор <code class="w3-codespan">include</code>.</p>
    <p class="intro">Подключение файлов очень полезно, если вы хотите подключить один и тот же PHP, HTML или текст на нескольких страницах веб-сайта.</p>
    <hr>
    <h2>PHP операторы include и require</h2>
    <p>Можно вставить содержимое одного PHP-файла в другой PHP-файл (до того, как сервер его запустит) с помощью оператора <code class="w3-codespan">include</code> или <code class="w3-codespan">require</code>.</p>
    <p><b>Операторы <code class="w3-codespan">include</code> и <code class="w3-codespan">require</code> идентичны, за исключением случаев отказа:</b></p>
    <ul>
        <li><code class="w3-codespan">require</code> выдаст фатальную ошибку (E_COMPILE_ERROR) и остановит выполнение скрипта</li>
        <li><code class="w3-codespan">include</code> выдаст только предупреждение (E_WARNING) и продолжит выполнение скрипта</li>
    </ul>
    <p>Итак, если вы хотите, чтобы выполнение продолжалось и показывало пользователям вывод, даже если файл включения отсутствует, используйте оператор <code class="w3-codespan">include</code>. В противном случае, в случае FrameWork, CMS или сложной кодировки приложения PHP, всегда используйте оператор <code class="w3-codespan">require</code> для подключения ключевого файла в поток выполнения. Это поможет избежать нарушения безопасности и целостности вашего приложения, просто на случай, если один ключевой файл случайно пропадёт.</p>
    <p>Подключение файлов экономит много работы. Это означает, что вы можете создать стандартный заголовок (header), нижний колонтитул (footer) или файл меню для всех ваших веб-страниц. Затем, когда требуется обновить заголовок, вы можете обновить только файл заголовка. Также и другие идентичные части веб-страницы.</p>

    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate"><div>
            include '<i>имя файла</i>';<br>
            <br>
            или<br>
            <br>
            require '<i>имя файла</i>';</div></div>
    <hr>

    <h2>PHP Примеры include</h2>
    <h3>Пример 1</h3>
    <p>Предположим, у нас есть стандартный файл нижнего колонтитула с именем &quot;footer.php&quot;, который выглядит следующим образом:</p>
    <div class="w3-code w3-border notranslate"><div>
            &lt;?php<br>echo &quot;&lt;p&gt;Copyright &amp;copy; 1999-&quot; . date(&quot;Y&quot;) . &quot; W3Schools&lt;/p&gt;&quot;;<br>?&gt;</div>
    </div>

    <p>Чтобы подключить файл нижнего колонтитула (footer.php) к странице, используйте оператор <code class="w3-codespan">include</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;html&gt;<br>
            &lt;body&gt;<br>
            <br>
            &lt;h1&gt;Welcome to my home page!&lt;/h1&gt;<br>
            &lt;p&gt;Some text.&lt;/p&gt;<br>&lt;p&gt;Some more text.&lt;/p&gt;<br>&lt;?php include 'footer.php';?&gt;<br>
            <br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_include1" rel="nofollow">Выполнить пример &raquo;</a>
    </div>
    <hr>

    <h3>Пример 2</h3>
    <p>Предположим, у нас есть стандартный файл меню с именем &quot;menu.php&quot;:</p>
    <div class="w3-code w3-border notranslate"><div>
            &lt;?php<br>echo '&lt;a href=&quot;/default.asp&quot;&gt;Home&lt;/a&gt; -<br>&lt;a href=&quot;/html/default.asp&quot;&gt;HTML Tutorial&lt;/a&gt; -<br>&lt;a href=&quot;/css/default.asp&quot;&gt;CSS Tutorial&lt;/a&gt; -<br>&lt;a href=&quot;/js/default.asp&quot;&gt;JavaScript Tutorial&lt;/a&gt; -<br>&lt;a href=&quot;default.asp&quot;&gt;PHP Tutorial&lt;/a&gt;';<br>?&gt;</div></div>
    <p>Все страницы на веб-сайте должны использовать этот файл меню. Вот как это можно сделать (мы используем элемент <code class="w3-codespan">&lt;div&gt;</code>, чтобы меню потом можно было легко стилизовать с помощью CSS):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;html&gt;<br>
            &lt;body&gt;<br>
            <br>
            &lt;div class=&quot;menu&quot;&gt;<br>&lt;?php include 'menu.php';?&gt;<br>&lt;/div&gt;<br><br>
            &lt;h1&gt;Welcome to my home page!&lt;/h1&gt;<br>&lt;p&gt;Some text.&lt;/p&gt;<br>&lt;p&gt;Some more text.&lt;/p&gt;<br>
            <br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_include2" rel="nofollow">Выполнить пример &raquo;</a>
    </div>
    <hr>

    <h3>Пример 3</h3>
    <p>Предположим, у нас есть файл с именем &quot;vars.php&quot;, с определенными переменными:</p>
    <div class="w3-code w3-border notranslate"><div>
            &lt;?php<br>
            $color='red';<br>
            $car='BMW';<br>
            ?&gt;</div></div>
    <p>Затем, если мы подключим файл &quot;vars.php&quot;, переменные могут быть использованы в вызывающем файле:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;html&gt;<br>
            &lt;body&gt;<br>
            <br>
            &lt;h1&gt;Welcome to my home page!&lt;/h1&gt;<br>
            &lt;?php include 'vars.php';<br>
            echo &quot;I have a $color $car.&quot;;<br>?&gt;<br>
            <br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_include3" rel="nofollow">Выполнить пример &raquo;</a>
    </div>
    <hr>

    <h2>PHP include и require</h2>
    <p>Оператор <code class="w3-codespan">require</code> также используется для подключения файла в код PHP.</p>
    <p>Тем не менее, есть одно большое различие между <strong>include</strong> и <strong>require</strong>; если файл подключен с помощью оператора <code class="w3-codespan">include</code> и PHP не сможет его найти, скрипт продолжит выполняться:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;html&gt;<br>
            &lt;body&gt;<br>
            <br>
            &lt;h1&gt;Welcome to my home page!&lt;/h1&gt;<br>
            &lt;?php include 'noFileExists.php';<br>
            echo &quot;I have a $color $car.&quot;;<br>?&gt;<br>
            <br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_include4" rel="nofollow">Выполнить пример &raquo;</a>
    </div>

    <p>Если мы сделаем тот же пример, используя оператор <code class="w3-codespan">require</code>, оператор <code class="w3-codespan">echo</code> не будет выполнен, поскольку выполнение скрипта прекращается после того, как оператор <code class="w3-codespan">require</code> вернул фатальную ошибку (fatal error):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;html&gt;<br>
            &lt;body&gt;<br>
            <br>
            &lt;h1&gt;Welcome to my home page!&lt;/h1&gt;<br>
            &lt;?php require 'noFileExists.php';<br>
            echo &quot;I have a $color $car.&quot;;<br>?&gt;<br>
            <br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_include5" rel="nofollow">Выполнить пример &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Используйте <code class="w3-codespan">require</code> когда файл требуется приложением.</p>
        <p>Используйте <code class="w3-codespan">include</code> когда файл не требуется, и приложение должно продолжаться, если файл не найден.</p>
    </div>
    <hr>

    <h2>PHP Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/php/exercise.asp?filename=exercise_advanced1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Напишите правильный синтаксис для подключения файла с именем "footer.php".</p>
            <div class="exerciseprecontainer">
<pre>
&lt;?php <input name="ex1" maxlength="20" style="width: 212px;">;?&gt;
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_date.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_file.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>