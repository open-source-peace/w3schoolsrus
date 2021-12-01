<?php include '../include/head.php'; ?>
<title>HTML Учебник. Интро. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Что такое HTML? Введение. Примеры кода. Справочник по HTML5. Как создать сайт? Уроки по HTML для начинающих. Бесплатные курсы онлайн. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class="color_h1">Введение</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="index.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_editors.php">Next &#10095;</a>
    </div>
    <hr>

    <div class="sum">
        <h4>В этой теме: &darr;</h4>
        <ul>
            <li><a href="#c1"><em>Что такое HTML?</em></a></li>
            <li><a href="#c2"><em>HTML теги</em></a></li>
            <li><a href="#c3"><em>Веб-браузеры</em></a></li>
            <li><a href="#c4"><em>Структура html-страницы</em></a></li>
            <li><a href="#c5"><em>Объявление &lt;!DOCTYPE&gt;</em></a></li>
            <li><a href="#c6"><em>HTML Версии</em></a></li>
        </ul>
    </div>
    <hr>

    <h2 id="c1">Что такое HTML?</h2>
    <p><strong>HTML</strong> является стандартным языком разметки для создания веб-страниц.</p>
    <ul>
        <li><strong>HTML</strong> означает <em>Hyper Text Markup Language</em> (язык гипертекстовой разметки)
        <li><strong>HTML</strong> описывает структуру веб-страниц с помощью разметки
        <li><strong>HTML-елементы</strong> являются строительными блоками страниц <strong>HTML</strong>
        <li>Элементы <strong>HTML</strong> представлены <em>тегами</em>
        <li><em>Теги</em> <strong>HTML</strong> обозначают фрагменты содержания, такие как <strong>header</strong> (заголовок), <strong>paragraph</strong> (параграф), <strong>table</strong> (таблица) и др.
        <li>Браузеры не показывают <em>теги</em> <strong>HTML</strong>, но используют их для отображения содержания web-страницы
    </ul>
    <hr>

    <h2>Простой HTML документ</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!DOCTYPE html&gt;<br>
            &lt;html&gt;<br>&lt;head&gt;<br>&lt;title&gt;Название страницы&lt;/title&gt;<br>
            &lt;/head&gt;<br>
            &lt;body&gt;<br><br>&lt;h1&gt;Мой первый заголовок&lt;/h1&gt;<br>&lt;p&gt;Мой первый параграф.&lt;/p&gt;<br><br>
            &lt;/body&gt;<br>&lt;/html&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryit6a1d.html?filename=tryhtml_intro" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <h3>Объяснение примера</h3>
    <ul>
        <li>Объявление <code class="w3-codespan">&lt;!DOCTYPE html&gt;</code> указывает этот документ как <strong>HTML5</strong>
        <li>Элемент <code class="w3-codespan">&lt;html&gt;</code> является корневым элементом <strong>HTML</strong> страницы
        <li>Элемент <code class="w3-codespan">&lt;head&gt;</code> содержит мета-информацию об <strong>HTML</strong> документе
        <li>Элемент <code class="w3-codespan">&lt;title&gt;</code> указывает название <strong>HTML</strong> документа
        <li>Элемент <code class="w3-codespan">&lt;body&gt;</code> отображает видимое содержание <strong>HTML</strong> страницы
        <li>Элемент <code class="w3-codespan">&lt;h1&gt;</code> определяет большой заголовок на <strong>HTML</strong> странице
        <li>Элемент <code class="w3-codespan">&lt;p&gt;</code> определяет абзац (параграф) в <strong>HTML</strong> документе
    </ul>
    <hr>

    <h2 id="c2">HTML Теги</h2>
    <p><strong>HTML-теги</strong> - это названия элементов, окружённые угловыми скобками:</p>
    <div class="w3-panel w3-light-grey w3-border">
        <p class="w3-xlarge">&lt;название тега&gt;Здесь идёт содержание...&lt;/название тега&gt;</p>
    </div>
    <ul>
        <li>Теги <strong>HTML</strong> обычно идут <b>парами</b>, например, <code class="w3-codespan">&lt;p&gt;</code> и <code class="w3-codespan">&lt;/p&gt;</code>
        <li>Первым тегом в паре есть <b>начальный тег</b>, второй - <b>конечный тег</b>
        <li>Конечный тег записывается как начальный тег, но перед названием тега вставляется косая черта ( / слэш)
    </ul>
    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Начальный тег также называется - <strong>открывающим тегом</strong>, а конечный тег - <strong>закрывающим тегом</strong>.</p>
    </div>
    <hr>

    <h2 id="c3">Веб Браузеры</h2>
    <p>Бра́узер, или веб-обозреватель (от анг. web browser) - прикладное программное обеспечение для:</p>
    <ul>
        <li>просмотра страниц, содержания веб-документов, компьютерных файлов и их каталогов;</li>
        <li>управления веб-приложениями;</li>
        <li>а также для решения других задач.</li>
    </ul>
    <p>В глобальной сети (в Интернете) браузеры используют для запроса, обработки, манипулирования и отображения содержания веб-сайтов.</p>
    <p>Целью веб-браузера (<a href="https://www.google.com/intl/uk/chrome/" target="_blank" rel="nofollow">Chrome</a>, <a href="https://www.mozilla.org/uk/firefox/new/" target="_blank" rel="nofollow">Firefox</a>, <a href="https://www.opera.com/ru" target="_blank" rel="nofollow">Opera</a>, <a href="https://uk.wikipedia.org/wiki/Internet_Explorer" target="_blank" rel="nofollow">Internet Explorer</a>, <a href="https://uk.wikipedia.org/wiki/Safari" target="_blank" rel="nofollow">Safari</a>) является чтение документов <em>HTML</em> и их отображение. Браузер не отображает теги <em>HTML</em>, но использует их, чтобы определить, как отобразить веб-страницу:</p>
    <p><img alt="Вид в браузере" src="../images/img_chrome.png" class="w3-image"></p>
    <hr>

    <h2 id="c4">Структура HTML-страницы</h2>
    <p>Ниже приведена визуализация структуры <em>HTML-страницы</em>:</p>
    <div style="width:99%;border:1px solid grey;padding:3px;margin:0;background-color:#FFCC66">&lt;html&gt;
        <div style="width:90%;border:1px solid grey;padding:3px;margin:20px;background-color:#CCCC66">&lt;head&gt;
            <div style="width:90%;border:1px solid grey;padding:5px;margin:20px;background-color:#99FF99">&lt;title&gt;Название страницы&lt;/title&gt;
            </div>
            &lt;/head&gt;
        </div>
        <div style="width:90%;border:1px solid grey;padding:3px;margin:20px;background-color:#CCCC66">&lt;body&gt;
            <div style="width:90%;border:1px solid grey;padding:3px;margin:20px;background-color:#33CC66">
                <div style="width:90%;border:1px solid grey;padding:5px;margin:20px;background-color:#99FF99">&lt;h1&gt;Это заголовок&lt;/h1&gt;</div>
                <div style="width:90%;border:1px solid grey;padding:5px;margin:20px;background-color:#99FF99">&lt;p&gt;Это параграф.&lt;/p&gt;</div>
                <div style="width:90%;border:1px solid grey;padding:5px;margin:20px;background-color:#99FF99">&lt;p&gt;Это другой параграф.&lt;/p&gt;</div>
            </div>
            &lt;/body&gt;
        </div>
        &lt;/html&gt;
    </div>
    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> В браузере отображается только содержание раздела <code class="w3-codespan">&lt;body&gt;</code>.</p>
    </div>
    <hr>

    <h2 id="c5">Объявление &lt;!DOCTYPE&gt;</h2>
    <p>Объявление <code class="w3-codespan">&lt;!DOCTYPE&gt;</code> представляет собой определение типа документа и помогает браузерам правильно отображать веб-страницы. Оно должно появляться только один раз в верхней части страницы (перед любыми тегами <em>HTML</em>).</p>
    <p>Объявление <code class="w3-codespan">&lt;!DOCTYPE&gt;</code> не чувствительно к регистру.</p>
    <p>Объявление <code class="w3-codespan">&lt;!DOCTYPE&gt;</code> для <strong>HTML5</strong> выглядит так:</p>
    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;!DOCTYPE html&gt;</div>
    </div>
    <hr>

    <h2 id="c6">HTML Версии</h2>
    <p>С первых дней существования Интернета было много версий <em>HTML</em>:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Версия</th>
            <th>Год</th>
        </tr>
        <tr>
            <td>HTML</td>
            <td>1991</td>
        </tr>
        <tr>
            <td>HTML 2.0</td>
            <td>1995</td>
        </tr>
        <tr>
            <td>HTML 3.2</td>
            <td>1997</td>
        </tr>
        <tr>
            <td>HTML 4.01</td>
            <td>1999</td>
        </tr>
        <tr>
            <td>XHTML</td>
            <td>2000</td>
        </tr>
        <tr>
            <td>HTML5</td>
            <td>2014</td>
        </tr>
        <tr>
            <td>HTML5.1</td>
            <td>2015</td>
        </tr>
        <tr>
            <td>HTML5.2</td>
            <td>2016</td>
        </tr>
        <tr>
            <td>HTML5.3</td>
            <td>2017</td>
        </tr>
    </table>
    <hr>
    <div class="videowrap">
        <h2>HTML ВВЕДЕНИЕ. Лучший онлайн-учебник для начинающих. W3Schools на русском</h2>
        <div class="videoblock">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/6GTY2ruUtjw" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <p>Введение в HTML5. Видеоуроки сайта "W3Schools на русском"!</p>
    </div>
    <div class="quest">
        <h3>Вопросы для самоконтроля</h3>
        <ul>
            <li><em>Что такое HTML?</em></li>
            <li><em>Что такое HTML теги?</em></li>
            <li><em>Что такое веб-браузеры?</em></li>
            <li><em>Какие вы знаете веб-браузеры?</em></li>
            <li><em>Что такое структура HTML-страницы?</em></li>
            <li><em>Что такое doctype?</em></li>
            <li><em>Какой doctype в спецификации HTML5?</em></li>
            <li><em>Какая действующая версия HTML?</em></li>
        </ul>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="index.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_editors.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>