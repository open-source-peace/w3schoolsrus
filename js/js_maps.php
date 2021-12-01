<?php include '../include/head.php'; ?>

<title>JavaScript Карты. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Карты. Основные методы карты. Как создать карту. Методы new Map(), set(), get(), delete(), has(), forEach(), entries(). Свойство size. Объекты vs Карты. <?php include '../include/description.php'; ?>'>
<link rel="stylesheet" href="../styles/browserref.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript Карты</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_sets.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_typeof.php">Next &#10095;</a>
    </div>

    <div class="w3-info">
        <p><strong>Карта</strong> содержит пары &quot;ключ-значение&quot;, где ключи могут быть любого типа данных.</p>
        <p><strong>Карта</strong> запоминает исходный порядок вставки ключей.</p>
    </div>

    <h2>Основные методы карты</h2>
    <table class="ws-table-all">
        <tr><th style="width: 120px">Метод</th><th>Описание</th></tr>
        <tr><td>new Map()</td><td>Создает новую карту</td></tr>
        <tr><td>set()</td><td>Устанавливает значение для ключа на карте</td></tr>
        <tr><td>get()</td><td>Получает значение ключа на карте</td></tr>
        <tr><td>delete()</td><td>Удаляет элемент карты, указанный ключом</td></tr>
        <tr><td>has()</td><td>Возвращает true, если ключ существует на карте</td></tr>
        <tr><td>forEach()</td><td>Вызывает функцию для каждой пары ключ/значение на карте</td></tr>
        <tr><td>entries()</td><td>Возвращает итератор с парами [ключ, значение] на карте</td></tr>
        <tr><th>Свойство</th><th>Описание</th></tr>
        <tr><td>size</td><td>Возвращает количество элементов на карте</td></tr>
    </table>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Как создать карту</h2>
    <p>Вы можете создать JavaScript карту с помощью:</p>
    <ul>
        <li>Передача массива в <code class="w3-codespan">new Map()</code></li>
        <li>Создайте карту и используйте <code class="w3-codespan">Map.set()</code></li>
    </ul>
    <hr>

    <h2>Метод new Map()</h2>
    <p>Вы можете создать карту, передав массив в конструктор <code class="w3-codespan">new Map()</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Создать карту<br>
            const fruits = new Map([<br>
            &nbsp; ["apples", 500],<br>
            &nbsp; ["bananas", 300],<br>
            &nbsp; ["oranges", 200]<br>
            ]);<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_map_create_array.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Метод set()</h2>
    <p>Вы можете добавлять элементы в карту с помощью метода <code class="w3-codespan">set()</code>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Создать карту<br>
            const fruits = new Map();<br>
            <br>
            // Установить значения карты<br>
            fruits.set("apples", 500);<br>
            fruits.set("bananas", 300);<br>
            fruits.set("oranges", 200);<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_map_set_new.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Метод <code class="w3-codespan">set()</code> также можно использовать для изменения существующих значений карты:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            fruits.set("apples", 500);
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_map_set.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Метод get()</h2>
    <p>Метод <code class="w3-codespan">get()</code> получает значение ключа на карте:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            fruits.get("apples");&nbsp;&nbsp;&nbsp;&nbsp;// Возвращает 500<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_map_get.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <?php include '../include/addown_content.php'; ?>

    <h2>Свойство size</h2>
    <p>Свойство <code class="w3-codespan">size</code> возвращает количество элементов на карте:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">fruits.size;</div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_map_size.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод delete()</h2>
    <p>Метод <code class="w3-codespan">delete()</code> удаляет элемент карты:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            fruits.delete("apples");
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_map_delete.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Метод has()</h2>
    <p>Метод <code class="w3-codespan">has()</code> возвращает true, если ключ существует на карте:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            fruits.has("apples");
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_map_has.html" target="_blank">Попробуйте сами &raquo;</a>
        <h3>Попробуй это:</h3>
        <div class="w3-code notranslate jsHigh">
            fruits.delete("apples");<br>
            fruits.has("apples");
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_map_has_deleted.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>JavaScript Объекты vs Карты</h2>
    <h4>Различия между JavaScript объектами и картами:</h4>
    <table class="w3-table-all">
        <tr><th></th><th>Объект</th><th>Карта</th></tr>
        <tr><th>Итерация</th>
            <td>Не прямая итерация</td>
            <td>Прямая итерация</td></tr>
        <tr><th>Размер</th>
            <td>Не имеет свойства size</td>
            <td>Имеет свойство size</td></tr>
        <tr><th>Ключевые типы</th>
            <td>Ключи должны быть строками (или символами)</td>
            <td>Ключи могут иметь любой тип данных</td></tr>
        <tr><th>Ключевой порядок</th>
            <td>Ключи плохо упорядочены</td>
            <td>Ключи упорядочены по вставке</td></tr>
        <tr><th>По умолчанию</th>
            <td>Есть ключи по умолчанию</td>
            <td>Нет ключей по умолчанию</td></tr>
    </table>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Метод forEach()</h2>
    <p>Метод <code class="w3-codespan">forEach()</code> вызывает функцию для каждой пары ключ/значение на карте:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Список всех записей<br>
            let text = "";<br>
            fruits.forEach (function(value, key) {<br>
            &nbsp;&nbsp;text += key + ' = ' + value;<br>
            })
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_map_foreach.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Метод entries()</h2>
    <p>Метод <code class="w3-codespan">entries()</code> возвращает объект-итератор с [ключом, значениями] на карте:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            // Список всех записей<br>
            let text = "";<br>
            for (const x of fruits.entries()) {<br>
            &nbsp;&nbsp;text += x;<br>
            }
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_map_entries.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Поддержка браузерами</h2>
    <p>Карты JavaScript поддерживаются во всех браузерах, кроме Internet Explorer:</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tbody><tr style="height:50px">
                <th style="width:16%;" class="bsChrome" title="Chrome"></th>
                <th style="width:16%;" class="bsEdge" title="Edge"></th>
                <th style="width:16%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:16%;" class="bsSafari" title="Safari"></th>
                <th style="width:16%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td>Chrome</td>
                <td>Edge</td>
                <td>Firefox</td>
                <td>Safari</td>
                <td>Opera</td>
            </tr>
            </tbody>
        </table>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_sets.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_typeof.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>