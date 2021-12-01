<?php include '../include/head.php'; ?>
<title>HTML Элементы цитаты и цитирования. <?php include '../include/title.php'; ?></title>
<meta name="description" content="Элементы цитаты и цитирования. Теги &lt;q&gt;, &lt;blockquote&gt; &lt;abbr&gt;. Бесплатные курсы онлайн. Справочник HTML5. Как создать сайт? <?php include '../include/description.php'; ?>">

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class="color_h1">Элементы цитаты и цитирования</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_formatting.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_comments.php">Next &#10095;</a>
    </div>
    <hr>

    <div class="sum">
        <h4>В этой теме:</h4>
        <ul>
            <li><a href="#c1"><em>HTML элемент <code class="w3-codespan">&lt;q&gt;</code> для коротких цитат</em></a></li>
            <li><a href="#c2"><em>HTML элемент <code class="w3-codespan">&lt;blockquote&gt;</code> для цитирования</em></a></li>
            <li><a href="#c3"><em>HTML элемент <code class="w3-codespan">&lt;abbr&gt;</code> для аббревиатур</em></a></li>
            <li><a href="#c4"><em>HTML элемент <code class="w3-codespan">&lt;address&gt;</code> для контактной информации</em></a></li>
            <li><a href="#c5"><em>HTML элемент <code class="w3-codespan">&lt;cite&gt;</code> для названия работы</em></a></li>
            <li><a href="#c6"><em>HTML элемент <code class="w3-codespan">&lt;bdo&gt;</code> для двунаправленного переопределения</em></a></li>
            <li><a href="#c7"><em>HTML упражнения</em></a></li>
            <li><a href="#c8"><em>HTML элементы цитаты и цитирования</em></a></li>
        </ul>
    </div>
    <hr>

    <div class="w3-example">
        <h3>Цитата</h3>
        <div class="w3-white w3-padding notranslate">
            <p>Цитата бывшего чемпиона мира по боксу и мэра Киева Виталия Кличко:</p>
            <blockquote cite="https://ru.wikipedia.org/wiki/Кличко,_Виталий_Владимирович">
                А сегодня в завтрашний день не все могут смотреть. Вернее смотреть могут не только лишь все, мало кто может это делать...
            </blockquote>
        </div>
        <a class="w3-btn w3-margin-top w3-margin-bottom" href="../htmltryit/tryit81b5.html?filename=tryhtml_formatting_intro2" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c1">HTML элемент &lt;q&gt; для коротких цитат</h2>
    <p>HTML элемент <code class="w3-codespan">&lt;q&gt;</code> определяет короткие цитаты.</p>
    <p>Браузеры обычно вставляют кавычки вокруг элемента <code class="w3-codespan">&lt;q&gt;</code>.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p&gt;Цель WWF состоит в том, чтобы: &lt;q&gt;Построить будущее, где люди живут в гармонии с природой.&lt;/q&gt;&lt;/p&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitd9a6.html?filename=tryhtml_formatting_q" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c2">HTML элемент &lt;blockquote&gt; для цитирования</h2>
    <p>HTML элемент <code class="w3-codespan">&lt;blockquote&gt;</code> определяет раздел, который цитируется с другого источника.</p>
    <p>Браузеры обычно отображают элементы <code class="w3-codespan">&lt;blockquote&gt;</code> с отступом.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p&gt;Вот цитата с сайта WWF:&lt;/p&gt;<br>&lt;blockquote cite=&quot;http://www.worldwildlife.org/who/index.html&quot;&gt;<br>
            В течение 50 лет WWF защищает будущее природы. <br>Всемирная организация WWF, ведущая природоохранная организация, работает в 100 странах мира, её поддерживают 1,2 миллиона человек в Соединенных Штатах и близки к ней 5 миллионов по всему миру.<br>&lt;/blockquote&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitcb56.html?filename=tryhtml_formatting_blockquote" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c3">HTML элемент &lt;abbr&gt; для аббревиатур</h2>
    <p>HTML элемент <code class="w3-codespan">&lt;abbr&gt;</code> определяет аббревиатуру или акроним.</p>
    <p>Маркировка сокращений может дать полезную информацию для браузеров, систем перевода и поисковых систем.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p&gt;&lt;abbr title=&quot;World Health Organization&quot;&gt;WHO&lt;/abbr&gt; была создана в
            1948.&lt;/p&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit1a23.html?filename=tryhtml_formatting_abbr" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c4">HTML элемент &lt;address&gt; для контактной информации</h2>
    <p>HTML элемент <code class="w3-codespan">&lt;address&gt;</code> определяет контактную информацию (автор/владелец) документа или статьи.</p>
    <p>Элемент <code class="w3-codespan">&lt;address&gt;</code> обычно отображается курсивом. Большинство браузеров добавляют разрыв строки до и после элемента.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;address&gt;<br>Автор Саша Грэй.&lt;br&gt; <br>Посетите нас на:&lt;br&gt;<br>Example.com&lt;br&gt;<br>
            Box 564, Lalaland&lt;br&gt;<br>USA<br>&lt;/address&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit4e4b.html?filename=tryhtml_formatting_address" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c5">HTML элемент &lt;cite&gt; для названия работы</h2>
    <p>HTML элемент <code class="w3-codespan">&lt;cite&gt;</code> определяет название работы.</p>
    <p>Браузеры обычно отображают элемент <code class="w3-codespan">&lt;cite&gt;</code> курсивом.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p&gt;&lt;cite&gt;The Scream&lt;/cite&gt; by Edvard Munch. Нарисовано в 1893.&lt;/p&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit0e3d.html?filename=tryhtml_formatting_cite" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c6">HTML элемент &lt;bdo&gt; для двунаправленного переопределения</h2>
    <p>HTML элемент <code class="w3-codespan">&lt;bdo&gt;</code> определяет двунаправленное переопределение.</p>
    <p>Элемент <code class="w3-codespan">&lt;bdo&gt;</code> используется для переопределения текущего направления текста:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;bdo dir=&quot;rtl&quot;&gt;Этот текст будет написан справа налево&lt;/bdo&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit8e4a.html?filename=tryhtml_formatting_bdo" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c7">HTML Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/html/exercise.asp?filename=exercise_html_quotation_elements1" method="post" target="_blank">
        <h2 class="heading">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Используйте элемент HTML, чтобы добавить кавычки вокруг букв "cool".</p>
            <div class="exerciseprecontainer">
                &lt;p&gt;
                <br>
                I am so <input name="ex1" maxlength="3" style="width: 37px;">cool<input name="ex2" maxlength="4" style="width: 46px;">.
                <br>
                &lt;/p&gt;
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>

    <h2 id="c8">HTML элементы цитаты и цитирования</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:20%">Тег</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../tags/tag_abbr.php">&lt;abbr&gt;</a></td>
            <td>Определяет аббревиатуру или акроним</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_address.php">&lt;address&gt;</a></td>
            <td>Определяет контактную информацию для автора/владельца документа</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_bdo.php">&lt;bdo&gt;</a></td>
            <td>Определяет направление текста</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_blockquote.php">&lt;blockquote&gt;</a></td>
            <td>Определяет раздел, который цитируется из другого источника</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_cite.php">&lt;cite&gt;</a></td>
            <td>Определяет название произведения</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_q.php">&lt;q&gt;</a></td>
            <td>Определяет короткую встроенную цитату</td>
        </tr>
    </table>
    <div class="w3-note w3-panel">
        <p>Для получения полного списка всех доступных тегов HTML, посетите <a href="../tags/index.php">HTML Справочник тегов</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <hr>
    <div class="quest">
        <h3>Вопросы для самоконтроля</h3>
        <ul>
            <li><em>Какой HTML-элемент определяет короткую цитату?</em></li>
            <li><em>Какой HTML-элемент определяет раздел, который цитируется с другого источника?</em></li>
            <li><em>Какой HTML-элемент определяет аббревиатуру или акроним?</em></li>
            <li><em>Какой HTML-элемент определяет контактную информацию (кто автор/владелец) документа или статьи?</em></li>
            <li><em>Какой HTML-элемент определяет название рыботы?</em></li>
            <li><em>Какой HTML-элемент определяет двунаправленное переопределение текущего направления текста?</em></li>
        </ul>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_formatting.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_comments.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>

