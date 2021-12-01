<?php include '../include/head.php'; ?>
<title>HTML Символы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Символы и знаки на веб-страницах. Как создавать символы на веб-страницах? Как применяются символьные знаки? <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML <span class='color_h1'>Символы</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_entities.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_emojis.php'>Next &#10095;</a>
    </div>
    <hr>
    <h2>HTML Символьные объекты</h2>
    <p>HTML объекты были описаны в предыдущей главе.</p>
    <p>Многие математические, технические символы и символы валют отсутствуют на обычной клавиатуре.</p>
    <p>Чтобы добавить такие символы на HTML страницу, вы можете использовать имя объекта HTML.</p>
    <p>Если имя объекта не существует, вы можете использовать номер объекта, десятичное или шестнадцатеричное обозначение.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;p&gt;Я покажу &amp;euro;&lt;/p&gt;<br>
        &lt;p&gt;Я покажу &amp;#8364;&lt;/p&gt;<br>
        &lt;p&gt;Я покажу &amp;#x20AC;&lt;/p&gt;
      </div>
      <h3>Будет отображаться как:</h3>
      <div class="w3-white w3-padding">
        Я покажу &euro;<br>
        Я покажу &#8364;<br>
        Я покажу &#x20AC;
      </div>
      <a class="w3-btn w3-margin-bottom w3-margin-top" href="../htmltryit/tryited4a.html?filename=tryhtml_utf_euro" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>Некоторые математические символы, поддерживаемые HTML</h2>
    <table class="w3-table-all notranslate">
      <tr>
        <th style='width:10%'>Символ</th>
        <th style='width:10%'>Число</th>
        <th style="width:15%">Объект</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td>&#8704;</td>
        <td>&amp;#8704;</td>
        <td>&amp;forall;</td>
        <td>ДЛЯ ВСЕХ</td>
      </tr>
      <tr>
        <td>&#8706;</td>
        <td>&amp;#8706;</td>
        <td>&amp;part;</td>
        <td>ЧАСТИЧНЫЙ ДИФФЕРЕНЦИАЛ</td>
      </tr>
      <tr>
        <td>&#8707;</td>
        <td>&amp;#8707;</td>
        <td>&amp;exist;</td>
        <td>СУЩЕСТВУЕТ</td>
      </tr>
      <tr>
        <td>&#8709;</td>
        <td>&amp;#8709;</td>
        <td>&amp;empty;</td>
        <td>ПУСТЫЕ НАБОРЫ</td>
      </tr>
      <tr>
        <td>&#8711;</td>
        <td>&amp;#8711;</td>
        <td>&amp;nabla;</td>
        <td>NABLA</td>
      </tr>
      <tr>
        <td>&#8712;</td>
        <td>&amp;#8712;</td>
        <td>&amp;isin;</td>
        <td>ЭЛЕМЕНТ OF</td>
      </tr>
      <tr>
        <td>&#8713;</td>
        <td>&amp;#8713;</td>
        <td>&amp;notin;</td>
        <td>НЕ ЭЛЕМЕНТ OF</td>
      </tr>
      <tr>
        <td>&#8715;</td>
        <td>&amp;#8715;</td>
        <td>&amp;ni;</td>
        <td>СОДЕРЖИТ В КАЧЕСТВЕ ЧЛЕНА</td>
      </tr>
      <tr>
        <td>&#8719;</td>
        <td>&amp;#8719;</td>
        <td>&amp;prod;</td>
        <td>N-ARY ПРОДУКТ</td>
      </tr>
      <tr>
        <td>&#8721;</td>
        <td>&amp;#8721;</td>
        <td>&amp;sum;</td>
        <td>N-ARY СУММА</td>
      </tr>
    </table>
    <p><a href="../charsets/ref_utf_math.php">Полный математический справочник</a></p>
    <hr>

    <h2>Некоторые греческие буквы, поддерживаемые HTML</h2>
    <table class="w3-table-all notranslate">
      <tr>
        <th style='width:10%'>Символ</th>
        <th style='width:10%'>Число</th>
        <th style="width:15%">Объект</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td>&#913;</td>
        <td>&amp;#913;</td>
        <td>&amp;Alpha;</td>
        <td>GREEK CAPITAL LETTER ALPHA</td>
      </tr>
      <tr>
        <td>&#914;</td>
        <td>&amp;#914;</td>
        <td>&amp;Beta;</td>
        <td>GREEK CAPITAL LETTER BETA</td>
      </tr>
      <tr>
        <td>&#915;</td>
        <td>&amp;#915;</td>
        <td>&amp;Gamma;</td>
        <td>GREEK CAPITAL LETTER GAMMA</td>
      </tr>
      <tr>
        <td>&#916;</td>
        <td>&amp;#916;</td>
        <td>&amp;Delta;</td>
        <td>GREEK CAPITAL LETTER DELTA</td>
      </tr>
      <tr>
        <td>&#917;</td>
        <td>&amp;#917;</td>
        <td>&amp;Epsilon;</td>
        <td>GREEK CAPITAL LETTER EPSILON</td>
      </tr>
      <tr>
        <td>&#918;</td>
        <td>&amp;#918;</td>
        <td>&amp;Zeta;</td>
        <td>GREEK CAPITAL LETTER ZETA</td>
      </tr>
    </table>
    <p><a href="../charsets/ref_utf_greek.php">Полный греческий справочник</a></p>
    <hr>
    <h2>Некоторые другие объекты, поддерживаемые HTML</h2>
    <table class="w3-table-all notranslate">
      <tr>
        <th style='width:10%'>Символ</th>
        <th style='width:10%'>Число</th>
        <th style="width:15%">Объект</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td>&#169;</td>
        <td>&amp;#169;</td>
        <td>&amp;copy;</td>
        <td>COPYRIGHT ЗНАК</td>
      </tr>
      <tr>
        <td>&#174;</td>
        <td>&amp;#174;</td>
        <td>&amp;reg;</td>
        <td>РЕГИСТРАЦИИ ЗНАК</td>
      </tr>
      <tr>
        <td>&#8364;</td>
        <td>&amp;#8364;</td>
        <td>&amp;euro;</td>
        <td>EURO ЗНАК</td>
      </tr>
      <tr>
        <td>&#8482;</td>
        <td>&amp;#8482;</td>
        <td>&amp;trade;</td>
        <td>ТОРГОВАЯ МАРКА</td>
      </tr>
      <tr>
        <td>&#8592;</td>
        <td>&amp;#8592;</td>
        <td>&amp;larr;</td>
        <td>СТРЕЛКА ВЛЕВО</td>
      </tr>
      <tr>
        <td>&#8593;</td>
        <td>&amp;#8593;</td>
        <td>&amp;uarr;</td>
        <td>СТРЕЛКА ВВЕРХ</td>
      </tr>
      <tr>
        <td>&#8594;</td>
        <td>&amp;#8594;</td>
        <td>&amp;rarr;</td>
        <td>СТРЕЛКА ВПРАВО</td>
      </tr>
      <tr>
        <td>&#8595;</td>
        <td>&amp;#8595;</td>
        <td>&amp;darr;</td>
        <td>СТРЕЛКА ВНИЗ</td>
      </tr>
      <tr>
        <td>&#9824;</td>
        <td>&amp;#9824;</td>
        <td>&amp;spades;</td>
        <td>ЧЕРНАЯ ПИКА</td>
      </tr>
      <tr>
        <td>&#9827;</td>
        <td>&amp;#9827;</td>
        <td>&amp;clubs;</td>
        <td>ЧЕРНАЯ КРЕСТЯ</td>
      </tr>
      <tr>
        <td>&#9829;</td>
        <td>&amp;#9829;</td>
        <td>&amp;hearts;</td>
        <td>ЧЕРНАЯ ЧИРВА</td>
      </tr>
      <tr>
        <td>&#9830;</td>
        <td>&amp;#9830;</td>
        <td>&amp;diams;</td>
        <td>ЧЕРНАЯ БУБНА</td>
      </tr>
    </table>
    <p><a href='../charsets/ref_utf_currency.php'>Полный справочник валют</a></p>
    <p><a href='../charsets/ref_utf_arrows.php'>Полный справочник стрелок</a></p>
    <p><a href='../charsets/ref_utf_symbols.php'>Полный справочник символов</a></p>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_entities.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_emojis.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>