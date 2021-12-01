<?php include '../include/head.php'; ?>

<title>JavaScript Ключевое слово this. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Ключевое слово this. Что такое THIS в JavaScript? - относится к объекту, которому оно принадлежит. В методе. Сам по себе. В функции. В строгом режиме. В обработчиках событий. Привязка метода объекта. Явная привязка функций. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript Ключевое слово <b>this</b></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_strict.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_arrow_function.php">Next &#10095;</a>
    </div>
    <hr>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const <b>person</b> = {<br>
            &nbsp; firstName: "John",<br>
            &nbsp;&nbsp;lastName : "Doe",<br>
            &nbsp; id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;5566,<br>
            &nbsp; fullName : function() {<br>
            &nbsp;&nbsp;&nbsp; return <b>this</b>.firstName + &quot; &quot; + <b>this</b>.lastName;<br>
            &nbsp;&nbsp;}<br>
            };
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_this_method.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Что такое <b>this</b>?</h2>
    <p>JavaScript ключевое слово <code class="w3-codespan">this</code> относится к объекту, которому оно принадлежит.</p>
    <div class="w3-panel w3-note">
        <p>Оно имеет разные значения в зависимости от того, где оно используется:</p>
        <ul class="w3-ul w3-margin-bottom">
            <li>В методе <code class="w3-codespan">this</code> относится к <b>владельцу объекта</b>.</li>
            <li>Сам по себе <code class="w3-codespan">this</code> относится к <b>глобальному объекту</b>.</li>
            <li>В функции <code class="w3-codespan">this</code> относится к <b>глобальному объекту</b>.</li>
            <li>В функции в строгом режиме <code class="w3-codespan">this</code> является <code class="w3-codespan">undefined</code>.</li>
            <li>В событии <code class="w3-codespan">this</code> относится к <b>элементу</b> получившему событие.</li>
            <li>Такие методы, как <code class="w3-codespan">call()</code> и <code class="w3-codespan">apply()</code> могут ссылаться на <code class="w3-codespan">this</code> в <b>любом объекте</b>.</li>
        </ul>
    </div>
    <hr>
    <h2><b>this</b> в методе</h2>
    <p>В методе объекта <code class="w3-codespan">this</code> относится к &quot;<b>владельцу</b>&quot; метода.</p>
    <p>В примере вверху этой страницы <code class="w3-codespan">this</code> относится к объекту <b>person</b>.</p>
    <p>Объект <b>person</b> является <b>владельцем</b> метода <b>fullName</b>.</p>
    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            fullName : function() {<br>
            &nbsp; return <b>this</b>.firstName + &quot; &quot; + <b>this</b>.lastName;<br>}
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_this_method.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h2><b>this</b> сам по себе</h2>
    <p>При использовании отдельно <b>владелец</b> является глобальным объектом, поэтому <code class="w3-codespan">this</code> относится к глобальному объекту.</p>
    <p>В окне браузера глобальный объект <code class="w3-codespan">[object Window]</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let x = this;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_this.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>В <strong>строгом режиме</strong>, когда используется отдельно, <code class="w3-codespan">this</code> также относится к глобальному объекту <code class="w3-codespan">[object Window]</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            &quot;use strict&quot;;<br>let x = this;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_this_alone.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/adinfeed.php'; ?>
    <h2><b>this</b> в функции (по умолчанию)</h2>
    <p>В функции JavaScript владельцем функции является привязка <b>по умолчанию</b> для <code class="w3-codespan">this</code>.</p>
    <p>Т.о., в функции <code class="w3-codespan">this</code> относится к глобальному объекту <code class="w3-codespan">[object Window]</code>.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            function myFunction() {<br>
            &nbsp; return this;<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_this_function.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2><b>this</b> в функции (строгий режим) </h2>
    <p>В <strong>строгом режиме</strong> JavaScript не допускается привязка по умолчанию.</p>
    <p>Таким образом, при использовании в функции в строгом режиме <code class="w3-codespan">this</code> является <code class="w3-codespan">undefined</code>.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            "use strict";<br>function myFunction() {<br>
            &nbsp; return this;<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_this_strict.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>
    <h2><b>this</b> в обработчиках событий</h2>
    <p>В обработчиках событий HTML <code class="w3-codespan">this</code> относится к элементу HTML, получившему событие:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;button onclick=&quot;this.style.display='none'&quot;&gt;<br>&nbsp; Нажмите, чтобы удалить меня!<br>&lt;/button&gt;</div>
        <p><a class="w3-btn" href="../jstryit/tryjs_this_event.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <h2>Привязка метода объекта</h2>
    <p>В этих примерах <code class="w3-codespan">this</code> - это объект <b>person</b> (объект person является "владельцем" функции):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const <b>person</b> = {<br>
            &nbsp; firstName&nbsp; : "John",<br>
            &nbsp; lastName&nbsp;&nbsp; : "Doe",<br>
            &nbsp; id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;5566,<br>
            &nbsp; myFunction : function() {<br>
            &nbsp;&nbsp;&nbsp; return <b>this</b>;<br>&nbsp;&nbsp;}<br>
            };
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_this_object.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const <b>person</b> = {<br>
            &nbsp; firstName: "John",<br>
            &nbsp; lastName : "Doe",<br>
            &nbsp; id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;5566,<br>
            &nbsp; fullName : function() {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;return <b>this</b>.firstName + " " +
            <b>this</b>.lastName;<br>&nbsp;&nbsp;}<br>
            };
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_this_method.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Другими словами: <b>this.firstName</b> означает <b>firstName</b> свойство <b>this</b> объекта (person).</p>
    <?php include '../include/addown_content.php'; ?>

    <h2>Явная привязка функций</h2>
    <p>Методы <code class="w3-codespan">call()</code> и <code class="w3-codespan">apply()</code> являются предопределенными методами JavaScript.</p>
    <p>Оба они могут использоваться для вызова метода объекта с другим объектом в качестве аргумента.</p>
    <div class="w3-panel w3-note">
        <p>Вы можете узнать больше о <code class="w3-codespan">call()</code> и <code class="w3-codespan">apply()</code> позже в этом учебнике на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>

    <p>В приведенном ниже примере при вызове person1.fullName с аргументом person2 <code class="w3-codespan">this</code> будет ссылаться на person2, даже если это метод person1:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const person1 = {<br>
            &nbsp; fullName: function() {<br>
            &nbsp;&nbsp;&nbsp; return this.firstName + &quot; &quot; + this.lastName;<br>
            &nbsp;&nbsp;}<br>}<br>
            const person2 = {<br>
            &nbsp; firstName:&quot;John&quot;,<br>
            &nbsp; lastName: &quot;Doe&quot;,<br>
            }<br>
            person1.fullName.call(person2);&nbsp; // Вернёт &quot;John Doe&quot;
        </div>
        <p><a class="w3-btn" href="../jstryit/tryjs_this_call.html" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_strict.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_arrow_function.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>