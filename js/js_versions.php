<?php include '../include/head.php'; ?>

<title>JavaScript Версии. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Версии. Редакции ECMAScript. Оригинальный JavaScript ES1 ES2 ES3 (1997–1999). Первая основная редакция ES5 (2009 г.). Вторая редакция ES6 (2015 г.). Ежегодные дополнения (2016, 2017, 2018). Браузерная поддержка. <?php include '../include/description.php'; ?>'>
    <link rel="stylesheet" href="../styles/browserref.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Версии</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_reserved.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_es5.php">Next &#10095;</a>
    </div>

    <div class="w3-panel w3-info intro">
        <p><strong>JavaScript</strong> был изобретен Бренданом Эйхом в 1995 году и стал стандартом ECMA в 1997 году.</p>
        <p><strong>ECMAScript</strong> - официальное название языка.</p>
        <p><strong>Версии ECMAScript</strong> сокращены до ES1, ES2, ES3, ES5 и ES6.</p>
        <p>С 2016 года новые версии именуются по годам (ECMAScript 2016/2017/2018).</p>
    </div>

    <h2>Редакции ECMAScript</h2>
    <table class="ws-table-all">
        <tr>
            <th>Версия</th>
            <th>Официальное название</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>ES1</td>
            <td>ECMAScript 1 (1997)</td><td>Первое издание</td>
        </tr>
        <tr>
            <td>ES2</td>
            <td>ECMAScript 2 (1998)</td><td>Редакционные изменения</td>
        </tr>
        <tr>
            <td>ES3</td>
            <td>ECMAScript 3 (1999)</td><td>Добавлены регулярные выражения<br>
                Добавлен try/catch<br>
                Добавлен switch<br>
                Добавлен do-while</td>
        </tr>
        <tr>
            <td>ES4</td>
            <td>ECMAScript 4</td><td>Никогда не выпускался</td>
        </tr>
        <tr>
            <td>ES5</td>
            <td>ECMAScript 5 (2009)<br><br>
                <a href="js_es5.php" class="ws-btn">Подробнее о ECMAScript 5 (2009)</a>
            </td>
            <td>
                Добавлен "strict mode"<br>
                Добавлена поддержка JSON<br>
                Добавлен String.trim()<br>
                Добавлен Array.isArray()<br>
                Добавлены методы итерации массива<br>
                Позволяет использовать конечные запятые для объектных литералов<br>
            </td>
        </tr>
        <tr>
            <td>ES6</td>
            <td>ECMAScript 2015<br><br>
                <a href="js_es6.php" class="ws-btn">Подробнее о ECMAScript 2015</a></td>
            <td>Добавлены let и const<br>
                Добавлены значения параметров по умолчанию<br>
                Добавлен Array.find()<br>
                Добавлен Array.findIndex()<br>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>ECMAScript 2016<br><br>
                <a href="js_2016.php" class="ws-btn">Подробнее о ECMAScript 2016</a></td>
            <td>Добавлен экспоненциальный оператор (**)<br>
                Добавлен Array.includes()</td>
        </tr>
        <tr>
            <td></td>
            <td>ECMAScript 2017<br><br>
                <a href="js_2017.php" class="ws-btn">Подробнее о ECMAScript 2017</a>
            </td><td>Добавлен строковый отступ<br>
                Добавлен Object.entries()<br>
                Добавлен Object.values()<br>
                Добавлены асинхронные функции<br>
                Добавлена общая память</td>
            Позволяет использовать конечные запятые для параметров функции
        </tr>
        <tr>
            <td></td>
            <td>ECMAScript 2018<br><br>
                <a href="js_2018.php" class="ws-btn">Подробнее о ECMAScript 2018</a>
            </td><td>
                Добавлены свойства rest / spread<br>
                Добавлена асинхронная итерация<br>
                Добавлен Promise.finally()<br>
                Дополнения к RegExp
            </td>
        </tr>
    </table>
    <div class="w3-panel w3-info">
        <p>В этом учебнике рассматриваются все версии JavaScript:</p>
        <ul>
            <li>Оригинальный JavaScript ES1 ES2 ES3 (1997–1999)</li>
            <li>Первая основная редакция ES5 (2009 г.)</li>
            <li>Вторая редакция ES6 (2015 г.)</li>
            <li>Ежегодные дополнения (2016, 2017, 2018)</li>
        </ul>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Поддержка браузерами</h2>
    <p>ECMAScript 1-6 полностью поддерживается во всех современных браузерах.</p>
    <hr>
    <h2>Браузерная поддержка для ES5 (2009 г.)</h2>
    <table class="ws-table-all">
        <tr>
            <th>Браузер</th>
            <th>Версия</th>
            <th>Дата</th>
        </tr>
        <tr><td>Chrome</td><td>23</td><td>Nov 2012</td></tr>
        <tr><td>Firefox</td><td>21</td><td>May 2013</td></tr>
        <tr><td>IE</td><td>9*</td><td>Mar 2011</td></tr>
        <tr><td>IE / Edge</td><td>10</td><td>Sep 2012</td></tr>
        <tr><td>Safari</td><td>6</td><td>Jul 2012</td></tr>
        <tr><td>Opera</td><td>15</td><td>Jul 2013</td></tr>
    </table>
    <div class="w3-panel w3-note">
        <p>* Internet Explorer 9 не поддерживает ECMAScript 5 "use strict".</p>
    </div>
    <hr>

    <h2>Браузерная поддержка ES6 (2015)</h2>
    <table class="ws-table-all">
        <tr>
            <th>Браузер</th>
            <th>Версия</th>
            <th>Дата</th>
        </tr>
        <tr><td>Chrome</td><td>51</td><td>May 2016</td></tr>
        <tr><td>Firefox</td><td>52</td><td>Mar 2017</td></tr>
        <tr><td>Edge</td><td>14</td><td>Aug 2016</td></tr>
        <tr><td>Safari</td><td>10</td><td>Sep 2016</td></tr>
        <tr><td>Opera</td><td>38</td><td>Jun 2016</td></tr>
    </table>
    <div class="w3-panel w3-note">
        <p>Internet Explorer не поддерживает ECMAScript 2015.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Браузерная поддержка для ECMAScript 2016</h2>
    <table class="ws-table-all">
        <tr>
            <th>Браузер</th>
            <th>Версия</th>
            <th>Дата</th>
        </tr>
        <tr><td>Chrome</td><td>52</td><td>Jul 2016</td></tr>
        <tr><td>Firefox</td><td>54</td><td>Jun 2017</td></tr>
        <tr><td>Edge</td><td>14</td><td>Aug 2016</td></tr>
        <tr><td>Safari</td><td>10.1</td><td>Mar 2017</td></tr>
        <tr><td>Opera</td><td>39</td><td>Aug 2016</td></tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_reserved.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_es5.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>