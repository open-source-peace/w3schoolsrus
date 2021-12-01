<?php include '../include/head.php'; ?>
  <title>JavaScript События. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='JavaScript События. Когда что-то происходит с HTML-элементами, происходят HTML-события. Когда используется JavaScript, то он может реагировать на эти события. Что может сделать JavaScript? Примеры кода. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

  <article>
    <h1>JavaScript <span class='color_h1'>События</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='js_objects.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='js_strings.php'>Next &#10095;</a>
    </div>
    <hr>
    <p class='intro'>HTML события - это <b>&quot;что-то&quot;</b>, что происходит с HTML элементами.</p>
    <p class='intro'>Когда JavaScript используется на HTML страницах, JavaScript может <strong>&quot;реагировать&quot;</strong> на эти события.</p>
    <hr>

    <h2>HTML События</h2>
    <p>HTML-событие может быть тем, что делает браузер, или тем, что делает пользователь.</p>
    <p>Вот несколько примеров HTML событий:</p>
    <ul>
      <li>HTML-страница закончила загрузку</li>
      <li>Поле ввода HTML было изменено</li>
      <li>Нажата кнопка HTML</li>
    </ul>
      <?php include '../include/adinfeed.php'; ?>
    <p>Часто, когда происходят события, вы можете захотеть что-то сделать.</p>
    <p>JavaScript позволяет выполнять код при обнаружении событий.</p>
    <p>HTML позволяет добавлять атрибуты обработчика событий <strong>с кодом JavaScript</strong> к HTML єлементам.</p>
    <p>С одинарными кавычками:</p>
    <div class='w3-code w3-border notranslate htmlHigh'>
      <div>
        &lt;<em>элемент</em>
        <em>event</em>=<strong>'</strong><em><strong>какой-то JavaScript</strong></em><strong>'</strong>&gt;</div>
    </div>

    <p>С двойными кавычками:</p>
    <div class='w3-code w3-border notranslate htmlHigh'>
      <div>
        &lt;<em>элемент</em>
        <em>event</em>=<strong>&quot;</strong><em><strong>какой-то JavaScript</strong></em><strong>&quot;</strong>&gt;</div>
    </div>

    <p>В следующем примере атрибут <code class='w3-codespan'>onclick</code> (с кодом) добавляется к элементу
      <code class='w3-codespan'>&lt;button&gt;</code>:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;button onclick=&quot;document.getElementById('demo').innerHTML = Date()&quot;&gt;Который час?&lt;/button&gt;<br>
      </div>
      <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_event_onclick1.html' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>В приведенном выше примере JavaScript код изменяет содержимое элемента с id=&quot;demo&quot;.</p>
    <p>В следующем примере код изменяет содержимое своего собственного элемента (используя <code class='w3-codespan'><strong>this</strong>.innerHTML</code>): </p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;button onclick=&quot;this.innerHTML = Date()&quot;&gt;Который час?&lt;/button&gt;<br>
      </div>
      <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_event_onclick.html' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-panel w3-note'>
      <p>JavaScript код часто состоит из нескольких строк. Чаще встречаются атрибуты событий, вызывающие функции:</p>
    </div>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;button onclick=&quot;displayDate()&quot;&gt;Который час?&lt;/button&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../jstryit/tryjs_events1.html' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
      <?php include '../include/adinfeed.php'; ?>

    <h2>Общие HTML события</h2>
    <p>Вот список некоторых распространённых HTML событий:</p>
    <table class='w3-table-all' style='width: 100%'>
      <tr>
        <th>Событие</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td>onchange</td>
        <td>HTML-элемент был изменен</td>
      </tr>
      <tr>
        <td>onclick</td>
        <td>Пользователь кликает HTML элемент</td>
      </tr>
      <tr>
        <td>onmouseover</td>
        <td>Пользователь наводит указатель мыши на HTML элемент</td>
      </tr>
      <tr>
        <td>onmouseout</td>
        <td>Пользователь отодвигает мышь от HTML элемента</td>
      </tr>
      <tr>
        <td>onkeydown</td>
        <td>Пользователь нажимает клавишу клавиатуры</td>
      </tr>
      <tr>
        <td>onload</td>
        <td>Браузер завершил загрузку страницы</td>
      </tr>
    </table>
    <p>Список более длинный: <a href='../jsref/dom_obj_event.php'>W3Schools Справочник по JavaScript HTML DOM События</a>.</p>
    <hr>
      <?php include '../include/adinfeed.php'; ?>
    <h2>Что может сделать JavaScript?</h2>
    <p>Обработчики событий можно использовать для обработки и проверки ввода пользователя, действий пользователя и действий браузера:</p>
    <ul>
      <li>Что нужно делать каждый раз, когда загружается страница</li>
      <li>Что нужно сделать, когда страница закрыта</li>
      <li>Действие, которое должно быть выполнено, когда пользователь нажимает кнопку</li>
      <li>Контент, который следует проверять, когда пользователь вводит данные</li>
      <li>И другое ...</li>
    </ul>
    <p>Можно использовать много разных методов, чтобы JavaScript мог работать с событиями:</p>
    <ul>
      <li>Атрибуты событий HTML могут выполнять код JavaScript напрямую</li>
      <li>Атрибуты событий HTML могут вызывать функции JavaScript</li>
      <li>Вы можете назначить свои собственные функции обработчика событий элементам HTML</li>
      <li>Вы можете запретить отправку или обработку событий</li>
      <li>И другое ...</li>
    </ul>

    <div class='w3-panel w3-note'>
      <p>Вы узнаете намного больше о событиях и обработчиках событий в главах HTML DOM на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>
    </div>
    <hr>
      <?php include '../include/adinfeed.php'; ?>
    <form autocomplete='off' spellcheck='false' id='w3-exerciseform' action='https://www.w3schools.com/js/exercise_js.asp?filename=exercise_js_events1' method='post' target='_blank'>
      <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений</h2>
      <div class='exercisewindow'>
        <h2>Упражнение:</h2>
        <p>Элемент <code class='w3-codespan'>&lt;button&gt;</code> должен что-то делать, когда кто-то нажимает на него. Попробуйте это исправить!</p>
        <div class='exerciseprecontainer'>
<pre>
&lt;button <input name='ex1' maxlength='7' style='width: 75px;'>='alert('Hello')'&gt;Click me.&lt;/button&gt;
</pre>
        </div>
        <br>
        <button type='submit' class='w3-btn w3-margin-bottom'>Отправить ответ &raquo;</button>
      </div>
    </form>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='js_objects.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='js_strings.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>