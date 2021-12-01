<?php include '../include/head.php'; ?>
<title>PHP Статические свойства. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Статические свойства могут быть вызваны напрямую - без создания экземпляра класса, объявляются с помощью ключевого слова static. Для доступа к статическому свойству используйте имя класса, двойное двоеточие (::) и имя свойства. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">ООП - Статические свойства</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_oop_static_methods.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_namespaces.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>PHP - Статические свойства</h2>
    <p>Статические свойства могут быть вызваны напрямую - без создания экземпляра класса.</p>
    <p>Статические свойства объявляются с помощью ключевого слова <code class="w3-codespan">static</code>:</p>

    <div class="w3-example">
        <h3>Синтаксис</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            class ClassName {<br>&nbsp; public static $staticProp = &quot;W3Schools&quot;;<br>}<br>?&gt;
        </div>
    </div>

    <p>Для доступа к статическому свойству используйте имя класса, двойное двоеточие (::) и имя свойства:</p>

    <div class="w3-example">
        <h3>Синтаксис</h3>
        <div class="w3-code htmlHigh notranslate">
            ClassName::staticProp();</div>
    </div>

    <p>Давайте посмотрим на пример:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class
            pi {<br>&nbsp; public static $value = 3.14159;<br>}<br>
            <br>// Получить статическое свойство<br>
            echo pi::$value;<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_static_prop.html">Попробуйте сами &raquo;</a>
    </div>
    <h3>Объяснение примера</h3>
    <p>Здесь мы объявляем статическое свойство: $value. Затем мы отображаем значение статического свойства, используя имя класса, двойное двоеточие (::) и имя свойства (без предварительного создания класса).</p>
    <hr>

    <h2>PHP - Подробнее о статических свойствах</h2>
    <p>Класс может иметь как статические, так и нестатические свойства. Доступ к статическому свойству можно получить из метода того же класса, используя ключевое слово <code class="w3-codespan">self</code> и двойное двоеточие (::):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class
            pi {<br>&nbsp; public static $value=3.14159;<br>&nbsp; public function
            staticValue() {<br>&nbsp;&nbsp;&nbsp; return self::$value;<br>&nbsp; }<br>}<br>
            <br>$pi = new pi();<br>echo $pi-&gt;staticValue(); <br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_static_prop2.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Чтобы вызвать статическое свойство из дочернего класса, используйте ключевое слово <code class="w3-codespan">parent</code> внутри дочернего класса:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class
            pi {<br>&nbsp; public static $value=3.14159;<br>}<br>
            <br>class x extends pi {<br>&nbsp;
            public function xStatic() {<br>&nbsp;&nbsp;&nbsp; return
            parent::$value;<br>&nbsp; } <br>}<br><br>// Получить значение статического свойства напрямую через дочерний класс<br>
            echo x::$value;<br><br>// или получить значение статического свойства с помощью метода xStatic()<br>$x = new x();<br>echo $x-&gt;xStatic(); <br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_static_prop3.html">Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_oop_static_methods.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_namespaces.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>