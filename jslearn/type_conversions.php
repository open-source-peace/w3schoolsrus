<?php include '../include/head.php'; ?>

<title>Преобразование типов в JavaScript. <?php include '../include/title_jslearn.php'; ?></title>
<meta name='description' content='Преобразование типов в JavaScript. Строковое, численное, логическое. Примеры кода. <?php include '../include/description_jslearn.php'; ?>'>
<link rel='stylesheet' href='../styles/accordion.css'>
<style>
    table {border-collapse: collapse;width: 100%;}
    th, td {padding: 5px;text-align: left;border-bottom: 1px solid #ddd;}
</style>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_jslearn.php'; ?>
<?php include '../include/before_content_jslearn.php'; ?>

<article>
  <h1>JavaScript Преобразование типов</h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='alert_prompt_confirm.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='operators.php'>Next &#10095;</a>
  </div>
  <hr>
  <p>Чаще всего операторы и функции автоматически приводят переданные им значения к нужному типу.</p>
  <p>Например, <code>alert</code> автоматически преобразует любое значение к строке. Математические операторы преобразуют значения к числам.</p>
  <p>Есть также случаи, когда нам нужно явно преобразовать значение в ожидаемый тип.</p>
    <div class='important'>
        <p><span class='info_sign'>&#x2139;</span><b>Пока что мы не говорим об объектах</b></p>
        <p>В этой главе мы не касаемся объектов. Сначала мы разберём преобразование примитивных значений. Мы разберём преобразование объектов позже, в главе <a href="object_toprimitive.php">Преобразование объектов в примитивы</a>.</p>
    </div>
    <hr>
    <h2>Строковое преобразование</h2>
    <p>Строковое преобразование происходит, когда требуется представление чего-либо в виде строки.</p>
    <p>Например, alert(value) преобразует значение к строке.</p>
    <p>Также мы можем использовать функцию String(value), чтобы преобразовать значение к строке:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            let value = true;<br>
            alert(typeof value); // boolean<br>
            <br>
            value = String(value); // теперь value это строка "true"<br>
            alert(typeof value); // string
        </div>
    </div>
    <p>Преобразование происходит очевидным образом. <code>false</code> становится <code>"false"</code>, <code>null</code> становится <code>"null"</code> и т.п.</p>
    <hr>
    <h2>Численное преобразование</h2>
    <p>Численное преобразование происходит в математических функциях и выражениях.</p>
    <p>Например, когда операция деления / применяется не к числу:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            alert( "6" / "2" ); // 3, строки преобразуются в числа
        </div>
    </div>
    <p>Можно использовать функцию <code>Number(value)</code>, чтобы явно преобразовать <code>value</code> к числу:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            let str = "123";<br>
            alert(typeof str); // string<br>
            <br>
            let num = Number(str); // становится числом 123<br>
            <br>
            alert(typeof num); // number
        </div>
    </div>
    <p>Явное преобразование часто применяется, когда мы ожидаем получить число из строкового контекста, например из текстовых полей форм.</p>
    <p>Если строка не может быть явно приведена к числу, то результатом преобразования будет <code>NaN</code>.</p>
    <div class='w3-example'>
        <p>Например:</p>
        <div class='w3-code notranslate jsHigh'>
            let age = Number("Любая строка вместо числа");<br>
            <br>
            alert(age); // NaN, преобразование не удалось
        </div>
    </div>
    <p>Правила численного преобразования:</p>
    <table>
        <thead>
        <tr>
            <th style="width: 20%">Значение</th>
            <th style="width: 80%">Преобразуется в…</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><code>undefined</code></td>
            <td><code>NaN</code></td>
        </tr>
        <tr>
            <td><code>null</code></td>
            <td><code>0</code></td>
        </tr>
        <tr>
            <td><code>true / false</code></td>
            <td><code>1</code> / <code>0</code></td>
        </tr>
        <tr>
            <td><code>string</code></td>
            <td>Пробельные символы по краям обрезаются. Далее, если остаётся пустая строка, то получаем <code>0</code>, иначе из непустой строки «считывается» число. При ошибке результат <code>NaN</code>.</td>
        </tr>
        </tbody>
    </table>

    <div class='w3-example'>
        <p>Примеры:</p>
        <div class='w3-code notranslate jsHigh'>
            alert( Number("   123   ") ); // 123<br>
            alert( Number("123z") );      // NaN (ошибка чтения числа на месте символа "z")<br>
            alert( Number(true) );        // 1<br>
            alert( Number(false) );       // 0
        </div>
    </div>
    <p>Учтите, что <code>null</code> и <code>undefined</code> ведут себя по-разному. Так, <code>null</code> становится нулём, тогда как <code>undefined</code> приводится к <code>NaN</code>.</p>
    <p>Большинство математических операторов также производит данное преобразование, как мы увидим в следующей главе.</p>
    <hr>
    <h2>Логическое преобразование</h2>
    <p>Логическое преобразование самое простое.</p>
    <p>Происходит в логических операциях (позже мы познакомимся с условными проверками и подобными конструкциями), но также может быть выполнено явно с помощью функции <code>Boolean(value)</code>.</p>
    <p>Правило преобразования:</p>
    <ul>
        <li>Значения, которые интуитивно «пустые», вроде <code>0</code>, пустой строки, <code>null</code>, <code>undefined</code> и <code>NaN</code>, становятся <code>false</code>.</li>
        <li>Все остальные значения становятся <code>true</code>.</li>
    </ul>
    <div class='w3-example'>
        <p>Например:</p>
        <div class='w3-code notranslate jsHigh'>
            alert( Boolean(1) ); // true<br>
            alert( Boolean(0) ); // false<br>
            <br>
            alert( Boolean("Привет!") ); // true<br>
            alert( Boolean("") ); // false
        </div>
    </div>
    <div class='important'>
        <p><span class='warning_sign'>&#x26a0;</span><b>Заметим, что строчка с нулём <code>"0"</code> — это <code>true</code></b></p>
        <p>Некоторые языки (к примеру, PHP) воспринимают строку <code>"0"</code> как <code>false</code>. Но в JavaScript, если строка не пустая, то она всегда <code>true</code>.</p>
        <div class='w3-code notranslate jsHigh'>
            alert( Boolean("0") ); // true<br>
            alert( Boolean(" ") ); // пробел это тоже true (любая непустая строка это true)
        </div>
    </div>
    <hr>
    <h2>Резюме</h2>
    <p>Существует 3 наиболее широко используемых преобразования: строковое, численное и логическое.</p>
    <p>1. <strong>Строковое преобразование</strong> – происходит, когда нам нужно что-то вывести. Может быть вызвано с помощью <code>String(value)</code>. Для примитивных значений работает очевидным образом.</p>
    <p>2. <strong>Численное преобразование</strong> – происходит в математических операциях. Может быть вызвано с помощью <code>Number(value)</code>.</p>
    <p>Преобразование подчиняется правилам:</p>
    <table>
        <thead>
        <tr>
            <th style="width: 20%">Значение</th>
            <th style="width: 80%">Становится…</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><code>undefined</code></td>
            <td><code>NaN</code></td>
        </tr>
        <tr>
            <td><code>null</code></td>
            <td><code>0</code></td>
        </tr>
        <tr>
            <td><code>true&nbsp;/&nbsp;false</code></td>
            <td><code>1 / 0</code></td>
        </tr>
        <tr>
            <td><code>string</code></td>
            <td>Пробельные символы по краям обрезаются. Далее, если остаётся пустая строка, то получаем <code>0</code>, иначе из непустой строки «считывается» число. При ошибке результат <code>NaN</code>.</td>
        </tr>
        </tbody>
    </table>
    <p>3. <strong>Логическое преобразование</strong> – происходит в логических операциях. Может быть вызвано с помощью <code>Boolean(value)</code>.</p>
    <p>Подчиняется правилам:</p>
    <table>
        <thead>
        <tr>
            <th style="width: 20%">Значение</th>
            <th style="width: 80%">Становится…</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><code>0</code>, <code>null</code>, <code>undefined</code>, <code>NaN</code>, <code>""</code></td>
            <td><code>false</code></td>
        </tr>
        <tr>
            <td>любое другое значение</td>
            <td><code>true</code></td>
        </tr>
        </tbody>
    </table>
    <p>Большую часть из этих правил легко понять и запомнить. Особые случаи, в которых часто допускаются ошибки:</p>
    <ul>
        <li><code>undefined</code> при численном преобразовании становится <code>NaN</code>, не <code>0</code>.</li>
        <li><code>"0"</code> и строки из одних пробелов типа <code>" "</code> при логическом преобразовании всегда <code>true</code>.</li>
    </ul>
    <p>В этой главе мы не говорили об объектах. Мы вернёмся к ним позже, в главе <a href="object_toprimitive.php">Преобразование объектов в примитивы</a>, посвящённой только объектам, сразу после того, как узнаем больше про <strong>основы JavaScript</strong>.</p>
    <script src="../scripts/accordion.js"></script>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='alert_prompt_confirm.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='operators.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
