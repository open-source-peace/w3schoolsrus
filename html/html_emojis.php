<?php include '../include/head.php'; ?>

  <title>HTML Эмодзи / Смайлы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML Эмодзи / Смайлы на веб-страницах. Уроки по HTML для начинающих. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>Использование эмодзи в HTML</h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_symbols.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_charset.php'>Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Эмодзи (эмоджи, смайлы)</strong> - это символы из набора символов UTF-8: &#128516; &#128525; &#128151;</p>
    <hr>

    <h2>Что такое эмодзи?</h2>
    <p>Эмодзи (смайлы) выглядят как изображения или значки, но на самом деле это не так.</p>
    <p>Это буквы (символы) из набора символов UTF-8 (Unicode).</p>

    <div class="w3-panel w3-note">
      <p>UTF-8 охватывает почти все значки и символы в мире.</p>
    </div>
    <hr>

    <h2>HTML атрибут charset</h2>
    <p>Чтобы правильно отображать HTML-страницу, веб-браузер должен знать набор символов, используемый на странице.</p>
    <p>Это указано в теге <code class='w3-codespan'>&lt;meta&gt;</code>:</p>
    <div class='w3-example'>
      <div class="w3-code notranslate htmlHigh">
        &lt;meta charset=&quot;UTF-8&quot;&gt;
      </div>
    </div>
    <div class="w3-panel w3-note">
      <p>Если не указано, UTF-8 является набором символов по умолчанию в HTML.</p>
    </div>

    <hr>
    <h2>Набор символов UTF-8</h2>
    <p>Многие символы UTF-8 нельзя вводить на клавиатуре, но они всегда могут отображаться с помощью чисел (называемых номерами сущностей):</p>
    <ul>
      <li>A - это 65</li>
      <li>B - это 66</li>
      <li>C - это 67</li>
    </ul>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;!DOCTYPE html&gt;<br>
        &lt;html&gt;<br>
        &lt;head&gt;<br>&lt;meta charset=&quot;UTF-8&quot;&gt;<br>&lt;/head&gt;<br>
        &lt;body&gt;<br><br>
        &lt;p&gt;Я буду отображать A B C&lt;/p&gt;<br>
        &lt;p&gt;Я буду отображать &amp;#65; &amp;#66; &amp;#67;&lt;/p&gt;<br><br>
        &lt;/body&gt;<br>
        &lt;/html&gt;
      </div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryhtml_emojis_utf8.html?filename=tryhtml_emojis_utf8" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <h3>Объяснение примера</h3>
    <p>Элемент <code class='w3-codespan'>&lt;meta charset=&quot;UTF-8&quot;&gt;</code> определяет набор символов.</p>
    <p>Символы A, B и C отображаются числами 65, 66 и 67.</p>
    <p>Чтобы браузер понял, что вы показываете символ, вы должны начинать номер объекта с &amp;# и заканчивать его с ; (точка с запятой).</p>
    <hr>

    <h2>Эмодзи символы</h2>
    <p>Эмодзи - это также символы алфавита UTF-8:</p>
    <ul>
      <li>&#128516; - это 128516</li>
      <li>&#128525; - это 128525</li>
      <li>&#128151; - это 128151</li>
    </ul>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;!DOCTYPE html&gt;<br>
        &lt;html&gt;<br>
        &lt;head&gt;<br>&lt;meta charset=&quot;UTF-8&quot;&gt;<br>&lt;/head&gt;<br>
        &lt;body&gt;<br><br>
        &lt;h1&gt;Мой первый эмодзи&lt;/h1&gt;<br><br>
        &lt;p&gt;&amp;#128512;&lt;/p&gt;<br><br>
        &lt;/body&gt;<br>&lt;/html&gt;
      </div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryhtml_emojis.html?filename=tryhtml_emojis" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Поскольку эмодзи являются символами, их можно копировать, отображать и изменять размер, как и любой другой символ в HTML.</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;!DOCTYPE html&gt;<br>
        &lt;html&gt;<br>
        &lt;head&gt;<br>&lt;meta charset=&quot;UTF-8&quot;&gt;<br>&lt;/head&gt;<br>
        &lt;body&gt;<br><br>
        &lt;h1&gt;Размер эмодзи&lt;/h1&gt;<br><br>
        &lt;p style=&quot;font-size:48px&quot;&gt;<br>&amp;#128512; &amp;#128516; &amp;#128525; &amp;#128151;<br>&lt;/p&gt;<br><br>
        &lt;/body&gt;<br>&lt;/html&gt;
      </div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryhtml_emojis_size.html?filename=tryhtml_emojis_size" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Некоторые символы эмодзи в UTF-8</h2>
    <div class="w3-responsive">
      <table class="w3-table-all">
        <tr>
          <th>Эмодзи</th>
          <th>Значение</th>
        </tr>
        <tr><td>&#128507;</td><td>&amp;#128507;</td></tr>
        <tr><td>&#128508;</td><td>&amp;#128508;</td></tr>
        <tr><td>&#128509;</td><td>&amp;#128509;</td></tr>
        <tr><td>&#128510;</td><td>&amp;#128510;</td></tr>
        <tr><td>&#128511;</td><td>&amp;#128511;</td></tr>
        <tr><td>&#128512;</td><td>&amp;#128512;</td></tr>
        <tr><td>&#128513;</td><td>&amp;#128513;</td></tr>
        <tr><td>&#128514;</td><td>&amp;#128514;</td></tr>
        <tr><td>&#128515;</td><td>&amp;#128515;</td></tr>
        <tr><td>&#128516;</td><td>&amp;#128516;</td></tr>
        <tr><td>&#128517;</td><td>&amp;#128517;</td></tr>
      </table>
    </div>
    <p>Полный список эмодзи можно найти в <a href="../charsets/ref_emoji.php">HTML Эмодзи справочнике</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_symbols.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_charset.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>