<?php include '../include/head.php'; ?>

  <title>HTML Элементы формы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML Элементы формы. Какие бывают элементы форм? Как создаются формы на веб-страницах? Примеры кода. Как создать форму на сайте? <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML <span class='color_h1'>Элементы формы</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_forms_attributes.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_form_input_types.php'>Next &#10095;</a>
    </div>
    <hr>

    <p class='intro'>В этой главе описываются все <strong>элементы HTML формы</strong>.</p>
    <hr>

    <h2>Элемент &lt;input&gt;</h2>
    <p>Наиболее важным элементом формы является элемент <code class='w3-codespan'>&lt;input&gt;</code>.</p>
    <p>Элемент <code class='w3-codespan'>&lt;input&gt;</code> может отображаться несколькими способами, в зависимости от атрибута <code class='w3-codespan'>type</code>.</p>

    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;input name=&quot;firstname&quot; type=&quot;text&quot;&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit4324.html?filename=tryhtml_elem_input' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <div class='w3-panel w3-note'>
      <p>Если атрибут <code class='w3-codespan'>type</code> пропущен, поле ввода получает тип по умолчанию: &quot;text&quot;.</p>
    </div>
    <p>Все различные типы ввода описаны в следующей главе.
    </p>

    <hr>
    <h2>Элемент &lt;select&gt;</h2>
    <p>Элемент <code class='w3-codespan'>&lt;select&gt;</code> определяет <strong>drop-down список</strong> (раскрывающийся список):</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;select name=&quot;cars&quot;&gt;<br>&nbsp; &lt;option value=&quot;volvo&quot;&gt;Volvo&lt;/option&gt;<br>
        &nbsp;
        &lt;option value=&quot;saab&quot;&gt;Saab&lt;/option&gt;<br>&nbsp; &lt;option value=&quot;fiat&quot;&gt;Fiat&lt;/option&gt;<br>
        &nbsp;
        &lt;option value=&quot;audi&quot;&gt;Audi&lt;/option&gt;<br>&lt;/select&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitc4f4.html?filename=tryhtml_elem_select' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <p>Элемент <code class='w3-codespan'>&lt;option&gt;</code>определяет опцию, которая может быть выбрана.</p>
    <p>По умолчанию выбран первый элемент в раскрывающемся списке.</p>
    <p>Чтобы определить предварительно выбранный параметр, добавьте атрибут <code class='w3-codespan'>selected</code> к option: </p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;option value=&quot;fiat&quot; selected&gt;Fiat&lt;/option&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitc971.html?filename=tryhtml_elem_select_pre' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <h3>Видимые значения:</h3>
    <p>Используйте атрибут <code class='w3-codespan'>size</code> для указания количества видимых значений:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;select name=&quot;cars&quot; <strong>size=&quot;3&quot;</strong>&gt;<br>&nbsp; &lt;option value=&quot;volvo&quot;&gt;Volvo&lt;/option&gt;<br>
        &nbsp;
        &lt;option value=&quot;saab&quot;&gt;Saab&lt;/option&gt;<br>&nbsp; &lt;option value=&quot;fiat&quot;&gt;Fiat&lt;/option&gt;<br>
        &nbsp;
        &lt;option value=&quot;audi&quot;&gt;Audi&lt;/option&gt;<br>&lt;/select&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit4c22.html?filename=tryhtml_elem_select_size' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <h3>Разрешить множественный выбор:</h3>
    <p>Используйте атрибут <code class='w3-codespan'>multiple</code> позволяющий пользователю выбрать более одного значения:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;select name=&quot;cars&quot; size=&quot;4&quot;<strong> multiple</strong>&gt;<br>&nbsp; &lt;option value=&quot;volvo&quot;&gt;Volvo&lt;/option&gt;<br>
        &nbsp;
        &lt;option value=&quot;saab&quot;&gt;Saab&lt;/option&gt;<br>&nbsp; &lt;option value=&quot;fiat&quot;&gt;Fiat&lt;/option&gt;<br>
        &nbsp;
        &lt;option value=&quot;audi&quot;&gt;Audi&lt;/option&gt;<br>&lt;/select&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit4efd.html?filename=tryhtml_elem_select_multiple' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Элемент &lt;textarea&gt;</h2>
    <p>Элемент <code class='w3-codespan'>&lt;textarea&gt;</code> определяет многострочное поле ввода (<strong>текстовой области</strong>):</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;textarea name=&quot;message&quot; rows=&quot;10&quot; cols=&quot;30&quot;&gt;<br>The cat was playing in the garden.<br>&lt;/textarea&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitb083.html?filename=tryhtml_elem_textarea' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <p>Атрибут <code class='w3-codespan'>rows</code> определяет видимое количество строк в текстовой области.</p>
    <p>Атрибут <code class='w3-codespan'>cols</code> определяет видимую ширину текстовой области.</p>
    <p>Вот как HTML-код выше будет отображаться в браузере:</p>
    <textarea rows='10' cols='30'>
The cat was playing in the garden.
</textarea>
    <p>Вы также можете определить размер текстовой области с помощью CSS:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;textarea name=&quot;message&quot;
        style=&quot;width:200px; height:600px;&quot;&gt;<br>The cat was playing in the garden.<br>&lt;/textarea&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryita01d.html?filename=tryhtml_elem_textarea_style' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Элемент &lt;button&gt;</h2>
    <p>Элемент <code class='w3-codespan'>&lt;button&gt;</code> определяет кликабельную <strong>кнопку</strong>:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;button type=&quot;button&quot;
        onclick=&quot;alert('Hello World!')&quot;&gt;Click Me!&lt;/button&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit13bd.html?filename=tryhtml_elem_button' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <p>Вот как HTML-код выше будет отображаться в браузере:</p>
    <button type='button' onclick="alert('Hello World!')">Нажми меня!</button>
    <br>
    <div class='w3-panel w3-note'>
      <p><strong>Примечание:</strong> Всегда указывайте атрибут <strong>type</strong> для элемента кнопки. Различные браузеры могут использовать разные типы по умолчанию для элемента кнопки.
      </p>
    </div>
    <hr>

    <h2>HTML5 Элементы формы</h2>
    <p>HTML5 добавил следующие элементы формы:</p>
    <ul>
      <li><code class='w3-codespan'>&lt;datalist&gt;</code></li>
      <li><code class='w3-codespan'>&lt;output&gt;</code></li>
    </ul>
    <div class='w3-panel w3-note'>
      <p><strong>Примечание:</strong> Браузеры не отображают неизвестные элементы. Новые элементы, которые не поддерживаются в старых браузерах, не &quot;разрушат&quot; вашу веб-страницу.</p>
    </div>
    <hr>

    <h2>HTML5 элемент &lt;datalist&gt;</h2>
    <p>Элемент <code class='w3-codespan'>&lt;datalist&gt;</code> определяет список предопределенных параметров для элемента <code class='w3-codespan'>&lt;input&gt;</code>.</p>
    <p>Пользователи увидят раскрывающийся список предопределенных параметров при вводе данных.</p>
    <p>Атрибут <code class='w3-codespan'>list</code> элемента <code class='w3-codespan'>&lt;input&gt;</code> должен ссылаться на атрибут <code class='w3-codespan'>id</code> элемента <code class='w3-codespan'>&lt;datalist&gt;</code>.</p>
    <div class='w3-example'>
      <img style='float:right;' src='../images/compatible_opera2020.gif' title='Opera' alt='Opera' width='20' height='20'><img style='float:right;' src='../images/compatible_safari2020.gif' title='Safari' alt='Safari' width='20' height='20'><img style='float:right;' src='../images/compatible_chrome2020.gif' title='Chrome' alt='Chrome' width='20' height='20'><img style='float:right;' src='../images/compatible_firefox2020.gif' title='Firefox' alt='Firefox' width='20' height='20'><img style='float:right;' src='../images/compatible_edge2020.gif' title='Internet Explorer' alt='Internet Explorer' width='20' height='20'><h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form action=&quot;/action_page.php&quot;&gt;<br>&nbsp; &lt;input list=&quot;browsers&quot;&gt;<br>
        &nbsp;
        &lt;datalist id=&quot;browsers&quot;&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;option value=&quot;Internet Explorer&quot;&gt;<br>
        &nbsp;
        &nbsp; &lt;option value=&quot;Firefox&quot;&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;option value=&quot;Chrome&quot;&gt;<br>
        &nbsp;
        &nbsp; &lt;option value=&quot;Opera&quot;&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;option value=&quot;Safari&quot;&gt;<br>
        &nbsp;
        &lt;/datalist&gt; <br>&lt;/form&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit13d9.html?filename=tryhtml_elem_datalist' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr><h2>HTML5 элемент &lt;output&gt;</h2>
    <p>Элемент <code class='w3-codespan'>&lt;output&gt;</code> представляет результат вычисления (например, выполненный скриптом).</p>
    <div class='w3-example'>
      <img style='float:right;' src='../images/compatible_opera2020.gif' title='Opera' alt='Opera' width='20' height='20'><img style='float:right;' src='../images/compatible_safari2020.gif' title='Safari' alt='Safari' width='20' height='20'><img style='float:right;' src='../images/compatible_chrome2020.gif' title='Chrome' alt='Chrome' width='20' height='20'><img style='float:right;' src='../images/compatible_firefox2020.gif' title='Firefox' alt='Firefox' width='20' height='20'><img style='float:right;' src='../images/compatible_edge2020.gif' title='Internet Explorer' alt='Internet Explorer' width='20' height='20'><h3>Пример</h3>
      <p>Выполните расчет и покажите результат в элементе <code class='w3-codespan'>&lt;output&gt;</code>:</p>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form action=&quot;/action_page.php&quot;<br>&nbsp; oninput=&quot;x.value=parseInt(a.value)+parseInt(b.value)&quot;&gt;<br>&nbsp; 0<br>
        &nbsp;
        &lt;input type=&quot;range&quot;&nbsp; id=&quot;a&quot; name=&quot;a&quot; value=&quot;50&quot;&gt;<br>&nbsp; 100 +<br>
        &nbsp;
        &lt;input type=&quot;number&quot; id=&quot;b&quot; name=&quot;b&quot; value=&quot;50&quot;&gt;<br>&nbsp; =<br>
        &nbsp;
        &lt;output name=&quot;x&quot; for=&quot;a b&quot;&gt;&lt;/output&gt;<br>&nbsp; &lt;br&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;submit&quot;&gt;<br>
        &lt;/form&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit0e46.html?filename=tryhtml_elem_output' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>HTML Упражнения</h2>
    <form autocomplete='off' id='w3-exerciseform' action='https://www.w3schools.com/html/exercise.asp?filename=exercise_html_form_elements1' method='post' target='_blank'>
      <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений</h2>
      <div class='exercisewindow'>
        <h2>Упражнение:</h2>
        <p>В форме ниже добавьте пустой выпадающий список с именем 'cars'.</p>
        <div class='exerciseprecontainer'>
          &lt;form action='/action_page.php'&gt;
          <br>
          &lt;<input name='ex1' spellcheck='false' maxlength='18' style='width: 185px;'>&gt;
          <br>
          &lt;/<input name='ex2' spellcheck='false' maxlength='6' style='width: 66px;'>&gt;
          <br>
          &lt;/form&gt;
        </div>
        <br>
        <button type='submit' class='w3-btn w3-margin-bottom'>Отправить ответ &raquo;</button>
      </div>
    </form>
    <hr>

    <h2>HTML Элементы формы</h2>
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
      <tr>
        <td><a href='../tags/tag_textarea.php'>&lt;textarea&gt;</a></td>
        <td>Определяет многострочный элемент управления вводом (текстовая область)</td>
      </tr>
      <tr>
        <td><a href='../tags/tag_label.php'>&lt;label&gt;</a></td>
        <td>Определяет метку для элемента &lt;input&gt;</td>
      </tr>
      <tr>
        <td><a href='../tags/tag_fieldset.php'>&lt;fieldset&gt;</a></td>
        <td>Группирует связанные элементы в форме</td>
      </tr>
      <tr>
        <td><a href='../tags/tag_legend.php'>&lt;legend&gt;</a></td>
        <td>Определяет заголовок для элемента &lt;fieldset&gt;</td>
      </tr>
      <tr>
        <td><a href='../tags/tag_select.php'>&lt;select&gt;</a></td>
        <td>Определяет выпадающий (раскрывающийся) список</td>
      </tr>
      <tr>
        <td><a href='../tags/tag_optgroup.php'>&lt;optgroup&gt;</a></td>
        <td>Определяет группу связанных параметров в раскрывающемся списке</td>
      </tr>
      <tr>
        <td><a href='../tags/tag_option.php'>&lt;option&gt;</a></td>
        <td>Определяет параметр в раскрывающемся списке</td>
      </tr>
      <tr>
        <td><a href='../tags/tag_button.php'>&lt;button&gt;</a></td>
        <td>Определяет кликабельную кнопку</td>
      </tr>
      <tr>
        <td><a href='../tags/tag_datalist.php'>&lt;datalist&gt;</a></td>
        <td>Определяет список предопределенных параметров для элементов управления вводом</td>
      </tr>
      <tr>
        <td><a href='../tags/tag_output.php'>&lt;output&gt;</a></td>
        <td>Определяет результат расчета</td>
      </tr>
    </table>
    <div class='w3-note w3-panel'>
      <p>Для получения полного списка всех доступных тегов HTML, посетите наш <a href='../tags/index.php'>HTML Справочник тегов</a>.</p>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_forms_attributes.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_form_input_types.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>