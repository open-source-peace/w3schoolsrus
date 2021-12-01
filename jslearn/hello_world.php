<?php include '../include/head.php'; ?>

<title>Привет, мир! на JavaScript. <?php include '../include/title_jslearn.php'; ?></title>
<meta name='description' content='Hello World! на JavaScript. Как создать свою первую программу на JavaScript? <?php include '../include/description_jslearn.php'; ?>'>
<link rel='stylesheet' href='../styles/accordion.css'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_jslearn.php'; ?>
<?php include '../include/before_content_jslearn.php'; ?>

<article>
  <h1>JavaScript Привет, мир!</h1>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='devtools.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='structure.php'>Next &#10095;</a>
    </div>
    <hr>
  <p>В этой части учебника мы изучаем сам <strong>язык программирования JavaScript</strong>.</p>
  <p>Но нам нужна рабочая среда для запуска наших скриптов, и, поскольку это онлайн-книга, то браузер будет хорошим выбором. В этой главе мы сократим количество специфичных для браузера команд (например, <code>alert</code>) до минимума, чтобы вы не тратили на них время, если планируете сосредоточиться на другой среде (например, Node.js). А на использовании JavaScript в браузере мы сосредоточимся в следующей части учебника.</p>
    <p>Итак, сначала давайте посмотрим, как выполнить скрипт на странице. Для серверных сред (например, Node.js), вы можете выполнить скрипт с помощью команды типа <code>node my.js</code>. Для браузера всё немного иначе.</p>
    <hr>
    <h2>Тег &lt;script&gt;</h2>
    <p>Программы на JavaScript могут быть вставлены в любое место HTML-документа с помощью тега <code>&lt;script&gt;</code>.</p>
    <p>Для примера:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate htmlHigh'>
            &lt;!DOCTYPE html&gt;<br>
            &lt;html&gt;<br>
            &lt;body&gt;<br>
            <br>
            &lt;p&gt;Перед скриптом...&lt;/p&gt;<br>
            <br>
            &lt;script&gt;<br>
            &nbsp;&nbsp;&nbsp;alert( 'Привет, мир!' );<br>
            &lt;/script&gt;<br>
            <br>
            &lt;p>...После скрипта.&lt;/p&gt;<br>
            <br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div>
        <a class='w3-btn w3-margin-bottom' href='../jslearntryit/hello_world1.html' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>Вы можете запустить пример, нажав на кнопку <strong>Попробуйте сами</strong> внизу блока с кодом.</p>
    <p>Тег <code>&lt;script&gt;</code> содержит JavaScript-код, который автоматически выполнится, когда браузер его обработает.</p>
    <hr>
    <h2>Современная разметка</h2>
    <p>Тег <code>&lt;script&gt;</code> имеет несколько атрибутов, которые редко используются, но всё ещё могут встретиться в старом коде:</p>
    <p><b>Атрибут type: &lt;script type=…&gt;</b></p>
    <p>Старый HTML стандарт - HTML4, требовал наличия этого атрибута в теге <code>&lt;script&gt;</code>. Обычно он имел значение <code>type='text/javascript'</code>. На текущий момент этого больше не требуется. Более того, в современном стандарте HTML смысл этого атрибута полностью изменился. Теперь он может использоваться для JavaScript-модулей. Но это тема не для начального уровня, и о ней мы поговорим в другой части учебника.</p>
    <p><b>Атрибут language: &lt;script language=…&gt;</b></p>
    <p>Этот атрибут должен был задавать язык, на котором написан скрипт. Но так как JavaScript является языком по умолчанию, в этом атрибуте уже нет необходимости.</p>
    <p><b>Обёртывание скрипта в HTML-комментарии.</b></p>
    <p>В очень древних книгах и руководствах вы сможете найти комментарии внутри тега <code>&lt;script&gt;</code>, например, такие:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate htmlHigh'>
    &lt;script type='text/javascript'&gt;&lt;!--<br>
    &nbsp;&nbsp;&nbsp;...<br>
    //--&gt;&lt;/script&gt;
        </div></div>
    <p>Этот комментарий скрывал код JavaScript в старых браузерах, которые не знали, как обрабатывать тег <code>&lt;script&gt;</code>. Поскольку все браузеры, выпущенные за последние 15 лет, не содержат данной проблемы, такие комментарии уже не нужны. Если они есть, то это признак, что перед нами очень древний код (очень старый сайт).</p>
    <hr>
    <h2>Внешние скрипты</h2>
    <p>Если у вас много JavaScript-кода, вы можете поместить его в отдельный файл.</p>
    <p>Файл скрипта можно подключить к HTML с помощью атрибута src:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate htmlHigh'>
            &lt;script src='/path/to/script.js'&gt;&lt;/script&gt;
        </div>
    </div>
    <p>Здесь <code>/path/to/script.js</code> – это абсолютный путь до скрипта от корня сайта. Также можно указать относительный путь от текущей страницы. Например, <code>src='script.js'</code> будет означать, что файл <code>'script.js'</code> находится в текущей папке.</p>
    <p>Можно указать и полный URL-адрес. Например:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate htmlHigh'>
  &lt;script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.2.0/lodash.js'&gt;&lt;/script&gt;
        </div>
    </div>
    <p>Для подключения нескольких скриптов используйте несколько тегов:</p>
    <div class='w3-example'>
        <div class='w3-code notranslate htmlHigh'>
  &lt;script src='/js/script1.js'>&lt;/script&gt;<br>
  &lt;script src='/js/script2.js'>&lt;/script&gt;<br>
  ...
        </div>
    </div>
    <hr>
    <div class='important'>
        <p><span class='info_sign'>&#x2139;</span><b>На заметку:</b></p>
        <p>Как правило, только простейшие скрипты помещаются в HTML. Более сложные выделяются в отдельные файлы.</p>
        <p>Польза от отдельных файлов в том, что браузер загрузит скрипт отдельно и сможет хранить его в кеше.</p>
        <p>Другие страницы, которые подключают тот же скрипт, смогут брать его из кеша вместо повторной загрузки из сети. И таким образом файл будет загружаться с сервера только один раз.</p>
        <p>Это сокращает расход трафика и ускоряет загрузку страниц.</p>
    </div>
    <br>
    <div class='important'>
        <p><span class='warning_sign'>&#x26a0;</span><b>Если атрибут <code>src</code> установлен, содержимое тега <code>&lt;script&gt;</code> будет игнорироваться.</b></p>
        <p>В одном теге <code>&lt;script&gt;</code> нельзя использовать одновременно атрибут <code>src</code> и код внутри.</p>
        <p>Нижеприведённый пример не работает:</p>
            <div class='w3-code notranslate htmlHigh'>
                &lt;script src='file.js'&gt;
                &nbsp;&nbsp;&nbsp;alert(1); // содержимое игнорируется, так как есть атрибут src
                &lt;/script&gt;
            </div>
        <p>Нужно выбрать: либо внешний скрипт <code>&lt;script src='…'&gt;</code>, либо обычный код внутри тега <code>&lt;script&gt;</code>.</p>
        <p>Вышеприведённый пример можно разделить на два скрипта:</p>
            <div class='w3-code notranslate htmlHigh'>
                &lt;script src='file.js'&gt;&lt;/script&gt;
                &lt;script&gt;
                &nbsp;&nbsp;&nbsp;alert(1);
                &lt;/script&gt;
            </div>
    </div>
    <hr>
    <h2>Резюме</h2>
    <ul>
        <li>Для добавления кода JavaScript на страницу используется тег <code>&lt;script&gt;</code></li>
        <li>Атрибуты <code>type</code> и <code>language</code> необязательны.</li>
        <li>Скрипт во внешнем файле можно вставить с помощью <code>&lt;script src='path/to/script.js'&gt;&lt;/script&gt;</code>.</li>
    </ul>
    <p>Вам ещё многое предстоит изучить про браузерные скрипты и их взаимодействие со страницей. Но, как уже было сказано, эта часть учебника посвящена именно языку JavaScript, поэтому здесь мы постараемся не отвлекаться на детали реализации в браузере. Мы воспользуемся браузером для запуска JavaScript, это удобно для онлайн-демонстраций, но это только одна из платформ, на которых работает этот язык.</p>
    <hr>
    <h2>&#9989; Задачи</h2>
    <h3>1. Вызвать <b>alert</b></h3>
    <p>Создайте страницу, которая отобразит сообщение «Я JavaScript!».</p>
    <p>Выполните это задание в песочнице, либо у себя на компьютере, где – неважно, главное – проверьте, что она работает.</p>
    <p><a href="../jslearntryit/i_js.html" target="_blank">Открыть Демо в новом окне</a></p>
    <button class="accordion">Решение <i class='fa fa-caret-down'></i></button>
    <div class="panel">
        <div class='important'>
            <div class='w3-code notranslate jsHigh'>
                &lt;!DOCTYPE html&gt;<br>
                &lt;html&gt;<br>
                &lt;body&gt;<br>
                <br>
                &lt;script&gt;<br>
                &nbsp;&nbsp;&nbsp;alert( "Я JavaScript!" );<br>
                &lt;/script&gt;<br>
                <br>
                &lt;/body&gt;<br>
                &lt;/html&gt;
            </div>
        </div>
    </div>
    <hr>
    <h3>2. Покажите сообщение с помощью внешнего скрипта</h3>
    <p>Возьмите решение предыдущей задачи <b>Вызвать alert</b>, и измените его. Извлеките содержимое скрипта во внешний файл <code>alert.js</code>, лежащий в той же папке.</p>
    <p>Откройте страницу, убедитесь, что оповещение работает.</p>
    <button class="accordion">Решение <i class='fa fa-caret-down'></i></button>
    <div class="panel">
        <div class='important'>
            <p>HTML код:</p>
            <div class='w3-code notranslate htmlHigh'>
                &lt;!DOCTYPE html&gt;<br>
                &lt;html&gt;<br>
                &lt;body&gt;<br>
                <br>
                &lt;script src="alert.js"&gt;&lt;/script&gt;<br>
                <br>
                &lt;/body&gt;<br>
                &lt;/html&gt;
            </div>
            <p>Для файла <code>alert.js</code> в той же папке:</p>
            <div class='w3-code notranslate jsHigh'>
                alert("Я JavaScript!");
            </div>
        </div>
    </div>
    <script src="../scripts/accordion.js"></script>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='devtools.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='structure.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>