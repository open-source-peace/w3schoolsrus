<?php include '../include/head.php'; ?>

<title>Взаимодействие в JavaScript. <?php include '../include/title_jslearn.php'; ?></title>
<meta name='description' content='Взаимодействие в JavaScript: alert, prompt, confirm. Модальное окно. Примеры кода. Задачи. <?php include '../include/description_jslearn.php'; ?>'>
<link rel='stylesheet' href='../styles/accordion.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_jslearn.php'; ?>
<?php include '../include/before_content_jslearn.php'; ?>

<article>
    <h1>JavaScript Взаимодействие: alert, prompt, confirm</h1>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='types.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='type_conversions.php'>Next &#10095;</a>
    </div>
    <hr>
    <p>Так как мы будем использовать браузер как демо-среду, нам нужно познакомиться с несколькими функциями его интерфейса, а именно: <code>alert</code>, <code>prompt</code> и <code>confirm</code>.</p>
    <hr>
    <h2>Функция alert</h2>
    <p>С этой функцией мы уже знакомы. Она показывает сообщение и ждёт, пока пользователь нажмёт кнопку «ОК».</p>
    <p>Например:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            alert("Hello");
        </div>
    </div>
    <p>Это небольшое окно с сообщением называется <em>модальным</em> окном. Понятие <em>модальное</em> (или <em>модал</em>) означает, что пользователь не может взаимодействовать с интерфейсом остальной части страницы, нажимать на другие кнопки и т.д. до тех пор, пока взаимодействует с окном. В данном случае – пока не будет нажата кнопка «OK».</p>
    <hr>
    <h2>Функция prompt</h2>
    <p>Функция <code>prompt</code> принимает два аргумента:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            result = prompt(title, [default]);
        </div>
    </div>
    <p>Этот код отобразит модальное окно с текстом, полем для ввода текста и кнопками OK/Отмена.</p>
    <p><code>title</code></p>
    <p>Текст для отображения в окне.</p>
    <p><code>default</code></p>
    <p>Необязательный второй параметр, который устанавливает начальное значение в поле для текста в окне.</p>
    <div class='important'>
        <p><span class='info_sign'>&#x2139;</span><b>Квадратные скобки в синтаксисе <code>[...]</code></b></p>
        <p>Квадратные скобки вокруг <code>default</code> в описанном выше синтаксисе означают, что параметр факультативный, необязательный.</p>
    </div>
    <p>Пользователь может напечатать что-либо в поле ввода и нажать OK. Введённый текст будет присвоен переменной <code>result</code>. Пользователь также может отменить ввод нажатием на кнопку «Отмена» или нажав на клавишу <kbd class="shortcut">Esc</kbd>. В этом случае значением <code>result</code> станет <code>null</code>.</p>
    <p>Вызов <code>prompt</code> возвращает текст, указанный в поле для ввода, или <code>null</code>, если ввод отменён пользователем.</p>
    <p>Например:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            let age = prompt('Сколько тебе лет?', 100);<br>
            <br>
            alert(`Тебе ${age} лет!`); // Тебе 100 лет!
        </div>
    </div>

    <div class='important'>
        <p><span class='warning_sign'>&#x26a0;</span><b>Для IE: всегда устанавливайте значение по умолчанию</b></p>
        <p>Второй параметр является необязательным, но если не указать его, то Internet Explorer вставит строку <code>&quot;undefined&quot;</code> в поле для ввода.</p>
        <p>Запустите код в Internet Explorer и посмотрите на результат:</p>
        <div class='w3-code notranslate jsHigh'>
            let test = prompt("Test");
        </div>
        <p>Чтобы <code>prompt</code> хорошо выглядел в IE, рекомендуется всегда указывать второй параметр:</p>
        <div class='w3-code notranslate jsHigh'>
            let test = prompt("Test", ''); // для IE
        </div>
    </div>
    <hr>
    <h2>Функция confirm</h2>
    <p>Синтаксис:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            result = confirm(question);
        </div>
    </div>
    <p>Функция <code>confirm</code> отображает модальное окно с текстом вопроса <code>question</code> и двумя кнопками: OK и Отмена.</p>
    <p>Результат – <code>true</code>, если нажата кнопка OK. В других случаях – <code>false</code>.</p>
    <p>Например:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate jsHigh'>
            let isBoss = confirm("Ты здесь главный?");<br>
            <br>
            alert( isBoss ); // true, если нажата OK
        </div>
    </div>
    <hr>
    <h2>Резюме</h2>
    <p>Мы рассмотрели 3 функции браузера для взаимодействия с пользователем:</p>
    <ol>
        <li><strong>Функция <code>alert</code></strong> - показывает (выводит) сообщение.</li>
        <li><strong>Функция <code>prompt</code></strong> - показывает сообщение и запрашивает ввод текста от пользователя. Возвращает напечатанный в поле ввода текст или <code>null</code>, если была нажата кнопка «Отмена» или <kbd class="shortcut">Esc</kbd> с клавиатуры.</li>
        <li><strong>Функция <code>confirm</code></strong> - показывает сообщение и ждёт, пока пользователь нажмёт OK или Отмена. Возвращает <code>true</code>, если нажата OK, и <code>false</code>, если нажата кнопка «Отмена» или <kbd class="shortcut">Esc</kbd> с клавиатуры.</li>
    </ol>
    <p>Все эти методы являются модальными: останавливают выполнение скриптов и не позволяют пользователю взаимодействовать с остальной частью страницы до тех пор, пока окно не будет закрыто.</p>
    <p>На все указанные методы распространяются два ограничения:</p>
    <ol>
        <li>Расположение окон определяется браузером. Обычно окна находятся в центре.</li>
        <li>Визуальное отображение окон зависит от браузера, и мы не можем изменить их вид.</li>
    </ol>
    <p>Такова цена простоты. Есть другие способы показать более приятные глазу окна с богатой функциональностью для взаимодействия с пользователем, но если «навороты» не имеют значения, то данные методы работают отлично.</p>
    <hr>
    <h2>&#9989; Задача</h2>
    <h3>Простая страница</h3>
    <p>Создайте страницу, которая спрашивает имя у пользователя и выводит его.</p>

    <button class="accordion">Решение <i class='fa fa-caret-down'></i></button>
    <div class="panel">
        <div class='important'>
            <p>JavaScript-код:</p>
            <div class='w3-code notranslate jsHigh'>
                let name = prompt("Ваше имя?", "");<br>
                alert(name);
            </div>
            <p>Вся html-страница:</p>
            <div class='w3-code notranslate htmlHigh'>
                &lt;!DOCTYPE html&gt;<br>
                &lt;html&gt;<br>
                &lt;body&gt;<br>
                <br>
                &lt;script&gt;<br>
                &nbsp;&nbsp;&nbsp;'use strict';<br>
                <br>
                &nbsp;&nbsp;&nbsp;let name = prompt("Ваше имя?", "");<br>
                &nbsp;&nbsp;&nbsp;alert(name);<br>
                &lt;/script&gt;<br>
                <br>
                &lt;/body&gt;<br>
                &lt;/html&gt;
            </div>
        </div>
    </div>

    <script src="../scripts/accordion.js"></script>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='types.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='type_conversions.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>