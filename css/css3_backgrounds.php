<?php include '../include/head.php'; ?>
<title>CSS Фоны. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Фоны. Как добавить фон к HTML-элементу? Множество фонов на веб-странице. Как добавить несколько фоновых изображений в одном элементе на веб-странице? Свойства фона. Пример кода. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        body, html {
        }
        #example1 {
        padding: 15px;
        background: url(../images/img_flwr.gif), url(../images/paper.gif);
        background-position: right bottom, left top;
        background-repeat: no-repeat, repeat;
        }

        .div1 {
        border: 1px solid black;
        margin-bottom:15px;
        }

        #example3 {
        background: url(../images/img_flwr.gif);
        background-size: 100px 80px;
        background-repeat: no-repeat;
        padding: 15px;
        margin: 15px;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
      <h1>CSS <span class="color_h1">Несколько фонов</span></h1>
      <div class="w3-clear nextprev">
          <a class="w3-left w3-btn" href="css3_border_images.php">&#10094; Prev</a>
          <a class="w3-right w3-btn" href="css3_colors.php">Next &#10095;</a>
      </div>
      <hr>
      <div id="example1">
          <p>В этой главе вы узнаете, как добавить несколько фоновых изображений к одному элементу.</p>
          <p>Вы также узнаете о следующих свойствах:</p>
          <ul>
              <li><code class="w3-codespan">background-size</code></li>
              <li><code class="w3-codespan">background-origin</code></li>
              <li><code class="w3-codespan">background-clip</code></li>
          </ul>
      </div>
      <hr>

      <h2>CSS Множество фоновых изображений</h2>
      <p>CSS позволяет добавлять несколько фоновых изображений для элемента через свойство <code class="w3-codespan">background-image</code>.</p>
      <p>Различные фоновые изображения разделены запятыми, и изображения накладываются друг на друга, где первое изображение находится ближе всего к зрителю.</p>
      <p>В следующем примере есть два фоновых изображения, первое изображение - цветок (выровненный по нижнему и правому краям), а второе изображение - фон бумаги (выровненный по верхнему левому углу):</p>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              #example1 {<br>&nbsp;&nbsp;background-image: url(../images/img_flwr.gif), url(../images/paper.gif);<br>&nbsp;&nbsp;background-position: right bottom, left top;<br>&nbsp;&nbsp;background-repeat: no-repeat, repeat;<br>} </div>
          <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_background_multiple.html">Попробуйте сами &raquo;</a>
      </div>
      <p>Несколько фоновых изображений можно указать, используя либо отдельные свойства фона (как указано выше), либо сокращенное свойство <code class="w3-codespan">background</code>.</p>
      <p>В следующем примере используется сокращенное свойство <code class="w3-codespan">background</code> (тот же результат, что и в примере выше):</p>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              #example1 {<br>&nbsp;&nbsp;background: url(../images/img_flwr.gif) right bottom
              no-repeat, url(../images/paper.gif) left top repeat;<br>} </div>
          <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_background_multiple2.html">Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>CSS Размер фона</h2>
      <p>CSS свойство <code class="w3-codespan">background-size</code> позволяет указать размер фоновых изображений.</p>
      <p>Размер можно указать в длинах, процентах или с помощью одного из двух ключевых слов: contain или cover.</p>
      <p>В следующем примере фоновое изображение изменяется в размерах значительно меньше исходного изображения (с использованием пикселей):</p>
      <div class="div1">
          <div id="example3">
              <h2>Lorem Ipsum Dolor</h2>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
              <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
          </div>
      </div>

      <p>Вот код:</p>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              #div1
              {<br>
              &nbsp;
              background: url(../images/img_flower.jpg);<br>
              &nbsp;&nbsp;background-size: 100px 80px;<br>&nbsp;&nbsp;background-repeat: no-repeat;<br>
              }
          </div>
          <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_background-size.html">Попробуйте сами &raquo;</a>
      </div>

      <p>Два других возможных значения для <code class="w3-codespan">background-size</code> это <code class="w3-codespan">contain</code> и <code class="w3-codespan">cover</code>.</p>
      <p>Ключевое слово <code class="w3-codespan">contain</code> масштабирует фоновое изображение до максимально возможного размера (но его ширина и высота должны вписываться в область содержимого). Таким образом, в зависимости от пропорций фонового изображения и области расположения фона, могут быть некоторые области фона, которые не покрыты фоновым изображением.</p>
      <p>Ключевое слово <code class="w3-codespan">cover</code> масштабирует фоновое изображение таким образом, чтобы область содержимого полностью покрывалась фоновым изображением (его ширина и высота равны или превышают область содержимого). По существу, некоторые части фонового изображения могут быть не видны в области расположения фона.</p>
      <p>Следующий пример иллюстрирует использование <code class="w3-codespan">contain</code> и <code class="w3-codespan">cover</code>:</p>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              #div1
              {<br>
              &nbsp;
              background: url(../images/img_flower.jpg);<br>
              &nbsp;
              background-size: contain;<br>&nbsp;&nbsp;background-repeat: no-repeat;<br>
              }<br>#div2
              {<br>
              &nbsp;
              background: url(../images/img_flower.jpg);<br>
              &nbsp;
              background-size: cover;<br>&nbsp;
              background-repeat: no-repeat;<br>
              }
          </div>
          <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_background-size_contain.html">Попробуйте сами &raquo;</a>
      </div>
      <hr>
      <h2>Определить размеры нескольких фоновых изображений</h2>
      <p>Свойство <code class="w3-codespan">background-size</code> также принимает несколько значений для размера фона
          (используя список через запятую), при работе с несколькими фонами.</p>
      <p>В следующем примере указаны три фоновых изображения с разными значениями фона для каждого изображения:</p>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              #example1 {<br>&nbsp; background: url(../images/img_tree.gif) left top
              no-repeat, url(../images/img_flwr.gif) right bottom no-repeat, url(../images/paper.gif) left top
              repeat;<br>&nbsp; background-size: 50px, 130px, auto;<br>} </div>
          <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_background_multiple3.html">Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Полноразмерное фоновое изображение</h2>
      <p>Теперь мы хотим, чтобы на веб-сайте было фоновое изображение, которое постоянно покрывало бы все окно браузера.</p>
      <p>Требования следующие:</p>
      <ul>
          <li>Заполнить всю страницу с изображением (без пробелов)</li>
          <li>Масштабировать изображение по мере необходимости</li>
          <li>Центрировать изображение на странице</li>
          <li>Не вызывать полосы прокрутки</li>
      </ul>
      <p>В следующем примере показано, как это сделать; используйте элемент <code class="w3-codespan">&lt;html&gt;</code> (элемент <code class="w3-codespan">&lt;html&gt;</code> всегда равен по крайней мере высоте окна браузера). Затем установите фиксированный и центрированный фон. Затем настройте его размер с помощью свойства <code class="w3-codespan">background-size</code>:</p>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              html {<br>&nbsp;&nbsp;background: url(../images/img_man.jpg) no-repeat
              center fixed; <br>&nbsp;&nbsp;background-size: cover;<br>} </div>
          <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_background_full.html">Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Образ героя</h2>
      <p>Вы также можете использовать различные свойства фона для <code class="w3-codespan">&lt;div&gt;</code>, чтобы создать образ героя (большое изображение с текстом) и разместить его там, где вы хотите.</p>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              .hero-image {<br>&nbsp; background: url(../images/img_man.jpg) no-repeat center; <br>&nbsp;
              background-size: cover;<br>&nbsp; height: 500px;<br>&nbsp; position:
              relative;<br>}</div>
          <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_background_hero.html">Попробуйте сами &raquo;</a>
      </div>
      <hr>


      <h2>CSS свойство background-origin</h2>
      <p>CSS свойство <code class="w3-codespan">background-origin</code> указывает, где расположено фоновое изображение.</p>
      <p>Свойство принимает три разных значения:</p>
      <ul>
          <li>border-box - фоновое изображение начинается с верхнего левого угла рамки</li>
          <li>padding-box - (по умолчанию) фоновое изображение начинается с верхнего левого угла края отступа</li>
          <li>content-box - фоновое изображение начинается с верхнего левого угла содержимого</li>
      </ul>
      <p>В следующем примере показано свойство <code class="w3-codespan">background-origin</code>:</p>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              #example1
              {<br>
              &nbsp; border: 10px solid black;<br>&nbsp; padding: 35px;<br>&nbsp; background: url(../images/img_flwr.gif);<br>
              &nbsp;
              background-repeat: no-repeat;<br>&nbsp;
              background-origin: content-box;<br>}
          </div>
          <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_background-origin.html">Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>CSS свойство background-clip</h2>
      <p>CSS свойство <code class="w3-codespan">background-clip</code> определяет область рисования фона.</p>
      <p>Свойство принимает три разных значения:</p>
      <ul>
          <li>border-box - (по умолчанию) фон закрашивается до внешнего края границы</li>
          <li>padding-box - фон закрашивается до внешнего края отступа</li>
          <li>content-box - фон закрашивается внутри поля содержимого</li>
      </ul>
      <p>В следующем примере показано свойство <code class="w3-codespan">background-clip</code>:</p>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              #example1
              {<br>
              &nbsp; border: 10px dotted black;<br>&nbsp;
              padding: 35px;<br>&nbsp; background: yellow;<br>&nbsp;
              background-clip: content-box;<br>}
          </div>
          <a target="_blank" class="w3-btn w3-margin-bottom" href="../csstryit/trycss3_background-clip.html">Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <div class="w3-container w3-dark-grey w3-padding">
          <h2 class="shadow-black-1">Проверьте себя с помощью упражнений!</h2>
          <div class="w3-bar w3-margin-bottom">
              <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_backgrounds1" target="_blank" rel="nofollow">Упражнение 1 &raquo;</a>
              <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_backgrounds2" target="_blank" rel="nofollow">Упражнение 2 &raquo;</a>
              <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_backgrounds3" target="_blank" rel="nofollow">Упражнение 3 &raquo;</a>
              <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_backgrounds4" target="_blank" rel="nofollow">Упражнение 4 &raquo;</a>
              <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_css3_backgrounds5" target="_blank" rel="nofollow">Упражнение 5 &raquo;</a>
          </div>
      </div>
      <hr>

      <h2>CSS Расширенные свойства фона</h2>
      <table class="w3-table-all notranslate">
          <tr>
              <th style="width:28%">Свойство</th>
              <th>Описание</th>
          </tr>
          <tr>
              <td><a href="../cssref/css3_pr_background.php">background</a></td>
              <td>Сокращенное свойство для установки всех свойств фона в одном объявлении</td>
          </tr>
          <tr>
              <td><a href="../cssref/css3_pr_background-clip.php">background-clip</a></td>
              <td>Определяет область рисования фона</td>
          </tr>
          <tr>
              <td><a href="../cssref/pr_background-image.php">background-image</a></td>
              <td>Определяет одно или несколько фоновых изображений для элемента</td>
          </tr>
          <tr>
              <td><a href="../cssref/css3_pr_background-origin.php">background-origin</a></td>
              <td>Определяет, где расположены фоновые изображения</td>
          </tr>
          <tr>
              <td><a href="../cssref/css3_pr_background-size.php">background-size</a></td>
              <td>Определяет размер фонового изображения</td>
          </tr>
      </table>
      <hr>
      <div class="w3-clear nextprev">
          <a class="w3-left w3-btn" href="css3_border_images.php">&#10094; Prev</a>
          <a class="w3-right w3-btn" href="css3_colors.php">Next &#10095;</a>
      </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>