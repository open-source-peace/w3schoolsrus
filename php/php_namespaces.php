<?php include '../include/head.php'; ?>
<title>PHP Пространства имён. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Пространства имён. Объявляются в начале файла с помощью ключевого слова namespace. Синтаксис. Использование. Псевдоним. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Пространства имён</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_oop_static_properties.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_iterables.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>PHP Пространства имён</h2>
    <p>Пространства имён - это квалификаторы, которые решают две разные проблемы:</p>
    <ol>
        <li>Они позволяют улучшить организацию, группируя классы, которые работают вместе для выполнения задачи</li>
        <li>Они позволяют использовать одно и то же имя для нескольких классов</li>
    </ol>

    <p>Например, у вас может быть набор классов, описывающих HTML таблицу, например Table, Row и Cell, а также другой набор классов для описания мебели, например Table, Chair и Bed. Пространства имен можно использовать для организации классов в две разные группы, а также для предотвращения смешивания двух классов Table и Table.</p>
    <hr>

    <h2>Объявление пространства имен</h2>
    <p>Пространства имен объявляются в начале файла с помощью ключевого слова <code class="w3-codespan">namespace</code>:</p>
    <div class="w3-example">
        <h3>Синтаксис</h3>
        <p>Объявите пространство имен под названием Html:</p>
        <div class="w3-code htmlHigh notranslate">
            <span style="color:mediumblue;">namespace</span> Html;</div>
    </div>

    <div class="w3-note w3-panel">
        <p><strong>Примечание:</strong> Объявление <code class="w3-codespan">namespace</code> должно быть первым делом в файле PHP. Следующий код будет недействительным:</p>
        <div class="w3-example w3-pale-red">
            <div class="w3-code htmlHigh notranslate w3-border-red">
                &lt;?php<br>echo &quot;Hello World!&quot;;<br>namespace Html;<br>...<br>?&gt;</div>
        </div>

    </div>

    <p>Константы, классы и функции, объявленные в этом файле, будут принадлежать пространству имен <strong>Html</strong>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Создайте класс таблицы в пространстве имен Html:</p>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>namespace Html;<br>class Table {<br>&nbsp; public $title = &quot;&quot;;<br>&nbsp; public
            $numRows = 0;<br>&nbsp; public function message() {<br>&nbsp;&nbsp;&nbsp; echo &quot;&lt;p&gt;Table
            '{$this-&gt;title}' has {$this-&gt;numRows} rows.&lt;/p&gt;&quot;;<br>&nbsp; }<br>}<br>$table = new
            Table();<br>$table-&gt;title = &quot;My table&quot;;<br>$table-&gt;numRows = 5;<br>?&gt;<br>
            <br>&lt;!DOCTYPE html&gt;<br>
            &lt;html&gt;<br>&lt;body&gt;<br><br>&lt;?php <br>$table-&gt;message(); <br>?&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_namespace1.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Для дальнейшей организации можно иметь вложенные пространства имен:</p>
    <div class="w3-example">
        <h3>Синтаксис</h3>
        <p>Объявите пространство имен Html внутри пространства имен Code:</p>
        <div class="w3-code notranslate">
            <span style="color:mediumblue;">namespace</span> Code\Html;</div>
    </div>
    <hr>

    <h2>Использование пространств имен</h2>
    <p>Любой код, следующий за объявлением <code class="w3-codespan">namespace</code>, работает внутри пространства имен, поэтому классы, принадлежащие к пространству имен, могут быть созданы без каких-либо квалификаторов. Чтобы получить доступ к классам из-за пределов пространства имен, к классу необходимо присоединить пространство имен.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Используйте классы из пространства имен Html:</p>
        <div class="w3-code jsHigh notranslate">
            $table = new Html\Table()<br>$row = new Html\Row();</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="https://www.w3schools.com/php/showphp_classes.asp?filename=demo_classesphp" rel="nofollow">Попробуйте сами &raquo;</a>
    </div>

    <p>Когда много классов из одного и того же пространства имен используются одновременно, проще использовать ключевое слово <code class="w3-codespan">namespace</code>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Используйте классы из пространства имен Html без Html\квалификатора:</p>
        <div class="w3-code jsHigh notranslate">
            namespace Html;<br>$table = new Table();<br>$row = new Row();</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="https://www.w3schools.com/php/showphp_classes.asp?filename=demo_classesphp_qual" rel="nofollow">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Псевдоним пространства имен</h2>
    <p>Может быть полезно присвоить пространству имен или классу псевдоним, чтобы упростить запись. Это делается с помощью ключевого слова <code class="w3-codespan">use</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Дайте пространству имен псевдоним:</p>
        <div class="w3-code notranslate">
            <span style="color:mediumblue">use</span> Html <span style="color:mediumblue">as</span> H;<br>$table = <span style="color:mediumblue">new</span> H\Table();</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="https://www.w3schools.com/php/showphp_classes.asp?filename=demo_classesphp_alias" rel="nofollow">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Дайте классу псевдоним:</p>
        <div class="w3-code notranslate">
            <span style="color:mediumblue">use</span> Html\Table <span style="color:mediumblue">as</span>
            T;<br>$table = <span style="color:mediumblue">new</span> T();</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="https://www.w3schools.com/php/showphp_classes.asp?filename=demo_classesphp_alias_class" rel="nofollow">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_oop_static_properties.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_iterables.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>