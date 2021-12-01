<?php include '../include/head.php'; ?>

  <title>Sass Числовые функции <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Sass Числовые функции используются для управления числовыми значениями. Полный список числовых функций. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/sass/sass_functions_numeric.html' />

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_sass.php'; ?>
<?php include '../include/before_content_sass.php'; ?>
<article>
  <h1>Sass <span class="color_h1">Числовые функции</span></h1>
  <div class="w3-clear nextprev">
      <a class="w3-left w3-btn" href="sass_functions_string.php">&#10094; Prev</a>
      <a class="w3-right w3-btn" href="sass_functions_list.php">Next &#10095;</a>
  </div>
  <hr>

  <h2>Sass Числовые функции</h2>
  <p>Числовые функции используются для управления числовыми значениями.</p>
  <p>В следующей таблице перечислены все числовые функции в Sass:</p>

  <div class="w3-responsive">
      <table class="w3-table-all notranslate">
          <tr>
              <th>Функция</th>
              <th>Описание &amp; Пример</th>
          </tr>
          <tr>
              <td>abs(<em>number</em>)</td>
              <td>Возвращает абсолютное значение <em>числа</em>.<br><br>
                  <strong>Пример:</strong><br>abs(15)<br>Результат: 15<br>abs(-15)<br>Результат: 15</td>
          </tr>
          <tr>
              <td>ceil(<em>number</em>)</td>
              <td>Округляет <em>число</em> до ближайшего целого.<br><br>
                  <strong>Пример:</strong><br>ceil(15.20)<br>Результат: 16</td>
          </tr>
          <tr>
              <td>comparable(<em>num1</em>, <em>num2</em>)</td>
              <td>Возвращает значение, указывающее, сопоставимы ли <em>num1</em> и <em>num2</em>.<br><br>
                  <strong>Пример:</strong><br>comparable(15px, 10px)<br>Результат: true<br>comparable(20mm, 1cm)<br>Результат:
                  true<br>comparable(35px, 2em)<br>Результат: false</td>
          </tr>
          <tr>
              <td>floor(<em>number</em>)</td>
              <td>Округляет <em>число</em> до ближайшего целого.<br><br>
                  <strong>Пример:</strong><br>floor(15.80)<br>Результат: 15</td>
          </tr>
          <tr>
              <td>max(<em>number...</em>)</td>
              <td>Возвращает наибольшее значение нескольких чисел.<br><br>
                  <strong>Пример:</strong><br>max(5, 7, 9, 0, -3, -7)<br>Результат: 9</td>
          </tr>
          <tr>
              <td>min(<em>number...</em>)</td>
              <td>Возвращает наименьшее значение из нескольких чисел.<br><br>
                  <strong>Пример:</strong><br>min(5, 7, 9, 0, -3, -7)<br>Результат: -7</td>
          </tr>
          <tr>
              <td>percentage(<em>number</em>)</td>
              <td>Преобразует <em>число</em> в процент (умножает число на 100).<br>
                  <br>
                  <strong>Пример:</strong><br>percentage(1.2)<br>Результат: 120</td>
          </tr>
          <tr>
              <td>random()</td>
              <td>Возвращает случайное число от 0 до 1.<br><br>
                  <strong>Пример:</strong><br>random()<br>Результат: 0.45673</td>
          </tr>
          <tr>
              <td>random(<em>number</em>)</td>
              <td>Возвращает случайное целое число между 1 и <em>числом</em>.<br><br>
                  <strong>Пример:</strong><br>random(6)<br>Результат: 4</td>
          </tr>
          <tr>
              <td>round(<em>number</em>)</td>
              <td>Округляет <em>число</em> до ближайшего целого.<br><br>
                  <strong>Пример:</strong><br>round(15.20)<br>Результат: 15<br>round(15.80)<br>Результат: 16</td>
          </tr>
      </table>
  </div>

  <hr>
  <div class="w3-clear nextprev">
      <a class="w3-left w3-btn" href="sass_functions_string.php">&#10094; Prev</a>
      <a class="w3-right w3-btn" href="sass_functions_list.php">Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>