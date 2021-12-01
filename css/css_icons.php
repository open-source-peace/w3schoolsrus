<?php include '../include/head.php'; ?>

<title>CSS Иконки. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Иконки. Как используются иконки на веб-страницах? Какие бывают иконки (значки)? Что такое наборы иконок? Где скачать иконки для сайтов? Наборы иконок Fontawesome, Bootstrap, Google. <?php include '../include/description.php'; ?>'>
<link rel="stylesheet" type="text/css" href="../cdn/font-awesome/4.7.0/css/font-awesome.min.css">

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
      <h1>CSS <span class="color_h1">Иконки</span></h1>
      <div class="w3-clear nextprev">
          <a class="w3-left w3-btn" href="css_font.php">&#10094; Prev</a>
          <a class="w3-right w3-btn" href="css_link.php">Next &#10095;</a>
      </div>
      <hr>

      <div class="w3-row w3-center">

          <div class="w3-third">
              <i class="fa fa-cloud" style="font-size:36px;"></i>
              <i class="fa fa-cloud" style="font-size:60px;"></i>
              <i class="fa fa-cloud w3-text-red" style="font-size:72px;"></i>
          </div>

          <div class="w3-third">

              <i class="fa fa-car" style="font-size:36px;"></i>
              <i class="fa fa-car w3-text-dark-grey" style="font-size:60px;"></i>
              <i class="fa fa-car w3-text-grey" style="font-size:72px;"></i>

          </div>
          <div class="w3-third">

              <i class="fa fa-thumbs-o-up" style="font-size:36px;"></i>
              <i class="fa fa-thumbs-o-up" style="font-size:60px;"></i>
              <i class="fa fa-thumbs-o-up w3-text-indigo" style="font-size:72px;"></i>
          </div>

      </div>
      <hr>

      <h2>Как добавить иконки</h2>
      <p>Самый простой способ добавить иконку на свою HTML-страницу - использовать библиотеку иконок, например, Font Awesome.</p>
      <p>Добавьте название указанного класса иконок в любой встроенный элемент HTML (например, <code class="w3-codespan">&lt;i&gt;</code> или <code class="w3-codespan">&lt;span&gt;</code>).</p>
      <p>Все иконки в библиотеках иконок ниже представляют собой масштабируемые векторы, которые можно настраивать с помощью CSS (размер, цвет, тень и т.д.)</p>
      <hr>

      <h2>Font Awesome Иконки</h2>
      <p>Чтобы использовать иконки Font Awesome, перейдите на <a href="https://fontawesome.com" target="_blank" rel="nofollow">
              fontawesome.com</a>, войдите в систему и получите код для добавления в раздел <code class="w3-codespan">&lt;head&gt;</code> вашей HTML-страницы.:</p>
      <p><code class="w3-codespan">&lt;script src="https://kit.fontawesome.com/<em>ваш код</em>.js"&gt;&lt;/script&gt;</code></p>
      <p>Узнайте больше о том, как начать использовать Font Awesome в нашем <a href="../icons/fontawesome5_intro.php">Font Awesome 5 Учебнике</a>.</p>
      <p><strong>Примечание:</strong> Не требуется загрузка или установка!</p>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate htmlHigh">
              &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>
              &lt;script src=&quot;https://kit.fontawesome.com/26e3ee569a.js&quot;&gt;&lt;/script&gt;<br>
              &lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;i class="fas fa-cloud"&gt;&lt;/i&gt;<br>&lt;i  class="fas fa-heart"&gt;&lt;/i&gt;<br>&lt;i class="fas fa-car"&gt;&lt;/i&gt;<br>&lt;i class="fas fa-file"&gt;&lt;/i&gt;<br>
              &lt;i class="fas fa-bars"&gt;&lt;/i&gt;<br><br>
              &lt;/body&gt;<br>&lt;/html&gt;
          </div>
          <p>Результат:</p>
          <div class="w3-white w3-padding">
              <i class="fa fa-cloud"></i>
              <i class="fa fa-heart"></i>
              <i class="fa fa-car"></i>
              <i class="fa fa-file"></i>
              <i class="fa fa-bars"></i>
          </div>
          <a class="w3-btn w3-margin-bottom w3-margin-top" href="../csstryit/trycss_icons_fa.html" target="_blank">Попробуйте сами &raquo;</a>
      </div>
      <div class="w3-note w3-panel">
          <p>Для полного ознакомления со всеми иконками Font Awesome, посетите <a href="../icons/icons_reference.php">Справочник иконок</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
      </div>
      <hr>

      <h2>Bootstrap иконки</h2>
      <p>Чтобы использовать глификонки Bootstrap, добавьте следующую строку в раздел <code class="w3-codespan">&lt;head&gt;</code> вашей HTML-страницы:</p>
      <p style="text-align:left;"><code class="w3-codespan">&lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"&gt;</code></p>
      <p><strong>Примечание:</strong> Не требуется загрузка или установка!</p>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate htmlHigh">
              &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>
              &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br>
              <br>&lt;i class="glyphicon glyphicon-cloud"&gt;&lt;/i&gt;<br>&lt;i class="glyphicon  glyphicon-remove"&gt;&lt;/i&gt;<br>&lt;i class="glyphicon glyphicon-user"&gt;&lt;/i&gt;<br>&lt;i  class="glyphicon glyphicon-envelope"&gt;&lt;/i&gt;<br>&lt;i class="glyphicon glyphicon-thumbs-up"&gt;&lt;/i&gt;<br><br>
              &lt;/body&gt;<br>&lt;/html&gt;
          </div>
          <p>Результат:</p>
          <div class="w3-white w3-padding">
              <iframe src="../csstryit/trycss_icons_bs_ifr.html" style="width:100%;border:none;height:25px;overflow:hidden;padding-top:5px"></iframe>
          </div>
          <a class="w3-btn w3-margin-bottom w3-margin-top" href="../csstryit/trycss_icons_bs.html" target="_blank">Попробуйте сами &raquo;</a></div>
      <hr>

      <h2>Google Иконки</h2>
      <p>Чтобы использовать Google иконки, добавьте следующую строку внутри раздела <code class="w3-codespan">&lt;head&gt;</code> вашей HTML страницы:</p>
      <p><code class="w3-codespan">&lt;link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"&gt;</code></p>
      <p><strong>Примечание:</strong> Не требуется загрузка или установка!</p>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate htmlHigh">
              &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>
              &lt;link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br>
              <br>&lt;i class="material-icons"&gt;cloud&lt;/i&gt;<br>&lt;i  class="material-icons"&gt;favorite&lt;/i&gt;<br>&lt;i  class="material-icons"&gt;attachment&lt;/i&gt;<br>&lt;i  class="material-icons"&gt;computer&lt;/i&gt;<br>&lt;i  class="material-icons"&gt;traffic&lt;/i&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;
          </div>
          <p>Результат:</p>
          <div class="w3-white">
              <iframe src="../csstryit/trycss_icons_google_ifr.html" style="width:100%;border:none;height:50px;overflow:hidden;padding-left:6px;padding-top:6px"></iframe>
          </div>
          <a class="w3-btn w3-margin-bottom w3-margin-top" href="../csstryit/trycss_icons_google.html" target="_blank">Попробуйте сами &raquo;</a>
      </div>

      <div class="w3-note w3-panel">
          <p>Для получения полного списка всех иконок, посетите <a href="../icons/index.php">Учебник иконок</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
      </div>
      <p><b>Примечание.</b> Ссылки на сайты иконок (Fontawesome, Bootstrap, Google-иконки) могут меняться в зависимости от выхода новой версии набора иконок. Поэтому для получения наиболее новой версии набора иконок и ссылки на них посетите официальный сайт необходимого набора и скопируйте нужную ссылку.</p>

      <hr>
      <div class="w3-clear nextprev">
          <a class="w3-left w3-btn" href="css_font.php">&#10094; Prev</a>
          <a class="w3-right w3-btn" href="css_link.php">Next &#10095;</a>
      </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>