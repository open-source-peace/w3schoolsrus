<?php include '../include/head.php'; ?>
  <title>CSS Комментарии. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Комментарии. Применение комментариев в CSS-коде. Как правильно писать комментарии в каскадных таблицах стилей? Стилизация веб-страниц. Пример кода. Современный учебник. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Комментарии</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_howto.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_colors.php'>Next &#10095;</a>
    </div>
    <hr>
    <h2>CSS Комментарии</h2>
    <p>Комментарии используются для объяснения кода и могут помочь при редактировании исходного кода позже.</p>
    <p>Комментарии игнорируются браузерами.</p>
    <p>CSS комментарий помещается внутри элемента <code class='w3-codespan'>&lt;style&gt;</code>, начинается с <code class='w3-codespan'>/*</code> и заканчивается с <code class='w3-codespan'>*/</code>:</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        /* Это однострочный комментарий */<br>p
        {<br>
        &nbsp;
        color: red;<br>
        }</div>
      <a target='_blank' href='../csstryit/trycss_comments.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <p>Вы можете добавлять комментарии в любом месте кода:</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        p
        {<br>
        &nbsp;
        color: red;&nbsp;
        /* Установить красный цвет текста */<br>
        }</div>
      <a target='_blank' href='../csstryit/trycss_comments2.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <p>Комментарии также могут занимать несколько строк:</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        /* Это<br>многострочный<br>комментарий */
        <br><br>p
        {<br>
        &nbsp;
        color: red;<br>
        }<br>
      </div>
      <a target='_blank' href='../csstryit/trycss_comments3.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HTML и CSS комментарии</h2>
    <p>Из учебника по HTML вы узнали, что можно добавлять комментарии к исходному HTML-файлу, используя синтаксис <code class='w3-codespan'>&lt;!--...--&gt;</code>.</p>
    <p>В следующем примере используется комбинация комментариев HTML и CSS:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>&lt;style&gt;<br>p {<br>&nbsp; color: red; /* Установить красный цвет текста */<br>} <br>&lt;/style&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;h2&gt;My
        Heading&lt;/h2&gt;<br><br>&lt;!-- Эти параграфы будут красными --&gt;<br>&lt;p&gt;Hello
        World!&lt;/p&gt;<br>&lt;p&gt;Этот параграф оформлен с помощью CSS.&lt;/p&gt;<br>&lt;p&gt;CSS комментарии не отображаются в выводе.&lt;/p&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;<br>
      </div>
      <a target='_blank' href='../csstryit/trycss_comments4.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_howto.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_colors.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>