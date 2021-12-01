<?php include '../include/head.php'; ?>
<title>HTML Элементы. <?php include '../include/title.php'; ?></title>
<meta name='description'
      content='HTML элементи веб-страницы. Вложенные html элементы. Зачем нужен конечный тег? Пустые html элементы. Уроки по HTML для начинающих. Бесплатные курсы онлайн. Примеры кода. Справочник по HTML5. Как создать сайт на чистом HTML и CSS? <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class='color_h1'>Элементы</span></h1>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='html_basic.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='html_attributes.php'>Next &#10095;</a>
    </div>
    <hr>

    <div class='sum'>
        <h4>В этой теме:</h4>
        <ul>
            <li><a href='#c1'><em>HTML элементы веб-страницы</em></a></li>
            <li><a href='#c2'><em>Вложенные HTML элементы</em></a></li>
            <li><a href='#c3'><em>Нужен ли конечный тег?</em></a></li>
            <li><a href='#c4'><em>Пустые HTML элементы</em></a></li>
            <li><a href='#c5'><em>HTML теги не чувствительны к регистру</em></a></li>
        </ul>
    </div>
    <hr>

    <h2 id='c1'>HTML Элементы веб-страницы</h2>
    <p><strong>HTML элемент</strong> обычно состоит из тега <strong>начального</strong> и тега <strong>конечного</strong>, а содержимое вставляется между:</p>
    <div class='htmlHigh' style='font-size:20px;padding:10px;margin-bottom:10px;'>
        &lt;tagname&gt;Содержание размещается здесь...&lt;/tagname&gt;
    </div>

    <p><strong>HTML элемент</strong> - это все от начального тега до конечного тега:</p>
    <div class='htmlHigh' style='font-size:20px;padding:10px;margin-bottom:10px;'>
        &lt;p&gt;Мой первый параграф.&lt;/p&gt;
    </div>

    <table class='w3-table-all notranslate'>
        <tr>
            <th>Начальный тег</th>
            <th>Содержание элемента</th>
            <th>Конечный тег</th>
        </tr>
        <tr>
            <td>&lt;h1&gt;</td>
            <td>Мой первый заголовок</td>
            <td>&lt;/h1&gt;</td>
        </tr>
        <tr>
            <td>&lt;p&gt;</td>
            <td>Мой первый параграф.</td>
            <td>&lt;/p&gt;</td>
        </tr>
        <tr>
            <td>&lt;br&gt;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>

    <div class='w3-panel w3-note'>
        <p>HTML элементы без содержимого называются <strong>пустыми элементами</strong>. Пустые элементы не имеют конечного тега, например, как элемент <code class='w3-codespan'>&lt;br&gt;</code> (который указывает на разрыв строки).</p>
    </div>
    <hr>

    <h2 id='c2'>Вложенные HTML элементы</h2>
    <p>HTML элементы могут быть вложенными (элементы могут содержать элементы).</p>
    <p>Все документы HTML состоят из вложенных элементов HTML.</p>
    <p>Этот пример содержит четыре элемента HTML:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;!DOCTYPE html&gt;<br>
            &lt;html&gt;<br>&lt;body&gt;<br><br>
            &lt;h1&gt;Мой первый заголовок&lt;/h1&gt;<br>&lt;p&gt;Мой первый параграф.&lt;/p&gt;<br><br>
            &lt;/body&gt;<br>&lt;/html&gt;
        </div>
        <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit3b68.html?filename=tryhtml_elements' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <h3>Объяснение примера</h3>
    <p>Элемент <code class='w3-codespan'>&lt;html&gt;</code> определяет <strong>весь документ</strong>.</p>
    <p>У него есть <strong>начальный</strong> тег &lt;html&gt; и <strong>конечный</strong> тег &lt;/html&gt;.</p>
    <p>Внутри &lt;html&gt; элемента находится элемент <code class='w3-codespan'>&lt;body&gt;</code>.</p>
    <div class='w3-example'>
        <div class='w3-code notranslate htmlHigh'>
            &lt;html&gt;<br>
            &lt;body&gt;<br><br>
            &lt;h1&gt;Мой первый заголовок&lt;/h1&gt;<br>&lt;p&gt;Мой первый параграф.&lt;/p&gt;<br><br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div></div>

    <p>Элемент <code class='w3-codespan'>&lt;body&gt;</code> определяет <strong>тело документа</strong>.</p>
    <p>У него есть <strong>начальный</strong> тег &lt;body&gt; и <strong>конечный</strong> тег &lt;/body&gt;.</p>
    <p>Внутри элемента &lt;body&gt; есть два других HTML элемента:
        <code class='w3-codespan'>&lt;h1&gt;</code> и <code class='w3-codespan'>
            &lt;p&gt;</code>.</p>
    <div class='w3-example'>
        <div class='w3-code notranslate htmlHigh'>
            &lt;body&gt;<br><br>
            &lt;h1&gt;Мой первый заголовок&lt;/h1&gt;<br>&lt;p&gt;Мой первый параграф.&lt;/p&gt;<br><br>
            &lt;/body&gt;
        </div></div>

    <p>Элемент <code class='w3-codespan'>&lt;h1&gt;</code> определяет <strong>заголовок</strong>.</p>
    <p>У него есть <strong>начальный</strong> тег &lt;h1&gt; и <strong>конечный</strong> тег &lt;/h1&gt;.</p>
    <p>Элемент <strong>содержание</strong> это: Мой первый заголовок.</p>

    <div class='w3-example'>
        <div class='w3-code notranslate htmlHigh'>
            &lt;h1&gt;Мой первый заголовок&lt;/h1&gt;
        </div>
    </div>

    <p>Элемент <code class='w3-codespan'>&lt;p&gt;</code> определяет <strong>параграф</strong>.</p>
    <p>У него есть <strong>начальный</strong> тег &lt;p&gt; и <strong>конечный</strong> тег &lt;/p&gt;.</p>
    <p>Элемент <strong>содержание</strong> это: Мой первый параграф.</p>

    <div class='w3-example'>
        <div class='w3-code notranslate htmlHigh'>
            &lt;p&gt;Мой первый параграф.&lt;/p&gt;
        </div>
    </div>
    <hr>

    <h2 id='c3'>Не забывайте про конечный тег</h2>
    <p>Некоторые элементы HTML будут отображаться правильно, даже если вы забудете конечный тег:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;html&gt;<br>&lt;body&gt;<br><br>
            &lt;p&gt;Это параграф<br>
            &lt;p&gt;Это параграф<br>
            <br>&lt;/body&gt;<br>&lt;/html&gt;</div>
        <a target='_blank' href='../htmltryit/tryit0fab.html?filename=tryhtml_no_endtag' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <p>Приведенный выше пример работает во всех браузерах, поскольку закрывающий тег считается необязательным.</p>
    <p><strong>Никогда не полагайтесь на это. Это может привести к неожиданным результатам и/или ошибкам, если вы забудете конечный тег.</strong></p>
    <hr>

    <h2 id='c4'>Пустые HTML элементы</h2>
    <p>HTML элементы без содержимого называются пустыми элементами.</p>
    <p>Элемент <code class='w3-codespan'>&lt;br&gt;</code> - это пустой элемент без закрывающего тега (тег <code class='w3-codespan'>&lt;br&gt;</code>
        определяет обрыв строки):</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;p&gt;Это параграф&lt;br&gt; с обрывом строки.&lt;/p&gt;</div>
        <a target='_blank' href='../htmltryit/tryit070a.html?filename=tryhtml_elements_br' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <p>HTML5 не требует закрытия пустых элементов. Но если вам нужна более строгая проверка или если вы хотите, чтобы ваш документ читался XML-анализаторами, вы должны правильно закрыть все элементы HTML.</p>
    <hr>

    <h2 id='c5'>HTML не чувствителен к регистру</h2>
    <p>HTML-теги не чувствительны к регистру: &lt;P&gt; означает то же, что и &lt;p&gt;.</p>
    <p><strong>Стандарт HTML5</strong> не требует строчных тегов, но W3C <b>рекомендует использовать</b> строчные буквы в HTML, и <b>требует</b> строчные буквы для более строгих типов документов, таких как XHTML.</p>

    <div class='w3-panel w3-note'>
        <p>В W3Schools всегда используют строчные теги.</p>
    </div>
    <hr>
    <div class='videowrap'>
        <h2>HTML ЭЛЕМЕНТЫ. Основы веб-разработки. W3Schools на русском</h2>
        <div class='videoblock'>
            <iframe src='https://www.youtube.com/embed/d324vypzvAI' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
        </div>
        <p>HTML Элементы. Видеоуроки сайта <strong>W3Schools на русском</strong>!</p>
    </div>
    <hr>
    <div class='quest'>
        <h3>Вопросы для самоконтроля</h3>
        <ul>
            <li><em>Что такое элементы веб-страницы?</em></li>
            <li><em>Что такое вложенные HTML-элементы?</em></li>
            <li><em>Что такое начальный и конечный тег?</em></li>
            <li><em>Зачем нужен конечный тег?</em></li>
            <li><em>Что такое пустые HTML-элементы?</em></li>
            <li><em>Что такое верхний и нижний регистр?</em></li>
            <li><em>В каком регистре рекомендуется писать HTML-теги?</em></li>
        </ul>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='html_basic.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='html_attributes.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>