<?php include '../include/head.php'; ?>
<title>PHP Статические методы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Статические методы могут быть вызваны напрямую без создания экземпляра класса. Объявляются с помощью ключевого слова static. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP ООП<span class="color_h1"> - Статические методы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_oop_traits.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_oop_static_properties.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>PHP - Статические методы</h2>
    <p><strong>Статические методы</strong> могут быть вызваны напрямую - без создания экземпляра класса.</p>
    <p><strong>Статические методы</strong> объявляются с помощью ключевого слова <code class="w3-codespan">static</code>:</p>

    <div class="w3-example">
        <h3>Синтаксис</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            class ClassName {<br>&nbsp; public static function staticMethod() {<br>&nbsp;&nbsp;&nbsp;
            echo &quot;Hello World!&quot;;<br>&nbsp; }<br>}<br>?&gt;
        </div>
    </div>

    <p>Для доступа к статическому методу используйте имя класса, двойное двоеточие (::), и имя метода:</p>

    <div class="w3-example">
        <h3>Синтаксис</h3>
        <div class="w3-code htmlHigh notranslate">
            ClassName::staticMethod();</div>
    </div>

    <p>Давайте посмотрим на пример:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class
            greeting {<br>&nbsp; public static function
            welcome() {<br>&nbsp;&nbsp;&nbsp; echo &quot;Hello World!&quot;;<br>&nbsp; }<br>}<br>
            <br>// Вызов статического метода<br>
            greeting::welcome();<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_static_method.html">Попробуйте сами &raquo;</a>
    </div>
    <h3>Объяснение примера</h3>
    <p>Здесь мы объявляем статический метод: welcome(). Затем мы вызываем статический метод, используя имя класса, двойное двоеточие (::) и имя метода (без предварительного создания класса).</p>
    <hr>

    <h2>PHP - Подробнее о статических методах</h2>
    <p>Класс может иметь как статические, так и нестатические методы. Доступ к статическому методу можно получить из метода того же класса, используя ключевое слово <code class="w3-codespan">self</code> и двойное двоеточие (::):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class greeting {<br>&nbsp; public static function welcome() {<br>&nbsp;&nbsp;&nbsp;
            echo &quot;Hello World!&quot;;<br>&nbsp; }<br><br>&nbsp; public function __construct()
            {<br>&nbsp;&nbsp;&nbsp; self::welcome();<br>&nbsp; }<br>}<br><br>new
            greeting();<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_static_method2.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Статические методы также можно вызывать из методов других классов. Для этого статический метод должен быть <code class="w3-codespan">public</code> (публичный):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class
            greeting {<br>&nbsp; public static function
            welcome() {<br>&nbsp;&nbsp;&nbsp; echo &quot;Hello World!&quot;;<br>&nbsp; }<br>}<br>
            <br>class
            SomeOtherClass {<br>&nbsp; public function
            message() {<br>&nbsp;&nbsp;&nbsp;
            greeting::welcome();<br>&nbsp; }<br>}<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_static_method3.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Чтобы вызвать статический метод из дочернего класса, используйте ключевое слово <code class="w3-codespan">parent</code> внутри дочернего класса. Здесь статический метод может быть <code class="w3-codespan">public</code>
        или <code class="w3-codespan">protected</code> (публичный или защищенный).</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class domain {<br>&nbsp; protected static function
            getWebsiteName() {<br>&nbsp;&nbsp;&nbsp; return &quot;W3Schools.com&quot;;<br>&nbsp; }<br>
            }<br><br>class domainW3 extends domain {<br>&nbsp; public $websiteName;<br>&nbsp;
            public function __construct() {<br>&nbsp;&nbsp;&nbsp; $this-&gt;websiteName =
            parent::getWebsiteName();<br>&nbsp; } <br>}<br><br>$domainW3 = new domainW3;<br>
            echo $domainW3 -&gt; websiteName;<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_static_method4.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_oop_traits.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_oop_static_properties.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>