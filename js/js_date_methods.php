<?php include '../include/head.php'; ?>

<title>JavaScript Методы получения дат. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Методы получения дат. Как получить дату в JavaScript? Полный справочник по датам. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Методы получения даты</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_date_formats.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_date_methods_set.php">Next &#10095;</a>
    </div>
    <hr>
    <p>Эти методы можно использовать для получения информации из объекта даты:</p>
    <table class="ws-table-all notranslate">
        <tr>
            <th>Метод</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>getFullYear()</td>
            <td>Получить <strong>год</strong> в виде четырехзначного числа (гггг)</td>
        </tr>
        <tr>
            <td>getMonth()</td>
            <td>Получить <strong>месяц</strong> в виде числа (0-11)</td>
        </tr>
        <tr>
            <td>getDate()</td>
            <td>Получить <strong>день</strong> в виде числа (1-31)</td>
        </tr>
        <tr>
            <td>getHours()</td>
            <td>Получить <strong>час</strong> (0-23)</td>
        </tr>
        <tr>
            <td>getMinutes()</td>
            <td>Получить <strong>минуту</strong> (0-59)</td>
        </tr>
        <tr>
            <td>getSeconds()</td>
            <td>Получить <strong>секунду</strong> (0-59)</td>
        </tr>
        <tr>
            <td>getMilliseconds()</td>
            <td>Получить <strong>миллисекунду</strong> (0-999)</td>
        </tr>
        <tr>
            <td>getTime()</td>
            <td>Получить время (миллисекунды с 1 января 1970 г.)</td>
        </tr>
        <tr>
            <td>getDay()</td>
            <td>Получить день недели в виде числа (0-6)</td>
        </tr>
        <tr>
            <td>Date.now()</td>
            <td>Получить время. ECMAScript 5.</td>
        </tr>
    </table>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Метод getTime()</h2>
    <p>Метод <code class="w3-codespan">getTime()</code> возвращает количество миллисекунд с 1 января 1970 г.:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            document.getElementById(&quot;demo&quot;).innerHTML = d.getTime();
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_gettime.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод getFullYear()</h2>
    <p>Метод <code class="w3-codespan">getFullYear()</code> возвращает год даты в виде четырехзначного числа:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            document.getElementById(&quot;demo&quot;).innerHTML = d.getFullYear();
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_getfullyear.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Метод getMonth()</h2>
    <p>Метод <code class="w3-codespan">getMonth()</code> возвращает месяц даты в виде числа (0-11):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            document.getElementById(&quot;demo&quot;).innerHTML = d.getMonth();
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_getmonth.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>В JavaScript первый месяц (январь) - это месяц номер 0, поэтому декабрь возвращает номер месяца 11.</p>
    </div>

    <p>Вы можете использовать массив имен и <code class="w3-codespan">getMonth()</code> чтобы вернуть месяц в качестве имени:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            const months = [&quot;January&quot;, &quot;February&quot;, &quot;March&quot;, &quot;April&quot;, &quot;May&quot;,
            &quot;June&quot;, &quot;July&quot;, &quot;August&quot;, &quot;September&quot;, &quot;October&quot;,
            &quot;November&quot;, &quot;December&quot;];<br>
            document.getElementById(&quot;demo&quot;).innerHTML = months[d.getMonth()];
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_month.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Метод getDate()</h2>
    <p>Метод <code class="w3-codespan">getDate()</code> возвращает день даты в виде числа (1-31):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            document.getElementById(&quot;demo&quot;).innerHTML = d.getDate();
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_getdate.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод getHours()</h2>
    <p>Метод <code class="w3-codespan">getHours()</code> возвращает часы даты в виде числа (0-23):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            document.getElementById(&quot;demo&quot;).innerHTML = d.getHours();
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_getHours.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Метод getMinutes()</h2>
    <p>Метод <code class="w3-codespan">getMinutes()</code> возвращает минуты даты в виде числа (0-59):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            document.getElementById(&quot;demo&quot;).innerHTML = d.getMinutes();
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_getMinutes.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод getSeconds()</h2>
    <p>Метод <code class="w3-codespan">getSeconds()</code> возвращает секунды даты в виде числа (0-59):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            document.getElementById(&quot;demo&quot;).innerHTML = d.getSeconds();
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_getSeconds.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод getMilliseconds()</h2>
    <p>Метод <code class="w3-codespan">getMilliseconds()</code> возвращает миллисекунды даты в виде числа (0-999):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            document.getElementById(&quot;demo&quot;).innerHTML = d.getMilliseconds();
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_getmilliseconds.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Метод getDay()</h2>
    <p>Метод <code class="w3-codespan">getDay()</code> возвращает день недели даты в виде числа (0-6):</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            document.getElementById(&quot;demo&quot;).innerHTML = d.getDay();
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_getday.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>В JavaScript первый день недели (0) означает &quot;Sunday&quot; (Воскресенье), даже если в некоторых странах мира первым днем недели считается &quot;Monday&quot; (Понедельник).</p>
    </div>

    <p>Вы можете использовать массив имён и <code class="w3-codespan">getDay()</code> чтобы вернуть день недели в качестве имени:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            const days = [&quot;Sunday&quot;, &quot;Monday&quot;, &quot;Tuesday&quot;, &quot;Wednesday&quot;,
            &quot;Thursday&quot;, &quot;Friday&quot;, &quot;Saturday&quot;];<br>
            document.getElementById(&quot;demo&quot;).innerHTML = days[d.getDay()];<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_weekday.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Методы UTC даты</h2>
    <p>Методы даты UTC используются для работы с датами UTC (даты универсального часового пояса):</p>
    <table class="ws-table-all notranslate">
        <tr>
            <th>Метод</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>getUTCDate()</td>
            <td>То же, что и getDate(), но возвращает дату в формате UTC</td>
        </tr>
        <tr>
            <td>getUTCDay()</td>
            <td>То же, что и getDay(), но возвращает день в формате UTC</td>
        </tr>
        <tr>
            <td>getUTCFullYear()</td>
            <td>То же, что и getFullYear(), но возвращает год в формате UTC</td>
        </tr>
        <tr>
            <td>getUTCHours()</td>
            <td>То же, что и getHours(), но возвращает час UTC</td>
        </tr>
        <tr>
            <td>getUTCMilliseconds()</td>
            <td>То же, что и getMilliseconds(), но возвращает миллисекунды в формате UTC</td>
        </tr>
        <tr>
            <td>getUTCMinutes()</td>
            <td>То же, что и getMinutes(), но возвращает минуты в формате UTC</td>
        </tr>
        <tr>
            <td>getUTCMonth()</td>
            <td>То же, что и getMonth(), но возвращает месяц в формате UTC</td>
        </tr>
        <tr>
            <td>getUTCSeconds()</td>
            <td>То же, что и getSeconds(), но возвращает секунды в формате UTC</td>
        </tr>
    </table>
    <hr>

    <h2>Полный справочник по датам JavaScript</h2>
    <p>Для получения полной справки перейдите на <a href="../jsref/jsref_obj_date.php">Полный справочник по JavaScript датам</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <p>Справочник содержит описания и примеры всех свойств и методов Date.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <form autocomplete="off" spellcheck="false" id="w3-exerciseform" action="https://schoolsw3.com/js/exercise_js.asp?filename=exercise_js_dates3" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Используйте правильный метод Date, чтобы получить месяц (0-11) из объекта даты.</p>
            <div class="exerciseprecontainer">
<pre>
const d = new Date();
month = <input name="ex1" maxlength="12" style="width: 124px;">;
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_date_formats.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_date_methods_set.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>