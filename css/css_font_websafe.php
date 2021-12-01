<?php include '../include/head.php'; ?>

  <title>CSS Безопасные веб-шрифты. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Безопасные веб-шрифты. Что означает: веб-безопасные шрифты? Какие шрифты лучше всего использовать на веб-страницах? Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
  <h1>CSS <span class='color_h1'>Веб-безопасные шрифты</span></h1>
  <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_font.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_font_fallbacks.php'>Next &#10095;</a>
  </div>
  <hr>

  <h2>Что такое веб-безопасные шрифты</h2>
  <p><strong>Веб-безопасные шрифты</strong> - это шрифты, которые универсально устанавливаются во всех браузерах и на всех устройствах.</p>
  <hr>

  <h2>Резервные шрифты</h2>
  <p>Однако 100% полностью безопасных веб-шрифтов не существует. Всегда есть шанс, что шрифт может быть не найден или установлен неправильно.</p>
  <p>Поэтому очень важно всегда использовать <strong>резервные шрифты</strong>.</p>
  <p>Это означает, что вам следует добавить список похожих &quot;резервных шрифтов&quot; в свойстве <code class='w3-codespan'>font-family</code>. Если первый шрифт не работает, браузер попробует использовать следующий, потом следующий и т.д. Всегда заканчивайте список общим названием семейства шрифтов.</p>

  <div class='w3-example'>
      <h3>Пример</h3>
      <p>Здесь есть три типа шрифтов: Tahoma, Verdana и sans-serif. Второй и третий шрифты являются резервными на случай, если первый не найден.</p>
      <div class='w3-code notranslate cssHigh'>
          p {<br>font-family: Tahoma, Verdana, sans-serif;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_font-family2.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Лучшие безопасные веб-шрифты для HTML и CSS</h2>
  <p>В следующем списке представлены лучшие веб-безопасные шрифты для HTML и CSS:</p>
  <ul>
      <li>Arial (sans-serif)</li>
      <li>Verdana (sans-serif)</li>
      <li>Helvetica (sans-serif)</li>
      <li>Tahoma (sans-serif)</li>
      <li>Trebuchet MS (sans-serif)</li>
      <li>Times New Roman (serif)</li>
      <li>Georgia (serif)</li>
      <li>Garamond (serif)</li>
      <li>Courier New (monospace)</li>
      <li>Brush Script MT (cursive)</li>
  </ul>

  <div class='w3-panel w3-note'>
      <p><strong>Примечение:</strong> Прежде чем опубликовать свой веб-сайт, всегда проверяйте, как ваши шрифты отображаются в разных браузерах и на разных устройствах, и всегда используйте резервные шрифты!</p>
  </div>
  <hr>

  <h2>Arial (sans-serif)</h2>
  <p><strong>Arial</strong> - наиболее широко используемый шрифт как в Интернете, так и в печатных СМИ. Arial также является шрифтом по умолчанию в Документах Google.</p>
  <p>Arial - один из самых безопасных веб-шрифтов, доступный во всех основных операционных системах.</p>
  <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate'>
          <h1 style='font-family:arial,sans-serif;'>Lorem ipsum dolor sit amet</h1>
          <p style='font-family:arial,sans-serif;'>Lorem ipsum dolor sit amet.</p>
          <p style='font-family:arial,sans-serif;'>0 1 2 3 4 5 6 7 8 9</p>
      </div>
      <a target='_blank' href='../csstryit/trycss_font_arial.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Verdana (sans-serif)</h2>
  <p><strong>Verdana</strong> - очень популярный шрифт. Verdana легко читается даже при небольшом размере шрифта.</p>
  <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate'>
          <h1 style='font-family:verdana,sans-serif;'>Lorem ipsum dolor sit amet</h1>
          <p style='font-family:verdana,sans-serif;'>Lorem ipsum dolor sit amet.</p>
          <p style='font-family:verdana,sans-serif;'>0 1 2 3 4 5 6 7 8 9</p>
      </div>
      <a target='_blank' href='../csstryit/trycss_font_verdana.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Helvetica (sans-serif)</h2>
  <p>Шрифт Helvetica очень нравится дизайнерам. Подходит для многих видов бизнеса.</p>
  <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate'>
          <h1 style='font-family:helvetica,sans-serif;'>Lorem ipsum dolor sit amet</h1>
          <p style='font-family:helvetica,sans-serif;'>Lorem ipsum dolor sit amet.</p>
          <p style='font-family:helvetica,sans-serif;'>0 1 2 3 4 5 6 7 8 9</p>
      </div>
      <a target='_blank' href='../csstryit/trycss_font_helvetica.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Tahoma (sans-serif)</h2>
  <p>В шрифте <strong>Tahoma</strong> меньше места между символами.</p>
  <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate'>
          <h1 style='font-family:tahoma,sans-serif;'>Lorem ipsum dolor sit amet</h1>
          <p style='font-family:tahoma,sans-serif;'>Lorem ipsum dolor sit amet.</p>
          <p style='font-family:tahoma,sans-serif;'>0 1 2 3 4 5 6 7 8 9</p>
      </div>
      <a target='_blank' href='../csstryit/trycss_font_tahoma.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Trebuchet MS (sans-serif)</h2>
  <p><strong>Trebuchet MS</strong> был разработан Microsoft в 1996 году. Используйте этот шрифт осторожно. Поддерживается не всеми мобильными операционными системами.</p>
  <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate'>
          <h1 style='font-family:'trebuchet ms',sans-serif;'>Lorem ipsum dolor sit amet</h1>
          <p style='font-family:'trebuchet ms',sans-serif;'>Lorem ipsum dolor sit amet.</p>
          <p style='font-family:'trebuchet ms',sans-serif;'>0 1 2 3 4 5 6 7 8 9</p>
      </div>
      <a target='_blank' href='../csstryit/trycss_font_trebuchetms.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Times New Roman (serif)</h2>
  <p><strong>Times New Roman</strong> - один из самых узнаваемых шрифтов в мире. Он выглядит профессионально и используется во многих газетах и &quot;новостных&quot; веб-сайтах. Это также основной шрифт для устройств и приложений Windows.</p>
  <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate'>
          <h1 style='font-family:'Times New Roman',serif;'>Lorem ipsum dolor sit amet</h1>
          <p style='font-family:'Times New Roman',serif;'>Lorem ipsum dolor sit amet.</p>
          <p style='font-family:'Times New Roman',serif;'>0 1 2 3 4 5 6 7 8 9</p>
      </div>
      <a target='_blank' href='../csstryit/trycss_font_timesnewroman.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Georgia (serif)</h2>
  <p><strong>Georgia</strong> - элегантный шрифт с засечками. Он хорошо читается при разных размерах шрифта, поэтому является хорошим кандидатом для адаптивного дизайна мобильных устройств.</p>
  <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate'>
          <h1 style='font-family:georgia,serif;'>Lorem ipsum dolor sit amet</h1>
          <p style='font-family:georgia,serif;'>Lorem ipsum dolor sit amet.</p>
          <p style='font-family:georgia,serif;'>0 1 2 3 4 5 6 7 8 9</p>
      </div>
      <a target='_blank' href='../csstryit/trycss_font_georgia.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Garamond (serif)</h2>
  <p><strong>Garamond</strong> - классический шрифт, используемый во многих печатных книгах. У него вневременной вид и хорошая читаемость.</p>
  <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate'>
          <h1 style='font-family:garamond,serif;'>Lorem ipsum dolor sit amet</h1>
          <p style='font-family:garamond,serif;'>Lorem ipsum dolor sit amet.</p>
          <p style='font-family:garamond,serif;'>0 1 2 3 4 5 6 7 8 9</p>
      </div>
      <a target='_blank' href='../csstryit/trycss_font_garamond.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Courier New (monospace)</h2>
  <p><strong>Courier New</strong> - наиболее широко используемый моноширинный шрифт с засечками. Courier New часто используется для кодирования дисплеев, и многие поставщики услуг электронной почты используют его в качестве шрифта по умолчанию. Courier New также является стандартным шрифтом для screenplays.</p>
  <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate'>
          <h1 style='font-family:'courier new',monospace;'>Lorem ipsum dolor sit amet</h1>
          <p style='font-family:'courier new',monospace;'>Lorem ipsum dolor sit amet.</p>
          <p style='font-family:'courier new',monospace;'>0 1 2 3 4 5 6 7 8 9</p>
      </div>
      <a target='_blank' href='../csstryit/trycss_font_courier.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Brush Script MT (cursive)</h2>
  <p>Шрифт <strong>Brush Script MT</strong> был разработан для имитации почерка. Он элегантен и изыскан, но его трудно читать. Используйте его осторожно.</p>
  <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate'>
          <h1 style='font-family:'Brush Script MT',cursive;'>Lorem ipsum dolor sit amet</h1>
          <p style='font-family:'Brush Script MT',cursive;'>Lorem ipsum dolor sit amet.</p>
          <p style='font-family:'Brush Script MT',cursive;'>0 1 2 3 4 5 6 7 8 9</p>
      </div>
      <a target='_blank' href='../csstryit/trycss_font_brushscriptmt.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
  </div>

  <div class='w3-note w3-panel'>
      <p><strong>Совет:</strong> Также проверьте все доступные <a href='css_font_google.php'>Google шрифты</a> и способы их использования.</p>
  </div>

  <hr>
  <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_font.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_font_fallbacks.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>