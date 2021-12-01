<?php include '../include/head.php'; ?>
<title>PHP Типы данных. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Типы данных. String - Строки. Integer - Целые числа. Float. Boolean. Array. Object. NULL. Resource. Современный учебник по языку PHP. Как создать сайт с помощью PHP? <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Типы данных</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_echo_print.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_string.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>PHP Типы данных</h2>
    <p>Переменные могут хранить данные разных типов, а разные типы данных могут делать разные вещи.</p>
    <p>PHP поддерживает следующие типы данных:</p>
    <ul>
        <li>String - Строки</li>
        <li>Integer - Целые числа</li>
        <li>Float (числа с плавающей запятой - также называемые double)</li>
        <li>Boolean - Логические</li>
        <li>Array - Массив</li>
        <li>Object - Объект</li>
        <li>NULL - Ноль</li>
        <li>Resource - Ресурс</li>
    </ul>
    <hr>

    <h2>PHP String - Строка</h2>
    <p>Строка (string) - это последовательность символов, например &quot;Hello world!&quot;.</p>
    <p>Строка может быть любым текстом внутри кавычек. Вы можете использовать одинарные или двойные кавычки:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php <br>$x = &quot;Hello world!&quot;;<br>$y = 'Hello world!';<br><br>echo $x;<br>echo &quot;&lt;br&gt;&quot;; <br>echo $y;<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_datatypes_string.html">Попробуйте сами &raquo;</a></div>
    <hr>

    <h2>PHP Integer - Целое число</h2>
    <p>Целочисленный тип данных (integer) - это не десятичное число между -2,147,483,648 и 2,147,483,647.</p>
    <p>Правила для целых чисел:</p>
    <ul>
        <li>Целое число должно содержать хотя бы одну цифру</li>
        <li>Целое число не должно иметь десятичной точки</li>
        <li>Целое число может быть положительным или отрицательным</li>
        <li>Целые числа могут быть указаны в десятичной (основание 10), шестнадцатеричной (основание 16), восьмеричной (основание 8) или двоичной (основание 2) системе счисления</li>
    </ul>
    <p>В следующем примере $x является целым числом. Функция PHP var_dump() возвращает тип данных и значение:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php <br>$x = 5985;<br>var_dump($x);<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_datatypes_integer.html">Попробуйте сами &raquo;</a></div>
    <hr>

    <h2>PHP Float - Число с плавающей точкой</h2>
    <p>Float (число с плавающей точкой) - это число с десятичной запятой (в виде точки) или число в экспоненциальной форме.</p>
    <p>В следующем примере $x - это число с плавающей точкой. Функция PHP var_dump() возвращает тип данных и значение:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php <br>$x = 10.365;<br>var_dump($x);<br>?&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_datatypes_float.html">Попробуйте сами &raquo;</a></div>
    <p><b>Примечание.</b> Обратите внимание, что в программировании на языке PHP числа с запятой пишутся как числа с точкой.</p>
    <hr>

    <h2>PHP Boolean - Логические значения</h2>
    <p>Логическое значение (boolean) представляет два возможных состояния: TRUE или FALSE (ИСТИНА или ЛОЖЬ).</p>
    <div class="w3-code htmlHigh w3-border notranslate">
        <div>
            $x = true;<br>
            $y = false;</div></div>
    <p>Логические значения часто используются в условных тестах. Подробнее об условном тестировании вы узнаете в следующей главе этого учебника.</p>
    <hr>

    <h2>PHP Array - Массив</h2>
    <p>Массив (array) хранит несколько значений в одной переменной.</p>
    <p>В следующем примере $cars - это массив. Функция PHP var_dump() возвращает тип данных и значение:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php <br>$cars = array(&quot;Volvo&quot;,&quot;BMW&quot;,&quot;Toyota&quot;);<br>var_dump($cars);<br>
            ?&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_datatypes_array.html">Попробуйте сами &raquo;</a></div>
    <p>Вы узнаете намного больше о массивах в последующих главах этого учебника.</p>
    <hr>

    <h2>PHP Object - Объект</h2>
    <p>Классы и объекты - два основных аспекта объектно-ориентированного программирования.</p>
    <p>Класс - это шаблон для объектов, а объект - это экземпляр класса.</p>
    <p>При создании отдельных объектов они наследуют все свойства и поведение класса, но каждый объект будет иметь разные значения свойств.</p>
    <p>Предположим, у нас есть класс с именем Car. Автомобиль может иметь такие свойства, как модель, цвет и т.д. Мы можем определять такие переменные, как $model, $color и т.д., для хранения значений этих свойств.</p>
    <p>При создании отдельных объектов (Volvo, BMW, Toyota и т.д.) они наследуют все свойства и поведение класса, но каждый объект будет иметь разные значения свойств.</p>
    <p>Если вы создаете функцию __construct(), PHP будет автоматически вызывать эту функцию, когда вы создаете объект из класса.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>class Car {<br>&nbsp; public $color;<br>&nbsp; public $model;<br>&nbsp;
            public function __construct($color, $model) {<br>&nbsp;&nbsp;&nbsp;
            $this-&gt;color = $color;<br>&nbsp;&nbsp;&nbsp; $this-&gt;model = $model;<br>&nbsp;
            }<br>&nbsp; public function message() {<br>&nbsp;&nbsp;&nbsp; return &quot;My car
            is a &quot; . $this-&gt;color . &quot; &quot; . $this-&gt;model . &quot;!&quot;;<br>&nbsp; }<br>}<br><br>$myCar
            = new Car(&quot;black&quot;, &quot;Volvo&quot;);<br>echo $myCar -&gt; message();<br>echo &quot;&lt;br&gt;&quot;;<br>$myCar
            = new Car(&quot;red&quot;, &quot;Toyota&quot;);<br>echo $myCar -&gt; message();<br>?&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_datatypes_object.html">Попробуйте сами &raquo;</a></div>
    <hr>

    <h2>PHP значение NULL - Ноль</h2>
    <p>Null - это специальный тип данных, который может иметь только одно значение: NULL.</p>
    <p>Переменная типа данных NULL - это переменная, которой не присвоено значение.</p>
    <p><strong>Совет:</strong> Если переменная создается без значения, ей автоматически присваивается значение NULL.</p>
    <p>Переменные также могут быть очищены путем установки значения в NULL:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$x = &quot;Hello world!&quot;;<br>$x = null;<br>var_dump($x);<br>?&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_datatypes_null.html">Попробуйте сами &raquo;</a></div>
    <hr>

    <h2>PHP Resource - Ресурс</h2>
    <p>Специальный тип resource не является фактическим типом данных. Это хранение ссылки на функции и ресурсы, внешние по отношению к PHP.</p>
    <p>Типичным примером использования типа данных resource является вызов базы данных.</p>
    <p>Мы не будем говорить о типе resource здесь, так как это сложная тема.</p>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_echo_print.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_string.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>