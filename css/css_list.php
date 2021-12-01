<?php include '../include/head.php'; ?>

  <title>CSS Списки. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Списки. Как стилизуются списки на веб-страницах? Упорядоченные и неупорядоченные списки. Стилизация списков. Примеры. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        ol#ex1,ol#ex4 {
            background: #ff9999;
            padding: 20px;
        }

        ul#ex2,ul#ex5 {
            background: #3399ff;
            padding: 20px;
        }

        ol#ex1 li,ol#ex4 li {
            background: #ffe5e5;
            padding: 5px;
            margin-left: 35px;
        }

        ul#ex2 li,ul#ex5 li {
            background: #cce5ff;
            margin: 5px;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
      <h1>CSS <span class="color_h1">Списки</span></h1>
      <div class="w3-clear nextprev">
          <a class="w3-left w3-btn" href="css_link.php">&#10094; Prev</a>
          <a class="w3-right w3-btn" href="css_table.php">Next &#10095;</a>
      </div>
      <hr>

      <div class="w3-row">
          <div class="w3-half w3-container">
              <h2>Неупорядоченные списки:</h2>
              <ul style="list-style:circle">
                  <li>Coffee</li>
                  <li>Tea</li>
                  <li>Coca Cola</li>
              </ul>
              <ul style="list-style:square">
                  <li>Coffee</li>
                  <li>Tea</li>
                  <li>Coca Cola</li>
              </ul>
          </div>
          <div class="w3-half w3-container">
              <h2>Упорядоченные списки:</h2>
              <ol style="list-style:decimal">
                  <li>Coffee</li>
                  <li>Tea</li>
                  <li>Coca Cola</li>
              </ol>
              <ol style="list-style:upper-roman">
                  <li>Coffee</li>
                  <li>Tea</li>
                  <li>Coca Cola</li>
              </ol>
          </div>
      </div>
      <hr>

      <h2>HTML списки и свойства CSS списков</h2>
      <p>В <strong>HTML</strong> есть два основных типа списков:</p>
      <ul>
          <li>неупорядоченные списки (<code class="w3-codespan">&lt;ul&gt;</code>) - элементы списка помечены маркерами</li>
          <li>упорядоченные списки (<code class="w3-codespan">&lt;ol&gt;</code>) - элементы списка помечены цифрами или буквами</li>
      </ul>
      <p>Свойства <strong>CSS</strong> списка позволяют вам:</p>
      <ul>
          <li>Установить разные маркеры элементов списка для упорядоченных списков</li>
          <li>Установить разные маркеры элементов списка для неупорядоченных списков</li>
          <li>Установить изображение в качестве маркера элемента списка</li>
          <li>Добавить цвета фона в списки и элементы списка</li>
      </ul>
      <hr>

      <h2>Различные маркеры списка</h2>
      <p>Свойство <code class="w3-codespan">list-style-type</code> указывает тип маркера элемента списка.</p>
      <p>В следующем примере показаны некоторые из доступных маркеров элементов списка:</p>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              ul.a {<br>&nbsp;&nbsp;list-style-type: circle;<br>}<br>
              <br>ul.b {<br>&nbsp; list-style-type: square;<br>}<br>
              <br>
              ol.c {<br>&nbsp; list-style-type: upper-roman;<br>}<br>
              <br>ol.d {<br>&nbsp; list-style-type: lower-alpha;<br>}</div>
          <a target="_blank" href="../csstryit/trycss_list-style-type_ex.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
      </div>
      <p><b>Примечание</b>: Некоторые значения для неупорядоченных списков, а некоторые для упорядоченных списков.</p>
      <hr>

      <h2>Изображение как маркер элемента списка</h2>
      <p>Свойство <code class="w3-codespan">list-style-image</code> указывает изображение как маркер элемента списка:</p>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              ul
              {<br>
              &nbsp; list-style-image: url('sqpurple.gif');<br>
              }</div>
          <a target="_blank" href="../csstryit/trycss_list-style-image.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Расположите маркеры элементов списка</h2>
      <p>Свойство <code class="w3-codespan">list-style-position</code> указывает положение маркеров элемента списка (маркерованные пункты).</p>
      <p>&quot;<code class="w3-codespan">list-style-position: outside;</code>&quot; означает, что маркеры будут вне элемента списка. Начало каждой строки элемента списка будет выровнено по вертикали. Это по умолчанию:</p>
      <ul style="list-style-position:outside;width:25%;">
          <li style="border:1px solid #000;">Coffee -
              <span style="display: inline !important; float: none; background-color: transparent; color: rgb(0, 0, 0); font-family: 'Times New Roman', serif; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; list-style-position: inside; orphans: 2; text-align: left; text-decoration: none; text-indent: 0; text-transform: none; -webkit-text-stroke-width: 0; white-space: normal; word-spacing: 0;">
Сваренный напиток, приготовленный из жареных кофейных зерен...</span></li>
          <li style="border:1px solid #000;border-top:0;">Tea</li>
          <li style="border:1px solid #000;border-top:0;">Coca-cola</li>
      </ul>
      <p>&quot;<code class="w3-codespan">list-style-position: inside;</code>&quot; означает, что маркеры будут внутри элемента списка. Поскольку он является частью элемента списка, он будет частью текста и вставит текст в начале:</p>
      <ul style="list-style-position:inside;width:25%;">
          <li style="border:1px solid #000;">Coffee -
              <span style="display: inline !important; float: none; background-color: transparent; color: rgb(0, 0, 0); font-family: 'Times New Roman', serif; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; list-style-position: inside; orphans: 2; text-align: left; text-decoration: none; text-indent: 0; text-transform: none; -webkit-text-stroke-width: 0; white-space: normal; word-spacing: 0;">
Сваренный напиток, приготовленный из жареных кофейных зерен...</span></li>
          <li style="border:1px solid #000;border-top:0;">Tea</li>
          <li style="border:1px solid #000;border-top:0;">Coca-cola</li>
      </ul>

      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              ul.a {<br>&nbsp; list-style-position: outside;<br>}<br><br>ul.b {<br>&nbsp;&nbsp;list-style-position: inside;<br>}</div>
          <a target="_blank" href="../csstryit/trycss_list-style-position.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Удалить настройки по умолчанию</h2>
      <p>Свойство <code class="w3-codespan">list-style-type:none</code> также может быть использовано для удаления меток/маркеров. Обратите внимание, что в списке также есть поля по умолчанию и отступы. Чтобы удалить их, добавьте <code class="w3-codespan">margin:0</code> и <code class="w3-codespan">padding:0</code> к <code class="w3-codespan">&lt;ul&gt;</code> или <code class="w3-codespan">&lt;ol&gt;</code>:</p>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              ul
              {<br>
              &nbsp;
              list-style-type: none;<br>&nbsp; margin: 0;<br>&nbsp;
              padding: 0;<br>
              }</div>
          <a target="_blank" href="../csstryit/trycss_list-style_none.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Список - Сокращенное свойство</h2>
      <p>Свойство <code class="w3-codespan">list-style</code> является сокращенным свойством. Используется для установки всех свойств списка в одном объявлении:</p>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              ul
              {<br>
              &nbsp;
              list-style: square inside url(&quot;sqpurple.gif&quot;);<br>
              }</div>
          <a target="_blank" href="../csstryit/trycss_list-style.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
      </div>

      <p>При использовании сокращенного свойства порядок значений свойств:</p>
      <ul>
          <li><code class="w3-codespan">list-style-type</code> (если указан list-style-image, значение этого свойства будет отображаться, если изображение по какой-то причине не может быть отображено)</li>
          <li><code class="w3-codespan">list-style-position</code> (указывает, должны ли маркеры элементов списка появляться внутри или вне потока контента)</li>
          <li><code class="w3-codespan">list-style-image</code> (указывает изображение как маркер элемента списка)</li>
      </ul>
      <p>Если одно из значений свойства выше отсутствует, будет вставлено значение по умолчанию для отсутствующего свойства, если оно есть.</p>
      <hr>

      <h2>Список стилей с цветами</h2>
      <p>Мы также можем стилизовать списки с цветами, чтобы они выглядели немного интереснее.</p>
      <p>Все, что добавлено в тег <code class="w3-codespan">&lt;ol&gt;</code> или <code class="w3-codespan">&lt;ul&gt;</code> влияет на весь список, в то время как свойства, добавленные в тег <code class="w3-codespan">&lt;li&gt;</code>, влияют на отдельные элементы списка:</p>
      <div class="w3-example">
          <h3>Пример</h3>
          <div class="w3-code notranslate cssHigh">
              ol {<br>&nbsp; background: #ff9999;<br>&nbsp;
              padding: 20;<br>}<br><br>ul {<br>&nbsp; background: #3399ff;<br>&nbsp;
              padding: 20;<br>}<br><br>ol li {<br>&nbsp; background:
              #ffe5e5;<br>&nbsp; padding: 5px;<br>&nbsp;
              margin-left: 35px;<br>}<br><br>ul li {<br>&nbsp; background:
              #cce5ff;<br>&nbsp; margin: 5px;<br>}</div>
          <p>Результат:</p>
          <div class="w3-padding w3-white notranslate">
              <ol id="ex4">
                  <li>Coffee</li>
                  <li>Tea</li>
                  <li>Coca Cola</li>
              </ol>
              <ul id="ex5">
                  <li>Coffee</li>
                  <li>Tea</li>
                  <li>Coca Cola</li>
              </ul>
          </div>
          <a target="_blank" href="../csstryit/trycss_list-style_colors.html" class="w3-btn w3-margin-bottom w3-margin-top">Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Больше примеров</h2>
      <p><a target="_blank" href="../csstryit/trycss_list-style-red-border.html">Пользовательский список с красной левой границей</a><br>Этот пример демонстрирует, как создать список с красной левой границей.</p>
      <p><a target="_blank" href="../csstryit/trycss_list-style-border.html">Ограниченный список на всю ширину</a><br>Этот пример демонстрирует, как создать ограниченный список без маркеров.</p>
      <p><a target="_blank" href="../csstryit/trycss_list-style-type_all.html">Все различные маркеры элементов списка для списков</a><br>Этот пример демонстрирует все различные маркеры элементов списка в CSS.</p>
      <hr>

      <div class="w3-container w3-dark-grey w3-padding">
          <h2 class="shadow-black-1">Проверьте себя с помощью упражнений!</h2>
          <div class="w3-bar w3-margin-bottom">
              <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_list1" target="_blank">Упражнение 1 »</a>
              <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_list2" target="_blank">Упражнение 2 »</a>
              <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_list3" target="_blank">Упражнение 3 »</a>
              <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_list4" target="_blank">Упражнение 4 »</a>
          </div>
      </div>
      <hr>

      <h2>Все свойства CSS Списка</h2>

      <table class="w3-table-all notranslate">
          <tr>
              <th style="width:20%">Свойство</th>
              <th>Описание</th>
          </tr>
          <tr>
              <td><a href="../cssref/pr_list-style.php">list-style</a></td>
              <td>Устанавливает все свойства для списка в одном объявлении</td>
          </tr>
          <tr>
              <td><a href="../cssref/pr_list-style-image.php">list-style-image</a></td>
              <td>Определяет изображение как маркер элемента списка</td>
          </tr>
          <tr>
              <td><a href="../cssref/pr_list-style-position.php">list-style-position</a></td>
              <td>Определяет положение маркеров элемента списка (точки маркеров)</td>
          </tr>
          <tr>
              <td><a href="../cssref/pr_list-style-type.php">list-style-type</a></td>
              <td>Определяет тип маркера элемента списка</td>
          </tr>
      </table>

      <hr>
      <div class="w3-clear nextprev">
          <a class="w3-left w3-btn" href="css_link.php">&#10094; Prev</a>
          <a class="w3-right w3-btn" href="css_table.php">Next &#10095;</a>
      </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>