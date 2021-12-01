<?php include '../include/head.php'; ?>

<title>HTML Элементы Head. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Head. Элементы title, style, link, meta, область просмотра, script, base. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML - <span class="color_h1">Элемент Head</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_filepaths.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_layout.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">HTML элемент <code class='w3-codespan'>&lt;head&gt;</code> - это контейнер для следующих элементов:
        <code class='w3-codespan'>&lt;title&gt;</code>, <code class='w3-codespan'>&lt;style&gt;</code>,
        <code class='w3-codespan'>&lt;meta&gt;</code>, <code class='w3-codespan'>&lt;link&gt;</code>, <code class='w3-codespan'>&lt;script&gt;</code> и <code class='w3-codespan'>&lt;base&gt;</code>.</p>
    <hr>

    <h2>HTML элемент &lt;head&gt;</h2>
    <p>Элемент <code class='w3-codespan'>&lt;head&gt;</code> является контейнером для метаданных (данных о данных) и помещается между тегами <code class='w3-codespan'>&lt;html&gt;</code> и <code class='w3-codespan'>&lt;body&gt;</code>.</p>
    <p>Метаданные HTML - это данные о документе HTML. Метаданные не отображаются на веб-странице.</p>
    <p>Метаданные обычно определяют заголовок документа (title), набор символов (utf-8), стили (style), скрипты (script) и другую метаинформацию.</p>
    <hr>

    <h2>HTML элемент &lt;title&gt;</h2>
    <p>Элемент <code class='w3-codespan'>&lt;title&gt;</code> определяет заголовок документа. Заголовок должен состоять только из текста и отображаться в строке заголовка браузера или на вкладке веб-страницы.</p>
    <p>Тег <code class='w3-codespan'>&lt;title&gt;</code> является обязательным в HTML документе - согласно спецификации HTML5!</p>
    <p>Содержание заголовка страницы очень важно для поисковой оптимизации (SEO)! Заголовок страницы используется алгоритмами поисковой системы для определения порядка при перечислении страниц в результатах поиска. Именно по заголовку поисковики чаще всего определяют информацию о содержимом веб-страницы.</p>
    <p>Элемент <code class='w3-codespan'>&lt;title&gt;</code>:</p>
    <ul>
        <li>определяет заголовок на панели инструментов браузера</li>
        <li>предоставляет заголовок для страницы, когда она добавляется в избранное</li>
        <li>отображает заголовок страницы в результатах поиска</li>
    </ul>

    <p>Таким образом, постарайтесь сделать заголовок максимально точным и значимым!</p>

    <p>Простой HTML документ:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;!DOCTYPE html&gt;<br>
            &lt;html&gt;<br>&lt;head&gt;<br>
            &nbsp;
            &lt;title&gt;Значимый заголовок страницы&lt;/title&gt;<br>
            &lt;/head&gt;<br>
            &lt;body&gt;<br>
            <br>Содержание документа......<br>
            <br>&lt;/body&gt;<br>
            &lt;/html&gt;
        </div>
        <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit7501.html?filename=tryhtml_head_title' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HTML элемент &lt;style&gt;</h2>
    <p>Элемент <code class='w3-codespan'>&lt;style&gt;</code> используется для определения информации о стиле для одной HTML-страницы:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;style&gt;<br>
            &nbsp;
            body {background-color: powderblue;}<br>&nbsp; h1 {color: red;}<br>
            &nbsp;
            p {color: blue;}<br>
            &lt;/style&gt;</div>
        <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit2966.html?filename=tryhtml_head_style' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HTML элемент &lt;link&gt;</h2>
    <p>Элемент <code class='w3-codespan'>&lt;link&gt;</code> определяет отношения между текущим документом и внешним ресурсом.<br><br>Тег <code class='w3-codespan'>&lt;link&gt;</code> чаще всего используется для ссылки на внешние таблицы стилей:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;link rel=&quot;stylesheet&quot; href=&quot;mystyle.css&quot;&gt;
        </div>
        <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit0343.html?filename=tryhtml_head_link' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Чтобы узнать больше о CSS, посетите <a href="../css/index.php">CSS Учебник</a> на нашем сайте W3Schools.</p>
    </div>
    <hr>

    <h2>HTML элемент &lt;meta&gt;</h2>
    <p>Элемент <code class='w3-codespan'>&lt;meta&gt;</code> обычно используется для указания набора символов, описания страницы, ключевых слов, автора документа и настроек области просмотра.</p>
    <p>Метаданные не будут отображаться на странице, но используются браузерами (как отображать контент или перезагружать страницу), поисковыми системами (ключевые слова) и другими веб-службами.</p>

    <h2>Примеры</h2>
    <p><b>Определяет используемый набор символов:</b></p>
    <div class='w3-code w3-border notranslate htmlHigh'>
        <div>&lt;meta charset=&quot;UTF-8&quot;&gt;</div>
    </div>

    <p><b>Определяет ключевые слова для поисковых систем:</b></p>
    <div class='w3-code w3-border notranslate htmlHigh'>
        <div>&lt;meta name=&quot;keywords&quot; content=&quot;HTML, CSS, JavaScript&quot;&gt;</div>
    </div>

    <p><b>Определяет описание веб-страницы:</b></p>
    <div class='w3-code w3-border notranslate htmlHigh'>
        <div>&lt;meta name=&quot;description&quot; content=&quot;Free Web tutorials&quot;&gt;</div>
    </div>

    <p><b>Определяет автора веб-страницы:</b></p>
    <div class='w3-code w3-border notranslate htmlHigh'>
        <div>&lt;meta name=&quot;author&quot; content=&quot;John Doe&quot;&gt;</div>
    </div>

    <p><b>Обновляет документ каждые 30 секунд:</b></p>
    <div class='w3-code w3-border notranslate htmlHigh'>
        <div>&lt;meta http-equiv=&quot;refresh&quot; content=&quot;30&quot;&gt;</div>
    </div>

    <p><b>Настройка области просмотра, чтобы сайт выглядел хорошо на всех устройствах:</b></p>
    <div class='w3-code w3-border notranslate htmlHigh'>
        <div>
            &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
        </div>
    </div>
    <p>Пример <code class='w3-codespan'>&lt;meta&gt;</code> тегов:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;meta charset=&quot;UTF-8&quot;&gt;<br>&lt;meta name=&quot;description&quot; content=&quot;Free Web tutorials&quot;&gt;<br>&lt;meta name=&quot;keywords&quot; content=&quot;HTML, CSS, JavaScript&quot;&gt;<br>&lt;meta name=&quot;author&quot; content=&quot;John
            Doe&quot;&gt;<br></div>
        <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit43c5.html?filename=tryhtml_head_meta' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Настройка области просмотра</h2>
    <p>Область просмотра - это видимая пользователем область веб-страницы. Это зависит от устройства - на мобильном телефоне он будет меньше, чем на экране компьютера.</p>
    <p>Необходимо включить следующий элемент <code class='w3-codespan'>&lt;meta&gt;</code> на все веб-страницы:</p>
    <div class='w3-code w3-border notranslate htmlHigh'>
        <div>
            &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
        </div>
    </div>
    <p>Это дает браузеру инструкции о том, как контролировать размеры и масштаб веб-страницы.</p>
    <p>Часть <code class='w3-codespan'>width=device-width</code> задает ширину страницы, соответствующую ширине экрана устройства (которая будет зависеть от устройства).</p>
    <p>Часть <code class='w3-codespan'>initial-scale=1.0</code> устанавливает начальный уровень масштабирования при первой загрузке страницы браузером.</p>
    <p>Это пример веб-страницы <em>без</em> метатега viewport, и той же веб-страницы <em>из</em> метатегом viewport:</p>
    <div class='w3-note w3-panel'>
        <p><strong>Примечание:</strong> Если вы просматриваете эту страницу с телефона или планшета, вы можете кликнуть две ссылки ниже, чтобы увидеть разницу.</p>
    </div>
    <br>
    <div class='w3-row' style='text-align:center;'>
        <div class='w3-half'>
            <a target='_blank' href='example_withoutviewport.html'><img src='../images/img_viewport1.png' class='w3-hover-shadow viewport'><br><br><b>Без метатега viewport</b></a>
            <br>
            <br>
        </div>
        <div class='w3-half'>
            <a target='_blank' href='example_withviewport.html'><img src='../images/img_viewport2.png' class='w3-hover-shadow viewport'><br><br><b>Из метатегом viewport</b></a>
            <br>
            <br>
        </div>
    </div>
    <hr>

    <h2>HTML элемент &lt;script&gt;</h2>
    <p>Элемент <code class='w3-codespan'>&lt;script&gt;</code> используется для определения клиентского JavaScript.</p>
    <p>Следующий JavaScript-код пишет &quot;Hello JavaScript!&quot; в HTML элементе с id=&quot;demo&quot;:</p>

    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;script&gt;<br>function myFunction() {<br>
            &nbsp;
            document.getElementById(&quot;demo&quot;).innerHTML = &quot;Hello JavaScript!&quot;;<br>
            }<br>&lt;/script&gt;</div>
        <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit0896.html?filename=tryhtml_head_script' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Чтобы узнать больше о JavaScript, посетите <a href="../js/index.php">JavaScript Учебник</a> на нашем сайте W3Schools.</p>
    </div>
    <hr>

    <h2>HTML элемент &lt;base&gt;</h2>
    <p>Элемент <code class='w3-codespan'>&lt;base&gt;</code> определяет базовый URL-адрес и/или цель для всех относительных URL-адресов на странице.</p>
    <p>Тег <code class='w3-codespan'>&lt;base&gt;</code> должен иметь либо атрибут <code class='w3-codespan'>href</code>, либо атрибут <code class='w3-codespan'>target</code>, либо оба.</p>
    <p>В документе может быть только один элемент <code class='w3-codespan'>&lt;base&gt;</code>!</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <p>Укажите URL-адрес по умолчанию и цель по умолчанию для всех ссылок на странице:</p>
        <div class='w3-code notranslate htmlHigh'>
            &lt;head&gt;<br>&lt;base href=&quot;https://w3schoolsrus.github.io/&quot; target=&quot;_blank&quot;&gt;<br>&lt;/head&gt;<br>
            <br>&lt;body&gt;<br>&lt;img src=&quot;images/stickman.gif&quot; width=&quot;24&quot; height=&quot;39&quot;
            alt=&quot;Stickman&quot;&gt;<br>&lt;a href=&quot;tags/tag_base.html&quot;&gt;HTML base Tag&lt;/a&gt;<br>&lt;/body&gt;<br>
        </div>
        <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit55a3.html?filename=tryhtml_head_base' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>Резюме</h2>
    <ul>
        <li>Элемент <code class='w3-codespan'>&lt;head&gt;</code> - контейнер для метаданных (данных о данных)</li>
        <li>Элемент <code class='w3-codespan'>&lt;head&gt;</code> помещается между тегом <code class='w3-codespan'>&lt;html&gt;</code> и тегом <code class='w3-codespan'>&lt;body&gt;</code></li>
        <li>Элемент <code class='w3-codespan'>&lt;title&gt;</code> является обязательным и определяет заголовок документа</li>
        <li>Элемент <code class='w3-codespan'>&lt;style&gt;</code> используется для определения информации о стиле для одного документа</li>
        <li>Тег <code class='w3-codespan'>&lt;link&gt;</code> чаще всего используется для ссылки на внешние таблицы стилей</li>
        <li>Элемент <code class='w3-codespan'>&lt;meta&gt;</code> обычно используется для указания набора символов, описания страницы, ключевых слов, автора документа и настроек области просмотра</li>
        <li>Элемент <code class='w3-codespan'>&lt;script&gt;</code> используется для определения клиентского JavaScript</li>
        <li>Элемент <code class='w3-codespan'>&lt;base&gt;</code> определяет базовый URL-адрес и/или цель для всех относительных URL-адресов на странице</li>
    </ul>
    <hr>

    <h2>HTML элементы head</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:20%">Тег</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../tags/tag_head.php">&lt;head&gt;</a></td>
            <td>Определяет информацию о документе</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_title.php">&lt;title&gt;</a></td>
            <td>Определяет заголовок документа</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_base.php">&lt;base&gt;</a></td>
            <td>Определяет адрес по умолчанию или цель по умолчанию для всех ссылок на странице</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_link.php">&lt;link&gt;</a></td>
            <td>Определяет связь между документом и внешним ресурсом</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_meta.php">&lt;meta&gt;</a></td>
            <td>Определяет метаданные об HTML-документе</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_script.php">&lt;script&gt;</a></td>
            <td>Определяет скрипт на стороне клиента</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_style.php">&lt;style&gt;</a></td>
            <td>Определяет информацию о стиле для документа</td>
        </tr>
    </table>
    <div class='w3-note w3-panel'>
        <p>Для получения полного списка всех доступных тегов HTML посетите <a href="../tags/index.php">HTML Справочник тегов</a> на нашем сайте W3Schools.</p>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='html_filepaths.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='html_layout.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>