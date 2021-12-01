<?php include '../include/head.php'; ?>

<title>JavaScript Учебник. Установка. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Установка и подключение к странице. Основы языка программирования JavaScript. Примеры кода. Как подключить JavaScript? <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
  <h1>JavaScript <span class='color_h1'>Установка</span></h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='js_intro.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='js_output.php'>Next &#10095;</a>
  </div>
  <hr>

  <h2>Как подключить JavaScript? Тег &lt;script&gt;</h2>
  <p>На HTML-странице <strong>JavaScript код</strong> должен быть вставлен между тегами <code class='w3-codespan'>&lt;script&gt;</code> и <code class='w3-codespan'>&lt;/script&gt;</code>.</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate htmlHigh'>
      &lt;script&gt;<br>
      document.getElementById(&quot;demo&quot;).innerHTML = &quot;Мой первый JavaScript&quot;;<br>
      &lt;/script&gt;
    </div>
    <p>
      <a class='w3-btn' href='../jstryit/tryjs_whereto.html' target='_blank'>Попробуйте сами &raquo;</a>
    </p>
  </div>

  <div class='w3-panel w3-note'>
    <p>Старые примеры JavaScript могут использовать атрибут <code class='w3-codespan'>type</code> с таким написанием: &lt;script type=&quot;text/javascript&quot;&gt;.<br>
      Согласно спецификации HTML5 для подключения JavaScript атрибут <code class='w3-codespan'>type</code> - не обязателен. JavaScript является скриптовым языком в HTML по умолчанию.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Функции и события JavaScript</h2>
  <p>JavaScript <code class='w3-codespan'>function</code> - это блок кода JavaScript, который может быть выполнен при &quot;вызове&quot;.</p>
  <p>Например, функция может быть вызвана, когда происходит <b>событие</b>, например, когда пользователь нажимает кнопку.</p>
  <div class='w3-panel w3-note'>
    <p>Вы узнаете намного больше о функциях и событиях в последующих главах этого учебника.</p>
  </div>
  <hr>

  <h2>JavaScript в &lt;head&gt; или &lt;body&gt;?</h2>
  <p>Вы можете разместить любое количество скриптов в HTML-документе.</p>
  <p>Скрипты могут быть размещены в разделах <code class='w3-codespan'>&lt;body&gt;</code> или в <code class='w3-codespan'>&lt;head&gt;</code> HTML страницы, или в обеих разделах.</p>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript в &lt;head&gt;</h2>
  <p>В этом примере JavaScript <code class='w3-codespan'>function</code> размещается в разделе <code class='w3-codespan'>&lt;head&gt;</code> HTML страницы.</p>
  <p>Функция вызывается при нажатии кнопки:</p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate htmlHigh'>
      &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<p>&lt;head&gt;<br>
        &lt;script&gt;<br>
        function myFunction() {<br>
        &nbsp;&nbsp;document.getElementById(&quot;demo&quot;).innerHTML = &quot;Параграф изменён.&quot;;<br>
        }<br>
        &lt;/script&gt;<br>
        &lt;/head&gt;<br>&lt;body&gt;</p>
      <p>&lt;h1&gt;Веб-страница&lt;/h1&gt;<br>&lt;p id=&quot;demo&quot;&gt;Параграф&lt;/p&gt;<br>&lt;button type=&quot;button&quot; onclick=&quot;myFunction()&quot;&gt;Попробуй это&lt;/button&gt;</p>
      <p>&lt;/body&gt;<br>
        &lt;/html&gt;
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_whereto_head.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript в &lt;body&gt;</h2>
  <p>В этом примере JavaScript <code class='w3-codespan'>function</code> размещается в разделе <code class='w3-codespan'>&lt;body&gt;</code> HTML страницы.</p>
  <p>Функция вызывается при нажатии кнопки:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate htmlHigh'>
      &lt;!DOCTYPE html&gt;<br>
      &lt;html&gt;<br>
      &lt;body&gt;
      <br><br>&lt;h1&gt;Веб-страница&lt;/h1&gt;<br>
      &lt;p id=&quot;demo&quot;&gt;Параграф&lt;/p&gt;<br>
      &lt;button type=&quot;button&quot; onclick=&quot;myFunction()&quot;&gt;Попробуйте это&lt;/button&gt;<br>
      <br>&lt;script&gt;<br>
      function myFunction() {<br>
      &nbsp;document.getElementById(&quot;demo&quot;).innerHTML = &quot;Параграф изменён.&quot;;<br>
      }<br>
      &lt;/script&gt;<br>
      <br>&lt;/body&gt;<br>
      &lt;/html&gt;
    </div>
    <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_whereto_body.html'>Попробуйте сами &raquo;</a>
  </div>

  <div class='w3-panel w3-note'>
    <p>Размещение скриптов в нижней части элемента <code class='w3-codespan'>&lt;body&gt;</code> улучшает скорость отображения, поскольку интерпретация скриптов замедляет отображение веб-страницы. По возможности старайтесь размещать JavaScript-код именно в конце HTML-страницы.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Внешний JavaScript</h2>
  <p>Скрипты также могут быть размещены во внешних файлах:</p>
  <div class='w3-example'>
    <h3>Внешний файл: myScript.js</h3>
    <div class='w3-code notranslate jsHigh'>
      function myFunction() {<br>
      &nbsp;document.getElementById(&quot;demo&quot;).innerHTML = &quot;Параграф изменён.&quot;;<br>
      }
    </div>
  </div>

  <p>Внешние скрипты удобны, когда один и тот же JavaScrip-код используется на разных веб-страницах (по аналогии с внешними файлами .css).</p>
  <p>Файлы JavaScript имеют расширение <strong>.js</strong>.</p>
  <p>Чтобы использовать внешний скрипт, укажите имя файла скрипта в атрибуте <code class='w3-codespan'>src</code> (сокращенно от source) тега <code class='w3-codespan'>&lt;script&gt;</code>:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate htmlHigh'>
      &lt;script src=&quot;myScript.js&quot;&gt;&lt;/script&gt;</div>
    <a target='_blank' href='../jstryit/tryjs_whereto_external.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>

  <p>Можно разместить внешнюю ссылку на скрипт в <code class='w3-codespan'>&lt;head&gt;</code> или <code class='w3-codespan'>&lt;body&gt;</code> - как вам нравится.</p>
  <p>Скрипт будет вести себя так, как если бы он был расположен именно там, где находится тег <code class='w3-codespan'>&lt;script&gt;</code>.</p>

  <div class='w3-panel w3-note'>
    <p>Внешние скрипты не могут содержать теги <code class='w3-codespan'>&lt;script&gt;</code>. В них содержится непосредственно сам JavaScript-код.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Преимущества использования внешних файлов JavaScript</h2>
  <p>Размещение скриптов во внешних файлах имеет ряд преимуществ:</p>
  <ul>
    <li>Разделяются HTML-код и JavaScript-код</li>
    <li>Это облегчает чтение и поддержку отдельно HTML и JavaScript</li>
    <li>Кэшированные файлы JavaScript могут ускорить загрузку страниц</li>
  </ul>
  <p>Чтобы добавить несколько файлов скриптов на одну страницу - используйте несколько тегов <code class='w3-codespan'>&lt;script&gt;</code>:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate htmlHigh'>
      &lt;script src=&quot;myScript1.js&quot;&gt;&lt;/script&gt;<br>
      &lt;script src=&quot;myScript2.js&quot;&gt;&lt;/script&gt;
    </div>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Внешние ссылки</h2>
  <p>На внешние скрипты можно ссылаться с помощью полного URL-адреса или пути относительно текущей веб-страницы.</p>
  <p>В этом примере используется полный URL-адрес для ссылки на скрипт:</p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate htmlHigh'>
      &lt;script src=&quot;https://w3schoolsrus.github.io/js/myScript.js&quot;&gt;&lt;/script&gt;
    </div>
    <p><a target='_blank' href='../jstryit/tryjs_whereto_url.html' class='w3-btn'>Попробуйте сами &raquo;</a></p>
  </div>

  <p>В этом примере используется скрипт, расположенный в указанной папке на текущем веб-сайте:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate htmlHigh'>
      &lt;script src=&quot;js/myScript.js&quot;&gt;&lt;/script&gt;
    </div>
    <p><a target='_blank' href='../jstryit/tryjs_whereto_url_relative.html' class='w3-btn'>Попробуйте сами &raquo;</a></p>
  </div>

  <p>Этот пример ссылается на скрипт, расположенный в той же папке, что и текущая страница:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate htmlHigh'>
      &lt;script src=&quot;myScript.js&quot;&gt;&lt;/script&gt;
    </div>
    <p><a target='_blank' href='../jstryit/tryjs_whereto_external.html' class='w3-btn'>Попробуйте сами &raquo;</a></p>
  </div>

  <div class='w3-panel w3-note'>
    <p>Вы можете прочитать больше о путях к файлам в главе <a href='../html/html_filepaths.php'>HTML Пути к файлам</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
  </div>

  <p>Для написания скриптов на языке JavaScript используются точно такие же редакторы кода, как и для написания обычного HTML-кода. О том, какие можно использовать редакторы кода, вы можете прочитать в разделе <a href='../html/html_editors.php'>HTML Редакторы</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='js_intro.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='js_output.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>