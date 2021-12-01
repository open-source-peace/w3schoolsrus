<?php include '../include/head.php'; ?>

<title>HTML Заголовки. <?php include '../include/title.php'; ?></title>
<meta name="description" content="Заголовки на веб-страницах. Теги H1-H6. Горизонтальный разделитель. Как посмотреть исходный код страницы? Бесплатные курсы онлайн. Справочник HTML5. <?php include '../include/description.php'; ?>">

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class="color_h1">Заголовки</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_attributes.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_paragraphs.php">Next &#10095;</a>
    </div>
    <hr>

    <div class="sum">
        <h4>В этой теме:</h4>
        <ul>
            <li><a href="#c1"><em>HTML заголовки</em></a></li>
            <li><a href="#c2"><em>Заголовки важны</em></a></li>
            <li><a href="#c3"><em>Большие заголовки</em></a></li>
            <li><a href="#c4"><em>Горизонтальный разделитель</em></a></li>
            <li><a href="#c5"><em>HTML элемент <code class="w3-codespan">&lt;head&gt;</code></em></a></li>
            <li><a href="#c6"><em>Как просмотреть исходный код HTML?</em></a></li>
            <li><a href="#c7"><em>HTML упражнения</em></a></li>
            <li><a href="#c8"><em>Справочник HTML тегов</em></a></li>
        </ul>
    </div>
    <hr>

    <div class="w3-example">
        <h3>Заголовки</h3>
        <div class="w3-white w3-padding notranslate">
            <h1>Заголовок 1</h1>
            <h2>Заголовок 2</h2>
            <h3>Заголовок 3</h3>
            <h4>Заголовок 4</h4>
            <h5>Заголовок 5</h5>
            <h6>Заголовок 6</h6>
        </div>
        <a class="w3-btn w3-margin-top w3-margin-bottom" href="../htmltryit/tryitbe80.html?filename=tryhtml_headings" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <h2 id="c1">HTML Заголовки</h2>
    <p>Заголовки определяются с помощью тегов от <code class="w3-codespan">&lt;h1&gt;</code> до <code class="w3-codespan">&lt;h6&gt;</code>.</p>
    <p>Тег <code class="w3-codespan">&lt;h1&gt;</code> определяет наиболее важный заголовок. Тег <code class="w3-codespan">&lt;h6&gt;</code> определяет наименее важный заголовок.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;h1&gt;Заголовок 1&lt;/h1&gt;<br>
            &lt;h2&gt;Заголовок 2&lt;/h2&gt;<br>
            &lt;h3&gt;Заголовок 3&lt;/h3&gt;<br>
            &lt;h4&gt;Заголовок 4&lt;/h4&gt;<br>
            &lt;h5&gt;Заголовок 5&lt;/h5&gt;<br>
            &lt;h6&gt;Заголовок 6&lt;/h6&gt;</div>
        <a target="_blank" href="../htmltryit/tryitbe80.html?filename=tryhtml_headings" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Браузеры автоматически добавляют отступ (margin) до и после заголовка.</p>
    </div>
    <hr>

    <h2 id="c2">Заголовки важны</h2>
    <p>Поисковые системы используют заголовки для индексации структуры и содержания ваших веб-страниц.</p>
    <p>Пользователи часто просматривают страницу по её заголовкам. Важно использовать заголовки, чтобы показать структуру документа.</p>
    <p><code class="w3-codespan">&lt;h1&gt;</code> заголовки следует использовать для основных заголовков, а затем <code class="w3-codespan">&lt;h2&gt;</code> заголовок, менее важный <code class="w3-codespan">&lt;h3&gt;</code> и т.д.</p>
    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Используйте HTML-заголовки только для заголовков. Не используйте заголовки, чтобы сделать текст
            <strong>БОЛЬШИМ</strong> или <strong>жирным</strong>.</p>
    </div>
    <hr>

    <h2 id="c3">Большие заголовки</h2>
    <p>Каждый HTML заголовок имеет размер по умолчанию. Однако, вы можете указать размер для любого заголовка с атрибутом <code class="w3-codespan">style</code>, используя свойство CSS <code class="w3-codespan">font-size</code>:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;h1
            style=&quot;font-size:60px;&quot;&gt;Заголовок 1&lt;/h1&gt;<br>
        </div>
        <a target="_blank" href="../htmltryit/tryit83bb.html?filename=tryhtml_headings_size" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c4">HTML Горизонтальный разделитель</h2>
    <p>Тег <code class="w3-codespan">&lt;hr&gt;</code> определяет тематический разрыв на HTML странице и чаще всего отображается как горизонтальный разделитель (горизонтальная линия).</p>
    <p>Элемент <code class="w3-codespan">&lt;hr&gt;</code> используется для разделения содержимого (или определения изменения) на HTML странице.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;h1&gt;Это заголовок 1&lt;/h1&gt;<br>&lt;p&gt;Это какой-то текст.&lt;/p&gt;<br>&lt;hr&gt;<br>&lt;h2&gt;Это заголовок 2&lt;/h2&gt;<br>&lt;p&gt;Это какой-то другой текст.&lt;/p&gt;<br>&lt;hr&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryit47e8.html?filename=tryhtml_headings_hr" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c5">HTML элемент &lt;head&gt;</h2>
    <p>HTML элемент <code class="w3-codespan">&lt;head&gt;</code> (голова) - это контейнер для метаданных. Метаданные HTML - это данные о документе HTML. Метаданные не отображаются на странице, они нужны для служебных целей (поисковых роботов и веб-приложений).</p>
    <p>Элемент <code class="w3-codespan">&lt;head&gt;</code> находится между тегом <code class="w3-codespan">&lt;html&gt;</code> и тегом <code class="w3-codespan">&lt;body&gt;</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br><br>&lt;head&gt;<br>&nbsp; &lt;title&gt;Мой первый HTML&lt;/title&gt;<br>&nbsp; &lt;meta charset=&quot;UTF-8&quot;&gt;<br>&lt;/head&gt;<br><br>&lt;body&gt;<br>.<br>
            .<br>.</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit34a5.html?filename=tryhtml_headings_head" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Метаданные обычно определяют заголовок документа, набор символов, стили, скрипты и другую метаинформацию.</p>
    </div>
    <hr>

    <h2 id="c6">Как просмотреть исходный код HTML?</h2>
    <p>Вы когда-нибудь видели веб-страницу и задавались вопросом &quot;Эй! Как они это сделали?!&quot;</p>
    <h3>Просмотр исходного кода HTML:</h3>
    <p>Кликните правой кнопкой мыши страницу HTML и выберите &quot;Просмотреть источник страницы&quot; (в Chrome) или &quot;Просмотреть источник&quot; (в Edge), или &quot;Исходный код страницы&quot; (в Firefox), или &quot;Источник страницы&quot; (в Opera) или похожее в других браузерах. Откроется окно, содержащее исходный код HTML страницы.</p>
    <h3>Исследовать HTML элемент:</h3>
    <p>Кликните правой кнопкой мыши элемент (или пустую область на странице) и выберите &quot;Просмотреть код&quot; или &quot;Исследовать элемент&quot; чтобы увидеть, из каких элементов состоит страница (вы увидите и HTML, и CSS). Вы также можете редактировать HTML или CSS код на лету в открывшейся панели &quot;Элементы или стили&quot;.</p>
    <hr>
    <h2 id="c7">HTML Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/html/exercise.asp?filename=exercise_html_headings1" method="post" target="_blank">
        <h2 class="heading">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Используйте корректный HTML тег, чтобы добавить заголовок с текстом "London".</p>
            <div class="exerciseprecontainer">
                <input name="ex1" maxlength="15" style="width: 155px;">
                <br>
                <br>
                &lt;p&gt;London is the capital city of England.
                It is the most populous city in the United Kingdom,
                with a metropolitan area of over 13 million inhabitants.&lt;/p&gt;
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>

    <h2 id="c8">HTML Справочник тегов</h2>
    <p>Справочник тегов W3Schools содержит дополнительную информацию об этих тегах и их атрибутах.</p>
    <p>Подробнее о тегах и атрибутах HTML вы узнаете в следующих главах этого учебника.</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Тег</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../tags/tag_html.php">&lt;html&gt;</a></td>
            <td>Определяет начало загрузки HTML документа</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_body.php">&lt;body&gt;</a></td>
            <td>Определяет тело документа</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_head.php">&lt;head&gt;</a></td>
            <td>Контейнер для всех элементов головы страницы (название, скрипты, стили, метаинформация и др.)</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_hn.php">&lt;h1&gt; до &lt;h6&gt;</a></td>
            <td>Определяет HTML заголовки</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_hr.php">&lt;hr&gt;</a></td>
            <td>Определяет тематическое изменение в содержании</td>
        </tr>
    </table>

    <div class="w3-note w3-panel">
        <p>Для получения полного списка всех доступных тегов HTML, посетите <a href="../tags/index.php">HTML Справочник тегов</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <hr>
    <div class="quest">
        <h3>Вопросы для самоконтроля</h3>
        <ul>
            <li><em>Что такое HTML-заголовки?</em></li>
            <li><em>Зачем нужны HTML-заголовки?</em></li>
            <li><em>Какие бывают заголовки на HTML-страницах?</em></li>
            <li><em>Какой тег определяет самый большой и самый маленький заголовок?</em></li>
            <li><em>Что такое горизонтальный разделитель на HTML-странице?</em></li>
            <li><em>Какой тег определяет горизонтальный разделитель на HTML-странице?</em></li>
            <li><em>Для чего необходим HTML-элемент head?</em></li>
            <li><em>Где на веб-странице находится элемент head?</em></li>
            <li><em>Как посмотреть исходный HTML-код в браузере?</em></li>
            <li><em>Как исследовать HTML-элемент с помощью браузера?</em></li>
        </ul>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_attributes.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_paragraphs.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>