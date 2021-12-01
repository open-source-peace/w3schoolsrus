<?php include '../include/head.php'; ?>

<title>AppML Учебник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='AppML Учебник. Применение языка JavaScript. <?php include '../include/description.php'; ?>'>
<link rel="canonical" href="https://w3schoolsrus.github.io/appml/index.html" />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

<article>
    <h1><span class='color_h1'>AppML</span> Учебник</h1>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-button w3-green' href='../index.php'>&#10094; Home</a>
        <a class='w3-right w3-button w3-green' href='appml_howto.php'>Next &#10095;</a>
    </div>

    <div class='w3-panel w3-info w3-center'>
        <p style='font-size:35px'>AppML переносит данные в HTML</p>
        <p style='font-size:25px'>"Нет глупых веб-приложений"</p>
    </div>
    <hr>

    <h2>Введение в AppML</h2>
    <p>Интернет быстро растет, а объём данных в киберпространстве растёт ещё быстрее.</p>
    <p>Каждый день разрабатываются новые информационные системы, каждый день подключаются новые пользователи, а доступ к данным возможен 24/7 из любой точки мира.</p>

    <p class='w3-large'><i>Крайне необходимы более быстрые и лучшие методы разработки программного обеспечения</i>.</p>

    <p>В соответствии с этим W3Schools разработала очень гибкую технику для извлечения, отображения и обработки данных без необходимости традиционного программирования.</p>

    <p>Сотрудничая с Яном Эгилем Рефснесом, W3schools разработала словарь для определения веб-приложений.
        Словарь называется <strong>AppML (Application Modeling Language - Язык моделирования приложений)</strong>.</p>

    <p>AppML использует самые современные методы и идеи современной веб-разработки с упором на:</p>
    <ul style='list-style-type:square;'>
        <li>Малобюджетность</li>
        <li>Быстрая и гибкая веб-разработка</li>
        <li>Оптимизация для облачных вычислений</li>
        <li>Высокая скорость и низкое потребление полосы пропускания</li>
        <li>Архитектура MVC (Model View Controller - Контроллер представления модели)</li>
        <li>Полное отделение содержания от презентации</li>
        <li>Высокая масштабируемость и тестируемость</li>
        <li>Простая настройка и реконфигурация (перенастройка)</li>
    </ul>

    <p>AppML поддерживает функции, которые вы найдёте в других фреймворках, таких как React, Angular и Vue, но AppML намного проще в использовании и намного проще для понимания.</p>
    <hr>

    <h2>Что такое AppML?</h2>
    <p>AppML означает <strong>App</strong>lication <strong>M</strong>odeling <strong>L</strong>anguage - Язык Моделирования Приложений.</p>
    <p>AppML не является языком программирования. Это описательный язык (язык описания приложений).</p>
    <p>Он основан на знакомых концепциях веб-приложений, таких как:</p>
    <ul>
        <li>Формы</li>
        <li>Списки</li>
        <li>Отчёты</li>
        <li>Фильтры</li>
        <li>Функции</li>
        <li>Базы данных</li>
    </ul>

    <p>AppML работает на любой HTML-странице. Специальная установка не требуется.</p>
    <p>AppML - это инструмент для передачи данных в HTML-приложения:</p>
    <ul>
        <li>Из объектов</li>
        <li>Из JSON файлов</li>
        <li>Из текстовых файлов</li>
        <li>из XML файлов</li>
        <li>Из базы данных</li>
    </ul>

    <p>
        <a class='w3-btn' href='tryappml_from_object.html' target='_blank'>Объекты</a>
        <a class='w3-btn' href='tryappml_from_json.html' target='_blank'>JSON файлы</a><br><br>
        <a class='w3-btn' href='tryappml_from_txt.html' target='_blank'>Текстовые файлы</a>
        <a class='w3-btn' href='tryappml_from_xml.html' target='_blank'>XML файлы</a><br><br>
        <a class='w3-btn' href='tryappml_customerslist_php.html' target='_blank'>PHP/MySQL</a>
        <a class='w3-btn' href='tryappml_customerslist_aspx.html' target='_blank'>ASP.NET/SQL</a>
    </p>
    <hr>

    <h2>Почему AppML?</h2>

    <p>HTML не очень подходит для описания веб-приложений.</p>
    <p>AppML создан для веб-приложений:</p>
    <ul>
        <li>AppML расширяет HTML с помощью <strong>атрибутов</strong> данных</li>
        <li>AppML добавляет в HTML <strong>контроллеры</strong>, для управления поведением HTML данных.</li>
    </ul>
    <p>AppML очень прост для понимания и необычайно быстр в разработке.</p>
    <hr>

    <h2>AppML Пример</h2>
    <p>Этот пример показывает, как легко AppML может переносить данные в HTML:</p>

    <div class='w3-example'>
        <h3>AppML Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;!DOCTYPE html&gt;<br>
            &lt;html lang="ru"&gt;<br><br>
            &lt;title&gt;Клиенты&lt;/title&gt;<br>
            &lt;link rel="stylesheet" href="style.css"&gt;<br>
            &lt;script src="https://w3schoolsrus.github.io/appml/2.0.3/appml.js"&gt;&lt;/script&gt;<br><br>
            &lt;body&gt;<br>
            &lt;h1&gt;Клиенты&lt;/h1&gt;<br><br>
            &lt;table appml-data="https://w3schoolsrus.github.io/appml/customers.js"&gt;<br>
            &lt;tr&gt;<br>&nbsp; &lt;th&gt;Клиент&lt;/th&gt;<br>
            &nbsp; &lt;th&gt;Город&lt;/th&gt;<br>
            &nbsp; &lt;th&gt;Страна&lt;/th&gt;<br>
            &lt;/tr&gt;<br>
            &lt;tr appml-repeat="records"&gt;<br>
            &nbsp; &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>
            &nbsp; &lt;td&gt;{{City}}&lt;/td&gt;<br>
            &nbsp; &lt;td&gt;{{Country}}&lt;/td&gt;<br>
            &lt;/tr&gt;<br>
            &lt;/table&gt;<br>
            <br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div>
        <a class='w3-btn w3-margin-bottom' href='tryappml_intro.html' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-panel w3-note'>
        <p><strong>AppML</strong> - это инструмент для простой, быстрой и гибкой разработки веб-приложений.</p>
    </div>
    <hr>

    <h2>Легко и гибко</h2>
    <p>На сегодняшнем рынке веб-разработок существует множество фреймворков (инструментов или библиотек), предназначенных для расширения HTML.</p>
    <p>Большинство этих фреймворков манипулируют HTML, CSS или JavaScript таким образом, что их трудно использовать (особенно при использовании в сочетании).</p>
    <p>AppML - другое дело. У вас есть полная свобода в применении HTML, CSS и JavaScript.</p>
    <p>AppML упрощает создание одностраничных приложений (SPA - Single Page Applications) очень простым и эффективным способом.</p>
    <p>Даже если вы никогда раньше не занимались веб-разработкой, вы обнаружите AppML очень простым в использовании.</p>
    <p>Если вы опытный веб-разработчик, вы скоро откроете для себя всю мощь AppML.</p>

    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-button w3-green' href='../index.php'>&#10094; Home</a>
        <a class='w3-right w3-button w3-green' href='appml_howto.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>