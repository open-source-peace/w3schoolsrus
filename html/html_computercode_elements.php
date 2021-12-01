<?php include '../include/head.php'; ?>

<title>HTML Элементы компьютерного кода. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Элементы компьютерного кода. Как вставить программный код на веб-странице? Учебник для школьников и студентов. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML <span class='color_h1'>Элементы компьютерного кода</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_responsive.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_semantic_elements.php'>Next &#10095;</a>
    </div>
    <hr>

    <p class="intro">HTML содержит несколько элементов для определения пользовательского ввода и компьютерного кода.</p>
    <hr>

    <div class="w3-example">
      <h3>Компьютерный код</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;code&gt;<br>x = 5;&lt;br&gt;<br>y = 6;&lt;br&gt;<br>
        z = x + y;<br>&lt;/code&gt;
      </div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit756b.html?filename=tryhtml_formatting_intro3" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <h2>HTML &lt;kbd&gt; Для ввода с клавиатуры</h2>
    <p>HTML элемент <code class="w3-codespan">&lt;kbd&gt;</code> представляет пользовательский ввод, такой как ввод с клавиатуры или голосовые команды.</p>
    <p>Текст в окружении <code class="w3-codespan">&lt;kbd&gt;</code> тегов обычно отображается моноширинным шрифтом:</p>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;p&gt;Сохраните документ, нажав &lt;kbd&gt;Ctrl + S&lt;/kbd&gt;&lt;/p&gt;</div>
      <p>Результат:</p>
      <div class="w3-white w3-padding notranslate">
        Сохраните документ, нажав <kbd style="font-family:monospace !important;font-size:13px;">Ctrl + S</kbd></div>
      <a class="w3-btn w3-margin-bottom w3-margin-top" href="../htmltryit/tryit434d.html?filename=tryhtml_formatting_kbd" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HTML &lt;samp&gt; Для вывода программы</h2>
    <p>HTML элемент <code class="w3-codespan">&lt;samp&gt;</code> представляет выходные данные программы или вычислительной системы.</p>
    <p>Текст окруженный тегами <code class="w3-codespan">&lt;samp&gt;</code> обычно отображается моноширинным шрифтом:</p>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;p&gt;Если вы введете неправильное значение, программа вернет &lt;samp&gt;Ошибка!&lt;/samp&gt;&lt;/p&gt;</div>
      <p>Результат:</p>
      <div class="w3-white w3-padding notranslate">Если вы введете неправильное значение, программа вернет <samp style="font-family: monospace !important;font-size:13px;">
          Ошибка!</samp>
      </div>
      <a class="w3-btn w3-margin-bottom w3-margin-top" href="../htmltryit/tryit66ad.html?filename=tryhtml_formatting_samp" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HTML &lt;code&gt; для компьютерного кода</h2>
    <p>HTML элемент<code class="w3-codespan">&lt;code&gt;</code> элемент определяет фрагмент компьютерного кода.</p>
    <p>Текст окруженный тегами <code class="w3-codespan">&lt;code&gt;</code> обычно отображается моноширинным шрифтом:&nbsp;</p>

    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;code&gt;<br>x = 5;<br>y = 6;<br>z = x + y;<br>&lt;/code&gt;</div>
      <p>Результат:</p>
      <div class="w3-white w3-padding notranslate">
        <code style="font-family: monospace !important;font-size:13px;color:black;background-color:#fff;padding:0;">
          x = 5;
          y = 6;
          z = x + y;
        </code>
      </div>
      <a class="w3-btn w3-margin-bottom w3-margin-top" href="../htmltryit/tryit1b5a.html?filename=tryhtml_formatting_code" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Обратите внимание, что элемент <code class="w3-codespan">&lt;code&gt;</code> не сохраняет лишних пробелов и разрывов строк.</p>
    <p>Чтобы это исправить, вы можете поставить элемент <code class="w3-codespan">&lt;code&gt;</code> внутри элемента <code class="w3-codespan">&lt;pre&gt;</code>:</p>

    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;pre&gt;<br>&lt;code&gt;<br>x = 5;<br>y = 6;<br>z = x + y;<br>&lt;/code&gt;<br>&lt;/pre&gt;</div>
      <p>Результат:</p>
      <div class="w3-white w3-padding notranslate">
<pre><code style="font-family: monospace !important;font-size:13px;color:black;background-color:#fff;padding:0;">
x = 5;
y = 6;
z = x + y;
</code>
</pre></div>
      <a class="w3-btn w3-margin-bottom w3-margin-top" href="../htmltryit/tryita294.html?filename=tryhtml_formatting_codepre" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <h2>HTML &lt;var&gt; для переменных</h2>
    <p>HTML элемент <code class="w3-codespan">&lt;var&gt;</code> определяет переменные.</p>
    <p>Переменная может быть переменной в математическом выражении или переменной в контексте программирования:</p>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        Эйнштейн написал: &lt;var&gt;E&lt;/var&gt; = &lt;var&gt;mc&lt;/var&gt;&lt;sup&gt;2&lt;/sup&gt;.</div>
      <p>Результат:</p>
      <div class="w3-white w3-padding notranslate">
        Эйнштейн написал: <var>E</var> = <var>mc</var><sup>2</sup>.
      </div>
      <a class="w3-btn w3-margin-bottom w3-margin-top" href="../htmltryit/tryitf3a5.html?filename=tryhtml_formatting_var" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>HTML Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/html/exercise.asp?filename=exercise_html_computercode_elements1" method="post" target="_blank">
      <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
      <div class="exercisewindow">
        <h2>Упражнение:</h2>
        <p>Определите текст "var person;" как программный код.</p>
        <div class="exerciseprecontainer">
          &lt;p&gt;Code example: <input name="ex1" spellcheck="false" maxlength="6" style="width: 67px;">var person;<input name="ex2" spellcheck="false" maxlength="7" style="width: 76px;">&lt;/p&gt;
        </div>
        <br>
        <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
      </div>
    </form>
    <hr>

    <h2>HTML Элементы компьютерного кода</h2>
    <table class="w3-table-all notranslate">
      <tr>
        <th style="width:20%">Тег</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td><a href="../tags/tag_code.php">&lt;code&gt;</a></td>
        <td>Определяет программный код</td>
      </tr>
      <tr>
        <td><a href="../tags/tag_kbd.php">&lt;kbd&gt;</a></td>
        <td>Определяет ввод с клавиатуры</td>
      </tr>
      <tr>
        <td><a href="../tags/tag_samp.php">&lt;samp&gt;</a></td>
        <td>Определяет вывод компьютера</td>
      </tr>
      <tr>
        <td><a href="../tags/tag_var.php">&lt;var&gt;</a></td>
        <td>Определяет переменную</td>
      </tr>
      <tr>
        <td><a href="../tags/tag_pre.php">&lt;pre&gt;</a></td>
        <td>Определяет предварительно отформатированный текст</td>
      </tr>
    </table>
    <div class="w3-note w3-panel">
      <p>Для получения полного списка всех доступных тегов HTML, посетите <a href="../tags/index.php">HTML Справочник тегов</a> на нашем сайте <strong>W3Schools</strong>.</p>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_responsive.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_semantic_elements.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>