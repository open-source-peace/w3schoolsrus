<?php include '../include/head.php'; ?>
<title>PHP Дата и время. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Дата и время. Функция date(). Как получить дату и время с помощью PHP-скрипта? Часовой пояс. Дата из строки. Современный учебник по языку PHP. Справочник. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Дата и время</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_form_complete.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_includes.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">PHP функция <code class="w3-codespan">date()</code> используется для форматирования <strong>даты</strong> и/или <strong>времени</strong>.</p>
    <hr>

    <h2>PHP функция Date()</h2>
    <p>PHP функция <code class="w3-codespan">date()</code> форматирует метку времени для более удобочитаемой даты и времени.</p>
    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate">
        date(<i>format</i>,<i>timestamp</i>)
    </div>

    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:20%">Параметр</th>
            <th style="width:80%">Описание</th>
        </tr>
        <tr>
            <td>format</td>
            <td>Обязательный. Определяет формат отметки времени</td>
        </tr>
        <tr>
            <td>timestamp</td>
            <td>Необязательный. Определяет метку времени. По умолчанию текущая дата и время</td>
        </tr>
    </table>

    <div class="w3-panel w3-note"><p>
        <p><strong>Отметка времени</strong> - это последовательность символов, обозначающая дату и/или время, когда произошло определенное событие.</p>
    </div>
    <hr>

    <h2>Получить дату</h2>
    <p>Обязательный параметр <i>format</i> функции date() указывает, как форматировать дату (или время).</p>
    <p>Вот некоторые символы, которые обычно используются для дат:</p>
    <ul>
        <li>d - Представляет день месяца (с 01 по 31) </li>
        <li>m - Представляет месяц (от 01 до 12)</li>
        <li>Y - Представляет год (четырьмя цифрами)</li>
        <li>l (строчная буква 'L') - представляет день недели</li>
    </ul>
    <p>Другие символы, такие как &quot;/&quot;, &quot;.&quot;, или &quot;-&quot; также могут быть вставлены между символами для добавления дополнительного форматирования.</p>
    <p>Пример ниже форматирует сегодняшнюю дату тремя различными способами:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>echo &quot;Сегодня &quot; . date(&quot;Y/m/d&quot;) . &quot;&lt;br&gt;&quot;;<br>echo &quot;Сегодня &quot; . date(&quot;Y.m.d&quot;) . &quot;&lt;br&gt;&quot;;<br>echo &quot;Сегодня &quot; . date(&quot;Y-m-d&quot;) . &quot;&lt;br&gt;&quot;;<br>
            echo &quot;Сегодня &quot; . date(&quot;l&quot;);<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_date1.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>PHP Подсказка - Автоматический год Copyright</h2>
    <p>Используйте функцию <code class="w3-codespan">date()</code> для автоматического обновления года авторских прав (copyright) на вашем веб-сайте:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &amp;copy; 2010-&lt;?php echo date(&quot;Y&quot;);?&gt;<br></div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_date_copyright.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Получить время</h2>
    <p>Вот некоторые символы, которые обычно используются для указания времени:</p>
    <ul>
        <li>H - 24-часовой формат часа (от 00 до 23)</li>
        <li>h - 12-часовой формат часа с ведущими нулями (от 01 до 12)</li>
        <li>i - Минуты с ведущими нулями (от 00 до 59)</li>
        <li>s - Секунды с ведущими нулями (от 00 до 59)</li>
        <li>a - Строчные Ante meridiem и Post meridiem (am - утра или pm - вечера)</li>
    </ul>
    <p>В приведенном ниже примере выводится текущее время в указанном формате:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>echo &quot;Время &quot; . date(&quot;h:i:sa&quot;);<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_date2.html">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">Обратите внимание, что PHP функция date() будет возвращать текущую дату/время сервера!</div>
    <hr>

    <h2>Получите ваш часовой пояс</h2>
    <p>Если время, которое вы вернули из кода, неверно, возможно, это потому, что ваш сервер находится в другой стране или настроен на другой часовой пояс.</p>
    <p>Таким образом, если вам нужно время, чтобы быть точным в зависимости от конкретного места, вы можете установить часовой пояс, который вы хотите использовать.</p>
    <p>В приведенном ниже примере для часового пояса установлено значение &quot;America/New_York&quot;, а затем выводится текущее время в указанном формате:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>date_default_timezone_set(&quot;America/New_York&quot;);<br>echo &quot;Время &quot; . date(&quot;h:i:sa&quot;);<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_date3.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Создать дату с помощью mktime()</h2>
    <p>Необязательный параметр <i>timestamp</i> в функции date() указывает метку времени. Если опущено, будут использоваться текущая дата и время (как в примерах выше).</p>
    <p>PHP функция <code class="w3-codespan">mktime()</code> возвращает метку времени Unix для даты. Временная метка Unix содержит количество секунд между эпохой Unix (1 января 1970 г. 00:00:00 по Гринвичу) и указанным временем.</p>
    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate">
            mktime(<em>hour, minute, second, month, day, year</em>)
    </div>

    <p>В приведенном ниже примере создается дата и время с помощью функции <code class="w3-codespan">date()</code> из ряда параметров в функции <code class="w3-codespan">mktime()</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$d=mktime(11, 14, 54, 8, 12, 2014);<br>echo &quot;Дата создания &quot; . date(&quot;Y-m-d h:i:sa&quot;, $d);<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_date4.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Создать дату из строки с помощью strtotime()</h2>
    <p>PHP функция <code class="w3-codespan">strtotime()</code> используется для преобразования удобочитаемой строки даты в метку времени Unix (количество секунд с 1 января 1970 года 00:00:00 по Гринвичу).</p>
    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate"><div>
            strtotime(<em>time, now</em>)</div></div>

    <p>В приведенном ниже примере создается дата и время из функции <code class="w3-codespan">strtotime()</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$d=strtotime(&quot;15:30pm February 24 2019&quot;);<br>echo &quot;Дата создания &quot; . date(&quot;Y-m-d h:i:sa&quot;, $d);<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_date5.html">Попробуйте сами &raquo;</a>
    </div>

    <p>PHP довольно умен для преобразования строки в дату, поэтому вы можете ввести различные значения:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$d=strtotime(&quot;завтра&quot;);<br>echo date(&quot;Y-m-d h:i:sa&quot;, $d) . &quot;&lt;br&gt;&quot;;<br>
            <br>$d=strtotime(&quot;в следующую субботу&quot;);<br>echo date(&quot;Y-m-d h:i:sa&quot;, $d) . &quot;&lt;br&gt;&quot;;<br>
            <br>$d=strtotime(&quot;+3 месяца&quot;);<br>echo date(&quot;Y-m-d h:i:sa&quot;, $d) . &quot;&lt;br&gt;&quot;;<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_date6.html">Попробуйте сами &raquo;</a>
    </div>
    <p>Однако <code class="w3-codespan">strtotime()</code> не идеален, поэтому не забудьте проверить строки, которые вы там вставили.</p>
    <hr>

    <h2>Больше примеров даты</h2>
    <p>В приведенном ниже примере выводятся даты следующих шести суббот:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$startdate = strtotime(&quot;Суббота&quot;);<br>$enddate = strtotime(&quot;+6 недель&quot;, $startdate);<br><br>while ($startdate &lt; $enddate) {<br>&nbsp; echo date(&quot;M d&quot;, $startdate) . &quot;&lt;br&gt;&quot;;<br>&nbsp; $startdate = strtotime(&quot;+1 неделя&quot;, $startdate);<br>}<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_date7.html">Попробуйте сами &raquo;</a>
    </div>
    <p>В приведенном ниже примере показано количество дней до 4 июля:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code htmlHigh notranslate">
            &lt;?php<br>$d1=strtotime(&quot;July 04&quot;);<br>$d2=ceil(($d1-time())/60/60/24);<br>
            echo &quot;Осталось &quot; . $d2 .&quot; дней до 4 июля.&quot;;<br>?&gt;</div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/tryphp_date8.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Полный справочник PHP дат</h2>
    <p>Для более полного ознакомления со всеми функциями даты, перейдите на наш
        <a href="php_ref_date.php">Полный справочник PHP Дат</a>.</p>
    <p>Справочник содержит краткое описание и примеры использования для каждой функции!</p>
    <hr>

    <h2>PHP Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/php/exercise.asp?filename=exercise_dates1" method="post" target="_blank">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Используйте корректную функцию даты, чтобы вывести название дня недели сегодня (понедельник, вторник и т.д.).</p>
            <div class="exerciseprecontainer">
<pre>
echo <input name="ex1" maxlength="9" style="width: 96px;">;
</pre>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_form_complete.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_includes.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>