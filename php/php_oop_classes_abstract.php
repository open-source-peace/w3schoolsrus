<?php include '../include/head.php'; ?>
<title>PHP Абстрактные классы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP ООП - Абстрактные классы. Что такое абстрактные классы и методы? - это когда родительский класс имеет именованный метод, но ему нужен дочерний класс (классы) для выполнения задач. Абстрактный класс или метод определяется ключевым словом abstract. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">ООП - Абстрактные классы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_oop_constants.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_oop_interfaces.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>PHP - Что такое абстрактные классы и методы?</h2>
    <p><strong>Абстрактные классы и методы</strong> - это когда родительский класс имеет именованный метод, но ему нужен дочерний класс (классы) для выполнения задач.</p>
    <p><strong>Абстрактный класс</strong> - это класс, который содержит хотя бы один абстрактный метод. <strong>Абстрактный метод</strong> - это метод, который объявлен, но не реализован в коде.</p>
    <p><strong>Абстрактный класс</strong> или <strong>метод</strong> определяется ключевым словом <code class="w3-codespan">abstract</code>:</p>

    <div class="w3-example">
        <h3>Синтаксис абстрактного класса (метода)</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>abstract class
            ParentClass {<br>&nbsp; abstract public function someMethod1();<br>&nbsp;
            abstract public function someMethod2($name, $color);<br>&nbsp; abstract
            public function someMethod3() : string;<br>}<br>?&gt;
        </div>
    </div>

    <p>При наследовании от абстрактного класса метод дочернего класса должен быть определен с тем же именем и тем же или с менее модифицированным модификатором доступа. Таким образом, если абстрактный метод определен как защищенный, метод дочернего класса должен быть определен как защищенный или открытый, но не закрытый. Кроме того, тип и количество обязательных аргументов должны быть одинаковыми. Однако дочерние классы могут иметь дополнительные аргументы в дополнение.</p>
    <p>Значит, когда дочерний класс наследуется от абстрактного класса, у нас есть следующие правила:</p>
    <ul>
        <li>Метод дочернего класса должен быть определен с тем же именем, и он повторно объявляет родительский абстрактный метод</li>
        <li>Метод дочернего класса должен быть определен с таким же или менее ограниченным модификатором доступа</li>
        <li>Количество обязательных аргументов должно быть одинаковым. Тем не менее, дочерний класс может иметь дополнительные аргументы в добавок</li>
    </ul>

    <p>Давайте посмотрим на пример:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>// Родительский класс<br>abstract class Car {<br>&nbsp; public
            $name;<br>&nbsp; public
            function __construct($name) {<br>&nbsp;&nbsp;&nbsp; $this-&gt;name = $name;<br>&nbsp; }<br>&nbsp;
            abstract public function intro() : string;     <br>}<br><br>// Дочерние классы<br>class
            Audi extends Car {<br>&nbsp; public
            function intro() : string {<br>&nbsp;&nbsp;&nbsp; return &quot;Choose German
            quality! I'm an $this-&gt;name!&quot;;
            <br>&nbsp; }<br>}<br><br>class
            Volvo extends Car {<br>&nbsp; public
            function intro() : string {<br>&nbsp;&nbsp;&nbsp; return &quot;Proud to be
            Swedish! I'm a $this-&gt;name!&quot;;
            <br>&nbsp; }<br>}<br><br>class
            Citroen extends Car {<br>&nbsp; public
            function intro() : string {<br>&nbsp;&nbsp;&nbsp; return &quot;French
            extravagance! I'm a $this-&gt;name!&quot;;
            <br>&nbsp; }<br>}<br><br>// Создать объекты из дочерних классов<br>$audi = new
            audi(&quot;Audi&quot;);<br>
            echo $audi-&gt;intro();<br>echo &quot;&lt;br&gt;&quot;;<br><br>$volvo = new
            volvo(&quot;Volvo&quot;);<br>
            echo $volvo-&gt;intro();<br>echo &quot;&lt;br&gt;&quot;;<br>
            <br>$citroen = new citroen(&quot;Citroen&quot;);<br>
            echo $citroen-&gt;intro();<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_abstract.html">Попробуйте сами &raquo;</a>
    </div>

    <h3>Объяснение примера</h3>
    <p>Классы Audi, Volvo и Citroen унаследованы от класса Car. Это означает, что классы Audi, Volvo и Citroen могут использовать публичное свойство $name, а также публичный метод __construct() из класса Car из-за наследования.</p>
    <p>Но intro() - это абстрактный метод, который должен быть определен во всех дочерних классах, и они должны возвращать строку.</p>
    <hr>

    <h2>PHP - Больше примеров абстрактного класса</h2>
    <p>Давайте посмотрим на другой пример, где абстрактный метод имеет аргумент:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>abstract class ParentClass {<br>&nbsp; // Абстрактный метод с аргументом<br>&nbsp; abstract protected
            function prefixName($name);<br>}<br><br>class ChildClass extends ParentClass {<br>&nbsp; public function prefixName($name) {<br>&nbsp;&nbsp;&nbsp;
            if ($name == &quot;John Doe&quot;) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $prefix = &quot;Mr.&quot;;<br>&nbsp;&nbsp;&nbsp;
            } elseif ($name == &quot;Jane Doe&quot;) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $prefix =
            &quot;Mrs.&quot;;<br>&nbsp;&nbsp;&nbsp; } else {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            $prefix = &quot;&quot;;<br>&nbsp;&nbsp;&nbsp; }<br>&nbsp;&nbsp;&nbsp; return
            &quot;{$prefix} {$name}&quot;;<br>&nbsp; }<br>}<br><br>$class = new ChildClass;<br>echo $class-&gt;prefixName(&quot;John
            Doe&quot;);<br>echo &quot;&lt;br&gt;&quot;; <br>echo $class-&gt;prefixName(&quot;Jane Doe&quot;);<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_abstract2.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Давайте рассмотрим другой пример, где в абстрактного метода есть аргумент, а у дочернего класса есть два необязательных аргумента, которые не определены в абстрактном методе родителя:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>abstract class ParentClass {<br>&nbsp; // Абстрактный метод с аргументом<br>&nbsp; abstract protected
            function prefixName($name);<br>}<br><br>class ChildClass extends ParentClass {<br>&nbsp;
            // Дочерний класс может определять необязательные аргументы, которых нет в абстрактном методе родителя.<br>&nbsp; public function prefixName($name, $separator = &quot;.&quot;,
            $greet = &quot;Dear&quot;) {<br>&nbsp;&nbsp;&nbsp;
            if ($name == &quot;John Doe&quot;) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $prefix = &quot;Mr&quot;;<br>&nbsp;&nbsp;&nbsp;
            } elseif ($name == &quot;Jane Doe&quot;) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $prefix =
            &quot;Mrs&quot;;<br>&nbsp;&nbsp;&nbsp; } else {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            $prefix = &quot;&quot;;<br>&nbsp;&nbsp;&nbsp; }<br>&nbsp;&nbsp;&nbsp; return
            &quot;{$greet} {$prefix}{$separator} {$name}&quot;;<br>&nbsp; }<br>}<br><br>$class = new ChildClass;<br>echo $class-&gt;prefixName(&quot;John
            Doe&quot;);<br>echo &quot;&lt;br&gt;&quot;; <br>echo $class-&gt;prefixName(&quot;Jane Doe&quot;);<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_abstract3.html">Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_oop_constants.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_oop_interfaces.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>