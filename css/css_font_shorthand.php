<?php include '../include/head.php'; ?>

<title>CSS Шрифты. Сокращенное свойство. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Шрифты. Сокращенное свойство. Как сократить код при написании шрифтов? Все свойства шрифта. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Свойства шрифта</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_font_pairings.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_icons.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>CSS Свойства шрифта</h2>
    <p>Чтобы сократить код, также можно указать все индивидуальные свойства шрифта в одном свойстве.</p>

    <p>Свойство <code class="w3-codespan">font</code> - это сокращенное свойство для:</p>
    <ul>
        <li><code class="w3-codespan">font-style</code></li>
        <li><code class="w3-codespan">font-variant</code></li>
        <li><code class="w3-codespan">font-weight</code></li>
        <li><code class="w3-codespan">font-size/line-height</code></li>
        <li><code class="w3-codespan">font-family</code></li>
    </ul>

    <p><strong>Примечание:</strong> Значения <code class="w3-codespan">font-size</code> и <code class="w3-codespan">font-family</code> обязательны. Если одно из других значений отсутствует, используется их значение по умолчанию.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Используйте <code class="w3-codespan">font</code> чтобы задать несколько свойств шрифта в одном объявлении:</p>
        <div class="w3-code notranslate cssHigh">
            p.a
            {<br>
            &nbsp;
            font: 20px Arial, sans-serif;<br>
            }<br>
            <br>
            p.b
            {<br>
            &nbsp;
            font: italic small-caps bold 12px/30px Georgia, serif;<br>
            }
        </div>
        <a target="_blank" href="../csstryit/trycss_font.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <div class="w3-container w3-dark-grey w3-padding">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений!</h2>
        <div class="w3-bar w3-margin-bottom">
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_font1" target="_blank">Упражнение 1 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_font2" target="_blank">Упражнение 2 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_font3" target="_blank">Упражнение 3 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_font4" target="_blank">Упражнение 4 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_font5" target="_blank">Упражнение 5 &raquo;</a>
        </div>
    </div>
    <hr>

    <h2>Все CSS свойства шрифта </h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:25%">Свойство</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/pr_font_font.php">font</a></td>
            <td>Устанавливает все свойства шрифта в одном объявлении</td>
        </tr>
        <tr>
            <td><a href="../cssref/pr_font_font-family.php">font-family</a></td>
            <td>Задаёт семейство шрифтов для текста</td>
        </tr>
        <tr>
            <td><a href="../cssref/pr_font_font-size.php">font-size</a></td>
            <td>Задаёт размер шрифта текста</td>
        </tr>
        <tr>
            <td><a href="../cssref/pr_font_font-style.php">font-style</a></td>
            <td>Задаёт стиль шрифта для текста</td>
        </tr>
        <tr>
            <td><a href="../cssref/pr_font_font-variant.php">font-variant</a></td>
            <td>Определяет, следует ли отображать текст мелким шрифтом</td>
        </tr>
        <tr>
            <td><a href="../cssref/pr_font_weight.php">font-weight</a></td>
            <td>Задаёт толщину шрифта</td>
        </tr>
    </table>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_font_pairings.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_icons.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>