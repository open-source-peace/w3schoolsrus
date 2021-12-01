<?php include '../include/head.php'; ?>

<title>HTML Параграфы. <?php include '../include/title.php'; ?></title>
<meta name="description" content="Параграфы в HTML. Тег p. Разрывы строк. Конечный тег. Как сделать абзац на веб-странице? Бесплатные курсы онлайн. Справочник по HTML5. Как создать сайт на чистом HTML? <?php include '../include/description.php'; ?>">

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class="color_h1">Параграфы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_headings.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_styles.php">Next &#10095;</a>
    </div>
    <hr>

    <div class="sum">
        <h4>В этой теме:</h4>
        <ul>
            <li><a href="#c1"><em>HTML параграфы</em></a></li>
            <li><a href="#c2"><em>HTML отображение</em></a></li>
            <li><a href="#c3"><em>Не забывайте конечный тег</em></a></li>
            <li><a href="#c4"><em>Разрывы строк</em></a></li>
            <li><a href="#c5"><em>Проблема отображения поэзии</em></a></li>
            <li><a href="#c6"><em>HTML элемент <code class="w3-codespan">&lt;pre&gt;</code></em></a></li>
            <li><a href="#c7"><em>HTML упражнения</em></a></li>
            <li><a href="#c8"><em>Справочник HTML тегов</em></a></li>
        </ul>
    </div>
    <hr>

    <h2 id="c1">HTML Параграфы</h2>
    <p>HTML элемент <code class="w3-codespan">&lt;p&gt;</code> определяет <strong>параграф</strong>:</p>
    <div class="w3-panel w3-note">
        <p><b>Примечание:</b> Слово <em>paragraph</em> на русский язык обычно переводится как <em>абзац</em>. Но в среде веб-разработчиков чаще используют слово <em>параграф</em>, т.е. отступ текста с новой строки. Здесь и далее будет использоваться именно слово <em>параграф</em>.</p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p&gt;This is a paragraph.&lt;/p&gt;<br>
            &lt;p&gt;This is another paragraph.&lt;/p&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryitf9c9.html?filename=tryhtml_paragraphs1" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Браузеры автоматически добавляют отступ (margin) до и после параграфа.</p>
    </div>
    <hr>

    <h2 id="c2">HTML Отображение</h2>
    <p>Вы не можете знать наверняка, где именно будет отображаться ваша веб-страница, на каких дисплеях или устройствах. Большие или маленькие экраны и размеры окон показывают разные результаты. С помощью HTML-кода вы не можете изменить исходное отображение, добавляя дополнительные пробелы или дополнительные строки в вашем HTML-коде. Во время отображения страницы веб-браузер удаляет любые дополнительные пробелы и дополнительные строки:</p>
    <div class="w3-example">
        <h3>Примеры</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p&gt;<br>This paragraph<br>contains a lot of lines<br>in the source code,<br>but
            the browser <br>ignores it.<br>&lt;/p&gt;<br><br>&lt;p&gt;<br>This paragraph<br>contains&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            a lot of spaces<br>in the source&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            code,<br>but the&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; browser <br>ignores
            it.<br>&lt;/p&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit7f09.html?filename=tryhtml_paragraphs2" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c3">Не забывайте конечный тег</h2>
    <p>Большинство браузеров будут отображать HTML правильно, даже если вы забудете конечный тег:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p&gt;This is a paragraph.<br>
            &lt;p&gt;This is another paragraph.</div>
        <a target="_blank" href="../htmltryit/tryit3815.html?filename=tryhtml_paragraphs0" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Приведенный выше пример будет работать в большинстве браузеров, но не полагайтесь на это.</p>
    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Удаление конечного тега может привести к неожиданным результатам или ошибкам.</p>
    </div>
    <hr>

    <h2 id="c4">HTML Разрывы строк</h2>
    <p>HTML элемент <code class="w3-codespan">&lt;br&gt;</code> определяет <strong>разрыв строки</strong>.</p>
    <p>Используйте тег <code class="w3-codespan">&lt;br&gt;</code> если необходимо прервать строку (создать новую строку), не начиная новый параграф:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p&gt;This is&lt;br&gt;a paragraph&lt;br&gt;with line breaks.&lt;/p&gt;</div>
        <a target="_blank" href="../htmltryit/tryit7d53.html?filename=tryhtml_paragraphs" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Тег <code class="w3-codespan">&lt;br&gt;</code> - это пустой тег, что означает, что у него нет конечного тега.</p>
    <hr>

    <h2 id="c5">Проблема отображения поэзии</h2>
    <p>При написании поэтических произведений существует необходимость писать каждую строчку стиха с новой строки. Как же реализовать это с помощью HTML?</p>
    <p>Если писать стих в одном параграфе, то он будет отображаться в одну строку:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p&gt;<br>&nbsp; Зродились ми великої години,<br><br>&nbsp; З пожеж війни і з полум'я вогнів,<br><br>&nbsp; Плекав нас біль по втраті України,<br><br>&nbsp; Кормив нас гнів і злість на ворогів.<br>&lt;/p&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit36b9.html?filename=tryhtml_poem" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Что необходимо сделать, чтобы соблюдалась стихотворная форма?</p>
    <p>Для этого существует специальный тег.</p>
    <hr>

    <h2 id="c6">HTML элемент &lt;pre&gt;</h2>
    <p>HTML элемент <code class="w3-codespan">&lt;pre&gt;</code> определяет предварительно форматированный (от анг. preformatted) текст.</p>
    <p>Текст внутри элемента <code class="w3-codespan">&lt;pre&gt;</code> отображается шрифтом фиксированной ширины (обычно Courier), и он сохраняет пробелы и разрывы строк:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;pre&gt;<br>&nbsp; І ось ідем у бою життєвому.<br>
            <br>&nbsp; Міцні, тверді, незломні мов граніт,<br><br>&nbsp; Бо плач не дав свободи ще нікому,<br><br>&nbsp; А хто борець, той здобуває світ.<br>&lt;/pre&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitb8e5.html?filename=tryhtml_pre" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c7">HTML Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/html/exercise.asp?filename=exercise_html_paragraphs1" method="post" target="_blank">
        <h2 class="heading">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Используйте корректный HTML тег, чтобы добавить параграф с текстом "Hello World!".</p>
            <div class="exerciseprecontainer">
                &lt;html&gt;
                <br>
                &lt;body&gt;
                <br>
                <input name="ex1" maxlength="19" style="width: 195px;">
                <br>
                &lt;/body&gt;
                <br>
                &lt;/html&gt;
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>

    <h2 id="c8">HTML Справочник тегов</h2>
    <p>Справочник тегов W3Schools содержит дополнительную информацию об элементах HTML и их атрибутах.</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Тег</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../tags/tag_p.php">&lt;p&gt;</a></td>
            <td>Определяет параграф</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_br.php">&lt;br&gt;</a></td>
            <td>Вставляет один разрыв строки</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_pre.php">&lt;pre&gt;</a></td>
            <td>Определяет предварительно отформатированный текст</td>
        </tr>
    </table>
    <div class="w3-note w3-panel">
        <p>Для получения полного списка всех доступных тегов HTML, посетите наш <a href="../tags/index.php">HTML Справочник тегов</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <hr>
    <div class="quest">
        <h3>Вопросы для самоконтроля</h3>
        <ul>
            <li><em>Что такое HTML-параграфы?</em></li>
            <li><em>Зачем нужен конечный тег?</em></li>
            <li><em>Какой тег определяет разрывы строк на HTML-странице?</em></li>
            <li><em>Какая проблема отображения поэзии на веб-страницах?</em></li>
            <li><em>Какой тег используется для отображения поэзии в HTML-документе?</em></li>
        </ul>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_headings.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_styles.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
