<?php include '../include/head.php'; ?>

  <title>CSS Размер таблицы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Размер таблицы. Как изменить размеры таблицы? Свойства width и height. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
      <h1>CSS <span class="color_h1">Размер таблицы</span></h1>
      <div class="w3-clear nextprev">
          <a class="w3-left w3-btn" href="css_table.php">&#10094; Prev</a>
          <a class="w3-right w3-btn" href="css_table_align.php">Next &#10095;</a>
      </div>
      <hr>

      <h2>Ширина и высота таблицы</h2>
      <p>Ширина и высота таблицы определяются свойствами <code class="w3-codespan">width</code> и <code class="w3-codespan">height</code>.</p>
      <p>В приведенном ниже примере ширина таблицы устанавливается равной 100%, а высота элементов <code class="w3-codespan">&lt;th&gt;</code> до 70px:</p>

      <iframe src="../csstryit/trycss_table_width_iframe.html" style="border:none;width:100%;height:167px;"></iframe>

      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              table
              {<br>
              &nbsp;&nbsp;width: 100%;<br>
              }<br><br>
              th
              {<br>
              &nbsp;&nbsp;height: 70px;<br>
              }
          </div>
          <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_table_width.html">Попробуйте сами &raquo;</a>
      </div>

      <p>Чтобы создать таблицу, занимающую только половину страницы, используйте <code class="w3-codespan">width: 50%</code>:</p>

      <iframe src="../csstryit/trycss_table_width_iframe2.html" style="border:none;width:100%;height:167px;"></iframe>

      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              table
              {<br>
              &nbsp;&nbsp;width: 50%;<br>
              }<br><br>
              th
              {<br>
              &nbsp;&nbsp;height: 70px;<br>
              }
          </div>
          <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_table_width2.html">Попробуйте сами &raquo;</a>
      </div>
      <hr>
      <div class="w3-clear nextprev">
          <a class="w3-left w3-btn" href="css_table.php">&#10094; Prev</a>
          <a class="w3-right w3-btn" href="css_table_align.php">Next &#10095;</a>
      </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>