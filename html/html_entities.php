<?php include '../include/head.php'; ?>

  <title>HTML Символьные объекты. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML Сущности. Символы и символьные объекты на веб-страницах. Как создавать символьные объекты? <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
      <h1>HTML <span class="color_h1">Символьные объекты (сущности)</span></h1>
      <div class='w3-clear nextprev'>
          <a class='w3-left w3-btn' href='html5_syntax.php'>&#10094; Prev</a>
          <a class='w3-right w3-btn' href='html_symbols.php'>Next &#10095;</a>
      </div>
      <hr>
      <p class="intro">Зарезервированные символы в HTML должны быть заменены <strong>символьными объектами</strong> (или сущностями).</p>
      <p class="intro">Символы, которых нет на вашей клавиатуре, также могут быть заменены объектами.</p>
      <hr>

      <h2>HTML Символьные объекты (сущности)</h2>
      <p>Некоторые символы зарезервированы в HTML.</p>
      <p>Если вы используете знаки "меньше чем" (&lt;) или "больше чем" (&gt;) в вашем тексте, браузер может смешивать их с тегами.</p>
      <p>Символьные объекты используются для отображения зарезервированных символов в HTML.</p>
      <p>Символьный объект выглядит так:</p>
      <div class='w3-example'>
          <div class='w3-code notranslate htmlHigh'>
              &amp;<i>entity_name</i>;
              <p>OR</p>
              &amp;#<i>entity_number</i>;
          </div></div>
      <p>Для отображения знака меньше (&lt;) необходимо написать: <b>&amp;lt;</b> или <b>&amp;#60;</b></p>
      <div class='w3-panel w3-note'>
          <p><strong>Преимущество использования названия объекта:</strong> название объекта легко запомнить.<br>
              <strong>Недостаток использования названия объекта:</strong> Браузеры могут не поддерживать все названия символьных объектов, но поддержка чисел хорошая.</p>
      </div>
      <hr>

      <h2>Неразрывный пробел</h2>
      <p>Общим символьным объектом, используемым в HTML, является неразрывный пробел: <strong>&amp;nbsp;</strong></p>
      <p>Неразрывный пробел - это пробел, который не продолжится в новой строке.</p>
      <p>Два слова, разделенные неразрывным пробелом, будут слипаться (не переходить на новую строку). Это удобно, когда разрыв слов может быть разрушительным.</p>
      <p>Примеры:</p>
      <ul>
          <li>&sect; 10</li>
          <li>10 km/h</li>
          <li>10 PM</li>
      </ul>

      <p>Другое распространенное использование неразрывного пробела - это предотвращение усечения браузерами пробелов в HTML-страницах.</p>
      <p>Если вы напишите в своем тексте 10 пробелов, браузер удалит 9 из них. Чтобы добавить реальные пробелы в ваш текст, вы можете использовать символьный объект <strong>&amp;nbsp;</strong>.</p>

      <div class="w3-panel w3-note">
          <p>Неразрывный дефис (<a href="../charsets/ref_utf_punctuation.php">&amp;#8209;</a>) позволяет использовать символ дефиса (&#8209;), который не будет разрываться.</p>
      </div>
      <hr>

      <h2>Некоторые другие полезные символьные объекты HTML</h2>
      <table class="w3-table-all notranslate">
          <tr>
              <th>Результат</th>
              <th>Описание</th>
              <th>Название объекта</th>
              <th>Число объекта</th>
          </tr>
          <tr>
              <td style="height: 29px"></td>
              <td style="height: 29px">неразрывный пробел</td>
              <td style="height: 29px">&amp;nbsp;</td>
              <td style="height: 29px">&amp;#160;</td>
          </tr>
          <tr>
              <td>&lt;</td>
              <td>меньше чем</td>
              <td>&amp;lt;</td>
              <td>&amp;#60;</td>
          </tr>
          <tr>
              <td>&gt;</td>
              <td>больше чем</td>
              <td>&amp;gt;</td>
              <td>&amp;#62;</td>
          </tr>
          <tr>
              <td>&amp;</td>
              <td>амперсанд</td>
              <td>&amp;amp;</td>
              <td>&amp;#38;</td>
          </tr>
          <tr>
              <td>&quot;</td>
              <td>двойная кавычка</td>
              <td>&amp;quot;</td>
              <td>&amp;#34;</td>
          </tr>
          <tr>
              <td>&apos;</td>
              <td>одиночная кавычка (апостроф)</td>
              <td>&amp;apos;</td>
              <td>&amp;#39;</td>
          </tr>
          <tr>
              <td>&cent;</td>
              <td>цент</td>
              <td>&amp;cent;</td>
              <td>&amp;#162;</td>
          </tr>
          <tr>
              <td>&pound;</td>
              <td>фунт</td>
              <td>&amp;pound;</td>
              <td>&amp;#163;</td>
          </tr>
          <tr>
              <td>&yen;</td>
              <td>иена</td>
              <td>&amp;yen;</td>
              <td>&amp;#165;</td>
          </tr>
          <tr>
              <td>&euro;</td>
              <td>евро</td>
              <td>&amp;euro;</td>
              <td>&amp;#8364;</td>
          </tr>
          <tr>
              <td>&copy;</td>
              <td>авторские права</td>
              <td>&amp;copy;</td>
              <td>&amp;#169;</td>
          </tr>
          <tr>
              <td>&#174;</td>
              <td>зарегистрированная торговая марка</td>
              <td>&amp;reg;</td>
              <td>&amp;#174;</td>
          </tr>
      </table>

      <div class="w3-panel w3-note">
          <p><strong>Примечание:</strong> Названия объектов чувствительны к регистру.</p>
      </div>
      <hr>

      <h2>Объединение диакритических знаков</h2>
      <p>Диакритический знак - это &quot;глиф&quot;, добавленный к букве.</p>
      <p>Некоторые диакритические знаки, такие как важность (&nbsp; &#768;) и ударение (&nbsp; &#769;) называются акцентами.</p>
      <p>Диакритические знаки могут появляться как над, так и под буквой, внутри буквы и между двумя буквами.</p>
      <p>Диакритические знаки могут использоваться в соединении с буквенно-цифровыми символами для создания символа, который отсутствует в наборе символов (кодировке), используемом на странице.</p>
      <p>Вот несколько примеров:</p>
      <table class="w3-table-all notranslate">
          <tr>
              <th>Знак</th>
              <th>Символ</th>
              <th>Конструкция</th>
              <th>Результат</th>
          </tr>
          <tr>
              <td>&nbsp;&#768;</td>
              <td>a</td>
              <td>a&amp;#768;</td>
              <td>a&#768;</td>
          </tr>
          <tr>
              <td>&nbsp;&#769;</td>
              <td>a</td>
              <td>a&amp;#769;</td>
              <td>a&#769;</td>
          </tr>
          <tr>
              <td>&#770;</td>
              <td>a</td>
              <td>a&amp;#770;</td>
              <td>a&#770;</td>
          </tr>
          <tr>
              <td>&nbsp;&#771;</td>
              <td>a</td>
              <td>a&amp;#771;</td>
              <td>a&#771;</td>
          </tr>
          <tr>
              <td>&nbsp;&#768;</td>
              <td>O</td>
              <td>O&amp;#768;</td>
              <td>O&#768;</td>
          </tr>
          <tr>
              <td>&nbsp;&#769;</td>
              <td>O</td>
              <td>O&amp;#769;</td>
              <td>O&#769;</td>
          </tr>
          <tr>
              <td>&#770;</td>
              <td>O</td>
              <td>O&amp;#770;</td>
              <td>O&#770;</td>
          </tr>
          <tr>
              <td>&nbsp;&#771;</td>
              <td>O</td>
              <td>O&amp;#771;</td>
              <td>O&#771;</td>
          </tr>
      </table>
      <p>Вы увидите больше HTML символов в следующей главе этого учебника на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>

      <hr>
      <div class='w3-clear nextprev'>
          <a class='w3-left w3-btn' href='html5_syntax.php'>&#10094; Prev</a>
          <a class='w3-right w3-btn' href='html_symbols.php'>Next &#10095;</a>
      </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>