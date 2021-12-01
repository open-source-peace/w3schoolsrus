<?php include '../include/head.php'; ?>

  <title>HTML Объекты. Плагины. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML Объекты. Плагины. Дополнительные модули на сайте. Что такое плагины? Для чего нужны и как используются дополнительные модули на сайте? Как добавить плагин на веб-страницу? <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML <span class='color_h1'>Плагины (дополнительные модули)</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html5_audio.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_youtube.php'>Next &#10095;</a>
    </div>
    <hr>
    <h2>Для чего нужны плагины?</h2>
    <p class='intro'>Задача плагина - это расширение функциональности веб-браузера.</p>
    <hr>
    <h2>HTML Помощники. Что такое плагин?</h2>
    <p><strong>Плагины</strong> (вспомогательные приложения) - это компьютерные программы, которые расширяют стандартную функциональность веб-браузера.</p>
    <p>Примерами известных плагинов являются Java-апплеты.</p>
    <p>Плагины можно добавлять к веб-страницам с помощью тега <code class='w3-codespan'>&lt;object&gt;</code> или тега <code class='w3-codespan'>&lt;embed&gt;</code>.</p>
    <p>Плагины можно использовать для многих целей: отображения карт, поиска вирусов, проверки вашего банковского идентификатора и т.д.</p>
    <div class='w3-panel w3-note'>
      <p>Чтобы отобразить видео и аудио: используйте <code class='w3-codespan'>&lt;video&gt;</code> и <code class='w3-codespan'>&lt;audio&gt;</code> теги.</p>
    </div>
    <hr>
    <h2>Элемент &lt;object&gt; (объект)</h2>
    <p>Элемент <code class='w3-codespan'>&lt;object&gt;</code> поддерживается всеми браузерами.</p>
    <p>Элемент <code class='w3-codespan'>&lt;object&gt;</code> определяет встроенный объект в документе HTML.</p>
    <p>Он используется для встраивания плагинов (например, Java-апплетов, PDF-ридеров, Flash-плееров) в веб-страницы.</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;object width=&quot;400&quot; height=&quot;50&quot; data=&quot;bookmark.swf&quot;&gt;&lt;/object&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit68c2.html?filename=tryhtml_object_plugin' target='_blank'>Попробуйте сами &raquo;</a>

    </div>
    <p>Элемент <code class='w3-codespan'>&lt;object&gt;</code> также может быть использован для включения HTML в HTML:</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;object width=&quot;100%&quot; height=&quot;500px&quot; data=&quot;snippet.html&quot;&gt;&lt;/object&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit7c9e.html?filename=tryhtml_object_html' target='_blank'>Попробуйте сами &raquo;</a>

    </div>
    <p>Или изображение, если хотите:</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;object data=&quot;audi.jpeg&quot;&gt;&lt;/object&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitde58.html?filename=tryhtml_object_image' target='_blank'>Попробуйте сами &raquo;</a>

    </div>
    <hr>

    <h2>Элемент &lt;embed&gt;</h2>
    <p>Элемент <code class='w3-codespan'>&lt;embed&gt;</code> поддерживается во всех основных браузерах.</p>
    <p>Элемент <code class='w3-codespan'>&lt;embed&gt;</code> также определяет встроенный объект в HTML документе.</p>
    <p>Веб-браузеры поддерживали элемент &lt;embed&gt; длительное время. Хотя он не был частью спецификации HTML до спецификации HTML5.</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;embed width=&quot;400&quot; height=&quot;50&quot; src=&quot;bookmark.swf&quot;&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit4ddb.html?filename=tryhtml_embed_plugin' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-panel w3-note'>
      <p>Обратите внимание, что элемент <code class='w3-codespan'>&lt;embed&gt;</code> не имеет закрывающего тега. Он не может содержать альтернативного текста.</p>
    </div>
    <p>Элемент <code class='w3-codespan'>&lt;embed&gt;</code> также можно использовать для включения HTML в HTML:</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;embed width=&quot;100%&quot; height=&quot;500px&quot; src=&quot;snippet.html&quot;&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitb966.html?filename=tryhtml_embed_html' target='_blank'>Попробуйте сами &raquo;</a>

    </div>
    <p>Или изображение, если хотите:</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;embed src=&quot;audi.jpeg&quot;&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitf824.html?filename=tryhtml_embed_image' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html5_audio.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_youtube.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>