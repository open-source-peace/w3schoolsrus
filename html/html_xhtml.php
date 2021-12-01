<?php include '../include/head.php'; ?>

  <title>HTML и XHTML. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML и XHTML. Что такое XHTML? В чём разница между HTML и XHTML? <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML<span class='color_h1'> и XHTML</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_urlencode.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_forms.php'>Next &#10095;</a>
    </div>
    <hr>
    <p class='intro'><strong>XHTML - это HTML написанный как XML</strong>.</p>
    <hr>

    <h2>Что такое XHTML?</h2>
    <ul>
      <li><strong>XHTML</strong> расшифровывается как E<strong>X</strong>tensible <strong>H</strong>yper<strong>T</strong>ext <strong>M</strong>arkup <strong>L</strong>anguage - т.е. расширяемый <strong>HTML</strong></li>
      <li><strong>XHTML</strong> почти идентичен <strong>HTML</strong></li>
      <li><strong>XHTML</strong> является более строгим, чем <strong>HTML</strong></li>
      <li><strong>XHTML</strong> - это <strong>HTML</strong>, определённый как программа <strong>XML</strong></li>
      <li><strong>XHTML</strong> поддерживается всеми основными браузерами</li>
    </ul>
    <hr>

    <h2>Почему XHTML?</h2>
    <p>Многие страницы в Интернете содержат <strong>&quot;плохой&quot; HTML код</strong>.</p>
    <p>Этот HTML-код отлично работает в большинстве браузеров (даже если он не соответствует правилам HTML):</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;html&gt;<br>
        &lt;head&gt;<br>
        &nbsp;
        &lt;title&gt;Это плохой код HTML&lt;/title&gt;<br>
        <br>&lt;body&gt;<br>
        &nbsp;
        &lt;h1&gt;Плохой HTML<br>
        &nbsp;
        &lt;p&gt;Это параграф<br>
        &lt;/body&gt;</div></div>
    <p>Сегодняшний рынок состоит из разных браузерных технологий. Некоторые браузеры работают на компьютерах, а некоторые браузеры работают на мобильных телефонах или других небольших устройствах. Меньшим устройствам часто не хватает ресурсов или мощности для интерпретации &quot;плохой&quot; разметки.</p>
    <p>XML - это язык разметки, где документы должны быть размечены правильно (должны быть &quot;хорошо сформированные&quot;).</p>
    <p>Если вы хотите изучать XML, пожалуйста, прочитайте наш <a href="../xml/index.php">XML Учебник</a>.</p>
    <p>XHTML был разработан путем объединения сильных сторон HTML и XML.</p>
    <p>XHTML - это HTML, переработанный как XML.</p>
    <hr>

    <h2>Самые важные отличия от HTML:</h2>
    <h3>Структура документа</h3>
    <ul>
      <li>XHTML DOCTYPE является <strong>обязательным</strong></li>
      <li>Атрибут xmlns в &lt;html&gt; является <strong>обязательным</strong></li>
      <li>&lt;html&gt;, &lt;head&gt;, &lt;title&gt; и &lt;body&gt; являются <strong>обязательными</strong></li>
    </ul>
    <h3>XHTML элементы</h3>
    <ul>
      <li>Элементы XHTML должны быть правильно вложены
      <li>Элементи XHTML всегда должны быть закрыты
      <li>Элементы XHTML должны быть в нижнем регистре
      <li>Документы XHTML должны иметь один корневой элемент
    </ul>
    <h3>XHTML Атрибуты</h3>
    <ul>
      <li>Имена атрибутов должны иметь нижний регистр
      <li>Необходимо указать значения атрибутов
      <li>Минимизация атрибутов запрещена
    </ul>
    <hr>

    <h2>&lt;!DOCTYPE ....&gt; обязателен</h2>
    <p>XHTML документ должен иметь объявление XHTML DOCTYPE.</p>
    <p>Полный список всех <a href="../tags/tag_doctype.php">XHTML Doctypes</a> можно узнать в HTML справочнике тегов.</p>
    <p>Элементы &lt;html&gt;, &lt;head&gt;, &lt;title&gt; и &lt;body&gt; также должны присутствовать, а атрибут xmlns в &lt;html&gt;
      должен указывать пространство имён xml для документа.</p>
    <p>В этом примере показан документ <strong>XHTML</strong> с минимально необходимыми тегами:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;!DOCTYPE html
        PUBLIC &quot;-//W3C//DTD XHTML 1.0 Transitional//EN&quot;<br>
        &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd&quot;&gt;<br><br>
        &lt;html xmlns=&quot;http://www.w3.org/1999/xhtml&quot;&gt;<br>
        <br>
        &lt;head&gt;<br>
        &nbsp;
        &lt;title&gt;Title of document&lt;/title&gt;<br>
        &lt;/head&gt;<br>
        <br>
        &lt;body&gt;<br>&nbsp; <em>some content</em> <br>
        &lt;/body&gt;<br>
        <br>
        &lt;/html&gt;</div>
    </div>
    <hr>

    <h2>XHTML элементы должны быть правильно вложены</h2>
    <p>В <strong>HTML</strong> некоторые элементы могут быть <b>неправильно</b> вложены друг в друга, например:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;b&gt;&lt;i&gt;This text is bold and italic&lt;/b&gt;&lt;/i&gt;</div></div>
    <p>В <strong>XHTML</strong> все элементы должны быть <b>правильно</b> вложены друг в друга, например::</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;b&gt;&lt;i&gt;This text is bold and italic&lt;/i&gt;&lt;/b&gt;</div></div>
    <hr>

    <h2>XHTML элементы всегда должны быть закрыты</h2>
    <p>Это неправильно:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;p&gt;This is a paragraph<br>
        &lt;p&gt;This is another paragraph</div></div>
    <p>Это правильно:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;p&gt;This is a paragraph&lt;/p&gt;<br>
        &lt;p&gt;This is another paragraph&lt;/p&gt;</div></div>
    <hr>

    <h2>Пустые элементы также должны быть закрыты</h2>
    <p>Это неправильно:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        A break: &lt;br&gt;<br>
        A horizontal rule: &lt;hr&gt;<br>
        An image: &lt;img src=&quot;happy.gif&quot; alt=&quot;Happy face&quot;&gt;</div></div>
    <p>Это правильно:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        A break: &lt;br /&gt;<br>
        A horizontal rule: &lt;hr /&gt;<br>
        An image: &lt;img src=&quot;happy.gif&quot; alt=&quot;Happy face&quot; /&gt;</div></div>
    <hr>

    <h2>XHTML элементы должны быть в нижнем регистре</h2>
    <p>Это неправильно:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;BODY&gt;<br>
        &lt;P&gt;This is a paragraph&lt;/P&gt;<br>
        &lt;/BODY&gt;</div></div>
    <p>Это правильно:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;body&gt;<br>
        &lt;p&gt;This is a paragraph&lt;/p&gt;<br>
        &lt;/body&gt;</div></div>
    <hr>

    <h2>Названия XHTML атрибутов должны быть в нижнем регистре</h2>
    <p>Это неправильно:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;table WIDTH=&quot;100%&quot;&gt;</div></div>
    <p>Это правильно:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;table width=&quot;100%&quot;&gt;</div></div>
    <hr>

    <h2>Значения атрибутов должны быть взяты в кавычки</h2>
    <p>Это неправильно:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;table width=100%&gt;</div></div>
    <p>Это правильно:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;table width=&quot;100%&quot;&gt;</div></div>
    <hr>

    <h2>Минимизация атрибутов запрещена</h2>
    <p>Это неправильно:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;input type=&quot;checkbox&quot; name=&quot;vehicle&quot; value=&quot;car&quot; checked /&gt;</div>
    </div>
    <p>Это правильно:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;input type=&quot;checkbox&quot; name=&quot;vehicle&quot; value=&quot;car&quot; checked=&quot;checked&quot; /&gt;</div></div>
    <p>Это неправильно:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;input type=&quot;text&quot; name=&quot;lastname&quot; disabled /&gt;</div></div>
    <p>Это правильно:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;input type=&quot;text&quot; name=&quot;lastname&quot; disabled=&quot;disabled&quot; /&gt;</div></div>
    <hr>

    <h2>Как конвертировать с HTML в XHTML</h2>
    <ol>
        <li>Добавьте XHTML <code class="w3-codespan">&lt;!DOCTYPE&gt;</code> к первой строке каждой страницы</li>
        <li>Добавьте атрибут <code class="w3-codespan">xmlns</code> к html элементу каждой страницы</li>
        <li>Сделайте все названия элементов буквами нижнего регистра</li>
        <li>Закройте все пустые элементы</li>
        <li>Сделайте все названия атрибутов буквами нижнего регистра</li>
        <li>Возьмите в кавычки все значения атрибутов</li>
    </ol>
    <hr>

    <h2>Проверьте HTML с помощью валидатора W3C</h2>
    <form method="get" action="https://validator.w3.org/check" target="_blank">
      <p>Введите веб-адрес в поле ниже:</p>
      <p><input name="uri" size="60" value="https://w3schoolsrus.github.io/html/html_validate.html"/></p>
      <p><input type="submit" value="Проверить страницу"></p>
    </form>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_urlencode.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_forms.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>