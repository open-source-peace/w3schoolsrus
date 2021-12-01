<?php include '../include/head.php'; ?>

  <title>HTML Формы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML Формы. Что такое формы на веб-страницах? Какие бывают атрибуты форм? Как создаются формы? <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML <span class='color_h1'>Формы</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_xhtml.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_forms_attributes.php'>Next &#10095;</a>
    </div>
    <hr>

    <div class='w3-example'>
      <h3>HTML Форма. Пример</h3>
      <div class='w3-white w3-padding notranslate'>
        <form action='https://www.w3schools.com/action_page.php' target='_blank'>
          First name:<br>
          <input type='text' name='firstname' value='Mickey'><br>
          Last name:<br>
          <input type='text' name='lastname' value='Mouse'>
          <br><br>
          <input type='submit' value='Submit'>
        </form>
      </div>
      <a class='w3-btn w3-margin-top w3-margin-bottom' href='../htmltryit/tryitcff8.html?filename=tryhtml_form_submit' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Элемент &lt;form&gt;</h2>
    <p>HTML элемент <code class='w3-codespan'>&lt;form&gt;</code> определяет форму, которая используется для сбора пользовательского ввода:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form&gt;<br>
        .<br>
        <i>form elements</i><br>
        .<br>
        &lt;/form&gt;<br>
      </div></div>
    <p>HTML-форма содержит <strong>элементы формы</strong>.</p>
    <p>Элементы формы - это различные типы элементов ввода, такие как текстовые поля, флажки, переключатели, кнопки отправки и т.д.</p>
    <hr>

    <h2>Элемент &lt;input&gt;</h2>
    <p>Элемент <code class='w3-codespan'>&lt;input&gt;</code> является наиболее важным элементом формы.</p>
    <p>Элемент <code class='w3-codespan'>&lt;input&gt;</code> может отображаться несколькими способами, в зависимости от атрибута <strong>type</strong>.</p>
    <p>вот несколько примеров:</p>
    <table class='w3-table-all'>
      <tr>
        <th>Тип</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td>&lt;input type=&quot;text&quot;&gt;</td>
        <td>Определяет однострочное поле ввода текста</td>
      </tr>
      <tr>
        <td>&lt;input type=&quot;radio&quot;&gt;</td>
        <td>Определяет переключатель (для выбора одного из множества вариантов)</td>
      </tr>
      <tr>
        <td>&lt;input type=&quot;submit&quot;&gt;</td>
        <td>Определяет кнопку отправки (для отправки формы)</td>
      </tr>
    </table>
    <div class='w3-panel w3-note'>
      <p>Вы узнаете намного больше о типах ввода позже в этом учебнике.</p>
    </div>
    <hr>

    <h2>Ввод текста</h2>
    <p><code class='w3-codespan'>&lt;input type='text'&gt;</code> определяет однострочное поле ввода для <strong>text input</strong>:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form&gt;<br>
        &nbsp;
        First name:&lt;br&gt;<br>&nbsp; &lt;input type='text' name='firstname'&gt;&lt;br&gt;<br>
        &nbsp;
        Last name:&lt;br&gt;<br>&nbsp; &lt;input type='text' name='lastname'&gt;<br>
        &lt;/form&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit5852.html?filename=tryhtml_form_text' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>Вот так это будет выглядеть в браузере:</p>
    First name:<br> <input type='text'><br>
    Last name:<br> <input type='text'>
    <div class='w3-panel w3-note'>
      <p><b>Примечание:</b> Сама форма не видна. Также обратите внимание, что ширина текстового поля по умолчанию составляет 20 символов.</p>
    </div>
    <hr>

    <h2>Радио кнопка ввода</h2>
    <p><code class='w3-codespan'>&lt;input type='radio'&gt;</code> определяет <strong>радио кнопку</strong>.</p>
    <p>Переключатели (радио-кнопки) позволяют пользователю выбрать ОДИН из ограниченного числа вариантов:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form&gt;<br>&nbsp; &lt;input type='radio' name='gender&quot; value='male' checked&gt; Male&lt;br&gt;<br>
        &nbsp;
        &lt;input type='radio' name='gender' value='female'&gt; Female&lt;br&gt;<br>&nbsp;
        &lt;input type='radio' name='gender' value='other'&gt; Other<br>&lt;/form&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit1082.html?filename=tryhtml_form_radio' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>Вот как HTML-код выше будет отображаться в браузере:</p>
    <input type='radio' name='gender' checked> Male<br>
    <input type='radio' name='gender'> Female<br>
    <input type='radio' name='gender'> Other
    <hr>

    <h2>Кнопка 'Отправить'</h2>
    <p><code class='w3-codespan'>&lt;input type='submit'&gt;</code> определяет кнопку для <strong>
        отправки</strong> данных формы в <strong>обработчик форм</strong>.</p>
    <p>Обработчик форм обычно представляет собой серверную страницу со скриптом для обработки входных данных.</p>
    <p>Обработчик формы указывается в атрибуте <strong>action</strong> формы:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form action='/action_page.php'&gt;<br>&nbsp; First name:&lt;br&gt;<br>&nbsp; &lt;input type='text'
        name='firstname' value='Mickey'&gt;&lt;br&gt;<br>&nbsp; Last name:&lt;br&gt;<br>&nbsp; &lt;input
        type='text' name='lastname' value='Mouse'&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp; &lt;input type='submit' value='Submit'&gt;<br>&lt;/form&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitcff8.html?filename=tryhtml_form_submit' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>Вот как HTML-код выше будет отображаться в браузере:</p>
    <form action='https://www.w3schools.com/action_page.php' target='_blank'>
      First name:<br>
      <input type='text' name='firstname' value='Mickey'>
      <br>
      Last name:<br>
      <input type='text' name='lastname' value='Mouse'>
      <br><br>
      <input type='submit' value='Submit'>
    </form>
    <hr>

    <h2>Атрибут Action</h2>
    <p>Атрибут <code class='w3-codespan'>action</code> определяет действие, которое будет выполнено при отправке формы.</p>
    <p>Обычно данные формы отправляются на веб-страницу на сервере, когда пользователь нажимает кнопку отправки..</p>
    <p>В приведенном выше примере данные формы отправляются на страницу на сервере с именем &quot;/action_page.php&quot;. Эта страница содержит серверный скрипт, который обрабатывает данные формы:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form <strong>action='/action_page.php</strong>'&gt;<br>
      </div></div>
    <p>Если атрибут <code class='w3-codespan'>action</code> пропущен, действие установлено на текущую страницу.</p>

    <hr>

    <h2>Атрибут Target</h2>
    <p>Атрибут <code class='w3-codespan'>target</code> указывает, будет ли отправленный результат открываться в новой вкладке браузера, во фрейме или в текущем окне.</p>
    <p>По умолчанию значение '<code class='w3-codespan'>_self</code>' означает, что форма будет отправлена в текущем окне.</p>
    <p>Чтобы сделать результат формы открытым в новой вкладке браузера, используйте значение &quot;<code class='w3-codespan'>_blank</code>&quot;:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form action='/action_page.php'
        <strong>target='_blank&quot;</strong>&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitfb32.html?filename=tryhtml_form_target' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>Другими допустимыми значениями являются '<code class='w3-codespan'>_parent</code>', '<code class='w3-codespan'>_top</code>' или имя, представляющее имя iframe.</p>
    <hr>

    <h2>Атрибут Method</h2>
    <p>Атрибут <code class='w3-codespan'>method</code> указывает метод HTTP (<strong>GET</strong> или <strong>POST</strong>) который будет использоваться при отправке данных формы:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form action='/action_page.php' <strong>method='get&quot;</strong>&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit6bc0.html?filename=tryhtml_form_get' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>или:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form action='/action_page.php' <strong>method='post&quot;</strong>&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit362c.html?filename=tryhtml_form_post' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Когда использовать GET?</h2>
    <p>Метод по умолчанию при отправке данных формы - GET.</p>
    <p>Однако при использовании GET отправленные данные формы будут <strong>видны в поле адреса страницы.</strong>:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        /action_page.php?firstname=Mickey&amp;lastname=Mouse</div></div>

    <p><b>Примечания по GET:</b> </p>
    <ul>
      <li>Добавляет данные в форме отправки к URL-адресу в парах имя/значение</li>
      <li>Длина URL-адреса ограничена (около 3000 символов)</li>
      <li>Никогда не используйте GET для отправки конфиденциальных данных! (будет отображаться в URL-адресе)</li>
      <li>Полезно для подачи форм, где пользователь хочет сделать закладку результата</li>
      <li>GET является лучшим вариантом для незащищённых данных, например строк запросов в Google</li>
    </ul>
    <hr>

    <h2>Когда использовать POST?</h2>
    <p>Всегда используйте <strong>POST</strong>, если данные формы содержат конфиденциальную или личную информацию. Метод <strong>POST</strong> не отображает отправленные данные формы в адресной строке страницы.</p>
    <p><b>Примечания по POST:</b> </p>
    <ul>
      <li>POST не имеет ограничений по размерам и может использоваться для отправки больших объёмов данных</li>
      <li>Отправленные с POST формы нельзя добавить в закладки</li>
    </ul>

    <hr>

    <h2>Атрибут Name</h2>
    <p>Каждое поле ввода должно иметь атрибут <code class='w3-codespan'>name</code> для отправки.</p>
    <p>Если атрибут <code class='w3-codespan'>name</code> опущен, данные этого поля ввода не будут отправлены вообще.</p>
    <p>Этот пример будет отправлять только поле ввода &quot;Last name&quot;:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form action='/action_page.php'&gt;<br>&nbsp; First name:&lt;br&gt;<br>&nbsp; &lt;input type='text'
        value='Mickey'&gt;&lt;br&gt;<br>&nbsp; Last name:&lt;br&gt;<br>&nbsp; &lt;input
        type='text' name='lastname' value='Mouse'&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp; &lt;input type='submit' value='Submit'&gt;<br>&lt;/form&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit1c32.html?filename=tryhtml_form_submit_id' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Группировка данных формы с помощью &lt;fieldset&gt;</h2>
    <p>Элемент <code class='w3-codespan'>&lt;fieldset&gt;</code> Элемент используется для группировки связанных данных в форме.</p>
    <p>Элемент <code class='w3-codespan'>&lt;legend&gt;</code> определяет заголовок для элемента <code class='w3-codespan'>&lt;fieldset&gt;</code>.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form action='/action_page.php'&gt;<br>&nbsp; &lt;fieldset&gt;<br>&nbsp;&nbsp;&nbsp; &lt;legend&gt;Personal
        information:&lt;/legend&gt;<br>&nbsp;&nbsp;&nbsp; First name:&lt;br&gt;<br>&nbsp;&nbsp;&nbsp; &lt;input type='text' name='firstname'
        value='Mickey'&gt;&lt;br&gt;<br>&nbsp;&nbsp;&nbsp; Last name:&lt;br&gt;<br>
        &nbsp;&nbsp;&nbsp;
        &lt;input type='text' name='lastname' value='Mouse'&gt;&lt;br&gt;&lt;br&gt;<br>
        &nbsp;&nbsp;&nbsp;
        &lt;input type='submit' value='Submit'&gt;<br>&nbsp; &lt;/fieldset&gt;<br>
        &lt;/form&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit4436.html?filename=tryhtml_form_legend' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>Вот как HTML-код выше будет отображаться в браузере:</p>
    <form action='https://www.w3schools.com/action_page.php' target='_blank'>
      <fieldset>
        <legend>Personal information:</legend>
        First name:<br>
        <input type='text' name='firstname' value='Mickey'>
        <br>
        Last name:<br>
        <input type='text' name='lastname' value='Mouse'>
        <br><br>
        <input type='submit' value='Submit'>
      </fieldset>
    </form>
    <hr>
    <h2>HTML Упражнения</h2>
    <form autocomplete='off' id='w3-exerciseform' action='https://www.w3schools.com/html/exercise.asp?filename=exercise_html_forms1' method='post' target='_blank'>
      <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений</h2>
      <div class='exercisewindow'>
        <h2>Упражнение:</h2>
        <p>В приведенной ниже форме добавьте поле ввода с типом 'button' и значением 'OK'.</p>
        <div class='exerciseprecontainer'>
          &lt;form&gt;
          <br>
          &lt;<input name='ex1' spellcheck='false' maxlength='30' style='width: 304px;'>&gt;
          <br>
          &lt;/form&gt;
        </div>
        <br>
        <button type='submit' class='w3-btn w3-margin-bottom'>Отправить ответ &raquo;</button>
      </div>
    </form>
    <hr>

    <p>Список всех атрибутов <code class='w3-codespan'>&lt;form&gt;</code>:</p>

    <table class='w3-table-all'>
      <tr>
        <th>Атрибут</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td>accept-charset</td>
        <td>Указывает набор символов, что используется в отправленной форме (по умолчанию: набор символов страницы).</td>
      </tr>
      <tr>
        <td>action</td>
        <td>Указывает адрес (url), куда отправить форму (по умолчанию: страница отправки).</td>
      </tr>
      <tr>
        <td>autocomplete</td>
        <td>Указывает, должен ли браузер автоматически заполнять форму (по умолчанию: включено).</td>
      </tr>
      <tr>
        <td>enctype</td>
        <td>Определяет кодировку отправленных данных (по умолчанию: url-encoded).</td>
      </tr>
      <tr>
        <td>method</td>
        <td>Указывает метод HTTP, который используется во время отправки формы (по умолчанию: GET).</td>
      </tr>
      <tr>
        <td>name</td>
        <td>Указывает название, которое используется для идентификации формы (для использования DOM: document.forms.name).</td>
      </tr>
      <tr>
        <td>novalidate</td>
        <td>Указывает, что браузер не должен проверять форму.</td>
      </tr>
      <tr>
        <td>target</td>
        <td>Указывает цель адреса в атрибуте action (по умолчанию:_self).</td>
      </tr>
    </table>
    <div class='w3-panel w3-note'>
      <p>Вы узнаете больше об атрибутах формы в следующих разделах на сайте.</p>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_xhtml.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_forms_attributes.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>