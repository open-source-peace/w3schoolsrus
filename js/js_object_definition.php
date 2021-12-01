<?php include '../include/head.php'; ?>

<title>JavaScript Определения объектов. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Определения объектов. В JavaScript почти всё является объектом. Чтио такое примитивы? Объекты - это переменные. Свойства и методы объекта. Создание. Использование литерала объекта. Ключевое слово new. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Объекты</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_history.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_object_properties.php">Next &#10095;</a>
    </div>
    <hr>
    <div class="w3-panel w3-note">
        <p>В JavaScript объекты являются королями. Если вы разбираетесь в объектах, вы понимаете JavaScript.</p>
    </div>
    <hr>

    <p>В JavaScript почти &quot;всё&quot; является объектом.</p>
    <ul>
        <li>Логические (булевы) значения могут быть объектами (если они определены с помощью ключевого слова <code class="w3-codespan">new</code>)</li>
        <li>Числа могут быть объектами (если они определены с помощью ключевого слова <code class="w3-codespan">new</code>)</li>
        <li>Строки могут быть объектами (если они определены с помощью ключевого слова <code class="w3-codespan">new</code>)</li>
        <li>Даты всегда являются объектами</li>
        <li>Математика - это всегда объекты</li>
        <li>Регулярные выражения всегда являются объектами</li>
        <li>Массивы всегда являются объектами</li>
        <li>Функции всегда являются объектами</li>
        <li>Объекты всегда являются объектами</li>
    </ul>
    <p>Все значения JavaScript, кроме примитивов, являются объектами.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>JavaScript Примитивы</h2>
    <p><strong>Примитивное значение</strong> - это значение, не имеющее свойств или методов.</p>
    <p><strong>Примитивный тип данных</strong> - это данные с примитивным значением.</p>
    <p>JavaScript определяет 5 типов примитивных типов данных:</p>
    <ul>
        <li><code class="w3-codespan">string</code></li>
        <li><code class="w3-codespan">number</code></li>
        <li><code class="w3-codespan">boolean</code></li>
        <li><code class="w3-codespan">null</code></li>
        <li><code class="w3-codespan">undefined</code></li>
    </ul>

    <p>Примитивные значения неизменяемы (они жестко запрограммированы и поэтому не могут быть изменены).</p>

    <div class="w3-panel w3-note">
        <p>если x = 3.14, вы можете изменить значение x. Но вы не можете изменить значение 3.14.</p>
    </div>

    <table class="ws-table-all">
        <tr><th>Значение</th><th>Тип</th><th>Коментарий</th></tr>
        <tr><td>"Hello&quot;</td><td>string</td><td>&quot;Hello&quot; всегда &quot;Hello&quot;</td></tr>
        <tr><td>3.14</td><td>number</td><td>3.14 всегда 3.14</td></tr>
        <tr><td>true</td><td>boolean</td><td>true всегда true</td></tr>
        <tr><td>false</td><td>boolean</td><td>false всегда false</td></tr>
        <tr><td>null</td><td>null (объект)</td><td>null всегда null</td></tr>
        <tr><td>undefined</td><td>undefined</td><td>undefined всегда undefined</td></tr>
    </table>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Объекты - это переменные</h2>
    <p>Переменные JavaScript могут содержать одиночные значения:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let person = &quot;John Doe&quot;;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_variable.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>JavaScript переменные также могут содержать множество значений.</p>
    <p>Объекты тоже переменные. Но объекты могут содержать много значений.</p>
    <p>Значения объекта записываются в виде пар <b>имя: значение</b> (имя и значение, разделенные двоеточием).</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let person = {firstName:&quot;John&quot;, lastName:&quot;Doe&quot;, age:50, eyeColor:&quot;blue&quot;};
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_object.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>JavaScript объект - это коллекция <strong>именованных значений</strong>.</p>
    </div>
    <p>Обычно объекты объявляются с помощью ключевого слова <code class="w3-codespan">const</code>.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {firstName:&quot;John&quot;, lastName:&quot;Doe&quot;, age:50, eyeColor:&quot;blue&quot;};
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_const.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Свойства объекта</h2>
    <p>Именованные значения в JavaScript объектах называются <strong>свойствами</strong>.</p>
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
    </table>

    <p>Объекты, записанные как пары имя-значение, похожи на:</p>
    <ul>
        <li>Ассоциативные массивы в PHP</li>
        <li>Словари на Python</li>
        <li>Хеш-таблицы на C</li>
        <li>Хеш-карты в Java</li>
        <li>Хеши на Ruby и Perl</li>
    </ul>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Методы объекта</h2>
    <p>Методы - это <b>действия</b>, которые можно выполнять с объектами.</p>
    <p>Свойства объекта могут быть как примитивными значениями, так и другими объектами и функциями.</p>
    <p><b>Метод объекта</b> - это свойство объекта, содержащее <b>определение функции</b>.</p>

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
        <p>JavaScript объекты - это контейнеры для именованных значений, называемых свойствами и методами.</p>
    </div>

    <p>Вы узнаете больше о методах в следующих главах.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Создание объекта JavaScript</h2>
    <p>С помощью JavaScript вы можете определять и создавать свои собственные объекты.</p>
    <p>Существуют разные способы создания новых объектов:</p>
    <ul>
        <li>Создайте единый объект, используя литерал объекта</li>
        <li>Создайте единый объект с ключевым словом <code class="w3-codespan">new</code>.</li>
        <li>Определите конструктор объекта, а затем создайте объекты сконструированного типа.</li>
        <li>Создайте объект, используя <code class="w3-codespan">Object.create()</code>.</li>
    </ul>
    <hr>

    <h2>Использование литерала объекта</h2>
    <p>Это самый простой способ создать объект JavaScript.</p>
    <p>Используя литерал объекта, вы одновременно определяете и создаете объект в одном операторе.</p>
    <p>Литерал объекта - это список пар имя: значение (например, age: 50) в фигурных скобках {}.</p>
    <p>В следующем примере создается новый объект JavaScript с четырьмя свойствами:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {firstName:&quot;John&quot;, lastName:&quot;Doe&quot;, age:50, eyeColor:&quot;blue&quot;};
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_create_1.html">Попробуйте сами &raquo;</a>
    </div>
    <p>Пробелы и перенос строки не важны. Определение объекта может занимать несколько строк:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {<br>&nbsp;&nbsp;firstName: &quot;John&quot;,<br>&nbsp;&nbsp;lastName: &quot;Doe&quot;,<br>&nbsp;&nbsp;age: 50,<br>&nbsp;&nbsp;eyeColor: &quot;blue&quot;<br>};
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_create_2.html">Попробуйте сами &raquo;</a>
    </div>
    <p>В этом примере создается пустой объект JavaScript, а затем добавляются 4 свойства:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {};<br>
            person.firstName = &quot;John&quot;;<br>
            person.lastName = &quot;Doe&quot;;<br>
            person.age = 50;<br>
            person.eyeColor = &quot;blue&quot;;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_create_empty.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Использование JavaScript ключевого слова new</h2>
    <p>В следующем примере создается новый объект JavaScript с помощью <code class="w3-codespan">new Object()</code>, а затем добавляются 4 свойства:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const person = new Object();<br>
            person.firstName = &quot;John&quot;;<br>
            person.lastName = &quot;Doe&quot;;<br>
            person.age = 50;<br>
            person.eyeColor = &quot;blue&quot;;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_create_new.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Приведенные выше примеры делают то же самое.</p>
        <p>Но нет необходимости использовать <code class="w3-codespan">new Object()</code>.</p>
        <p>Для удобства чтения, простоты и скорости выполнения используйте метод литерала объекта.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Объекты JavaScript изменяемы</h2>
    <p>Объекты изменяемы: они адресуются по ссылке, а не по значению.</p>
    <p>Если человек является объектом, следующее утверждение не создаст копию человека:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            const x = person;&nbsp; // Не будет создавать копию человека
        </div>
    </div>

    <p>Объект x - <b>не копия</b> человека. Это <b>это</b> человек. И x, и person - один и тот же объект.</p>
    <p>Любые изменения в x также изменят person, потому что x и person являются одним и тем же объектом.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {<br>
            &nbsp; firstName:&quot;John&quot;,<br>
            &nbsp; lastName:&quot;Doe&quot;,<br>
            &nbsp; age:50, eyeColor:&quot;blue&quot;<br>
            }<br>
            <br>const x = person;<br>
            x.age = 10;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Изменит как x.age, так и person.age
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_object_mutable.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_history.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_object_properties.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>