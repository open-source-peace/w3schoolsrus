<?php include '../include/head.php'; ?>
<title>PHP ООП - Деструктор. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP ООП - Деструктор. Функция __destruct. Деструктор вызывается, когда объект разрушен или скрипт остановлен или завершен. Если вы создадите функцию __destruct(), то PHP автоматически вызовет эту функцию в конце скрипта. Функция destruct начинается с двух подчеркиваний (__). Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP ООП<span class="color_h1"> - Деструктор</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_oop_constructor.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_oop_access_modifiers.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>PHP - Функция __destruct</h2>
    <p><strong>Деструктор</strong> вызывается, когда объект разрушен или скрипт остановлен или завершен.</p>
    <p>Если вы создадите функцию <code class="w3-codespan">__destruct()</code>, то PHP автоматически вызовет эту функцию в конце скрипта.</p>
    <p>Обратите внимание, что функция destruct начинается с двух подчеркиваний (__)!</p>
    <p>В приведенном ниже примере есть функция <code class="w3-codespan">__construct()</code>, которая автоматически вызывается при создании объекта из класса, и функция <code class="w3-codespan">__destruct()</code>, которая автоматически вызывается в конце скрипта:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class Fruit {<br>&nbsp; public
            $name;<br>&nbsp; public $color;<br><br>&nbsp;
            function __construct($name) {<br>&nbsp;&nbsp;&nbsp; $this-&gt;name = $name;
            <br>&nbsp; }<br>&nbsp;
            function __destruct() {<br>&nbsp;&nbsp;&nbsp; echo &quot;The fruit is {$this-&gt;name}.&quot;;
            <br>&nbsp; }<br>}<br><br>$apple = new Fruit(&quot;Apple&quot;);<br>
            ?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_destructor.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Другой пример:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class Fruit {<br>&nbsp; public
            $name;<br>&nbsp; public $color;<br><br>&nbsp;
            function __construct($name, $color) {<br>&nbsp;&nbsp;&nbsp; $this-&gt;name = $name;
            <br>&nbsp;&nbsp;&nbsp; $this-&gt;color = $color;
            <br>&nbsp; }<br>&nbsp;
            function __destruct() {<br>&nbsp;&nbsp;&nbsp; echo &quot;The fruit is {$this-&gt;name}
            and the color is {$this-&gt;color}.&quot;;
            <br>&nbsp; }<br>}<br><br>$apple = new Fruit(&quot;Apple&quot;, &quot;red&quot;);<br>
            ?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_destructor2.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Поскольку конструкторы и деструкторы помогают сократить объем кода, они очень полезны!</p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_oop_constructor.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_oop_access_modifiers.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>