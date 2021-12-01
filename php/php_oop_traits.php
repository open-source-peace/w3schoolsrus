<?php include '../include/head.php'; ?>
<title>PHP Трейты. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Трейты. Что такое трейты? Traits - характерные черты, особенности, признаки. Трейты используются для объявления методов, которые могут использоваться в нескольких классах. Объявляются с помощью ключевого слова trait. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">OOP - Трейты</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_oop_interfaces.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_oop_static_methods.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>PHP - Что такое трейты?</h2>
    <p>Traits - (<i>в пер. с анг.</i>) - характерные черты, особенности, признаки.</p>
    <p>PHP поддерживает только одно наследование: дочерний класс может наследовать только от одного родителя.</p>
    <p>А что, если класс должен унаследовать несколько типов поведения? ООП трейты решают эту проблему.</p>
    <p>Трейты используются для объявления методов, которые могут использоваться в нескольких классах. Трейты могут иметь методы и абстрактные методы, которые могут использоваться в нескольких классах, а методы могут иметь любой модификатор доступа (открытый, закрытый или защищенный).</p>
    <p>Трейты объявляются с помощью ключевого слова <code class="w3-codespan">trait</code>:</p>

    <div class="w3-example">
        <h3>Синтаксис</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>
            trait TraitName {<br>&nbsp; // какой-то код...<br>}<br>?&gt;
        </div>
    </div>

    <p>Чтобы использовать трейт в классе, используйте ключевое слово <code class="w3-codespan">use</code>:</p>

    <div class="w3-example">
        <h3>Синтаксис</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class MyClass {<br>&nbsp; use TraitName;<br>}<br>?&gt;
        </div>
    </div>

    <p>Давайте посмотрим на пример:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>trait message1 {<br>public function msg1() {<br>&nbsp;&nbsp;&nbsp;
            echo &quot;ООП - это увлекательно! &quot;; <br>&nbsp; }<br>}<br><br>class Welcome {<br>&nbsp; use
            message1;<br>}<br><br>$obj = new Welcome();<br>$obj-&gt;msg1();<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_trait.html">Попробуйте сами &raquo;</a>
    </div>

    <h3>Объяснение примера</h3>
    <p>Здесь мы объявляем один трейт: message1. Затем мы создаём класс: Welcome. Класс использует трейт, и все методы в трейте будут доступны в классе.</p>
    <p>Если другие классы должны использовать функцию msg1(), просто используйте трейт message1 в этих классах. Это уменьшает дублирование кода, потому что нет необходимости переопределять один и тот же метод снова и снова.</p>
    <hr>

    <h2>PHP - Использование нескольких трейтов</h2>
    <p>Давайте посмотрим на другой пример:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>trait message1 {<br>&nbsp; public function msg1() {<br>&nbsp;&nbsp;&nbsp;
            echo &quot;ООП - это увлекательно! &quot;; <br>&nbsp; }<br>}<br><br>trait message2 {<br>&nbsp; public function msg2()
            {<br>&nbsp;&nbsp;&nbsp; echo &quot;ООП уменьшает дублирование кода!&quot;; <br>&nbsp; }<br>
            }<br><br>class Welcome {<br>&nbsp;
            use message1;<br>}<br><br>class Welcome2 {<br>&nbsp; use message1, message2;<br>
            }<br>
            <br>$obj = new Welcome();<br>$obj-&gt;msg1();<br>echo &quot;&lt;br&gt;&quot;;<br><br>$obj2 =
            new Welcome2();<br>$obj2-&gt;msg1();<br>$obj2-&gt;msg2();<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_trait2.html">Попробуйте сами &raquo;</a>
    </div>

    <h3>Объяснение примера</h3>
    <p>Здесь мы объявляем два трейта: message1 и message2. Затем мы создаём два класса: Welcome и Welcome2. Первый класс (Welcome) использует трейт message1, а второй класс (Welcome2) использует оба трейта - message1 и message2 (несколько трейтов разделяются запятой).</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_oop_interfaces.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_oop_static_methods.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>