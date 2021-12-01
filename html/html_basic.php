<?php include '../include/head.php'; ?>
<title>HTML Основные примеры. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Основные примеры. Как создать: заголовки, параграфы, ссылки, кнопки, списки. Как вставить изображение на веб-странице? <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class='color_h1'>Основные примеры</span></h1>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='html_editors.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='html_elements.php'>Next &#10095;</a>
    </div>
    <hr>

    <div class='sum'>
        <h4>В этой теме: &darr;</h4>
        <ul>
            <li><a href='#c1'><em>HTML документы. Объявление <code class='w3-codespan'>&lt;!DOCTYPE html&gt;</code>, теги <code class='w3-codespan'>&lt;html&gt;</code>, <code class='w3-codespan'>&lt;body&gt;</code></em></a></li>
            <li><a href='#c2'><em>HTML заголовки. Теги <code class='w3-codespan'>&lt;h1&gt;</code> - <code class='w3-codespan'>&lt;h6&gt;</code></em></a></li>
            <li><a href='#c3'><em>HTML параграфы. Тег <code class='w3-codespan'>&lt;p&gt;</code></em></a></li>
            <li><a href='#c4'><em>HTML ссылки. Тег <code class='w3-codespan'>&lt;a&gt;</code></em></a></li>
            <li><a href='#c5'><em>HTML изображения. Тег <code class='w3-codespan'>&lt;img&gt;</code></em></a></li>
            <li><a href='#c6'><em>HTML кнопки. Тег <code class='w3-codespan'>&lt;button&gt;</code></em></a></li>
            <li><a href='#c7'><em>HTML списки. Теги <code class='w3-codespan'>&lt;ul&gt;</code>, <code class='w3-codespan'>&lt;ol&gt;</code>, <code class='w3-codespan'>&lt;li&gt;</code></em></a></li>
        </ul>
    </div>
    <hr>

    <p class='intro'>Не беспокойтесь, если в этих примерах используются <strong>теги</strong>, которые вы ещё не изучили.</p>
    <p class='intro'>О них вы узнаете в следующих главах.</p>
    <hr>
    <h2 id='c1'>HTML Документы</h2>
    <p>Все веб-страницы являются <strong>HTML-документами</strong>.</p>
    <p>Все <strong>HTML документы</strong> согласно спецификации HTML5 должны начинаться с объявления типа документа: <code class='w3-codespan'>&lt;!DOCTYPE html&gt;</code>.</p>
    <p>Сам HTML документ начинается тегом <code class='w3-codespan'>&lt;html&gt;</code> и заканчивается тегом <code class='w3-codespan'>&lt;/html&gt;</code>.</p>
    <p>Видимая часть HTML документа находится между <code class='w3-codespan'>&lt;body&gt;</code> и <code class='w3-codespan'>&lt;/body&gt;</code>.</p>
    <p><strong>Body</strong> от анг. - тело веб-страницы.</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;!DOCTYPE html&gt;<br>
            &lt;html&gt;<br>
            &lt;body&gt;<br>
            <br>
            &lt;h1&gt;Мой первый заголовок&lt;/h1&gt;<br>
            &lt;p&gt;Мой первый параграф.&lt;/p&gt;<br>
            <br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div><a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit86f8.html?filename=tryhtml_basic_document' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2 id='c2'>HTML Заголовки</h2>
    <p><strong>HTML заголовки</strong> (от анг. <strong>header</strong>) определяются с помощью тегов от <code class='w3-codespan'>&lt;h1&gt;</code> до <code class='w3-codespan'>&lt;h6&gt;</code>.</p>
    <p>Тегом <code class='w3-codespan'>&lt;h1&gt;</code> определяются наиболее важные заголовки. Тегом <code class='w3-codespan'>&lt;h6&gt;</code> определяются наименее важные заголовки.</p>
    <p>Визуально - заголовки <b>h1</b> являются самыми большими, а заголовки <b>h6</b> - самыми маленькими.</p>

    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;h1&gt;Это заголовок 1&lt;/h1&gt;<br>
            &lt;h2&gt;Это заголовок 2&lt;/h2&gt;<br>
            &lt;h3&gt;Это заголовок 3&lt;/h3&gt;
        </div><a class='w3-btn w3-margin-bottom' href='../htmltryit/tryiteebd.html?filename=tryhtml_basic_headings' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2 id='c3'>HTML Параграфы (абзацы)</h2>
    <p><strong>HTML параграфы</strong> определяются с помощью тега <code class='w3-codespan'>&lt;p&gt;</code>:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;p&gt;Это параграф.&lt;/p&gt;<br>
            &lt;p&gt;Это другой параграф.&lt;/p&gt;
        </div><a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitb3f8.html?filename=tryhtml_basic_paragraphs' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p><b>Примечание.</b> В русском языке слово <strong>paragraph</strong> обычно переводится как <strong>абзац</strong>. Но для удобства в среде разработчиков принято использовать слово <strong>параграф</strong>, чтобы не было путаницы.</p>
    <hr>
    <h2 id='c4'>HTML Ссылки</h2>
    <p><strong>HTML ссылки</strong> определяются с помощью тега <code class='w3-codespan'>&lt;a&gt;</code> (от анг. <i>anchor - якорь</i>):</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;a href=&quot;https://www.w3schools.com&quot;&gt;Это ссылка&lt;/a&gt;
        </div><a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit6dd1.html?filename=tryhtml_basic_link' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>Назначение ссылки указывается в атрибуте <code class='w3-codespan'>href</code> (от анг. hyper refferal - гипернаправление).</p>
    <p>Атрибуты используются для предоставления дополнительной информации об элементах HTML. Атрибут <code class='w3-codespan'>href</code> для тега <code class='w3-codespan'>&lt;a&gt;</code> является <strong>обязательным</strong>.</p>
    <p>Подробнее об атрибутах вы узнаете в следующем уроке.</p>
    <hr>
    <h2 id='c5'>HTML Изображения</h2>
    <p><strong>HTML изображения</strong> определяются с помощью тега <code class='w3-codespan'>&lt;img&gt;</code> (от анг. <i>image - изображение</i>).</p>
    <p>Исходный файл <code class='w3-codespan'>src</code>, альтернативный текст <code class='w3-codespan'>alt</code>, ширина <code class='w3-codespan'>width</code> и высота <code class='w3-codespan'>height</code> предоставляются в качестве атрибутов:</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;img src=&quot;w3schools.jpg&quot; alt=&quot;W3Schools.com&quot; width=&quot;104&quot; height=&quot;142&quot;&gt;
        </div><a class='w3-btn w3-margin-bottom' href='../htmltryit/tryita61a.html?filename=tryhtml_basic_img' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>Атрибуты <code class='w3-codespan'>src</code> (от анг. <i>source - ресурс</i>) и <code class='w3-codespan'>alt</code> (от анг. <i>alternative - альтернативный</i>) являются обязательными для тега <code class='w3-codespan'>&lt;img&gt;</code>. Атрибуты размеров картинки (<i>width</i> и <i>height</i>) являются не обязательными.</p>
    <hr>
    <h2 id='c6'>HTML Кнопки</h2>
    <p><strong>HTML кнопки</strong> определяются с помощью тега <code class='w3-codespan'>&lt;button&gt;</code> (от анг. <i>button - кнопка</i>):</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;button&gt;Нажмите меня&lt;/button&gt;
        </div><a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitc136.html?filename=tryhtml_button_basic' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2 id='c7'>HTML Списки</h2>
    <p><strong>HTML списки</strong> определяются с помощью тегов <code class='w3-codespan'>&lt;ul&gt;</code> (от анг. unordered list - неупорядоченный/маркированный список) или <code class='w3-codespan'>&lt;ol&gt;</code> (от анг. ordered list - упорядоченный/нумерованный список), с последующими тегами <code class='w3-codespan'>&lt;li&gt;</code> (list items - пункты списка):</p>
    <div class='w3-example'>
        <h3>Пример</h3>
        <div class='w3-code notranslate htmlHigh'>
            &lt;ul&gt;<br>
            &nbsp; &lt;li&gt;Кофе&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Чай&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Молоко&lt;/li&gt;<br>
            &lt;/ul&gt;<br>
            <br>
            &lt;ol&gt;<br>
            &nbsp; &lt;li&gt;Кофе&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Чай&lt;/li&gt;<br>
            &nbsp; &lt;li&gt;Молоко&lt;/li&gt;<br>
            &lt;/ol&gt;
        </div><a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit02f9.html?filename=tryhtml_lists_intro' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>Подробнее об этих и других HTML-элементах вы узнаете в следующих главах данного учебника.</p>
    <hr>
    <div class='videowrap'>
        <h2>HTML Основные примеры. W3Schools на русском. Уроки для начинающих</h2>
        <div class='videoblock'>
            <iframe src='https://www.youtube.com/embed/dt9KOY1EiY4' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
        </div>
        <p>HTML Основные примеры. Видеоуроки сайта <strong>W3Schools на русском</strong>!</p>
    </div>
    <hr>

    <div class='quest'>
        <h3>Вопросы для самоконтроля</h3>
        <ul>
            <li><em>Что такое HTML-документы?</em></li>
            <li><em>Что такое HTML-элементы?</em></li>
            <li><em>Что такое тип документа?</em></li>
            <li><em>Что такое HTML-заголовки?</em></li>
            <li><em>Что такое HTML-параграфы (абзацы)?</em></li>
            <li><em>Что такое HTML-ссылки?</em></li>
            <li><em>Что такое HTML-изображения?</em></li>
            <li><em>Что такое HTML-кнопки?</em></li>
            <li><em>Что такое HTML-списки?</em></li>
        </ul>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='html_editors.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='html_elements.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>