<?php include '../include/head.php'; ?>

  <title>HTML5 Поддержка браузерами. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML5 Поддержка браузерами спецификации HTML5. Новые стандарты. Какие браузеры не поддерживают спецификацию HTML5? <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML5 <span class='color_h1'>Поддержка браузерами</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html5_intro.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_new_elements.php'>Next &#10095;</a>
    </div>
    <hr>
    <p class='intro'>Вы можете научить старые браузеры правильно обрабатывать HTML5.</p>
    <hr>

    <h2>HTML5 Поддержка браузерами</h2>
    <p>HTML5 поддерживается во всех современных браузерах.</p>
    <p>Кроме того, все браузеры, старые и новые, автоматически обрабатывают нераспознанные элементы как встроенные элементы.</p>
    <p>Благодаря этому вы можете &quot;научить&quot; старые браузеры работать с &quot;неизвестными&quot; HTML элементами.</p>
    <div class='w3-panel w3-note'>
      <p>Вы даже можете научить IE6 (Windows XP 2001), как обрабатывать неизвестные элементы HTML.</p>
    </div>
    <hr>

    <h2>Определить семантические элементы как блочные элементы</h2>
    <p>HTML5 определяет восемь новых <strong>семантических</strong> элементов. Все они элементы <strong>блочного уровня</strong>.</p>
    <p>Чтобы обеспечить правильное поведение в старых браузерах, вы можете установить CSS свойство <strong>display</strong> для этих HTML элементов в значение <strong>block</strong>:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate cssHigh'>
        header, section, footer, aside, nav, main, article, figure {<br>
        &nbsp;&nbsp;display: block; <br>
        }
      </div></div>
    <hr>

    <h2>Добавьте новые элементы в HTML</h2>
    <p>Вы также можете добавить новые элементы на страницу HTML с помощью трюка браузера.</p>
    <p>В этом примере добавляется новый элемент с именем <code class='w3-codespan'>&lt;myHero&gt;</code> на страницу HTML и определяется его стиль:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;!DOCTYPE html&gt;<br>
        &lt;html&gt;<br>&lt;head&gt;<br>&lt;script&gt;document.createElement(&quot;myHero&quot;)&lt;/script&gt;<br>&lt;style&gt;<br>myHero {<br>
        &nbsp; display: block;<br>&nbsp; background-color: #dddddd;<br>&nbsp; padding: 50px;<br>&nbsp; font-size: 30px;<br>
        } <br>&lt;/style&gt; <br>&lt;/head&gt;<br>&lt;body&gt;<br><br>
        &lt;h1&gt;A Heading&lt;/h1&gt;<br>
        &lt;myHero&gt;My Hero Element&lt;/myHero&gt;<br>
        <br>
        &lt;/body&gt;<br>
        &lt;/html&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit21d1.html?filename=tryhtml5_browsers_myhero' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>JavaScript объявление <code class='w3-codespan'>document.createElement(&quot;myHero&quot;)</code> необходимо для создания нового элемента в IE 9 и более ранних версиях.</p>
    <hr>

    <h2>Проблема с Internet Explorer 8</h2>
    <p>Вы можете использовать решение, описанное выше для всех новых элементов HTML5.</p>
    <p>Однако <strong>IE8 (и ранее) не допускает стилизацию неизвестных элементов!</strong></p>
    <p>Но, слава Богу, Sjoerd Visscher создал HTML5Shiv! HTML5Shiv - это обходной путь JavaScript для включения стилизации элементов HTML5 в версиях Internet Explorer до версии 9.</p>
    <div class='w3-panel w3-note'>
      <p>Вам будет необходим HTML5shiv для обеспечения совместимости для IE браузеров старших от IE 9</p>
    </div>
    <hr>

    <h2>Синтаксис для HTML5Shiv</h2>
    <p>HTML5Shiv находится в пределах тега <code class='w3-codespan'>&lt;head&gt;</code>.</p>
    <p>HTML5Shiv - это файл JavaScript, на который ссылается тег <code class='w3-codespan'>&lt;script&gt;</code>.</p>
    <p>Вы должны использовать HTML5Shiv, когда вы используете новые элементы HTML5, такие как: <code class='w3-codespan'>&lt;article&gt;</code>, <code class='w3-codespan'>&lt;section&gt;</code>, <code class='w3-codespan'>&lt;aside&gt;</code>, <code class='w3-codespan'>&lt;nav&gt;</code>, <code class='w3-codespan'>&lt;footer&gt;</code>.</p>
    <p>Вы можете <a href='https://github.com/aFarkas/html5shiv' target='_blank'>скачать последнюю версию HTML5shiv из github</a> или добавить ссылку на CDN версию <a href='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js' target='_blank'>https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js</a>, (или альтернативно более новая версия на нашем сайте: <a href='../cdn/html5shiv/3.7.3/html5shiv.js' target='_blank'>html5shiv.js</a>)</p>

    <div class='w3-example'>
      <h3>Синтаксис</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;head&gt;<br>&nbsp;
        &lt;!--[if lt IE 9]&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;script src=&quot;/js/html5shiv.js&quot;&gt;&lt;/script&gt;<br>
        &nbsp;
        &lt;![endif]--&gt;<br>&lt;/head&gt;
      </div>
    </div>
    <hr>

    <h2>HTML5Shiv Пример</h2>
    <p>Если вы не хотите загружать и хранить скрипт HTML5Shiv на своем сайте, вы можете сослаться на версию, указанную на сайте CDN.</p>
    <p>Скрипт HTML5Shiv обычно помещается в элемент <code class='w3-codespan'>&lt;head&gt;</code> после любой таблицы стилей:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;!DOCTYPE html&gt;<br>
        &lt;html&gt;<br>&lt;head&gt;<br>&lt;meta charset=&quot;UTF-8&quot;&gt;<br>&lt;!--[if lt IE 9]&gt;<br>
        &nbsp; &lt;script src=&quot;https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js&quot;&gt;&lt;/script&gt;<br>
        &lt;![endif]--&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>
        &lt;section&gt;<br><br>
        &lt;h1&gt;Famous Cities&lt;/h1&gt;<br><br>&lt;article&gt;<br>&lt;h2&gt;London&lt;/h2&gt;<br>&lt;p&gt;London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.&lt;/p&gt;<br>&lt;/article&gt;<br>
        <br>&lt;article&gt;<br>&lt;h2&gt;Paris&lt;/h2&gt;<br>&lt;p&gt;Paris is the capital and most populous city of France.&lt;/p&gt;<br>&lt;/article&gt;<br><br>&lt;article&gt;<br>&lt;h2&gt;Tokyo&lt;/h2&gt;<br>
        &lt;p&gt;Tokyo is the capital of Japan, the center of the Greater Tokyo Area,
        and the most populous metropolitan area in the world.&lt;/p&gt;<br>&lt;/article&gt;<br>
        <br>&lt;/section&gt;<br>
        <br>
        &lt;/body&gt;<br>
        &lt;/html&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitdc1b.html?filename=tryhtml5_browsers_html5shiv' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p><b>Примечание.</b> Обычно ссылку на скрипт HTML5Shiv размещают в самом конце веб-страницы перед тегом <code class='w3-codespan'>&lt;/body&gt;</code> (для ускорения загрузки страницы).</p>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html5_intro.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_new_elements.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>