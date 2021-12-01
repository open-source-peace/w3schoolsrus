<?php include '../include/head.php'; ?>

  <title>CSS Ширина границы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Ширина границы. Как установить ширину границы HTML-элемента? Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Ширина границы</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_border.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_border_color.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>CSS Border Width - Ширина границы</h2>
    <p>Свойство <code class='w3-codespan'>border-width</code> определяет ширину (толщину) четырех границ.</p>
    <p>Ширина может быть задана как определенный размер (в пикселях, pt, см, em и т.д.) Или с помощью одного из трех предварительно определенных значений:  thin, medium, thick (тонкая, средняя, толстая):</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Демонстрация разной ширины границы:</p>
      <div class='w3-code notranslate cssHigh'>
        p.one
        {<br>
        &nbsp;
        border-style: solid;<br>
        &nbsp;
        border-width: 5px;<br>
        }<br><br>
        p.two
        {<br>
        &nbsp;
        border-style: solid;<br>
        &nbsp;&nbsp;border-width: medium;<br>
        }<br><br>p.three
        {<br>
        &nbsp;
        border-style: dotted;<br>
        &nbsp;&nbsp;border-width: 2px;<br>
        }
        <br><br>p.four
        {<br>
        &nbsp;
        border-style: dotted;<br>
        &nbsp;&nbsp;border-width: thick;<br>
        }
      </div>
      <p>Результат:</p>
      <div class='w3-white w3-padding notranslate'>
        <div style='border:5px solid black;padding:8px;margin-top:8px;margin-bottom:16px'>5px border-width</div>
        <div style='border:medium solid black;padding:8px;margin-top:8px;margin-bottom:16px'>medium border-width</div>
        <div style='border:2px dotted black;padding:8px;margin-top:8px;margin-bottom:16px'>2px border-width</div>
        <div style='border:thick dotted black;padding:8px;margin-top:8px;margin-bottom:8px'>thick border-width</div>
      </div>
      <a target='_blank' href='../csstryit/trycss_border-width.html' class='w3-btn w3-margin-bottom w3-margin-top'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Определенная ширина стороны</h2>
    <p>Свойство <code class='w3-codespan'>border-width</code> может иметь от одного до четырех значений (для верхней границы, правой границы, нижней границы и левой границы):</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate cssHigh'>
        p.one {<br>&nbsp; border-style: solid;<br>&nbsp; border-width: 5px 20px; /* 5 пикселей сверху и снизу, 20 пикселей по бокам */<br>}<br><br>p.two {<br>&nbsp; border-style:
        solid;<br>&nbsp; border-width: 20px 5px; /* 20 пикселей сверху и снизу, по 5 пикселей по бокам */<br>}<br>
        <br>p.three {<br>&nbsp; border-style: solid;<br>&nbsp; border-width: 25px 10px
        4px 35px; /* 25 пикселей вверху, 10 пикселей справа, 4 пикселя внизу и 35 пикселей слева */<br>}</div>
      <a target='_blank' href='../csstryit/trycss_border-width2.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_border.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_border_color.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>