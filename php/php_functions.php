<?php include '../include/head.php'; ?>
<title>PHP Функции. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Функции. PHP функции - встроенные и пользовательские. Аргументы функции. Возвращение значений. Объявления типа return. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Функции</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_looping_foreach.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_arrays.php">Next &#10095;</a>
    </div>
    <hr>

    <p class="intro">Настоящая сила PHP заключается в его <strong>функциях</strong>.</p>
    <p class="intro">PHP имеет более 1000 встроенных функций, и, кроме того, вы можете создавать свои собственные пользовательские функции.</p>
    <hr>

    <h2>PHP Встроенные функции</h2>
    <p>PHP имеет более 1000 встроенных функций, которые можно вызывать напрямую из скрипта для выполнения конкретной задачи.</p>
    <p>Пожалуйста, ознакомьтесь со справочником по PHP для полного обзора <a href="php_ref_overview.php">встроенных функций PHP</a> на нашем сайте <?php include '../include/w3schools.php'?>.</p>
    <hr>

    <h2>PHP Пользовательские функции</h2>
    <p>Помимо встроенных функций PHP, можно создавать свои собственные функции.</p>
    <ul>
        <li>Функция - это блок операторов, который можно многократно использовать в программе.</li>
        <li>Функция не будет выполняться автоматически при загрузке страницы.</li>
        <li>Функция будет выполнена путем вызова функции.</li>
    </ul>
    <hr>

    <h2>Создайте пользовательскую функцию в PHP</h2>
    <p>Объявление пользовательской функции начинается со слова <code class="w3-codespan">function</code>:</p>
    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate"><div>
            function <i>functionName</i>()
            {<br>
            <i>&nbsp; &nbsp; выполняемый код</i>;<br>
            }
        </div></div>
    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Имя функции должно начинаться с буквы или символа подчеркивания. Имена функций НЕ чувствительны к регистру.</p>
    </div>

    <p><strong>Совет:</strong> Дайте функции имя, которое отражает то, что делает функция!</p>

    <p>В приведенном ниже примере мы создаем функцию с именем "writeMsg()". Открывающая фигурная скобка (<code class="w3-codespan">{</code>) обозначает начало кода функции, а закрывающая фигурная скобка (<code class="w3-codespan">}</code>) обозначает конец функции. Функция выводит "Привет, мир!". Чтобы вызвать функцию, просто напишите её имя, а затем обычные скобки <code class="w3-codespan">()</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>function writeMsg() {<br>&nbsp;&nbsp;&nbsp; echo "Hello world!";<br>
            }<br><br>writeMsg(); // вызвать функцию<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_function1.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>PHP Аргументы функции</h2>
    <p>Информация может быть передана в функции через аргументы. Аргумент похож на переменную.</p>
    <p>Аргументы указываются после имени функции в скобках. Вы можете добавить столько аргументов, сколько захотите, просто разделите их запятой.</p>

    <p>В следующем примере есть функция с одним аргументом ($fname). Когда вызывается функция familyName(), мы также передаем имя (например, Jani), и имя используется внутри функции, которая выводит несколько разных имен, но одинаковую фамилию:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>function familyName($fname) {<br>&nbsp;&nbsp;&nbsp; echo "$fname Refsnes.&lt;br&gt;";<br>
            }<br><br>familyName("Jani");<br>familyName("Hege");<br>
            familyName("Stale");<br>familyName("Kai Jim");<br>familyName("Borge");<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_function2.html">Попробуйте сами &raquo;</a>
    </div>

    <p>В следующем примере есть функция с двумя аргументами ($fname и $year):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>function familyName($fname, $year) {<br>&nbsp; &nbsp; echo "$fname Refsnes. Born in $year &lt;br&gt;";<br>}<br><br>familyName("Hege", "1975");<br>
            familyName("Stale", "1978");<br>familyName("Kai Jim", "1983");<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_function3.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>PHP - слабо типизированный язык</h2>
    <p>Обратите внимание, что в приведенном выше примере нам не нужно было указывать PHP, какой тип данных является переменной.</p>
    <p>PHP автоматически связывает тип данных с переменной в зависимости от её значения. Поскольку типы данных не установлены в строгом смысле, вы можете делать такие вещи, как добавление строки к целому числу, не вызывая ошибки.</p>
    <p>В PHP 7 были добавлены объявления типов. Это дает нам возможность указать ожидаемый тип данных при объявлении функции, и, добавив объявление <code class="w3-codespan">strict</code> он выдаст &quot;Fatal Error&quot; (фатальную ошибку) если тип данных не будет соответствовать.</p>
    <p>В следующем примере мы пытаемся отправить число и строку в функцию без использования <code class="w3-codespan">strict</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>function addNumbers(int $a, int $b) {<br>&nbsp;&nbsp;&nbsp; return $a
            + $b;<br>}<br>
            echo addNumbers(5, &quot;5 days&quot;); <br>// т.к. strict НЕ включен &quot;5 days&quot; заменяется на int(5), и возвращает 10<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_func_non-strict.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Чтобы указать <code class="w3-codespan">strict</code> необходимо установить <code class="w3-codespan">declare(strict_types=1);</code>. Это должно быть в самой первой строке PHP файла.</p>

    <p>В следующем примере мы пытаемся отправить и число, и строку в функцию, но здесь мы добавили объявление <code class="w3-codespan">strict</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php declare(strict_types=1); // строгое требование<br><br>function
            addNumbers(int $a, int $b) {<br>&nbsp;&nbsp;&nbsp; return $a + $b;<br>}<br>echo addNumbers(5, &quot;5
            days&quot;); <br>// так как strict включен и &quot;5 days&quot; не является целым числом, будет выдано сообщение об ошибке<br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_func_strict.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Объявление <code class="w3-codespan">strict</code> заставляет вещи использоваться по назначению.</p>
    </div>
    <hr>

    <h2>PHP Значение аргумента по умолчанию</h2>
    <p>В следующем примере показано, как использовать параметр по умолчанию. Если мы вызываем функцию setHeight() без аргументов, она принимает значение по умолчанию в качестве аргумента:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php declare(strict_types=1); // строгое требование<br>function setHeight(int $minheight = 50) {<br>&nbsp;&nbsp;&nbsp; echo "The height is : $minheight &lt;br&gt;";<br>}<br><br>setHeight(350);<br>setHeight(); // будет использовать значение по умолчанию 50<br>setHeight(135);<br>setHeight(80);<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_function4.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>PHP Функции - Возвращение значений</h2>
    <p>Чтобы разрешить функции возвращать значение, используйте оператор <code class="w3-codespan">return</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php declare(strict_types=1); // строгое требование<br>function sum(int $x,
            int $y) {<br>&nbsp; &nbsp; $z = $x + $y;<br>&nbsp;&nbsp;&nbsp; return $z;<br>}<br><br>
            echo "5 + 10 = " . sum(5, 10) . "&lt;br&gt;";<br>echo "7 + 13 = " . sum(7, 13) . "&lt;br&gt;";<br>echo "2 + 4 = " . sum(2, 4);<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_function5.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>PHP Объявления типа return</h2>
    <p>PHP 7 также поддерживает объявления типов для оператора <code class="w3-codespan">return</code>. Как и в случае объявления типа для аргументов функции, включение строгого требования приведет к &quot;Fatal Error&quot; при несовпадении типов.</p>
    <p>Чтобы объявить тип для возвращаемой функции, добавьте двоеточие ( <code class="w3-codespan">:</code> ) и тип непосредственно перед открытием фигурной скобки ( <code class="w3-codespan">{</code> ) при объявлении функции.</p>
    <p>В следующем примере мы указываем тип return для функции:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php declare(strict_types=1); // строгое требование<br>function addNumbers(float
            $a, float $b) : float {<br>&nbsp;&nbsp;&nbsp; return $a + $b;<br>}<br>echo addNumbers(1.2, 5.2);
            <br>?&gt; </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_func_return_strict.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Вы можете указать тип возвращаемого значения, отличный от типа аргумента, но убедитесь, что возвращаемый тип является правильным:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php declare(strict_types=1); // строгое требование<br>function addNumbers(float
            $a, float $b) : int {<br>&nbsp;&nbsp;&nbsp; return (int)($a + $b);<br>}<br>
            echo addNumbers(1.2, 5.2); <br>?&gt;
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_func_return_strict2.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Передача аргументов по ссылке</h2>
    <p>В PHP аргументы обычно передаются по значению, что означает, что в функции используется копия значения и переменная, переданная в функцию, не может быть изменена.</p>
    <p>Когда аргумент функции передается по ссылке, изменения аргумента также изменяют переданную переменную. Чтобы превратить аргумент функции в ссылку, <code class="w3-codepan">&amp;</code> используется оператор:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Используйте аргумент передачи по ссылке для обновления переменной:</p>
        <div class="w3-code htmlHigh notranslate">
  &lt;?php<br>function add_five(&amp;$value) {<br>&nbsp; $value += 5;<br>}<br><br>$num = 2;<br>add_five($num);<br>echo $num;<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_func_pass_ref.html">Попробуйте сами »</a>
    </div>
    <hr>

    <h2>PHP Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/php/exercise.asp?filename=exercise_functions1" method="post" target="_blank" rel="nofollow">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Создайте функцию с именем <code class="w3-codespan">myFunction</code>.</p>
            <div class="exerciseprecontainer">
<pre><input name="ex1" maxlength="21" style="width: 223px;"> {
  echo "Hello World!";
}
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ »</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_looping_foreach.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_arrays.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>