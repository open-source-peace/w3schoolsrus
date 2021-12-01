<?php include '../include/head.php'; ?>

<title>JavaScript Булевы (логические) значения. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Булевы (логические) значения. Функция Boolean(). Сравнения и условия. Логические значения могут быть объектами. Полный справочник булевых значений. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Булевы значения</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_random.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_comparisons.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">JavaScript булево (логическое) значение представляет одно из двух значений: <strong>true</strong> или <strong>false</strong> (<strong>истина</strong> или <strong>ложь</strong>).</p>
    <hr>
    <h2>Булевы (логические) значения</h2>
    <p>Очень часто в программировании вам понадобится тип данных, который может иметь только одно из двух значений, например:</p>
    <ul>
        <li>YES / NO (ДА / НЕТ)</li>
        <li>ON / OFF (ВКЛ. / ОТКЛ.)</li>
        <li>TRUE / FALSE (ИСТИНА / ЛОЖЬ)</li>
    </ul>
    <p>Для этого в JavaScript есть тип данных <strong>булевые значения</strong>, которые могут принимать только значения <strong>true</strong> или <strong>false</strong>.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Функция Boolean()</h2>
    <p>Вы можете использовать функцию <code class="w3-codespan">Boolean()</code> чтобы узнать, истинно ли выражение (или переменная):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            Boolean(10 &gt; 9)&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает true
        </div>
        <a target="_blank" href="../jstryit/tryjs_boolean_expression1.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Или даже проще:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            (10 &gt; 9) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // также возвращает true<br>
            10 &gt; 9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // также возвращает true
        </div>
        <a target="_blank" href="../jstryit/tryjs_boolean_expression2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Сравнения и условия</h2>
    <p>В главе JS Сравнения даётся полный обзор операторов сравнения.</p>
    <p>В главе JS Условия дается полный обзор условных операторов.</p>
    <p>Вот несколько примеров:</p>

    <table class="ws-table-all notranslate">
        <tr>
            <th style="width:10%">Оператор</th>
            <th>Описание</th>
            <th>Пример</th>
        </tr>
        <tr>
            <td>==</td>
            <td>равно</td>
            <td>if (day == &quot;Monday&quot;)</td>
        </tr>
        <tr>
            <td>&gt;</td>
            <td>больше чем</td>
            <td>if (salary &gt; 9000)</td>
        </tr>
        <tr>
            <td>&lt;</td>
            <td>меньше чем</td>
            <td>if (age &lt; 18)</td>
        </tr>
    </table>

    <div class="w3-panel w3-note">
        <p>Логическое (булево) значение выражения является основой для всех сравнений и условий JavaScript.</p>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Всё, что имеет &quot;Значение&quot; является True (истина)</h2>
    <div class="w3-example">
        <h3>Примеры</h3>
        <div class="w3-code notranslate jsHigh">
            100<br><br>
            3.14<br><br>
            -15<br><br>
            &quot;Hello&quot;<br><br>
            &quot;false&quot;<br><br>
            7 + 1 + 3.14</div>
        <a target="_blank" href="../jstryit/tryjs_boolean.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Всё, что не имеет &quot;Значения&quot; является False (ложь)</h2>
    <div class="w3-example">
        <p>Булево значение <strong>0</strong> (ноль) является <strong>false</strong>:</p>
        <div class="w3-code notranslate jsHigh">
            let x = 0;<br>
            Boolean(x);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает false
        </div>
        <a target="_blank" href="../jstryit/tryjs_boolean_zero.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <p>Булево значение <strong>-0</strong> (минус ноль) является <strong>false</strong>:</p>
        <div class="w3-code notranslate jsHigh">
            let x = -0;<br>
            Boolean(x);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает false
        </div>
        <a target="_blank" href="../jstryit/tryjs_boolean_minus.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <p>Булево значение <strong>&quot;&quot; </strong>(пустая строка) является <strong>false</strong>:</p>
        <div class="w3-code notranslate jsHigh">
            let x = &quot;&quot;;<br>
            Boolean(x);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает false
        </div>
        <a target="_blank" href="../jstryit/tryjs_boolean_empty.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <p>Булево значение <strong>undefined</strong> является <strong>false</strong>:</p>
        <div class="w3-code notranslate jsHigh">
            let x;<br>
            Boolean(x);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает false
        </div>
        <a target="_blank" href="../jstryit/tryjs_boolean_undefined.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <p>Булево значение <strong>null</strong> является <strong>false</strong>:</p>
        <div class="w3-code notranslate jsHigh">
            let x = null;<br>
            Boolean(x);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает false
        </div>
        <a target="_blank" href="../jstryit/tryjs_boolean_null.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <p>Булево значение <strong>false</strong> это (как вы уже догадались) <strong>false</strong>:</p>
        <div class="w3-code notranslate jsHigh">
            let x = false;<br>
            Boolean(x);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает false
        </div>
        <a target="_blank" href="../jstryit/tryjs_boolean_false.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <p>Булево значение <strong>NaN</strong> является <strong>false</strong>:</p>
        <div class="w3-code notranslate jsHigh">
            let x = 10 / "Hallo";<br>
            Boolean(x);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // возвращает false
        </div>
        <a target="_blank" href="../jstryit/tryjs_boolean_nan.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Логические значения могут быть объектами</h2>
    <p>Обычно логические значения JavaScript представляют собой примитивные значения, созданные из литералов:</p>
    <p><code class="w3-codespan">let x = false;</code></p>
    <p>Но логические значения также могут быть определены как объекты с ключевым словом <code class="w3-codespan">new</code>:</p>
    <p><code class="w3-codespan">let y = new Boolean(false);</code></p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = false;<br>
            let y = new Boolean(false);<br><br>
            //
            typeof x returns boolean<br>
            //
            typeof y returns object
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_booleans_object.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Не создавайте логические объекты. Это снижает скорость выполнения.<br>Ключевое слово <code class="w3-codespan">new</code> усложняет код. Это может привести к неожиданным результатам:</p>
    </div>
    <?php include '../include/adinfeed.php'; ?>
    <p>При использовании оператора <code class="w3-codespan">==</code> равные логические значения равны:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = false;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
            let y = new Boolean(false);<br><br>
            // (x == y) является true, потому что x и y имеют равные значения</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_booleans_object1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>При использовании оператора <code class="w3-codespan">===</code> равные логические значения не равны, поскольку оператор <code class="w3-codespan">===</code> ожидает равенства как по типу, так и по значению.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = false;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
            let y = new Boolean(false);<br><br>
            // (x === y) является false, потому что x и y имеют разные типы
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_booleans_object2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Или даже хуже. Объекты нельзя сравнивать:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = new Boolean(false);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
            let y = new Boolean(false);<br><br>
            // (x == y) является false, потому что объекты нельзя сравнивать
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_booleans_object3.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Обратите внимание на разницу между (x==y) и (x===y).<br>Сравнение двух объектов JavaScript всегда будет возвращать false.</p>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Полный справочник логических (булевых) значений</h2>
    <p>Для получения полной справки перейдите на <a href="../jsref/jsref_obj_boolean.php">Полный справочник JavaScript Булевы значения</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <p>Справочник содержит описания и примеры всех логических свойств и методов.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_random.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_comparisons.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>