<?php include '../include/head.php'; ?>

<title>HTML5 Синтаксис. Гид по стилю. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML5 Синтаксис. Гид по стилю. Какой должен быть стиль написания кода? Правильний синтаксис согласно новой спецификации. <?php include '../include/description.php'; ?>'>
  <style>
      img.viewport {border:10px solid #f1f1f1;border-radius:3px;}
  </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML5 <span class="color_h1">Гид по стилю и условные обозначения</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html5_semantic_elements.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_entities.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>HTML. Как правильно писать код? Соглашение по кодированию</h2>
    <p>Веб-разработчики часто не уверены в использовании стиля кодирования и синтаксиса в <strong>HTML</strong>.</p>
    <p>Между 2000 и 2010 годами многие веб-разработчики перешли с <strong>HTML</strong> на <strong>XHTML</strong>.</p>
    <p>Начиная с <strong>XHTML</strong> разработчики были вынуждены писать валидный и "хорошо сформированный" код.</p>
    <p><strong>HTML5</strong> является более небрежным, когда идёт речь о проверке (валидации) кода.</p>
    <hr>

    <h2>Будьте разумны и будущее это докажет</h2>
    <p>Последовательное использование определённого стиля облегчает другим понимание вашего <strong>HTML</strong>.</p>
    <p>В будущем программы, такие, как считыватели XML, могут захотеть прочитать ваш <strong>HTML</strong>.</p>
    <p>Использование хорошо сформированного синтаксиса "близкого к XHTML" является разумным выбором.</p>
    <div class="w3-panel w3-note">
      <p>Держите свой код аккуратным, чистым и хорошо сформированным.</p>
    </div>
    <hr>

    <h2>Используйте корректный Doctype</h2>
    <p>Всегда объявляйте Doctype (тип документа) в первой строке документа:</p>
    <div class="w3-example">
      <div class="w3-code notranslate htmlHigh">
        &lt;!DOCTYPE html&gt;</div>
    </div>
    <p>Если вам необходима согласованность с тегами нижнего регистра, вы можете использовать:</p>
    <div class="w3-example">
      <div class="w3-code notranslate htmlHigh">
        &lt;!doctype html&gt;</div>
    </div>
    <hr>

    <h2>Используйте названия в нижнем регистре</h2>
    <p><strong>HTML5</strong> позволяет смешивать большие и маленькие буквы в названиях элементов.</p>
    <p>Мы рекомендуем использовать названия элементов буквами лишь в нижнем регистре, поскольку:</p>
    <ul>
      <li>Смешивание названий буквами в верхнем и нижнем регистре плохо для восприятия</li>
      <li>Разработчики обычно используют названия с помощью букв в нижнем регистре (как в XHTML)</li>
      <li>Нижний регистр выглядит чище</li>
      <li>Буквы в нижнем регистре легче и быстрее писать</li>
    </ul>

    <div class="w3-example">
      <h3>Плохо:</h3>
      <div class="w3-code notranslate htmlHigh" style="border-color:red;">
        &lt;SECTION&gt; <br>&nbsp; &lt;p&gt;This is a paragraph.&lt;/p&gt;<br>&lt;/SECTION&gt;</div>
    </div>

    <div class="w3-example">
      <h3>Очень плохо:</h3>
      <div class="w3-code notranslate htmlHigh" style="border-color:red;">
        &lt;Section&gt; <br>&nbsp; &lt;p&gt;This is a paragraph.&lt;/p&gt;<br>&lt;/SECTION&gt;</div>
    </div>

    <div class="w3-example">
      <h3>Хорошо:</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;section&gt; <br>&nbsp; &lt;p&gt;This is a paragraph.&lt;/p&gt;<br>&lt;/section&gt;</div>
    </div>
    <hr>

    <h2>Закрывайте все HTML элементы</h2>
    <p>В HTML5 нет необходимости закрывать все элементы (например, элемент <code class="w3-codespan">&lt;p&gt;</code>). </p>
    <p>W3C рекомендует закрывать все HTML элементы.</p>
    <div class="w3-example">
      <h3>Плохо:</h3>
      <div class="w3-code notranslate htmlHigh" style="border-color:red;">
        &lt;section&gt;<br>&nbsp; &lt;p&gt;This is a paragraph.<br>&nbsp; &lt;p&gt;This is a paragraph.<br>
        &lt;/section&gt;</div>
    </div>
    <div class="w3-example">
      <h3>Хорошо:</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;section&gt;<br>&nbsp; &lt;p&gt;This is a paragraph.&lt;/p&gt;<br>&nbsp; &lt;p&gt;This is a paragraph.&lt;/p&gt;<br>
        &lt;/section&gt;</div>
    </div>
    <hr>

    <h2>Закрывайте пустые HTML элементы</h2>
    <p>В HTML5 не обязательно закрывать пустые элементы.</p>
    <div class="w3-example">
      <h3>Разрешено:</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;meta charset=&quot;utf-8&quot;&gt;</div>
    </div>
    <div class="w3-example">
      <h3>Также разрешено:</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;meta charset=&quot;utf-8&quot; /&gt;</div>
    </div>

    <p>При этом закрывающая косая черта (/) НЕОБХОДИМА в XHTML и XML.</p>
    <p>Если вы ожидаете, что программное обеспечение XML будет иметь доступ к вашей странице, то стоит сохранить закрытую косую черту (слэш)!</p>
    <hr>
    <h2>Используйте названия атрибутов в нижнем регистре</h2>
    <p>HTML5 позволяет смешивать большие и маленькие буквы в названиях атрибутов.</p>
    <p>W3C рекомендует использовать названия атрибутов в нижнем регистре, поскольку:</p>
    <ul>
      <li>Смешивание букв верхнего и нижнего регистров в названиях плохо воспринимается</li>
      <li>Разработчики обычно используют названия в нижнем регистре (как в XHTML)</li>
      <li>Нижний регистр выглядит чище</li>
      <li>Буквы в нижнем регистре легче и быстрее писать</li>
    </ul>

    <div class="w3-example">
      <h3>Плохо:</h3>
      <div class="w3-code notranslate htmlHigh" style="border-color:red;">
        &lt;div CLASS=&quot;menu&quot;&gt;</div>
    </div>
    <div class="w3-example">
      <h3>Хорошо:</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;div
        class=&quot;menu&quot;&gt;</div>
    </div>
    <hr>

    <h2>Значение атрибутов в кавычках</h2>
    <p>HTML5 позволяет писать значение атрибутов без кавычек.</p>
    <p>W3C рекомендует писать значение атрибутов в кавычках, поскольку:</p>
    <ul>
      <li>Разработчики обычно пишут значение атрибутов в кавычках (как в XHTML)</li>
      <li>Значение в кавычках легче читать</li>
      <li>Если значение содержит пробелы, вы ДОЛЖНЫ использовать кавычки</li>
    </ul>

    <div class="w3-example">
      <h3>Очень плохо:</h3>
      <p>Это не будет работать, поскольку значение содержит пробелы:</p>
      <div class="w3-code notranslate htmlHigh" style="border-color:red;">
        &lt;table class=table striped&gt;</div>
    </div>

    <div class="w3-example">
      <h3>Плохо:</h3>
      <div class="w3-code notranslate htmlHigh" style="border-color:red;">
        &lt;table class=striped&gt;</div>
    </div>
    <div class="w3-example">
      <h3>Хорошо:</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;table class=&quot;striped&quot;&gt;</div>
    </div>
    <hr>

    <h2>Атрибуты изображения</h2>
    <p>Всегда добавляйте атрибут <code class="w3-codespan">alt</code> к изображениям. Этот атрибут является важным, когда изображение по какой-то причине не может быть отображено. Также всегда определяйте ширину и высоту изображения. Это уменьшает мерцание, поскольку браузер может резервировать пространство для изображения перед загрузкой.</p>
    <div class="w3-example">
      <h3>Плохо:</h3>
      <div class="w3-code notranslate htmlHigh" style="border-color:red;">
        &lt;img src=&quot;html5.gif&quot;&gt;</div>
    </div>
    <div class="w3-example">
      <h3>Хорошо:</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;img src=&quot;html5.gif&quot; alt=&quot;HTML5&quot; style=&quot;width:128px;height:128px&quot;&gt;</div>
    </div>
    <hr>

    <h2>Пробелы и знаки равенства</h2>
    <p>HTML5 позволяет размещать пробелы вокруг знаков равенства. Но проще читать, когда объекты сгруппированы вместе.</p>
    <div class="w3-example">
      <h3>Плохо:</h3>
      <div class="w3-code notranslate htmlHigh" style="border-color:red;">
        &lt;link rel = &quot;stylesheet&quot; href = &quot;styles.css&quot;&gt;</div>
    </div>
    <div class="w3-example">
      <h3>Хорошо:</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;link rel=&quot;stylesheet&quot; href=&quot;styles.css&quot;&gt;</div>
    </div>
    <hr>

    <h2>Избегайте длинных строк кода</h2>
    <p>Используя редактор HTML, неудобно прокручивать влево и вправо, чтобы читать HTML-код.</p>
    <p>Старайтесь избегать строк кода длиной больше 80 символов.</p>
    <hr>
    <h2>Пустые строки и отступ</h2>
    <p>Не добавляйте пустые строки без крайней необходимости.</p>
    <p>Для удобства чтения добавляйте пустые строки для разделения больших или логических блоков кода.</p>
    <p>Для удобства чтения добавьте два пробела отступа. Не используйте клавишу табуляции.</p>
    <p>Не используйте ненужные пустые строки и отступы. Нет необходимости делать отступы для каждого элемента:</p>
    <div class="w3-example">
      <h3>Не желательно:</h3>
      <div class="w3-code notranslate htmlHigh" style="border-color:orange;">
        &lt;body&gt;<br><br>&nbsp; &lt;h1&gt;Famous Cities&lt;/h1&gt;<br><br>&nbsp; &lt;h2&gt;Tokyo&lt;/h2&gt;<br>
        <br>&nbsp; &lt;p&gt;<br>&nbsp;&nbsp;&nbsp; Tokyo is the capital of Japan, the
        center of the Greater Tokyo Area,<br>&nbsp;&nbsp;&nbsp; and the most
        populous metropolitan area in the world.<br>&nbsp;&nbsp;&nbsp; It is the
        seat of the Japanese government and the Imperial Palace,<br>&nbsp;&nbsp;&nbsp;
        and the home of the Japanese Imperial Family.<br>&nbsp; &lt;/p&gt;<br><br>&lt;/body&gt;</div>
    </div>
    <div class="w3-example">
      <h3>Лучше:</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;body&gt;<br><br>&lt;h1&gt;Famous Cities&lt;/h1&gt;<br><br>&lt;h2&gt;Tokyo&lt;/h2&gt;<br>&lt;p&gt;Tokyo is the capital of Japan, the center of the Greater Tokyo Area,<br>and the most populous metropolitan area in the world.<br>It is the seat of the Japanese government and the Imperial Palace,<br>and the home of the Japanese Imperial Family.&lt;/p&gt;<br><br>&lt;/body&gt;</div>
    </div>

    <div class="w3-example">
      <h3>Пример таблицы:</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;table&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Name&lt;/th&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;th&gt;Description&lt;/th&gt;<br>
        &nbsp;
        &lt;/tr&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;A&lt;/td&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;td&gt;Description of A&lt;/td&gt;<br>
        &nbsp;
        &lt;/tr&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;B&lt;/td&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;td&gt;Description of B&lt;/td&gt;<br>&nbsp; &lt;/tr&gt;<br>&lt;/table&gt;</div>
    </div>
    <div class="w3-example">
      <h3>Пример списка:</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;ul&gt;<br>&nbsp; &lt;li&gt;London&lt;/li&gt;<br>&nbsp; &lt;li&gt;Paris&lt;/li&gt;<br>
        &nbsp;
        &lt;li&gt;Tokyo&lt;/li&gt;<br>&lt;/ul&gt;</div>
    </div>
    <hr>

    <h2>Опускать ли &lt;html&gt; и &lt;body&gt;?</h2>
    <p>В HTML5 тег <code class="w3-codespan">&lt;html&gt;</code> и тег <code class="w3-codespan">&lt;body&gt;</code> могут быть опущены (не указываться).</p>
    <p>Следующий код без указания <b>body</b> будет считаться валидным согласно спецификации HTML5:</p>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;!DOCTYPE html&gt;<br>&lt;head&gt;<br>&nbsp; &lt;title&gt;Page Title&lt;/title&gt;<br>
        &lt;/head&gt;<br>
        <br>
        &lt;h1&gt;This is a heading&lt;/h1&gt;<br>&lt;p&gt;This is a paragraph.&lt;/p&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitd2bb.html?filename=tryhtml_syntax_nobody" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p><strong>Однако мы не рекомендуем опускать теги <code class="w3-codespan">&lt;html&gt;</code> и <code class="w3-codespan">&lt;body&gt;</code>.</strong></p>
    <p>Элемент <code class="w3-codespan">&lt;html&gt;</code> указывает загрузку HTML-документа. Также это рекомендуемое место для определения языка страницы:</p>
    <div class="w3-example">
      <div class="w3-code notranslate htmlHigh">
        &lt;!DOCTYPE html&gt;<br>&lt;html lang=&quot;en-US&quot;&gt;</div>
    </div>
    <p>Объявление языка страницы имеет важное значение для программ с доступностью (программы для чтения с экрана) и поисковых систем.</p>
    <p>Опускание <code class="w3-codespan">&lt;html&gt;</code> или <code class="w3-codespan">&lt;body&gt;</code> может обрушить DOM и программное обеспечение XML.</p>
    <p>Опускание <code class="w3-codespan">&lt;body&gt;</code> может вызвать ошибки в старых браузерах (например, IE9).</p>
    <hr>

    <h2>Опускать ли &lt;head&gt;?</h2>
    <p>В HTML5 тег <code class="w3-codespan">&lt;head&gt;</code> также может быть опущен.</p>
    <p>По умолчанию браузеры будут добавлять все элементы, которые находятся перед <code class="w3-codespan">&lt;body&gt;</code> до <code class="w3-codespan">&lt;head&gt;</code> элемента.</p>
    <p>Вы можете упростить HTML, опустив тег <code class="w3-codespan">&lt;head&gt;</code>:</p>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;title&gt;Page Title&lt;/title&gt;<br>
        <br>&lt;body&gt;<br>&nbsp; &lt;h1&gt;This is a heading&lt;/h1&gt;<br>&nbsp; &lt;p&gt;This is a paragraph.&lt;/p&gt;<br>
        &lt;/body&gt;<br><br>&lt;/html&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitbc26.html?filename=tryhtml_syntax_nohead" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p><strong>Однако мы не рекомендуем опускать тег <code class="w3-codespan">&lt;head&gt;</code>.</strong></p>
    <div class="w3-panel w3-note">
      <p>Опускание тегов неизвестно для веб-разработчиков. Необходимо время, чтобы это стало основным стандартом.</p>
    </div>
    <hr>

    <h2>Метаданные</h2>
    <p><strong>Элемент <code class="w3-codespan">&lt;title&gt;</code> обязателен в HTML5</strong>. Необходимо указывать название страницы как можно более точным и содержательным (в соответствие из содержимым страницы). Это помогает поисковым роботам находить нужную информацию на сайте:</p>
    <div class="w3-example">
      <div class="w3-code notranslate htmlHigh">
        &lt;title&gt;HTML5 Syntax and Coding Style&lt;/title&gt;</div>
    </div>

    <p>Для обеспечения надлежащей интерпретации и правильного индексирования поисковыми системами, как язык страницы, так и кодирование символов должны быть определены как можно раньше в документе:</p>
    <div class="w3-example">
      <div class="w3-code notranslate htmlHigh">
        &lt;!DOCTYPE html&gt;<br>&lt;html
        lang=&quot;en-US&quot;&gt;<br>&lt;head&gt;<br>&nbsp; &lt;meta charset=&quot;UTF-8&quot;&gt;<br>&nbsp; &lt;title&gt;HTML5 Syntax and Coding Style&lt;/title&gt;<br>&lt;/head&gt;</div>
    </div>
    <hr>

    <h2>Настройка окна просмотра - Viewport</h2>
    <p>В HTML5 появился метод, который позволил веб-дизайнерам взять под свой контроль окно просмотра с помощью тега <code class="w3-codespan">&lt;meta&gt;</code>.</p>
    <p>Окно просмотра (viewport) - видимая область пользователя веб-страницы. Она меняется в зависимости от устройства и будет меньше на мобильном телефоне, чем на экране компьютера.</p>
    <p>Вам следует включить следующий элемент <code class="w3-codespan">&lt;meta&gt;</code> на ваших веб-страницах:</p>
    <div class="w3-code w3-border notranslate htmlHigh">
      <div>
        &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
      </div>
    </div>
    <p>Элемент <code class="w3-codespan">&lt;meta&gt;</code> viewport предоставляет инструкции браузеру, как контролировать размеры и масштабирование страницы.</p>
    <p>Часть width=device-width устанавливает ширину страницы, чтобы она соответствовала ширине экрана устройства (которая зависит от устройства).</p>
    <p>Часть initial-scale=1.0 устанавливает начальный уровень масштабирования, когда страница сначала загружается браузером. Единица означает масштаб в 100%.</p>
    <p>Вот пример веб-страницы <em>без</em> viewport метатега, и той же веб-страницы <em>из</em> viewport метатегом:</p>
    <div class="w3-note w3-panel">
      <p><strong>Совет:</strong> Если вы просматриваете эту страницу с помощью телефона или планшета, можно нажать две ссылки ниже, чтобы увидеть разницу.</p>
    </div>
    <br>
    <div class="w3-row" style="text-align:center;">
      <div class="w3-half">
        <a target="_blank" href="example_withoutviewport.html"><img src="../images/img_viewport1.png" class="w3-hover-shadow viewport" alt="Пример без метатега viewport"><br><br><b>Без метатега viewport</b></a>
        <br>
        <br>
      </div>
      <div class="w3-half">
        <a target="_blank" href="example_withviewport.html"><img src="../images/img_viewport2.png" class="w3-hover-shadow viewport" alt="Пример из метатегом viewport"><br><br><b>Из метатегом viewport</b></a>
        <br>
        <br>
      </div>
    </div>
    <hr>

    <h2>HTML Комментарии</h2>
    <p>Короткие комментарии должны быть написани на одной строке:</p>
    <div class="w3-example">
      <div class="w3-code notranslate htmlHigh">
        &lt;!-- Это комментарий --&gt;
      </div>
    </div>
    <p>Комментарии, которые охватывают более одной строки, должны быть написаны так:</p>
    <div class="w3-example">
      <div class="w3-code notranslate htmlHigh">
        &lt;!-- <br>&nbsp; Это пример длинных комментариев. Это пример длинных комментариев.<br>&nbsp; Это пример длинных комментариев. Это пример длинных комментариев.<br>--&gt;
      </div>
    </div>
    <p>Длинные комментарии легче увидеть, если они имеют отступ в два пробела.</p>
    <hr>

    <h2>Таблица стилей</h2>
    <p>Используйте простой синтаксис для ссылки на таблицы стилей (атрибут type не является необходимым):</p>
    <div class="w3-example">
      <div class="w3-code notranslate htmlHigh">
        &lt;link rel=&quot;stylesheet&quot; href=&quot;styles.css&quot;&gt;
      </div>
    </div>
    <p>Короткие правила стиля могут быть написаны кратко:</p>
    <div class="w3-example">
      <div class="w3-code notranslate cssHigh">
        p.intro {font-family: Verdana; font-size: 16em;}</div>
    </div>

    <p>Длинные правила стиля лучше писать на нескольких строках:</p>
    <div class="w3-example">
      <div class="w3-code notranslate cssHigh">
        body {<br>&nbsp; background-color: lightgrey;<br>&nbsp; font-family: &quot;Arial
        Black&quot;, Helvetica, sans-serif;<br>&nbsp; font-size: 16em;<br>&nbsp; color:
        black;<br>}</div>
    </div>

    <ul>
      <li>Разместите открывающую скобку на той же строке, что и селектор</li>
      <li>Используйте один пробел перед открывающей скобкой</li>
      <li>Используйте два пробела для отступа</li>
      <li>Используйте точку с запятой после каждой пары свойства-значения, включая последнюю</li>
      <li>Используйте всегда кавычки вокруг значений, если значение содержит пробелы</li>
      <li>Поместите закрывающую скобку на новую строку, без сопутствующих пробелов</li>
      <li>Избегайте строк более 80 символов</li>
    </ul>
    <hr>
    <h2>Подключение JavaScript в HTML</h2>
    <p>Используйте простой синтаксис для подключения внешних скриптов (атрибут type не нужен):</p>

    <div class="w3-example">
      <div class="w3-code notranslate htmlHigh">
        &lt;script src=&quot;myscript.js&quot;&gt;
      </div>
    </div>
    <hr>
    <h2>Доступ к элементам HTML с помощью JavaScript</h2>
    <p>Следствием использования "нечистых" стилей HTML может стать ошибка JavaScript.</p>
    <p>Эти два оператора JavaScript дадут разные результаты:</p>

    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate jsHigh">
        var obj = getElementById(&quot;Demo&quot;)<br><br>var obj = getElementById(&quot;demo&quot;)
      </div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit1e1a.html?filename=tryhtml_syntax_javascript" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Посетите раздел <a href="../js/js_conventions.php">JavaScript Гид по стилю</a> на нашем сайте <strong>W3Schools на русском</strong>.</p>
    <hr>

    <h2>Используйте имена файлов в нижнем регистре</h2>
    <p>Некоторые веб-серверы (Apache, Unix) чувствительны к регистру имен файлов: "london.jpg" не доступен как "London.jpg".</p>
    <p>Другие веб-серверы (Microsoft, IIS) не чувствительны к регистру: "london.jpg" доступен как "London.jpg", так и в качестве "london.jpg".</p>
    <p>Если вы используете смесь верхнего и нижнего регистра, вы должны быть очень последовательными.</p>
    <p>Если вы перейдете с нечувствительного к регистру сервера на чувствительный к регистру сервер, то даже небольшие ошибки сломают вашу сеть!</p>
    <p>Чтобы избежать этих проблем, всегда используйте имена файлов в нижнем регистре.</p>
    <hr>
    <h2>Расширение файлов</h2>
    <p>HTML файлы всегда должны иметь расширение <strong>.html</strong> или <strong>.htm</strong>.</p>
    <p>CSS файлы должны иметь расширение <strong>.css</strong>.</p>
    <p>JavaScript файлы должны иметь расширение <strong>.js</strong>.</p>
    <hr>

    <h2>Разница между .htm и .html</h2>
    <p>Нет разницы между расширениями .htm и .html. Оба расширения веб-браузерами или веб-серверами будут рассматриваться как HTML.</p>
    <p>Отличия культурные:</p>
    <p>.htm &quot;чувствуют&quot; ранние системы DOS, где система ограничивала расширение до 3 символов.</p>
    <p>.html &quot;чувствуют&quot; операционные системы Unix, которые не имеют этого ограничения.</p>
    <hr>

    <h2>Технические отличия</h2>
    <p>Если URL-адрес не указывает имя файла (например, <a href="https://www.w3schools.com/css/" target="_blank" rel="nofollow">https://www.w3schools.com/css/</a>), сервер возвращает имя файла по умолчанию. Общие названия файлов по умолчанию - index.html, index.htm, default.html и default.htm.</p>
    <p>Если ваш сервер настроен лишь для работы с &quot;index.html&quot; как типичным (стандартным - по умолчанию) именем файла, ваш файл должен быть назван &quot;index.html&quot;, а не &quot;index.htm&quot; (или &quot;default.html&quot;).</p>
    <p>Однако, серверы могут быть настроены на более чем одно имя файла по умолчанию, и обычно вы можете установить столько названий файлов по умолчанию, сколько необходимо.</p>
    <p>Так или иначе, полное расширение для HTML-файлов .html, и нет никаких причин его не использовать.</p>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html5_semantic_elements.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_entities.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>