<?php include '../include/head.php'; ?>

  <title>CSS Цвета. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Цвета. Какие используются цвета в каскадных таблицах стилей? Стилизация веб-страниц. Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Цвета</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_comments.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_colors_rgb.php'>Next &#10095;</a>
    </div>
    <hr>
    <p class='intro'>Цвета указываются с использованием предопределенных названий цветов или значений RGB, HEX, HSL, RGBA, HSLA.</p>
    <hr>
    <h2>CSS Названия цвета</h2>
    <p>В CSS цвет можно указать с помощью предварительно определенного имени цвета:</p>

    <div class='w3-row w3-center' style='margin:0 -16px;line-height:80px;color:white;'>
      <div class='w3-col l3 m6 w3-padding'>
        <div style='background-color:tomato;'>Tomato</div>
      </div>
      <div class='w3-col l3 m6 w3-padding'>
        <div style='background-color:orange;'>Orange</div>
      </div>
      <div class='w3-col l3 m6 w3-padding'>
        <div style='background-color:dodgerblue;'>DodgerBlue</div>
      </div>
      <div class='w3-col l3 m6 w3-padding'>
        <div style='background-color:mediumseagreen;'>MediumSeaGreen</div>
      </div>
      <div class='w3-col l3 m6 w3-padding'>
        <div style='background-color:gray;'>Gray</div>
      </div>
      <div class='w3-col l3 m6 w3-padding'>
        <div style='background-color:slateblue;'>SlateBlue</div>
      </div>
      <div class='w3-col l3 m6 w3-padding'>
        <div style='background-color:violet;'>Violet</div>
      </div>
      <div class='w3-col l3 m6 w3-padding'>
        <div style='background-color:lightgray;color:#444444'>LightGray</div>
      </div>
    </div>
    <p><a target='_blank' href='../csstryit/trycss_color_names.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a></p>
    <p>CSS/HTML поддерживает <a href='../colors/colors_names.php'>140 стандартных названия цвета</a>.</p>
    <hr>

    <h2>CSS Background Color - Цвет фона</h2>
    <p>Вы можете установить цвет фона для HTML-элементов:</p>

    <div style='background-color:dodgerblue; text-align:center;color:white;font-size:24px;'>Hello World</div>
    <br>
    <div class='w3-container' style='background-color:tomato;color:white;'><br>
      Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
      Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.<br><br>
    </div>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;h1 style=&quot;background-color:DodgerBlue;&quot;&gt;Hello World&lt;/h1&gt;<br>&lt;p style=&quot;background-color:Tomato;&quot;&gt;Lorem
        ipsum...&lt;/p&gt;</div>
      <br>
      <a target='_blank' href='../csstryit/trycss_color_background.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS Text Color - Цвет текста</h2>
    <p>Вы можете установить цвет текста:</p>
    <h3 style='color:tomato'>Hello World</h3>
    <p style='color:dodgerblue'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
    <p style='color:mediumseagreen'>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;h1 style=&quot;color:Tomato;&quot;&gt;Hello
        World&lt;/h1&gt;<br>&lt;p style=&quot;color:DodgerBlue;&quot;&gt;Lorem
        ipsum...&lt;/p&gt;<br>&lt;p style=&quot;color:MediumSeaGreen;&quot;&gt;Ut wisi
        enim...&lt;/p&gt;</div>
      <a target='_blank' href='../csstryit/trycss_color_text.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS Border Color - Цвет границы</h2>
    <p>Вы можете установить цвет границ:</p>
    <h2 style='border: 2px solid Tomato;'>Hello World</h2>
    <h2 style='border: 2px solid DodgerBlue;'>Hello World</h2>
    <h2 style='border: 2px solid Violet;'>Hello World</h2>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;h1 style=&quot;border:2px
        solid Tomato;&quot;&gt;Hello
        World&lt;/h1&gt;<br>&lt;h1 style=&quot;border:2px
        solid DodgerBlue;&quot;&gt;Hello
        World&lt;/h1&gt;<br>&lt;h1 style=&quot;border:2px
        solid Violet;&quot;&gt;Hello
        World&lt;/h1&gt;</div>
      <a target='_blank' href='../csstryit/trycss_color_border.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS Значения цвета</h2>
    <p>В CSS цвета также могут быть указаны с использованием значений RGB, значений HEX, значений HSL, значений RGBA и значений HSLA:</p>
    <p>То же, что и название цвета 'Tomato':</p>

    <div class='w3-center' style='line-height:60px;color:white;font-size:20px;font-weight:bold;font-family: Consolas, "Courier New", Courier, monospace'>
      <div style='background-color:rgb(255, 99, 71);margin:10px 0;'>rgb(255, 99, 71)</div>
      <div style='background-color:#ff6347;margin:10px 0;'>#ff6347</div>
      <div style='background-color:hsl(9, 100%, 64%);margin:10px 0;'>hsl(9, 100%, 64%)</div>
    </div>
    <p>То же, что и название цвета 'Tomato', но на 50% прозрачнее:</p>
    <div class='w3-center' style='line-height:60px;color:white;font-size:20px;font-weight:bold;font-family: Consolas, "Courier New", Courier, monospace'>
      <div style='background-color:rgba(255, 99, 71, 0.5);margin:10px 0;'>rgba(255, 99, 71, 0.5)</div>
      <div style='background-color:hsla(9, 100%, 64%, 0.5);margin:10px 0;'>hsla(9, 100%, 64%, 0.5)</div>
    </div>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;h1 style=&quot;background-color:rgb(255,
        99, 71);&quot;&gt;...&lt;/h1&gt;<br>&lt;h1 style=&quot;background-color:#ff6347;&quot;&gt;...&lt;/h1&gt;<br>&lt;h1 style=&quot;background-color:hsl(9,
        100%, 64%);&quot;&gt;...&lt;/h1&gt;<br><br>&lt;h1 style=&quot;background-color:rgba(255,
        99, 71, 0.5);&quot;&gt;...&lt;/h1&gt;<br>&lt;h1 style=&quot;background-color:hsla(9,
        100%, 64%, 0.5);&quot;&gt;...&lt;/h1&gt;</div>
      <a target='_blank' href='../csstryit/trycss_color_values.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-note w3-panel'>
      <h3>Узнать больше о значениях цвета</h3>
      <p>Вы узнаете больше о <a href='css_colors_rgb.php'>RGB</a>, <a href='css_colors_hex.php'>HEX</a> и <a href='css_colors_hsl.php'>HSL</a> в следующих главах учебника по CSS на нашем сайте <strong>W3Schools на русском</strong>.</p>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_comments.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_colors_rgb.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>