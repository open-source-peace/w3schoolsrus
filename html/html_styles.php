<?php include '../include/head.php'; ?>
<title>HTML Стили. <?php include '../include/title.php'; ?></title>
<meta name="description" content="Стили на веб-страницах. Как стилизовать веб-сайт? Как изменить фон, шрифт, цвет, размер и выравнивание текста в HTML документе? Какие бывают семейства шрифтов. <?php include '../include/description.php'; ?>">

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class="color_h1">Стили</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_paragraphs.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_formatting.php">Next &#10095;</a>
    </div>
    <hr>

    <div class="sum">
        <h4>В этой теме:</h4>
        <ul>
            <li><a href="#c1"><em>Style - HTML атрибут стиля</em></a></li>
            <li><a href="#c2"><em>Background Color - Цвет фона</em></a></li>
            <li><a href="#c3"><em>Color - Цвет текста</em></a></li>
            <li><a href="#c4"><em>Font-family - Семейство шрифтов</em></a></li>
            <li><a href="#c5"><em>Font-size - Размер текста</em></a></li>
            <li><a href="#c6"><em>Text-align - Выравнивание текста</em></a></li>
            <li><a href="#c7"><em>HTML упражнения</em></a></li>
        </ul>
    </div>
    <hr>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-container w3-white">
            <p style="font-size:20px;color:red;">I am Red</p>
            <p style="font-size:20px;color:blue;">I am Blue</p>
            <p style="font-size:36px;margin:12px 0">I am Big</p>
        </div>
        <a class="w3-btn w3-margin-top w3-margin-bottom" href="../htmltryit/tryitbed5.html?filename=tryhtml_styles_intro" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c1">Style - HTML атрибут стиля</h2>
    <p>Для визуального оформления html-страницы применяются различные стили элементов.</p>
    <p>Установка стиля HTML элемента может быть сделана с помощью атрибута <code class="w3-codespan">style</code>.</p>
    <p>HTML атрибут <code class="w3-codespan">style</code> имеет следующий <strong>синтаксис</strong>:</p>
    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;<em>название_тега</em>
            style=&quot;<em>свойство</em>:<em>значение;</em>&quot;&gt;
        </div>
    </div>
    <p>где <em><strong>property</strong></em> является CSS свойством, <em><strong>value</strong></em> является CSS значением.</p>
    <div class="w3-note w3-panel">
        <p>Вы узнаете больше про CSS далее в этом учебнике.</p>
    </div>
    <hr>

    <h2 id="c2">Background Color - Цвет фона</h2>
    <p>CSS свойство <code class="w3-codespan">background-color</code> определяет цвет фона для HTML элемента.</p>
    <p>Этот пример устанавливает цвет фона в powderblue (<span style="background: powderblue">темноголубой</span>).</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;body style=&quot;background-color:powderblue;&quot;&gt;<br><br>&lt;h1&gt;Это заголовок&lt;/h1&gt;<br>&lt;p&gt;Это параграф.&lt;/p&gt;<br><br>&lt;/body&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit0aac.html?filename=tryhtml_styles_background-color" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c3">Color - Цвет текста</h2>
    <p>CSS свойство <code class="w3-codespan">color</code> определяет цвет текста для HTML элемента:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;h1 style=&quot;color:blue;&quot;&gt;Это заголовок&lt;/h1&gt;<br>
            &lt;p style=&quot;color:red;&quot;&gt;Это параграф.&lt;/p&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit9990.html?filename=tryhtml_styles_color" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c4">Font-family - Семейство шрифтов</h2>
    <p>CSS свойство <code class="w3-codespan">font-family</code> определяет семейство шрифта, которое используется для HTML элемента:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;h1 style=&quot;font-family:verdana;&quot;&gt;Это заголовок&lt;/h1&gt;<br>&lt;p style=&quot;font-family:courier;&quot;&gt;Это параграф.&lt;/p&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit114d.html?filename=tryhtml_styles_font-family" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c5">Font-size - Размер текста</h2>
    <p>CSS свойство <code class="w3-codespan">font-size</code> определяет размер текста для HTML элемента:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;h1 style=&quot;font-size:300%;&quot;&gt;Это заголовок&lt;/h1&gt;<br>&lt;p
            style=&quot;font-size:160%;&quot;&gt;Это параграф.&lt;/p&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit3d6d.html?filename=tryhtml_styles_font-size" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c6">Text-align - Выравнивание текста</h2>
    <p>CSS свойство <code class="w3-codespan">text-align</code> определяет горизонтальное выравнивание текста для HTML элемента:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;h1 style=&quot;text-align:center;&quot;&gt;Центрирование заголовка&lt;/h1&gt;<br>
            &lt;p style=&quot;text-align:center;&quot;&gt;Центрирование параграфа.&lt;/p&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitb09f.html?filename=tryhtml_styles_text-align" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Резюме раздела</h2>
    <ul>
        <li>Используйте атрибут <code class="w3-codespan">style</code> для стилизации HTML элементов</li>
        <li>Используйте свойство <code class="w3-codespan">background-color</code> для установки цвета фона</li>
        <li>Используйте свойство <code class="w3-codespan">color</code> для установки цвета текста</li>
        <li>Используйте свойство <code class="w3-codespan">font-family</code> для установки семейства шрифтов</li>
        <li>Используйте свойство <code class="w3-codespan">font-size</code> для установки размера текста</li>
        <li>Используйте свойство <code class="w3-codespan">text-align</code> для выравнивания текста</li>
    </ul>
    <hr>
    <h2 id="c7">HTML Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/html/exercise.asp?filename=exercise_html_styles1" method="post" target="_blank">
        <h2>Проверьте себя с помощью упражнений</h2>
        <div class="exercisewindow">
            <h2>Упражнение:</h2>
            <p>Используйте корректный HTML атрибут и CSS, чтобы установить цвет параграфа "blue" (синий).</p>
            <div class="exerciseprecontainer">
                &lt;p <input name="ex1" spellcheck="false" maxlength="5" style="width: 56px;">="<input name="ex2" spellcheck="false" maxlength="10" style="width: 106px;">;"&gt;This is a paragraph.&lt;/p&gt;
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
        </div>
    </form>
    <hr>
    <div class="quest">
        <h3>Вопросы для самоконтроля</h3>
        <ul>
            <li><em>Что такое стилизация HTML-страницы?</em></li>
            <li><em>Какой атрибут определяет стиль HTML-элемента?</em></li>
            <li><em>Какое CSS свойство определяет цвет фона для HTML-элемента?</em></li>
            <li><em>Какое CSS свойство определяет цвет текста для HTML-элемента?</em></li>
            <li><em>Какое CSS свойство определяет семейство шрифта, который используется для HTML-элемента?</em></li>
            <li><em>Какое CSS свойство определяет размер текста для HTML-элемента?</em></li>
            <li><em>Какое CSS свойство определяет горизонтальное выравнивание текста для HTML-элемента?</em></li>
        </ul>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_paragraphs.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_formatting.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>