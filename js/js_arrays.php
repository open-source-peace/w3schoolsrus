<?php include '../include/head.php'; ?>

<title>JavaScript Массивы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Что такое массивы? Массив - это специальная переменная, которая может содержать более одного значения одновременно. Создание массива. Использование ключевого слова new. Доступ к элементам массива. Изменение элемента массива. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Массивы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_number_methods.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_array_methods.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Массивы JavaScript</strong> используются для хранения нескольких значений в одной переменной.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const cars = [&quot;Saab&quot;, &quot;Volvo&quot;, &quot;BMW&quot;];
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Что такое массив?</h2>
    <p><strong>Массив</strong> - это специальная переменная, которая может содержать более одного значения одновременно.</p>
    <p>Если у вас есть список элементов (например, список названий автомобилей), хранение автомобилей в отдельных переменных может выглядеть следующим образом:</p>

    <div class="w3-code w3-border notranslate jsHigh">
        <div>
            let car1 = &quot;Saab&quot;;<br>
            let car2 = &quot;Volvo&quot;;<br>
            let car3 = &quot;BMW&quot;;
        </div></div>

    <p>А если вы хотите перебрать машины и найти конкретную? А если бы у вас было не 3 машины, а 300?</p>
    <p>Решение - массив!</p>
    <p>Массив может содержать множество значений под одним именем, и вы можете получить доступ к значениям, лишь указав номер индекса.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Создание массива</h2>
    <p>Использование литерала массива - самый простой способ создать массив JavaScript.</p>
    <p>Синтаксис:</p>
    <div class="w3-code w3-border notranslate jsHigh">
        <div>
            const <em>array_name</em> = [<em>item1</em>, <em>item2</em>, ...];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const cars = [&quot;Saab&quot;, &quot;Volvo&quot;, &quot;BMW&quot;];
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array.html">Попробуйте сами &raquo;</a>
    </div>
    <p>Пробелы и перенос строки не важны. Объявление может занимать несколько строк:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const cars = [<br>
            &nbsp;&nbsp;&quot;Saab&quot;,<br>
            &nbsp; &quot;Volvo&quot;,<br>
            &nbsp; &quot;BMW&quot;<br>
            ];</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_newlines.html">Попробуйте сами &raquo;</a>
    </div>
    <p>Вы также можете создать массив, а затем предоставить элементы:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const cars = [];<br>
            cars[0]= &quot;Saab&quot;;<br>
            cars[1]= &quot;Volvo&quot;;<br>
            cars[2]= &quot;BMW&quot;;<br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_add_elements.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Использование JavaScript ключевого слова new</h2>
    <p>В следующем примере также создается массив и присваиваются ему значения:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const cars = new Array(&quot;Saab&quot;, &quot;Volvo&quot;, &quot;BMW&quot;);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_new.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Два приведенных выше примера делают то же самое.</p>
        <p>Нет необходимости использовать <code class="w3-codespan">new Array()</code>.<br>
            Для простоты, удобочитаемости и скорости выполнения используйте первый (метод литерала массива).</p>
    </div>
  <?php include '../include/addown_content.php'; ?>

    <h2>Доступ к элементам массива</h2>
    <p>Вы получаете доступ к элементу массива, ссылаясь на <b>номер индекса</b>:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            const cars = [&quot;Saab&quot;, &quot;Volvo&quot;, &quot;BMW&quot;];<br>
            let x = cars[0];  &nbsp;&nbsp;&nbsp;// x = "Saab"
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_element.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Индексы массива начинаются с 0.</p>
        <p>[0] - это первый элемент. [1] - это второй элемент.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Изменение элемента массива</h2>
    <p>Эта инструкция изменяет значение первого элемента в <code class="w3-codespan">cars</code>:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            cars[0] = "Opel";
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const cars = [&quot;Saab&quot;, &quot;Volvo&quot;, &quot;BMW&quot;];<br>
            cars[0] = "Opel";
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_element_change.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Доступ к полному массиву</h2>
    <p>С помощью JavaScript можно получить доступ к полному массиву, указав имя массива:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const cars = [&quot;Saab&quot;, &quot;Volvo&quot;, &quot;BMW&quot;];<br>
            document.getElementById(&quot;demo&quot;).innerHTML = cars;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_full.html" target="_blank">Попробуйте сами &raquo;</a></div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Массивы - это объекты</h2>
    <p>Массивы - это особый тип объектов. Оператор <code class="w3-codespan">typeof</code> в JavaScript возвращает &quot;объект&quot; для массивов.</p>
    <p>Но массивы JavaScript лучше всего описывать как массивы.</p>
    <p>Массивы используют <b>числа</b> для доступа к своим &quot;элементам&quot;. В этом примере <code class="w3-codespan">person[0]</code> возвращает John:</p>

    <div class="w3-example">
        <h3>Массив:</h3>
        <div class="w3-code notranslate jsHigh">
            const person = [&quot;John&quot;, &quot;Doe&quot;, 46];
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_array.html">Попробуйте сами &raquo;</a>
    </div>
    <p>Объекты используют <b>имена</b> для доступа к своим &quot;членам&quot;. В этом примере <code class="w3-codespan">person.firstName</code> возвращает John:</p>
    <div class="w3-example">
        <h3>Объект:</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {firstName:&quot;John&quot;, lastName:&quot;Doe&quot;, age:46};
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_object.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Элементы массива могут быть объектами</h2>
    <p>Переменные JavaScript могут быть объектами. Массивы - это особые виды объектов.</p>
    <p>Из-за этого в одном массиве могут быть переменные разных типов.</p>
    <p>Вы можете иметь объекты в массиве. Вы можете иметь функции в массиве. Вы можете иметь массивы в массиве:</p>

    <div class="w3-code w3-border notranslate jsHigh"><div>
            myArray[0] = Date.now;<br>
            myArray[1] = myFunction;<br>
            myArray[2] = myCars;</div>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Свойства и методы массива</h2>
    <p>Настоящая сила массивов JavaScript - это встроенные свойства и методы массива:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            cars.length&nbsp;&nbsp;&nbsp;// Возвращает количество элементов<br>
            cars.sort()&nbsp;&nbsp;&nbsp;// Сортирует массив
        </div>
    </div>
    <p>Методы массивов рассматриваются в следующих главах.</p>
    <hr>

    <h2>Свойство length (длины)</h2>
    <p>Свойство <code class="w3-codespan">length</code> массива возвращает длину массива (количество элементов массива).</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            fruits.length;&nbsp;&nbsp; // Возвращает 4
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_length.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Свойство <code class="w3-codespan">length</code> всегда на единицу больше, чем самый высокий индекс массива.</p>
    </div>
  <?php include '../include/addown_content.php'; ?>

    <h2>Доступ к первому элементу массива</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            fruits[0];&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает "Banana"
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_first.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Доступ к последнему элементу массива</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            fruits[fruits.length - 1];&nbsp;&nbsp;// Возвращает "Mango"
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_last.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Зацикливание элементов массива</h2>
    <p>Самый безопасный способ перебрать массив - это использовать цикл <code class="w3-codespan">for</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br>
            let fLen = fruits.length;<br><br>text = &quot;&lt;ul&gt;&quot;;<br>for (let i = 0; i &lt; fLen; i++) {<br>&nbsp;&nbsp;text += &quot;&lt;li&gt;&quot; + fruits[i] + &quot;&lt;/li&gt;&quot;;<br>}<br>text += &quot;&lt;/ul&gt;&quot;;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_loop.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Вы также можете использовать функцию <code class="w3-codespan">Array.forEach()</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;, &quot;Mango&quot;];<br><br>
            let text = &quot;&lt;ul&gt;&quot;;<br>fruits.forEach(myFunction);<br>text += &quot;&lt;/ul&gt;&quot;;<br><br>function myFunction(value) {<br>&nbsp;
            text += &quot;&lt;li&gt;&quot; + value + &quot;&lt;/li&gt;&quot;;<br>}</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_loop_foreach.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Добавление элементов массива</h2>
    <p>Самый простой способ добавить новый элемент в массив - использовать метод <code class="w3-codespan">push()</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;];<br>
            fruits.push(&quot;Lemon&quot;);&nbsp;&nbsp;// Добавляет новый элемент (Lemon) к fruits</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_add_push.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Новый элемент также можно добавить в массив с помощью свойства <code class="w3-codespan">length</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;];<br>
            fruits[fruits.length] = &quot;Lemon&quot;;&nbsp;&nbsp;// Добавляет "Lemon" к fruits</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_add.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-warning">
        <p><b>ПРЕДУПРЕЖДЕНИЕ!</b><br>
        <p>Добавление элементов с высокими индексами может создать неопределенные (undefined) &quot;дыры&quot; в массиве:</p>
    </div>
  <?php include '../include/addown_content.php'; ?>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;];<br>
            fruits[6] = &quot;Lemon&quot;;&nbsp;&nbsp;// Создание undefined "дыр" в fruits</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_holes.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Ассоциативные массивы</h2>
    <p>Многие языки программирования поддерживают массивы с именованными индексами.</p>
    <p>Массивы с именованными индексами называются ассоциативными массивами (или хэшами).</p>
    <p>JavaScript <b>не</b> поддерживает массивы с именованными индексами.</p>
    <p>В JavaScript <strong>массивы</strong> всегда используют <strong>нумерованные индексы</strong>.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const person = [];<br>
            person[0] = &quot;John&quot;;<br>
            person[1] = &quot;Doe&quot;;<br>
            person[2] = 46;<br>
            person.length;&nbsp;&nbsp;&nbsp;&nbsp;// Вернёт 3<br>
            person[0];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Вернёт &quot;John&quot;</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_associative_1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-warning">
        <p><b>ПРЕДУПРЕЖДЕНИЕ!!</b><br>
            Если вы используете именованные индексы, JavaScript переопределит массив на объект.</p>
        <p>После этого некоторые методы и свойства массива будут давать <strong>неверные результаты</strong>.</p>
    </div>

    <div class="w3-example">
        <h3>Пример:</h3>
        <div class="w3-code notranslate jsHigh">
            const person = [];<br>
            person[&quot;firstName&quot;] = &quot;John&quot;;<br>
            person[&quot;lastName&quot;] = &quot;Doe&quot;;<br>
            person[&quot;age&quot;] = 46;<br>
            person.length;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Вернёт 0<br>
            person[0];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Вернёт undefined</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_associative_2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Разница между массивами и объектами</h2>
    <p>В JavaScript <strong>массивы</strong> используют <strong>нумерованные индексы</strong>.</p>
    <p>В JavaScript <strong>объекты</strong> используют <strong>именованные индексы</strong>.</p>

    <div class="w3-panel w3-note">
        <p>Массивы - это особый вид объектов с пронумерованными индексами.</p>
    </div>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Когда использовать массивы? Когда использовать объекты?</h2>
    <ul>
        <li>JavaScript не поддерживает ассоциативные массивы.</li>
        <li>Вы должны использовать <strong>объекты</strong>, если хотите, чтобы имена элементов были <strong>строками (текстом)</strong>.</li>
        <li>Вы должны использовать <strong>массивы</strong>, если хотите, чтобы имена элементов были <strong>числами</strong>.</li>
    </ul>
    <hr>

    <h2>Избегайте new Array()</h2>
    <p>Нет необходимости использовать встроенный JavaScript конструктор массива <code class="w3-codespan">new</code> Array().</p>
    <p><strong>Используйте <code class="w3-codespan">[]</code> вместо этого.</strong></p>
    <p>Эти два разных оператора создают новый пустой массив с именем points:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            const points = new Array();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Плохо<br>
            const points = [];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Хорошо
        </div>
    </div>
    <p>Эти два разных оператора создают новый массив, содержащий 6 чисел:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            const points = new Array(40, 100, 1, 5, 25, 10);<br>
            const points = [40, 100, 1, 5, 25, 10];
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_literal.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Ключевое слово <code class="w3-codespan">new</code> только усложняет код. Это также может привести к неожиданным результатам:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            // Это создает массив с двумя элементами (40 и 100):<br>
            const points = new Array(40, 100);&nbsp;&nbsp;
        </div>
    </div>

    <p>А что, если удалить один из элементов?</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            // Это создает массив с 40 undefined элементами!!<br>
            const points = new Array(40);&nbsp;&nbsp;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_new_error.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Как распознать массив</h2>
    <p>Распространенный вопрос: как узнать, является ли переменная массивом?</p>
    <p>Проблема в том, что JavaScript оператор <code class="w3-codespan">typeof</code> возвращает <code class="w3-codespan">object</code>:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;];<br>
            typeof fruits;&nbsp;&nbsp;&nbsp; // возвращает object</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_typeof.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Оператор <code class="w3-codespan">typeof</code> возвращает <code class="w3-codespan">object</code>, потому что массив JavaScript является объектом.</p>
    <h3>Решение 1:</h3>
    <p>Для решения этой проблемы ECMAScript 5 определяет новый метод <code class="w3-codespan">Array.isArray()</code>:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            Array.isArray(fruits);&nbsp;&nbsp; // возвращает true</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_isarray_method.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <h3>Решение 2:</h3>
    <p>Оператор <code class="w3-codespan">instanceof</code> возвращает <code class="w3-codespan">true</code>, если объект создан данным конструктором:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            const fruits = [&quot;Banana&quot;, &quot;Orange&quot;, &quot;Apple&quot;];<br>
            <br>fruits instanceof Array;&nbsp;&nbsp; // возвращает true</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_array_instanceof.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <form autocomplete="off" spellcheck="false" id="w3-exerciseform" action="https://www.w3schools.com/js/exercise_js.asp?filename=exercise_js_arrays1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Получите значение "<code class="w3-codespan">Volvo</code>" из массива <code class="w3-codespan">cars</code>.</p>
            <div class="exerciseprecontainer">
<pre>
const cars = ["Saab", "Volvo", "BMW"];
let x = <input name="ex1" maxlength="7" style="width: 74px;">;
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_number_methods.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_array_methods.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>