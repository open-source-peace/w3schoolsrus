<?php include '../include/head.php'; ?>

  <title>CSS Стиль таблицы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Стиль таблицы. Стилизация таблиц. Как стилизовать таблицы? Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        table {
            font-size:16px;
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
        }
        #customers td, #customers th {
            border: 1px solid #ddd;
            text-align: left;
            padding: 8px;
        }
        #customers tr:nth-child(even){background-color: #f2f2f2}
        #customers th {
            padding-top: 11px;
            padding-bottom: 11px;
            background-color: #4CAF50;
            color: white;
        }
        .tabletest th,
        .tabletest td {
            padding: 8px;
            text-align: left;
        }
        .tabletest2 {
            font-size:15px;
            margin-top: 20px;
            margin-bottom: 40px;
            border-collapse: collapse;
            width: 100%;
        }
        .tabletest2,
        .tabletest2 th,
        .tabletest2 td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .tabletest3 th,
        .tabletest3 td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .tabletest4 {
            margin-top: 20px;
            margin-bottom: 40px;
            border-collapse: collapse;
            width: 100%;
        }
        .tabletest4,
        .tabletest4 th,
        .tabletest4 td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .tabletest4 tr:hover {
            background-color: #f5f5f5
        }
        .tabler2 th,
        .tabler2 td {
            border: none;
            text-align: left;
            padding: 8px;
        }
        .tabler2 tbody tr:nth-child(even) {
            background-color: #f2f2f2
        }
        .tabler {
            margin-top: 20px;
            margin-bottom: 40px;
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
        }
        .tabler,
        .tabler th,
        .tabler td {
            border: none;
            text-align: left;
            padding: 8px;
        }
        .tabler tbody tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
  <h1>CSS <span class="color_h1">Стиль таблицы</span></h1>
  <div class="w3-clear nextprev">
      <a class="w3-left w3-btn" href="css_table_align.php">&#10094; Prev</a>
      <a class="w3-right w3-btn" href="css_table_responsive.php">Next &#10095;</a>
  </div>
  <hr>

  <h2>Отступы в таблице - padding</h2>
  <p>Чтобы контролировать расстояние между границей и содержимым таблицы, используйте свойство <code class="w3-codespan">padding</code> на элементах <code class="w3-codespan">&lt;td&gt;</code> и <code class="w3-codespan">&lt;th&gt;</code>:</p>
  <iframe src="../csstryit/trycss_table_border-padding_iframe.html" style="border:none;width:100%;height:231px;"></iframe>
  <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate cssHigh">
          th, td
          {<br>
          &nbsp;
          padding: 15px;<br>&nbsp; text-align: left;<br>
          }</div>
      <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_table_padding.html">Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Горизонтальные разделители</h2>
  <table class="tabletest2">
      <thead>
      <tr>
          <th>Имя</th>
          <th>Фамилия</th>
          <th>Доходы</th>
      </tr>
      </thead>
      <tbody>
      <tr>
          <td>Peter</td>
          <td>Griffin</td>
          <td>$100</td>
      </tr>
      <tr>
          <td>Lois</td>
          <td>Griffin</td>
          <td>$150</td>
      </tr>
      <tr>
          <td>Joe</td>
          <td>Swanson</td>
          <td>$300</td>
      </tr>
      </tbody>
  </table>
    <p>Добавьте свойство <code class="w3-codespan">border-bottom</code> к <code class="w3-codespan">&lt;th&gt;</code> и <code class="w3-codespan">&lt;td&gt;</code> для горизонтальных разделителей:</p>
  <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate cssHigh">
          th, td {<br>&nbsp;&nbsp;border-bottom: 1px solid #ddd;<br>}</div>
      <a target="_blank" href="../csstryit/trycss_table_border_divider.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Выделение строк таблицы при наведении</h2>
    <p>Используйте селектор <code class="w3-codespan">:hover</code> на <code class="w3-codespan">&lt;tr&gt;</code>, чтобы выделить строки таблицы при наведении курсора:</p>
  <table class="tabletest4">
      <tr>
          <th>Имя</th>
          <th>Фамилия</th>
          <th>Доходы</th>
      </tr>
      <tr>
          <td>Peter</td>
          <td>Griffin</td>
          <td>$100</td>
      </tr>
      <tr>
          <td>Lois</td>
          <td>Griffin</td>
          <td>$150</td>
      </tr>
      <tr>
          <td>Joe</td>
          <td>Swanson</td>
          <td>$300</td>
      </tr>
  </table>

  <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate cssHigh">
          tr:hover {background-color: #f5f5f5;}</div>
      <a target="_blank" href="../csstryit/trycss_table_hover.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Полосатая таблица</h2>
  <table class="tabler">
      <tr>
          <th>Имя</th>
          <th>Фамилия</th>
          <th>Доходы</th>
      </tr>
      <tr>
          <td>Peter</td>
          <td>Griffin</td>
          <td>$100</td>
      </tr>
      <tr>
          <td>Lois</td>
          <td>Griffin</td>
          <td>$150</td>
      </tr>
      <tr>
          <td>Joe</td>
          <td>Swanson</td>
          <td>$300</td>
      </tr>
  </table>
  <p>Для таблиц с полосками зебры используйте селектор <code class="w3-codespan">nth-child()</code> и добавьте <code class="w3-codespan">background-color</code> (цвет фона) ко всем чётным (или нечётным) строкам таблицы:</p>
  <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate cssHigh">
          tr:nth-child(even) {background-color: #f2f2f2;}</div>
      <a target="_blank" href="../csstryit/trycss_table_striped.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
  </div>
  <hr>

  <h2>Цвет таблицы</h2>
    <p>В приведенном ниже примере указаны цвет фона и цвет текста для элементов <code class="w3-codespan">&lt;th&gt;</code>:</p>
  <table class="tabler">
      <tr style="background-color:#4CAF50;color:white;">
          <th>Имя</th>
          <th>Фамилия</th>
          <th>Доходы</th>
      </tr>
      <tr>
          <td>Peter</td>
          <td>Griffin</td>
          <td>$100</td>
      </tr>
      <tr>
          <td>Lois</td>
          <td>Griffin</td>
          <td>$150</td>
      </tr>
      <tr>
          <td>Joe</td>
          <td>Swanson</td>
          <td>$300</td>
      </tr>
  </table>

  <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate cssHigh">
          th {<br>&nbsp; background-color: #4CAF50;<br>&nbsp;&nbsp;color: white;<br>}</div>
      <a target="_blank" href="../csstryit/trycss_table_color.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
  </div>
  <hr>
  <div class="w3-clear nextprev">
      <a class="w3-left w3-btn" href="css_table_align.php">&#10094; Prev</a>
      <a class="w3-right w3-btn" href="css_table_responsive.php">Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>