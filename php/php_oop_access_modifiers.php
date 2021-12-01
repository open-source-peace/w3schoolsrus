<?php include '../include/head.php'; ?>
<title>PHP Модификаторы доступа. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Модификаторы доступа. Свойства и методы могут иметь модификаторы доступа, которые контролируют, где они могут быть доступны. Есть три модификатора доступа: public, protected, private. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">ООП - Модификаторы доступа</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_oop_destructor.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_oop_inheritance.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>PHP - Модификаторы доступа</h2>
    <p>Свойства и методы могут иметь <strong>модификаторы доступа</strong>, которые контролируют, где они могут быть доступны.</p>
    <p>Есть три модификатора доступа:</p>
    <ul>
        <li> <code class="w3-codespan">public</code> - свойство или метод могут быть доступны из любого места. Это по умолчанию;</li>
        <li> <code class="w3-codespan">protected</code> - свойство или метод могут быть доступны внутри класса и с помощью классов, производных от этого класса;</li>
        <li> <code class="w3-codespan">private</code> - свойство или метод могут быть доступны ТОЛЬКО внутри класса.</li>
    </ul>

    <p>В следующем примере мы добавили три разных модификатора доступа к трем свойствам. Здесь, если вы попытаетесь установить свойство name, оно будет работать обычно (потому что свойство name является общедоступным). Однако если вы попытаетесь установить свойство color или weight, это приведет к фатальной ошибке (поскольку свойство color защищено и свойство weight является частным):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class Fruit {<br>&nbsp; public
            $name;<br>&nbsp; protected $color;<br>&nbsp; private $weight;<br>}<br><br>$mango = new Fruit();<br>$mango-&gt;name = 'Mango'; // OK <br>$mango-&gt;color = 'Yellow'; // ОШИБКА<br>
            $mango-&gt;weight = '300'; // ОШИБКА<br>?&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_access_modifiers.html">Попробуйте сами &raquo;</a>
    </div>

    <p>В следующем примере мы добавили модификаторы доступа к двум методам. Здесь, если вы попытаетесь вызвать функцию set_color() или set_weight(), это приведет к фатальной ошибке (потому что две функции считаются защищенными и закрытыми), даже если все свойства являются открытыми:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class Fruit {<br>&nbsp; public
            $name;<br>&nbsp; public $color;<br>&nbsp; public $weight;<br><br>&nbsp; function set_name($n) {&nbsp;
            // публичная функция (по умолчанию)<br>&nbsp;&nbsp;&nbsp;
            $this-&gt;name = $n;<br>&nbsp; }<br>&nbsp; protected function set_color($n) {
            // защищенная функция<br>&nbsp;&nbsp;&nbsp;
            $this-&gt;color = $n;<br>&nbsp; }<br>&nbsp; private function set_weight($n) {
            // частная функция<br>&nbsp;&nbsp;&nbsp;
            $this-&gt;weight = $n;<br>&nbsp; }<br>}<br><br>$mango = new Fruit();<br>$mango-&gt;set_name('Mango'); // OK<br>
            $mango-&gt;set_color('Yellow'); // ОШИБКА<br>$mango-&gt;set_weight('300'); // ОШИБКА<br>
            ?&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_access_modifiers2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_oop_destructor.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_oop_inheritance.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>