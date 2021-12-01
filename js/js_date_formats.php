<?php include '../include/head.php'; ?>

<title>JavaScript Форматы дат. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Форматы дат. Ввод даты. Вывод. Год и месяц. Дата-Время. Часовые пояса. Краткие и длинные даты. Парсинг дат. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Форматы дат</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_dates.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_date_methods.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>JavaScript Ввод даты</h2>
    <p>Обычно существует 3 типа форматов ввода даты в JavaScript:</p>
    <table class="ws-table-all">
        <tr>
            <th>Тип</th>
            <th>Пример</th>
        </tr>
        <tr>
            <td>ISO Дата</td>
            <td>&quot;2015-03-25&quot; (Международный стандарт)</td>
        </tr>
        <tr>
            <td>Краткая дата</td>
            <td>&quot;03/25/2015&quot;</td>
        </tr>
        <tr>
            <td>Длинная дата</td>
            <td>&quot;Mar 25 2015&quot; или &quot;25 Mar 2015&quot;</td>
        </tr>
    </table>
    <div class="w3-container w3-note">
        <p>Формат ISO соответствует строгим стандартам JavaScript.</p>
        <p>Другие форматы не так хорошо определены и могут зависеть от браузера.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>JavaScript Вывод даты</h2>
    <p>Независимо от формата ввода, JavaScript (по умолчанию) будет выводить даты в формате полнотекстовой строки:</p>
    <div class="w3-example">
        <div class="w3-code notranslate">
            <script>document.write(new Date("2015-03-25"))
            </script>
        </div>
    </div>
    <hr>

    <h2>JavaScript ISO Даты</h2>

    <p>ISO 8601 - международный стандарт представления даты и времени.</p>
    <p>Синтаксис ISO 8601 (ГГГГ-ММ-ДД) также является предпочтительным форматом даты JavaScript:</p>
    <div class="w3-example">
        <h3>Пример (Полная дата)</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(&quot;2015-03-25&quot;);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryit.html?filename=tryjs_date_string_iso1" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Расчетная дата будет относиться к вашему часовому поясу. <br>В зависимости от вашего часового пояса приведенный выше результат будет варьироваться между 24 и 25 марта.</p>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>ISO Даты (Год и месяц)</h2>
    <p>Даты ISO можно записывать без указания дня (ГГГГ-ММ):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(&quot;2015-03&quot;);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryit.html?filename=tryjs_date_string_iso2" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Часовые пояса будут отличаться от приведенного выше результата с 28 февраля по 1 марта.</p>
    </div>
    <?php include '../include/adinfeed.php'; ?>

    <h2>ISO Даты (Только год)</h2>
    <p>Даты ISO могут быть написаны без месяца и дня (ГГГГ):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(&quot;2015&quot;);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryit.html?filename=tryjs_date_string_iso3" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Часовые пояса будут отличаться от приведенного выше результата с 31 декабря 2014 г. по 1 января 2015 г.</p>
    </div>
    <hr>

    <h2>ISO Даты (Дата-Время)</h2>
    <p>Даты ISO могут быть записаны с добавлением часов, минут и секунд (ГГГГ-ММ-ДДТЧЧ: ММ: ССЗ):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(&quot;2015-03-25T12:00:00Z&quot;);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryit.html?filename=tryjs_date_string_iso4" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Дата и время разделяются заглавной буквой T.</p>
    <p>Время UTC определяется с заглавной буквы Z.</p>
    <p>Если вы хотите изменить время относительно UTC, удалите Z и вместо этого добавьте + HH:MM или -HH:MM:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(&quot;2015-03-25T12:00:00-06:30&quot;);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryit.html?filename=tryjs_date_string_iso5" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><b>UTC</b> (Universal Time Coordinated - Всемирное координированное время) совпадает с <b>GMT</b> (Greenwich Mean Time - среднее время по Гринвичу).</p>
    </div>

    <div class="w3-panel w3-warning">
        <p>Отсутствие T или Z в строке даты и времени может привести к разным результатам в разных браузерах.</p>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Часовые пояса</h2>
    <p>При установке даты без указания часового пояса JavaScript будет использовать часовой пояс браузера. </p>
    <p>При получении даты без указания часового пояса результат конвертируется в часовой пояс браузера.</p>
    <p>Другими словами: если дата и время созданы в GMT (среднее время по Гринвичу), дата и время будут преобразованы в CDT (летнее время в центральной части США), если пользователь просматривает из центральной части США.</p>
    <hr>

    <h2>JavaScript Краткие даты</h2>
    <p>Краткие даты пишутся с помощью ММ/ДД/ГГГГ, синтаксис вроде этого:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(&quot;03/25/2015&quot;);</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryit.html?filename=tryjs_date_string_7" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>ПРЕДУПРЕЖДЕНИЯ!</h2>
    <div class="w3-example">
        <p>В некоторых браузерах месяцы или дни без начальных нулей могут приводить к ошибке: </p>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(&quot;2015-3-25&quot;);
        </div>
    </div>

    <div class="w3-example">
        <p>Поведение ГГГГ/ММ/ДД не определено.<br>Некоторые браузеры пытаются угадать формат. Некоторые вернут NaN.</p>
        <div class="w3-code notranslate jsHigh">const d = new Date(&quot;2015/03/25&quot;);</div>
    </div>

    <div class="w3-example">
        <p>Поведение ДД-ММ-ГГГГ также не определено.<br>Некоторые браузеры пытаются угадать формат. Некоторые вернут NaN.</p>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(&quot;25-03-2015&quot;);
        </div>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>JavaScript Длинные даты</h2>
    <p>Длинные даты чаще всего пишутся с помощью МММ ДД ГГГГ, синтаксис вроде этого:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(&quot;Mar 25 2015&quot;);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryit.html?filename=tryjs_date_string_1" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Месяц и день могут быть в любом порядке:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(&quot;25 Mar 2015&quot;);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryit.html?filename=tryjs_date_string_2" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Месяц может быть написан полностью (January) или сокращенно (Jan):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(&quot;January 25 2015&quot;);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryit.html?filename=tryjs_date_string_4" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(&quot;Jan 25 2015&quot;);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryit.html?filename=tryjs_date_string_5" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Запятые игнорируются. Имена нечувствительны к регистру:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(&quot;JANUARY, 25, 2015&quot;);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryit.html?filename=tryjs_date_string_6" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Ввод даты - Парсинг дат</h2>
    <p>Если у вас есть допустимая строка даты, вы можете использовать метод <code class="w3-codespan">Date.parse()</code> чтобы преобразовать её в миллисекунды.</p>
    <p><code class="w3-codespan">Date.parse()</code> возвращает количество миллисекунд между датой и 1 января 1970 г.:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let msec = Date.parse(&quot;March 21, 2012&quot;);<br>
            document.getElementById(&quot;demo&quot;).innerHTML = msec;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryit.html?filename=tryjs_date_parse" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Затем вы можете использовать количество миллисекунд, чтобы <strong>преобразовать его в объект даты</strong>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let msec = Date.parse(&quot;March 21, 2012&quot;);<br>
            const d = new Date(msec);<br>
            document.getElementById(&quot;demo&quot;).innerHTML = d;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryit.html?filename=tryjs_date_convert" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_dates.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_date_methods.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>