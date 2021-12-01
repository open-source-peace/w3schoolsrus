<?php include '../include/head.php'; ?>
<title>PHP Наследование. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Наследование. Что такое наследование? Наследование в ООП - когда класс наследуется от другого класса. Дочерний класс будет наследовать все открытые и защищенные свойства и методы от родительского класса. Кроме того, он может иметь свои свойства и методы. Унаследованный класс определяется с помощью ключевого слова extends. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">ООП - Наследование</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_oop_access_modifiers.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_oop_constants.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>PHP - Что такое наследование?</h2>
    <p><strong>Наследование в ООП</strong> = Когда класс наследуется от другого класса.</p>
    <p>Дочерний класс будет наследовать все открытые и защищенные свойства и методы от родительского класса. Кроме того, он может иметь свои свойства и методы.</p>
    <p>Унаследованный класс определяется с помощью ключевого слова <code class="w3-codespan">extends</code> (в пер. с анг. - продлить, продолжить).</p>
    <p>Давайте посмотрим на пример:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class Fruit {<br>&nbsp; public
            $name;<br>&nbsp; public $color;<br>&nbsp; public
            function __construct($name, $color) {<br>&nbsp;&nbsp;&nbsp; $this-&gt;name = $name;<br>&nbsp;&nbsp;&nbsp; $this-&gt;color = $color;
            <br>&nbsp; }<br>&nbsp;
            public function intro() {<br>&nbsp;&nbsp;&nbsp; echo &quot;The fruit is {$this-&gt;name}
            and the color is {$this-&gt;color}.&quot;;
            <br>&nbsp; }<br>}<br><br>// Strawberry наследуется от Fruit<br>class
            Strawberry extends Fruit {<br>&nbsp; public
            function message() {<br>&nbsp;&nbsp;&nbsp; echo &quot;Am I a fruit or a
            berry? &quot;;
            <br>&nbsp; }<br>}<br>$strawberry = new Strawberry(&quot;Strawberry&quot;, &quot;red&quot;);<br>$strawberry-&gt;message();<br>$strawberry-&gt;intro();<br>
            ?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_inheritance.html">Попробуйте сами &raquo;</a>
    </div>

    <h3>Объяснение примера</h3>
    <p>Класс Strawberry унаследован от класса Fruit.</p>
    <p>Это означает, что класс Strawberry может использовать открытые свойства $name и $color, а также публичные методы __construct() и intro() из класса Fruit из-за наследования.</p>
    <p>Класс Strawberry также имеет свой собственный метод: message().</p>
    <hr>

    <h2>PHP - Наследование и модификатор защищенного доступа</h2>
    <p>В предыдущем уроке мы узнали, что свойства или методы <code class="w3-codespan">protected</code> могут быть доступны внутри класса и с помощью классов, производных от этого класса. Что это значит?</p>
    <p>Давайте посмотрим на пример:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class Fruit {<br>&nbsp; public
            $name;<br>&nbsp; public $color;<br>&nbsp; public
            function __construct($name, $color) {<br>&nbsp;&nbsp;&nbsp; $this-&gt;name = $name;<br>&nbsp;&nbsp;&nbsp; $this-&gt;color = $color;
            <br>&nbsp; }<br>&nbsp;
            protected function intro() {<br>&nbsp;&nbsp;&nbsp; echo &quot;The fruit is {$this-&gt;name}
            and the color is {$this-&gt;color}.&quot;;
            <br>&nbsp; }<br>}<br><br>class
            Strawberry extends Fruit {<br>&nbsp; public
            function message() {<br>&nbsp;&nbsp;&nbsp; echo &quot;Am I a fruit or a
            berry? &quot;;
            <br>&nbsp; }<br>}<br><br>// Попробуйте вызвать все три метода вне класса<br>$strawberry = new Strawberry(&quot;Strawberry&quot;, &quot;red&quot;);&nbsp;
            // OK. __construct() является публичным<br>$strawberry-&gt;message(); // OK. message()
            является публичным<br>$strawberry-&gt;intro(); // ERROR. intro() является защищенным<br>
            ?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_inheritance2.html">Попробуйте сами &raquo;</a>
    </div>
    <p>В приведенном выше примере мы видим, что если мы попытаемся вызвать метод <code class="w3-codespan">protected</code> (intro()) вне класса, мы получим ошибку. Методы <code class="w3-codespan">public</code> будут работать отлично!</p>

    <p>Давайте посмотрим на другой пример:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class Fruit {<br>&nbsp; public $name;<br>&nbsp; public
            $color;<br>&nbsp; public function __construct($name, $color) {<br>&nbsp;&nbsp;&nbsp;
            $this-&gt;name = $name;<br>&nbsp;&nbsp;&nbsp; $this-&gt;color = $color; <br>&nbsp;
            }<br>&nbsp; protected function intro() {<br>&nbsp;&nbsp;&nbsp; echo &quot;The
            fruit is {$this-&gt;name} and the color is {$this-&gt;color}.&quot;; <br>&nbsp; }<br>}<br>
            <br>class Strawberry extends Fruit {<br>&nbsp; public function message() {<br>&nbsp;&nbsp;&nbsp;
            echo &quot;Am I a fruit or a berry? &quot;;<br>&nbsp;&nbsp;&nbsp; // Вызовите защищенный метод из производного класса - OK<br>&nbsp;&nbsp;&nbsp; $this -&gt;
            intro();<br>&nbsp; }<br>}<br><br>
            $strawberry = new Strawberry(&quot;Strawberry&quot;, &quot;red&quot;); // OK. __construct() is
            public<br>$strawberry-&gt;message(); // OK. message() является публичным и вызывает intro() (который защищен) из производного класса<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_inheritance3.html">Попробуйте сами &raquo;</a>
    </div>

    <p>В приведенном выше примере мы видим, что все работает отлично! Это потому, что мы вызываем метод <code class="w3-codespan">protected</code> (intro()) из производного класса.</p>
    <hr>

    <h2>PHP - Переопределение унаследованных методов</h2>
    <p>Унаследованные методы могут быть переопределены путем переопределения методов (с тем же именем) в дочернем классе.</p>
    <p>Посмотрите на пример ниже. Методы __construct() и intro() в дочернем классе (Strawberry) будут переопределять методы __construct() и intro() в родительском классе (Fruit):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class Fruit {<br>&nbsp; public
            $name;<br>&nbsp; public $color;<br>&nbsp; public
            function __construct($name, $color) {<br>&nbsp;&nbsp;&nbsp; $this-&gt;name = $name;<br>&nbsp;&nbsp;&nbsp; $this-&gt;color = $color;
            <br>&nbsp; }<br>&nbsp;
            public function intro() {<br>&nbsp;&nbsp;&nbsp; echo &quot;The fruit is {$this-&gt;name}
            and the color is {$this-&gt;color}.&quot;;
            <br>&nbsp; }<br>}<br><br>class
            Strawberry extends Fruit {<br>&nbsp; public $weight;<br>&nbsp; public
            function __construct($name, $color, $weight) {<br>&nbsp;&nbsp;&nbsp; $this-&gt;name = $name;<br>&nbsp;&nbsp;&nbsp; $this-&gt;color = $color;<br>&nbsp;&nbsp;&nbsp; $this-&gt;weight = $weight;
            <br>&nbsp; }<br>&nbsp;
            public function intro() {<br>&nbsp;&nbsp;&nbsp; echo &quot;The fruit is {$this-&gt;name}, the color is {$this-&gt;color},
            and the weight is {$this-&gt;weight} gram.&quot;;
            <br>&nbsp; }<br>}<br><br>$strawberry = new Strawberry(&quot;Strawberry&quot;, &quot;red&quot;,
            50);<br>$strawberry-&gt;intro();<br>?&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_inheritance4.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>PHP - Ключевое слово final</h2>
    <p>Ключевое слово <code class="w3-codespan">final</code> может использоваться для предотвращения наследования классов или для предотвращения переопределения метода.</p>
    <p>В следующем примере показано, как предотвратить наследование классов:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>final class Fruit {<br>&nbsp; // какой-то код <br>}<br><br>//
            приведет к ошибке<br>class Strawberry extends Fruit {<br>&nbsp; // какой-то код<br>}<br>?&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_inheritance5.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>В следующем примере показано, как предотвратить переопределение метода:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class Fruit {<br>&nbsp;
            final public function intro() {<br>&nbsp;&nbsp;&nbsp; // какой-то код<br>&nbsp; }<br>}<br><br>class
            Strawberry extends Fruit {<br>&nbsp; // приведет к ошибке<br>&nbsp;
            public function intro() {<br>&nbsp;&nbsp;&nbsp; // какой-то код<br>&nbsp; }<br>}<br>?&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_inheritance6.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_oop_access_modifiers.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_oop_constants.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>