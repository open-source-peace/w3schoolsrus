<?php include '../include/head.php'; ?>
<title>PHP Константы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP ООП - Класс константы. Константы (постоянная величина) - нельзя изменить после объявления. Класс константы объявляется внутри класса с помощью ключевого слова const. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">ООП - Класс константы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_oop_inheritance.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_oop_classes_abstract.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>PHP - Класс константы</h2>
    <p><strong>Константы</strong> (<i>constants - в пер. с анг. - постоянная величина</i>) нельзя изменить после объявления.</p>
    <p>Класс константы может быть полезен, если вам нужно определить некоторые постоянные данные внутри класса.</p>
    <p>Класс константы объявляется внутри класса с помощью ключевого слова <code class="w3-codespan">const</code>.</p>
    <p>Классы констант чувствительны к регистру. Тем не менее, рекомендуется называть константы большими буквами (в верхнем регистре).</p>
    <p>Мы можем получить доступ к константе извне класса, используя имя класса, за которым следует оператор разрешения области видимости (<code class="w3-codespan">::</code>), за которым следует имя константы, как здесь:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class
            Goodbye {<br>&nbsp; const LEAVING_MESSAGE = &quot;Спасибо за посещение W3Schools!&quot;;<br>}<br><br>echo
            Goodbye::LEAVING_MESSAGE;<br>
            ?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_class_constant.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Или мы можем получить доступ к константе внутри класса, используя ключевое слово <code class="w3-codespan">self</code>, за которым следует оператор разрешения области видимости (<code class="w3-codespan">::</code>) с последующим именем константы, как здесь:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class Goodbye {<br>&nbsp; const LEAVING_MESSAGE = &quot;Спасибо за посещение W3Schools!&quot;;<br>&nbsp;
            public function byebye() {<br>&nbsp;&nbsp;&nbsp; echo self::LEAVING_MESSAGE;<br>&nbsp;
            }<br>}<br><br>$goodbye = new Goodbye();<br>$goodbye-&gt;byebye();<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_class_constant2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_oop_inheritance.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_oop_classes_abstract.php">Next &#10095;</a>
    </div>    
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>