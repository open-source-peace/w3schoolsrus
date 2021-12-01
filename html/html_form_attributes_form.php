<?php include '../include/head.php'; ?>

  <title>HTML Атрибуты формы Input. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML Форма. Атрибуты формы Input. Как создать форму на веб-странице? Какие бывают input атрибуты на веб-страницах? <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML <span class='color_h1'>Атрибуты Input form*</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_form_attributes.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_intro.php'>Next &#10095;</a>
    </div>
    <hr>

    <p class='intro'>В этой главе описываются различные атрибуты <code class='w3-codespan'>form*</code> для HTML элемента <code class='w3-codespan'>&lt;input&gt;</code>.</p>
    <hr>

    <h2>Атрибут form</h2>
    <p>Атрибут ввода <code class='w3-codespan'>form</code> определяет форму, к которой принадлежит элемент <code class='w3-codespan'>&lt;input&gt;</code>.</p>
    <p>Значение этого атрибута должно быть равно атрибуту <code class='w3-codespan'>id</code> элемента <code class='w3-codespan'>&lt;form&gt;</code>, которому он принадлежит.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Поле ввода, расположенное за пределами HTML-формы (но все еще являющееся частью формы):</p>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form action=&quot;/action_page.php&quot; id=&quot;form1&quot;&gt;<br>&nbsp; &lt;label for=&quot;fname&quot;&gt;First
        name:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;fname&quot; name=&quot;fname&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp;
        &lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;<br>&lt;/form&gt;<br><br>&lt;label for=&quot;lname&quot;&gt;Last name:&lt;/label&gt;<br>&lt;input type=&quot;text&quot; id=&quot;lname&quot;
        name=&quot;lname&quot; form=&quot;form1&quot;&gt;<br>
      </div>
      <a class='w3-btn w3-margin-bottom' target='_blank' href='../htmltryit/tryit1577.html?filename=tryhtml5_input_form'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Атрибут formaction</h2>
    <p>Атрибут ввода <code class='w3-codespan'>formaction</code> указывает URL-адрес файла, который будет обрабатывать ввод при отправке формы.</p>
    <p><strong>Примечание:</strong> Этот атрибут переопределяет атрибут <code class='w3-codespan'>action</code> элемента <code class='w3-codespan'>&lt;form&gt;</code>.</p>
    <p>Атрибут <code class='w3-codespan'>formaction</code> работает со следующими типами ввода: submit и image.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>HTML-форма с двумя кнопками отправки с разными действиями:</p>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form action=&quot;/action_page.php&quot;&gt;<br>&nbsp; &lt;label for=&quot;fname&quot;&gt;First
        name:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;fname&quot; name=&quot;fname&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp;
        &lt;label for=&quot;lname&quot;&gt;Last name:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;lname&quot;
        name=&quot;lname&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;<br>&nbsp;
        &lt;input type=&quot;submit&quot; formaction=&quot;/action_page2.php&quot; value=&quot;Submit as Admin&quot;&gt;<br>
        &lt;/form&gt; </div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryita145.html?filename=tryhtml5_input_formaction' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Атрибут formenctype</h2>
    <p>Атрибут ввода <code class='w3-codespan'>formenctype</code> указывает, как данные формы должны быть закодированы при отправке (только для форм с method=&quot;post&quot;).</p>
    <p><strong>Примечание:</strong> Этот атрибут переопределяет атрибут enctype элемента <code class='w3-codespan'>&lt;form&gt;</code>.</p>
    <p>Атрибут <code class='w3-codespan'>formenctype</code> работает со следующими типами ввода: submit и image.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Форма с двумя кнопками отправки. Первый отправляет данные формы с кодировкой по умолчанию, второй отправляет данные формы, закодированные как &quot;multipart/form-data&quot;:</p>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form action=&quot;/action_page_binary.asp&quot; method=&quot;post&quot;&gt;<br>&nbsp; &lt;label for=&quot;fname&quot;&gt;First
        name:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;fname&quot; name=&quot;fname&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp;
        &lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;<br>&nbsp; &lt;input type=&quot;submit&quot;
        formenctype=&quot;multipart/form-data&quot;<br>&nbsp; value=&quot;Submit as
        Multipart/form-data&quot;&gt;<br>&lt;/form&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' target='_blank' href='../htmltryit/tryit339d.html?filename=tryhtml5_input_formenctype'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Атрибут formmethod</h2>
    <p>Атрибут ввода <code class='w3-codespan'>formmethod</code> определяет HTTP метод для отправки данных формы на action URL.</p>
    <p><strong>Примечание:</strong> Этот атрибут переопределяет атрибут method элемента <code class='w3-codespan'>&lt;form&gt;</code>.</p>
    <p>Атрибут <code class='w3-codespan'>formmethod</code> работает со следующими типами ввода: submit и image.</p>
    <p>Данные формы могут быть отправлены как URL переменные (method=&quot;get&quot;) или как HTTP post транзакция (method=&quot;post&quot;).</p>
    <p><strong>Примечания к методу &quot;get&quot;:</strong></p>
    <ul>
      <li>Этот метод добавляет данные формы к URL-адресу в парах имя/значение</li>
      <li>Этот метод полезен для отправки форм, когда пользователь хочет добавить результат в закладки</li>
      <li>Существует ограничение на количество данных, которые вы можете разместить в URL-адресе (в зависимости от браузера), поэтому вы не можете быть уверены, что все данные формы будут правильно переданы</li>
      <li>Никогда не используйте метод &quot;get&quot; для передачи конфиденциальной информации! (пароль или другая конфиденциальная информация будет видна в адресной строке браузера)</li>
    </ul>
    <p><strong>Примечания к методу &quot;post&quot;:</strong></p>
    <ul>
      <li>Этот метод отправляет данные формы как HTTP post транзакция</li>
      <li>Форму, отправленную с помощью метода &quot;post&quot; нельзя пометить закладками</li>
      <li>Метод &quot;post&quot; более надежен и безопасен, чем метод &quot;get&quot;, и &quot;post&quot; не имеет ограничений по размеру</li>
    </ul>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Форма с двумя кнопками отправки. Первая отправляет данные формы с method=&quot;get&quot;. Вторая отправляет данные формы с method=&quot;post&quot;:</p>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form action=&quot;/action_page.php&quot; method=&quot;get&quot;&gt;<br>&nbsp; &lt;label for=&quot;fname&quot;&gt;First name:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;fname&quot; name=&quot;fname&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp;
        &lt;label for=&quot;lname&quot;&gt;Last name:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;lname&quot; name=&quot;lname&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;submit&quot; value=&quot;Submit using GET&quot;&gt;<br>&nbsp; &lt;input type=&quot;submit&quot; formmethod=&quot;post&quot; value=&quot;Submit using POST&quot;&gt;<br>&lt;/form&gt; </div>
      <a class='w3-btn w3-margin-bottom' target='_blank' href='../htmltryit/tryit0d88.html?filename=tryhtml5_input_formmethod'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Атрибут formtarget</h2>
    <p>Атрибут ввода <code class='w3-codespan'>formtarget</code> определяет имя или ключевое слово, указывающее, где отображать ответ, полученный после отправки формы.</p>
    <p><strong>Примечание:</strong> Этот атрибут переопределяет целевой атрибут элемента <code class='w3-codespan'>&lt;form&gt;</code>.</p>
    <p>Атрибут <code class='w3-codespan'>formtarget</code> работает со следующими типами ввода: submit и image.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Форма с двумя кнопками отправки с разными целевыми окнами:</p>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form action=&quot;/action_page.php&quot;&gt;<br>&nbsp; &lt;label for=&quot;fname&quot;&gt;First
        name:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;fname&quot; name=&quot;fname&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp;
        &lt;label for=&quot;lname&quot;&gt;Last name:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;lname&quot;
        name=&quot;lname&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;<br>&nbsp;
        &lt;input type=&quot;submit&quot; formtarget=&quot;_blank&quot; value=&quot;Submit to a new window/tab&quot;&gt;<br>
        &lt;/form&gt; </div>
      <a class='w3-btn w3-margin-bottom' target='_blank' href='../htmltryit/tryite252.html?filename=tryhtml5_input_formtarget'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Атрибут formnovalidate</h2>
    <p>Атрибут ввода <code class='w3-codespan'>formnovalidate</code> указывает, что элемент <code class='w3-codespan'>&lt;input&gt;</code> не должен проверяться при отправке.</p>
    <p><strong>Примечание:</strong> Этот атрибут переопределяет атрибут <code class='w3-codespan'>novalidate</code> элемента <code class='w3-codespan'>&lt;form&gt;</code>.</p>
    <p>Атрибут <code class='w3-codespan'>formnovalidate</code> работает со следующими типами ввода: submit.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Форма с двумя кнопками отправки (с проверкой и без проверки):</p>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form action=&quot;/action_page.php&quot;&gt;<br>&nbsp; &lt;label for=&quot;email&quot;&gt;Enter your
        email:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;email&quot; id=&quot;email&quot; name=&quot;email&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp;
        &lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;<br>&nbsp; &lt;input type=&quot;submit&quot;
        formnovalidate=&quot;formnovalidate&quot;<br>&nbsp; value=&quot;Submit without validation&quot;&gt;<br>
        &lt;/form&gt; </div>
      <a class='w3-btn w3-margin-bottom' target='_blank' href='../htmltryit/tryitaffe.html?filename=tryhtml5_input_formnovalidate'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Атрибут novalidate Attribute</h2>
    <p>Атрибут <code class='w3-codespan'>novalidate</code> является атрибутом <code class='w3-codespan'>&lt;form&gt;</code>.</p>
    <p>Когда присутствует, <code class='w3-codespan'>novalidate</code> указывает, что все данные формы не должны проверяться при отправке.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Укажите, что данные формы не должны проверяться при отправке:</p>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form action=&quot;/action_page.php&quot; novalidate&gt;<br>&nbsp; &lt;label
        for=&quot;email&quot;&gt;Enter your email:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;email&quot;
        id=&quot;email&quot; name=&quot;email&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;submit&quot;
        value=&quot;Submit&quot;&gt;<br>&lt;/form&gt; </div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit7b60.html?filename=tryhtml5_form_novalidate' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HTML-форма и элементы ввода</h2>
    <table class='w3-table-all notranslate'>
      <tr>
        <th>Тег</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td><a href='../tags/tag_form.php'>&lt;form&gt;</a></td>
        <td>Определяет HTML-форму для ввода пользователем</td>
      </tr>
      <tr>
        <td><a href='../tags/tag_input.php'>&lt;input&gt;</a></td>
        <td>Определяет элемент управления вводом</td>
      </tr>
    </table>
    <div class='w3-note w3-panel'>
      <p>Для получения полного списка всех доступных тегов HTML посетите полный <a href='../tags/index.php'>HTML Справочник тегов</a> на нашем сайте <strong>W3Schools на русском</strong>.</p>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_form_attributes.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_intro.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>