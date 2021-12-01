<?php include '../include/head.php'; ?>

  <title>HTML Атрибуты ввода. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML Форма. Атрибуты ввода. Как создать форму на веб-странице? Какие бывают input атрибуты на веб-страницах? <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
      <h1>HTML <span class='color_h1'>Атрибуты ввода</span></h1>
      <div class='w3-clear nextprev'>
          <a class='w3-left w3-btn' href='html_form_input_types.php'>&#10094; Prev</a>
          <a class='w3-right w3-btn' href='html_form_attributes_form.php'>Next &#10095;</a>
      </div>
      <hr>

      <h2>Атрибут value (значение)</h2>
      <p>Атрибут <code class='w3-codespan'>value</code> задает начальное значение для поля ввода:</p>
      <div class='w3-example'>
          <h3>Пример</h3>
          <div class='w3-code notranslate htmlHigh'>
              &lt;form action=&quot;&quot;&gt;<br>
              &nbsp;
              First name:&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot; name=&quot;firstname&quot;
              value=&quot;John&quot;&gt;<br>&lt;/form&gt;
          </div>
          <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit5b99.html?filename=tryhtml_input_attributes_value' target='_blank'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Атрибут readonly (только для чтения)</h2>
      <p>Атрибут <code class='w3-codespan'>readonly</code> указывает, что поле ввода доступно только для чтения (не может быть изменено):</p>
      <div class='w3-example'>
          <h3>Пример</h3>
          <div class='w3-code notranslate htmlHigh'>
              &lt;form action=&quot;&quot;&gt;<br>
              &nbsp;
              First name:&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot; name=&quot;firstname&quot;
              value=&quot;John&quot; readonly&gt;<br>&lt;/form&gt;
          </div>
          <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitd59b.html?filename=tryhtml_input_attributes_readonly' target='_blank'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Атрибут disabled</h2>
      <p>Атрибут <code class='w3-codespan'>disabled</code> указывает, что поле ввода отключено.</p>
      <p>Отключенное поле ввода нельзя использовать и нельзя щелкнуть мышью, и его значение не будет отправлено при отправке формы:</p>
      <div class='w3-example'>
          <h3>Пример</h3>
          <div class='w3-code notranslate htmlHigh'>
              &lt;form action=&quot;&quot;&gt;<br>
              &nbsp;
              First name:&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot; name=&quot;firstname&quot;
              value=&quot;John&quot; disabled&gt;<br>&lt;/form&gt;
          </div>
          <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitb171.html?filename=tryhtml_input_attributes_disabled' target='_blank'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Атрибут size (размер)</h2>
      <p>Атрибут <code class='w3-codespan'>size</code> определяет размер (в символах) для поля ввода:</p>
      <div class='w3-example'>
          <h3>Пример</h3>
          <div class='w3-code notranslate htmlHigh'>
              &lt;form action=&quot;&quot;&gt;<br>
              &nbsp;
              First name:&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot; name=&quot;firstname&quot;
              value=&quot;John&quot; size=&quot;40&quot;&gt;<br>&lt;/form&gt;
          </div>
          <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitc567.html?filename=tryhtml_input_attributes_size' target='_blank'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Атрибут maxlength (максимальная длина)</h2>
      <p>Атрибут <code class='w3-codespan'>maxlength</code> задает максимально допустимую длину для поля ввода:</p>
      <div class='w3-example'>
          <h3>Пример</h3>
          <div class='w3-code notranslate htmlHigh'>
              &lt;form action=&quot;&quot;&gt;<br>
              &nbsp;
              First name:&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot; name=&quot;firstname&quot;
              maxlength=&quot;10&quot;&gt;<br>&lt;/form&gt;
          </div>
          <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit77d2.html?filename=tryhtml_input_attributes_maxlength' target='_blank'>Попробуйте сами &raquo;</a>
      </div>
      <p>С атрибутом <code class='w3-codespan'>maxlength</code> поле ввода не будет принимать больше, чем
          допустимое количество символов.</p>
      <p>Атрибут <code class='w3-codespan'>maxlength</code> не предоставляет никакой обратной связи. Если вы хотите предупредить пользователя, вы должны написать код JavaScript.</p>
      <div class='w3-panel w3-note'>
          <p><strong>Примечание:</strong> Ограничения ввода не являются надежными, и JavaScript предоставляет множество способов добавить недопустимый ввод. Чтобы безопасно ограничить ввод, он также должен быть проверен получателем (сервером)!</p>
      </div>
      <hr>

      <h2>HTML5 Атрибуты</h2>
      <p>HTML5 добавил следующие атрибуты для <code class='w3-codespan'>&lt;input&gt;</code>:</p>
      <ul>
          <li>autocomplete</li>
          <li>autofocus</li>
          <li>form</li>
          <li>formaction</li>
          <li>formenctype</li>
          <li>formmethod</li>
          <li>formnovalidate</li>
          <li>formtarget</li>
          <li>height and width</li>
          <li>list</li>
          <li>min and max</li>
          <li>multiple</li>
          <li>pattern (regexp)</li>
          <li>placeholder</li>
          <li>required</li>
          <li>step</li>
      </ul>
      <p>и следующие атрибуты для <code class='w3-codespan'>&lt;form&gt;</code>:</p>
      <ul>
          <li>autocomplete</li>
          <li>novalidate</li>
      </ul>
      <hr>

      <h2>Атрибут autocomplete (автозаполнение)</h2>
      <p>Атрибут <code class='w3-codespan'>autocomplete</code> указывает, будет ли автозаполнение формы или поля ввода включено или выключено.</p>
      <p>Когда автозаполнение включено, браузер автоматически завершает ввод значений на основе значений, которые пользователь ввел ранее.</p>
      <p><b>Совет:</b> Можно включить автозаполнение для формы &quot;on&quot; и выключить &quot;off&quot; для определенных полей ввода, или наоборот.</p>
      <p>Атрибут <code class='w3-codespan'>autocomplete</code> работает с <code class='w3-codespan'>&lt;form&gt;</code> и следующими типами <code class='w3-codespan'>&lt;input&gt;</code>: text, search, url, tel, email, password, datepickers, range и color.</p>
      <div class='w3-example'>
          <img style='float:right;' src='../images/compatible_opera2020.gif' title='Opera' alt='Opera' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_safari2020.gif' title='Safari' alt='Safari' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_chrome2020.gif' title='Chrome' alt='Chrome' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_firefox2020.gif' title='Firefox' alt='Firefox' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_edge2020.gif' title='Internet Explorer' alt='Internet Explorer' width='20' height='20'>
          <h3>Пример</h3>
          <p>HTML-форма с автозаполнением (и выключенным для одного поля ввода):</p>
          <div class='w3-code notranslate htmlHigh'>
              &lt;form action=&quot;/action_page.php&quot; autocomplete=&quot;on&quot;&gt;<br>
              &nbsp;
              First name:&lt;input type=&quot;text&quot; name=&quot;fname&quot;&gt;&lt;br&gt;<br>
              &nbsp;
              Last name: &lt;input type=&quot;text&quot; name=&quot;lname&quot;&gt;&lt;br&gt;<br>
              &nbsp;
              E-mail: &lt;input type=&quot;email&quot; name=&quot;email&quot; autocomplete=&quot;off&quot;&gt;&lt;br&gt;<br>
              &nbsp;
              &lt;input type=&quot;submit&quot;&gt;<br>
              &lt;/form&gt;
          </div>
          <a class='w3-btn w3-margin-bottom' target='_blank' href='../htmltryit/tryit73ef.html?filename=tryhtml5_input_autocomplete'>Попробуйте сами &raquo;</a>
      </div>
      <p><strong>Подсказка:</strong> В некоторых браузерах вам может потребоваться активировать функцию автозаполнения, чтобы это работало.</p>
      <hr>

      <h2>Атрибут novalidate (не проверять)</h2>
      <p>Атрибут <code class='w3-codespan'>novalidate</code> является атрибутом <code class='w3-codespan'>&lt;form&gt;</code>.</p>
      <p>При наличии novalidate указывает, что данные формы не должны проверяться при отправке.</p>
      <div class='w3-example'>
          <img style='float:right;' src='../images/compatible_opera2020.gif' title='Opera' alt='Opera' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_safari2020.gif' title='Safari' alt='Safari' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_chrome2020.gif' title='Chrome' alt='Chrome' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_firefox2020.gif' title='Firefox' alt='Firefox' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_edge2020.gif' title='Internet Explorer' alt='Internet Explorer' width='20' height='20'>
          <h3>Пример</h3>
          <p>Указывает, что форма не подлежит проверке при отправке:</p>
          <div class='w3-code notranslate htmlHigh'>
              &lt;form action=&quot;/action_page.php&quot; novalidate&gt;<br>&nbsp;
              E-mail: &lt;input type=&quot;email&quot; name=&quot;user_email&quot;&gt;<br>
              &nbsp; &lt;input type=&quot;submit&quot;&gt;<br>
              &lt;/form&gt;
          </div>
          <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit7b60.html?filename=tryhtml5_form_novalidate' target='_blank'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Атрибут autofocus (автофокус)</h2>
      <p>Атрибут <code class='w3-codespan'>autofocus</code> указывает, что поле ввода должно автоматически фокусироваться при загрузке страницы.</p>
      <div class='w3-example'>
          <img style='float:right;' src='../images/compatible_opera2020.gif' title='Opera' alt='Opera' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_safari2020.gif' title='Safari' alt='Safari' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_chrome2020.gif' title='Chrome' alt='Chrome' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_firefox2020.gif' title='Firefox' alt='Firefox' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_edge2020.gif' title='Internet Explorer' alt='Internet Explorer' width='20' height='20'>
          <h3>Пример</h3>
          <p>Пусть поле ввода &quot;First name&quot; автоматически получит фокус при загрузке страницы:</p>
          <div class='w3-code notranslate htmlHigh'>
              First name:&lt;input type=&quot;text&quot; name=&quot;fname&quot;
              autofocus&gt;</div>
          <a class='w3-btn w3-margin-bottom' target='_blank' href='../htmltryit/tryit7c56.html?filename=tryhtml5_input_autofocus'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Атрибут form (форма)</h2>
      <p>Атрибут <code class='w3-codespan'>form</code> атрибут определяет одну или несколько форм, к которым принадлежит элемент <code class='w3-codespan'>&lt;input&gt;</code>.</p>
      <div class='w3-example'>
          <img style='float:right;' src='../images/compatible_opera2020.gif' title='Opera' alt='Opera' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_safari2020.gif' title='Safari' alt='Safari' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_chrome2020.gif' title='Chrome' alt='Chrome' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_firefox2020.gif' title='Firefox' alt='Firefox' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_edge2020.gif' title='Internet Explorer' alt='Internet Explorer' width='20' height='20'>
          <h3>Пример</h3>
          <p>Поле ввода, расположенное за пределами формы HTML (но все ещё часть формы):</p>
          <div class='w3-code notranslate htmlHigh'>
              &lt;form action=&quot;/action_page.php&quot; id=&quot;form1&quot;&gt;<br>
              &nbsp;
              First name: &lt;input type=&quot;text&quot; name=&quot;fname&quot;&gt;&lt;br&gt;<br>
              &nbsp;
              &lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;<br>
              &lt;/form&gt;<br>
              <br>
              Last name: &lt;input type=&quot;text&quot; name=&quot;lname&quot; form=&quot;form1&quot;&gt;</div>
          <a class='w3-btn w3-margin-bottom' target='_blank' href='../htmltryit/tryit1577.html?filename=tryhtml5_input_form'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Атрибут formaction (формирование)</h2>
      <p>Атрибут <code class='w3-codespan'>formaction</code> указывает URL-адрес файла, который будет обрабатывать элемент управления вводом при отправке формы.</p>
      <p>Атрибут formaction переопределяет атрибут action элемента <code class='w3-codespan'>&lt;form&gt;</code>.</p>
      <p>The formaction attribute is used with <code class='w3-codespan'>type=&quot;submit&quot;</code> and <code class='w3-codespan'>type=&quot;image&quot;</code>.</p>
      <div class='w3-example'>
          <img style='float:right;' src='../images/compatible_opera2020.gif' title='Opera' alt='Opera' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_safari2020.gif' title='Safari' alt='Safari' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_chrome2020.gif' title='Chrome' alt='Chrome' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_firefox2020.gif' title='Firefox' alt='Firefox' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_edge2020.gif' title='Internet Explorer' alt='Internet Explorer' width='20' height='20'>
          <h3>Пример</h3>
          <p>HTML-форма с двумя кнопками отправки, с различными действиями:</p>
          <div class='w3-code notranslate htmlHigh'>
              &lt;form action=&quot;/action_page.php&quot;&gt;<br>
              &nbsp;
              First name: &lt;input type=&quot;text&quot; name=&quot;fname&quot;&gt;&lt;br&gt;<br>
              &nbsp;
              Last name: &lt;input type=&quot;text&quot; name=&quot;lname&quot;&gt;&lt;br&gt;<br>
              &nbsp;
              &lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;&lt;br&gt;<br>
              &nbsp;
              &lt;input type=&quot;submit&quot; formaction=&quot;/action_page2.php&quot;<br>
              &nbsp; value=&quot;Submit as admin&quot;&gt;<br>
              &lt;/form&gt;

          </div>
          <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryita145.html?filename=tryhtml5_input_formaction' target='_blank'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Атрибут formenctype (форментип)</h2>
      <p>Атрибут <code class='w3-codespan'>formenctype</code> определяет, как данные формы должны быть закодированы при отправке (только для форм с method=&quot;post&quot;).</p>
      <p>Атрибут <code class='w3-codespan'>formenctype</code> переопределяет атрибут enctype элемента <code class='w3-codespan'>&lt;form&gt;</code>.</p>
      <p>Атрибут <code class='w3-codespan'>formenctype</code> используется с <code class='w3-codespan'>type=&quot;submit&quot;</code> и <code class='w3-codespan'>type=&quot;image&quot;</code>.</p>
      <div class='w3-example'>
          <img style='float:right;' src='../images/compatible_opera2020.gif' title='Opera' alt='Opera' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_safari2020.gif' title='Safari' alt='Safari' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_chrome2020.gif' title='Chrome' alt='Chrome' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_firefox2020.gif' title='Firefox' alt='Firefox' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_edge2020.gif' title='Internet Explorer' alt='Internet Explorer' width='20' height='20'>
          <h3>Пример</h3>
          <p>Отправить данные формы, которые закодированы по умолчанию (первая кнопка отправки) и закодированы как &quot;multipart/form-data&quot; (вторая кнопка отправки):</p>
          <div class='w3-code notranslate htmlHigh'>
              &lt;form action=&quot;/action_page_binary.asp&quot; method=&quot;post&quot;&gt;<br>
              &nbsp;
              First name: &lt;input type=&quot;text&quot; name=&quot;fname&quot;&gt;&lt;br&gt;<br>
              &nbsp;
              &lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;<br>
              &nbsp;
              &lt;input type=&quot;submit&quot; formenctype=&quot;multipart/form-data&quot;<br>
              &nbsp; value=&quot;Submit as Multipart/form-data&quot;&gt;<br>
              &lt;/form&gt;
          </div>
          <a class='w3-btn w3-margin-bottom' target='_blank' href='../htmltryit/tryit339d.html?filename=tryhtml5_input_formenctype'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Атрибут formmethod (метод формы)</h2>
      <p>Атрибут <code class='w3-codespan'>formmethod</code> определяет метод HTTP для отправки данных формы на URL action.</p>
      <p>Атрибут <code class='w3-codespan'>formmethod</code> переопределяет атрибут метода элемента <code class='w3-codespan'>&lt;form&gt;</code>.</p>
      <p>Атрибут <code class='w3-codespan'>formmethod</code> может быть использован с <code class='w3-codespan'>type=&quot;submit&quot;</code> и <code class='w3-codespan'>type=&quot;image&quot;</code>.</p>
      <div class='w3-example'>
          <img style='float:right;' src='../images/compatible_opera2020.gif' title='Opera' alt='Opera' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_safari2020.gif' title='Safari' alt='Safari' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_chrome2020.gif' title='Chrome' alt='Chrome' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_firefox2020.gif' title='Firefox' alt='Firefox' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_edge2020.gif' title='Internet Explorer' alt='Internet Explorer' width='20' height='20'>
          <h3>Пример</h3>
          <p>Вторая кнопка отправки переопределяет HTTP-метод формы:</p>
          <div class='w3-code notranslate htmlHigh'>
              &lt;form action=&quot;/action_page.php&quot; method=&quot;get&quot;&gt;<br>
              &nbsp;
              First name: &lt;input type=&quot;text&quot; name=&quot;fname&quot;&gt;&lt;br&gt;<br>
              &nbsp;
              Last name: &lt;input type=&quot;text&quot; name=&quot;lname&quot;&gt;&lt;br&gt;<br>
              &nbsp;
              &lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;<br>
              &nbsp;
              &lt;input type=&quot;submit&quot; formmethod=&quot;post&quot; value=&quot;Submit using POST&quot;&gt;<br>
              &lt;/form&gt;
          </div>
          <a class='w3-btn w3-margin-bottom' target='_blank' href='../htmltryit/tryit0d88.html?filename=tryhtml5_input_formmethod'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Атрибут formnovalidate (форма не проверяется)</h2>
      <p>Атрибут <code class='w3-codespan'>formnovalidate</code> переопределяет атрибут novalidate элемента <code class='w3-codespan'>&lt;form&gt;</code>.</p>
      <p>Атрибут <code class='w3-codespan'>formnovalidate</code> может быть использован с <code class='w3-codespan'>type=&quot;submit&quot;</code>.</p>
      <div class='w3-example'>
          <img style='float:right;' src='../images/compatible_opera2020.gif' title='Opera' alt='Opera' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_safari2020.gif' title='Safari' alt='Safari' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_chrome2020.gif' title='Chrome' alt='Chrome' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_firefox2020.gif' title='Firefox' alt='Firefox' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_edge2020.gif' title='Internet Explorer' alt='Internet Explorer' width='20' height='20'>
          <h3>Пример</h3>
          <p>Форма с двумя кнопками отправки (с проверкой и без проверки):</p>
          <div class='w3-code notranslate htmlHigh'>
              &lt;form action=&quot;/action_page.php&quot;&gt;<br>
              &nbsp;
              E-mail: &lt;input type=&quot;email&quot; name=&quot;userid&quot;&gt;&lt;br&gt;<br>
              &nbsp;
              &lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;&lt;br&gt;<br>
              &nbsp;
              &lt;input type=&quot;submit&quot; formnovalidate value=&quot;Submit without validation&quot;&gt;<br>
              &lt;/form&gt;
          </div>
          <a class='w3-btn w3-margin-bottom' target='_blank' href='../htmltryit/tryitaffe.html?filename=tryhtml5_input_formnovalidate'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Атрибут formtarget (цель формы)</h2>
      <p>Атрибут <code class='w3-codespan'>formtarget</code> определяет имя или ключевое слово, которое указывает, где отображать ответ, полученный после отправки формы.</p>
      <p>Атрибут <code class='w3-codespan'>formtarget</code> переопределяет целевой атрибут элемента <code class='w3-codespan'>&lt;form&gt;</code>.</p>
      <p>Атрибут <code class='w3-codespan'>formtarget</code> может быть использован с <code class='w3-codespan'>type=&quot;submit&quot;</code> и <code class='w3-codespan'>type=&quot;image&quot;</code>.</p>
      <div class='w3-example'>
          <img style='float:right;' src='../images/compatible_opera2020.gif' title='Opera' alt='Opera' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_safari2020.gif' title='Safari' alt='Safari' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_chrome2020.gif' title='Chrome' alt='Chrome' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_firefox2020.gif' title='Firefox' alt='Firefox' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_edge2020.gif' title='Internet Explorer' alt='Internet Explorer' width='20' height='20'>
          <h3>Пример</h3>
          <p>Форма с двумя кнопками отправки, с разными целевыми окнами:</p>
          <div class='w3-code notranslate htmlHigh'>
              &lt;form action=&quot;/action_page.php&quot;&gt;<br>
              &nbsp;
              First name: &lt;input type=&quot;text&quot; name=&quot;fname&quot;&gt;&lt;br&gt;<br>
              &nbsp;
              Last name: &lt;input type=&quot;text&quot; name=&quot;lname&quot;&gt;&lt;br&gt;<br>
              &nbsp;
              &lt;input type=&quot;submit&quot; value=&quot;Submit as normal&quot;&gt;<br>
              &nbsp; &lt;input type=&quot;submit&quot; formtarget=&quot;_blank&quot;<br>
              &nbsp; value=&quot;Submit to a new window&quot;&gt;<br>
              &lt;/form&gt;
          </div>
          <a class='w3-btn w3-margin-bottom' target='_blank' href='../htmltryit/tryite252.html?filename=tryhtml5_input_formtarget'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Атрибуты height и width (высота и ширина)</h2>
      <p>Атрибуты <code class='w3-codespan'>height</code> и <code class='w3-codespan'>width</code> определяют высоту и ширину элемента <code class='w3-codespan'>&lt;input type=&quot;image&quot;&gt;</code>.</p>
      <div class='w3-panel w3-note'>
          <p>Всегда указывайте размер изображений. Если браузер не знает размер, страница будет мерцать во время загрузки изображений.</p>
      </div>

      <div class='w3-example'>
          <img style='float:right;' src='../images/compatible_opera2020.gif' title='Opera' alt='Opera' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_safari2020.gif' title='Safari' alt='Safari' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_chrome2020.gif' title='Chrome' alt='Chrome' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_firefox2020.gif' title='Firefox' alt='Firefox' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_edge2020.gif' title='Internet Explorer' alt='Internet Explorer' width='20' height='20'>
          <h3>Пример</h3>
          <p>Определите изображение как кнопку отправки с атрибутами высоты и ширины:</p>

          <div class='w3-code notranslate htmlHigh'>
              &lt;input type=&quot;image&quot; src=&quot;img_submit.gif&quot; alt=&quot;Submit&quot; width=&quot;48&quot; height=&quot;48&quot;&gt;
          </div>
          <a class='w3-btn w3-margin-bottom' target='_blank' href='../htmltryit/tryitc29f.html?filename=tryhtml5_input_height_width'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Атрибут list (список)</h2>
      <p>Атрибут <code class='w3-codespan'>list</code> относится к элементу <code class='w3-codespan'>&lt;datalist&gt;</code>, который содержит предопределенные параметры для элемента &lt;input&gt;.</p>
      <div class='w3-example'>
          <img style='float:right;' src='../images/compatible_opera2020.gif' title='Opera' alt='Opera' width='20' height='20'>
          <img style='float:right;' src='../images/incompatible_safari2020.gif' title='Safari' alt='Safari' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_chrome2020.gif' title='Chrome' alt='Chrome' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_firefox2020.gif' title='Firefox' alt='Firefox' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_edge2020.gif' title='Internet Explorer' alt='Internet Explorer' width='20' height='20'>
          <h3>Пример</h3>
          <p>Элемент &lt;input&gt; с предварительно определенными значениями в &lt;datalist&gt;:</p>
          <div class='w3-code notranslate htmlHigh'>
              &lt;input list=&quot;browsers&quot;&gt;<br><br>
              &lt;datalist id=&quot;browsers&quot;&gt;<br>
              &nbsp; &lt;option value=&quot;Internet Explorer&quot;&gt;<br>
              &nbsp; &lt;option value=&quot;Firefox&quot;&gt;<br>
              &nbsp; &lt;option value=&quot;Chrome&quot;&gt;<br>
              &nbsp; &lt;option value=&quot;Opera&quot;&gt;<br>
              &nbsp; &lt;option value=&quot;Safari&quot;&gt;<br>
              &lt;/datalist&gt;
          </div>
          <a class='w3-btn w3-margin-bottom' target='_blank' href='../htmltryit/tryit5fd2.html?filename=tryhtml5_datalist'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Атрибуты min и max (минимум и максимум)</h2>
      <p>Атрибуты <code class='w3-codespan'>min</code> и <code class='w3-codespan'>max</code> определяют минимальные и максимальные значения для элемента <code class='w3-codespan'>&lt;input&gt;</code>.</p>
      <p>Атрибуты <code class='w3-codespan'>min</code> и <code class='w3-codespan'>max</code> работают со следующими типами ввода: number, range, date, datetime-local, month, time и week.</p>
      <div class='w3-example'>
          <img style='float:right;' src='../images/compatible_opera2020.gif' title='Opera' alt='Opera' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_safari2020.gif' title='Safari' alt='Safari' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_chrome2020.gif' title='Chrome' alt='Chrome' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_firefox2020.gif' title='Firefox' alt='Firefox' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_edge2020.gif' title='Internet Explorer' alt='Internet Explorer' width='20' height='20'>
          <h3>Пример</h3>
          <p>&lt;input&gt; elements with min and max values:</p>
          <div class='w3-code notranslate htmlHigh'>
              Enter a date before 1980-01-01:<br>
              &lt;input type=&quot;date&quot; name=&quot;bday&quot; max=&quot;1979-12-31&quot;&gt;<br><br>
              Enter a date after 2000-01-01:<br>
              &lt;input type=&quot;date&quot; name=&quot;bday&quot; min=&quot;2000-01-02&quot;&gt;<br><br>
              Quantity (between 1 and 5):<br>
              &lt;input type=&quot;number&quot; name=&quot;quantity&quot; min=&quot;1&quot; max=&quot;5&quot;&gt;</div>
          <a class='w3-btn w3-margin-bottom' target='_blank' href='../htmltryit/tryitb14e.html?filename=tryhtml5_input_max_min'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Атрибут multiple (множество)</h2>
      <p>Атрибут <code class='w3-codespan'>multiple</code> указывает, что пользователю разрешено вводить более одного значения в элементе <code class='w3-codespan'>&lt;input&gt;</code>.</p>
      <p>Атрибут <code class='w3-codespan'>multiple</code> работает со следующими типами ввода: email и file.</p>
      <div class='w3-example'>
          <img style='float:right;' src='../images/compatible_opera2020.gif' title='Opera' alt='Opera' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_safari2020.gif' title='Safari' alt='Safari' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_chrome2020.gif' title='Chrome' alt='Chrome' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_firefox2020.gif' title='Firefox' alt='Firefox' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_edge2020.gif' title='Internet Explorer' alt='Internet Explorer' width='20' height='20'>
          <h3>Пример</h3>
          <p>Поле загрузки файла, которое принимает несколько значений:</p>
          <div class='w3-code notranslate htmlHigh'>
              Select images: &lt;input type=&quot;file&quot; name=&quot;img&quot; multiple&gt;</div>
          <a class='w3-btn w3-margin-bottom' target='_blank' href='../htmltryit/tryit4ebe.html?filename=tryhtml5_input_multiple'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Атрибут pattern (паттерн)</h2>
      <p>Атрибут <code class='w3-codespan'>pattern</code> определяет регулярное выражение, с которым проверяется значение элемента <code class='w3-codespan'>&lt;input&gt;</code>.</p>
      <p>Атрибут <code class='w3-codespan'>pattern</code> работает со следующими типами ввода: text, search, url, tel, email и password.</p>
      <p><strong>Совет:</strong> Используйте глобальный атрибут <a href='../tags/att_global_title.php'>title</a> для описания паттерна, чтобы помочь пользователю.</p>
      <p><b>Совет:</b> Узнайте больше о <a href='../js/js_regexp.php'>регулярных выражениях</a> в JavaScript учебнике.</p>
      <div class='w3-example'>
          <img style='float:right;' src='../images/compatible_opera2020.gif' title='Opera' alt='Opera' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_safari2020.gif' title='Safari' alt='Safari' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_chrome2020.gif' title='Chrome' alt='Chrome' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_firefox2020.gif' title='Firefox' alt='Firefox' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_edge2020.gif' title='Internet Explorer' alt='Internet Explorer' width='20' height='20'>
          <h3>Пример</h3>
          <p>Поле ввода, которое может содержать только три буквы (без цифр или специальных символов):</p>
          <div class='w3-code notranslate htmlHigh'>
              Country code: &lt;input type=&quot;text&quot; name=&quot;country_code&quot; pattern=&quot;[A-Za-z]{3}&quot; title=&quot;Three letter country code&quot;&gt;</div>
          <a class='w3-btn w3-margin-bottom' target='_blank' href='../htmltryit/tryit64dc.html?filename=tryhtml5_input_pattern'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Атрибут placeholder (заполнитель)</h2>
      <p>Атрибут <code class='w3-codespan'>placeholder</code> указывает подсказку, которая описывает ожидаемое значение поля ввода (примерное значение или краткое описание формата).</p>
      <p>Подсказка отображается в поле ввода до того, как пользователь введет значение.</p>
      <p>Атрибут <code class='w3-codespan'>placeholder</code> работает со следующими типами ввода: text, search, url, tel, email и password.</p>
      <div class='w3-example'>
          <img style='float:right;' src='../images/compatible_opera2020.gif' title='Opera' alt='Opera' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_safari2020.gif' title='Safari' alt='Safari' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_chrome2020.gif' title='Chrome' alt='Chrome' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_firefox2020.gif' title='Firefox' alt='Firefox' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_edge2020.gif' title='Internet Explorer' alt='Internet Explorer' width='20' height='20'>
          <h3>Пример</h3>
          <p>Поле ввода с заполнителем текста:</p>
          <div class='w3-code notranslate htmlHigh'>
              &lt;input type=&quot;text&quot; name=&quot;fname&quot; placeholder=&quot;First name&quot;&gt;</div>
          <a class='w3-btn w3-margin-bottom' target='_blank' href='../htmltryit/tryitf194.html?filename=tryhtml5_input_placeholder'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Атрибут required (требование)</h2>
      <p>Атрибут <code class='w3-codespan'>required</code> указывает, что поле ввода должно быть заполнено перед отправкой формы.</p>
      <p>Атрибут <code class='w3-codespan'>required</code> работает со следующими типами ввода: text, search, url, tel, email, password, date pickers, number, checkbox, radio и file.</p>
      <div class='w3-example'>
          <img style='float:right;' src='../images/compatible_opera2020.gif' title='Opera' alt='Opera' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_safari2020.gif' title='Safari' alt='Safari' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_chrome2020.gif' title='Chrome' alt='Chrome' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_firefox2020.gif' title='Firefox' alt='Firefox' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_edge2020.gif' title='Internet Explorer' alt='Internet Explorer' width='20' height='20'>
          <h3>Пример</h3>
          <p>Обязательное поле ввода:</p>
          <div class='w3-code notranslate htmlHigh'>
              Username: &lt;input type=&quot;text&quot; name=&quot;usrname&quot; required&gt;</div>
          <a class='w3-btn w3-margin-bottom' target='_blank' href='../htmltryit/tryitd22c.html?filename=tryhtml5_input_required'>Попробуйте сами &raquo;</a>
      </div>
      <hr>

      <h2>Атрибут step (шаг)</h2>
      <p>Атрибут <code class='w3-codespan'>step</code> определяет допустимые интервалы чисел (шаги) для элемента <code class='w3-codespan'>&lt;input&gt;</code>.</p>
      <p>Пример: если step=&quot;3&quot;, то допустимыми числами могут быть -3, 0, 3, 6 и т.д.</p>

      <div class='w3-panel w3-note'>
          <p><b>Совет:</b> Атрибут step может использоваться вместе с атрибутами max и min для создания диапазона допустимых значений.</p>
      </div>
      <p>Атрибут <code class='w3-codespan'>step</code> работает со следующими типами ввода: number, range, date, datetime-local, month, time и week.</p>
      <div class='w3-example'>
          <img style='float:right;' src='../images/compatible_opera2020.gif' title='Opera' alt='Opera' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_safari2020.gif' title='Safari' alt='Safari' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_chrome2020.gif' title='Chrome' alt='Chrome' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_firefox2020.gif' title='Firefox' alt='Firefox' width='20' height='20'>
          <img style='float:right;' src='../images/compatible_edge2020.gif' title='Internet Explorer' alt='Internet Explorer' width='20' height='20'>
          <h3>Пример</h3>
          <p>Поле ввода с указанными допустимыми числами интервалов:</p>
          <div class='w3-code notranslate htmlHigh'>
              &lt;input type=&quot;number&quot; name=&quot;points&quot; step=&quot;3&quot;&gt;</div>
          <a class='w3-btn w3-margin-bottom' target='_blank' href='../htmltryit/tryitec40.html?filename=tryhtml5_input_step'>Попробуйте сами &raquo;</a>
      </div>
      <hr>
      <h2>HTML Упражнения</h2>
      <form autocomplete='off' id='w3-exerciseform' action='https://www.w3schools.com/html/exercise.asp?filename=exercise_html_form_attributes1' method='post' target='_blank'>
          <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений</h2>
          <div class='exercisewindow'>
              <h2>Упражнение:</h2>
              <p>В поле ввода ниже добавьте заполнитель, который сообщает 'Your name here' (укажите своё имя).</p>
              <div class='exerciseprecontainer'>
                  &lt;form action='/action_page.php'&gt;
                  <br>
                  &lt;input type='text' <input name='ex1' spellcheck='false' maxlength='28' style='width: 284px;'>&gt;
                  <br>
                  &lt;/form&gt;
              </div>
              <br>
              <button type='submit' class='w3-btn w3-margin-bottom'>Отправить ответ &raquo;</button>
          </div>
      </form>
      <hr>

      <h2>HTML форма и элементы ввода</h2>
      <table class='w3-table-all notranslate'>
          <tr>
              <th>Тег</th>
              <th>Описание</th>
          </tr>
          <tr>
              <td><a href='../tags/tag_form.php'>&lt;form&gt;</a></td>
              <td>Определяет HTML форму для пользовательского ввода</td>
          </tr>
          <tr>
              <td><a href='../tags/tag_input.php'>&lt;input&gt;</a></td>
              <td>Определяет элемент управления вводом</td>
          </tr>
      </table>
      <div class='w3-note w3-panel'>
          <p>Для получения полного списка всех доступных тегов HTML, посетите <a href='../tags/index.php'>HTML Справочник тегов</a> на нашем сайте <strong>W3Schools на русском</strong>.</p>
      </div>
      <hr>
      <div class='w3-clear nextprev'>
          <a class='w3-left w3-btn' href='html_form_input_types.php'>&#10094; Prev</a>
          <a class='w3-right w3-btn' href='html_form_attributes_form.php'>Next &#10095;</a>
      </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>