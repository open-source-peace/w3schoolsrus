<?php include '../include/head.php'; ?>
<title>PHP ООП - Классы и объекты. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP ООП - Классы и объекты. Класс является шаблоном для объектов, а объект является экземпляром класса. Определение классов и объектов. Ключевое слово $this и instanceof. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">ООП - Классы и объекты</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_oop_what_is.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_oop_constructor.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Класс</strong> является шаблоном для объектов, а <strong>объект</strong> является экземпляром класса.</p>
    <hr>

    <h2>ООП Кейс</h2>
    <p>Пусть у нас есть класс с именем Fruit. У Fruit могут быть такие свойства, как имя, цвет, вес и т.д. Мы можем определить такие переменные, как $name, $color и $weight, чтобы хранить значения этих свойств.</p>
    <p>Когда создаются отдельные объекты (apple, banana и т.д.), они наследуют все свойства и поведение класса, но каждый объект будет иметь разные значения для свойств.</p>
    <hr>

    <h2>Определение класса</h2>
    <p>Класс определяется с помощью ключевого слова <code class="w3-codespan">class</code>, за которым следует имя класса и пара фигурных скобок ({}). Все его свойства и методы заключаются в фигурные скобки:</p>
    <div class="w3-example">
        <h3>Синтаксис</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class Fruit {<br>&nbsp; // здесь идёт код...<br>}<br>?&gt;
        </div>
    </div>

    <p>Ниже мы объявляем класс с именем Fruit, состоящий из двух свойств ($name и $color) и двух методов set_name() и
        get_name() для установки и получения свойства $name:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class Fruit {<br>&nbsp; // Свойства<br>&nbsp; public
            $name;<br>&nbsp; public $color;<br><br>&nbsp; // Методы<br>&nbsp; function
            set_name($name) {<br>&nbsp;&nbsp;&nbsp;
            $this-&gt;name = $name;<br>&nbsp; }<br>&nbsp; function get_name() {<br>&nbsp;&nbsp;&nbsp;
            return $this-&gt;name;<br>&nbsp; }<br>}<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_class.html">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> В классе переменные называются свойствами, а функции - методами!</p>
    </div>
    <hr>

    <h2>Определение объектов</h2>
    <p>Классы ничто без объектов! Мы можем создать несколько объектов из класса. Каждый объект имеет все свойства и методы, определенные в классе, но они будут иметь разные значения свойств.</p>
    <p>Объекты класса создаются с помощью ключевого слова <code class="w3-codespan">new</code>.</p>
    <p>В приведенном ниже примере $apple и $banana являются экземплярами класса Fruit:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class Fruit {<br>&nbsp; // Свойства<br>&nbsp; public
            $name;<br>&nbsp; public $color;<br><br>&nbsp; // Методы<br>&nbsp; function
            set_name($name) {<br>&nbsp;&nbsp;&nbsp;
            $this-&gt;name = $name;<br>&nbsp; }<br>&nbsp; function get_name() {<br>&nbsp;&nbsp;&nbsp;
            return $this-&gt;name;<br>&nbsp; }<br>}<br><br>$apple = new Fruit();<br>
            $banana = new Fruit();<br>$apple-&gt;set_name('Apple');<br>$banana-&gt;set_name('Banana');<br>
            <br>echo $apple-&gt;get_name();<br>echo &quot;&lt;br&gt;&quot;;<br>
            echo $banana-&gt;get_name();<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_class2.html">Попробуйте сами &raquo;</a>
    </div>

    <p>В приведенном ниже примере мы добавляем ещё два метода к классу Fruit для установки и получения свойства $color:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class Fruit {<br>&nbsp; // Свойства<br>&nbsp; public $name;<br>&nbsp;
            public $color;<br><br>&nbsp; // Методы<br>&nbsp;
            function set_name($name) {<br>&nbsp;&nbsp;&nbsp; $this-&gt;name = $name;<br>&nbsp; }<br>&nbsp;
            function get_name() {<br>&nbsp;&nbsp;&nbsp; return $this-&gt;name;<br>&nbsp; }<br>&nbsp;
            function set_color($color) {<br>&nbsp;&nbsp;&nbsp; $this-&gt;color = $color;<br>&nbsp; }<br>&nbsp;
            function get_color() {<br>&nbsp;&nbsp;&nbsp; return $this-&gt;color;<br>&nbsp; }<br>
            }<br><br>$apple = new Fruit();<br>$apple-&gt;set_name('Apple');<br>
            $apple-&gt;set_color('Red');<br>echo &quot;Name: &quot; . $apple-&gt;get_name();<br>echo &quot;&lt;br&gt;&quot;;<br>
            echo &quot;Color: &quot; . $apple-&gt;get_color();<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_class3.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>PHP - Ключевое слово $this</h2>
    <p>Ключевое слово $this ссылается на текущий объект и доступно только внутри методов.</p>
    <p>Посмотрите на следующий пример:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class Fruit {<br>&nbsp; public $name;<br>}<br>$apple = new Fruit();<br>?&gt;
        </div>
    </div>
    <p>Где мы можем изменить значение свойства $name? Есть два способа:</p>
    <p>1. Внутри класса (добавив метод set_name() и используя $this):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class Fruit {<br>&nbsp; public $name;<br>&nbsp;
            function set_name($name) {<br>&nbsp;&nbsp;&nbsp; $this-&gt;name = $name;<br>&nbsp;
            }<br>}<br>$apple = new Fruit();<br>$apple-&gt;set_name(&quot;Apple&quot;);<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_this.html">Попробуйте сами &raquo;</a>
    </div>

    <p>2. Вне класса (путем непосредственного изменения значения свойства):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class Fruit {<br>&nbsp; public $name;<br>}<br>$apple = new Fruit();<br>$apple-&gt;name = &quot;Apple&quot;;<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_this2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>PHP - Ключевое слово instanceof</h2>
    <p>Вы можете использовать ключевое слово <code class="w3-codespan">instanceof</code> чтобы проверить, принадлежит ли объект определенному классу:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$apple = new Fruit();<br>var_dump($apple instanceof
            Fruit);<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_class4.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_oop_what_is.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_oop_constructor.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>