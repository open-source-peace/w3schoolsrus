<?php include '../include/head.php'; ?>
  <title>CSS Margin - Поля. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Margin - Поля. Как сделать внешние отступы для HTML-элемента? Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Margin - Поля (внешние отступы)</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_border_rounded.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn'  href='css_margin_collapse.php'>Next &#10095;</a>
    </div>
    <hr>
    <div class='w3-theme-border' style='border-width:1px;border-style:solid;margin:70px;padding:5px;'>
      Этот элемент имеет поле 70 пикселей.
    </div>
    <a target='_blank' href='../csstryit/trycss_margin_intro.html' class='w3-btn'>Попробуйте сами &raquo;</a>
    <hr>

    <h2>CSS Поля</h2>
    <p>CSS свойства <code class='w3-codespan'>margin</code> используются для создания пространства вокруг элементов за пределами любых определенных границ (внешних отступов).</p>
    <p>Благодаря CSS у вас есть полный контроль над полями. Есть свойства для установки поля для каждой стороны элемента (вверху, справа, внизу и слева).</p>
    <hr>

    <h2>Margin - Отдельные стороны</h2>
    <p>CSS имеет свойства для указания поля для каждой стороны элемента:</p>
    <ul>
      <li><code class='w3-codespan'>margin-top</code></li>
      <li><code class='w3-codespan'>margin-right</code></li>
      <li><code class='w3-codespan'>margin-bottom</code></li>
      <li><code class='w3-codespan'>margin-left</code></li>
    </ul>
    <p>Все свойства полей могут иметь следующие значения:</p>
    <ul>
      <li>auto - браузер вычисляет margin</li>
      <li><em>length</em> - указывает поле в пикселях, pt, см и т.д.</li>
      <li><em>%</em> - указывает поле в % от ширины содержащего элемента</li>
      <li>inherit - указывает, что поле должно быть унаследовано от родительского элемента</li>
    </ul>

    <p><b>Совет:</b> Отрицательные значения допускаются.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Установите разные поля для всех четырех сторон элемента &lt;p&gt;:</p>
      <div class='w3-code notranslate cssHigh'>
        p {<br>&nbsp;&nbsp;margin-top: 100px;<br>
        &nbsp;&nbsp;margin-bottom: 100px;<br>
        &nbsp;&nbsp;margin-right: 150px;<br>
        &nbsp;&nbsp;margin-left: 80px;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_margin_sides.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Margin - Сокращенное свойство</h2>
    <p>Чтобы сократить код, можно указать все свойства полей в одном свойстве.</p>
    <p>Свойство <code class='w3-codespan'>margin</code> является сокращенным свойством для следующих индивидуальных свойств полей:</p>
    <ul>
      <li><code class='w3-codespan'>margin-top</code></li>
      <li><code class='w3-codespan'>margin-right</code></li>
      <li><code class='w3-codespan'>margin-bottom</code></li>
      <li><code class='w3-codespan'>margin-left</code></li>
    </ul>

    <p>Итак, вот как это работает:</p>
    <p>Если свойство <code class='w3-codespan'>margin</code> имеет четыре значения:</p>
    <ul>
      <li><b>margin: 25px 50px 75px 100px;</b>
        <ul>
            <li>верхнее поле 25px</li>
            <li>правое поле 50px</li>
            <li>нижнее поле 75px</li>
            <li>левое поле 100px</li>
        </ul>
      </li>
    </ul>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Используйте сокращенное свойство поля с четырьмя значениями:</p>
      <div class='w3-code notranslate cssHigh'>
        p {<br>&nbsp;&nbsp;margin: 25px 50px 75px 100px;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_margin_shorthand_4val.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <p>Если свойство <code class='w3-codespan'>margin</code> имеет три значения:</p>
    <ul>
      <li><b>margin: 25px 50px 75px;</b>
          <ul>
              <li>верхнее поле 25px</li>
              <li>правое и левое поля 50px</li>
              <li>нижнее поле 75px</li>
          </ul>
      </li>
    </ul>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Используйте сокращенное свойство поля с тремя значениями:</p>
      <div class='w3-code notranslate cssHigh'>
        p {<br>&nbsp;
        margin: 25px 50px 75px;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_margin_shorthand_3val.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <p>Если свойство <code class='w3-codespan'>margin</code> имеет два значения:</p>
    <ul>
      <li><b>margin: 25px 50px;</b>
          <ul>
              <li>верхнее и нижнее поля 25px</li>
              <li>правое и левое поля 50px</li>
          </ul>
      </li>
    </ul>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Используйте сокращенное свойство поля с двумя значениями:</p>
      <div class='w3-code notranslate cssHigh'>
        p {<br>&nbsp;
        margin: 25px 50px;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_margin_shorthand_2val.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <p>Если свойство <code class='w3-codespan'>margin</code> имеет одно значение:</p>
    <ul>
      <li><b>margin: 25px;</b>
          <ul>
              <li>все четыре поля 25px</li>
          </ul>
      </li>
    </ul>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Используйте сокращенное свойство поля с одним значением:</p>
      <div class='w3-code notranslate cssHigh'>
        p {<br>&nbsp;&nbsp;margin: 25px;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_margin_shorthand_1val.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Значение auto</h2>
    <p>Вы можете установить для свойства поля значение <code class='w3-codespan'>auto</code> чтобы горизонтально центрировать элемент в его контейнере.</p>
    <p>При этом элемент займёт указанную ширину, а оставшееся пространство будет разделено поровну между левым и правым полями.</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Используйте margin: auto:</p>
      <div class='w3-code notranslate cssHigh'>
        div {<br>&nbsp; width: 300px;<br>&nbsp; margin:
        auto;<br>&nbsp;&nbsp;border: 1px solid red;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_margin_auto.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Значение inherit</h2>
    <p>В этом примере левое поле элемента &lt;p class=&quot;ex1&quot;&gt; унаследует от родительского элемента (&lt;div&gt;):</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Использование наследуемого значения:</p>
      <div class='w3-code notranslate cssHigh'>
        div {<br>&nbsp;&nbsp;border: 1px solid red;<br>&nbsp;&nbsp;margin-left: 100px;<br>}<br><br>p.ex1 {<br>
        &nbsp; margin-left:
        inherit;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_margin-left_inherit.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_border_rounded.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn'  href='css_margin_collapse.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>