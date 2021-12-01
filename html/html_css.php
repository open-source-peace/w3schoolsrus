<?php include '../include/head.php'; ?>

<title>HTML CSS. Каскадные таблицы стилей. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML. CSS. Каскадные таблицы стилей на веб-страницах. Как подключить каскадную таблицу стилей? <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class="color_h1">Стили - CSS</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_colors.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_links.php">Next &#10095;</a>
    </div>
    <hr>

    <div style="position:relative;height:220px;margin-top:50px;">
        <div style="opacity:0.5;position:absolute;left:50px;top:-30px;width:300px;height:150px;background-color:#40B3DF"></div>
        <div class="w3-theme" style="opacity:0.3;position:absolute;left:120px;top:20px;width:100px;height:170px;"></div>
        <div style="margin-top:30px;width:360px;height:130px;padding:20px;border-radius:10px;border:10px solid #EE872A;font-size:120%;">
            <h1>CSS = Стили и цвета</h1>
            <div style="letter-spacing:12px;font-size:15px;position:relative;left:25px;top:10px;">Манипулировать текстом</div>
            <div style="color:#40B3DF;letter-spacing:12px;font-size:15px;position:relative;left:25px;top:20px;">Цвета,
                <span style="background-color:#B4009E;color:#ffffff;">&nbsp;Блоки</span></div>
        </div>
    </div>
    <br>
    <hr>

    <div class="sum">
        <h4>В этой теме:</h4>
        <ul>
            <li><a href="#c1"><em>Стилизация HTML с помощью CSS. Каскадные таблицы стилей</em></a></li>
            <li><a href="#c2"><em>Inline CSS - Встроенный (строчный) стиль</em></a></li>
            <li><a href="#c3"><em>Internal CSS - Внутренний стиль</em></a></li>
            <li><a href="#c4"><em>External CSS - Внешний стиль</em></a></li>
            <li><a href="#c5"><em>CSS Шрифты</em></a></li>
            <li><a href="#c6"><em>CSS Border - Граница</em></a></li>
            <li><a href="#c7"><em>CSS Padding - Внутренний отступ</em></a></li>
            <li><a href="#c8"><em>CSS Margin - Внешний отступ</em></a></li>
            <li><a href="#c9"><em>Атрибут идентификатора - id</em></a></li>
            <li><a href="#c10"><em>Атрибут класса - class</em></a></li>
            <li><a href="#c11"><em>Внешние таблицы стилей</em></a></li>
            <li><a href="#c12"><em>HTML Упражнения</em></a></li>
            <li><a href="#c13"><em>HTML Теги стиля</em></a></li>
        </ul>
    </div>
    <hr>

    <h2 id="c1">Стилизация HTML с помощью CSS. Каскадные таблицы стилей</h2>
    <p><b>CSS</b> расшифровывается как <b>C</b>ascading <b>S</b>tyle <b>S</b>heets - Каскадная таблица стилей.</p>
    <p>CSS описывает, <strong>как элементы HTML должны отображаться на экране, бумаге или других носителях.</strong>.</p>
    <p>CSS <strong> экономит много времени</strong>. Он может контролировать макет нескольких веб-страниц одновременно.</p>
    <p>CSS можно добавить к элементам HTML тремя способами:</p>
    <ul>
        <li><strong>Inline</strong> (встроенный или строчный) - используя атрибут <code class="w3-codespan">style</code> в элементах HTML</li>
        <li><strong>Internal</strong> (внутренний) - используя элемент <code class="w3-codespan">&lt;style&gt;</code> в разделе <code class="w3-codespan">&lt;head&gt;</code></li>
        <li><strong>External</strong> (внешний) - с помощью внешнего файла CSS</li>
    </ul>
    <p>Самый распространенный способ добавить CSS - это сохранить стили в отдельных файлах CSS. Тем не менее, здесь мы будем использовать встроенный и внутренний стиль, потому что это легче продемонстрировать, и вам будет проще попробовать самим.</p>

    <div class="w3-panel w3-note">
        <p><strong>Совет:</strong> Вы можете узнать больше про CSS в <a href="../css/index.php">CSS Учебнике</a> на этом сайте.</p>
    </div>
    <hr>

    <h2 id="c2">Inline CSS - Встроенный (строчный) стиль</h2>
    <p>Встроенный CSS используется для применения уникального стиля к одному HTML элементу.</p>
    <p>Встроенный CSS использует атрибут <code class="w3-codespan">style</code> элемента HTML.</p>
    <p>Этот пример устанавливает цвет текста элемента <code class="w3-codespan">&lt;h1&gt;</code> в синий:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;h1 style=&quot;color:blue;&quot;&gt;Этот заголовок синий&lt;/h1&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryite7b4.html?filename=tryhtml_css_inline" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c3">Internal CSS - Внутренний стиль</h2>
    <p>Внутренний CSS используется для определения стиля отдельной HTML страницы.</p>
    <p>Внутренний CSS указывается в разделе <code class="w3-codespan">&lt;head&gt;</code> HTML страницы с помощью элемента <code class="w3-codespan">&lt;style&gt;</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>
            body {background-color: powderblue;}<br>h1&nbsp;&nbsp; {color: blue;}<br>p&nbsp;&nbsp;&nbsp; {color: red;}<br>
            &lt;/style&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;h1&gt;Это заголовок&lt;/h1&gt;<br>&lt;p&gt;Это параграф.&lt;/p&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitb989.html?filename=tryhtml_css_internal" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c4">External CSS - Внешний стиль</h2>
    <p>Внешняя таблица стилей используется для определения стиля для многих HTML-страниц.</p>
    <p><strong>С помощью внешней таблицы стилей вы можете изменить внешний вид всего веб-сайта, изменив лишь один файл!</strong></p>
    <p>Чтобы использовать внешнюю таблицу стилей, добавьте ссылку на неё в разделе <code class="w3-codespan">&lt;head&gt;</code> HTML страницы:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>
            &nbsp; &lt;link rel=&quot;stylesheet&quot; href=&quot;styles.css&quot;&gt;<br>
            &lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;h1&gt;Это заголовок&lt;/h1&gt;<br>&lt;p&gt;Это параграф.&lt;/p&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit7dcc.html?filename=tryhtml_css_external" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Внешнюю таблицу стилей также, как и HTML-код, можно написать в любом редакторе кода. Файл не должен содержать HTML-код и должен быть сохранен с расширением .css.</p>
    <p>Вот как выглядит файл &quot;styles.css&quot;:</p>
    <div class="w3-example">
        <div class="w3-code notranslate cssHigh">
            body {<br>&nbsp;&nbsp;background-color: powderblue;<br>}<br>h1 {<br>&nbsp; color: blue;<br>}<br>p {<br>&nbsp;&nbsp;color: red;<br>}</div>
    </div>
    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Подробнее о редакторах кода вы можете прочитать в разделе <a href="html_editors.html">HTML Редакторы</a> на нашем сайте.</p>
    </div>
    <hr>

    <h2 id="c5">CSS Шрифты</h2>
    <p>CSS свойство <code class="w3-codespan">color</code> определяет цвет текста, который будет использоваться.</p>
    <p>CSS свойство <code class="w3-codespan">font-family</code> определяет семейство шрифта, который будет использоваться.</p>
    <p>CSS свойство <code class="w3-codespan">font-size</code> определяет размер текста, который будет использоваться.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;!DOCTYPE html&gt;<br>
            &lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>h1 {<br>&nbsp;&nbsp;color: blue;<br>&nbsp;&nbsp;font-family: verdana;<br>&nbsp;&nbsp;font-size: 300%;<br>}<br>p&nbsp; {<br>
            &nbsp; color: red;<br>&nbsp;
            font-family: courier;<br>&nbsp; font-size: 160%;<br>}<br>&lt;/style&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>
            &lt;h1&gt;Это заголовок&lt;/h1&gt;<br>&lt;p&gt;Это параграф.&lt;/p&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitfb29.html?filename=tryhtml_css_fonts" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c6">CSS Border - Граница</h2>
    <p>CSS свойство <code class="w3-codespan">border</code> определяет границу вокруг HTML элемента:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            p {<br>&nbsp;&nbsp;border: 1px
            solid powderblue;<br>}<br>
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit19b0.html?filename=tryhtml_css_borders" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c7">CSS Padding - Внутренний отступ</h2>
    <p>CSS свойство <code class="w3-codespan">padding</code> определяет отступ (пробел) между текстом и границей:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            p {<br>&nbsp; border: 1px solid powderblue;<br>&nbsp; padding: 30px;<br>}</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit9728.html?filename=tryhtml_css_padding" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c8">CSS Margin - Внешний отступ</h2>
    <p>CSS свойство <code class="w3-codespan">margin</code> определяет пространство (пробел) за пределами границы (внешний отступ):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            p {<br>&nbsp; border: 1px solid powderblue;<br>&nbsp;&nbsp;margin: 50px;<br>
            }</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitcbf5.html?filename=tryhtml_css_margin" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c9">Атрибут идентификатора - id</h2>
    <p>Чтобы указать конкретный стиль для одного определённого элемента, добавьте атрибут <code class="w3-codespan">id</code> к элементу:</p>
    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;p id=&quot;p01&quot;&gt;Я отличаюсь&lt;/p&gt;
        </div>
    </div>
    <p>затем укажите стиль для элемента с определенным id:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #p01 {<br>&nbsp; color: blue;<br>}</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit97d9.html?filename=tryhtml_css_id" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Идентификатор <b>id</b> указывается в css с помощью символа <b>#</b> (диез, решётка) и название идентификатора.</p>

    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Идентификатор (id) элемента должен быть уникальным на странице, поэтому селектор идентификаторов используется для выбора одного уникального элемента!</p>
    </div>
    <hr>

    <h2 id="c10">Атрибут класса - class</h2>
    <p>Чтобы указать стиль для определённых типов элементов, добавьте атрибут <code class="w3-codespan">class</code> к элементу:</p>
    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;p class=&quot;error&quot;&gt;Я отличаюсь&lt;/p&gt;</div>
    </div>
    <p>затем укажите стиль для элементов с определенным классом:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            p.error {<br>&nbsp;&nbsp;color: red;<br>}</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit8442.html?filename=tryhtml_css_class" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Класс <b>class</b> указывается в css с помощью символа <b>.</b> (точка) и название класса.</p>
    <hr>

    <h2 id="c11">Внешние таблицы стилей</h2>
    <p>На внешние таблицы стилей можно ссылаться по полному URL или по пути относительно текущей веб-страницы.</p>
    <p>В этом примере используется полный URL-адрес для ссылки на таблицу стилей:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;link rel=&quot;stylesheet&quot; href=&quot;https://www.w3schools.com/html/styles.css&quot;&gt;
        </div>
        <p>
            <a class="w3-btn" href="../htmltryit/tryit1245.html?filename=tryhtml_css_external_url" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <p>Этот пример ссылается на таблицу стилей, расположенную в папке html на текущем веб-сайте:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;link rel=&quot;stylesheet&quot; href=&quot;/html/styles.css&quot;&gt;
        </div>
        <p>
            <a class="w3-btn" href="../htmltryit/tryit2791.html?filename=tryhtml_css_external_relative" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <p>Этот пример ссылается на таблицу стилей, расположенную в той же папке, что и текущая страница:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;link rel=&quot;stylesheet&quot; href=&quot;styles.css&quot;&gt;
        </div>
        <p>
            <a class="w3-btn" href="../htmltryit/tryit7dcc.html?filename=tryhtml_css_external" target="_blank">Попробуйте сами &raquo;</a></p>
    </div>

    <div class="w3-panel w3-note">
        <p>Вы можете прочитать больше о путях к файлам в разделе <a href="html_filepaths.php">HTML Пути к файлам</a>.</p>
    </div>
    <hr>

    <h2>Резюме раздела</h2>
    <ul>
        <li>Используйте HTML атрибут <code class="w3-codespan">style</code> для встроенного стиля</li>
        <li>Используйте HTML элемент <code class="w3-codespan">&lt;style&gt;</code> для определения внутреннего CSS</li>
        <li>Используйте HTML элемент <code class="w3-codespan">&lt;link&gt;</code> для ссылки на внешний файл CSS</li>
        <li>Используйте HTML <code class="w3-codespan">&lt;head&gt;</code> элемент, чтобы хранить элементы &lt;style&gt; и &lt;link&gt;</li>
        <li>Используйте CSS свойство <code class="w3-codespan">color</code> для установки цвета текста</li>
        <li>Используйте CSS свойство <code class="w3-codespan">font-family</code> для установки семейства шрифтов текста</li>
        <li>Используйте CSS свойство <code class="w3-codespan">font-size</code> для установки размера текста</li>
        <li>Используйте CSS свойство <code class="w3-codespan">border</code> для установки границ</li>
        <li>Используйте CSS свойство <code class="w3-codespan">padding</code> для установки отступа внутри границ</li>
        <li>Используйте CSS свойство <code class="w3-codespan">margin</code> для установки отступа за пределами границ</li>
    </ul>
    <hr>
    <h2 id="c12">HTML Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/html/exercise.asp?filename=exercise_html_css1" method="post" target="_blank">
        <h2 class="heading">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Используйте CSS, чтобы установить желтый цвет (yellow) фона документа (body).</p>
            <div class="exerciseprecontainer">
                &lt;!DOCTYPE html&gt;
                <br>
                &lt;html&gt;
                <br>
                &lt;head&gt;
                <br>
                &lt;style&gt;
                <br>
                <input name="ex1" maxlength="4" style="width: 50px;"> <input name="ex2" maxlength="1" style="width: 18px;">
                <br>
                &nbsp;&nbsp;<input name="ex3" spellcheck="false" maxlength="16" style="width: 166px;">:yellow;
                <br>
                <input name="ex4" spellcheck="false" maxlength="1" style="width: 18px;">
                <br>
                &lt;/style&gt;
                <br>
                &lt;/head&gt;
                <br>
                &lt;body&gt;
                <br><br>
                &lt;h1&gt;My Home Page&lt;/h1&gt;
                <br><br>
                &lt;/body&gt;
                <br>
                &lt;/html&gt;
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>

    <h2 id="c13">HTML Теги стиля</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Тег</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../tags/tag_style.php">&lt;style&gt;</a></td>
            <td>Определяет информацию о стиле для документа HTML</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_link.php">&lt;link&gt;</a></td>
            <td>Определяет ссылку между документом и внешним ресурсом</td>
        </tr>
    </table>
    <div class="w3-note w3-panel">
        <p>Для получения полного списка всех доступных тегов HTML, посетите наш <a href="../tags/index.php">HTML Справочник тегов</a>.</p>
    </div>
    <hr>
    <div class="quest">
        <h3>Вопросы для самоконтроля</h3>
        <ul>
            <li><em>Что такое стилизация веб-страниц?</em></li>
            <li><em>Как расшифровывается CSS?</em></li>
            <li><em>Для чего нужны каскадные таблицы стилей?</em></li>
            <li><em>Как можно добавить CSS до HTML-элементов?</em></li>
            <li><em>Какой атрибут использует встроенный CSS?</em></li>
            <li><em>В каком разделе веб-страницы указывается внутренний CSS?</em></li>
            <li><em>Как указывается внешняя таблица стилей в HTML-документе?</em></li>
            <li><em>Какое расширение должно быть в файле внешней таблицы стилей?</em></li>
            <li><em>Какое CSS-свойство определяет цвет текста?</em></li>
            <li><em>Какое CSS-свойство определяет семейство шрифта?</em></li>
            <li><em>Какое CSS-свойство определяет размер текста?</em></li>
            <li><em>Какое CSS-свойство определяет границу вокруг HTML-элемента?</em></li>
            <li><em>Какое CSS-свойство определяет внутренний отступ между текстом и границей HTML-элемента?</em></li>
            <li><em>Какое CSS-свойство определяет внешний отступ вне границы HTML-элемента?</em></li>
            <li><em>Какой атрибут используется для конкретного стиля определённого HTML-элемента?</em></li>
            <li><em>С помощью какого символа в CSS указывается идентификатор (id) HTML-элемента?</em></li>
            <li><em>Какой атрибут используется для определённых типов HTML-элементов?</em></li>
            <li><em>С помощью какого символа в CSS указывается название класа HTML-элемента?</em></li>
            <li><em>Какие есть способы ссылки на внешний файл стилей?</em></li>
        </ul>
    </div>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_colors.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_links.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
