<?php include '../include/head.php'; ?>

<title>Go Учебник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Go Учебник. Интро. Введение. Выучить онлайн язык программирования Go. Примеры кода. Полный справочник по языку Golang. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_go.php'; ?>
<?php include '../include/before_content_go.php'; ?>

<article>
    <h1>Go (Golang) <span class="color_h1">Интро</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="index.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="go_getting_started.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Что такое язык Go (Golang)?</h2>
    <ul>
        <li><strong>Go</strong> - это кроссплатформенный язык программирования с открытым исходным кодом</li>
        <li><strong>Go</strong> можно использовать для создания высокопроизводительных приложений</li>
        <li><strong>Go</strong> - это быстрый, статически типизированный, компилируемый язык, который выглядит как динамически типизированный, интерпретируемый язык</li>
        <li><strong>Go</strong> был разработан в Google Робертом Гриземером, Робом Пайком и Кеном Томпсоном в 2007 году</li>
        <li>Синтаксис языка <strong>Go</strong> похож на синтаксис языка <strong>C++</strong></li>
    </ul>
    <hr>

    <h2>Для чего используется Go (Golang)?</h2>
    <ul>
        <li>Веб-разработка (на стороне сервера)</li>
        <li>Разработка сетевых программ</li>
        <li>Разработка кроссплатформенных корпоративных приложений</li>
        <li>Облачная разработка</li>
    </ul>
    <hr>

    <h2>Зачем использовать Go (Golang)?</h2>
    <ul>
        <li>Go - просто и легко выучить</li>
        <li>У Go быстрое время выполнения и время компиляции</li>
        <li>Go поддерживает параллелизм</li>
        <li>В Go есть управление памятью</li>
        <li>Go работает на разных платформах (Windows, Mac, Linux, Raspberry Pi и т.д.)</li>
    </ul>
    <hr>
    <div id="midcontentadcontainer" style="overflow:auto;text-align:center">
      <?php include '../include/adup_content.php'; ?>
    </div>
    <hr>

    <h2>Сравнение языка Go (Golang) с языками Python и C++</h2>
    <table class="ws-table-all">
        <tr>
            <th>Go (Golang)</th>
            <th>Python</th>
            <th>C++</th>
        </tr>
        <tr>
            <td>Статически типизированный</td>
            <td>Динамически типизированный</td>
            <td>Статически типизированный</td>
        </tr>
        <tr>
            <td>Быстрое время выполнения</td>
            <td>Медленное время выполнения</td>
            <td>Быстрое время выполнения</td>
        </tr>
        <tr>
            <td>Компилированный</td>
            <td>Интерпретируемый</td>
            <td>Компилированный</td>
        </tr>
        <tr>
            <td>Быстрое время компиляции</td>
            <td>Интерпретируемый</td>
            <td>Медленное время компиляции</td>
        </tr>
        <tr>
            <td>Поддерживает параллелизм через подпрограммы go и канал</td>
            <td>Нет встроенного механизма параллелизма</td>
            <td>Поддерживает параллелизм через потоки</td>
        </tr>
        <tr>
            <td>Имеет автоматический сбор мусора</td>
            <td>Имеет автоматический сбор мусора</td>
            <td>Нет автоматической сборки мусора</td>
        </tr>
        <tr>
            <td>Не поддерживает классы и объекты</td>
            <td>Имеет классы и объекты</td>
            <td>Имеет классы и объекты</td>
        </tr>
        <tr>
            <td>Не поддерживает наследование</td>
            <td>Поддерживает наследование</td>
            <td>Поддерживает наследование</td>
        </tr>
    </table>

    <div class="w3-panel w3-note">
        <p><strong>Примечания:</strong>
        <ul>
            <li>Время компиляции означает перевод кода в исполняемую программу.</li>
            <li>Параллелизм - это выполнение нескольких задач одновременно или не по порядку, не влияя на конечный результат.</li>
            <li>Статически типизированный означает, что типы переменных известны во время компиляции.</li>
        </ul>
    </div>
    <hr>

    <h2>Начать изучение языка программирования Go (Golang)</h2>
    <p>Этот учебник научит вас основам языка программирования Go.</p>
    <p>Необязательно иметь опыт программирования. Всё, что необходимо знать для начинающих программистов на языке программирования <strong>Go (Golang)</strong>, вы сможете выучить онлайн на нашем сайте <?php include '../include/w3schools.php'; ?> абсолютно бесплатно!</p>
    <a class="ws-btn w3-blue shadow-black-1" href="go_getting_started.php">Начать изучение языка Go &raquo;</a>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="index.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="go_getting_started.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>