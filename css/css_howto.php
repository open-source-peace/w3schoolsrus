<?php include '../include/head.php'; ?>
  <title>CSS Как подключить. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Как подключить? Подключение таблицы стилей к HTML-странице. Какие бывают способы подключения каскадных таблиц стилей к веб-странице? Стилизация веб-страниц. Примеры кода. Современный учебник. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>
  <article>
    <h1>&nbsp;<span class='color_h1'>Как подключить CSS</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_selectors.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_comments.php'>Next &#10095;</a>
    </div>
    <hr>
    <p class='intro'>Когда браузер читает таблицу стилей, он форматирует <strong>HTML</strong> документ в соответствии с информацией в таблице стилей.</p>
    <hr>

    <h2>Три способа подключения CSS</h2>
    <p>Существует <strong>три способа подключения таблицы стилей CSS</strong>:</p>
    <ul class='w3-leftbar w3-border w3-border-green' style='padding-top:8px;padding-bottom:8px'>
      <li>Внешняя таблица стилей (External)</li>
      <li>Внутренняя таблица стилей (Internal)</li>
      <li>Встроенный стиль (Inline)</li>
    </ul>
    <hr>

    <h2>Внешняя таблица стилей</h2>
    <p>С помощью внешней таблицы стилей вы можете изменить внешний вид всего сайта, изменив только один файл!</p>
    <p>Каждая HTML страница должна содержать ссылку на файл внешней таблицы стилей внутри элемента <code class='w3-codespan'>&lt;link&gt;</code>.</p>
    <div class='w3-panel w3-note'>
      <p><b>Примечание.</b> Подключение файла внешней таблицы стилей является наиболее распространенным способом использования каскадных таблиц стилей.</p>
    </div>

    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Внешние стили определены в элементе &lt;link&gt; внутри раздела &lt;head&gt; HTML страницы:</p>
      <div class='w3-code notranslate htmlHigh'>
        &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>&lt;link rel=&quot;stylesheet&quot; href=&quot;mystyle.css&quot;&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;h1&gt;Это заголовок&lt;/h1&gt;<br>
        &lt;p&gt;Это параграф.&lt;/p&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;</div>
      <a target='_blank' href='../csstryit/trycss_howto_external.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <p>Внешнюю таблицу стилей можно написать в любом текстовом редакторе (например, в стандартном Блокноте). Файл не должен содержать никаких HTML-тегов. Файл таблицы стилей должен быть сохранен с расширением <em>.css</em>.</p>
    <div class='w3-panel w3-note'>
      <p><b>Примечание:</b> Подробнее о текстовых редакторах, которые можно использовать для написания как HTML-кода, так и CSS-кода, читайте в разделе <a href='../html/html_editors.php'>Редакторы кода</a>.</p>
    </div>
    <p>Вот как выглядит файл 'mystyle.css':</p>
    <div class='w3-example'>
      <h3>&quot;mystyle.css&quot;</h3>
      <div class='w3-code notranslate cssHigh'>
        body {<br>&nbsp;&nbsp;background-color: lightblue;<br>}<br><br>h1 {<br>&nbsp;&nbsp;color: navy;<br>&nbsp;&nbsp;margin-left: 20px;<br>}</div>
    </div>
    <div class='w3-panel w3-warning'>
      <p><strong>Примечание:</strong> Не добавляйте пробел между значением свойства и единицей (например <code class='w3-codespan'>margin-left: 20 px;</code>). Правильно писать: <code class='w3-codespan'>margin-left: 20px;</code></p>
    </div>
    <hr>

    <h2>Внутренняя таблица стилей</h2>
    <p>Внутренняя таблица стилей может использоваться, если одна отдельная HTML страница имеет свой уникальный стиль и этот стиль больше нигде не используется на других страницах.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Внутренние стили определены в элементе &lt;style&gt; внутри раздела &lt;head&gt; HTML страницы:</p>
      <div class='w3-code notranslate htmlHigh'>
        &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>body {<br>&nbsp;
        background-color: linen;<br>}<br><br>h1 {<br>&nbsp; color: maroon;<br>&nbsp;
        margin-left: 40px;<br>} <br>&lt;/style&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;h1&gt;Это заголовок&lt;/h1&gt;<br>&lt;p&gt;Это параграф.&lt;/p&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;</div>
      <a target='_blank' href='../csstryit/trycss_howto_internal.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Встроенные стили</h2>
    <p>Встроенный стиль может использоваться для применения уникального стиля для отдельного элемента на HTML странице.</p>
    <p>Чтобы использовать встроенные стили, добавьте атрибут стиля к соответствующему элементу (тегу). Атрибут <code class='w3-codespan'>style</code> может содержать любое свойство CSS.</p>
    <div class='w3-panel w3-note'>
      <p><b>Примечание.</b> Встроенный стиль необходимо использовать как-можно реже, в крайних случаях, когда нужно выделить отдельный фрагмент текста (словосочетание) только на одной HTML странице. Встроенный стиль перегружает HTML-код и увеличивает общий объем веб-страницы.</p>
    </div>

    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Встроенные стили определяются в атрибуте &quot;style&quot; соответствующего элемента:</p>
      <div class='w3-code notranslate htmlHigh'>
        &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;body&gt;<br><br>&lt;h1 style=&quot;color:blue;text-align:center;&quot;&gt;Это заголовок&lt;/h1&gt;<br>&lt;p style=&quot;color:red;&quot;&gt;Это параграф.&lt;/p&gt;<br><br>
        &lt;/body&gt;<br>&lt;/html&gt;</div>
      <a target='_blank' href='../csstryit/trycss_howto_inline.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <div class='w3-panel w3-note'>
      <p><strong>Примечание:</strong> Встроенный стиль теряет многие из преимуществ таблицы стилей (путем смешивания контента с его визуальным представлением). Используйте этот метод умеренно.</p>
    </div>
    <hr>

    <h2>Несколько таблиц стилей</h2>
    <p>Если некоторые свойства были определены для одного и того же селектора (элемента) в разных таблицах стилей, будет использоваться значение из последней прочитанной таблицы стилей.</p>
    <div class='w3-example'>
      <p>Предположим, что <strong>внешняя таблица стилей</strong> имеет следующий стиль для элемента <code class='w3-codespan'>&lt;h1&gt;</code>:</p>
      <div class='w3-code notranslate cssHigh'>
        h1
        {<br>
        &nbsp;&nbsp;color: navy;<br>
        }</div></div>
    <div class='w3-example'>
      <p>Затем предположим <strong>внутренняя таблица стилей</strong> также имеет следующий стиль для элемента <code class='w3-codespan'>&lt;h1&gt;</code>:</p>
      <div class='w3-code notranslate cssHigh'>
        h1
        {<br>
        &nbsp;&nbsp;color: orange;&nbsp;&nbsp;&nbsp;
        <br>}</div></div>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Если внутренний стиль определен <strong>после</strong> ссылки на внешнюю таблицу стилей, то элемент <code class='w3-codespan'>&lt;h1&gt;</code> будет отображаться '<span style='color:orange'>orange</span>' (оранжевым):</p>
      <div class='w3-code notranslate htmlHigh'>
        &lt;head&gt;<br>&lt;link rel=&quot;stylesheet&quot; href=&quot;mystyle.css&quot;&gt;<br>
        &lt;style&gt;<br>h1 {<br>&nbsp;&nbsp;color: orange;<br>}<br>&lt;/style&gt;<br>&lt;/head&gt;</div>
      <a target='_blank' href='../csstryit/trycss_howto_multiple.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Однако, если внутренний стиль определен <strong>перед</strong> ссылкой на внешнюю таблицу стилей, то <code class='w3-codespan'>&lt;h1&gt;</code> элементы будут &quot;<span style='color:navy'>navy</span>&quot; (тёмно-синего цвета):</p>
      <div class='w3-code notranslate htmlHigh htmlHigh'>
        &lt;head&gt;<br>&lt;style&gt;<br>h1 {<br>&nbsp;&nbsp;color: orange;<br>}<br>&lt;/style&gt;<br>&lt;link rel=&quot;stylesheet&quot; href=&quot;mystyle.css&quot;&gt;<br>
        &lt;/head&gt;</div>
      <a target='_blank' href='../csstryit/trycss_howto_multiple2.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Порядок использования каскадных стилей</h2>
    <p>Какой стиль будет использоваться, если для элемента HTML указано более одного стиля?</p>
    <p>Все стили на странице будут &quot;каскадно&quot; превращаться в новую &quot;виртуальную&quot; таблицу стилей по следующим правилам, где номер один имеет наивысший приоритет:</p>
    <ol>
      <li>Встроенный стиль (внутри элемента HTML)</li>
      <li>Внешние и внутренние таблицы стилей (в разделе head)</li>
      <li>Стиль браузера по умолчанию</li>
    </ol>
    <p>Таким образом, встроенный стиль имеет наивысший приоритет и переопределяет внешние и внутренние стили и настройки браузера по умолчанию.</p>
    <p><a class='w3-btn' href='../csstryit/trycss_howto_cascade.html?filename=trycss_howto_cascade' target='_blank'>Попробуйте сами &raquo;</a></p>
    <hr>

    <div class='w3-container w3-dark-grey w3-padding'>
      <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений!</h2>
      <div class='w3-bar w3-margin-bottom'>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_selectors1' target='_blank'>Упражнение 1 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_selectors2' target='_blank'>Упражнение 2 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_selectors3' target='_blank'>Упражнение 3 &raquo;</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_selectors4' target='_blank'>Упражнение 4 &raquo;</a>
      </div>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_selectors.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_comments.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>