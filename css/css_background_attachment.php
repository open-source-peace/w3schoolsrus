<?php include '../include/head.php'; ?>
<title>CSS Вложение изображение фона. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Вложенное изображения фона. Фиксированное и прокручиваемое фоновое изображение на веб-странице с помощью CSS. Как сделать? Стилизация веб-страниц. Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Background Attachment - Вложение фона</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_background_repeat.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_background_shorthand.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS background-attachment</h2>
    <p>Свойство <code class='w3-codespan'>background-attachment</code> определяет, должно ли фоновое изображение прокручиваться или фиксироваться (не будет прокручиваться вместе с остальной частью страницы):</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Укажите, что фоновое изображение должно быть фиксировано:</p>
      <div class='w3-code notranslate cssHigh'>
        body
        {<br>
        &nbsp;&nbsp;background-image: url(&quot;../images/img_tree.png&quot;);<br>
        &nbsp;&nbsp;background-repeat: no-repeat;<br>
        &nbsp;&nbsp;background-position: right top;<br>
        &nbsp; background-attachment: fixed;<br>}
      </div>
      <a target='_blank' href='../csstryit/trycss_background-image_attachment.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Укажите, что фоновое изображение должно прокручиваться вместе с остальной частью страницы:</p>
      <div class='w3-code notranslate cssHigh'>
        body
        {<br>
        &nbsp;&nbsp;background-image: url(&quot;../images/img_tree.png&quot;);<br>
        &nbsp;&nbsp;background-repeat: no-repeat;<br>
        &nbsp;&nbsp;background-position: right top;<br>
        &nbsp; background-attachment: scroll;<br>}
      </div>
      <a target='_blank' href='../csstryit/trycss_background-image_attachment2.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_background_repeat.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_background_shorthand.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>