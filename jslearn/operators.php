<?php include '../include/head.php'; ?>

<title>Базовые операторы, математика в JavaScript. <?php include '../include/title_jslearn.php'; ?></title>
<meta name='description' content='Базовые операторы, математика в JavaScript. Операторы сравнения. Сравнение строк, разных типов, строгое, с null и undefined. Примеры кода. Задача. <?php include '../include/description_jslearn.php'; ?>'>
<link rel='stylesheet' href='../styles/accordion.css'>
<style>
    table {border-collapse: collapse;width: 100%;}
    th, td {padding: 5px;text-align: left;border-bottom: 1px solid #ddd;}
</style>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_jslearn.php'; ?>
<?php include '../include/before_content_jslearn.php'; ?>

<article>
  <h1>JavaScript Базовые операторы, математика</h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='type_conversions.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='comparison.php'>Next &#10095;</a>
  </div>
  <hr>
  <p>Многие <strong>операторы сравнения</strong> известны нам из <strong>математики</strong>.</p>
  <p>В JavaScript они записываются так:</p>
    <ul>
        <li>Больше/меньше: <code>a &gt; b</code>, <code>a &lt; b</code>.</li>
        <li>Больше/меньше или равно: <code>a &gt;= b</code>, <code>a &lt;= b</code>.</li>
        <li>Равно: <code>a == b</code>. Обратите внимание, для сравнения используется двойной знак равенства <code>==</code>. Один знак равенства <code>a = b</code> означает присваивание.</li>
        <li>Не равно. В математике обозначается символом <code>≠</code>, но в JavaScript записывается как <code>a != b</code>.</li>
    </ul>
    <p>В этом разделе мы больше узнаем о том, какие бывают сравнения, как язык с ними работает и к каким неожиданностям мы должны быть готовы.</p>
    <p>В конце вы найдёте хороший рецепт того, как избегать &quot;проблем&quot; сравнения в JavaScript.</p>
    <hr>
    <h2>Результат сравнения имеет логический тип</h2>
    <p>Все операторы сравнения возвращают значение логического типа:</p>
    <ul>
        <li><code>true</code> – означает «да», «верно», «истина».</li>
        <li><code>false</code> – означает «нет», «неверно», «ложь».</li>
    </ul>

    <div class='w3-example'>
        <p>Например:</p>
        <div class='w3-code notranslate jsHigh'>
            alert( 2 > 1 );  // true (верно)<br>
            alert( 2 == 1 ); // false (неверно)<br>
            alert( 2 != 1 ); // true (верно)
        </div>
    </div>
    <p>Результат сравнения можно присвоить переменной, как и любое значение:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            let result = 5 > 4; // результат сравнения присваивается переменной result<br>
            alert( result ); // true
        </div>
    </div>
    <hr>
    <h2>Сравнение строк</h2>
    <p>Чтобы определить, что одна строка больше другой, JavaScript использует «алфавитный» или «лексикографический» порядок.</p>
    <p>Другими словами, строки сравниваются посимвольно.</p>

    <div class='w3-example'>
        <p>Например:</p>
        <div class='w3-code notranslate jsHigh'>
            alert( 'Я' > 'А' ); // true<br>
            alert( 'Коты' > 'Кода' ); // true<br>
            alert( 'Сонный' > 'Сон' ); // true
        </div>
    </div>
    <p><strong>Алгоритм сравнения двух строк в JavaScript</strong> довольно прост:</p>
    <ol>
        <li>Сначала сравниваются первые символы строк.</li>
        <li>Если первый символ первой строки больше (меньше), чем первый символ второй, то первая строка больше (меньше) второй. Сравнение завершено.</li>
        <li>Если первые символы равны, то таким же образом сравниваются уже вторые символы строк.</li>
        <li>Сравнение продолжается, пока не закончится одна из строк.</li>
        <li>Если обе строки заканчиваются одновременно, то они равны. Иначе, большей считается более длинная строка.</li>
    </ol>
    <p>В примерах выше сравнение <code>'Я' &gt; 'А'</code> завершится на первом шаге, тогда как строки <code>'Коты'</code> и <code>'Кода'</code> будут сравниваться посимвольно:</p>
    <ol>
        <li><code>К</code> равна <code>К</code>.</li>
        <li><code>о</code> равна <code>о</code>.</li>
        <li><code>т</code> больше, чем <code>д</code>. На этом сравнение заканчивается. Первая строка больше.</li>
    </ol>

    <div class='important'>
        <p><span class='info_sign'>&#x2139;</span><b>Используется кодировка Unicode, а не обычный алфавит</b></p>
        <p>Приведённый выше алгоритм сравнения похож на алгоритм, используемый в словарях и телефонных книгах, но между ними есть и различия.</p>
        <p>Например, в JavaScript имеет значение регистр символов. Заглавная буква <code>"A"</code> не равна строчной <code>"a"</code>. Какая же из них больше? Строчная <code>"a"</code>. Почему? Потому что строчные буквы имеют больший код во внутренней таблице кодирования, которую использует JavaScript (Unicode). Мы ещё поговорим о внутреннем представлении строк и его влиянии в главе
            <a href="string.php">Строки</a>.</p>
    </div>
    <hr>
    <h2>Сравнение разных типов</h2>
    <p>При сравнении значений разных типов JavaScript приводит каждое из них к числу.</p>
    <div class='w3-example'>
        <p>Например:</p>
        <div class='w3-code notranslate jsHigh'>
            alert( '2' > 1 ); // true, строка '2' становится числом 2<br>
            alert( '01' == 1 ); // true, строка '01' становится числом 1
        </div>
    </div>
    <p>Логическое значение <code>true</code> становится 1, а <code>false</code> – 0.</p>
    <div class='w3-example'>
        <p>Например:</p>
        <div class='w3-code notranslate jsHigh'>
            alert( true == 1 ); // true<br>
            alert( false == 0 ); // true
        </div>
    </div>
    <div class='important'>
        <p><span class='info_sign'>&#x2139;</span><b>Забавное следствие</b></p>
        <p>Возможна следующая ситуация:</p>
        <ul>
            <li>Два значения равны</li>
            <li>Одно из них <code>true</code> как логическое значение, другое – <code>false</code></li>
        </ul>
        <div class='w3-example'>
            <p>Например:</p>
            <div class='w3-code notranslate jsHigh'>
                let a = 0;<br>
                alert( Boolean(a) ); // false<br>
                <br>
                let b = "0";<br>
                alert( Boolean(b) ); // true<br>
                <br>
                alert(a == b); // true!
            </div>
        </div>
        <p>С точки зрения JavaScript, результат ожидаем. Равенство преобразует значения, используя числовое преобразование, поэтому <code>"0"</code> становится <code>0</code>. В то время как явное преобразование с помощью <code>Boolean</code> использует другой набор правил.</p>
    </div>
    <hr>
    <h2>Строгое сравнение</h2>
    <p>Использование обычного сравнения <code>==</code> может вызывать проблемы. Например, оно не отличает <code>0</code> от <code>false</code>:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            alert( 0 == false ); // true
        </div>
    </div>
    <p>Та же проблема с пустой строкой:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            alert( '' == false ); // true
        </div>
    </div>
    <p>Это происходит из-за того, что операнды разных типов преобразуются оператором <code>==</code> к числу. В итоге, и пустая строка, и <code>false</code> становятся нулём.</p>
    <hr>
    <h3>Как же тогда отличать <code>0</code> от <code>false</code>?</h3>
    <p><b>Оператор строгого равенства <code>===</code> проверяет равенство без приведения типов.</b></p>
    <p>Другими словами, если <code>a</code> и <code>b</code> имеют разные типы, то проверка <code>a === b</code> немедленно возвращает <code>false</code> без попытки их преобразования.</p>
    <div class='w3-example'>
        <p>Давайте проверим:</p>
        <div class='w3-code notranslate jsHigh'>
            alert( 0 === false ); // false, так как сравниваются разные типы
        </div>
    </div>
    <p>Ещё есть оператор строгого неравенства <code>!==</code>, аналогичный <code>!=</code>.</p>
    <p>Оператор строгого равенства дольше писать, но он делает код более очевидным и оставляет меньше места для ошибок.</p>
    <hr>
    <h2>Сравнение с null и undefined</h2>
    <p>Поведение <code>null</code> и <code>undefined</code> при сравнении с другими значениями — особое:</p>
    <p><b>При строгом равенстве <code>===</code></b></p>
    <p>Эти значения различны, так как различны их типы.</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            alert( null === undefined ); // false
        </div>
    </div>
    <p><b>При нестрогом равенстве <code>==</code></b></p>
    <p>Эти значения равны друг другу и не равны никаким другим значениям. Это специальное правило языка.</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            alert( null == undefined ); // true
        </div>
    </div>
    <p><b>При использовании математических операторов и других операторов сравнения <code>&lt;</code> <code>&gt;</code> <code>&lt;=</code> <code>&gt;=</code></b></p>
    <p>Значения <code>null</code>/<code>undefined</code> преобразуются к числам: <code>null</code> становится <code>0</code>, а <code>undefined</code> – <code>NaN</code>.</p>
    <p>Посмотрим, какие забавные вещи случаются, когда мы применяем эти правила. И, что более важно, как избежать ошибок при их использовании.</p>
    <hr>
    <h2>Странный результат сравнения <code>null</code> и <code>0</code></h2>
    <p>Сравним <code>null</code> с нулём:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            alert( null > 0 );  // (1) false<br>
            alert( null == 0 ); // (2) false<br>
            alert( null >= 0 ); // (3) true
        </div>
    </div>
    <p>С точки зрения математики это странно. Результат последнего сравнения говорит о том, что "<code>null</code> больше или равно нулю", тогда результат одного из сравнений выше должен быть <code>true</code>, но они оба ложны.</p>
    <p>Причина в том, что нестрогое равенство и сравнения <code>&lt;</code> <code>&gt;</code> <code>&lt;=</code> <code>&gt;=</code> работают по-разному. Сравнения преобразуют <code>null</code> в число, рассматривая его как <code>0</code>. Поэтому выражение (3) <code>null &gt;= 0</code> истинно, а <code>null &gt; 0</code> ложно.</p>
    <p>С другой стороны, для нестрогого равенства <code>==</code> значений <code>undefined</code> и <code>null</code> действует особое правило: эти значения ни к чему не приводятся, они равны друг другу и не равны ничему другому. Поэтому (2) <code>null == 0</code> ложно.</p>
    <hr>
    <h2>Несравненное значение <code>undefined</code></h2>
    <p>Значение <code>undefined</code> несравнимо с другими значениями:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            alert( undefined > 0 ); // false (1)<br>
            alert( undefined < 0 ); // false (2)<br>
            alert( undefined == 0 ); // false (3)
        </div>
    </div>
    <p>Почему же сравнение <code>undefined</code> с нулём всегда ложно?</p>
    <p>На это есть следующие причины:</p>
    <ul>
        <li>Сравнения (1) и (2) возвращают <code>false</code>, потому что <code>undefined</code> преобразуется в <code>NaN</code>, а <code>NaN</code> – это специальное числовое значение, которое возвращает <code>false</code> при любых сравнениях.</li>
        <li>Нестрогое равенство (3) возвращает <code>false</code>, потому что <code>undefined</code> равно только <code>null</code>, <code>undefined</code> и ничему больше.</li>
    </ul>
    <hr>
    <h2>Как избежать проблем в JavaScript?</h2>
    <p>Зачем мы рассмотрели все эти примеры? Должны ли мы постоянно помнить обо всех этих особенностях? Не обязательно. Со временем все они станут вам знакомы, но можно избежать проблем, если следовать надёжным правилам:</p>
    <ul>
        <li>Относитесь очень осторожно к любому сравнению с <code>null</code>/<code>undefined</code>, кроме случаев строгого равенства <code>===</code>.</li>
        <li>Не используйте сравнения <code>&lt;</code> <code>&gt;</code> <code>&lt;=</code> <code>&gt;=</code> с переменными, которые могут принимать значения <code>null</code>/<code>undefined</code>, разве что вы полностью уверены в том, что делаете. Если переменная может принимать эти значения, то добавьте для них отдельные проверки.</li>
    </ul>
    <hr>
    <h2>Резюме</h2>
    <ul>
        <li>Операторы сравнения возвращают значения логического типа.</li>
        <li>Строки сравниваются посимвольно в лексикографическом порядке.</li>
        <li>Значения разных типов при сравнении приводятся к числу. Исключением является сравнение с помощью операторов строгого равенства/неравенства.</li>
        <li>Значения <code>null</code> и <code>undefined</code> равны <code>==</code> друг другу и не равны любому другому значению.</li>
        <li>Будьте осторожны при использовании операторов сравнений вроде <code>&gt;</code> и <code>&lt;</code> с переменными, которые могут принимать значения <code>null</code>/<code>undefined</code>. Хорошей идеей будет сделать отдельную проверку на <code>null</code>/<code>undefined</code>.</li>
    </ul>
    <h2>&#9989; Задача</h2>
    <h3>Операторы сравнения</h3>
    <p>Каким будет результат этих выражений?</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            5 > 4<br>
            "ананас" > "яблоко"<br>
            "2" > "12"<br>
            undefined == null<br>
            undefined === null<br>
            null == "\n0\n"<br>
            null === +"\n0\n"
        </div>
    </div>
    <button class="accordion">Решение <i class='fa fa-caret-down'></i></button>
    <div class="panel">
        <div class='important'>
            <div class='w3-code notranslate jsHigh'>
                5 > 4 → true<br>
                "ананас" > "яблоко" → false<br>
                "2" > "12" → true<br>
                undefined == null → true<br>
                undefined === null → false<br>
                null == "\n0\n" → false<br>
                null === +"\n0\n" → false
            </div>
        </div>
        <p>Разъяснения:</p>
        <ol>
            <li>Очевидно, <code>true</code>.</li>
            <li>Используется посимвольное сравнение, поэтому <code>false</code>. <code>"а"</code> меньше, чем <code>"я"</code>.</li>
            <li>Снова посимвольное сравнение. Первый символ первой строки <code>"2"</code> больше, чем первый символ второй <code>"1"</code>.</li>
            <li>Специальный случай. Значения <code>null</code> и <code>undefined</code> равны только друг другу при нестрогом сравнении.</li>
            <li>Строгое сравнение разных типов, поэтому <code>false</code>.</li>
            <li>Аналогично (4), <code>null</code> равен только <code>undefined</code>.</li>
            <li>Строгое сравнение разных типов.</li>
        </ol>
    </div>
    <script src="../scripts/accordion.js"></script>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='type_conversions.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='comparison.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
