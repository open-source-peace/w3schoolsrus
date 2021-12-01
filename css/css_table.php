<?php include '../include/head.php'; ?>

  <title>CSS Таблицы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Таблицы. Как стилизуются таблицы на веб-страницах? Стилизация таблиц. Границы. Свёртывание границ таблицы. Примеры. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        table#customers {
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
      <h1>CSS <span class="color_h1">Таблицы</span></h1>
      <div class="w3-clear nextprev">
          <a class="w3-left w3-btn" href="css_list.php">&#10094; Prev</a>
          <a class="w3-right w3-btn" href="css_table_size.php">Next &#10095;</a>
      </div>
      <hr>

      <p class="intro">Внешний вид <strong>HTML таблицы</strong> можно значительно улучшить с помощью <strong>CSS</strong>:</p>
      <table id="customers">
          <tr>
              <th>Company</th>
              <th>Contact</th>
              <th>Country</th>
          </tr>
          <tr>
              <td>Alfreds Futterkiste</td>
              <td>Maria Anders</td>
              <td>Germany</td>
          </tr>
          <tr class="alt">
              <td>Berglunds snabbköp</td>
              <td>Christina Berglund</td>
              <td>Sweden</td>
          </tr>
          <tr>
              <td>Centro comercial Moctezuma</td>
              <td>Francisco Chang</td>
              <td>Mexico</td>
          </tr>
          <tr class="alt">
              <td>Ernst Handel</td>
              <td>Roland Mendel</td>
              <td>Austria</td>
          </tr>
          <tr>
              <td>Island Trading</td>
              <td>Helen Bennett</td>
              <td>UK</td>
          </tr>
          <tr class="alt">
              <td>Königlich Essen</td>
              <td>Philip Cramer</td>
              <td>Germany</td>
          </tr>
          <tr>
              <td>Laughing Bacchus Winecellars</td>
              <td>Yoshi Tannamuri</td>
              <td>Canada</td>
          </tr>
          <tr class="alt">
              <td>Magazzini Alimentari Riuniti</td>
              <td>Giovanni Rovelli</td>
              <td>Italy</td>
          </tr>
      </table>
      <br>
      <a target="_blank" href="../csstryit/trycss_table_fancy.html" class="w3-btn">Попробуйте сами &raquo;</a>
      <hr>

      <h2>Границы таблицы</h2>
      <p>Чтобы указать границы таблицы в CSS, используйте свойство <code class="w3-codespan">border</code>.</p>
      <p>В приведенном ниже примере указана чёрная граница для элементов <code class="w3-codespan">&lt;table&gt;</code>, <code class="w3-codespan">&lt;th&gt;</code> и <code class="w3-codespan">&lt;td&gt;</code>:</p>
      <iframe src="../csstryit/trycss_table_border_iframe.html" style="border:none;height:106px;"></iframe>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              table, th, td {<br>
              &nbsp;&nbsp;border: 1px solid black;<br>
              }
          </div>
          <a target="_blank" href="../csstryit/trycss_table_border.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Таблица на всю ширину</h2>
      <p>В некоторых случаях приведенная выше таблица может показаться маленькой. Если вам нужна таблица, которая должна занимать весь экран (во всю ширину), добавьте <code class="w3-codespan">width: 100%</code> к элементу <code class="w3-codespan">&lt;table&gt;</code>:</p>
      <iframe src="../csstryit/trycss_table_fullwidth_iframe.html" style="border:none;height:106px;width:100%;"></iframe>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              table {<br>
              &nbsp;&nbsp;width: 100%;<br>
              }
          </div>
          <a target="_blank" href="../csstryit/trycss_table_fullwidth.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
      </div>

      <div class="w3-note w3-panel">
          <h3>Двойные границы</h3>
          <p>Обратите внимание, что таблица в приведенных выше примерах имеет двойные границы. Это связано с тем, что и таблица, и элементы <code class="w3-codespan">&lt;th&gt;</code> и <code class="w3-codespan">&lt;td&gt;</code> имеют отдельные границы.</p>
          <p>Чтобы удалить двойные границы, посмотрите на пример ниже.</p>
      </div>
      <hr>

      <h2>Свернуть границы таблицы</h2>
      <p>Свойство <code class="w3-codespan">border-collapse</code> устанавливает, должны ли границы таблицы сворачиваться в единую границу:</p>
      <iframe src="../csstryit/trycss_table_border-collapse_iframe.html" style="border:none;height:96px;width:100%;"></iframe>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              table
              {<br>
              &nbsp;&nbsp;border-collapse: collapse;<br>
              }</div>
          <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_table_border-collapse.html">Попробуйте сами &raquo;</a>
      </div>

      <p style="margin-top:25px;">Если вам нужна лишь граница вокруг таблицы, укажите только свойство <code class="w3-codespan">border</code> для <code class="w3-codespan">&lt;table&gt;</code>:</p>
      <iframe src="../csstryit/trycss_table_border2_iframe.html" style="border:none;height:96px;width:100%;"></iframe>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              table
              {<br>&nbsp; border: 1px solid black;<br>
              }</div>
          <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_table_border2.html">Попробуйте сами &raquo;</a>
      </div>
      <hr>
      <div class="w3-clear nextprev">
          <a class="w3-left w3-btn" href="css_list.php">&#10094; Prev</a>
          <a class="w3-right w3-btn" href="css_table_size.php">Next &#10095;</a>
      </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>