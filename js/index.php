<?php include '../include/head.php'; ?>

<title>JavaScript Учебник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Учебник. Бесплатные курсы онлайн по языку программирования JavaScript. Примеры кода. Тесты и задачи. Полный справочник JavaScript. <?php include '../include/description.php'; ?>'>
<link rel='stylesheet' href='../styles/bigbtn.css'>
<style>
    #clickgame {overflow:auto;}
    #clickgame div{color: #fff;background-color: #2196F3;line-height:120px;text-align:center;margin:5px;width:130px;float:left;cursor:pointer;}
    #clickgame .redbtn{background-color: #dc3545;}
    #clickgame .timediv{background-color:transparent;color: #000;font-size:20px;}
</style>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class='color_h1'>Учебник</span></h1>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
        <a class='w3-right w3-btn' href='js_intro.php'>Next &#10095;</a>
    </div>

    <div class='w3-panel w3-info intro'>
        <p><strong>JavaScript</strong> - это самый популярный язык программирования в мире.</p>
        <p><strong>JavaScript</strong> - это язык программирования HTML-страниц и Web.</p>
        <p><strong>JavaScript</strong> - это язык программирования, который легко выучить.</p>
        <p>Этот учебник научит вас языку программирования <strong>JavaScript</strong> от базового уровня до профессионального.</p>
        <a class='w3-btn shadow-black-1' href='js_intro.php'>Начать изучение JavaScript &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Как применяется JavaScript на веб-сайтах?</h2>
    <div class='w3-example'>
        <h3>Пример применения JavaScript</h3>
        <p><span id='exampletext'>Нажмите синюю кнопку:</span></p>
        <div class='w3-padding w3-white notranslate'>
            <div id='clickgame'>
                <div id='bluebtn'>Нажми меня</div>
            </div>
        </div>
    </div>
    <script async src='../scripts/ex_javascript_default.js'></script>

    <h2>Примеры в каждом разделе</h2>
    <p>С онлайн редактором <b>&quot;Попробуйте сами&quot;</b> на нашем сайте <?php include '../include/w3schools.php'; ?> вы можете редактировать исходящий код и просматривать результат.</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-padding w3-white notranslate'>
            <h2>Мой первый JavaScript</h2>
            <button type='button' onclick="document.getElementById('demo').innerHTML=Date()">
                Кликните меня, чтобы отобразить дату и время</button>
            <p id='demo'></p>
        </div>
        <p>
            <a target='_blank' class='w3-btn' href='../jstryit/tryjs_myfirst.html'>Попробуйте сами &raquo;</a>
        </p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Рекомендуется использовать меню уроков</h2>
    <p>Если вы новичок и только начинаете изучать язык программирования JavaScript, то рекомендуется изучать этот учебник JavaScript в последовательности тем, указанных в меню.</p>
    <p>Если у вас большой экран (например, монитор компьютера), меню всегда будет слева.</p>
    <p>Если у вас маленький экран (например, если вы пользуетесь смартфоном или планшетом), откройте меню, кликнув иконку верхнего меню <span class='w3-xlarge'>&#9776;</span>.</p>
    <hr>

    <h2>Учитесь на примерах!</h2>
    <p>Примеры - лучше 1000 слов. Примеры часто легче понять, чем текстовые пояснения.</p>
    <p>Этот учебник дополняет все объяснения поясняющими примерами <b>&quot;Попробуйте сами&quot;</b>.</p>
    <div class='w3-panel w3-note'>
        <p>Если вы испытаете, как работают все примеры, вы узнаете много нового о JavaScript за очень короткое время!</p>
        <a class='w3-btn'  href='js_examples.php' target='_blank'>JavaScript Примеры &raquo;</a>
    </div>
    <hr>

    <h2>Зачем изучать JavaScript?</h2>
    <p>JavaScript - это одна из <strong>3 технологий</strong>, которые <strong>должны</strong> выучить и знать все веб-разработчики:</p>
    <p>&nbsp;&nbsp; 1. <a href='../html/index.php' title='Уроки по HTML'><strong>HTML</strong></a> для определения содержания веб-страниц</p>
    <p>&nbsp;&nbsp; 2. <a href='../css/index.php' title='Уроки по CSS'><strong>CSS</strong></a> для создания макета веб-страниц</p>
    <p>&nbsp;&nbsp; 3. <a href='../js/js_intro.php' title='Уроки по JavaScript'><strong>JavaScript</strong></a> для программирования поведения веб-страниц</p>
    <hr>
    <p><b>Примечание.</b> Веб-страницы - это не единственное применение, где используется JavaScript. Многие настольные и серверные программы используют JavaScript. Платформа <strong>Node.js</strong> является самым известным приложением для выполнения высокопроизводительных сетевых приложений. Некоторые базы данных, такие как <strong>MongoDB</strong> и <strong>CouchDB</strong>, также используют JavaScript в качестве языка программирования.</p>
    <hr>
    <div class='w3-panel w3-note'>
        <h3>Необходимо знать, что...</h3>
        <p>JavaScript и <a href='../java/index.php'>Java</a> - это абсолютно разные языки программирования, как по концепции,
            так и по дизайну.</p>
        <p>Язык JavaScript был создан Бренданом Айхом в 1995 году, который стал стандартом ECMA в 1997 году.
            <strong>ECMA-262</strong> является официальным названием стандарта. <strong>ECMAScript</strong> - это официальное название языка.</p>
        <p>Вы можете прочитать больше о разных версиях JavaScript в разделе <a href='js_versions.php'>JS Версии</a>.</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>Скорость обучения</h2>
    <p>В этом учебнике скорость обучения полностью зависит от вас. Сколько времени вы захотите уделять учебе - столько и уделяйте.</p>
    <p>Все зависит от ваших целей, желаний и возможностей.</p>
    <p>Если вы испытываете трудности в обучении, то сделайте небольшой перерыв в учебе или перечитайте материал повторно.</p>
    <p><strong>Всегда</strong> убеждайтесь в том, что вы полностью разобрались и понимаете <strong>все</strong> примеры, приведённые в онлайн-редакторе &quot;Попробуйте сами&quot;.</p>
    <p>Единственный способ стать профессиональным программистом - это: Практика. Практика. И ещё практика. Код. Код. И ещё много кода!</p>
    <hr>

    <form autocomplete='off' spellcheck='false' id='w3-exerciseform' action='https://www.w3schools.com/js/exercise_js.asp?filename=exercise_js_variables1' method='post' target='_blank'>
        <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений</h2>
        <div class='exercisewindow'>
            <h2>Упражнение:</h2>
            <p>Создайте переменную с именем <code class='w3-codespan'>carName</code> и присвойте ей значение <code class='w3-codespan'>Volvo</code>.</p>
            <div class='exerciseprecontainer'>
<pre>
var <input name='ex1' maxlength='7' style='width: 80px;'> = "<input name='ex2' maxlength='5' style='width: 60px;'>";
</pre>
            </div>
            <br>
            <button type='submit' class='w3-btn w3-margin-bottom'>Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <h2>Распространённые вопросы</h2>
    <ul>
        <li><strong>Как получить JavaScript?</strong></li>
        <li><strong>Где я могу скачать JavaScript?</strong></li>
        <li><strong>Является ли JavaScript бесплатным?</strong></li>
    </ul>
    <div class='w3-panel w3-amber'>
    <p><b>Вам не нужно где-то искать или скачивать JavaScript.</b></p>
    <p><b>JavaScript уже запущен в вашем браузере на компьютере, планшете или смартфоне.</b></p>
    <p><b>JavaScript можно использовать бесплатно. Он доступен для всех пользователей.</b></p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <h2>JavaScript Справочники</h2>
    <p>W3Schools содержит <strong>полный справочник по JavaScript</strong>, включая все объекты HTML и браузера.</p>
    <p>Справочник содержит примеры всех свойств, методов и событий и постоянно обновляется в соответствии с последними веб-стандартов.</p>
    <a class='w3-btn shadow-black-1' href='../jsref/index.php'>Полный справочник JavaScript &raquo;</a>
    <hr>

    <h2>JavaScript Проверочная Викторина</h2>
    <p>Проверьте свои знания и навыки JavaScript на W3Schools!</p>
    <p><a href='js_quiz.php' class='w3-button w3-blue shadow-black-1'>Начать JavaScript Викторину!</a></p>
    <hr>

    <h2>Здайте JavaScript экзамен - получите свой Диплом!</h2>
    <?php include '../include/footer_cert.php'; ?>
    <hr>
    <p><b>Примечание.</b> Также на сайте доступен ещё один <a href='../jslearn/index.php' target='_blank'><strong>онлайн учебник по языку программирования JavaScript</strong></a> - перевод на русский язык учебника из сайта
        <a href='https://javascript.info/' target='_blank' rel='nofollow'>javascript.info</a>.</p>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
        <a class='w3-right w3-btn' href='js_intro.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>