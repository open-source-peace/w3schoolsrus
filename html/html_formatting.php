<?php include '../include/head.php'; ?>
<title>HTML Форматирование текста. <?php include '../include/title.php'; ?></title>
<meta name="description" content="Форматирование текста. Элементы форматирования. Как выделить текст на веб-странице? Как сделать маркированный текст? <?php include '../include/description.php'; ?>">

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class="color_h1">Форматирование текста</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_styles.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_quotation_elements.php">Next &#10095;</a>
    </div>
    <hr>

    <div class="sum">
        <h4>В этой теме:</h4>
        <ul>
            <li><a href="#c1"><em>HTML элементы форматирования</em></a></li>
            <li><a href="#c2"><em>HTML элементы <code class="w3-codespan">&lt;b&gt;</code> и <code class="w3-codespan">&lt;strong&gt;</code></em></a></li>
            <li><a href="#c3"><em>HTML элементы <code class="w3-codespan">&lt;i&gt;</code> и <code class="w3-codespan">&lt;em&gt;</code></em></a></li>
            <li><a href="#c4"><em>HTML элемент <code class="w3-codespan">&lt;small&gt;</code></em></a></li>
            <li><a href="#c5"><em>HTML элемент <code class="w3-codespan">&lt;mark&gt;</code></em></a></li>
            <li><a href="#c6"><em>HTML элемент <code class="w3-codespan">&lt;del&gt;</code></em></a></li>
            <li><a href="#c7"><em>HTML элемент <code class="w3-codespan">&lt;ins&gt;</code></em></a></li>
            <li><a href="#c8"><em>HTML элемент <code class="w3-codespan">&lt;sub&gt;</code></em></a></li>
            <li><a href="#c9"><em>HTML элемент <code class="w3-codespan">&lt;sub&gt;</code></em></a></li>
            <li><a href="#c10"><em>HTML упражнения</em></a></li>
            <li><a href="#c11"><em>HTML элементы форматирования текста</em></a></li>
        </ul>
    </div>
    <hr>

    <div class="w3-example">
        <h3>Форматирование текста</h3>
        <div class="w3-white w3-padding notranslate">
            <p><b>Этот текст жирный</b></p>
            <p><i>Этот текст курсивом</i></p>
            <p>Это <sub> нижний индекс</sub> и <sup>верхний индекс</sup></p>
        </div>
        <a class="w3-btn w3-margin-top w3-margin-bottom" href="../htmltryit/tryitd88c.html?filename=tryhtml_formatting_intro" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c1">HTML элементы форматирования</h2>
    <p>В предыдущем разделе вы узнали об HTML атрибуте <strong>style</strong>.</p>
    <p>HTML также определяет специальные <strong>элементы</strong> для определения текста с особой <strong>важностью</strong>.</p>

    <p>HTML использует такие элементы, как <code class="w3-codespan">&lt;b&gt;</code> и <code class="w3-codespan">&lt;i&gt;</code> для форматирования вывода, например <b>жирный</b> или <i>курсивный</i> текст.</p>

    <p><strong>Элементы форматирования</strong> были разработаны для отображения специальных типов текста:</p>
    <ul>
        <li><code class="w3-codespan">&lt;b&gt;</code> - Жирный текст</li>
        <li><code class="w3-codespan">&lt;strong&gt;</code> - Важный текст (выделяется жирным)</li>
        <li><code class="w3-codespan">&lt;i&gt;</code> - Курсивный текст</li>
        <li><code class="w3-codespan">&lt;em&gt;</code> - Важный текст (выделяется курсивом)</li>
        <li><code class="w3-codespan">&lt;mark&gt;</code> - Помеченный (маркированный) текст</li>
        <li><code class="w3-codespan">&lt;small&gt;</code> - Маленький текст</li>
        <li><code class="w3-codespan">&lt;del&gt;</code> - Удаленный текст</li>
        <li><code class="w3-codespan">&lt;ins&gt;</code> - Вставленный текст</li>
        <li><code class="w3-codespan">&lt;sub&gt;</code> - Подстрочный текст (нижний индекс)</li>
        <li><code class="w3-codespan">&lt;sup&gt;</code> - Надстрочный текст (верхний индекс)</li>
    </ul>
    <hr>

    <h2 id="c2">HTML элементы &lt;b&gt; и &lt;strong&gt;</h2>
    <p>HTML элемент <code class="w3-codespan">&lt;b&gt;</code> определяет <strong>жирный</strong> текст без дополнительного значения.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;b&gt;This text is bold&lt;/b&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit82ae.html?filename=tryhtml_formatting_b" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>HTML элемент <code class="w3-codespan">&lt;strong&gt;</code> определяет <strong>важный</strong> текст с дополнительным семантически &quot;важным&quot; значением.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;strong&gt;This text is strong&lt;/strong&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit2a85.html?filename=tryhtml_formatting_strong" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c3">HTML элементы &lt;i&gt; и &lt;em&gt;</h2>
    <p>HTML элемент <code class="w3-codespan">&lt;i&gt;</code> определяет <em>курсивный</em> текст без какого-либо дополнительного значения.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;i&gt;This text is italic&lt;/i&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit4646.html?filename=tryhtml_formatting_i" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>HTML элемент <code class="w3-codespan">&lt;em&gt;</code> определяет <em>выделенный</em> текст с дополнительным семантическим значением.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;em&gt;This text is
            emphasized&lt;/em&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit7dea.html?filename=tryhtml_formatting_em" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Браузеры отображают <code class="w3-codespan">&lt;strong&gt;</code> как <code class="w3-codespan">&lt;b&gt;</code>, и <code class="w3-codespan">&lt;em&gt;</code> как <code class="w3-codespan">&lt;i&gt;</code>.
            Однако, есть разница в значении этих тегов:
            <code class="w3-codespan">&lt;b&gt;</code> и <code class="w3-codespan">&lt;i&gt;</code> определяют жирный и курсивный текст, но
            <code class="w3-codespan">&lt;strong&gt;</code> и <code class="w3-codespan">&lt;em&gt;</code> означают, что текст &quot;важный&quot; по смысловому значению.</p>
    </div>
    <hr>

    <h2 id="c4">HTML элемент &lt;small&gt;</h2>
    <p>HTML элемент <code class="w3-codespan">&lt;small&gt;</code> определяет уменьшенный текст (относительно размера основного текста по умолчанию):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;h2&gt;HTML
            &lt;small&gt;Small&lt;/small&gt; Formatting&lt;/h2&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryited1c.html?filename=tryhtml_formatting_small" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c5">HTML элемент &lt;mark&gt;</h2>
    <p>HTML элемент <code class="w3-codespan">&lt;mark&gt;</code> определяет маркированный/выделенный текст:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;h2&gt;HTML
            &lt;mark&gt;Marked&lt;/mark&gt; Formatting&lt;/h2&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit16b4.html?filename=tryhtml_formatting_mark" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>По умолчанию <mark>маркированный текст</mark> выделяется жёлтым цветом.</p>
    <hr>

    <h2 id="c6">HTML элемент &lt;del&gt;</h2>
    <p>HTML элемент <code class="w3-codespan">&lt;del&gt;</code> определяет удалённый/изъятый текст.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p&gt;My favorite color is &lt;del&gt;blue&lt;/del&gt; red.&lt;/p&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitf9e6.html?filename=tryhtml_formatting_del" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Текст отображается <del>зачеркнутым</del>.</p>
    <hr>

    <h2 id="c7">HTML элемент &lt;ins&gt;</h2>
    <p>HTML элемент <code class="w3-codespan">&lt;ins&gt;</code> определяет вставленный/добавленный текст.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p&gt;My favorite
            &lt;ins&gt;color&lt;/ins&gt; is red.&lt;/p&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit9844.html?filename=tryhtml_formatting_ins" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Текст отображается <ins>подчеркнутым</ins>.</p>
    <hr>

    <h2 id="c8">HTML элемент &lt;sub&gt;</h2>
    <p>HTML элемент <code class="w3-codespan">&lt;sub&gt;</code> определяет подстрочный текст (нижний индекс).</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p&gt;This
            is &lt;sub&gt;subscripted&lt;/sub&gt; text.&lt;/p&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit78e9.html?filename=tryhtml_formatting_sub" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Текст отображается как <sub>нижний индекс</sub>.</p>
    <hr>

    <h2 id="c9">HTML элемент &lt;sup&gt;</h2>
    <p>HTML элемент <code class="w3-codespan">&lt;sup&gt;</code> определяет надстрочный текст (верхний индекс).</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p&gt;This
            is &lt;sup&gt;superscripted&lt;/sup&gt; text.&lt;/p&gt;<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit7b21.html?filename=tryhtml_formatting_sup" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Текст отображается как <sup>верхний индекс</sup>.</p>
    <hr>

    <h2 id="c10">HTML Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/html/exercise.asp?filename=exercise_html_formatting1" method="post" target="_blank">
        <h2 class="heading">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Добавьте дополнительное значение к слову "degradation" в параграфе ниже.</p>
            <div class="exerciseprecontainer">
                &lt;p&gt;
                <br>
                WWF's mission is to stop the
                <input name="ex1" maxlength="8" style="width: 86px;">degradation<input name="ex2" maxlength="9" style="width: 96px;"> of our
                planet's natural environment.
                <br>
                &lt;/p&gt;
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>

    <h2 id="c11">HTML элементы форматирования текста</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:20%">Тег</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../tags/tag_b.php">&lt;b&gt;</a></td>
            <td>Определяет жирный текст</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_em.php">&lt;em&gt;</a></td>
            <td>Определяет семантически важный текст</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_i.php">&lt;i&gt;</a></td>
            <td>Определяет курсивный текст</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_small.php">&lt;small&gt;</a></td>
            <td>Определяет маленький текст</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_strong.php">&lt;strong&gt;</a></td>
            <td>Определяет семантически важный текст</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_sub.php">&lt;sub&gt;</a></td>
            <td>Определяет подстрочный текст (нижний индекс)</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_sup.php">&lt;sup&gt;</a></td>
            <td>Определяет надстрочный текст (верхний индекс)</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_ins.php">&lt;ins&gt;</a></td>
            <td>Определяет вставленный текст</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_del.php">&lt;del&gt;</a></td>
            <td>Определяет удалённый текст</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_mark.php">&lt;mark&gt;</a></td>
            <td>Определяет маркированный/помеченный текст</td>
        </tr>
    </table>
    <div class="w3-note w3-panel">
        <p>Для получения полного списка всех доступных тегов HTML, посетите <a href="../tags/index.php">HTML Справочник тегов</a>.</p>
    </div>
    <div class="quest">
        <h3>Вопросы для самоконтроля</h3>
        <ul>
            <li><em>Что такое форматирование текста HTML-страницы?</em></li>
            <li><em>Какие бывают HTML-элементы форматирования?</em></li>
            <li><em>Для чего необходимы элементы форматирования?</em></li>
            <li><em>Какой HTML-элемент определяет жирный текст без дополнительного значения?</em></li>
            <li><em>Какой HTML-элемент определяет жирный текст с дополнительным семантически важным значениям?</em></li>
            <li><em>Какой HTML-элемент определяет курсивный текст без какого-либо дополнительного значения?</em></li>
            <li><em>Какой HTML-элемент определяет курсивный текст с дополнительным семантически важным значением?</em></li>
            <li><em>Какой HTML-элемент определяет уменьшенный текст относительно размера основного текста?</em></li>
            <li><em>Какой HTML-элемент определяет маркированный/выделенный текст?</em></li>
            <li><em>Какой HTML-элемент определяет удаленный/изъятый текст?</em></li>
            <li><em>Какой HTML-элемент определяет вставленный/добавленный текст?</em></li>
            <li><em>Какой HTML-элемент определяет подстрочный текст (нижний индекс)?</em></li>
            <li><em>Какой HTML-элемент определяет надстрочный текст (верхний индекс)?</em></li>
        </ul>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_styles.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_quotation_elements.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
