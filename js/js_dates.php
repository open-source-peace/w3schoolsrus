<?php include '../include/head.php'; ?>

<title>JavaScript Даты. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Даты. Объекты. Вывод. Создание объектов даты. Использование 6, 4, 3 или 2 чисел. Как указать предыдущий век. Методы. Отображение дат. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript Объекты даты</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_array_const.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_date_formats.php">Next &#10095;</a>
    </div>
    <hr>
    <script>xxx=new Date()</script>
    <p class="w3-center">JavaScript <strong>Объект даты</strong> позволяет нам работать с датами:</p>
    <p class="w3-center"><strong><script>document.write(xxx)</script></strong></p>

    <div class="w3-center">
        <a href="../jstryit/tryjs_date_getfullyear.html" target="_blank" class="w3-btn w3-margin-bottom ws-green">Год: <script>document.write(xxx.getFullYear())</script></a>
        <a href="../jstryit/tryjs_date_getmonth.html" target="_blank" class="w3-btn w3-margin-bottom ws-green">Месяц: <script>document.write(xxx.getMonth()+1)</script></a>
        <a href="../jstryit/tryjs_date_getdate.html" target="_blank" class="w3-btn w3-margin-bottom ws-green">День: <script>document.write(xxx.getDate())</script></a>
        <a href="../jstryit/tryjs_date_gethours.html" target="_blank" class="w3-btn w3-margin-bottom ws-green">Часы: <script>document.write(xxx.getHours())</script></a>
        <a href="../jstryit/tryjs_date_getminutes.html" target="_blank" class="w3-btn w3-margin-bottom ws-green">Минуты: <script>document.write(xxx.getMinutes())</script></a>
        <a href="../jstryit/tryjs_date_getseconds.html" target="_blank" class="w3-btn w3-margin-bottom ws-green">Секунды: <script>document.write(xxx.getSeconds())</script></a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_current.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>JavaScript Вывод даты</h2>
    <p>По умолчанию JavaScript будет использовать часовой пояс браузера и отображать дату в виде полнотекстовой строки:</p>
    <p><strong><script>document.write(xxx)</script></strong></p>
    <div class="w3-panel w3-note">
        <p>Вы узнаете гораздо больше о том, как отображать даты, позже в этом учебнике.</p>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Создание объектов даты</h2>
    <p>Объекты даты создаются с помощью конструктора <code class="w3-codespan">new Date()</code>.</p>
    <p>Есть <b>4 пути</b> создания нового объекта даты:</p>

    <div class="w3-example">
        <div class="w3-code notranslate jsHigh">
            new Date()<br>new Date(<em>year, month, day, hours, minutes, seconds, milliseconds</em>)<br>
            new Date(<em>milliseconds</em>)<br>
            new Date(<em>date string</em>)<br>
        </div>
    </div>
    <hr>

    <h2>new Date()</h2>
    <p><code class="w3-codespan">new Date()</code> создает новый объект даты с <b>текущими датой и временем</b>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_new.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p>Объекты даты статичны. Компьютерное время идёт, а объекты даты - нет.</p>
    </div>
    <?php include '../include/adinfeed.php'; ?>

    <h2>new Date(<em>year, month, ...</em>)</h2>
    <p><code class="w3-codespan">new Date(<em>year, month, ...</em>)</code> создает новый объект даты с <b>указанной датой и временем</b>.</p>
    <p>7 чисел определяют год, месяц, день, час, минуту, секунду и миллисекунду (в указанном порядке):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(2018, 11, 24, 10, 33, 30, 0);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_new_all.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> JavaScript считает месяцы от <b>0</b> до <b>11</b>:</p>
        <p><b>January = 0</b>.</p>
        <p><b>December = 11</b>.</p>
    </div>

    <p>Указание месяца выше 11 не приведет к ошибке, но добавит переполнение к следующему году:</p>
    <div class="w3-example">
        <p>Указание:</p>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(2018, 15, 24, 10, 33, 30);<br>
        </div>
        <p>Такой же как:</p>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(2019, 3, 24, 10, 33, 30);<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_new_month_12.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Указание дня выше максимального не приведет к ошибке, но добавит переполнение к следующему месяцу:</p>
    <div class="w3-example">
        <p>Указание:</p>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(2018, 5, 35, 10, 33, 30);<br>
        </div>
        <p>Такой же как:</p>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(2018, 6, 5, 10, 33, 30);<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_new_day_35.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Использование 6, 4, 3 или 2 чисел</h2>
    <p>6 цифр определяют год, месяц, день, час, минуту, секунду:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(2018, 11, 24, 10, 33, 30);<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_new_numbers6.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>5 цифр указывают год, месяц, день, час и минуту:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(2018, 11, 24, 10, 33);<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_new_numbers5.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>4 числа определяют год, месяц, день и час:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(2018, 11, 24, 10);<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_new_numbers4.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>3 числа указывают год, месяц и день:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(2018, 11, 24);<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_new_numbers3.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>2 числа указывают год и месяц:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(2018, 11);<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_new_numbers2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p>Вы не можете пропустить месяц. Если вы укажете только один параметр, он будет считаться миллисекундами.</p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(2018);<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_new_numbers1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Предыдущий век</h2>
    <p>Одно- и двузначные годы будут интерпретироваться как 19xx:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(99, 11, 24);<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_new_two.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(9, 11, 24);<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_new_one.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>new Date(<em>dateString</em>)</h2>
    <p><code class="w3-codespan">new Date(dateString)</code> создает новый объект даты из <b>строки даты</b>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(&quot;October 13, 2014 11:13:00&quot;);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_new_string.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Строки даты описаны в следующей главе.</p>
    </div>
    <?php include '../include/adinfeed.php'; ?>

    <h2>JavaScript сохраняет даты в миллисекундах</h2>
    <p>JavaScript хранит даты в миллисекундах с 1 января 1970 года, 00:00:00 UTC (всемирное координированное время).</p>
    <div class="w3-panel w3-note">
        <p>Нулевое время - 01 января, 1970 00:00:00 UTC.</p>
    </div>
    <p>Текущее время: <strong><script>document.write(xxx.getTime())</script></strong> миллисекунд после 1 января 1970 г.</p>
    <hr>

    <h2>new Date(<em>milliseconds</em>)</h2>
    <p><code class="w3-codespan">new Date(<em>milliseconds</em>)</code> создает новый объект даты как <b>нулевое время плюс миллисекунды</b>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(0);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_new_zero.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>01 января 1970 г. <b>плюс</b> 100 000 000 000 миллисекунд приблизительно равно 3 марта 1973 г.:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(100000000000);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_new_millisec.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>01 января 1970 г. <b>минус</b> 100 000 000 000 миллисекунд примерно 31 октября 1966 г.:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(-100000000000);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_new_millisec_minus.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date(86400000);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_new_day.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Один день (24 часа) - 86 400 000 миллисекунд.</p>
    </div>
    <?php include '../include/addown_content.php'; ?>

    <h2>Методы даты</h2>
    <p>Когда создается объект Date, с ним можно работать с помощью ряда <b>методов</b>.</p>
    <p>Методы даты позволяют получать и устанавливать год, месяц, день, час, минуту, секунду и миллисекунду объектов даты, используя либо местное время, либо время UTC (универсальное или GMT).</p>

    <div class="w3-panel w3-note">
        <p>Методы даты и часовые пояса рассматриваются в следующих главах.</p>
    </div>
    <hr>

    <h2>Отображение дат</h2>
    <p>JavaScript (по умолчанию) выводит даты в формате полнотекстовой строки:</p>
    <div class="w3-example">
        <div class="w3-code notranslate">
            <script>document.write(new Date("2015-03-25"))
            </script>
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_current.html">Попробуйте сами &raquo;</a>
    </div>

    <p>Когда вы отображаете объект даты в HTML, он автоматически преобразуется в строку с помощью метода <code class="w3-codespan">toString()</code>.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            document.getElementById(&quot;demo&quot;).innerHTML = d;<br>
        </div>
        <h3>Same as:</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            document.getElementById(&quot;demo&quot;).innerHTML = d.toString();
        </div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_tostring.html">Попробуйте сами &raquo;</a>
    </div>
    <p>Метод <code class="w3-codespan">toUTCString()</code> преобразует дату в строку UTC (стандарт отображения даты).</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            document.getElementById(&quot;demo&quot;).innerHTML = d.toUTCString();
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_toutcstring.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <?php include '../include/adinfeed.php'; ?>
    <p>Метод <code class="w3-codespan">toDateString()</code> преобразует дату в более читаемый формат:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            document.getElementById(&quot;demo&quot;).innerHTML = d.toDateString();
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_todatestring.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Метод <code class="w3-codespan">toISOString()</code> преобразует объект Date в строку, используя стандартный формат ISO:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            const d = new Date();<br>
            document.getElementById(&quot;demo&quot;).innerHTML = d.toISOString();
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_date_toisostring.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_array_const.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_date_formats.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>