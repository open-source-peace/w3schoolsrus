<?php include '../include/head.php'; ?>
<title>CSS Границы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Границы. Как добавить границу к HTML-элементу? Виды границы. Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Границы</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_background_shorthand.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_border_width.php'>Next &#10095;</a>
    </div>
    <hr>
    <h2>Свойства CSS Border - Граница</h2>
    <p>CSS свойства <code class='w3-codespan'>border</code> позволяют указать стиль, ширину и цвет границы элемента.</p>
    <div class='w3-container w3-border w3-border-black w3-margin-top'>
      <p>У меня границы со всех сторон.</p>
    </div>
    <br>
    <div class='w3-container w3-border-bottom w3-border-red'>
      <p>У меня красная нижняя граница.</p>
    </div>
    <br>
    <div class='w3-container w3-border w3-round-xlarge'>
      <p>У меня округлые границы.</p>
    </div>
    <br>
    <div class='w3-container w3-pale-blue w3-leftbar w3-border-blue'>
      <p>У меня синяя левая граница.</p>
    </div>
    <hr>

    <h2>Стиль CSS Границы</h2>
    <p>Свойство <code class='w3-codespan'>border-style</code> определяет, какую границу отображать.</p>
    <p>Допускаются следующие значения:</p>
    <ul>
      <li><code class='w3-codespan'>dotted</code> - Определяет точечную границу.</li>
      <li><code class='w3-codespan'>dashed</code> - Определяет пунктирную границу.</li>
      <li><code class='w3-codespan'>solid</code> - Определяет сплошную границу.</li>
      <li><code class='w3-codespan'>double</code> - Определяет двойную границу.</li>
      <li><code class='w3-codespan'>groove</code> - Определяет трехмерную рифленую границу. Эффект зависит от значения цвета границы.</li>
      <li><code class='w3-codespan'>ridge</code> - Определяет трехмерную ребристую границу. Эффект зависит от значения цвета границы.</li>
      <li><code class='w3-codespan'>inset</code> - Определяет внутреннюю трехмерную границу. Эффект зависит от значения цвета границы.</li>
      <li><code class='w3-codespan'>outset</code> - Определяет наружную трехмерную границу. Эффект зависит от значения цвета границы.</li>
      <li><code class='w3-codespan'>none</code> - Не определяет границы.</li>
      <li><code class='w3-codespan'>hidden</code> - Определяет скрытую границу.</li>
    </ul>

    <p>Свойство <code class='w3-codespan'>border-style</code> может иметь от одного до четырех значений (для верхней границы, правой границы, нижней границы и левой границы).</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Демонстрация различных стилей границ:</p>
      <div class='w3-code notranslate cssHigh'>
        p.dotted {border-style: dotted;}<br>p.dashed
        {border-style: dashed;}<br>p.solid {border-style: solid;}<br>p.double
        {border-style: double;}<br>p.groove {border-style: groove;}<br>p.ridge
        {border-style: ridge;}<br>p.inset {border-style: inset;}<br>p.outset
        {border-style: outset;}<br>p.none {border-style: none;}<br>p.hidden {border-style: hidden;}<br>
        p.mix {border-style: dotted dashed solid double;}</div>
      <p>Результат:</p>
      <div class='w3-white w3-padding notranslate'>
        <p style='border-style: dotted;padding:2px 4px;'>Точечная граница.</p>
        <p style='border-style: dashed;padding:2px 4px;'>Пунктирная граница.</p>
        <p style='border-style: solid;padding:2px 4px;'>Сплошная граница.</p>
        <p style='border-style: double;padding:2px 4px;'>Двойная граница.</p>
        <p style='border-style: groove;padding:2px 4px;'>Рифлёная граница. Эффект зависит от значения цвета границы.</p>
        <p style='border-style: ridge;padding:2px 4px;'>Ребристая граница. Эффект зависит от значения цвета границы.</p>
        <p style='border-style: inset;padding:2px 4px;'>Вставная граница. Эффект зависит от значения цвета границы.</p>
        <p style='border-style: outset;padding:2px 4px;'>Выпуклая граница. Эффект зависит от значения цвета границы.</p>
        <p style='border-style: none;padding:2px 4px;'>Нет границы.</p>
        <p style='border-style: hidden;padding:2px 4px;'>Скрытая граница.</p>
        <p style='border-style: dotted dashed solid double;padding:2px 4px;'>Смешанная граница.</p>
      </div>
      <a target='_blank' href='../csstryit/trycss_border-style.html' class='w3-btn w3-margin-top w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <div class='w3-panel w3-note'>
      <p><b>Примечание:</b> Ни одно из ДРУГИХ свойств границы CSS (о которых вы узнаете больше в следующих главах) не будет иметь ЛЮБОГО эффекта, если не установлено свойство <code class='w3-codespan'>border-style</code>!</p>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_background_shorthand.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_border_width.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>