<?php include '../include/head.php'; ?>

  <title>HTML5 Переход с HTML4. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML5 Переход с HTML4. Как перейти с HTML4 на HTML5? Также вы можете перейти с XHTML на HTML5. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML5 <span class='color_h1'>Переход с HTML4</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html5_new_elements.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_canvas.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>Переход из HTML4 на HTML5</h2>
    <p>Этот раздел полностью о том, как <strong>перейти</strong> из <strong>HTML4</strong> на <strong>HTML5</strong>.</p>
    <p>В этом разделе показано, как преобразовать страницу HTML4 в страницу HTML5, не разрушая ничего из исходного содержимого или структуры.</p>
    <div class='w3-panel w3-note'>
      <p>Вы можете перейти с XHTML на HTML5, используя тот же рецепт.</p>
    </div>

    <table class='html45'>
      <tr>
        <th>Типичный HTML4</th>
        <th>Типичный HTML5</th>
      </tr>
      <tr>
        <td>&lt;div id=&quot;header&quot;&gt;</td>
        <td>&lt;header&gt;</td>
      </tr>
      <tr>
        <td>&lt;div id=&quot;menu&quot;&gt;</td>
        <td>&lt;nav&gt;</td>
      </tr>
      <tr>
        <td>&lt;div id=&quot;content&quot;&gt;</td>
        <td>&lt;section&gt;</td>
      </tr>
      <tr>
        <td>&lt;div class=&quot;article&quot;&gt;</td>
        <td>&lt;article&gt;</td>
      </tr>
      <tr>
        <td>&lt;div id=&quot;footer&quot;&gt;</td>
        <td>&lt;footer&gt;</td>
      </tr>
    </table>

    <hr>
    <h2>Типичная HTML4 страница</h2>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01 Transitional//EN&quot;
        &quot;http://www.w3.org/TR/html4/loose.dtd&quot;&gt;<br>&lt;html lang=&quot;en&quot;&gt;<br>&lt;head&gt;<br>&lt;meta
        http-equiv=&quot;Content-Type&quot; content=&quot;text/html;charset=utf-8&quot;&gt;<br>
        &lt;title&gt;HTML4&lt;/title&gt;<br>&lt;style&gt;<br>body {<br>&nbsp; font-family: Verdana,sans-serif;<br>
        &nbsp; font-size: 0.9em;<br>
        }<br><br>div#header, div#footer {<br>&nbsp; padding: 10px;<br>&nbsp; color: white;<br>&nbsp; background-color: black;<br>}<br><br>
        div#content {<br>&nbsp; margin: 5px;<br>&nbsp; padding: 10px;<br>&nbsp; background-color: lightgrey;<br>}<br><br>div.article {<br>&nbsp; margin: 5px;<br>
        &nbsp; padding: 10px;<br>&nbsp; background-color: white;<br>}<br><br>div#menu ul {<br>&nbsp; padding: 0;<br>}<br><br>div#menu ul li {<br>&nbsp;&nbsp;display: inline;<br>
        &nbsp; margin: 5px;<br>}<br>
        &lt;/style&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;div id=&quot;header&quot;&gt;<br>&nbsp; &lt;h1&gt;Monday
        Times&lt;/h1&gt;<br>&lt;/div&gt;<br><br>&lt;div id=&quot;menu&quot;&gt;<br>&nbsp; &lt;ul&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;li&gt;News&lt;/li&gt;<br>&nbsp;&nbsp;&nbsp; &lt;li&gt;Sports&lt;/li&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;li&gt;Weather&lt;/li&gt;<br>&nbsp; &lt;/ul&gt;<br>&lt;/div&gt;<br><br>&lt;div id=&quot;content&quot;&gt;<br>
        &nbsp;
        &lt;h2&gt;News Section&lt;/h2&gt;<br>&nbsp; &lt;div class=&quot;article&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;h2&gt;News Article&lt;/h2&gt;<br>&nbsp; &nbsp;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in porta lorem. Morbi condimentum est nibh, et consectetur tortor feugiat at.&lt;/p&gt;<br>&nbsp; &lt;/div&gt;<br>&nbsp; &lt;div class=&quot;article&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;h2&gt;News
        Article&lt;/h2&gt;<br>&nbsp; &nbsp; &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in porta lorem. Morbi condimentum est nibh, et consectetur tortor feugiat at.&lt;/p&gt;<br>&nbsp; &lt;/div&gt;<br>&lt;/div&gt;<br><br>&lt;div id=&quot;footer&quot;&gt;<br>&nbsp;
        &lt;p&gt;&amp;amp;copy; 2016 Monday Times. All rights reserved.&lt;/p&gt;<br>&lt;/div&gt;<br><br>
        &lt;/body&gt;<br>&lt;/html&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitcbc8.html?filename=tryhtml5_migrate_1' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Измените на HTML5 Doctype</h2>
    <p>Изменить <strong>doctype</strong>:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01 Transitional//EN&quot;
        &quot;http://www.w3.org/TR/html4/loose.dtd&quot;&gt;
      </div>
    </div>
    <p>на HTML5 doctype:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;!DOCTYPE html&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit5f09.html?filename=tryhtml5_migrate_2' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>Измените на HTML5 кодировку</h2>
    <p>Изменить информацию о <strong>кодировке</strong>:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html;charset=utf-8&quot;&gt;</div>
    </div>
    <p>на HTML5 кодировку:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;meta charset=&quot;utf-8&quot;&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitd694.html?filename=tryhtml5_migrate_3' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Добавьте HTML5Shiv</h2>
    <p>Новые семантические элементы HTML5 поддерживаются во всех современных браузерах. Кроме того, вы можете &quot;научить&quot; старые браузеры обращаться с &quot;неизвестными элементами&quot;.</p>
    <p>Однако IE8 и более ранние версии не допускают стилизацию неизвестных элементов. Таким образом, HTML5Shiv - это обходной путь JavaScript для включения стилизации элементов HTML5 в версиях Internet Explorer до версии 9.</p>
    <p>Добавить HTML5Shiv:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;!--[if lt IE 9]&gt;<br>
        &nbsp;
        &lt;script src=&quot;https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js&quot;&gt;&lt;/script&gt;<br>
        &lt;![endif]--&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit9839.html?filename=tryhtml5_migrate_4' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-panel w3-note'>
      <p>Узнайте больше про <strong>HTML5Shiv</strong> в разделе <a href='html5_browsers.php'>HTML5 Поддержка браузерами</a>.</p>
    </div>
    <hr>

    <h2>Измените на HTML5 семантические элементы</h2>
    <p>Существующий CSS содержит идентификаторы и классы для стилизации элементов:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate cssHigh'>
        body {<br>&nbsp; font-family: Verdana,sans-serif;<br>&nbsp; font-size: 0.9em;<br>}<br><br>div#header, div#footer {<br>
        &nbsp; padding: 10px;<br>&nbsp;&nbsp;color: white;<br>&nbsp;&nbsp;background-color: black;<br>}<br><br>div#content {<br>
        &nbsp; margin: 5px;<br>&nbsp; padding: 10px;<br>&nbsp; background-color: lightgrey;<br>}<br><br>div.article {<br>
        &nbsp; margin: 5px;<br>&nbsp;&nbsp;padding: 10px;<br>&nbsp;&nbsp;background-color: white;<br>}<br><br>div#menu ul {<br>
        &nbsp; padding: 0;<br>}<br><br>div#menu ul li {<br>&nbsp; display: inline;<br>&nbsp; margin: 5px;<br>}</div>
    </div>
    <p>Замените идентичными CSS стилями для семантических элементов HTML5:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate cssHigh'>
        body {<br>&nbsp; font-family: Verdana,sans-serif;<br>&nbsp; font-size: 0.9em;<br>}<br><br>
        header, footer {<br>&nbsp; padding: 10px;<br>&nbsp; color: white;<br>&nbsp;&nbsp;background-color: black;<br>}<br><br>section {<br>
        &nbsp; margin: 5px;<br>&nbsp; padding: 10px;<br>&nbsp; background-color: lightgrey;<br>}<br><br>article {<br>&nbsp;&nbsp;margin: 5px;<br>&nbsp;&nbsp;padding: 10px;<br>
        &nbsp; background-color: white;<br>}<br><br>nav ul {<br>&nbsp;&nbsp;padding: 0;<br>}<br><br>nav ul li {<br>&nbsp;&nbsp;display: inline;<br>
        &nbsp; margin: 5px;<br>}</div>
    </div>

    <p>Наконец, измените элементы на семантические элементы HTML5:</p>
    <div class='w3-example'>
      <h3>Примеры</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;body&gt;<br><br>&lt;header&gt;<br>&nbsp; &lt;h1&gt;Monday Times&lt;/h1&gt;<br>&lt;/header&gt;<br><br>&lt;nav&gt;<br>
        &nbsp;
        &lt;ul&gt;<br>&nbsp;&nbsp;&nbsp; &lt;li&gt;News&lt;/li&gt;<br>&nbsp;&nbsp;&nbsp; &lt;li&gt;Sports&lt;/li&gt;<br>&nbsp;&nbsp;&nbsp; &lt;li&gt;Weather&lt;/li&gt;<br>&nbsp; &lt;/ul&gt;<br>&lt;/nav&gt;<br>
        <br>&lt;section&gt;<br>&nbsp; &lt;h2&gt;News Section&lt;/h2&gt;<br>&nbsp; &lt;article&gt;<br>&nbsp;&nbsp;&nbsp; &lt;h2&gt;News Article&lt;/h2&gt;<br>
        &nbsp;&nbsp;&nbsp;
        &lt;p&gt;Lorem ipsum dolor sit amet..&lt;/p&gt;<br>&nbsp; &lt;/article&gt;<br>&nbsp; &lt;article&gt;<br>&nbsp;&nbsp;&nbsp; &lt;h2&gt;News Article&lt;/h2&gt;<br>
        &nbsp;&nbsp;&nbsp;
        &lt;p&gt;Lorem ipsum dolor sit amet..&lt;/p&gt;<br>&nbsp; &lt;/article&gt;<br>&lt;/section&gt;<br><br>
        &lt;footer&gt;<br>&nbsp; &lt;p&gt;&amp;copy; 2014 Monday Times. All rights reserved.&lt;/p&gt;<br>
        &lt;/footer&gt;<br><br>&lt;/body&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitdfda.html?filename=tryhtml5_migrate_5' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Различие между &lt;article&gt; &lt;section&gt; и &lt;div&gt;</h2>
    <p>В стандарте HTML5 отсутствует разница между <code class='w3-codespan'>&lt;article&gt;</code> <code class='w3-codespan'>&lt;section&gt;</code> and <code class='w3-codespan'>&lt;div&gt;</code>.</p>
    <p>В стандарте HTML5 элемент <code class='w3-codespan'>&lt;section&gt;</code> определяется как блок связанных элементов.</p>
    <p>Элемент <code class='w3-codespan'>&lt;article&gt;</code> определяется как полный, автономный блок связанных элементов.</p>
    <p>Элемент <code class='w3-codespan'>&lt;div&gt;</code> определяется как блок дочерних элементов.</p>
    <p>Как это интерпретировать?</p>
    <p>В приведенном выше примере мы использовали <code class='w3-codespan'>&lt;section&gt;</code> в качестве контейнера для связанных <code class='w3-codespan'>&lt;articles&gt;</code> (статей).</p>
    <p>Но мы могли бы использовать <code class='w3-codespan'>&lt;article&gt;</code> также и в качестве контейнера для статей.</p>
    <p>Вот несколько разных примеров:</p>
    <div class='w3-example'>
      <h3>&lt;article&gt; в &lt;article&gt;:</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;article&gt;<br><br>
        &lt;h2&gt;Famous Cities&lt;/h2&gt;<br><br>&lt;article&gt;<br>&nbsp; &lt;h2&gt;London&lt;/h2&gt;<br>&nbsp;
        &lt;p&gt;London is the capital city of England.&lt;/p&gt;<br>&lt;/article&gt;<br>
        <br>&lt;article&gt;<br>&nbsp; &lt;h2&gt;Paris&lt;/h2&gt;<br>&nbsp; &lt;p&gt;Paris is the capital and most populous city of France.&lt;/p&gt;<br>&lt;/article&gt;<br><br>&lt;article&gt;<br>&nbsp; &lt;h2&gt;Tokyo&lt;/h2&gt;<br>
        &nbsp; &lt;p&gt;Tokyo is the capital of Japan.&lt;/p&gt;<br>&lt;/article&gt;<br>
        <br>&lt;/article&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitd553.html?filename=tryhtml5_migrate_6' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-example'>
      <h3>&lt;div&gt; в &lt;article&gt;:</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;article&gt;<br><br>&lt;h2&gt;Famous Cities&lt;/h2&gt;<br><br>&lt;div class=&quot;city&quot;&gt;<br>&nbsp; &lt;h2&gt;London&lt;/h2&gt;<br>
        &nbsp; &lt;p&gt;London is the capital city of England.&lt;/p&gt;<br>&lt;/div&gt;<br>
        <br>&lt;div class=&quot;city&quot;&gt;<br>&nbsp; &lt;h2&gt;Paris&lt;/h2&gt;<br>&nbsp; &lt;p&gt;Paris is the capital and most populous city of France.&lt;/p&gt;<br>&lt;/div&gt;<br><br>&lt;div class=&quot;city&quot;&gt;<br>&nbsp; &lt;h2&gt;Tokyo&lt;/h2&gt;<br>
        &nbsp; &lt;p&gt;Tokyo is the capital of Japan.&lt;/p&gt;<br>&lt;/div&gt;<br><br>
        &lt;/article&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitd5dd.html?filename=tryhtml5_migrate_7' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <div class='w3-example'>
      <h3>&lt;div&gt; в &lt;section&gt; в &lt;article&gt;:</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;article&gt;<br><br>&lt;section&gt;<br>&nbsp; &lt;h2&gt;Famous Cities&lt;/h2&gt;<br><br>&nbsp; &lt;div class=&quot;city&quot;&gt;<br>
        &nbsp;&nbsp;&nbsp;
        &lt;h2&gt;London&lt;/h2&gt;<br>&nbsp;&nbsp;&nbsp; &lt;p&gt;London is the capital city
        of England.&lt;/p&gt;<br>&nbsp; &lt;/div&gt;<br><br>&nbsp; &lt;div class=&quot;city&quot;&gt;<br>
        &nbsp;&nbsp;&nbsp;
        &lt;h2&gt;Paris&lt;/h2&gt;<br>&nbsp;&nbsp;&nbsp; &lt;p&gt;Paris is the capital and most populous city of France.&lt;/p&gt;<br>&nbsp; &lt;/div&gt;<br><br>&nbsp; &lt;div class=&quot;city&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;h2&gt;Tokyo&lt;/h2&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;p&gt;Tokyo is the capital of Japan.&lt;/p&gt;<br>&nbsp; &lt;/div&gt;<br>
        &lt;/section&gt;<br><br>&lt;section&gt;<br>&nbsp; &lt;h2&gt;Famous Countries&lt;/h2&gt;<br><br>&nbsp; &lt;div class=&quot;country&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;h2&gt;England&lt;/h2&gt;<br>&nbsp;&nbsp;&nbsp;
        &lt;p&gt;London is the capital city of England.&lt;/p&gt;<br>&lt;/div&gt;<br><br>&nbsp; &lt;div class=&quot;country&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;h2&gt;France&lt;/h2&gt;<br>&nbsp;&nbsp;&nbsp; &lt;p&gt;Paris is the capital and most populous city of France.&lt;/p&gt;<br>&lt;/div&gt;<br><br>&nbsp; &lt;div class=&quot;country&quot;&gt;<br>
        &nbsp;&nbsp;&nbsp;
        &lt;h2&gt;Japan&lt;/h2&gt;<br>&nbsp;&nbsp;&nbsp; &lt;p&gt;Tokyo is the capital of
        Japan.&lt;/p&gt;<br>&nbsp; &lt;/div&gt;<br>&lt;/section&gt;<br><br>&lt;/article&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit1099.html?filename=tryhtml5_migrate_8' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html5_new_elements.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_canvas.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>