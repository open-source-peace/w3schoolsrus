<?php include '../include/head.php'; ?>

  <title>CSS Синтаксис. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Синтаксис. Как правильно создавать каскадные таблицы стилей? Стилизация веб-страниц. Примеры кода. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Синтаксис</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_intro.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_selectors.php'>Next &#10095;</a>
    </div>
    <hr>
    <h2>CSS Синтаксис</h2>
    <p>Набор правил <strong>CSS</strong> состоит из <strong>селектора</strong> и <strong>блока объявления</strong> (декларации):</p>
    <p><img src='../images/selector.gif' alt='CSS selector' class='w3-image'></p>
    <p><strong>Селектор</strong> указывает на элемент <strong>HTML</strong>, который вы хотите стилизовать.</p>
    <p><strong>Блок объявлений</strong> содержит одно или несколько объявлений, разделенных точкой с запятой.</p>
    <p>Каждое объявление включает имя свойства <strong>CSS</strong> и значение, разделенное двоеточием.</p>
    <p>Объявление <strong>CSS</strong> всегда заканчивается точкой с запятой, а блоки объявления заключаются в фигурные скобки.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>В этом примере все <code class='w3-codespan'>&lt;p&gt;</code> элементы будут выровнены по центру с текстом красного цвета:</p>
      <div class='w3-code notranslate cssHigh'>
        p
        {<br>
        &nbsp;&nbsp;color: red;<br>
        &nbsp;&nbsp;text-align: center;<br>
        }
      </div>
      <a target='_blank' href='../csstryit/trycss_syntax1.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS Комментарии</h2>
    <p>Комментарии используются для пояснения кода и могут помочь при редактировании исходного кода позднее.</p>
    <p>Комментарии игнорируются браузерами.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Комментарий CSS начинается с /* и заканчивается */. Комментарии также могут занимать несколько строк:&nbsp;</p>
      <div class='w3-code notranslate cssHigh'>
        p
        {<br>
        &nbsp;
        color: red;<br>
        &nbsp;
        /* Это однострочный комментарий */<br>
        &nbsp;&nbsp;text-align: center;<br>
        }<br><br>/* Это<br>многострочный<br>комментарий */
      </div>
      <a target='_blank' href='../csstryit/trycss_syntax2.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_intro.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_selectors.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>