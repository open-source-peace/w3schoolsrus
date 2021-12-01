<?php include '../include/head.php'; ?>

<link rel="stylesheet" href="../styles/browserref.css">
<title>JavaScript Классы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Классы. Синтаксис. Использование класса. Метод конструктора. Методы класса. Поддержка браузерами. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript Классы</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_arrow_function.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_json.php">Next &#10095;</a>
    </div>
    <div class="w3-info">
        <p>В ECMAScript 2015, также известном как ES6, появились <strong>JavaScript классы</strong>.</p>
        <p><strong>JavaScript классы</strong> - это шаблоны для объектов JavaScript.</p>
    </div>

    <h2>Синтаксис JavaScript класса</h2>
    <p>Используйте ключевое слово <code class="w3-codespan">class</code> для создания класса.</p>
    <p>Всегда добавляйте метод с именем <code class="w3-codespan">constructor()</code>:</p>

    <div class="w3-example">
        <h3>Синтаксис</h3>
        <div class="w3-code notranslate jsHigh">
            class ClassName {<br>
            &nbsp;  constructor() { ... }<br>
            }
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            class Car {<br>
            &nbsp;  constructor(name, year) {<br>
            &nbsp;&nbsp;&nbsp; this.name = name;<br>
            &nbsp;&nbsp;&nbsp; this.year = year;<br>
            &nbsp; }<br>
            }
        </div>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <p>В приведенном выше примере создается класс с именем &quot;Car&quot;.</p>
    <p>Класс имеет два начальных свойства: "имя" и "год".</p>
    <div class="w3-panel w3-note">
        <p>JavaScript класс <b>не является</b> объектом.</p>
        <p>Он является <b>шаблоном</b> для JavaScript объектов.</p>
    </div>
    <hr>
    <h2>Использование класса</h2>
    <p>Когда есть класс, вы можете использовать его для создания объектов:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let myCar1 = new Car(&quot;Ford&quot;, 2014);<br>
            let myCar2 = new Car(&quot;Audi&quot;, 2019);
        </div>
        <p><a target="_blank" class="w3-btn" href="../jstryit/tryjs_class_init.html">Попробуйте сами &raquo;</a></p>
    </div>

    <p>В приведенном выше примере используется <b>класс Car</b> для создания двух <b>объектов Car</b>.</p>

    <div class="w3-panel w3-note">
        <p><strong>Метод конструктора</strong> вызывается автоматически при создании нового объекта.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Метод конструктора</h2>
    <p><strong>Метод конструктора</strong> - это особый метод:</p>
    <ul>
        <li>У него должно быть точное имя &quot;конструктор&quot;</li>
        <li>Он выполняется автоматически при создании нового объекта</li>
        <li>Он используется для инициализации свойств объекта</li>
    </ul>
    <p>Если вы не указываете метод конструктора, JavaScript добавит пустой метод конструктора.</p>
    <?php include '../include/addown_content.php'; ?>

    <h2>Методы класса</h2>
    <p><strong>Методы класса</strong> создаются с тем же синтаксисом, что и методы объекта.</p>
    <p>Используйте ключевое слово <code class="w3-codespan">class</code> для создания класса.</p>
    <p>Всегда добавляйте метод <code class="w3-codespan">constructor()</code>.</p>
    <p>Затем добавьте любое количество методов.</p>

    <div class="w3-example">
        <h3>Синтаксис</h3>
        <div class="w3-code notranslate jsHigh">
            class ClassName {<br>
            &nbsp;  constructor() { ... }<br>
            &nbsp;&nbsp;method_1() { ... }<br>
            &nbsp;&nbsp;method_2() { ... }<br>
            &nbsp;&nbsp;method_3() { ... }<br>
            }
        </div>
    </div>

    <p>Создайте метод класса с именем &quot;age&quot; (&quot;возраст&quot;), который возвращает возраст автомобиля:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            class Car {<br>
            &nbsp;  constructor(name, year) {<br>
            &nbsp;&nbsp;&nbsp; this.name = name;<br>
            &nbsp;&nbsp;&nbsp; this.year = year;<br>
            &nbsp;  }<br>&nbsp; age() {<br>
            &nbsp;&nbsp;&nbsp; let date = new Date();<br>
            &nbsp;&nbsp;&nbsp; return date.getFullYear() - this.year;<br>
            &nbsp;  }<br>}<br><br>
            let myCar = new Car(&quot;Ford&quot;, 2014);<br>
            document.getElementById(&quot;demo&quot;).innerHTML =<br>
            "Моему автомобилю " + myCar.age() + " лет.";
        </div>
        <p><a target="_blank" class="w3-btn" href="../jstryit/tryjs_class_method.html">Попробуйте сами &raquo;</a></p>
    </div>

    <p>Вы можете отправлять параметры в методы класса:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            class Car {<br>&nbsp; constructor(name, year) {<br>&nbsp;&nbsp;&nbsp;
            this.name = name;<br>&nbsp;&nbsp;&nbsp; this.year = year;<br>&nbsp; }<br>&nbsp;
            age(x) {<br>&nbsp;&nbsp;&nbsp; return x - this.year;<br>&nbsp; }<br>}<br><br>
            let date = new Date();<br>
            let year = date.getFullYear();<br><br>let myCar = new
            Car(&quot;Ford&quot;, 2014);<br>document.getElementById(&quot;demo&quot;).innerHTML=<br>&quot;Моему автомобилю &quot; + myCar.age(year) + &quot; лет.&quot;;
        </div>
        <p><a target="_blank" class="w3-btn" href="../jstryit/tryjs_class_method2.html">Попробуйте сами &raquo;</a></p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Поддержка браузерами</h2>
    <p>В следующей таблице определяется первая версия браузера с полной поддержкой классов в JavaScript:</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tbody><tr style="height:50px;">
                <th style="width:20%;" class="bsChrome" title="Chrome"></th>
                <th style="width:20%;" class="bsEdge" title="Edge"></th>
                <th style="width:20%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:20%;" class="bsSafari" title="Safari"></th>
                <th style="width:20%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td>Chrome 49</td>
                <td>Edge 12</td>
                <td>Firefox 45</td>
                <td>Safari 9</td>
                <td>Opera 36</td>
            </tr>
            <tr>
                <td>Mar, 2016</td>
                <td>Jul, 2015</td>
                <td>Mar, 2016</td>
                <td>Oct, 2015</td>
                <td>Mar, 2016</td>
            </tr></tbody>
        </table>
    </div>

    <div class="w3-panel w3-note"><p>Вы узнаете намного больше о классах JavaScript позже в этом учебнике на нашем сайте <?php include '../include/w3schools.php'; ?>.</p></div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_arrow_function.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_json.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>