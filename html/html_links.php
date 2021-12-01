<?php include '../include/head.php'; ?>

<title>HTML Ссылки. <?php include '../include/title.php'; ?></title>
<meta name="description" content="HTML ссылки. Синтаксис. Локальные ссылки. Цвет ссылок. Атрибут target. <?php include '../include/description.php'; ?>">
<style>
    .mytestbtn {background-color: #f44336 !important;color: white;padding: 15px 25px;text-align: center;text-decoration: none;display:inline-block;
    }
    .mytestbtn:hover {background-color: red !important;color: white!important;}
</style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class="color_h1">Ссылки</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_css.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_links_colors.php">Next &#10095;</a>
    </div>
    <hr>

    <div class="sum">
        <h4>В этой теме:</h4>
        <ul>
            <li><a href="#c1"><em>HTML ссылки - Гиперссылки</em></a></li>
            <li><a href="#c2"><em>HTML ссылки - Синтаксис</em></a></li>
            <li><a href="#c3"><em>Локальные ссылки</em></a></li>
            <li><a href="#c4"><em>HTML Цвета ссылок</em></a></li>
            <li><a href="#c5"><em>HTML ссылки - Атрибут <code class="w3-codespan">target</code></em></a></li>
            <li><a href="#c6"><em>HTML ссылки - Изображение как ссылка</em></a></li>
            <li><a href="#c7"><em>Атрибут Title - Подсказка для ссылок</em></a></li>
            <li><a href="#c8"><em>HTML ссылки - Создать закладку</em></a></li>
            <li><a href="#c9"><em>Внешние пути</em></a></li>
            <li><a href="#c10"><em>HTML Упражнения</em></a></li>
            <li><a href="#c11"><em>HTML Теги ссылок</em></a></li>
        </ul>
    </div>
    <hr>

    <p class="intro"><strong>Ссылки</strong> находятся почти на всех веб-страницах. Ссылки позволяют пользователям переходить от страницы к странице.</p>
    <hr>

    <h2 id="c1">HTML Ссылки - Гиперссылки</h2>
    <p><strong>HTML ссылки</strong> - это <strong>гиперссылки</strong>.</p>
    <p>Вы можете нажать на ссылку и перейти к другому документу.</p>
    <p>При наведении мыши на ссылку стрелка мыши превратится в маленькую стрелку.</p>
    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Ссылка не обязательно должна быть текстовой. Это может быть изображение или любой другой элемент HTML.</p>
    </div>
    <hr>

    <h2 id="c2">HTML ссылки - Синтаксис</h2>
    <p>Гиперссылки определяются с помощью HTML тега <code class="w3-codespan">&lt;a&gt;</code> (от слова <strong>anchor</strong> - <em>якорь</em>):</p>
    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;a href=&quot;<i>url</i>&quot;&gt;<i>Текст ссылки</i>&lt;/a&gt;
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;a href=&quot;https://www.w3schools.com/html/&quot;&gt;HTML уроки для начинающих онлайн&lt;/a&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit082c.html?filename=tryhtml_links_w3schools" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Атрибут <code class="w3-codespan">href</code> указывает адрес назначения ссылки (<span class="w3-text-indigo">https://www.w3schools.com/html/</span>).</p>
    <p><strong>Текст ссылки</strong> является видимой частью (<span style="color:blue">HTML уроки для начинающих онлайн</span>).</p>
    <p>Нажав на текст ссылки, вас отправит на указанный адрес.</p>

    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Без косой черты (слеша) в конце адресов подпапок вы можете сгенерировать два запроса к серверу. Многие серверы автоматически добавляют косую черту в конец адреса, а затем создают новый запрос.</p>
    </div>
    <hr>

    <h2 id="c3">Локальные ссылки</h2>
    <p>В приведенном выше примере используется абсолютный URL (полный веб-адрес). </p>
    <p>Локальная ссылка (ссылка на тот же веб-сайт) указывается с относительным URL (без https://www....).</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;a href=&quot;html_images.html&quot;&gt;HTML Изображения&lt;/a&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit2507.html?filename=tryhtml_links" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c4">HTML Цвета ссылок</h2>
    <p>По умолчанию ссылка будет выглядеть так (во всех браузерах):</p>
    <ul>
        <li><span style="text-decoration:underline;color:blue">Непосещенная ссылка</span> - подчеркнута и синим цветом</li>
        <li><span style="text-decoration:underline;color:purple">Посещенная ссылка</span> - подчёркнута и фиолетовым цветом</li>
        <li><span style="text-decoration:underline;color:red">Активная ссылка</span> - подчёркнута и красным цветом</li>
    </ul>
    <p>Вы можете изменить цвета по умолчанию, используя CSS:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            &lt;style&gt;<br>a:link {<br>&nbsp;&nbsp;color: green; <br>&nbsp;&nbsp;background-color: transparent;
            <br>&nbsp;&nbsp;text-decoration: none;<br>}<br><br>
            a:visited {<br>&nbsp; color: pink;<br>&nbsp; background-color: transparent;<br>&nbsp;
            text-decoration: none;<br>}<br><br>a:hover {<br>&nbsp; color: red;<br>&nbsp; background-color: transparent;<br>
            &nbsp; text-decoration: underline;<br>}<br><br>
            a:active {<br>&nbsp; color: yellow;<br>&nbsp; background-color: transparent;<br>&nbsp;
            text-decoration: underline;<br>}<br>&lt;/style&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit5394.html?filename=tryhtml_links_colors" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Ссылки часто оформляются в виде кнопок с помощью CSS:</p>
    <a class="mytestbtn" href="javascript:void(0)">Это ссылка</a>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            &lt;style&gt;<br>a:link, a:visited {<br>&nbsp; background-color: #f44336;<br>&nbsp;
            color: white;<br>&nbsp; padding: 15px 25px;<br>&nbsp; text-align: center;<br>&nbsp;
            text-decoration: none;<br>&nbsp; display: inline-block;<br>}<br><br>a:hover, a:active {<br>&nbsp;
            background-color: red;<br>}<br>&lt;/style&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitcf20.html?filename=tryhtml_links_button" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-note w3-panel">
        <p>Чтобы узнать больше о CSS, перейдите на наш <a href="../css/index.php" target="_top">CSS Учебник</a>.</p></div>
    <hr>

    <h2 id="c5">HTML ссылки - Атрибут target</h2>
    <p>Атрибут <code class="w3-codespan">target</code> указывает, где открыть связанный документ.</p>
    <p>Атрибут <code class="w3-codespan">target</code> может иметь одно из следующих значений:</p>
    <ul>
        <li><code class="w3-codespan">_blank</code> - Открывает связанный документ в новом окне или вкладке</li>
        <li><code class="w3-codespan">_self</code> - Открывает связанный документ в том же окне/вкладке, в котором он был нажат (по умолчанию)</li>
        <li><code class="w3-codespan">_parent</code> - Открывает связанный документ в родительском фрейме</li>
        <li><code class="w3-codespan">_top</code> - Открывает связанный документ в полном теле окна</li>
        <li><em>framename</em> - Открывает связанный документ в названном фрейме</li>
    </ul>
    <p>Этот пример откроет связанный документ в новом окне/вкладке браузера:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;a href=&quot;https://www.w3schools.com/&quot;
            target=&quot;_blank&quot;&gt;Посетите W3Schools!&lt;/a&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryitb165.html?filename=tryhtml_links_target" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p><strong>Совет:</strong> Если ваша веб-страница заблокирована во фрейме, вы можете использовать <code class="w3-codespan">target=&quot;_top&quot;</code>, чтобы выйти из фрейма:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;a href=&quot;https://www.w3schools.com/html/&quot;
            target=&quot;_top&quot;&gt;HTML5 Учебник!&lt;/a&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitfba0.html?filename=tryhtml_links_target_top" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c6">HTML Ссылки - Изображение как ссылка</h2>
    <p>Часто в качестве ссылок используются изображения:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;a href=&quot;index.html&quot;&gt;<br>&nbsp; &lt;img src=&quot;smiley.gif&quot; alt=&quot;HTML уроки для начинающих&quot; style=&quot;width:42px;height:42px;border:0;&quot;&gt;<br>&lt;/a&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit45fc.html?filename=tryhtml_links_image" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> <code class="w3-codespan">border:0;</code> добавляется, чтобы IE9 (и более ранние версии) не отображал рамку вокруг изображения (когда изображение является ссылкой).</p>
    </div>
    <hr>

    <h2 id="c7">Атрибут Title - Подсказка для ссылок</h2>
    <p>Атрибут <code class="w3-codespan">title</code> определяет дополнительную информацию об элементе. Информация чаще всего отображается в виде всплывающей подсказки, когда мышь перемещается над элементом.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;a href=&quot;https://www.w3schools.com/html/&quot; title=&quot;Перейти на уроки по HTML начинающих&quot;&gt;Уроки по HTML для начинающих&lt;/a&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryite836.html?filename=tryhtml_links_title" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c8">HTML Ссылки - Создать закладку</h2>
    <p>HTML-закладки используются, чтобы позволить читателям переходить к определенным частям веб-страницы.</p>
    <p>Закладки могут быть полезны, если ваша веб-страница очень длинная.</p>
    <p>Чтобы создать закладку, сначала необходимо создать закладку, а затем добавить ссылку на нее.</p>
    <p>При нажатии на ссылку страница прокручивается до места с закладкой.</p>
    <h2>Пример</h2>
    <p>Сначала создайте закладку с атрибутом <code class="w3-codespan">id</code>:</p>
    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;h2 id=&quot;C4&quot;&gt;Глава 4&lt;/h2&gt;</div>
    </div>
    <p>Затем добавьте ссылку на закладку (&quot;Перейти к главе 4&quot;) на той же странице:</p>
    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;a href=&quot;#C4&quot;&gt;Перейти к главе 4&lt;/a&gt;
        </div>
    </div>
    <p>Или добавьте ссылку на закладку (&quot;Перейти к главе 4&quot;) из другой страницы:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;a href=&quot;html_demo.html#C4&quot;&gt;Перейти к главе 4&lt;/a&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryit3864.html?filename=tryhtml_links_bookmark" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c9">Внешние пути</h2>
    <p>На внешние страницы можно ссылаться по полному URL или по пути относительно текущей веб-страницы.</p>
    <p>В этом примере используется полный URL-адрес для ссылки на веб-страницу:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;a href=&quot;https://www.w3schools.com/html/index.html&quot;&gt;HTML учебник&lt;/a&gt;</div>
        <p>
            <a class="w3-btn" href="../htmltryit/tryit61d3.html?filename=tryhtml_links_external_url" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <p>Этот пример ссылается на страницу, расположенную в папке html на текущем веб-сайте:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;a href=&quot;/html/index.html&quot;&gt;HTML учебник&lt;/a&gt;</div>
        <p>
            <a class="w3-btn" href="../htmltryit/tryitea89.html?filename=tryhtml_links_external_relative" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <p>Этот пример ссылается на страницу, расположенную в той же папке, что и текущая страница:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;a href=&quot;index.html&quot;&gt;HTML учебник&lt;/a&gt;</div>
        <p>
            <a class="w3-btn" href="../htmltryit/tryit8c27.html?filename=tryhtml_links_external" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <div class="w3-panel w3-note">
        <p>Вы можете прочитать больше о путях к файлам в главе <a href="html_filepaths.php">HTML Пути к файлам</a>.</p>
    </div>
    <hr>

    <h2>Резюме раздела</h2>
    <ul>
        <li>Используйте элемент <code class="w3-codespan">&lt;a&gt;</code> для определения ссылки</li>
        <li>Используйте атрибут <code class="w3-codespan">href</code> для определения адреса ссылки</li>
        <li>Используйте атрибут <code class="w3-codespan">target</code> чтобы определить, где открыть связанный документ</li>
        <li>Используйте элемент <code class="w3-codespan">&lt;img&gt;</code> (внутри &lt;a&gt;) для использования картинки в качестве ссылки</li>
        <li>Используйте атрибут <code class="w3-codespan">id</code> (id=&quot;<em>значение</em>&quot;) для определения закладок на странице</li>
        <li>Используйте атрибут <code class="w3-codespan">href</code> (href=&quot;#<em>значение</em>&quot;) для ссылки на закладку</li>
    </ul>
    <hr>
    <h2 id="c10">HTML Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/html/exercise.asp?filename=exercise_html_links1" method="post" target="_blank" rel="noffolow">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Используйте корректный HTML, чтобы превратить текст ниже в ссылку на "default.html".</p>
            <div class="exerciseprecontainer">
                <input name="ex1" spellcheck="false" maxlength="2" style="width: 28px;"> <input name="ex2" spellcheck="false" maxlength="19" style="width: 195px;">&gt;Посетите наш HTML учебник.<input name="ex3" spellcheck="false" maxlength="4" style="width: 48px;">
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>

    <h2 id="c11">HTML Теги ссылок</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:30%">Тег</th>
            <th>Описание</th></tr><tr>
            <td><a href="../tags/tag_a.php">&lt;a&gt;</a></td><td>Определяет гиперссылку</td></tr>
    </table>
    <div class="w3-note w3-panel">
        <p>Для получения полного списка всех доступных тегов HTML, посетите наш <a href="../tags/index.php">HTML Справочник тегов</a>.</p>
    </div>
    <hr>
    <div class="quest">
        <h3>Вопросы для самоконтроля</h3>
        <ul>
            <li><em>Для чего нужны ссылки на веб-страницах?</em></li>
            <li><em>Что такое гиперссылки?</em></li>
            <li><em>С помощью какого тега определяются гиперссылки на HTML-страницах?</em></li>
            <li><em>Какой атрибут указывает адрес назначения гиперссылки на HTML-страницах?</em></li>
            <li><em>Какая часть гиперссылки просматривается на веб-страницах?</em></li>
            <li><em>Какие объекты на веб-страницах могут быть гиперссылками?</em></li>
            <li><em>Какая разница между локальными и абсолютными адресами гиперссылок?</em></li>
            <li><em>Какие цвета по умолчанию в гиперссылок?</em></li>
            <li><em>С помощью чего можно изменить цвет гиперссылок?</em></li>
            <li><em>Какой атрибут указывает, где открыть связанный веб-документ?</em></li>
            <li><em>Какие значение в атрибута target?</em></li>
            <li><em>Можно ли использовать изображение в качестве ссылки?</em></li>
            <li><em>Какой атрибут определяет дополнительную информацию об элементе в виде подсказки?</em></li>
            <li><em>Для чего нужны HTML-закладки?</em></li>
            <li><em>Что нужно указать, чтобы сделать закладку на странице?</em></li>
            <li><em>Какие ссылки используются для перехода по страницам в пределах одного сайта?</em></li>
            <li><em>Какие ссылки используются для перехода с одного сайта на другой?</em></li>
        </ul>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_css.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_links_colors.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>

