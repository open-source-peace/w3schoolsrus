<?php include '../include/head.php'; ?>

  <title>Sass Справочник. Строковые функции <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Строковые функции. Справочник по Sass. Строковые функции используются для управления строками и получения информации о них. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/sass/sass_functions_string.html' />

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_sass.php'; ?>
<?php include '../include/before_content_sass.php'; ?>

  <article>
    <h1>Sass <span class='color_h1'>Строковые функции</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='sass_extend.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='sass_functions_numeric.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>Sass Строковые функции</h2>
    <p>Строковые функции используются для управления строками и получения информации о них.</p>
    <p>Строки Sass начинаются с 1. Первый символ в строке имеет индекс 1, а не 0.</p>
    <p>В следующей таблице перечислены все строковые функции в Sass:</p>

    <div class='w3-responsive'>
      <table class='w3-table-all notranslate'>
        <tr>
          <th>Функция</th>
          <th>Описание &amp; Пример</th>
        </tr>
        <tr>
          <td>quote(<em>string</em>)</td>
          <td>Добавляет кавычки в <em>строку</em>, и возвращает результат.<br><br>
            <strong>Пример:</strong><br>quote(Hello world!)<br>Результат: &quot;Hello world!&quot;</td>
        </tr>
        <tr>
          <td>str-index(<em>string</em>,<em> substring</em>)</td>
          <td>Возвращает индекс первого вхождения <em>подстроки</em> в <em>строке</em>.<br><br>
            <strong>Пример:</strong><br>str-index(&quot;Hello world!&quot;, &quot;H&quot;)<br>Результат: 1</td>
        </tr>
        <tr>
          <td>str-insert(<em>string</em>, <em>insert</em>, <em>index</em>)</td>
          <td>Возвращает <em>строку</em> со <em>вставкой</em>, вставленной в указанную позицию <em>index</em>.<br><br>
            <strong>Пример:</strong><br>str-insert(&quot;Hello world!&quot;, &quot; wonderful&quot;, 6)<br>Результат: &quot;Hello
            wonderful world!&quot;</td>
        </tr>
        <tr>
          <td>str-length(<em>string</em>)</td>
          <td>Возвращает длину <em>строки</em> (в символах).<br><br>
            <strong>Пример:</strong><br>str-length(&quot;Hello world!&quot;)<br>Результат: 12</td>
        </tr>
        <tr>
          <td>str-slice(<em>string</em>, <em>start</em>, <em>end</em>)</td>
          <td>Извлекает символы из <em>строки</em>; начало на <em>start</em> и конец на <em>end</em>, и возвращает слайс (обрезок).<br><br>
            <strong>Пример:</strong><br>str-slice(&quot;Hello world!&quot;, 2,
            5)<br>Результат: &quot;ello&quot;</td>
        </tr>
        <tr>
          <td>to-lower-case(<em>string</em>)</td>
          <td>Возвращает копию <em>строки</em>, преобразованную в нижний регистр.<br><br>
            <strong>Пример:</strong><br>to-lower-case(&quot;Hello World!&quot;)<br>Результат: &quot;hello world!&quot;</td>
        </tr>
        <tr>
          <td>to-upper-case(<em>string</em>)</td>
          <td>Возвращает копию <em>строки</em>, преобразованную в верхний регистр.<br><br>
            <strong>Пример:</strong><br>to-upper-case(&quot;Hello
            World!&quot;)<br>Результат: &quot;HELLO WORLD!&quot;</td>
        </tr>
        <tr>
          <td>unique-id()</td>
          <td>Возвращает уникальную случайно сгенерированную строку без кавычек (гарантированно уникальную в рамках текущего сеанса sass).<br><br>
            <strong>Пример:</strong><br>unique-id()<br>Результат: tyghefnsv</td>
        </tr>
        <tr>
          <td>unquote(<em>string</em>)</td>
          <td>Удаляет кавычки вокруг <em>строки</em> (если есть), и возвращает результат.<br><br>
            <strong>Пример:</strong><br>unquote(&quot;Hello world!&quot;)<br>Результат: Hello world!</td>
        </tr>
      </table>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='sass_extend.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='sass_functions_numeric.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>