<?php include '../include/head.php'; ?>
<title>PHP ООП - Конструктор. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP ООП - Конструктор. Функция __construct. Конструктор позволяет инициализировать свойства объекта при создании объекта. Функция construct начинается с двух подчеркиваний (__). Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP ООП<span class="color_h1"> - Конструктор</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_oop_classes_objects.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_oop_destructor.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>PHP - Функция __construct</h2>
    <p><strong>Конструктор</strong> позволяет инициализировать свойства объекта при создании объекта.</p>
    <p>Если вы создадите функцию <code class="w3-codespan">__construct()</code>, то PHP автоматически вызовет эту функцию при создании объекта из класса.</p>
    <p>Обратите внимание, что функция construct начинается с двух подчеркиваний (__)!</p>
    <p>В приведенном ниже примере мы видим, что использование конструктора избавляет нас от вызова метода set_name(), который уменьшает объем кода:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class Fruit {<br>&nbsp; public
            $name;<br>&nbsp; public $color;<br><br>&nbsp;
            function __construct($name) {<br>&nbsp;&nbsp;&nbsp; $this-&gt;name = $name;
            <br>&nbsp; }<br>&nbsp; function get_name() {<br>&nbsp;&nbsp;&nbsp;
            return $this-&gt;name;<br>&nbsp; }<br>}<br><br>$apple = new Fruit(&quot;Apple&quot;);<br>
            echo $apple-&gt;get_name();<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_constructor.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Другой пример:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class Fruit {<br>&nbsp; public
            $name;<br>&nbsp; public $color;<br><br>&nbsp;
            function __construct($name, $color) {<br>&nbsp;&nbsp;&nbsp; $this-&gt;name = $name;
            <br>&nbsp;&nbsp;&nbsp; $this-&gt;color = $color;
            <br>&nbsp; }<br>&nbsp; function get_name() {<br>&nbsp;&nbsp;&nbsp;
            return $this-&gt;name;<br>&nbsp; }<br>&nbsp; function get_color() {<br>&nbsp;&nbsp;&nbsp;
            return $this-&gt;color;<br>&nbsp; }<br>}<br><br>$apple = new Fruit(&quot;Apple&quot;, &quot;red&quot;);<br>echo $apple-&gt;get_name();<br>echo
            &quot;&lt;br&gt;&quot;;<br>echo $apple-&gt;get_color();<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_constructor2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_oop_classes_objects.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_oop_destructor.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>