<?php include '../include/head.php'; ?>
<title>PHP Интерфейсы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Интерфейсы. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP ООП<span class="color_h1"> - Интерфейсы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_oop_classes_abstract.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_oop_traits.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>PHP - Что такое интерфейсы?</h2>
    <p>Интерфейсы позволяют указать, какие методы должен реализовывать класс.</p>
    <p>Интерфейсы позволяют легко использовать различные классы одним и тем же способом. Когда один или несколько классов используют один и тот же интерфейс, это называется &quot;полиморфизмом&quot;.</p>

    <p>Интерфейсы объявляются с помощью ключевого слова <code class="w3-codespan">interface</code>:</p>
    <div class="w3-example">
        <h3>Синтаксис</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            interface InterfaceName {<br>&nbsp; public function someMethod1();<br>&nbsp;
            public function someMethod2($name, $color);<br>&nbsp; public function
            someMethod3() : string; <br>}<br>?&gt;
        </div>
    </div>
    <hr>

    <h2>PHP - Интерфейсы и абстрактные классы</h2>
    <p>Интерфейс похож на абстрактные классы. Разница между интерфейсами и абстрактными классами заключается в следующем:</p>
    <ul>
        <li>Интерфейсы не могут иметь свойств, в то время как абстрактные классы могут</li>
        <li>Все методы интерфейса должны быть общедоступными, а методы абстрактного класса - общедоступными или защищенными</li>
        <li>Все методы в интерфейсе являются абстрактными, поэтому они не могут быть реализованы в коде, и ключевое слово abstract не требуется</li>
        <li>Классы могут реализовывать интерфейс, одновременно наследуя от другого класса</li>
    </ul>
    <hr>

    <h2>PHP - Использование интерфейсов</h2>
    <p>Чтобы реализовать интерфейс, класс должен использовать ключевое слово <code class="w3-codespan"> implements</code>.</p>
    <p>Класс, реализующий интерфейс, должен реализовывать <b>все</b> методы интерфейса.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>interface Animal {<br>&nbsp; public function makeSound();<br>
            }<br>
            <br>class Cat implements Animal {<br>&nbsp; public function makeSound() {<br>&nbsp;&nbsp;&nbsp;
            echo &quot;Meow&quot;;<br>&nbsp; }<br>}<br><br>$animal = new Cat();<br>$animal-&gt;makeSound();<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_interface.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Из приведенного выше примера предположим, что мы хотели бы написать программу, которая управляет группой животных. Есть действия, которые могут выполнять все животные, но каждое животное делает это по-своему.</p>
    <p>Используя интерфейсы, мы можем написать код, который может работать для всех животных, даже если каждое животное ведёт себя по-разному:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>// Определение интерфейса<br>interface Animal {<br>&nbsp; public
            function makeSound();<br>}<br><br>// Определения классов<br>class Cat
            implements Animal {<br>&nbsp; public function makeSound() {<br>&nbsp;&nbsp;&nbsp;
            echo &quot; Meow &quot;;<br>&nbsp; }<br>}<br><br>class Dog implements Animal {<br>&nbsp; public function makeSound()
            {<br>&nbsp;&nbsp;&nbsp; echo &quot; Bark &quot;;<br>&nbsp; }<br>}<br><br>class Mouse implements Animal {<br>&nbsp;
            public function makeSound() {<br>&nbsp;&nbsp;&nbsp; echo &quot; Squeak &quot;;<br>&nbsp;
            }<br>}<br><br>// Составьте список животных<br>$cat = new Cat();<br>$dog = new Dog();<br>$mouse = new
            Mouse();<br>$animals = array($cat, $dog, $mouse);<br><br>// Скажите животным издать звук<br>foreach($animals as $animal) {<br>&nbsp;
            $animal-&gt;makeSound();<br>}<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_interface2.html">Попробуйте сами &raquo;</a>
    </div>
    <h3>Объяснение примера</h3>
    <p>Cat, Dog и Mouse - все классы, реализующие интерфейс Animal, что означает, что все они могут издавать звук с помощью метода <code class="w3-codespan">makeSound()</code>. Из-за этого мы можем перебрать всех животных и сказать им, чтобы они издали звук, даже если мы не знаем, к какому типу животных относится каждое из них.</p>
    <p>Поскольку интерфейс не сообщает классам, как реализовать метод, каждое животное может издавать звук по-своему.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_oop_classes_abstract.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_oop_traits.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>