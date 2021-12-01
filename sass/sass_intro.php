<?php include '../include/head.php'; ?>

  <title>Sass Введение. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Учебник по Sass. Введение. Sass - это CSS пре-процессор. Что необходимо знать перед изучением Sass? <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/sass/sass_intro.html' />

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_sass.php'; ?>
<?php include '../include/before_content_sass.php'; ?>

  <article>
      <h1>Sass <span class="color_h1">Введение</span></h1>
      <div class="w3-clear nextprev">
          <a class="w3-left w3-btn" href="index.php">&#10094; Prev</a>
          <a class="w3-right w3-btn" href="sass_installation.php">Next &#10095;</a>
      </div>
      <hr>

      <h2>Что необходимо знать перед изучением Sass?</h2>
      <p>Прежде чем приступить к изучению Sass, вы должны иметь общее представление о следующих технологиях:</p>
      <ul>
          <li><a href="../html/index.php" target="_blank" title="Перейти к изучению HTML">HTML</a> - язык разметки веб-страниц;</li>
          <li><a href="../css/index.php" target="_blank" title="Перейти к изучению CSS">CSS</a> - язык стилизации и визуального оформления веб-страниц.</li>
      </ul>
      <p>Если вы ещё не знаете эти технологии, то найдите уроки по <strong>HTML</strong> и <strong>CSS</strong> на Главной странице нашего сайта <?php include '../include/w3schools.php'; ?>.</p>
      <hr>

      <h2>Что такое Sass?</h2>
      <p><strong>Sass</strong> - самый популярный, стабильный и мощный язык CSS-расширений профессионального уровня в мире.</p>
      <ul>
          <li><strong>Sass</strong> - это сокращение от <strong>S</strong>yntactically <strong>A</strong>wesome
              <strong>S</strong>tyle<strong>S</strong>heet - Синтаксически отличная таблица стилей</li>
          <li>Sass - это расширение CSS</li>
          <li>Sass - это CSS пре-процессор</li>
          <li>Sass полностью совместим со всеми версиями CSS</li>
          <li>Sass уменьшает повторение CSS и, следовательно, экономит время для его написания</li>
          <li>Sass был спроектирован Хэмптоном Кэтлином и разработан Натали Вайценбаум в 2006 году</li>
          <li>Sass можно загрузить с официального сайта и использовать бесплатно</li>
      </ul>
      <hr>

      <h2>Зачем использовать Sass?</h2>
      <p>Таблицы стилей становятся больше, всё сложнее и сложнее в обслуживании. Здесь может помочь препроцессор CSS.</p>
      <p>Sass позволяет использовать функции, которых нет в CSS, такие как переменные, вложенные правила, миксины, импорт, наследование, встроенные функции и прочее.</p>
      <hr>

      <h2>Простой пример, почему Sass полезен</h2>
      <p>Допустим, у нас есть сайт с тремя основными цветами:</p>

      <div class="w3-section">
          <div class="w3-container" style="background-color:#a2b9bc;color:#000">
              <p>#a2b9bc</p>
          </div>
          <div class="w3-container" style="background-color:#b2ad7f;color:#000">
              <p>#b2ad7f</p>
          </div>
          <div class="w3-container" style="background-color:#878f99;color:#fff">
              <p>#878f99</p>
          </div>
      </div>

      <p>Итак, сколько раз вам нужно вводить эти шестнадцатеричные значения? Много раз. А как насчет вариаций одних и тех же цветов?</p>
      <p>Вместо того, чтобы много раз вводить вышеуказанные значения, вы можете использовать Sass и написать это:</p>
      <div class="w3-example">
          <h3>Sass Пример</h3>
          <div class="w3-code notranslate cssHigh">
              /* определить переменные для основных цветов */<br>$primary_1: #a2b9bc;<br>
              $primary_2: #b2ad7f;<br>$primary_3:
              #878f99;<br><br>/*
              использовать переменные */<br>.main-header
              {<br>&nbsp; background-color: $primary_1;<br>}<br><br>.menu-left
              {<br>&nbsp; background-color: $primary_2;<br>}<br><br>.menu-right
              {<br>&nbsp; background-color: $primary_3;<br>}<br></div>
          <br></div>
      <p>Итак, при использовании Sass и изменении основного цвета вам нужно изменить его только в одном месте.</p>
      <hr>

      <h2>Как работает Sass?</h2>
      <p>Браузер не понимает код Sass. Следовательно, вам понадобится препроцессор Sass для преобразования кода Sass в стандартный CSS.</p>
      <p>Этот процесс называется транспилированием. Итак, вам нужно дать транспилятору (какой-то программе) некоторый код Sass, а затем вернуть код CSS.</p>

      <div class="w3-panel w3-note">
          <p><strong>Совет:</strong> Транспилирование - это термин, обозначающий использование исходного кода, написанного на одном языке, и его преобразования/перевода на другой язык.</p>
      </div>
      <hr>

      <h2>Sass Тип файла</h2>
      <p>Sass-файлы имеют расширение файла <em>.scss</em>.</p>
      <hr>

      <h2>Sass Комментарии</h2>
      <p>Sass поддерживает стандартные CSS комментарии <code class="w3-codespan">/* comment */</code> и, кроме того, он поддерживает встроенные комментарии <code class="w3-codespan">// comment</code>:</p>
      <div class="w3-example">
          <h3>Sass пример</h3>
          <div class="w3-code notranslate cssHigh">
              /* определить основные цвета */<br>$primary_1: #a2b9bc;<br>
              $primary_2: #b2ad7f;<br><br>/*
              использовать переменные */<br>.main-header
              {<br>&nbsp; background-color: $primary_1; // здесь вы можете поместить встроенный комментарий<br>}</div>
          <br></div>

      <hr>
      <div class="w3-clear nextprev">
          <a class="w3-left w3-btn" href="index.php">&#10094; Prev</a>
          <a class="w3-right w3-btn" href="sass_installation.php">Next &#10095;</a>
      </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>