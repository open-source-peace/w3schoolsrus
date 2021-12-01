<?php include '../include/head.php'; ?>
<title>PHP Комментарии. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Комментарии. Зачем нужны комментарии? Как пишутся комментарии в PHP? Как создать сайт? Учебник по языку программирования PHP7. Создание сайта с помощью PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Комментарии</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_syntax.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_variables.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>Комментарии в PHP</h2>
    <p><strong>Комментарий в коде PHP</strong> - это строка, которая не выполняется как часть программы. Его единственная цель - быть прочитанным кем-то, кто просматривает код.</p>
    <p>Комментарии могут быть использованы для:</p>
    <ul>
        <li>Чтобы другие поняли ваш код</li>
        <li>Напоминания себе о том, что вы сделали. Большинство программистов через год или два вернулись к своей собственной работе, и им пришлось заново выяснять, что они сделали когда-то. Комментарии могут напомнить вам, о чём вы думали, когда писали код</li>
    </ul>
    <p>PHP поддерживает несколько способов комментирования:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Синтаксис однострочных комментариев:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;!DOCTYPE html&gt;<br>
            &lt;html&gt;<br>
            &lt;body&gt;<br><br>
            &lt;?php<br>
            // Это однострочный комментарий<br><br>
            # Это также однострочный комментарий<br>?&gt;<br><br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_comments.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Синтаксис для многострочных комментариев:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;!DOCTYPE html&gt;<br>
            &lt;html&gt;<br>
            &lt;body&gt;<br><br>
            &lt;?php<br>
            /*<br>
            Это многострочный блок комментариев, охватывающий несколько строк.<br>
            */<br>?&gt;<br><br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_comments2.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Использование комментариев, чтобы пропустить части кода:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;!DOCTYPE html&gt;<br>
            &lt;html&gt;<br>
            &lt;body&gt;<br><br>
            &lt;?php<br>
            // Вы также можете использовать комментарии, чтобы пропустить части строки кода<br>$x = 5 /* + 15 */ + 5;<br>echo $x;<br>?&gt;<br><br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_comments3.html">Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_syntax.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_variables.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>