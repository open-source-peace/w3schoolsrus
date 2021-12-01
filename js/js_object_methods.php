<?php include '../include/head.php'; ?>

<title>JavaScript Методы объекта. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Методы объекта. Ключевое слово this. Доступ к методам объекта. Добавление метода к объекту. Использование встроенных методов. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Методы объекта</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_object_properties.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_object_display.php">Next &#10095;</a>
    </div>
    <hr>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const <strong>person</strong> = {<br>
            &nbsp; firstName: "John",<br>
            &nbsp;&nbsp;lastName: "Doe",<br>
            &nbsp;&nbsp;id: 5566,<br>
            &nbsp;&nbsp;fullName: function() {<br>
            &nbsp;&nbsp;&nbsp; return <strong>this</strong>.firstName + " " +
            <strong>this</strong>.lastName;<br>&nbsp;&nbsp;}<br>
            };
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_this_method.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Ключевое слово <b>this</b></h2>
    <p>В определении функции <code class="w3-codespan">this</code> относится к &quot;владельцу&quot; функции.</p>
    <p>В приведенном выше примере <code class="w3-codespan">this</code> является <strong>персональным объектом</strong>, который &quot;владеет&quot; функцией <strong>fullName</strong>.</p>
    <p>Другими словами, <strong>this.firstName</strong> означает свойство <strong>firstName</strong> этого объекта (<strong>this объекта</strong>).</p>
    <p>Подробнее о ключевом слове <code class="w3-codespan">this</code> смотрите в главе <a href="js_this.php">JS Ключевое слово this</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <h2>JavaScript Методы</h2>
    <p>Методы JavaScript - это действия, которые можно выполнять с объектами.</p>
    <p>JavaScript <strong>метод</strong> - это свойство, содержащее <strong>определение функции</strong>.</p>

    <table class="ws-table-all">
        <tr>
            <th style="width:20%">Свойство</th>
            <th>Значение</th>
        </tr>
        <tr>
            <td>firstName</td>
            <td>John</td>
        </tr>
        <tr>
            <td>lastName</td>
            <td>Doe</td>
        </tr>
        <tr>
            <td>age</td>
            <td>50</td>
        </tr>
        <tr>
            <td>eyeColor</td>
            <td>blue</td>
        </tr>
        <tr>
            <td>fullName</td>
            <td>function() {return this.firstName + &quot; &quot; + this.lastName;}</td>
        </tr>
    </table>

    <div class="w3-panel w3-note">
        <p>Методы - это функции, хранящиеся как свойства объекта.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Доступ к методам объекта</h2>
    <p>Вы получаете доступ к объектному методу со следующим синтаксисом:</p>

    <div class="w3-code w3-border notranslate">
        <div>
            <i>objectName.methodName()</i>
        </div>
    </div>

    <p>Обычно вы описываете fullName() как метод объекта person, а fullName как свойство.</p>
    <p>Свойство fullName будет выполняться (как функция), когда оно вызывается с помощью ().</p>
    <p>В этом примере выполняется доступ к <strong>методу</strong> fullName() объекта person:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate">
            name = person.fullName();</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_method.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Если вы получите доступ к <strong>свойству</strong> fullName без (), оно вернёт <strong>определение функции</strong>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate">
            name = person.fullName;</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_function.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Добавление метода к объекту</h2>
    <p>Добавить новый метод к объекту очень просто:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            person.name = function () {<br>&nbsp;&nbsp;return this.firstName + &quot; &quot; + this.lastName;<br>};
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_method_add.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Использование встроенных методов</h2>
    <p>В этом примере используется метод <code class="w3-codespan">toUpperCase()</code> объекта String для преобразования текста в верхний регистр:</p>
    <div class="w3-code w3-border notranslate jsHigh">
        <div>
            let message = &quot;Hello world!&quot;;<br>
            let x = message.toUpperCase();
        </div>
    </div>
    <p>Значение x после выполнения приведенного выше кода будет:</p>
    <div class="w3-code w3-border notranslate"><div>HELLO WORLD!</div></div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            person.name = function () {<br>
            &nbsp;&nbsp;return (this.firstName + &quot; &quot; + this.lastName).toUpperCase();<br>
            };
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_method_toupper.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_object_properties.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_object_display.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>