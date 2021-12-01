<?php include '../include/head.php'; ?>

  <title>JavaScript Объекты. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='JavaScript Объекты. Свойства и методы объекта. Доступ к свойствам и методам. Ключевое слово this. Примеры кода. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

  <article>
    <h1>JavaScript <span class="color_h1">Объекты</span></h1>
    <div class="w3-clear nextprev">
      <a class="w3-left w3-btn" href="js_functions.php">&#10094; Prev</a>
      <a class="w3-right w3-btn" href="js_events.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Реальные объекты, свойства и методы</h2>
    <p>В реальной жизни автомобиль - это <strong>объект</strong>.</p>
    <p>Автомобиль имеет такие <strong>свойства</strong>, как вес и цвет, а также такие <strong>методы</strong>, как старт и остановка:</p>

    <div class="w3-responsive">
      <table class="w3-table-all" style="margin:6px 0">
        <tr>
          <th style="width:370px">
            Объект
          </th>
          <th>
            Свойства
          </th>
          <th>
            Методы
          </th>
        </tr>
        <tr>
          <td>
            <img src="../images/objectExplained.gif" style="width:368px;height:230px;margin-left:-68px;margin-top:-40px" alt="Объект в JavaScript">
          </td>
          <td>
            <br>car.name = Fiat<br><br>
            car.model = 500<br><br>
            car.weight = 850kg<br><br>
            car.color = white
          </td>
          <td>
            <br>car.start()<br><br>
            car.drive()<br><br>
            car.brake()
            <br><br>car.stop()</td>
        </tr>
      </table>
    </div>

    <p>Все автомобили имеют одинаковые <strong>свойства</strong>, но значения <strong>свойств</strong> отличаются в разных автомобилей.</p>
    <p>Все автомобили имеют одинаковые <strong>методы</strong>, но методы выполняются <strong>в разное время</strong>.</p>
    <hr>
      <?php include '../include/adinfeed.php'; ?>
    <h2>JavaScript Объекты</h2>
    <p>Вы уже узнали, что JavaScript переменные являются контейнерами для значений данных.</p>
    <p>Этот код назначает <strong>простое значение</strong> (Fiat) <strong>переменной</strong> с именем car:</p>

    <div class="w3-example">
      <div class="w3-code notranslate jsHigh">
        var car = &quot;Fiat&quot;;
      </div>
      <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_objects_variable.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Объекты тоже переменные. Но объекты могут содержать много значений.</p>
    <p>Этот код назначает <strong>много значений</strong> (Fiat, 500, белый) для <strong>переменной</strong> с именем car:</p>

    <div class="w3-example">
      <div class="w3-code notranslate jsHigh">
        var car = {type:&quot;Fiat&quot;, model:&quot;500&quot;, color:&quot;white&quot;};
      </div>
      <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_objects_object.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Значения записываются в виде пар <strong>имя:значение</strong> (имя и значение разделяются двоеточием).</p>

    <div class="w3-panel w3-note">
      <p>Объекты JavaScript являются контейнерами для <strong>именованных значений</strong>, называемых свойствами или методами.</p>
    </div>
    <hr>
      <?php include '../include/adinfeed.php'; ?>
    <h2>Определение объекта</h2>
    <p>Вы определяете (и создаете) объект JavaScript с литералом объекта:</p>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate jsHigh">
        var person = {firstName:&quot;John&quot;, lastName:&quot;Doe&quot;, age:50, eyeColor:&quot;blue&quot;};<br>
      </div>
      <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_objects_create_1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Пробелы и разрывы строк не важны. Определение объекта может занимать несколько строк:</p>

    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate jsHigh">
        var person = {<br>
        &nbsp; firstName: &quot;John&quot;,<br>
        &nbsp; lastName: &quot;Doe&quot;,<br>
        &nbsp;&nbsp;age: 50,<br>
        &nbsp;&nbsp;eyeColor: &quot;blue&quot;<br>
        };
      </div>
      <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_objects_create_2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
      <?php include '../include/adinfeed.php'; ?>
    <h2>Свойства объекта</h2>
    <p>Пары <strong>name:values</strong> в объектах JavaScript называются <strong>свойствами</strong>:</p>

    <table class="w3-table-all">
      <tr>
        <th style="width:20%">Свойство</th>
        <th>Значение свойства</th>
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
    <hr>
      <?php include '../include/adinfeed.php'; ?>
    <h2>Доступ к свойствам объекта</h2>
    <p>Вы можете получить доступ к свойствам объекта двумя способами:</p>

    <div class="w3-example">
      <div class="w3-code notranslate jsHigh">
        <i>objectName.propertyName</i></div>
    </div>

    <p>или</p>

    <div class="w3-example">
      <div class="w3-code notranslate jsHigh">
        <i>objectName[&quot;propertyName&quot;]</i>
      </div>
    </div>

    <div class="w3-example">
      <h3>Пример1</h3>
      <div class="w3-code notranslate jsHigh">
        person.lastName;
      </div>
      <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_objects_properties_1.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
      <h3>Пример2</h3>
      <div class="w3-code notranslate jsHigh">
        person[&quot;lastName&quot;];
      </div>
      <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_objects_properties_2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
      <?php include '../include/adinfeed.php'; ?>
    <h2>Методы объекта</h2>
    <p>Объекты также могут иметь <strong>методы</strong>.</p>
    <p>Методы - это <strong>действия</strong>, которые можно выполнять над объектами.</p>
    <p>Методы хранятся в свойствах, как <strong>определения функций</strong>.</p>

    <table class="w3-table-all">
      <tr>
        <th style="width:20%">Свойство</th>
        <th>Значение свойства</th>
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
      <p>Метод - это функция, хранящаяся как свойство.</p>
    </div>
    <hr>
      <?php include '../include/adinfeed.php'; ?>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate jsHigh">
        var person = {<br>
        &nbsp; firstName: "John",<br>
        &nbsp; lastName : "Doe",<br>
        &nbsp; id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;5566,<br>
        &nbsp; fullName : function() {<br>
        &nbsp;&nbsp;&nbsp; return this.firstName + " " + this.lastName;<br>&nbsp;&nbsp;}<br>
        };
      </div>
    </div>
    <hr>

    <h2>Ключевое слово <strong>this</strong></h2>
    <p>В определении функции <code class="w3-codespan">this</code> ссылается на &quot;владельца&quot; функции.</p>
    <p>В приведенном выше примере <code class="w3-codespan">this</code> является <strong>персональным объектом</strong>, который &quot;владеет&quot; функцией <code class="w3-codespan">fullName</code>.</p>
    <p>Другими словами, <code class="w3-codespan">this.firstName</code> означает свойство <code class="w3-codespan">firstName</code> <strong>этого объекта</strong>.</p>
    <p>Подробнее о ключевом слове <code class="w3-codespan">this</code> читайте в разделе <a href="js_this.php">JS Ключевое слово this</a>.</p>
    <hr>

    <h2>Доступ к методам объекта</h2>
    <p>Вы получаете доступ к методам объекта со следующим синтаксисом:</p>

    <div class="w3-example">
      <div class="w3-code notranslate jsHigh">
        <i>objectName.methodName()</i>
      </div></div>

    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate">
        name = person.fullName();</div>
      <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_objects_method.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Если вы обращаетесь к методу <strong>без</strong> скобок (), он вернёт <strong>определение функции</strong>:</p>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate">
        name = person.fullName;</div>
      <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_objects_function.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
      <?php include '../include/adinfeed.php'; ?>
    <h2>Не объявляйте строки, числа и логические значения как объекты!</h2>
    <p>Когда переменная JavaScript объявляется с ключевым словом &quot;<code class="w3-codespan">new</code>&quot;,  переменная создается как объект:</p>
    <div class="w3-example">
      <div class="w3-code notranslate jsHigh">
        var x = new String();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Объявляет x как объект String (строка)<br>
        var y =&nbsp;new Number();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Объявляет y как объект Number (число)<br>
        var z =&nbsp;new Boolean();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Объявляет z как объект Boolean (логический)
      </div>
    </div>
    <p>Избегайте объектов типа <code class="w3-codespan">String</code>, <code class="w3-codespan">Number</code> и <code class="w3-codespan">Boolean</code>. Они усложняют ваш код и замедляют скорость выполнения.</p>

    <div class="w3-panel w3-note">
      <p>Вы узнаете больше об объектах позже в этом учебнике на нашем сайте <strong>W3Schools на русском</strong>.</p>
    </div>
    <hr>
    <form autocomplete="off" spellcheck="false" id="w3-exerciseform" action="https://www.w3schools.com/js/exercise_js.asp?filename=exercise_js_objects1" method="post" target="_blank">
      <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
      <div class="exercisewindow">
        <h2>Упражнение:</h2>
        <p>Выведите <code class="w3-codespan">"John"</code> путем извлечения информации из объекта <code class="w3-codespan">person</code>.</p>
        <div class="exerciseprecontainer">
<pre>
var person = {
  firstName: "John",
  lastName: "Doe"
};

alert(<input name="ex1" maxlength="16" style="width: 165px;">);
</pre>
        </div>
        <br>
        <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
      </div>
    </form>

    <hr>
    <div class="w3-clear nextprev">
      <a class="w3-left w3-btn" href="js_functions.php">&#10094; Prev</a>
      <a class="w3-right w3-btn" href="js_events.php">Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>