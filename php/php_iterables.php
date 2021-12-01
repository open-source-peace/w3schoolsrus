<?php include '../include/head.php'; ?>
<title>PHP Итерации. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Итерации. Использование итерируемых объектов. Создание итераций. Итератор имеет методы. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP Итерации (Итерируемые объекты)</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_namespaces.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_mysql_intro.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>PHP - Что такое итерации?</h2>

    <p>Итерируемым является любое значение, которое можно перебрать с помощью цикла <code class="w3-codespan">foreach()</code>.</p>
    <p>Псевдотип <code class="w3-codespan">iterable</code> был представлен в <strong>PHP 7.1</strong>, и его можно использовать как тип данных для аргументов функции и возвращаемых значений функции.</p>
    <hr>

    <h2>PHP - Использование итерируемых объектов</h2>
    <p>Ключевое слово <code class="w3-codespan">iterable</code> может использоваться как тип данных аргумента функции или как тип возвращаемого значения функции:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Используйте аргумент итерируемой функции:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>function printIterable(iterable $myIterable) {<br>&nbsp;
            foreach($myIterable as $item) {<br>&nbsp;&nbsp;&nbsp; echo $item;<br>&nbsp; }<br>
            }<br><br>$arr = [&quot;a&quot;,
            &quot;b&quot;, &quot;c&quot;];<br>printIterable($arr);<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_iterables.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Вернуть итерируемый объект:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>function getIterable():iterable {<br>&nbsp; return [&quot;a&quot;, &quot;b&quot;, &quot;c&quot;];<br>
            }<br><br>$myIterable = getIterable();<br>foreach($myIterable as $item) {<br>&nbsp;
            echo $item;<br>}<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_iterables2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>PHP - Создание итераций</h2>
    <p><b>Массивы</b></p>
    <p>Все массивы являются итерируемыми, поэтому любой массив можно использовать в качестве аргумента функции, для которой требуется итерация.</p>

    <p><b>Итераторы</b></p>
    <p>Любой объект, реализующий интерфейс <code class="w3-codespan">Iterator</code>, может использоваться в качестве аргумента функции, требующей итерации.</p>
    <p>Итератор содержит список элементов и предоставляет методы для их просмотра. Он сохраняет указатель на один из элементов списка. У каждого элемента в списке должен быть ключ, который можно использовать для поиска элемента.</p>
    <p>Итератор должен иметь следующие методы:</p>
    <ul>
        <li><code class="w3-codespan">current()</code> - возвращает элемент, на который в данный момент указывает указатель. Это может быть любой тип данных</li>
        <li><code class="w3-codespan">key()</code> - возвращает ключ, связанный с текущим элементом в списке. Это может быть только целое число, число с плавающей запятой, булево значение или строка.</li>
        <li><code class="w3-codespan">next()</code> - перемещает указатель на следующий элемент в списке</li>
        <li><code class="w3-codespan">rewind()</code> - перемещает указатель на первый элемент в списке</li>
        <li><code class="w3-codespan">valid()</code> - если внутренний указатель не указывает ни на один элемент (например, если next() был вызван в конце списка), это должно вернуть false. В любом другом случае возвращает true.</li>
    </ul>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Реализуйте интерфейс Iterator и используйте его как итерацию:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>// Создать итератор<br>class MyIterator implements Iterator {<br>&nbsp;
            private $items = [];<br>&nbsp; private $pointer = 0;<br><br>&nbsp; public
            function __construct($items) {<br>&nbsp;&nbsp;&nbsp; // array_values() гарантирует, что ключи являются числами <br>
            &nbsp;&nbsp;&nbsp; $this-&gt;items =
            array_values($items);<br>&nbsp; }<br><br>&nbsp; public function current() {<br>&nbsp;&nbsp;&nbsp;
            return $this-&gt;items[$this-&gt;pointer];<br>&nbsp; }<br><br>&nbsp; public function
            key() {<br>&nbsp;&nbsp;&nbsp; return $this-&gt;pointer;<br>&nbsp; }<br><br>&nbsp;
            public function next() {<br>&nbsp;&nbsp;&nbsp; $this-&gt;pointer++;<br>&nbsp; }<br>
            <br>&nbsp; public function rewind() {<br>&nbsp;&nbsp;&nbsp; $this-&gt;pointer =
            0;<br>&nbsp; }<br><br>&nbsp; public function valid() {<br>&nbsp;&nbsp;&nbsp;
            // count() указывает, сколько элементов в списке<br>&nbsp;&nbsp;&nbsp;
            return $this-&gt;pointer &lt; count($this-&gt;items);<br>&nbsp; }<br>}<br><br>// Функция, использующая итерируемые объекты<br>function printIterable(iterable $myIterable) {<br>&nbsp;
            foreach($myIterable as $item) {<br>&nbsp;&nbsp;&nbsp; echo $item;<br>&nbsp; }<br>
            }<br><br>// Используйте итератор как повторяемый объект<br>$iterator = new MyIterator([&quot;a&quot;, &quot;b&quot;, &quot;c&quot;]);<br>
            printIterable($iterator);<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_iterables_interface.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_namespaces.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_mysql_intro.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>