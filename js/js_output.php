<?php include '../include/head.php'; ?>

<title>JavaScript Вывод. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Вывод. Способы вывода JavaScript в HTML документе: innerHTML, document.write(), window.alert(), console.log(). Методы отображение данных. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
  <h1>JavaScript <span class='color_h1'>Output / Вывод</span></h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='js_whereto.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='js_statements.php'>Next &#10095;</a>
  </div>
  <hr>
  <h2>Возможности отображения JavaScript</h2>
  <p>JavaScript может &quot;отображать&quot; данные различными способами:</p>
  <ul>
    <li>Запись в элемент HTML, используя <code class='w3-codespan'>innerHTML</code>.</li>
    <li>Запись в вывод HTML, используя <code class='w3-codespan'>document.write()</code>.</li>
    <li>Запись в окно предупреждения (оповещения), используя <code class='w3-codespan'>window.alert()</code>.</li>
    <li>Запись в консоль браузера, используя <code class='w3-codespan'>console.log()</code>.</li>
  </ul>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Использование innerHTML</h2>
  <p>Чтобы получить доступ к элементу HTML, JavaScript может использовать метод <code class='w3-codespan'>document.getElementById(id)</code>.</p>
  <p>Атрибут <code class='w3-codespan'>id</code> определяет элемент HTML. Свойство <code class='w3-codespan'>innerHTML</code> определяет содержание HTML:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate htmlHigh'>
      &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>
      &lt;body&gt;<br>
      <br>
      &lt;h1&gt;Моя первая веб-страница&lt;/h1&gt;<br>
      &lt;p&gt;Мой первый параграф&lt;/p&gt;<br>
      <br>&lt;p id=&quot;demo&quot;&gt;&lt;/p&gt;<br>
      <br>
      &lt;script&gt;<br>
      document.getElementById(&quot;demo&quot;).innerHTML = 5 + 6;<br>
      &lt;/script&gt;<br>
      <br>
      &lt;/body&gt;<br>
      &lt;/html&gt;
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_output_dom.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>

  <div class='w3-panel w3-note'>
    <p>Изменение свойства innerHTML элемента HTML является распространенным способом отображения данных в HTML.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Использование document.write()</h2>
  <p>В целях тестирования удобно использовать <code class='w3-codespan'>document.write()</code>:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate htmlHigh'>
      &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>
      &lt;body&gt;<br><br>&lt;h1&gt;Моя первая веб-страница&lt;/h1&gt;<br>
      &lt;p&gt;Мой первый параграф.&lt;/p&gt;<br>
      <br>&lt;script&gt;<br>document.write(5 + 6);<br>&lt;/script&gt;<br>
      <br>
      &lt;/body&gt;<br>
      &lt;/html&gt;
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_output_write.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <div class='w3-panel w3-warning'>
    <p>Использование document.write() после загрузки HTML документа <strong>удалит весь существующий HTML</strong>:</p>
  </div>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate htmlHigh'>
      &lt;!DOCTYPE html&gt;<br>
      &lt;html&gt;<br>
      &lt;body&gt;<br><br>
      &lt;h1&gt;My First Web Page&lt;/h1&gt;<br>
      &lt;p&gt;My first paragraph.&lt;/p&gt;<br><br>
      &lt;button type=&quot;button&quot; onclick=&quot;document.write(5 + 6)&quot;&gt;Try it&lt;/button&gt;<br><br>
      &lt;/body&gt;<br>
      &lt;/html&gt;
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_output_write_over.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>

  <div class='w3-panel w3-note'>
    <p>Метод document.write() должен использоваться только для тестирования.</p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Использование window.alert()</h2>
  <p>Вы можете использовать окно оповещения (alert box) для отображения данных:</p>
  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate htmlHigh'>
      &lt;!DOCTYPE html&gt;<br>
      &lt;html&gt;<br>
      &lt;body&gt;<br><br>
      &lt;h1&gt;Моя первая веб-страница&lt;/h1&gt;<br>&lt;p&gt;Мой первый параграф.&lt;/p&gt;<br>
      <br>
      &lt;script&gt;<br>window.alert(5 + 6);<br>
      &lt;/script&gt;<br>
      <br>
      &lt;/body&gt;<br>
      &lt;/html&gt;
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_output_alert.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>Использование console.log()</h2>
  <p>В целях отладки вы можете использовать метод <code class='w3-codespan'>console.log()</code> для отображения данных.</p>

  <div class='w3-panel w3-note'>
    <p>Вы узнаете больше об отладке в следующей главе на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
  </div>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate htmlHigh'>
      &lt;!DOCTYPE html&gt;<br>
      &lt;html&gt;<br>
      &lt;body&gt;<br>
      <br>
      &lt;script&gt;<br>
      console.log(5 + 6);<br>
      &lt;/script&gt;<br>
      <br>
      &lt;/body&gt;<br>
      &lt;/html&gt;
    </div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_output_console.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='js_whereto.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='js_statements.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>