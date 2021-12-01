<?php include '../include/head.php'; ?>

<title>JavaScript Комментарии. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Комментарии используются для объяснения кода, а также для предотвращения выполнения кода при тестировании. Комментарии бывают однострочные и многострочные. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
  <h1>JavaScript <span class='color_h1'>Комментарии</span></h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='js_syntax.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='js_variables.php'>Next &#10095;</a>
  </div>
  <hr>
  <p class='intro'><strong>Комментарии в JavaScript</strong> могут быть использованы для объяснения JavaScript кода и для того, чтобы сделать его более читабельным.</p>
  <p class='intro'><strong>Комментарии в JavaScript</strong> также можно использовать для предотвращения выполнения при тестировании альтернативного кода.</p>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Однострочные комментарии</h2>
  <p><strong>Однострочные комментарии</strong> начинаются с <code class='w3-codespan'>//</code>.</p>
  <p>Любой текст между <code class='w3-codespan'>//</code> и концом строки будет игнорироваться JavaScript (не будет выполнен).</p>
  <p>В этом примере перед каждой строкой кода используется однострочный комментарий:</p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      // Изменить заголовок:<br>
      document.getElementById(&quot;myH&quot;).innerHTML = &quot;Моя первая страница&quot;;<br><br>
      // Изменить параграф:<br>
      document.getElementById(&quot;myP&quot;).innerHTML = &quot;Мой первый параграф.&quot;;
    </div>
    <a target='_blank' href='../jstryit/tryjs_comments1.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>
  <p>В этом примере для пояснения кода используется однострочный комментарий в конце каждой строки:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      var x = 5;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Объявить x, присвоить ему значение 5<br>
      var y = x + 2;&nbsp; // Объявить y, присвоить ему значение x + 2
    </div>
    <a target='_blank' href='../jstryit/tryjs_comments5.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Многострочные комментарии</h2>
  <p><strong>Многострочные коммментарии</strong> начинаются с <code class='w3-codespan'>/*</code> и заканчиваются <code class='w3-codespan'>*/</code>.</p>
  <p>Любой текст между <code class='w3-codespan'>/*</code> и <code class='w3-codespan'>*/</code> будет игнорироваться JavaScript.</p>
  <p>В этом примере для объяснения кода используется многострочный комментарий (блок комментария):</p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      /*<br>
      Код ниже изменить<br>
      заголовок с id = &quot;myH&quot;<br>
      и параграф с id = &quot;myP&quot;<br>
      на моей веб-странице:<br>
      */<br>
      document.getElementById(&quot;myH&quot;).innerHTML = &quot;Моя первая страница&quot;;<br>
      document.getElementById(&quot;myP&quot;).innerHTML = &quot;Мой первый параграф.&quot;;
    </div>
    <a target='_blank' href='../jstryit/tryjs_comments2.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>

  <div class='w3-panel w3-note'>
    <p>Чаще всего используются однострочные комментарии.<br>Блочные комментарии часто используются для формальной документации.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Использование комментариев для предотвращения выполнения</h2>
  <p>Использование комментариев для предотвращения выполнения кода подходит для тестирования кода.</p>

  <p>Добавление <code class='w3-codespan'>//</code> перед строкой кода изменяет строки кода с исполняемой строки на комментарий.</p>
  <p>В этом примере <code class='w3-codespan'>//</code> используется для предотвращения выполнения одной из строк кода:</p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      //document.getElementById(&quot;myH&quot;).innerHTML = &quot;Моя первая страница&quot;;<br>
      document.getElementById(&quot;myP&quot;).innerHTML = &quot;Мой первый параграф.&quot;;
    </div>
    <a target='_blank' href='../jstryit/tryjs_comments3.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>

  <p>В этом примере используется блок комментария для предотвращения выполнения нескольких строк:</p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      /*<br>
      document.getElementById(&quot;myH&quot;).innerHTML = &quot;Моя первая страница&quot;;<br>
      document.getElementById(&quot;myP&quot;).innerHTML = &quot;Мой первый параграф.&quot;;<br>
      */

    </div>
    <a target='_blank' href='../jstryit/tryjs_comments4.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='js_syntax.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='js_variables.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
