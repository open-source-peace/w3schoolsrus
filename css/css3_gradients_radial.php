<?php include '../include/head.php'; ?>

<title>CSS Радиальные градиенты. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Радиальные градиенты. Синтаксис. Установить форму. Использование ключевых слов разного размера. Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Радиальные градиенты</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_gradients.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_shadows.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>CSS Радикальные градиенты</h2>
    <p>Радиальный градиент определяется его центром.</p>
    <p>Чтобы создать радиальный градиент, вы также должны определить как минимум две остановки цвета.</p>

    <h3>Синтаксис</h3>
    <div class="w3-code w3-border notranslate">background-image: radial-gradient(<em>размер фигуры </em>в<em> позиции, начальный цвет, ..., последний цвет</em>);</div>
    <p>По умолчанию форма - эллипс, размер - самый дальний угол, а позиция - центр.</p>

    <p><strong>Радиальный градиент - равномерно распределенные цветовые точки (по умолчанию)</strong></p>
    <p>В следующем примере показан радиальный градиент с равномерно расположенными ограничителями цвета:</p>
    <div id="grad10"></div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #grad {<br>&nbsp; background-image: radial-gradient(red, yellow, green);<br>} </div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_gradient-radial.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p><strong>Радиальный градиент - Цветовые точки с разным интервалом</strong></p>
    <p>В следующем примере показан радиальный градиент с разными интервалами между цветовыми ограничителями (стопами):</p>
    <div id="grad11"></div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #grad {<br>&nbsp; background-image: radial-gradient(red 5%, yellow 15%, green 60%);<br>} </div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_gradient-radial2.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Установить форму</h2>
    <p>Параметр shape определяет форму. Может принимать значение круга или эллипса. Значение по умолчанию - эллипс.</p>
    <p>В следующем примере показан радиальный градиент в форме круга:</p>
    <div id="grad12"></div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #grad {<br>&nbsp; background-image: radial-gradient(circle, red, yellow, green);<br>
            } </div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_gradient-radial_shape.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Использование ключевых слов разного размера</h2>
    <p>Параметр size определяет размер градиента. Может принимать четыре значения:</p>
    <ul>
        <li><strong>closest-side</strong></li>
        <li><strong>farthest-side</strong></li>
        <li><strong>closest-corner</strong></li>
        <li><strong>farthest-corner</strong></li>
    </ul>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Радиальный градиент с ключевыми словами разного размера:</p>
        <div class="w3-code notranslate cssHigh">
            #grad1 {<br>&nbsp; background-image: radial-gradient(closest-side at 60% 55%, red, yellow,
            black);<br>}<br>
            <br>#grad2 {<br>
            &nbsp; background-image: radial-gradient(farthest-side at 60%
            55%, red, yellow, black);<br>} </div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_gradient-radial_size.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Повторение радиального градиента</h2>
    <p>Функция repeat-radial-gradient() используется для повторения радиальных градиентов:</p>
    <div id="grad13"></div>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Повторяющийся радиальный градиент:</p>
        <div class="w3-code notranslate cssHigh">
            #grad {<br>&nbsp; background-image:
            repeating-radial-gradient(red, yellow 10%, green 15%);<br>} </div>
        <a class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_gradient-radial_repeating.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <div class="w3-container w3-dark-grey w3-padding">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений!</h2>
        <div class="w3-bar w3-margin-bottom">
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_gradients1" target="_blank" rel="nofollow">Упражнение 1 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_gradients2" target="_blank" rel="nofollow">Упражнение 2 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_gradients3" target="_blank" rel="nofollow">Упражнение 3 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_gradients4" target="_blank" rel="nofollow">Упражнение 4 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_gradients5" target="_blank" rel="nofollow">Упражнение 5 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_gradients6" target="_blank" rel="nofollow">Упражнение 6 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_gradients7" target="_blank" rel="nofollow">Упражнение 7 &raquo;</a>
        </div>
    </div>
    <hr>

    <h2>CSS Свойства градиента</h2>
    <p>В следующей таблице перечислены свойства градиента CSS:</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:28%">Свойства</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/pr_background-image.php">background-image</a></td>
            <td>Устанавливает одно или несколько фоновых изображений для элемента</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_gradients.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_shadows.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>