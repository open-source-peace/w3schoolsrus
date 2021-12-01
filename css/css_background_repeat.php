<?php include '../include/head.php'; ?>

  <title>CSS Повторение изображение фона. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Повторяющееся изображение фона. Как убрать повторение фонового изображения на веб-странице с помощью CSS? Картинка в качестве фона. Стилизация веб-страниц. Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Background Repeat - Повторение фона</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_background_image.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_background_attachment.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS background-repeat</h2>
    <p>По умолчанию свойство <code class='w3-codespan'>background-image</code> повторяет изображение как по горизонтали, так и по вертикали.</p>
    <p>Некоторые изображения следует повторять только по горизонтали или вертикали, иначе они будут выглядеть странно, как это:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        body
        {<br>
        &nbsp;&nbsp;background-image: url(&quot;../images/gradient_bg.png&quot;);<br>
        }
      </div>
      <a target='_blank' href='../csstryit/trycss_background-image_gradient1.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <p>Если изображение выше повторяется только по горизонтали (<code class='w3-codespan'>background-repeat: repeat-x;</code>), фон будет выглядеть лучше:</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        body
        {<br>
        &nbsp;&nbsp;background-image: url(&quot;../images/gradient_bg.png&quot;);<br>
        &nbsp;&nbsp;background-repeat: repeat-x;<br>
        }
      </div>
      <a target='_blank' href='../csstryit/trycss_background-image_gradient2.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <div class='w3-panel w3-note'>
      <p><b>Совет:</b> Чтобы повторить изображение по вертикали, установите <code class='w3-codespan'>background-repeat: repeat-y;</code></p>
    </div>
    <hr>

    <h2>CSS background-repeat: no-repeat</h2>
    <p>Отображение фонового изображения только один раз также определяется свойством <code class='w3-codepan'>background-repeat</code>:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Показать фоновое изображение только один раз:</p>
      <div class='w3-code notranslate cssHigh'>
        body
        {<br>
        &nbsp;&nbsp;background-image: url(&quot;../images/img_tree.png&quot;);<br>
        &nbsp;&nbsp;background-repeat: no-repeat;<br>
        }
      </div>
      <a target='_blank' href='../csstryit/trycss_background-image_norepeat.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <p>В приведенном выше примере фоновое изображение помещается в то же место, что и текст. Мы хотим изменить положение изображения, чтобы оно не слишком мешало тексту.</p>
    <hr>

    <h2>CSS background-position</h2>
    <p>Свойство <code class='w3-codespan'>background-position</code> используется для указания положения фонового изображения.</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Разместите фоновое изображение в правом верхнем углу:</p>
      <div class='w3-code notranslate cssHigh'>
        body
        {<br>
        &nbsp;
        background-image: url(&quot;../images/img_tree.png&quot;);<br>
        &nbsp;
        background-repeat: no-repeat;<br>
        &nbsp;
        background-position: right top;<br>
        }
      </div>
      <a target='_blank' href='../csstryit/trycss_background-image_position.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_background_image.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_background_attachment.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>