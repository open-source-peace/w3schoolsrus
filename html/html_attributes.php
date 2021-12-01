<?php include '../include/head.php'; ?>
<title>HTML Атрибуты. <?php include '../include/title.php'; ?></title>
<meta name="description"
      content="Атрибуты HTML элементов. Зачем нужны атрибуты? Значения атрибутов необходимо брать в кавычки и писать в нижнем регистре. <?php include '../include/description.php'; ?>">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class="color_h1">Атрибуты</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_elements.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_headings.php">Next &#10095;</a>
    </div>
    <hr>

    <div class="sum">
        <h4>В этой теме:</h4>
        <ul>
            <li><a href="#c1"><em>HTML атрибуты</em></a>
                <ul>
                    <li><a href="#c2"><em>Атрибут href</em></a></li>
                    <li><a href="#c3"><em>Атрибут src</em></a></li>
                    <li><a href="#c4"><em>Атрибуты width и height</em></a></li>
                    <li><a href="#c5"><em>Атрибут alt</em></a></li>
                    <li><a href="#c6"><em>Атрибут style</em></a></li>
                    <li><a href="#c7"><em>Атрибут lang</em></a></li>
                    <li><a href="#c8"><em>Атрибут title</em></a></li>
                </ul>
            </li>
            <li><a href="#c9"><em>Атрибуты в нижнем регистре</em></a></li>
            <li><a href="#c10"><em>Значения атрибутов в кавычках</em></a></li>
            <li><a href="#c11"><em>Одинарные или двойные кавычки</em></a></li>
            <li><a href="#c12"><em>HTML упражнения</em></a></li>
        </ul>
    </div>
    <hr>

    <p class="intro"><strong>Атрибуты</strong> предоставляют дополнительную информацию об элементах HTML.</p>
    <hr>

    <h2 id="c1">HTML Атрибуты</h2>
    <ul>
        <li>Все элементы HTML могут иметь <b>атрибуты</b></li>
        <li>Атрибуты предоставляют <b>дополнительную информацию</b> об элементе</li>
        <li>Атрибуты всегда указываются в <b>начальном теге</b></li>
        <li>Атрибуты обычно входят в пары имя/значение, например: <b>имя=&quot;значение&quot;</b></li>
    </ul>
    <hr>
    <h2 id="c2">Атрибут href</h2>
    <p>HTML ссылки определяются с помощью тега <code class="w3-codespan">&lt;a&gt;</code>. Адрес ссылки указывается в атрибуте <code class="w3-codespan">href</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;a href=&quot;https://www.w3schools.com&quot;&gt;Это ссылка&lt;/a&gt;
        </div>
        <a target="_blank" href="../htmltryit/tryit9089.html?filename=tryhtml_attributes_link" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Подробнее о ссылках и теге <code class="w3-codespan">&lt;a&gt;</code> можно узнать в следующих разделах этого учебника.</p>
    <hr>
    <h2 id="c3">Атрибут src</h2>
    <p>HTML изображения определяются с помощью тега <code class="w3-codespan">&lt;img&gt;</code>.</p>
    <p>Имя файла источника изображения указывается в атрибуте <code class="w3-codespan">src</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;img_girl.jpg&quot;&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit3511.html?filename=tryhtml_attributes_img_src" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2 id="c4">Атрибуты width (ширина) и height (высота)</h2>
    <p>&nbsp;HTML изображения также имеют атрибуты <code class="w3-codespan">width</code> (ширина) и <code class="w3-codespan">height</code> (высота), которые определяют ширину и высоту изображения:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;img_girl.jpg&quot; width=&quot;500&quot; height=&quot;600&quot;&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit2a16.html?filename=tryhtml_attributes_img" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Ширина и высота указываются в пикселях по умолчанию; поэтому width=&quot;500&quot; означает ширину 500 пикселей.</p>
    <p>Подробнее об изображениях вы узнаете в главе <a href="html_images.html">HTML Изображения</a>.</p>
    <hr>

    <h2 id="c5">Атрибут alt</h2>
    <p>Атрибут <code class="w3-codespan">alt</code> указывает альтернативный текст, который будет использоваться, если изображение не может быть отображено.</p>
    <p>Значение атрибута <code class="w3-codespan">alt</code> может быть прочитано программами чтения с экрана (скринридерами). Таким образом, можно &quot;прослушивать&quot; веб-страницы, например, человек с нарушениями зрения может &quot;слышать&quot; элемент, т.е. будет знать, что изображено на картинке.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;img_girl.jpg&quot; alt=&quot;Девушка с жакетом&quot;&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit0248.html?filename=tryhtml_attributes_alt" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <div class="w3-panel w3-note">
        <p>Атрибут <code class="w3-codespan">alt</code> также полезен, если изображение не может быть отображено (например, если оно не существует на сайте):</p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Посмотрите, что произойдет, если мы попытаемся отобразить изображение, которое не существует:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;img_typo.jpg&quot; alt=&quot;Девушка с жакетом&quot;&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitc66c.html?filename=tryhtml_attributes_alt_error" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c6">Атрибут style</h2>
    <p>Атрибут <code class="w3-codespan">style</code> используется для указания стиля элемента, такого как цвет, шрифт, размер и т.д.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p style=&quot;color:red&quot;&gt;Это параграф.&lt;/p&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitace5.html?filename=tryhtml_attributes_style" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-note w3-panel">
        <p>Вы узнаете больше о стилизации позже в этом учебнике, и в <a href="../css/index.php">CSS Учебнике</a> на этом сайте.</p>
    </div>
    <hr>

    <h2 id="c7">Атрибут lang</h2>
    <p>Язык документа может быть объявлен в теге <code class="w3-codespan">&lt;html&gt;</code>.</p>
    <p>Язык объявляется с помощью атрибута <code class="w3-codespan">lang</code>.</p>
    <p>Объявление языка важно для приложений с расширенными возможностями (средства чтения с экрана) и поисковых систем:</p>
    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;!DOCTYPE html&gt;<br>&lt;html lang=&quot;en-US&quot;&gt;<br>&lt;body&gt;<br><br>
            ...<br><br>&lt;/body&gt;<br>&lt;/html&gt;
        </div>
    </div>
    <p>Первые две буквы указывают на язык (en). Если есть диалект, добавьте еще две буквы (US, т.е. США).</p>
    <hr>

    <h2 id="c8">Атрибут title</h2>
    <p>Здесь атрибут <code class="w3-codespan">title</code> добавляется к элементу <code class="w3-codespan">&lt;p&gt;</code>. Значение атрибута title будет отображаться в виде всплывающей подсказки при наведении мыши на абзац (параграф):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p title="Я всплывающая подсказка"&gt;<br>Это параграф.<br>&lt;/p&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitf524.html?filename=tryhtml_attributes_title" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c9">Использовать строчные атрибуты (в нижнем регистре)</h2>
    <p>Стандарт HTML5 не требует строчных имен атрибутов.</p>
    <p>Атрибут title может быть написан в верхнем или нижнем регистре, например <strong>title</strong> или <strong>TITLE</strong>.</p>
    <p>W3C <strong>рекомендует</strong> использовать нижний регистр в HTML и <strong>требует</strong> нижний регистр для более строгих типов документов, таких как XHTML.</p>
    <div class="w3-panel w3-note">
        <p>В W3Schools всегда используют имена атрибутов в нижнем регистре.</p>
    </div>
    <hr>

    <h2 id="c10">Мы предлагаем: значения атрибутов брать в кавычки</h2>
    <p>Стандарт HTML5 не требует кавычек вокруг значений атрибутов.</p>
    <p>Значение атрибута <code class="w3-codespan">href</code>, показанного выше, <em>можно</em> писать без кавычек:</p>

    <div class="w3-row-padding" style="margin:-8px -16px">

        <div class="w3-half">
            <div class="w3-example">
                <h3>Плохо</h3>
                <div class="w3-code notranslate htmlHigh" style="border-color:red;white-space: nowrap;overflow: auto">
                    &lt;a href=https://www.w3schools.com&gt;</div>
                <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit37e4.html?filename=tryhtml_attributes_noquotes" target="_blank">Попробуйте сами &raquo;</a>
            </div>

        </div>
        <div class="w3-half">
            <div class="w3-example">
                <h3>Хорошо</h3>
                <div class="w3-code notranslate htmlHigh" style="white-space: nowrap;overflow: auto;">
                    &lt;a href="https://www.w3schools.com"&gt;</div>
                <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit98e5.html?filename=tryhtml_attributes_withquotes" target="_blank">Попробуйте сами &raquo;</a>
            </div>

        </div>

    </div>
    <p>W3C <b>рекомендует</b> кавычки в HTML и <strong>требует</strong> кавычки для более строгих типов документов, например XHTML.</p>
    <p>Иногда <strong>необходимо</strong> использовать кавычки. Этот пример не будет правильно отображать атрибут title, поскольку он содержит пробел:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p title=About W3Schools&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit7640.html?filename=tryhtml_attributes_error" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p>Использование кавычек является наиболее распространенным при написании HTML-кода. Пропуск кавычек может привести к ошибкам. В W3Schools <strong>всегда</strong> используют кавычки вокруг значений атрибутов.</p>
    </div>
    <hr>

    <h2 id="c11">Одинарные или двойные кавычки?</h2>
    <p>Двойные кавычки вокруг значений атрибутов являются наиболее распространенными в HTML, но также можно использовать и одинарные кавычки.</p>
    <p>В некоторых ситуациях, когда само значение атрибута содержит двойные кавычки, необходимо использовать одинарные кавычки:</p>
    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;p title='John &quot;ShotGun&quot; Nelson'&gt;
        </div>
    </div>

    <p>Или наоборот:</p>

    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;p title=&quot;John 'ShotGun' Nelson&quot;&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitb3cb.html?filename=tryhtml_attributes_single_double" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Резюме раздела</h2>
    <ul>
        <li>Все HTML элементы могут иметь <strong>атрибуты</strong></li>
        <li>Атрибут <code class="w3-codespan">title</code> обеспечивает дополнительную информацию в виде &quot;всплывающей подсказки&quot;</li>
        <li>Атрибут <code class="w3-codespan">href</code> предоставляет адресную информацию для ссылок</li>
        <li>Атрибуты <code class="w3-codespan">width</code> и <code class="w3-codespan">height</code> предоставляют информацию о размере изображений</li>
        <li>Атрибут <code class="w3-codespan">alt</code> предоставляет текст для программ чтения с экрана</li>
        <li>В W3Schools всегда используют <strong>строчные</strong> (в нижнем регистре) значения атрибутов</li>
        <li>В W3Schools всегда значения атрибутов в <strong>кавычках</strong></li>
    </ul>
    <hr>
    <h2 id="c12">HTML Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/html/exercise.asp?filename=exercise_html_attributes1" method="post" target="_blank">
        <h2 class="heading">Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Добавьте "всплывающую подсказку" к пункту ниже с текстом "About W3Schools".</p>
            <div class="exerciseprecontainer">
                &lt;p <input name="ex1" maxlength="5" style="width: 54px;">="About W3Schools"&gt;W3Schools is a web developer's site.&lt;/p&gt;
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>

    <h2>HTML Атрибуты</h2>
    <p>Ниже приведен алфавитный список некоторых атрибутов, часто используемых в HTML, о которых вы узнаете больше в этом учебнике:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:15%">Атрибут</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>alt</td>
            <td>Определяет альтернативный текст для изображения, когда изображение не может быть отображено</td>
        </tr>
        <tr>
            <td>disabled</td>
            <td>Указывает, что входной элемент должен быть отключен</td>
        </tr>
        <tr>
            <td>href</td>
            <td>Указывает URL-адрес (веб-адрес) для ссылки</td>
        </tr>
        <tr>
            <td>id</td>
            <td>Указывает уникальный идентификатор элемента</td>
        </tr>
        <tr>
            <td>src</td>
            <td>Указывает URL-адрес (веб-адрес) изображения</td>
        </tr>
        <tr>
            <td>style</td>
            <td>Определяет встроенный CSS стиль для элемента</td>
        </tr>
        <tr>
            <td>title</td>
            <td>Определяет дополнительную информацию про элемент (отображается как всплывающая подсказка)</td>
        </tr>
    </table>
    <div class="w3-note w3-panel">
        <p>Полный список всех атрибутов для каждого <strong>HTML</strong> элемента приведён в:
            <a href="../tags/ref_attributes.php">HTML Справочник атрибутов</a>.</p>
    </div>
    <hr>
    <div class="quest">
        <h3>Вопросы для самоконтроля</h3>
        <ul>
            <li><em>Что такое HTML-атрибуты?</em></li>
            <li><em>Зачем нужны атрибуты HTML-элементам?</em></li>
            <li><em>Где указываются атрибуты?</em></li>
            <li><em>Какие бывают атрибуты?</em></li>
            <li><em>Какой атрибут определяет адрес ссылки?</em></li>
            <li><em>Какой атрибут указывает источник изображения?</em></li>
            <li><em>Какие атрибуты определяют ширину и высоту элемента?</em></li>
            <li><em>Какой атрибут определяет альтернативный текст?</em></li>
            <li><em>Какой атрибут используется для определения стиля элемента?</em></li>
            <li><em>С помощью какого атрибута объявлется язык веб-страницы?</em></li>
            <li><em>С помощью какого атрибута указывается всплывающая подсказка для HTML-элемента?</em></li>
            <li><em>В каком регистре рекомендуется писать имена атрибутов?</em></li>
            <li><em>Нужно ли писать атрибуты в кавычках?</em></li>
            <li><em>Какие кавычки - одинарные или двойные - рекомендуется писать вокруг значений атрибутов?</em></li>
        </ul>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_elements.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_headings.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>