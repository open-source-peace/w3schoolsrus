<?php include '../include/head.php'; ?>

<title>JavaScript Учебник. Интро. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Введение. Основы языка программирования JavaScript. Что может делать JavaScript? <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
  <h1>JavaScript <span class='color_h1'>Введение</span></h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='index.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='js_whereto.php'>Next &#10095;</a>
  </div>
  <hr>
  <div class='w3-panel w3-info intro'>
    <p>Эта страница содержит несколько примеров того, что может сделать <strong>JavaScript</strong>.</p>
  </div>
  <hr>

  <h2>JavaScript может изменить содержимое HTML</h2>
  <p>Одним из многих методов JavaScript HTML является <code class='w3-codespan'>getElementById()</code>, что можно перевести как &quot;Получить элемент по Id&quot;.</p>
  <p>В этом примере используется метод для &quot;поиска&quot; HTML элемента (из id=&quot;demo&quot;) и изменения содержимого элемента (<code class='w3-codespan'>innerHTML</code>) на &quot;Hello JavaScript&quot;:</p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      document.getElementById(&quot;demo&quot;).innerHTML = &quot;Hello JavaScript&quot;;</div>
    <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_intro_inner_html.html'>Попробуйте сами &raquo;</a>
  </div>
  <div class='w3-panel w3-note'>
    <p>JavaScript принимает как двойные, так и одинарные кавычки:</p>
  </div>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      document.getElementById('demo').innerHTML = 'Hello JavaScript';</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_intro_inner_html_quotes.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript может изменять значения атрибутов HTML</h2>
  <p>В этом примере JavaScript изменяет значение атрибута <code class='w3-codespan'>src</code> тега <code class='w3-codespan'>&lt;img&gt;</code>:</p>

  <div class='w3-example'>
    <h3>Чудесная лампочка</h3>
    <div class='w3-padding-16 w3-white notranslate' style='text-align:center'>
      <button onclick="document.getElementById('myImage').src='../images/pic_bulbon.gif'">Включить свет</button>
      <img id='myImage' src='../images/pic_bulboff.gif' alt='Что может делать JavaScript' style='width:100px'>
      <button onclick="document.getElementById('myImage').src='../images/pic_bulboff.gif'">Выключить свет</button>
    </div>
    <p>
      <a class='w3-btn' href='../jstryit/tryjs_intro_lightbulb.html' target='_blank'>Попробуйте сами &raquo;</a>
    </p>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript может изменить стили HTML (CSS)</h2>
  <p>Изменение стиля HTML элемента - это вариант изменения HTML атрибута:</p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      document.getElementById(&quot;demo&quot;).style.fontSize = &quot;35px&quot;;</div>
    <a target='_blank' class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_intro_style.html'>Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>JavaScript может скрывать элементы HTML</h2>
  <p>Скрыть элементы HTML можно, изменив стиль <code class='w3-codespan'>display</code> (отображения):</p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      document.getElementById(&quot;demo&quot;).style.display = &quot;none&quot;;</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_intro_hide.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
    <?php include '../include/adinfeed.php'; ?>
  <h2>JavaScript может отображать элементы HTML</h2>
  <p>Отображение скрытых элементов HTML также можно сделать, изменив стиль <code class='w3-codespan'>display</code>:</p>

  <div class='w3-example'>
    <h3>Пример</h3>
    <div class='w3-code notranslate jsHigh'>
      document.getElementById(&quot;demo&quot;).style.display = 'block';</div>
    <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_intro_show.html' target='_blank'>Попробуйте сами &raquo;</a>
  </div>
  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='index.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='js_whereto.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>