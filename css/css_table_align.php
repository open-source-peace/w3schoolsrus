<?php include '../include/head.php'; ?>

  <title>CSS Выравнивание таблицы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Выравнивание таблицы по вертикали и горизонтали. Как выровнять таблицу? Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
      <h1>CSS <span class="color_h1">Выравнивание таблицы</span></h1>
      <div class="w3-clear nextprev">
          <a class="w3-left w3-btn" href="css_table_size.php">&#10094; Prev</a>
          <a class="w3-right w3-btn" href="css_table_style.php">Next &#10095;</a>
      </div>
      <hr>

      <h2>Горизонтальное выравнивание</h2>
      <p>Свойство <code class="w3-codespan">text-align</code> устанавливает горизонтальное выравнивание (например, слева, справа или по центру) содержимого в <code class="w3-codespan">&lt;th&gt;</code> или <code class="w3-codespan">&lt;td&gt;</code>.</p>
      <p>По умолчанию содержимое элемента <code class="w3-codespan">&lt;th&gt;</code> выровнено по центру, а содержимое элемента <code class="w3-codespan">&lt;td&gt;</code> выровнено слева.</p>
      <p>Чтобы выровнять по центру содержимое элемента <code class="w3-codespan">&lt;td&gt;</code> также используйте свойство <code class="w3-codespan">text-align: center</code>:</p>
      <iframe src="../csstryit/trycss_table_align_iframe_center.html" style="border:none;width:100%;height:120px;"></iframe>

      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              td
              {<br>
              &nbsp;
              text-align: center;<br>
              }</div>
          <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_table_align_center.html">Попробуйте сами &raquo;</a>
      </div>
      <p>Чтобы выровнять содержимое по левому краю, принудительно выровняйте элементы <code class="w3-codespan">&lt;th&gt;</code> по левому краю с помощью свойства <code class="w3-codespan">text-align: left</code>:</p>
      <iframe src="../csstryit/trycss_table_align_iframe.html" style="border:none;width:100%;height:120px;"></iframe>

      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              th
              {<br>
              &nbsp;
              text-align: left;<br>
              }</div>
          <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_table_align.html">Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Вертикальное выравнивание</h2>
      <p>Свойство <code class="w3-codespan">vertical-align</code> устанавливает вертикальное выравнивание (например, по верхнему краю, нижнему краю или по середине) содержимого в <code class="w3-codespan">&lt;th&gt;</code> или <code class="w3-codespan">&lt;td&gt;</code>.</p>
      <p>По умолчанию вертикальное выравнивание содержимого в таблице посередине (для элементов <code class="w3-codespan">&lt;th&gt;</code> и <code class="w3-codespan">&lt;td&gt;</code>).</p>
      <p>В следующем примере устанавливается вертикальное выравнивание текста по низу для элементов <code class="w3-codespan">&lt;td&gt;</code>:</p>
      <iframe src="../csstryit/trycss_table_vertical-align_iframe.html" style="border:none;width:100%;height:206px;"></iframe>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              td
              {<br>
              &nbsp;
              height: 50px;<br>
              &nbsp;
              vertical-align: bottom;<br>
              }</div>
          <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss_table_vertical-align.html">Попробуйте сами &raquo;</a>
      </div>

      <hr>
      <div class="w3-clear nextprev">
          <a class="w3-left w3-btn" href="css_table_size.php">&#10094; Prev</a>
          <a class="w3-right w3-btn" href="css_table_style.php">Next &#10095;</a>
      </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>