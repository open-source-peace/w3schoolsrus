<?php include '../include/head.php'; ?>

  <title>CSS Шрифты. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Шрифты. Какие шрифты используются на веб-страницах? Пример шрифта. Семейство шрифтов. Шрифты с засечками и без. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class="color_h1">Шрифты</span></h1>
    <div class="w3-clear nextprev">
      <a class="w3-left w3-btn" href="css_text_shadow.php">&#10094; Prev</a>
      <a class="w3-right w3-btn" href="css_font_websafe.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Выбор правильного шрифта для вашего сайта очень важен!</p>
    <hr>
    <h2>Выбор шрифта важен</h2>
    <p>Выбор правильного шрифта имеет огромное влияние на то, как читатели воспринимают веб-сайт.</p>
    <p>Правильный шрифт может создать сильную идентичность для вашего бренда.</p>
    <p>Очень важно использовать легко читаемый шрифт. Шрифт добавляет ценность вашему тексту. Также важно выбрать правильный цвет и размер текста для шрифта.</p>
    <hr>

    <h2>Общие семейства шрифтов</h2>
    <p>В CSS есть пять общих семейств шрифтов.:</p>
    <ol>
      <li><strong>Serif</strong> шрифты имеют небольшую обводку по краям каждой буквы. Они создают ощущение формальности и элегантности.</li>
      <li><strong>Sans-serif</strong> шрифты имеют чистые линии (без мелких штрихов). Они создают современный и минималистичный вид.</li>
      <li><strong>Monospace</strong> шрифты - здесь все буквы имеют одинаковую фиксированную ширину. Они создают механический вид.</li>
      <li><strong>Cursive</strong> шрифты имитируют человеческий почерк.</li>
      <li><strong>Fantasy</strong> шрифты декоративные/игривые шрифты.</li>
    </ol>
    <p>Все разные названия шрифтов принадлежат к одному из общих семейств шрифтов.</p>
    <hr>

    <h2>Различия между шрифтами Serif (с засечками) и Sans-serif (без засечек)</h2>
    <img alt="Serif vs. Sans-serif" src="../images/serif.gif" width="398" height="142" style="max-width:100%;height:auto">
    <div class="w3-panel w3-note">
      <p><strong>Примечание:</strong> Считается, что на экранах компьютеров шрифты без засечек легче читать, чем шрифты с засечками.</p>
    </div>
    <hr>

    <h2>Примеры некоторых шрифтов</h2>
    <table class="w3-table-all notranslate">
      <tr>
        <th style="width:20%">Generic Font Family</th>
        <th style="width:30%">Examples of Font Names</th>
      </tr>
      <tr>
        <td>Serif</td>
        <td><span style="font-size:150%;font-family:'Times New Roman',serif">Times New Roman</span><br>
          <span style="font-size:150%;font-family:Georgia,serif">Georgia</span><br>
          <span style="font-size:150%;font-family:Garamond,serif">Garamond</span><br>
        </td>
      </tr>
      <tr>
        <td>Sans-serif</td>
        <td><span style="font-size:150%;font-family:Arial,sans-serif">Arial</span><br>
          <span style="font-size:150%;font-family:Verdana,sans-serif">Verdana</span><br>
          <span style="font-size:150%;font-family:Helvetica,sans-serif">Helvetica</span><br>
        </td>
      </tr>
      <tr>
        <td>Monospace</td>
        <td><span style="font-size:150%;font-family:'Courier New',monospace">Courier New</span><br>
          <span style="font-size:150%;font-family:'Lucida Console',monospace">Lucida Console</span><br>
          <span style="font-size:150%;font-family:Monaco,monospace">Monaco</span>
        </td>
      </tr>
      <tr>
        <td>Cursive</td>
        <td><span style="font-size:150%;font-family:'Brush Script MT',cursive">Brush Script MT</span><br>
          <span style="font-size:150%;font-family:'Lucida Handwriting',cursive">Lucida Handwriting</span><br>
        </td>
      </tr>
      <tr>
        <td>Fantasy</td>
        <td><span style="font-size:150%;font-family:Copperplate,fantasy">Copperplate</span><br>
          <span style="font-size:150%;font-family:Papyrus,fantasy">Papyrus</span>
        </td>
      </tr>
    </table>
    <hr>

    <h2>CSS свойство font-family</h2>
    <p>В CSS мы используем свойство <code class="w3-codespan">font-family</code> чтобы указать шрифт текста.</p>
    <p>Свойство <code class="w3-codespan">font-family</code> должно содержать несколько названий шрифтов в качестве «запасного варианта» системы, чтобы обеспечить максимальную совместимость между браузерами/операционными системами. Начните с желаемого шрифта и закончите общим семейством (чтобы браузер мог выбрать аналогичный шрифт из общего семейства, если другие шрифты недоступны). Названия шрифтов следует разделять запятыми.</p>
    <div class="w3-note w3-panel">
      <p><b>Примечание</b>: Если в названии шрифта больше одного слова, оно должно быть заключено в кавычки, например: &quot;Times New Roman&quot;.</p>
    </div>
    <div class="w3-example">
      <h3>Пример</h3>
      <p>Укажите несколько разных шрифтов для трех параграфов:</p>
      <div class="w3-code notranslate cssHigh">
        .p1 {<br>&nbsp; font-family: &quot;Times New Roman&quot;, Times, serif;<br>}<br><br>
        .p2 {<br>&nbsp; font-family: Arial, Helvetica, sans-serif;<br>}<br><br>
        .p3 {<br>&nbsp; font-family: &quot;Lucida Console&quot;, &quot;Courier New&quot;, monospace;<br>}</div>
      <a target="_blank" href="../csstryit/trycss_font-family.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <div class="w3-clear nextprev">
      <a class="w3-left w3-btn" href="css_text_shadow.php">&#10094; Prev</a>
      <a class="w3-right w3-btn" href="css_font_websafe.php">Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>