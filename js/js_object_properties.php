<?php include '../include/head.php'; ?>

<title>JavaScript Свойства объекта. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Свойства объекта. Доступ к свойствам. Цикл for...in. Добавление новых свойств. Удаление свойств. Вложенные объекты и массивы. Атрибуты свойства. Объекты JavaScript наследуют свойства своего прототипа. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Свойства объекта</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_object_definition.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_object_methods.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Свойства</strong> - самая важная часть любого объекта JavaScript.</p>
    <hr>

    <h2>JavaScript Свойства</h2>
    <p><strong>Свойства</strong> - это значения, связанные с объектом JavaScript.</p>
    <p><strong>Объект JavaScript</strong> - это набор неупорядоченных свойств.</p>
    <p>Свойства обычно можно изменять, добавлять и удалять, но некоторые из них доступны только для чтения.</p>
    <hr>

    <h2>Доступ к свойствам JavaScript</h2>
    <p>Синтаксис для доступа к свойству объекта:</p>
    <div class="w3-code w3-border notranslate jsHigh">
        <div>
            <i>objectName.property&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>// person.age
        </div>
    </div>
    <p>или</p>
    <div class="w3-code w3-border notranslate jsHigh"><div>
            <i>objectName</i>[&quot;<i>property</i>&quot;]&nbsp;&nbsp;&nbsp;// person[&quot;age&quot;]</div></div>
    <p>или</p>
    <div class="w3-code w3-border notranslate jsHigh"><div>
            <i>objectName</i>[<i>expression</i>]&nbsp;&nbsp; // x = &quot;age&quot;; person[x]</div></div>

    <div class="w3-panel w3-note">
        <p>Выражение должно соответствовать имени свойства.</p>
    </div>

    <div class="w3-example">
        <h3>Пример 1</h3>
        <div class="w3-code notranslate jsHigh">
            person.firstname + &quot; is &quot; + person.age + &quot; years old.&quot;;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_properties1.html">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-example">
        <h3>Пример 2</h3>
        <div class="w3-code notranslate jsHigh">
            person[&quot;firstname&quot;] + &quot; is &quot; + person[&quot;age&quot;] + &quot; years old.&quot;;</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_properties2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>JavaScript Цикл for...in</h2>
    <p>JavaScript инструкция <code class="w3-codespan">for...in</code> перебирает свойства объекта.</p>
    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate jsHigh"><div>
            for (let <i>variable</i> in <i>object</i>) {<br>
            <i>&nbsp; // код для выполнения</i><br>
            }</div></div>

    <p>Блок кода внутри цикла <code class="w3-codespan">for...in</code> будет выполняться один раз для каждого свойства.</p>
    <p>Цикл по свойствам объекта:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {<br>
            &nbsp; fname:&quot; John&quot;,<br>
            &nbsp; lname:&quot; Doe&quot;,<br>
            &nbsp; age: 25<br>
            };<br>
            <br>
            for (let x in person) {<br>
            &nbsp; txt += person[x];<br>
            }</div>
        <a target="_blank" href="../jstryit/tryjs_object_properties_for_in.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Добавление новых свойств</h2>
    <p>Вы можете добавить новые свойства к существующему объекту, просто присвоив ему значение.</p>
    <p>Предположим, что объект person уже существует - затем вы можете присвоить ему новые свойства:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            person.nationality = &quot;English&quot;;</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_properties3.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Удаление свойств</h2>
    <p>Ключевое слово <code class="w3-codespan">delete</code> удаляет свойство из объекта:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {<br>
            &nbsp; firstName: &quot;John&quot;,<br>
            &nbsp; lastName: &quot;Doe&quot;,<br>
            &nbsp; age: 50,<br>
            &nbsp; eyeColor: &quot;blue&quot;<br>
            };<br><br>
            delete person.age;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_properties4.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>или удаляет person[&quot;age&quot;];</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {<br>
            &nbsp; firstName: &quot;John&quot;,<br>
            &nbsp; lastName: &quot;Doe&quot;,<br>
            &nbsp; age: 50,<br>
            &nbsp; eyeColor: &quot;blue&quot;<br>
            };<br><br>
            delete person[&quot;age&quot;];
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_properties5.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Ключевое слово <code class="w3-codespan">delete</code> удаляет как значение свойства, так и само свойство.</p>
    <p>После удаления свойство нельзя использовать до его повторного добавления.</p>
    <p>Оператор <code class="w3-codespan">delete</code> разработан для использования со свойствами объекта. Он не влияет на переменные или функции.</p>
    <p>Оператор <code class="w3-codespan">delete</code> не следует использовать для предопределенных свойств объекта JavaScript. Это может привести к сбою вашего приложения.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Вложенные объекты</h2>
    <p>Значения в объекте могут быть другим объектом:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            myObj = {<br>
            &nbsp;&nbsp;name:&quot;John&quot;,<br>&nbsp; age:30,<br>
            &nbsp;
            cars: {<br>&nbsp;&nbsp;&nbsp; car1:&quot;Ford&quot;,<br>
            &nbsp;&nbsp;&nbsp;
            car2:&quot;BMW&quot;,<br>&nbsp;&nbsp;&nbsp; car3:&quot;Fiat&quot;<br>
            &nbsp;&nbsp;}<br>}
        </div>
    </div>

    <p>Вы можете получить доступ к вложенным объектам, используя точечную нотацию или нотацию скобок:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            myObj.cars.car2;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_nested.html">Попробуйте сами &raquo;</a>
    </div>

    <p>или:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            myObj.cars[&quot;car2&quot;];
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_nested2.html">Попробуйте сами &raquo;</a>
    </div>

    <p>или:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            myObj[&quot;cars&quot;][&quot;car2&quot;];
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_nested3.html">Попробуйте сами &raquo;</a>
    </div>

    <p>или:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let p1 = "cars";<br>
            let p2 = "car2";<br>
            myObj[p1][p2];
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_nested4.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Вложенные массивы и объекты</h2>
    <p>Значения в объектах могут быть массивами, а значения в массивах могут быть объектами:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const myObj =
            {<br>&nbsp;&nbsp;name: &quot;John&quot;,<br>&nbsp; age: 30,<br>
            &nbsp;
            cars: [<br>&nbsp;&nbsp;&nbsp;&nbsp;{name:&quot;Ford&quot;,
            models:[&quot;Fiesta&quot;, &quot;Focus&quot;, &quot;Mustang&quot;]},<br>&nbsp;&nbsp;&nbsp;
            {name:&quot;BMW&quot;, models:[&quot;320&quot;, &quot;X3&quot;, &quot;X5&quot;]},<br>
            &nbsp;&nbsp;&nbsp;
            {name:&quot;Fiat&quot;, models:[&quot;500&quot;, &quot;Panda&quot;]}<br>
            &nbsp; ]<br>}</div>
    </div>

    <p>Чтобы получить доступ к массивам внутри массивов, используйте цикл for-in для каждого массива:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            for (let i in myObj.cars) {<br>&nbsp; x += &quot;&lt;h1&gt;&quot; + myObj.cars[i].name
            + &quot;&lt;/h1&gt;&quot;;<br>&nbsp; for (let j in myObj.cars[i].models) {<br>&nbsp;&nbsp;&nbsp;
            x += myObj.cars[i].models[j];<br>&nbsp; }<br>}<br></div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_nested.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Атрибуты свойства</h2>
    <p>У всех свойств есть имя. Кроме того, они также имеют значение.</p>
    <p>Значение является одним из атрибутов свойства.</p>
    <p>Другие атрибуты: перечисляемый, настраиваемый и доступный для записи.</p>
    <p>Эти атрибуты определяют, как можно получить доступ к свойству (доступно ли оно для чтения? или для записи?)</p>
    <p>В JavaScript все атрибуты можно читать, но можно изменить только атрибут значения (и только если свойство доступно для записи).</p>
    <p>(В ECMAScript 5 есть методы как для получения, так и для установки всех атрибутов свойств).</p>
    <hr>

    <h2>Свойства прототипа</h2>
    <p>Объекты JavaScript наследуют свойства своего прототипа.</p>
    <p>Ключевое слово <code class="w3-codespan">delete</code> не удаляет унаследованные свойства, но если вы удалите свойство прототипа, это повлияет на все объекты, унаследованные от прототипа.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_object_definition.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_object_methods.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>