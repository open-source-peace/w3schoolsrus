<?php include '../include/head.php'; ?>

  <title>CSS Селекторы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Селекторы. Что такое селекторы в каскадных таблицах стилей? Стилизация веб-страниц. Примеры кода. Современный учебник. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

  <article>
    <h1>CSS <span class='color_h1'>Селекторы</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_syntax.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_howto.php'>Next &#10095;</a>
    </div>
    <hr>
    <h2>CSS Селекторы</h2>
    <p><strong>CSS селекторы</strong> используются для &quot;поиска&quot; (или выбора) элементов HTML, которые вы хотите стилизовать.</p>
    <p>Можно разделить CSS селекторы на пять категорий:</p>
    <ul>
      <li>Простые селекторы (выбор элементов на основе имени, идентификатора, класса)</li>
      <li><a href='css_combinators.php'>Комбинаторные селекторы</a> (выбор элементов на основе определенных отношений между ними)</li>
      <li><a href='css_pseudo_classes.php'>Селекторы псевдоклассов</a> (выбор элементов на основе определенного состояния)</li>
      <li><a href='css_pseudo_elements.php'>Селекторы псевдоэлементов</a> (выбор и стилизация части элемента)</li>
      <li><a href='css_attribute_selectors.php'>Селекторы атрибутов</a> (выбор элементов на основе атрибута или значения атрибута)</li>
    </ul>
    <p>На этой странице объясняются простые селекторы CSS.</p>
    <hr>

    <h2>CSS селектор элемента</h2>
    <p>Селектор элементов выбирает HTML элементы на основе имени элемента.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Здесь все элементы <code>&lt;p&gt;</code> на странице будут выровнены по центру с красным цветом текста:</p>
      <div class='w3-code notranslate cssHigh'>
        p
        {<br>
        &nbsp;&nbsp;text-align: center;<br>
        &nbsp;&nbsp;color: red;<br>
        }
      </div>
      <a target='_blank' href='../csstryit/trycss_syntax_element.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS селектор id</h2>
    <p>Селектор id использует атрибут <code>id</code> HTML элемента для выбора определенного элемента.</p>
    <p>Идентификатор (id) элемента является уникальным на странице, поэтому селектор <code>id</code> используется для выбора одного уникального элемента!</p>
    <p>Чтобы выбрать элемент с определенным идентификатором, напишите символ хеша (#), а затем id элемента.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Приведенное ниже правило CSS будет применено к элементу HTML с id=&quot;para1&quot;:&nbsp;</p>
      <div class='w3-code notranslate cssHigh'>
        #para1
        {<br>
        &nbsp;&nbsp;text-align: center;<br>
        &nbsp;&nbsp;color: red;<br>
        }
      </div>
      <a target='_blank' href='../csstryit/trycss_syntax_id.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <div class='w3-panel w3-note'>
      <p><strong>Примечание:</strong> Id имя не может начинаться с цифры!</p>
    </div>
    <hr>

    <h2>CSS селектор class</h2>
    <p>Селектор <code>class</code> выбирает HTML элементы с определенным атрибутом класса.</p>
    <p>Чтобы выбрать элементы с определенным классом, введите символ точки (.), а затем имя класса.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>В этом примере все HTML элементы с class=&quot;center&quot; будут красными и выровнены по центру:</p>
      <div class='w3-code notranslate cssHigh'>
        .center {<br>&nbsp; text-align: center;<br>&nbsp;&nbsp;color: red;<br>}
      </div>
      <a target='_blank' href='../csstryit/trycss_syntax_class.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <p>Вы также можете указать, что класс должен затрагивать только определенные HTML элементы.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>В этом примере только элементы <code>&lt;p&gt;</code> с class=&quot;center&quot; будут выровнены по центру:&nbsp;</p>
      <div class='w3-code notranslate cssHigh'>
        p.center {<br>&nbsp; text-align: center;<br>&nbsp;&nbsp;color: red;<br>}
      </div>
      <a target='_blank' href='../csstryit/trycss_syntax_element_class.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <p>HTML элементы также могут ссылаться на несколько классов.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>В этом примере элемент <code>&lt;p&gt;</code> будет стилизован в соответствии с class=&quot;center&quot;
        и class=&quot;large&quot;:&nbsp;</p>
      <div class='w3-code notranslate htmlHigh'>
        &lt;p class=&quot;center large&quot;&gt;This paragraph refers to two classes.&lt;/p&gt;</div>
      <a target='_blank' href='../csstryit/trycss_syntax_element_class2.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <div class='w3-panel w3-note'>
      <p><strong>Примечание:</strong> Имя класса не может начинаться с цифры!</p>
    </div>
    <hr>

    <h2>Универсальный CSS селектор</h2>
    <p>Универсальный селектор <code>(*)</code> выделяет все элементы HTML на странице.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Приведенное ниже правило CSS повлияет на каждый HTML элемент на странице:&nbsp;</p>
      <div class='w3-code notranslate cssHigh'>
        *
        {<br>
        &nbsp;&nbsp;text-align: center;<br>
        &nbsp;&nbsp;color: blue;<br>
        }
      </div>
      <a target='_blank' href='../csstryit/trycss_syntax_universal.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS Селектор группировки</h2>
    <p>Селектор группировки выбирает все HTML элементы с одинаковыми определениями стиля.</p>
    <p>Посмотрите на следующий код CSS (элементы h1, h2 и p имеют одинаковые определения стиля):</p>
    <div class='w3-example'>
      <div class='w3-code notranslate cssHigh'>
        h1
        {<br>
        &nbsp;&nbsp;text-align: center;<br>&nbsp;&nbsp;color: red;<br>
        }<br>
        <br>h2
        {<br>
        &nbsp;
        text-align: center;<br>&nbsp; color: red;<br>}<br>
        <br>p
        {<br>
        &nbsp;&nbsp;text-align: center;<br>&nbsp;&nbsp;color: red;<br>
        }</div></div>

    <p>Будет лучше сгруппировать селекторы, чтобы минимизировать код.</p>
    <p>Чтобы сгруппировать селекторы, разделяйте каждый селектор запятой.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>В этом примере мы сгруппировали селекторы из кода выше:&nbsp;</p>
      <div class='w3-code notranslate cssHigh'>
        h1, h2, p
        {<br>
        &nbsp;
        text-align: center;<br>&nbsp;&nbsp;color: red;<br>}</div>
      <a target='_blank' href='../csstryit/trycss_grouping.html' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <div class='w3-container w3-dark-grey w3-padding'>
      <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений!</h2>
      <div class='w3-bar w3-margin-bottom'>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_selectors1' target='_blank'>Упражнение 1 »</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_selectors2' target='_blank'>Упражнение 2 »</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_selectors3' target='_blank'>Упражнение 3 »</a>
        <a class='w3-bar-item w3-btn' href='https://www.w3schools.com/css/exercise.asp?filename=exercise_selectors4' target='_blank'>Упражнение 4 »</a>
      </div>
    </div>
    <hr>

    <h2>Все простые CSS селекторы</h2>
    <div class='w3-responsive'>
      <table class='w3-table-all notranslate'>
        <tr>
          <th style='width:20%'>Селектор</th>
          <th style='width:20%'>Пример</th>
          <th>Описание примера</th>
        </tr>
        <tr>
          <td><a href='../cssref/sel_class.php'>.<i>class</i></a></td>
          <td class='notranslate'>.intro</td>
          <td>Выбирает все элементы с class=&quot;intro&quot;</td>
        </tr>
        <tr>
          <td><a href='../cssref/sel_id.php'>#<i>id</i></a></td>
          <td class='notranslate'>#firstname</td>
          <td>Выбирает элемент с id=&quot;firstname&quot;</td>
        </tr>
        <tr>
          <td><a href='../cssref/sel_all.php'>*</a></td>
          <td class='notranslate'>*</td>
          <td>Выбирает все элементы на странице</td>
        </tr>
        <tr>
          <td><i><a href='../cssref/sel_element.php'>element</a></i></td>
          <td class='notranslate'>p</td>
          <td>Выбирает все элементы &lt;p&gt;</td>
        </tr>
        <tr>
          <td><i><a href='../cssref/sel_element_comma.php'>element,element,..</a></i></td>
          <td class='notranslate'>div, p</td>
          <td>Выбирает все элементы &lt;div&gt; и все элементы &lt;p&gt;</td>
        </tr>
      </table>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='css_syntax.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='css_howto.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>