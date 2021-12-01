<?php include '../include/head.php'; ?>
<title>CSS Фон. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Фон. Как добавить фон веб-страницы с помощью CSS? Цвет фона. Картинка в качестве фона. Стилизация веб-страниц. Пример кода. Современный учебник по CSS3. Бесплатные уроки для начинающих. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
      <h1>CSS <span class='color_h1'>Background - Фон</span></h1>
      <div class='w3-clear nextprev'>
          <a class='w3-left w3-btn' href='css_colors_hsl.php'>&#10094; Prev</a>
          <a class='w3-right w3-btn' href='css_background_image.php'>Next &#10095;</a>
      </div>
      <br>

      <div style='width:100%;border:1px solid gray;padding:8px;background:#e1efbb url("../images/mountain.jpg")'>
          <p style='margin-right:150px;'>Свойства фона CSS используются для определения фоновых эффектов для элементов.</p>
          <p>В этих главах вы узнаете о следующих свойствах фона CSS:</p>
          <ul>
              <li>background-color</li>
              <li>background-image</li>
              <li>background-repeat</li>
              <li>background-attachment</li>
              <li>background-position</li>
          </ul>
      </div>
      <hr>

      <h2>CSS background-color - Цвет фона</h2>
      <p>Свойство <code class='w3-codespan'>background-color</code> определяет цвет фона элемента.</p>

      <div class='w3-example'>
          <h3>Пример</h3>
          <p>Цвет фона страницы устанавливается следующим образом:</p>
          <div class='w3-code notranslate cssHigh'>
              body {<br>&nbsp;&nbsp;background-color: lightblue;<br>}
          </div>
          <a target='_blank' href='../csstryit/trycss_background-color_body.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
      </div>
      <p>В CSS цвет чаще всего задается:</p>
      <ul>
          <li>допустимое название цвета - например &quot;red&quot;</li>
          <li>значение HEX - например &quot;#ff0000&quot;</li>
          <li>значение RGB - например &quot;rgb(255,0,0)&quot;</li>
      </ul>
      <p>Посмотрите <a href='/cssref/css_colors_legal.php'>CSS Значения цвета</a> для получения полного списка возможных значений цвета.</p>
      <hr>

      <h2>Прочие элементы</h2>
      <p>Вы можете установить цвет фона для любых HTML-элементов:</p>
      <div class='w3-example'>
          <h3>Пример</h3>
          <p>Здесь &lt;h1&gt;, &lt;p&gt; и &lt;div&gt; элементы будут иметь разные цвета фона:</p>
          <div class='w3-code notranslate cssHigh'>
              h1 {<br>&nbsp;&nbsp;background-color: green;<br>}<br><br>
              div {<br>&nbsp;&nbsp;background-color: lightblue;<br>}<br><br>p {<br>&nbsp;&nbsp;background-color:
              yellow;<br>}</div>
          <a target='_blank' href='../csstryit/trycss_background-color_elements.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Opacity / Transparency - Непрозрачность / Прозрачность</h2>
      <p>Свойство <code class='w3-codespan'>opacity</code> определяет непрозрачность / прозрачность элемента. Может принимать значение от 0,0 до 1,0. Чем меньше значение, тем прозрачнее:</p>

      <div class='w3-cell-row'>
          <div class='w3-cell w3-mobile w3-center'>
              <div style='background-color:#4CAF50;opacity:1;padding:50px;color:black'><p>opacity 1</p></div>
          </div>

          <div class='w3-cell w3-mobile w3-center'>
              <div style='background-color:#4CAF50;opacity:0.6;padding:50px;color:black'><p>opacity 0.6</p></div>
          </div>

          <div class='w3-cell w3-mobile w3-center'>
              <div style='background-color:#4CAF50;opacity:0.3;padding:50px;color:black'><p>opacity 0.3</p></div>
          </div>

          <div class='w3-cell w3-mobile w3-center'>
              <div style='background-color:#4CAF50;opacity:0.1;padding:50px;color:black'><p>opacity 0.1</p></div>
          </div>

      </div>

      <div class='w3-example'>
          <h3>Пример</h3>
          <div class='w3-code notranslate cssHigh'>
              div {<br>&nbsp; background-color: green;<br>&nbsp;&nbsp;opacity: 0.3;<br>}</div>
          <a target='_blank' href='../csstryit/trycss_background_opacity.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
      </div>

      <div class='w3-note w3-panel'>
          <p><strong>Примечание:</strong> При использовании свойства <code class='w3-codespan'>opacity</code> для добавления прозрачности к фону элемента все его дочерние элементы наследуют ту же прозрачность. Это может затруднить чтение текста внутри полностью прозрачного элемента.</p>
      </div>
      <hr>

      <h2>Прозрачность с использованием RGBA</h2>
      <p>Если вы не хотите применять прозрачность к дочерним элементам, как в нашем примере выше, используйте значения цвета <strong>RGBA</strong>. В следующем примере устанавливается непрозрачность цвета фона, а не текста:</p>

      <div class='w3-cell-row'>
          <div class='w3-cell w3-mobile w3-center'>
              <div style='background:rgb(76, 175, 80);padding:50px;color:black'><p>100% opacity</p></div>
          </div>

          <div class='w3-cell w3-mobile w3-center'>
              <div style='background:rgba(76, 175, 80,0.6);padding:50px;color:black'><p>60% opacity</p></div>
          </div>

          <div class='w3-cell w3-mobile w3-center'>
              <div style='background:rgba(76, 175, 80,0.3);padding:50px;color:black'><p>30% opacity</p></div>
          </div>

          <div class='w3-cell w3-mobile w3-center'>
              <div style='background:rgba(76, 175, 80,0.1);padding:50px;color:black'><p>10% opacity</p></div>
          </div>

      </div>
      <p>Из главы <a href='css_colors.php'>CSS Цвета</a>, вы узнали, что можно использовать RGB в качестве значения цвета. В дополнение к RGB вы можете использовать значение цвета RGB с каналом <strong>alpha</strong> (RGB<strong>A</strong>), который указывает непрозрачность цвета.</p>
      <p>Значение цвета RGBA задается с помощью: rgba(red, green, blue, <em>alpha</em>). Параметр <em>alpha</em> - это число от 0,0 (полностью прозрачный) до 1,0 (полностью непрозрачный).</p>
      <p><strong>Совет:</strong> Вы узнаете больше о цветах RGBA в главе <a href='css3_colors.php'>CSS Цвета</a> на нашем сайте <strong>W3Schools на русском</strong>.</p>

      <div class='w3-example'>
          <h3>Пример</h3>
          <div class='w3-code notranslate cssHigh'>
              div {<br>&nbsp; background: rgba(0, 128, 0, 0.3) /* Зеленый фон с opacity 30% */<br>}</div>
          <a target='_blank' href='../csstryit/trycss_background_opacity2.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
      </div>

      <hr>
      <div class='w3-clear nextprev'>
          <a class='w3-left w3-btn' href='css_colors_hsl.php'>&#10094; Prev</a>
          <a class='w3-right w3-btn' href='css_background_image.php'>Next &#10095;</a>
      </div>    
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>