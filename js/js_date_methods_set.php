<?php include '../include/head.php'; ?>

<title>JavaScript Методы установки дат. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Методы установки дат. Сравнение дат. Полный справочник по датам. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Методы установки даты</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_date_methods.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_math.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Методы установки даты</strong> позволяют вам устанавливать значения даты (годы, месяцы, дни, часы, минуты, секунды, миллисекунды) для объекта Date.</p>
    <hr>
    <h2>Методы установки даты</h2>
    <p>Методы установки даты используются для установки части даты:</p>
    <table class="ws-table-all notranslate">
        <tr>
            <th>Метод</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>setDate()</td>
            <td>Установить день в виде числа (1-31)</td>
        </tr>
        <tr>
            <td>setFullYear()</td>
            <td>Установить год (при желании месяц и день)</td>
        </tr>
        <tr>
            <td>setHours()</td>
            <td>Установить час (0-23)</td>
        </tr>
        <tr>
            <td>setMilliseconds()</td>
            <td>Установить миллисекунды (0-999)</td>
        </tr>
        <tr>
            <td>setMinutes()</td>
            <td>Установить минуты (0-59)</td>
        </tr>
        <tr>
            <td>setMonth()</td>
            <td>Установить месяц (0-11)</td>
        </tr>
        <tr>
            <td>setSeconds()</td>
            <td>Установить секунды (0-59)</td>
        </tr>
        <tr>
            <td>setTime()</td>
            <td>Установить время (миллисекунды с 1 января 1970 г.)</td>
        </tr>
    </table>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Метод setFullYear()</h2>
    <p>Метод <code class="w3-codespan">setFullYear()</code> устанавливает год объекта даты. В этом примере до 2020 г.:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            d.setFullYear(2020);<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_setfullyear.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Метод <code class="w3-codespan">setFullYear()</code> может <strong>опционально</strong> установить месяц и день:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            d.setFullYear(2020, 11, 3);<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_setfullyear_options.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>
    
    <h2>Метод setMonth()</h2>
    <p>Метод <code class="w3-codespan">setMonth()</code> устанавливает месяц объекта даты (0-11):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            d.setMonth(11);<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_setmonth.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <h2>Метод setDate()</h2>
    <p>Метод <code class="w3-codespan">setDate()</code> устанавливает день объекта даты (1-31):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            d.setDate(15);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_setdate.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Метод <code class="w3-codespan">setDate()</code> также можно использовать для <strong>добавления дней</strong> к дате:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            d.setDate(d.getDate() + 50);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_ahead.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Если добавление дней сдвигает месяц или год, изменения обрабатываются автоматически объектом Date.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Метод setHours()</h2>
    <p>Метод <code class="w3-codespan">setHours()</code> устанавливает часы объекта даты (0-23):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            d.setHours(22);<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_sethours.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод setMinutes()</h2>
    <p>Метод <code class="w3-codespan">setMinutes()</code> устанавливает минуты объекта даты (0-59):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            d.setMinutes(30);<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_setminutes.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод setSeconds()</h2>
    <p>Метод <code class="w3-codespan">setSeconds()</code> устанавливает секунды объекта даты (0-59):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            d.setSeconds(30);<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_setseconds.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Сравнение дат</h2>
    <p>Даты можно легко сравнить.</p>
    <p>В следующем примере сегодняшняя дата сравнивается с 14 января 2100 года:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let text = "";<br>
            const today = new Date();<br>
            const someday = new Date();<br>
            someday.setFullYear(2100, 0, 14);<br><br>if (someday &gt; today) {<br>&nbsp; text = &quot;Сегодня до 14 января 2100 г.&quot;;<br>} else {<br>
            &nbsp; text = &quot;Сегодня после 14 января 2100 г.&quot;;<br>}
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_compare.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>JavaScript считает месяцы от 0 до 11. Январь - 0. Декабрь - 11.</p>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Полный справочник по датам JavaScript</h2>
    <p>Для получения полной справки перейдите на <a href="../jsref/jsref_obj_date.php">Полный справочник по датам JavaScript</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <p>Справочник содержит описания и примеры всех свойств и методов Date.</p>
    <hr>

    <form autocomplete="off" spellcheck="false" id="w3-exerciseform" action="https://www.w3schools.com/js/exercise_js.asp?filename=exercise_js_dates4" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Используйте правильный метод Date, чтобы установить год объекта даты на 2020.</p>
            <div class="exerciseprecontainer">
<pre>
const d = new Date();
d.<input name="ex1" maxlength="17" style="width: 174px;">;
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_date_methods.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_math.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>